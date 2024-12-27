<?php

/**
Template Name:[Package 3] Trung tâm phân tích
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:[my-100px] my-20' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8 flex justify-between items-center' : 'mb-6' ?>">
				<h2 class="heading-title">Báo cáo vĩ mô - THỊ TRƯỜNG</h2>
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
				{ ?>
					<a href=""
						class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
						<?php echo svg( 'arrow-btn', '16', '16' ) ?>
						<?php _e( 'Xem tất cả', 'bsc' ) ?>
					</a>
				<?php } ?>
			</div>
			<div
				class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-5 lg:grid-cols-3 md:grid-cols-2' : 'md:grid-cols-2 grid-cols-1 gap-4' ?>">
				<?php
				for ( $i = 0; $i < 2; $i++ )
				{
					?>
					<div
						class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col transition-all duration-500 hover:shadow-[2px_3px_11px_1px_#ccc]">
						<div class="flex items-center justify-between mb-4">
							<a href=""
								class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
								Báo cáo vĩ mô tuần
							</a>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#00ad2b] bg-[#b7f2c6] px-4 py-0.5 text-[12px] font-semibold">Tích
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<a href=""
								class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
								Báo cáo ngành
							</a>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<a href=""
								class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
								Báo cáo ngành
							</a>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#f5a800] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
									lập</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between mt-auto">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<?php if ( wp_is_mobile() && bsc_is_mobile() )
			{ ?>
				<div class="mt-8">
					<a href=""
						class="flex items-center justify-center gap-3 py-3 px-5 btn-base-yellow text-xs font-bold min-h-[38px]">
						<?php echo svg( 'arrow-btn', '16', '16' ) ?>
						<?php _e( 'Xem tất cả', 'bsc' ) ?>
					</a>
				</div>
			<?php } ?>
		</div>
	</section>
	<section class="xl:[my-100px] my-20">
		<div class="container">
			<div class="flex justify-between items-center mb-8">
				<h2 class="heading-title">Báo cáo ngành - doanh nghiệp</h2>
				<a href=""
					class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
					<?php echo svg( 'arrow-btn', '16', '16' ) ?>
					<?php _e( 'Xem tất cả', 'bsc' ) ?>
				</a>
			</div>
			<div class="grid gap-5 lg:grid-cols-3 grid-cols-2">
				<?php
				for ( $i = 0; $i < 2; $i++ )
				{
					?>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center gap-4">
								<a href=""
									class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
									BMP
								</a>
								<div class="flex flex-col font-Helvetica text-xs">
									<p>
										Giá mục tiêu
									</p>
									<p class="font-medium">
										89,400 <span class="text-[#00ad2b]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#00ad2b] bg-[#b7f2c6] px-4 py-0.5 text-[12px] font-semibold">Tích
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center gap-4">
								<a href=""
									class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
									BMP
								</a>
								<div class="flex flex-col font-Helvetica text-xs">
									<p>
										Giá mục tiêu
									</p>
									<p class="font-medium">
										89,400 <span class="text-[#00ad2b]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center gap-4">
								<a href=""
									class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
									BMP
								</a>
								<div class="flex flex-col font-Helvetica text-xs">
									<p>
										Giá mục tiêu
									</p>
									<p class="font-medium">
										89,400 <span class="text-[#00ad2b]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#f5a800] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
									lập</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between mt-auto">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<section class="xl:[my-100px] my-20">
		<div class="container">
			<div class="flex justify-between items-center mb-8">
				<h2 class="heading-title">Báo cáo chuyên đề</h2>
				<a href=""
					class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
					<?php echo svg( 'arrow-btn', '16', '16' ) ?>
					<?php _e( 'Xem tất cả', 'bsc' ) ?>
				</a>
			</div>
			<div class="grid gap-5 lg:grid-cols-3 grid-cols-2">
				<?php
				for ( $i = 0; $i < 2; $i++ )
				{
					?>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center gap-4">
								<a href=""
									class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
									BMP
								</a>
								<div class="flex flex-col font-Helvetica text-xs">
									<p>
										Giá mục tiêu
									</p>
									<p class="font-medium">
										89,400 <span class="text-[#00ad2b]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#00ad2b] bg-[#b7f2c6] px-4 py-0.5 text-[12px] font-semibold">Tích
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center gap-4">
								<a href=""
									class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
									BMP
								</a>
								<div class="flex flex-col font-Helvetica text-xs">
									<p>
										Giá mục tiêu
									</p>
									<p class="font-medium">
										89,400 <span class="text-[#00ad2b]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center gap-4">
								<a href=""
									class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
									BMP
								</a>
								<div class="flex flex-col font-Helvetica text-xs">
									<p>
										Giá mục tiêu
									</p>
									<p class="font-medium">
										89,400 <span class="text-[#00ad2b]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="space-y-1.5 text-right">
								<span
									class="inline-block rounded-[45px] text-[#f5a800] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
									lập</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3
							class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
							<a href="" class="line-clamp-2">
								Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
								quỹ_20240808
							</a>
						</h3>
						<div class="flex items-center justify-between mt-auto">
							<p class="italic text-paragraph text-xs font-Helvetica">
								68 Lượt tải xuống
							</p>
							<a href=""
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
								<?php _e( 'Tải xuống', 'bsc' ) ?>
								<?php echo svg( 'download', '20', '20' ) ?>
							</a>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:[my-100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<div class="flex justify-between items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-8':'mb-6' ?>">
				<h2 class="heading-title">DANH MỤC KHUYẾN NGHỊ</h2>
				<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
					<a href=""
						class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
						<?php echo svg( 'arrow-btn', '16', '16' ) ?>
						<?php _e( 'Xem tất cả', 'bsc' ) ?>
					</a>
				<?php } ?>
			</div>
			<div
				class="block_slider slider-tutorial dmkm <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-3 has-nav no-dots -mx-3':'block_slider-show-1 fli-dots-blue dots-left dots-left-6' ?>">
				<?php 
				 for ($i = 0; $i < 3; $i++) {
				 ?>
				 <div class="block_slider-item <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-3 w-1/3':'w-full' ?>">
					 <div class="overflow-hidden flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[223px] rounded-xl':'min-h-[168px] rounded-lg' ?>"
						 style="background-color:#235BA81a;">
						 <div class="py-5 pr-1 w-1/2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pl-6':'pl-5' ?>">
							 <h3 class="font-bold mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl':'text-lg' ?>">
								 Danh mục BSC 10
							 </h3>
							 <a href=""
								 class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-xs <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'flex-row-reverse' ?>">
								 <?php echo svg( 'arrow-btn', '12', '12' ) ?>
								 Xem chi tiết
							 </a>
						 </div>
						 <div class="w-1/2">
							 <img loading="lazy"
								 src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle 23490.png"
								 alt="">
						 </div>
					 </div>
				 </div>
				  <?php 
				 } 
				?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
