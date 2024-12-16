<?php

/**
Template Name: [Package-2] Tư vấn đầu tư online
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-[#EBF4FA] py-4 sticky top-0 z-[20] sticky-nav">
		<div class="container">
			<ul class="flex justify-center gap-10">
				<li>
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Tư vấn đầu tư online
					</a>
				</li>
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Tư vấn có chuyên gia
					</a>
				</li>
			</ul>
		</div>
	</section>
	<section
		class="relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:py-[100px] py-20' : 'py-[50px]' ?>">
		<div class="container overflow-hidden">
			<div
				class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-2 gap-9 items-center' : 'gap-4' ?>">
				<div class="col-span-1">
					<h2
						class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : 'mb-6' ?>">
						Tư vấn đầu tư Online
					</h2>
					<div
						class="text-primary-300 font-bold text-justify <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-2xl text-xl' : 'text-lg' ?>">
						Là dịch vụ dành cho Nhà đầu tư chủ động giao dịch, dựa trên các công cụ hỗ
						trợ trực tuyến tại BSC: Nền tảng giao dịch trực tuyến, hệ thông báo cáo phân
						tích, các kênh tư vấn online (Tổng đài dịch vụ, Zalo OA...)
					</div>
				</div>
				<div class="col-span-1 relative z-[1]">
					<img loading="lazy"
						src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23517.png"
						alt="" class="transition-all duration-500 hover:scale-105 relative z-10">
					<?php if ( wp_is_mobile() && bsc_is_mobile() )
					{ ?>
						<div class="absolute top-0 -right-10 pointer-events-none w-3/4 h-full">
							<?php echo svg( 'before-mb' ) ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
		{ ?>
			<div class="absolute top-0 right-0 pointer-events-none -z-1">
				<img loading="lazy"
					src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/before.png" alt="">
			</div>
		<?php } ?>
	</section>
	<section class=" bg-gradient-blue-250  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[97px] py-20 xl:space-y-[100px] space-y-20':'space-y-[50px] py-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				ĐẶC QUYỀN CỦA TƯ VẤN ĐẦU TƯ ONLINE
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-2 gap-5':'' ?>">
				<div class="w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[660px]':'' ?>">
					<a href=""
						class="rounded-2xl overflow-hidden relative  group block <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[87.8787%]':'pt-[67%]' ?>">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23519.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
						<h4
							class="absolute w-full bottom-0 left-0  text-primary-300 font-bold after:absolute after:w-full after:h-full after:bg-gradient-blue-450 after:left-0 after:bottom-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-10 py-[26px] 2xl:text-2xl text-xl':'py-2 px-5 text-lg' ?>">
							<p class="2xl:max-w-[67%] relative z-10 line-clamp-2">
								Hệ thống báo cáo phân tích đa dạng, cập nhật tức thì các cơ hội đầu
								tư
							</p>
						</h4>
					</a>
				</div>
				<div class="flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-[18px]':'gap-4 mt-4' ?>">
					<a href=""
						class="relative block w-full overflow-hidden rounded-2xl group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[42.8%]':'pt-[67%]' ?>">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/1.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
						<h4
							class="absolute w-full bottom-0 left-0  text-primary-300 font-bold after:absolute after:w-full after:h-full after:bg-gradient-blue-500 after:bg-opacity-90 after:left-0 after:bottom-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-10 lg:py-[13px] py-5 2xl:text-2xl text-xl':'py-2 px-5 text-lg' ?>">
							<p class="2xl:max-w-[67%] relative z-10 line-clamp-2">
								Được hỗ trợ bởi chuyên gia <br>
								tư vấn BSC
							</p>
						</h4>
					</a>
					<a href=""
						class="relative block w-full overflow-hidden rounded-2xl group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[42.8%]':'pt-[67%]' ?>">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/1.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
						<h4
							class="absolute w-full bottom-0 left-0  text-primary-300 font-bold after:absolute after:w-full after:h-full after:bg-gradient-blue-500 after:bg-opacity-90 after:left-0 after:bottom-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-10 lg:py-[13px] py-5 2xl:text-2xl text-xl':'py-2 px-5 text-lg' ?>">
							<p class="2xl:max-w-[67%] relative z-10 line-clamp-2">
								Phí giao dịch hấp dẫn chỉ <br>
								từ 0.08%
							</p>
						</h4>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				PHÙ HỢP VỚI NHÀ ĐẦU TƯ
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-3 gap-5':'block_slider block_slider-show-1 fli-dots-blue dot-bottom-40' ?>">
				<?php 
				 for ($i = 0; $i < 3; $i++) {
				 ?>
				 <div class="rounded-2xl overflow-hidden min-h-[310px]  text-center group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-12 px-8 pt-9 pb-[46px]':'px-4 pt-8 pb-10 block_slider-item w-full' ?>"
						 style="background-color:#009E871a;">
						 <div class="mx-auto <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[330px]':'max-w-[85%]' ?>">
							 <div class="relative w-full pt-[47%]">
								 <img loading="lazy"
									 src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group.png"
									 alt=""
									 class="absolute w-full h-full inset-0 m-auto object-contain transition-all duration-500 group-hover:scale-105">
							 </div>
						 </div>
						 <div class="mt-4 font-semibold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-xl text-lg font-Helvetica':'text-xl' ?>">
							 Chủ động theo dõi thị trường 
						 </div>
					 </div>
				  <?php 
				 } 
				?>
			
			</div>
		</div>
	</section>
	<section class="relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 items-center':'' ?>">
				<div class="col-span-1 xl:-mr-[17px]">
					<div
						class="bg-gradient-blue-550 rounded-2xl shadow-base  relative z-10  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:py-10 py-5 2xl:px-[50px] px-10 min-h-[402px] flex flex-col justify-center':'px-6 pt-6 pb-[72px]' ?>">
						<h2 class="heading-title mb-6">
							TRẢI NGHIỆM DỊCH VỤ TƯ VẤN <br> ĐẦU TƯ ONLINE
						</h2>
						<ul
							class="list-icon space-y-[15px] font-Helvetica mb-6 text-primary-300 font-bold  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pl-8':'text-xs space-y-[14px]' ?>">
							<li class="list-icon-item">
								Mở tài khoản dễ dàng
							</li>
							<li class="list-icon-item">
								Phí giao dịch hấp dẫn
							</li>
							<li class="list-icon-item">
								Hệ thống giao dịch hiện đại
							</li>
							<li class="list-icon-item">
								Công cụ hỗ trợ đa dạng
							</li>
						</ul>
						<div class="flex items-center  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pl-8':'' ?>">
							<a href=""
								class="leading-none text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								Mở tài khoản
								<?php echo svg( 'arrow-btn', '12', '12' ) ?>
							</a>
							<a href=""
								class="leading-none text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								Giao dịch ngay
								<?php echo svg( 'arrow-btn', '12', '12' ) ?>
							</a>
						</div>
					</div>
				</div>
				<div class="col-span-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:-ml-[185px] -ml-24':'w-[85%] mx-auto relative z-10 -mt-10' ?>">
					<div class="relative overflow-hidden group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-2xl pt-[59.64%]':'rounded-lg pt-[66.67%]' ?>">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23499.png"
							alt=""
							class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-10">
		<div class="container">
			<div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover py-7 2xl:px-[75px] px-10 grid lg:grid-cols-2 grid-cols-1 gap-10 items-center min-h-80"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-payment.png)">
				<div class="col">
					<h2 class="heading-title mb-6">
						BIỂU PHÍ DỊCH VỤ
					</h2>
					<a href="#"
						class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
						<?php echo svg( 'arrow-btn', '16', '16' ) ?>
						Xem chi tiết
					</a>
				</div>
				<div class="col">
					<img loading="lazy"
						src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image.png"
						alt="" class="mx-auto">
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
