=== My Courses Endpoint for WooCommerce ===
Contributors: flyplugins
Donate link: http://flyplugins.com/donate
Tags: fly plugins,woocommerce,wp courseware
Requires at least: 4.0
Tested up to: 4.5.3
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This WordPress plugin adds a "My Courses" endpoint to the WooCommerce My Account page.

== Description ==
[Fly Plugins](http://flyplugins.com) presents [My Courses Endpoint for WooCommerce](http://www.woothemes.com/woocommerce/).

= Need to add a My Courses tab to your My Account page? =
This plugin will allow you to add a new tab called "My Courses" to the My Account Page.

= Basic Configuration Steps =
1. Install and activate the plugin
2. Create a page with a slug "my-courses" (make sure it is not a child-page). You can modify the slug, however you will need to modfiy line 19 of the main plugin file.
3. Add the [wpcourse_progress] shortcode in the main body of the page.
4. Save your page.

= Check out Fly Plugins =
For more info about Fly Plugins Free and Premium Plugins, check out the following links:

* [WP Courseware LMS plugin for WordPress](http://wpcourseware.com/) - The best LMS online for WordPress.
* [S3 Media Maestro](http://s3mediamaestro.com/) - Amazon S3 link encryption with HTML5 supported media player. Flash free & iDevice ready. Your media is now protected..
* Follow Fly Plugins on [Facebook](http://facebook.com/flyplugins) 
* Check out the Fly Plugins [YouTube](http://www.youtube.com/flyplugins) channel.

= Disclaimer =
This is not an actual membership plugin. It is only the integration, or “middle-man” between WP Courseware and WooCommerce.

== Installation ==

1. Upload the `WooCommerce for WP Courseware addon` folder into the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently asked questions ==

= Can I modify the slug of the My Courses page? =

Yes! Simply modify line 19 of the main plugin file to match your slug. Take note that the default permalink structure for the endpoints is /account/***, so if you want to move up to the root level you will need to prefix with "../". 

= Can you modify the name of the endpoint? =

Yes! On line 45 and 65 of the main plugin file, simply change the "My Courses" text.

= Where can I get WP Courseware? =

Click here to get the [Best WordPress LMS Plugin](http://wpcourseware.com).

= Where can I get WooCommerce for WordPress? =

Click here to get [WooCommerce](http://www.woothemes.com/woocommerce/).

== Screenshots ==

1. The Course Access Settings screen will display which products are associated with which courses

2. This is the actual configuration screen where you can select courses that will be associated with a particular product as well as retroactively assign courses to current customers

== Changelog ==

= 1.0 =
* Initial release


== Upgrade notice ==

