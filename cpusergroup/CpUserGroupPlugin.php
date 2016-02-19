<?php
namespace Craft;

class CpUserGroupPlugin extends BasePlugin
{

	private $_bodyClasses = array();

	public function init()
	{
		parent::init();

		// If control panel page
		if (craft()->request->isCpRequest()) {

			// Set classes for logged-in user
			$this->_setUserGroupClasses();

			// Set classes of profile being viewed (if applicable)
			$this->_setProfileClasses();
		}

		// If any body classes have been set
		if (!empty($this->_bodyClasses)) {

			// Apply to template variables
			craft()->urlManager->setRouteVariables(array(
				'bodyClass' => implode(' ', $this->_bodyClasses)
			));

		}
	}

	public function getName()
	{
		return Craft::t('Control Panel User Group');
	}

	public function getDescription()
	{
		return 'Adds user group classes to the Control Panel\'s <body> tag.';
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-cpusergroup';
	}

	public function getVersion()
	{
		return '1.1.0';
	}

	public function getSchemaVersion()
	{
		return '1.1.0';
	}

	public function getDeveloper()
	{
		return 'Double Secret Agency';
	}

	public function getDeveloperUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-cpusergroup';
		//return 'http://doublesecretagency.com';
	}

	// ======================================================================== //

	private function _setClasses($user, $prefix)
	{
		// Get their user groups
		foreach ($user->getGroups() as $group) {
			$this->_bodyClasses[] = $prefix.'-'.$group->handle;
		}

		// Identify users that are admins
		if ($user['admin']) {
			$this->_bodyClasses[] = $prefix.'-'."admin";
		}
	}

	private function _setUserGroupClasses()
	{
		// Get current user
		$user = craft()->userSession->getUser();

		// If user is logged in
		if ($user) {
			$this->_setClasses($user, 'usergroup');
		}
	}

	private function _setProfileClasses()
	{
		// Get URL segments
		$page   = craft()->request->getSegment(1);
		$userId = craft()->request->getSegment(2);

		// If currently viewing a profile
		if (('users' == $page) && is_numeric($userId)) {

			// Get user in profile
			$user = craft()->users->getUserById($userId);

			// If profile user is valid
			if ($user) {
				$this->_setClasses($user, 'profile');
			}
		}
	}

}
