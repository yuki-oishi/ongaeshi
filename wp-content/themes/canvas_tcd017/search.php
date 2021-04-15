<?php get_header(); $options = get_desing_plus_option(); ?>

<div id="top_headline" class="celarfix">
 <h2 class="archive_headline"><?php if (have_posts()) { printf(__('Search results for - %s', 'tcd-w'), get_search_query()); } else { echo _e('Search results','tcd-w'); }; ?></h2>
</div>

<div id="contents" class="clearfix">

 <div id="main_col">

  <?php
       global $query_string;
       query_posts($query_string . "&post_type=post");
       if (have_posts()):
  ?>
  <ol id="post_list" class="clearfix">
   <?php while ( have_posts() ) : the_post(); ?>
   <li class="clearfix<?php if (!has_post_thumbnail()) { echo ' no_thumbnail'; }; ?>">
    <?php if ($options['show_thumbnail'] and has_post_thumbnail()) { ?>
    <a class="image" href="<?php the_permalink() ?>"><?php  echo the_post_thumbnail('size2'); ?></a>
    <?php }; ?>
    <div class="info">
     <?php if ($options['show_date']) { ?><p class="post_date"><span class="date"><?php the_time('d'); ?></span><span class="month"><?php $month = get_the_date('M'); if (strtoupper(get_locale()) == 'JA') { echo encode_date($month); } else { echo $month; }; ?></span></p><?php }; ?>
     <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
     <p class="desc"><?php if (has_excerpt()) { the_excerpt(); } else { new_excerpt(150);}; ?></p>
    </div>
   </li>
   <?php endwhile; ?>
  </ol>
  <?php else: ?>
  <p class="no_post"><?php _e("There is no registered post.","tcd-w"); ?></p>
  <?php endif; ?>

  <?php include('navigation.php'); ?>

 </div><!-- END #main_col -->

 <?php include('sidebar.php'); ?>

</div><!-- END #contents -->

<?php get_footer(); ?>