<section
	class="chart relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[77px] bg-primary-200' : 'py-6 bg-gradient-blue-50' ?>"
	<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title_main' ) ) { ?>
			<h2 class="heading-title 2xl:mb-12 wow fadeIn <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8' : 'mb-6' ?>"
				data-wow-duration="2s">
				<?php the_sub_field( 'title_main' ) ?>
			</h2>
		<?php } ?>
		<?php
		$time_cache = 300;
		$array_data_GetAllDanhMuc = array();
		$response_GetAllDanhMuc = get_data_with_cache(
			'GetAllDanhMuc',
			$array_data_GetAllDanhMuc,
			$time_cache,
			get_field( 'cdapi_ip_address_quanlydanhmuc', 'option' )
		);

		if ( $response_GetAllDanhMuc ) {
			?>
			<div
				class="relative z-[2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:space-y-0 space-y-10 xl:flex' : 'space-y-10' ?>">
				<?php
				$todate = date( 'Y-m-d' );
				$todate_format = date( 'd/m/Y' );
				if ( isset( $_GET['mck'] ) && trim( $_GET['mck'] ) !== '' ) {
					$current_bsc = strtoupper( bsc_format_string( $_GET['mck'] ) );
				} else {
					$current_bsc = null; // Khởi tạo để tránh lỗi
			
					if ( ! empty( $response_GetAllDanhMuc->d ) && is_array( $response_GetAllDanhMuc->d ) ) {
						foreach ( $response_GetAllDanhMuc->d as $news ) {
							if ( isset( $news->isdefault ) && $news->isdefault == 'Y' ) {
								$current_bsc = $news->tendanhmuc ?? null;
								break;
							}
						}

						// Nếu không tìm thấy danh mục mặc định, lấy phần tử đầu tiên (nếu có)
						if ( $current_bsc === null && isset( $response_GetAllDanhMuc->d[0]->tendanhmuc ) ) {
							$current_bsc = $response_GetAllDanhMuc->d[0]->tendanhmuc;
						}
					}
				}
				?>
				<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:mr-5' : '' ?>">
					<div class="md:flex md:gap-6 md:items-center md:space-y-0 space-y-5 md:mb-7 mb-6 wow fadeIn"
						data-wow-duration="2s">
						<?php if ( get_sub_field( 'title' ) ) { ?>
							<h3
								class="border-l-2 border-primary-300 2xl:text-[28px] font-bold text-primary-300 leading-none  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl pl-6' : 'text-lg pl-[12px]' ?>">
								<?php the_sub_field( 'title' ) ?>
							</h3>
							<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile()
								? 'space-x-2 px-[6px] py-1 bg-[#F8F8FF] block mb-0 font-normal'
								: 'space-x-4 px-[13px] py-[7px] bg-white flex mb-4'; ?> rounded-xl btn-chart">
								<?php
								$i = 0;
								foreach ( $response_GetAllDanhMuc->d as $news ) {
									$single_bsc = $news->tendanhmuc;
									$i++; ?>
									<button data-chart="<?php echo $single_bsc ?>" data-stt="<?php echo $i ?>"
										class="<?php if ( $current_bsc == $single_bsc )
											echo 'active' ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
											? 'px-4 2xl:py-2 py-1 2xl:text-base font-normal'
											: 'px-2 py-3 md:text-sm text-xs flex-1 font-semibold'; ?> bg-primary-700 text-white rounded-[10px] [&:not(.active)]:bg-transparent [&:not(.active)]:text-black">
										<?php echo $single_bsc ?>
									</button>
								<?php } ?>
							</div>

						<?php } ?>

					</div>
					<div
						class="flex flex-col <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'bg-white rounded-2xl xl:h-[calc(100%-102px)] min-h-[480px] p-5 2xl:p-7 2xl:h-[calc(100%-110px)]' : '' ?>">
						<div
							class="xl:mb-6 mb-4 flex xl:flex-nowrap flex-wrap md:gap-4 gap-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-center' : '' ?>">

							<div class="flex md:w-auto w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
								? 'gap-6 2xl:gap-6 items-center'
								: ''; ?>">
								<div id="date-performance-picker" date-rangepicker datepicker-orientation="bottom"
									datepicker-format="dd/mm/yyyy" datepicker-autohide>
									<div class="flex items-center relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
										? 'space-x-3 2xl:space-x-4 flex-nowrap flex-1 justify-between'
										: 'flex-wrap flex-1 justify-between'; ?>">
										<p class="font-bold whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
											? 'w-auto mb-0 2xl:text-base text-sm'
											: 'w-full mb-2'; ?>">
											<?php _e( 'Thời gian:', 'bsc' ) ?>
										</p>
										<div class="flex items-center border border-[#ECE9F1] bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
											? 'gap-3 2xl:gap-4 rounded-[10px] h-11 py-3 px-3 w-auto'
											: 'gap-3 rounded-xl h-11 py-[12px] px-4 w-[48%]'; ?>">
											<input id="datepicker-performance-start" name="start" type="text" class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 placeholder:text-black <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
												? 'max-w-[100px] w-full p-0 2xl:text-base text-xs'
												: 'max-w-full w-full p-0 text-xs'; ?>" placeholder="<?php _e( 'Từ ngày', 'bsc' ) ?>" value=""
												autocomplete="off">
											<?php echo svgClass( 'date-blue', '', '', 'shrink-0' ) ?>
										</div>
										<div class="flex items-center border border-[#ECE9F1] bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
											? 'gap-3 2xl:gap-4 rounded-[10px] h-11 py-3 px-3 w-auto'
											: 'gap-3 rounded-xl h-11 py-[12px] px-4 w-[48%]'; ?>">
											<input id="datepicker-performance-end" name="end" type="text" class="todate border-none focus:border-none focus:outline-0 focus:ring-0 placeholder:text-black <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
												? 'max-w-[100px] w-full p-0 2xl:text-base text-xs'
												: 'max-w-full w-full p-0 text-xs'; ?>" placeholder="<?php _e( 'Đến ngày', 'bsc' ) ?>"
												value="<?php echo $todate_format ?>" autocomplete="off">
											<?php echo svgClass( 'date-blue', '', '', 'shrink-0' ) ?>
										</div>

									</div>
								</div>
							</div>
							<div class="flex items-center gap-2 btn-chart_date flex-1">
								<button type="button" data-month="1"
									class="inline-block flex-1 sm:h-11 h-10 2xl:px-4 sm:px-[12px] px-2 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(.active)]:bg-[#F8F8FF]' : '[&:not(.active)]:bg-white border border-[#ECE9F1]' ?> bg-primary-700 [&:not(.active)]:text-black text-white font-medium text-xs">
									<?php _e( '1M', 'bsc' ) ?>
								</button>
								<button type="button" data-month="3"
									class="nline-block flex-1 sm:h-11 h-10 2xl:px-4 sm:px-[12px] px-2 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(.active)]:bg-[#F8F8FF]' : '[&:not(.active)]:bg-white border border-[#ECE9F1]' ?> bg-primary-700 [&:not(.active)]:text-black text-white font-medium text-xs">
									<?php _e( '3M', 'bsc' ) ?>
								</button>
								<button type="button" data-month="6"
									class="inline-block flex-1 sm:h-11 h-10 2xl:px-4 sm:px-[12px] px-2 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(.active)]:bg-[#F8F8FF]' : '[&:not(.active)]:bg-white border border-[#ECE9F1]' ?> bg-primary-700 [&:not(.active)]:text-black text-white font-medium text-xs">
									<?php _e( '6M', 'bsc' ) ?>
								</button>
								<button type="button" data-month="12"
									class="inline-block flex-1 sm:h-11 h-10 2xl:px-4 sm:px-[12px] px-2 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(.active)]:bg-[#F8F8FF]' : '[&:not(.active)]:bg-white border border-[#ECE9F1]' ?> bg-primary-700 [&:not(.active)]:text-black text-white font-medium text-xs">
									<?php _e( '1Y', 'bsc' ) ?>
								</button>
								<button type="button" data-month="36"
									class="inline-block flex-1 sm:h-11 h-10 2xl:px-4 sm:px-[12px] px-2 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(.active)]:bg-[#F8F8FF]' : '[&:not(.active)]:bg-white border border-[#ECE9F1]' ?> bg-primary-700 [&:not(.active)]:text-black text-white font-medium text-xs">
									<?php _e( '3Y', 'bsc' ) ?>
								</button>
								<button type="button" data-month="0"
									class="inline-block flex-1 sm:h-11 h-10 2xl:px-4 sm:px-[12px] px-2 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(.active)]:bg-[#F8F8FF]' : '[&:not(.active)]:bg-white border border-[#ECE9F1]' ?> bg-primary-700 [&:not(.active)]:text-black text-white font-medium text-xs">
									<?php _e( 'YTD', 'bsc' ) ?>
								</button>
								<button type="button" data-todate="<?php echo $todate ?>" id="chart_btn-reload" class="sm:w-11 sm:h-11 w-10 h-10 shrink-0 rounded-lg flex items-center justify-center p-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
								   	? 'bg-[#E8F5FF] group'
								   	: 'bg-[#CEEAFF] group'; ?>">
									<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
								</button>
							</div>
						</div>
						<div class="flex-1 chart-info flex flex-col <?php echo ! wp_is_mobile() && ! bsc_is_mobile()
							? 'min-h-0 bg-none rounded-none py-0 px-0'
							: 'min-h-96 bg-white rounded-[10px] py-4 px-5 -mx-5'; ?>">
							<div class="bsc-ajax-api h-full flex-1" data-api="chart" data-chart="running_chart">
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
							<div class="grid xl:grid-cols-2 grid-cols-1 gap-4 apexcharts-legend-custom xl:mt-5">
								<div class="apexcharts-legend">

								</div>
								<div class="">
									<?php echo do_shortcode( '[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]' ) ?>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:w-[33.181%] w-full' : 'w-full' ?>">
					<div
						class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-12' : 'mb-6' ?>">
						<?php if ( get_sub_field( 'title_2' ) ) { ?>
							<h3 class="border-l-2 border-primary-300 font-bold text-primary-300 leading-none wow fadeIn <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pl-6 2xl:text-[28px] text-xl' : 'pl-4 text-lg' ?>"
								data-wow-duration="2s">
								<?php the_sub_field( 'title_2' ) ?>
							</h3>
						<?php } ?>
						<?php if ( have_rows( 'button_xem_tat_ca' ) ) {
							while ( have_rows( 'button_xem_tat_ca' ) ) :
								the_row();
								if ( get_sub_field( 'title' ) ) {
									?>
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105">
										<?php echo svg( 'arrow-btn', '20', '20' ) ?>
										<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
											<?php the_sub_field( 'title' ) ?>
										<?php } ?>
									</a>
									<?php
								}
							endwhile;
						}
						?>
					</div>
					<?php if ( have_rows( 'khuyen_nghi' ) ) {
						while ( have_rows( 'khuyen_nghi' ) ) :
							the_row();
							$time_cache = get_sub_field( 'time_cache' ) ?: 300; ?>
							<div
								class="bg-white rounded-[10px] lg:px-6 px-4 py-4 mb-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' font-Helvetica lg:min-h-[311px]' : '' ?>">
								<?php if ( get_sub_field( 'title' ) ) { ?>
									<p class="font-bold md:text-xl pb-3 mb-3 border-b border-[#D9D9D9] lg:text-left text-center">
										<?php the_sub_field( 'title' ) ?>
									</p>
								<?php } ?>
								<?php
								$array_data = array(
									'lang' => pll_current_language(),
									'top' => 5,
									"recommendation" => 5
								);
								$response = get_data_with_cache( 'GetTopReportsRecommended', $array_data, $time_cache );
								if ( $response ) {
									?>
									<ul class="space-y-4">
										<?php foreach ( $response->d as $news ) {
											$status = $news->recommendation;
											$check_status = get_color_by_number_bsc( $status );
											$title_status = $check_status['title_status'];
											$text_status = $check_status['text_status'];
											?>
											<li
												class="flex font-bold gap-[14px] items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
												<a href="<?php echo slug_report( htmlspecialchars( $news->id ), htmlspecialchars( $news->title ) ); ?>"
													class="line-clamp-1 flex-1">
													<?php echo htmlspecialchars( $news->symbols ) ?>
													<?php if ( $news->upside ) { ?>
														<span
															style="color: <?php echo $text_status ?>">(<?php echo htmlspecialchars( $news->upside ) ?>)</span>
													<?php } ?>
													<?php if ( $title_status != '' ) { ?>
														<span style="color: <?php echo $text_status ?>"><?php echo $title_status ?></span>
													<?php } ?> - <?php echo htmlspecialchars( $news->title ) ?>
												</a>
												<p
													class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
													<?php _e( 'Hot', 'bsc' ) ?>
												</p>
												<?php if ( $news->reporturl ) {
													$check_log = false;
													$url_download = slug_file_report( htmlspecialchars( $news->id ) );
													$viewerpermission = $news->viewerpermission;
													if ( $viewerpermission == 'USER_BSC' ) {
														$datetimeopen = $news->datetimeopen;
														if ( is_null( $datetimeopen ) || strtotime( $datetimeopen ) > time() ) {
															if ( bsc_is_user_logged_out() ) {
																$check_log = true;
																$url_download = bsc_url_sso( $url_download );
															}
														}
													}
													?>
													<p class="min-w-5">
														<?php if ( $check_log ) {
															$current_url = home_url( $_SERVER['REQUEST_URI'] );
															?>
															<button type="button" data-url="<?php echo $url_download ?>"
																data-current="<?php echo $current_url ?>" class="bsc_login_checker">
																<?php
														} else { ?>
																<a href="<?php echo $url_download ?>" target="_blank" class="bsc_up-download"
																	data-id="<?php echo $news->id; ?>">
																<?php } ?>
																<?php echo svg( 'download', '20', '20' ) ?>
																<?php if ( $check_log ) {
																	?>
															</button>
															<?php
																} else {
																	?>
															</a>
														<?php } ?>
													</p>
												<?php } ?>
											</li>
											<?php
										}
										?>
									</ul>
								<?php }
								?>
								<?php if ( have_rows( 'button_xem_them' ) ) {
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
						<div class="data-slick block_slider-show-1 slick-dots-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'font-Helvetica min-h-[305px]' : '' ?>"
							data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots": true, "arrows": false, "fade": false}'>
							<?php
							$i = 0;
							while ( have_rows( 'nganh_doanh_nghiep' ) ) :
								the_row();
								$i++; ?>
								<?php $time_cache = get_sub_field( 'time_cache' ) ?: 300; ?>
								<div class="bg-white rounded-[10px] lg:px-6 px-4 py-4 block_slider-item">
									<?php if ( get_sub_field( 'title' ) ) { ?>
										<div
											class="md:flex md:items-center md:justify-between md:gap-3 custom_arrow_slick pb-3 mb-3 border-b border-[#D9D9D9] lg:px-4">

											<button
												class="prev-btn text-primary-300 transition-all duration-500 hover:text-primary-600 md:inline-block hidden"><?php echo svg( 'prev-slick' ) ?>
											</button>


											<p class="font-bold lg:text-lg md:text-xl lg:text-center line-clamp-1">
												<?php the_sub_field( 'title' ) ?>
											</p>

											<button
												class="next-btn text-primary-300 transition-all duration-500 hover:text-primary-600 md:inline-block hidden"><?php echo svg( 'next-slick' ) ?></button>


										</div>
									<?php } ?>
									<?php
									$term = get_sub_field( 'danh_muc_bao_cao_phan_tich' );
									if ( $term ) {
										$categoryid = get_field( 'api_id_danh_muc', $term );
										if ( $categoryid ) {
											$array_data = array(
												'lang' => pll_current_language(),
												'maxitem' => 4,
												'categoryid' => $categoryid
											);
											$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
											if ( $response ) {
												?>
												<ul class="space-y-4">
													<?php foreach ( $response->d as $news ) { ?>
														<li
															class="flex gap-[14px] items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
															<a href="<?php echo slug_report( htmlspecialchars( $news->id ), htmlspecialchars( $news->title ) ); ?>"
																class="line-clamp-1 flex-1">
																<?php echo htmlspecialchars( $news->title ) ?>
															</a>
															<p
																class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px] leading-none">
																<?php _e( 'Hot', 'bsc' ) ?>
															</p>
															<?php if ( $news->reporturl ) {
																$check_log = false;
																$url_download = slug_file_report( htmlspecialchars( $news->id ) );
																$viewerpermission = $news->viewerpermission;
																if ( $viewerpermission == 'USER_BSC' ) {
																	$datetimeopen = $news->datetimeopen;
																	if ( is_null( $datetimeopen ) || strtotime( $datetimeopen ) > time() ) {
																		if ( bsc_is_user_logged_out() ) {
																			$check_log = true;
																			$url_download = bsc_url_sso( $url_download );
																		}
																	}
																}
																?>
																<p class="min-w-5">
																	<?php if ( $check_log ) {
																		$current_url = home_url( $_SERVER['REQUEST_URI'] );
																		?>
																		<button type="button" data-url="<?php echo $url_download ?>"
																			data-current="<?php echo $current_url ?>" class="bsc_login_checker">
																			<?php
																	} else { ?>
																			<a href="<?php echo $url_download ?>" target="_blank" class="bsc_up-download"
																				data-id="<?php echo $news->id; ?>">
																			<?php } ?>
																			<?php echo svg( 'download', '20', '20' ) ?>
																			<?php if ( $check_log ) {
																				?>
																		</button>
																		<?php
																			} else {
																				?>
																		</a>
																	<?php } ?>
																</p>
															<?php } ?>

														</li>
														<?php
													}
													?>
												</ul>
											<?php }
										}
									} ?>
									<?php if ( have_rows( 'button_xem_them' ) ) {
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
		<?php } ?>
	</div>
	<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
		<div class="absolute bottom-0 right-0 pointer-events-none">
			<?php echo svg( 'icon-char' ) ?>
		</div>

	<?php } ?>
</section>