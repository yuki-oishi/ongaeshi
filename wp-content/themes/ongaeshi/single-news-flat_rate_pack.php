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
    <div class="l-row02 c-contens-flex p-flat_rate_pack">
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
              <div class="maintxt"><?php the_field('main-text'); ?></div>

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

              <?php if(!wp_is_mobile()) { ?>        
                <?php get_template_part('template-parts/saiyasu'); ?>


                <!-- add from front -->
                <div class="p-top_account c-mt80">
                  <?php get_template_part('template-parts/reasonable'); ?>
                </div>
                
                <h3 class="c-h3 c-mt40">ゴミ屋敷の片付けの料金目安</h3>
                <!-- パック料金表 -->
                <section class="c-mt30">
                  <p class="c-p15 paragraph">鶴の恩返しでは<span class="red">車両ごとに料金を設定する「パック」制を導入</span>していて、<span class="bold-under-line">お部屋の広さや不用品の量に応じてお選びいただけます。</span>通常、ゴミ屋敷の片付けには<span class="red">車両費、出張費、人件費、不用品の処分費用、買取手数料など、</span>料金がかかりますが、<span class="bold-under-line">鶴の恩返しならパック料金に全部コミコミ。</span>だから明朗会計。<span class="red">見積り後に、使途不明な追加料金やオプション料金は一切かかりません。</span>もし<span class="bold-under-line">他社よりも1円でも高かったらご相談ください。</span></p>
                  <p class="c-p15 paragraph">また<span class="red">「どのパックを選んでいいのか？」</span>など迷った場合はお気軽にお問い合わせください。<span class="bold-under-line">お部屋の状況によっては「遺品整理・生前整理」の作業でもこちらの定額パックをご利用いただけます。</span>お客さまのご状況をお伺いした上で、<span class="red">おすすめのプランをご提案</span>します。</p>
                  <figure class="u-mt20">
                      <img alt="パック料金表" class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pack-plan_pc.png">
                  </figure>
                  <div class="c-mt30">
                  <?php get_template_part('template-parts/wtokutoku'); ?>
                  </div>

                  <figure class="p-packPlan__free u-mt20">
                      <img alt="他社には真似できない別料金の内容もお得な定額パックプランなら以下のオプションも全て無料です。" class="js-imageChange"
                          src="<?php echo get_template_directory_uri(); ?>/assets/images/service/gomiyashiki/option_pc.png">
                          <?php get_template_part('template-parts/nimotsuryo'); ?>
                  </figure>
                  
              <a href="<?php echo esc_url(home_url('/price/')); ?>" class="c-btn_yellow p-top_price-btn">料金のご案内はこちらへ</a>
              <div class="c-mt80">
                  <div class="p-top_blue-04">
				            <?php get_template_part('template-parts/nomane'); ?>
                  </div><!-- End blue-item04-->
                </div><!-- End blueArea-->

                <?php get_template_part('template-parts/saiyasu'); ?>

                
                <?php get_template_part('template-parts/flow'); ?>
                
                <?php get_template_part('template-parts/faq'); ?>

                <!-- 問い合わせバナー -->
                <?php get_template_part('template-parts/saiyasu'); ?>


                <div class="p-top-voice ">
                  <h2 class="c-h2">お客様の声</h2>
                  <div class="swiper-container">
                    <div class="swiper-wrapper">

                      <?php
                      $paged = get_query_var('paged') ?: 1;
                      $args = array(
                        'post_type' => 'voice',
                        'posts_per_page' => -1,
                        'paged' => $paged,
                      );
                      $voice_all_query = new WP_Query($args);
                      if ($voice_all_query->have_posts()) :
                        while ($voice_all_query->have_posts()) : $voice_all_query->the_post();
                      ?>
                          <?php get_template_part('template-parts/voice-list'); ?>
                      <?php endwhile;
                      endif;
                      wp_reset_query();
                      ?>

                    </div>
                  </div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                  <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="c-btn c-btn_yellow u-mt40">お客様の声一覧を見る
                  </a>
                </div>
                <?php get_template_part('template-parts/taioharea'); ?>
                
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
            <?php } ?>
          </div>
          <?php if (wp_is_mobile()) { ?>
            <div class="p-top">
                <?php get_template_part('template-parts/saiyasu'); ?>


                <!-- add from front -->

                <div class="p-top_account c-mt80">
                  <?php get_template_part('template-parts/reasonable'); ?>
                </div>

                <h3 class="c-h3 c-mt40">ゴミ屋敷の片付けの料金目安</h3>
                <!-- パック料金表 -->
                <section class="c-mt30">
                  <p class="c-p15 paragraph">鶴の恩返しでは<span class="red">車両ごとに料金を設定する「パック」制を導入</span>していて、<span class="bold-under-line">お部屋の広さや不用品の量に応じてお選びいただけます。</span>通常、ゴミ屋敷の片付けには<span class="red">車両費、出張費、人件費、不用品の処分費用、買取手数料など、</span>料金がかかりますが、<span class="bold-under-line">鶴の恩返しならパック料金に全部コミコミ。</span>だから明朗会計。<span class="red">見積り後に、使途不明な追加料金やオプション料金は一切かかりません。</span>もし<span class="bold-under-line">他社よりも1円でも高かったらご相談ください。</span></p>
                  <p class="c-p15 paragraph">また<span class="red">「どのパックを選んでいいのか？」</span>など迷った場合はお気軽にお問い合わせください。<span class="bold-under-line">お部屋の状況によっては「遺品整理・生前整理」の作業でもこちらの定額パックをご利用いただけます。</span>お客さまのご状況をお伺いした上で、<span class="red">おすすめのプランをご提案</span>します。</p>
                  <figure class="u-mt20">
                      <img alt="パック料金表" class="js-imageChange" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pack-plan_pc.png">
                  </figure>
                  <div class="c-mt30">
                  <?php get_template_part('template-parts/wtokutoku'); ?>
                  </div>

                  <figure class="p-packPlan__free u-mt20">
                      <img alt="他社には真似できない別料金の内容もお得な定額パックプランなら以下のオプションも全て無料です。" class="js-imageChange"
                          src="<?php echo get_template_directory_uri(); ?>/assets/images/service/gomiyashiki/option_pc.png">
                          <?php get_template_part('template-parts/nimotsuryo'); ?>
                  </figure>
                  <a href="<?php echo esc_url(home_url('/price/')); ?>" class="c-btn_yellow p-top_price-btn">料金のご案内はこちらへ</a>
              <div class="c-mt80">
                  <div class="p-top_blue-04">
				            <?php get_template_part('template-parts/nomane'); ?>
                  </div><!-- End blue-item04-->
                </div><!-- End blueArea-->
                
                <?php get_template_part('template-parts/saiyasu'); ?>
                <?php get_template_part('template-parts/flow'); ?>
                <?php get_template_part('template-parts/saiyasu'); ?>


                <div class="p-top-voice ">
                  <h2 class="c-h2">お客様の声</h2>
                  <div class="swiper-container">
                    <div class="swiper-wrapper">

                      <?php
                      $paged = get_query_var('paged') ?: 1;
                      $args = array(
                        'post_type' => 'voice',
                        'posts_per_page' => -1,
                        'paged' => $paged,
                      );
                      $voice_all_query = new WP_Query($args);
                      if ($voice_all_query->have_posts()) :
                        while ($voice_all_query->have_posts()) : $voice_all_query->the_post();
                      ?>
                          <?php get_template_part('template-parts/voice-list'); ?>
                      <?php endwhile;
                      endif;
                      wp_reset_query();
                      ?>

                    </div>
                  </div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                  <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="c-btn c-btn_yellow u-mt40">お客様の声一覧を見る
                  </a>
                </div>
                
                <?php get_template_part('template-parts/taioharea'); ?>
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
          <?php } ?>
        </div>
		    <?php get_template_part('sidebar'); ?>
    </div>
</main>
<?php get_footer(); ?>
