<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsc
 */

?>
<footer class="bg-gradient-blue md:py-9 py-6 text-white font-Helvetica relative">
	<div class="container">
		<div
			class="pb-6 border-b border-[#f3f3f3] border-opacity-50 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex justify-between items-center gap-4 mb-10' : 'mb-6' ?>">
			<?php if ( get_field( 'f1_tongdai', 'option' ) ) { ?>
				<div
					class="flex items-center gap-x-4 text-white font-normal hidden-br-pc <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
						<?php echo svg( 'phone', '', '' ) ?>
					<?php } ?>
					<p><?php the_field( 'f1_tongdai', 'option' ) ?></p>
				</div>
			<?php } ?>
			<?php if ( have_rows( 'f1_mxh', 'option' ) ) { ?>
				<div
					class="flex items-center gap-x-2 text-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-0' : 'mt-4' ?>">
					<?php while ( have_rows( 'f1_mxh', 'option' ) ) :
						the_row(); ?>
						<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank" rel="nofollow">
							<?php
							$icon_field = get_sub_field( 'icon' );
							$icon_values = explode( ',', $icon_field );
							$icon_name = isset( $icon_values[0] ) ? trim( $icon_values[0], " '" ) : '';
							$icon_width = isset( $icon_values[1] ) ? trim( $icon_values[1], " '" ) : false;
							$icon_height = isset( $icon_values[2] ) ? trim( $icon_values[2], " '" ) : false;
							if ( $icon_name ) {
								echo svg( $icon_name, $icon_width, $icon_height );
							}
							?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php } ?>
		</div>
		<div
			class="grid grid-cols-8 font-light <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:gap-12 gap-10 mb-6 pb-10 border-b border-[#f3f3f3] border-opacity-50' : 'md:gap-5 mb-6' ?>">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:col-span-3 col-span-full' : 'col-span-full' ?>">
				<?php
				$custom_logo_id = get_field( 'f1_logo', 'option' );
				if ( $custom_logo_id ) {
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					printf(
						'<a class="max-w-[116px] block mb-6" href="%1$s" title="%2$s"><img class="max-w-24" src="%3$s" loading="lazy"></a>',
						get_bloginfo( 'url' ),
						get_bloginfo( 'description' ),
						$image[0],

					);
				}
				?>
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
					<?php the_field( 'f1_mota', 'option' ) ?>
				<?php } ?>

			</div>
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:col-span-3 col-span-4' : 'col-span-full' ?>">
				<ul class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-4' : 'space-y-3 text-xs' ?>">
					<?php if ( have_rows( 'f1_thongtintruso', 'option' ) ) {
						while ( have_rows( 'f1_thongtintruso', 'option' ) ) :
							the_row(); ?>
							<li
								class="flex gap-x-4 transition-all duration-500 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'items-center' ?>">
								<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-6' ?> shrink-0">
									<?php
									$icon_field = get_sub_field( 'icon' );
									$icon_values = explode( ',', $icon_field );
									$icon_name = isset( $icon_values[0] ) ? trim( $icon_values[0], " '" ) : '';
									$icon_width = isset( $icon_values[1] ) ? trim( $icon_values[1], " '" ) : false;
									$icon_height = isset( $icon_values[2] ) ? trim( $icon_values[2], " '" ) : false;
									$icon_class = isset( $icon_values[3] ) ? trim( $icon_values[3], " '" ) : '';
									if ( $icon_name ) {
										echo svgClass( $icon_name, $icon_width, $icon_height, $icon_class );
									}
									?>
								</div>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank" rel="nofollow">
									<?php if ( get_sub_field( 'bold' ) ) { ?>
										<strong><?php the_sub_field( 'bold' ) ?></strong>
									<?php } ?>
									<?php the_sub_field( 'mota' ) ?>
								</a>
							</li>
						<?php endwhile;
					} ?>
					<?php if ( have_rows( 'f1_mangluoi', 'option' ) ) {
						while ( have_rows( 'f1_mangluoi', 'option' ) ) :
							the_row();
							if ( get_sub_field( 'title' ) ) { ?>
								<li
									class="flex text-yellow-100 group  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : '!mt-5' ?>">
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										class="flex items-center uppercase font-bold font-body gap-x-4 group-hover:scale-105 transition-all duration-500 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-lg' ?>">
										<?php echo svg( 'map' ) ?>
										<p class="flex items-center uppercase font-bold font-body gap-x-2">
											<?php the_sub_field( 'title' ) ?>
											<?php echo svg( 'arrow-right' ) ?>
										</p>
									</a>
								</li>
							<?php }
							;
						endwhile;
					} ?>
				</ul>
			</div>
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
				<div class="lg:col-span-2 col-span-4">
					<?php if ( get_field( 'f2_title', 'option' ) ) { ?>
						<p class="font-bold text-xs uppercase mb-4">
							<?php the_field( 'f2_title', 'option' ) ?>
						</p>
					<?php } ?>
					<div class="flex gap-6">
						<?php
						$qr_app_mobile = get_field( 'f2_qr_code', 'option' );
						if ( $qr_app_mobile ) {
							?>
							<div class="md:w-[114px] md:max-w-[40%]">
								<?php echo wp_get_attachment_image( $qr_app_mobile, 'full' ) ?>
							</div>
							<?php
						}
						?>
						<div class="flex flex-col gap-4 flex-1">
							<?php if ( have_rows( 'f2_google_play', 'option' ) ) {
								while ( have_rows( 'f2_google_play', 'option' ) ) :
									the_row();
									if ( get_sub_field( 'img' ) ) { ?>
										<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank" rel="nofollow"
											class="prose-img:w-full">
											<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
										</a>
										<?php
									}
								endwhile;
							}
							?>
							<?php if ( have_rows( 'f2_apple_store', 'option' ) ) {
								while ( have_rows( 'f2_apple_store', 'option' ) ) :
									the_row();
									if ( get_sub_field( 'img' ) ) { ?>
										<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank" rel="nofollow"
											class="prose-img:w-full">
											<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
										</a>
										<?php
									}
								endwhile;
							}
							?>
						</div>
					</div>
					<?php if ( get_field( 'f1_copyright', 'option' ) ) { ?>
						<div class="mt-6">
							<?php the_field( 'f1_copyright', 'option' ) ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
		<div
			class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'py-6 mt-6 border-t border-b border-[#f3f3f3]' ?>">
			<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
				<div class="flex items-center uppercase text-yellow-100 text-lg font-bold gap-2 collapse-footer font-body">
					<span><?php _e( 'Liên kết thêm', 'bsc' ) ?></span>
					<?php echo svg( 'down-yellow' ) ?>
				</div>

			<?php } ?>
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'hidden mt-6' ?>">
				<div class="flex justify-between flex-wrap gap-y-5 -mx-3">
					<?php if ( have_rows( 'f3_menu', 'option' ) ) {
						while ( have_rows( 'f3_menu', 'option' ) ) :
							the_row(); ?>
							<div
								class="space-y-4 footer-item px-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-full w-1/2 lg:flex-1' : 'w-[48%]' ?>">
								<?php if ( get_sub_field( 'title' ) ) { ?>
									<p
										class="font-bold uppercase text-yellow-100 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-base' : 'text-xs' ?>">
										<?php the_sub_field( 'title' ) ?>
									</p>
								<?php }
								;
								if ( have_rows( 'menu', 'option' ) ) { ?>
									<ul
										class=" font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-base space-y-4' : 'text-xs space-y-3' ?>">
										<?php while ( have_rows( 'menu', 'option' ) ) :
											the_row(); ?>
											<li><a rel="<?php the_sub_field( 'rel' ) ?>"
													href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" <?php if ( get_sub_field( 'open_tab' ) )
															   echo 'target="_blank"' ?>><?php the_sub_field( 'title' ) ?></a>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php } ?>
							</div>
						<?php endwhile;
					} ?>
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
						<div
							class="space-y-4 px-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:max-w-[33%] lg:max-w-[38%] max-w-[50%]' : 'max-w-full' ?>">
							<?php if ( get_field( 'f4_title', 'option' ) ) { ?>
								<p
									class="font-bold uppercase text-yellow-100 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-base' : 'text-xs' ?>">
									<?php the_field( 'f4_title', 'option' ) ?>
								</p>
							<?php }
							;
							if ( get_field( 'f4_mota', 'option' ) ) { ?>
								<p class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
									<?php the_field( 'f4_mota', 'option' ) ?>
								</p>
							<?php } ?>
							<?php echo do_shortcode( '[contact-form-7 id="972a993" title="Đăng ký nhận tin"]' ) ?>
						</div>
					<?php } ?>
				</div>
			</div>


		</div>
		<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
			<div class="col-span-full mt-6">
				<?php if ( get_field( 'f2_title', 'option' ) ) { ?>
					<p class="font-bold text-xs uppercase mb-4 text-center">
						<?php the_field( 'f2_title', 'option' ) ?>
					</p>
				<?php } ?>

				<div class="grid grid-cols-2 gap-4">
					<?php if ( have_rows( 'f2_google_play', 'option' ) ) {
						while ( have_rows( 'f2_google_play', 'option' ) ) :
							the_row();
							if ( get_sub_field( 'img' ) ) { ?>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank" rel="nofollow">
									<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', '', array( 'class' => 'mx-auto' ) ) ?>
								</a>
								<?php
							}
						endwhile;
					}
					?>
					<?php if ( have_rows( 'f2_apple_store', 'option' ) ) {
						while ( have_rows( 'f2_apple_store', 'option' ) ) :
							the_row();
							if ( get_sub_field( 'img' ) ) { ?>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank" rel="nofollow">
									<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
								</a>
								<?php
							}
						endwhile;
					}
					?>
				</div>
				<?php if ( get_field( 'f1_copyright', 'option' ) ) { ?>
					<div class="mt-6 text-center prose-p:inline text-[13px]">
						<?php the_field( 'f1_copyright', 'option' ) ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
	<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
		<div class="absolute pointer-events-none bottom-0 left-0">
			<?php echo svg( 'icon-ft' ) ?>
		</div>
	<?php } ?>
</footer>
<?php if ( get_field( 'cdc2_tien_ich_on', 'option' ) && ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
	<div
		class="utilities_button will-change-transform translate-z-0 [&:not(.active)]:opacity-100 opacity-0 [&:not(.active)]:visible invisible [&:not(.active)]:pointer-events-auto pointer-events-none  transition-all duration-500 inline-flex items-center gap-2 px-6 py-3 font-semibold text-white bg-gradient-blue fixed 2xl:top-1/2 top-2/3 rotate-90 origin-top-right cursor-pointer rounded-br-[10px] rounded-bl-[10px] border-2 border-[#FFB81C] border-t-0 z-50 [&:not(.show)]:-right-20 right-0">
		<?php the_field( 'cdc2_title', 'option' ) ?>
		<div class="-rotate-90">
			<?php echo svg( 'down-2' ) ?>
		</div>
	</div>
	<?php if ( have_rows( 'cdc2_tien_ich', 'option' ) ) { ?>
		<div
			class="utilities_button-list transition-all duration-500  [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:invisible visible [&:not(.active)]:pointer-events-none pointer-events-auto font-semibold text-white bg-gradient-blue fixed right-0 cursor-pointer rounded-bl-[10px] rounded-tl-[10px] border-2 border-[#FFB81C] border-r-0 text-[12px] z-[99]">
			<?php while ( have_rows( 'cdc2_tien_ich', 'option' ) ) :
				the_row(); ?>
				<a <?php if ( get_sub_field( 'open_tab' ) )
					echo 'target="_blank"' ?> rel="<?php the_sub_field( 'rel' ) ?>"
					href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
					class="utilities_button-item 2xl:leading-normal leading-tight utilities_button-hover transition-all duration-500 w-full text-center flex flex-col justify-center items-center 2xl:py-4 py-2 2xl:px-3 px-1 relative after:absolute after:w-10 after:h-[1px] after:bg-yellow-100 after:bottom-0 after:left-1/2 after:-translate-x-1/2">
					<?php if ( get_sub_field( 'icon' ) ) { ?>
						<img src="<?= the_sub_field( 'icon' ) ?>" alt="icon" loading="lazy" class="w-8 h-8 object-contain">
					<?php } ?>
					<?php the_sub_field( 'title' ) ?>
				</a>
			<?php endwhile; ?>
			<div
				class="collapse-button w-full flex flex-col justify-center items-center 2xl:py-4 py-2 2xl:px-3 px-2 utilities_button-hover transition-all duration-500">
				<?php echo svgClass( 'down-2', '', '', 'rotate-180' ) ?>
				<?php _e( 'Thu gọn', 'bsc' ) ?>
			</div>
		</div>
	<?php } ?>
<?php } ?>
<div
	class="inline-flex flex-col fixed <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:bottom-8 bottom-[6px]' : 'bottom-14' ?> right-3 2xl:gap-4 gap-2 z-[99]">
	<?php
	if ( get_field( 'cdc3_link', 'option' ) && get_field( 'cdc3_youtube_open_time', 'option' ) && ! wp_is_mobile() && ! bsc_is_mobile() ) {
		$cdc3_youtube_open_time_value = get_field( 'cdc3_youtube_open_time', 'option' );
		$current_date = current_time( 'timestamp' );
		$cdc3_youtube_open_time_value = strtotime( $cdc3_youtube_open_time_value );
		if ( $cdc3_youtube_open_time_value && $current_date >= $cdc3_youtube_open_time_value ) {
			?>
			<a <?php if ( get_field( 'cdc3_open_tab', 'option' ) )
				echo 'target="_blank"' ?>
					rel="<?php the_field( 'cdc3_open_tab_rel', 'option' ) ?>"
				href="<?php echo check_link( get_field( 'cdc3_link', 'option' ) ) ?>" class="relative group block">
				<div
					class="w-10 h-10 rounded-full bg-white shadow-blue relative z-10 flex items-center justify-center open-ytb [&:not(.active)]:pointer-events-auto pointer-events-none">
					<?php echo svgClass( 'ytb', '20', '', 'shake-animation' ) ?>
				</div>
				<?php if ( get_field( 'cdc3_title', 'option' ) ) { ?>
					<div
						class="rounded-full absolute bg-white shadow-blue whitespace-nowrap h-10 flex flex-col justify-center pl-5 font-bold text-sm transition-all duration-500 top-0 right-0 opacity-0 group-hover:opacity-100 group-hover:w-auto w-10 group-hover:pr-12">
						<?php the_field( 'cdc3_title', 'option' ); ?>
					</div>
				<?php } ?>
			</a>
			<?php
		}
	} ?>
	<div class="relative block text-white  cursor-pointer">
		<div
			class="w-10 h-10 rounded-full bg-primary-300 shadow-blue relative z-10 flex items-center justify-center shadow-base peer open-utilities [&:not(.active)]:pointer-events-auto pointer-events-none">
			<?php echo svg( 'settings', '20' ) ?>
		</div>
		<?php if ( get_field( 'cdc4_title', 'option' ) ) { ?>
			<div
				class="rounded-full absolute bg-primary-300 shadow-blue whitespace-nowrap h-10 flex flex-col justify-center pl-5 font-bold text-sm transition-all duration-500 top-0 right-0 opacity-0 peer-hover:opacity-100 peer-hover:w-auto w-10 peer-hover:pr-12 ">
				<?php the_field( 'cdc4_title', 'option' ) ?>
			</div>
		<?php } ?>
		<div
			class="md:w-[432px] w-[85vw] md:py-12 py-6 md:px-8 px-5 rounded-[10px] shadow-base bg-white absolute <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'right-14 bottom-0' : 'right-4 bottom-11' ?> hidden open-utilities-box">
			<div
				class="flex items-center justify-between  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pb-6' : 'sm:pb-4 pb-[12px]' ?> border-b border-black border-opacity-10 text-black">
				<?php if ( get_field( 'cdc4_title_khoi', 'option' ) ) { ?>
					<div
						class="inline-flex items-center font-bold uppercase  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl gap-4' : 'sm:text-lg text-base gap-2' ?>">
						<?php echo svgClass( 'keyvisual', '', '', ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-6 h-6' : 'w-4 h-4' ) ?>
						<?php the_field( 'cdc4_title_khoi', 'option' ) ?>
					</div>
				<?php } ?>
				<div
					class="inline-flex items-center gap-1 font-bold uppercase text-primary-700  hidden-utilities <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xs' : 'md:text-xs text-xxs' ?>">
					<?php echo svgClass( 'close-icon', '', '', ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-5 h-5' : 'w-4 h-4' ) ?>
					<?php _e( 'Ẩn đi', 'bsc' ) ?>
				</div>
			</div>
			<?php if ( have_rows( 'cdc4_menu', 'option' ) ) { ?>
				<div
					class="grid grid-cols-3 scroll-bar-custom max-h-[255px] overflow-y-auto <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'gap-6 py-6 pr-2' ?>">
					<?php while ( have_rows( 'cdc4_menu', 'option' ) ) :
						the_row(); ?>
						<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" rel="<?php the_sub_field( 'rel' ) ?>"
							<?php if ( get_sub_field( 'open_tab' ) )
								echo 'target="_blank"' ?>
								class="flex flex-col items-center  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 p-5' : 'gap-1' ?> text-black transition-all duration-500 text-center hover:shadow-[inset_0px_4px_24px_0px_rgba(0,0,0,0.12)]">
							<img src="<?= the_sub_field( 'icon' ) ?>" alt="icon" loading="lazy"
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-10 h-10' : 'w-6 h-6' ?> shrink-0 object-contain">
							<?php if ( get_sub_field( 'title' ) ) { ?>
								<div class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xs' : 'text-xxs' ?>">
									<?php the_sub_field( 'title' ) ?>
								</div>
							<?php } ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php } ?>

			<?php
			if ( have_rows( 'cdc4_khoi_bsc_live', 'option' ) || have_rows( 'cdc4_khoi_chat_support', 'option' ) ) {
				?>
				<div
					class=" border-t border-black border-opacity-10 grid grid-cols-2 gap-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-8' : 'sm:pt-5 pt-[12px]' ?>">
					<?php
					if ( have_rows( 'cdc4_khoi_bsc_live', 'option' ) ) {
						while ( have_rows( 'cdc4_khoi_bsc_live', 'option' ) ) :
							the_row();
							if ( get_sub_field( 'title' ) ) {
								?>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ); ?>"
									class="inline-flex transition-all duration-500 hover:opacity-95 hover:shadow-[0px_4px_16px_0px_rgba(242,33,33,0.4)] font-bold py-[12px] px-4 items-center justify-center gap-[6px] text-[12px] rounded-[10px] shadow-[0_4px_10px_0px_rgba(0,0,0,0.2)] text-white bg-[#F22121]">
									<?php echo svg( 'live' ); ?>
									<?php the_sub_field( 'title' ); ?>
								</a>
								<?php
							}
						endwhile;
					}

					if ( have_rows( 'cdc4_khoi_chat_support', 'option' ) ) {
						while ( have_rows( 'cdc4_khoi_chat_support', 'option' ) ) :
							the_row();
							if ( get_sub_field( 'title' ) ) {
								?>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ); ?>"
									class="inline-flex transition-all duration-500 hover:opacity-95 hover:shadow-[0px_4px_16px_0px_rgba(0,92,238,0.4)] font-bold py-[12px] px-4 items-center justify-center gap-[6px] text-[12px] rounded-[10px] shadow-[0_4px_10px_0px_rgba(0,0,0,0.2)] text-white bg-[#005DEE]">
									<?php echo svg( 'chat' ); ?>
									<?php the_sub_field( 'title' ); ?>
								</a>
								<?php
							}
						endwhile;
					}
					?>
				</div>
				<?php
			}
			?>

		</div>
	</div>

	<div
		class="back-to-top w-10 h-10 rounded-full m-auto bg-white shadow-base cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
		<?php echo svgClass( 'back-top', '', '', 'm-auto h-full cursor-pointer' ) ?>
	</div>
</div>
<div id="document-modal" tabindex="-1" aria-hidden="true"
	class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-[#000] bg-opacity-80">
	<div class="relative w-full lg:max-w-[764px] max-w-[95%] max-h-full">
		<div class="relative bg-white p-6 rounded-[10px]">
			<div class="border-b mb-4 pb-4 text-right">
				<button type="button"
					class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
					data-modal-hide="document-modal">
					<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 18.5L6 6.5" stroke="#160042" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M6 18.5L18 6.5" stroke="#160042" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>

					<span class="sr-only"><?php _e( 'Close modal', 'bsc' ) ?></span>
				</button>
				<p class="text-xl text-black document-modal-title text-left font-bold">
				</p>
			</div>

			<div
				class="font-Helvetica space-y-4 document-modal-content pr-4 mb-12 scroll-bar-custom max-h-80 overflow-y-auto font-content text-justify prose-a:text-primary-300">

			</div>
			<div class="hidden document-popup-loading">
				<div role="status">
					<svg aria-hidden="true"
						class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
						viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
							fill="currentColor" />
						<path
							d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
							fill="currentFill" />
					</svg>
					<span class="sr-only">Loading...</span>
				</div>
			</div>
			<div class="text-right">
				<a href="" target="_blank"
					class="document-modal-link inline-flex py-3 px-6 gap-2 rounded-lg bg-yellow-100 text-xs font-bold">
					<?php _e( 'Xem nội dung', 'bsc' ) ?>
					<?php echo svgpath( 'download', '20', '20', 'fill-black' ) ?>
				</a>
			</div>

		</div>
	</div>
</div>
<?php if ( bsc_is_user_logged_out() ) { ?>
	<div id="popup-login" tabindex="-1"
		class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[999] justify-center items-center w-full md:inset-0 h-full max-h-full bg-[#000] bg-opacity-80">
		<div class="relative md:max-w-[374px] w-full max-w-[95%] max-h-full">
			<div class="relative">
				<button type="button"
					class="absolute top-1.5 end-2 rounded-lg text-sm w-6 h-6 ms-auto inline-flex justify-center items-center"
					data-modal-hide="popup-login">
					<?php echo svg( 'close-login' ) ?>
				</button>
				<div
					class="active w-full text-center md:py-[37px] py-8 md:px-[57px] px-8 font-Helvetica bg-[#242729] rounded-lg [&:not(.active)]:pointer-events-none [&:not(.active)]:opacity-0 [&:not(.active)]:invisible [&:not(.active)]:absolute [&:not(.active)]:top-0 form-login-wrapper">
					<?php
					$custom_logo_id = get_field( 'h0_logo', 'option' );
					if ( $custom_logo_id ) {
						$image = wp_get_attachment_image_src( $custom_logo_id, 'medium' );
						?>
						<a class="block" href="<?php echo get_bloginfo( 'url' ); ?>"
							title="<?php echo get_bloginfo( 'description' ); ?>">
							<img class="object-contain max-w-[150px] mx-auto" src="<?php echo esc_url( $image[0] ); ?>"
								loading="lazy">
						</a>
						<?php
					}
					?>
					<div class="md:mt-5 mt-[18px] md:mb-[51px] mb-8 text-white ">
						<p><?php _e( 'Quý khách vui lòng ', 'bsc' ) ?></p>
						<p><?php _e( 'chọn loại tài khoản để đăng nhập', 'bsc' ) ?></p>
					</div>
					<div class="space-y-4  font-medium text-white ">
						<a href="<?php echo bsc_url_sso() ?>"
							class="bg-gradient-blue-600 py-2 px-4 rounded transition-all duration-500 btn-light h-10 flex flex-col items-center justify-center login-sso">
							<?php _e( 'Tài khoản chứng khoán', 'bsc' ) ?>
						</a>
						<a href="javascript:void(0)"
							class="bg-[#363A43] py-2 px-4 rounded transition-all duration-500 btn-light h-10 flex flex-col items-center justify-center show-login-form">
							<?php _e( 'Tài khoản khác', 'bsc' ) ?>
						</a>
					</div>
				</div>
				<div
					class="text-center w-full md:pt-[30px] pt-8 md:pb-0 pb-8 md:px-[27px] px-8 font-Helvetica bg-[#242729] rounded-lg form-login [&:not(.active)]:pointer-events-none [&:not(.active)]:opacity-0 [&:not(.active)]:invisible [&:not(.active)]:absolute [&:not(.active)]:top-0">
					<?php
					$custom_logo_id = get_field( 'f5_link_logo', 'option' );
					if ( $custom_logo_id ) {
						$image = wp_get_attachment_image_src( $custom_logo_id, 'medium' );
						?>
						<a class="block" href="<?php echo get_bloginfo( 'url' ); ?>"
							title="<?php echo get_bloginfo( 'description' ); ?>">
							<img class="object-contain max-w-[103px] mx-auto" src="<?php echo esc_url( $image[0] ); ?>"
								loading="lazy">
						</a>
						<?php
					}
					?>
					<?php $current_url = home_url( $_SERVER['REQUEST_URI'] ); ?>
					<form id="form_login_khtcc" class="mt-8" data-url="<?php echo $current_url ?>" autocomplete=off>
						<div class="space-y-[12px]">
							<div class="user_name border-b border-[#3F4247] h-12 flex items-center gap-3">
								<?php echo svgClass( 'user', '', '', 'shrink-0' ) ?>
								<input autocomplete="off" type="text" name="username_dktc"
									placeholder="<?php _e( 'Tên đăng nhập', 'bsc' ) ?>"
									class="username w-full h-full bg-transparent text-white placeholder-white placeholder:opacity-25 focus:outline-none border-none focus:ring-0 p-0">
							</div>
							<div class="user_password border-b border-[#3F4247] h-12 flex items-center gap-3">
								<?php echo svg( 'password', '', '', 'shrink-0' ) ?>
								<input autocomplete="off" type="password" name="password_dktc"
									placeholder="<?php _e( 'Mật khẩu', 'bsc' ) ?>"
									class="password w-full flex-1 h-full bg-transparent text-white placeholder-white placeholder:opacity-25 focus:outline-none border-none focus:ring-0 p-0 ">
								<div
									class="hide-pass relative after:absolute after:w-0.5 after:h-6 after:bg-white after:top-0 after:left-1/2 after:-translate-x-1/2 after:-skew-x-[30deg] [&:not(.active)]:after:opacity-0">
									<?php echo svgClass( 'hidepassword', '', '', 'shrink-0 cursor-pointer' ) ?>
								</div>
							</div>
						</div>
						<div class="md:mt-14 mt-8 space-y-2 text-white">
							<button type="submit"
								class="bg-gradient-blue-600 py-2 px-4 rounded transition-all duration-500 btn-light h-10 flex gap-3 items-center justify-center w-full">
								<span><?php _e( 'Đăng nhập', 'bsc' ) ?></span>
								<div role="status" class="loading hidden">
									<svg aria-hidden="true"
										class="w-4 h-4 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
										viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
											fill="currentColor" />
										<path
											d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
											fill="currentFill" />
									</svg>
									<span class="sr-only">Loading...</span>
								</div>
							</button>

							<a href="javascript:void(0)"
								class="bg-[#363A43] py-2 px-4 rounded transition-all duration-500 btn-light h-10 flex flex-col items-center justify-center back-form-login w-full">
								<?php _e( 'Quay lại', 'bsc' ) ?>
							</a>
							<p id="login_message" class="text-red-500 text-xs"></p>
						</div>
					</form>
					<div class="md:mt-[119px] mt-10 md:grid md:grid-cols-2 md:gap-4 md:space-y-0 space-y-4">
						<?php if ( get_field( 'f5_link_hotline', 'option' ) ) { ?>
							<a href="<?php the_field( 'f5_link_hotline', 'option' ) ?>"
								class="flex items-center gap-[12px] text-xxs text-white text-opacity-40 transition-all duration-300 hover:text-opacity-100">
								<?php echo svgClass( 'call', '', '', 'shrink-0' ) ?>
								<?php _e( 'Hotline trợ giúp', 'bsc' ) ?>
							</a>
						<?php } ?>
						<?php if ( get_field( 'f5_link_chat', 'option' ) ) { ?>
							<a href="<?php the_field( 'f5_link_chat', 'option' ) ?>"
								class="flex items-center gap-[12px] text-xxs text-white text-opacity-40 transition-all duration-300 hover:text-opacity-100">
								<?php echo svgClass( 'chatt', '', '', 'shrink-0' ) ?>
								<?php _e( 'Chat với nhân viên', 'bsc' ) ?>
							</a>
						<?php } ?>
					</div>
					<div class="h-[1px] bg-[#3F4247] mt-4 md:-mx-[27px]"></div>
					<div class="pt-4 md:pb-4 relative text-center">
						<div
							class="inline-flex items-center justify-center gap-2 text-white text-opacity-40 text-xs cursor-pointer select_language">
							<?php
							$languages = pll_the_languages( array( 'raw' => 1 ) );
							$current_lang = pll_current_language();

							if ( ! empty( $languages[ $current_lang ] ) ) {
								$lang_info = $languages[ $current_lang ];
								echo '<img src="' . esc_url( $lang_info['flag'] ) . '" alt="' . esc_attr( $lang_info['name'] ) . '" style="width: 20px; height: auto;">';
								echo esc_html( $lang_info['name'] );
							}
							?>
							<?php echo svgClass( 'down-3', '', '', 'shrink-0' ) ?>
						</div>
						<ul
							class="absolute select_language_list transition-all [&:not(.active)]:opacity-0 [&:not(.active)]:pointer-events-none left-1/2 -translate-x-1/2 bottom-full bg-white p-2 rounded text-white text-xs prose-a:text-black w-[150px] text-left space-y-1 prose-a:py-1.5 prose-a:px-2 prose-a:block prose-a:rounded prose-a:text-xxs hover:prose-a:text-white hover:prose-a:bg-primary-300 prose-a:transition-all after:absolute after:left-1/2 after:-bottom-[9px] after:-translate-x-1/2 after:border-l-[8px] after:border-l-transparent after:border-t-[10px] after:border-t-white after:border-r-[8px] after:border-r-transparent">
							<?php pll_the_languages( array( 'show_flags' => 0, 'show_names' => 1 ) ); ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-modal-target="popup-login" data-modal-toggle="popup-login" type="button" class="btn-login-trigger"
		data-url="" data-current=""></div>
<?php } ?>

<?php wp_footer(); ?>

</body>

</html>