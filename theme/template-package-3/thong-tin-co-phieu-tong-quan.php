<?php

/**
Template Name:  [Package 3] Thông tin cổ phiếu (tổng quan)
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<h2
				class="font-bold mb-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' xl:text-[32px] text-2xl' : 'md:text-xl text-lg' ?>">
				CÔNG TY CỔ PHẦN CHỨNG KHOÁN BIDV
			</h2>
			<p
				class="font-bold text-opacity-50 text-black <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?>">
				BIDV Securities Joint Stock
				Company</p>
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-10 flex gap-5' : 'mt-8 block_slider block_slider-show-1 fli-dots-blue dot-30 block_sameheight' ?>">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[547px] max-w-[41%]' : 'w-full block_slider-item sameheight_item' ?>">
					<div
						class="bg-gradient-blue-to-bottom-100 rounded-xl h-full space-y-6 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-10 py-6' : 'p-6' ?>">
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex items-center justify-between' ?>">
							<div
								class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6' : 'gap-4' ?>">
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[90px] [90px] p-5' : 'w-14 h-14 p-4' ?> bg-white rounded-full flex items-center justify-center">
									<?php echo svgClass( 'icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9' ) ?>
								</div>
								<div class="flex flex-col">
									<h4
										class="font-bold lg:text-[32px] text-2xl uppercase leading-normal">
										BSI
									</h4>
									<p
										class="uppercase text-paragraph <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?>">
										HOSE
									</p>

								</div>
							</div>
							<?php if ( wp_is_mobile() && bsc_is_mobile() )
							{ ?>
								<div class="flex-col gap-2">
									<div class="flex gap-[12px] data_number">
										<div class="text-2xl font-bold text-[#FE5353]">
											43.30
										</div>
										<div class="flex flex-col text-[#FE5353] text-xs">
											<p>
												-0.20%
											</p>
											<p>
												-0.46%
											</p>
										</div>
									</div>
									<p class="time-update mt-1 sm:text-xs text-xxs">
										Cập nhật lúc 14:45 UTC_7
									</p>

								</div>
							<?php } ?>
						</div>
						<div class="flex items-center gap-7">
							<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
							{ ?>
								<div class="lg:w-[172px] lg:max-w-[37%]">
									<div class="flex-col gap-2">
										<div class="flex gap-[14px] data_number">
											<div class="lg:text-[40px] text-4xl font-bold">
												43.30
											</div>
											<div class="flex flex-col text-[#FE5353]">
												<p>
													-0.20%
												</p>
												<p>
													-0.46%
												</p>
											</div>
										</div>
										<p class="time-update mt-1">
											Cập nhật lúc 14:45 UTC_7
										</p>

									</div>
								</div>
							<?php } ?>
							<div
								class="flex-1 grid grid-cols-3 font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-5' : 'gap-6' ?>">
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Trần
										</p>
										<p class="font-bold text-[#7F1CCD]">
											49.95
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Cao nhất
										</p>
										<p class="font-bold text-black">
											47.70
										</p>
									</div>
								</div>
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Tham chiếu
										</p>
										<p class="font-bold text-[#FFB81C]">
											49.95
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Thấp nhất
										</p>
										<p class="font-bold text-black">
											46.65
										</p>
									</div>
								</div>
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Sàn
										</p>
										<p class="font-bold text-[#1ABAFE]">
											43.45
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Trung bình
										</p>
										<p class="font-bold text-black text-lg">
											47.31
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[433px] max-w-[33%]' : 'w-full block_slider-item sameheight_item' ?>">
					<div
						class="bg-[#E8F5FF] rounded-xl h-full font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:px-8 px-6 lg:py-6 py-5' : 'p-4' ?>">
						<div
							class="border-b border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex items-center justify-between mb-6 pb-6' : 'mb-3 pb-3' ?>">
							<p class="text-paragraph text-opacity-70 text-xs">
								<?php _e( 'Ngành', 'bsc' ) ?>
							</p>
							<p class="font-bold 2xl:text-lg uppercase">
								HÀNG CÔNG NGHIỆP & XUẤT KHẨU
							</p>
						</div>
						<div
							class="flex gap-[12px] items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : 'mb-3' ?>">
							<p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
								<?php _e( 'KLGD trung bình 10 ngày', 'bsc' ) ?>
							</p>
							<p
								class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : '' ?>">
								6,800
							</p>
						</div>
						<div
							class="grid grid-cols-3  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4' : 'gap-3' ?>">

							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
								<p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
									<?php _e( 'P/E', 'bsc' ) ?>
								</p>
								<p
									class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : '' ?>">
									23.73
								</p>
							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
								<p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
									<?php _e( 'Vốn hóa (tỷ đồng)', 'bsc' ) ?>
								</p>
								<p
									class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : '' ?>">
									1,600
								</p>
							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">

							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
								<p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
									<?php _e( 'P/B', 'bsc' ) ?>
								</p>
								<p
									class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : '' ?>">
									24,191
								</p>
							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
								<p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
									<?php _e( 'ROE', 'bsc' ) ?>
								</p>
								<p
									class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : '' ?>">
									2.12
								</p>
							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-2' : 'space-y-1' ?>">
								<p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
									<?php _e( 'ROE', 'bsc' ) ?>
								</p>
								<p
									class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : '' ?>">
									2.12
								</p>
							</div>
						</div>
					</div>
				</div>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'w-full block_slider-item sameheight_item' ?>">
					<div
						class="bg-[#E8F5FF] rounded-xl lg:px-8 px-5 lg:py-6 py-5 font-Helvetica flex flex-col h-full">
						<div class="flex items-center justify-between mb-6">
							<h3 class="font-bold">
								KHUYẾN NGHỊ
							</h3>
							<p
								class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full text-[#F90] bg-gradient-yellow-50">
								<?php echo svg( 'gold', '24', '24' ) ?>
								Hạng A
							</p>
						</div>
						<div
							class="mt-auto <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-4' : 'space-y-5' ?>">
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Analyst:
								</p>
								<p class="font-bold text-primary-300">
									Trịnh Tuấn Ngọc
								</p>
							</div>
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Khuyến nghị:
								</p>
								<p
									class="inline-block rounded-full px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold">
									Mua
								</p>
							</div>
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Danh mục:
								</p>
								<p
									class="inline-block rounded-full px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold">
									Mua
								</p>
							</div>
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Ngày cập nhật
								</p>
								<p class="font-bold">
									18/11/1998
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-16 mb-[50px]' ?>">
		<div class="container">
			<ul
				class="flex items-center border-b border-[#D3D3D3] nav-ttcp customtab-nav sticky top-0 z-20 bg-white whitespace-nowrap overflow-x-auto <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:gap-[100px] gap-10' : 'gap-8' ?>">
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<button data-tabs="#tab-1"
						class="active inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						TỔNG QUAN
					</button>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<button data-tabs="#tab-2"
						class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						BÁO CÁO TÀI CHÍNH
					</button>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<button data-tabs="#tab-3"
						class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						CHỈ TIÊU TÀI CHÍNH
					</button>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<button data-tabs="#tab-4"
						class="has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						<?php echo svgClass( 'star', '', '', 'w-6 h-6 shrink-0' ) ?>
						BSC DỰ PHÓNG
					</button>
				</li>
			</ul>
			<div class="tab-content block" id="tab-1">
				<div
					class="mt-10 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-[90px]' : '' ?>">
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[744px] max-w-[56%]' : 'w-full' ?>">
						<h2
							class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-4' ?>">
							BIỂU ĐỒ GIÁ
						</h2>
						<div
							class="rounded-2xl bg-[#F5FCFF] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:py-8 lg:px-6 p-5' : 'p-4 -mx-5' ?>">
							<ul
								class="flex items-center justify-between font-Helvetica font-medium mb-6 px-4">
								<li>
									<button type="button"
										class="active [&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
										1 giờ
									</button>
								</li>
								<li>
									<button type="button"
										class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
										12 giờ
									</button>
								</li>
								<li>
									<button type="button"
										class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
										1 ngày
									</button>
								</li>
								<li>
									<button type="button"
										class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
										1 tháng
									</button>
								</li>
								<li>
									<button type="button"
										class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
										3 tháng
									</button>
								</li>
								<li>
									<button type="button"
										class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
										6 tháng
									</button>
								</li>
							</ul>
							<div class="font-Helvetica" id="chart-candle">

							</div>
						</div>
					</div>
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'mt-[50px]' ?>">
						<h2
							class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
							LỊCH SỬ GIAO DỊCH
						</h2>
						<ul
							class="flex items-center flex-wrap gap-[12px] font-semibold mb-4 text-xs">
							<li>
								<a href=""
									class="active inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
									Lịch sử GD
								</a>
							</li>
							<li>
								<a href=""
									class="inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
									NĐTNN
								</a>
							</li>
						</ul>
						<div
							class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center">
							<div class="overflow-x-auto scroll-bar-custom scroll-bar-x">
								<div
									class="flex bg-primary-300 text-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:w-full w-max' ?>">
									<div
										class="min-w-[90px] pl-4 pr-3 py-2 text-left sm:max-w-[19%]">
										Nhóm
									</div>
									<div class="min-w-[152px] px-3 py-2 sm:max-w-[30%]">
										Thay đổi giá
									</div>
									<div class="min-w-[136px] sm:max-w-[27%] px-3 py-2">
										KL khớp lệnh
									</div>
									<div
										class="px-3 py-2 sm:flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[136px]' ?>">
										Tổng GTGD
									</div>
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 7; $i++ )
									{
										?>
										<li
											class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:w-full w-max' ?>">
											<div
												class="min-w-[90px] sm:max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
												16/09
											</div>
											<div
												class="min-w-[152px] sm:max-w-[30%] px-3 py-2 min-h-10 flex items-center justify-between border-r border-[#C9CCD2]">
												<p class="min-w-[30px] text-right">
													46.7
												</p>
												<p
													class="flex items-center gap-1 text-[#1CCD83] font-Helvetica">
													<?php echo svg( 'up', '17', '17' ) ?>
													+0.98%
												</p>
											</div>
											<div
												class="min-w-[136px] sm:max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-end border-r border-[#C9CCD2] text-right pr-10">
												331,200
											</div>
											<div
												class="px-3 py-2 min-h-10 flex items-center justify-end sm:flex-1 pr-8 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[136px]' ?>">
												15,608,000
											</div>
										</li>

										<?php
									}
									?>

								</ul>

							</div>

						</div>
						<div
							class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-4' : 'mt-[12px]' ?>">
							<a href=""
								class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg' : 'text-xs' ?>">
								<?php echo svg( 'arrow-btn', '20', '20' ) ?>
								Xem tất cả
							</a>
							<p class="font-medium text-xs font-Helvetica">
								Đơn vị GTGD: 1000 VNĐ
							</p>
						</div>
					</div>
				</div>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-5' : '' ?>">
						<div
							class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[386px] max-w-[29%]' : 'w-full' ?>">
							<h2
								class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' mb-10' : 'mb-6' ?>">
								BÁO CÁO PHÂN TÍCH
							</h2>
							<div class="space-y-4">
								<?php
								for ( $i = 0; $i < 3; $i++ )
								{
									?>
									<div
										class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
										<div class="flex items-center justify-between mb-4">
											<div class="flex items-center gap-4">
												<a href=""
													class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
													Báo cáo ngành
												</a>

											</div>
											<div class="space-y-1.5 text-right">
												<span
													class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold ">Tích
													cực</span>
												<p class="text-paragraph text-xs font-Helvetica">
													22/10/2024
													2:22:19 CH</p>
											</div>
										</div>
										<h3
											class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
											<a href="" class="line-clamp-2">
												Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
												quỹ_20240808
											</a>
										</h3>
										<div class="flex items-center justify-between">

											<a href=""
												class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105 ml-auto">
												<?php _e( 'Tải xuống', 'bsc' ) ?>
												<?php echo svg( 'download', '20', '20' ) ?>
											</a>
										</div>
									</div>
									<?php
								}
								?>
							</div>
						</div>
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[414px] max-w-[31%]' : 'mt-[50px]' ?>">
							<h2
								class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
								CƠ CẤU CỔ ĐÔNG
							</h2>
							<div class="space-y-4">
								<div
									class="rounded-xl bg-gradient-blue-50 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-6 py-8' : 'p-4' ?>">
									<h4
										class="text-center mb-4 font-bold font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl' : 'text-lg' ?>">
										Tỷ lệ cơ cấu cổ đông
									</h4>
									<div class="relative text-center">
										<div
											class="absolute w-full h-full flex flex-col justify-center font-Helvetica text-xs">
											<p class="text-xxs">
												<?php _e( 'Số lượng cổ phiếu', 'bsc' ) ?>
											</p>
											<p class="font-bold">223.060.701</p>
										</div>
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
									<div
										class="mt-5 mx-auto max-w-[215px] space-y-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
										<div
											class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-primary-300">
											<p>
												Cổ đông lớn
											</p>
											<p>
												86,69%
											</p>
										</div>
										<div
											class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-yellow-100">
											<p>
												Cổ đông khác
											</p>
											<p>
												13,02% 
											</p>
										</div>
									</div>
									<script>

										function setProgress(percent) {
											const circle = document.getElementById('progress-circle');
											const circumference = 454;
											const offset = circumference - (percent / 100) * circumference;
											circle.style.strokeDashoffset = offset;
										}


										setProgress(13); // 13% đường tròn là màu vàng
									</script>
								</div>
								<div
									class="rounded-xl bg-gradient-blue-50 lg:min-h-[234px] lg:flex lg:flex-col lg:justify-center w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-6' : 'p-4' ?>">
									<ul class="font-Helvetica space-y-4">
										<li class="flex items-center justify-between">
											<p>
												KLCP Lưu hành:
											</p>
											<strong class="text-primary-300">
												Trịnh Tuấn Ngọc
											</strong>
										</li>
										<li class="flex items-center justify-between">
											<p>
												Tỷ lệ sở hữu nhà nước (%)
											</p>
											<strong>
												0
											</strong>
										</li>
										<li class="flex items-center justify-between">
											<p>
												Tỷ lệ sở hữu nước ngoài (%)
											</p>
											<strong>
												22,65%
											</strong>
										</li>
										<li class="flex items-center justify-between">
											<p>
												Room nước ngoài
											</p>
											<strong>
												26,35%
											</strong>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'mt-[50px]' ?>">
							<h2
								class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-4' ?>">
								CƠ CẤU CỔ ĐÔNG
							</h2>
							<div
								class="rounded-tl-lg rounded-tr-lg overflow-hidden max-h-[580px] overflow-y-auto scroll-bar-custom relative">
								<table
									class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:px-3 prose-th:py-4 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3 prose-thead:sticky prose-thead:top-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
									<thead>
										<tr>
											<th class="!pl-5 cursor-pointer">Mã CK
												<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
											</th>

											<th class="filter-table cursor-pointer filter-table">
												Vốn hóa
												<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
											</th>

											<th class="filter-table cursor-pointer filter-table">
												PE
												<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
											</th>
											<th
												class="filter-table cursor-pointer filter-table text-center !pl-5">
												PB
												<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
											</th>
										</tr>
									</thead>
									<tbody class="prose-tr:border-b prose-tr:border-[#C9CCD2]">
										<?php
										for ( $i = 0; $i < 3; $i++ )
										{
											?>
											<tr>
												<td class="!pl-5"><a href="">A32</a></td>
												<td>36,80</td>
												<td>301,24</td>
												<td class="text-center">6,99</td>
											</tr>
											<tr>
												<td class="!pl-5"><a href="">A33</a></td>
												<td>37,80</td>
												<td>302,24</td>
												<td class="text-center">7,99</td>
											</tr>
											<tr>
												<td class="!pl-5"><a href="">A34</a></td>
												<td>38,80</td>
												<td>303,24</td>
												<td class="text-center">8,99</td>
											</tr>
											<?php
										}
										?>

									</tbody>
								</table>
							</div>
							<p class="text-right mt-4 italic text-xs pr-7 font-Helvetica">
								Đơn vị Vốn hóa (Triệu đồng)
							</p>
						</div>
					</div>
				</div>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
					<h2
						class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
						TIN TỨC VỀ MÃ CỔ PHIẾU
					</h2>
					<div
						class="grid md:grid-cols-2 grid-cols-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-x-9 gap-y-[46px]' : 'gap-4' ?>">
						<?php
						for ( $i = 0; $i < 6; $i++ )
						{
							?>
							<div class="news_service-item">
								<div class="flex items-center">
									<div
										class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
										<p
											class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
											2024
										</p>
										<div
											class="flex-1 flex flex-col justify-center items-center text-xl font-bold bg-primary-50 w-full">
											<p>20</p>
											<p class="text-primary-300 text-xs font-medium">
												Tháng 4
											</p>
										</div>
									</div>
									<div class="md:ml-[30px] ml-4">
										<a href=""
											class="block font-bold leading-normal mb-2 transition-all duration-500 hover:text-green <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg line-clamp-2' : 'line-clamp-3' ?>">
											Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
											trả lãi, gốc trái phiếu mã BSI32301
										</a>
										<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
										{ ?>
											<div
												class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
												BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới
												trái phiếu chính phủ trên HNX. Năm 2020, BSC giữ vững vị
												thế Top 10 công ty chứng khoán có thị phần môi giới cổ
												phiếu, chứng chỉ quỹ và chứng quyền có đảm bảo lớn nhất
												tại HoSE
											</div>
										<?php } ?>
									</div>
								</div>

							</div>
							<?php
						}
						?>
					</div>

					<?php if ( wp_is_mobile() && bsc_is_mobile() )
					{ ?>
						<div class="mt-8">
							<a href="#"
								class="btn-base-yellow py-[12px] pl-4 pr-6 flex justify-center items-center gap-x-3 text-xs">
								<?php echo svg( 'arrow-btn', '16', '16' ) ?>
								Xem chi tiết
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="tab-content hidden" id="tab-2">
				<div class="list__content">
					<div
						class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-16 mb-[30px]' : 'mt-[38px] mb-6' ?>">
						<ul
							class="flex items-center sm:gap-5 gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
							<li
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:flex-auto flex-1' ?>">
								<a href=""
									class="active sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
									Quý
								</a>
							</li>
							<li
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'sm:flex-auto flex-1' ?>">
								<a href=""
									class="sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
									Năm
								</a>
							</li>
						</ul>
						<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
						{ ?>
							<a href=""
								class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
								Xem chi tiết
								<?php echo svg( 'arrow-btn', '12', '12' ) ?>
							</a>
						<?php } ?>
					</div>
					<ul
						class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'justify-end gap-[27px] flex-wrap mr-6 mb-6' : 'overflow-x-auto whitespace-nowrap gap-8 mb-4 text-xs' ?>">
						<?php
						for ( $i = 18; $i < 24; $i++ )
						{
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
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-16' : 'space-y-10' ?>">
						<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
							<div class="overflow-x-auto whitespace-nowrap sm:text-base text-xs">
								<table
									class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:text-left
								 font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-th:p-4 prose-td:py-4 prose-td:px-5' : 'prose-th:p-[12px] prose-td:p-[12px]' ?>">
									<thead>
										<tr>
											<th colspan="7">Kết quả kinh doanh</th>
										</tr>
									</thead>
									<tbody class="text-right">
										<?php
										for ( $i = 0; $i < 2; $i++ )
										{
											?>
											<tr class="[&:nth-child(even)]:bg-[#EBF4FA] lg:prose-td:w-[calc(100%/8)]">
												<td class="lg:min-w-[231px] lg:!w-1/4 text-left">Lợi nhuận sau thuế của công ty mẹ	
												</td>
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
										<?php
										for ( $i = 0; $i < 2; $i++ )
										{
											?>
											<tr class="[&:nth-child(even)]:bg-[#EBF4FA] lg:prose-td:w-[calc(100%/8)]">
												<td class="lg:min-w-[231px] lg:!w-1/4 text-left">Tổng lợi nhuận KT trước
													thuế</td>
												<td>2,174,230,121.89</td>
												<td>3,384,568,877.75</td>
												<td>3,261,215,356.87</td>
												<td>3,733,225,669.77</td>
												<td>3,412,385,133.84</td>
												<td>912,577,380</td>
											</tr>
											<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
							<div class="overflow-x-auto whitespace-nowrap sm:text-base text-xs">
								<table
									class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:text-left
								  font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-th:p-4 prose-td:py-4 prose-td:px-5' : 'prose-th:p-[12px] prose-td:p-[12px]' ?>">
									<thead>
										<tr>
											<th colspan="7">Cân đối kế toán</th>
										</tr>
									</thead>
									<tbody class="text-right">
										<?php
										for ( $i = 0; $i < 4; $i++ )
										{
											?>
											<tr class="[&:nth-child(even)]:bg-[#EBF4FA] lg:prose-td:w-[calc(100%/8)]">
												<td class="lg:min-w-[231px] lg:!w-1/4 text-left">Tổng tài sản</td>
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
					<?php if ( wp_is_mobile() && bsc_is_mobile() )
					{ ?>
						<div class="mt-8">
							<a href="#"
								class="btn-base-yellow py-[12px] pl-4 pr-6 flex justify-center items-center gap-x-3 text-xs">
								<?php echo svg( 'arrow-btn', '16', '16' ) ?>
								Xem chi tiết
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="tab-content hidden" id="tab-3">
				<div class="list__content">
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-16 mb-10' : 'mt-[38px] mb-6' ?>">
						<ul class="flex items-center sm:gap-5 gap-2">
							<li
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
								<a href=""
									class="active sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
									Quý
								</a>
							</li>
							<li
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
								<a href=""
									class="sm:inline-block block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px]' : 'rounded-lg' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
									Năm
								</a>
							</li>
						</ul>
					</div>
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:space-y-[100px] space-y-14' : 'space-y-14' ?>">
						<article>
							<div
								class="flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-6 mb-[30px]' : 'gap-[12px] mb-6' ?>">
								<h2 class="heading-title">
									LỢI NHUẬN
								</h2>
								<p
									class="inline-flex items-center px-4 font-bold gap-1.5 rounded-full text-[#F90] bg-gradient-yellow-50 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-1.5' : 'text-xs py-1' ?>">
									<?php echo svgClass( 'gold', '', '', 'sm:w-6 sm:h-6 w-5 h-5' ) ?>
									Hạng A
								</p>
							</div>
							<div
								class="rounded-lg overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-8' ?>">
								<div class="overflow-x-auto whitespace-nowrap">
									<table
										class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
										<thead>
											<tr>
												<th
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
													Mã CK</th>
												<th>Biên LNG</th>
												<th>Biên LNTT</th>
												<th>Biên LNST</th>
												<th>ROE</th>
											</tr>
										</thead>
										<tbody>
											<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
												<td
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-9' : '!pl-4' ?>">
													<a href="">BSI</a>
												</td>
												<td>46,44%</td>
												<td>37,80%</td>
												<td>30,67%</td>
												<td>9,24%</td>
											</tr>

										</tbody>
									</table>

								</div>
							</div>
							<div
								class="grid font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-3 gap-5' : 'gap-8' ?>">
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'space-y-4' ?>">
									<h4
										class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold md:text-lg">
										BIÊN LỢI NHUẬN GỘP (%)
									</h4>
									<div id="profit-chart-1" class="legend-gap">

									</div>
								</div>
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'space-y-4' ?>">
									<h4
										class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold md:text-lg">
										BIÊN LỢI NHUẬN SAU THUẾ (%)
									</h4>
									<div id="profit-chart-2" class="legend-gap">

									</div>
								</div>
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'space-y-4' ?>">
									<h4
										class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold md:text-lg">
										ROE (%)
									</h4>
									<div id="profit-chart-3" class="legend-gap">

									</div>
								</div>
							</div>
						</article>
						<article>
							<div class="flex items-center gap-6 mb-[30px]">
								<h2 class="heading-title">
									SỨC KHỎE
								</h2>
								<p
									class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full text-[#4F4F4F] bg-gradient-sliver-50">
									<?php echo svg( 'sliver', '24', '24' ) ?>
									Hạng B
								</p>
							</div>
							<div class="rounded-lg overflow-hidden mb-10">
								<table
									class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
									<thead>
										<tr>
											<th class="!pl-9">Mã CK</th>
											<th>CSTT nhanh</th>
											<th>CSTT hiện tại</th>
											<th>CSTT lãi vay</th>
											<th>Nợ vay TTS</th>
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
									TĂNG TRƯỞNG
								</h2>
								<p
									class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full text-[#A87E5C] bg-gradient-bronze-50">
									<?php echo svg( 'bronze', '24', '24' ) ?>
									Hạng C
								</p>
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
									HIỆU QUẢ HOẠT ĐỘNG
								</h2>
								<p
									class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full text-[#869299] bg-gradient-sliver-100">
									<?php echo svg( 'sliver-2', '24', '24' ) ?>
									Hạng D
								</p>
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
				</div>
			</div>
			<div class="tab-content hidden" id="tab-4">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-16 flex items-end justify-between' : 'mt-[50px] space-y-4' ?>">
					<div
						class="flex items-center relative pl-6 after:absolute after:w-1 after:h-full after:bg-primary-300 after:top-0 after:left-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-10' : 'gap-6' ?>">
						<div class="flex flex-col gap-1">
							<p class="font-Helvetica text-xs">Giá mục tiêu</p>
							<strong class="lg:text-[32px] text-2xl text-primary-300">50.300</strong>
						</div>
						<span
							class="inline-block  text-center  px-6 text-[#30D158] bg-[#D6F6DE] font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl rounded-lg min-w-[140px] py-2' : 'text-lg rounded-[35px] min-w-[100px] py-1.5' ?>">
							Mua
						</span>
					</div>
					<a href=""
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 md:text-lg text-xs font-Helvetica">
						Xem chi tiết
						<?php echo svg( 'arrow-btn', '12', '12' ) ?>
					</a>
				</div>
				<div
					class="rounded-lg overflow-hidden relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-10' : 'mt-6' ?>">
					<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
					<div class="overflow-x-auto whitespace-nowrap">
						<table
							class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold  prose-th:text-left  font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-th:p-4 prose-td:p-4' : 'prose-td:p-[12px] prose-th:p-[12px] text-xs' ?>">
							<thead>
								<tr>
									<th></th>
									<th
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
										2021</th>
									<th
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
										2022</th>
									<th
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
										2023</th>
									<th
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
										2024</th>
									<th
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
										2025</th>
								</tr>
							</thead>
							<tbody>
								<?php
								for ( $i = 0; $i < 11; $i++ )
								{
									?>
									<tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
										<td
											class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '!pl-[30px]' : '' ?>">
											Doanh thu (tỷ đồng)</td>
										<td
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
											4,380</td>
										<td
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
											4,899</td>
										<td
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
											4,495</td>
										<td
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
											4,893</td>
										<td
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'min-w-[70px] !text-right' ?>">
											5,277</td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>

					</div>
					<!-- Nếu đã đăng nhập thì bỏ khối nút đăng nhập -->
					<!-- <div
						class="absolute w-full h-full inset-0 z-10 flex flex-col justify-center items-center">
						<a href="#"
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-8 px-4 2xl:py-4 py-2  relative transition-all duration-500 font-bold rounded-xl">
							Đăng nhập
						</a>
						<p class="italic mt-4 font-normal">
							Để xem chi tiết danh mục
						</p>
					</div> -->
				</div>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();
