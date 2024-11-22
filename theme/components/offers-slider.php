<section class="bg-primary-200 lg:pt-[77px] pt-[50px] relative offers_slider" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<div class="grid lg:grid-cols-2 2xl:gap-32 lg:gap-20 gap-10 overflow-hidden">
			<div class="col-span-1 lg:order-1 order-2">
				<?php if (get_sub_field('title')) { ?>
					<h2 class="heading-title md:mb-4 mb-2 wow fadeIn" data-wow-duration="2s"><?php the_sub_field('title') ?></h2>
				<?php } ?>
				<?php if (get_sub_field('mota')) { ?>
					<p class="uppercase text-primary-300 2xl:text-2xl sm:text-xl text-base font-bold md:mb-10 mb-6 wow fadeIn" data-wow-duration="2s">
						<?php the_sub_field('mota') ?>
					</p>
				<?php } ?>
				<?php if (have_rows('button')) {
					while (have_rows('button')) :
						the_row();
						if (get_sub_field('title')) {
				?>
							<a href="<?php echo check_link(get_sub_field('link')) ?>" class="btn-base-yellow">
								<span
									class="inline-flex items-center gap-x-3 relative z-10"><?php echo svg('arrow-btn', '20') ?><?php the_sub_field('title') ?></span>
							</a>
				<?php
						}
					endwhile;
				} ?>
				<?php if (have_rows('button_1')) {
					while (have_rows('button_1')) :
						the_row();
						if (get_sub_field('title')) {
				?>
							<p class="mt-4">
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="inline-flex items-center gap-x-[12px] font-bold transition-all duration-500 hover:scale-105 wow fadeIn" data-wow-duration="2s">
									<?php echo svg('keyvisual', '24', '24') ?>
									<?php the_sub_field('title') ?>
									<?php echo svg('arrow-btn', '14', '14') ?>
								</a>
							</p>
				<?php
						}
					endwhile;
				} ?>
				<div class="mt-8 relative z-10">
					<?php if (get_sub_field('icon')) { ?>
						<div class="lg:block hidden absolute -top-28 right-0 lg:translate-x-10">
							<img src="<?php echo wp_get_attachment_image_url(get_sub_field('icon'), 'large') ?>"
								alt="<?php the_sub_field('title') ?>">
						</div>
					<?php } ?>
					<?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'm-auto relative z-10')) ?>

				</div>
			</div>
			<div class="col-span-1 lg:order-2 order-1">
				<?php if (get_sub_field('title_2')) { ?>
					<h2 class="heading-title md:mb-8 mb-6 wow fadeIn" data-wow-duration="2s">
						<?php the_sub_field('title_2') ?>
					</h2>
				<?php } ?>
				<?php
				$chuong_trinh_khuyen_mai_id = get_field('cdctkm1_id_danh_mục', 'option');
				if ($chuong_trinh_khuyen_mai_id) {
					$time_cache = get_sub_field('t2_time_cache') ?: 300;
					$array_data = array(
						"maxitem" => "10",
						"lang" => pll_current_language(),
						"groupid" => $chuong_trinh_khuyen_mai_id,
						'index' => 1
					);
					$response = get_data_with_cache('GetNews', $array_data, $time_cache);
					if ($response) {
				?>
						<div class="block_slider block_slider-show-2 no-dots -mx-4">
							<?php foreach ($response->d as $news) { ?>
								<div class="block_slider-item md:w-3/5 w-4/5 px-4">
									<div class="bg-white lg:p-8 p-4 rounded-lg ">
										<div class="max-h-44 overflow-hidden">
											<p
												class="relative font-bold lg:text-lg after:absolute after:w-[51px] after:h-[2px] after:bottom-0 after:left-0 after:bg-primary-400 mb-4 pb-4 transition-all duration-500 hover:text-primary-500 !leading-tight">
												<a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>" class="line-clamp-3">
													<?php echo htmlspecialchars($news->title) ?>
												</a>
											</p>
											<div class="font-Helvetica text-paragraph">
												<?php echo htmlspecialchars($news->description) ?>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
				<?php }
				}
				?>
				<?php if (have_rows('video_youtube')) {
					while (have_rows('video_youtube')) :
						the_row();
						if (get_sub_field('avatar')) { ?>
							<div class="lg:mt-[12px] mt-4">
								<a href="<?php the_sub_field('url_youtube') ?>" data-fancybox
									class="rounded-md overflow-hidden pt-[60%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
									<?php echo wp_get_attachment_image(get_sub_field('avatar'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
									<div
										class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
										<?php echo svg('play') ?>
									</div>
									<?php if (get_sub_field('title')) { ?>
										<div
											class="absolute w-full bottom-0 left-0 py-4 px-8 flex items-center gap-3 text-white font-bold bg-gradient-blue-to-right-50 z-10 line-clamp-1">
											<?php echo svg('pause') ?>
											<?php the_sub_field('title') ?>
										</div>
									<?php } ?>
								</a>
							</div>
				<?php };
					endwhile;
				}
				?>
				<?php if (have_rows('button_2')) {
					while (have_rows('button_2')) :
						the_row();
						if (get_sub_field('title')) {
				?>
							<p class="mt-4">
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="inline-flex items-center gap-x-[12px] font-bold transition-all duration-500 hover:scale-105 wow fadeIn
									" data-wow-duration="2s">
									<?php echo svg('keyvisual', '24', '24') ?>
									<?php the_sub_field('title') ?>
									<?php echo svg('arrow-btn', '14', '14') ?>
								</a>
							</p>
				<?php
						}
					endwhile;
				} ?>
			</div>
		</div>
	</div>
	<?php if (get_sub_field('background')) { ?>
		<div class="lg:block hidden absolute bottom-0 left-0">
			<?php echo wp_get_attachment_image(get_sub_field('background'), 'large') ?>
		</div>
	<?php } ?>
</section>