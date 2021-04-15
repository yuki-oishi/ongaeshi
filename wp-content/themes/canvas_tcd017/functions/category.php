<?php

// 画像アップロードに必要なファイルを読み込み -------------------------------------------------------
add_action('admin_print_scripts', 'my_admin_scripts_category');
add_action('admin_print_styles', 'my_admin_styles_category');
function my_admin_scripts_category() {
	global $taxonomy;
	if( 'category' == $taxonomy ) {
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_register_script('my-upload', get_bloginfo('template_directory') .'/admin/category/upload.js');
		wp_enqueue_script('my-upload');
	}
}
function my_admin_styles_category() {
	global $taxonomy;
	if( 'category' == $taxonomy ) {
		wp_enqueue_style('thickbox');
	}
}


// 入力欄を出力 -------------------------------------------------------
add_action ( 'edit_category_form_fields', 'extra_category_fields');
function extra_category_fields( $tag ) {
    $t_id = $tag->term_id;
    $cat_meta = get_option( "cat_$t_id");
?>
<tr class="form-field">
	<th><label for="upload_image">画像URL</label></th>
	<td>
		<input id="upload_image" type="text" size="36" name="Cat_meta[img]" value="<?php if(isset ( $cat_meta['img'])) echo esc_html($cat_meta['img']) ?>" /><br />
		画像を追加: <img src="images/media-button-other.gif" alt="画像を追加"  id="upload_image_button" value="Upload Image" style="cursor:pointer;" />
	</td>
</tr>
<?php
}


// データを保存 -------------------------------------------------------
add_action ( 'edited_term', 'save_extra_category_fileds');
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
	   $t_id = $term_id;
	   $cat_meta = get_option( "cat_$t_id");
	   $cat_keys = array_keys($_POST['Cat_meta']);
		  foreach ($cat_keys as $key){
		  if (isset($_POST['Cat_meta'][$key])){
			 $cat_meta[$key] = $_POST['Cat_meta'][$key];
		  }
	   }
	   update_option( "cat_$t_id", $cat_meta );
    }
}


?>