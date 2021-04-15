<div class="p-top-voice c-mt80">
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