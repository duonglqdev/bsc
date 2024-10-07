<?php

/**
Template Name: Công bố thông tin
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-16 pt-10 pb-10">
		<div class="container">
			<div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
				<div class="md:col-span-1 col-span-full">
					<div class="sticky top-5 z-10">
						<ul class="shadow-base py-6 pr-4 rounded-lg bg-white ">
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Công
									bố thông tin</a>
							</li>
							<li>
								<a href="#"
									class="active flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">
									Đại hội đồng cổ đông

								</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Báo
									cáo tài chính</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Báo
									cáo thường niên</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Quản
									trị doanh nghiệp</a>
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

					<div class="space-y-6">
						<?php
						for ($i = 0; $i < 10; $i++) {
						?>
							<div
								class="news_service-item md:flex items-center justify-between md:gap-20 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-6">
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
											<span class="text-primary-300 text-[12px] font-medium">
												2022
											</span>
										</p>
									</div>
									<div class="md:ml-[30px] ml-5">
										<a href=""
											class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
											Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
											trả lãi, gốc trái phiếu mã BSI32301
										</a>
										<div class="line-clamp-2 text-paragraph mb-4">
											Ngày 25/3/2024, tại Geneva (Thụy Sĩ), Công ty Cổ phần
											Chứng
											khoán BIDV (BSC) và Edmond de Rothschild tổ chức lễ ký
											kết thỏa
											thuận liên doanh góp vốn nhằm triển khai thành lập công
											ty quản
											lý quỹ tại Việt Nam. Sau thỏa thuận, hai bên sẽ tiếp tục
											triển
											khai các thủ tục xin phép cơ quan chức năng tại Việt Nam
											để đưa
											công ty quản lý quỹ đi vào hoạt động.
										</div>
									</div>
								</div>
								<a href="" download=""
									class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
									Tải xuống
									<?php echo svg('download') ?>
								</a>
							</div>
						<?php
						}
						?>
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
