<?php
/**
 * @package   Wp Responsive Horizotal Box Slider
 * @author    Tuhin Mahmud <kmtuhin@live.com>
 * @license   GPL-2.0+
 * @link      http://example.com/
 * @copyright 2015
 */


$args['cats']      = $instance['cats'];
$args['type']      = $instance['type'];
$args['posttitle'] = $instance['posttitle'];

//print_r( $args );

if(class_exists('Wp_Responsive_Horizontal_Box_Slider_Public')){

    $attr['cats']      = $args['cats'];
    $attr['type']      = $args['type'];
    $attr['display_title'] = $args['posttitle'];

  echo  Wp_Responsive_Horizontal_Box_Slider_Public::wprhbs_widget_filter( $attr );
}

?>


