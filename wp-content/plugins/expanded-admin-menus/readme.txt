=== Expanded Admin Menus ===
Contributors: aaroncampbell
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8U5SMMBEEWLYY
Tags: admin, admin menus
Requires at least: 3.3
Tested up to: 3.3
Stable tag: 0.0.3

Allows you to expand admin menus similar to WordPress 3.2

== Description ==

WordPress 3.3 introduced new flyout admin menus.  If you prefer to be able to
choose to have some menu items expanded this plugin will let you.  Closed menu
items still flyout.  Open items are saved in a cookie, so while they persist,
they don't persist from browser to browser.  JavaScript is required.

== Installation ==

1. Upload the whole directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where are the settings? =

There aren't any!  Just install and activate the plugin and enjoy always-expanded
admin menus.  You can't get much simpler than that!

== Upgrade Notice ==

= 0.0.3 =
Fix a small issue that some beta-testers had since I changed how I was storing settings.

= 0.0.2 =
Adds arrows to allow you to expand/contract and stores state in a cookie

== Changelog ==

= 0.0.3 =
* Fix error beta-testers were getting if their setting wasn't valid JSON

= 0.0.2 =
* Add expand/contract arrows
* Store open/closed items in a cookie for persistance

= 0.0.1 =
* Original Version - uses jQuery and CSS to keep admin menus expanded.
