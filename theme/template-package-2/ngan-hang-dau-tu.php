<?php

/**
Template Name: Ngân hàng đầu tư
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<!-- Tab nav -->
	<section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
		<div class="container">
			<ul class="customtab-nav flex justify-between bank-nav-tab">
				<li>
					<button data-tabs="#bank-tab-1"
						class="active inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Dịch vụ thị trường vốn (ECM)
					</button>
				</li>
				<li>
					<button data-tabs="#bank-tab-2"
						class="inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Dịch vụ thị trường nợ (DCM)
					</button>
				</li>
				<li>
					<button data-tabs="#bank-tab-3"
						class="inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Tư vấn tài chính doanh nghiệp
					</button>
				</li>
				<li>
					<button data-tabs="#bank-tab-4"
						class="inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Tư vấn mua bán sát nhập M&A
					</button>
				</li>
			</ul>
		</div>
	</section>
	<!-- Tab content -->
	<?php
	for ( $j = 1; $j < 5; $j++ )
	{
		?>
		<section class="<?php echo $j == 1 ? 'block' : 'hidden' ?> tab-content"
			id="bank-tab-<?php echo $j ?>">
			<div class="xl:my-[100px] md:my-20 my-10">
				<div class="container">
					<div class="lg:grid lg:grid-cols-2 xl:gap-0 gap-10">
						<div class="col-span-1 xl:pr-[42px]">
							<h2 class="heading-title mb-4">
								DỊCH VỤ THỊ TRƯỜNG VỐN (ECM)
							</h2>
							<p class="mb-4 font-bold">BSC cung cấp đa dạng các dịch vụ thị trường
								vốn
								bao gồm:</p>
							<ul class="flex-1 space-y-4 list-icon">
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
							<div class="mt-8">
								<a href=""
									class="btn-base-yellow px-6 py-4 inline-flex items-center gap-x-3">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									Liên hệ tư vấn
								</a>
							</div>
						</div>
						<div class="col-span-1 xl:pl-[22px]">
							<div class="relative overflow-hidden pt-[65.743%] w-full rounded-2xl">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ba1.png"
									alt=""
									class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="xl:py-[121px] py-20 bg-[#F3F9FC]">
				<div class="container">
					<h2 class="heading-title text-center mb-8">
						KHÁCH HÀNG TIÊU BIỂU
					</h2>
					<div class="max-w-[1190px] mx-auto">
						<div class="block_slider-show-6 block__slider-marquee">
							<?php
							for ( $i = 0; $i < 12; $i++ )
							{
								?>
								<div class="block_slider-item py-[12px] mx-[12px] lg:w-1/6 md:w-1/4 w-1/2">
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bidv.png"
											alt=""
											class="absolute w-full max-w-[80%] h-full object-contain inset-0 m-auto">
									</a>
								</div>
								<?php
							}
							?>
						</div>
						<div class="block_slider-show-6 block__slider-marquee marquee-rtl">
							<?php
							for ( $i = 0; $i < 12; $i++ )
							{
								?>
								<div class="block_slider-item py-[12px] mx-[12px] lg:w-1/6 md:w-1/4 w-1/2">
									<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
										class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110 shadow-base">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bidv.png"
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
			<div class="xl:my-[100px] my-20">
				<div class="container">
					<h2 class="heading-title mb-10 text-center">
						GIẢI THƯỞNG NỔI BẬT
					</h2>
					<div class="rounded-2xl flex overflow-hidden">
						<div
							class="active grow cursor-pointer bg-gradient-blue-150 min-h-[398px] flex gap-10 justify-center items-center award__item font-Helvetica py-10 transition-all">
							<div
								class="flex flex-col items-center justify-center w-1/3 award__item-nav">
								<div class="mb-4 hide-open hidden">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
										alt="" class="max-w-10 h-auto object-contain w-full">
								</div>

								<div
									class="active main-img mx-auto w-full [&:not(.active)]:max-w-[98px] max-w-[190px]">
									<div class="relative w-full pt-[124%]">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw1.png"
											alt=""
											class="absolute w-full h-full inset-0 object-contain transition-all">
									</div>
								</div>
								<div class="mt-6 hide-open arr hidden">
									<?php echo svg( 'arr-left' ) ?>
								</div>
							</div>
							<div
								class="award__item-content cursor-default transition-all w-0 overflow-hidden opacity-0 invisible">
								<div class="max-w-[410px]">
									<h3 class="2xl:text-2xl text-xl font-bold mb-4">
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
							class="grow cursor-pointer bg-gradient-blue-200 min-h-[398px] flex gap-10 justify-center items-center award__item font-Helvetica py-10 transition-all">
							<div
								class="flex flex-col items-center justify-center w-1/3 award__item-nav">
								<div class="mb-4 hide-open">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
										alt="" class="max-w-10 h-auto object-contain w-full">
								</div>

								<div
									class="main-img mx-auto w-full [&:not(.active)]:max-w-[98px] max-w-[190px]">
									<div class="relative w-full pt-[124%]">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw2.png"
											alt=""
											class="absolute w-full h-full inset-0 object-contain transition-all">
									</div>
								</div>
								<div class="mt-6 hide-open arr">
									<?php echo svg( 'arr-left' ) ?>
								</div>
							</div>
							<div
								class="award__item-content cursor-default hidden transition-all w-0 overflow-hidden opacity-0 invisible">
								<div class="max-w-[410px]">
									<h3 class="2xl:text-2xl text-xl font-bold mb-4">
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
							class="grow cursor-pointer bg-gradient-blue-150 min-h-[398px] flex gap-10 justify-center items-center award__item font-Helvetica py-10 transition-all">
							<div
								class="flex flex-col items-center justify-center w-1/3 award__item-nav">
								<div class="mb-4 hide-open">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
										alt="" class="max-w-10 h-auto object-contain w-full">
								</div>

								<div
									class="main-img mx-auto w-full [&:not(.active)]:max-w-[98px] max-w-[190px]">
									<div class="relative w-full pt-[124%]">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw3.png"
											alt=""
											class="absolute w-full h-full inset-0 object-contain transition-all">
									</div>
								</div>
								<div class="mt-6 hide-open arr">
									<?php echo svg( 'arr-left' ) ?>
								</div>
							</div>
							<div
								class="award__item-content cursor-default hidden transition-all w-0 overflow-hidden opacity-0 invisible">
								<div class="max-w-[410px]">
									<h3 class="2xl:text-2xl text-xl font-bold mb-4">
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
			<div class="py-20 bg-gradient-blue-250">
				<div class="container">
					<div class="lg:flex">
						<div class="2xl:pr-[50px] pr-10  lg:w-[575px] lg:max-w-[43%] shrink-0">
							<h2 class="heading-title 2xl:mb-[72px] mb-10">
								LIÊN HỆ TƯ VẤN
							</h2>
							<div class="relative w-full pt-[66.666%] overflow-hidden rounded-[10px]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-contact.png"
									alt=""
									class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
							</div>
						</div>
						<div class="flex-1 2xl:pl-[50px] pl-10 lg:border-l border-[#D2D2D2]">
							<h3 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl">
								<?php _e( 'Đăng ký thông tin hỗ trợ', 'gnws' ) ?>
							</h3>
							<div
								class="form_support relative font-Helvetica bg-white lg:px-8 px-5 lg:py-6 py-4 rounded-2xl">
								<?php echo do_shortcode( '[contact-form-7 id="d5b6a0a" title="Đăng ký thông tin hỗ trợ"]' ) ?>
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