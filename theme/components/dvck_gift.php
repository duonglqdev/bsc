<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-[50px] mb-20' ?> dvck_gift"
	<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<div
			class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex items-center justify-between mb-10' : 'mb-6' ?>">
			<?php if ( get_sub_field( 'title' ) ) { ?>
				<h2 class="heading-title"><?php the_sub_field( 'title' ) ?></h2>
			<?php } ?>
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
				<a href="<?php echo check_link( get_field( 'cdctkm1_page', 'option' ) ) ?><?php if ( $class = get_field( 'cdctkm1_pageid_class', 'option' ) ) :
							echo '#' . $class;
						endif; ?>" class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold inline-flex items-center gap-x-3">
					<?php echo svg( 'arrow-btn', '20' ) ?>
					<?php _e( 'Xem tất cả', 'bsc' ) ?>
				</a>
			<?php } ?>
		</div>
		<?php
		$chuong_trinh_khuyen_mai_id = get_field( 'cdctkm1_id_danh_muc', 'option' );
		if ( $chuong_trinh_khuyen_mai_id ) {
			$time_cache = get_sub_field( 'time_cache' ) ?: 300;
			$array_data = array(
				"maxitem" => 3,
				"lang" => pll_current_language(),
				'index' => 1,
				"groupid" => $chuong_trinh_khuyen_mai_id,
			);
			$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );

			if ( $response ) {
				$is_mobile = wp_is_mobile() && bsc_is_mobile();

				function calculate_promotion_data( $news ) {
					$result = [ 
						'remainingDays' => 0,
						'completionPercentage' => 0,
						'formattedStartDate' => 'N/A',
						'formattedEndDate' => 'N/A',
					];

					if ( ! empty( $news->promotionstarted ) && ! empty( $news->promotionended ) ) {
						$startDate = new DateTime( $news->promotionstarted );
						$endDate = new DateTime( $news->promotionended );

						$result['formattedStartDate'] = $startDate->format( 'd/m/Y' );
						$result['formattedEndDate'] = $endDate->format( 'd/m/Y' );

						$today = new DateTime();
						if ( $today <= $endDate ) {
							$interval = $startDate->diff( $endDate )->days;
							$remainingInterval = $today->diff( $endDate )->days;

							$result['remainingDays'] = $remainingInterval;
							$result['completionPercentage'] = ( ( $interval - $remainingInterval ) / $interval ) * 100;
						}
					}

					return $result;
				}
				?>

				<div class="<?php echo ! $is_mobile ? 'lg:flex gap-10 lg:space-y-0 space-y-5' : '' ?>">
					<?php if ( ! $is_mobile ) : ?>
						<div class="lg:w-[656px] lg:max-w-[50%]">
							<?php $first_news = $response->d[0] ?? null;
							if ( $first_news ) : ?>
								<a href="<?php echo slug_news( htmlspecialchars( $first_news->newsid ), htmlspecialchars( $first_news->title ) ); ?>"
									class="w-full block relative overflow-hidden rounded-2xl pt-[55%]">
									<img loading="lazy" src="<?php echo bsc_set_thumbnail( $first_news, 'thumbnail' ) ?>"
										alt="<?php echo htmlspecialchars( $first_news->title ) ?>"
										class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
								</a>
							<?php endif; ?>
						</div>

						<div class="flex-1">
							<div class="2xl:space-y-[23px] space-y-4">
								<?php foreach ( array_slice( $response->d, 1 ) as $news ) :
									$promo_data = calculate_promotion_data( $news );
									?>
									<div class="item flex gap-6 items-center">
										<div class="w-[270px] max-w-[45%]">
											<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
												class="w-full relative pt-[63%] block overflow-hidden rounded-[10px]">
												<img loading="lazy" src="<?php echo bsc_set_thumbnail( $news, 'thumbnail' ) ?>"
													alt="<?php echo htmlspecialchars( $news->title ) ?>"
													class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
											</a>
										</div>
										<div class="flex-1">
											<h4 class="font-bold mb-2 transition-all duration-500 hover:text-primary-300">
												<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
													class="line-clamp-2">
													<?php echo htmlspecialchars( $news->title ) ?>
												</a>
											</h4>
											<?php if ( $news->promotionended ) : ?>
												<div class="mt-6 flex items-center gap-2 font-Helvetica">
													<?php echo svg( 'time' ) ?>
													<div class="font-medium">
														<?php echo $promo_data['formattedStartDate'] ?> -
														<?php echo $promo_data['formattedEndDate'] ?>
													</div>
												</div>
												<div class="mt-[14px] font-Helvetica">
													<div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[3px]">
														<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
															style="width:<?php echo round( $promo_data['completionPercentage'], 2 ) ?>%">
														</p>
													</div>
													<div class="mt-2 text-xs">
														<?php if ( $promo_data['remainingDays'] == 0 ) {
															_e( 'Chương trình đã kết thúc', 'bsc' );
														} else {
															printf(
																__( 'Thời gian khuyến mãi còn <strong class="text-primary-300">%s ngày</strong>', 'bsc' ),
																$promo_data['remainingDays']
															);
														} ?>
													</div>
												</div>
											<?php endif; ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>

					<?php else : ?>
						<div class="block_slider-show-1 fli-dots-blue dot-30"
							data-flickity='{"draggable": true, "wrapAround": true, "imagesLoaded": true, "prevNextButtons": false, "pageDots": true, "cellAlign": "left", "contain": true, "autoPlay":3000}'>
							<?php foreach ( $response->d as $news ) :
								$promo_data = calculate_promotion_data( $news );
								?>
								<div class="w-full block_slider-item">
									<div class="mb-4">
										<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
											class="w-full relative pt-[63%] block overflow-hidden rounded-[10px]">
											<img loading="lazy" src="<?php echo bsc_set_thumbnail( $news, 'thumbnail' ) ?>"
												alt="<?php echo htmlspecialchars( $news->title ) ?>"
												class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
										</a>
									</div>
									<div class="flex-1">
										<h4 class="font-bold mb-2 transition-all duration-500 hover:text-primary-300">
											<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
												class="line-clamp-2">
												<?php echo htmlspecialchars( $news->title ) ?>
											</a>
										</h4>
										<?php if ( $news->promotionended ) : ?>
											<div class="flex items-center gap-2 font-Helvetica text-xs">
												<?php echo svg( 'time' ) ?>
												<div class="font-medium">
													<?php echo $promo_data['formattedStartDate'] ?> -
													<?php echo $promo_data['formattedEndDate'] ?>
												</div>
											</div>
											<div class="mt-[14px] font-Helvetica">
												<div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[3px]">
													<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
														style="width:<?php echo round( $promo_data['completionPercentage'], 2 ) ?>%">
													</p>
												</div>
												<div class="mt-2 text-xs">
													<?php if ( $promo_data['remainingDays'] == 0 ) {
														_e( 'Chương trình đã kết thúc', 'bsc' );
													} else {
														printf(
															__( 'Thời gian khuyến mãi còn <strong class="text-primary-300">%s ngày</strong>', 'bsc' ),
															$promo_data['remainingDays']
														);
													} ?>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>

			<?php }
		}
		?>
	</div>
</section>