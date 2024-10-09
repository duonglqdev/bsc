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
<footer class="bg-gradient-blue md:py-9 py-6 text-white font-Helvetica">
	<div class="container">
		<div
			class="flex lg:justify-between justify-center items-center lg:flex-row flex-col gap-4 pb-6 mb-10 border-b border-[#f3f3f3] border-opacity-50">
			<?php if ( get_field( 'f1_tongdai', 'option' ) )
			{ ?>
				<div class="flex items-center gap-x-4 text-white  font-normal">
					<?php echo svg( 'phone' ) ?>
					<p><?php the_field( 'f1_tongdai', 'option' ) ?></p>
				</div>
			<?php } ?>
			<?php if ( have_rows( 'f1_mxh', 'option' ) )
			{ ?>
				<div class="flex items-center gap-x-2 text-white">
					<?php while ( have_rows( 'f1_mxh', 'option' ) ) :
						the_row(); ?>
						<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank"
							rel="nofollow">
							<?php
							$icon_field = get_sub_field( 'icon' );
							$icon_values = explode( ',', $icon_field );
							$icon_name = isset( $icon_values[0] ) ? trim( $icon_values[0], " '" ) : '';
							$icon_width = isset( $icon_values[1] ) ? trim( $icon_values[1], " '" ) : false;
							$icon_height = isset( $icon_values[2] ) ? trim( $icon_values[2], " '" ) : false;
							if ( $icon_name )
							{
								echo svg( $icon_name, $icon_width, $icon_height );
							}
							?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php } ?>
		</div>
		<div
			class="grid grid-cols-8 2xl:gap-12 lg:gap-10 gap-5 mb-10 pb-10 border-b border-[#f3f3f3] border-opacity-50">
			<div class="lg:col-span-3 md:col-span-4 col-span-full">
				<?php
				$custom_logo_id = get_field( 'f1_logo', 'option' );
				if ( $custom_logo_id )
				{
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					printf(
						'<a class="max-w-[116px] block mb-6" href="%1$s" title="%2$s"><img class="max-w-24" src="%3$s"></a>',
						get_bloginfo( 'url' ),
						get_bloginfo( 'description' ),
						$image[0],

					);
				}
				?>
				<?php the_field( 'f1_mota', 'option' ) ?>
			</div>
			<div class="lg:col-span-3 md:col-span-4 col-span-full">
				<ul class="space-y-4">
					<?php if ( have_rows( 'f1_thongtintruso', 'option' ) )
					{
						while ( have_rows( 'f1_thongtintruso', 'option' ) ) :
							the_row(); ?>
							<li class="flex gap-x-4">
								<?php
								$icon_field = get_sub_field( 'icon' );
								$icon_values = explode( ',', $icon_field );
								$icon_name = isset( $icon_values[0] ) ? trim( $icon_values[0], " '" ) : '';
								$icon_width = isset( $icon_values[1] ) ? trim( $icon_values[1], " '" ) : false;
								$icon_height = isset( $icon_values[2] ) ? trim( $icon_values[2], " '" ) : false;
								$icon_class = isset( $icon_values[3] ) ? trim( $icon_values[3], " '" ) : '';
								if ( $icon_name )
								{
									echo svgClass( $icon_name, $icon_width, $icon_height, $icon_class );
								}
								?>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
									target="_blank" rel="nofollow">
									<?php if ( get_sub_field( 'bold' ) )
									{ ?>
										<strong><?php the_sub_field( 'bold' ) ?></strong>
									<?php } ?>
									<?php the_sub_field( 'mota' ) ?>
								</a>
							</li>
						<?php endwhile;
					} ?>
					<?php if ( have_rows( 'f1_mangluoi', 'option' ) )
					{
						while ( have_rows( 'f1_mangluoi', 'option' ) ) :
							the_row();
							if ( get_sub_field( 'title' ) )
							{ ?>
								<li class="flex gap-x-4 text-yellow-100 transition-all hover:text-green">
									<?php echo svg( 'map' ) ?>
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										class="flex items-center uppercase font-bold font-body gap-x-2">
										<?php the_sub_field( 'title' ) ?>
										<?php echo svg( 'arrow-right' ) ?>
									</a>
								</li>
							<?php }
							;
						endwhile;
					} ?>
				</ul>
			</div>
			<div class="lg:col-span-2 col-span-full">
				<?php if ( get_field( 'f2_title', 'option' ) )
				{ ?>
					<p class="font-bold text-xs uppercase mb-4">
						<?php the_field( 'f2_title', 'option' ) ?>
					</p>
				<?php } ?>
				<div class="flex gap-6">
					<?php if ( have_rows( 'f2_qr_code', 'option' ) )
					{
						while ( have_rows( 'f2_qr_code', 'option' ) ) :
							the_row();
							if ( get_sub_field( 'img' ) )
							{ ?>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>" target="_blank"
									rel="nofollow" class="md:w-[114px] md:max-w-[40%]">
									<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
								</a>
								<?php
							}
						endwhile;
					}
					?>
					<div class="flex flex-col gap-4">
						<?php if ( have_rows( 'f2_google_play', 'option' ) )
						{
							while ( have_rows( 'f2_google_play', 'option' ) ) :
								the_row();
								if ( get_sub_field( 'img' ) )
								{ ?>
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										target="_blank" rel="nofollow">
										<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
									</a>
									<?php
								}
							endwhile;
						}
						?>
						<?php if ( have_rows( 'f2_apple_store', 'option' ) )
						{
							while ( have_rows( 'f2_apple_store', 'option' ) ) :
								the_row();
								if ( get_sub_field( 'img' ) )
								{ ?>
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										target="_blank" rel="nofollow">
										<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
									</a>
									<?php
								}
							endwhile;
						}
						?>
					</div>
				</div>
				<?php if ( get_field( 'f1_copyright', 'option' ) )
				{ ?>
					<div class="mt-6">
						<?php the_field( 'f1_copyright', 'option' ) ?>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="grid lg:grid-cols-9 md:grid-cols-12 gap-5">
			<?php if ( have_rows( 'f3_menu', 'option' ) )
			{
				while ( have_rows( 'f3_menu', 'option' ) ) :
					the_row(); ?>
					<div class="lg:col-span-2 md:col-span-6 space-y-4 footer-item">
						<?php if ( get_sub_field( 'title' ) )
						{ ?>
							<p class="font-bold uppercase text-yellow-100"><?php the_sub_field( 'title' ) ?></p>
						<?php }
						;
						if ( have_rows( 'menu', 'option' ) )
						{ ?>
							<ul class="space-y-4 font-bold">
								<?php while ( have_rows( 'menu', 'option' ) ) :
									the_row(); ?>
									<li><a
											href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"><?php the_sub_field( 'title' ) ?></a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php } ?>
					</div>
				<?php endwhile;
			} ?>
			<div class="lg:col-span-3 md:col-span-6 space-y-4">
				<?php if ( get_field( 'f4_title', 'option' ) )
				{ ?>
					<p class="font-bold uppercase text-yellow-100">
						<?php the_field( 'f4_title', 'option' ) ?>
					</p>
				<?php }
				;
				if ( get_field( 'f4_mota', 'option' ) )
				{ ?>
					<p>
						<?php the_field( 'f4_mota', 'option' ) ?>
					</p>
				<?php } ?>
				<?php echo do_shortcode( '[contact-form-7 id="972a993" title="Đăng ký nhận tin"]' ) ?>
			</div>
		</div>

	</div>
</footer>

<div
	class="utilities_button  [&:not(.active)]:opacity-100 opacity-0 [&:not(.active)]:visible invisible [&:not(.active)]:pointer-events-auto pointer-events-none  transition-all duration-500 inline-flex items-center gap-2 px-6 py-3 font-semibold text-white bg-gradient-blue fixed right-0 top-2/4 rotate-90 origin-top-right cursor-pointer rounded-br-[10px] rounded-bl-[10px] border-2 border-[#FFB81C] border-t-0">
	<?php _e( 'Tiện ích giao dịch', 'bsc' ) ?>
	<div class="-rotate-90">
		<?php echo svg( 'down-2' ) ?>
	</div>
</div>
<div
	class="utilities_button-list transition-all duration-500  [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:invisible visible [&:not(.active)]:pointer-events-none pointer-events-auto font-semibold text-white bg-gradient-blue fixed right-0 top-1/4 cursor-pointer rounded-bl-[10px] rounded-tl-[10px] border-2 border-[#FFB81C] border-r-0 text-[12px]">
	<div
		class="utilities_button-item transition-all duration-500 w-full text-center flex flex-col justify-center items-center py-4 px-3 relative after:absolute after:w-10 after:h-[1px] after:bg-yellow-100 after:bottom-0 after:left-1/2 after:-translate-x-1/2">
		<?php echo svgClass( 'trading', '', '', 'w-8 h-8' ) ?>
		<a href="">
			BSC <br>
			Webtrading
		</a>
	</div>
	<div
		class="utilities_button-item transition-all duration-500 w-full text-center flex flex-col justify-center items-center py-4 px-3 relative after:absolute after:w-10 after:h-[1px] after:bg-yellow-100 after:bottom-0 after:left-1/2 after:-translate-x-1/2">
		<?php echo svgClass( 'invest', '', '', 'w-8 h-8' ) ?>
		<a href="">
			BSC <br>
			Smart Invest
		</a>
	</div>
	<div
		class="utilities_button-item transition-all duration-500 w-full text-center flex flex-col justify-center items-center py-4 px-3 relative after:absolute after:w-10 after:h-[1px] after:bg-yellow-100 after:bottom-0 after:left-1/2 after:-translate-x-1/2">
		<?php echo svgClass( 'support', '', '', 'w-8 h-8' ) ?>
		<a href="">
			Hỗ trợ <br>
			trực tuyến
		</a>
	</div>
	<div class="collapse-button w-full flex flex-col justify-center items-center py-4 px-3">
		<?php echo svgClass( 'down-2', '', '', 'rotate-180' ) ?>
		<?php _e( 'Thu gọn', 'bsc' ) ?>
	</div>

</div>

<div class="inline-flex flex-col fixed bottom-14 right-6 gap-4">
	<a href="" class="relative group block">
		<div
			class="w-10 h-10 rounded-full bg-white shadow-blue relative z-10 flex items-center justify-center">
			<?php echo svg( 'ytb', '20' ) ?>
		</div>
		<div
			class="rounded-full absolute bg-white shadow-blue whitespace-nowrap h-10 flex flex-col justify-center pl-5 font-bold text-sm transition-all duration-500 top-0 right-0 opacity-0 group-hover:opacity-100 group-hover:w-auto w-10 group-hover:pr-12">
			BSC livestream
		</div>
	</a>
	<a href="" class="relative group block text-white">
		<div
			class="w-10 h-10 rounded-full bg-primary-300 shadow-blue relative z-10 flex items-center justify-center">
			<?php echo svg( 'settings', '20' ) ?>
		</div>
		<div
			class="rounded-full absolute bg-primary-300 shadow-blue whitespace-nowrap h-10 flex flex-col justify-center pl-5 font-bold text-sm transition-all duration-500 top-0 right-0 opacity-0 group-hover:opacity-100 group-hover:w-auto w-10 group-hover:pr-12 ">
			Tiện ích
		</div>
	</a>

	<div
		class="back-to-top w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
		<?php echo svgClass( 'back-top', '20', '20', 'm-auto h-full' ) ?>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>