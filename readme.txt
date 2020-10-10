=== Photocopier ===
Contributors: kjellr
Tags: photocopy, Gutenberg, blocks, filter, block style
Requires at least: 5.0
Tested up to: 5.5.1
Requires PHP: 5.2.4
Stable tag: trunk
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Make your blocks look like photocopies.

== Description ==

This plugin adds a block style called "Photocopy" to the Image, Gallery, and Media & Text blocks. When applied, it roughly emulates the look of a high-contrast photocopy. 

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the "Plugins" screen in WordPress
3. Select an Image, Gallery, or Media & Text block. 
4. Using either the block switcher or the block settings, choose the \"Photocopy\" block style. 

== Frequently Asked Questions ==

= How does this work? =

The block style applies a handful of CSS filters to your images. It looks kind of like a photocopy. 

= Are there any known issues? =

- It doesn't play great with Image block captions at the moment. The overlay pattern sometimes shows up behind it. 
- The warped styles cut off the resize drag handles.

= Can I contribute to this plugin? =

- Of course! It's open source. Visit the [GitHub repository](https://github.com/kjellr/photocopier) to browse the code or submit ideas. 

== Changelog ==
= 1.2 =
* Adds an experimental "Warped" block style.
* Improved rendering of the pattern on different screen resolutions. 

= 1.1 =
* Improved Pattern
* Fix the way the pattern maps to the image. 

= 1.0 =
* Initial Release
