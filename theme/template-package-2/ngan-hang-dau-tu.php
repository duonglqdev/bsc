<?php

/**
Template Name: Ngân hàng đầu tư
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<!-- Tab nav -->
	<section class="2xl:py-4 py-3 bg-primary-50">
		<div class="container">
			<ul class="customtab-nav flex justify-between">
				<li>
					<button data-tabs="#ecm-tab"
						class="active inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Dịch vụ thị trường vốn (ECM)
					</button>
				</li>
				<li>
					<button data-tabs="#dcm-tab"
						class="inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Dịch vụ thị trường nợ (DCM)
					</button>
				</li>
				<li>
					<button data-tabs="#tvtc-tab"
						class="inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Tư vấn tài chính doanh nghiệp
					</button>
				</li>
				<li>
					<button data-tabs="#ma-tab"
						class="inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
						Tư vấn mua bán sát nhập M&A
					</button>
				</li>
			</ul>
		</div>
	</section>
	<!-- Tab content -->
	<section class="block tab-content" id="ecm-tab">
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
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ba1.jpg"
								alt=""
								class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="2xl:py-[121px] py-20 bg-[#F3F9FC]">
			<div class="container">
				<h2 class="heading-title text-center mb-8">
					KHÁCH HÀNG TIÊU BIỂU
				</h2>
				<div class="block_slider-show-6 block__slider-marquee">
					<?php 
					 for ($i = 0; $i < 12; $i++) {
					 ?>
					 <div class="block_slider-item p-[12px] lg:w-1/6 md:w-1/4 w-1/2">
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
					 for ($i = 0; $i < 12; $i++) {
					 ?>
					 <div class="block_slider-item p-[12px] lg:w-1/6 md:w-1/4 w-1/2">
						 <a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
							 class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110">
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
	</section>

	<section class="hidden tab-content" id="dcm-tab">
		<div class="xl:my-[100px] md:my-20 my-10">
			<div class="container">
				<div class="lg:grid lg:grid-cols-2 xl:gap-0 gap-10">
					<div class="col-span-1 xl:pr-[42px]">
						<h2 class="heading-title mb-4">
							DỊCH VỤ THỊ TRƯỜNG NỢ (DCM)
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
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ba1.jpg"
								alt=""
								class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="hidden tab-content" id="tvtc-tab">
		<div class="xl:my-[100px] md:my-20 my-10">
			<div class="container">
				<div class="lg:grid lg:grid-cols-2 xl:gap-0 gap-10">
					<div class="col-span-1 xl:pr-[42px]">
						<h2 class="heading-title mb-4">
							TƯ VẤN TÀI CHÍNH DOANH NGHIỆP
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
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ba1.jpg"
								alt=""
								class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="hidden tab-content" id="ma-tab">
		<div class="xl:my-[100px] md:my-20 my-10">
			<div class="container">
				<div class="lg:grid lg:grid-cols-2 xl:gap-0 gap-10">
					<div class="col-span-1 xl:pr-[42px]">
						<h2 class="heading-title mb-4">
							TƯ VẤN MUA BÁN SÁT NHẬP (M&A)
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
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ba1.jpg"
								alt=""
								class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</main>
<?php
get_footer();