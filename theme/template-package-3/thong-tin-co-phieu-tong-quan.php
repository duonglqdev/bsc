<?php

/**
Template Name:  [Package 3] Thông tin cổ phiếu tổng quát
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
					<div
						class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 space-y-6 h-full">
						<div class="flex gap-6 items-center">
							<div
								class="lg:w-[90px] w-16 lg:h-[90px] h-16 bg-white rounded-full flex items-center justify-center p-5">
								<?php echo svgClass( 'icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9' ) ?>
							</div>
							<div class="flex flex-col">
								<h4
									class="font-bold lg:text-[32px] text-2xl uppercase leading-normal">
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
										Cập nhật lúc 14:45 UTC_7
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
							<p class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full text-[#F90] bg-gradient-yellow-50">
								<?php echo svg( 'gold', '24', '24' ) ?>
                                Hạng A
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();