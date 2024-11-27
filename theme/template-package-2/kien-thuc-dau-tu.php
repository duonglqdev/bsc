<?php

/**
Template Name: [Package-2] Kiến thức đầu tư
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="home_news bg-white lg:my-[100px] my-20">
		<div class="container">
			<div class="grid grid-cols-5 gap-5">
				<div class="md:col-span-3 col-span-full">
					<div class="group">
						<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
							class="block relative w-full pt-[52%] mb-6 overflow-hidden rounded-[10px] after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40"
							data-fancybox="">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news.jpg"
								alt=""
								class="absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110">
							<div
								class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
								<?php echo svg('play', '62', '62') ?>
							</div>
						</a>
						<h3
							class="lg:text-[22px] text-lg font-bold mb-[12px] transition-all duration-500 group-hover:text-green">
							<a href="" class="line-clamp-3">Hiệu suất đầu tư gấp 3 lần VN-index,
								danh
								mục BSC10
								có gì đặc biệt?</a>
						</h3>
						<div class="mb-4 line-clamp-2">
							Báo cáo danh mục khuyến nghị đầu tư theo phong thủy ngũ hành năm 2024-
							Mệnh
							Thủy Báo cáo danh mục khuyến nghị đầu tư theo phong thủy ngũ hành năm
							2024-
							Mệnh Thủy
						</div>
						<a href=""
							class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105">
							<?php echo svg('arrow-btn', '20', '20') ?>
							Xem chi tiết
						</a>
					</div>
				</div>
				<div class="md:col-span-2 col-span-full">
					<ul class="space-y-[12px]">
						<?php
						for ($i = 0; $i < 4; $i++) {
						?>
							<li class="lg:p-6 p-4 bg-[#F5FCFF] rounded-lg group">
								<h3
									class="text-lg font-bold mb-3 transition-all duration-500 group-hover:text-green font-Helvetica">
									<a href="" class="line-clamp-2">
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10
										có gì đặc biệt?
									</a>
								</h3>
								<p class="line-clamp-1 font-Helvetica">
									Báo cáo danh mục khuyến nghị đầu tư theo phong thủy ngũ hành năm
									2024-
									Mệnh Thủy
								</p>

							</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="lg:my-[100px] my-20">
		<div class="container">
			<div class="lg:flex 2xl:gap-[70px] gap-12">
				<div class="lg:w-[320px]">
					<div class="sticky top-5 z-10">
						<ul
							class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report space-y-2 scroll_nav">
							<li>
								<a href="#ktdt"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Blog kiến thức đầu tư
								</a>
							</li>
							<li>
								<a href="#cdck"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Chuyển động chứng khoán
								</a>
							</li>
							<li>
								<a href="#bstt"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Bắt sóng thị trường
								</a>
							</li>
							<li>
								<a href="#stocktalk"
									class="flex items-center gap-4 2xl:text-lg text-base font-bold  [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
									Stocktalk
								</a>
							</li>
						</ul>
						<div class="mt-12">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
								alt=""
								class="rounded-lg transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>
				<div class="lg:flex-1">
					<div class="pb-10 mb-10 border-b border-[#E1E1E1]" id="ktdt">
						<div class="flex items-center justify-between mb-6">
							<h2 class="heading-title ">KIẾN THỨC ĐẦU TƯ</h2>
							<a href="" class="inline-block pl-5 pr-4 py-2 btn-base-yellow">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e('Xem tất cả', 'bsc') ?>
									<?php echo svg('arrow-btn-2') ?>
								</span>
							</a>
						</div>
						<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
							<?php
							for ($i = 0; $i < 2; $i++) {
							?>
								<div class="post_item font-Helvetica flex flex-col">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
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
									<div class="mt-auto">
										<a href=""
											class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs">
											Xem chi tiết
											<?php echo svg('arrow-btn', '12', '12') ?>
										</a>

									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="pb-10 mb-10 border-b border-[#E1E1E1]" id="cdck">
						<div class="flex items-center justify-between mb-6">
							<h2 class="heading-title">Chuyển động chứng khoán</h2>
							<a href="" class="inline-block pl-5 pr-4 py-2 btn-base-yellow">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e('Xem tất cả', 'bsc') ?>
									<?php echo svg('arrow-btn-2') ?>
								</span>
							</a>
						</div>
						<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
							<?php
							for ($i = 0; $i < 2; $i++) {
							?>
								<div class="flex flex-col">
									<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
										data-fancybox
										class="rounded-md overflow-hidden pt-[55.724%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video.png"
											alt="" class="absolute w-full h-full inset-0 object-cover">
										<div
											class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
											<?php echo svg('play', '62', '62') ?>
										</div>
									</a>
									<h4
										class="font-Helvetica line-clamp-2 font-bold mt-5 transition-all duration-500 hover:text-green">
										<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
											data-fancybox>
											CHUYỂN ĐỘNG CHỨNG KHOÁN #1| TIỀM NĂNG TTCK VIỆT NAM KHI ĐƯỢC
											NÂNG HẠNG?
										</a>
									</h4>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="pb-10 mb-10 border-b border-[#E1E1E1]" id="bstt">
						<div class="flex items-center justify-between mb-6">
							<h2 class="heading-title">Bắt sóng thị trường</h2>
							<a href="" class="inline-block pl-5 pr-4 py-2 btn-base-yellow">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e('Xem tất cả', 'bsc') ?>
									<?php echo svg('arrow-btn-2') ?>
								</span>
							</a>
						</div>
						<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
							<?php
							for ($i = 0; $i < 2; $i++) {
							?>
								<div class="flex flex-col">
									<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
										data-fancybox
										class="rounded-md overflow-hidden pt-[55.724%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video.png"
											alt="" class="absolute w-full h-full inset-0 object-cover">
										<div
											class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
											<?php echo svg('play', '62', '62') ?>
										</div>
									</a>
									<h4
										class="font-Helvetica line-clamp-2 font-bold mt-5 transition-all duration-500 hover:text-green">
										<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
											data-fancybox>
											CHUYỂN ĐỘNG CHỨNG KHOÁN #1| TIỀM NĂNG TTCK VIỆT NAM KHI ĐƯỢC
											NÂNG HẠNG?
										</a>
									</h4>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div id="stocktalk">
						<div class="flex items-center justify-between mb-6">
							<h2 class="heading-title">Stocktalk</h2>
							<a href="" class="inline-block pl-5 pr-4 py-2 btn-base-yellow">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e('Xem tất cả', 'bsc') ?>
									<?php echo svg('arrow-btn-2') ?>
								</span>
							</a>
						</div>
						<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
							<?php
							for ($i = 0; $i < 2; $i++) {
							?>
								<div class="flex flex-col">
									<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
										data-fancybox
										class="rounded-md overflow-hidden pt-[55.724%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video.png"
											alt="" class="absolute w-full h-full inset-0 object-cover">
										<div
											class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
											<?php echo svg('play', '62', '62') ?>
										</div>
									</a>
									<h4
										class="font-Helvetica line-clamp-2 font-bold mt-5 transition-all duration-500 hover:text-green">
										<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
											data-fancybox>
											CHUYỂN ĐỘNG CHỨNG KHOÁN #1| TIỀM NĂNG TTCK VIỆT NAM KHI ĐƯỢC
											NÂNG HẠNG?
										</a>
									</h4>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
