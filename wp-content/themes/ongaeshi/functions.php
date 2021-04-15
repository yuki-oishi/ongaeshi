<?php
add_action('wp_footer', 'add_thanks_page');
function add_thanks_page()
{
    echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = '[/* 遷移先のURL */]';
}, false );
</script>
EOD;
}

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

/* 投稿内でショートコード使用 */
add_shortcode('url', 'shortcode_url');
function shortcode_url()
{
    return get_bloginfo('url');
}
add_shortcode('tdir', 'tmp_dir');
function tmp_dir()
{
    return get_template_directory_uri();
}
add_shortcode('cdir', 'child_dir');
function child_dir()
{
    return get_stylesheet_directory_uri();
}
/* 管理画面で使用テンプレートを表示 */
function add_pages_columns( $columns )
{
    $columns['template'] = 'テンプレート';
    return $columns;
}
function custom_pages_column( $column_name, $post_id )
{
    if ($column_name == 'template' ) {
        $template = 'Default';
        $templates = get_page_templates();
        $template_slug = get_page_template_slug($post_id);
        foreach( $templates as $name => $file ) {
            if ($file == $template_slug ) {
                $template = $name;
            }
        }
        echo $template;
    }
}
add_filter('manage_pages_columns', 'add_pages_columns');
add_action('manage_pages_custom_column', 'custom_pages_column', 10, 2);


//固定ページのみ自動整形機能を無効化
function disable_page_wpautop()
{
    if (is_page() ) { remove_filter('the_content', 'wpautop');
    }
}
add_action('wp', 'disable_page_wpautop');

// カスタム投稿
// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//   register_post_type( 'news',
//   array(
//     'labels' => array(
//       'name' => __( 'NEWS' ),
//       'singular_name' => __( 'NEWS' )
//     ),
//     'public' => true,
//     'menu_position' =>5,
//   )
// );
// }

// ビジュアルエディター無効
add_filter('user_can_richedit', '__return_false');

//
// /**
//  * 通常投稿に親子関係を付ける
//  */
// function registered_post_hierarchical( $post_type, $post_type_object ) {
//   if ( $post_type == 'post' ) {
//     $post_type_object->hierarchical = true;
//     add_post_type_support( 'post', 'page-attributes' );
//   }
// }
// add_action( 'registered_post_type', 'registered_post_hierarchical', 10, 2 );


/*
  開発環境用
  http://localhost:8888/sample
  にアクセスするとpage-sample.phpが直接出力される
*/

add_action('add_admin_bar_menus', 'render_static_template');

function render_static_template()
{
    if (is_404()) :
        $request_path = strtok($_SERVER["REQUEST_URI"], '?'); // GETパラメータ除去
        $template_name = strtok($request_path, '/');
        if (strtok('/') !== false) { return; // root直下以外は弾く
        }
        $page_template_path = TEMPLATEPATH . '/page-'. $template_name.'.php';
        if (file_exists($page_template_path)) :
            include $page_template_path;
            exit;
        endif;
    endif;
}
function my_scripts()
{
    wp_enqueue_style('style-name-1', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('script-name-1', get_template_directory_uri() . '/assets/js/common.js', array( 'jquery' ), '1.0.0', true);
    wp_enqueue_script('script-name-2', get_template_directory_uri() . '/assets/js/min/jquery.rwdImageMaps.min.js', array( 'jquery' ), '1.0.0', true);
    wp_enqueue_script( 'script-name-3', get_template_directory_uri() . '/assets/js/min/jquery.vticker.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style( 'update-fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), microtime(),  'all' );    // wp_enqueue_script( 'script-name-4', get_template_directory_uri() . '/assets/js/wordpress.js', array( 'jquery' ), '1.0.0', true );
}
  add_action('wp_enqueue_scripts', 'my_scripts');

// templateのphpを管理画面上で読み込む
function my_php_Include($params = array())
{
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include STYLESHEETPATH . "/$file.php";
    return ob_get_clean();
}
  add_shortcode('myphp', 'my_php_Include');

function pccontent( $atts, $content = null ) {
if(wp_is_mobile()) {  
        return '';   
 } else {
        return '' . $content . '';
 }
}
function spcontent( $atts, $content = null ) {
if(wp_is_mobile()) {  
        return '' . $content . '';   
 } else {
        return '';
 }
}
add_shortcode('pc-site', 'pccontent');
add_shortcode('sp-site', 'spcontent');

function twpp_adjacent_post_link( $previous = true, $max_length = 10, $trim_marker = '...' ) {
    $html = '';
    $post = get_adjacent_post( false, '', $previous );
    
    if( !empty( $post ) ) {
      $title = apply_filters( 'the_title', $post->post_title );
  
      if( mb_strlen( $title ) > $max_length ) {
        $title = mb_substr( $title, 0, $max_length ) . $trim_marker;
      }    
  
      $html .= sprintf(
        '<a href="%s">%s</a>',
        esc_url( get_permalink( $post->ID ) ),
        $title
      );
  
      echo $html;
    }  
  }

  function pagination($pages = '', $range = 2) {
    $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

    global $paged;//現在のページ値
    if(empty($paged)) $paged = 1;//デフォルトのページ

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;//全ページ数を取得
        if(!$pages)//全ページ数が空の場合は、１とする
        {
            $pages = 1;
        }
    }

    if(1 != $pages)//全ページが１でない場合はページネーションを表示する
    {
        echo '<div class="pager">';
        echo '<ul class="pagination">';
        //Prev：現在のページ値が１より大きい場合は表示
        if($paged > 1) echo '<li class="pre"><a href="'.get_pagenum_link($paged - 1).'"><span>«</span></a></li>';

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
               echo ($paged == $i)? '<li><a class="active" href="'.get_pagenum_link($i).'"><span>'.$i.'</span></a></li>':'<li><a href="'.get_pagenum_link($i).'"><span>'.$i.'</span></a></li>';
            }
        }
       //Next：総ページ数より現在のページ値が小さい場合は表示
       if ($paged < $pages) echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>»</span></a></li>';
       echo "</ul>";
       echo "</div>";
    }
}

/* ヘッダの不要な物を削除する */
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_resource_hints',2);
remove_action('wp_head','wp_oembed_add_discovery_links');


/****************************************
		 デバイスの条件分岐
*****************************************/
//スマートフォンの判別
function wp_is_phone() {
	$ua = $_SERVER['HTTP_USER_AGENT'];
	if (   strpos($ua, 'iPhone') 							// iPhone
		|| strpos($ua, 'iPod') 								// iPod touch
		||(strpos($ua, 'Android') && strpos($ua, 'Mobile'))	// Android搭載スマホ
		||(strpos($ua, 'Windows') && strpos($ua, 'Mobile')) // Windows Phone
		||(strpos($ua, 'firefox') && strpos($ua, 'Mobile')) // firefox製ブラウザ
		|| strpos($ua, 'Opera Mini')						// Androidで人気のブラウザ
		|| strpos($ua, 'Opera Mobi')						// Androidで人気のブラウザ
		|| strpos($ua, 'webmate') 							// その他の Other iPhone browser
		|| strpos($uat,'incognito') 						// その他の iPhone browser
	) {
		return true;
	} else {
		return false;
	}
}
//タブレットの判別
function wp_is_tablet() {
	$uat = $_SERVER['HTTP_USER_AGENT'];
	if ( strpos($uat, 'iPad') // iPad
		||(strpos($uat, 'Android') && strpos($uat, 'Mobile')=== false ) // Android搭載タブレット
		|| strpos($uat, 'windows touch') //windows touch
		|| strpos($uat, 'Kindle') // Kindle
		|| strpos($uat, 'Silk') // Kindle に付属の Amazon 製ブラウザ
		|| strpos($uat, 'firefox tablet') //firefox tablet
		|| strpos($uat, 'WebOS') // Palm
	) {
		return true;
	} else {
		return false;
	}
}

    //記事内関連リンク
    function relation_function ( $atts ) {
    	extract( shortcode_atts( array(
    		'id' => '', //投稿ID
    		'slug' => '', //スラッグ
    	), $atts ) );

    	$my_url = home_url( '/' );
    	if($slug){ //スラッグから投稿IDを取得する
    		$id = url_to_postid($my_url. $slug);
    	}
    	$link = get_permalink($id); //投稿IDからURLを取得
    	$title = get_the_title($id); //投稿IDから記事タイトルを取得
        $image = get_field('mv', $id);
        $excerpt = get_the_excerpt();
        $url = "";
        if( array_key_exists( 'sizes', (array)$image ) ) {
            $size = $image['sizes'];
            if( array_key_exists( 'large', (array)$size ) ) {
                $url = $image['sizes']['large'];
            }
        }
    	return '<div class="relation"><div class="relation_label">関連記事</div><div class="relation_box"><div class="relation_img"><img src="'.$url.'"></div><div class="relation_desc"><p class="relation_title">'. $title.'</p><p class="relation_text">'. $excerpt.'</p></div></div><a href="'. $link .'" target="_blank"' .'></a></div>';
    }
    add_shortcode('relation', 'relation_function');