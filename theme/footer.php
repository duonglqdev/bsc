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
			<?php if (get_field('f1_tongdai', 'option')) { ?>
				<div class="flex items-center gap-x-4 text-white  font-normal">
					<?php echo svg('phone') ?>
					<p><?php the_field('f1_tongdai', 'option') ?></p>
				</div>
			<?php } ?>
			<?php if (have_rows('f1_mxh', 'option')) { ?>
				<div class="flex items-center gap-x-2 text-white">
					<?php while (have_rows('f1_mxh', 'option')): the_row(); ?>
						<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank" rel="nofollow">
							<?php
							$icon_field = get_sub_field('icon');
							$icon_values = explode(',', $icon_field);
							$icon_name = isset($icon_values[0]) ? trim($icon_values[0], " '") : '';
							$icon_width = isset($icon_values[1]) ? trim($icon_values[1], " '") : false;
							$icon_height = isset($icon_values[2]) ? trim($icon_values[2], " '") : false;
							if ($icon_name) {
								echo svg($icon_name, $icon_width, $icon_height);
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
				$custom_logo_id = get_field('f1_logo', 'option');
				if ($custom_logo_id) {
					$image = wp_get_attachment_image_src($custom_logo_id, 'full');
					printf(
						'<a class="max-w-[116px] block mb-6" href="%1$s" title="%2$s"><img class="max-w-24" src="%3$s"></a>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						$image[0],

					);
				}
				?>
				<?php the_field('f1_mota', 'option') ?>
			</div>
			<div class="lg:col-span-3 md:col-span-4 col-span-full">
				<ul class="space-y-4">
					<?php if (have_rows('f1_thongtintruso', 'option')) {
						while (have_rows('f1_thongtintruso', 'option')): the_row(); ?>
							<li class="flex gap-x-4">
								<?php
								$icon_field = get_sub_field('icon');
								$icon_values = explode(',', $icon_field);
								$icon_name = isset($icon_values[0]) ? trim($icon_values[0], " '") : '';
								$icon_width = isset($icon_values[1]) ? trim($icon_values[1], " '") : false;
								$icon_height = isset($icon_values[2]) ? trim($icon_values[2], " '") : false;
								$icon_class = isset($icon_values[3]) ? trim($icon_values[3], " '") : '';
								if ($icon_name) {
									echo svgClass($icon_name, $icon_width, $icon_height, $icon_class);
								}
								?>
								<p>
									<?php if (get_sub_field('bold')) { ?>
										<strong><?php the_sub_field('bold') ?></strong>
									<?php } ?>
									<?php the_sub_field('mota') ?>
								</p>
							</li>
					<?php endwhile;
					} ?>
					<?php if (have_rows('f1_mangluoi', 'option')) {
						while (have_rows('f1_mangluoi', 'option')): the_row();
							if (get_sub_field('title')) { ?>
								<li class="flex gap-x-4 text-yellow-100 transition-all hover:text-green">
									<?php echo svg('map') ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>" class="flex items-center uppercase font-bold font-body gap-x-2">
										<?php the_sub_field('title') ?>
										<?php echo svg('arrow-right') ?>
									</a>
								</li>
					<?php };
						endwhile;
					} ?>
				</ul>
			</div>
			<div class="lg:col-span-2 col-span-full">
				<?php if (get_field('f2_title', 'option')) { ?>
					<p class="font-bold text-xs uppercase mb-4">
						<?php the_field('f2_title', 'option') ?>
					</p>
				<?php } ?>
				<div class="flex gap-6">
					<?php if (have_rows('f2_qr_code', 'option')) {
						while (have_rows('f2_qr_code', 'option')):  the_row();
							if (get_sub_field('img')) { ?>
								<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank" rel="nofollow" class="md:w-[114px] md:max-w-[40%]">
									<?php echo wp_get_attachment_image(get_sub_field('img'), 'full') ?>
								</a>
					<?php
							}
						endwhile;
					}
					?>
					<div class="flex flex-col gap-4">
						<?php if (have_rows('f2_google_play', 'option')) {
							while (have_rows('f2_google_play', 'option')):  the_row();
								if (get_sub_field('img')) { ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank" rel="nofollow">
										<?php echo wp_get_attachment_image(get_sub_field('img'), 'full') ?>
									</a>
						<?php
								}
							endwhile;
						}
						?>
						<?php if (have_rows('f2_apple_store', 'option')) {
							while (have_rows('f2_apple_store', 'option')):  the_row();
								if (get_sub_field('img')) { ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank" rel="nofollow">
										<?php echo wp_get_attachment_image(get_sub_field('img'), 'full') ?>
									</a>
						<?php
								}
							endwhile;
						}
						?>
					</div>
				</div>
				<?php if (get_field('f1_copyright', 'option')) { ?>
					<div class="mt-6">
						<?php the_field('f1_copyright', 'option') ?>
					</div>
				<?php }	 ?>
			</div>
		</div>

		<div class="grid lg:grid-cols-9 md:grid-cols-12 gap-5">
			<?php if (have_rows('f3_menu', 'option')) {
				while (have_rows('f3_menu', 'option')): the_row(); ?>
					<div class="lg:col-span-2 md:col-span-6 space-y-4 footer-item">
						<?php if (get_sub_field('title')) { ?>
							<p class="font-bold uppercase text-yellow-100"><?php the_sub_field('title') ?></p>
						<?php };
						if (have_rows('menu', 'option')) { ?>
							<ul class="space-y-4 font-bold">
								<?php while (have_rows('menu', 'option')): the_row(); ?>
									<li><a href="<?php echo check_link(get_sub_field('link')) ?>"><?php the_sub_field('title') ?></a></li>
								<?php endwhile; ?>
							</ul>
						<?php } ?>
					</div>
			<?php endwhile;
			} ?>
			<div class="lg:col-span-3 md:col-span-6 space-y-4">
				<?php if (get_field('f4_title', 'option')) { ?>
					<p class="font-bold uppercase text-yellow-100"><?php the_field('f4_title', 'option') ?></p>
				<?php };
				if (get_field('f4_mota', 'option')) { ?>
					<p>
						<?php the_field('f4_mota', 'option') ?>
					</p>
				<?php } ?>
				<?php echo do_shortcode('[contact-form-7 id="972a993" title="Đăng ký nhận tin"]') ?>
			</div>
		</div>

	</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svgClass('back-top', '20', '20', 'm-auto h-full') ?>
</div>
<?php wp_footer(); ?>

</body>

</html>