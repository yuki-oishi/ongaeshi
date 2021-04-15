<?php
/*
Template Name:No side (1000px wide ver)
*/
?>
<?php get_header(); $options = get_desing_plus_option(); ?>

<?php
     if (have_posts()) : while (have_posts()) : the_post();
     $custom_fields = get_post_custom($post->ID);
     $value1 = get_post_meta($post->ID, 'page_image', true);  $image1 = wp_get_attachment_image_src($value1, 'full');
?>

<div id="top_headline" class="celarfix">
 <h2 class="archive_headline"><?php the_title(); ?></h2>
</div>

<?php if (!empty($custom_fields['page_image'][0])) { ?>
<div id="main_image">
  <img class="image" src="<?php echo $image1[0]; ?>" alt="" title="" />
</div>
<?php }; ?>

<div id="contents" class="clearfix">

 <div id="no_side_page_wide">

  <div class="post clearfix">

   <?php the_content(); ?>
   <?php custom_wp_link_pages(); ?>

  </div><!-- END .post -->

  <?php endwhile; endif; ?>

 </div><!-- END #no_side_page -->

</div><!-- END #contents -->

<?php get_footer(); ?>