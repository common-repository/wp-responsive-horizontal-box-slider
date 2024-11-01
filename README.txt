=== Plugin Name ===
Contributors: kmtuhin
Donate link: http://codenoon.com/donate
Tags: slider, horizontal slider, horizontal box slider
Requires at least: 4.x
Tested up to: 4.8
Stable tag: 4.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP Responsive Horizontal Box Slider

== Description ==

WP Responsive Horizontal Box Slider  will display a number of image slides into a slider from a speicific category.

There are 5 types of slide you can use:
1) Responsive
2) Locked
3) Large Width
4) Move Slide
5) Start Different



== Installation ==


1. Upload `wp-responsive-horizontal-box-slider.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `[wprhbs]` or [wprhbs type="x" catid="x" display_title="x"] in your post or pages
1. Place `<?php echo do_shortcode('[wprhbs]'); ?>` or  `<?php echo do_shortcode('[wprhbs type="x" catid="x" display_title="x"]'); ?>`  in your tamplate.



== Frequently Asked Questions ==

= How to use? =


Go to settings option you will see "WP Responsive Horizontal Box Slider" in your settings menu. Choose your category, Slider Type and colors.
If you want you can display or hide the Post title from your slider.

* Use this shortcode in your post or pages  [wprhbs]
* Shortcode with parameter [wprb type="largewidth" catid="1" display_title="yes"]
    1) type: responsive, lockedslider, largewidth, moveslide, startdifferent
    2) catid: any category id
    3) display_title: yes or no

* For Template use this  `<?php echo do_shortcode('[wprhbs]'); ?>`
* For Template With Parameter `<?php echo do_shortcode('[wprb type="largewidth" catid="1" display_title="yes"]'); ?>`
    1) type: responsive, lockedslider, largewidth, moveslide, startdifferent
    2) catid: any category id
    3) display_title: yes or no

If you want to use this slider in your widget. Go to Appearance > Widget, you will see "WP Responsive Horizontal Box Slider" widget box. Drag and Drop it in your
desired widget location.

* Select Your Category
* Select Type
* Select yes or no to display the post title in your content



== Screenshots ==

1. Responsive Type Slide
2. Locked Type Slide
3. Large Width Slide
4. Move Type Slide
5. Infinite Type Slide
6. Start With Different Type Slide
7. Slider Settings
8. Widget settings



== Changelog ==

* First Release
* Version 1.0.1 Relseased on 29/10/2017

== Upgrade Notice == 

* Upgrade will be available soon