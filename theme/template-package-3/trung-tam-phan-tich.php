<?php

/**
Template Name:[Package 3] Trung tâm phân tích
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="xl:[my-100px] my-20">
		<div class="container">
			<div class="flex justify-between items-center mb-8">
				<h2 class="heading-title">Báo cáo vĩ mô - THỊ TRƯỜNG</h2>
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
							<a href=""
								class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
								Báo cáo vĩ mô tuần
							</a>
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#FFB81C] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
									lập</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
										89,400 <span class="text-[#30D158]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
										89,400 <span class="text-[#30D158]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
										89,400 <span class="text-[#30D158]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#FFB81C] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
									lập</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
										89,400 <span class="text-[#30D158]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
										89,400 <span class="text-[#30D158]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
									cực</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
										89,400 <span class="text-[#30D158]">(+23%)</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col gap-1.5">
								<span
									class="inline-block rounded-[45px] text-[#FFB81C] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
									lập</span>
								<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
							</div>
						</div>
						<h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
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
				<h2 class="heading-title">DANH MỤC KHUYẾN NGHỊ</h2>
				<a href=""
					class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
					<?php echo svg( 'arrow-btn', '16', '16' ) ?>
					<?php _e( 'Xem tất cả', 'bsc' ) ?>
				</a>
			</div>

		</div>
	</section>
</main>
<?php
get_footer();