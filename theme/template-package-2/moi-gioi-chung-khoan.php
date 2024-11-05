<?php

/**
Template Name: [Package-2] Môi giới chứng khoán
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h2 class="heading-title text-center mb-10">
				MÔI GIỚI CHỨNG KHOÁN TẠI BSC
			</h2>
			<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5">
				<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
					style="background: linear-gradient(147deg, #FAFAFA 0%, #E5F4FF 78.66%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr1.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2 text-center">
							Đa dạng sản phẩm <br>
							và tiện ích
						</h3>
						<div class="font-Helvetica">
							Các sản phẩm của BSC luôn được cập nhật liên tục, với đầy đủ các tính
							năng tiên tiến như: đặt lệnh trên bảng giá, lệnh điều kiện, …
						</div>
					</div>
				</div>
				<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
					style="background: linear-gradient(327deg, #FAFAFA -10%, #E5F4FF 78.76%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr2.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2 text-center">
							Phí giao dịch <br>
							hấp dẫn
						</h3>
						<div class="font-Helvetica">
							Phí giao dịch hấp dẫn chỉ
							từ 0,08% 
						</div>
					</div>
				</div>
				<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
					style="background: linear-gradient(46deg, #E5F4FF 24.72%, #FAFAFA 105.17%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr3.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2 text-center">
							Nền tảng giao dịch <br>
							hiện đại
						</h3>
						<div class="font-Helvetica">
							Giao dịch nhanh chóng trên các kênh trực tuyến hiện đại: nền tảng
							WebTrading, ứng dụng BSC Smart Invest 
						</div>
					</div>
				</div>
				<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
					style="background: linear-gradient(226deg, #E5F4FF 26.88%, #FAFAFA 107.34%);">
					<div class="max-w-[155px] w-full mx-auto">
						<div class="relative w-full pt-[100%]">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr4.png"
								class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								alt="">
						</div>
					</div>
					<div class="mt-4">
						<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2 text-center">
							Hệ thống bảo mật <br>
							toàn diện
						</h3>
						<div class="font-Helvetica">
							Công nghệ bảo mật tiên tiến, toàn diện, giúp bạn yên tâm trong mọi giao
							dịch
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
</main>
<?php
get_footer();