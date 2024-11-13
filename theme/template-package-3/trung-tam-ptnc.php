<?php

/**
Template Name:[Package 3] Trung tâm phân tích nghiên cứu
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="mt-14 xl:mb-pb-[110px] mb-20">
		<div class="container">
			<div class="lg:flex gap-12">
				<div class="lg:w-[745px] lg:max-w-[56%]">
					<h2 class="heading-title mb-8">
						Danh mục khuyến nghị
					</h2>
					<ul class="customtab-nav flex items-center gap-4 mb-6">
						<li>
							<button data-tabs="#tab-1"
								class="active inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
								BSC10
							</button>
						</li>
						<li>
							<button data-tabs="#tab-2"
								class="inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
								BSC30
							</button>
						</li>
						<li>
							<button data-tabs="#tab-3"
								class="inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
								BSC50
							</button>
						</li>

					</ul>
					<?php
					for ( $i = 1; $i < 4; $i++ )
					{
						?>
						<div class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>"
							id="tab-<?php echo $i ?>">
							<div class="relative pt-[76.2416%] w-full rounded-lg overflow-hidden">
								<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
								<div class="absolute w-full h-full inset-0 blur-sm">
									<ul
										class="flex items-center font-bold text-center text-white bg-primary-300 prose-li:p-3 py-[7px] gap-5 px-[30px] justify-between">
										<li class="w-[8%]">Mã</li>
										<li class="w-[16%]">Khuyến nghị</li>
										<li class="w-[16%]">Giá</li>
										<li class="w-[16%]">Mục tiêu</li>
										<li class="w-[16%]">Upside</li>
									</ul>
									<div class="overflow-y-auto scroll-bar-custom max-h-[90%]">
										<?php
										for ( $j = 0; $j < 12; $j++ )
										{
											?>
											<ul
												class="flex gap-5 text-center justify-between px-[30px] py-4 items-center [&:nth-child(odd)]:bg-white [&:nth-child(even)]:bg-primary-50">
												<li class="w-[8%] font-medium">CTG</li>
												<li class="w-[16%] font-medium"><span
														class="inline-block bg-[#D6F6DE] rounded-[45px] px-4 py-0.5 text-[#30D158] min-w-[78px]">Mua</span>
												</li>
												<li class="w-[16%] font-bold text-[#1CCD83]">35.05</li>
												<li class="w-[16%] font-medium">43.65</li>
												<li class="w-[16%] font-bold text-[#1CCD83]">+24.45%</li>
											</ul>
											<?php
										}
										?>

									</div>

								</div>
								<!-- Nếu đã đăng nhập thì bỏ khối nút đăng nhập -->
								<div
									class="absolute w-full h-full inset-0 z-10 flex flex-col justify-center items-center">
									<a href="#"
										class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-8 px-4 2xl:py-4 py-2  relative transition-all duration-500 font-bold rounded-xl">
										Đăng nhập
									</a>
									<p class="italic mt-4 font-normal">
										Để xem chi tiết danh mục
									</p>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
				<div class="flex-1">
					<h2 class="heading-title mb-8">
						Thông tin phân tích mới nhất
					</h2>
					<div class="mb-6">
						<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
							class="rounded-[10px] overflow-hidden pt-[55.576%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video2.png"
								alt="" class="absolute w-full h-full inset-0 object-cover">
							<div
								class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
								<?php echo svg( 'play', '62', '62' ) ?>
							</div>
						</a>
					</div>
					<div class="flex flex-col">
						<div class="border border-[#C9CCD2] rounded-lg flex font-medium text-xs overflow-hidden">
							<div
								class="w-[48.8%] border-r border-[#C9CCD2 text-primary-300 font-medium">
								<div
									class="flex justify-end items-center pt-[30px] pb-[13px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5 font-semibold">
									<div class="w-[60px]">
										<p>
											2023
										</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px]">
									<div class="w-[66%] px-2 py-1 font-semibold">
										GDP (YoY%)
									</div>
									<div class="flex-1 text-center">
										<p>6.1</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px]">
									<div class="w-[66%] px-2 py-1 font-semibold">
										CPI trung bình (YoY%)*
									</div>
									<div class="flex-1 text-center">
										<p>6.1</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px]">
									<div class="w-[66%] px-2 py-1 font-semibold">
										Xuất khẩu (YoY%)*
									</div>
									<div class="flex-1 text-center">
										<p>6.1</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px]">
									<div class="w-[66%] px-2 py-1 font-semibold">
										Nhập khẩu (YoY%)*
									</div>
									<div class="flex-1 text-center">
										<p>6.1</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px]">
									<div class="w-[66%] px-2 py-1 font-semibold">
										LSĐH (YoY%)*
									</div>
									<div class="flex-1 text-center">
										<p>6.1</p>
									</div>
								</div>
								<div class="flex gap-1 items-center min-h-[30px]">
									<div class="w-[66%] px-2 py-1 font-bold">
										USD/VND LNH trung bình
									</div>
									<div class="flex-1 text-center font-semibold">
										<p>23,839</p>
									</div>
								</div>
							</div>
							<div class="flex-1 bg-[#F5FCFF] grid grid-cols-2 text-center">
								<div class="text-[#FF0017]">
									<div
										class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
										<p class="font-semibold mb-1">
											BSC kịch bản 1
										</p>
										<div class="grid grid-cols-2 font-semibold">
											<p>2024</p>
											<p>2025</p>
										</div>
									</div>
									<?php
									for ( $i = 0; $i < 5; $i++ )
									{
										?>
										<div
											class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
											<p>6.1</p>
											<p>5.25</p>
										</div>
										<?php
									}
									?>
									<div
										class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
										<p>22,842</p>
										<p>23,839</p>
									</div>
								</div>
								<div class="text-[#30D158]">
									<div
										class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
										<p class="font-semibold mb-1">
											BSC kịch bản 2
										</p>
										<div class="grid grid-cols-2 font-semibold">
											<p>2024</p>
											<p>2025</p>
										</div>
									</div>
									<?php
									for ( $i = 0; $i < 5; $i++ )
									{
										?>
										<div
											class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
											<p>6.1</p>
											<p>5.25</p>
										</div>
										<?php
									}
									?>
									<div
										class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
										<p>22,842</p>
										<p>23,839</p>
									</div>
								</div>
							</div>
						</div>

						<div class="text-right mt-4">
							<a href=""
								class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
								<?php echo svg( 'arrow-btn', '20', '20' ) ?>
								Xem chi tiết
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<div
				class="rounded-[10px] bg-gradient-blue-to-right-100 px-6 py-12 lg:flex items-center gap-4">
				<div class="lg:w-[345px] max-w-[33.333%]">
					<h2 class="uppercase lg:text-[28px] text-2xl font-bold !leading-[1.57]">
						các mã được khácH hàng tìm kiếm nhiều nhất
					</h2>
				</div>
				<div class="flex-1 flex justify-end items-center flex-wrap gap-6">
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							VNM
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#FE5353] text-white font-bold items-center gap-3 py-3 px-[12px]">
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
	<section class="xl:mt-[125px] xl:mb-[100px] my-20">
		<div class="container">
			<div class="flex justify-between items-center mb-10">
				<h2 class="heading-title">Báo cáo phân tích mới nhất</h2>
				<a href=""
					class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
					<?php echo svg( 'arrow-btn', '16', '16' ) ?>
					<?php _e( 'Xem tất cả', 'bsc' ) ?>
				</a>
			</div>
			<div class="lg:flex lg:gap-[70px]">
				<div class="lg:w-[843px] lg:max-w-[66%]">
					<div class="grid grid-cols-2 gap-x-[23px] gap-y-6">
						<?php
						for ( $i = 0; $i < 2; $i++ )
						{
							?>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo vĩ mô tuần
									</a>
									<div class="flex flex-col gap-1.5">
										<span
											class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
											cực</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
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
							</div>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo ngành
									</a>
									<div class="flex flex-col gap-1.5">
										<span
											class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
											cực</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
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
							</div>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo ngành
									</a>
									<div class="flex flex-col gap-1.5">
										<span
											class="inline-block rounded-[45px] text-[#FFB81C] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
											lập</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
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
							</div>
							<?php
						}
						?>
						<?php
						for ( $i = 0; $i < 2; $i++ )
						{
							?>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo ngành
									</a>
									<div class="flex flex-col gap-1.5">
										<span
											class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
											cực</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
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
							</div>
							<?php
						}
						?>

					</div>
				</div>
				<div class="flex-1">
					<h2
						class="text-primary-300 font-bold text-[28px] pl-6 relative before:absolute before:w-[3px] before:top-1/2 before:-translate-y-1/2 before:left-0 before:h-7 before:bg-primary-300 mb-8 !leading-tight">
						Các mã hiệu quả BSC
					</h2>
					<div class="flex-1 flex items-center flex-wrap gap-4 mb-10">
						<?php
						for ( $i = 0; $i < 6; $i++ )
						{
							?>
							<a href=""
								class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
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
					<div class="p-6 bg-gradient-blue-50 mb-10">
						<h3 class="text-primary-300 font-bold text-2xl mb-4">
							Đăng ký nhận báo cáo từ BSC
						</h3>
						<div class="form_report">
							<?php echo do_shortcode( '[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]' ) ?>
						</div>
					</div>
					<h3 class="text-primary-300 font-bold text-2xl mb-4">
						Tiện ích cho khách hàng
					</h3>
					<div class="space-y-[14px]">
						<div
							class="rounded-lg overflow-hidden min-h-[161px] lg:px-9 px-5 py-5 flex flex-col justify-center relative text-white group">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image (5).png"
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
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image (5).png"
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
				</div>
			</div>
		</div>
	</section>
	<section class="py-[77px] bg-no-repeat bg-cover bg-center"
		style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-report.png)">
		<div class="container">
			<div class="lg:w-[602px] lg:max-w-[60%] bg-white p-10 rounded-2xl">
				<h2 class="heading-title text-center mb-9">
					Báo cáo phân tích Từ bsc
				</h2>
				<ul class="divide-y divide-solid space-y-4">
					<li class="[&:not(:first-child)]:pt-4">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-green">
							<span class="inline-flex items-center gap-2">
								<?php echo svgClass( 'report1', '30', '30', 'shrink-0' ) ?>
								Báo cáo vĩ mô
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li class="[&:not(:first-child)]:pt-4">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-green">
							<span class="inline-flex items-center gap-2">
								<?php echo svgClass( 'report2', '30', '30', 'shrink-0' ) ?>
								Báo cáo Ngành & Doanh nghiệp
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li class="[&:not(:first-child)]:pt-4">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-green">
							<span class="inline-flex items-center gap-2">
								<?php echo svgClass( 'report3', '30', '30', 'shrink-0' ) ?>
								Báo cáo chuyên đề
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li class="[&:not(:first-child)]:pt-4">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-green">
							<span class="inline-flex items-center gap-2">
								<?php echo svgClass( 'report4', '30', '30', 'shrink-0' ) ?>
								Danh mục khuyến nghị
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
					<li class="[&:not(:first-child)]:pt-4">
						<a href=""
							class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-green">
							<span class="inline-flex items-center gap-2">
								<?php echo svgClass( 'report5', '30', '30', 'shrink-0' ) ?>
								Quan điểm BSC
							</span>
							<?php echo svgpath( 'arrow-btn', '18', '18', 'fill-green' ) ?>
						</a>
					</li>
				</ul>
				<div class="mt-6">
					<a href=""
						class="inline-flex items-center gap-3 pl-6 pr-8 py-4 btn-base-yellow text-xs font-bold min-h-[52px] rounded-md">
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