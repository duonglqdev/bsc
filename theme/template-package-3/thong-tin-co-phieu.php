<?php

/**
Template Name: [Package 3] Thông tin cổ phiếu
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<form class="flex gap-4 items-end mb-10" id="form-search-cophieu">
				<div class="lg:w-[20%] lg:max-w-[300px] flex flex-col font-Helvetica">
					<p class="font-medium mb-2">
						Tìm theo tên
					</p>
					<input type="text" placeholder="<?php _e('Nhập mã chứng khoán', 'bsc') ?>"
						class="w-full bg-[#F3F4F6] h-[50px] rounded-[10px] px-5 border-[#E4E4E4]" id="search-name">
				</div>
				<div class="lg:w-[20%] lg:max-w-[300px] flex flex-col font-Helvetica">
					<p class="font-medium mb-2">
						Tìm mã cổ phiếu
					</p>
					<select
						class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]" id="search-code">
						<option value="">Tất cả</option>
						<option value="A32">A32</option>
						<option value="AAA">AAA</option>
					</select>
					<input type="hidden" id="filter-code">	
				</div>
				<div class="lg:w-[20%] lg:max-w-[243px] flex flex-col font-Helvetica">
					<p class="font-medium mb-2">
						Tìm theo ngành
					</p>
					<select
						class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]" id="search-major">
						<option value="">Tất cả</option>
						<option value="Tài chính">Tài chính</option>
						<option value="Công nghệ thông tin">Công nghệ thông tin</option>
						<option value="Hóa chất">Hóa chất</option>
					</select>
					<input type="hidden" id="filter-major">							
				</div>
				<div class="lg:w-[20%] lg:max-w-[241px] flex flex-col font-Helvetica">
					<p class="font-medium mb-2">
						Tìm theo sàn
					</p>
					<select
						class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]" id="search-trading">
						<option value="">Tất cả</option>
						<option value="HOSE">HOSE</option>
						<option value="HNX">HNX</option>
						<option value="UPCOM">UPCOM</option>
					</select>
					<input type="hidden" id="filter-trading">
				</div>

				<button type="button" id="search_cophieu"
					class="btn-base-yellow h-[50px] rounded-xl flex-1 whitespace-nowrap">
					<span class="block relative z-10">
						<?php _e('Tìm kiếm', 'bsc') ?>
					</span>
				</button>
				<button type="reset" id="reset-ttcp"
					class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
					<?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
				</button>
			</form>
			<div class="flex flex-col">
				<p class="italic mb-4 text-right">Đơn vị Vốn hóa, GTGD: Triệu đồng</p>
				<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
					<table id="ttcp-table"
						class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:p-3 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3">
						<thead>
							<tr>
								<th data-sortable="true" class="!pl-5 cursor-pointer ">Mã CK
									<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
								</th>
								<th class="w-1/5">Tên công ty</th>
								<th data-sortable="true">Sàn</th>
								<th data-sortable="true">Ngành</th>
								<th class=" cursor-pointer">Vốn hóa
									<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
								</th>
								<th>KLGD</th>
								<th>GTGD</th>
								<th class=" cursor-pointer">PE
									<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
								</th>
								<th class=" cursor-pointer">PB
									<?php echo svgClass('filter', '20', '20', 'inline-block') ?>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							for ($i = 0; $i < 10; $i++) {
							?>
								<tr class="border-b border-[#C9CCD2]">
									<td class="!pl-5" data-code><a href="">A32</a></td>
									<td>CTCP 32</td>
									<td data-trading>HOSE</td>
									<td data-major>Tài chính</td>
									<td>36,80</td>
									<td>36,80</td>
									<td>36,80</td>
									<td>301,24</td>
									<td>6,99</td>
								</tr>
								<tr class="border-b border-[#C9CCD2]">
									<td class="!pl-5" data-code><a href="">AAA</a></td>
									<td>CTCP Nhựa An Phát Xanh</td>
									<td data-trading>HNX</td>
									<td data-major>Công nghệ thông tin</td>
									<td>37,80</td>
									<td>37,80</td>
									<td>37,80</td>
									<td>303,24</td>
									<td>7,99</td>
								</tr>
								<tr class="border-b border-[#C9CCD2]">
									<td class="!pl-5" data-code><a href="">AAT</a></td>
									<td>CTCP Chứng khoán Smart Invest</td>
									<td data-trading>UPCOM</td>
									<td data-major>Hóa chất</td>
									<td>38,80</td>
									<td>38,80</td>
									<td>38,80</td>
									<td>305,24</td>
									<td>8,99</td>
								</tr>

							<?php
							}
							?>
						</tbody>
					</table>
				</div>

				
			</div>


		</div>
	</section>
	<section class="xl:my-[100px] my-10">
		<div class="container">
			<h2 class="heading-title mb-10">
				CÓ THỂ BẠN QUAN TÂM
			</h2>
			<div class="grid grid-cols-2 gap-5">
				<div class="rounded-xl overflow-hidden bg-no-repeat bg-cover lg:flex lg:px-11 px-8 min-h-[228px]"
					style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-6.png)">
					<div class="w-1/2 h-full">
						<div
							class="flex flex-col justify-end h-full ml-10 font-Helvetica pb-[43px]">
							<p class="font-bold mb-2 text-2xl">
								Báo cáo phân tích
							</p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs">
								Truy cập ngay
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>

						</div>
					</div>
					<div class="w-1/2 h-full flex items-center justify-center">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/OZI9ES1 1.png"
							alt="">
					</div>
				</div>
				<div class="rounded-xl overflow-hidden bg-no-repeat bg-cover lg:flex lg:px-11 px-8 min-h-[228px]"
					style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-6.png)">
					<div class="w-1/2 h-full">
						<div
							class="flex flex-col justify-end h-full ml-10 font-Helvetica pb-[43px]">
							<p class="font-bold mb-2 text-2xl">
								Ưu đãi từ BSC
							</p>
							<a href="#"
								class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs">
								Truy cập ngay
								<?php echo svg('arrow-btn', '12', '12') ?>
							</a>

						</div>
					</div>
					<div class="w-1/2 h-full flex items-center justify-center">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/OZI9ES1 1 (1).png"
							alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
