<section
	class="chart relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[77px] bg-primary-200' : 'py-6 bg-gradient-blue-50' ?>"
	<?php if ( get_sub_field( 'id_class' ) )
	{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>"
	<?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title_main' ) )
		{ ?>
			<h2 class="heading-title 2xl:mb-12 wow fadeIn <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8' : 'mb-6' ?>"
				data-wow-duration="2s">
				<?php the_sub_field( 'title_main' ) ?>
			</h2>
		<?php } ?>
		<div
			class="relative z-[2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-0 flex' : 'space-y-10' ?>">
			<?php
			$time_cache = get_sub_field( 'time_cache_1' ) ?: 300;
			date_default_timezone_set( 'Asia/Bangkok' );
			$todate = date( 'Y-m-d' );
			$array_data = array(
				'portcode' => 'BSC10,BSC30,BSC50,HOSE,VNDIAMOND'
			);
			$data = get_data_with_cache( 'GetPortfolioPerformance', $array_data, $time_cache );

			$maxValue = 0;
			$minValue = PHP_INT_MAX;

			if ( $data )
			{
				$stocksData = [ 
					'BSC10' => [],
					'BSC30' => [],
					'BSC50' => [],
					'HOSE' => [],
					'VNDIAMOND' => []
				];

				$earliestDate = null;

				foreach ( $data->d as $dataset )
				{
					foreach ( $dataset as $stockCode => $entries )
					{
						foreach ( $entries as $entry )
						{
							$date = date( "Y-m-d", strtotime( $entry->tradedate ) );
							$portclose = $entry->portclose;
							$percentagedifference = $entry->percentagedifference;

							$stocksData[ $stockCode ][ $date ] = [ 
								'portclose' => $portclose,
								'percentagedifference' => $percentagedifference
							];

							if ( $portclose > $maxValue )
							{
								$maxValue = $portclose;
							}
							if ( $portclose < $minValue )
							{
								$minValue = $portclose;
							}

							if ( ! $earliestDate || $date < $earliestDate )
							{
								$earliestDate = $date;
							}
						}
					}
				}

				$fromdate = $earliestDate;
				$stocksDataJson = json_encode( $stocksData );
				$maxValue = ceil( $maxValue / 10 ) * 10;
				$minValue = floor( $minValue / 10 ) * 10;
			}
			?>

			<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mr-5' : '' ?>">
				<?php if ( get_sub_field( 'title' ) )
				{ ?>
					<h2 class="border-l-2 border-primary-300 2xl:text-[28px] font-bold text-primary-300 leading-none wow fadeIn <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl mb-7 pl-6' : 'text-lg mb-6 pl-[12px]' ?>"
						data-wow-duration="2s">
						<?php the_sub_field( 'title' ) ?>
					</h2>
				<?php } ?>
				<div
					class="flex flex-col <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'bg-white rounded-2xl h-[calc(100%-84px)] min-h-[480px] p-5 2xl:p-7 2xl:h-[calc(100%-90px)]' : '' ?>">
					<div
						class="mb-6 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex justify-between items-center' : '' ?>">
						<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile()
							? 'space-x-2 px-[6px] py-[2px] bg-[#F8F8FF] block mb-0 font-normal'
							: 'space-x-4 px-[13px] py-[7px] bg-white flex mb-4'; ?> rounded-xl btn-chart">
							<button data-chart="BSC10"
								class="active <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
									? '2xl:px-4 2xl:py-2 py-1 2xl:text-base font-normal'
									: 'px-2 py-3 md:text-sm text-xs flex-1 font-semibold'; ?> bg-primary-700 text-white rounded-[10px] [&:not(.active)]:bg-transparent [&:not(.active)]:text-black">
								BSC10
							</button>
							<button data-chart="BSC30"
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile()
									? '2xl:px-4 2xl:py-2 py-1 2xl:text-base font-normal'
									: 'px-2 py-3 md:text-sm text-xs flex-1 font-semibold'; ?> bg-primary-700 text-white rounded-[10px] [&:not(.active)]:bg-transparent [&:not(.active)]:text-black">
								BSC30
							</button>
							<button data-chart="BSC50"
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile()
									? '2xl:px-4 2xl:py-2 py-1 2xl:text-base font-normal'
									: 'px-2 py-3 md:text-sm text-xs flex-1 font-semibold'; ?> bg-primary-700 text-white rounded-[10px] [&:not(.active)]:bg-transparent [&:not(.active)]:text-black">
								BSC50
							</button>
						</div>


						<div class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
							? 'gap-6 2xl:gap-6 items-center'
							: 'gap-4 items-end'; ?>">
							<div id="date-performance-picker" date-rangepicker datepicker-orientation="bottom"
								datepicker-format="yyyy-mm-dd" datepicker-autohide>
									<div class="flex items-center relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
									? 'space-x-4 2xl:space-x-4 flex-nowrap flex-1 justify-between'
									: 'flex-wrap flex-1 justify-between'; ?>">
										<p class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
											? 'w-auto mb-0'
											: 'w-full mb-2'; ?>">
											<?php _e( 'Thời gian:', 'gnws' ) ?>
										</p>
										<div class="flex items-center border border-[#ECE9F1] bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
											? 'gap-4 2xl:gap-4 rounded-[10px] h-11 py-3 px-3 w-auto'
											: 'gap-3 rounded-xl h-11 py-[12px] px-4 w-[48%]'; ?>">
											<input id="datepicker-performance-start" name="start"
												type="text" class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 placeholder:text-black <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
													? 'max-w-[100px] w-full p-0'
													: 'max-w-full w-full p-0 text-xs'; ?>" placeholder="<?php _e( 'Từ ngày', 'bsc' ) ?>"
												value="<?php echo $fromdate ?>">
											<?php echo svgClass( 'date-blue', '', '', 'shrink-0' ) ?>
										</div>
										<div class="flex items-center border border-[#ECE9F1] bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
											? 'gap-4 2xl:gap-4 rounded-[10px] h-11 py-3 px-3 w-auto'
											: 'gap-3 rounded-xl h-11 py-[12px] px-4 w-[48%]'; ?>">
											<input id="datepicker-performance-end" name="end" type="text"
												class="todate border-none focus:border-none focus:outline-0 focus:ring-0 placeholder:text-black <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
													? 'max-w-[100px] w-full p-0'
													: 'max-w-full w-full p-0 text-xs'; ?>" placeholder="<?php _e( 'Đến ngày', 'bsc' ) ?>"
												value="<?php echo $todate ?>">
											<?php echo svgClass( 'date-blue', '', '', 'shrink-0' ) ?>
										</div>

									</div>
							</div>
							<button type="button" data-fromdate="<?php echo $fromdate ?>"
								data-todate="<?php echo $todate ?>" id="chart_btn-reload" class="w-11 h-11 rounded-lg flex items-center justify-center p-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
								   	? 'bg-[#E8F5FF] group'
								   	: 'bg-white group'; ?>">
								<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
							</button>
						</div>

					</div>
					<div class="flex-1 chart-info <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
						? 'min-h-0 bg-none rounded-none py-0 px-0'
						: 'min-h-96 bg-white rounded-[10px] py-4 px-5 -mx-5'; ?>">
						<div id="chart" data-time_cache="<?php echo $time_cache ?>"
							data-maxvalue="<?php echo $maxValue; ?>"
							data-minvalue="<?php echo $minValue; ?>"
							data-stock='<?php echo $stocksDataJson ?>'></div>
						<?php echo do_shortcode( '[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]' ) ?>
					</div>

				</div>
			</div>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[33.181%]':'' ?>">
				<div class="flex items-center justify-between <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-7':'mb-6' ?>">
					<?php if ( get_sub_field( 'title_2' ) )
					{ ?>
						<h2 class="border-l-2 border-primary-300 font-bold text-primary-300 leading-none wow fadeIn <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pl-6 2xl:text-[28px] text-xl':'pl-4 text-lg' ?>"
							data-wow-duration="2s">
							<?php the_sub_field( 'title_2' ) ?>
						</h2>
					<?php } ?>
					<?php if ( have_rows( 'button_xem_tat_ca' ) )
					{
						while ( have_rows( 'button_xem_tat_ca' ) ) :
							the_row();
							if ( get_sub_field( 'title' ) )
							{
								?>
								<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
									class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105">
									<?php echo svg( 'arrow-btn', '20', '20' ) ?>
									<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
										<?php the_sub_field( 'title' ) ?>
									<?php } ?>
								</a>
								<?php
							}
						endwhile;
					}
					?>
				</div>
				<?php if ( have_rows( 'khuyen_nghi' ) )
				{
					while ( have_rows( 'khuyen_nghi' ) ) :
						the_row();
						$time_cache = get_sub_field( 'time_cache' ) ?: 300; ?>
						<div class="bg-white rounded-[10px] lg:px-6 px-4 py-4 mb-4 font-Helvetica">
							<?php if ( get_sub_field( 'title' ) )
							{ ?>
								<p class="font-bold lg:text-xl pb-3 mb-3 border-b border-[#D9D9D9]">
									<?php the_sub_field( 'title' ) ?>
								</p>
							<?php } ?>
							<?php
							$categoryid_kn = get_field( 'cddmkn1_id_danh_mục', 'option' );
							if ( $categoryid_kn )
							{
								$array_data = array(
									'lang' => pll_current_language(),
									'maxitem' => 5,
									'categoryid' => $categoryid_kn,
									"recommendation" => 3
								);
								$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
								if ( $response )
								{
									$count = count( $response->d );
									if ( $count < 5 )
									{
										$total = 5 - $count;
										$array_data_more = array(
											'lang' => pll_current_language(),
											'maxitem' => $total,
											'categoryid' => $categoryid_kn,
											"recommendation" => 4
										);
										$response_more = get_data_with_cache( 'GetReportsBySymbol', $array_data_more, $time_cache );
									}
									?>
									<ul class="space-y-4">
										<?php foreach ( $response->d as $news )
										{
											$status = $news->recommendation;
											$check_status = get_color_by_number_bsc( $status );
											$title_status = $check_status['title_status'];
											$text_status = $check_status['text_status'];
											?>
											<li class="flex font-bold gap-[14px] items-center justify-between <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
												<a href="#" class="line-clamp-1 flex-1">
													<?php echo htmlspecialchars($news->symbols) ?>
													<?php if ($news->upside) { ?>
														<span
															style="color: <?php echo $text_status ?>">(<?php echo htmlspecialchars($news->upside) ?>)</span>
													<?php } ?>
													<?php if ( $title_status != '' )
													{ ?>
														<span
															style="color: <?php echo $text_status ?>"><?php echo $title_status ?></span>
													<?php } ?> - <?php echo htmlspecialchars( $news->title ) ?>
												</a>
												<p
													class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
													<?php _e( 'Hot', 'bsc' ) ?>
												</p>
												<p class="min-w-5">
													<?php if ( $news->reporturl )
													{ ?>
														<a href="<?php echo $news->reporturl ?>" target="_blank">
															<?php echo svg( 'download', '20', '20' ) ?>
														</a>
													<?php } ?>
												</p>
											</li>
											<?php
										}
										if ( $response_more )
										{
											foreach ( $response_more->d as $news )
											{
												?>
												<li class="flex font-bold gap-[14px] items-center justify-between <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
													<a href="#" class="line-clamp-1 flex-1">
														<?php echo htmlspecialchars($news->symbols) ?>
														<?php if ($news->upside) { ?>
															<span
																style="color: <?php echo $text_status ?>">(<?php echo htmlspecialchars($news->upside) ?>)</span>
														<?php } ?>
														<?php if ( $title_status != '' )
														{ ?>
															<span
																style="color: <?php echo $text_status ?>"><?php echo $title_status ?></span>
														<?php } ?> - <?php echo htmlspecialchars( $news->title ) ?>
													</a>
													<p
														class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
														<?php _e( 'Hot', 'bsc' ) ?>
													</p>
													<p class="min-w-5">
														<?php if ( $news->reporturl )
														{ ?>
															<a href="<?php echo $news->reporturl ?>" target="_blank">
																<?php echo svg( 'download', '20', '20' ) ?>
															</a>
														<?php } ?>
													</p>
												</li>
												<?php
											}
										}
										?>
									</ul>
								<?php }
							}
							?>
							<?php if ( have_rows( 'button_xem_them' ) )
							{
								while ( have_rows( 'button_xem_them' ) ) :
									the_row(); ?>
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 lg:mt-6 mt-4 text-xs">
										<?php the_sub_field( 'title' ) ?>
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
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
				<?php if ( have_rows( 'nganh_doanh_nghiep' ) ) : ?>
					<div class="data-slick block_slider-show-1 slick-dots-center font-Helvetica"
						data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots": true, "arrows": false, "fade": false}'>
						<?php
						$i = 0;
						while ( have_rows( 'nganh_doanh_nghiep' ) ) :
							the_row();
							$i++; ?>
							<?php $time_cache = get_sub_field( 'time_cache' ) ?: 300; ?>
							<div class="bg-white rounded-[10px] lg:px-6 px-4 py-4 block_slider-item">
								<?php if ( get_sub_field( 'title' ) )
								{ ?>
									<div
										class="lg:flex lg:items-center lg:justify-between lg:gap-3 custom_arrow_slick pb-3 mb-3 border-b border-[#D9D9D9] lg:px-4">
										<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
											<button
												class="prev-btn text-primary-300 transition-all duration-500 hover:text-primary-600"><?php echo svg( 'prev-slick' ) ?>
											</button>
															
										<?php } ?>
										<p class="font-bold lg:text-lg lg:text-center line-clamp-1">
											<?php the_sub_field( 'title' ) ?>
										</p>
										<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
											<button
												class="next-btn text-primary-300 transition-all duration-500 hover:text-primary-600"><?php echo svg( 'next-slick' ) ?></button>
															
										<?php } ?>
									</div>
								<?php } ?>
								<?php
								$term = get_sub_field( 'danh_muc_bao_cao_phan_tich' );
								if ( $term )
								{
									$categoryid = get_field( 'api_id_danh_muc', $term );
									if ( $categoryid )
									{
										$array_data = array(
											'lang' => pll_current_language(),
											'maxitem' => 4,
											'categoryid' => $categoryid
										);
										$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
										if ( $response )
										{
											?>
											<ul class="space-y-4">
												<?php foreach ( $response->d as $news )
												{ ?>
													<li class="flex gap-[14px] items-center justify-between <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
														<a href="#" class="line-clamp-1 flex-1">
															<?php echo htmlspecialchars( $news->title ) ?>
														</a>
														<p
															class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
															<?php _e( 'Hot', 'bsc' ) ?>
														</p>
														<p class="min-w-5">
															<?php if ( $news->reporturl )
															{ ?>
																<a href="<?php echo $news->reporturl ?>">
																	<?php echo svg( 'download', '20', '20' ) ?>
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
								<?php if ( have_rows( 'button_xem_them' ) )
								{
									while ( have_rows( 'button_xem_them' ) ) :
										the_row(); ?>
										<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
											class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 lg:mt-6 mt-4 text-xs">
											<?php the_sub_field( 'title' ) ?>
											<?php echo svg( 'arrow-btn', '12', '12' ) ?>
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
	<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
		<div class="absolute bottom-0 right-0 pointer-events-none">
			<?php echo svg( 'icon-char' ) ?>
		</div>
						
	<?php } ?>
</section>
