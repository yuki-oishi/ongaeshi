<?php get_header(); $options = get_desing_plus_option(); ?>

<div id="top_headline" class="celarfix">
 <?php if (is_category()) { ?>
 <h2 class="archive_headline"><?php echo single_cat_title('', false); ?></h2>

 <?php } elseif( is_tag() ) { ?>
 <h2 class="archive_headline"><?php echo single_tag_title('', false); ?></h2>

 <?php } elseif (is_day()) { ?>
 <h2 class="archive_headline"><?php printf(__('Archive for &#8216; %s &#8217;', 'tcd-w'), get_the_time(__('F jS, Y', 'tcd-w'))); ?></h2>

 <?php } elseif (is_month()) { ?>
 <h2 class="archive_headline"><?php printf(__('Archive for &#8216; %s &#8217;', 'tcd-w'), get_the_time(__('F, Y', 'tcd-w'))); ?></h2>

 <?php } elseif (is_year()) { ?>
 <h2 class="archive_headline"><?php printf(__('Archive for &#8216; %s &#8217;', 'tcd-w'), get_the_time(__('Y', 'tcd-w'))); ?></h2>

 <?php } elseif (is_author()) { ?>
 <?php global $wp_query; $curauth = $wp_query->get_queried_object(); //get the author info ?>
 <h2 class="archive_headline"><?php printf(__('Archive for the &#8216; %s &#8217;', 'tcd-w'), $curauth->display_name ); ?></h2>

 <?php } else { ?>
 <h2 class="archive_headline"><?php _e('Blog Archives', 'tcd-w'); ?></h2>
 <?php }; ?>
</div>

<?php
     //カテゴリー専用画像の出力
     $cat_id = get_query_var('cat');
     $cat_data = get_option("cat_$cat_id");
     if (!empty($cat_data['img'])){
?>
<div id="main_image">
 <img src="<?php echo esc_html($cat_data['img']) ?>" alt="" />
</div>
<?php } else { ?>
<?php if (!empty($options['blog_main_image'])) { ?>
<div id="main_image">
 <img src="<?php esc_attr_e( $options['blog_main_image'] ); ?>" alt="" />
</div>
<?php }; ?>
<?php }; ?>

<?php
     if(is_category()||is_tag()||is_day()||is_month()||is_year()||is_author()) { } else {

       $posts_per_page = get_option('posts_per_page');
       $dif_num = $posts_per_page - 3;
       $wp_query->max_num_pages = ceil( ( $wp_query->found_posts + $dif_num ) / $posts_per_page );

     };
?>
<div id="contents" class="clearfix">

 <div id="main_col">

  <?php if ( have_posts() ) : ?>
  <ol id="post_list" class="clearfix">
   <?php while ( have_posts() ) : the_post(); ?>
   <li class="clearfix<?php if (!has_post_thumbnail()) { echo ' no_thumbnail'; }; ?>">
    <?php if ($options['show_thumbnail'] and has_post_thumbnail()) { ?>
    <a class="image" href="<?php the_permalink() ?>"><?php  echo the_post_thumbnail('size2'); ?></a>
    <?php }; ?>
    <div class="info">
     <?php if ($options['show_date']) { ?><p class="post_date"><span class="date"><?php the_time('n.j'); ?></span><span class="month"><?php the_time('Y'); ?></span></p><?php }; ?>
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