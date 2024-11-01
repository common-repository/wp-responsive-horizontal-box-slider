<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wp_Responsive_Horizontal_Box_Slider
 * @subpackage Wp_Responsive_Horizontal_Box_Slider/public
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
/**
 * Created by Tuhin Mahmud.
 *
 * Date: 7/4/15
 * Time: 12:06 PM
 */



class Wprhbs{


    /**
     * @param $catid
     * @return string
     */
    public static function responsive( $catid,$display_title ){

        global $post;

        $args  = array(
            'numberposts'  => 8,
            'category'     => $catid
        );

        $posts = get_posts( $args );

        $html  = '';
        $html .= "<div class='slider1 '>";

        foreach( $posts as $post ): setup_postdata( $post );

            $imgurl = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
          //  print_r($post);
            $html  .= "<div class='slide'>";
            $html  .= "<img src=' ". $imgurl ." '/>";

            if($display_title == 'yes'):
                $html  .= "<sapn class='wprhbs-heading'><a href='".$post->guid."' >". $post->post_title ."</a></span>";
            endif;
            //  $html  .= "<p class='wprhbs-des'>". $post->post_content ."</p>";
            $html  .= "</div>";

        endforeach;

        $html  .= "</div>";

        return  $html;
    }


    /**
     * @param $catid
     * @return string
     */
    public static function lockslide( $catid,$display_title ){
        global $post;

        $args       = array(
            'numberposts' => 8,
            'category' => $catid
        );

        $posts      = get_posts( $args );
        $html       = "<div class='slider2'>";

        foreach( $posts as $post ): setup_postdata($post);

            $imgurl = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            $html  .= "<div class='slide'>";
            $html  .= "<img src=' ". $imgurl ." '/>";

            if($display_title == 'yes'):
                $html  .= "<sapn class='wprhbs-heading'><a href='".$post->guid."' >". $post->post_title ."</a></span>";
            endif;
            //  $html  .= "<p class='wprhbs-des'>". $post->post_content ."</p>";
            $html  .= "</div>";

        endforeach;

        $html   .= "</div>";
        echo  $html;
    }


    /**
     * @param $catid
     * @return string
     */
    public static function largewidth( $catid,$display_title ){

        global $post;

        $args       = array(

            'numberposts' => 8,
            'category' => $catid

        );

        $posts      = get_posts( $args );
        $html       = "<div class='slider3'>";

        foreach( $posts as $post ): setup_postdata( $post );

            $imgurl = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            $html  .= "<div class='slide'>";
            $html  .= "<img src=' ". $imgurl ." '/>";

            if($display_title == 'yes'):
                $html  .= "<sapn class='wprhbs-heading'><a href='".$post->guid."' >". $post->post_title ."</a></span>";
            endif;
            //  $html  .= "<p class='wprhbs-des'>". $post->post_content ."</p>";
            $html  .= "</div>";

        endforeach;

        $html .= "</div>";

        return $html;
    }


    /**
     * @param $catid
     * @return string
     */
    public static function moveslides( $catid,$display_title ){

        global $post;

        $args       = array(

            'numberposts' => 8,
            'category' => $catid

        );

        $posts      = get_posts( $args );
        $html       = '';
        $html      .= "<div class='slider4'>";

        foreach( $posts as $post ): setup_postdata( $post );

            $imgurl = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            $html  .= "<div class='slide'>";
            $html  .= "<img src=' ". $imgurl ." '/>";

            if($display_title == 'yes'):
                $html  .= "<sapn class='wprhbs-heading'><a href='".$post->guid."' >". $post->post_title ."</a></span>";
            endif;
            //  $html  .= "<p class='wprhbs-des'>". $post->post_content ."</p>";
            $html  .= "</div>";

        endforeach;

        $html  .= "</div>";
        return $html;
    }


    /**
     * @param $catid
     * @return string
     */
    public static function infinite( $catid,$display_title ){

        global $post;

        $args = array(
            'numberposts' => 8,
            'category' => $catid
        );

        $posts = get_posts( $args );

        $html  = "<div class='slider5'>";

        foreach( $posts as $post ): setup_postdata( $post );

            $imgurl = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            $html  .= "<div class='slide'>";
            $html  .= "<img src=' ". $imgurl ." '/>";

            if($display_title == 'yes'):
                $html  .= "<sapn class='wprhbs-heading'><a href='".$post->guid."' >". $post->post_title ."</a></span>";
            endif;
            //  $html  .= "<p class='wprhbs-des'>". $post->post_content ."</p>";
            $html  .= "</div>";

        endforeach;
        $html  .= "</div>";
        return $html;
    }


    /**
     * @param $catid
     * @return string
     */
    public static function startdifferent( $catid,$display_title ){

        global $post;
        $args       = array(

            'numberposts' => 8,
            'category' => $catid

        );

        $posts      = get_posts( $args );
        $html       = "<div class='slider6'>";
        foreach( $posts as $post ): setup_postdata( $post );

            $imgurl = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

            $html  .= "<div class='slide'>";
            $html  .= "<img src=' ". $imgurl ." '/>";

            if($display_title == 'yes'):
                $html  .= "<sapn class='wprhbs-heading'><a href='".$post->guid."' >". $post->post_title ."</a></span>";
            endif;
            //  $html  .= "<p class='wprhbs-des'>". $post->post_content ."</p>";
            $html  .= "</div>";

        endforeach;
        $html      .= "</div>";

        return $html;
    }



    public static function SliderLoader($type, $catid, $display_title){
        switch($type){

            case 'responsive';
                return  self::responsive( $catid,$display_title ); // Loading Responsive Slider
                break;

            case 'locked';
                return   self::lockslide( $catid,$display_title ); // Loading Loacked Slider
                break;

            case 'largewidth';
                return   self::largewidth( $catid,$display_title ); // Loading Large Length Slider
                break;

            case 'moveslides';
                return   self::moveslides( $catid,$display_title ); // Loading Move Slides
                break;

            case 'infinite';
                return   self::infinite( $catid,$display_title ); // Loading Infinite Slides
                break;

            case 'startdifferent';
                return   self::startdifferent( $catid,$display_title ); // Loading Start Different Slider
                break;

        }
    }

}

?>
