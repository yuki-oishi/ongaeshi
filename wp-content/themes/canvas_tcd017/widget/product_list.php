<?php

 // Start class widget //
 class tcdw_product_list_widget extends WP_Widget {

 // Constructor //
 function __construct() {
  $widget_ops = array( 'classname' => 'tcdw_product_list_widget', 'description' => __('Displays designed category list.', 'tcd-w') ); // Widget Settings
  $control_ops = array( 'id_base' => 'tcdw_product_list_widget' ); // Widget Control Settings
  parent::__construct( 'tcdw_product_list_widget', __('Product list (tcd ver)', 'tcd-w'), $widget_ops, $control_ops ); // Create the widget
 }

 // Extract Args //
 function widget($args, $instance) {
  extract( $args );
   $title = apply_filters('widget_title', $instance['title']); // the widget title
   $post_num = $instance['post_num'];
   $post_order = $instance['post_order'];

   // Before widget //
   echo $before_widget;

   // Title of widget //
   if ( $title ) { echo $before_title . $title . $after_title; }

   // Widget output //
   $args = array('post_type' => 'product', 'posts_per_page' => $post_num, 'orderby' => $post_order);
   $product_list = new WP_Query($args);
   if ($product_list -> have_posts()) {
?>
<ol class="product_post_list">
 <?php
      $options = get_desing_plus_option();
       while ($product_list -> have_posts()) : $product_list -> the_post();
       $product_id = get_the_ID();
        $custom_fields = get_post_custom($product_id);
        $value1 = get_post_meta($product_id, 'product_image', true);  $image1 = wp_get_attachment_image_src($value1, 'size4');
 ?>
 <li class="clearfix">
  <a class="image" href="<?php the_permalink() ?>"><?php if (!empty($custom_fields['product_image'][0])) { ?><img src="<?php echo $image1[0]; ?>" alt="" title="" /><?php } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image1.gif" alt="" title="" />'; }; ?></a>
  <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
 </li>
 <?php endwhile; ?>
</ol>
<?php } else { ?>
 <p><?php _e("There is no registered product.","tcd-w"); ?></p>
<?php }; wp_reset_query(); ?>
<?php

   // After widget //
   echo $after_widget;

} // end function widget


 // Update Settings //
 function update($new_instance, $old_instance) {
  $instance['title'] = strip_tags($new_instance['title']);
  $instance['post_order'] = $new_instance['post_order'];
  $instance['post_num'] = $new_instance['post_num'];
  return $instance;
 }

 // Widget Control Panel //
 function form($instance) {
  $defaults = array( 'title' => __('Product list', 'tcd-w'), 'post_num' => '5', 'post_order' => 'date');
  $instance = wp_parse_args( (array) $instance, $defaults );
?>
<p>
 <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'tcd-w'); ?></label>
 <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>'" type="text" value="<?php echo $instance['title']; ?>" />
</p>
<p>
 <label for="<?php echo $this->get_field_id('post_num'); ?>"><?php _e('Number of product:', 'tcd-w'); ?></label>
 <select id="<?php echo $this->get_field_id('post_num'); ?>" name="<?php echo $this->get_field_name('post_num'); ?>" class="widefat" style="width:100%;">
  <option value="3" <?php selected('3', $instance['post_num']); ?>>3</option>
  <option value="5" <?php selected('5', $instance['post_num']); ?>>5</option>
  <option value="10" <?php selected('10', $instance['post_num']); ?>>10</option>
  <option value="-1" <?php selected('-1', $instance['post_num']); ?>><?php _e('All', 'tcd-w'); ?></option>
 </select>
</p>
<p>
 <label for="<?php echo $this->get_field_id('post_order'); ?>"><?php _e('Post order:', 'tcd-w'); ?></label>
 <select id="<?php echo $this->get_field_id('post_order'); ?>" name="<?php echo $this->get_field_name('post_order'); ?>" class="widefat" style="width:100%;">
  <option value="date" <?php selected('date', $instance['post_order']); ?>><?php _e('Date', 'tcd-w'); ?></option>
  <option value="rand" <?php selected('rand', $instance['post_order']); ?>><?php _e('Random', 'tcd-w'); ?></option>
 </select>
</p>
<?php
 } // end function form
}

// End class widget
add_action('widgets_init',  function(){register_widget('tcdw_product_list_widget');});
?>