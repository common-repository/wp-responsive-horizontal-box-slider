<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wp_Responsive_Horizontal_Box_Slider
 * @subpackage Wp_Responsive_Horizontal_Box_Slider/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Responsive_Horizontal_Box_Slider
 * @subpackage Wp_Responsive_Horizontal_Box_Slider/admin
 * @author     Tuhin Mahmud <kmtuhin@live.com>
 */
class Wp_Responsive_Horizontal_Box_Slider_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Responsive_Horizontal_Box_Slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Responsive_Horizontal_Box_Slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

        // Custom Admin Stylesheet
        wp_enqueue_style( $this->plugin_name.'-main-css', plugin_dir_url( __FILE__ ) . 'css/wp-responsive-horizontal-box-slider-admin.css', array(), $this->version, 'all' );

        // Wrdpress Color Picket Stylesheet
        wp_enqueue_style( 'wp-color-picker' );





	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Responsive_Horizontal_Box_Slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Responsive_Horizontal_Box_Slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name.'-main-js', plugin_dir_url( __FILE__ ) . 'js/wp-responsive-horizontal-box-slider-admin.js', array( 'jquery' ), $this->version, false );

        // Include our custom jQuery file with WordPress Color Picker dependency
        wp_enqueue_script( 'custom-script-handle', plugins_url( 'js/custom-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	}
    /**
     * Settings API
     *
     *
     */






}
