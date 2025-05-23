<?php
$banner = wp_get_attachment_image_url(
	wp_is_mobile() && bsc_is_mobile() && get_field( 'cdc1_background_banner_mobile', 'option' )
	? get_field( 'cdc1_background_banner_mobile', 'option' )
	: get_field( 'cdc1_background_banner', 'option' ),
	'full'
);
if ( isset( $args['data'] ) && $args['data'] ) {
	$news = $args['data'];
	$title = $news->title;
	$body = $news->body;
	$postdate = new DateTime( $news->postdate );
	$postdate = $postdate->format( 'd/m/Y' );
	$groupid = $news->groupid;
	$trach_nhiem_cong_dong_id = get_field( 'cdtnvcd2_id_danh_muc', 'option' );
	$chuong_trinh_khuyen_mai_id = get_field( 'cdctkm1_id_danh_muc', 'option' );
	$id_current_post = $news->newsid;
	if ( $news->groupid ) {
		if ( $groupid == $trach_nhiem_cong_dong_id ) {
			$title_lienquan = __( 'Bài viết', 'bsc' );
			$template_lienquan = '';
			$tax_name = get_field( 'cdtnvcd1_title', 'option' );
			$breadcrumb = 'congdong';
			$time_cache = get_field( 'cdtnvcd2_time_cache', 'option' ) ?: 300;
			if ( get_field( 'cdtnvcd1_background_banner', 'option' ) || get_field( 'cdtnvcd1_background_banner_mobile', 'option' ) ) {
				$banner = wp_get_attachment_image_url(
					wp_is_mobile() && bsc_is_mobile() && get_field( 'cdtnvcd1_background_banner_mobile ', 'option' )
					? get_field( 'cdtnvcd1_background_banner_mobile ', 'option' )
					: get_field( 'cdtnvcd1_background_banner ', 'option' ),
					'full'
				);
			}
			$style = get_field( 'cdtnvcd1_background_banner_display', 'option' ) ?: 'default';
		} elseif ( $groupid == $chuong_trinh_khuyen_mai_id ) {
			$title_lienquan = __( 'Khuyến mãi', 'bsc' );
			$template_lienquan = '';
			$tax_name = get_field( 'cdctkm1_title', 'option' );
			$breadcrumb = 'khuyenmai';
			$time_cache = get_field( 'cdctkm1_time_cache', 'option' ) ?: 300;
			if ( get_field( 'cdctkm1_background_banner', 'option' ) || get_field( 'cdctkm1_background_banner_mobile', 'option' ) ) {
				$banner = wp_get_attachment_image_url(
					wp_is_mobile() && bsc_is_mobile() && get_field( 'cdctkm1_background_banner_mobile ', 'option' )
					? get_field( 'cdctkm1_background_banner_mobile ', 'option' )
					: get_field( 'cdctkm1_background_banner ', 'option' ),
					'full'
				);
			}
			$style = get_field( 'cdctkm1_background_banner_display', 'option' ) ?: 'default';
		} else {
			$array_id_kien_thuc = array();
			$terms = get_terms( array(
				'taxonomy' => 'danh-muc-kien-thuc',
				'hide_empty' => false,
			) );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
				foreach ( $terms as $term ) :
					if ( get_field( 'api_id_danh_muc', $term ) ) {
						$array_id_kien_thuc[] = get_field( 'api_id_danh_muc', $term );
					}
				endforeach;
			}
			$array_id_bao_cao = array();
			$terms = get_terms( array(
				'taxonomy' => 'danh-muc-bao-cao',
				'hide_empty' => false,
			) );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
				foreach ( $terms as $term ) :
					if ( get_field( 'api_id_danh_muc', $term ) ) {
						$array_id_bao_cao[] = get_field( 'api_id_danh_muc', $term );
					}
				endforeach;
			}
			$template_lienquan = 'khuyen-mai';
			if ( in_array( $groupid, $array_id_kien_thuc ) ) {
				$title_lienquan = __( 'Kiến thức', 'bsc' );
				$check_cat = 'danh-muc-kien-thuc';
				$breadcrumb = 'kienthuc';
				$time_cache = get_field( 'cdktdt1_time_cache', 'option' ) ?: 300;
				$categories = get_terms( array(
					'taxonomy' => $check_cat,
					'hide_empty' => false,
					'meta_query' => array(
						array(
							'key' => 'api_id_danh_muc',
							'value' => $groupid,
							'compare' => '='
						)
					)
				) );
				if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
					$tax = $categories[0];
				} else {
					$post_id = get_the_ID();
					$taxonomy = get_the_terms( $post->ID, $check_cat );
					$tax = $taxonomy[0];
				}
			} elseif ( in_array( $groupid, $array_id_bao_cao ) ) {
				$title_lienquan = __( 'Quan hệ cổ đông', 'bsc' );
				$check_cat = 'danh-muc-bao-cao';
				$breadcrumb = 'quanhe';
				$time_cache = get_field( 'cdktdt1_time_cache', 'option' ) ?: 300;
				$categories = get_terms( array(
					'taxonomy' => $check_cat,
					'hide_empty' => false,
					'meta_query' => array(
						array(
							'key' => 'api_id_danh_muc',
							'value' => $groupid,
							'compare' => '='
						)
					)
				) );
				if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
					$tax = $categories[0];
				} else {
					$post_id = get_the_ID();
					$taxonomy = get_the_terms( $post->ID, $check_cat );
					$tax = $taxonomy[0];
				}
			} else {
				$title_lienquan = __( 'Bài viết', 'bsc' );
				$check_cat = 'category';
				$breadcrumb = 'post';
				$time_cache = get_field( 'cdtt2_time_cache', 'option' ) ?: 300;
				$all_categories = get_terms( array(
					'taxonomy' => $check_cat,
					'hide_empty' => false,
				) );

				$filtered_categories = array_filter( $all_categories, function ($term) use ($groupid) {
					$api_ids = get_field( 'api_id_danh_muc', $term );
					$api_ids_array = explode( ',', $api_ids );
					return in_array( $groupid, $api_ids_array );
				} );
				if ( ! is_wp_error( $filtered_categories ) && ! empty( $filtered_categories ) ) {
					$tax = reset( $filtered_categories );
				} else {
					$post_id = get_the_ID();
					$taxonomy = get_the_terms( $post->ID, $check_cat );
					$tax = $taxonomy[0];
				}
			}
			$tax_name = $tax->name;
			$tax_id = $tax->term_id;
			if ( get_field( 'background_banner', $tax ) || get_field( 'background_banner_mobile', $tax ) ) {
				$banner = wp_get_attachment_image_url(
					wp_is_mobile() && bsc_is_mobile() && get_field( 'background_banner_mobile', $tax )
					? get_field( 'background_banner_mobile', $tax )
					: get_field( 'background_banner', $tax ),
					'full'
				);
			}
			$style = get_field( 'background_banner_display', $tax ) ?: 'default';
		}
	} else {
		$title_lienquan = __( 'Bài viết', 'bsc' );
		$breadcrumb = 'post';
		$tax_name = __( 'Tin tức mã cổ phiếu', 'bsc' );
	}
} else {
	wp_redirect( home_url( '/404' ), 301 );
	exit;
}
get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner', null, array(
		'banner' => $banner,
		'style' => $style,
		'title' => $tax_name,
		'breadcrumb' => $breadcrumb,
	) ) ?>
	<section
		class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-12 lg:pb-16 pb-10 bg-gradient-blue-to-bottom-50' : 'pt-[50px] mb-12' ?>">
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-[70px] gap-6' : '' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
					<div class="w-80 max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10 space-y-12">
							<?php if ( $news->groupid ) { ?>
								<?php if ( $groupid != $chuong_trinh_khuyen_mai_id ) { ?>
									<?php if ( $groupid == $trach_nhiem_cong_dong_id ) {
										?>
										<div class="sticky top-5 z-10">
											<?php if ( get_field( 'cdtnvcd2_page', 'option' ) ) { ?>
												<ul
													class="shadow-base p-3 rounded-[10px] bg-white scroll-bar-custom max-h-[180px] overflow-y-auto space-y-2">
													<?php
													$currentYear = date( 'Y' );
													$selectedYear = ! empty( $_GET['years'] ) ? bsc_format_string( $_GET['years'], 'number' ) : $currentYear;
													for ( $year = $currentYear; $year >= 2015; $year-- ) :
														?>
														<li>
															<a href="<?php echo get_field( 'cdtnvcd2_page', 'option' ) ?>?years=<?php echo $year ?><?php if ( get_field( 'cdtnvcd2_pageid_class', 'option' ) ) { ?><?php echo '#' . get_field( 'cdtnvcd2_pageid_class', 'option' ) ?><?php } ?>"
																class="<?php echo ( $year == $selectedYear ) ? 'active' : ''; ?> block px-5 py-3 font-semibold text-lg [&:not(.active)]:bg-white bg-primary-300 rounded-md [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-[#ebf4fa]">
																<?php _e( 'Năm', 'bsc' ) ?> 						<?php echo $year; ?>
															</a>
														</li>
													<?php endfor; ?>
												</ul>
											<?php } ?>
											<?php
											$hinh_anh_sidebar = get_field( 'cdtnvcd1_hinh_anh_sidebar', 'option' );
											if ( $hinh_anh_sidebar ) { ?>
												<div class="mt-12">
													<a href="<?php echo check_link( $hinh_anh_sidebar['link'] ) ?>">
														<?php echo wp_get_attachment_image( $hinh_anh_sidebar['img'], 'large', '', array( 'class' => 'rounded-lg transition-all duration-500 hover:scale-105' ) ) ?>
													</a>
												</div>
											<?php } ?>
										</div>
										<?php
									} else { ?>
										<?php
										$terms = get_terms( array(
											'taxonomy' => $check_cat,
											'hide_empty' => false,
											'parent' => 0,
										) );
										if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
											?>
											<ul class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report space-y-2">
												<?php foreach ( $terms as $term ) :
													$active_class = ( $tax_id == $term->term_id ) ? 'active' : '';
													?>
													<li class="<?php echo esc_attr( $active_class ); ?>">
														<a href="<?php echo get_term_link( $term ); ?>"
															class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr( $active_class ); ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
															<?php echo esc_html( $term->name ); ?>
														</a>
														<?php
														$child_terms = get_terms( array(
															'taxonomy' => $check_cat,
															'parent' => $term->term_id,
															'hide_empty' => false,
														) );

														if ( ! empty( $child_terms ) && ! is_wp_error( $child_terms ) ) : ?>
															<ul class="pl-5 hidden sub-menu w-full bg-white">
																<?php foreach ( $child_terms as $child_term ) :
																	$child_active_class = ( $tax_id == $child_term->term_id ) ? 'active' : '';
																	?>
																	<li class="pl-5">
																		<a href="<?php echo get_term_link( $child_term ); ?>"
																			class="<?php echo esc_attr( $child_active_class ); ?> [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
																			<?php echo esc_html( $child_term->name ); ?>
																		</a>
																	</li>
																<?php endforeach; ?>
															</ul>
														<?php endif; ?>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									<?php } ?>
								<?php } ?>
							<?php } ?>
							<?php
							if ( $groupid == $trach_nhiem_cong_dong_id ) {
								$hinh_anh_sidebar = get_field( 'cdtnvcd1_hinh_anh_sidebar', 'option' );
							} elseif ( $groupid == $chuong_trinh_khuyen_mai_id || ! $news->groupid ) {
								$hinh_anh_sidebar = get_field( 'cdctkm1_hinh_anh_sidebar', 'option' );
							} elseif ( $tax ) {
								$hinh_anh_sidebar = get_field( 'hinh_anh_sidebar', $tax );
							}
							if ( $hinh_anh_sidebar ) { ?>

								<a href="<?php echo check_link( $hinh_anh_sidebar['link'] ) ?>" class="block">
									<?php echo wp_get_attachment_image( $hinh_anh_sidebar['img'], 'large', '', array( 'class' => 'rounded-lg transition-all duration-500 hover:scale-105' ) ) ?>
								</a>

							<?php }
							;
							?>
						</div>
					</div>

				<?php } ?>
				<div class="flex-1">
					<h1
						class="font-bold mb-6 !leading-snug <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-4xl lg:text-3xl text-2xl' : 'text-[22px]' ?>">
						<?php echo $title ?>
					</h1>
					<?php if ( $groupid == $chuong_trinh_khuyen_mai_id ) {
						?>
						<div
							class="flex items-center justify-between flex-wrap gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' mb-8' : 'mb-6' ?>">
							<?php if ( $news->promotionended ) {
								$remainingDays = 0;
								$completionPercentage = 0;
								$startDate = new DateTime( $news->promotionstarted );
								$endDate = new DateTime( $news->promotionended );
								$endDate = $endDate->setTime( 0, 0, 0 );
								$formattedEndDate = $endDate->format( 'd/m/Y' );
								if ( $news->promotionstarted ) {
									$formattedStartDate = $startDate->format( 'd/m/Y' );
									$interval = $startDate->diff( $endDate );
									$daysDifference = $interval->days;
									$today = new DateTime();
									$today = $today->setTime( 0, 0, 0 );
									$remainingInterval = $today->diff( $endDate );
									$remainingDays = $remainingInterval->days;
									$elapsedDays = $daysDifference - $remainingDays;
									$completionPercentage = ( $elapsedDays / $daysDifference ) * 100;
									if ( $today > $endDate ) {
										$remainingDays = 0;
										$completionPercentage = 0;
									}
								} else {
									$formattedStartDate = 'N/A';
								}
								?>
								<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-[65%]' ?>">
									<div
										class="flex items-center gap-2 font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-4' : 'text-xs' ?>">
										<div class="inline-flex items-center gap-2">
											<?php echo svg( 'time' ) ?>
											<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
												<?php _e( 'Thời gian chương trình', 'bsc' ) ?>:
											<?php } ?>
										</div>
										<div
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'font-medium ' : 'text-normal' ?>">
											<?php echo $formattedStartDate ?> - <?php echo $formattedEndDate ?>
										</div>
									</div>
									<div
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-[14px]' : 'mt-2' ?> font-Helvetica xl:max-w-[433px]">
										<div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden lg:h-[5px] h-[3px]">
											<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
												style="width:<?php echo round( $completionPercentage, 2 ) ?>%"></p>
										</div>
										<div class="mt-2 text-xs">
											<?php if ( $today > $endDate ) {
												_e( 'Chương trình đã kết thúc', 'bsc' );
											} else { ?>
												<?php _e( 'Thời gian khuyến mãi còn', 'bsc' ) ?> <strong
													class="text-primary-300"><?php echo $remainingDays ?>
													<?php _e( 'ngày', 'bsc' ) ?></strong>
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } ?>
							<div
								class="share flex items-center  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-[12px] lg:ml-12' : 'flex-1 justify-end' ?>">
								<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
									<strong>
										<?php _e( 'Chia sẻ:', 'bsc' ) ?>
									</strong>
								<?php } ?>
								<ul
									class="flex items-center  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-3' : 'gap-1.5' ?>">
									<li>
										<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo urlencode( get_the_title() ); ?>"
											target="_blank">
											<?php echo svgClass( 'linkedin', '', '', ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-6 h-6' ) ?>
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>"
											target="_blank">
											<?php echo svgClass( 'fb', '', '', ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-6 h-6' ) ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<?php
					} else { ?>
						<div
							class="flex items-center text-xs gap-[12px] font-Helvetica lg:flex-nowrap flex-wrap justify-start <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8' : ' mb-[26px]' ?>">
							<?php if ( $news->sourcename ) { ?>
								<a href="<?php echo $news->sourcelink ?>"
									class="font-medium inline-block transition-all duration-500 hover:text-primary-300"
									target="_blank">
									<?php echo $news->sourcename ?>
								</a>
							<?php } ?>

							<?php if ( $news->sourcename ) { ?>
								-
							<?php } ?>

							<div class="flex gap-[12px] items-center">
								<?php echo svgClass( 'date', '', '', 'shrink-0' ) ?>
								<span><?php echo $postdate ?></span>
							</div>

							<div class="share flex items-center gap-[12px] lg:ml-12 lg:w-auto w-full">
								<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
									<strong>
										<?php _e( 'Chia sẻ:', 'bsc' ) ?>
									</strong>

								<?php } ?>
								<ul class="flex items-center gap-3">
									<li>
										<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo urlencode( get_the_title() ); ?>"
											target="_blank">
											<?php echo svg( 'linkedin' ) ?>
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>"
											target="_blank">
											<?php echo svg( 'fb' ) ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
					<?php } ?>
					<div
						class="the_content font-Helvetica font-content text-justify prose-img:!h-auto prose-img:object-contain prose-p:!ml-0 prose-h2:text-[length:inherit] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-mb' ?>">
						<?php echo $body ?>
						<?php
						if ( $news->attachedfileurl ) {
							?>
							<a target="_blank" href="<?php echo slug_file_news( htmlspecialchars( $news->newsid ) ) ?>"
								class="bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
								<span class="block relative z-10">
									<?php _e( 'Tải file đính kèm', 'bsc' ) ?>
								</span>
							</a>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	if ( $args['data'] && $groupid ) {
		if ( in_array( $groupid, [ 1, 2, 4, 5, 6 ] ) ) {
			$groupid = 3;
		}
		$array_data = array(
			"maxitem" => "4",
			"lang" => pll_current_language(),
			"groupid" => $groupid,
			'index' => 1
		);
		$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
		if ( $response ) {
			?>
			<section
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:pt-16 pt-10 lg:pb-[106px] pb-10' : 'mt-[18px] mb-12' ?>">
				<div class="container">
					<h2 class="heading-title mb-6 normal-case">
						<?php echo $title_lienquan . ' ' . __( 'liên quan', 'bsc' ) ?>
					</h2>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid md:grid-cols-3 grid-cols-1 gap-x-6 gap-y-8' : 'block_slider-show-1 dots-blue' ?>"
						<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
							data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
						<?php } ?>>
						<?php
						$check_p = 0;
						foreach ( $response->d as $news ) {
							if ( $check_p < 3 ) {
								if ( $id_current_post != $news->newsid ) {
									$check_p++;
									get_template_part( 'template-parts/content', $template_lienquan, array(
										'data' => $news,
									) );
								}
							}
						}
						?>
					</div>
				</div>
				<?php
		}
	} ?>
</main>
<?php
get_footer();
