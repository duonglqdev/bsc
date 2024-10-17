<?php

/**
Template Name: Tin dịch vụ
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-[130px] pt-10 pb-10">
		<div class="container">
			<div class="grid md:grid-cols-4 2xl:gap-[70px] gap-12">
				<div class="md:col-span-1 col-span-full">
					<div class="sticky top-5 z-10">
						<ul class="shadow-base py-6 pr-4 rounded-lg bg-white">
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									sản phẩm</a>
							</li>
							<li>
								<a href="#"
									class="active flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									dịch vụ</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									thị trường</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									hoạt động</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									nội bộ</a>
							</li>
						</ul>
						<div class="mt-12">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
								alt=""
								class="rounded-lg transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>
				<div class="md:col-span-3 col-span-full">
					<div class="space-y-12">
						<div class="list_news-service">
							<h2 class="text-xl font-bold mb-6">
								Tháng 09 năm 2024
							</h2>
							<div class="space-y-8">
								<?php
								for ($i = 0; $i < 4; $i++) {
								?>
									<div
										class="news_service-item md:flex items-center justify-between md:gap-20">
										<div class="flex items-center">
											<div
												class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
												<p
													class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
													Thứ 2
												</p>
												<p
													class="flex-1 flex flex-col justify-center items-center text-2xl font-bold bg-primary-50 w-full">
													16
												</p>
											</div>
											<div class="md:ml-[30px] ml-5">
												<a href=""
													class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
													Thông báo về ngày đăng ký cuối cùng để thực hiện
													quyền
													trả lãi, gốc trái phiếu mã BSI32301
												</a>
												<div
													class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
													BSC đã khẳng định vị thế dẫn đầu về thị phần môi
													giới
													trái phiếu chính phủ trên HNX. Năm 2020, BSC giữ
													vững vị
													thế Top 10 công ty chứng khoán có thị phần môi giới
													cổ
													phiếu, chứng chỉ quỹ và chứng quyền có đảm bảo lớn
													nhất
													tại HoSE
												</div>
											</div>
										</div>
										<a href=""
											class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
											Xem chi tiết
											<?php echo svg('arrow-btn', '12', '12') ?>
										</a>
									</div>
								<?php
								}
								?>

							</div>
						</div>
						<div class="list_news-service">
							<h2 class="text-xl font-bold mb-6">
								Tháng 08 năm 2024
							</h2>
							<div class="space-y-8">
								<?php
								for ($i = 0; $i < 6; $i++) {
								?>
									<div
										class="news_service-item md:flex items-center justify-between md:gap-20">
										<div class="flex items-center">
											<div
												class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
												<p
													class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
													Thứ 2
												</p>
												<p
													class="flex-1 flex flex-col justify-center items-center text-2xl font-bold bg-primary-50 w-full">
													16
												</p>
											</div>
											<div class="md:ml-[30px] ml-5">
												<a href=""
													class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
													Thông báo về ngày đăng ký cuối cùng để thực hiện
													quyền
													trả lãi, gốc trái phiếu mã BSI32301
												</a>
												<div
													class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
													BSC đã khẳng định vị thế dẫn đầu về thị phần môi
													giới
													trái phiếu chính phủ trên HNX. Năm 2020, BSC giữ
													vững vị
													thế Top 10 công ty chứng khoán có thị phần môi giới
													cổ
													phiếu, chứng chỉ quỹ và chứng quyền có đảm bảo lớn
													nhất
													tại HoSE
												</div>
											</div>
										</div>
										<a href=""
											class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
											Xem chi tiết
											<?php echo svg('arrow-btn', '12', '12') ?>
										</a>
									</div>
								<?php
								}
								?>

							</div>
						</div>
					</div>
					<div class="mt-12">
						<?php get_template_part('components/pagination') ?>
					</div>


				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
