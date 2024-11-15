<?php

/**
Template Name: Tin hoạt đọng
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-[130px] pt-10 pb-10">
		<div class="container">
			<div class="lg:flex gap-[70px]">
				<div class="lg:w-80 lg:max-w-[35%]">
					<div class="sticky top-5 z-10">
						<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">
							<li>
								<a href="#"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">Tin
									sản phẩm</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									dịch vụ</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									thị trường</a>
							</li>
							<li>
								<a href="#"
									class="active flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									hoạt động</a>
							</li>
							<li>
								<a href="#"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
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
				<div class="flex-1">
					<div class="list__news">

						<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div class="post_item font-Helvetica">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
											alt=""
											class="absolute w-full h-full inset-0 object-cover group-hover:scale-110 transition-all duration-500">
									</a>
									<div class="date flex items-center gap-x-[12px] mb-2 text-xs">
										<?php echo svg( 'date' ) ?>
										<span>
											Ngày 26/06/2024
										</span>
										<span>
											5:13:58 CH
										</span>
									</div>
									<a href=""
										class="block font-bold line-clamp-2 mb-3 hover:text-green transition-all duration-500">
										BSC và Edmond de Rothschild hợp tác triển khai thành lập công ty
										quản lý quỹ tại Việt Nam 
									</a>
									<div class="line-clamp-3 text-paragraph mb-4">
										Ngày 25/3/2024, tại Geneva (Thụy Sĩ), Công ty Cổ phần Chứng
										khoán BIDV (BSC) và Edmond de Rothschild tổ chức lễ ký kết thỏa
										thuận liên doanh góp vốn nhằm triển khai thành lập công ty quản
										lý quỹ tại Việt Nam. Sau thỏa thuận, hai bên sẽ tiếp tục triển
										khai các thủ tục xin phép cơ quan chức năng tại Việt Nam để đưa
										công ty quản lý quỹ đi vào hoạt động.
									</div>
									<a href=""
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs">
										Xem chi tiết
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
									</a>
								</div>
								<?php
							}
							?>
						</div>

					</div>
					<div class="mt-12">
						<?php get_template_part( 'components/pagination' ) ?>
					</div>


				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();