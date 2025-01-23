<?php

/**
Template Name: [Package-2] BSC smart invest
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-[#EBF4FA] sticky top-0 z-[20] sticky-nav <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-4':'py-[12px]' ?>">
		<div class="container">
			<ul class="flex justify-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-10':'gap-4' ?>">
				<li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'flex-1' ?>">
					<a href="#"
						class="active block text-center font-bold  [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg py-[12px] px-10':'text-xs py-3 px-5' ?>">
						BSC Smart Invest
					</a>
				</li>
				<li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'flex-1' ?>">
					<a href="#"
						class="block text-center font-bold  [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg py-[12px] px-10':'text-xs py-3 px-5' ?>">
						BSC Web Trading
					</a>
				</li>


			</ul>
		</div>
	</section>
	<section class="bg-gradient-blue-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[90px]':'py-[50px]' ?>">
		<div class="container">
			<div class="space-y-10 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[1115px] mx-auto':'' ?>">
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-5 items-center':'' ?>">
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2':'w-full' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sm1.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2':'w-full' ?>">
						<h3
							class="text-primary-300 uppercase mb-2 font-bold !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[40px] text-3xl':'mt-4 text-2xl text-center' ?>">
							THÔNG MINH
						</h3>
						<p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 text-2xl':'mb-[12px] text-lg text-center' ?>">
							Một ứng dụng - Mọi giao dịch
						</p>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-center text-xs' ?>">
							Tích hợp chứng khoán cơ sở, phái sinh, chứng quyền, ETFs…thuận tiện giao
							dịch đa dạng các sản phẩm đầu tư
						</div>
					</div>
				</div>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-5 items-center flex-row-reverse':'' ?>">
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2':'w-full' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sm2.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2':'w-full' ?>">
					<h3
					class="text-primary-300 uppercase mb-2 font-bold !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[40px] text-3xl':'mt-4 text-2xl text-center' ?>">
							NHANH CHÓNG
						</h3>
						<p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 text-2xl':'mb-[12px] text-lg text-center' ?>">
							Theo dõi thông tin nhanh chóng
						</p>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-center text-xs' ?>">
							Theo dõi thông tin, nắm bắt biến động và cập nhật tức thì cơ hội đầu tư
						</div>
					</div>
				</div>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-5 items-center':'' ?>">
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2':'w-full' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sm3.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2':'w-full' ?>">
					<h3
					class="text-primary-300 uppercase mb-2 font-bold !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[40px] text-3xl':'mt-4 text-2xl text-center' ?>">
							DỄ DÀNG SỬ DỤNG
						</h3>
						<p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 text-2xl':'mb-[12px] text-lg text-center' ?>">
							Cập nhật tức thì cơ hội đầu tư
						</p>
						<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-center text-xs' ?>">
							Đặt lệnh, quản lý lệnh và danh mục đầu tư, cơ cấu tài sản tiện lợi
						</div>
					</div>
				</div>
			</div>
			<div class="relative rounded-2xl shadow-base overflow-hidden bg-cover bg-no-repeat mt-10 min-h-[350px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex 2xl:px-24 px-12 gap-5 ':'pt-[30px] px-[22px]' ?>"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-blue.png)">
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2 lg:flex flex-col justify-center':'' ?>">
					<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-8':'mb-6' ?>">
						TẢI ỨNG DỤNG NGAY HÔM NAY
					</h2>
					<div class="2xl:max-w-[480px]">
						<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-[44px] items-center ':'' ?>">
							<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex flex-col gap-[18px] w-[184px] max-w-[40%]':'grid grid-cols-2 gap-3' ?>">
								<a href="">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chplay.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
								<a href="">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ios.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
							</div>
							<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
								<strong class="text-primary-300"><?php _e('hoặc', 'bsc') ?></strong>
								<div class="qr p-3 bg-white max-w-[134px] w-full">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 110.png"
										alt="" class="transition-all duration-500 hover:scale-105">
								</div>
												
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2 flex pt-[54px]':'pt-6' ?>">
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23513.png"
						alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10 hidden-br-pc':'mb-6' ?>">
				HƯỚNG DẪN SỬ DỤNG BSC SMART INVEST
			</h2>
			<div class="slider-tutorial <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-2':'block_slider-show-1 dots-left fli-dots-blue' ?>"
				data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'true':'false' ?>, "pageDots": <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'false':'true' ?>, "cellAlign": "left","contain": true, "autoPlay":false}'>
				<div class="block_slider-item min-h-[420px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:w-[57.686567%] md:w-[70%] w-full lg:mr-[23px]':'w-full' ?>">
					<div class="relative rounded-[20px] overflow-hidden h-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[54.33376%]':'pt-[125.373%]' ?>">
						
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide1.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">

						<div
							class="absolute w-full h-full inset-0 z-10 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:pt-[75px] pt-10 2xl:pb-[65px] pb-10 2xl:px-[53px] px-8':'py-10 px-5' ?>">
							<div class="desc h-full flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[60%]':'' ?>">
								<h3 class="font-bold text-primary-300 hidden-br-mb <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl mb-4':'text-lg' ?>">
									3 cách đặt lệnh <br> “THẦN TỐC” trên ứng <br> dụng BSC Smart Invest
								</h3>
								<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-auto':'mt-4' ?>">
									<a href="#"
										class="btn-base-yellow inline-flex items-center gap-x-3 text-xs <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] pl-4 pr-6':'px-5 py-3' ?>">
										<?php echo svg('arrow-btn', '16', '16') ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block_slider-item min-h-[420px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[57.686567%] w-full lg:mr-[23px]':'w-full' ?>">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide2.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 2xl:pb-[65px] pb-10 2xl:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
							<div
								class=" desc lg:max-w-[60%] h-full flex flex-col text-white">
								<h3 class="font-bold text-2xl text-white mb-4">
									Sử dụng lệnh điều kiện tối ưu lợi nhuận & quản trị rủi ro 
								</h3>

								<div
									class="prose-ul:pl-5 prose-ul:list-disc text-white font-Helvetica mb-5">
									<ul>
										<li>
											Nắm bắt cơ hội mua bán theo kỳ vọng
										</li>
										<li>
											Quản trị rủi ro cho danh mục
										</li>
										<li>
											Chốt lời/cắt lỗ tự động khi không có thời gian theo dõi
											thị trường 
										</li>
									</ul>
								</div>

								<div class="mt-auto">
									<a href="#" class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
										<?php echo svg('arrow-btn', '16', '16') ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
						<?php echo svgClass('after-slider', '', '', 'absolute w-full h-full inset-0 pointer-events-none') ?>
					</div>
				</div>
				<div class="block_slider-item min-h-[420px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[57.686567%] w-full lg:mr-[23px]':'w-full' ?>">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide3.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 2xl:pb-[65px] pb-10 2xl:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
							<div
								class=" desc lg:max-w-[60%] h-full flex flex-col text-white">
								<h3 class="font-bold text-2xl text-white mb-4">
									Thiết lập cảnh báo cho các biến động bất thường của cổ phiếu 
								</h3>

								<div
									class="prose-ul:pl-5 prose-ul:list-disc text-white font-Helvetica mb-5">
									<p>Khi cổ phiếu hoặc chỉ số Index đạt mức cảnh bảo thiết lập, hệ
										thống sẽ gửi thông báo tới nhà đầu tư, giúp quản trị rủi ro
										hiệu quả và nắm bắt tức thì cơ hội từ thị trường. </p>
								</div>

								<div class="mt-auto">
									<a href="#"
										class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
										<?php echo svg('arrow-btn', '16', '16') ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
						<?php echo svgClass('after-slider', '', '', 'absolute w-full h-full inset-0 pointer-events-none') ?>
					</div>
				</div>
				<div class="block_slider-item min-h-[420px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[57.686567%] w-full lg:mr-[23px]':'w-full' ?>">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide1.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 2xl:pb-[65px] pb-10 2xl:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
							<div
								class=" desc lg:max-w-[60%] h-full flex flex-col text-white">
								<h3 class="font-bold text-2xl text-white mb-4">
									Xác thực 2 yếu tố tăng cường bảo mật, giao dịch an toàn 
								</h3>

								<div
									class="prose-ul:pl-5 prose-ul:list-disc text-white font-Helvetica mb-5">
									<p>Hệ thống xác thực nhiều lớp giúp tăng cường bảo vệ thông tin
										và tài sản cho khách hàng, đảm bảo tính nhanh chóng, thuận
										tiện khi giao dịch. </p>
								</div>

								<div class="mt-auto">
									<a href="#"
										class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
										<?php echo svg('arrow-btn', '16', '16') ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block_slider-item min-h-[420px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[57.686567%] w-full lg:mr-[23px]':'w-full' ?>">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide1.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 2xl:pb-[65px] pb-10 2xl:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
							<div class=" desc lg:max-w-[60%] h-full flex flex-col">
								<h3 class="font-bold text-2xl text-primary-300 mb-4">
									Tip đặt lệnh “thần <br> tốc” trên ứng dụng <br> BSC Smart Invest 
								</h3>
								<div class="mt-auto">
									<a href="#"
										class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
										<?php echo svg('arrow-btn', '16', '16') ?>
										Khám phá ngay
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
