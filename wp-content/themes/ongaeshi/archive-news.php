<?php get_header(); ?>
<main class="l-main">
    <div class="c-lower-mv">
        <div class="c-breadcrumbs l-row02">
            <a href="/">ホーム</a>
            <span>お知らせ</span>
        </div>
        <h2 class="c-lower-mv__title l-row02"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/news_pc.png"
							alt="お知らせ一覧"
							class="js-imageChange"
					/></h2>
    </div>
    <div class="l-row02 c-contens-flex">
        <div class="l-contents">
            <div class="p-news">
				<h2 class="c-h2">お知らせ</h2>
				<div class="p-news_wrap">
					<input id="tab1" type="radio" name="tab_btn" checked>
					<input id="tab2" type="radio" name="tab_btn">
					<input id="tab3" type="radio" name="tab_btn">
					<div class="p-news-tab">
                        <label class="tab1_label" for="tab1">全て</label>
                        <label class="tab2_label" for="tab2">新着情報</label>
                        <label class="tab3_label" for="tab3">メディア掲載情報</label>
					</div>

					<div class="p-news-tab-wrap panel_area">
							<?php get_template_part('template-parts/news-list'); ?>
							<div class="c-pagination">
								<ul>
									<?php wp_pagenavi(); ?>
								</ul>
							</div>
							<div class="p-news_year_wrap">
								<h4>年別記事一覧</h4>
								<ul>
									<li><a href="https://ihinseiri-ongaeshi.com/2020/">2020</a></li>
									<?php //wp_get_archives('type=yearly'); ?>
								</ul>
							</div>
						</div><!-- End tabarea-->
					</div><!-- End panel_area-->
				</div><!-- End p-news-->
			</div>
			<?php get_template_part('sidebar'); ?>
    </div>
</main>
 <?php get_footer(); ?>
