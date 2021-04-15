<!-- Start item-->
<div class="p-column-item "  style="display:block;">
	<div class="p-column-item_top">
		<span class="p-column-item_cat p-column-item_cat01">
			<?php
			 $term      = wp_get_object_terms($post->ID,'column_category'); //指定されたタクソノミーのタームを取得
			 $term_name = $term[0]->name; //ターム名
			?>
			<?php echo $term_name; ?>
		</span>
		<time><?php the_time('Y/m/j'); ?></time>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	<div class="p-column-item_flex">
		<div class="p-column-item_img">
						<?php 
								$image = get_field('mv'); 
								$alt = "";
								$url = "";
								if( array_key_exists( 'alt', (array)$image ) ) {
									$alt = $image['alt'];
								}
								if( array_key_exists( 'sizes', (array)$image ) ) {
									$size = $image['sizes'];
									if( array_key_exists( 'medium', (array)$size ) ) {
										$url = $image['sizes']['medium'];
									}
								}
						?>
			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
		</div>
		<div class="p-column-item_txt">
			<div class="abbr"><?php the_field('main-text'); ?></div>
			<a href="<?php the_permalink(); ?>" class="p-column-item_link">
				もっと見る
			</a>
		</div>
	</div>
</div>
<!-- // Start item-->
