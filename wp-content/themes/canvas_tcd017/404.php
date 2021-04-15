<?php get_header(); $options = get_desing_plus_option(); ?>

<div id="top_headline" class="celarfix">
 <h2 class="archive_headline"><?php _e("Sorry, but you are looking for something that isn't here.","tcd-w"); ?></h2>
</div>

<div id="contents" class="clearfix">

 <div id="main_col">

  <p><?php _e("Sorry, but you are looking for something that isn't here.","tcd-w"); ?></p>
  <?php include('navigation.php'); ?>

 </div><!-- END #main_col -->

 <?php include('sidebar.php'); ?>

</div><!-- END #contents -->

<?php get_footer(); ?>