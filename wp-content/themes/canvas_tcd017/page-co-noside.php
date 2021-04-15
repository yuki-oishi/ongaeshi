<?php
/*
Template Name:Company No side
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

 <div id="no_side_page">

  <div class="post clearfix">

   <?php the_content(); ?>
   <?php custom_wp_link_pages(); ?>

   <?php
        $company_info_label = $custom_field_template->get_post_meta($post->ID, 'company_info_label', false);
        $company_info_data = $custom_field_template->get_post_meta($post->ID, 'company_info_data', false);
        if ( is_array($company_info_label) ) {
   ?>
   <div id="company_info">
    <?php if (!empty($custom_fields['company_info_headline'][0])) {  ?><h4><?php echo $custom_fields['company_info_headline'][0]; ?></h4><?php }; ?>
    <dl class="clearfix">
     <?php foreach($company_info_label as $key => $val) { ?>
      <dt><?php echo wpautop($company_info_label[$key]); ?></dt>
      <dd><?php echo wpautop($company_info_data[$key]); ?></dd>
     <?php }; ?>
    </dl>
   </div>
   <?php }; ?>

   <?php if (!empty($custom_fields['company_map'][0])) {  ?>
   <div id="company_map_area" class="clearfix">
    <?php if (!empty($custom_fields['company_map_headline'][0])) {  ?><h4><?php echo $custom_fields['company_map_headline'][0]; ?></h4><?php }; ?>
    <div id="company_map">
     <?php echo $custom_fields['company_map'][0]; ?>
    </div>
    <?php if (!empty($custom_fields['company_map_desc'][0])) { ?>
    <div id="company_map_desc">
     <?php echo wpautop($custom_fields['company_map_desc'][0]); ?>
    </div>
    <?php }; ?>
   </div>
   <?php }; ?>

  </div><!-- END .post -->

  <?php endwhile; endif; ?>

 </div><!-- END #no_side_page -->

</div><!-- END #contents -->

<?php get_footer(); ?>