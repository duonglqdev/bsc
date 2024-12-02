<?php

/**
Template Name: [Package 3] Dữ liệu lịch sử
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-[#EBF4FA] py-4 sticky top-0 z-[20] sticky-nav">
		<div class="container">
			<ul class="flex justify-center gap-10">
				<li>
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Lịch sử giá
					</a>
				</li>
				<li>
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
						Nhà đầu tư nước ngoài
					</a>
				</li>


			</ul>
		</div>
	</section>
	<section class="mt-12 lg:mb-[100px] mb-20">
		<div class="container">
			<div class="lg:flex gap-5 mb-12 mt-4 items-end">
				<div class="lg:w-80 lg:max-w-1/3 flex flex-col font-Helvetica">
					<p class="font-medium mb-2">
						Mã cổ phiếu
					</p>
					<input type="text" placeholder="<?php _e( 'Nhập mã chứng khoán', 'bsc' ) ?>"
						class="w-full h-[50px] rounded-[10px] px-5 border-[#E4E4E4]">
				</div>
				<div class="font-Helvetica lg:w-[433px] max-w-[40%] w-full">
					<p class="font-medium mb-2">
						Lọc theo ngày
					</p>
					<div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
						datepicker-autohide datepicker-orientation="bottom right"
						class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs ">

						<div class="flex items-center 2xl:gap-5 gap-3">
							<input id="datepicker-range-start" name="start" type="text"
								class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
								placeholder="<?php _e( 'Từ ngày', 'bsc' ) ?>">
							<?php echo svg( 'day', '20', '20' ) ?>
						</div>
						<span class="2xl:mx-4 mx-2 text-gray-500">-</span>
						<div class="flex items-center 2xl:gap-5 gap-3">
							<input id="datepicker-range-end" name="end" type="text"
								class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
								placeholder="<?php _e( 'Đến ngày', 'bsc' ) ?>">
							<?php echo svg( 'day', '20', '20' ) ?>
						</div>
					</div>
				</div>
				<button type="submit"
					class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight min-w-[155px] rounded-xl h-[50px]">
					<?php _e( 'Tìm kiếm', 'bsc' ) ?>
				</button>
				<button type="button" id="btn-reload"
					class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
					<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
				</button>
			</div>
			<div class="rounded-lg overflow-hidden overflow-y-auto scroll-bar-custom max-h-[646px]">
				<table
					class="w-full max-w-full text-center prose-thead:bg-primary-300 prose-thead:text-white text-xs font-medium prose-thead:font-bold prose-th:py-1.5 prose-thead:px-3 prose-th:border-collapse prose-th:border prose-th:border-white prose-td:p-3 bg-white prose-thead:sticky prose-thead:top-0">
					<thead>
						<tr>
							<th rowspan="2">Ngày</th>
							<th rowspan="2">Đóng cửa </th>
							<th rowspan="2">Thay đổi</th>
							<th colspan="2">GD khớp lệnh</th>
							<th colspan="2">GD thỏa thuận</th>
							<th colspan="3">Giá (nghìn VNĐ)</th>
						</tr>
						<tr>
							<th>Khối lượng</th>
							<th>Giá trị (tỷ VNĐ)</th>
							<th>Khối lượng</th>
							<th>Giá trị (tỷ VNĐ)</th>
							<th>Mở cửa</th>
							<th>Cao nhất</th>
							<th>Thấp nhất</th>
						</tr>
					</thead>
					<tbody>
						<?php
						for ( $i = 0; $i < 7; $i++ )
						{
							?>
							<tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
								<td>01/01/2024</td>
								<td class="text-right !pr-8">2.06</td>
								<td class="text-[#30D158]">0.6 (1.18%)</td>
								<td class="text-right !pr-5">10,000,000</td>
								<td class="text-right !pr-8">22.10</td>
								<td>0</td>
								<td class="text-right !pr-8">0</td>
								<td class="text-right">45.87</td>
								<td class="text-right">87.34</td>
								<td class="text-right">9.62</td>
							</tr>
							<tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
								<td>01/01/2024</td>
								<td class="text-right !pr-8">2.06</td>
								<td class="text-[#FF0017]">0.6 (1.18%)</td>
								<td class="text-right !pr-5">10,000,000</td>
								<td class="text-right !pr-8">22.10</td>
								<td>0</td>
								<td class="text-right !pr-8">0</td>
								<td class="text-right">45.87</td>
								<td class="text-right">87.34</td>
								<td class="text-right">9.62</td>
							</tr>

						<?php
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="mt-8">
				<nav aria-label="Page navigation example" class="flex items-center gap-8 justify-center">
					<ul class="flex items-center gap-[11px] h-9 text-base">
						<li>
							<a href="#"
								class="flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded text-gray-500 bg-white  hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
								<span class="sr-only">Previous</span>
								<svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
									<path stroke="currentColor" stroke-linecap="round"
										stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#"
								class="active flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500">1</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500">2</a>
						</li>
						<li>
							<a href="#"
								class="flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500">3</a>
						</li>
	
	
	
						<li>
							<a href="#"
								class="flex items-center justify-center px-2 min-w-9 h-9 rounded leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">
								<span class="sr-only">Next</span>
								<svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
									<path stroke="currentColor" stroke-linecap="round"
										stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
								</svg>
							</a>
						</li>
					</ul>
	
				</nav>

			</div>
		</div>
	</section>
</main>
<?php
get_footer();