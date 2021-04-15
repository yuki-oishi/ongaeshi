<?php get_header(); ?>
<main class="l-main">
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
            <p class="c-mt40 paragraph">鶴の恩返しのサービスをご利用いただいたお客様の声とともに、作業事例を詳しくご紹介いたします。</p>
            <p class="paragraph">鶴の恩返しでは、ご利用いただいたお客様へ「リアルなお声」として一つひとつを真摯に受け止めるべくアンケートにご協力いただいております。</p>
            <p class="paragraph">お褒めの言葉や至らぬ点のご指摘から全て社内で共有し、改善へと繋げております。</p>
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
                <?php if(have_posts()): ?>
                    <?php while(have_posts()):the_post(); ?>
	    			    <?php get_template_part('template-parts/voice-list'); ?>
                    <?php endwhile;
                else:
                    echo '<p>まだ記事がありません</p>';
                endif; ?>

            </div>
            <div class="c-pagination u-mt80">
                <ul>
					<?php wp_pagenavi(); ?>
                </ul>
            </div>
        </div>
		<?php get_template_part('sidebar'); ?>

    </div>
</main>
 <?php get_footer(); ?>
