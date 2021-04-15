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
									alt=""
									class="js-imageChange"
							/>
								</h2>
            </div>
            <div class="l-row02 c-contens-flex">
                <div class="l-contents">
                    <div class="p-contact-page">
											<div class="p-contact-page-top c-p15">
												<p>お問い合わせ・ご相談は以下のフォームより承っております。<br>
													各項目をご入力のうえ、最下部の「確認」ボタンをクリックしてお進みください。<br>
													※お問い合わせは24時間いつでも受け付けておりますが、午後18時以降、または日曜日にいただいたお問い合わせについては翌日のご連絡となりますのでご了承ください。</p>
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