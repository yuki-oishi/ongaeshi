<?php get_header(); ?>
<main class="l-main s-column">
    <div class="c-lower-mv">
        <div class="c-breadcrumbs l-row02">
            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
            <a href="<?php echo esc_url(home_url('/column/')); ?>">お役立ちコラム</a>
            <span><?php the_title(); ?></span>
		</div>
        <h2 class="p-area__detail-ttl l-row02">お役立ちコラム</h2>
        <!-- <h2 class="c-lower-mv__title l-row02">
							<img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/column_pc.png"
							alt="遺産整理のお役立ちコラム"
							class="js-imageChange"
					/>
		</h2> -->
    </div>
    <div class="l-row02 c-contens-flex">
        <div class="l-contents ">
    		<div class="p-column-detail c-p15">
				<?php
if ($terms = get_the_terms($post->ID, 'column_category')) {
    foreach ( $terms as $term ) {
        echo '<span class="p-column-item_cat p-column-item_cat01">' .$term->name. '	</span>';
    }
}
?>

    			<time><?php the_time("Y/m/j") ?></time>
    			<h3><?php the_title(); ?></h3>
    			<div class="p-column-detail_img">
					<?php
								$image = get_field('mv');
								$alt = "";
								$url = "";
								if( array_key_exists( 'alt', (array)$image ) ) {
									$alt = $image['alt'];
								}
								if( array_key_exists( 'sizes', (array)$image ) ) {
									$size = $image['sizes'];
									if( array_key_exists( 'large', (array)$size ) ) {
										$url = $image['sizes']['large'];
									}
								}
						?>
    				<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
    			</div>
					<div><?php the_field('main-text'); ?></div>
					<section>
					<?php
					    while (have_posts()) {
								the_post();
								the_content();
							}
					?>
					</section>
					<?php wp_reset_postdata();?>

    			<div class="c-pagination-detail">
						<ul>
							<li><?php
											if (wp_is_mobile()) {
												twpp_adjacent_post_link(true, 6);

											} else {
												twpp_adjacent_post_link(true);
											}
									?>
							</li>
							<li><a href="<?php echo esc_url( home_url( '/column/' ) ); ?>" >コラム一覧</a></li>
							<li><?php
											if (wp_is_mobile()) {
												twpp_adjacent_post_link(false, 6);

											} else {
												twpp_adjacent_post_link(false);
											}
									?>
							</li>
						</ul>
				</div>
    		</div>
        </div>
		<?php get_template_part('sidebar'); ?>
    </div>
</main>
<?php get_footer(); ?>
