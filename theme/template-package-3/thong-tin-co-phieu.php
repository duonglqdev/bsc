<?php

/**
Template Name: [Package 3] Thông tin cổ phiếu
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<?php if ( wp_is_mobile() && bsc_is_mobile() )
			{ ?>
				<div class="toggle-form mb-[12px] inline-block">
					<div class="">
						<p class="inline-flex items-baseline gap-2 font-medium">Bộ lọc
							<?php echo svgClass( 'down', '', '', 'rotate-180' ) ?>
						</p>
					</div>
					<div class="hidden">
						<p class="inline-flex items-baseline gap-2 font-medium">Bộ lọc
							<?php echo svg( 'down' ) ?>
						</p>
					</div>
				</div>
			<?php } ?>
			<form class="flex <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-4 items-end mb-10':'flex-wrap mb-6 -mx-2 gap-y-[12px]' ?>" id="form-search-cophieu">
				<div class="flex flex-col font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[20%] w-1/6 max-w-[300px]':'sm:w-1/2 w-full px-2' ?>">
					<p class="font-medium mb-2 lg:text-base text-xs">
						Tìm theo tên
					</p>
					<input type="text" placeholder="<?php _e( 'Nhập mã chứng khoán', 'bsc' ) ?>"
						class="w-full bg-[#F3F4F6] border-[#E4E4E4] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[50px] rounded-[10px] px-5':'h-[42px] rounded-lg px-4 text-xs' ?>"
						id="search-name">
				</div>
				<div class="flex flex-col font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[20%] w-1/6 max-w-[300px]':'sm:w-1/2 w-full px-2' ?>">
					<p class="font-medium mb-2 lg:text-base text-xs">
						Tìm mã cổ phiếu
					</p>
					<select
						class="select_custom w-full bg-[#F3F4F6] border-[#E4E4E4] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[50px] rounded-[10px] pl-5':'pl-4 rounded-lg text-xs' ?>"
						id="search-code">
						<option value="">Tất cả</option>
						<option value="A32">A32</option>
						<option value="AAA">AAA</option>
					</select>
					<input type="hidden" id="filter-code">
				</div>
				<div class="flex flex-col font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[20%] w-1/6 max-w-[243px]':'w-1/2 px-2' ?>">
					<p class="font-medium mb-2 lg:text-base text-xs">
						Tìm theo ngành
					</p>
					<select
						class="select_custom w-full bg-[#F3F4F6] border-[#E4E4E4] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[50px] rounded-[10px] pl-5':'pl-4 rounded-lg text-xs' ?>"
						id="search-major">
						<option value="">Tất cả</option>
						<option value="Tài chính">Tài chính</option>
						<option value="Công nghệ thông tin">Công nghệ thông tin</option>
						<option value="Hóa chất">Hóa chất</option>
					</select>
					<input type="hidden" id="filter-major">
				</div>
				<div class="flex flex-col font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[20%] w-1/6 max-w-[241px]':'w-1/2 px-2' ?>">
					<p class="font-medium mb-2 lg:text-base text-xs">
						Tìm theo sàn
					</p>
					<select
						class="select_custom w-full bg-[#F3F4F6] border-[#E4E4E4] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[50px] rounded-[10px] pl-5':'pl-4 rounded-lg text-xs' ?>"
						id="search-trading">
						<option value="">Tất cả</option>
						<option value="HOSE">HOSE</option>
						<option value="HNX">HNX</option>
						<option value="UPCOM">UPCOM</option>
					</select>
					<input type="hidden" id="filter-trading">
				</div>

				<button type="button" id="search_cophieu"
					class="btn-base-yellow flex-1 whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[50px] rounded-xl':'h-10 rounded-lg mr-4' ?>">
						<?php _e( 'Tìm kiếm', 'bsc' ) ?>
				</button>
				<button type="reset" id="reset-ttcp"
					class="rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[50px] h-[50px]':'w-10 h-10' ?>">
					<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
				</button>
			</form>
			<div class="flex flex-col">
				<p class="italic mb-4 text-right">Đơn vị Vốn hóa, GTGD: Triệu đồng</p>
				<div class="rounded-tl-lg rounded-tr-lg overflow-hidden relative block-loading">
						<table id="ttcp-table"
							class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:p-3 prose-a:text-primary-300 prose-a:font-bold font-medium prose-td:px-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'prose-td:py-4':'prose-td:py-3' ?>">
							<thead>
								<tr>
									<th class="!pl-5 cursor-pointer filter-table <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[100px]' ?>">Mã CK
										<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
									</th>
									<th class="w-1/5 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[140px]' ?>">Tên công ty</th>
									<th class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[80px]' ?>">Sàn</th>
									<th class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[150px]' ?>">Ngành</th>
									<th class="cursor-pointer <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[130px]' ?>">Vốn hóa
										<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
									</th>
									<th class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[80px]' ?>">KLGD</th>
									<th class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[80px]' ?>">GTGD</th>
									<th class="cursor-pointer filter-table <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[100px]' ?>">PE
										<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
									</th>
									<th class="cursor-pointer filter-table <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'whitespace-nowrap min-w-[80px]' ?>">PB
										<?php echo svgClass( 'filter', '20', '20', 'inline-block' ) ?>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								for ( $i = 0; $i < 5; $i++ )
								{
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
										<td></td>
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
								<?php
								for ( $i = 0; $i < 5; $i++ )
								{
									?>
									<tr class="border-b border-[#C9CCD2]">
										<td class="!pl-5" data-code><a href="">A32</a></td>
										<td>CTCP 32</td>
										<td data-trading>HOSE</td>
										<td data-major>Tài chính</td>
										<td>36,80</td>
										<td>36,80</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr class="border-b border-[#C9CCD2]">
										<td class="!pl-5" data-code><a href="">AAA</a></td>
										<td>CTCP Nhựa An Phát Xanh</td>
										<td data-trading>HNX</td>
										<td data-major>Công nghệ thông tin</td>
										<td>37,80</td>
										<td>37,80</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr class="border-b border-[#C9CCD2]">
										<td class="!pl-5" data-code><a href="">AAT</a></td>
										<td>CTCP Chứng khoán Smart Invest</td>
										<td data-trading>UPCOM</td>
										<td data-major>Hóa chất</td>
										<td>38,80</td>
										<td>38,80</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
	
									<?php
								}
								?>
							</tbody>
						</table>
					<div role="status"
						class="absolute w-full h-full inset-0 bg-white bg-opacity-90 flex items-center justify-center">
						<svg aria-hidden="true"
							class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
							viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
								fill="currentColor" />
							<path
								d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
								fill="currentFill" />
						</svg>
						<span class="sr-only">Loading...</span>
					</div>
				</div>


			</div>


		</div>
	</section>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
				CÓ THỂ BẠN QUAN TÂM
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-2 gap-5':'block_slider block_slider-show-1 fli-dots-blue dots-left' ?>">
				<?php 
				 for ($i = 0; $i < 3; $i++) {
				 ?>
				 <div class="rounded-xl overflow-hidden bg-no-repeat bg-cover flex px-8 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-11 py-5 min-h-[228px]':'pl-6 py-4 pr-3 block_slider-item w-full min-h-[167px] items-center' ?>"
					 style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-6.png)">
					 <div class="w-1/2 h-full">
						 <div
							 class="flex flex-col justify-end h-full font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'ml-10':'pb-[43px]' ?>">
							 <p class="font-bold mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'text-lg' ?>">
								 Báo cáo phân tích
							 </p>
							 <a href="#"
								 class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs">
								 Truy cập ngay
								 <?php echo svg( 'arrow-btn', '12', '12' ) ?>
							 </a>
 
						 </div>
					 </div>
					 <div class="w-1/2 h-full flex items-center justify-center">
						 <img loading="lazy"
							 src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/OZI9ES1 1.png"
							 alt="">
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
