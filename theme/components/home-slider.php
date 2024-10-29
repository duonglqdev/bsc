<?php
$id_class = get_sub_field('id_class');
if (have_rows('slider')) {
?>
	<section class="home__banner data-slick slick-dots-center dots-white block_slider-show-1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots": true, "arrows": false, "fade": false}' <?php if ($id_class) { ?> id="<?php echo $id_class ?>" <?php } ?>>
		<?php while (have_rows('slider')): the_row();
			$type_slider = get_sub_field('type_slider');
			if ($type_slider == 'image') {
		?>
				<div class="w-full relative block_slider-item">
					<a href="<?php echo check_link(get_sub_field('link')) ?>">
						<?php echo wp_get_attachment_image(get_sub_field('image'), 'full', '', array('class' => 'w-full h-full object-cover')) ?>
					</a>
				</div>
				<?php
			} elseif ($type_slider == 'video') {
				if (get_sub_field('video')) {
				?>
					<div
						class="block_slider-item">
						<div class="w-full relative max-h-full after:absolute after:w-3/4 after:top-0 after:left-0 after:bg-gradient-banner after:h-full after:pointer-events-none">
							<video id="video-banner" class="object-cover w-full max-w-full h-full max-h-full" autoplay="" muted="" playsinline=""
								loop=""
								src="<?php the_sub_field('video') ?>"></video>
							<div class="absolute w-full h-full inset-0">
								<div class="container relative z-10 h-full">
									<div class="flex flex-col h-full justify-center">
										<div class="lg:py-14 py-10 ">
											<?php if (have_rows('title')) {
												while (have_rows('title')): the_row(); ?>
													<h2
														class="uppercase text-white xl:text-[50px] lg:text-4xl text-3xl mb-6 font-extrabold !leading-tight">
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
												<p class="2xl:text-2xl text-xl font-bold text-white mb-8">
													<?php the_sub_field('mota') ?>
												</p>
											<?php } ?>
											<?php if (have_rows('button')) {
												while (have_rows('button')): the_row();
													if (get_sub_field('title')) {
											?>
														<a href="<?php echo check_link(get_sub_field('link')) ?>"
															class="btn-base-yellow">
															<span
																class="inline-flex items-center gap-x-3 relative z-10"><?php echo svg('arrow-btn', '20') ?><?php the_sub_field('title') ?></span>
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