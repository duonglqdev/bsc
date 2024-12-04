	<?php
	if ($args['data']) {
		$news = $args['data'];
		$symbol = strtoupper($args['symbol']);
		$time_cache = get_field('cdttcp1_time_cache', 'option') ?: 300;
		$banner = wp_get_attachment_image_url(get_field('cdttcp1_background_banner', 'option'), 'full');
		$style = get_field('cdttcp1_background_banner_display', 'option') ?: 'default';
		$title_breadcrumb = get_field('cdttcp1_title', 'option');
		$breadcrumb = 'cophieu';
	} else {
		wp_redirect(home_url('/404'), 301);
		exit;
	}
	$check_logout = bsc_is_user_logged_out();
	$class = $check_logout['class'];
	get_header();
	?>
	<main>
		<?php get_template_part('components/page-banner', null, array(
			'banner' => $banner,
			'style' => $style,
			'title' => $title_breadcrumb,
			'breadcrumb' => $breadcrumb,
		)) ?>
		<section class="xl:my-[100px] my-20">
			<div class="container">
				<?php if ($news->FULLNAME) { ?>
					<h2 class="font-bold lg:text-[32px] text-2xl mb-2 leading-normal uppercase">
						<?php echo $news->FULLNAME ?>
					</h2>
				<?php } ?>
				<?php
				$array_data_value = array(
					'symbols' => $symbol
				);
				$response_value = get_data_with_cache('instruments', $array_data_value, $time_cache, 'https://priceapi.bsc.com.vn/datafeed/');
				if ($response_value) {
				?>
					<div class="mt-10 lg:flex lg:gap-5">
						<div class="lg:w-[547px] max-w-[41%]">
							<div
								class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 space-y-6 h-full">
								<div class="flex gap-6 items-center">
									<div
										class="lg:w-[90px] w-16 lg:h-[90px] h-16 bg-white rounded-full flex items-center justify-center p-5">
										<?php echo svgClass('icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9') ?>
									</div>
									<div class="flex flex-col">
										<h4
											class="font-bold lg:text-[32px] text-2xl uppercase leading-normal">
											<?php echo $response_value->d[0]->symbol; ?>
										</h4>
										<p class="uppercase text-lg text-paragraph">
											<?php echo $response_value->d[0]->exchange; ?>
										</p>

									</div>
								</div>
								<div class="flex items-center gap-7">
									<div class="lg:w-[176px] lg:max-w-[37%]">
										<?php if ($response_value->d[0]->bidPrice1) { ?>
											<div class="flex-col gap-2">
												<div class="flex gap-[14px] data_number">
													<div class="lg:text-[40px] text-4xl font-bold">
														<?php echo number_format(($response_value->d[0]->bidPrice1) / 1000, 2, '.', ''); ?>
													</div>
													<?php if ($response_value->d[0]->bidPrice1 && $response_value->d[0]->reference) {
														if (($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) > 0) {
															$text_color_class = 'text-[#1CCD83]';
														} elseif (($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) < 0) {
															$text_color_class = 'text-[#FE5353]';
														} elseif (($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) == 0) {
															$text_color_class = 'text-[#EB0]';
														} else {
															$text_color_class = '';
														}
													?>
														<div class="flex flex-col <?php echo $text_color_class ?>">
															<p>
																<?php
																echo number_format(($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) / 1000, 2, '.', '');
																?>
															</p>
															<p>
																<?php echo number_format((($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) / ($response_value->d[0]->reference)) * 100, 2, '.', '') ?>%
															</p>
														</div>
													<?php } ?>
												</div>
												<p class="time-update mt-1">
													<?php _e('Cập nhật lúc', 'bsc') ?>
													<?php date_default_timezone_set('Asia/Ho_Chi_Minh');
													echo date("H:i"); ?>
													UTC_7
												</p>
											</div>
										<?php } ?>
									</div>
									<div class="flex-1 grid grid-cols-3 gap-5 font-Helvetica">
										<div class="col-span-1 space-y-5">
											<div class="flex flex-col gap-0.5">
												<p class="text-paragraph text-opacity-70 text-xs">
													<?php _e('Trần', 'bsc') ?>
												</p>
												<p class="font-bold text-[#1CCD83] text-lg">
													<?php
													if ($response_value->d[0]->ceiling) {
														echo number_format(($response_value->d[0]->ceiling) / 1000, 2, '.', '');
													} else {
														echo '-';
													}
													?>
												</p>
											</div>
											<div class="flex flex-col gap-0.5">
												<p class="text-paragraph text-opacity-70 text-xs">
													<?php _e('Cao nhất', 'bsc') ?>
												</p>
												<p class="font-bold text-black text-lg">
													<?php
													if ($response_value->d[0]->high) {
														echo number_format(($response_value->d[0]->high) / 1000, 2, '.', '');
													} else {
														echo '-';
													}
													?>
												</p>
											</div>
										</div>
										<div class="col-span-1 space-y-5">
											<div class="flex flex-col gap-0.5">
												<p class="text-paragraph text-opacity-70 text-xs">
													<?php _e('Tham chiếu', 'bsc') ?>
												</p>
												<p class="font-bold text-[#FFB81C] text-lg">
													<?php
													if ($response_value->d[0]->reference) {
														echo number_format(($response_value->d[0]->reference) / 1000, 2, '.', '');
													} else {
														echo '-';
													}
													?>
												</p>
											</div>
											<div class="flex flex-col gap-0.5">
												<p class="text-paragraph text-opacity-70 text-xs">
													<?php _e('Thấp nhất', 'bsc') ?>
												</p>
												<p class="font-bold text-black text-lg">
													<?php
													if ($response_value->d[0]->low) {
														echo number_format(($response_value->d[0]->low) / 1000, 2, '.', '');
													} else {
														echo '-';
													}
													?>
												</p>
											</div>
										</div>
										<div class="col-span-1 space-y-5">
											<div class="flex flex-col gap-0.5">
												<p class="text-paragraph text-opacity-70 text-xs">
													<?php _e('Sàn', 'bsc') ?>
												</p>
												<p class="font-bold text-[#FE5353] text-lg">
													<?php
													if ($response_value->d[0]->floor) {
														echo number_format(($response_value->d[0]->floor) / 1000, 2, '.', '');
													} else {
														echo '-';
													}
													?>
												</p>
											</div>
											<div class="flex flex-col gap-0.5">
												<p class="text-paragraph text-opacity-70 text-xs">
													<?php _e('Trung bình', 'bsc') ?>
												</p>
												<p class="font-bold text-black text-lg">
													<?php
													if ($response_value->d[0]->averagePrice) {
														echo number_format(($response_value->d[0]->averagePrice) / 1000, 2, '.', '');
													} else {
														echo '-';
													}
													?>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						$array_data_securityBasicInfo = json_encode([
							'lang' => pll_current_language(),
							'secList' => $symbol,
							"Exchange" => ""
						]);
						$response_securityBasicInfo = get_data_with_cache('securityBasicInfo', $array_data_securityBasicInfo, $time_cache, 'https://api-uat-algo.bsc.com.vn/pbapi/api/', 'POST');
						if ($response_securityBasicInfo) {
						?>
							<div class="lg:w-[433px] max-w-[33%]">
								<div
									class="bg-[#E8F5FF] rounded-xl lg:px-10 px-5 lg:py-6 py-5 h-full flex flex-col justify-between gap-5 font-Helvetica">
									<div class="flex items-end justify-between">
										<div class="lg:w-[120px] space-y-2">
											<p class="text-paragraph text-opacity-70 text-xs">
												<?php _e('Ngành', 'bsc') ?>
											</p>
											<p class="font-medium text-lg">
												<?php echo $response_securityBasicInfo->data[0]->Industry ?>
											</p>
										</div>
										<div class="lg:w-[120px]">
											<p class="text-paragraph text-opacity-70 text-xs">
												<?php _e('Vốn hóa', 'bsc') ?>
											</p>
											<p class="font-medium text-lg">
												<?php
												if ($response_securityBasicInfo->data[0]->MarketCapital) {
													echo number_format($response_securityBasicInfo->data[0]->MarketCapital);
												}
												?>
											</p>
										</div>
									</div>
									<div class="flex items-end justify-between">
										<div class="lg:w-[120px] space-y-2">
											<p class="text-paragraph text-opacity-70 text-xs">
												<?php _e('KLGD trung bình 10 ngày', 'bsc') ?>
											</p>
											<p class="font-medium text-lg">
												<?php echo $response_securityBasicInfo->data[0]->VolPerAVG10d ?>
											</p>
										</div>
										<div class="lg:w-[120px]">
											<p class="text-paragraph text-opacity-70 text-xs">
												<?php _e('P/E', 'bsc') ?>
											</p>
											<p class="font-medium text-lg">
												<?php echo $response_securityBasicInfo->data[0]->PE ?>
											</p>
										</div>
									</div>
									<div class="flex items-end justify-between">
										<div class="lg:w-[120px] space-y-2">
											<p class="text-paragraph text-opacity-70 text-xs">
												<?php _e('P/B', 'bsc') ?>
											</p>
											<p class="font-medium text-lg">
												<?php echo $response_securityBasicInfo->data[0]->PB ?>
											</p>
										</div>
										<div class="lg:w-[120px]">
											<p class="text-paragraph text-opacity-70 text-xs">
												<?php _e('ROE', 'bsc') ?>
											</p>
											<p class="font-medium text-lg">
												<?php echo $response_securityBasicInfo->data[0]->ROE ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						<?php
						$array_data_GetRecommendedInstrument = array(
							'symbol' => $symbol
						);
						$response_GetRecommendedInstrument = get_data_with_cache('GetRecommendedInstrument', $array_data_GetRecommendedInstrument, $time_cache);
						if ($response_GetRecommendedInstrument) {
						?>
							<div class="flex-1">
								<div
									class="bg-[#E8F5FF] rounded-xl lg:px-10 px-5 lg:py-6 py-5 h-full font-Helvetica flex flex-col">
									<h3 class="font-bold mb-6">
										<?php _e('KHUYẾN NGHỊ', 'bsc') ?>
									</h3>
									<div class="space-y-4 mb-6">
										<div class="flex items-center justify-between text-xs">
											<p class="text-xs">
												<?php _e('Analyst', 'bsc') ?>:
											</p>
											<p class="font-bold text-primary-300">
												<?php echo $response_GetRecommendedInstrument->d[0]->author ?>
											</p>
										</div>
										<div class="flex items-center justify-between text-xs">
											<p class="text-xs">
												<?php _e('Khuyến nghị', 'bsc') ?>:
											</p>
											<?php
											$status = $response_GetRecommendedInstrument->d[0]->recommendation;
											$check_status = get_color_by_number_bsc($status);
											$title_status = $check_status['title_status'];
											$text_status = $check_status['text_status'];
											$background_status = $check_status['background_status'];
											?>
											<p
												class="inline-block rounded-full px-4 py-0.5 font-semibold" style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
												<?php echo $title_status ?>
											</p>
										</div>
										<div class="flex items-center justify-between text-xs">
											<p class="text-xs">
												<?php _e('Danh mục', 'bsc') ?>:
											</p>
											<p
												class="inline-block rounded-full px-4 py-0.5  font-semibold">
												<?php echo $response_GetRecommendedInstrument->d[0]->categorY_NAMES ?>
											</p>
										</div>
										<div class="flex items-center justify-between text-xs">
											<p class="text-xs">
												<?php _e('Ngày cập nhật', 'bsc') ?>
											</p>
											<p class="font-bold">
												<?php $date = new DateTime($news->postdate); ?>
												<?php echo $date->format('d/m/Y'); ?>
											</p>
										</div>
									</div>
									<?php
									if ($response_GetRecommendedInstrument->rank) {
										if ($response_GetRecommendedInstrument->rank == 'A') {
											$class_rank = 'text-[#F90] bg-gradient-yellow-50';
											$medal_rank = 'gold';
										} elseif ($response_GetRecommendedInstrument->rank == 'B') {
											$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
											$medal_rank = 'sliver';
										} elseif ($response_GetRecommendedInstrument->rank == 'C') {
											$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
											$medal_rank = 'bronze';
										} elseif ($response_GetRecommendedInstrument->rank == 'D') {
											$medal_rank = 'sliver-2';
											$class_rank = 'text-[#869299] bg-gradient-sliver-100';
										}
									?>
										<div class="mt-auto">
											<p
												class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
												<?php echo svg($medal_rank, '24', '24') ?>
												<?php _e('Hạng', 'bsc') ?> <?php echo $response_GetRecommendedInstrument->rank ?>
											</p>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</section>
		<section class="xl:my-[100px] my-20">
			<div class="container">
				<ul
					class="flex lg:gap-[100px] gap-10 items-center border-b border-[#D3D3D3] nav-ttcp customtab-nav sticky top-0 z-20 bg-white">
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<button data-tabs="#tab-1"
							class="active inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-1 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
							<?php _e('TỔNG QUAN', 'bsc') ?>
						</button>
					</li>
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<button data-tabs="#tab-2"
							class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
							<?php _e('BÁO CÁO TÀI CHÍNH', 'bsc') ?>
						</button>
					</li>
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<button data-tabs="#tab-3"
							class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
							<?php _e('CHỈ TIÊU TÀI CHÍNH', 'bsc') ?>
						</button>
					</li>
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<button data-tabs="#tab-4"
							class="has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
							<?php echo svg('star', '24', '24') ?>
							<?php _e('BSC DỰ PHÓNG', 'bsc') ?>
						</button>
					</li>
				</ul>
				<div class="tab-content hidden" id="tab-1">
					<div class="lg:flex mt-10 lg:gap-[69px]">
						<div class="lg:w-[744px] lg:max-w-[56%]">
							<h2 class="heading-title mb-10">
								<?php _e('BIỂU ĐỒ GIÁ', 'bsc') ?>
							</h2>
							<div class="rounded-2xl lg:py-8 lg:px-6 p-5 bg-[#F5FCFF]" style="height:100%">
								<iframe width='100%' height='100%' src='https://itrade.bsc.com.vn:8080/?symbol=<?php echo $symbol ?>&screen=tradingview&theme=light' frameBorder='0' allowFullScreen></iframe>
							</div>
						</div>
						<div class="flex-1">
							<h2 class="heading-title mb-10">
								<?php _e('LỊCH SỬ GIAO DỊCH', 'bsc') ?>
							</h2>
							<ul class="flex items-center flex-wrap gap-[12px] font-semibold mb-4 customtab-nav text-xs">
								<li>
									<button data-tabs="#lichsugiaodich"
										class="active inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
										<?php _e('Lịch sử GD', 'bsc') ?>
									</button>
								</li>
								<li>
									<button data-tabs="#ndtnn"
										class="inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
										<?php _e('NĐTNN', 'bsc') ?>
									</button>
								</li>
							</ul>
							<div class="tab-content block" id="lichsugiaodich">
								<?php
								$current_date_ymd = date('Y-m-d');
								$last_month_date_ymd = date('Y-m-d', strtotime('-1 month', strtotime($current_date_ymd)));
								$array_data_secTradingHistory = json_encode([
									'lang' => pll_current_language(),
									'secCode' => $symbol,
									'startDate' => $last_month_date_ymd,
									'endDate' => $current_date_ymd
								]);
								$response_secTradingHistory = get_data_with_cache('secTradingHistory', $array_data_secTradingHistory, $time_cache, 'https://api-uat-algo.bsc.com.vn/pbapi/api/', 'POST');
								if ($response_secTradingHistory) {
									$data = json_decode($response_secTradingHistory->data, true);
								?>
									<div
										class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center ">
										<div class="flex bg-primary-300 text-white">
											<div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
												<?php _e('Ngày', 'bsc') ?>
											</div>
											<div class="w-[152px] max-w-[30%] px-3 py-2">
												<?php _e('Thay đổi giá', 'bsc') ?>
											</div>
											<div class="w-[136px] max-w-[27%] px-3 py-2">
												<?php _e('KL khớp lệnh', 'bsc') ?>
											</div>
											<div class="flex-1 px-3 py-2">
												<?php _e('Tổng GTGD', 'bsc') ?>
											</div>
										</div>
										<ul>
											<?php
											$i = 0;
											foreach ($data as $record) {
												$i++;
												if ($i < 8) {
											?>
													<li
														class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
														<div
															class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
															<?php
															if ($record['TRADE_DATE']) {
																$date = new DateTime($record['TRADE_DATE']);
																echo $date->format('d/m');
															}
															?>
														</div>
														<?php if ($record['CLOSE_PRICE'] && $record['REF_PRICE']) {
															if (($record['CLOSE_PRICE'] - $record['REF_PRICE']) > 0) {
																$text_color_class_GetForeignInvestors = 'text-[#1CCD83]';
															} elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) < 0) {
																$text_color_class_GetForeignInvestors = 'text-[#FE5353]';
															} elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) == 0) {
																$text_color_class_GetForeignInvestors = 'text-[#EB0]';
															} else {
																$text_color_class_GetForeignInvestors = '';
															}
															if (($record['CLOSE_PRICE'] - $record['REF_PRICE']) > 0) {
																$first_GetForeignInvestors = '+';
																$icon_GetForeignInvestors = svg('up', '17', '17');
															} elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) == 0) {
																$first_GetForeignInvestors = '';
																$icon_GetForeignInvestors = '';
															} elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) < 0) {
																$first_GetForeignInvestors = '';
																$icon_GetForeignInvestors = svg('downn', '17', '17');
															} else {
																$first_GetForeignInvestors = '';
																$icon_GetForeignInvestors = '';
															}
														}
														?>
														<div
															class="w-[152px] max-w-[30%] px-3 py-2 min-h-10 flex items-center justify-between border-r border-[#C9CCD2]">
															<p>
																<?php
																if ($record['CLOSE_PRICE']) {
																	echo number_format(($record['CLOSE_PRICE'] - $record['REF_PRICE']) / 1000, 2, '.', '');
																}
																?>
															</p>
															<p
																class="flex items-center gap-1 <?php echo $text_color_class_GetForeignInvestors	 ?> font-Helvetica">
																<?php echo $icon_GetForeignInvestors ?>
																<?php echo number_format((($record['CLOSE_PRICE'] - $record['REF_PRICE']) / ($record['REF_PRICE'])) * 100, 2, '.', '') ?>%
															</p>
														</div>
														<div
															class="w-[136px] max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-center border-r border-[#C9CCD2]">
															<?php echo number_format($record['TOT_VOLUME']) ?>
														</div>
														<div
															class="flex-1 px-3 py-2 min-h-10 flex items-center justify-center">
															<?php echo number_format($record['TOT_VALUE']) ?>
														</div>
													</li>
											<?php
												}
											}
											?>
										</ul>

									</div>
									<div class="flex items-center justify-between mt-4">
										<?php if (get_field('cdc7_page_nha_dau_tu_nuoc_ngoai', 'option')) { ?>
											<a href="<?php echo get_field('cdc7_page_nha_dau_tu_nuoc_ngoai', 'option') . '?mck=' . $symbol ?>"
												class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
												<?php _e('Xem tất cả', 'bsc') ?>
												<?php echo svg('arrow-btn', '20', '20') ?>
											</a>
										<?php } ?>
										<p class="font-medium text-xs font-Helvetica">
											<?php _e('Đơn vị GTGD: triệu VNĐ', 'bsc') ?>
										</p>
									</div>
								<?php  } ?>
							</div>
							<div class="tab-content hidden" id="ndtnn">
								<?php
								$current_date_dmy = date('d/m/Y');
								$last_month_date_dmy = date('d/m/Y', strtotime('-1 month'));
								$array_data_GetForeignInvestors = array(
									'lang' => pll_current_language(),
									'symbol' => $symbol,
									'fromdate' => $last_month_date_dmy,
									'todate' => $current_date_dmy
								);
								$response_GetForeignInvestors = get_data_with_cache('GetForeignInvestors', $array_data_GetForeignInvestors, $time_cache);
								if ($response_GetForeignInvestors) {
								?>
									<div
										class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center ">
										<div class="flex bg-primary-300 text-white">
											<div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
												<?php _e('Ngày', 'bsc') ?>
											</div>
											<div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
												<?php _e('KL Mua', 'bsc') ?>
											</div>
											<div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
												<?php _e('GT Mua', 'bsc') ?>
											</div>
											<div class="w-[136px] max-w-[27%] px-3 py-2">
												<?php _e('KL bán', 'bsc') ?>
											</div>
											<div class="flex-1 px-3 py-2">
												<?php _e('GT bán', 'bsc') ?>
											</div>
										</div>
										<ul>
											<?php
											$i_GetForeignInvestors = 0;
											foreach ($response_GetForeignInvestors->d as $GetForeignInvestors) {
												$i_GetForeignInvestors++;
												if ($i_GetForeignInvestors < 8) {
											?>
													<li
														class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
														<div
															class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
															<?php
															if ($GetForeignInvestors->tradedate) {
																$date = new DateTime($GetForeignInvestors->tradedate);
																echo $date->format('d/m');
															}
															?>
														</div>
														<div
															class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
															<?php
															if ($GetForeignInvestors->f_BUY_VOLUME) {
																echo number_format(($GetForeignInvestors->f_BUY_VOLUME));
															}
															?>
														</div>
														<div
															class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
															<?php
															if ($GetForeignInvestors->f_BUY_VALUE) {
																echo ($GetForeignInvestors->f_BUY_VALUE);
															}
															?>
														</div>
														<div
															class="w-[136px] max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-center border-r border-[#C9CCD2]">
															<?php
															if ($GetForeignInvestors->f_SELL_VOLUME) {
																echo number_format(($GetForeignInvestors->f_SELL_VOLUME));
															}
															?>
														</div>
														<div
															class="flex-1 px-3 py-2 min-h-10 flex items-center justify-center">
															<?php
															if ($GetForeignInvestors->f_SELL_VALUE) {
																echo $GetForeignInvestors->f_SELL_VALUE;
															}
															?>
														</div>
													</li>
											<?php
												}
											}
											?>
										</ul>

									</div>
									<div class="flex items-center justify-between mt-4">
										<?php if (get_field('cdc7_page_lich_su_gia', 'option')) { ?>
											<a href="<?php echo get_field('cdc7_page_lich_su_gia', 'option') . '?mck=' . $symbol ?>"
												class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
												<?php echo svg('arrow-btn', '20', '20') ?>
												<?php _e('Xem tất cả', 'bsc') ?>
											</a>
										<?php } ?>
										<p class="font-medium text-xs font-Helvetica">
											<?php _e('Đơn vị GTGD: triệu VNĐ', 'bsc') ?>
										</p>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="xl:my-[100px] my-20">
						<div class="lg:flex gap-5">
							<div class="w-[386px] max-w-[29%]">
								<h2 class="heading-title mb-10">
									<?php _e('BÁO CÁO PHÂN TÍCH', 'bsc') ?>
								</h2>
								<?php
								$categoryid_kn = get_field('cddmkn1_id_danh_mục', 'option');
								if ($categoryid_kn) {
									$array_data = array(
										'lang' => pll_current_language(),
										'categoryid' => $categoryid_kn,
										'maxitem' => 3,
										'symbol' =>  $symbol
									);
									$response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
								?>
									<?php
									if ($response) {
									?>
										<div class="space-y-4">
											<?php
											foreach ($response->d as $news) {
												get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
													'data' => $news,
													'get_array_id_taxonomy' => $get_array_id_taxonomy,
												));
											}
											?>
										</div>
								<?php };
								}
								?>
							</div>
							<?php $array_data_GetShareholderRelations = array(
								'lang' => pll_current_language(),
								'symbol' =>  $symbol
							);
							$response_GetShareholderRelations = get_data_with_cache('GetShareholderRelations', $array_data_GetShareholderRelations, $time_cache);
							if ($response_GetShareholderRelations) { ?>
								<div class="w-[414px] max-w-[31%]">
									<h2 class="heading-title mb-10">
										<?php _e('CƠ CẤU CỔ ĐÔNG', 'bsc') ?>
									</h2>
									<div class="space-y-4">
										<div class="rounded-xl bg-gradient-blue-50 px-6 py-8">
											<h4 class="text-center mb-4 text-xl font-bold font-Helvetica">
												<?php _e('Tỷ lệ cơ cấu cổ đông', 'bsc') ?>
											</h4>
											<div class="relative text-center">
												<?php if ($response_GetShareholderRelations->d[0]->outsshares) { ?>
													<div
														class="absolute w-full h-full flex flex-col justify-center font-Helvetica text-xs">
														<p class="text-xxs">
															<?php _e('Số lượng cổ phiếu', 'bsc') ?>
														</p>
														<p class="font-bold"><?php echo number_format($response_GetShareholderRelations->d[0]->outsshares) ?></p>
													</div>
												<?php } ?>
												<svg id="progress-ring" class="mx-auto" width="166"
													height="166" viewBox="0 0 166 167" fill="none"
													xmlns="http://www.w3.org/2000/svg">

													<circle cx="83.0342" cy="83.6479" r="72.3521"
														stroke="#295CA9" stroke-width="21"
														stroke-linecap="round" stroke-linejoin="round" />

													<circle id="progress-circle" cx="83.0342" cy="83.6479"
														r="72.3521" stroke="#F2B122" stroke-width="21"
														stroke-linecap="round" stroke-linejoin="round"
														stroke-dasharray="454" stroke-dashoffset="0"
														transform="rotate(90 83.0342 83.6479)" />
												</svg>

											</div>
											<div class="mt-5 mx-auto max-w-[215px] space-y-2">
												<?php if ($response_GetShareholderRelations->d[0]->bigholderpct) { ?>
													<div
														class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-primary-300">
														<p>
															<?php _e('Cổ đông lớn', 'bsc') ?>
														</p>
														<p>
															<?php echo $response_GetShareholderRelations->d[0]->bigholderpct ?>%
														</p>
													</div>
												<?php } ?>
												<?php if ($response_GetShareholderRelations->d[0]->remainingsharespct) { ?>
													<div
														class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-yellow-100">
														<p>
															<?php _e('Cổ đông khác', 'bsc') ?>
														</p>
														<p>
															<?php echo $response_GetShareholderRelations->d[0]->remainingsharespct ?>%
														</p>
													</div>
												<?php } ?>
											</div>
											<script>
												function setProgress(percent) {
													const circle = document.getElementById('progress-circle');
													const circumference = 454;
													const offset = circumference - (percent / 100) * circumference;
													circle.style.strokeDashoffset = offset;
												}
												setProgress(<?php echo $response_GetShareholderRelations->d[0]->remainingsharespct ?>);
											</script>
										</div>
										<div
											class="rounded-xl p-6 bg-gradient-blue-50 lg:min-h-[234px] lg:flex lg:flex-col lg:justify-center w-full">
											<ul class="font-Helvetica space-y-4">

												<?php if ($response_GetShareholderRelations->d[0]->outsshares) { ?>
													<li class="flex items-center justify-between">
														<p>
															<?php _e('KLCP Lưu hành', 'bsc') ?>:
														</p>
														<strong class="text-primary-300">
															<?php echo number_format($response_GetShareholderRelations->d[0]->outsshares) ?>
														</strong>
													</li>
												<?php } ?>
												<?php if ($response_GetShareholderRelations->d[0]->govheldpct) { ?>
													<li class="flex items-center justify-between">
														<p>
															<?php _e('Tỷ lệ sở hữu nhà nước (%)', 'bsc') ?>
														</p>
														<strong>
															<?php echo $response_GetShareholderRelations->d[0]->govheldpct ?>%
														</strong>
													</li>
												<?php } ?>
												<?php if ($response_GetShareholderRelations->d[0]->fheldpct) { ?>
													<li class="flex items-center justify-between">
														<p>
															<?php _e('Tỷ lệ sở hữu nước ngoài (%)', 'bsc') ?>
														</p>
														<strong>
															<?php echo $response_GetShareholderRelations->d[0]->fheldpct ?>%
														</strong>
													</li>
												<?php } ?>
												<?php if ($response_GetShareholderRelations->d[0]->froom) { ?>
													<li class="flex items-center justify-between">
														<p>
															<?php _e('Room nước ngoài', 'bsc') ?>
														</p>
														<strong>
															<?php echo $response_GetShareholderRelations->d[0]->froom ?>%
														</strong>
													</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							<?php } ?>
							<?php
							$array_data_sameIndustry = json_encode([
								'lang' => pll_current_language(),
								'secCode' => $symbol,
							]);
							$response_sameIndustry = get_data_with_cache('sameIndustry', $array_data_sameIndustry, $time_cache, 'https://api-uat-algo.bsc.com.vn/pbapi/api/companies/', 'POST');
							if ($response_sameIndustry) {
							?>
								<div class="flex-1">
									<h2 class="heading-title mb-10">
										<?php _e('DOANH NGHIỆP CÙNG NGÀNH', 'bsc') ?>
									</h2>
									<div
										class="rounded-tl-lg rounded-tr-lg overflow-hidden max-h-[580px] overflow-y-auto scroll-bar-custom relative">
										<table
											class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:px-3 prose-th:py-4 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3 prose-thead:sticky prose-thead:top-0">
											<thead>
												<tr>
													<th class="!pl-5 cursor-pointer"><?php _e('Mã CK', 'bsc') ?>
														<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
													</th>

													<th class="filter-table cursor-pointer filter-table">
														<?php _e('Vốn hóa', 'bsc') ?>
														<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
													</th>

													<th class="filter-table cursor-pointer filter-table">
														<?php _e('PE', 'bsc') ?>
														<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
													</th>
													<th class="filter-table cursor-pointer filter-table !pl-5">
														<?php _e('PB', 'bsc') ?>
														<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
													</th>
												</tr>
											</thead>
											<tbody class="prose-tr:border-b prose-tr:border-[#C9CCD2]">
												<?php
												foreach ($response_sameIndustry->data as $record) {
													if ($record) {
														$array_data_securityBasicInfo_check = json_encode([
															'lang' => pll_current_language(),
															'secList' => $record,
															"Exchange" => ""
														]);
														$response_securityBasicInfo_check = get_data_with_cache('securityBasicInfo', $array_data_securityBasicInfo_check, $time_cache, 'https://api-uat-algo.bsc.com.vn/pbapi/api/', 'POST');
														if ($response_securityBasicInfo_check) {
												?>
															<tr>
																<td class="!pl-5"><a href="<?php echo slug_co_phieu($record) ?>"><?php echo $record ?></a></td>
																<td><?php
																	echo number_format($response_securityBasicInfo_check->data[0]->MarketCapital) ?></td>
																<td><?php echo number_format($response_securityBasicInfo_check->data[0]->PE, 2, '.', ',') ?></td>
																<td class="text-center"><?php echo number_format($response_securityBasicInfo_check->data[0]->PB, 2, '.', ',') ?></td>
															</tr>
												<?php
														}
													}
												}
												?>

											</tbody>
										</table>
									</div>
									<p class="text-right mt-4 italic text-xs pr-7 font-Helvetica">
										<?php _e('Đơn vị Vốn hóa (Triệu đồng)', 'bsc') ?>
									</p>
								</div>
							<?php } ?>
						</div>
					</div>
					<?php $array_data_GetNews = array(
						'lang' => pll_current_language(),
						'maxitem' => 6,
						'symbol' => $symbol,
						'newstype' => 1
					);
					$response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
					if ($response_GetNews) { ?>
						<div class="xl:my-[100px] my-20">
							<h2 class="heading-title mb-10">
								<?php _e('TIN TỨC VỀ MÃ CỔ PHIẾU', 'bsc') ?>
							</h2>
							<div class="grid grid-cols-2 gap-x-9 gap-y-[46px]">
								<?php
								foreach ($response_GetNews->d as $news) {
									$date = $news->postdate;
									$date_parts = explode('T', $date);
									$day = $date_parts[0];
									$day_of_month = date('d', strtotime($day));
									$day_of_year = date('Y', strtotime($day));
									setlocale(LC_TIME, 'vi_VN.UTF-8');
									if (get_locale() == 'vi') {
										$month_number = date('n', strtotime($day));
										$month_names = [
											__('Tháng', 'bsc') . ' 1',
											__('Tháng', 'bsc') . ' 2',
											__('Tháng', 'bsc') . ' 3',
											__('Tháng', 'bsc') . ' 4',
											__('Tháng', 'bsc') . ' 5',
											__('Tháng', 'bsc') . ' 6',
											__('Tháng', 'bsc') . ' 7',
											__('Tháng', 'bsc') . ' 8',
											__('Tháng', 'bsc') . ' 9',
											__('Tháng', 'bsc') . ' 10',
											__('Tháng', 'bsc') . ' 11',
											__('Tháng', 'bsc') . ' 12',
										];
										$month_name = $month_names[$month_number - 1];
									} else {
										$month_name = date('F', strtotime($day));
									}
								?>
									<div class="news_service-item">
										<div class="flex items-center">
											<div
												class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
												<p
													class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
													<?php
													echo $day_of_year;
													?>
												</p>
												<div
													class="flex-1 flex flex-col justify-center items-center text-xl font-bold bg-primary-50 w-full">
													<p> <?php
														echo $day_of_year;
														?></p>
													<p class="text-primary-300 text-xs font-medium">
														<?php echo $month_name; ?>
													</p>
												</div>
											</div>
											<div class="md:ml-[30px] ml-5">
												<a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
													class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-green">
													<?php echo htmlspecialchars($news->title) ?>
												</a>
												<div
													class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
													<?php echo $news->description ?>
												</div>
											</div>
										</div>

									</div>
								<?php
								}
								?>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="tab-content hidden" id="tab-2">
					<div class="list__content">
						<div class="flex items-center justify-between mt-16 mb-[30px]">
							<ul class="flex items-center gap-5">
								<li>
									<a href=""
										class="active inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
										Quý
									</a>
								</li>
								<li>
									<a href=""
										class="inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
										Năm
									</a>
								</li>
							</ul>
							<a href=""
								class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
								Xem chi tiết
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>
						</div>
						<ul class="flex items-center justify-end gap-[27px] flex-wrap lg:mr-6 mb-6">
							<?php
							for ($i = 18; $i < 24; $i++) {
							?>
								<li class="lg:min-w-[140px] font-bold">
									<p>
										Năm 20<?= $i ?>
									</p>
									<p class="text-[#1CCD83]">
										(Đã kiểm toán)
									</p>
								</li>
							<?php
							}
							?>
						</ul>
						<div class="space-y-16">
							<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
								<table class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left
								prose-td:p-4 font-medium">
									<thead>
										<tr>
											<th colspan="7">Kết quả kinh doanh</th>
										</tr>
									</thead>
									<tbody>
										<?php
										for ($i = 0; $i < 4; $i++) {
										?>
											<tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
												<td class="lg:min-w-[231px]">Doanh thu bán hàng và CCDV</td>
												<td>911,959,220</td>
												<td>608,349,810</td>
												<td>912,577,380</td>
												<td>1,333,024,980</td>
												<td>1,089,005,390</td>
												<td>1,258,998,059</td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
							<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
								<table class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left
								prose-td:p-4 font-medium">
									<thead>
										<tr>
											<th colspan="7">Cân đối kế toán</th>
										</tr>
									</thead>
									<tbody>
										<?php
										for ($i = 0; $i < 4; $i++) {
										?>
											<tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
												<td class="lg:min-w-[231px]">Tổng tài sản</td>
												<td>911,959,220</td>
												<td>608,349,810</td>
												<td>912,577,380</td>
												<td>1,333,024,980</td>
												<td>1,089,005,390</td>
												<td>1,258,998,059</td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content block" id="tab-3">
					<div class="list__content">
						<div class=" mt-16 mb-10">
							<ul class="flex items-center gap-5 customtab-nav">
								<li>
									<button data-tabs="#tab-3-Q"
										class="active inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
										<?php _e('Quý', 'bsc') ?>
									</button>
								</li>
								<li>
									<button data-tabs="#tab-3-Y"
										class="inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
										<?php _e('Năm', 'bsc') ?>
									</button>
								</li>
							</ul>
						</div>
						<?php
						$freq_cttc = array('Q', 'Y');
						if ($freq_cttc) {
							$i = 0;
							foreach ($freq_cttc as $freq) {
								$i++;
						?>
								<div class="tab-content <?php if ($i == 1) echo 'block';
														else echo 'hidden' ?>" id="tab-3-<?php echo $freq ?>">
									<?php
									$array_data_GetFinanceDetail = array(
										'lang' => pll_current_language(),
										'symbol' => $symbol,
										'freq' => $freq,
									);
									$response_GetFinanceDetail = get_data_with_cache('GetFinanceDetail', $array_data_GetFinanceDetail, $time_cache);
									if ($response_GetFinanceDetail) {
										$industryData = $response_GetFinanceDetail->d->Industry[0];
										$businessData = $response_GetFinanceDetail->d->Bussiness[0];
									?>
										<div class="space-y-[100px]">
											<article>
												<div class="flex items-center gap-6 mb-[30px]">
													<h2 class="heading-title">
														<?php _e('LỢI NHUẬN', 'bsc') ?>
													</h2>
													<?php ?>
													<?php
													if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN) {
														if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'A') {
															$class_rank = 'text-[#F90] bg-gradient-yellow-50';
															$medal_rank = 'gold';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'B') {
															$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
															$medal_rank = 'sliver';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'C') {
															$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
															$medal_rank = 'bronze';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'D') {
															$medal_rank = 'sliver-2';
															$class_rank = 'text-[#869299] bg-gradient-sliver-100';
														}
													?>
														<p
															class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
															<?php echo svg($medal_rank, '24', '24') ?>
															<?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN ?>
														</p>
													<?php } ?>
												</div>
												<div class="rounded-lg overflow-hidden mb-10">
													<table
														class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
														<thead>
															<tr>
																<th class="!pl-9"><?php _e('Mã CK', 'bsc') ?></th>
																<th><?php _e('Biên LNG', 'bsc') ?></th>
																<th><?php _e('Biên LNST', 'bsc') ?></th>
																<th><?php _e('ROE', 'bsc') ?></th>
															</tr>
														</thead>
														<tbody>
															<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
																<td class="!pl-9"><a href="<?php echo slug_co_phieu($response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a></td>
																<td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_GOP) * 100, 2, '.', ''); ?>%</td>
																<td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_SAU_THUE) * 100, 2, '.', ''); ?>%</td>
																<td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->ROE) * 100, 2, '.', ''); ?>%</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															<?php _e('BIÊN LỢI NHUẬN GỘP (%)', 'bsc') ?>
														</h4>
														<?php
														$business_data_BIEN_LOI_NHUAN_GOP = array_map(function ($item) {
															return [
																'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))), // Trim REPORT_DATE
																'value' => $item->BIEN_LOI_NHUAN_GOP, // Không cần trim vì là số
															];
														}, $businessData);

														$industry_data_BIEN_LOI_NHUAN_GOP = array_map(function ($item) {
															return [
																'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)), // Trim YEAR và QUARTER
																'value' => $item->BIEN_LOI_NHUAN_GOP, // Không cần trim vì là số
															];
														}, $industryData);
														?>
														<div class="legend-gap bsc_chart-display" data-1="<?php echo htmlspecialchars(json_encode($business_data_BIEN_LOI_NHUAN_GOP)) ?>" data-2="<?php echo  htmlspecialchars(json_encode($industry_data_BIEN_LOI_NHUAN_GOP)) ?>" data-title-1="Biên LNG" data-color-1="#235BA8" data-title-2="Biên BLNG TB ngành" data-color-2="#FFB81C">
														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															<?php _e('BIÊN LỢI NHUẬN SAU THUẾ (%)', 'bsc') ?>
														</h4>
														<?php
														$business_data_BIEN_LOI_NHUAN_SAU_THUE = array_map(function ($item) {
															return [
																'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))), // Trim REPORT_DATE
																'value' => $item->BIEN_LOI_NHUAN_SAU_THUE, // Không cần trim vì là số
															];
														}, $businessData);

														$industry_data_BIEN_LOI_NHUAN_SAU_THUE = array_map(function ($item) {
															return [
																'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)), // Trim YEAR và QUARTER
																'value' => $item->BIEN_LOI_NHUAN_SAU_THUE, // Không cần trim vì là số
															];
														}, $industryData);
														?>
														<div class="legend-gap bsc_chart-display" data-1="<?php echo htmlspecialchars(json_encode($business_data_BIEN_LOI_NHUAN_SAU_THUE)) ?>" data-2="<?php echo  htmlspecialchars(json_encode($industry_data_BIEN_LOI_NHUAN_SAU_THUE)) ?>" data-title-1="Biên LNST" data-color-1="#235BA8" data-title-2="Biên BLST TB ngành" data-color-2="#FFB81C">
														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															<?php _e('ROE (%)', 'bsc') ?>
														</h4>
														<?php
														$business_data_ROE = array_map(function ($item) {
															return [
																'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))), // Trim REPORT_DATE
																'value' => $item->ROE, // Không cần trim vì là số
															];
														}, $businessData);

														$industry_data_ROE = array_map(function ($item) {
															return [
																'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)), // Trim YEAR và QUARTER
																'value' => $item->ROE, // Không cần trim vì là số
															];
														}, $industryData);
														?>
														<div class="legend-gap bsc_chart-display" data-1="<?php echo htmlspecialchars(json_encode($business_data_ROE)) ?>" data-2="<?php echo  htmlspecialchars(json_encode($industry_data_ROE)) ?>" data-title-1="ROE" data-color-1="#009e87" data-title-2="ROE TB ngành" data-color-2="#FFB81C">
														</div>
													</div>
												</div>
											</article>
											<article>
												<div class="flex items-center gap-6 mb-[30px]">
													<h2 class="heading-title">
														<?php _e('SỨC KHỎE', 'bsc') ?>
													</h2>
													<?php
													if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE) {
														if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'A') {
															$class_rank = 'text-[#F90] bg-gradient-yellow-50';
															$medal_rank = 'gold';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'B') {
															$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
															$medal_rank = 'sliver';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'C') {
															$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
															$medal_rank = 'bronze';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'D') {
															$medal_rank = 'sliver-2';
															$class_rank = 'text-[#869299] bg-gradient-sliver-100';
														}
													?>
														<p
															class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
															<?php echo svg($medal_rank, '24', '24') ?>
															<?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE ?>
														</p>
													<?php } ?>
												</div>
												<div class="rounded-lg overflow-hidden mb-10">
													<table
														class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
														<thead>
															<tr>
																<th class="!pl-9"><?php _e('Mã CK', 'bsc') ?></th>
																<th><?php _e('CSTT nhanh', 'bsc') ?></th>
																<th><?php _e('CSTT hiện tại', 'bsc') ?></th>
																<th><?php _e('CSTT lãi vay', 'bsc') ?></th>
																<th><?php _e('Nợ vay TTS', 'bsc') ?></th>
															</tr>
														</thead>
														<tbody>
															<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
																<td class="!pl-9"><a href="<?php echo slug_co_phieu($response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a></td>
																<td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->CHI_SO_THANH_TOAN_NHANH) * 100, 2, '.', ''); ?>%</td>
																<td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->CHI_SO_THANH_TOAN_HIEN_THOI) * 100, 2, '.', ''); ?>%</td>
																<td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->ROE) * 100, 2, '.', ''); ?>%</td>
																<td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->ROE) * 100, 2, '.', ''); ?>%</td>
															</tr>

														</tbody>
													</table>
												</div>
												<div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															CHỈ SỐ THANH TOÁN NHANH/ HIỆN THỜI
														</h4>
														<div id="health-chart-1" class="legend-gap">

														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															NỢ VAY/ TỔNG TÀI SẢN
														</h4>
														<div id="health-chart-2" class="legend-gap">

														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															TỶ LỆ THANH TOÁN LÃI VAY
														</h4>
														<div id="health-chart-3" class="legend-gap">

														</div>
													</div>
												</div>
											</article>
											<article>
												<div class="flex items-center gap-6 mb-[30px]">
													<h2 class="heading-title">
														<?php _e('TĂNG TRƯỞNG', 'bsc') ?>
													</h2>
													<?php
													if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG) {
														if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'A') {
															$class_rank = 'text-[#F90] bg-gradient-yellow-50';
															$medal_rank = 'gold';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'B') {
															$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
															$medal_rank = 'sliver';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'C') {
															$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
															$medal_rank = 'bronze';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'D') {
															$medal_rank = 'sliver-2';
															$class_rank = 'text-[#869299] bg-gradient-sliver-100';
														}
													?>
														<p
															class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
															<?php echo svg($medal_rank, '24', '24') ?>
															<?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG ?>
														</p>
													<?php } ?>
												</div>
												<div class="rounded-lg overflow-hidden mb-10">
													<table
														class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
														<thead>
															<tr>
																<th class="!pl-9">Mã CK</th>
																<th>TT Doanh thu</th>
																<th>TT LNST</th>
																<th>TT EPS</th>
																<th>Xếp hạng TT</th>
															</tr>
														</thead>
														<tbody>
															<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
																<td class="!pl-9"><a href="">BSI</a></td>
																<td>0.20</td>
																<td>1.94</td>
																<td>4.14</td>
																<td>0.41</td>
															</tr>

														</tbody>
													</table>
												</div>
												<div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															TĂNG TRƯỞNG DOANH THU (%)
														</h4>
														<div id="growth-chart-1" class="legend-gap">

														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															TĂNG TRƯỞNG EPS (%)
														</h4>
														<div id="growth-chart-2" class="legend-gap">

														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															TĂNG TRƯỞNG LỢI NHUẬN (%)
														</h4>
														<div id="growth-chart-3" class="legend-gap">

														</div>
													</div>
												</div>
											</article>
											<article>
												<div class="flex items-center gap-6 mb-[30px]">
													<h2 class="heading-title">
														<?php _e('HIỆU QUẢ HOẠT ĐỘNG', 'bsc') ?>
													</h2>
													<?php
													if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG) {
														if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'A') {
															$class_rank = 'text-[#F90] bg-gradient-yellow-50';
															$medal_rank = 'gold';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'B') {
															$class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
															$medal_rank = 'sliver';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'C') {
															$class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
															$medal_rank = 'bronze';
														} elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'D') {
															$medal_rank = 'sliver-2';
															$class_rank = 'text-[#869299] bg-gradient-sliver-100';
														}
													?>
														<p
															class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
															<?php echo svg($medal_rank, '24', '24') ?>
															<?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG ?>
														</p>
													<?php } ?>
												</div>

												<div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															VÒNG QUAY KHOẢN PHẢI THU (LẦN)
														</h4>
														<div id="effective-chart-1" class="legend-gap">

														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															VÒNG QUAY KHOẢN PHẢI TRẢ (LẦN)
														</h4>
														<div id="effective-chart-2" class="legend-gap">

														</div>
													</div>
													<div class="space-y-6">
														<h4
															class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
															VÒNG QUAY HÀNG TỒN KHO (LẦN)
														</h4>
														<div id="effective-chart-3" class="legend-gap">

														</div>
													</div>
												</div>
											</article>
										</div>
									<?php } ?>
								</div>
						<?php }
						} ?>
					</div>
				</div>
				<div class="tab-content hidden" id="tab-4">
					<?php
					$array_data_GetForecastBussiness = array(
						'lang' => pll_current_language(),
						'symbol' => $symbol,
					);
					$response_GetForecastBussiness = get_data_with_cache('GetForecastBussiness', $array_data_GetForecastBussiness, $time_cache);
					if ($response_GetForecastBussiness) {
						$response_GetForecastBussiness_d2 = array_reverse($response_GetForecastBussiness->d2, true);
					?>
						<div class="relative">
							<div class="<?php echo $class ?>">
								<div class="flex items-end justify-between mt-16">
									<div
										class="flex items-center gap-10 relative pl-6 after:absolute after:w-1 after:h-full after:bg-primary-300 after:top-0 after:left-0">
										<?php if ($response_GetForecastBussiness->d1[0]->PRICE) { ?>
											<div class="flex flex-col gap-1">
												<p class="font-Helvetica text-xs"><?php _e('Giá mục tiêu', 'bsc') ?></p>
												<strong class="lg:text-[32px] text-2xl text-primary-300"><?php echo number_format($response_GetForecastBussiness->d1[0]->PRICE) ?></strong>
											</div>
										<?php } ?>
										<?php
										if ($response_GetForecastBussiness->d1[0]->RECOMMENDATION) {
											$status = $response_GetForecastBussiness->d1[0]->RECOMMENDATION;
											$check_status = get_color_by_number_bsc($status);
											$title_status = $check_status['title_status'];
											$text_status = $check_status['text_status'];
											$background_status = $check_status['background_status'];
										?>
											<span
												class="inline-block min-w-[140px] text-center py-2 px-6 rounded-lg text-xl font-bold" style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
												<?php echo $title_status; ?>
											</span>
										<?php } ?>
									</div>
									<a href=""
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
										<?php _e('Xem chi tiết', 'bsc') ?>
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
								</div>
								<div class="rounded-lg overflow-hidden relative mt-10">
									<table
										class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium ">
										<thead>
											<tr>
												<th></th>
												<?php foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
													$date = new DateTime($GetForecastBussiness->REPORT_DATE);
												?>
													<th><?php echo $date->format('Y'); ?></th>
												<?php } ?>
											</tr>
										</thead>
										<tbody>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('Doanh thu (tỷ đồng)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->NET_REV) {
															echo number_format($GetForecastBussiness->NET_REV / 1000000000);
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('Tăng trưởng doanh thu', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->TANG_TRUONG_DT) {
															echo number_format($GetForecastBussiness->TANG_TRUONG_DT / 1000000000);
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('Lợi nhuận sau thuế công ty mẹ (tỷ đồng)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->LNST_CONG_TY_ME) {
															echo number_format($GetForecastBussiness->LNST_CONG_TY_ME / 1000000000);
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('Tăng trưởng LNST công ty mẹ', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->TANG_TRUONG_LS) {
															echo number_format($GetForecastBussiness->TANG_TRUONG_LS / 1000000000);
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('EPS (VND)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->EPS) {
															echo number_format($GetForecastBussiness->EPS);
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('Tăng trưởng EPS', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->TANG_TRUONG_EPS) {
															echo number_format($GetForecastBussiness->TANG_TRUONG_EPS, '2', '.', ',');
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('ROE (%)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->ROE) {
															echo number_format($GetForecastBussiness->ROE * 100, '2', '.', ',') . '%';
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('ROA (%)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->ROA) {
															echo number_format($GetForecastBussiness->ROA * 100, '2', '.', ',') . '%';
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('P/E (x)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->PE) {
															echo number_format($GetForecastBussiness->PE, '2', '.', ',');
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('P/B (x)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->PB) {
															echo number_format($GetForecastBussiness->PB, '2', '.', ',');
														}
														?></td>
												<?php
												}
												?>
											</tr>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td class="font-bold !pl-[30px]"><?php _e('Hiệu suất cổ phiếu (%)', 'bsc') ?></td>
												<?php
												foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
												?>
													<td><?php
														if ($GetForecastBussiness->HS_CO_PHIEU) {
															echo number_format($GetForecastBussiness->HS_CO_PHIEU, '2', '.', ',') . '%';
														}
														?></td>
												<?php
												}
												?>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<?php if ($check_logout) {
								echo $check_logout['html'];
							} ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>

	</main>
	<?php
	get_footer();
