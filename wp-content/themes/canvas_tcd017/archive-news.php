<?php get_header(); $options = get_desing_plus_option(); ?>

<div id="top_headline" class="celarfix">
 <h2 class="archive_headline"><?php _e('News', 'tcd-w'); ?></h2>
</div>

<?php if (!empty($options['news_main_image'])) { ?>
<div id="main_image">
 <img src="<?php esc_attr_e( $options['news_main_image'] ); ?>" alt="" />
</div>
<?php }; ?>

<div id="contents" class="clearfix">

 <div id="main_col">

  <div id="news_list">

   <ol class="clearfix">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li class="clearfix">
     <p class="news_date"><span class="date"><?php the_time('n.j'); ?></span><span class="month"><?php the_time('Y'); ?></span></p>
     <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
     <p class="desc"><?php if (has_excerpt()) { the_excerpt(); } else { new_excerpt(50);}; ?></p>
    </li>
    <?php endwhile; else: ?>
    <li class="no_post"><p><?php _e("There is no registered news.","tcd-w"); ?></p></li>
    <?php endif; ?>
   </ol>

  </div>

  <?php include('navigation.php'); ?>

 </div><!-- END #main_col -->

 <?php include('sidebar.php'); ?>

</div><!-- END #contents -->

<?php get_footer(); ?>