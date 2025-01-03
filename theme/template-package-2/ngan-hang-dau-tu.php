<?php

/**
Template Name:[Package-2] Ngân hàng đầu tư
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<!-- Tab nav -->
	<section class="bg-primary-50 sticky z-10 top-0 menu_navigation <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:py-4 py-3':'py-[12px]' ?>">
		<div class="container">
			<ul class="flex bank-nav-tab nav-scroll-mb hidden-br-pc <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'justify-between overflow-x-auto gap-[12px] whitespace-nowrap':'overflow-x-auto gap-[12px]' ?>">
				<li>
					<a href=""
						class=" inline-block font-bold xl:text-lg  [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-10 px-5 xl:py-4 py-3':'whitespace-nowrap min-w-[40%] text-xs text-left px-4 py-3 border border-primary-300' ?>">
						Dịch vụ <br> thị trường vốn (ECM)
					</a>
				</li>
				<li>
					<a href=""
						class="inline-block font-bold xl:text-lg [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-10 px-5 xl:py-4 py-3':'whitespace-nowrap min-w-[40%] text-xs text-left px-4 py-3 border border-primary-300' ?>">
						Dịch vụ <br> thị trường nợ (DCM)
					</a>
				</li>
				<li>
					<a href=""
						class="active inline-block font-bold xl:text-lg [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-10 px-5 xl:py-4 py-3':'whitespace-nowrap min-w-[40%] text-xs text-left px-4 py-3 border border-primary-300' ?>">
						Tư vấn <br> tài chính doanh nghiệp
					</a>
				</li>
				<li>
					<a href=""
						class="inline-block font-bold xl:text-lg [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-10 px-5 xl:py-4 py-3':'whitespace-nowrap min-w-[40%] text-xs text-left px-4 py-3 border border-primary-300' ?>">
						Tư vấn <br> mua bán sát nhập M&A
					</a>
				</li>
			</ul>
		</div>
	</section>
	<!-- Tab content -->
	<?php
	for ($j = 1; $j < 5; $j++) {
	?>
		<section class="<?php echo $j == 1 ? 'block' : 'hidden' ?> tab-content"
			id="bank-tab-<?php echo $j ?>">
			<div class="content_image <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] lg:my-20 my-[50px]':'my-[50px]' ?>">
				<div class="container">
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:grid lg:grid-cols-2 xl:gap-0 gap-10 lg:space-y-0 space-y-5':'' ?>">
						<div class="col-span-1 xl:pr-[42px]">
							<h2 class="heading-title mb-4">
								DỊCH VỤ THỊ TRƯỜNG VỐN (ECM)
							</h2>
							<div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								<p class="mb-4 font-bold">BSC cung cấp đa dạng các dịch vụ thị trường
									vốn
									bao gồm:</p>
								<ul class="flex-1 list-icon <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'space-y-4':'space-y-[12px]' ?>">
									<li class="font-semibold list-icon-item">
										Tư vấn cổ phần hóa
									</li>
									<li class="font-semibold list-icon-item">
										Tư vấn chào bán cổ phần lần đầu ra công chúng (IPO)
									</li>
									<li class="font-semibold list-icon-item">
										Tư vấn phát hành riêng lẻ cổ phiếu
									</li>
									<li class="font-semibold list-icon-item">
										Tư vấn đăng ký niêm yết cổ phiểu
									</li>
								</ul>
								<div class="font-bold mt-4 text-justify">
									Với nhiều năm kinh nghiệm trên thị trường, đội ngũ chuyên gia của
									BSC sẽ hỗ trợ doanh nghiệp một cách toàn diện thông qua hoạt động
									cung cấp dịch vụ trọn gói, từ tư vấn xây dựng phương án, cấu trúc
									giao dịch, chuẩn bị hồ sơ, cho đến tư vấn đàm phán điều kiện điều
									khoản, và các công tác hỗ trợ sau giao dịch.
								</div>
							</div>
							<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
								<div class="mt-8">
									<a href=""
										class="btn-base-yellow px-6 py-4 inline-flex items-center gap-x-3">
										<?php echo svg('arrow-btn', '16', '16') ?>
										Liên hệ tư vấn
									</a>
								</div>
							<?php } ?>
						</div>
						<div class="xl:pl-[22px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'col-span-1':'mt-6' ?>">
							<div class="relative overflow-hidden pt-[65.743%] w-full rounded-2xl">
								<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ba1.png"
									alt=""
									class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
							</div>
							<?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
								<div class="mt-8">
									<a href=""
										class="btn-base-yellow px-6 py-3 flex items-center justify-center gap-x-3 rounded-md text-xs">
										<?php echo svg('arrow-btn', '16', '16') ?>
										Liên hệ tư vấn
									</a>
								</div>
							<?php } ?>
						</div>
					</div>

				</div>
			</div>
			<div class="bg-[#F3F9FC] slider_customer <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[121px] py-20':'py-[37.35px]' ?>">
				<div class="container">
					<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-8':'mb-6' ?>">
						KHÁCH HÀNG TIÊU BIỂU
					</h2>
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[1190px] mx-auto':'' ?>">
						<div class=" block__slider-marquee <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-6':'block_slider-show-3' ?>">
							<?php
							for ($i = 0; $i < 12; $i++) {
							?>
								<div class="block_slider-item lg:w-1/6 md:w-1/4 w-1/3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] mx-[12px]':'py-2 mx-[7px]' ?>">
									<a href="<?php echo check_link(get_sub_field('link')) ?>"
										class="block relative partner-item pt-[45%] overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-lg':'rounded' ?>">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bidv.png"
											alt=""
											class="absolute w-full max-w-[80%] h-full object-contain inset-0 m-auto">
									</a>
								</div>
							<?php
							}
							?>
						</div>
						<div class="block__slider-marquee marquee-rtl <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-6':'block_slider-show-3' ?>">
							<?php
							for ($i = 0; $i < 12; $i++) {
							?>
								<div class="block_slider-item lg:w-1/6 md:w-1/4 w-1/3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] mx-[12px]':'py-2 mx-[7px]' ?>">
									<a href="<?php echo check_link(get_sub_field('link')) ?>"
										class="block relative partner-item pt-[45%] overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110 shadow-base <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-lg':'rounded' ?>">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bidv.png"
											alt=""
											class="absolute w-full max-w-[80%] max-h-[80%] object-contain inset-0 m-auto">
									</a>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="reward_feature <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
				<div class="container">
					<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
						GIẢI THƯỞNG NỔI BẬT
					</h2>
					<div class="rounded-2xl overflow-hidden <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex':'' ?>">
						<div
							class="active grow cursor-pointer bg-gradient-blue-150 award__item font-Helvetica  transition-all <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[398px] flex gap-10 justify-center items-center py-10':'py-9 px-6' ?>">
							<div
								class="flex flex-col items-center justify-center w-full award__item-nav <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mx-auto ' ?>">
								<div class="mb-4 hide-open hidden">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.svg"
										alt="" class="max-w-10 h-auto object-contain w-full">
								</div>

								<div
									class="active main-img w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'[&:not(.active)]:mx-auto ml-10 max-w-[190px] [&:not(.active)]:pl-0 [&:not(.active)]:max-w-[98px]':'max-w-[124px] [&:not(.active)]:max-w-[82px] [&:not(.active)]:mb-0 mb-8' ?>">
									<div class="relative w-full pt-[124%]">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw1.png"
											alt=""
											class="absolute w-full h-full inset-0 object-contain transition-all">
									</div>
								</div>
								<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
									<div class="mt-6 hide-open arr hidden">
										<?php echo svg('arr-left') ?>
									</div>
								<?php } ?>
							</div>
							<div
								class="award__item-content cursor-default transition-all w-0 overflow-hidden opacity-0 invisible <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[470px]':'w-full' ?>">
									<h3 class="font-bold mb-4 font-body <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl':'text-lg text-center' ?>">
										Nhà môi giới chứng khoán tốt nhất
										Việt Nam 2023
									</h3>
									<div class="prose-ul:list-disc prose-ul:pl-5">
										<p>Nhiều năm liên tiếp, BSC được tạp chí Globanl Banking &
											Finance
											review vinh danh tại nhiều hạng mục:</p>
										<ul>
											<li>
												Nhà môi giới chứng khoán tốt nhất Việt Nam
											</li>
											<li>
												Công ty chứng khoán có dịch vụ Ngân hàng đầu tư tốt nhất
												Việt Nam
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div
							class="grow cursor-pointer bg-gradient-blue-150 award__item font-Helvetica  transition-all <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[398px] flex gap-10 justify-center items-center py-10':'py-9 px-6' ?>">
							<div
								class="flex flex-col items-center justify-center w-full award__item-nav <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mx-auto ' ?>">
								<div class="mb-4 hide-open">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
										alt="" class="max-w-10 h-auto object-contain w-full">
								</div>

								<div
									class="main-img w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'[&:not(.active)]:mx-auto ml-10 max-w-[190px] [&:not(.active)]:pl-0 [&:not(.active)]:max-w-[98px]':'max-w-[124px] [&:not(.active)]:max-w-[82px] [&:not(.active)]:mb-0 mb-8' ?>">
									<div class="relative w-full pt-[124%]">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw2.png"
											alt=""
											class="absolute w-full h-full inset-0 object-contain transition-all">
									</div>
								</div>
								<div class="mt-6 hide-open arr">
									<?php echo svg('arr-left') ?>
								</div>
							</div>
							<div
								class="award__item-content cursor-default hidden transition-all w-0 overflow-hidden opacity-0 invisible <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[470px]':'w-full' ?>">
									<h3 class="font-bold mb-4 font-body <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl':'text-lg text-center' ?>">
										Nhà môi giới chứng khoán tốt nhất
										Việt Nam 2023
									</h3>
									<div class="prose-ul:list-disc prose-ul:pl-5">
										<p>Nhiều năm liên tiếp, BSC được tạp chí Globanl Banking &
											Finance
											review vinh danh tại nhiều hạng mục:</p>
										<ul>
											<li>
												Nhà môi giới chứng khoán tốt nhất Việt Nam
											</li>
											<li>
												Công ty chứng khoán có dịch vụ Ngân hàng đầu tư tốt nhất
												Việt Nam
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div
							class="grow cursor-pointer bg-gradient-blue-150 award__item font-Helvetica  transition-all <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[398px] flex gap-10 justify-center items-center py-10':'py-9 px-6' ?>">
							<div
								class="flex flex-col items-center justify-center w-full award__item-nav <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mx-auto ' ?>">
								<div class="mb-4 hide-open">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
										alt="" class="max-w-10 h-auto object-contain w-full">
								</div>

								<div
									class="main-img w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'[&:not(.active)]:mx-auto ml-10 max-w-[190px] [&:not(.active)]:pl-0 [&:not(.active)]:max-w-[98px]':'max-w-[124px] [&:not(.active)]:max-w-[82px] [&:not(.active)]:mb-0 mb-8' ?>">
									<div class="relative w-full pt-[124%]">
										<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw3.png"
											alt=""
											class="absolute w-full h-full inset-0 object-contain transition-all">
									</div>
								</div>
								<div class="mt-6 hide-open arr">
									<?php echo svg('arr-left') ?>
								</div>
							</div>
							<div
								class="award__item-content cursor-default hidden transition-all w-0 overflow-hidden opacity-0 invisible <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[470px]':'w-full' ?>">
									<h3 class="font-bold mb-4 font-body <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl':'text-lg text-center' ?>">
										Nhà môi giới chứng khoán tốt nhất
										Việt Nam 2023
									</h3>
									<div class="prose-ul:list-disc prose-ul:pl-5">
										<p>Nhiều năm liên tiếp, BSC được tạp chí Globanl Banking &
											Finance
											review vinh danh tại nhiều hạng mục:</p>
										<ul>
											<li>
												Nhà môi giới chứng khoán tốt nhất Việt Nam
											</li>
											<li>
												Công ty chứng khoán có dịch vụ Ngân hàng đầu tư tốt nhất
												Việt Nam
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-gradient-blue-250 nhdt_contact <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-20':'py-8' ?>">
				<div class="container">
					<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:flex':'' ?>">
						<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:pr-[50px] pr-10 lg:w-[575px] lg:max-w-[43%] shrink-0':'' ?>">
							<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:mb-[72px] mb-10':'mb-6' ?>">
								LIÊN HỆ TƯ VẤN
							</h2>
							<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
								<div class="relative w-full pt-[66.666%] overflow-hidden rounded-[10px]">
									<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-contact.png"
										alt=""
										class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
								</div>
							<?php } ?>
						</div>
						<div class="flex-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:pl-[50px] lg:pl-10 lg:border-l border-[#D2D2D2] lg:mt-0 mt-8':'' ?>">
							<h3 class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 xl:text-2xl text-xl ':'mb-4' ?>">
								<?php _e('Đăng ký thông tin hỗ trợ', 'gnws') ?>
							</h3>
							<div
								class="form_support relative font-Helvetica bg-white lg:px-8 px-5 lg:py-6 py-5 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-2xl':'rounded-xl' ?>">
								<?php echo do_shortcode('[contact-form-7 id="d5b6a0a" title="Đăng ký thông tin hỗ trợ"]') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php
	}
	?>
</main>
<?php
get_footer();
