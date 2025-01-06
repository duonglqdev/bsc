<?php

/**
Template Name: [Package 3] Chi tiết mã chứng khoán
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<!-- <section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
		<div class="container">
			<ul class="flex justify-between gap-10">
				<li class="flex-1">
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Cân đối kế toán
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Kết quả hoạt động kinh doanh
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Lưu chuyến tiền tệ gián tiếp
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Lưu chuyển tiền tệ trực tiếp
					</a>
				</li>


			</ul>
		</div>
	</section> -->
	<section class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-[54px] mb-[100px]':'my-[50px]' ?>">
		<div class="container">
			<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				<ul class="flex items-center gap-5">
					<li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'flex-1' ?>">
						<a href=""
							class="active rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-block':'w-full block' ?>">
							Quý
						</a>
					</li>
					<li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'flex-1' ?>">
						<a href=""
							class="rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-block':'w-full block' ?>">
							Năm
						</a>
					</li>
				</ul>
			</div>

			<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
				<div class="overflow-x-auto">
					<div
						class="flex bg-primary-300 text-white font-bold 2xl:gap-10 gap-5 lg:px-[30px] px-5 py-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'w-max' ?>">
						<p class="flex-1 min-w-[200px]">Danh sách</p>
						<p class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2020</p>
						<p class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2021</p>
						<p class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2022</p>
						<p class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2023</p>
						<p class="min-w-[175px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[14%]':'max-w-[175px]' ?>">Tăng trưởng</p>
					</div>
					<div class="list_content-collapse font-medium">
						<?php 
						 for ($j = 0; $j < 6; $j++) {
						 ?>
						 <div
							 class="collapse-item has-children <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'w-max' ?>">
							 <div class="lg:px-[30px] px-5 py-4 flex 2xl:gap-x-10 gap-x-5 items-center text-xs bg-white">
								 <h3
									 class="flex-1 font-bold text-base flex items-center gap-1 cursor-pointer [&:not(.active)]:text-black text-primary-300 upper-first">
									 <?php echo svgClass( 'icon-up', '16', '16', 'transition-all shrink-0' ) ?>
									 CÁC CHI TIÊU NGOÀI BẢNG
								 </h3>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">11,959,220,000,000</div>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">608,349,810</div>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">912,577,380</div>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2023</div>
								 <div class="min-w-[175px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[14%]':'max-w-[175px]' ?> h-10">
									 <div class="collapse-item-chart">
		 
									 </div>
								 </div>
	 
							 </div>
							 <div class="sub-collapse hidden">
								 <?php
								 for ( $i = 0; $i < 2; $i++ )
								 {
									 ?>
									 <div
										 class="collapse-item has-children [&:nth-child(even)]:bg-[#EBF4FA] bg-white pl-5">
										 <div class="lg:px-[30px] px-5 py-4 flex 2xl:gap-10 gap-5 items-center text-xs">
											 <h3
												 class="flex-1 font-bold text-base flex items-center gap-1 cursor-pointer">
												 <?php echo svgClass( 'icon-up', '16', '16', 'transition-all shrink-0' ) ?>
												 1. Chứng khoán kinh doanh
											 </h3>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">11,959,220,000,000</div>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">608,349,810</div>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">912,577,380</div>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2023</div>
											 <div class="min-w-[175px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[14%]':'max-w-[175px]' ?> h-10">
												 <div class="collapse-item-chart">
		 
												 </div>
											 </div>
	 
										 </div>
									 </div>
									 <?php
								 }
								 ?>
							 </div>
						 </div>
						 <div
							 class="collapse-item has-children <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'w-max' ?>">
							 <div class="lg:px-[30px] px-5 py-4 flex 2xl:gap-x-10 gap-x-5 items-center text-xs bg-[#EBF4FA]">
								 <h3
									 class="flex-1 font-bold text-base flex items-center gap-1 cursor-pointer [&:not(.active)]:text-black text-primary-300">
									 <?php echo svgClass( 'icon-up', '16', '16', 'transition-all shrink-0' ) ?>
									 CÁC CHI TIÊU NGOÀI BẢNG
								 </h3>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">11,959,220,000,000</div>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">608,349,810</div>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">912,577,380</div>
								 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2023</div>
								 <div class="min-w-[175px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[14%]':'max-w-[175px]' ?> h-10">
									 <div class="collapse-item-chart-red">
		 
									 </div>
								 </div>
	 
							 </div>
							 <div class="sub-collapse hidden">
								 <?php
								 for ( $i = 0; $i < 2; $i++ )
								 {
									 ?>
									 <div
										 class="collapse-item has-children [&:nth-child(even)]:bg-[#EBF4FA] bg-white pl-5">
										 <div class="lg:px-[30px] px-5 py-4 flex 2xl:gap-10 gap-5 items-center text-xs">
											 <h3
												 class="flex-1 font-bold text-base flex items-center gap-1 cursor-pointer">
												 <?php echo svgClass( 'icon-up', '16', '16', 'transition-all shrink-0' ) ?>
												 1. Chứng khoán kinh doanh
											 </h3>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">11,959,220,000,000</div>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">608,349,810</div>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">912,577,380</div>
											 <div class="min-w-[135px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[11%]':'max-w-[135px] break-words' ?>">2023</div>
											 <div class="min-w-[175px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[14%]':'max-w-[175px]' ?> h-10">
												 <div class="collapse-item-chart-red">
		 
												 </div>
											 </div>
	 
										 </div>
									 </div>
									 <?php
								 }
								 ?>
							 </div>
						 </div>
						  <?php 
						 } 
						?>
						
					</div>

				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();