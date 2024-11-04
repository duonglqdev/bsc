<?php

/**
Template Name: [Package-2] Dịch vụ chứng khoán
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-gradient-blue-300">
		<div class="xl:py-[100px] py-20">
			<div class="container overflow-hidden">
				<h2 class="heading-title text-center mb-10">
					BẮT ĐẦU HÀNH TRÌNH ĐẦU TƯ CÙNG BSC
				</h2>
				<div class="grid grid-cols-4 lg:translate-x-[120px]">
					<div
						class="col-span-1 min-h-[187px] step-item transition-all duration-500 relative bg-no-repeat bg-full">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-1' ) ?>
							</div>
							<div class="mt-[7px] text-center text-xl font-bold">
								Mở <br>
								tài khoản
							</div>
						</div>
					</div>
					<div
						class="col-span-1 min-h-[187px] step-item transition-all duration-500 relative bg-no-repeat bg-full">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-2' ) ?>
							</div>
							<div class="mt-[7px] text-center text-xl font-bold">
								Hướng Dẫn <br>
								Nộp - Rút Tiền
							</div>
						</div>
					</div>
					<div
						class="col-span-1 min-h-[187px] step-item transition-all duration-500 relative bg-no-repeat bg-full">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-3' ) ?>
							</div>
							<div class="mt-[7px] text-center text-xl font-bold">
								Biểu Phí <br>
								Giao Dịch
							</div>
						</div>
					</div>
					<div
						class="col-span-1 min-h-[187px] step-item transition-all duration-500 relative bg-no-repeat bg-full">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-4' ) ?>
							</div>
							<div class="mt-[7px] text-center text-xl font-bold">
								Kiến Thức <br>
								Đầu Tư
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="py-16 bg-[#F0F9FF]">
			<div class="container">
				<h2 class="heading-title mb-10">
					SẢN PHẨM DỊCH VỤ
				</h2>
				<ul
					class="customtab-nav flex items-center xl:gap-[100px] gap-12 relative  border-b border-[#B8B8B8]">
					<li>
						<button data-tabs="#tab-1"
							class="active inline-flex pb-6 text-xl uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[2px] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
							<?php echo svg( 'ic-1', '30', '30' ) ?>
							MÔI GIỚI CHỨNG KHOÁN
						</button>
					</li>
					<li>
						<button data-tabs="#tab-2"
							class="inline-flex pb-6 text-xl uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[2px] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
							<?php echo svg( 'ic-2', '30', '30' ) ?>
							TƯ VẤN ĐẦU TƯ
						</button>
					</li>
					<li>
						<button data-tabs="#tab-3"
							class="inline-flex pb-6 text-xl uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[2px] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
							<?php echo svg( 'ic-3', '30', '30' ) ?>
							DỊCH VỤ TÀI CHÍNH
						</button>
					</li>
				</ul>
				<div class="mt-10">
                    <?php 
                     for ($i = 1; $i < 4; $i++) {
                     ?>
                     <div id="tab-<?php echo $i  ?>" class="space-y-10 tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>">
                         <div class="bg-white p-8 rounded-3xl lg:flex lg:gap-16 gap-10 items-center">
                             <div class="w-[563px] max-w-[50%]">
                                 <div
                                     class="relative w-full pt-[62.166%] rounded-2xl overflow-hidden">
                                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
                                         alt=""
                                         class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
                                 </div>
                             </div>
                             <div class="flex-1">
                                 <h3
                                     class="uppercase font-bold xl:text-2xl text-lg mb-6 text-primary-300">
                                     Tư vấn đầu tư cùng chuyên gia
                                 </h3>
                                 <ul class="list-icon space-y-4 font-Helvetica mb-6">
                                     <li class="list-icon-item">
                                         Đa dạng về sản phẩm và tiện ích
                                     </li>
                                     <li class="list-icon-item">
                                         Hệ thống báo cáo phân tích đa dạng, chất lượng hàng đầu thị
                                         trường
                                     </li>
                                     <li class="list-icon-item">
                                         Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
                                     </li>
                                     <li class="list-icon-item">
                                         Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
                                     </li>
                                 </ul>
                                 <a href="#" class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold">
                                     <span class="inline-flex items-center gap-x-3 relative z-10">
                                         <?php echo svg( 'arrow-btn', '20' ) ?>
                                         Khám phá ngay</span>
                                 </a>
                             </div>
                         </div>
                         <div class="bg-white p-8 rounded-3xl lg:flex lg:flex-row-reverse lg:gap-16 gap-10 items-center">
                             <div class="w-[563px] max-w-[50%]">
                                 <div
                                     class="relative w-full pt-[62.166%] rounded-2xl overflow-hidden">
                                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
                                         alt=""
                                         class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
                                 </div>
                             </div>
                             <div class="flex-1">
                                 <h3
                                     class="uppercase font-bold xl:text-2xl text-lg mb-6 text-primary-300">
                                     TƯ VẤN ĐẦU TƯ ONLINE
                                 </h3>
                                 <p class="font-bold mb-4">
                                 Nhà đầu tư có thể tận dụng các công cụ hỗ trợ đầu tư trực tuyến tại BSC với nhiều đặc quyền hấp dẫn:
                                 </p>
                                 <ul class="list-icon space-y-4 font-Helvetica mb-6">
                                     <li class="list-icon-item">
                                         Đa dạng về sản phẩm và tiện ích
                                     </li>
                                     <li class="list-icon-item">
                                         Hệ thống báo cáo phân tích đa dạng, chất lượng hàng đầu thị
                                         trường
                                     </li>
                                     <li class="list-icon-item">
                                         Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
                                     </li>
                                     <li class="list-icon-item">
                                         Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
                                     </li>
                                 </ul>
                                 <a href="#" class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold">
                                     <span class="inline-flex items-center gap-x-3 relative z-10">
                                         <?php echo svg( 'arrow-btn', '20' ) ?>
                                         Khám phá ngay</span>
                                 </a>
                             </div>
                         </div>
                     </div>
                      <?php 
                     } 
                    ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();