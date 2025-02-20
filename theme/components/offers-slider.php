<section
	class="bg-primary-200 relative offters_slider <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-[77px]' : 'pt-[50px]' ?>"
	<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<div
			class="grid overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:grid-cols-2 2xl:gap-32 lg:gap-20 gap-10' : 'gap-10' ?>">
			<div
				class="col-span-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:order-1 order-2 lg:flex flex-col' : 'order-2' ?>">
				<?php if ( get_sub_field( 'title' ) ) { ?>
					<h2 class="heading-title mb-4 wow fadeIn" data-wow-duration="2s">
						<?php the_sub_field( 'title' ) ?>
					</h2>
				<?php } ?>
				<?php if ( get_sub_field( 'mota' ) ) { ?>
					<p class="uppercase text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-2xl text-xl lg:mb-10 mb-6' : 'sm:text-xl text-base mb-6' ?> font-bold  wow fadeIn"
						data-wow-duration="2s">
						<?php the_sub_field( 'mota' ) ?>
					</p>
				<?php } ?>
				<div
					class="md:flex items-center gap-6 mb-7 relative z-[2]">
					<?php if ( have_rows( 'button' ) ) {
						while ( have_rows( 'button' ) ) :
							the_row();
							if ( get_sub_field( 'title' ) ) {
								?>
								<a rel="<?php the_sub_field( 'rel' ) ?>" <?php if ( get_sub_field( 'open_tab' ) )
										echo 'target="_blank"' ?> href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
									class="btn-base-yellow inline-flex items-center gap-x-3 md:text-base text-xs <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-md' : 'rounded-lg px-[14px]' ?>">
									<?php echo svg( 'arrow-btn', '20' ) ?>
									<span>
										<?php the_sub_field( 'title' ) ?>
									</span>
								</a>
								<?php
							}
						endwhile;
					} ?>
					<?php if ( have_rows( 'button_1' ) ) {
						while ( have_rows( 'button_1' ) ) :
							the_row();
							if ( get_sub_field( 'title' ) ) {
								?>
									<a rel="<?php the_sub_field( 'rel' ) ?>" <?php if ( get_sub_field( 'open_tab' ) )
											echo 'target="_blank"' ?> href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										class="flex items-center gap-x-[12px] font-bold transition-all duration-500 hover:scale-105 wow fadeIn <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:text-base text-xs md:mt-0 mt-4' ?>"
										data-wow-duration="2s">
										<?php echo svg( 'keyvisual', '24', '24' ) ?>
										<?php the_sub_field( 'title' ) ?>
										<?php echo svg( 'arrow-btn', '14', '14' ) ?>
									</a>
								<?php
							}
						endwhile;
					} ?>

				</div>


				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-auto' : 'mt-[82px]' ?> relative z-[1]">
					<?php if ( get_sub_field( 'icon' ) ) { ?>
						<div
							class="absolute -z-[1] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-auto -top-28 right-0' : 'w-1/2 -top-4 right-4' ?>  pointer-events-none">
							<img loading="lazy"
								src="<?php echo wp_get_attachment_image_url( get_sub_field( 'icon' ), 'large' ) ?>"
								alt="<?php the_sub_field( 'title' ) ?>">
						</div>
					<?php } ?>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'max-w-[80%] mx-auto' ?>">
						<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'large', '', array( 'class' => 'm-auto relative z-10' ) ) ?>
					</div>

				</div>
			</div>
			<div
				class="col-span-1 relative z-[2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:order-2 order-1' : 'order-1' ?>">
				<?php if ( get_sub_field( 'title_2' ) ) { ?>
					<h2 class="heading-title mb-8 wow fadeIn" data-wow-duration="2s">
						<?php the_sub_field( 'title_2' ) ?>
					</h2>
				<?php } ?>
				<?php
				$time_cache = get_sub_field( 't2_time_cache' ) ?: 300;
				$array_data = array(
					"lang" => pll_current_language(),
				);
				$response = get_data_with_cache( 'GetPromotionNews', $array_data, $time_cache );
				if ( $response->d ) {
				} else {
					$groupid = get_field( 'cdctkm1_id_danh_muc', 'option' );
					if ( $groupid ) {
						$array_data = array(
							'lang' => pll_current_language(),
							'groupid' => $groupid,
							'maxitem' => 5,
							'index' => 1
						);
						$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
					}
				}
				if ( $response ) {
					?>
					<div class="block_slider block_slider-show-2 no-dots md:-mx-4 -mx-2 block_sameheight">
						<?php foreach ( $response->d as $news ) { ?>
							<div class="block_slider-item md:w-3/5 w-4/5 md:px-4 px-2">
								<div
									class="bg-white sameheight_item <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-8' : 'p-5' ?> rounded-lg ">
									<div class="max-h-44 overflow-hidden">
										<p
											class="relative font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-base' ?> after:absolute after:w-[51px] after:h-[2px] after:bottom-0 after:left-0 after:bg-primary-400 mb-4 pb-4 transition-all duration-500 hover:text-primary-500 !leading-tight">
											<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
												class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'line-clamp-3' : 'line-clamp-2' ?>">
												<?php echo htmlspecialchars( $news->title ) ?>
											</a>
										</p>
										<div
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs text-paragraph font-Helvetica line-clamp-4' ?>">
											<?php echo htmlspecialchars( $news->description ) ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php }
				?>
				<?php if ( have_rows( 'video_youtube' ) ) {
					while ( have_rows( 'video_youtube' ) ) :
						the_row();
						if ( get_sub_field( 'avatar' ) ) { ?>
							<div class="mt-[12px]">
								<a href="<?php the_sub_field( 'url_youtube' ) ?>" data-fancybox
									class="rounded-md overflow-hidden pt-[60%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
									<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'large', '', array( 'class' => 'absolute w-full h-full inset-0 object-cover' ) ) ?>
									<div
										class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
										<?php echo svgClass( 'play', '', '', ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:w-[82px] 2xl:h-[82px] w-12 h-12' : 'w-[67px] h-[67px]' ) ?>
									</div>
									<?php if ( get_sub_field( 'title' ) && ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
										<div
											class="absolute w-full bottom-0 left-0 py-4 px-8 flex items-center gap-3 text-white font-bold bg-gradient-blue-to-right-50 z-10 line-clamp-1">
											<?php echo svg( 'pause' ) ?>
											<?php the_sub_field( 'title' ) ?>
										</div>
									<?php } ?>
								</a>
							</div>
						<?php }
						;
					endwhile;
				}
				?>
				<?php if ( have_rows( 'button_2' ) ) {
					while ( have_rows( 'button_2' ) ) :
						the_row();
						if ( get_sub_field( 'title' ) ) {
							?>
							<p class="mt-4 lg:mb-6">
								<a rel="<?php the_sub_field( 'rel' ) ?>" <?php if ( get_sub_field( 'open_tab' ) )
										echo 'target="_blank"' ?> href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
									class="inline-flex items-center gap-x-[12px] font-bold transition-all duration-500 hover:scale-105 wow fadeIn <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:text-base text-xs' ?>"
									data-wow-duration="2s">
									<?php echo svg( 'keyvisual', '24', '24' ) ?>
									<?php the_sub_field( 'title' ) ?>
									<?php echo svg( 'arrow-btn', '14', '14' ) ?>
								</a>
							</p>
							<?php
						}
					endwhile;
				} ?>
			</div>
		</div>
	</div>
	<?php if ( get_sub_field( 'background' ) && ! wp_is_mobile() ) { ?>
		<div class="absolute bottom-0 left-0">
			<?php echo wp_get_attachment_image( get_sub_field( 'background' ), 'large' ) ?>
		</div>
	<?php } ?>
	<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
		<div class="relative z-10 sm:-mt-28 -mt-14">
			<?php echo svg( 'wave' ) ?>
		</div>
	<?php } ?>
</section>