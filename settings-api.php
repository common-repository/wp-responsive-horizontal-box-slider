<?php


require_once dirname( __FILE__ ) . '/class.settings-api.php';

/**
 * WordPress settings API demo class
 *
 * @author Tareq Hasan
 */
class WeDevs_Settings_API_Test {

    private $settings_api;

    function __construct() {
        $this->settings_api = WeDevs_Settings_API::getInstance();

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {

        // Creating Option Page
        add_options_page( 'WP RHBS Settings', 'Wordpress Responsive Horizontal Box Slider', 'delete_posts', 'wprhbs-settings', array($this, 'plugin_page') );
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id' => 'wprhbs_settings',
                'title' => __( 'WP RHBS Settings', 'wprbhbs' )
            )
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {

        // Category Arguments
        $args = array(
            'orderby' => 'name',
            'order' => 'ASC'
        );

        // return $cat as an array
        $categories = get_categories( $args );
         $cat = array( );
        foreach( $categories as $category ) {

           $cat[ $category->cat_ID ] = $category->cat_name;

        }
         //   print_r($cat);

            $settings_fields = array(
            'wprhbs_settings' => array(
                array(
                    'name' => 'wprhcategorylist',
                    'label' => __( 'Select A Category', 'wprbhbs' ),
                    'desc' => __( 'Category Dropdown', 'wprbhbs' ),
                    'type' => 'select',
                    'default' => '1',
                    'options' => $cat
                ),
                array(
                    'name' => 'wprhstype',
                    'label' => __( 'Slider Type', 'wprbhbs' ),
                    'desc' => __( 'Select Slider Type', 'wprbhbs' ),
                    'type' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'responsive' => 'Responsive',
                        'locked' => 'Locked',
                        'largewidth' => 'Large Width',
                        'moveslides' => 'Move Slides',
                        'infinite' => 'Infinite',
                        'startdifferent' => 'Start Different'
                    )
                ),
              /*  array(
                    'name' => 'wprhcontainerbordercolors',
                    'label' => __( 'Container Border Color', 'wprbhbs' ),
                    'desc' => __( 'Select Container Border Color', 'wprbhbs' ),
                    'type' => 'text',
                    'size'=> 'color-field field',
                    'default' => '#fff'
                ),
                array(
                    'name' => 'wprhcontainerbackgroundcolor',
                    'label' => __( 'Container Backckground Color', 'wprbhbs' ),
                    'desc' => __( 'Container Backckground Color', 'wprbhbs' ),
                    'type' => 'text',
                    'size'=> 'color-field field',
                    'default' => '#fff'
                ),
                array(
                    'name' => 'wprhimagebackgroundcolor',
                    'label' => __( 'Image Background Color', 'wprbhbs' ),
                    'desc' => __( 'Image Background Color', 'wprbhbs' ),
                    'type' => 'text',
                    'size'=> 'color-field field',
                    'default' => '#fff'
                ),
                array(
                    'name' => 'wprhimagebordercolor',
                    'label' => __( 'Image Border Color', 'wprbhbs' ),
                    'desc' => __( 'Image Border Color', 'wprbhbs' ),
                    'type' => 'text',
                    'size'=> 'color-field field',
                    'default' => '#fff'
                ), */
                array(
                    'name' => 'wprhpostheading',
                    'label' => __( 'Display Post Title', 'wprbhbs' ),
                    'desc' => __( 'select yes or no', 'wprbhbs' ),
                    'type' => 'radio',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'wprhtitlecolor',
                    'label' => __( 'Post Title Font Color', 'wprbhbs' ),
                    'desc' => __( 'Image Border Color', 'wprbhbs' ),
                    'type' => 'text',
                    'size'=> 'color-field field',
                    'default' => '#000'
                ),
                array(
                    'name' => 'wprhtitlebackgroundcolor',
                    'label' => __( 'Post Title Background Color', 'wprbhbs' ),
                    'desc' => __( 'Image Border Color', 'wprbhbs' ),
                    'type' => 'text',
                    'size'=> 'color-field field',
                    'default' => '#fff'
                )

            /*,
                array(
                    'name' => 'colorbox',
                    'label' => __( 'Font Color', 'wprbhbs' ),
                    'desc' => __( 'Font Color', 'wprbhbs' ),
                    'type' => 'text',
                    'size'=> 'color-field field',
                    'default' => '#fff'
                ),
                array(
                    'name' => 'text',
                    'label' => __( 'Text Input', 'wprbhbs' ),
                    'desc' => __( 'Text input description', 'wprbhbs' ),
                    'type' => 'text',
                    'default' => 'Title'
                ),
                array(
                    'name' => 'textarea',
                    'label' => __( 'Textarea Input', 'wprbhbs' ),
                    'desc' => __( 'Textarea description', 'wprbhbs' ),
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'checkbox',
                    'label' => __( 'Checkbox', 'wprbhbs' ),
                    'desc' => __( 'Checkbox Label', 'wprbhbs' ),
                    'type' => 'checkbox'
                ),
                array(
                    'name' => 'radio',
                    'label' => __( 'Radio Button', 'wprbhbs' ),
                    'desc' => __( 'A radio button', 'wprbhbs' ),
                    'type' => 'radio',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                ),
                array(
                    'name' => 'multicheck',
                    'label' => __( 'Multile checkbox', 'wprbhbs' ),
                    'desc' => __( 'Multi checkbox description', 'wprbhbs' ),
                    'type' => 'multicheck',
                    'options' => array(
                        'one' => 'One',
                        'two' => 'Two',
                        'three' => 'Three',
                        'four' => 'Four'
                    )
                ),
                array(
                    'name' => 'selectbox',
                    'label' => __( 'A Dropdown', 'wprbhbs' ),
                    'desc' => __( 'Dropdown description', 'wprbhbs' ),
                    'type' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No'
                    )
                )
            */

            )
            ) ;

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap">';
        // settings_errors();

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}

$settings = new WeDevs_Settings_API_Test();