<?php $options = get_desing_plus_option(); if (!is_paged()): get_header(); ?>

<?php if (!empty($options['index_main_image1'])) { ?><img id="slider_base" src="<?php esc_attr_e( $options['index_main_image1'] ); ?>" alt="" /><?php }; ?>
<div id="slider">
 <?php for($i = 1; $i <= 3; $i++): ?>
 <?php if (!empty($options['index_main_image'.$i])) { ?><img src="<?php esc_attr_e( $options['index_main_image'.$i] ); ?>" alt="" /><?php }; ?>
 <?php endfor; ?>
</div>


<div id="index_topics">
 <ol class="clearfix">
  <?php for($i = 1; $i <= 3; $i++): ?>
  <?php if (!empty($options['index_topics_title'.$i])) { ?> 
   <li class="num<?php echo $i; ?>">
    <?php if (!empty($options['index_topics_subtitle'.$i])) { ?>
    <h3 class="title2"><a href="<?php echo $options['index_topics_url'.$i]; ?>"><?php echo $options['index_topics_title'.$i]; ?><span><?php echo $options['index_topics_subtitle'.$i]; ?></span></a></h3>
    <?php } else { ?>
    <h3 class="title"><a href="<?php echo $options['index_topics_url'.$i]; ?>"><?php echo $options['index_topics_title'.$i]; ?></a></h3>
    <?php }; ?>
    <a class="image" href="<?php echo ($options['index_topics_url'.$i]); ?>"><img src="<?php esc_attr_e( $options['index_topics_image'.$i] ); ?>" alt="" /></a>
   </li>
  <?php }; ?>
  <?php endfor; ?>
 </ol>
</div><!-- END #index_topics_area -->


<?php
     $args = array('post_type' => 'product', 'numberposts' => 4);
     $product_post=get_posts($args);
     if ($product_post) {
?>
<div id="index_product_area">
 <div id="index_product">
  <h3 class="headline"><?php echo $options['index_headline_product']; ?></h3>
  <ol class="clearfix">
   <?php
        $i = 1;
        foreach ($product_post as $post) : setup_postdata ($post);
        $custom_fields = get_post_custom($post->ID);
        $value1 = get_post_meta($post->ID, 'product_image', true);
        $image1 = wp_get_attachment_image_src($value1, 'size4');
        if(!empty($custom_fields['product_description'][0])) {
          $base_desc = $custom_fields['product_description'][0];
          $trim_desc = mb_substr($base_desc, 0,  50,"utf-8");
        };
   ?>
   <li class="num<?php echo $i; ?>">
    <a class="image" href="<?php the_permalink() ?>"><?php if (!empty($custom_fields['product_image'][0])) { ?><img src="<?php echo $image1[0]; ?>" alt="" title="" /><?php } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image1.gif" alt="" title="" />'; }; ?></a>
    <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
    <?php if (!empty($custom_fields['product_description'][0])) { ?><p class="desc"><?php echo $trim_desc ; ?></p><?php }; ?>
   </li>
   <?php $i++; endforeach; wp_reset_query(); ?>
  </ol>
 </div>
</div><!-- END #index_product_area -->
<?php }; ?>


<div class="content">
 <div class="content_inner clearfix">

  <div id="index_news">
   <h3 class="headline"><?php echo $options['index_headline_news']; ?></h3>
   <ol class="clearfix">
    <?php
         $args = array('post_type' => 'news', 'numberposts' => 3);
         $news_post=get_posts($args);
         if ($news_post) :
         foreach ($news_post as $post) : setup_postdata ($post);
    ?>
    <li class="clearfix">
     <p class="news_date"><span class="date"><?php the_time('n.j'); ?></span><span class="month"><?php the_time('Y'); ?></span></p>
     <h4 class="title"><a href="<?php the_permalink() ?>"><?php trim_title(25); ?></a></h4>
     <p class="desc"><?php if (has_excerpt()) { the_excerpt(); } else { new_excerpt(85);}; ?></p>
    </li>
    <?php endforeach; else: ?>
    <li class="no_post"><p><?php _e("There is no registered news.","tcd-w"); ?></p></li>
    <?php endif; ?>
   </ol>
   <div class="index_archive_link"><a href="<?php echo get_post_type_archive_link('news'); ?>"><?php _e("Older News","tcd-w"); ?></a></div>
  </div><!-- END #index_news -->

  <div id="index_blog">
   <h3 class="headline"><?php echo $options['index_headline_blog']; ?></h3>
   <ol class="clearfix">
    <?php
         $args = array('post_type' => 'post', 'numberposts' => 3);
         $index_recent_post=get_posts($args);
         if ($index_recent_post) :
         foreach ($index_recent_post as $post) : setup_postdata ($post);
    ?>
    <li class="clearfix<?php if (has_post_thumbnail()) { echo ' has_thumbnail'; }; ?>">
     <?php if ($options['show_thumbnail'] and has_post_thumbnail()) { ?><a class="image" href="<?php the_permalink() ?>"><?php echo the_post_thumbnail('size1'); ?></a><?php }; ?>
     <div class="info">
      <?php if ($options['show_date']||$options['show_category']) { ?>
      <ul class="meta clearfix">
       <?php if ($options['show_date']) { ?><li class="post_date"><?php the_time('Y.m.d'); ?></li><?php }; ?>
       <?php if ($options['show_category']) { ?><li class="post_category"><?php the_category(', '); ?></li><?php }; ?>
      </ul>
      <?php }; ?>
      <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
     </div>
    </li>
    <?php endforeach; else: ?>
    <li class="no_post"><p><?php _e("There is no registered post.","tcd-w"); ?></p></li>
    <?php endif; ?>
   </ol>
   <div class="index_archive_link"><?php next_posts_link(__('Older Entries', 'tcd-w')) ?></div>
  </div><!-- END #index_blog -->


  <ul id="index_banner" class="clearfix">
   <?php for($i = 1; $i <= 3; $i++): ?>
   <?php if (!empty($options['index_banner_image'.$i])) { ?>
     <li class="num<?php echo $i; ?>"><a class="target_blank" href="<?php echo $options['index_banner_url'.$i]; ?>"><img src="<?php esc_attr_e( $options['index_banner_image'.$i] ); ?>" alt="" /></a></li>
   <?php }; ?>
   <?php endfor; ?>
  </ul>


 </div><!-- END .content_inner -->
</div><!-- END .content -->


<?php //get_sidebar(); ?>

<?php get_footer(); else: include('archive.php'); endif; ?>