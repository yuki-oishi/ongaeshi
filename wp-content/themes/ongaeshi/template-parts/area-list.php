<?php
	$paged = get_query_var('paged') ?: 1;
	$args = array(
			'post_type' => 'area',
			'posts_per_page' => 10,
			'paged' => $paged,
	);
	$voice_all_query = new WP_Query( $args );
	if ( $voice_all_query->have_posts() ) :
			while ( $voice_all_query->have_posts() ) : $voice_all_query->the_post();
?>
<a href="<?php the_permalink(); ?>">
	<div class="p-area-index_item">
		<?php
			$term      = wp_get_object_terms($post->ID,'area_category'); //指定されたタクソノミーのタームを取得
			$term_name = $term[0]->name; //ターム名
		?>
		<h3>【<?php echo $term_name; ?>全域対応】遺品整理・生前整理でお困りのことならなんでも鶴の恩返しにお任せください！</h3>
	</div>
</a>
<?php endwhile;
endif;
wp_reset_query();
?>
