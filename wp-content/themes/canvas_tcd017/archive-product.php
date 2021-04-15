<?php get_header(); $options = get_desing_plus_option(); ?>

<div id="top_headline" class="celarfix">
 <h2 class="archive_headline"><?php _e('Product List', 'tcd-w'); ?><span><?php echo $options['product_archive_headline']; ?></span></h2>
</div>

<?php if (!empty($options['product_main_image'])) { ?>
<div id="main_image">
 <img src="<?php esc_attr_e( $options['product_main_image'] ); ?>" alt="" />
</div>
<?php }; ?>

<div id="contents" class="clearfix">

 <div id="product_list">

  <?php if ( have_posts() ) : ?>
  <ol class="clearfix">
   <?php
        $odd_or_even = 'odd';
        while ( have_posts() ) : the_post();
        $custom_fields = get_post_custom($post->ID);
        $value1 = get_post_meta($post->ID, 'product_image', true);  $image1 = wp_get_attachment_image_src($value1, 'size5');
   ?>
   <li class="clearfix <?php echo $odd_or_even; ?>">
    <a class="image" href="<?php the_permalink() ?>"><?php if (!empty($custom_fields['product_image'][0])) { ?><img src="<?php echo $image1[0]; ?>" alt="" title="" /><?php } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image2.gif" alt="" title="" />'; }; ?></a>
    <div class="info">
     <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
     <?php if (!empty($custom_fields['product_sub_title'][0])) { ?><p class="sub_title"><?php echo $custom_fields['product_sub_title'][0]; ?></p><?php }; ?>
     <?php if (!empty($custom_fields['product_description'][0])) { ?><p class="desc"><?php echo $custom_fields['product_description'][0]; ?></p><?php }; ?>
    </div>
   </li>
   <?php $odd_or_even = ('odd'==$odd_or_even) ? 'even' : 'odd'; endwhile; ?>
  </ol>
  <?php else: ?>
  <p class="no_post"><?php _e("There is no registered post.","tcd-w"); ?></p>
  <?php endif; ?>

  <?php include('navigation.php'); ?>

 </div><!-- END #product_list -->

</div><!-- END #contents -->

<?php get_footer(); ?>