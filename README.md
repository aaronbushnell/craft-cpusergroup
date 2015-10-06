Control Panel User Group plugin for Craft CMS
======================================

_Add user group classes to the CP's `<body>` tag._

## Usage

So simple to use... just install it!

The plugin will automatically add classes to the `<body>` tag in the control panel. You can use CSS or JS, along with these classes, to target DOM elements and manipulate the page.

## What It Does

Classes will automatically be applied to the `<body>` tag. User group _handles_ are used to generate the classes. This only affects the control panel... your front-end pages will be unaffected.

For the every page in the control panel, classes will be applied based on the user group(s) of **the currently logged-in user**.

    <body class="usergroup-myGroup">

For the Account/Profile page of the control panel, classes will be applied based on the user group(s) of **the profile being viewed**.

    <body class="profile-theirGroup">

If the currently logged-in user (or the profile being viewed) is a member of multiple user groups, then each class will be applied individually.

    <body class="usergroup-firstGroup usergroup-secondGroup profile-firstGroup">

## Why?

Because there are a million things that you may want to do in your control panel, and many of them need to affect **only certain groups**. This plugin is designed to pair perfectly with [Control Panel CSS](https://github.com/lindseydiloreto/craft-cpcss) and/or [Control Panel JS](https://github.com/lindseydiloreto/craft-cpjs). (You can include CSS/JS in your own plugin as well!)

## Common Uses

With some supplementary help from CSS or JS, you can:

 - Show, hide, or manipulate entry fields for certain groups.
 - Show, hide, or manipulate any other control panel elements.
 - Provide completely different CSS for different groups.
 - ... and just about anything else you can envision!

***

## Disclaimer

It's important to note that showing/hiding fields via CSS/JS is **purely cosmetic**. Those fields may remain accessible to a savvy user, so don't rely on this plugin to guarantee access/denial of any DOM elements. **We accept no liability for any security issues arising from the use of this plugin.**