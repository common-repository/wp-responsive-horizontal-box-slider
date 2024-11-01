<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wp_Responsive_Horizontal_Box_Slider
 * @subpackage Wp_Responsive_Horizontal_Box_Slider/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Responsive_Horizontal_Box_Slider
 * @subpackage Wp_Responsive_Horizontal_Box_Slider/public
 * @author     Tuhin Mahmud <kmtuhin@live.com>
 */
class Wp_Responsive_Horizontal_Box_Slider_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

        // adding basic shortcode
        add_shortcode('wprhbs',array( $this,'wprhbs_basic' ));

      // adding extra shortcode
        add_shortcode('wprhbsextra',array( $this,'wprhbs_extra' ));
     // adding manual shortcode
     // add_shortcode('wprhbs-manual',array( $this, 'wprhbs_manual_shortcode'));

     // Adding Action to manual shortcode
     // add_action('wprhbs-manual',array( $this,'wprhbs_basic' ));

     // Adding filter for Widget display
    //  add_filter('wprhbs_widget_slider',array($this,'wprhbs_widget_filter'),10,3);


	}


    /**
     * WP Responsive Horizontal Box Slider Shortcode function
     *
     * @return string
     */

   public function  wprhbs_basic( $attr ){

    // Getting Saved Settings from Database
    $wprhbs_settings  = get_option( 'wprhbs_settings' ) ;

 // print_r( $wprhbs_settings );
       extract(shortcode_atts(array(
           'type'	=> $wprhbs_settings[ 'wprhstype' ],
           'catid'	=> $wprhbs_settings[ 'wprhcategorylist' ],
           'display_title'	=>  $wprhbs_settings[ 'wprhpostheading' ]

       ), $attr ));


    //using in files under Partials Folder

    require_once plugin_dir_path( __FILE__ ) . 'partials/wp-responsive-horizontal-box-slider-public-display.php';

    return   wprhbs::SliderLoader( $type, $catid,$display_title ); // Loading  Slider


}


    /**
     * Adding Widget Attributes
     *
     * @param $attr
     * @return string
     */
    public static function  wprhbs_widget_filter( $attr ){

       // Extract the array values in shortcode_attr function after checking valid parameters

        extract(shortcode_atts(array(
            'type'	=> 'resposive',
            'catid'	=> '1',
            'display_title'	=> 'no'

        ), $attr ));

        //using in files under Partials Folder
        require_once plugin_dir_path( __FILE__ ) . 'partials/wp-responsive-horizontal-box-slider-public-display.php';

        return   wprhbs::SliderLoader( $type, $catid, $display_title ); // Loading  Slider
    }
	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name.'wprhbs-custom-css', plugin_dir_url( __FILE__ ) . 'css/wp-responsive-horizontal-box-slider-public.css', array(), $this->version, 'all' );
        wp_enqueue_style( $this->plugin_name.'wprhbs-slider-css', plugin_dir_url( __FILE__ ) . 'css/jquery.bxslider.css', array(), $this->version, 'all' );

}


	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name.'custom-js',             plugin_dir_url( __FILE__ ) . 'js/wp-responsive-horizontal-box-slider-public.js', array( 'jquery' ), $this->version, false );
        wp_enqueue_script( $this->plugin_name.'wprhbs-jquery',         plugin_dir_url( __FILE__ ) . 'js/jquery.bxslider.js', array( 'jquery' ), $this->version, false );
     //   wp_enqueue_script( $this->plugin_name.'wprhbs-jquery-min',     plugin_dir_url( __FILE__ ) . 'js/jquery.bxslider.min.js', array( 'jquery' ), $this->version, false );
    //    wp_enqueue_script( $this->plugin_name.'wprhbs-jquery-easing',  plugin_dir_url( __FILE__ ) . 'js/lib/jquery.easing.1.3.js', array( 'jquery' ), $this->version, false );
     //   wp_enqueue_script( $this->plugin_name.'wprhbs-jquery-fitvids', plugin_dir_url( __FILE__ ) . 'js/lib/jquery.fitvids.js', array( 'jquery' ), $this->version, false );

}


    /**
     * Getting optiongs saved by user and     *
     * Adding Inline stylesheet
     */

    function wprhbs_dynamic_styles() {
      //  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom-style.css' );

        $wprhbs_settings  = get_option( 'wprhbs_settings' ) ;

        //sprint_r( $wprhbs_settings );


// CSS for Slider Post Title
        $wprhbs = '.slide .wprhbs-heading a{';

        if( isset( $wprhbs_settings['wprhpostheading'] ) ):

            $wprhbs .= 'color           : '.$wprhbs_settings['wprhtitlecolor'] .';';

        else:

            $wprhbs .= 'color           : #fff;';

        endif;

            $wprhbs .= 'font-size       : 16px;';
            $wprhbs .= 'margin          : 0;';
            $wprhbs .= 'padding         : 0;';

        if(isset($wprhbs_settings['wprhpostheading'])):

            $wprhbs .= 'background-color: '.$wprhbs_settings['wprhtitlebackgroundcolor'] .';';

        else:

            $wprhbs .= 'background-color: #4D94FF;';

        endif;

            $wprhbs .= 'width           : 100%;';
            $wprhbs .= 'height          : 35px;';
            $wprhbs .= 'display         : block;';
            $wprhbs .= 'border-bottom   : 1px solid #fff;';
            $wprhbs .= 'padding         : 4px;';
            $wprhbs .= 'position        : absolute;';
            $wprhbs .= 'bottom          : 0';


        $wprhbs .= '  } ';




        wp_add_inline_style( $this->plugin_name.'wprhbs-custom-css', $wprhbs );
    }





}
