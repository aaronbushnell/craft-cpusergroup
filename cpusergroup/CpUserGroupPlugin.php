<?php
namespace Craft;

class CpUserGroupPlugin extends BasePlugin
{

	public function init()
	{
		parent::init();
		if (craft()->request->isCpRequest()) {
			$this->_addBodyClass();
		}
	}

	public function getName()
	{
		return Craft::t('Control Panel User Group');
	}

	public function getVersion()
	{
		return '0.9.9';
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

	private function _addBodyClass()
	{
		// Get current user
		$user = craft()->userSession->getUser();
		// If user is logged in
		if ($user) {
			// Get their user groups
			$usergroups = array();
			foreach ($user->getGroups() as $group) {
				$usergroups[] = 'usergroup-'.$group->handle;
			}
			// Set body class from user groups
			craft()->urlManager->setRouteVariables(array(
				'bodyClass' => implode(' ', $usergroups)
			));
		}
	}
	
}
