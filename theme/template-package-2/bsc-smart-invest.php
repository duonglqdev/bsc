<?php

/**
Template Name: [Package-2] BSC smart invest
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-[#EBF4FA] py-4">
		<div class="container">
			<ul class="flex justify-center gap-10">
				<li>
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						BSC Smart Invest
					</a>
				</li>
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						BSC Web Trading
					</a>
				</li>


			</ul>
		</div>
	</section>
	<section class="bg-gradient-blue-400 py-[90px]">
		<div class="container">
			<div class="space-y-10 max-w-[1115px] mx-auto">
				<div class="md:flex gap-5 items-center">
					<div class="md:w-1/2">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sm1.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="md:w-1/2">
						<h3
							class="text-primary-300 uppercase mb-2 font-bold xl:text-[40px] text-3xl !leading-[1.35]">
							THÔNG MINH
						</h3>
						<p class="text-primary-300 text-2xl font-bold mb-6">
							Một ứng dụng - Mọi giao dịch
						</p>
						<div class="font-Helvetica">
							Tích hợp chứng khoán cơ sở, phái sinh, chứng quyền, ETFs…thuận tiện giao
							dịch đa dạng các sản phẩm đầu tư
						</div>
					</div>
				</div>
				<div class="md:flex gap-5 items-center flex-row-reverse">
					<div class="md:w-1/2">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sm2.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="md:w-1/2">
						<h3
							class="text-primary-300 uppercase mb-2 font-bold xl:text-[40px] text-3xl !leading-[1.35]">
							NHANH CHÓNG
						</h3>
						<p class="text-primary-300 text-2xl font-bold mb-6">
							Theo dõi thông tin nhanh chóng
						</p>
						<div class="font-Helvetica">
							Theo dõi thông tin, nắm bắt biến động và cập nhật tức thì cơ hội đầu tư
						</div>
					</div>
				</div>
				<div class="md:flex gap-5 items-center">
					<div class="md:w-1/2">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sm3.png"
							alt="" class="transition-all duration-500 hover:scale-105">
					</div>
					<div class="md:w-1/2">
						<h3
							class="text-primary-300 uppercase mb-2 font-bold xl:text-[40px] text-3xl !leading-[1.35]">
							DỄ DÀNG SỬ DỤNG
						</h3>
						<p class="text-primary-300 text-2xl font-bold mb-6">
							Cập nhật tức thì cơ hội đầu tư
						</p>
						<div class="font-Helvetica">
							Đặt lệnh, quản lý lệnh và danh mục đầu tư, cơ cấu tài sản tiện lợi
						</div>
					</div>
				</div>
			</div>
			<div class="relative rounded-2xl shadow-base overflow-hidden bg-cover bg-no-repeat flex xl:px-[114px] px-12 mt-10 min-h-[350px]"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-blue.png)">
				<div class="lg:w-1/2 lg:flex flex-col justify-center">
					<div class="lg:max-w-[480px]">
						<h2 class="heading-title mb-8">
							TẢI ỨNG DỤNG NGAY HÔM NAY
						</h2>
						<div class="flex gap-[44px] items-center">
							<div class="flex flex-col gap-[18px] lg:w-[184px] lg:max-w-[40%]">
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chplay.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ios.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
							</div>
							<strong class="text-primary-300"><?php _e( 'hoặc', 'bsc' ) ?></strong>
							<div class="qr p-3 bg-white max-w-[134px] w-full">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 110.png"
									alt="" class="transition-all duration-500 hover:scale-105">
							</div>
						</div>
					</div>
				</div>
				<div class="lg:w-1/2 lg:flex pt-[54px]">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23513.png"
						alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h2 class="heading-title mb-10">
				HƯỚNG DẪN SỬ DỤNG BSC SMART INVEST
			</h2>
			<div class="block_slider-show-2 slider-tutorial"
				data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": true, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":3000}'>
				<div class="block_slider-item lg:w-[57.686567%] w-full mr-[23px] min-h-[420px]">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide1.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 lg:pb-[65px] pb-10 lg:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
							<div class=" desc lg:max-w-[60%] h-full flex flex-col">
								<h3 class="font-bold text-2xl text-primary-300 mb-4">
									3 cách đặt lệnh <br> “THẦN TỐC” trên ứng <br> dụng  BSC Smart Invest
								</h3>
								<div class="mt-auto">
									<a href="#"
										class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
										<?php echo svg( 'arrow-btn', '16', '16' ) ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block_slider-item lg:w-[57.686567%] w-full mr-[23px] min-h-[420px]">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide2.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 lg:pb-[65px] pb-10 lg:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
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
											<?php echo svg( 'arrow-btn', '16', '16' ) ?>
											Khám phá ngay
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block_slider-item lg:w-[57.686567%] w-full mr-[23px] min-h-[420px]">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide3.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 lg:pb-[65px] pb-10 lg:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
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
										<?php echo svg( 'arrow-btn', '16', '16' ) ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block_slider-item lg:w-[57.686567%] w-full mr-[23px] min-h-[420px]">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide4.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 lg:pb-[65px] pb-10 lg:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
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
										<?php echo svg( 'arrow-btn', '16', '16' ) ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block_slider-item lg:w-[57.686567%] w-full mr-[23px] min-h-[420px]">
					<div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slide1.png"
							alt="" class="absolute w-full h-full inset-0 object-cover">
						<div
							class="lg:pt-[75px] pt-10 lg:pb-[65px] pb-10 lg:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
							<div class=" desc lg:max-w-[60%] h-full flex flex-col">
								<h3 class="font-bold text-2xl text-primary-300 mb-4">
								Tip đặt lệnh “thần <br> tốc” trên ứng dụng <br> BSC Smart Invest 
								</h3>
								<div class="mt-auto">
								<a href="#"
										class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
										<?php echo svg( 'arrow-btn', '16', '16' ) ?>
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