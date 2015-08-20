Control Panel User Group plugin for Craft CMS
======================================

_Add user group classes to the CP's `<body>` tag._

## Usage

So simple to use... just install it! This will automatically add classes to the `<body>` tag for each user group that the current user is a member of.

    <body class="usergroup-myFirstGroup usergroup-mySecondGroup">
    
Each class will follow the format of `usergroup-myGroupHandle`.

_(This only affects the control panel... Your front-end pages will be unaffected.)_

## Why?

Because there are a million things that you may want to do in your control panel, and many of them need to affect **only certain groups**. This plugin is designed to pair perfectly with [Control Panel CSS](https://github.com/lindseydiloreto/craft-cpcss) and/or [Control Panel JS](https://github.com/lindseydiloreto/craft-cpjs). (You can include CSS/JS in your own plugin as well!)

## Common Uses

With some supplementary help from CSS or JS, you can:

 - Show/hide entry fields for certain groups.
 - Show/hide any other control panel elements.
 - Provide completely different CSS for different groups.
 - ... and just about anything else you can envision!

***

## Disclaimer

It's important to note that showing/hiding fields via CSS/JS is **purely cosmetic**. Those fields may remain accessible to a savvy user, so don't rely on this plugin to guarantee access/denial of any DOM elements. **We accept no liability for any security issues arising from the use of this plugin.**