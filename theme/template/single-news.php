<?php

/**
Template Name: Chi tiết tin tức
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="bg-gradient-blue-to-bottom-50 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-12 pb-16' : 'pt-[50px] mb-12' ?>">
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-[70px]' : '' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
				{ ?>
					<div class="w-80 max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10">
							<ul class="shadow-base py-6 pr-4 bg-white rounded-lg">
								<li>
									<a href="#"
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black  text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">Tin
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
								<img loading="lazy"
									src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
									alt=""
									class="rounded-lg transition-all duration-500 hover:scale-105">
							</div>
						</div>
					</div>

				<?php } ?>
				<div class="flex-1">
					<h1
						class="font-bold mb-6 !leading-snug <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-4xl' : 'text-[22px]' ?>">
						ĐHĐCĐ Chứng khoán BIDV (BSC): Kế hoạch LNTT 180 tỷ đồng, tiếp tục tìm kiếm
						đối tác chiến lược
					</h1>
					<div
						class="flex items-center text-xs  gap-[12px] font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8' : 'mb-6' ?>">
						<div class="flex gap-[12px] items-center">
							<?php echo svg( 'date' ) ?>
							<span>Feb 26, 2024</span>
						</div>
						-
						<span class="text-primary-300">Website</span>
						<div class="share flex items-center gap-[12px] ml-12">
							<strong>
								<?php _e( 'Share:', 'bsc' ) ?>
							</strong>
							<ul class="flex items-center gap-3">
								<li>
									<a href="">
										<?php echo svg( 'ins' ) ?>
									</a>
								</li>
								<li>
									<a href="">
										<?php echo svg( 'linkedin' ) ?>
									</a>
								</li>
								<li>
									<a href="">
										<?php echo svg( 'fb' ) ?>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div
						class="the_content font-Helvetica font-content text-justify <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
						<p>
							Discover the power of a captivating website header and footer. Enhance
							user experience, increase engagement and stand out from the crowd. Click
							now for expert ...
						</p>
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/single-news.png"
							alt="">
						<p>
							Nội dung về “Giới thiệu về Nghiệp vụ mua bán, sát nhập”
							Với kinh nghiệm làm việc với các doanh nghiệp trong và ngoài nước, NVS
							đã trở thành cầu nối uy tín giúp khách hàng tìm được đối tác kinh doanh
							phù hợp. Cùng với đó, Chúng tôi cung cấp cho khách hàng dịch vụ tư vấn
							M&A trọn gói, cùng các giải pháp toàn diện và dịch vụ hỗ trợ đồng bộ.
						</p>
						<p>Kinh nghiệm của NVS trong lĩnh vực mua bán, sát nhập.
							Khi tư vấn cho bên mua, NVS không chỉ giới thiệu các cơ hội đầu tư mà
							còn giúp khách hàng phân tích và có cái nhìn sâu sắc về ngành nghề kinh
							doanh, các đối thủ cạnh tranh, các rủi ro có thể phát sinh cho thương vụ
							đầu tư. NVS giúp bên mua xây dựng chiến lược đầu tư và thoái vốn phù hợp
							với tỷ suất lợi nhuận khách hàng mong muốn đạt được.</p>
						<p>
							Khi tư vấn cho bên bán, NVS không chỉ giới thiệu các nhà đầu tư tiềm
							năng mà còn đồng hành cùng khách hàng trong việc xác định giá trị doanh
							nghiệp, từ đó đưa ra gói tư vấn toàn diện bao gồm: tư vấn tái cơ cấu tài
							chính, thẩm định doanh nghiệp, lập kế hoạch phát triển doanh nghiệp, xây
							dựng chiến lược giá và chiến lược thương lượng, hỗ trợ trong việc đàm
							phán và lựa chọn nhà đầu tư.
						</p>
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/11cfaaf174632853f690d4adc519a57c.png"
							alt="">
						<p>
							Nội dung về “Giới thiệu về Nghiệp vụ mua bán, sát nhập”
							Với kinh nghiệm làm việc với các doanh nghiệp trong và ngoài nước, NVS
							đã trở thành cầu nối uy tín giúp khách hàng tìm được đối tác kinh doanh
							phù hợp. Cùng với đó, Chúng tôi cung cấp cho khách hàng dịch vụ tư vấn
							M&A trọn gói, cùng các giải pháp toàn diện và dịch vụ hỗ trợ đồng bộ.
						</p>
						<p>Kinh nghiệm của NVS trong lĩnh vực mua bán, sát nhập.
							Khi tư vấn cho bên mua, NVS không chỉ giới thiệu các cơ hội đầu tư mà
							còn giúp khách hàng phân tích và có cái nhìn sâu sắc về ngành nghề kinh
							doanh, các đối thủ cạnh tranh, các rủi ro có thể phát sinh cho thương vụ
							đầu tư. NVS giúp bên mua xây dựng chiến lược đầu tư và thoái vốn phù hợp
							với tỷ suất lợi nhuận khách hàng mong muốn đạt được.</p>
						<p>
							Khi tư vấn cho bên bán, NVS không chỉ giới thiệu các nhà đầu tư tiềm
							năng mà còn đồng hành cùng khách hàng trong việc xác định giá trị doanh
							nghiệp, từ đó đưa ra gói tư vấn toàn diện bao gồm: tư vấn tái cơ cấu tài
							chính, thẩm định doanh nghiệp, lập kế hoạch phát triển doanh nghiệp, xây
							dựng chiến lược giá và chiến lược thương lượng, hỗ trợ trong việc đàm
							phán và lựa chọn nhà đầu tư.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-16 pb-[106px]' : 'my-12' ?>">
		<div class="container">
			<h2 class="heading-title mb-6 normal-case">
				Bài viết liên quan
			</h2>

			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid md:grid-cols-3 grid-cols-1 gap-x-6 gap-y-8' : 'block_slider-show-1 dots-blue' ?>"
				<?php if ( wp_is_mobile() && bsc_is_mobile() )
				{ ?>
					data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
				<?php } ?>>
				<?php
				for ( $i = 0; $i < 3; $i++ )
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
	</section>
</main>
<?php
get_footer();
