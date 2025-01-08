<?php

/**
Template Name:[Package 3] Trung tâm phân tích nghiên cứu
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-14 xl:mb-pb-[110px] mb-20' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:flex 2xl:gap-12 gap-10 lg:space-y-0 space-y-10' : '' ?>">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-[745px] lg:max-w-[56%]' : 'w-full' ?>">
					<h2
						class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8' : 'mb-6' ?>">
						Danh mục khuyến nghị
					</h2>
					<ul
						class="customtab-nav flex items-center flex-wrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 mb-6' : 'gap-2 mb-4' ?>">
						<li>
							<button data-tabs="#tab-1"
								class="active inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
								BSC10
							</button>
						</li>
						<li>
							<button data-tabs="#tab-2"
								class="inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
								BSC30
							</button>
						</li>
						<li>
							<button data-tabs="#tab-3"
								class="inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
								BSC50
							</button>
						</li>

					</ul>
					<?php
					for ( $i = 1; $i < 4; $i++ ) {
						?>
						<div class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>"
							id="tab-<?php echo $i ?>">
							<div
								class="rounded-lg overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' relative 2xl:pt-[76.2416%] pt-[80%] w-full' : 'text-xs' ?>">
								<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'absolute w-full h-full inset-0' : 'overflow-x-auto scroll-bar-custom scroll-bar-x' ?>">
									<ul
										class="flex items-center flex-nowrap font-bold text-center text-white bg-primary-300 prose-li:py-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[7px] gap-5 2xl:px-[30px] px-5 justify-between' : 'gap-[12px] sm:w-full w-max' ?>">
										<li
											class="whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[8%]' : 'w-[8%] min-w-[60px]' ?>">
											Mã</li>
										<li
											class="whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[96px]' ?>">
											Khuyến nghị</li>
										<li
											class="whitespace-nowrap text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[70px]' ?>">
											Giá</li>
										<li
											class="whitespace-nowrap text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[70px]' ?>">
											Mục tiêu</li>
										<li
											class="whitespace-nowrap text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'w-[16%] min-w-[96px]' ?>">
											Upside</li>
									</ul>
									<div
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'overflow-y-auto scroll-bar-custom max-h-[90%]' : '' ?>">
										<?php
										for ( $j = 0; $j < 12; $j++ )
										{
											?>
											<ul
												class="flex text-center justify-between items-center [&:nth-child(odd)]:bg-white [&:nth-child(even)]:bg-primary-50 whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:px-[30px] px-5 py-4 gap-5' : 'gap-[12px] sm:w-full w-max' ?>">
												<li
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[8%]' : 'p-3 min-w-[60px] w-[8%]' ?> font-medium">
													CTG</li>
												<li
													class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'p-3 min-w-[96px] w-[16%]' ?> font-medium">
													<span
														class="inline-block bg-[#D6F6DE] rounded-[45px] px-4 py-0.5 text-[#30D158] p-3 min-w-[78px]">Mua</span>
												</li>
												<li
													class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'p-3 min-w-[70px] w-[16%]' ?> font-bold text-[#1CCD83]">
													35.05</li>
												<li
													class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'p-3 min-w-[70px] w-[16%]' ?> font-medium">
													43.65</li>
												<li
													class="text-right <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[16%]' : 'p-3 min-w-[96px] w-[16%]' ?> font-bold text-[#1CCD83]">
													+24.45%</li>
											</ul>
											<?php
										}
										?>

										</div>

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
							<?php
					}
					?>
				</div>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'mt-[50px]' ?>">
					<h2
						class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:mb-14 mb-6' : 'mb-6' ?>">
						Thông tin phân tích mới nhất
					</h2>
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex justify-between items-center mb-4' : 'text-right mb-1' ?>">
						<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
								<p class="uppercase text-primary-300 font-bold">
									Dự báo kinh tế vĩ mô Việt Nam 2024-2025
								</p>
						<?php } ?>
						<a href=""
							class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
							<?php echo svg( 'arrow-btn', '20', '20' ) ?>
							Xem chi tiết
						</a>
					</div>

					<div class="flex flex-col">
						<div
							class="font-medium text-xs <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-lg flex overflow-hidden' : 'flex overflow-x-auto snap-x snap-mandatory' ?>">
							<div
								class="text-primary-300 font-medium  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'border-white border-r-[4px] w-[48.8%]' : 'min-w-full snap-start' ?>">
								<div
									class="text-right font-medium bg-[#EBF4FA] min-h-[58px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-[30px] pb-[13px] mb-1.5 pr-3' : 'py-1.5 px-5 flex flex-col justify-center' ?>">
									<p>
										2023
									</p>

								</div>
								<div
									class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div
										class="w-[70%] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										GDP (YoY%)
									</div>
									<div
										class="flex-1 text-right pr-3">
										<p>6.1</p>
									</div>
								</div>
								<div
									class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div
										class="w-[70%] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										CPI trung bình (YoY%)
									</div>
									<div
										class="flex-1 text-right pr-3">
										<p>6.1</p>
									</div>
								</div>
								<div
									class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div
										class="w-[70%] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										Xuất khẩu (YoY%)
									</div>
									<div
										class="flex-1 text-right pr-3">
										<p>6.1</p>
									</div>
								</div>
								<div
									class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div
										class="w-[70%] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										Nhập khẩu (YoY%)
									</div>
									<div
										class="flex-1 text-right pr-3">
										<p>6.1</p>
									</div>
								</div>
								<div
									class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div
										class="w-[70%] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-semibold">
										LSĐH (YoY%)
									</div>
									<div
										class="flex-1 text-right pr-3">
										<p>6.1</p>
									</div>
								</div>
								<div
									class="flex gap-1 items-center min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
									<div
										class="w-[70%] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-2 py-1' : 'pl-2 py-2' ?> font-bold">
										USD/VND LNH trung bình
									</div>
									<div
										class="flex-1 text-right pr-3 font-semibold">
										<p>23,839</p>
									</div>
								</div>
							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'min-w-full snap-start' ?>">
								<div class="grid grid-cols-2 text-center">
									<div class="text-[#FF0017]">
										<div
											class="min-h-[58px] bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pb-[6px] pt-[12px] mb-1.5' : 'py-1.5 px-5' ?>">
											<p class="font-semibold mb-1">
												Kịch bản tiêu cực
											</p>
											<div class="grid grid-cols-2 font-semibold">
												<p>2024</p>
												<p>2025</p>
											</div>
										</div>
										<?php
										for ( $i = 0; $i < 5; $i++ ) {
											?>
												<div
													class="grid grid-cols-2 gap-2 text-center items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5' : 'py-2' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
													<p>6.1</p>
													<p>5.25</p>
												</div>
												<?php
										}
										?>
										<div
											class="grid grid-cols-2 gap-2 text-center items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5' : 'py-2' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA] font-semibold">
											<p>22,842</p>
											<p>23,839</p>
										</div>
									</div>
									<div class="text-[#30D158]">
										<div
											class="min-h-[58px] bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pb-[6px] pt-[12px] mb-1.5' : 'py-1.5 px-5' ?>">
											<p class="font-semibold mb-1">
												Kịch bản tích cực
											</p>
											<div class="grid grid-cols-2 font-semibold">
												<p>2024</p>
												<p>2025</p>
											</div>
										</div>
										<?php
										for ( $i = 0; $i < 5; $i++ ) {
											?>
												<div
													class="grid grid-cols-2 gap-2 text-center items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5' : 'py-2' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA]">
													<p>6.1</p>
													<p>5.25</p>
												</div>
												<?php
										}
										?>
										<div
											class="grid grid-cols-2 gap-2 text-center items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-0.5' : 'py-2' ?> min-h-[30px] [&:nth-child(odd)]:bg-[#EBF4FA] font-semibold">
											<p>22,842</p>
											<p>23,839</p>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-6' : 'mt-[50px]' ?>">
						<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
							class="rounded-[10px] overflow-hidden pt-[55.576%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
							<img loading="lazy"
								src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video2.png"
								alt="" class="absolute w-full h-full inset-0 object-cover">
							<div
								class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
								<?php echo svgClass( 'play', '', '', ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[62px] h-[62px]' : 'w-[38px] h-[38px]' ) ?>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<div
				class="rounded-[10px] bg-gradient-blue-to-right-100 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:flex items-center gap-4 px-6 py-12 lg:space-y-0 space-y-5' : 'p-6' ?>">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-[345px] lg:max-w-[33.333%]' : 'mb-6' ?>">
					<h2
						class="uppercase font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-[28px] !leading-[1.57]' : 'text-[22px]' ?>">
						các mã được khácH hàng tìm kiếm nhiều nhất
					</h2>
				</div>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1 flex lg:justify-end items-center flex-wrap gap-6' : 'grid grid-cols-3 gap-[12px]' ?>">
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 py-3 px-[12px]' : 'gap-3 py-2 px-3 text-xs justify-center' ?>">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 py-3 px-[12px]' : 'gap-3 py-2 px-3 text-xs justify-center' ?>">
						<span>
							VNM
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 py-3 px-[12px]' : 'gap-3 py-2 px-3 text-xs justify-center' ?>">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 py-3 px-[12px]' : 'gap-3 py-2 px-3 text-xs justify-center' ?>">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 py-3 px-[12px]' : 'gap-3 py-2 px-3 text-xs justify-center' ?>">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#FE5353] text-white font-bold items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-4 py-3 px-[12px]' : 'gap-3 py-2 px-3 text-xs justify-center' ?>">
						<span>
							VNM
						</span>
						<span>
							-0.1%
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:mt-[125px] xl:mb-[100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<div
				class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex justify-between items-center mb-10' : 'mb-6' ?>">
				<h2 class="heading-title">Báo cáo phân tích mới nhất</h2>
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
						<a href=""
							class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
							<?php echo svg( 'arrow-btn', '16', '16' ) ?>
							<?php _e( 'Xem tất cả', 'bsc' ) ?>
						</a>
				<?php } ?>
			</div>

			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
					<div class="lg:flex 2xl:gap-[70px] gap-10 lg:space-y-0 space-y-10">
						<div class="lg:w-[843px] lg:max-w-[66%]">
					<?php } ?>
					<div
						class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-2 gap-x-[23px] gap-y-6' : 'sm:grid-cols-2 grid-cols-1 gap-4' ?>">
						<?php
						for ( $i = 0; $i < 6; $i++ ) {
							?>
							<div
								class="rounded-[10px] bg-white shadow-base-sm flex flex-col shadow-base-sm <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-6 py-4' : 'p-4' ?>">
								<div
									class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : 'mb-[12px]' ?>">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo vĩ mô tuần
									</a>
									<div class="space-y-1.5 text-right">
										<span
											class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
											cực</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3
									class="font-bold transition-all duration-500 hover:text-primary-300 font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : '' ?>">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
								<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
								{ ?>
									<div class="flex items-center justify-between mt-auto">
										<p class="italic text-paragraph text-xs font-Helvetica">
											68 Lượt tải xuống
										</p>
										<a href=""
											class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
											<?php _e( 'Tải xuống', 'bsc' ) ?>
											<?php echo svg( 'download', '20', '20' ) ?>
										</a>
									</div>
								<?php } ?>
							</div>
							<?php
						}
						?>


					</div>
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
						</div>
				<?php } ?>
				<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
						<a href=""
							class="flex items-center justify-center gap-3 py-3 px-5 btn-base-yellow text-xs font-bold min-h-[38px] mt-8 rounded-md">
							<?php echo svg( 'arrow-btn', '16', '16' ) ?>
							<?php _e( 'Xem tất cả', 'bsc' ) ?>
						</a>
				<?php } ?>
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1' : 'mt-[50px] overflow-hidden' ?>">
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
							<h2
								class="text-primary-300 font-bold 2xl:text-[28px] text-2xl pl-6 relative before:absolute before:w-[3px] before:top-1/2 before:-translate-y-1/2 before:left-0 before:h-7 before:bg-primary-300 mb-8 !leading-tight">
								Các mã hiệu quả BSC
							</h2>
					<?php } ?>
					<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
							<ul
								class="customtab-nav flex flex-nowrap gap-8 overflow-x-auto border-b border-[#C9CCD2] mb-6">
								<li>
									<button type="button" data-tabs="#tab-11"
										class="active font-bold text-lg [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:text-opacity-70 whitespace-nowrap border-b-2 [&:not(.active)]:border-transparent border-primary-300 pb-4 border-opacity-100">
										Các mã hiệu quả BSC
									</button>
								</li>
								<li>
									<button type="button" data-tabs="#tab-22"
										class="font-bold text-lg [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:text-opacity-70 whitespace-nowrap border-b-2 [&:not(.active)]:border-transparent border-primary-300 pb-4 border-opacity-100">
										Tiện ích cho khách hàng
									</button>
								</li>
							</ul>

					<?php } ?>
					<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'tab-content block' ?>"
						<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?> id="tab-11" <?php } ?>>
						<div class="grid grid-cols-3 gap-4 mb-10 ">
							<?php
							for ( $i = 0; $i < 6; $i++ ) {
								?>
									<a href=""
										class="inline-flex justify-center rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
										<span>
											HPG
										</span>
										<span>
											+11%
										</span>
									</a>
									<?php
							}
							?>


						</div>
					</div>
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
							<div class="p-6 bg-gradient-blue-50 mb-8">
								<h3 class="text-primary-300 font-bold text-2xl mb-4">
									Đăng ký nhận báo cáo từ BSC
								</h3>
								<div class="form_report">
									<?php echo do_shortcode( '[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]' ) ?>
								</div>
							</div>
					<?php } ?>
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
							<h3
								class="text-primary-300 font-bold 2xl:text-[28px] text-2xl pl-6 relative before:absolute before:w-[3px] before:top-1/2 before:-translate-y-1/2 before:left-0 before:h-7 before:bg-primary-300 mb-7 !leading-tight">
								Tiện ích cho khách hàng
							</h3>
					<?php } ?>
					<div class="space-y-[14px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'hidden tab-content' ?>"
						<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?> id="tab-22" <?php } ?>>
						<div
							class="rounded-lg overflow-hidden min-h-[161px] lg:px-9 px-5 py-5 flex flex-col justify-center relative text-white group">
							<img loading="lazy"
								src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image (5).png"
								alt=""
								class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
							<div
								class="absolute w-full h-full bg-gradient-blue-to-right-150 inset-0 pointer-events-none">
							</div>
							<div class="relative z-10 space-y-2 font-Helvetica">
								<h4 class="font-bold lg:max-w-[163px]">
									Tra cứu thông tin mã cổ phiếu
								</h4>
								<a href=""
									class="inline-flex items-center gap-2 text-xs font-medium transition-all duration-500 hover:scale-105">
									<?php _e( 'Xem chi tiết', 'bsc' ) ?>
									<?php echo svgpath( 'arrow-btn', '12', '12', 'fill-white' ) ?>
								</a>
							</div>

						</div>
						<div
							class="rounded-lg overflow-hidden min-h-[161px] lg:px-9 px-5 py-5 flex flex-col justify-center relative text-white group">
							<img loading="lazy"
								src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image (5).png"
								alt=""
								class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
							<div
								class="absolute w-full h-full bg-gradient-blue-to-right-150 inset-0 pointer-events-none">
							</div>
							<div class="relative z-10 space-y-2 font-Helvetica">
								<h4 class="font-bold lg:max-w-[163px]">
									Lịch thị trường
								</h4>
								<a href=""
									class="inline-flex items-center gap-2 text-xs font-medium transition-all duration-500 hover:scale-105">
									<?php _e( 'Xem chi tiết', 'bsc' ) ?>
									<?php echo svgpath( 'arrow-btn', '12', '12', 'fill-white' ) ?>
								</a>
							</div>

						</div>

					</div>
					<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
							<div class="p-4 bg-gradient-blue-50 rounded-[10px]">
								<h3 class="text-primary-300 font-bold text-lg mb-4">
									Đăng ký nhận báo cáo từ BSC
								</h3>
								<div class="form_report">
									<?php echo do_shortcode( '[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]' ) ?>
								</div>
							</div>
					<?php } ?>
				</div>
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
					</div>
			<?php } ?>
		</div>
	</section>
	<section
		class="bg-no-repeat bg-cover bg-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[77px]' : 'py-5 min-h-[774px]' ?>"
		style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-report-mb.png)">
		<div class="container">
			<div
				class="bg-white rounded-2xl <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[602px] max-w-[60%] p-10' : 'p-6' ?>">
				<h2
					class="heading-title text-center !leading-none <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
					Báo cáo phân tích Từ bsc
				</h2>
				<ul
					class="divide-y divide-solid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-4' : 'space-y-[12px]' ?>">
					<li
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(:first-child)]:pt-4' : '[&:not(:first-child)]:pt-[12px] sm:text-base text-sm' ?>">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-primary-300">
							<span
								class="inline-flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2' : 'gap-1.5' ?>">
								<?php echo svgClass( 'report1', '30', '30', ! wp_is_mobile() && ! bsc_is_mobile() ? 'shrink-0 w-[30px] h-[30px]' : 'shrink-0 w-6 h-6' ) ?>
								Báo cáo vĩ mô
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(:first-child)]:pt-4' : '[&:not(:first-child)]:pt-[12px] sm:text-base text-sm' ?>">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-primary-300">
							<span
								class="inline-flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2' : 'gap-1.5' ?>">
								<?php echo svgClass( 'report2', '30', '30', ! wp_is_mobile() && ! bsc_is_mobile() ? 'shrink-0 w-[30px] h-[30px]' : 'shrink-0 w-6 h-6' ) ?>
								Báo cáo Ngành & Doanh nghiệp
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(:first-child)]:pt-4' : '[&:not(:first-child)]:pt-[12px] sm:text-base text-sm' ?>">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-primary-300">
							<span
								class="inline-flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2' : 'gap-1.5' ?>">
								<?php echo svgClass( 'report3', '30', '30', ! wp_is_mobile() && ! bsc_is_mobile() ? 'shrink-0 w-[30px] h-[30px]' : 'shrink-0 w-6 h-6' ) ?>
								Báo cáo chuyên đề
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(:first-child)]:pt-4' : '[&:not(:first-child)]:pt-[12px] sm:text-base text-sm' ?>">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-primary-300">
							<span
								class="inline-flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2' : 'gap-1.5' ?>">
								<?php echo svgClass( 'report4', '30', '30', ! wp_is_mobile() && ! bsc_is_mobile() ? 'shrink-0 w-[30px] h-[30px]' : 'shrink-0 w-6 h-6' ) ?>
								Danh mục khuyến nghị
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(:first-child)]:pt-4' : '[&:not(:first-child)]:pt-[12px] sm:text-base text-sm' ?>">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-primary-300">
							<span
								class="inline-flex items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-2' : 'gap-1.5' ?>">
								<?php echo svgClass( 'report5', '30', '30', ! wp_is_mobile() && ! bsc_is_mobile() ? 'shrink-0 w-[30px] h-[30px]' : 'shrink-0 w-6 h-6' ) ?>
								Quan điểm BSC
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
				</ul>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-6' : 'mt-4' ?>">
					<a href=""
						class=" items-center gap-3  btn-base-yellow text-xs font-bold  rounded-md <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'inline-flex pl-6 pr-8 py-4 min-h-[52px]' : 'flex justify-center py-3 px-5 min-h-10' ?>">
						<?php echo svg( 'arrow-btn', '16', '16' ) ?>
						<?php _e( 'Khám phá', 'bsc' ) ?>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
