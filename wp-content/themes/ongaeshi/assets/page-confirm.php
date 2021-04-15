<?php
/*
Template Name:送信確認
*/
?>
		<?php get_header(); ?>
		<main class="l-main">
            <div class="c-lower-mv">
                <div class="c-breadcrumbs l-row02">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
                    <span>無料お見積り・ご相談</span>
                </div>
                <h2 class="c-lower-mv__title l-row02">
									<img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/muryomitsumori_pc.png"
									alt=""
									class="js-imageChange"
							/>
							</h2>
            </div>
            <div class="l-row02 c-contens-flex">
                <div class="l-contents">
                    <div class="p-contact-page p-confirm">
											<div class="p-confirm-top c-p15">
												<p>「以下の入力情報を確認後、「送信する」ボタンを押してください。</p>
													
												<p>お電話によるお問い合わせ<br>　【受付時間】9:00 ~ 21:00</p>
												<span>0120-  479 - 492</span>
											</div>

												<!-- formプラグイン -->
													<?php echo do_shortcode('[mwform_formkey key="51"]'); ?>
											</div><!-- End contact-contnts-->
									
                </div>
                <div class="p-sidebar">
									<?php get_sidebar(); ?>
                </div>
            </div>
		</main>
		<?php get_footer(); ?>