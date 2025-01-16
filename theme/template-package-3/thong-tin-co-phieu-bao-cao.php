<?php

/**
Template Name: [Package 3] Thông tin cổ phiếu (báo cáo)
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h2 class="font-bold lg:text-[32px] text-2xl mb-2">
				CÔNG TY CỔ PHẦN CHỨNG KHOÁN BIDV
			</h2>
			<p class="font-bold text-lg text-opacity-50 text-black">BIDV Securities Joint Stock
				Company</p>
			<div class="mt-10 lg:flex lg:gap-5">
				<div class="lg:w-[547px] max-w-[41%]">
					<div class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 space-y-6 h-full">
						<div class="flex gap-6 items-center">
							<div
								class="lg:w-[90px] w-16 lg:h-[90px] h-16 bg-white rounded-full flex items-center justify-center p-5">
								<?php echo svgClass( 'icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9' ) ?>
							</div>
							<div class="flex flex-col">
								<h4 class="font-bold lg:text-[32px] text-2xl uppercase leading-normal">
									BSI
								</h4>
								<p class="uppercase text-lg text-paragraph">
									HOSE
								</p>

							</div>
						</div>
						<div class="flex items-center gap-7">
							<div class="lg:w-[172px] lg:max-w-[37%]">
								<div class="flex-col gap-2">
									<div class="flex gap-[14px] data_number">
										<div class="lg:text-[40px] text-4xl font-bold">
											43.30
										</div>
										<div class="flex flex-col text-[#FE5353]">
											<p>
												-0.20%
											</p>
											<p>
												-0.46%
											</p>
										</div>
									</div>
									<p class="time-update mt-1">
										Cập nhật lúc 14:45 UTC+7
									</p>

								</div>
							</div>
							<div class="flex-1 grid grid-cols-3 gap-5 font-Helvetica">
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Trần
										</p>
										<p class="font-bold text-[#1CCD83] text-lg">
											49.95
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Cao nhất
										</p>
										<p class="font-bold text-black text-lg">
											47.70
										</p>
									</div>
								</div>
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Tham chiếu
										</p>
										<p class="font-bold text-[#FFB81C] text-lg">
											49.95
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Thấp nhất
										</p>
										<p class="font-bold text-black text-lg">
											46.65
										</p>
									</div>
								</div>
								<div class="col-span-1 space-y-5">
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Sàn
										</p>
										<p class="font-bold text-[#FE5353] text-lg">
											43.45
										</p>
									</div>
									<div class="flex flex-col gap-0.5">
										<p class="text-paragraph text-opacity-70 text-xs">
											Trung bình
										</p>
										<p class="font-bold text-black text-lg">
											47.31
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lg:w-[433px] max-w-[33%]">
					<div
						class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 h-full flex flex-col justify-between gap-5 font-Helvetica">
						<div class="flex items-end justify-between">
							<div class="lg:w-[120px] space-y-2">
								<p class="text-paragraph text-opacity-70 text-xs">
									Tham chiếu
								</p>
								<p class="font-medium text-lg">
									133,883,457
								</p>
							</div>
							<div class="lg:w-[120px]">
								<p class="text-paragraph text-opacity-70 text-xs">
									Vốn hóa
								</p>
								<p class="font-medium text-lg">
									1,600
								</p>
							</div>
						</div>
						<div class="flex items-end justify-between">
							<div class="lg:w-[120px] space-y-2">
								<p class="text-paragraph text-opacity-70 text-xs">
									KLGD trung bình
									10 ngày
								</p>
								<p class="font-medium text-lg">
									6,800
								</p>
							</div>
							<div class="lg:w-[120px]">
								<p class="text-paragraph text-opacity-70 text-xs">
									P/E
								</p>
								<p class="font-medium text-lg">
									23.73
								</p>
							</div>
						</div>
						<div class="flex items-end justify-between">
							<div class="lg:w-[120px] space-y-2">
								<p class="text-paragraph text-opacity-70 text-xs">
									P/B
								</p>
								<p class="font-medium text-lg">
									24,191
								</p>
							</div>
							<div class="lg:w-[120px]">
								<p class="text-paragraph text-opacity-70 text-xs">
									ROE
								</p>
								<p class="font-medium text-lg">
									2.12
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="flex-1">
					<div
						class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 h-full font-Helvetica flex flex-col">
						<h3 class="font-bold mb-6">
							KHUYẾN NGHỊ
						</h3>
						<div class="space-y-4 mb-6">
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Analyst:
								</p>
								<p class="font-bold text-primary-300">
									Trịnh Tuấn Ngọc
								</p>
							</div>
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Khuyến nghị:
								</p>
								<p
									class="inline-block rounded-full px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold">
									Mua
								</p>
							</div>
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Danh mục:
								</p>
								<p
									class="inline-block rounded-full px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold">
									Mua
								</p>
							</div>
							<div class="flex items-center justify-between text-xs">
								<p class="text-xs">
									Ngày cập nhật
								</p>
								<p class="font-bold">
									18/11/1998
								</p>
							</div>
						</div>
						<div class="mt-auto">
							<p
								class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full text-[#F90] bg-gradient-yellow-50">
								<?php echo svg( 'gold', '24', '24' ) ?>
								Hạng A
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<ul class="flex lg:gap-[100px] gap-10 items-center border-b border-[#D3D3D3] nav-ttcp">
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<a href=""
						class=" inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						TỔNG QUAN
					</a>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<a href=""
						class="active inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						BÁO CÁO TÀI CHÍNH
					</a>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<a href=""
						class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						CHỈ TIÊU TÀI CHÍNH
					</a>
				</li>
				<li
					class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
					<a href=""
						class="has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
						<?php echo svg( 'star', '24', '24' ) ?>
						BSC DỰ PHÓNG
					</a>
				</li>
			</ul>
			<div class="list__content">
				<div class="flex items-center justify-between mt-16 mb-[30px]">
					<ul class="flex items-center gap-5">
						<li>
							<a href=""
								class="active inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
								Quý
							</a>
						</li>
						<li>
							<a href=""
								class="inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
								Năm
							</a>
						</li>
					</ul>
					<a href=""
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
						Xem chi tiết
						<?php echo svg( 'arrow-btn', '12', '12' ) ?>
					</a>
				</div>
				<ul class="flex items-center justify-end gap-[27px] flex-wrap lg:mr-6 mb-6">
					<?php
					for ( $i = 18; $i < 24; $i++ ) {
						?>
						<li class="lg:min-w-[140px] font-bold">
							<p>
								Năm 20<?= $i ?>
							</p>
							<p class="text-[#1CCD83]">
								(Đã kiểm toán)
							</p>
						</li>
						<?php
					}
					?>
				</ul>
				<div class="space-y-16">
					<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
						<table class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left
							 prose-td:p-4 font-medium">
							<thead>
								<tr>
									<th colspan="7">Kết quả kinh doanh</th>
								</tr>
							</thead>
							<tbody>
								<?php
								for ( $i = 0; $i < 4; $i++ ) {
									?>
									<tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
										<td class="lg:min-w-[231px]">Doanh thu bán hàng và CCDV</td>
										<td>911,959,220</td>
										<td>608,349,810</td>
										<td>912,577,380</td>
										<td>1,333,024,980</td>
										<td>1,089,005,390</td>
										<td>1,258,998,059</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
					<div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
						<table class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left
							 prose-td:p-4 font-medium">
							<thead>
								<tr>
									<th colspan="7">Cân đối kế toán</th>
								</tr>
							</thead>
							<tbody>
								<?php
								for ( $i = 0; $i < 4; $i++ ) {
									?>
									<tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
										<td class="lg:min-w-[231px]">Tổng tài sản</td>
										<td>911,959,220</td>
										<td>608,349,810</td>
										<td>912,577,380</td>
										<td>1,333,024,980</td>
										<td>1,089,005,390</td>
										<td>1,258,998,059</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();