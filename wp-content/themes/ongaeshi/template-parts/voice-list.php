<section class="p-voice-sec swiper-slide">
	<div class="p-voice-sec__box">
		<div class="">
			<!-- <?php if (get_the_post_thumbnail_url()){ ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="お客さまの声">
			<?php } else { ?>
				<div class="kara"></div>
			<?php }  ?> -->
			<div class="p-voice-sec__area">
				
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
							echo '<span class="voice_category '.$term->slug.'">'.$term->name.'</span>';
							echo '<span class="work_area">'.'<time>'.get_the_date("Y/m/j").'</time>'.get_field('work_area').'</span>';
						endforeach;
					endif;endif;
				?>
			</div>
		</div>
		<div>
			<h3 class="p-voice-sec__title">
				<a href="<?php the_permalink(); ?>" class="">
					<?php the_title(); ?>
				</a>
			</h3>
			<p class="abbr"><?php echo wp_trim_words( get_field('content'), 30); ?></p>
			
		</div>
		<a href="<?php the_permalink(); ?>" class="c-btn__topArea c-btn_yellow">
			詳しく見る
		</a>
	</div>
</section>
