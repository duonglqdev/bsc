<?php

/**
Template Name: Archive tin tức
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="pt-12 featured_news lg:bg-gradient-blue-to-bottom-50">
		<div class="container">
			<div class="featured_news-list block_slider-show-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'dots-blue' ?>"
				data-flickity='{
				"draggable": true,
				"wrapAround": true,
				"imagesLoaded": true,
				"prevNextButtons": <?php echo wp_is_mobile() && bsc_is_mobile() ? "false" : "true"; ?>,
				"pageDots": <?php echo wp_is_mobile() && bsc_is_mobile() ? "true" : "false"; ?>,
				"cellAlign": "left",
				"contain": true,
				"autoPlay": false,
				"selectedAttraction": 0.01,
				"friction": 0.2
			}'>
			<?php 
			 for ($i = 0; $i < 3; $i++) {
			 ?>
			 <div class="w-full block_slider-item">
				 <a href=""
					 class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid group grid-cols-2 rounded-2xl overflow-hidden' : 'block' ?>">
					 <div class="h-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:py-14 py-8 lg:px-20 px-8' : 'py-[29px] px-4' ?>"
						 style="background-color:#ccece7;">
						 <h2
							 class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-[28px] text-xl mb-6' : 'text-lg mb-[12px]' ?> font-bold line-clamp-2  transition-all duration-500 group-hover:text-yellow-100 leading-snug">
							 Ưu đãi đặc biệt khi mở tài khoản BSC dành cho các hội viên FireAnt
						 </h2>
						 <div
							 class="line-clamp-3 font-Helvetica  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-base mb-10' : 'text-xs' ?>">
							 Với mục tiêu nâng cao trải nghiệm tài chính cho các nhà đầu tư, từ
							 ngày 16/09/2024, CTCP Chứng khoán BIDV (BSC) kết hợp cùng FireAnt,
							 hân hạnh mang đến chương trình khuyến mãi hấp dẫn “Mở tài khoản BSC
							 – Nhận quà liền tay”.
						 </div>
						 <?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
						 { ?>
							 <div class="mt-auto">
								 <p
									 class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
									 <span
										 class="block relative z-10"><?php _e( 'Xem chi tiết', 'bsc' ) ?></span>
								 </p>

							 </div>
						 <?php } ?>
					 </div>
					 <div
						 class="relative w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-[55%]' : 'pt-[62.68%]' ?>">
						 <img loading="lazy"
							 src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/featured-img.png"
							 alt="" class="object-cover absolute w-full h-full inset-0">
					 </div>
					 <?php if ( wp_is_mobile() && bsc_is_mobile() )
					 { ?>
						 <div class="mt-2">
							 <p
								 class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] font-semibold relative transition-all duration-500 rounded-lg py-3 px-6 text-center text-xs">
								 <span
									 class="block relative z-10"><?php _e( 'Xem chi tiết bài đăng', 'bsc' ) ?></span>
							 </p>

						 </div>
					 <?php } ?>
				 </a>
			 </div>
			  <?php 
			 } 
			?>
			</div>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:mt-[100px] mt-16 mb-16' : 'my-[50px]' ?>">
		<div class="container">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-[70px] gap-5' : '' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
				{ ?>
					<div class="w-80 max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10 scroll_nav">
							<ul class="shadow-base py-6 pr-4 rounded-lg bg-white scroll_nav space-y-2">
								<li class="">
									<a href="#tin-hoat-dong"
										class="flex items-center gap-4 md:text-lg font-bold [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl active">
										Tin hoạt động </a>
								</li>
								<li class="">
									<a href="#tin-dich-vu"
										class="flex items-center gap-4 md:text-lg font-bold [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
										Tin dịch vụ </a>
								</li>
								<li class="">
									<a href="#tin-san-pham"
										class="flex items-center gap-4 md:text-lg font-bold [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
										Tin sản phẩm </a>
								</li>
								<li class="">
									<a href="#tin-thi-truong"
										class="flex items-center gap-4 md:text-lg font-bold [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
										Tin thị trường </a>
								</li>
								<li class="">
									<a href="#tin-noi-bo"
										class="flex items-center gap-4 md:text-lg font-bold [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
										Tin nội bộ </a>
								</li>
							</ul>
							<div class="mt-12">
								<img loading="lazy"
									src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
									alt=""
									class="rounded-lg transition-all duration-500 hover:scale-105">
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="flex-1">
					<div id="news_product">
						<?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div
								class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between mb-6 news-collapse">
								Tin sản phẩm
								<?php echo svg( 'down-white', '20', '20' ) ?>
							</div>
						<?php } ?>
						<div
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'block' : 'hidden' ?>">
							<div
								class="flex justify-between items-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4 uppercase' ?>">
								<h2 class="heading-title normal-case">Tin sản phẩm</h2>
								<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
								{ ?>
									<a href="" class="inline-block px-5 py-2 btn-base-yellow">
										<span class="inline-flex items-center gap-2 relative z-10">
											<?php _e( 'Xem tất cả', 'bsc' ) ?>
											<?php echo svg( 'arrow-btn-2' ) ?>
										</span>
									</a>

								<?php } ?>
							</div>
							<div
								class="grid gap-y-8  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:grid-cols-2 grid-cols-1 gap-x-6 mb-10 pb-10 border-b border-[#E1E1E1]' : 'grid-cols-1' ?>">
								<?php
								for ( $i = 0; $i < 4; $i++ )
								{
									?>
									<div class="post_item font-Helvetica">
										<a href=""
											class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
											<img loading="lazy"
												src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/post-img.png"
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
											Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì
											đặc
											biệt?
										</a>
										<div class="line-clamp-3 text-paragraph mb-4">
											BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái
											phiếu
											chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10
											công ty
											chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
											chứng quyền có đảm bảo lớn nhất tại HoSE
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
							<?php if ( wp_is_mobile() && bsc_is_mobile() )
							{ ?>
								<div class="mt-8">
									<a href=""
										class="block px-6 py-[12px] btn-base-yellow text-xs font-bold text-center">
										<span class="inline-flex items-center gap-2 relative z-10">
											<?php _e( 'Xem tất cả', 'bsc' ) ?>
											<?php echo svg( 'arrow-btn-2' ) ?>
										</span>
									</a>

								</div>

							<?php } ?>
						</div>
					</div>
					<div id="bao-cao-thuong-nien">
						<div class="flex justify-between items-center mb-[26px]">
							<h2 class="2xl:text-2xl text-xl font-bold">Báo cáo thường niên</h2>
							<a href="http://website-uat.bsc.com.vn/bao-cao-thuong-nien/"
								class="px-5 py-3 btn-base-yellow">
								<span class="inline-flex items-center gap-3 relative z-10">
									<svg height="16px" width="16px" viewBox="0 0 20 20" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM14.03 10.53L11.03 13.53C10.88 13.68 10.69 13.75 10.5 13.75C10.31 13.75 10.12 13.68 9.97 13.53C9.68 13.24 9.68 12.76 9.97 12.47L11.69 10.75H6.5C6.09 10.75 5.75 10.41 5.75 10C5.75 9.59 6.09 9.25 6.5 9.25H11.69L9.97 7.53C9.68 7.24 9.68 6.76 9.97 6.47C10.26 6.18 10.74 6.18 11.03 6.47L14.03 9.47C14.32 9.76 14.32 10.24 14.03 10.53Z"
											fill="currentColor"></path>
									</svg>
									Xem tất cả </span>
							</a>
						</div>
						<div class="mb-10 pb-10 space-y-6 border-b border-[#E1E1E1]">
							<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-4 gap-5':'-mx-2' ?>" <?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
												data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'
							<?php } ?>>
							<?php 
							 for ($i = 0; $i < 4; $i++) {
							 ?>
							 <div class="flex flex-col document_item-popup cursor-pointer <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'w-[45%] px-2' ?>"
								 data-modal-target="document-modal"
								 data-modal-toggle="document-modal"
								 data-doccument="http://files-uat.bsc.com.vn/news/2024/2023_638682886069170143.pdf"
								 data-id="23973">
								 <p
									 class="block overflow-hidden w-full pt-[139%] rounded-lg group relative">
									 <img loading="lazy"
										 src="http://files-uat.bsc.com.vn/news/2024/image_638676852551732540.png"
										 alt=" Báo cáo thường niên 2023"
										 class="absolute w-full h-full inset-0 object-cover group-hover:scale-105  transition-all duration-500">
								 </p>
								 <h3
									 class="mt-4 mb-2 text-lg font-semibold leading-normal transition-all duration-500 hover:text-primary-300">
									 <p class="line-clamp-2 main_title">
										 Báo cáo thường niên 2023 </p>
								 </h3>
								 <p
									 class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
									 Xem nội dung <svg width="21" height="20" viewBox="0 0 21 20"
										 fill="none" xmlns="http://www.w3.org/2000/svg">
										 <path fill-rule="evenodd" clip-rule="evenodd"
											 d="M10.1622 1C15.1294 1 19.1621 5.03275 19.1621 9.99994C19.1621 14.9673 15.1294 19 10.1622 19C5.19499 19 1.16211 14.9673 1.16211 9.99994C1.16211 5.03275 5.19499 1 10.1622 1ZM10.1622 1.7803C14.6988 1.7803 18.3818 5.46335 18.3818 9.99994C18.3818 14.5365 14.6988 18.2197 10.1622 18.2197C5.6256 18.2197 1.94241 14.5365 1.94241 9.99994C1.94241 5.46335 5.6256 1.7803 10.1622 1.7803Z"
											 fill="#909090"></path>
										 <path fill-rule="evenodd" clip-rule="evenodd"
											 d="M10.4167 14.3565C10.3569 14.4375 10.2622 14.4854 10.1615 14.4854C10.0609 14.4854 9.96616 14.4375 9.90632 14.3565C9.18318 13.3764 7.11736 10.5765 6.26682 9.42373C6.19578 9.32744 6.18499 9.19937 6.23886 9.09257C6.2928 8.98571 6.40227 8.91839 6.52195 8.91839C8.10085 8.91839 12.2222 8.91839 13.801 8.91839C13.9207 8.91839 14.0302 8.98571 14.0841 9.09257C14.1381 9.19937 14.1273 9.32744 14.0562 9.42373C13.2056 10.5765 11.1399 13.3764 10.4167 14.3565Z"
											 fill="#909090"></path>
										 <path fill-rule="evenodd" clip-rule="evenodd"
											 d="M14.1184 7.2242C14.1184 7.59131 13.8203 7.88931 13.4533 7.88931H6.87022C6.50314 7.88931 6.20508 7.59131 6.20508 7.2242C6.20508 6.85714 6.50314 6.55908 6.87022 6.55908H13.4533C13.8203 6.55908 14.1184 6.85714 14.1184 7.2242Z"
											 fill="#909090"></path>
									 </svg>
								 </p>
							 </div>
							  <?php 
							 } 
							?>
								
							</div>
						</div>
					</div>
					<div id="news_service">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin dịch vụ</h2>
							<a href="" class="inline-block px-5 py-2 btn-base-yellow">
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
									class="news_service-item md:flex items-center justify-between lg:gap-20 gap-5">
									<div class="flex items-center">
										<div
											class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
											<p
												class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
												Thứ 2
											</p>
											<p
												class="flex-1 flex flex-col justify-center items-center 2xl:text-2xl text-xl font-bold bg-primary-50 w-full">
												16
											</p>
										</div>
										<div class="lg:ml-[30px] ml-5">
											<a href=""
												class="font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300">
												Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
												trả lãi, gốc trái phiếu mã BSI32301
											</a>
											<div
												class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
												BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới
												trái phiếu chính phủ trên HNX. Năm 2020, BSC giữ vững vị
												thế Top 10 công ty chứng khoán có thị phần môi giới cổ
												phiếu, chứng chỉ quỹ và chứng quyền có đảm bảo lớn nhất
												tại HoSE
											</div>
										</div>
									</div>
									<a href=""
										class="text-green font-semibold lg:inline-flex hidden gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
										Xem chi tiết
										<?php echo svg( 'arrow-btn', '12', '12' ) ?>
									</a>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div id="news_market"
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : '[&:not(:last-child)]:pb-6 [&:not(:last-child)]:mb-6 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1]' ?>">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin thị trường</h2>
							<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
							{ ?>
								<a href="" class="inline-block px-5 py-2 btn-base-yellow">
									<span class="inline-flex items-center gap-2 relative z-10">
										<?php _e( 'Xem tất cả', 'bsc' ) ?>
										<?php echo svg( 'arrow-btn-2' ) ?>
									</span>
								</a>

							<?php } ?>
						</div>
						<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 mb-10 pb-10 border-b border-[#E1E1E1]' : 'block_slider-show-1 dots-blue' ?>"
							<?php if ( wp_is_mobile() && bsc_is_mobile() )
							{ ?>
								data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
							<?php } ?>>
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div class="post_item font-Helvetica w-full">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img loading="lazy"
											src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news-market.png"
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
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì đặc
										biệt?
									</a>
									<div class="line-clamp-3 text-paragraph mb-4">
										BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
										chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
										chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
										chứng quyền có đảm bảo lớn nhất tại HoSE
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
						<?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div class="mt-12">
								<a href=""
									class="block px-6 py-[12px] btn-base-yellow text-xs font-bold text-center">
									<span class="inline-flex items-center gap-2 relative z-10">
										<?php _e( 'Xem tất cả', 'bsc' ) ?>
										<?php echo svg( 'arrow-btn-2' ) ?>
									</span>
								</a>
							</div>
						<?php } ?>
					</div>
					<div id="news_activity">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin hoạt động</h2>
							<a href="" class="inline-block px-5 py-2 btn-base-yellow">
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
										<img loading="lazy"
											src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news-act.png"
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
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì đặc
										biệt?
									</a>
									<div class="line-clamp-3 text-paragraph mb-4">
										BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
										chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
										chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
										chứng quyền có đảm bảo lớn nhất tại HoSE
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
					<div id="news_internal">
						<div class="flex justify-between items-center mb-6">
							<h2 class="heading-title normal-case">Tin nội bộ</h2>
							<a href="" class="inline-block px-5 py-2 btn-base-yellow">
								<span class="inline-flex items-center gap-2 relative z-10">
									<?php _e( 'Xem tất cả', 'bsc' ) ?>
									<?php echo svg( 'arrow-btn-2' ) ?>
								</span>
							</a>
						</div>
						<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8">
							<?php
							for ( $i = 0; $i < 4; $i++ )
							{
								?>
								<div class="post_item font-Helvetica">
									<a href=""
										class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
										<img loading="lazy"
											src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news-inter.png"
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
										Hiệu suất đầu tư gấp 3 lần VN-index, danh mục BSC10 có gì đặc
										biệt?
									</a>
									<div class="line-clamp-3 text-paragraph mb-4">
										BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới trái phiếu
										chính phủ trên HNX. Năm 2020, BSC giữ vững vị thế Top 10 công ty
										chứng khoán có thị phần môi giới cổ phiếu, chứng chỉ quỹ và
										chứng quyền có đảm bảo lớn nhất tại HoSE
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


				</div>
			</div>

		</div>
	</section>

</main>
<?php
get_footer();
