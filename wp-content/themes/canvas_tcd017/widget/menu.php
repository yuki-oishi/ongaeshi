<?php

class tcd_menu_widget extends WP_Widget {

 function __construct() {
   $widget_ops = array( 'classname' => 'tcd_menu_widget', 'description' => __('Show custom menu.','tcd-w') ); // Widget Settings
   $control_ops = array( 'id_base' => 'tcd_menu_widget' ); // Widget Control Settings
   parent::__construct( 'tcd_menu_widget', __('Custom menu (tcd ver)','tcd-w'), $widget_ops, $control_ops ); // Create the widget
 }

 function widget($args, $instance) {
   extract($args);

   // Get menu
   $nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;
   if ( !$nav_menu )
     return;

   echo $args['before_widget'];

     wp_nav_menu( array( 'fallback_cb' => '', 'menu' => $nav_menu ) );

   echo $args['after_widget'];

 }

 // Update Settings //
 function update($new_instance, $old_instance) {
   $instance['nav_menu'] = (int) $new_instance['nav_menu'];
   return $instance;
 }

 function form($instance) {
   $nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

   // Get menus
   $menus = wp_get_nav_menus( array( 'orderby' => 'name' ) );

?>
<p><?php echo sprintf( __('Please create menu from custom menu page before you use this widget. <br /><a href="%s">Custom menu page</a>','tcd-w'), admin_url('nav-menus.php') ); ?></p>
<p>
 <label for="<?php echo $this->get_field_id('nav_menu'); ?>"><?php _e('Select Menu:'); ?></label>
 <select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
<?php
     foreach ( $menus as $menu ) {
       echo '<option value="' . $menu->term_id . '"' . selected( $nav_menu, $menu->term_id, false ) . '>'. $menu->name . '</option>';
     }
?>
 </select>
</p>
<?php
 }

}

add_action('widgets_init',  function(){register_widget('tcd_menu_widget');});

?>