<?php

/**
Template Name: [Package 3] Báo cáo vĩ mô #2
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
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
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
			<div class="lg:flex lg:gap-[70px]">
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
									class="active flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Bản tin sáng
								</a>
							</li>
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Bản
									tin ngày</a>
							</li>
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Báo
									cáo vĩ mô</a>
							</li>
							<li>
								<a href=""
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Báo
									cáo chiến lược</a>
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
					<div class="flex gap-5 mb-10">
						<form action=""
							class="h-[50px] rounded-[10px] border border-[#EAEEF4] px-[26px] flex items-center gap-2 lg:w-[315px] max-w-[33.33%]">
							<?php echo svg( 'search', '24', '24' ) ?>
							<input type="text" name="s"
								class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 font-Helvetica placeholder:text-[#898A8D]"
								placeholder="<?php _e( 'Từ khóa tìm kiếm', 'bsc' ) ?>">
						</form>

						<div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
							datepicker-autohide datepicker-orientation="bottom right"
							class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs lg:w-1/2 w-full">
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
					<div class="mb-[59px]">
						<h3 class="font-bold mb-6 text-2xl">Dự báo thị trường</h3>
						<div class="relative">
							<div class="lg:flex lg:gap-8 blur-sm">
								<div class="lg:w-[255px] lg:max-w-[27%]">
									<div
										class="lg:px-10 px-5 lg:py-8 py-5 bg-white shadow-base rounded-2xl">
										<h4
											class="font-bold text-primary-300 text-2xl pb-6 mb-6 border-b border-[#C9CCD2]">
											Năm 2024</h4>
										<div class="space-y-6">
											<div class="flex items-end justify-between pb-2">
												<div class="flex flex-col font-Helvetica">
													<p class="text-paragraph text-xs">VN-index</p>
													<h4 class="font-bold text-2xl">
														1500
													</h4>
												</div>
												<div
													class="min-w-[84px] text-center py-0.5 px-4 text-[#30D158] bg-[#D6F6DE] rounded-[45px] font-semibold text-xs">
													Tích cực
												</div>
											</div>

											<div class="flex items-end justify-between pb-2">
												<div class="flex flex-col font-Helvetica">
													<p class="text-paragraph text-xs">Ngành</p>
													<h4 class="font-bold text-2xl">
														1298
													</h4>
												</div>
												<div
													class="min-w-[84px] text-center py-0.5 px-4 text-[#FFB81C] bg-[#FFF1D2] rounded-[45px] font-semibold text-xs">
													Cơ sở
												</div>
											</div>
											<div class="flex items-end justify-between pb-2">
												<div class="flex flex-col font-Helvetica">
													<p class="text-paragraph text-xs">Ngành</p>
													<h4 class="font-bold text-2xl">
														1200
													</h4>
												</div>
												<div
													class="min-w-[84px] text-center py-0.5 px-4 text-[#FF0017] bg-[#FFD9DC] rounded-[45px] font-semibold text-xs">
													Tiêu cực
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="flex-1 bg-[#F5FCFF] rounded-lg">
									<div id="chart-forecast"></div>
								</div>
							</div>
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
						for ( $i = 0; $i < 3; $i++ )
						{
							?>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
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
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo ngành
									</a>
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
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo ngành
									</a>
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