<?php
global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
	$paginate_format = '';
	$paginate_base = add_query_arg('paged', '%#%');
} else {
	$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
	user_trailingslashit('page/%#%/', 'paged');;
	$paginate_base .= '%_%';
}

echo '<div class="page_navi clearfix">'. "\n";
if (show_posts_nav()) {
echo '<h4>';
_e("PAGE NAVI","tcd-w");
echo '</h4>' . "\n";
} else {
if(!is_post_type_archive('product')) {
echo '<p class="back"><a href="' . esc_url(home_url('/')) . '">';
_e("RETURN HOME","tcd-w");
echo '</a></p>';
};
};
echo paginate_links( array(
	'base' => $paginate_base,
	'format' => $paginate_format,
	'total' => $wp_query->max_num_pages,
	'mid_size' => 5,
	'current' => ($paged ? $paged : 1),
        'type' => 'list',
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
));
echo "\n</div>\n";
?>
