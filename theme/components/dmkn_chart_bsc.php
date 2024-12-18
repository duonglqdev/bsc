<?php
if (isset($_GET['bsc']) && trim($_GET['bsc']) !== '') {
	$current_bsc = 'BSC' . $_GET['bsc'];
} else {
	$current_bsc = 'BSC10';
}
?>
<section class="chart mt-[54px] mb-[100px] dmkn_chart_bsc" <?php if (get_sub_field('id_class')) { ?>
	id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title')) { ?>
			<h2 class="font-bold 2xl:text-[32px] text-2xl">
				<?php the_sub_field('title') ?>
			</h2>
		<?php } ?>
		<?php
		$time_cache = 300;
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
		<ul class="flex items-center flex-wrap mt-6 mb-10 gap-6 btn-chart">
			<li>
				<button data-chart="BSC10"
					class="<?php if ($current_bsc == 'BSC10') echo 'active' ?> inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
					<?php _e('BSC10', 'bsc') ?>
				</button>
			</li>
			<li>
				<button data-chart="BSC30"
					class="<?php if ($current_bsc == 'BSC30') echo 'active' ?> inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
					<?php _e('BSC30', 'bsc') ?>
				</button>
			</li>
			<li>
				<button data-chart="BSC50"
					class="<?php if ($current_bsc == 'BSC50') echo 'active' ?> inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
					<?php _e('BSC50', 'bsc') ?>
				</button>
			</li>
		</ul>
		<h2 class="font-bold 2xl:text-[32px] text-2xl">
			<?php _e('Hiệu suất danh mục', 'bsc') ?>
		</h2>
		<div class="mt-12 rounded-2xl py-6 px-7 shadow-base performance-chart">
			<div id="date-performance-picker" date-rangepicker datepicker-format="yyyy-mm-dd"
				datepicker-autohide datepicker-orientation="bottom left"
				class="flex items-center text-xs gap-4">
				<p class="font-semibold mr-6">
					<?php _e('Thời gian:', 'gnws') ?>
				</p>
				<div
					class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-12 px-4 py-[12px]">
					<input id="datepicker-performance-start" name="start" type="text"
						class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
						placeholder="<?php _e('Từ ngày', 'bsc') ?>" value="<?php echo $fromdate ?>">
					<?php echo svg('date-blue') ?>
				</div>
				<div
					class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-12 px-4 py-[12px]">
					<input id="datepicker-performance-end" name="end" type="text"
						class="todate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
						placeholder="<?php _e('Đến ngày', 'bsc') ?>" value="<?php echo $todate ?>">
					<?php echo svg('date-blue') ?>
				</div>
			</div>
			<div id="chart" data-height="514" data-time_cache="<?php echo $time_cache ?>"
				data-maxvalue="<?php echo $maxValue; ?>" data-minvalue="<?php echo $minValue; ?>"
				data-stock='<?php echo $stocksDataJson ?>'></div>
			<?php echo do_shortcode('[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]') ?>
		</div>
	</div>
</section>
<?php
$check_logout = bsc_is_user_logged_out();
$class_login = $check_logout ? $check_logout['class'] : '';
$response_instruments_array = array();
$array_data_instruments = array();
$response_instruments = get_data_with_cache('instruments', $array_data_instruments, $time_cache, get_field('cdapi_ip_address_url_api_price', 'option') . 'datafeed/');
if ($response_instruments) {
	$response_instruments_array = $response_instruments->d;
}
$data_bsc = array('BSC10', 'BSC30', 'BSC50');
if ($data_bsc) {
	$ic = 20;
	foreach ($data_bsc as $single_bsc) {
		$ic++;
?>
		<section class="xl:my-[100px] my-20 dmkn_chart_bsc_details 
		<?php
		if ((($current_bsc == 'BSC10') && $ic == 21) || (($current_bsc == 'BSC30') && $ic == 22) || ($current_bsc == 'BSC50') && $ic == 23) {
			echo 'block';
		} else {
			echo 'hidden';
		}
		?>"
			data-chart-tab='<?php echo $single_bsc ?>'>
			<div class="container">
				<h2 class="font-bold 2xl:text-[32px] text-2xl mb-6">
					<?php _e('Chi tiết danh mục', 'bsc') ?>
				</h2>
				<div class="lg:flex xl:gap-14 gap-10">
					<div class="relative lg:w-[887px] max-w-[66%]">
						<div
							class="rounded-[10px] overflow-x-auto scroll-bar-custom text-center border border-[#EAEEF4] <?php echo $class_login ?>">
							<div
								class="flex text-white bg-primary-300 font-semibold items-center min-h-[58px] leading-[1.125] gap-4">
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Mã', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Khuyến nghị', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Giá', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Mục tiêu', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Upside', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('Sàn', 'bsc') ?>
								</div>
								<div class="flex-1 min-w-[110px] whitespace-nowrap">
									<?php _e('KL', 'bsc') ?>

								</div>
							</div>
							<?php
							if (!$check_logout) {
								$array_data_list_bsc = array();
								$response_list_bsc = get_data_with_cache('GetDanhMucChiTiet?id=' . $ic, $array_data_list_bsc, $time_cache, get_field('cdapi_ip_address_quanlydanhmuc', 'option'), 'POST');
								if ($response_list_bsc) {
							?>
									<div
										class="scroll-bar-custom overflow-y-auto max-h-[600px] prose-a:text-primary-300 prose-a:font-bold font-medium">
										<?php
										$i = 0;
										foreach ($response_list_bsc->d as $list_bsc) {
											$i++;
											$symbol = $list_bsc->machungkhoan;
											if ($symbol) {
												$symbols = array_column($response_instruments_array, 'symbol');
												$index = array_search($symbol, $symbols);
												if ($index !== false) {
													$stockData = $response_instruments_array[$index];
												}
										?>
												<div
													class="flex items-center <?php echo $i % 2 == 0 ? '' : 'bg-[#EBF4FA]' ?>">
													<div
														class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
														<a href="<?php echo slug_co_phieu($list_bsc->machungkhoan) ?>"><?php echo $list_bsc->machungkhoan ?></a>
													</div>
													<div
														class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-semibold">
														<?php
														$status = $list_bsc->hinhthuc;
														$check_status = get_color_by_number_bsc($status);
														$title_status = $check_status['title_status'];
														$text_status = $check_status['text_status'];
														$background_status = $check_status['background_status'];
														?>
														<?php if ($list_bsc->hinhthuc) { ?>
															<span class="min-w-[78px] min-h-[28px] inline-flex items-center justify-center px-4 py-0.5 font-semibold rounded-full" style=" background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
																<?php
																echo  $title_status;
																?>
															</span>
														<?php } ?>
													</div>
													<?php
													if ($stockData->changePercent) {
														if (($stockData->changePercent) > 0) {
															if ($stockData->closeprice == $stockData->ceiling) {
																$text_color_class_price = 'text-[#7F1CCD]';
															} else {
																$text_color_class_price = 'text-[#1CCD83]';
															}
														} elseif (($stockData->changePercent) < 0) {
															if ($stockData->closeprice  == $stockData->ceiling) {
																$text_color_class_price = 'text-[#1ABAFE]';
															} else {
																$text_color_class_price = 'text-[#FE5353]';
															}
														} else {
															$text_color_class_price = 'text-[#EB0]';
														}
													} else {
														$text_color_class_price = 'text-[#EB0]';
													}
													?>
													<div
														class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold <?php echo $text_color_class_price ?>">
														<?php
														if ($stockData->closePrice) {
															echo number_format(($stockData->closePrice) / 1000, 2, '.', '');
														}
														?>
													</div>
													<div
														class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
														<?php
														if ($list_bsc->giakyvong) {
															echo number_format(($list_bsc->giakyvong), 2, '.', '');
														}
														?>
													</div>
													<?php if ($stockData->closePrice && $list_bsc->giakyvong) {
														if (($list_bsc->giakyvong * 1000 - $stockData->closePrice) > 0) {
															$text_color_class = 'text-[#1CCD83]';
														} elseif (($list_bsc->giakyvong * 1000 - $stockData->closePrice) < 0) {
															$text_color_class = 'text-[#FE5353]';
														} else {
															$text_color_class = 'text-[#EB0]';
														}
													} else {
														$text_color_class = 'text-[#EB0]';
													}
													?>
													<div
														class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold <?php echo $text_color_class ?>">
														<?php if ($stockData->closePrice && $list_bsc->giakyvong) {
															if (($list_bsc->giakyvong * 1000 - $stockData->closePrice) > 0) {
																$before_text = '+' . number_format((($list_bsc->giakyvong * 1000 - $stockData->closePrice) / $stockData->closePrice) * 100, 2, '.', '') . '%';;
															} else {
																$before_text = '';
															}
															echo $before_text;
														}  ?>
													</div>
													<div
														class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
														<?php echo $list_bsc->san ?>
													</div>
													<div
														class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold  <?php echo $text_color_class_price ?>">
														<?php
														if ($stockData->closeVol) {
															echo number_format(($stockData->closeVol) / 1000, 2, '.', '');
														}
														?>
													</div>
												</div>
										<?php
											}
										}
										?>

									</div>
								<?php }
							} else {
								?>
								<!-- Data Demo -->
								<div class="scroll-bar-custom overflow-y-auto max-h-[600px] prose-a:text-primary-300 prose-a:font-bold font-medium">
									<?php for ($i = 0; $i < 9; $i++) { ?>
										<div class="flex items-center bg-[#EBF4FA]">
											<div class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
												<?php _e('CTG', 'bsc') ?> </div>
											<div class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-semibold">
												<span class="inline-block px-4 py-0.5 font-semibold rounded-full" style=" background-color:#D6F6DE; color:#30D158">
													<?php _e('Mua', 'bsc') ?> </span>
											</div>
											<div class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
												---- </div>
											<div class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
												---- </div>
											<div class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
												---- </div>
											<div class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
												---- </div>
											<div class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold  text-[#1CCD83]">
												----
											</div>
										</div>
									<?php } ?>
								</div>
							<?php
							} ?>
						</div>
						<?php if ($check_logout) {
							echo $check_logout['html'];
						} ?>
					</div>
					<?php
					$array_data_GetResearchPorCurMet = array(
						'portcode' => $single_bsc
					);
					$response_GetResearchPorCurMet = get_data_with_cache('GetResearchPorCurMet', $array_data_GetResearchPorCurMet, $time_cache);
					if ($response_GetResearchPorCurMet) {
					?>
						<div class="flex-1 font-Helvetica">
							<ul class="space-y-6">
								<li class="flex xl:gap-20 gap-10">
									<div class="w-[62%] space-y-1">
										<p class="text-xs"><?php _e('Ngày điều chỉnh danh mục', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo $response_GetResearchPorCurMet->d[0]->value; ?>
										</p>
									</div>
									<div class="w-[38%] space-y-1">
										<p class="text-xs"><?php _e('Ngành chủ đạo', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo $response_GetResearchPorCurMet->d[6]->value; ?>
										</p>
									</div>
								</li>
								<li class="flex xl:gap-20 gap-10">
									<div class="w-[62%] space-y-1">
										<p class="text-xs"><?php _e('Thay đổi từ ngày điều chỉnh', 'bsc') ?></p>
										<?php if ($response_GetResearchPorCurMet->d[1]->value) {
											if (substr($response_GetResearchPorCurMet->d[1]->value, 0, 1) === '-') {
												$class = "text-[#FE5353]";
												$class_svg = 'down';
											} else {
												$class = "text-[#1CCD83]";
												$class_svg = 'up';
											}
										?>
											<p class="font-medium <?php echo $class ?> flex items-center gap-1">
												<?php echo svg($class_svg, '16', '16') ?>
												<?php echo $response_GetResearchPorCurMet->d[1]->value; ?>
											</p>
										<?php } ?>
									</div>
									<div class="w-[38%] space-y-1">
										<p class="text-xs"><?php _e('So với thị trường', 'bsc') ?></p>
										<?php if ($response_GetResearchPorCurMet->d[7]->value) {
											if (substr($response_GetResearchPorCurMet->d[7]->value, 0, 1) === '-') {
												$class = "text-[#FE5353]";
												$class_svg = 'down';
											} else {
												$class = "text-[#1CCD83]";
												$class_svg = 'up';
											}
										?>
											<p class="font-medium <?php echo $class ?> flex items-center gap-1">
												<?php echo svg($class_svg, '16', '16') ?>
												<?php echo $response_GetResearchPorCurMet->d[7]->value; ?>
											</p>
										<?php } ?>
									</div>
								</li>
								<li class="flex xl:gap-20 gap-10">
									<div class="w-[62%] space-y-1">
										<p class="text-xs"><?php _e('Thay đổi 1W', 'bsc') ?></p>
										<?php if ($response_GetResearchPorCurMet->d[2]->value) {
											if (substr($response_GetResearchPorCurMet->d[2]->value, 0, 1) === '-') {
												$class = "text-[#FE5353]";
												$class_svg = 'down';
											} else {
												$class = "text-[#1CCD83]";
												$class_svg = 'up';
											}
										?>
											<p class="font-medium <?php echo $class ?> flex items-center gap-1">
												<?php echo svg($class_svg, '16', '16') ?>
												<?php echo $response_GetResearchPorCurMet->d[2]->value; ?>
											</p>
										<?php } ?>
									</div>
									<div class="w-[38%] space-y-1">
										<p class="text-xs"><?php _e('So với thị trường', 'bsc') ?></p>
										<?php if ($response_GetResearchPorCurMet->d[8]->value) {
											if (substr($response_GetResearchPorCurMet->d[8]->value, 0, 1) === '-') {
												$class = "text-[#FE5353]";
												$class_svg = 'down';
											} else {
												$class = "text-[#1CCD83]";
												$class_svg = 'up';
											}
										?>
											<p class="font-medium <?php echo $class ?> flex items-center gap-1">
												<?php echo svg($class_svg, '16', '16') ?>
												<?php echo $response_GetResearchPorCurMet->d[8]->value; ?>
											</p>
										<?php } ?>
									</div>
								</li>
								<li class="flex xl:gap-20 gap-10">
									<div class="w-[62%] space-y-1">
										<p class="text-xs"><?php _e('Beta danh mục', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo  $response_GetResearchPorCurMet->d[3]->value; ?>
										</p>
									</div>
									<div class="w-[38%] space-y-1">
										<p class="text-xs"><?php _e('Trung vị thị giá vốn', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo  $response_GetResearchPorCurMet->d[9]->value; ?>
										</p>
									</div>
								</li>
								<li class="flex xl:gap-20 gap-10">
									<div class="w-[62%] space-y-1">
										<p class="text-xs"><?php _e('P/E trung vị', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo  $response_GetResearchPorCurMet->d[4]->value; ?>
										</p>
									</div>
									<div class="w-[38%] space-y-1">
										<p class="text-xs"><?php _e('P/E thị trường', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo  $response_GetResearchPorCurMet->d[10]->value; ?>
										</p>
									</div>
								</li>
								<li class="flex xl:gap-20 gap-10">
									<div class="w-[62%] space-y-1">
										<p class="text-xs"><?php _e('P/B trung vị', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo  $response_GetResearchPorCurMet->d[5]->value; ?>
										</p>
									</div>
									<div class="w-[38%] space-y-1">
										<p class="text-xs"><?php _e('P/B thị trường', 'bsc') ?></p>
										<p class="font-medium">
											<?php echo  $response_GetResearchPorCurMet->d[11]->value; ?>
										</p>
									</div>
								</li>
							</ul>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
<?php
	}
}
?>