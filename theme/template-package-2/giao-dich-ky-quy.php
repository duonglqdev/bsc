<?php

/**
Template Name:[Package-2] Giao dịch ký quỹ
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
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Giao dịch ký quỹ
					</a>
				</li>
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Ứng trước tiền bán
					</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="xl:py-[100px] py-20 relative">
		<div class="container">
			<div class="grid grid-cols-2 gap-9 items-center">
				<div class="col-span-1">
					<h2 class="heading-title mb-8">
						GIAO DỊCH KÝ QUỸ
					</h2>
					<div class="text-primary-300 2xl:text-2xl text-xl font-bold text-justify">
						Giao dịch ký quỹ tại công ty chứng khoán (còn gọi là Margin) là giao dịch
						mua chứng khoán có sử dụng tiền vay của công ty chứng khoán, trong đó chứng
						khoán có được từ giao dịch này và các chứng khoán khác được giao dịch ký quỹ
						của nhà đầu tư được sử dụng làm tài sản bảo đảm cho khoản vay trên và theo
						quy định của BSC tại từng thời kỳ
					</div>
					<ul
						class="list-icon 2xl:space-y-[14px] space-y-3 font-Helvetica mt-[30px] 2xl:text-2xl text-xl font-bold text-primary-300">
						<li class="list-icon-item">
							Tối đa hóa cơ hội đầu tư, gia tăng lợi nhuận
						</li>
						<li class="list-icon-item">
							Nâng cao hiệu quả sử dụng vốn
						</li>

					</ul>
				</div>
				<div class="col-span-1 ">
					<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23517 (2).png"
						alt="" class="transition-all duration-500 hover:scale-105">
				</div>
			</div>
		</div>
		<div class="absolute top-0 right-0 pointer-events-none relative z-[1]">
			<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/before.png" alt="">
		</div>
	</section>
	<section class=" bg-gradient-blue-250 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[97px] py-20':'py-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				giao dịch ký quỹ tại BSC
			</h2>
			<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-4 gap-5':' block_slider block_slider-show-1 fli-dots-blue' ?>">
			<?php 
			 for ($i = 0; $i < 4; $i++) {
			 ?>
			 <div class="rounded-2xl  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:p-[34px] xl:pt-14 p-6 min-h-[414px] shadow-base':'min-h-[388px] pt-9 px-11 pb-14 block_slider-item w-full' ?>"
					 style="background-color:#E5F5FF;">
					 <div class="max-w-[155px] w-full mx-auto">
						 <div class="relative w-full pt-[100%]">
							 <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gr1.png"
								 class="absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105"
								 alt="">
						 </div>
					 </div>
					 <div class="mt-4">
						 <h3 class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
							 Lãi suất hấp dẫn
						 </h3>
						 <div class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
							 <p>
								 Lãi suất cho vay chỉ từ 8.5% năm, miễn lãi 02 ngày đầu 
							 </p>
 
						 </div>
					 </div>
				 </div>
			  <?php 
			 } 
			?>	
				
			</div>

			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-8 grid grid-cols-2 gap-5':'mt-6 space-y-[12px]' ?>">
				<div class="rounded-xl flex items-center justify-between bg-[#D8F1F3] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:p-8 p-5 ':'p-4' ?>">
					<div
						class="flex items-center  font-bold text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl gap-4':'text-lg gap-2' ?>">
						<?php echo svg('app', '30') ?>
						Danh mục Margin hiện hành
					</div>
					<a href=""
						class="text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica">
						<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
							Xem chi tiết
						<?php } ?>
						<?php echo svg('arrow-btn', '12', '12') ?>
					</a>
				</div>
				<div class="rounded-xl flex items-center justify-between bg-[#D8F1F3] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:p-8 p-5 ':'p-4' ?>">
					<div
					class="flex items-center  font-bold text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl gap-4':'text-lg gap-2' ?>">
						<?php echo svg('note', '30') ?>
						Biểu lãi suất
					</div>
					<a href=""
						class="text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica">
						<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
							Xem chi tiết
						<?php } ?>
						<?php echo svg('arrow-btn', '12', '12') ?>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20 relative">
		<div class="container">
			<div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 items-center':'' ?>">
				<div class="col-span-1 xl:-mr-[17px]">
					<div
						class="bg-gradient-blue-550 rounded-2xl shadow-base  relative z-10  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:py-10 py-5 2xl:px-[50px] px-10 min-h-[402px] flex flex-col justify-center':'px-6 pt-6 pb-[72px]' ?>">
						<h2 class="heading-title mb-6">
						ĐĂNG KÝ DỊCH VỤ GIAO DỊCH KÝ QUỸ TẠI BSC
						</h2>
							
						
						<div class="2xl:space-y-6 space-y-4 font-Helvetica">
							<div class="item">
								<p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-3':'mb-[12px]' ?>">
									Bạn chưa có tài khoản tại BSC?
								</p>
								<p class="mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
									Đăng ký mở tài khoản thường và tài khoản ký quỹ khi mở tài khoản
									tại BSC.
								</p>
								<a href=""
									class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
									Mở tài khoản
									<?php echo svg('arrow-btn', '12', '12') ?>
								</a>
							</div>
							<div class="item">
								<p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-3':'mb-[12px]' ?>">
									Bạn đã có tài khoản tại BSC?
								</p>
								<p class="mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
									Đăng ký mở tài khoản ký quỹ tại các Chi nhánh/Điểm giao dịch của
									BSC hoặc liên hệ với nhân viên Môi giới quản lý tài khoản để
									được hỗ trợ.
								</p>

							</div>

						</div>
						<div class="mt-4 pt-4 border-t border-[#CFCFCF]">
							<a href="#"
								class="btn-base-yellow py-[12px] pl-4 pr-6  items-center gap-x-3 z-10 text-xs font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-flex':'flex justify-center' ?>">
								<?php echo svg('arrow-btn', '16', '16') ?>
								Hướng dẫn giao dịch ký quỹ
							</a>
						</div>
					</div>
				</div>
				<div class="col-span-1 xl:-ml-[185px] lg:-ml-24">
					<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
						class="relative block pt-[59.64%] overflow-hidden rounded-2xl group after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-35">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23499 (1).png"
							alt=""
							class="absolute w-full h-full inset-0 m-auto object-contain transition-all duration-500 group-hover:scale-105">
						<div
							class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
							<?php echo svgClass('play', '', '', 'lg:w-[80px] w-10') ?>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
