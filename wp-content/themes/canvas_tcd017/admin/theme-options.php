<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * オプション初期値
 * @var array 
 */
global $dp_default_options;
$dp_default_options = array(
	'pickedcolor1' => '00A2D9',
	'pickedcolor2' => '75DCFF',
	'logotop' => 0,
	'logoleft' => 0,
	'logotop2' => 0,
	'logoleft2' => 0,
	'content_font_size' => '14',
	'show_date' => 1,
	'show_category' => 1,
	'show_tag' => 1,
	'show_comment' => 1,
	'show_author' => 1,
	'show_trackback' => 1,
	'show_related_post' => 1,
	'show_next_post' => 1,
	'show_thumbnail' => 1,
	'show_bookmark' => 1,
	'show_rss' => 1,
	'twitter_url' => '',
	'facebook_url' => '',
	'custom_search_id' => '',
	'index_main_image1' => false,
	'index_main_image2' => false,
	'index_main_image3' => false,
	'index_topics_title1' => '',
	'index_topics_subtitle1' => '',
	'index_topics_url1' => '',
	'index_topics_image1' => false,
	'index_topics_title2' => '',
	'index_topics_subtitle2' => '',
	'index_topics_url2' => '',
	'index_topics_image2' => false,
	'index_topics_title3' => '',
	'index_topics_subtitle3' => '',
	'index_topics_url3' => '',
	'index_topics_image3' => false,
	'index_banner_url1' => '',
	'index_banner_image1' => false,
	'index_banner_url2' => '',
	'index_banner_image2' => false,
	'index_banner_url3' => '',
	'index_banner_image3' => false,
	'blog_main_image' => false,
	'product_main_image' => false,
	'product_archive_headline' => '',
	'product_archive_num' => '5',
	'news_main_image' => false,
	'news_archive_num' => '10',
        'index_headline_product' => 'NEW PRODUCTS',
        'index_headline_news' => 'NEWS',
        'index_headline_blog' => 'BLOG',
);

/**
 * Design Plusのオプションを返す
 * @global array $dp_default_options
 * @return array 
 */
function get_desing_plus_option(){
	global $dp_default_options;
	return shortcode_atts($dp_default_options, get_option('dp_options', array()));
}



// カラーピッカーの準備 その他javascriptの読み込み
add_action('admin_print_scripts', 'my_admin_print_scripts');
function my_admin_print_scripts() {
  wp_enqueue_script('jscolor', get_template_directory_uri().'/admin/jscolor.js');
  wp_enqueue_script('jquery.cookieTab', get_template_directory_uri().'/admin/jquery.cookieTab.js');
}



// 画像アップロードの準備
function wp_gear_manager_admin_scripts() {
wp_enqueue_script('dp-image-manager', get_template_directory_uri().'/admin/image-manager.js', array('jquery', 'jquery-ui-draggable', 'imgareaselect'));
wp_enqueue_script('dp-image-manager2', get_template_directory_uri().'/admin/image-manager2.js', array('jquery', 'jquery-ui-draggable', 'imgareaselect'));
}
function wp_gear_manager_admin_styles() {
wp_enqueue_style('imgareaselect');
}
add_action('admin_print_scripts', 'wp_gear_manager_admin_scripts');
add_action('admin_print_styles', 'wp_gear_manager_admin_styles');



// 登録
function theme_options_init(){
 register_setting( 'design_plus_options', 'dp_options', 'theme_options_validate' );
}



// ロード
function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'tcd-w' ), __( 'Theme Options', 'tcd-w' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}



// テーマオプション画面の作成
function theme_options_do_page() {
 global $dp_upload_error;
 $options = get_desing_plus_option(); 

 if ( ! isset( $_REQUEST['settings-updated'] ) )
  $_REQUEST['settings-updated'] = false;

?>

<div class="wrap">
 <?php echo "<h2>" . __( 'Theme Options', 'tcd-w' ) . "</h2>"; ?>

 <?php // 更新時のメッセージ
       if ( false !== $_REQUEST['settings-updated'] ) :
 ?>
 <div class="updated fade"><p><strong><?php _e('Updated', 'tcd-w');  ?></strong></p></div>
 <?php endif; ?>

 <?php /* ファイルアップロード時のメッセージ */ if(!empty($dp_upload_error['message'])): ?>
  <?php if($dp_upload_error['error']): ?>
   <div id="error" class="error"><p><?php echo $dp_upload_error['message']; ?></p></div>
  <?php else: ?>
   <div id="message" class="updated fade"><p><?php echo $dp_upload_error['message']; ?></p></div>
  <?php endif; ?>
 <?php endif; ?>
 
 <script type="text/javascript">
  jQuery(document).ready(function($){
   $('#my_theme_option').cookieTab({
    tabMenuElm: '#theme_tab',
    tabPanelElm: '#tab-panel'
   });
  });
 </script>

 <div id="my_theme_option">

 <div id="theme_tab_wrap">
  <ul id="theme_tab" class="cf">
   <li><a href="#tab-content1"><?php _e('Basic Setup', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content2"><?php _e('Logo', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content3"><?php _e('Footer logo', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content4"><?php _e('Index Setup', 'tcd-w');  ?></a></li>
  </ul>
 </div>

<form method="post" action="options.php" enctype="multipart/form-data">
 <?php settings_fields( 'design_plus_options' ); ?>

 <div id="tab-panel">

  <!-- #tab-content1 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content1">

   <?php // サイトカラー ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Site main color', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <input type="text" class="color" name="dp_options[pickedcolor1]" value="<?php esc_attr_e( $options['pickedcolor1'] ); ?>" />
     <input type="submit" class="button-primary" value="<?php echo __( 'Save Color', 'tcd-w' ); ?>" />
    </div>
    <p color="color_scheme" id="default_color1"><?php _e('Default color', 'tcd-w');  ?> ：00A2D9</p>
   </div>

   <?php // サイトカラー２ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Site secondary color', 'tcd-w');  ?></h3>
    <p><?php _e('We use this color for link hover effect.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <input type="text" class="color" name="dp_options[pickedcolor2]" value="<?php esc_attr_e( $options['pickedcolor2'] ); ?>" />
     <input type="submit" class="button-primary" value="<?php echo __( 'Save Color', 'tcd-w' ); ?>" />
    </div>
    <p color="color_scheme" id="default_color2"><?php _e('Default color', 'tcd-w');  ?> ：75DCFF</p>
   </div>

   <?php // フォントサイズ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Font size', 'tcd-w');  ?></h3>
    <p><?php _e('Font size of single page and wp-page.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <input id="dp_options[content_font_size]" class="font_size" type="text" name="dp_options[content_font_size]" value="<?php esc_attr_e( $options['content_font_size'] ); ?>" /><span>px</span>
    </div>
   </div>

   <?php // 投稿者名・タグ・コメント ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Display Setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <ul>
      <li><label><input id="dp_options[show_date]" name="dp_options[show_date]" type="checkbox" value="1" <?php checked( '1', $options['show_date'] ); ?> /> <?php _e('Display date', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_category]" name="dp_options[show_category]" type="checkbox" value="1" <?php checked( '1', $options['show_category'] ); ?> /> <?php _e('Display category', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_tag]" name="dp_options[show_tag]" type="checkbox" value="1" <?php checked( '1', $options['show_tag'] ); ?> /> <?php _e('Display tags', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_author]" name="dp_options[show_author]" type="checkbox" value="1" <?php checked( '1', $options['show_author'] ); ?> /> <?php _e('Display author', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_comment]" name="dp_options[show_comment]" type="checkbox" value="1" <?php checked( '1', $options['show_comment'] ); ?> /> <?php _e('Display comment', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_thumbnail]" name="dp_options[show_thumbnail]" type="checkbox" value="1" <?php checked( '1', $options['show_thumbnail'] ); ?> /> <?php _e('Display thumbnail at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_bookmark]" name="dp_options[show_bookmark]" type="checkbox" value="1" <?php checked( '1', $options['show_bookmark'] ); ?> /> <?php _e('Display bookmark at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_trackback]" name="dp_options[show_trackback]" type="checkbox" value="1" <?php checked( '1', $options['show_trackback'] ); ?> /> <?php _e('Display trackbacks at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_related_post]" name="dp_options[show_related_post]" type="checkbox" value="1" <?php checked( '1', $options['show_related_post'] ); ?> /> <?php _e('Display related post at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_next_post]" name="dp_options[show_next_post]" type="checkbox" value="1" <?php checked( '1', $options['show_next_post'] ); ?> /> <?php _e('Display next previous post link at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_rss]" name="dp_options[show_rss]" type="checkbox" value="1" <?php checked( '1', $options['show_rss'] ); ?> /> <?php _e('Display RSS at header', 'tcd-w');  ?></label></li>
     </ul>
    </div>
   </div>

   <?php // facebook twitter ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('twitter and facebook setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('When it is blank, twitter and facebook icon will not displayed on a site.', 'tcd-w');  ?></p>
     <ul>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('your twitter URL', 'tcd-w');  ?></label>
       <input id="dp_options[twitter_url]" class="regular-text" type="text" name="dp_options[twitter_url]" value="<?php esc_attr_e( $options['twitter_url'] ); ?>" />
      </li>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('your facebook URL', 'tcd-w');  ?></label>
       <input id="dp_options[facebook_url]" class="regular-text" type="text" name="dp_options[facebook_url]" value="<?php esc_attr_e( $options['facebook_url'] ); ?>" />
      </li>
     </ul>
    </div>
   </div>

   <?php // 検索の設定 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Using Google custom search', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('If you wan\'t to use google custom search for your wordpress, enter your google custom search ID.<br /><a href="https://cse.google.com/cse/" target="_blank">Read more about Google custom search page.</a>', 'tcd-w');  ?></p>
     <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Google custom search ID', 'tcd-w');  ?></label>
     <input id="dp_options[custom_search_id]" class="regular-text" type="text" name="dp_options[custom_search_id]" value="<?php esc_attr_e( $options['custom_search_id'] ); ?>" />
    </div>
   </div>

   <?php // ブログ用メイン画像 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Blog main image setup', 'tcd-w');  ?></h3>
    <p><?php _e('Image size must be Width:1000px Height:340px.<br />You can register image for blog category individually form category edit page.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[blog_main_image]" value="<?php esc_attr_e( $options['blog_main_image'] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['blog_main_image'])): ?>
        <input type="file" name="blog_main_image_file" id="blog_main_image_file" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['blog_main_image']) { ?>
       <div class="uploaded_banner_image">
        <img src="<?php esc_attr_e( $options['blog_main_image'] ); ?>" alt="" title="" />
       </div>
       <?php if(dp_is_uploaded_img($options['blog_main_image'])): ?>
       <div class="delete_uploaded_banner_image">
        <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_blog_main_image') ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
       </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>

   <?php // 商品用メイン画像 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Product archive page main image setup', 'tcd-w');  ?></h3>
    <p><?php _e('Image size must be Width:1000px Height:340px.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[product_main_image]" value="<?php esc_attr_e( $options['product_main_image'] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['product_main_image'])): ?>
        <input type="file" name="product_main_image_file" id="product_main_image_file" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['product_main_image']) { ?>
       <div class="uploaded_banner_image">
        <img src="<?php esc_attr_e( $options['product_main_image'] ); ?>" alt="" title="" />
       </div>
       <?php if(dp_is_uploaded_img($options['product_main_image'])): ?>
       <div class="delete_uploaded_banner_image">
        <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_product_main_image') ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
       </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
    <p>
     <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Tag line for Product archive page', 'tcd-w');  ?></label>
     <input id="dp_options[product_archive_headline]" class="regular-text" type="text" name="dp_options[product_archive_headline]" value="<?php esc_attr_e( $options['product_archive_headline'] ); ?>" />
    </p>
    <p>
     <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Number of item to show on Product archive page', 'tcd-w');  ?></label>
     <input id="dp_options[product_archive_num]" class="font_size" type="text" name="dp_options[product_archive_num]" value="<?php esc_attr_e( $options['product_archive_num'] ); ?>" />
    </p>
   </div>

   <?php // お知らせ用メイン画像 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('News archive page main image setup', 'tcd-w');  ?></h3>
    <p><?php _e('Image size must be Width:1000px Height:340px.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[news_main_image]" value="<?php esc_attr_e( $options['news_main_image'] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['news_main_image'])): ?>
        <input type="file" name="news_main_image_file" id="news_main_image_file" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['news_main_image']) { ?>
       <div class="uploaded_banner_image">
        <img src="<?php esc_attr_e( $options['news_main_image'] ); ?>" alt="" title="" />
       </div>
       <?php if(dp_is_uploaded_img($options['news_main_image'])): ?>
       <div class="delete_uploaded_banner_image">
        <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_news_main_image') ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
       </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
    <p>
     <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Number of news to show on News archive page', 'tcd-w');  ?></label>
     <input id="dp_options[news_archive_num]" class="font_size" type="text" name="dp_options[news_archive_num]" value="<?php esc_attr_e( $options['news_archive_num'] ); ?>" />
    </p>
   </div>

   <p class="submit"><input type="submit" class="button-primary" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" /></p>

  </div><!-- END #tab-content1 -->




  <!-- #tab-content2 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content2">

   <?php // ステップ１ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 1 : Upload image to use for logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('Upload image to use for logo from your computer.<br />You can resize your logo image in step 2 and adjust position in step 3.', 'tcd-w');  ?></p>
     <div class="button_area">
      <label for="dp_image"><?php _e('Select image to use for logo from your computer.', 'tcd-w');  ?></label>
      <input type="file" name="dp_image" id="dp_image" value="" />
      <input type="submit" class="button" value="<?php _e('Upload', 'tcd-w');  ?>" />
     </div>
     <?php if(dp_logo_exists()): $info = dp_logo_info(); ?>
     <div class="uploaded_logo">
      <h4><?php _e('Uploaded image.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image" id="original_logo_size">
       <?php dp_logo_img_tag(false, '', '', 9999); ?>
      </div>
      <p><?php printf(__('Original image size : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></p>
     </div>
     <?php else: ?>
     <div class="uploaded_logo">
      <h4><?php _e('The image has not been uploaded yet.<br />A normal text will be used for a site logo.', 'tcd-w');  ?></h4>
     </div>
     <?php endif; ?>
    </div>
   </div>

   <?php // ステップ２ ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 2 : Resize uploaded image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_logo_exists()): ?>
     <p><?php _e('You can resize uploaded image.<br />If you don\'t need to resize, go to step 3.', 'tcd-w');  ?></p>
     <div class="uploaded_logo">
      <h4><?php _e('Please drag the range to cut off.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_logo_resize_base(9999); ?>
      </div>
      <div class="resize_amount">
       <label><?php _e('Ratio', 'tcd-w');  ?>: <input type="text" name="dp_resize_ratio" id="dp_resize_ratio" value="100" />%</label>
       <label><?php _e('Width', 'tcd-w');  ?>: <input type="text" name="dp_resized_width" id="dp_resized_width" />px</label>
       <label><?php _e('Height', 'tcd-w');  ?>: <input type="text" name="dp_resized_height" id="dp_resized_height" />px</label>
      </div>
      <div id="resize_button_area">
       <input type="submit" class="button-primary" value="<?php _e('Resize', 'tcd-w'); ?>" />
      </div>
     </div>
     <?php if($info = dp_logo_info(true)): ?>
     <div class="uploaded_logo">
      <h4><?php printf(__('Resized image : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_logo_img_tag(true, '', '', 9999); ?>
      </div>
     </div>
     <?php endif; ?>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // ステップ３ ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 3 : Adjust position of logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_logo_exists()): ?>
     <p><?php _e('Drag the logo image and adjust the position.', 'tcd-w');  ?></p>
     <div id="tcd-w-logo-adjuster" class="ratio-<?php echo '760-760'; ?>">
      <?php if(dp_logo_resize_tag(760, 760, $options['logotop'], $options['logoleft'])): ?>
      <?php else: ?>
      <span><?php _e('Logo size is too big. Please resize your logo image.', 'tcd-w');  ?></span>
      <?php endif; ?>
     </div>
     <div class="hide">
      <label><?php _e('Top', 'tcd-w');  ?>: <input type="text" name="dp_options[logotop]" id="dp-options-logotop" value="<?php esc_attr_e( $options['logotop'] ); ?>" />px </label>
      <label><?php _e('Left', 'tcd-w');  ?>: <input type="text" name="dp_options[logoleft]" id="dp-options-logoleft" value="<?php esc_attr_e( $options['logoleft'] ); ?>" />px </label>
      <input type="button" class="button" id="dp-adjust-realvalue" value="adjust" />
     </div>
     <p><input type="submit" class="button" value="<?php _e('Save the position', 'tcd-w');  ?>" /></p>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // 画像の削除 ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Delete logo image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('If you delete the logo image, normal text will be used for a site logo.', 'tcd-w');  ?></p>
     <p><a class="button" href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_image_'.  get_current_user_id()); ?>" onclick="if(!confirm('<?php _e('Are you sure to delete logo image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w');  ?></a></p>
    </div>
   </div>
   <?php endif; ?>

  </div><!-- END #tab-content2 -->




  <!-- #tab-content3 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content3">

   <?php // ステップ１ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 1 : Upload image to use for logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('Upload image to use for logo from your computer.<br />You can resize your logo image in step 2 and adjust position in step 3.', 'tcd-w');  ?></p>
     <div class="button_area">
      <label for="dp_image2"><?php _e('Select image to use for logo from your computer.', 'tcd-w');  ?></label>
      <input type="file" name="dp_image2" id="dp_image2" value="" />
      <input type="submit" class="button" value="<?php _e('Upload', 'tcd-w');  ?>" />
     </div>
     <?php if(dp_footer_logo_exists()): $info = dp_footer_logo_info(); ?>
     <div class="uploaded_logo">
      <h4><?php _e('Uploaded image.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image" id="original_logo_size">
       <?php dp_footer_logo_img_tag(false, '', '', 9999); ?>
      </div>
      <p><?php printf(__('Original image size : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></p>
     </div>
     <?php else: ?>
     <div class="uploaded_logo">
      <h4><?php _e('The image has not been uploaded yet.<br />A normal text will be used for a site logo.', 'tcd-w');  ?></h4>
     </div>
     <?php endif; ?>
    </div>
   </div>

   <?php // ステップ２ ?>
   <?php if(dp_footer_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 2 : Resize uploaded image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_footer_logo_exists()): ?>
     <p><?php _e('You can resize uploaded image.<br />If you don\'t need to resize, go to step 3.', 'tcd-w');  ?></p>
     <div class="uploaded_logo">
      <h4><?php _e('Please drag the range to cut off.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_footer_logo_resize_base(9999); ?>
      </div>
      <div class="resize_amount">
       <label><?php _e('Ratio', 'tcd-w');  ?>: <input type="text" name="dp_resize_ratio2" id="dp_resize_ratio2" value="100" />%</label>
       <label><?php _e('Width', 'tcd-w');  ?>: <input type="text" name="dp_resized_width2" id="dp_resized_width2" />px</label>
       <label><?php _e('Height', 'tcd-w');  ?>: <input type="text" name="dp_resized_height2" id="dp_resized_height2" />px</label>
      </div>
      <div id="resize_button_area">
       <input type="submit" class="button-primary" value="<?php _e('Resize', 'tcd-w'); ?>" />
      </div>
     </div>
     <?php if($info = dp_footer_logo_info(true)): ?>
     <div class="uploaded_logo">
      <h4><?php printf(__('Resized image : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_footer_logo_img_tag(true, '', '', 9999); ?>
      </div>
     </div>
     <?php endif; ?>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // ステップ３ ?>
   <?php if(dp_footer_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 3 : Adjust position of logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_footer_logo_exists()): ?>
     <p><?php _e('Drag the logo image and adjust the position.', 'tcd-w');  ?></p>
     <div id="tcd-w-logo-adjuster2" class="ratio-<?php echo '760-760'; ?>">
      <?php if(dp_footer_logo_resize_tag(760, 760, $options['logotop2'], $options['logoleft2'])): ?>
      <?php else: ?>
      <span><?php _e('Logo size is too big. Please resize your logo image.', 'tcd-w');  ?></span>
      <?php endif; ?>
     </div>
     <div class="hide">
      <label><?php _e('Top', 'tcd-w');  ?>: <input type="text" name="dp_options[logotop2]" id="dp-options-logotop2" value="<?php esc_attr_e( $options['logotop2'] ); ?>" />px </label>
      <label><?php _e('Left', 'tcd-w');  ?>: <input type="text" name="dp_options[logoleft2]" id="dp-options-logoleft2" value="<?php esc_attr_e( $options['logoleft2'] ); ?>" />px </label>
      <input type="button" class="button" id="dp-adjust-realvalue2" value="adjust" />
     </div>
     <p><input type="submit" class="button" value="<?php _e('Save the position', 'tcd-w');  ?>" /></p>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // 画像の削除 ?>
   <?php if(dp_footer_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Delete logo image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('If you delete the logo image, normal text will be used for a site logo.', 'tcd-w');  ?></p>
     <p><a class="button" href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_footer_image_'.  get_current_user_id()); ?>" onclick="if(!confirm('<?php _e('Are you sure to delete logo image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w');  ?></a></p>
    </div>
   </div>
   <?php endif; ?>

  </div><!-- END #tab-content3 -->




  <!-- #tab-content4 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content4">

  <?php // トップページ メイン画像の登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Index main image setup', 'tcd-w');  ?></h3>
   <?php for($i = 1; $i <= 3; $i++): ?>
   <div class="theme_option_field cf">
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Register image','tcd-w'); ?><?php echo $i?> : <?php _e('(Recommend size. Width:1300px Height:470px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[index_main_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_main_image'.$i] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['index_main_image'.$i])): ?>
        <input type="file" name="index_main_image_file<?php echo $i?>" id="index_main_image_file<?php echo $i?>" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['index_main_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['index_main_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['index_main_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_index_main_image'.$i) ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
   <?php endfor; ?>
  </div>


  <?php // トップページ トッピクスの登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Index topics setup', 'tcd-w');  ?></h3>
   <?php for($i = 1; $i <= 3; $i++): ?>
   <div class="theme_option_field cf theme_option_field3">
    <div class="theme_option_input">
     <div class="sub_box">
      <h4><?php _e('Topics title', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_topics_title<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[index_topics_title<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_topics_title'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Topics sub title', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_topics_subtitle<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[index_topics_subtitle<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_topics_subtitle'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Topics image','tcd-w'); ?><?php echo $i?> : <?php _e('(Recommend size. Width:315px Height:150px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[index_topics_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_topics_image'.$i] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['index_topics_image'.$i])): ?>
        <input type="file" name="index_topics_image_file<?php echo $i?>" id="index_topics_image_file<?php echo $i?>" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['index_topics_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['index_topics_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['index_topics_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_index_topics_image'.$i) ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Topics link URL', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_topics_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[index_topics_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_topics_url'.$i] ); ?>" />
      </div>
     </div>
    </div>
   </div>
   <?php endfor; ?>
  </div>


  <?php // 見出しの設定 ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Headline setting', 'tcd-w');  ?></h3>
   <div class="theme_option_field cf">
    <div class="theme_option_input">
     <ul>
      <li>
       <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Headline for New Product', 'tcd-w');  ?></label>
       <input id="dp_options[index_headline_product]" class="regular-text" type="text" name="dp_options[index_headline_product]" value="<?php esc_attr_e( $options['index_headline_product'] ); ?>" />
      </li>
      <li>
       <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Headline for News', 'tcd-w');  ?></label>
       <input id="dp_options[index_headline_news]" class="regular-text" type="text" name="dp_options[index_headline_news]" value="<?php esc_attr_e( $options['index_headline_news'] ); ?>" />
      </li>
      <li>
       <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Headline for Blog', 'tcd-w');  ?></label>
       <input id="dp_options[index_headline_blog]" class="regular-text" type="text" name="dp_options[index_headline_blog]" value="<?php esc_attr_e( $options['index_headline_blog'] ); ?>" />
      </li>
     </ul>
    </div>
   </div>
  </div>


  <?php // トップページ バナーの登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Index banner setup', 'tcd-w');  ?></h3>
   <?php for($i = 1; $i <= 3; $i++): ?>
   <div class="theme_option_field cf theme_option_field3">
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Banner image','tcd-w'); ?><?php echo $i?> : <?php _e('(Recommend size. Width:315px Height:150px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[index_banner_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_banner_image'.$i] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['index_banner_image'.$i])): ?>
        <input type="file" name="index_banner_image_file<?php echo $i?>" id="index_banner_image_file<?php echo $i?>" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['index_banner_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['index_banner_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['index_banner_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_index_banner_image'.$i) ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Banner link URL', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[index_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>" />
      </div>
     </div>
    </div>
   </div>
   <?php endfor; ?>
  </div>

  <p class="submit"><input type="submit" class="button-primary" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" /></p>

  </div><!-- END #tab-content4 -->

  </div><!-- END #tab-panel -->

 </form>

</div>

</div>

<?php

 }


/**
 * チェック
 */
function theme_options_validate( $input ) {

 // 色の設定
 $input['pickedcolor1'] = wp_filter_nohtml_kses( $input['pickedcolor1'] );
 $input['pickedcolor2'] = wp_filter_nohtml_kses( $input['pickedcolor2'] );

 // フォントサイズ
 $input['content_font_size'] = wp_filter_nohtml_kses( $input['content_font_size'] );

 // 投稿者・タグ・コメント
 if ( ! isset( $input['show_date'] ) )
  $input['show_date'] = null;
  $input['show_date'] = ( $input['show_date'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_category'] ) )
  $input['show_category'] = null;
  $input['show_category'] = ( $input['show_category'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_tag'] ) )
  $input['show_tag'] = null;
  $input['show_tag'] = ( $input['show_tag'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_comment'] ) )
  $input['show_comment'] = null;
  $input['show_comment'] = ( $input['show_comment'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_trackback'] ) )
  $input['show_trackback'] = null;
  $input['show_trackback'] = ( $input['show_trackback'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_related_post'] ) )
  $input['show_related_post'] = null;
  $input['show_related_post'] = ( $input['show_related_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_next_post'] ) )
  $input['show_next_post'] = null;
  $input['show_next_post'] = ( $input['show_next_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_thumbnail'] ) )
  $input['show_thumbnail'] = null;
  $input['show_thumbnail'] = ( $input['show_thumbnail'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_rss'] ) )
  $input['show_rss'] = null;
  $input['show_rss'] = ( $input['show_rss'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_bookmark'] ) )
  $input['show_bookmark'] = null;
  $input['show_bookmark'] = ( $input['show_bookmark'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_author'] ) )
  $input['show_author'] = null;
  $input['show_author'] = ( $input['show_author'] == 1 ? 1 : 0 );

 // twitter,facebook URL
 $input['twitter_url'] = wp_filter_nohtml_kses( $input['twitter_url'] );
 $input['facebook_url'] = wp_filter_nohtml_kses( $input['facebook_url'] );

 // 検索の設定
 $input['custom_search_id'] = wp_filter_nohtml_kses( $input['custom_search_id'] );

 // 画像の登録
 $input['blog_main_image'] = wp_filter_nohtml_kses( $input['blog_main_image'] );
 $input['product_main_image'] = wp_filter_nohtml_kses( $input['product_main_image'] );
 $input['news_main_image'] = wp_filter_nohtml_kses( $input['news_main_image'] );
 $input['news_archive_num'] = wp_filter_nohtml_kses( $input['news_archive_num'] );
 $input['product_archive_headline'] = wp_filter_nohtml_kses( $input['product_archive_headline'] );
 $input['product_archive_num'] = wp_filter_nohtml_kses( $input['product_archive_num'] );

 // トップページ　メイン画像
 $input['index_main_image1'] = wp_filter_nohtml_kses( $input['index_main_image1'] );
 $input['index_main_image2'] = wp_filter_nohtml_kses( $input['index_main_image2'] );
 $input['index_main_image3'] = wp_filter_nohtml_kses( $input['index_main_image3'] );

 // トップページ　トピックス
 $input['index_topics_title1'] = wp_filter_nohtml_kses( $input['index_topics_title1'] );
 $input['index_topics_subtitle1'] = wp_filter_nohtml_kses( $input['index_topics_subtitle1'] );
 $input['index_topics_image1'] = wp_filter_nohtml_kses( $input['index_topics_image1'] );
 $input['index_topics_url1'] = wp_filter_nohtml_kses( $input['index_topics_url1'] );
 $input['index_topics_title2'] = wp_filter_nohtml_kses( $input['index_topics_title2'] );
 $input['index_topics_subtitle2'] = wp_filter_nohtml_kses( $input['index_topics_subtitle2'] );
 $input['index_topics_image2'] = wp_filter_nohtml_kses( $input['index_topics_image2'] );
 $input['index_topics_url2'] = wp_filter_nohtml_kses( $input['index_topics_url2'] );
 $input['index_topics_title3'] = wp_filter_nohtml_kses( $input['index_topics_title3'] );
 $input['index_topics_subtitle3'] = wp_filter_nohtml_kses( $input['index_topics_subtitle3'] );
 $input['index_topics_image3'] = wp_filter_nohtml_kses( $input['index_topics_image3'] );
 $input['index_topics_url3'] = wp_filter_nohtml_kses( $input['index_topics_url3'] );

 // 見出しの設定
 $input['index_headline_product'] = wp_filter_nohtml_kses( $input['index_headline_product'] );
 $input['index_headline_news'] = wp_filter_nohtml_kses( $input['index_headline_news'] );
 $input['index_headline_blog'] = wp_filter_nohtml_kses( $input['index_headline_blog'] );

 // トップページ　バナー画像
 $input['index_banner_image1'] = wp_filter_nohtml_kses( $input['index_banner_image1'] );
 $input['index_banner_url1'] = wp_filter_nohtml_kses( $input['index_banner_url1'] );
 $input['index_banner_image2'] = wp_filter_nohtml_kses( $input['index_banner_image2'] );
 $input['index_banner_url2'] = wp_filter_nohtml_kses( $input['index_banner_url2'] );
 $input['index_banner_image3'] = wp_filter_nohtml_kses( $input['index_banner_image3'] );
 $input['index_banner_url3'] = wp_filter_nohtml_kses( $input['index_banner_url3'] );


 //ロゴの位置
 if(isset($input['logotop'])){
	 $input['logotop'] = intval($input['logotop']);
 }
 if(isset($input['logoleft'])){
	 $input['logoleft'] = intval($input['logoleft']);
 }

 //ロゴの位置2
 if(isset($input['logotop2'])){
	 $input['logotop2'] = intval($input['logotop2']);
 }
 if(isset($input['logoleft2'])){
	 $input['logoleft2'] = intval($input['logoleft2']);
 }


 //ファイルアップロード
 if(isset($_FILES['dp_image'])){
	$message = _dp_upload_logo();
	add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }

 //ファイルアップロード2
 if(isset($_FILES['dp_image2'])){
	$message = _dp_upload_footer_logo();
	add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }

 //画像リサイズ
 if(isset($_REQUEST['dp_logo_resize_left'], $_REQUEST['dp_logo_resize_top']) && is_numeric($_REQUEST['dp_logo_resize_left']) && is_numeric($_REQUEST['dp_logo_resize_top'])){
	$message = _dp_resize_logo();
	add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }

 //画像リサイズ2
 if(isset($_REQUEST['dp_logo_resize_left2'], $_REQUEST['dp_logo_resize_top2']) && is_numeric($_REQUEST['dp_logo_resize_left2']) && is_numeric($_REQUEST['dp_logo_resize_top2'])){
	$message = _dp_resize_footer_logo();
	add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }


 //ブログ用メイン画像
 if(isset($_FILES['blog_main_image_file'])){
		 //画像のアップロードに問題はないか
		 if($_FILES['blog_main_image_file']['error'] === 0){
			 $name = sanitize_file_name($_FILES['blog_main_image_file']['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['blog_main_image_file']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['blog_main_image'] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
				}
			 }
		 }elseif($_FILES['blog_main_image_file']['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['blog_main_image_file']['error']), 'error');
		 }
 }


 //商品用メイン画像
 if(isset($_FILES['product_main_image_file'])){
		 //画像のアップロードに問題はないか
		 if($_FILES['product_main_image_file']['error'] === 0){
			 $name = sanitize_file_name($_FILES['product_main_image_file']['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['product_main_image_file']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['product_main_image'] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
				}
			 }
		 }elseif($_FILES['product_main_image_file']['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['product_main_image_file']['error']), 'error');
		 }
 }


 //お知らせ用メイン画像
 if(isset($_FILES['news_main_image_file'])){
		 //画像のアップロードに問題はないか
		 if($_FILES['news_main_image_file']['error'] === 0){
			 $name = sanitize_file_name($_FILES['news_main_image_file']['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['news_main_image_file']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['news_main_image'] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
				}
			 }
		 }elseif($_FILES['news_main_image_file']['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['news_main_image_file']['error']), 'error');
		 }
 }


 //トップページ　メイン画像の登録
 for($i = 1; $i <= 3; $i++){
	 if(isset($_FILES['index_main_image_file'.$i])){
		 //画像のアップロードに問題はないか
		 if($_FILES['index_main_image_file'.$i]['error'] === 0){
			 $name = sanitize_file_name($_FILES['index_main_image_file'.$i]['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['index_main_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['index_main_image'.$i] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
					break;
				}
			 }
		 }elseif($_FILES['index_main_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['index_main_image_file'.$i]['error']), 'error');
			 continue;
		 }
	 }
 }	 


 //トップページ　トピック画像の登録
 for($i = 1; $i <= 3; $i++){
	 if(isset($_FILES['index_topics_image_file'.$i])){
		 //画像のアップロードに問題はないか
		 if($_FILES['index_topics_image_file'.$i]['error'] === 0){
			 $name = sanitize_file_name($_FILES['index_topics_image_file'.$i]['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['index_topics_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['index_topics_image'.$i] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
					break;
				}
			 }
		 }elseif($_FILES['index_topics_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['index_topics_image_file'.$i]['error']), 'error');
			 continue;
		 }
	 }
 }	 


 //トップページ　バナー画像の登録
 for($i = 1; $i <= 3; $i++){
	 if(isset($_FILES['index_banner_image_file'.$i])){
		 //画像のアップロードに問題はないか
		 if($_FILES['index_banner_image_file'.$i]['error'] === 0){
			 $name = sanitize_file_name($_FILES['index_banner_image_file'.$i]['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['index_banner_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['index_banner_image'.$i] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
					break;
				}
			 }
		 }elseif($_FILES['index_banner_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['index_banner_image_file'.$i]['error']), 'error');
			 continue;
		 }
	 }
 }	 



 return $input;
}

?>