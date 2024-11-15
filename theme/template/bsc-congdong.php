<?php

/**
Template Name: Trách nhiệm với cộng đồng
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="relative lg:pt-[130px] lg:pb-[100px] pt-10 pb-10">
		<div class="container">
			<div class="grid lg:grid-cols-2 lg:gap-20 gap-10">
				<div class="lg:col-span-1">
					<h2 class="heading-title 2xl:mb-12 mb-10">
						TRÁCH NHIỆM VỚI CỘNG ĐỒNG
					</h2>
					<div class="mb-10 font-Helvetica text-justify">
						BSC hiểu rằng, xây dựng giá trị của doanh nghiệp là một chiến lược thông
						minh, hài hòa giữa phát triển doanh nghiệp bền vững và thực hiện trách nhiệm
						với cộng đồng.
					</div>
					<div class="community_content-list block_slider-show-1">
						<div class="community_content-item font-Helvetica block_slider-item">
							<h3 class="lg:text-2xl text-primary-300 font-bold">
								“Cầu vồng hy vọng” - Hoạt động xây dựng công trình xã hội và Hỗ trợ
								khắc phục thiên tai
							</h3>
							<div class="mt-6 text-justify the_content">
								BSC đồng hành cùng các dự án xây dựng công trình xã hội tại nhiều
								tỉnh thành niềm núi phía Bắc và các tỉnh khu vực Miền Trung, Tây
								Nguyên: Xây mới và cải tạo trường học; Thắp sáng vùng quê tại nhiều
								tình thành trên cả nước Công ty Chứng khoán BIDV sẵn sàng chung sức,
								đồng lòng vì một Việt Nam gắn kết bằng tình yêu thương và lòng nhân
								ái.
							</div>
						</div>
						<div class="community_content-item font-Helvetica block_slider-item">
							<h3 class="lg:text-2xl text-primary-300 font-bold">
								“Ươm mầm tương lai” - Đồng hành cùng thế hệ trẻ ngành Tài Chính –
								Chứng khoán
							</h3>
							<div class="mt-6 text-justify the_content">
								Liên tục trong nhiều năm, BSC là nhà tài trợ cho nhiều Cuộc thi tài
								năng sinh viên tại các trường Đại học lớn trên cả nước; Tham gia các
								chương trình hướng dẫn/đào tạo cho thế hệ trẻ và thường xuyên đón
								sinh viên tới thực tập chuyên môn, tham gia trụ sở làm việc của BSC.
							</div>
						</div>
						<div class="community_content-item font-Helvetica block_slider-item">
							<h3 class="lg:text-2xl text-primary-300 font-bold">
								Về Nguồn - Hoạt động “Đền ơn Đáp nghĩa” của thế hệ trẻ BSC
							</h3>
							<div class="mt-6 text-justify the_content">
								Hành trình Về Nguồn được tổ chức hàng năm tại BSC. Đây là những hoạt
								động thể hiện lòng tri ân sâu sắc của thế hệ trẻ BSC trước lớp lớp
								thế hệ cha anh đi trước đã hi sinh, cống hiến vì sự nghiệp hòa bình
								và giải phóng dân tộc, thống nhất đất nước.
							</div>
						</div>
						<div class="community_content-item font-Helvetica block_slider-item">
							<h3 class="lg:text-2xl text-primary-300 font-bold">
								“Kết nối yêu thương” - Hoạt động An sinh xã hội
							</h3>
							<div class="mt-6 text-justify the_content">
								Bên cạnh chuỗi các hoạt động chung của BSC, mỗi tổ Công đoàn theo
								định
								kỳ tháng/quý đều có các hoạt động xã hội thiết thực và ý nghĩa:
								Hoạt động thiện nguyện tại các bênh viện:
								Hoạt động thiện nguyện tại các nhà dưỡng lão
								Hoạt động thiện nguyện theo chương trình của Đoàn Thanh Niên
							</div>
						</div>
					</div>
				</div>
				<div class="lg:col-span-1">
					<div
						class="community_nav flex flex-wrap justify-between md:max-w-[470px] h-full">
						<div class="community_nav-item cursor-pointer relative w-1/2 md:max-w-[200px]"
							data-index="0">
							<?php echo svgClass('comunity') ?>
							<div class="icon absolute top-3 right-5">
								<?php echo svgClass('com_1') ?>
							</div>
						</div>
						<div class="community_nav-item cursor-pointer relative w-1/2 md:max-w-[200px]"
							data-index="1">
							<?php echo svgClass('comunity') ?>
							<div class="icon absolute top-3 right-5">
								<?php echo svgClass('com_2') ?>
							</div>
						</div>
						<div class="community_nav-item cursor-pointer relative w-1/2 md:max-w-[200px]"
							data-index="2">
							<?php echo svgClass('comunity') ?>
							<div class="icon absolute top-3 right-5">
								<?php echo svgClass('com_3') ?>
							</div>
						</div>
						<div class="community_nav-item cursor-pointer relative w-1/2 md:max-w-[200px]"
							data-index="3">
							<?php echo svgClass('comunity') ?>
							<div class="icon absolute top-3 right-5">
								<?php echo svgClass('com_4') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="absolute w-full h-full inset-0 -z-10">
			<div class="community_content-bg block_slider-show-1">
				<div class="item block_slider-item">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity1.png"
						alt="" class="w-full h-full object-cover max-h-[714px] object-center">
				</div>
				<div class="item block_slider-item">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity2.png"
						alt="" class="w-full h-full object-cover max-h-[714px] object-center">
				</div>
				<div class="item block_slider-item">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity3.png"
						alt="" class="w-full h-full object-cover max-h-[714px] object-center">
				</div>
				<div class="item block_slider-item">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity4.png"
						alt="" class="w-full h-full object-cover max-h-[714px] object-center">
				</div>
			</div>

		</div>
	</section>
	<section class="lg:my-24 mb-10">
		<div class="container">
			<h2 class="heading-title 2xl:mb-10 mb-8">
				HOẠT ĐỘNG NỔI BẬT
			</h2>
			<div class="lg:flex gap-[70px]">
				<div class="lg:w-80 lg:max-w-[35%]">
					<div class="sticky top-5 z-10">
						<ul class="shadow-base p-3 rounded-[10px] bg-white scroll-bar-custom max-h-[156px] overflow-y-auto">
							<li>
								<a href="" class="active block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
									Năm 2024
								</a>
							</li>
							<li>
								<a href="" class="block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
									Năm 2023
								</a>
							</li>
							<li>
								<a href="" class="block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
									Năm 2022
								</a>
							</li>
							<li>
								<a href="" class="block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
									Năm 2021
								</a>
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
					<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
						<?php
						for ($i = 0; $i < 10; $i++) {
						?>
							<div class="post_item font-Helvetica">
								<a href=""
									class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
										alt=""
										class="absolute w-full h-full inset-0 object-cover group-hover:scale-110 transition-all duration-500">
								</a>
								<div class="date flex items-center gap-x-[12px] mb-2 text-xs">
									<?php echo svg('date') ?>
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
									<?php echo svg('arrow-btn', '12', '12') ?>
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
