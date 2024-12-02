<?php

/**
Template Name: [Package 3] Lịch thị trường
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="lg:mt-[86px] mt-20 lg:mb-[100px] mb-20">
		<div class="container">
			<div class="lg:flex gap-5 mb-10 mt-4 items-end">
				<div class="lg:w-80 lg:max-w-1/3 flex flex-col font-Helvetica">
					<p class="font-medium mb-2">
						Mã cổ phiếu
					</p>
					<input type="text" placeholder="<?php _e( 'Nhập mã chứng khoán', 'bsc' ) ?>"
						class="w-full h-[50px] rounded-[10px] px-5 border-[#E4E4E4]">
				</div>
				<div class="lg:w-80 lg:max-w-1/3 flex flex-col font-Helvetica">
					<p class="font-medium mb-2">
						Loại sự kiện
					</p>
					<select
						class="select_custom w-full h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
						<option value="">Tất cả</option>
						<option value="">AAA</option>
						<option value="">BBB</option>
					</select>
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
			<ul class="flex items-center gap-5">
				<li>
					<a href=""
						class="active inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-4 text-center font-bold py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white text-xs">
						GDKHQ
					</a>
				</li>
				<li>
					<a href=""
						class="inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-4 text-center font-bold py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white text-xs">
						Đăng ký
					</a>
				</li>
				<li>
					<a href=""
						class="inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-4 text-center font-bold py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white text-xs">
						Thực thi
					</a>
				</li>
			</ul>

            <div class="mt-5">
                <table class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold font-medium prose-a:text-primary-300 prose-a:font-normal prose-th:px-3 prose-th:py-2 prose-th:border prose-th:border-[#C9CCD2] prose-td:px-3 prose-td:py-2 border-collapse prose-td:border prose-td:border-[#C9CCD2] text-center  overflow-hidden border border-[#C9CCD2] rounded-lg shadow-[inset_0px_0px_0px_1px_#ccc]">
                    <thead>
                        <tr>
                            <th>Ngày GD KHQ</th>
                            <th>Ngày đăng ký</th>
                            <th>Ngày thực thi</th>
                            <th>Mã ck</th>
                            <th class="w-3/5">Sự kiện</th>
                        </tr>
                    </thead>
                    <tbody class="font-Helvetica">
                        <?php 
                         for ($i = 0; $i < 12; $i++) {
                         ?>
                         <tr>
                             <td>09/08/2024</td>
                             <td>12/08/2024</td>
                             <td>12/09/2024</td>
                             <td><a href="">BIC</a></td>
                             <td class="text-left"><a href="">Đại hội cổ đông bất thường năm 2024</a></td>
                         </tr>
                          <?php 
                         } 
                        ?>
                    </tbody>
                </table>
            </div>

			<div class="mt-8">
				<nav aria-label="Page navigation example"
					class="flex items-center gap-8 justify-center">
					<ul class="flex items-center gap-[11px] h-9 text-base">
						<li>
							<a href="#"
								class="flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded text-gray-500 bg-white  hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
								<span class="sr-only">Previous</span>
								<svg class="w-3 h-3 rtl:		" aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg" fill="none"
									viewBox="0 0 6 10">
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
									xmlns="http://www.w3.org/2000/svg" fill="none"
									viewBox="0 0 6 10">
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