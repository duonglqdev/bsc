<?php

/**
Template Name: Archive tin tức
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="py-12 featured_news bg-gradient-blue-to-bottom-50">
		<div class="container">
			<div class="featured_news-list block_slider-show-1"
				data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": true, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":3000,"selectedAttraction": 0.01, "friction": 0.2}'>
				<?php
				for ( $i = 0; $i < 3; $i++ )
				{
					?>
					<div class="w-full block_slider-item">
						<a href=""
							class="group grid lg:grid-cols-2 grid-cols-1 rounded-2xl overflow-hidden">
							<div class="lg:py-14 py-10 lg:px-20 px-6 h-full"
								style="background-color:#ccece7;">
								<h2
									class="lg:text-[28px] text-xl font-bold line-clamp-2 mb-6 transition-all duration-500 group-hover:text-yellow-100 leading-snug">
									Ưu đãi đặc biệt khi mở tài khoản BSC dành cho các hội viên FireAnt
								</h2>
								<div class="line-clamp-3 font-Helvetica mb-10">
									Với mục tiêu nâng cao trải nghiệm tài chính cho các nhà đầu tư, từ
									ngày 16/09/2024, CTCP Chứng khoán BIDV (BSC) kết hợp cùng FireAnt,
									hân hạnh mang đến chương trình khuyến mãi hấp dẫn “Mở tài khoản BSC
									– Nhận quà liền tay”.
								</div>
								<div class="mt-auto">
									<p
										class="inline-block px-6 py-3 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white">
										<span
											class="block relative z-10"><?php _e( 'Xem chi tiết', 'bsc' ) ?></span>
									</p>

								</div>
							</div>
							<div class="relative w-full pt-[55%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/featured-img.png"
									alt="" class="object-cover absolute w-full h-full inset-0">
							</div>
						</a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<section class="lg:mt-[100px] mt-16 mb-16">
		<div class="container">
			<div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
				<div class="md:col-span-1 col-span-full">
					<div class="sticky top-5 z-10 scroll_nav">
						<ul class="shadow-menu py-6 pr-4 rounded-lg">
							<li>
								<a href="#news_product"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									sản phẩm</a>
							</li>
							<li>
								<a href="#news_service"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									dịch vụ</a>
							</li>
							<li>
								<a href="#news_market"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									thị trường</a>
							</li>
							<li>
								<a href="#news_activity"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									hoạt động</a>
							</li>
							<li>
								<a href="#news_internal"
									class="flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
									nội bộ</a>
							</li>
						</ul>
						<div class="mt-12">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
								alt="" class="rounded-lg transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>
				<div class="md:col-span-3 col-span-full">
					<div id="news_product">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin sản phẩm</h2>
							<a href=""
								class="inline-block px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
									<?php echo svg( 'arrow-btn-2' ) ?>
								</span>
							</a>
						</div>
						<div
							class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 mb-10 pb-10 border-b border-[#E1E1E1]">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div class="post_item font-Helvetica">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/post-img.png"
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
										class="block font-bold line-clamp-2 mb-3 hover:text-primary-300 transition-all duration-500">
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì đặc
										biệt?
									</a>
									<div class="line-clamp-3 text-[#4A5568] mb-4">
										BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
										chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
										chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
										chứng quyền có đảm bảo lớn nhất tại HoSE
									</div>
									<a href=""
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">
										Xem chi tiết
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
									</a>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div id="news_service">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin dịch vụ</h2>
							<a href=""
								class="inline-block px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
									<?php echo svg( 'arrow-btn-2' ) ?>
								</span>
							</a>
						</div>
						<div class="mb-10 pb-10 border-b border-[#E1E1E1] space-y-6">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
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
												Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
												trả lãi, gốc trái phiếu mã BSI32301
											</a>
											<div
												class="line-clamp-2 font-Helvetica leading-normal text-[#4A5568]">
												BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới
												trái phiếu chính phủ trên HNX. Năm 2020, BSC giữ vững vị
												thế Top 10 công ty chứng khoán có thị phần môi giới cổ
												phiếu, chứng chỉ quỹ và chứng quyền có đảm bảo lớn nhất
												tại HoSE
											</div>
										</div>
									</div>
									<a href=""
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
										Xem chi tiết
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
									</a>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div id="news_market">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin thị trường</h2>
							<a href=""
								class="inline-block px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
									<?php echo svg( 'arrow-btn-2' ) ?>
								</span>
							</a>
						</div>
						<div
							class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 mb-10 pb-10 border-b border-[#E1E1E1]">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div class="post_item font-Helvetica">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news-market.png"
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
										class="block font-bold line-clamp-2 mb-3 hover:text-primary-300 transition-all duration-500">
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì đặc
										biệt?
									</a>
									<div class="line-clamp-3 text-[#4A5568] mb-4">
										BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
										chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
										chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
										chứng quyền có đảm bảo lớn nhất tại HoSE
									</div>
									<a href=""
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">
										Xem chi tiết
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
									</a>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div id="news_activity">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin hoạt động</h2>
							<a href=""
								class="inline-block px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
									<?php echo svg( 'arrow-btn-2' ) ?>
								</span>
							</a>
						</div>
						<div
							class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 mb-10 pb-10 border-b border-[#E1E1E1]">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div class="post_item font-Helvetica">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news-act.png"
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
										class="block font-bold line-clamp-2 mb-3 hover:text-primary-300 transition-all duration-500">
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì đặc
										biệt?
									</a>
									<div class="line-clamp-3 text-[#4A5568] mb-4">
										BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
										chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
										chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
										chứng quyền có đảm bảo lớn nhất tại HoSE
									</div>
									<a href=""
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">
										Xem chi tiết
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
									</a>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div id="news_internal">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin nội bộ</h2>
							<a href=""
								class="inline-block px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
									<?php echo svg( 'arrow-btn-2' ) ?>
								</span>
							</a>
						</div>
						<div
							class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 mb-10 pb-10 border-b border-[#E1E1E1]">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div class="post_item font-Helvetica">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news-inter.png"
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
										class="block font-bold line-clamp-2 mb-3 hover:text-primary-300 transition-all duration-500">
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì đặc
										biệt?
									</a>
									<div class="line-clamp-3 text-[#4A5568] mb-4">
										BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
										chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
										chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
										chứng quyền có đảm bảo lớn nhất tại HoSE
									</div>
									<a href=""
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">
										Xem chi tiết
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
									</a>
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