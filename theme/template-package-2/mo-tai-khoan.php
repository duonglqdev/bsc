<?php

/**
Template Name: [Package-2] Mở tài khoản
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-gradient-blue-350">
		<div class="xl:pt-16 pb-[50px] relative">
			<div class="container">
				<div class="lg:grid lg:grid-cols-2 gap-10 items-center">
					<div class="col-span-1">
						<h2 class="heading-title mb-10">
							MỞ TÀI KHOẢN TẠI BSC
						</h2>
						<ul
							class="list-icon space-y-[15px] font-Helvetica mb-8 text-primary-300 font-bold">
							<li class="list-icon-item">
								Mở tài khoản nhanh chóng 
							</li>
							<li class="list-icon-item">
								Thủ tục nhanh gọn 
							</li>
							<li class="list-icon-item">
								Tận hưởng đặc quyền hấp dẫn 
							</li>
							<li class="list-icon-item">
								An toàn, bảo mật 
							</li>
						</ul>
						<div class="flex items-center gap-x-4">
							<a href=""
								class="bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center">
								<span class="block relative z-10">
									Giao dịch ngay
								</span>
							</a>
							<a href=""
								class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center">
								<span class="block relative z-10">
									Mở tài khoản
								</span>
							</a>

						</div>
					</div>
					<div class="col-span-1">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23515.png"
							alt="">
					</div>
				</div>
			</div>
			<div class="absolute lg:block hidden top-0 right-0 pointer-events-none">
				<?php echo svg( 'before' ) ?>
			</div>
		</div>
		<div class="pt-[50px] xl:pb-[100px] pb-[50px]">
			<div class="container">
				<h2 class="heading-title text-center mb-10">
					3 PHÚT CÓ NGAY TÀI KHOẢN
				</h2>
				<div class="lg:flex">
					<div class="lg:w-1/2 xl:pr-[106px] pr-20 border-r border-[#C4C4C4]">
						<h3
							class="xl:text-[32px] text-2xl font-bold xl:mb-[54px] mb-10 !leading-normal">
							Mở tài khoản <span class="text-primary-300">eKYC</span> ngay trên ứng
							dụng <span class="text-primary-300">BSC Smart Invest</span>
						</h3>
						<div class="flex gap-[61px] items-center">
							<div class="flex flex-col gap-[21px]">
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chplay.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ios.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
							</div>
							<strong
								class="text-primary-300 text-2xl"><?php _e( 'hoặc', 'bsc' ) ?></strong>
							<div class="qr p-3 bg-white max-w-[184px] rounded-lg shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 110.png"
									alt="" class="transition-all duration-500 hover:scale-105">
							</div>
						</div>
					</div>
					<div class="lg:w-1/2 xl:pl-[106px] pl-20">
						<h3 class="xl:text-[32px] text-2xl font-bold mb-6 !leading-normal">
							Mở tài khoản trực tiếp
						</h3>
						<ul class="text-lg font-Helvetica space-y-4">
							<li class="flex items-center gap-4">
								<div class="flex-shrink-0">
									<?php echo svg( 'location', '33', '33' ) ?>
								</div>
								<p><strong>Trụ sở chính BSC: </strong>Tầng 8 Tòa nhà Thái Holdings,
									210 Trần Quang Khải, Hoàn Kiếm, Hà Nội</p>
							</li>
							<li class="flex items-center gap-4">
								<div class="flex-shrink-0">
									<?php echo svg( 'location', '33', '33' ) ?>
								</div>
								<p><strong>Chi nhánh BSC: </strong>Tầng 4, 9 Tòa nhà President
									Place, Số 93 Đường Nguyễn Du, Phường Bến Nghé, Quận 1, Thành phố
									Hồ Chí Minh</p>
							</li>
							<li class="flex items-center gap-4">
								<div class="flex-shrink-0">
									<?php echo svg( 'location', '33', '33' ) ?>
								</div>
								<p>
									<strong>Điểm hỗ trợ giao dịch BSC tại hệ thống Chi nhánh BIDV
										trên cả nước </strong>
								</p>
								<div class="p-1 bg-white max-w-[104px] ml-6 rounded shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 110.png"
										alt="" class="transition-all duration-500 hover:scale-105">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-gradient-blue-400">
		<div class="pt-16 pb-[50px]">
			<div class="container">
				<h2 class="heading-title text-center mb-10">
					MỞ TÀI KHOẢN NHANH CHÓNG VÀ BẢO MẬT
				</h2>
				<div class="grid grid-cols-3 gap-10">
					<div class="col-span-1">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/st1.png"
							alt="" class="m-auto transition-all duration-500 hover:scale-105">
						<div class="text-lg mt-6 text-center font-Helvetica">
							<strong>Bước 1: </strong> Điền thông tin đăng ký
						</div>
					</div>
					<div class="col-span-1">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/st2.png"
							alt="" class="m-auto transition-all duration-500 hover:scale-105">
						<div class="text-lg mt-6 text-center font-Helvetica">
							<strong>Bước 2: </strong> Xác thực eKYC
						</div>
					</div>
					<div class="col-span-1">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/st3.png"
							alt="" class="m-auto transition-all duration-500 hover:scale-105">
						<div class="text-lg mt-6 text-center font-Helvetica">
							<strong>Bước 3: </strong> Đăng ký dịch vụ
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-[50px] pb-14">
			<div class="container">
				<h2 class="heading-title text-center mb-10">
					TẬN HƯỞNG ĐẶC QUYỀN KHI GIAO DỊCH
				</h2>
				<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5">
					<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
						style="background-color:#E5F5FF;">
						<div class="max-w-[155px] w-full mx-auto">
							<div class="relative w-full pt-[100%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr1.png"
									class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
									alt="">
							</div>
						</div>
						<div class="mt-4">
							<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2">
								Giao dịch trực tuyến
							</h3>
							<div class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica">
								<ul>
									<li>Thuận tiện</li>
									<li>Nhanh chóng</li>
									<li>Vượt trội</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
						style="background-color:#009e871a;">
						<div class="max-w-[155px] w-full mx-auto">
							<div class="relative w-full pt-[100%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr2.png"
									class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
									alt="">
							</div>
						</div>
						<div class="mt-4">
							<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2">
								Chính sách ưu đãi 
							</h3>
							<div class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica">
								<ul>
									<li>Phí giao dịch chỉ từ 0.08%</li>
									<li>Margin hấp dẫn từ 8.5%</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
						style="background-color:#FFB81C1a;">
						<div class="max-w-[155px] w-full mx-auto">
							<div class="relative w-full pt-[100%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr3.png"
									class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
									alt="">
							</div>
						</div>
						<div class="mt-4">
							<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2">
								Đội ngũ Tư vấn đầu tư
							</h3>
							<div class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica">
								<ul>
									<li>>10 năm kinh nghiệm</li>
									<li>Tận tâm, chuyên nghiệp</li>
								</ul>

							</div>
						</div>
					</div>
					<div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
						style="background-color:#EBF4FA;">
						<div class="max-w-[155px] w-full mx-auto">
							<div class="relative w-full pt-[100%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr4.png"
									class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
									alt="">
							</div>
						</div>
						<div class="mt-4">
							<h3 class="font-bold text-primary-300 xl:text-2xl text-xl mb-2">
								Báo cáo phân tích uy tín
							</h3>
							<div class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica">
								<ul>
									<li>Top 2 Công ty Chứng khoán có dịch vụ Phân tích nghiên cứu
										tốt
										nhất</li>
									<li>Nhà phân tích xuất sắc 2022</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="text-center mt-10">
					<a href="#"
						class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-lg">
						<?php echo svg( 'arrow-btn', '16', '16' ) ?>
						Mở tài khoản ngay
					</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();