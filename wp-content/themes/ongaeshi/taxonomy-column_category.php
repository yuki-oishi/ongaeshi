<?php get_header(); ?>
<main class="l-main">
	<div class="c-lower-mv">
		<div class="c-breadcrumbs l-row02">
			<a href="/">ホーム</a>
			<span>お役立ちコラム</span>
		</div>
		<h2 class="p-area__detail-ttl l-row02">お役立ちコラム</h2>
		<!-- <h2 class="c-lower-mv__title l-row02"> <img
			src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/columns_pc.png"
							alt="お役立ちコラム一覧"
							class="js-imageChange"
					/>
		</h2> -->
	</div>
	<div class="l-row02 c-contens-flex">
		<div class="l-contents">
			<div class="p-column c-p15 ">
				<div class="p-column-btn-wrap">
					<?php
					//タームの取得
					$terms = get_terms( 'column_category', 'get=all' );
					//タームを出力
					if(!empty($terms) && !is_wp_error($terms)){
					?>
					<?php foreach($terms as $term){ ?>
						<a href="<?php echo get_term_link( $term->slug, 'column_category' ); ?>"><?php echo $term->name; ?></a>
					<?php } ?>
					<?php } ?>
				</div><!-- End label-->

				<h2 class="c-h2 p-column-h2"><?php echo single_term_title(); ?>の記事一覧</h2>
				<div class="p-column-panel u-mt40">
					<div>
					<?php if(have_posts()): ?>
						<?php while(have_posts()):the_post(); ?>
							<?php get_template_part('template-parts/column-list'); ?>
						<?php endwhile;
					else:
						echo '<p>まだ記事がありません</p>';
					endif; ?>

					</div><!-- End panel1-->
					<div class="c-pagination u-pt40">
						<ul>
							<?php wp_pagenavi(); ?>
						</ul>
					</div>
				</div><!-- End panel-->
			</div><!-- End column-->
</div>
<?php get_template_part('sidebar'); ?>

</div>
</main>
<?php get_footer(); ?>
