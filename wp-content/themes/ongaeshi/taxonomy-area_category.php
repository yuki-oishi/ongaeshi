<?php
/*
Template Name: エリア
*/
?>
		<?php get_header(); ?>
		<main class="l-main">
            <div class="c-lower-mv">
                <div class="c-breadcrumbs l-row02">
                    <a href="/">ホーム</a>
                    <span>対応エリア一覧</span>
                </div>
                <h2 class="c-lower-mv__title l-row02">
									<img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/taiouarea_pc.png"
									alt="対応エリア一覧"
									class="js-imageChange"
							/>
								</h2>
            </div>
            <div class="l-row02 c-contens-flex">
                <div class="l-contents">
                    <div class="p-area-index">
											<h2 class="c-h2">対応エリアの一覧</h2>
											<div class="p-area-index_wrap c-p15">
												<?php get_template_part('template-parts/area-list'); ?>
												<div class="c-pagination">
													<ul>
														<!-- <li><a href="">前へ</a></li>
														<li><a href="">1</a></li>
														<li><a href="">2</a></li>
														<li><a href="">3</a></li>
														<li><a href="">4</a></li>
														<li><a href="">…  </a></li>
														<li><a href="">５</a></li>
														<li><a href="">次へ</a></li> -->
														<?php wp_pagenavi(); ?>
													</ul>
												</div>
											</div><!-- End wrap-->

											<div class="p-area-index_img">
												<img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/banner.png"
										alt="業界最安保証！" 
									class="js-imageChange"
							/>
											<div class="p-area-index_img-link">
												<a href="tel:0120-479-492" class="c-tell">
													<img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer/call@2x_pc.png"
									alt="遺品整理鶴の恩返し電話番号"
									class="js-imageChange"
							/>
												</a>
												<a href="/contact/">
													<img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer/mail@2x_pc.png"
									alt="無料メール見積り"
									class="js-imageChange"
							/>
												</a>
											</div>
											</div>
										</div>

                </div>
				<?php get_template_part('sidebar'); ?>
            </div>
		</main>
		 <?php get_footer(); ?>
