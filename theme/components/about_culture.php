<section class="lg:my-[100px] my-16 about_culture" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title')) { ?>
			<h2 class="heading-title text-center mb-6">
				<?php the_sub_field('title') ?>
			</h2>
		<?php } ?>
		<?php if (get_sub_field('mota')) { ?>
			<div
				class="relative max-w-[946px] mx-auto lg:mb-[50px] mb-10 lg:text-2xl text-xl font-bold text-primary-400 text-center">
				<div class="absolute lg:-left-10 lg:-top-5 -z-10 top-0 left-0">
					<?php echo svg('quote') ?>
				</div>
				<?php the_sub_field('mota') ?>
			</div>
		<?php } ?>
		<?php ?>
		<?php
		$number = get_sub_field('number') ?: 3;
		$term = get_field('danh_muc');
		if ($term) {
			if (get_field('api_id_danh_muc', $term)) {
				$groupid = get_field('api_id_danh_muc', $term);
				$array_data = array(
					'lang' => pll_current_language(),
					'groupid' => $groupid,
					'maxitem' => $number
				);
				$response = get_data_with_cache('GetTopNews', $array_data, $time_cache);
				if ($response) {
		?>
					<div class="relative about_culture-swiper">
						<div class="swiper-container about_culture-list">
							<div class="swiper-wrapper">
								<?php
								foreach ($response->d as $news) { ?>
									<div class="swiper-slide">
										<a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
											class="about_culture-item block rounded-[15px] overflow-hidden relative after:absolute after:w-full after:h-full after:inset-0 after:bg-[#000] after:bg-opacity-35">
											<div class="relative w-full pt-[58%]">
												<img class="absolute w-full h-full inset-0 object-cover" src="<?php echo bsc_set_thumbnail($news, 'thumbnail') ?>" alt="<?php echo htmlspecialchars($news->title) ?>">
											</div>
											<h4
												class="text-center p-4 text-primary-400 font-bold bg-white hidden title lg:text-2xl text-lg line-clamp-1">
												<?php echo htmlspecialchars($news->title) ?>
											</h4>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="swiper-button-prev bg-none left-0">
							<?php echo svg('prev') ?>
						</div>
						<div class="swiper-button-next bg-none right-0">
							<?php echo svg('next') ?>
						</div>
					</div>
		<?php
				}
			}
		} ?>
	</div>
</section>