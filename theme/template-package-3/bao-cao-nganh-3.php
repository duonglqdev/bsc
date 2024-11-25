<?php

/**
Template Name: [Package 3] Báo cáo ngành #3
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
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
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
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
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
			<h2 class="heading-title mb-[26px]">
				CHUYÊN MỤC
			</h2>
			<div class="lg:flex 2xl:gap-[70px] gap-10">
				<div class="lg:w-80 lg:max-w-[35%] shrink-0">
					<div class="sticky lg:top-28 top-5 z-[9] space-y-12">
						<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Tất
									cả</a>
							</li>
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Báo cáo ngành
								</a>
							</li>
							<li>
								<a href=""
									class="active flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Báo
									cáo doanh nghiệp</a>
							</li>
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Báo
									cáo nhanh</a>
							</li>

						</ul>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
							alt="" class="rounded-lg transition-all duration-500 hover:scale-105">
						<div class="p-6 bg-gradient-blue-50 mb-10">
							<h3 class="text-primary-300 font-bold text-xl mb-4">
								Đăng ký nhận báo cáo từ BSC
							</h3>
							<div class="form_report">
								<?php echo do_shortcode( '[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]' ) ?>
							</div>
						</div>
					</div>
				</div>
				<div class="flex-1">
					<form action=""
						class="h-[50px] rounded-[10px] border border-[#EAEEF4] px-[26px] flex items-center gap-2">
						<?php echo svg( 'search', '24', '24' ) ?>
						<input type="text" name="s"
							class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 font-Helvetica placeholder:text-[#898A8D]"
							placeholder="<?php _e( 'Từ khóa tìm kiếm', 'bsc' ) ?>">
					</form>
					<div class="flex gap-5 mb-10 mt-4">
						<div
							class="w-1/5 flex items-center justify-between h-[50px] px-5 border border-[#EAEEF4] rounded-[10px]">
							<p class="2xl:min-w-20 text-xs font-medium">Năm: </p>
							<select class="select_custom border-none focus:outline-0 focus:ring-0">
								<option value="">2024</option>
								<option value="">2023</option>
							</select>

						</div>
						<div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
							datepicker-autohide datepicker-orientation="bottom right"
							class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs lg:w-[52%] w-full">
							<p class="font-medium mr-5 2xl:min-w-[94px]">
								<?php _e( 'Thời gian:', 'gnws' ) ?>
							</p>
							<div class="flex items-center 2xl:gap-5 gap-3">
								<input id="datepicker-range-start" name="start" type="text"
									class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
									placeholder="<?php _e( 'Từ ngày', 'bsc' ) ?>">
								<?php echo svg( 'day', '20', '20' ) ?>
							</div>
							<span class="2xl:mx-4 mx-2 text-gray-500">-</span>
							<div class="flex items-center 2xl:gap-5 gap-3">
								<input id="datepicker-range-end" name="end" type="text"
									class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
									placeholder="<?php _e( 'Đến ngày', 'bsc' ) ?>">
								<?php echo svg( 'day', '20', '20' ) ?>
							</div>
						</div>
						<button type="submit"
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight flex-1 rounded-xl h-[50px]">
							<?php _e( 'Tìm kiếm', 'bsc' ) ?>
						</button>
					</div>

					<div class="mt-10 mb-[82px]">
						<h2 class="font-bold text-2xl">Dự báo triển vọng ngành</h2>
						<div class="relative">
							<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
							<div
								class="rounded-[10px] overflow-hidden mt-6 text-center border border-[#EAEEF4] blur-sm">
								<div
									class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.125]">
									<div class="w-1/3 py-2 px-3">
										Ngành
									</div>
									<div class="w-1/3 py-2 px-3">
										Quan điểm Q1/224
									</div>
									<div class="w-1/3 py-2 px-3">
										Quan điểm Q2/224
									</div>

								</div>
								<div
									class="scroll-bar-custom overflow-y-auto max-h-[340px] prose-a:text-primary-300 prose-a:font-bold font-medium">
									<?php
									for ( $i = 0; $i < 9; $i++ )
									{
										?>
										<div
											class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
											<div
												class="w-1/3 min-h-[34px] flex items-center leading-[1.125] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
												CNTT - Viễn thông
											</div>
											<div
												class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
												Tích cực
											</div>
											<div
												class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-[#30D158]">
												Tích cực
											</div>
										</div>

										<?php
									}
									?>
									<div
										class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
										<div
											class="w-1/3 min-h-[34px] flex items-center leading-[1.125] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
											Vận tải & Cảng biển
										</div>
										<div
											class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
											Tích cực
										</div>
										<div
											class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-black">
											Trung lập
										</div>
									</div>
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
					<div class="grid lg:grid-cols-2 gap-6">
						<?php
						for ( $i = 0; $i < 2; $i++ )
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
											class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
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
											class="inline-block rounded-[45px] text-[#FFB81C] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
											lập</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
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
					<?php get_template_part( 'components/pagination' ) ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();