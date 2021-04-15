<?php
/*
Template Name:送信完了
*/
?>
<?php get_header(); ?>

        <main class="l-main">
            <div class="c-lower-mv">
                        <div class="c-breadcrumbs l-row02">
  <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                    <span>無料お見積り・ご相談</span>
                </div>
                <h2 class="c-lower-mv__title l-row02">
                                    <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/muryomitsumori_pc.png"
                                    alt="無料お見積り・ご相談"
                                    class="js-imageChange"
														/>
														
                                </h2>
            </div>
            <div class="l-row02 c-contens-flex">
                <div class="l-contents">
                    <div class="p-contact-page p-thanks">
                                            <h2 class="c-h2">無料メール査定 送信完了</h2>
                                            <div class="p-confirm-top p-thanks-txt c-p15">
                                                <p>送信が完了しました。<br>
                                                    <br>
                                                    この度はお問い合わせいただきありがとうございました。 
                                                    担当者より追って、ご連絡いたします。 
                                                    数日経っても返答がない場合、以下よりお問い合わせください。</p>
                                                    
                                                <p>お電話によるお問い合わせ<br>　【受付時間】9:00 ~ 21:00</p>
                                                <span>0120-  479 - 492</span>
                                            </div>
                                            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn_yellow p-thanks_btn">トップページに戻る</a>
                                            </div><!-- End contact-contnts-->
                    
                        <!-- formプラグイン -->
                                                    <?php echo do_shortcode('[mwform_formkey key="51"]'); ?>
                                    
                </div>
                <div class="p-sidebar">
                                    <?php get_sidebar(); ?>
                </div>
            </div>
        </main>
        <?php get_footer(); ?>