<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 9]><html xmlns="http://www.w3.org/1999/xhtml" class="ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width" />
<title><?php seo_title(); ?></title>
<meta name="description" content="<?php seo_description(); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php $options = get_desing_plus_option(); ?>

<?php wp_enqueue_script( 'jquery' ); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css<?php version_num(); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/comment-style.css<?php version_num(); ?>" type="text/css" />

<link rel="stylesheet" media="screen and (min-width:641px)" href="<?php bloginfo('template_url'); ?>/style_pc.css<?php version_num(); ?>" type="text/css" />
<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo('template_url'); ?>/style_sp.css<?php version_num(); ?>" type="text/css" />

<?php if (strtoupper(get_locale()) == 'JA') ://to fix the font-size for japanese font ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/japanese.css<?php version_num(); ?>" type="text/css" />
<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jscript.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/comment.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rollover.js<?php version_num(); ?>"></script>
<!--[if lt IE 9]>
<link id="stylesheet" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style_pc.css<?php version_num(); ?>" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie.js<?php version_num(); ?>"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie.css" type="text/css" />
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie7.css" type="text/css" />
<![endif]-->

<style type="text/css">
body { font-size:<?php echo $options['content_font_size']; ?>px; }

a:hover, #index_topics .title a:hover, #index_blog .post_date, #product_list ol li .title a, #related_post .date, .product_headline a:hover, #top_headline .title, #logo_text a:hover, .widget_post_list .date, .tcdw_product_list_widget a.title:hover, #comment_header ul li.comment_switch_active a, #comment_header ul li#comment_closed p,
 #comment_header ul li a:hover
  { color:#<?php echo $options['pickedcolor1']; ?>; }

#index_news .month, .index_archive_link a, #post_list .date, #news_list .month, .page_navi a:hover, #post_title .date, #post_pagination a:hover, #product_main_image .title, #news_title .month, #global_menu li a:hover, #wp-calendar td a:hover, #social_link li a, .pc #return_top:hover,
 #wp-calendar #prev a:hover, #wp-calendar #next a:hover, #footer #wp-calendar td a:hover, .widget_search #search-btn input:hover, .widget_search #searchsubmit:hover, .tcdw_category_list_widget a:hover, .tcdw_news_list_widget .month, .tcd_menu_widget a:hover, .tcd_menu_widget li.current-menu-item a, #submit_comment:hover
  { background-color:#<?php echo $options['pickedcolor1']; ?>; }

#guest_info input:focus, #comment_textarea textarea:focus
  { border-color:#<?php echo $options['pickedcolor1']; ?>; }

#product_list ol li .title a:hover
 { color:#<?php echo $options['pickedcolor2']; ?>; }

.index_archive_link a:hover, #social_link li a:hover
 { background-color:#<?php echo $options['pickedcolor2']; ?>; }
</style>

<?php if(!is_page()&&is_home()) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.pack.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/nivo-slider.css" type="text/css" />
<script type="text/javascript">
jQuery(window).on('load',function() {
 jQuery('#slider').nivoSlider({
  effect:'fade',
  animSpeed:500,
  pauseTime:4000,
  directionNav:false,
  controlNav:false,
  controlNavThumbs:false,
  afterLoad:function(){ jQuery('#slider_base').hide(); }
  });
});
</script>
<?php }; ?>

</head>
<body<?php if(!is_paged() and is_front_page()) { echo ' id="index"'; };?>>

 <div id="header_wrap">
  <div id="header" class="clearfix">

   <!-- logo -->
   <?php the_dp_logo(); ?>

   <!-- global menu -->
   <a href="#" class="menu_button"><?php _e('menu', 'tcd-w'); ?></a>
   <div id="global_menu" class="clearfix">
    <?php if (has_nav_menu('global-menu')) { wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'global-menu' , 'container' => '' ) ); }; ?>
   </div>

  </div><!-- END #header -->
 </div><!-- END #header_wrap -->