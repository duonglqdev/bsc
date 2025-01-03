<?php

/**
Template Name:[Package-2] Trung tâm hỗ trợ khách hàng
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-gradient-blue-50 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:py-16 py-12':'py-[50px]' ?>">
		<div class="container">
			<form class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mx-auto max-w-[950px] flex gap-4':'' ?>" id="seach_support-content">
				<div
					class="flex-1 rounded-[10px] bg-white lg:px-[26px]  h-[50px] flex gap-3 items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-5':'px-[26px]' ?>">
					<?php echo svg('search', '24', '24') ?>
					<input type="text"
						class="w-full placeholder:text-[#898A8D] border-none focus:outline-0 focus:ring-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs p-0' ?>"
						placeholder="<?php _e('Tìm kiếm nội dung hỗ trợ', 'bsc') ?>">
				</div>
				<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
					<button type="submit"
						class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight lg:min-w-[210px] rounded-xl h-[50px]">
						<?php _e('Tìm kiếm', 'bsc') ?>
					</button>
									
				<?php } ?>
			</form>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-16':'mt-8' ?>">
				<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
					SỔ TAY GIAO DỊCH
				</h2>
				<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:grid-cols-3 grid-cols-2 lg:gap-12 gap-10':'gap-6' ?>">
					<?php
					for ($i = 0; $i < 7; $i++) {
					?>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'space-y-4':'space-y-3' ?>">
							<h4 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:text-2xl text-xl':'flex items-center justify-between text-lg' ?>">
								Mở tài khoản
								<?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
								<a href="#"
									class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs">
									<?php _e('Xem thêm', 'gnws') ?>
									<?php echo svg('arrow-btn', '12', '12') ?>
								</a>
							<?php } ?>
							</h4>
							<ul class="pl-5 list-disc text-primary-300  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg':'' ?>">
								<li>
									<a href=""
										class="hover:text-primary-600 transition-all duration-500">
										Mở tài khoản chứng khoán
									</a>
								</li>
								<li>
									<a href=""
										class="hover:text-primary-600 transition-all duration-500">
										Bộ điểu khoản và điều kiện
									</a>
								</li>
							</ul>
							<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
								<a href="#"
									class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105">
									<?php _e('Xem thêm', 'gnws') ?>
									<?php echo svg('arrow-btn', '12', '12') ?>
								</a>
							<?php } ?>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-10 ':'my-[50px]' ?>">
		<div class="container">
			<div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-7 2xl:px-[75px] px-10 min-h-80 lg:grid-cols-2 grid-cols-1 gap-10 items-center':'gap-6 pt-9 pl-6' ?>"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-payment-mb.png)">
				<div class="col">
					<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6':'mb-4' ?>">
						BIỂU PHÍ DỊCH VỤ
					</h2>
					<a href="#" class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
						<?php echo svg('arrow-btn', '16', '16') ?>
						Xem chi tiết
					</a>
				</div>
				<div class="col <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'max-w-[65%] ml-auto' ?>">
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image.svg"
						alt="" class="mx-auto">
				</div>
			</div>
		</div>
	</section>

	<section class="home_news bg-white lg:my-[100px] my-20">
		<div class="container">
			<div class="flex items-center justify-between mb-12">
				<h2 class="heading-title ">KIẾN THỨC ĐẦU TƯ</h2>
				<a href="" class="inline-block px-5 py-2 btn-base-yellow">
					<span class="inline-flex items-center gap-2 relative z-10">
						<?php _e('Xem tất cả', 'bsc') ?>
						<?php echo svg('arrow-btn-2') ?>
					</span>
				</a>
			</div>
			<div class="grid grid-cols-5 gap-5">
				<div class="md:col-span-3 col-span-full">
					<div class="group">
						<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e"
							class="block relative w-full pt-[52%] mb-6 overflow-hidden rounded-[10px] after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40" data-fancybox="">
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
						for ($i = 0; $i < 3; $i++) {
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
								<div class="mt-3">
									<a href="" class="text-green font-xs font-medium">
										Blog kiến thức
									</a>
								</div>
							</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:my-[100px] my-10':'my-[50px]' ?>">
		<div class="container">
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex items-center justify-between mb-12':'mb-6' ?>">
				<h2 class="heading-title">NHẬN ĐỊNH CHỨNG KHOÁN</h2>
				<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
					<a href="" class="inline-block px-5 py-2 btn-base-yellow">
						<span class="inline-flex items-center gap-2 relative z-10">
							<?php _e('Xem tất cả', 'bsc') ?>
							<?php echo svg('arrow-btn-2') ?>
						</span>
					</a>
				<?php } ?>
			</div>
			<div class="block_slider <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-3 -mx-[12px] has-nav no-dots':'block_slider-show-1 fli-dots-blue dot-30' ?>">
				<?php
				for ($i = 0; $i < 6; $i++) {
				?>
					<div class="block_slider-item  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-1/3 md:w-1/2 px-[12px]':'w-full' ?>">
						<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
							class="rounded-md overflow-hidden pt-[60%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video.png"
								alt="" class="absolute w-full h-full inset-0 object-cover">
							<div
								class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
								<?php echo svgClass('play', '','',!wp_is_mobile() && !bsc_is_mobile() ?'w-[62px] h-[62px]':'w-[38px] h-[38px]') ?>
							</div>
						</a>
						<h4
							class="font-Helvetica line-clamp-2 uppercase font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-5 transition-all duration-500 hover:text-primary-300':'text-xs mt-4' ?>">
							CHUYỂN ĐỘNG CHỨNG KHOÁN #1| TIỀM NĂNG TTCK VIỆT NAM KHI ĐƯỢC NÂNG HẠNG?
						</h4>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>
	<div class="py-20 bg-gradient-blue-250">
		<div class="container">
			<div class="lg:flex">
				<div class="2xl:pr-[50px] pr-10  lg:w-[575px] lg:max-w-[43%] shrink-0">
					<h2 class="heading-title 2xl:mb-[72px] mb-10">
						LIÊN HỆ TƯ VẤN
					</h2>
					<div class="relative w-full pt-[66.666%] overflow-hidden rounded-[10px]">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-contact.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
					</div>
				</div>
				<div class="flex-1 2xl:pl-[50px] pl-10 lg:border-l border-[#D2D2D2]">
					<h3 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl">
						<?php _e('Đăng ký thông tin hỗ trợ', 'gnws') ?>
					</h3>
					<div
						class="form_support relative font-Helvetica bg-white lg:px-8 px-5 lg:py-6 py-4 rounded-2xl">
						<?php echo do_shortcode('[contact-form-7 id="d5b6a0a" title="Đăng ký thông tin hỗ trợ"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
