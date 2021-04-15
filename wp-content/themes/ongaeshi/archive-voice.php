<?php get_header(); ?>
<main class="l-main sp-menu-show">
    <div class="c-lower-mv">
        <div class="c-breadcrumbs l-row02">
            <a href="/">ホーム</a>
            <span>お客様の声</span>
        </div>
        <h2 class="c-lower-mv__title l-row02">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/voice_pc.png" alt="お客様の声" class="js-imageChange">
        </h2>
    </div>
    <div class="l-row02 c-contens-flex c-mt30">
        <div class="l-contents">
            <h2 class="c-h2">お客様の声一覧</h2>
            <p class="c-mt40 paragraph">鶴の恩返しのサービスをご利用いただいた<span class="bold-under-line">お客様の声とともに、作業事例を詳しくご紹介</span>いたします。</p>
            <p class="paragraph">鶴の恩返しでは、ご利用いただいたお客様へ<span class="red">「リアルなお声」</span>として<span class="bold-under-line">一つひとつを真摯に受け止めるべくアンケートにご協力いただいております。</span></p>
            <p class="paragraph">お褒めの言葉や至らぬ点のご指摘から<span class="red">全て社内で共有</span>し、改善へと繋げております。</span></p>
            <h3 class="search_header c-mt30">サービスからお客様の声を探す</h3>
            <div class="p-column-btn-wrap">
                <?php
                //タームの取得
                $terms = get_terms( 'voice_category', 'get=all' );
                //タームを出力
                if(!empty($terms) && !is_wp_error($terms)){
                ?>
                <?php foreach($terms as $term){ ?>
                    <a href="<?php echo get_term_link( $term->slug, 'voice_category' ); ?>"><?php echo $term->name; ?></a>
                <?php } ?>
                <?php } ?>
            </div><!-- End label-->

            <div class="p-voice-row02 c-mt30">
                <?php
                	$paged = get_query_var('paged') ?: 1;
                	$args = array(
                			'post_type' => 'voice',
                			'posts_per_page' => 10,
                			'paged' => $paged,
                	);
                	$voice_all_query = new WP_Query( $args );
                	if ( $voice_all_query->have_posts() ) :
                	while ( $voice_all_query->have_posts() ) : $voice_all_query->the_post();
                ?>
				<?php get_template_part('template-parts/voice-list'); ?>
                <?php endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>
            <div class="c-pagination u-mt80">
                <ul>
                    
										
					<?php wp_pagenavi(); ?>
                </ul>
            </div>
 <!-- 7つの理由 -->
<div class="p-top">
		<?php get_template_part('template-parts/7reasons'); ?>
</div>
<!-- 問い合わせバナー -->
<?php get_template_part('template-parts/saiyasu'); ?>
<!-- リーズナブルで明朗会計 -->
<div class="p-top_account c-mt80 p-wtop">
		<?php get_template_part('template-parts/reasonable'); ?>
</div>
<?php get_template_part('template-parts/gomimeyasu'); ?>
<?php get_template_part('template-parts/saiyasu'); ?>
<?php get_template_part('template-parts/flow'); ?>
<?php get_template_part('template-parts/payment'); ?>
<?php get_template_part('template-parts/faq'); ?>
<?php get_template_part('template-parts/taioharea'); ?>
<?php get_template_part('template-parts/list-service'); ?>
 
        </div>
		<?php get_template_part('sidebar'); ?>

    </div>
</main>
 <?php get_footer(); ?>
