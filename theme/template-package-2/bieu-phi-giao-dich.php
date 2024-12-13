<?php

/**
Template Name: [Package-2] Biểu phí giao dịch
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="bg-primary-50 sticky z-10 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:py-4 py-3 top-0' : 'py-[12px] top-[60px]' ?>">
		<div class="container">
			<ul
				class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'justify-between gap-10' : 'overflow-x-auto gap-4' ?>">
				<li
					class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
					<a href="#"
						class=" block text-center font-bold  [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] px-10' : 'py-3 px-4 text-xs' ?>">
						Sổ tay giao dịch
					</a>
				</li>
				<li
					class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
					<a href="#"
						class="active block text-center font-bold [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] px-10' : 'py-3 px-4 text-xs' ?>">
						Biểu phí giao dịch
					</a>
				</li>
				<li
					class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
					<a href="#"
						class="block text-center font-bold [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] px-10' : 'py-3 px-4 text-xs' ?>">
						Điều khoản chung
					</a>
				</li>

			</ul>
		</div>
	</section>
	<section class="mt-14 xl:mb-[100px] mb-20">
		<div class="container">
			<div class="lg:flex gap-20">
				<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:w-[340px] max-w-[35%] shrink-0':'relative' ?>">
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
						<div
							class="sticky z-[9] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:top-28' : '' ?>">
							<ul
								class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2 sidebar-report sidebar-base">
								<li class="active">
									<a href="#"
										class="active flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Mở
										tài khoản giao dịch</a>
									<ul class="pl-5 sub-menu w-full bg-white py-2">
										<li class="pl-5">
											<a href="#"
												class="active [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
												Mở tài khoản chứng khoán
											</a>
										</li>
										<li class="pl-5">
											<a href="#"
												class=" [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
												Bộ điều khoản và điều kiện
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										Lưu ký chứng khoán
									</a>
								</li>
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hướng
										dẫn giao dịch
										chứng khoán</a>
								</li>
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hướng
										dẫn giao dịch tiền</a>
								</li>
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Dịch
										vụ tài chính</a>
								</li>
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hệ
										thống giao dịch</a>
								</li>
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Hệ
										thống bảo mật</a>
								</li>
								<li>
									<a href="#"
										class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Video
										hướng dẫn</a>
								</li>
							</ul>

						</div>
					<?php else : ?>
						<div
							class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next">
							Phí giao dịch qua sàn
							<?php echo svg( 'down-white', '20' ) ?>
						</div>

						<ul
							class="overflow-y-auto absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 prose-a:block rounded text-xs">
							<li>
								<a href="#"
									class="active text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">Mở
									tài khoản giao dịch</a>

							</li>
							<li>
								<a href="#"
									class="text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">
									Lưu ký chứng khoán
								</a>
							</li>
							<li>
								<a href="#"
									class="text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">Hướng
									dẫn giao dịch
									chứng khoán</a>
							</li>
							<li>
								<a href="#"
									class="text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">Hướng
									dẫn giao dịch tiền</a>
							</li>

						</ul>
						
					<?php endif; ?>
				</div>
				<div class="flex-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-6' ?>">
					<h2 class="heading-title mb-6">
						BIỂU PHÍ GIAO DỊCH CHỨNG KHOÁN CƠ SỞ
					</h2>
					<div
						class="prose-table:border-collapse prose-td:border-[4px] prose-th:border-[4px] prose-td:border-white prose-th:border-white prose-table:rounded-3xl prose-table:overflow-hidden prose-table:max-w-full prose-table:w-full prose-table:text-center custom-table prose-ul:pl-5 prose-ul:list-disc prose-ul:mb-6  prose-table:font-Helvetica prose-table:font-medium prose-thead:font-bold prose-table:table-fixed <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'prose-ul:text-xl prose-th:py-5 prose-th:px-5 prose-td:py-5 prose-td:px-[29px]':'prose-ul:text-lg prose-th:py-4 prose-th:px-3 prose-td:py-[12px] prose-td:px-3 text-xxs' ?>">
						<div class="table__item mb-10">
							<ul class="pl-5 list-disc  font-bold  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-6':'mb-4' ?>">
								<li>
									Giao dịch cổ phiếu (CP), Chứng chỉ quỹ (CCQ), ETF, chứng quyền
									có
									bảo đảm (CW)
								</li>
							</ul>
							<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'overflow-x-auto text-xxs' ?>">
								<table >
									<thead>
										<tr>
											<th rowspan="2" class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[7.313%] px-0':'px-2 whitespace-nowrap w-[50px]' ?>">STT
											</th>
											<th rowspan="2" class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[36.72%]':'w-[158px]' ?>">Tổng giá trị giao dịch/
												ngày/ tài khoản</th>
											<th colspan="2" class="!py-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[55.93%]':'w-[320px]' ?>">Mức phí (VNĐ)</th>
										</tr>
										<tr>
											<th class="w-1/2 !py-2">Chuyên gia tư vấn</th>
											<th class="w-1/2 !py-2">TVĐT Online</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="centered" style="background-color:#EBF4FA;">1
											</td>
											<td style="background-color:#EBF4FA;">≤ 2 tỷ VNĐ</td>
											<td style="background-color:#EBF4FA;">0.18%</td>
											<td style="background-color:#EBF4FA;">0.15%</td>
										</tr>
										<tr>
											<td class="centered" style="background-color:#DFF2FF;">2
											</td>
											<td style="background-color:#DFF2FF;"> 2 tỷ VNĐ và ≤ 5 tỷ
												VNĐ</td>
											<td style="background-color:#DFF2FF;">0.15%</td>
											<td style="background-color:#DFF2FF;">0.12%</td>
										</tr>
										<tr>
											<td class="centered" style="background-color:#EBF4FA;">3
											</td>
											<td style="background-color:#EBF4FA;">> 5 tỷ VNĐ</td>
											<td style="background-color:#EBF4FA;">0.12%</td>
											<td style="background-color:#EBF4FA;">0.10%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="table__item mb-10">
							<ul class="pl-5 list-disc mb-6 font-bold lg:text-xl">
								<li>
									Giao dịch Trái phiếu chính phủ, TPDN niêm yết
								</li>
							</ul>
							<table>
								<thead>
									<tr>
										<th rowspan="2" class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[7.313%] px-0':'w-[50px] whitespace-nowrap' ?>">STT
										</th>
										<th rowspan="2" class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[36.72%]':'w-1/2' ?>">Tổng giá trị giao dịch/ ngày/ tài khoản	</th>
										<th rowspan="2" class="!py-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[55.93%]':'w-1/2' ?>">Mức phí (VNĐ)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="centered" style="background-color:#EBF4FA;">1
										</td>
										<td style="background-color:#EBF4FA;">Dưới 2 tỷ VNĐ</td>
										<td style="background-color:#EBF4FA;">0.10%</td>
									</tr>
									<tr>
										<td class="centered" style="background-color:#DFF2FF;">2
										</td>
										<td style="background-color:#DFF2FF;">Từ 2 tỷ VNĐ đến 10 tỷ
											VNĐ</td>
										<td style="background-color:#DFF2FF;">0.05%</td>

									</tr>
									<tr>
										<td class="centered" style="background-color:#EBF4FA;">3
										</td>
										<td style="background-color:#EBF4FA;">Trên 5 tỷ VNĐ</td>
										<td style="background-color:#EBF4FA;">0.02%</td>
									</tr>
								</tbody>
							</table>
							<div
								class="mt-4 font-Helvetica prose-ul:pl-5 prose-ul:list-disc prose-ul:!text-base">
								Ghi chú: Khách hàng có trách nhiệm nộp thuế theo quy định của pháp
								luật
							</div>
						</div>

						<div class="table__item mb-10">
							<ul class="pl-5 list-disc mb-6 font-bold lg:text-xl">
								<li>
									Giao dịch Trái phiếu doanh nghiệp riêng lẻ
								</li>
							</ul>
							<table>
								<thead>
									<tr>
										<th rowspan="2" class="w-[7.313%] px-0">STT
										</th>
										<th rowspan="2" class="w-[36.72%]">Thông tin</th>
										<th rowspan="2" class="w-[55.93%] !py-2">Mức phí (VNĐ)</th>
									</tr>

								</thead>
								<tbody>
									<tr>
										<td class="centered" style="background-color:#EBF4FA;">1
										</td>
										<td style="background-color:#EBF4FA;">Đối tượng thu phí</td>
										<td style="background-color:#EBF4FA;">0.10%</td>

									</tr>
									<tr>
										<td class="centered" style="background-color:#DFF2FF;">2
										</td>
										<td style="background-color:#DFF2FF;">Phí giao dịch áp dụng
										</td>
										<td class="text-left" style="background-color:#DFF2FF;">
											<ul>
												<li>
													Dưới 50 tỷ đồng: 0.10%/ GTGD
												</li>
												<li>Từ 50 tỷ đồng đến dưới 200 tỷ đồng: 0.08%/ GTGD
												</li>
												<li>Từ 200 tỷ đồng đến dưới 300 tỷ đồng: 0.05%/ GTGD
												</li>
												<li>Từ 300 tỷ đồng trở lên: 0.03%/ GTGD</li>
											</ul>
											<p class="text-xs font-normal pl-5">
												(Đã bao gồm phí trả Sở giao dịch)
											</p>
										</td>

									</tr>
									<tr>
										<td class="centered" style="background-color:#EBF4FA;">3
										</td>
										<td style="background-color:#EBF4FA;">Phí dịch vụ xác định
											<br>
											nhà đầu tư chuyên nghiệp</td>
										<td class="text-left" style="background-color:#EBF4FA;">Miễn
											phí</td>
									</tr>
								</tbody>
							</table>
							<div
								class="mt-4 font-Helvetica prose-ul:pl-5 prose-ul:list-disc prose-ul:!text-base">
								Ghi chú:
								<ul>
									<li>Khách hàng có trách nhiệm nộp thuế theo quy định của pháp
										luật</li>
									<li>
										Giá trị chuyển quyền sở hữu đối với dịch vụ chuyển quyền sở
										hữu chứng khoán ngoài hệ thống giao dịch của Sở giao dịch
										chứng khoán theo quy định của VSD/ VSDC
									</li>
								</ul>
							</div>
						</div>
						<div class="table__item mb-10">

							<table>
								<thead>
									<tr>
										<th rowspan="2" class="w-[7.313%] px-0">STT
										</th>
										<th rowspan="2" class="w-[36.72%]">Loại dịch vụ</th>
										<th rowspan="2" class="w-[55.93%] !py-2">Mức phí (VNĐ)</th>
									</tr>

								</thead>
								<tbody>
									<tr>
										<td rowspan="3" style="background-color:#EBF4FA;">1</td>
										<td style="background-color:#EBF4FA;">Lưu ký chứng khoán
										</td>
										<td rowspan="3" style="background-color:#EBF4FA;">Thu theo
											giá dịch vụ của VSD/VSDC</td>
									</tr>
									<tr>
										<td style="background-color:#EBF4FA;">Cổ phiếu, chứng chỉ
											quỹ, chứng quyền có bảo đảm</td>
									</tr>
									<tr>
										<td style="background-color:#EBF4FA;">Trái phiếu niêm yết
										</td>
									</tr>
									<tr>
										<td rowspan="2" style="background-color:#DFF2FF ;">2</td>
										<td style="background-color:#DFF2FF ;">Giá dịch vụ xác nhận
											phong tỏa chứng khoán một lần theo yêu cầu của khách
											hàng</td>
										<td style="background-color:#DFF2FF ;">Phí dịch vụ = Phí BSC
											thu + Mức giá dịch vụ của VSD/ VSDC (nếu có) Chỉ tiết
											mức phí BSC thu:
											0,2% giá trị theo mệnh giá, Tối thiểu 300.000 VND/yêu
											cầu, tối đa 1.000.000 VND/yêu cầu</td>
									</tr>
									<tr>
										<td style="background-color:#DFF2FF ;">Giá dịch vụ xác nhận
											phong tỏa và theo dõi chứng khoán (Ký thỏa thuận/Hợp
											đồng quản lý tài sản cầm cố 3 bên)</td>
										<td style="background-color:#DFF2FF;">Phí dịch vụ = Phí BSC
											thu + Mức giá dịch vụ của VSD/ VSDC (nếu có) Chỉ tiết
											mức phí BSC thu: -0,2% giá trị theo mệnh giá, tối thiểu
											500.000 VND/hợp đồng, tối đa 10.000.000 VND/hợp đồng
										</td>
									</tr>
									<tr>
										<td rowspan="3" style="background-color:#EBF4FA;">3</td>
										<td style="background-color:#EBF4FA;">Giá dịch vụ chuyển
											khoản chứng khoán</td>
										<td style="background-color:#DFF2FF;"></td>
									</tr>
									<tr>
										<td style="background-color:#EBF4FA;">Giá dịch vụ chuyển
											khoản tất
											toán tài khoản</td>
										<td style="background-color:#DFF2FF ;">Phí dịch vụ = Phí BSC
											thu + Mức giá dịch vụ của VSD/ VSDC (nếu có)
											Chi tiết mức phí BSC thu:
											- 100.000 VND/giao dịch
										</td>
									</tr>
									<tr>
										<td style="background-color:#EBF4FA;">Giá dịch vụ chuyển
											khoản chứng khoán</td>
										<td style="background-color:#DFF2FF ;">Mức giá dịch vụ của
											VSD/ VSDC (nếu có)</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="mt-10 text-right">
						<a href="" class="inline-block px-6 py-3 btn-base-yellow" target="_blank">
							<span class="inline-flex items-center gap-2 relative z-10">
								<?php _e( 'Tải xuống tài liệu', 'bsc' ) ?>
								<?php echo svgpath( 'download', '', '', 'fill-black' ) ?>
							</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="py-20 bg-gradient-blue-250">
		<div class="container">
			<div class="lg:flex">
				<div class="2xl:pr-[50px] pr-10  lg:w-[575px] lg:max-w-[43%] shrink-0">
					<h2 class="heading-title 2xl:mb-[72px] mb-10">
						BẠN CẦN HỖ TRỢ?
					</h2>
					<div class="relative w-full pt-[66.666%] overflow-hidden rounded-[10px]">
						<img loading="lazy"
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-contact.png"
							alt=""
							class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
					</div>
				</div>
				<div class="flex-1 2xl:pl-[50px] pl-10 lg:border-l border-[#D2D2D2]">
					<h3 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl">
						<?php _e( 'Đăng ký thông tin hỗ trợ', 'gnws' ) ?>
					</h3>
					<div
						class="form_support relative font-Helvetica bg-white lg:px-8 px-5 lg:py-6 py-4 rounded-2xl">
						<?php echo do_shortcode( '[contact-form-7 id="d5b6a0a" title="Đăng ký thông tin hỗ trợ"]' ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
