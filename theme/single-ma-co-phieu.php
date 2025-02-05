<?php
if ( $args['data'] ) {
	$news = $args['data'];
	$symbol = strtoupper( $args['symbol'] );
	$first_symbol = substr( $symbol, 0, 1 );
	$time_cache = get_field( 'cdttcp1_time_cache', 'option' ) ?: 300;
	$banner = wp_get_attachment_image_url(
		wp_is_mobile() && bsc_is_mobile() && get_field( 'cdc1_background_banner_mobile', 'option' )
		? get_field( 'cdc1_background_banner_mobile', 'option' )
		: get_field( 'cdc1_background_banner', 'option' ),
		'full'
	);
	if ( get_field( 'cdttcp1_background_banner', 'option' ) || get_field( 'cdttcp1_background_banner_mobile', 'option' ) ) {
		$banner = wp_get_attachment_image_url(
			wp_is_mobile() && bsc_is_mobile() && get_field( 'cdttcp1_background_banner_mobile ', 'option' )
			? get_field( 'cdttcp1_background_banner_mobile ', 'option' )
			: get_field( 'cdttcp1_background_banner ', 'option' ),
			'full'
		);
	}
	$style = get_field( 'cdttcp1_background_banner_display', 'option' ) ?: 'default';
	$title_breadcrumb = get_field( 'cdttcp1_title', 'option' );
	$breadcrumb = 'cophieu';
} else {
	wp_redirect( home_url( '/404' ), 301 );
	exit;
}
$check_logout = bsc_is_user_logged_out();
$class = $check_logout['class'];
get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner', null, array(
		'banner' => $banner,
		'style' => $style,
		'title' => $title_breadcrumb,
		'breadcrumb' => $breadcrumb,
	) ) ?>
	<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<?php if ( $news->FULLNAME ) { ?>
				<h1
					class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' xl:text-[32px] text-2xl' : 'md:text-xl text-lg' ?> mb-2 leading-normal uppercase">
					<?php echo $news->FULLNAME ?>
				</h1>
			<?php } ?>
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-10 flex gap-5 flex-wrap' : 'mt-8 block_slider block_slider-show-1 fli-dots-blue dot-30' ?>">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:w-[547px] xl:max-w-[41%] w-full' : 'w-full block_slider-item sameheight_item' ?>">
					<div class="<?php echo (get_locale() == 'en_GB' && ! wp_is_mobile()) ? 'px-6' : ''; ?> <?php echo (get_locale() !== 'en_GB' && ! wp_is_mobile()) ? 'px-10' : ''; ?> bg-gradient-blue-to-bottom-100 rounded-xl <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' py-6' : 'p-6 min-h-[250px]' ?> space-y-6 h-full bsc_need_crawl_price"
						data-symbol="<?php echo $symbol ?>" data-socket="true">
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex items-center justify-between' ?> ">
							<div
								class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6' : 'gap-4' ?> items-center">
								<div
									class="text-[#6B6F78] lg:text-[52px] text-3xl overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[90px] h-[90px] p-5' : 'w-14 h-14 p-4' ?> bg-white rounded-full flex items-center justify-center ">
									<?php echo $first_symbol ?>
								</div>
								<div class="flex flex-col">
									<h4
										class="font-bold lg:text-[32px] text-2xl uppercase leading-normal bsc_need_crawl_price-symbol">
									</h4>
									<p
										class="uppercase <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?> text-paragraph bsc_need_crawl_price-exchange">
									</p>
								</div>
							</div>
							<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
								<div class="flex-col gap-2">
									<div class="flex gap-[12px] data_number bsc_need_crawl_price-text-color items-center">
										<div class="text-2xl font-bold text-[#FE5353] bsc_need_crawl_price-bidPrice1">
										</div>
										<div class="flex flex-col text-xs">
											<p class="bsc_need_crawl_price-bidPrice1-reference">
											</p>
											<p class="bsc_need_crawl_price-bidPrice1-reference-phantram">
											</p>
										</div>
									</div>
									<p class="time-update mt-1 sm:text-xs text-xxs">
										<?php _e( 'Cập nhật lúc', 'bsc' ) ?>
										<span class="bsc_need_crawl_date"></span>
										<?php _e( 'UTC+7', 'bsc' ) ?>
									</p>
								</div>
							<?php } ?>
						</div>
						<div class="flex items-center gap-5 <?php echo (get_locale() == 'en_GB') ? '2xl:gap-4' : '2xl:gap-7'; ?>">
							<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
								<div class="lg:w-[176px] lg:max-w-[37%]">
									<div class="flex-col gap-2">
										<div class="flex gap-[14px] data_number bsc_need_crawl_price-text-color">
											<div class="2xl:text-[40px] text-4xl font-bold bsc_need_crawl_price-bidPrice1">
											</div>
											<div class="flex flex-col ">
												<p class="bsc_need_crawl_price-bidPrice1-reference">
												</p>
												<p class="bsc_need_crawl_price-bidPrice1-reference-phantram">
												</p>
											</div>
										</div>
										<p class="time-update mt-1">
											<?php _e( 'Cập nhật lúc', 'bsc' ) ?>
											<span class="bsc_need_crawl_date"></span>
											<?php _e( 'UTC+7', 'bsc' ) ?>
										</p>
									</div>
								</div>
							<?php } ?>
							<div
								class="flex-1 grid grid-cols-3 font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4' : 'gap-6' ?>">
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 <?php echo (get_locale() == 'en_GB') ? 'text-[13px]' : '2xl:text-xs text-[13px]'; ?>">
											<?php _e( 'Trần', 'bsc' ) ?>
										</p>
										<p
											class="font-bold text-[#7F1CCD] bsc_need_crawl_price-ceiling <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' text-lg' : '' ?>">
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 <?php echo (get_locale() == 'en_GB') ? 'text-[13px]' : '2xl:text-xs text-[13px]'; ?> ">
											<?php _e( 'Cao nhất', 'bsc' ) ?>
										</p>
										<p
											class="font-bold text-black bsc_need_crawl_price-high <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' text-lg' : '' ?>">
										</p>
									</div>
								</div>
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 <?php echo (get_locale() == 'en_GB') ? 'text-[13px]' : '2xl:text-xs text-[13px]'; ?> ">
											<?php _e( 'Tham chiếu', 'bsc' ) ?>
										</p>
										<p
											class="font-bold text-[#FFB81C] bsc_need_crawl_price--reference <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' text-lg' : '' ?>">
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 <?php echo (get_locale() == 'en_GB') ? 'text-[13px]' : '2xl:text-xs text-[13px]'; ?> ">
											<?php _e( 'Thấp nhất', 'bsc' ) ?>
										</p>
										<p
											class="font-bold text-black bsc_need_crawl_price-low <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' text-lg' : '' ?>">
										</p>
									</div>
								</div>
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 <?php echo (get_locale() == 'en_GB') ? 'text-[13px]' : '2xl:text-xs text-[13px]'; ?> ">
											<?php _e( 'Sàn', 'bsc' ) ?>
										</p>
										<p
											class="font-bold text-[#1ABAFE] bsc_need_crawl_price-floor <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' text-lg' : '' ?>">
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 <?php echo (get_locale() == 'en_GB') ? 'text-[13px]' : '2xl:text-xs text-[13px]'; ?> ">
											<?php _e( 'Trung bình', 'bsc' ) ?>
										</p>
										<p
											class="font-bold text-black bsc_need_crawl_price-averagePrice <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' text-lg' : '' ?>">
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:w-[433px] xl:max-w-[33%] w-1/2' : 'w-full block_slider-item min-h-[250px]' ?> bsc-ajax-api"
					data-api="securityBasicInfo-symbol" data-symbol="<?php echo $symbol ?>">
					<div class="hidden">
						<div role="status" class="mt-10">
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
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'w-full block_slider-item min-h-[250px]' ?> bsc-ajax-api"
					data-api="GetRecommendedInstrument-symbol" data-symbol="<?php echo $symbol ?>">
					<div class="hidden">
						<div role="status" class="mt-10">
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
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-16 mb-[50px]' ?> display_data_details_symbol">
		<div class="container">
			<ul
				class="flex  whitespace-nowrap overflow-x-auto <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:gap-[100px] gap-10' : 'gap-8' ?> items-center border-b border-[#D3D3D3] nav-ttcp customtab-nav sticky top-0 z-20 bg-white">
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<button data-tabs="#details_symbol_tab-1"
						class="active inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-1 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						<?php _e( 'TỔNG QUAN', 'bsc' ) ?>
					</button>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<button data-tabs="#details_symbol_tab-2" data-ajax="true" data-api="details_symbol_tab-2"
						data-symbol="<?php echo $symbol ?>"
						class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						<?php _e( 'BÁO CÁO TÀI CHÍNH', 'bsc' ) ?>
					</button>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<button data-tabs="#details_symbol_tab-3" data-ajax="true" data-api="details_symbol_tab-3"
						data-symbol="<?php echo $symbol ?>"
						class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						<?php _e( 'CHỈ TIÊU TÀI CHÍNH', 'bsc' ) ?>
					</button>
				</li>
				<?php $array_data_GetForecastBussiness = array(
					'lang' => pll_current_language(),
					'symbol' => $symbol,
				);
				$response_GetForecastBussiness = get_data_with_cache( 'GetForecastBussiness', $array_data_GetForecastBussiness, $time_cache );
				if ( $response_GetForecastBussiness ) {
					if ( isset( $response_GetForecastBussiness->d2 ) && ! empty( $response_GetForecastBussiness->d2 ) ) { ?>
						<li
							class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
							<?php if ( $check_logout ) {
								?>
								<a href="<?php echo bsc_url_sso() ?>"
									class="none-tab has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
									<?php echo svgClass( 'star', '', '', 'w-6 h-6 shrink-0' ) ?>
									<?php _e( 'BSC DỰ PHÓNG', 'bsc' ) ?>
								</a>
								<?php
							} else { ?>
								<button data-tabs="#details_symbol_tab-4" data-ajax="true" data-api="details_symbol_tab-4"
									data-symbol="<?php echo $symbol ?>"
									class="has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
									<?php echo svgClass( 'star', '', '', 'w-6 h-6 shrink-0' ) ?>
									<?php _e( 'BSC DỰ PHÓNG', 'bsc' ) ?>
								</button>
							<?php } ?>
						</li>
						<?php
					}
				} ?>
			</ul>
			<div class="tab-content block" id="details_symbol_tab-1">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:flex 2xl:gap-[90px] xl:gap-10 gap-6 lg:space-y-0 space-y-10' : '' ?> mt-10">
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-[744px] lg:max-w-[56%] w-full' : 'w-full' ?>">
						<h2
							class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-4' ?>">
							<?php _e( 'BIỂU ĐỒ GIÁ', 'bsc' ) ?>
						</h2>
						<div
							class="rounded-2xl bg-[#F5FCFF] relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:py-8 lg:px-6 p-5 h-[84%] lg:min-h-0 min-h-[400px] ' : 'p-4 -mx-5 min-h-[340px]' ?>">
							<iframe width='100%' height='100%' class="lg:static absolute inset-0 w-full h-full"
								src='https://itrade.bsc.com.vn:8080/?symbol=<?php echo $symbol ?>&screen=tradingview&theme=light'
								frameBorder='0' allowFullScreen></iframe>
						</div>
					</div>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'mt-[50px]' ?>">
						<h2
							class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
							<?php _e( 'LỊCH SỬ GIAO DỊCH', 'bsc' ) ?>
						</h2>
						<ul class="flex items-center flex-wrap gap-[12px] font-semibold mb-4 customtab-nav text-xs">
							<li>
								<button data-tabs="#lichsugiaodich"
									class="active inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
									<?php _e( 'Lịch sử GD', 'bsc' ) ?>
								</button>
							</li>
							<li>
								<button data-tabs="#ndtnn" data-ajax="true" data-api="ndtnn"
									data-symbol="<?php echo $symbol ?>"
									class="inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
									<?php _e( 'NĐTNN', 'bsc' ) ?>
								</button>
							</li>
						</ul>
						<div class="tab-content block bsc-ajax-api" id="lichsugiaodich" data-api="lichsugiaodich"
							data-symbol="<?php echo $symbol ?>">
							<div class="hidden">
								<div role="status" class="mt-10">
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
								<div role="status" class="mt-10">
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
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:flex lg:gap-5 lg:space-y-0 space-y-5 flex-wrap' : '' ?>">
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:w-[386px] xl:max-w-[29%] w-full xl:mb-0 mb-5' : 'w-full' ?>">
							<h2
								class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' mb-10' : 'mb-6' ?>">
								<?php _e( 'BÁO CÁO PHÂN TÍCH', 'bsc' ) ?>
							</h2>
							<div class="xl:space-y-4 md:space-y-0 space-y-4 xl:block md:grid md:grid-cols-2 gap-4 bsc-ajax-api" data-api="sg_bcpt" data-symbol="<?php echo $symbol ?>">
								<div class="hidden">
									<div role="status" class="mt-10">
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
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:w-[414px] xl:max-w-[31%] lg:w-1/2' : 'mt-[50px]' ?>">
							<h2
								class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' mb-10' : 'mb-6' ?>">
								<?php _e( 'CƠ CẤU CỔ ĐÔNG', 'bsc' ) ?>
							</h2>
							<div class="lg:space-y-4 md:space-y-0 lg:block md:grid md:grid-cols-2 md:gap-5 space-y-4 bsc-ajax-api" data-api="sg_cccd" data-symbol="<?php echo $symbol ?>">
								<div class="hidden">
									<div role="status" class="mt-10">
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
						<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'mt-14' ?>">
							<h2
								class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' mb-10' : 'mb-6' ?>">
								<?php _e( 'DOANH NGHIỆP CÙNG NGÀNH', 'bsc' ) ?>
							</h2>
							<div class="rounded-tl-lg rounded-tr-lg overflow-hidden max-h-[580px] overflow-y-auto scroll-bar-custom relative bsc-ajax-api"
								data-api="sg_dncn" data-symbol="<?php echo $symbol ?>">
								<div class="hidden">
									<div role="status" class="mt-10">
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
								<?php _e( 'Đơn vị Vốn hóa (Triệu đồng)', 'bsc' ) ?>
							</p>
						</div>
					</div>
				</div>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
					<div
						class="flex justify-between items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
						<h2 class="heading-title"><?php _e( 'TIN TỨC VỀ MÃ CỔ PHIẾU', 'bsc' ) ?>
						</h2>
						<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
							<?php if ( get_field( 'cdc7_page_tin_tuc_ma_co_phan', 'option' ) ) { ?>
								<a href="<?php echo check_link( get_field( 'cdc7_page_tin_tuc_ma_co_phan', 'option' ) ) ?>?mck=<?php echo $symbol ?>"
									class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php _e( 'Xem thêm', 'bsc' ) ?>
								</a>
							<?php } ?>

						<?php } ?>
					</div>
					<div class="grid lg:grid-cols-2 grid-cols-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-x-9 gap-y-[46px]' : 'gap-4' ?> bsc-ajax-api"
						data-api="sg_ttvmcp" data-symbol="<?php echo $symbol ?>">
						<div class="hidden">
							<div role="status" class="mt-10">
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
					<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
						<?php if ( get_field( 'cdc7_page_tin_tuc_ma_co_phan', 'option' ) ) { ?>
							<div class="mt-8">
								<a href="<?php echo check_link( get_field( 'cdc7_page_tin_tuc_ma_co_phan', 'option' ) ) ?>?mck=<?php echo $symbol ?>"
									class="btn-base-yellow py-[12px] pl-4 pr-6 flex justify-center items-center gap-x-3 text-xs">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php _e( 'Xem thêm', 'bsc' ) ?>
								</a>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="tab-content hidden" id="details_symbol_tab-2">
				<div class="hidden">
					<div role="status" class="mt-10">
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
			<div class="tab-content hidden" id="details_symbol_tab-3" data-chart="profitChart,reinitializeTooltips">
				<div class="hidden">
					<div role="status" class="mt-10">
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
					<div role="status" class="mt-10">
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
<div class="trigger-button_document " data-modal-target="document-modal" data-modal-toggle="document-modal"></div>
<?php
get_footer();
