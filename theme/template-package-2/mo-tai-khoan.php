<?php

/**
Template Name: [Package-2] Mở tài khoản
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-gradient-blue-350">
		<div
			class="relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:pt-16 pt-12 pb-[50px]' : 'pt-[50px]' ?>">
			<div class="container overflow-hidden">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid grid-cols-2 gap-10 items-center' : '' ?>">
					<div class="col-span-1">
						<h2
							class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
							MỞ TÀI KHOẢN TẠI BSC
						</h2>
						<ul
							class="list-icon font-Helvetica text-primary-300 font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pl-6 mb-8 space-y-[15px]' : 'mb-5 space-y-4' ?>">
							<li class="list-icon-item !gap-2">
								Mở tài khoản nhanh chóng 
							</li>
							<li class="list-icon-item !gap-2">
								Thủ tục nhanh gọn 
							</li>
							<li class="list-icon-item !gap-2">
								Tận hưởng đặc quyền hấp dẫn 
							</li>
							<li class="list-icon-item !gap-2">
								An toàn, bảo mật 
							</li>
						</ul>
						<div class="flex items-center gap-x-4">
							<a href=""
								class="bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block 2xl:px-6 px-4  rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:py-3 py-2' : 'flex-1 py-[12px] !leading-[1.313]' ?>">
								<span class="block relative z-10">
									Giao dịch ngay
								</span>
							</a>
							<a href=""
								class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' 2xl:py-3 py-2' : 'flex-1 py-[12px] !leading-[1.313]' ?>">
								<span class="block relative z-10">
									Mở tài khoản
								</span>
							</a>

						</div>
					</div>
					<div class="col-span-1 relative pt-8 ">
						<?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div class="absolute top-0 -right-10 pointer-events-none w-4/5 h-full">
								<?php echo svg( 'before-mb' ) ?>
							</div>
						<?php } ?>
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Group-1000008408.png"
							alt="" class="relative z-[2]">
					</div>
				</div>
			</div>
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
			{ ?>
				<div class="absolute top-0 right-0 pointer-events-none">
					<?php echo svg( 'before' ) ?>
				</div>
			<?php } ?>
		</div>
		<div class="pt-[50px] xl:pb-[100px] pb-[50px]">
			<div class="container">
				<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
					3 PHÚT CÓ NGAY TÀI KHOẢN
				</h2>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:flex lg:space-y-0 space-y-5':'' ?>">
					<div class="border-[#C4C4C4] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-1/2 xl:pr-[106px] lg:pr-20 lg:border-r':'border-b pb-6 mb-6' ?>">
						<h3
							class="font-bold !leading-normal <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[32px] text-2xl xl:mb-[54px] mb-10':'text-xl mb-6' ?>">
							Mở tài khoản <span class="text-primary-300">eKYC</span> ngay trên ứng
							dụng <span class="text-primary-300">BSC Smart Invest</span>
						</h3>
						<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex lg:gap-[61px] gap-10 items-center lg:justify-start justify-center ':'' ?>">
							<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex flex-col gap-[21px]':'grid grid-cols-2 gap-4' ?>">
								<a href="">
									<img loading="lazy"
										src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chplay.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
								<a href="">
									<img loading="lazy"
										src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ios.svg"
										alt="" class="transition-all duration-500 hover:scale-105">
								</a>
							</div>
							<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
								<strong
									class="text-primary-300 text-2xl"><?php _e( 'hoặc', 'bsc' ) ?></strong>
								<div
									class="qr p-3 bg-white max-w-[184px] rounded-lg shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
									<img loading="lazy"
										src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 110.png"
										alt="" class="transition-all duration-500 hover:scale-105">
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-1/2 xl:pl-[106px] lg:pl-20':'' ?>">
						<h3 class="font-bold !leading-normal <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[32px] text-2xl mb-6':'text-xl mb-4' ?>">
							Mở tài khoản trực tiếp
						</h3>
						<ul class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg space-y-4 ':'text-xs space-y-[12px]' ?>">
							<li class="flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-4':'gap-[12px]' ?>">
								<div class="flex-shrink-0">
									<?php echo svgClass( 'location', '', '', !wp_is_mobile() && !bsc_is_mobile() ?'w-[33px] h-[33px]':'w-6 h-6') ?>
								</div>
								<p><strong>Trụ sở chính BSC: </strong>Tầng 8 Tòa nhà Thái Holdings,
									210 Trần Quang Khải, Hoàn Kiếm, Hà Nội</p>
							</li>
							<li class="flex items-center gap-4">
								<div class="flex-shrink-0">
									<?php echo svgClass( 'location', '', '', !wp_is_mobile() && !bsc_is_mobile() ?'w-[33px] h-[33px]':'w-6 h-6') ?>
								</div>
								<p><strong>Chi nhánh BSC: </strong>Tầng 4, 9 Tòa nhà President
									Place, Số 93 Đường Nguyễn Du, Phường Bến Nghé, Quận 1, Thành phố
									Hồ Chí Minh</p>
							</li>
							<li class="flex items-center gap-4">
								<div class="flex-shrink-0">
									<?php echo svgClass( 'location', '', '', !wp_is_mobile() && !bsc_is_mobile() ?'w-[33px] h-[33px]':'w-6 h-6') ?>
								</div>
								<p>
									<strong>Điểm hỗ trợ giao dịch BSC tại hệ thống Chi nhánh BIDV
										trên cả nước </strong>
								</p>
								<div
									class="p-1 bg-white max-w-[104px] ml-6 rounded shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
									<img loading="lazy"
										src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image 110.png"
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
		<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-16 pb-[50px]':'py-[50px]' ?>">
			<div class="container">
				<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
					MỞ TÀI KHOẢN NHANH CHÓNG VÀ BẢO MẬT
				</h2>
				<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-3 gap-10':'gap-8' ?>">
					<div class="col-span-1">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/st1.png"
							alt="" class="m-auto transition-all duration-500 hover:scale-105">
						<div class="text-center font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg mt-6':'mt-4' ?>">
							<strong>Bước 1: </strong> Điền thông tin đăng ký
						</div>
					</div>
					<div class="col-span-1">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/st2.png"
							alt="" class="m-auto transition-all duration-500 hover:scale-105">
						<div class="text-center font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg mt-6':'mt-4' ?>">
							<strong>Bước 2: </strong> Xác thực eKYC
						</div>
					</div>
					<div class="col-span-1">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/st3.png"
							alt="" class="m-auto transition-all duration-500 hover:scale-105">
						<div class="text-center font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg mt-6':'mt-4' ?>">
							<strong>Bước 3: </strong> Đăng ký dịch vụ
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[50px] pb-14':'pb-[50px] dqgd fli-dots-blue' ?>">
			<div class="container">
				<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
					TẬN HƯỞNG ĐẶC QUYỀN KHI GIAO DỊCH
				</h2>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid lg:grid-cols-4 grid-cols-2 gap-5':'block_slider-show-1 block_slider' ?>">
					<?php 
					 for ($i = 0; $i < 4; $i++) {
					 ?>
					 <div class="rounded-2xl min-h-[414px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:p-[34px] xl:pt-14 p-6 shadow-base':'block_slider-item p-10 w-full' ?>"
						 style="background-color:#E5F5FF;">
						 <div class="max-w-[155px] w-full mx-auto">
							 <div class="relative w-full pt-[100%]">
								 <img loading="lazy"
									 src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr1.png"
									 class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
									 alt="">
							 </div>
						 </div>
						 <div class="mt-4">
							 <h3 class="font-bold text-primary-300  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl':'text-2xl' ?> mb-2">
								 Giao dịch trực tuyến
							 </h3>
							 <div
								 class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica marker:text-xs">
								 <ul>
									 <li>Thuận tiện</li>
									 <li>Nhanh chóng</li>
									 <li>Vượt trội</li>
								 </ul>
							 </div>
						 </div>
					 </div>
					  <?php 
					 } 
					?>
					
				</div>
				<div class="text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-10':'mt-6' ?>">
					<a href="#"
						class="btn-base-yellow items-center gap-x-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] pl-4 pr-6 inline-flex text-lg':'flex justify-center text-xs py-3 px-5' ?>">
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
