=== iOS Icon Renderer ===
Contributors: Kashiv
Donate link: http://kashiv.com/
Tags: ios, icon, renderer, render, iphone, icon, styler
Requires at least: 2.5
Tested up to: 3.3.1
Stable tag: trunk

Add a [ios_icon] shortcode to make it easier to display iOS icons without rendering them first in a graphical application. Uses CSS3.

== Description ==

This plugin activates `[ios_icon]` shortcode allowing you to place iOS apps' icons without rendering their corner radius and shadow in Photoshop.

Available attributes of shortcode:

*   **size** - tells how big is the icon. (e.g. 57, 72, 114, 512) Default is 57.
*   **url** - URL of the image
*   **shadow_color** - CSS-styled color of the shadow (e.g. #000, #ab67fc, rgba(0, 0, 0, 0.4)) Default is #000.
*   **style** - additional CSS style for element. Here you can add float, margin, border, etc.

Example:

`[ios_icon size="114" url="http://yourdomain.com/path/to/114-icon.png" style="float:right;margin:0 0 12px 12px;border:1px solid rgba(0, 0, 0, 0.2);" shadow_color="red"]`

== Installation ==

1. Upload `ios-icon-renderer/` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `[ios_icon]` shortcode in your post

== Frequently Asked Questions ==

= Does this plugin use overlay images? =

No. Everything is based od CSS3 styling.

= Which browsers are supported? =

*   Mozilla Firefox 5.0 or later
*   Safari 5.0 or later
*   Opera 10 or later
*   Google Chrome 13 or later
*   Internet Explorer 9.0 or later
*   ... and any other browser that supports CSS3

== Screenshots ==

1. Icons rendered via iOS Icon Renderer (using Safari 5.1 Mac)

== Changelog ==

= 1.0 =
* Initial release