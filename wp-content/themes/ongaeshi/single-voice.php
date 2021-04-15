
<?php get_header(); ?>

		<main class="l-main">
            <div class="c-lower-mv">
                <div class="c-breadcrumbs l-row02">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
                    <a href="<?php echo esc_url( home_url( '/voice/' ) ); ?>">お客様の声一覧</a>
                    <span><?php the_title(); ?></span>
                </div>
                <h2 class="c-lower-mv__title l-row02">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header/voice_pc.png" alt="お客様の声一覧" class="js-imageChange">
                </h2>
            </div>
            <div class="l-row02 c-contens-flex c-mt30">
                <div class="l-contents">

                    <section class="s-voice-sec s-voice-sec--detail">
                        <h3 class="s-voice-sec__title">
													<span class="material-icons">rate_review</span> <?php the_title(); ?>
                        </h3>
                        <div class="s-voice-sec__detail-wrap">
                            <div class="s-voice-detail">
															<div class="s-voice-service">
																<div class="left_wrapper<?php if (!get_the_post_thumbnail_url()){ echo ' _100'; } ?>">
																	<div class="s-voice-service__cat">
																		<?php
																			$terms = get_the_terms($post->ID, 'voice_category');
																			if (!empty($terms)): if (!is_wp_error($terms)):
																				foreach ($terms as $term) :
																					echo '<span class="voice_category '.$term->slug.'">'.$term->name.'</span>';
																				endforeach;
																			endif;endif;
																		?>
																	</div>
																		<p><?php echo get_field('content'); ?></p>
																	
																	<div class="">
																		<table class="">
																				<tbody>
																						<tr class="unit01">
																								<th>
																									<div class="d-flex" style="align-items: center;">
																										<div><i class="far fa-check-square"></i>&nbsp;</div>
																										<span>買取後<br>作業総額</span>
																									</div>
																										
																								</th>
																								<td>
																										<?php echo get_field('total_amount_of_work_after_purchase'); ?>円
																								</td>
																						</tr>
																						<tr class="unit02">
																								<th>
																									<i class="far fa-check-square"></i>&nbsp;プラン
																								</th>
																								<td>
																									<?php echo get_field('plan'); ?>
																								</td>
																						</tr>
																						<tr class="unit03">
																								<th>
																										<i class="far fa-check-square"></i>&nbsp;間取り
																								</th>
																								<td>
																									<?php echo get_field('floor_plan'); ?>
																								</td>
																						</tr>
																						<tr class="unit04">
																								<th>
																										<i class="far fa-check-square"></i>&nbsp;作業エリア
																								</th>
																								<td>
																										<?php echo get_field('work_area'); ?>
																							</td>
																						</tr>
																						<tr class="unit05">
																								<th>
																									<i class="far fa-check-square"></i>&nbsp;作業人数
																								</th>
																								<td>
																									<?php echo get_field('number_of_work'); ?>人
																								</td>
																						</tr>
																						<tr class="unit06">
																								<th>
																										<i class="far fa-check-square"></i>&nbsp;作業時間
																								</th>
																								<td>
																									<?php echo get_field('working_hours'); ?>時間
																								</td>
																						</tr>
																						<tr class="unit07">
																								<th>
																										<i class="far fa-check-square"></i>&nbsp;買取商品
																								</th>
																								<td>
																									<?php echo get_field('purchase_of_relics'); ?>
																								</td>
																						</tr>
																				</tbody>
																		</table>
																	</div>
																</div>
																<?php if (get_the_post_thumbnail_url()){ ?>
																	<div class="image_wrapper">
																		<a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="demo">
																			<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
																		</a>
																	</div>
																<?php } ?>
															</div>
															<div class="s-voice-service__row02">
																	<h4><i class="fas fa-question"></i> 鶴の恩返しを選んだ理由</h4>
																	<div class="age-sex-content_wrapper">
																		<div class="age-sex__img_wrapper">
																			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice/<?php echo get_field('age_sex'); ?>.png" />
																			<p>
																				<span class="area"><?php echo get_field('image_under_area'); ?></span>
																				<span class="name"><?php echo get_field('image_under_name'); ?></span>
																			</p>
																		</div>
																		<div class="fukidashi_customer">
																			<p><?php echo get_field('reason'); ?></p>
																		</div>
																	</div>

																	<h4><i class="fas fa-user-edit"></i> 担当者からのコメント</h4>
																	<div class="age-sex-content_wrapper re">
																		<div class="fukidashi_staff">
																			<p><?php echo get_field('comment'); ?></p>
																		</div>
																		<div class="age-sex__img_wrapper">
																			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice/turuno-ongaeshi-staff.png" alt="鶴の恩返しのスタッフ" />
																			<p>
																				<span class="area">鶴の恩返し</span>
																				<span class="name">スタッフ</span>
																			</p>
																		</div>
																	</div>
																</div>
                            </div>
                        </div>
										</section>
									
										<?php wp_reset_postdata();?>

										<div class="c-pagination-detail c-pagination-voice">
					<ul>
						<li>
							<?php if (get_previous_post()):?>
								<?php previous_post_link('<p> %link</p>', '前のお客様へ'); ?>
							<?php endif; ?>
						</li>

						<li>
							<a href="<?php echo esc_url( home_url( '/voice/' ) ); ?>" >お客様の声一覧</a>
						</li>

						<li>
							<?php if (get_next_post()):?>
								<?php next_post_link('<p>%link</p>', '次のお客様へ'); ?>
							<?php endif; ?>
						</li>
					</ul>
				</div>

										<h2 class="c-h2">関連するお客様の声</h2>
                    <div class="p-top-voice s-voice-row02 s-voice-row02--detail">
											<div class="swiper-container">
												<div class="swiper-wrapper">

												<?php
													$paged = get_query_var('paged') ?: 1;
													$args = array(
															'post_type' => 'voice',
															'posts_per_page' => 6,
															'paged' => $paged,
															'tax_query'      => array(
																array(
																'taxonomy' => 'voice_category',  // カスタムタクソノミー名
																'field'    => 'slug',  // ターム名を term_id,slug,name のどれで指定するか
																'terms'    => $term // タクソノミーに属するターム名
																)
														)
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
											</div>
											<div class="swiper-button-prev"></div>
											<div class="swiper-button-next"></div>
                    </div>
                </div>
				<?php get_template_part('sidebar'); ?>
            </div>
		</main>
		<?php get_footer(); ?>
