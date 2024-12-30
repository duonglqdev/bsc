<?php

/**
Template Name: Trách nhiệm với cộng đồng
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[130px] pb-[100px]':'bg-gradient-blue-50 py-10' ?>">
		<div class="container">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid grid-cols-2 gap-20' : 'gap-10 flex flex-col' ?>">
				<div
					class="col-span-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'order-1' : 'order-2' ?>">
					<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:mb-12 mb-10':'mb-4' ?>">
						TRÁCH NHIỆM VỚI CỘNG ĐỒNG
					</h2>
					<div class="font-Helvetica text-justify <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-8' ?>">
						BSC hiểu rằng, xây dựng giá trị của doanh nghiệp là một chiến lược thông
						minh, hài hòa giữa phát triển doanh nghiệp bền vững và thực hiện trách nhiệm
						với cộng đồng.
					</div>
					<div class="community_content-list block_slider-show-1">
						<div
							class="community_content-item font-Helvetica block_slider-item max-w-full">
							<h3 class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'' ?>">
								“Cầu vồng hy vọng” - Hoạt động xây dựng công trình xã hội và Hỗ trợ
								khắc phục thiên tai
							</h3>
							<div class="text-justify the_content <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-6':'mt-4 text-xs' ?>">
								BSC đồng hành cùng các dự án xây dựng công trình xã hội tại nhiều
								tỉnh thành niềm núi phía Bắc và các tỉnh khu vực Miền Trung, Tây
								Nguyên: Xây mới và cải tạo trường học; Thắp sáng vùng quê tại nhiều
								tình thành trên cả nước Công ty Chứng khoán BIDV sẵn sàng chung sức,
								đồng lòng vì một Việt Nam gắn kết bằng tình yêu thương và lòng nhân
								ái.
							</div>
						</div>
						<div class="community_content-item font-Helvetica block_slider-item">
							<h3 class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'' ?>">
								“Ươm mầm tương lai” - Đồng hành cùng thế hệ trẻ ngành Tài Chính –
								Chứng khoán
							</h3>
							<div class="text-justify the_content <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-6':'mt-4 text-xs' ?>">
								Liên tục trong nhiều năm, BSC là nhà tài trợ cho nhiều Cuộc thi tài
								năng sinh viên tại các trường Đại học lớn trên cả nước; Tham gia các
								chương trình hướng dẫn/đào tạo cho thế hệ trẻ và thường xuyên đón
								sinh viên tới thực tập chuyên môn, tham gia trụ sở làm việc của BSC.
							</div>
						</div>
						<div class="community_content-item font-Helvetica block_slider-item">
							<h3 class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'' ?>">
								Về Nguồn - Hoạt động “Đền ơn Đáp nghĩa” của thế hệ trẻ BSC
							</h3>
							<div class="text-justify the_content <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-6':'mt-4 text-xs' ?>">
								Hành trình Về Nguồn được tổ chức hàng năm tại BSC. Đây là những hoạt
								động thể hiện lòng tri ân sâu sắc của thế hệ trẻ BSC trước lớp lớp
								thế hệ cha anh đi trước đã hi sinh, cống hiến vì sự nghiệp hòa bình
								và giải phóng dân tộc, thống nhất đất nước.
							</div>
						</div>
						<div class="community_content-item font-Helvetica block_slider-item">
							<h3 class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'' ?>">
								“Kết nối yêu thương” - Hoạt động An sinh xã hội
							</h3>
							<div class="text-justify the_content <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-6':'mt-4 text-xs' ?>">
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
				<div
					class="col-span-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'order-2' : 'order-1 pb-[80px] relative' ?>">
					<div
						class="community_nav <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[470px] h-full  flex flex-wrap justify-between' : 'relative flex flex-wrap justify-around ' ?>">
						<div class="community_nav-item cursor-pointer relative w-1/2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[200px]' : '' ?>"
							data-index="0">
							<div class="relative w-full pt-[100%]">
								<?php echo svgpath( 'comunity', '', '','md:stroke-auto stroke-1' ) ?>
								<div
									class="icon absolute <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'top-3 right-5' : 'w-[36%] h-[36%] flex items-center justify-center top-4 right-4' ?>">
									<?php echo svgClass( 'com_1' ) ?>
								</div>
							</div>

						</div>
						<div class="community_nav-item cursor-pointer relative w-1/2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[200px]' : '' ?>"
							data-index="1">
							<div class="relative w-full pt-[100%]">
								<?php echo svgClass( 'comunity' ) ?>
								<div
									class="icon absolute  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'top-3 right-5' : 'w-[36%] h-[36%] flex items-center justify-center top-4 right-4' ?>">
									<?php echo svgClass( 'com_2' ) ?>
								</div>

							</div>
						</div>
						<div class="community_nav-item cursor-pointer relative w-1/2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[200px]' : '' ?>"
							data-index="2">
							<div class="relative w-full pt-[100%]">
								<?php echo svgClass( 'comunity' ) ?>
								<div
									class="icon absolute  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'top-3 right-5' : 'w-[36%] h-[36%] flex items-center justify-center top-4 right-4' ?>">
									<?php echo svgClass( 'com_3' ) ?>
								</div>

							</div>
						</div>
						<div class="community_nav-item cursor-pointer relative w-1/2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[200px]' : '' ?>"
							data-index="3">
							<div class="relative w-full pt-[100%]">
								<?php echo svgClass( 'comunity' ) ?>
								<div
									class="icon absolute  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'top-3 right-5' : 'w-[36%] h-[36%] flex items-center justify-center top-4 right-4' ?>">
									<?php echo svgClass( 'com_4' ) ?>
								</div>

							</div>
						</div>
					</div>
					<?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bsc-cd.svg"
								alt=""
								class="absolute w-full h-full object-cover inset-0 pointer-events-none">
						<?php } ?>
				</div>
			</div>
		</div>
		</div>
		<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
		{ ?>
			<div class="absolute w-full h-full inset-0 -z-10">
				<div class="community_content-bg pc block_slider-show-1">
					<div class="item block_slider-item">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity1.png"
							alt="" class="w-full h-full object-cover max-h-[714px] object-center">
					</div>
					<div class="item block_slider-item">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity2.png"
							alt="" class="w-full h-full object-cover max-h-[714px] object-center">
					</div>
					<div class="item block_slider-item">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity3.png"
							alt="" class="w-full h-full object-cover max-h-[714px] object-center">
					</div>
					<div class="item block_slider-item">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/comunity4.png"
							alt="" class="w-full h-full object-cover max-h-[714px] object-center">
					</div>
				</div>

			</div>
		<?php } ?>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-24 mb-10':'my-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:mb-10 mb-8':'mb-6' ?>">
				HOẠT ĐỘNG NỔI BẬT
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-[70px] ':'' ?>">
				<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-80 lg:max-w-[35%] shrink-0':'' ?>">
					<div class="sticky top-5 z-10">
						<?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
							<div
									class="py-[12px] px-4 text-base font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next">
									Năm 2024
									<?php echo svg( 'down-white', '20' ) ?>
								</div>		
						<?php } ?>
						<ul
							class="overflow-y-auto <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'shadow-base p-3 rounded-[10px] bg-white scroll-bar-custom  max-h-[180px] space-y-2':'absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 text-white prose-a:block prose-a:px-[14px] prose-a:font-semibold prose-a:text-paragraph prose-a:rounded-md prose-a:py-3 prose-a:font-Helvetica rounded text-xs' ?>">
							<li>
								<a href=""
									class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'active block px-5 py-3 font-semibold text-lg [&:not(.active)]:bg-white bg-primary-300 rounded-md [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-[#ebf4fa] ':'' ?>">
									Năm 2024
								</a>
							</li>
							<li>
								<a href=""
									class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block px-5 py-3 font-semibold text-lg [&:not(.active)]:bg-white bg-primary-300 rounded-md [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-[#ebf4fa]':'' ?>">
									Năm 2023
								</a>
							</li>
							<li>
								<a href=""
									class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block px-5 py-3 font-semibold text-lg [&:not(.active)]:bg-white bg-primary-300 rounded-md [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-[#ebf4fa]':'' ?>">
									Năm 2022
								</a>
							</li>
							<li>
								<a href=""
									class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block px-5 py-3 font-semibold text-lg [&:not(.active)]:bg-white bg-primary-300 rounded-md [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-[#ebf4fa]':'' ?>">
									Năm 2021
								</a>
							</li>
						</ul>
						<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
							<div class="mt-12">
								<img loading="lazy"
									src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
									alt=""
									class="rounded-lg transition-all duration-500 hover:scale-105">
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="flex-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-6' ?>">
					<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
						<?php
						for ( $i = 0; $i < 10; $i++ )
						{
							?>
							<div class="post_item font-Helvetica">
								<a href=""
									class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
									<img loading="lazy"
										src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
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
					<div class="lg:mt-12">
						<?php get_template_part( 'components/pagination' ) ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
