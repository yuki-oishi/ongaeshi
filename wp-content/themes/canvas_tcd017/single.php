<?php get_header(); $options = get_desing_plus_option(); ?>

<div id="top_headline" class="celarfix">
 <h2 class="archive_headline"><?php _e('Blog', 'tcd-w'); ?></h2>
</div>

<?php if (!empty($options['blog_main_image'])) { ?>
<div id="main_image">
 <img src="<?php esc_attr_e( $options['blog_main_image'] ); ?>" alt="" />
</div>
<?php }; ?>

<div id="contents" class="clearfix">

 <div id="main_col">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div id="post_title" class="clearfix">
   <?php if ($options['show_date']) { ?><p class="post_date"><span class="date"><?php the_time('n.j'); ?></span><span class="month"><?php the_time('Y'); ?></span></p><?php }; ?>
   <h2<?php if (!$options['show_date']) { echo ' class="no_date"'; }; ?>><?php the_title(); ?></h2>
  </div>

  <div class="post clearfix">

   <?php if ( has_post_thumbnail() and $page=='1') { if ($options['show_thumbnail']) : ?><div class="post_image"><?php the_post_thumbnail('large'); ?></div><?php endif; }; ?>

   <?php the_content(); ?>
   <?php custom_wp_link_pages(); ?>

  </div><!-- END .post -->

  <?php if($options['show_date']||$options['show_comment']||$options['show_category']||$options['show_tag']||$options['show_bookmark']) { ?>
  <div id="post_meta" class="clearfix">
   <ul id="meta">
    <?php if ($options['show_author']) : ?><li class="meta_author"><?php the_author_posts_link(); ?></li><?php endif; ?>
    <?php if ($options['show_comment']) : ?><li class="meta_comment"><?php comments_popup_link(__('Write comment', 'tcd-w'), __('1 comment', 'tcd-w'), __('% comments', 'tcd-w')); ?></li><?php endif; ?>
    <?php if ($options['show_category']) : ?><li class="meta_category"><?php the_category(', '); ?></li><?php endif; ?>
    <?php if ($options['show_tag']) : ?><?php the_tags('<li class="meta_tag">',', ','</li>'); ?><?php endif; ?>
   </ul>
   <?php if($options['show_bookmark']) { include('bookmark.php'); };?>
  </div>
  <?php }; ?>

  <?php endwhile; endif; ?>

  <?php // related post
       if ($options['show_related_post']) :
       $odd_or_even = 'odd';
       $categories = get_the_category($post->ID);
       if ($categories) {
       $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
         $args=array(
                     'category__in' => $category_ids,
                     'post__not_in' => array($post->ID),
                     'showposts'=>4,
                     'orderby' => 'rand'
                   );
        $my_query = new wp_query($args);
        $i = 1;
        if($my_query->have_posts()) {
  ?>
  <div id="related_post">
   <h3 class="headline"><?php _e("Related post","tcd-w"); ?></h3>
   <ul class="clearfix">
    <?php while ($my_query->have_posts()) { $my_query->the_post(); ?>
    <li class="clearfix <?php echo $odd_or_even; if(has_post_thumbnail()) { echo ' no_thumbnail'; }; ?>">
     <?php if (has_post_thumbnail()) { ?>
     <a class="image" href="<?php the_permalink() ?>"><?php the_post_thumbnail('size1'); ?></a>
     <?php }; ?>
     <div class="info">
      <?php if ($options['show_date']) : ?><p class="date"><?php the_time('Y.n.j'); ?></p><?php endif; ?>
      <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
     </div>
    </li>
    <?php $odd_or_even = ('odd'==$odd_or_even) ? 'even' : 'odd'; }; ?>
   </ul>
  </div>
  <?php }; }; wp_reset_query(); ?>
  <?php endif; ?>

  <?php if ($options['show_comment']) : if (function_exists('wp_list_comments')) { comments_template('', true); } else { comments_template(); }; endif; ?>

  <?php if ($options['show_next_post']) : ?>
  <div id="previous_next_post" class="clearfix">
   <p id="previous_post"><?php previous_post_link('%link') ?></p>
   <p id="next_post"><?php next_post_link('%link') ?></p>
  </div>
  <?php endif; ?>

 </div><!-- END #main_col -->

 <?php include('sidebar.php'); ?>

</div><!-- END #contents -->

<?php get_footer(); ?>