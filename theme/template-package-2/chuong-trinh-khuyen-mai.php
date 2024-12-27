<?php

/**
Template Name: [Package-2] Chương trình khuyến mãi
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="my-12 featured_news bg-gradient-blue-to-bottom-50">
		<div class="container">
			<div class="featured_news-list block_slider-show-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'dots-blue' ?>" data-flickity='{
				"draggable": true,
				"wrapAround": true,
				"imagesLoaded": true,
				"prevNextButtons": <?php echo wp_is_mobile() && bsc_is_mobile()? "false" : "true"; ?>,
				"pageDots": <?php echo wp_is_mobile() && bsc_is_mobile() ? "true" : "false"; ?>,
				"cellAlign": "left",
				"contain": true,
				"autoPlay": false,
				"selectedAttraction": 0.01,
				"friction": 0.2
			}'>
				<div class="w-full block_slider-item">
					<a href=""
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid group grid-cols-2 rounded-2xl overflow-hidden' : 'block' ?>">
						<div class="h-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-14 px-20' : ' rounded-tl-xl rounded-tr-xl px-4 py-[29px]' ?>"
							style="background-color:#ccece7;">
							<h2
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-[28px] text-xl mb-6' : 'text-lg mb-[12px]' ?> font-bold line-clamp-2  transition-all duration-500 group-hover:text-yellow-100 leading-snug">
								Ưu đãi đặc biệt khi mở tài khoản BSC dành cho các hội viên FireAnt
							</h2>
							<div class="flex items-center gap-2 font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-4 ':'mt-[12px] text-xs' ?>">
								<div class="inline-flex items-center gap-2">
									<?php echo svg('time') ?>
									<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
										Thời gian:
									<?php } ?>
								</div>
								<div class="font-medium">22/08/2024 - 22/10/2024</div>
							</div>
							<div class=" font-Helvetica  xl:max-w-[433px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-[14px] mb-12':'mt-2' ?>">
								<div
									class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
									<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
										style="width:60%"></p>
								</div>
								<div class="mt-2 text-xs">
									Thời gian khuyến mãi còn <strong class="text-primary-300">20
										ngày</strong>
								</div>
							</div>
							<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
								<div class="mt-auto">
									<p
										class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
										<span
											class="block relative z-10"><?php _e('Xem chi tiết', 'bsc') ?></span>
									</p>
	
								</div>
												
							<?php } ?>
						</div>
						<div class="relative w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-[55%]' : 'pt-[62.68%]' ?>">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/featured-img.png"
								alt="" class="object-cover absolute w-full h-full inset-0">
						</div>
						<?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
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
				<div class="w-full block_slider-item">
					<a href=""
						class="group grid lg:grid-cols-2 grid-cols-1 rounded-2xl overflow-hidden">
						<div class="lg:py-14 py-10 lg:px-20 px-6 h-full"
							style="background-color:#fff1d2;">
							<h2
								class="lg:2xl:text-[28px] text-xl font-bold line-clamp-2 mb-6 transition-all duration-500 group-hover:text-yellow-100 leading-snug">
								Ưu đãi đặc biệt khi mở tài khoản BSC dành cho các hội viên FireAnt
							</h2>
							<div class="mt-4 flex items-center gap-2 font-Helvetica">
								<div class="inline-flex items-center gap-2">
									<?php echo svg('time') ?>
									Thời gian:
								</div>
								<div class="font-medium">22/08/2024 - 22/10/2024</div>
							</div>
							<div class="mt-[14px] font-Helvetica mb-12 xl:max-w-[433px]">
								<div
									class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
									<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
										style="width:60%"></p>
								</div>
								<div class="mt-2 text-xs">
									Thời gian khuyến mãi còn <strong class="text-primary-300">20
										ngày</strong>
								</div>
							</div>
							<div class="mt-auto">
								<p
									class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
									<span
										class="block relative z-10"><?php _e('Xem chi tiết', 'bsc') ?></span>
								</p>

							</div>
						</div>
						<div class="relative w-full pt-[55%]">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/featured-img.png"
								alt="" class="object-cover absolute w-full h-full inset-0">
						</div>
					</a>
				</div>
				<div class="w-full block_slider-item">
					<a href=""
						class="group grid lg:grid-cols-2 grid-cols-1 rounded-2xl overflow-hidden">
						<div class="lg:py-14 py-10 lg:px-20 px-6 h-full"
							style="background-color:#EBF4FA ;">
							<h2
								class="lg:2xl:text-[28px] text-xl font-bold line-clamp-2 mb-6 transition-all duration-500 group-hover:text-yellow-100 leading-snug">
								Ưu đãi đặc biệt khi mở tài khoản BSC dành cho các hội viên FireAnt
							</h2>
							<div class="mt-4 flex items-center gap-2 font-Helvetica">
								<div class="inline-flex items-center gap-2">
									<?php echo svg('time') ?>
									Thời gian:
								</div>
								<div class="font-medium">22/08/2024 - 22/10/2024</div>
							</div>
							<div class="mt-[14px] font-Helvetica mb-12 xl:max-w-[433px]">
								<div
									class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
									<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
										style="width:60%"></p>
								</div>
								<div class="mt-2 text-xs">
									Thời gian khuyến mãi còn <strong class="text-primary-300">20
										ngày</strong>
								</div>
							</div>
							<div class="mt-auto">
								<p
									class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
									<span
										class="block relative z-10"><?php _e('Xem chi tiết', 'bsc') ?></span>
								</p>

							</div>
						</div>
						<div class="relative w-full pt-[55%]">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/featured-img.png"
								alt="" class="object-cover absolute w-full h-full inset-0">
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:grid-cols-3 md:grid-cols-2 gap-x-[21px] gap-y-[30px]':'md:grid-cols-2 grid-cols-1 gap-6' ?>">
				<?php
				for ($i = 0; $i < 9; $i++) {
				?>
					<div class="flex flex-col font-Helvetica">
						<a href="" class="block w-full pt-[64.66%] overflow-hidden rounded-xl relative">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image2.png"
								alt=""
								class="absolute w-full h-full inset-0 object-cover hover:scale-105 transition-all duration-500">
						</a>
						<h3
							class="font-bold transition-all duration-500 hover:text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-8 text-lg':'mt-6' ?>">
							<a href="" class="line-clamp-2">
								“Giao dịch ngay - Quay là trúng” cùng BSC WebTrading
							</a>
						</h3>
						<div class=" flex items-center gap-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-6':'mt-2 text-xs' ?>">
							<div class="inline-flex items-center gap-2">
								<?php echo svg('time') ?>
								<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
									Thời gian:
								<?php } ?>
							</div>
							<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'font-medium':'font-normal' ?>">22/08/2024 - 22/10/2024</div>
						</div>
						<div class="mt-[14px]">
							<div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
								<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
									style="width:60%"></p>
							</div>
							<div class="mt-2 text-xs">
								Thời gian khuyến mãi còn <strong class="text-primary-300">20
									ngày</strong>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
			<div class="pagination-center">
				<?php get_template_part('components/pagination') ?>
			</div>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<div class="rounded-2xl bg-no-repeat bg-cover overflow-hidden xl:pl-[113px] pl-20 xl:pr-[110px] pr-20px lg:grid lg:grid-cols-2 lg:py-0 py-5 lg:gap-5 items-center"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-blue-2.png)">
				<div class="py-10">
					<h2 class="heading-title mb-6">
						BẠN ĐÃ SẴN SÀNG ĐẦU TƯ <br>
						CHỨNG KHOÁN CÙNG BSC?
					</h2>
					<div class="space-y-2 pl-14">
						<a href=""
							class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
							Mở tài khoản
							<?php echo svg('arrow-btn', '12', '12') ?>
						</a>
						<div class="flex items-center">
							<a href=""
								class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
								Trải nghiệm BSC Web Trading
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>
							<a href=""
								class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
								BSC Smart Invest
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>
						</div>
					</div>
				</div>
				<div class="">
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23515 (1).png"
						alt="">
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
