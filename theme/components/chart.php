<section class="chart bg-primary-200 lg:py-[77px] relative py-14" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title_main')) { ?>
			<h2 class="heading-title 2xl:mb-12 mb-8 wow fadeIn" data-wow-duration="2s">
				<?php the_sub_field('title_main') ?>
			</h2>
		<?php } ?>
		<div class="md:flex relative z-[2]">
			<?php
			$time_cache = get_sub_field('time_cache_1') ?: 300;
			date_default_timezone_set('Asia/Bangkok');
			$todate = date('Y-m-d');
			$array_data = array(
				'portcode' => 'BSC10,BSC30,BSC50,HOSE,VNDIAMOND'
			);
			$data = get_data_with_cache('GetPortfolioPerformance', $array_data, $time_cache);

			$maxValue = 0;
			$minValue = PHP_INT_MAX;

			if ($data) {
				$stocksData = [
					'BSC10' => [],
					'BSC30' => [],
					'BSC50' => [],
					'HOSE' => [],
					'VNDIAMOND' => []
				];

				$earliestDate = null;

				foreach ($data->d as $dataset) {
					foreach ($dataset as $stockCode => $entries) {
						foreach ($entries as $entry) {
							$date = date("Y-m-d", strtotime($entry->tradedate));
							$portclose = $entry->portclose;
							$percentagedifference = $entry->percentagedifference;

							$stocksData[$stockCode][$date] = [
								'portclose' => $portclose,
								'percentagedifference' => $percentagedifference
							];

							if ($portclose > $maxValue) {
								$maxValue = $portclose;
							}
							if ($portclose < $minValue) {
								$minValue = $portclose;
							}

							if (! $earliestDate || $date < $earliestDate) {
								$earliestDate = $date;
							}
						}
					}
				}

				$fromdate = $earliestDate;
				$stocksDataJson = json_encode($stocksData);
				$maxValue = ceil($maxValue / 10) * 10;
				$minValue = floor($minValue / 10) * 10;
			}
			?>

			<div class="flex-1 md:mr-5">
				<?php if (get_sub_field('title')) { ?>
					<h2 class="pl-6 border-l-2 border-primary-300 2xl:text-[28px] text-xl font-bold mb-7 text-primary-300 leading-none wow fadeIn"
						data-wow-duration="2s">
						<?php the_sub_field('title') ?>
					</h2>
				<?php } ?>
				<div
					class="bg-white rounded-2xl 2xl:p-7 p-5 flex flex-col lg:h-[calc(100%-84px)] 2xl:h-[calc(100%-90px)] lg:min-h-[480px]">
					<div class="flex justify-between items-center mb-6">
						<div class="space-x-2 px-[6px] py-[2px] rounded-xl bg-[#F8F8FF] btn-chart">
							<button data-chart="BSC10"
								class="2xl:px-4 px-2 2xl:py-2 py-1 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white active bg-primary-700  rounded-[10px] 2xl:text-base text-sm">BSC10</button>
							<button data-chart="BSC30"
								class="2xl:px-4 px-2 2xl:py-2 py-1 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px] 2xl:text-base text-sm">BSC30</button>
							<button data-chart="BSC50"
								class="2xl:px-4 px-2 2xl:py-2 py-1 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px] 2xl:text-base text-sm">BSC50</button>
						</div>

						<div class="flex 2xl:gap-6 gap-4 items-center">
							<div id="date-performance-picker" date-rangepicker
								datepicker-format="yyyy-mm-dd" datepicker-autohide
								datepicker-orientation="bottom left"
								class="flex items-center 2xl:space-x-4 space-x-2">
								<p class="font-bold">
									<?php _e('Thời gian:', 'gnws') ?>
								</p>
								<div
									class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-11 p-3">
									<input id="datepicker-performance-start" name="start"
										type="text"
										class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
										placeholder="<?php _e('Từ ngày', 'bsc') ?>"
										value="<?php echo $fromdate ?>">
									<?php echo svg('date-blue') ?>
								</div>
								<div
									class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-11 p-3">
									<input id="datepicker-performance-end" name="end" type="text"
										class="todate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
										placeholder="<?php _e('Đến ngày', 'bsc') ?>"
										value="<?php echo $todate ?>">
									<?php echo svg('date-blue') ?>
								</div>
							</div>
							<button type="button" data-fromdate="<?php echo $fromdate ?>" data-todate="<?php echo $todate ?>" id="chart_btn-reload"
								class="w-11 h-11 rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
								<?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
							</button>
						</div>
					</div>
					<div class="flex-1 chart-info">
						<div id="chart" data-time_cache="<?php echo $time_cache ?>"
							data-maxvalue="<?php echo $maxValue; ?>"
							data-minvalue="<?php echo $minValue; ?>"
							data-stock='<?php echo $stocksDataJson ?>'></div>
						<?php echo do_shortcode('[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]') ?>
					</div>
				</div>
			</div>
			<div class="md:w-[33.181%]">
				<div class="flex items-center justify-between mb-7">
					<?php if (get_sub_field('title_2')) { ?>
						<h2 class="lg:pl-6 pl-4 border-l-2 border-primary-300 xl:2xl:text-[28px] text-xl text-xl font-bold text-primary-300 leading-none wow fadeIn"
							data-wow-duration="2s">
							<?php the_sub_field('title_2') ?>
						</h2>
					<?php } ?>
					<?php if (have_rows('button_xem_tat_ca')) {
						while (have_rows('button_xem_tat_ca')) :
							the_row();
							if (get_sub_field('title')) {
					?>
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
									<?php echo svg('arrow-btn', '20', '20') ?>
									<?php the_sub_field('title') ?>
								</a>
					<?php
							}
						endwhile;
					}
					?>
				</div>
				<?php if (have_rows('khuyen_nghi')) {
					while (have_rows('khuyen_nghi')) :
						the_row();
						$time_cache = get_sub_field('time_cache') ?: 300; ?>
						<div class="bg-white rounded-[10px] px-6 py-4 mb-4 font-Helvetica">
							<?php if (get_sub_field('title')) { ?>
								<p class="font-bold text-xl pb-3 mb-3 border-b border-[#D9D9D9]">
									<?php the_sub_field('title') ?>
								</p>
							<?php } ?>
							<?php
							$term_kn = get_sub_field('danh_muc_bao_cao_phan_tich');
							if ($term_kn) {
								$categoryid_kn = get_field('api_id_danh_muc', $term_kn);
								if ($categoryid_kn) {
									$array_data = array(
										'lang' => pll_current_language(),
										'maxitem' => 5,
										'categoryid' => $categoryid_kn,
										"recommendation" => 3
									);
									$response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
									if ($response) {
										$count = count($response->d);
										if ($count < 5) {
											$total = 5 - $count;
											$array_data_more = array(
												'lang' => pll_current_language(),
												'maxitem' => $total,
												'categoryid' => $categoryid_kn,
												"recommendation" => 4
											);
											$response_more = get_data_with_cache('GetReportsBySymbol', $array_data_more, $time_cache);
										}
							?>
										<ul class="space-y-4">
											<?php foreach ($response->d as $news) {
												$status = $news->recommendation;
												$check_status = get_color_by_number_bsc($status);
												$title_status = $check_status['title_status'];
												$text_status = $check_status['text_status'];
											?>
												<li class="flex font-bold gap-[14px] items-center justify-between">
													<p class="line-clamp-1 flex-1">
														<?php echo htmlspecialchars($news->symbols) ?>
														<?php if ($news->upsite) { ?>
															<span
																class="text-[#30D158]">(<?php echo htmlspecialchars($news->upsite) ?>)</span>
														<?php } ?>
														<?php if ($title_status != '') { ?>
															<span
																style="color: <?php echo $text_status ?>"><?php echo $title_status ?></span>
														<?php } ?> - <?php echo htmlspecialchars($news->title) ?>
													</p>
													<p
														class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
														<?php _e('Hot', 'bsc') ?>
													</p>
													<a href="">
														<?php echo svg('download') ?>
													</a>
												</li>
												<?php
											}
											if ($response_more) {
												foreach ($response_more->d as $news) {
												?>
													<li class="flex font-bold gap-[14px] items-center justify-between">
														<p class="line-clamp-1 flex-1">
															<?php echo htmlspecialchars($news->symbols) ?> <span
																class="text-[#00BD62]">(<?php echo htmlspecialchars($news->upsite) ?>)
																<?php echo htmlspecialchars($news->recommendation) ?></span> -
															<?php echo htmlspecialchars($news->title) ?>
														</p>
														<p
															class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
															<?php _e('Hot', 'bsc') ?>
														</p>
														<a href="">
															<?php echo svg('download') ?>
														</a>
													</li>
											<?php
												}
											}
											?>
										</ul>
							<?php }
								}
							} ?>
							<?php if (have_rows('button_xem_them')) {
								while (have_rows('button_xem_them')) :
									the_row(); ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>"
										class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mt-6 text-xs">
										<?php the_sub_field('title') ?>
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
							<?php
								endwhile;
							}
							?>
						</div>
				<?php
					endwhile;
				}
				?>
				<?php if (have_rows('nganh_doanh_nghiep')) : ?>
					<div class="data-slick block_slider-show-1 slick-dots-center font-Helvetica"
						data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots": true, "arrows": false, "fade": false}'>
						<?php
						$i = 0;
						while (have_rows('nganh_doanh_nghiep')) :
							the_row();
							$i++; ?>
							<?php $time_cache = get_sub_field('time_cache') ?: 300; ?>
							<div class="bg-white rounded-[10px] px-6 py-4 block_slider-item">
								<?php if (get_sub_field('title')) { ?>
									<div
										class="flex items-center justify-between gap-3 custom_arrow_slick pb-3 mb-3 border-b border-[#D9D9D9] lg:px-4">
										<button
											class="prev-btn text-primary-300 transition-all duration-500 hover:text-primary-600"><?php echo svg('prev-slick') ?></button>
										<p class="font-bold text-lg text-center line-clamp-1">
											<?php the_sub_field('title') ?>
										</p>
										<button
											class="next-btn text-primary-300 transition-all duration-500 hover:text-primary-600"><?php echo svg('next-slick') ?></button>
									</div>
								<?php } ?>
								<?php
								$term = get_sub_field('danh_muc_bao_cao_phan_tich');
								if ($term) {
									$categoryid = get_field('api_id_danh_muc', $term);
									if ($categoryid) {
										$array_data = array(
											'lang' => pll_current_language(),
											'maxitem' => 4,
											'categoryid' => $categoryid
										);
										$response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
										if ($response) {
								?>
											<ul class="space-y-4">
												<?php foreach ($response->d as $news) { ?>
													<li class="flex gap-[14px] items-center justify-between">
														<p class="line-clamp-1 flex-1">
															<?php echo htmlspecialchars($news->title) ?>
														</p>
														<p
															class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
															<?php _e('Hot', 'bsc') ?>
														</p>
														<p class="min-w-5">
															<?php if ($news->reporturl) { ?>
																<a href="<?php echo $news->reporturl ?>">
																	<?php echo svg('download', '20', '20') ?>
																</a>
															<?php } ?>
														</p>
													</li>
												<?php
												}
												?>
											</ul>
								<?php }
									}
								} ?>
								<?php if (have_rows('button_xem_them')) {
									while (have_rows('button_xem_them')) :
										the_row(); ?>
										<a href="<?php echo check_link(get_sub_field('link')) ?>"
											class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mt-6 text-xs">
											<?php the_sub_field('title') ?>
											<?php echo svg('arrow-btn', '12', '12') ?>
										</a>
								<?php
									endwhile;
								}
								?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="absolute bottom-0 right-0 lg:block hidden">
		<?php echo svg('icon-char') ?>
	</div>
</section>