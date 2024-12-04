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
		<section class="xl:my-[100px] my-20 display_data_details_symbol" data-symbol="<?php echo $symbol ?>">
			<div class="container">
				<ul
					class="flex lg:gap-[100px] gap-10 items-center border-b border-[#D3D3D3] nav-ttcp customtab-nav sticky top-0 z-20 bg-white">
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<button data-tabs="#details_symbol_tab-1"
							class="active inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-1 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
							<?php _e('TỔNG QUAN', 'bsc') ?>
						</button>
					</li>
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<button data-tabs="#details_symbol_tab-2" data-ajax="true"
							class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
							<?php _e('BÁO CÁO TÀI CHÍNH', 'bsc') ?>
						</button>
					</li>
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<button data-tabs="#details_symbol_tab-3" data-ajax="true"
							class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
							<?php _e('CHỈ TIÊU TÀI CHÍNH', 'bsc') ?>
						</button>
					</li>
					<li
						class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
						<?php if ($check_logout) {
						?>
							<a href="<?php echo bsc_url_sso() ?>"
								class="none-tab has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
								<?php echo svg('star', '24', '24') ?>
								<?php _e('BSC DỰ PHÓNG', 'bsc') ?>
							</a>
						<?php
						} else { ?>
							<button data-tabs="#details_symbol_tab-4" data-ajax="true"
								class="has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
								<?php echo svg('star', '24', '24') ?>
								<?php _e('BSC DỰ PHÓNG', 'bsc') ?>
							</button>
						<?php } ?>
					</li>
				</ul>
				<div class="tab-content block" id="details_symbol_tab-1">
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
									<button data-tabs="#ndtnn" data-ajax="true"
										class="inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
										<?php _e('NĐTNN', 'bsc') ?>
									</button>
								</li>
							</ul>
							<div class="tab-content block" id="lichsugiaodich">
								<div class="hidden">
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
							</div>
							<div class="tab-content hidden" id="ndtnn">
								<div class="hidden">
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
							</div>
						</div>
					</div>
					<div class="xl:my-[100px] my-20">
						<div class="lg:flex gap-5">
							<div class="w-[386px] max-w-[29%]">
								<h2 class="heading-title mb-10">
									<?php _e('BÁO CÁO PHÂN TÍCH', 'bsc') ?>
								</h2>
								<div class="space-y-4" id="sg_bcpt">
									<div class="hidden">
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
								</div>
							</div>
							<div class="w-[414px] max-w-[31%]">
								<h2 class="heading-title mb-10">
									<?php _e('CƠ CẤU CỔ ĐÔNG', 'bsc') ?>
								</h2>
								<div class="space-y-4" id="sg_cccd">
									<div class="hidden">
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
								</div>
							</div>
							<div class="flex-1">
								<h2 class="heading-title mb-10">
									<?php _e('DOANH NGHIỆP CÙNG NGÀNH', 'bsc') ?>
								</h2>
								<div
									class="rounded-tl-lg rounded-tr-lg overflow-hidden max-h-[580px] overflow-y-auto scroll-bar-custom relative" id="sg_dncn">
									<div class="hidden">
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
								</div>
								<p class="text-right mt-4 italic text-xs pr-7 font-Helvetica">
									<?php _e('Đơn vị Vốn hóa (Triệu đồng)', 'bsc') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="xl:my-[100px] my-20">
						<h2 class="heading-title mb-10">
							<?php _e('TIN TỨC VỀ MÃ CỔ PHIẾU', 'bsc') ?>
						</h2>
						<div class="grid grid-cols-2 gap-x-9 gap-y-[46px]" id="sg_ttvmcp">
							<div class="hidden">
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
						</div>
					</div>
				</div>
				<div class="tab-content hidden" id="details_symbol_tab-2">
					<div class="hidden">
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
				</div>
				<div class="tab-content hidden" id="details_symbol_tab-3">
					<div class="hidden">
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
				</div>
				<div class="tab-content hidden" id="details_symbol_tab-4">
					<div class="hidden">
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
				</div>
			</div>
		</section>
	</main>
	<?php
	get_footer();
