<?php get_header(); $options = get_desing_plus_option(); ?>

<?php
     if (have_posts()) : while (have_posts()) : the_post();
     $custom_fields = get_post_custom($post->ID);
     $value1 = get_post_meta($post->ID, 'product_image', true);  $image1 = wp_get_attachment_image_src($value1, 'size6');
?>

<div id="top_headline" class="celarfix">
 <h2 class="product_headline"><a href="<?php echo get_post_type_archive_link('product'); ?>"><?php _e('Product List', 'tcd-w'); ?></a></h2>
 <h3 class="title"><?php the_title(); ?></h3>
 <?php if (!empty($custom_fields['product_sub_title'][0])) { ?><p class="sub_title"><?php echo $custom_fields['product_sub_title'][0]; ?></p><?php }; ?>
</div>

<div id="main_image">
 <div id="product_main_image">
  <?php if (!empty($custom_fields['product_image'][0])) { ?><img class="image" src="<?php echo $image1[0]; ?>" alt="" title="" /><?php } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image3.gif" alt="" title="" />'; }; ?>
  <div class="info">
   <h2 class="title"><?php the_title(); ?></h2>
   <?php if (!empty($custom_fields['product_description'][0])) { ?><p class="desc"><?php echo $custom_fields['product_description'][0]; ?></p><?php }; ?>
  </div>
 </div>
</div>

<div id="contents" class="clearfix">

 <div id="main_col">

  <div class="post clearfix">

   <?php the_content(); ?>
   <?php custom_wp_link_pages(); ?>

  </div><!-- END .post -->

  <?php endwhile; endif; ?>

 </div><!-- END #main_col -->

 <?php include('sidebar.php'); ?>

</div><!-- END #contents -->

<?php get_footer(); ?>