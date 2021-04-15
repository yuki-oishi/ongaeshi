<div id="panel1" class="tab_panel">
	<?php
	$paged = get_query_var('paged') ?: 1;
	$args = array(
		'post_type' => array('news', 'voice'),
		'posts_per_page' => -1,
		'paged' => $paged,
	);
	$news_all_query = new WP_Query( $args );
	if ( $news_all_query->have_posts() ) :
		while ( $news_all_query->have_posts() ) : $news_all_query->the_post();
	?>
		<div class=" p-news-item">
			<div class="p-news-item_img">
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
			<div class="p-news-item_txt">
				<time><?php the_time('Y/m/d'); ?></time>
				<span class="p-column-item_cat p-column-item_cat01">
					<?php if(get_post_type() == 'voice') { ?>
						新着情報
					<?php } else { ?>
						<?php
							$term      = wp_get_object_terms($post->ID,'news_category'); //指定されたタクソノミーのタームを取得
							$term_name = $term[0]->name; //ターム名
						?>
						<?php echo $term_name; ?>
					<?php } ?>
				</span>
				<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
				<div>
					<?php if(get_post_type() == 'voice') { ?>
						<?php echo wp_trim_words( get_field('content'),100); ?>
					<?php } else { ?>
						<?php echo wp_trim_words( get_field('main-text'),100); ?>
					<?php } ?>
				</div>
				<a href="<?php the_permalink(); ?>" class="p-news-item_link">
					もっと見る
				</a>
			</div>
		</div><!-- End panel1-->
		<?php endwhile;
		endif;
		wp_reset_query();
		?>
</div>
<div id="panel2" class="tab_panel">
	<?php query_posts( array(
		'post_type' => array('news', 'voice'),
		//'taxonomy' => 'news_category',     //タクソノミー名を指定
		//'term' => 'new',           //タームのスラッグを指定
		'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
	)); ?>
	<?php if(have_posts()): ?>
	<?php while(have_posts()):the_post(); ?>
			<div class=" p-news-item">
			<div class="p-news-item_img">
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
				<div class="p-news-item_txt">
					<time><?php the_time('Y/m/d'); ?></time>
					<span class="p-column-item_cat p-column-item_cat01">
						新着情報
					</span>
					<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
					<div>
						<?php if(get_post_type() == 'voice') { ?>
							<?php echo wp_trim_words( get_field('content'),100); ?>
						<?php } else { ?>
							<?php echo wp_trim_words( get_field('main-text'),100); ?>
						<?php } ?>
					</div>
				<a href="<?php the_permalink(); ?>" class="p-news-item_link">
					もっと見る
				</a>
				</div>
			</div>
	<?php endwhile;endif; ?>
	<?php wp_reset_query(); ?>
</div><!-- End panel1-->
<div id="panel3" class="tab_panel">
	<?php query_posts( array(
		'post_type' => 'news', //カスタム投稿名を指定
		'taxonomy' => 'news_category',     //タクソノミー名を指定
		'term' => 'media',           //タームのスラッグを指定
		'posts_per_page' => 3      ///表示件数（-1で全ての記事を表示）
	)); ?>
	<?php if(have_posts()): ?>
	<?php while(have_posts()):the_post(); ?>
			<div class="p-news-item">
				<div class="p-news-item_img">
					<img src="<?php the_field('mv'); ?>" alt="お知らせ">
				</div>
				<div class="p-news-item_txt">
					<time><?php the_time('Y/m/d'); ?></time>
					<span class="p-column-item_cat p-column-item_cat01">
						<?php
							$term      = wp_get_object_terms($post->ID,'news_category'); //指定されたタクソノミーのタームを取得
							$term_name = $term[0]->name; //ターム名
						?>
						<?php echo $term_name; ?>
					</span>
					<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
					<div><?php echo wp_trim_words( get_field('main-text'),100); ?></div>
					<a href="<?php the_permalink(); ?>" class="p-news-item_link">
						もっと見る
					</a>
				</div>
		</div>
	<?php endwhile;endif; ?>
	<?php wp_reset_query(); ?>
</div><!-- End panel1-->
