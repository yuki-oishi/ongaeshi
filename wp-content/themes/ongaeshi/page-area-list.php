<?php
/*
Template Name: エリアページ
*/
?>
<?php get_header(); ?>

  <main class="l-main">
    <div class="c-lower-mv p-area-detail__header">
      <div class="c-breadcrumbs l-row02">
        <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
        <span>対応エリア</span>
      </div>
      <h2 class="p-area__detail-ttl l-row02">対応エリア</h2>
    </div>

    <!-- <h2 class="c-h2">対応エリアをご紹介</h2> -->

    <div class="p-top-area">
      <div class="l-row02">        
      <div class="p-top-area__wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/area_map@2x_pc.png" alt="対応エリア" class="lozad p-top-area__pc" id="mapimg" width: 1100px; height: 612px;>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/area_map@2x_sp.png" alt="対応エリア" class="p-top-area__sp" id="mapimg2" width: 400px; height: 789px;>

				<ul class="c-areamap-list c-areamap-list-kanto">
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/gunma/')); ?>" class="c-areamap-list__link">群馬県</a></li>
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/tochigi/')); ?>" class="c-areamap-list__link">栃木県</a></li>
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/saitama/')); ?>" class="c-areamap-list__link">埼玉県</a></li>
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/ibaraki/')); ?>" class="c-areamap-list__link">茨城県</a></li>
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/tokyo/')); ?>" class="c-areamap-list__link">東京都</a></li>
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/chiba/')); ?>" class="c-areamap-list__link">千葉県</a></li>
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/kanagawa/')); ?>" class="c-areamap-list__link">神奈川県</a></li>
				</ul>
				<ul class="c-areamap-list c-areamap-list-chubu">
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/yamanashi/')); ?>" class="c-areamap-list__link">山梨県</a></li>
						<li class="c-areamap-list__item"><a href="<?php echo esc_url(home_url('/area/shizuoka/')); ?>" class="c-areamap-list__link">静岡県</a></li>
				</ul>



          <div class="p-top-area__txt">
            <p>遺品整理の鶴の恩返しは関東圏を全てカバー。お客様のご自宅の最寄りの拠点からスタッフがお伺いしますので、スピーディーかつリーズナブルに作業させていただきます。対応エリア外でも出張可能な範囲であれば柔軟に対応させていただきますので、お気軽にご相談ください。</p>
            <span>※対応エリア以外でも出張が可能な地域もあります!
              出張料金や追加請求などは一切ございません! お気軽にお問い合わせください。</span>
          </div>
        </div><!-- End area__wrap-->
      </div><!-- End inner-->
    </div><!-- End area-->

  </div>
</main>

<?php get_footer(); ?>