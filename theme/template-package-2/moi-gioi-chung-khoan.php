<?php

/**
Template Name: [Package-2] Môi giới chứng khoán
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				MÔI GIỚI CHỨNG KHOÁN TẠI BSC
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-4 gap-5':'block_slider-show-1 block_slider fli-dots-blue dot-bottom-40' ?>">
				<div class="rounded-2xl <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' xl:p-[34px] xl:pt-[43px] p-6 min-h-[414px] shadow-base':'min-h-[440px] py-10 px-7 w-full block_slider-item' ?>"
					style="background: linear-gradient(147deg, #FAFAFA 0%, #E5F4FF 78.66%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr1.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3
							class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
							Đa dạng sản phẩm <br>
							và tiện ích
						</h3>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
							Các sản phẩm của BSC luôn được cập nhật liên tục, với đầy đủ các tính
							năng tiên tiến như: đặt lệnh trên bảng giá, lệnh điều kiện, …
						</div>
					</div>
				</div>
				<div class="rounded-2xl <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' xl:p-[34px] xl:pt-[43px] p-6 min-h-[414px] shadow-base':'min-h-[440px] py-10 px-7 w-full block_slider-item' ?>"
					style="background: linear-gradient(327deg, #FAFAFA -10%, #E5F4FF 78.76%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr2.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3
							class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
							Phí giao dịch <br>
							hấp dẫn
						</h3>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
							Phí giao dịch hấp dẫn chỉ
							từ 0,08% 
						</div>
					</div>
				</div>
				<div class="rounded-2xl <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' xl:p-[34px] xl:pt-[43px] p-6 min-h-[414px] shadow-base':'min-h-[440px] py-10 px-7 w-full block_slider-item' ?>"
					style="background: linear-gradient(46deg, #E5F4FF 24.72%, #FAFAFA 105.17%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr3.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3
							class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
							Nền tảng giao dịch <br>
							hiện đại
						</h3>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
							Giao dịch nhanh chóng trên các kênh trực tuyến hiện đại: nền tảng
							WebTrading, ứng dụng BSC Smart Invest 
						</div>
					</div>
				</div>
				<div class="rounded-2xl <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' xl:p-[34px] xl:pt-[43px] p-6 min-h-[414px] shadow-base':'min-h-[440px] py-10 px-7 w-full block_slider-item' ?>"
					style="background: linear-gradient(226deg, #E5F4FF 26.88%, #FAFAFA 107.34%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr4.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3
							class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
							Hệ thống bảo mật <br>
							toàn diện
						</h3>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
							Công nghệ bảo mật tiên tiến, toàn diện, giúp bạn yên tâm trong mọi giao
							dịch
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<div class="bg-no-repeat bg-cover rounded-3xl overflow-hidden  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[438px] flex flex-col justify-center':'min-h-[472px] py-10 px-7' ?>"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-mg-mb.png)">
				<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[507px] ml-[114px]':'' ?>">
					<h3
						class="font-bold uppercase text-primary-300 !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[40px] text-3xl mb-6':'text-[22px] mb-[12px]' ?>">
						NHÀ MÔI GIỚI CHỨNG KHOÁN TỐT NHẤT VIỆT NAM 
					</h3>
					<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'font-bold text-xl':'font-medium' ?>">
						Trao tặng bởi Global Banking and Finance Review <br>
						2 năm liên tiếp - 2023 & 2024
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-gradient-blue-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:py-[119px] py-20':'py-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				GIAO DỊCH CHỨNG KHOÁN NGAY HÔM NAY
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'space-y-16 max-w-[1114px] mx-auto':'space-y-8' ?>">
				<div class="flex <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' gap-[54px] items-center':'gap-6 flex-col-reverse' ?>">
					<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[660px] lg:max-w-[70%]':'w-full' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame-1000009738.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="flex-1 font-Helvetica">
						<p class="font-bold mb-[6px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl':'text-base' ?>">
							Bước 1:
						</p>
						<h3
							class="text-primary-300 uppercase font-bold !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-4 text-2xl':'mb-[12px] text-xl' ?>">
							MỞ TÀI KHOẢN TRỰC TUYẾN
						</h3>
						<div
							class=" prose-a:text-primary-300 prose-a:font-bold prose-a:text-base <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg mb-3':'mb-[12px]' ?>">
							Sở hữu ngay tài khoản chứng khoán chỉ sau 3 phút thao tác <a href="">tại
								đây </a>
						</div>
						<p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								Hướng dẫn mở tài khoản trực tuyến
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>

						</p>
					</div>
				</div>
				<div class="lg:flex flex-row-reverse lg:gap-[54px] gap-10 items-center">
					<div class="lg:w-[660px] lg:max-w-[70%]">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame-1000009738.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="flex-1 font-Helvetica">
						<p class="text-xl font-bold mb-[6px]">
							Bước 2:
						</p>
						<h3
							class="text-primary-300 uppercase mb-4 font-bold text-2xl !leading-[1.35]">
							NỘP TIỀN VÀO TÀI KHOẢN 
						</h3>
						<div
							class="text-lg mb-3 prose-a:text-primary-300 prose-a:font-bold prose-a:text-base">
							Thực hiện thao tác chuyển tiền trực tuyến hoặc tại các điểm hỗ trợ của
							BSC trên toàn quốc 
						</div>
						<p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105">
								Hướng dẫn nộp tiền
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>
						</p>
					</div>
				</div>
				<div class="lg:flex lg:gap-[54px] gap-10 items-center">
					<div class="lg:w-[660px] lg:max-w-[70%]">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame-1000009738.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="flex-1 font-Helvetica">
						<p class="text-xl font-bold mb-[6px]">
							Bước 3:
						</p>
						<h3
							class="text-primary-300 uppercase mb-4 font-bold text-2xl !leading-[1.35]">
							TRẢI NGHIỆM ĐẦU TƯ  
						</h3>
						<div
							class="text-lg mb-3 prose-a:text-primary-300 prose-a:font-bold prose-a:text-base">
							Đặt lệnh mua/bán, thực hiện giao dịch 
						</div>
						<p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mb-3">
								Trải nghiệm BSC Web Trading
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>
						</p>
						<p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mb-3">
								BSC Smart Invest
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>
						</p>
						<p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mb-3">
								Hướng dẫn đặt lệnh
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> mgck_support_trader">
		<div class="container">
			<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				HỖ TRỢ GIAO DỊCH
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-3 gap-5':'block_slider block_slider-show-1 fli-dots-blue' ?>">
				<?php 
				 for ($i = 0; $i < 3; $i++) {
				 ?>
				 <div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[230px]':'min-h-[192px] w-full block_slider-item' ?>"
					 style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-gd-1.png)">
					 <div class="flex h-full">
						 <div class="w-1/2 h-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-auto pl-7 pb-10' ?>">
							 <div
								 class="flex flex-col justify-end h-full font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:ml-10 ml-6 pb-[43px]':'' ?>">
								 <p class="font-bold mb-1 2xl:text-xl text-lg">
									 Điểm hỗ trợ
								 </p>
								 <a href="#"
									 class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs mb-3">
									 Truy cập ngay
									 <?php echo svg('arrow-btn', '12', '12') ?>
								 </a>
 
							 </div>
						 </div>
						 <div class="w-1/2">
							 <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-gd.png"
								 alt="" class="lg:ml-auto">
						 </div>
					 </div>
				 </div>
				  <?php 
				 } 
				?>
				
			</div>
		</div>
	</section>
	<section class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-10':'my-[50px]' ?>">
		<div class="container">
			<div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-7 2xl:px-[75px] px-10 min-h-80 lg:grid-cols-2 grid-cols-1 gap-10 items-center' : 'gap-6 pt-9 pl-6' ?>"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-payment.png)">
				<div class="col">
					<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
						BIỂU PHÍ DỊCH VỤ
					</h2>
					<a href="#"
						class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
						<?php echo svg('arrow-btn', '16', '16') ?>
						Xem chi tiết
					</a>
				</div>
				<div class="col <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'max-w-[65%] ml-auto' ?>">
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image.png"
						alt="" class="mx-auto">
				</div>
			</div>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-10':'my-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				CÓ THỂ BẠN QUAN TÂM
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-2 gap-5':'space-y-5' ?>">
				<div class="rounded-xl overflow-hidden bg-no-repeat bg-cover flex  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[228px] px-11 py-5':'min-h-[184px] pl-5 py-3' ?>"
					style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-6.png)">
					<div class="w-1/2 h-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-auto pb-5' ?>">
						<div
							class="h-full font-Helvetica  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pb-[43px] ml-10 flex flex-col justify-end':'' ?>">
							<p class="font-bold mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'text-lg' ?>">
								Báo cáo phân tích
							</p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs">
								Truy cập ngay
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>

						</div>
					</div>
					<div class="w-1/2 h-full flex items-center justify-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'m-auto' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/OZI9ES1 1.png"
							alt="">
					</div>
				</div>
				<div class="rounded-xl overflow-hidden bg-no-repeat bg-cover lg:flex lg:px-11 px-8 min-h-[228px]"
					style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-6.png)">
					<div class="w-1/2 h-full">
						<div
							class="flex flex-col justify-end h-full ml-10 font-Helvetica pb-[43px]">
							<p class="font-bold mb-2 text-2xl">
								Ưu đãi từ BSC
							</p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs">
								Truy cập ngay
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>

						</div>
					</div>
					<div class="w-1/2 h-full flex items-center justify-center">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/OZI9ES1 1 (1).png"
							alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
