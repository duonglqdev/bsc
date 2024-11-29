<?php

/**
Template Name: [Package 3] Danh mục khuyến nghị
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
		<div class="container">
			<ul class="customtab-nav flex justify-between gap-10">
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo vĩ mô
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo Ngành - Doanh nghiệp
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo chuyên đề
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Danh mục khuyến nghị
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Quan điểm BSC
					</a>
				</li>

			</ul>
		</div>
	</section>
	<section class="mt-[54px] mb-[100px]">
		<div class="container">
			<h2 class="font-bold 2xl:text-[32px] text-2xl">
				Danh mục
			</h2>
			<ul class="flex items-center flex-wrap mt-6 mb-10 gap-6">
				<li>
					<a href=""
						class="active inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
						BSC 10
					</a>
				</li>
				<li>
					<a href=""
						class="inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
						BSC 30
					</a>
				</li>
				<li>
					<a href=""
						class="inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
						BSC 50
					</a>
				</li>
			</ul>
			<h2 class="font-bold 2xl:text-[32px] text-2xl">
				Hiệu suất danh mục
			</h2>
			<div class="mt-12 rounded-2xl py-6 px-7 shadow-base performance-chart">
				<div id="date-performance-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
					datepicker-autohide datepicker-orientation="bottom left"
					class="flex items-center text-xs gap-4">
					<p class="font-semibold mr-6">
						<?php _e( 'Thời gian:', 'gnws' ) ?>
					</p>
					<div
						class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-12 px-4 py-[12px]">
						<input id="datepicker-performance-start" name="start" type="text"
							class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
							placeholder="<?php _e( 'Từ ngày', 'bsc' ) ?>">
						<?php echo svg( 'date-blue' ) ?>
					</div>

					<div
						class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-12 px-4 py-[12px]">
						<input id="datepicker-performance-end" name="end" type="text"
							class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
							placeholder="<?php _e( 'Đến ngày', 'bsc' ) ?>">
						<?php echo svg( 'date-blue' ) ?>
					</div>
				</div>
				<div id="performance-chart">

				</div>
				<?php echo do_shortcode( '[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]' ) ?>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h2 class="font-bold 2xl:text-[32px] text-2xl mb-6">
				Chi tiết danh mục
			</h2>
			<div class="lg:flex xl:gap-14 gap-10">
				<div class="relative lg:w-[887px] max-w-[66%]">
					<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
					<div
						class="rounded-[10px] overflow-x-auto scroll-bar-custom text-center border border-[#EAEEF4] blur-sm">
						<div
							class="flex text-white bg-primary-300 font-semibold items-center min-h-[58px] leading-[1.125] gap-4">
							<div class="flex-1 min-w-[110px] whitespace-nowrap">
								Mã
							</div>
							<div class="flex-1 min-w-[110px] whitespace-nowrap">
								Khuyến nghị
							</div>
							<div class="flex-1 min-w-[110px] whitespace-nowrap">
								Giá
							</div>
							<div class="flex-1 min-w-[110px] whitespace-nowrap">
								Mục tiêu
							</div>
							<div class="flex-1 min-w-[110px] whitespace-nowrap">
								Upside
							</div>
							<div class="flex-1 min-w-[110px] whitespace-nowrap">
								Sàn
							</div>
							<div class="flex-1 min-w-[110px] whitespace-nowrap">
								KL
							</div>

						</div>
						<div
							class="scroll-bar-custom overflow-y-auto max-h-[600px] prose-a:text-primary-300 prose-a:font-bold font-medium">
							<?php
							for ( $i = 0; $i < 9; $i++ )
							{
								?>
								<div
									class="flex items-center <?php echo $i % 2 == 0 ? '' : 'bg-[#EBF4FA]' ?>">
									<div
										class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
										CTG
									</div>
									<div
										class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-semibold">
										<span
											class="inline-block px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold rounded-full">Mua</span>
									</div>
									<div
										class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
										35.05
									</div>
									<div
										class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
										43.65
									</div>
									<div
										class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
										+24.45%
									</div>
									<div
										class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
										HOSE
									</div>
									<div
										class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
										345.6
									</div>
								</div>

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
				<div class="flex-1 font-Helvetica">
					<ul class="space-y-6">
						<li class="flex xl:gap-20 gap-10">
							<div class="w-[62%] space-y-1">
								<p class="text-xs">Ngày điều chỉnh danh mục</p>
								<p class="font-medium">
									Sep 30, 2024
								</p>
							</div>
							<div class="w-[38%] space-y-1">
								<p class="text-xs">Ngành chủ đạo</p>
								<p class="font-medium">
									Banks
								</p>
							</div>
						</li>
						<li class="flex xl:gap-20 gap-10">
							<div class="w-[62%] space-y-1">
								<p class="text-xs">Thay đổi từ ngày điều chỉnh</p>
								<p class="font-medium text-[#FE5353] flex items-center gap-1">
									<?php echo svg( 'downn', '16', '16' ) ?>
									-1.98%
								</p>
							</div>
							<div class="w-[38%] space-y-1">
								<p class="text-xs">So với thị trường</p>
								<p class="font-medium text-[#FE5353] flex items-center gap-1">
									<?php echo svg( 'downn', '16', '16' ) ?>
									-0.63%
								</p>
							</div>
						</li>
						<li class="flex xl:gap-20 gap-10">
							<div class="w-[62%] space-y-1">
								<p class="text-xs">Thay đổi 1W</p>
								<p class="font-medium text-[#FE5353] flex items-center gap-1">
									<?php echo svg( 'downn', '16', '16' ) ?>
									-0.48%
								</p>
							</div>
							<div class="w-[38%] space-y-1">
								<p class="text-xs">So với thị trường</p>
								<p class="font-medium text-[#FE5353] flex items-center gap-1">
									<?php echo svg( 'downn', '16', '16' ) ?>
									-0.51%
								</p>
							</div>
						</li>
						<li class="flex xl:gap-20 gap-10">
							<div class="w-[62%] space-y-1">
								<p class="text-xs">Beta danh mục</p>
								<p class="font-medium">
									1.38
								</p>
							</div>
							<div class="w-[38%] space-y-1">
								<p class="text-xs">Trung vị thị giá vốn</p>
								<p class="font-medium">
									₫ 16.8K B
								</p>
							</div>
						</li>
						<li class="flex xl:gap-20 gap-10">
							<div class="w-[62%] space-y-1">
								<p class="text-xs">P/E trung vị</p>
								<p class="font-medium">
									14.13
								</p>
							</div>
							<div class="w-[38%] space-y-1">
								<p class="text-xs">P/E thị trường</p>
								<p class="font-medium">
									13.86
								</p>
							</div>
						</li>
						<li class="flex xl:gap-20 gap-10">
							<div class="w-[62%] space-y-1">
								<p class="text-xs">P/B trung vị</p>
								<p class="font-medium">
									1.34
								</p>
							</div>
							<div class="w-[38%] space-y-1">
								<p class="text-xs">P/B thị trường</p>
								<p class="font-medium">
									1.70
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h2 class="font-bold 2xl:text-[32px] text-2xl">
				Báo cáo danh mục
			</h2>
			<div class="mt-6 grid lg:grid-cols-3 gap-6">
				<?php
				for ( $i = 0; $i < 3; $i++ )
				{
					?>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center gap-4">
								<a href=""
									class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
									BMP
								</a>
								<div class="flex flex-col font-Helvetica text-xs">
									<p>
										Giá mục tiêu
									</p>
									<p class="font-medium">
										89,400 <span class="text-[#30D158]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between">
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
            <div class="pagination-center">
                <?php get_template_part( 'components/pagination' ) ?>
            </div>
		</div>
	</section>
</main>
<?php
get_footer();