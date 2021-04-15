<?php get_header(); ?>
<main class="l-main">
    <div class="c-lower-mv">
        <div class="c-breadcrumbs l-row02">
            <a href="/">ホーム</a>
            <span>お知らせ</span>
        </div>
        <h2 class="c-lower-mv__title l-row02">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/news_pc.png"
							alt="お知らせ"
							class="js-imageChange"
			/>
		</h2>
    </div>
    <div class="l-row02 c-contens-flex">
        <div class="l-contents">
        <div class="p-news-detail c-p15">
				<?php
if ($terms = get_the_terms($post->ID, 'news_category')) {
    foreach ( $terms as $term ) {
        echo '<span class="p-news-item_cat p-news-item_cat01">' .$term->name. '	</span>';
    }
}
?>

					<time><?php the_time("Y/m/j") ?></time>
					<h3 class="title"><?php the_title(); ?></h3>
				<div class="p-column-detail_img">
					<img src="<?php the_field('mv'); ?>" alt="お知らせ" class="js-imageChange">
				</div>
				<p class="maintxt"><?php the_field('main-text'); ?></p>

				<?php if(get_field('section-field')): ?>
					<?php while(the_repeater_field('section-field')):?>
						<div class="c-gray-hedding p-news-detail_hedding u-mt20">

							<h4>
								<?php the_sub_field('heading'); ?>
							</h4>
						</div>
						<p>
							<?php the_sub_field('text'); ?>
						</p>
					<?php endwhile;?>
				<?php endif; ?>
				<?php wp_reset_postdata();?>
				<div class="c-pagination-detail">
					<ul>
						
						<li>
										<?php if (get_previous_post()):?>
											<?php previous_post_link('<p> %link</p>', '%title'); ?>
										<?php endif; ?>
													</li>

													<li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" >お知らせ一覧</a></li>

													<li>
													<?php if (get_next_post()):?>
													<?php next_post_link('<p>%link</p>', '%title'); ?>
														<?php endif; ?>
					</ul>
				</div>
			</div>
        </div>
		<?php get_template_part('sidebar'); ?>
    </div>
</main>
<?php get_footer(); ?>
