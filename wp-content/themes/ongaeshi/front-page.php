<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>
<main class="p-top">
	<div class="p-top-mv">
	<div class="trim">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/main_pc.png" alt="業界最安値保証!鶴の恩返しに全てお任せください!" class="js-imageChange lozad" />
	</div>
	</div>
	<div class="l-row02">
		<div class="announce">
			<div class="announce__title">新型コロナウイルス感染予防について</div>
			<div class="announce__body">
				<p>当社ではお客様に安心してご利用いただけるよう、<span class="bold-under-line">新型コロナウイルス感染予防の取り組みとして、以下の対応を実施</span>しております。</p>
				<ul class="fwb __sp mt-10">
					<li>・マスク着用の徹底</li>
					<li>・手洗い、うがい</li>
					<li>・アルコール消毒の徹底</li>
					<li>・検温の実施</li>
					<li>・体調不良（発熱・咳・嘔吐・下痢等）の者は出勤停止</li>
				</ul>
				<p class="fwb __pc">マスク着用の徹底 / 手洗い・うがい / アルコール消毒の徹底 / 検温の実施 / 体調不良（発熱・咳・嘔吐・下痢等）の者は出勤停止</p>
				<p class="announce__tyushaku mt-10">※サービス提供中はお部屋の換気をお願いする場合があるため、予めご了承下さい。</p>
				<p class="announce__tyushaku">※作業スタッフは当日検温を行い、 37.5 度以上の熱がある場合、出勤を控えるよう徹底しております。</p>
				<p class="announce__tyushaku">※感染予防の取り組みとして、マスク着用を徹底しているため、着用しながら接客を行うことがございます。予めご了承下さい。</p>
				<p class="mt-10">
					<span class="bold-under-line">今後もお客様ならびに従業員や家族の健康と安全を最大限配慮し、対応してまいりますので、何卒、宜しくお願い申し上げます。</span>
				</p>
			</div>
		</div>
		<section id="mitsumori" class="mitsumori m-sec">
				<ul id="mitsumori-list" class="mitsumori__ul">
						<?php 
								$args = array(
												'posts_per_page' => 20, // 表示する投稿数
												'post_type' => array('quotation_request'), // 取得する投稿タイプのスラッグ
												'orderby' => 'date', //日付で並び替え
												'order' => 'DESC', // 降順 or 昇順
										);
								
								$my_posts = get_posts($args);
								foreach ($my_posts as $post) : setup_postdata($post);
						?>
								<li class="mitsumori__li">
										<span class="mitsumori__date"><?php echo the_time('Y/m/d'); ?></span>
										<?php 
												$info_date = new Datetime(get_the_time('Y/m/d'));
												$now_date = new Datetime(date('Y/m/d'));
												// 7日以内だったらNEWをつける
												$interval = $info_date->diff($now_date);
												if ($interval->days < 8) {
														echo '<span class="mitsumori__new">NEW</span>';
												}
										?>
										<span class="mitsumori__text"><?php the_title(); ?></span>
								</li>
						<?php 
								endforeach;
						?>
				</ul>
		</section>
	</div>

	<div class="p-top-contents_wrap l-row02">
		<div class="l-contents c-mt30">

				<section class="mb40 only_sp_padding">
					<a href="<?php echo esc_url(home_url('/first/')); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/first/first-pc.jpg" alt="初めての方へ" class="lozad js-imageChange">
					</a>
				</section>

				<section class="mb40 only_sp_padding">
					<a href="<?php echo esc_url(home_url('/news/flat_rate_pack/')); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/flat-rate-pack1_pc.jpg" alt="得トク定額パック" class="lozad js-imageChange">
					</a>
				</section>

				<div class="p-top_trable">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/onayami_pc.png" alt="遺品整理でこんなお悩みありませんか？" class="lozad pc-photo" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/onayami_sp.png" alt="遺品整理でこんなお悩みありませんか？" class="lozad sp-photo" />
					<ul>
						<li>大量に物があって<span class="bold-under-line">整理がしきれない</span></li>
						<li>大きな家財道具や家電があって<span class="bold-under-line">一人では運べない</span></li>
						<li>賃貸物件で<span class="bold-under-line">退去日が迫っている</span></li>
						<li>忙しくて<span class="bold-under-line">遺品整理にまで手が回らない</span></li>
						<li>大量の<span class="bold-under-line">不用品の処分に困っている</span></li>
						<li>骨董品や美術品を<span class="bold-under-line">買取ってほしい</span></li>
						<li>想い出の品や大事な書類などを<span class="bold-under-line">探してほしい</span></li>
						<li>遠方に住んでいるから<span class="bold-under-line">1 日で作業を終わらせたい</span></li>
						<li>すぐにでも家の中を<span class="bold-under-line">整理してほしい</span></li>
						<li>なるべく<span class="bold-under-line">安く遺品整理をお願いしたい</span></li>
					</ul>
					<div class="arrow3 tac mt-2"></div>
					<div class="p-top_trable-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/banner@2x_pc.png" alt="鶴の恩返しにお任せください" class="js-imageChange lozad" />
					</div>
				</div><!-- End trable-->

			<div class="p-top_sport c-mt30
                            ">
				<h2 class="c-h2">実績豊富なスタッフがサポート</h2>
				<p class="c-mt40 p-top-inner_sp">
					鶴の恩返しは<span class="bold-under-line">遺品整理や生前整理、ゴミ屋敷の片付け、遺品買取や不用品買取を専門に行っている業者</span>です。スタッフはさまざまな現場で経験を積んでいるので、<span class="red">スムーズに作業を実現</span>します。室内清掃やゴミ屋敷の整理など、<span class="bold-under-line">一般の方が手を付けられないような状況でも対応可能</span>です。ご遺族の方の心情に配慮し、故人と遺品に敬意を払いながら、<span class="red">一品一品心を込めて仕分け</span>をさせていただきます。
					<br>
					<br>
					遺品整理をご依頼される方は<span class="red">急いでおられるケースがほとんど</span>です。私たちはご遺族の方のご期待に応えるべく、<span class="bold-under-line">スピーディーな対応</span>を大切にしています。<span class="red">現地調査や作業日</span>もお客さまのご都合に合わせて行わせていただき、<span class="bold-under-line">最短即日の作業も可能です。</span>
					<br>
					<br>
					<span class="bold-under-line">不用品の処分もお任せください。</span>当社のトラックですべて持ち帰らせていただくため、<span class="red">お客さまが労力と時間をかけて不用品を処分する必要はありません。</span>美術品や骨董品、家電、家具、人形や昭和のレトロなおもちゃなど、<span class="bold-under-line">価値があるものは他社より1円でも高く買い取らせていただきます。</span>また大切な遺品や不用品をお買取りさせて頂いた利益は、お見積り時に<span class="red">作業料金に充てて更にお値引きすることも可能</span>です。その他、<span class="bold-under-line">現金化することも可能です。</span><br>
					<br>
					<span class="bold-under-line">遺品整理や生前整理、ゴミ屋敷の片付け、遺品買取や不用品買取でお困りなら鶴の恩返しに全てお任せください。</span>

				</p>
			</div>

			<?php get_template_part('template-parts/list-service'); ?>

			<?php get_template_part('template-parts/7reasons'); ?>

			<?php get_template_part('template-parts/saiyasu'); ?>

			<?php get_template_part('template-parts/reasonable'); ?>

			
			<?php get_template_part('template-parts/gomimeyasu'); ?>
			<div class="c-mt80 p-top_blue-04 c-mt40">
				<?php get_template_part('template-parts/nomane'); ?>
			</div><!-- End blue-item04-->

			<?php get_template_part('template-parts/saiyasu'); ?>
			<?php get_template_part('template-parts/flow'); ?>
			<?php get_template_part('template-parts/payment'); ?>
			<?php get_template_part('template-parts/faq'); ?>
			<?php get_template_part('template-parts/saiyasu'); ?>
			<?php get_template_part('template-parts/voice'); ?>
			<?php get_template_part('template-parts/taioharea'); ?>

			<div class="p-top_news c-mt80">
				<h2 class="c-h2">お知らせ</h2>
				<div class="p-top_news-wrap">
					<input id="tab1" type="radio" name="tab_btn" checked>
					<input id="tab2" type="radio" name="tab_btn">
					<div class="p-top_news-tab tab_area">

						<label class="tab1_label" for="tab1">新着情報</label>
						<label class="tab2_label" for="tab2">メディア掲載情報</label>
					</div><!-- End tab-->
					<div class="p-top_news-tab-wrap panel_area">
						<div class="p-top_news-new tab_panel" id="panel1">
							<div class="p-top_news-item-wrap">
								<?php query_posts(
									array(
										'post_type' => array('news', 'voice'), //カスタム投稿名を指定
										// 'taxonomy' => 'news_category',     //タクソノミー名を指定
										// 'term' => 'new',           //タームのスラッグを指定
										'posts_per_page' => 3      ///表示件数（-1で全ての記事を表示）
									)
								); ?>
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div class="p-top_news-item">
											<div class="p-top_news-itemImg">
												<?php if (has_post_thumbnail()) { ?>
													<img src="<? echo get_the_post_thumbnail_url(); ?>" alt="" class="lozad">
												<?php } else if(get_post_type() == 'news') { ?>
													<img src="<?php the_field('mv'); ?>" alt="新着情報" class="lozad">
												<?php } else if(get_post_type() == 'voice') { ?>

																<?php
																	$terms = get_the_terms($post->ID, 'voice_category');
																	if (!empty($terms)): if (!is_wp_error($terms)):
																		foreach ($terms as $term) :
																			$imagefilename = '';
																			if ($term->slug == 'trashhouse') {$imagefilename = 'img4@2x_pc';}
																			else if ($term->slug == 'prior_arrangement') {$imagefilename = 'img2@2x_pc';}
																			else if ($term->slug == 'rearrangement') {$imagefilename = 'img1@2x_pc';}
																			echo '<div class="image_wrapper">';
																			echo   '<img src="/wp-content/themes/ongaeshi/assets/images/service/'.$imagefilename.'.png" />';
																			echo   '<span class="user_name_back"></span>';
																			echo   '<span class="user_name">'.get_field('image_under_name').'</span>';
																			echo '</div>';
																			//echo '<span class="voice_category '.$term->slug.'">'.$term->name.'</span>';
																			//echo '<span class="work_area">'.'<time>'.get_the_date("Y/m/j").'</time>'.get_field('work_area').'</span>';
																		endforeach;
																	endif;endif;
																?>

												<?php } ?>
											</div>
											<div class="p-top_news-itemTxt">
												<p><?php the_time('Y/m/d'); ?></p>
												<span class="c-cat c-cat_01">新着情報</span>
												<h4 class="abbr-s-ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											</div>
										</div><!-- End item-->
								<?php endwhile;
								endif; ?>
								<?php wp_reset_query(); ?>

							</div><!-- End item-wrap-->
						</div><!-- End new-->

						<div class="p-top_news-media tab_panel" id="panel2">
							<div class="p-top_news-item-wrap">
								<?php query_posts(
									array(
										'post_type' => 'news', //カスタム投稿名を指定
										'taxonomy' => 'news_category',     //タクソノミー名を指定
										'term' => 'media',           //タームのスラッグを指定
										'posts_per_page' => 3      ///表示件数（-1で全ての記事を表示）
									)
								); ?>
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div class="p-top_news-item">
											<a href="<?php the_permalink(); ?>">
												<div class="p-top_news-itemImg">
													<img src="<?php the_field('mv'); ?>" alt="メディア掲載情報" class="lozad">
												</div>
												<div class="p-top_news-itemTxt">
													<p><?php the_time('Y/m/j'); ?></p>
													<span class="c-cat c-cat_01">メディア掲載情報</span>
													<h4 class="abbr-s-ttl"><?php the_title(); ?></h4>
												</div>
											</a>
										</div><!-- End item-->
								<?php endwhile;
								endif; ?>
								<?php wp_reset_query(); ?>

							</div><!-- End item-wrap-->
						</div><!-- End media-->

					</div><!-- End tabwrap-->
					<a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-btn c-btn_yellow c-mt30">お知らせ一覧を見る</a>
				</div><!-- End news-wrap-->
			</div><!-- End news-->

			<div class="p-top_column c-mt80">
				<h2 class="c-h2">お役立ちコラム</h2>

				<div class="p-top_column-wrap">
					<div class="p-top_column-item-wrap">
						<?php
						$paged = get_query_var('paged') ?: 1;
						$args = array(
							'post_type' => 'column',
							'posts_per_page' => 4,
							'paged' => $paged,
						);
						$column_all_query = new WP_Query($args);
						if ($column_all_query->have_posts()) :
							while ($column_all_query->have_posts()) : $column_all_query->the_post();
						?>
								<div class="p-top_column-item">
									<div>
										<div class="c-flex">
											<p><?php the_time('Y/m/d'); ?></p>
											<span class="c-cat c-cat_02">
												<?php
												$term      = wp_get_object_terms($post->ID, 'column_category'); //指定されたタクソノミーのタームを取得
												$term_name = $term[0]->name; //ターム名
												?>
												<?php echo $term_name; ?>
											</span>
										</div>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<div class="p-top_column-item-flex">
											<div class="p-top_column-itemImg">
											<?php 
													$image = get_field('mv'); 
													$alt = "";
													$url = "";
													if( array_key_exists( 'alt', (array)$image ) ) {
														$alt = $image['alt'];
													}
													if( array_key_exists( 'sizes', (array)$image ) ) {
														$size = $image['sizes'];
														if( array_key_exists( 'medium', (array)$size ) ) {
															$url = $image['sizes']['medium'];
														}
													}
											?>
											<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="lozad">
											</div>
											<div class="abbr-s"><?php echo esc_html( wp_strip_all_tags( the_field('main-text'))); ?></div>
										</div>

										<a href="<?php the_permalink(); ?>" class="p-top_column-more">もっとみる</a>
									</div>
								</div>
						<?php endwhile;
						endif;
						wp_reset_query();
						?>
					</div>
					<a href="<?php echo esc_url(home_url('/column/')); ?>" class="c-btn c-btn_yellow c-mt40">コラム一覧を見る
					</a>
				</div><!-- End item-wrap-->
			</div>
		</div><!-- End top-contents-->
		<div class="mt-40">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- End top-wrap-->


</main>
<?php get_footer(); ?>