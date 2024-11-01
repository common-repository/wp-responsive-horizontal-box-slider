<?php
/**
 * @package   Wp Responsive Horizotal Box Slider
 * @author    Tuhin Mahmud <kmtuhin@live.com>
 * @license   GPL-2.0+
 * @link      http://example.com/
 * @copyright 2015
 */

?>

<!-- Category List Dropdown -->

<p>
    <label for="<?php echo $this->get_field_id( 'cats' ); ?>"><?php _e( 'Select Category:', $this->get_widget_slug() ); ?></label>
    <select id="<?php echo $this->get_field_id('cats'); ?>" name="<?php echo $this->get_field_name('cats'); ?>" class="wprhbs-widget" style="width:100%;">
        <?php foreach(get_terms('category','parent=0&hide_empty=1') as $term) { ?>
            <option <?php selected( $instance['cats'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
        <?php } ?>
    </select>
</p>


<!-- Select Slider Type -->

<p>
    <label for="<?php echo $this->get_field_id( 'Type' ); ?>"><?php _e( 'Select Slider Type:', $this->get_widget_slug() ); ?></label>

    <select id="<?php echo $this->get_field_id('type'); ?>" name="<?php echo $this->get_field_name('type'); ?>" class="wprhbs-widget" >


        <option <?php selected( $instance['type'], 'responsive' ); ?>     value="responsive">     <?php  _e( 'Responsive' ); ?>  </option>
        <option <?php selected( $instance['type'], 'locaked' ); ?>        value="locked">         <?php  _e( 'Locked' ); ?> </option>
        <option <?php selected( $instance['type'], 'largewidth'); ?>      value="largewidth">     <?php  _e( 'Large Width' ); ?> </option>
        <option <?php selected( $instance['type'], 'moveslides' ); ?>     value="movieslides">    <?php  _e( 'Move Slides' ); ?> </option>
        <option <?php selected( $instance['type'], 'infinite' ); ?>       value="infinite">       <?php  _e( 'Infinite' ); ?> </option>
        <option <?php selected( $instance['type'], 'startdifferent' ); ?> value="startdifferent"> <?php  _e( 'Start Different '); ?> </option>

    </select>
</p>

<!-- Select option to display post title or not -->

<p>
    <label for="<?php echo $this->get_field_id( 'posttitle' ); ?>"><?php _e( 'Display Post Title ?:', $this->get_widget_slug() ); ?></label>

    <select id="<?php echo $this->get_field_id('posttitle'); ?>" name="<?php echo $this->get_field_name('posttitle'); ?>" class="wprhbs-widget" >

        <option  <?php selected( $instance['posttitle'], 'no' ); ?>  value="no">    <?php  _e( 'No' ); ?></option>
        <option  <?php selected( $instance['posttitle'], 'yes' ); ?> value="yes">  <?php  _e( 'Yes' ); ?></option>

    </select>
</p>