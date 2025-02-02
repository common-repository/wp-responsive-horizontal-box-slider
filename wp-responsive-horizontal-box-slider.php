<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Wp_Responsive_Horizontal_Box_Slider
 *
 * @wordpress-plugin
 * Plugin Name:       Wp Responsive Horizontal Slider
 * Plugin URI:        example.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.1
 * Author:            Khaled Mahmud
 * Author URI:        http://codenoon.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-responsive-horizontal-box-slider
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-responsive-horizontal-box-slider-activator.php
 */
function activate_wp_responsive_horizontal_box_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-responsive-horizontal-box-slider-activator.php';
	Wp_Responsive_Horizontal_Box_Slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-responsive-horizontal-box-slider-deactivator.php
 */
function deactivate_wp_responsive_horizontal_box_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-responsive-horizontal-box-slider-deactivator.php';
	Wp_Responsive_Horizontal_Box_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_responsive_horizontal_box_slider' );
register_deactivation_hook( __FILE__, 'deactivate_wp_responsive_horizontal_box_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-responsive-horizontal-box-slider.php';

require plugin_dir_path( __FILE__ ) . 'widget/wprhbs-widget.php';
/**
 * Settings Api
 *
 * Returning All Fields & Tabs
 */
require plugin_dir_path( __FILE__ ) . 'settings-api/plugin.php';

//require plugin_dir_path( __FILE__ ) . 'settings-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_responsive_horizontal_box_slider() {

	$plugin = new Wp_Responsive_Horizontal_Box_Slider();
	$plugin->run();

}
run_wp_responsive_horizontal_box_slider();


