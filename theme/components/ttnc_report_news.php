<?php
$number = get_sub_field('number');
$time_cache = 300;
?>
<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:mt-[125px] xl:mb-[100px] my-20' : 'my-[50px]' ?> ttnc_report_news"
	<?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>"
	<?php } ?>>
	<div class="container">
		<div
			class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex justify-between items-center mb-10' : 'mb-6' ?>">
			<?php if (get_sub_field('title')) { ?>
				<h2 class="heading-title"><?php the_sub_field('title') ?></h2>
			<?php } ?>
			<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
				<?php if (have_rows('button')) {
					while (have_rows('button')) :
						the_row();
						if (get_sub_field('title')) { ?>
							<a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab'))
																		echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
								class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
								<?php echo svg('arrow-btn', '16', '16') ?>
								<?php the_sub_field('title') ?>
							</a>
				<?php
						}
					endwhile;
				} ?>
			<?php } ?>
		</div>
		<?php
		$array_data = array(
			'lang' => pll_current_language(),
			'maxitem' => $number
		);
		$response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
		if ($response) {
			$get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
		?>
			<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
				<div class="lg:flex 2xl:gap-[70px] gap-10 lg:space-y-0 space-y-10">
					<div class="lg:w-[843px] lg:max-w-[66%]">
					<?php } ?>
					<div
						class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-2 gap-x-[23px] gap-y-6' : 'sm:grid-cols-2 grid-cols-1 gap-4' ?>">
						<?php
						foreach ($response->d as $news) {
							get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
								'data' => $news,
								'get_array_id_taxonomy' => $get_array_id_taxonomy,
							));
						}
						?>
					</div>
					<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
					</div>
				<?php } ?>
				<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
					<?php if (have_rows('button')) {
						while (have_rows('button')) :
							the_row();
							if (get_sub_field('title')) { ?>
								<a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab'))
																			echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
									class="flex items-center justify-center gap-3 py-3 px-5 btn-base-yellow text-xs font-bold min-h-[38px] mt-8 rounded-md">
									<?php echo svg('arrow-btn', '16', '16') ?>
									<?php the_sub_field('title') ?>
								</a>
					<?php
							}
						endwhile;
					} ?>
				<?php } ?>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1 flex flex-col' : 'mt-[50px] overflow-hidden' ?>">
					<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
						<?php if (get_sub_field('title_ma_hieu_qua')) { ?>
							<h2
								class="text-primary-300 font-bold 2xl:text-[28px] text-2xl pl-6 relative before:absolute before:w-[3px] before:top-1/2 before:-translate-y-1/2 before:left-0 before:h-7 before:bg-primary-300 mb-8 !leading-tight">
								<?php the_sub_field('title_ma_hieu_qua') ?>
							</h2>
						<?php } ?>
					<?php } ?>

					<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
						<ul
							class="customtab-nav flex flex-nowrap gap-8 overflow-x-auto border-b border-[#C9CCD2] mb-6">
							<?php if (get_sub_field('title_ma_hieu_qua')) { ?>
								<li>
									<button type="button" data-tabs="#ttnc-1"
										class="active font-bold text-lg [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:text-opacity-70 whitespace-nowrap border-b-2 [&:not(.active)]:border-transparent border-primary-300 pb-4 border-opacity-100">
										<?php the_sub_field('title_ma_hieu_qua') ?>
									</button>
								</li>
							<?php } ?>
							<?php if (get_sub_field('title_tien_ich')) { ?>
								<li>
									<button type="button" data-tabs="#ttnc-2"
										class="font-bold text-lg [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:text-opacity-70 whitespace-nowrap border-b-2 [&:not(.active)]:border-transparent border-primary-300 pb-4 border-opacity-100">
										<?php the_sub_field('title_tien_ich') ?>
									</button>
								</li>
							<?php } ?>

						</ul>

					<?php } ?>

					<?php
					$array_data = array();
					$GetRecommendedCategory = get_data_with_cache('GetSymbolRecommendedPerformance', $array_data, $time_cache);
					if ($GetRecommendedCategory) {
					?>
						<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'tab-content block' ?>"
							<?php if (wp_is_mobile() && bsc_is_mobile()) { ?> id="ttnc-1" <?php } ?>>
							<div class="grid grid-cols-3 gap-4 mb-10">
								<?php
								foreach ($GetRecommendedCategory->d as $news) {
								?>
									<a href="<?php echo slug_co_phieu($news->SYMBOL) ?>"
										class="inline-flex justify-center rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
										<span>
											<?php echo $news->SYMBOL ?>
										</span>
										<span>
											+<?php
												$upside = $news->UPSIDE;
												if ($upside >= 1) {
													echo round($upside);
												} else {
													echo number_format($upside, 1);
												}
												?>%
										</span>
									</a>
								<?php
								}
								?>
							</div>
						</div>
					<?php } ?>
					<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
						<div class="p-6 bg-gradient-blue-50 mb-8">
							<?php if (get_sub_field('title_dang_ky')) { ?>
								<h3 class="text-primary-300 font-bold text-2xl mb-4">
									<?php the_sub_field('title_dang_ky') ?>
								</h3>
							<?php } ?>
							<div class="form_report">
								<?php echo do_shortcode('[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]') ?>
							</div>
						</div>
					<?php } ?>
					<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
						<?php if (get_sub_field('title_tien_ich')) { ?>
							<h3
								class="text-primary-300 font-bold 2xl:text-[28px] text-2xl pl-6 relative before:absolute before:w-[3px] before:top-1/2 before:-translate-y-1/2 before:left-0 before:h-7 before:bg-primary-300 mb-7 !leading-tight">
								<?php the_sub_field('title_tien_ich') ?>
							</h3>
						<?php } ?>
					<?php } ?>
					<?php if (have_rows('tien_ich')) { ?>
						<div class="lg:space-y-[14px] md:space-y-0 space-y-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-auto lg:block grid grid-cols-2 gap-4' : 'hidden tab-content' ?>"
							<?php if (wp_is_mobile() && bsc_is_mobile()) { ?> id="ttnc-2" <?php } ?>>
							<?php while (have_rows('tien_ich')) :
								the_row(); ?>
								<div
									class="rounded-lg overflow-hidden min-h-[161px] lg:px-9 px-5 py-5 flex flex-col justify-center relative text-white group">
									<?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
									<div
										class="absolute w-full h-full bg-gradient-blue-to-right-150 inset-0 pointer-events-none">
									</div>
									<div class="relative z-10 space-y-2 font-Helvetica">
										<?php if (get_sub_field('title')) { ?>
											<h4 class="font-bold lg:max-w-[163px]">
												<?php the_sub_field('title') ?>
											</h4>
										<?php } ?>
										<?php
										if (have_rows('button')) {
											while (have_rows('button')) :
												the_row();
												if (get_sub_field('title')) {
										?>
													<a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab'))
																								echo 'target="_blank"' ?>
														href="<?php echo check_link(get_sub_field('link')) ?>"
														class="inline-flex items-center gap-2 text-xs font-medium transition-all duration-500 hover:scale-105">
														<?php the_sub_field('title') ?>
														<?php echo svgpath('arrow-btn', '12', '12', 'fill-white') ?>
													</a>
										<?php
												}
											endwhile;
										}
										?>
									</div>

								</div>
							<?php endwhile; ?>
						</div>
					<?php } ?>
					<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
						<div class="p-4 bg-gradient-blue-50 rounded-[10px]">
							<?php if (get_sub_field('title_dang_ky')) { ?>
								<h3 class="text-primary-300 font-bold text-lg mb-4">
									<?php the_sub_field('title_dang_ky') ?>
								</h3>
							<?php } ?>
							<div class="form_report">
								<?php echo do_shortcode('[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]') ?>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</section>