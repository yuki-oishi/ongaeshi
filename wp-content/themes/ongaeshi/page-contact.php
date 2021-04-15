<?php
/*
Template Name:お問合せ
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
									alt="お問い合せ"
									class="js-imageChange"
							/>
								</h2>
            </div>
            <div class="l-row02 c-contens-flex">
                <div class="l-contents">
                    <div class="p-contact-page">
											<div class="p-contact-page-top c-p15">
												<p>お問い合わせ・ご相談は<span class="red">以下のフォーム</span>より承っております。<br>
													各項目をご入力のうえ、<span class="bold-under-line">最下部の「入力内容の確認」ボタンをクリック</span>してお進みください。<br>
													※お問い合わせは<span class="red">24時間</span>いつでも受け付けております。お気軽にお問い合わせください。</p>
													<a href="<?php echo esc_url( home_url( '/estimate/' ) ); ?>" class="c-btn_yellow" >LINEお見積りはこちら</a>
													
													<a href="<?php echo esc_url( home_url( '/estimate/' ) ); ?>" class="p-contact-page-top_link-sp" >LINEお見積りはこちら</a>
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