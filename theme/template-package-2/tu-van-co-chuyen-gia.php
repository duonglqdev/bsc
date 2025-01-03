<?php

/**
Template Name: [Package-2] Tư vấn có chuyên gia
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-[#EBF4FA] py-4 sticky top-0 z-[20] sticky-nav">
		<div class="container">
			<ul class="flex justify-center gap-10">
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Tư vấn đầu tư online
					</a>
				</li>
				<li>
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Tư vấn có chuyên gia
					</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="xl:py-[100px] py-20 relative">
		<div class="container">
			<div class="grid grid-cols-2 gap-9 items-center">
				<div class="col-span-1">
					<h2 class="heading-title mb-4">
						Tư vấn đầu tư cùng chuyên gia
					</h2>
					<div class="text-primary-300 2xl:text-2xl text-xl font-bold text-justify">
						Nhà đầu tư có thể chủ động lựa chọn "Chuyên gia đồng hành" phù hợp với khẩu
						vị đầu tư để nhận được tư vấn trực tiếp về phương pháp đầu tư, thông tin thị
						trường, cơ hội đầu tư, xu hướng thị trường, phương án cơ cấu danh mục đầu
						tư...
					</div>
				</div>
				<div class="col-span-1 relative z-[1]">
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23517 (1).png"
						alt="" class="transition-all duration-500 hover:scale-105">
				</div>
			</div>
		</div>
		<div class="absolute top-0 right-0 pointer-events-none -z-1">
			<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/before.png" alt="">
		</div>
	</section>
	<section class="bg-gradient-blue-250 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:space-y-[100px] space-y-20 py-16':'py-[50px] space-y-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				ĐẶC QUYỀN CỦA TƯ VẤN ĐẦU TƯ CÙNG CHUYÊN GIA
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-4 gap-5':'block_slider block_slider-show-1 fli-dots-blue sm:-mx-3' ?>">
				<?php 
				 for ($i = 0; $i < 4; $i++) {
				 ?>
				 <div class="rounded-2xl overflow-hidden group expert-item <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'block_slider-item sm:w-1/2 w-full sm:px-3' ?>">
					 <div class="relative pt-[121.25%]">
						 <div class="absolute w-full h-full inset-0 flex flex-col">
							 <div
								 class=" transition-all duration-300  overflow-hidden <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[78%] group-hover:h-[53%]':'h-[70%] group-hover:h-[50%]' ?>">
								 <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image (1).png"
									 alt=""
									 class="w-full h-full object-cover group-hover:scale-100 transition-all duration-300 scale-105">
							 </div>
							 <div
								 class=" transition-all duration-300  flex-1 relative expert-item-desc before:absolute before:w-full before:h-10 group-hover:before:h-16 before:transition-all before:-top-10 group-hover:before:-top-16 before:z-10 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[12%] group-hover:h-[47%]':'h-[20%] group-hover:h-[50%]' ?>">
								 <h3
									 class="text-primary-300 font-bold text-lg h-full left-0 w-full transition-all duration-300 group-hover:opacity-0 opacity-100 group-hover:invisible visible group-hover:absolute text-center line-clamp-2 px-9 pt-[6px] pb-[18px] group-hover:pt-4">
									 Đồng hành bởi đội ngũ tư vấn chuyên nghiệp
								 </h3>
								 <div
									 class="transition-all duration-300 opacity-0 invisible absolute w-full group-hover:opacity-100 group-hover:visible group-hover:static font-Helvetica px-9 pt-[6px] pb-[18px] group-hover:pt-4 line-clamp-6 text-justify">
									 Được tư vấn & đồng hành bởi đội ngũ chuyên gia chuyên nghiệp,
									 chuyên môn cao, giàu kinh nghiệm với nhiều phương pháp và chiến
									 lược đầu tư hiệu quả.
								 </div>
							 </div>
						 </div>
					 </div>
				 </div>
				  <?php 
				 } 
				?>
				
			</div>
			<div class="text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-10':'mt-6' ?>">
				<a href="#" class="btn-base-yellow items-center gap-x-3  !leading-[1.445] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-flex py-4 pl-6 pr-8 text-lg':'flex justify-center py-3 px-5 block text-xs' ?>">
					
						<?php echo svg('arrow-btn', '20', '20') ?>
						Chọn chuyên gia tư vấn
				</a>
			</div>
		</div>
		<div class="container">
			<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				Phù hợp với nhà đầu tư
			</h2>
			<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-2 gap-5':'' ?>">
				<div class="w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[660px]':'' ?>">
					<div class="overflow-hidden relative group block <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[87.8787%] rounded-2xl':'pt-[66.86%] rounded-lg' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame 1000009436.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
						<h4
							class="absolute z-10 w-full text-primary-300 font-bold top-0 left-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl xl:py-[66px] lg:py-10 lg:px-10 -5':'text-lg px-5 py-6' ?>">
							<p class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[412px] xl:max-w-[72%]':'' ?>">
								Muốn tham khảo nhận định và chiến lược đầu tư từ các chuyên gia hàng
								đầu
								của BSC
							</p>
						</h4>
					</div>
				</div>
				<div class="flex flex-col  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-[18px]':'gap-4 mt-4' ?>">
					<div class="relative block w-full overflow-hidden  group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[42.8%] rounded-2xl':'pt-[66.86%] rounded-lg' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame 1000009436 (1).png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
						<h4
							class="absolute z-10 w-full text-primary-300 font-bold  top-0 left-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[66px] py-10 px-10 text-2xl':'text-lg px-5 py-6' ?>">
							<p class="relative z-10 line-clamp-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[270px] max-w-[67%]':'' ?>">
								Nhà đầu tư mới chưa có kinh nghiệm
							</p>
						</h4>
					</div>
					<div class="relative block w-full overflow-hidden  group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[42.8%] rounded-2xl':'pt-[66.86%] rounded-lg' ?>">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame 1000009436 (2).png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105">
						<h4
							class="absolute z-10 w-full text-primary-300 font-bold  top-0 left-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[66px] py-10 px-10 text-2xl':'text-lg px-5 py-6' ?>">
							<p class="relative z-10 line-clamp-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[270px] max-w-[67%]':'' ?>">
								Bận rộn, ít thời gian theo dõi diễn biến thị trường
							</p>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 items-center':'' ?>">
				<div class="col-span-1 xl:-mr-[17px]">
					<div
						class="bg-gradient-blue-550 rounded-2xl shadow-base  relative z-10  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:py-10 py-5 2xl:px-[50px] px-10 min-h-[402px] flex flex-col justify-center':'px-6 pt-6 pb-[72px]' ?>">
						<h2 class="heading-title mb-6">
							ĐĂNG KÝ SỬ DỤNG DỊCH VỤ
						</h2>
						<div class="2xl:space-y-6 space-y-4 font-Helvetica">
							<div class="item">
								<p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-3':'mb-[12px]' ?>">
									Bạn chưa có tài khoản tại BSC?
								</p>
								<div
									class="mt-1 mb-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex items-center before:shrink0 before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block before:mr-[12px]':'space-y-2' ?>">
									<a href=""
										class="leading-tight text-green font-bold gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' inline-flex [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green':'flex before:shrink-0 before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block text-xs' ?>">
										Mở tài khoản
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
									<a href=""
										class="leading-tight text-green font-bold gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-flex [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green':'flex before:shrink-0 before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block text-xs' ?>">
										Lựa chọn chuyên gia tư vấn
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
								</div>
							</div>
							<div class="item">
								<p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-3':'mb-[12px]' ?>">
									Bạn đã có tài khoản tại BSC?
								</p>
								<div
									class="flex items-center before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block before:mr-[12px] mt-1 mb-3">
									<a href=""
										class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
										Truy cập BSC Web Trading
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
									<a href=""
										class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
										Truy cập BSC Smart Invest
										<?php echo svg('arrow-btn', '12', '12') ?>
									</a>
								</div>
								<div
									class="flex items-center before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block before:mr-[12px] mt-1 mb-3 font-medium">
									Chọn mục thông tin cá nhân
								</div>
								<div
									class="flex items-center before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block before:mr-[12px] mt-1 mb-3 font-medium">
									Thay đổi "Gói dịch vụ Tư vấn online" thành " Chuyên gia tư vấn"
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-span-1 xl:-ml-[185px] lg:-ml-24">
					<div class="relative pt-[59.64%] overflow-hidden rounded-2xl group">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23499 (1).png"
							alt=""
							class="absolute w-full h-full inset-0 m-auto object-contain transition-all duration-500 group-hover:scale-105">

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-10">
		<div class="container">
			<div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover py-7 2xl:px-[75px] px-10 grid lg:grid-cols-2 grid-cols-1 gap-10 items-center min-h-80"
				style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-payment.png)">
				<div class="col">
					<h2 class="heading-title mb-6">
						BIỂU PHÍ DỊCH VỤ
					</h2>
					<a href="#"
						class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
						<?php echo svg('arrow-btn', '16', '16') ?>
						Xem chi tiết
					</a>
				</div>
				<div class="col">
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image.png"
						alt="" class="mx-auto">
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
