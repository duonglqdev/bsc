<?php
$id_class = get_sub_field('id_class');
if (have_rows('slider')) {
?>
	<section
		class="home__banner <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pc dots-white' : 'mb dots-blue' ?> block_slider-show-1 block_sameheight"
		<?php if ($id_class) { ?> id="<?php echo $id_class ?>" <?php } ?>>
		<?php while (have_rows('slider')) :
			the_row();
			$type_slider = get_sub_field('type_slider');
			if ($type_slider == 'image') {
		?>
				<div class="w-full relative block_slider-item sameheight_item" data-play="4000">
					<a href="<?php echo check_link(get_sub_field('link')) ?>"
						class="relative w-full block lg:pt-0 pt-[110.4%]">
						<?php
						$image_id_desktop = get_sub_field('image'); // ID của ảnh desktop
						$image_id_mobile = get_sub_field('image_mobile') ?: $image_id_desktop; // ID của ảnh mobile (mặc định lấy ảnh desktop nếu không có)

						$mobile_image_url = wp_get_attachment_image_url($image_id_mobile, 'full'); // Lấy URL của ảnh mobile
						?>

						<picture>
							<source media="(max-width: 1024px)" srcset="<?php echo esc_url($mobile_image_url); ?>">
							<?php echo wp_get_attachment_image($image_id_desktop, 'full', '', array('class' => 'w-full h-full object-cover lg:static absolute inset-0')); ?>
						</picture>

					</a>
				</div>
				<?php
			} elseif ($type_slider == 'video') {
				if (get_sub_field('video') || get_sub_field('video_mobile')) {
					$video_play = (bsc_is_mobile() && wp_is_mobile() && get_sub_field('video_mobile'))
						? get_sub_field('video_mobile')
						: get_sub_field('video');
				?>
					<div class="w-full block_slider-item sameheight_item" data-play="10000">
						<div
							class="w-full relative max-h-full h-full after:absolute lg:after:w-3/4 after:w-full after:top-0 after:left-0 after:bg-gradient-banner after:h-full after:pointer-events-none lg:pt-0 pt-[110.4%]">
							<video preload="none" id="video-banner"
								class="object-cover w-full max-w-full h-full max-h-full lg:static absolute inset-0"
								autoplay="" muted="" playsinline="" loop=""
								src="<?php echo $video_play ?>"></video>
							<div class="absolute w-full h-full inset-0">
								<div class="container relative z-10 h-full">
									<div class="flex flex-col h-full justify-center">
										<div class="lg:py-14 py-10 ">
											<?php if (have_rows('title')) {
												while (have_rows('title')) :
													the_row(); ?>
													<h2
														class="uppercase text-white font-extrabold !leading-tight <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:text-[50px] text-4xl mb-6' : 'text-2xl mb-4' ?>">
														<?php if (get_sub_field('title_1')) { ?>
															<p>
																<?php the_sub_field('title_1') ?>
															</p>
														<?php } ?>
														<?php if (get_sub_field('title_2')) { ?>
															<p>
																<?php the_sub_field('title_2') ?>
															</p>
														<?php } ?>
													</h2>
											<?php endwhile;
											} ?>
											<?php if (get_sub_field('mota')) { ?>
												<p
													class="font-bold text-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-2xl text-xl mb-8' : 'text-lg mb-4' ?>">
													<?php the_sub_field('mota') ?>
												</p>
											<?php } ?>
											<?php if (have_rows('button')) {
												while (have_rows('button')) :
													the_row();
													if (get_sub_field('title')) {
											?>
														<a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')); ?>"
															class="btn-base-yellow inline-flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-x-3' : 'text-xs gap-x-2 px-4'; ?>">
															<?php
															echo svgClass(
																'arrow-btn',
																'',
																'',
																! wp_is_mobile() && ! bsc_is_mobile() ? 'w-5 h-5' : 'w-4 h-4'
															);
															?>
															<?php the_sub_field('title'); ?>
														</a>

											<?php
													}
												endwhile;
											} ?>
										</div>
									</div>


								</div>
							</div>
						</div>
					</div>
		<?php
				}
			}
		endwhile; ?>
	</section>
<?php } ?>