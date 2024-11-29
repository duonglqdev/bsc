<?php

/**
Template Name: [Package 3] Quan điểm BSC
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
		<div class="container">
			<ul class="customtab-nav flex justify-between gap-10">
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo vĩ mô
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo Ngành - Doanh nghiệp
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo chuyên đề
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Danh mục khuyến nghị
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Quan điểm BSC
					</a>
				</li>

			</ul>
		</div>
	</section>
	<section class="mt-[54px] mb-[100px]">
		<div class="container">
			<h3 class="font-bold mb-6 text-2xl">Dự báo vĩ mô</h3>
			<div class="relative">
				<div class="lg:flex lg:gap-8 blur-sm">
					<div class="lg:w-[255px] lg:max-w-[27%]">
						<div class="lg:px-10 px-5 lg:py-8 py-5 bg-white shadow-base rounded-2xl">
							<h4
								class="font-bold text-primary-300 text-2xl pb-6 mb-6 border-b border-[#C9CCD2]">
								Năm 2024</h4>
							<div class="space-y-6">
								<div class="flex items-end justify-between pb-2">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs">VN-index</p>
										<h4 class="font-bold text-2xl">
											1500
										</h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#30D158] bg-[#D6F6DE] rounded-[45px] font-semibold text-xs">
										Tích cực
									</div>
								</div>

								<div class="flex items-end justify-between pb-2">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs">Ngành</p>
										<h4 class="font-bold text-2xl">
											1298
										</h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#FFB81C] bg-[#FFF1D2] rounded-[45px] font-semibold text-xs">
										Cơ sở
									</div>
								</div>
								<div class="flex items-end justify-between pb-2">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs">Ngành</p>
										<h4 class="font-bold text-2xl">
											1200
										</h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#FF0017] bg-[#FFD9DC] rounded-[45px] font-semibold text-xs">
										Tiêu cực
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="flex-1 bg-[#F5FCFF] rounded-lg">
						<div id="chart-forecast"></div>
					</div>
				</div>
				<div
					class="absolute w-full h-full inset-0 z-10 flex flex-col justify-center items-center">
					<a href="#"
						class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-8 px-4 2xl:py-4 py-2  relative transition-all duration-500 font-bold rounded-xl">
						Đăng nhập
					</a>
					<p class="italic mt-4 font-normal">
						Để xem chi tiết danh mục
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h3 class="font-bold mb-6 text-2xl">Dự báo vĩ mô</h3>
			<h4 class="text-center font-bold text-primary-300 mb-4">Dự báo kinh tế
				vĩ mô Việt Nam 2024-2025</h4>
			<div class="border border-[#C9CCD2] rounded-lg flex font-medium text-xs overflow-hidden">
				<div class="w-1/3 text-primary-300 border-r border-[#C9CCD2]">
					<div
						class="flex justify-end items-center pt-[13px] pb-[9px] min-h-[65px] border-b border-[#C9CCD2] mb-1.5">
						<div
							class="w-[44%] grid grid-cols-2 gap-2 font-semibold text-center items-center">
							<p>TB 8 năm <br>
								(15-22)</p>
							<p>
								2023
							</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px]">
						<div class="w-[56%] px-2 py-1">
							GDP (YoY%)
						</div>
						<div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
							<p>6.1</p>
							<p>5.25</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px]">
						<div class="w-[56%] px-2 py-1">
							CPI trung bình (YoY%)*
						</div>
						<div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
							<p>2.7</p>
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px]">
						<div class="w-[56%] px-2 py-1">
							Xuất khẩu (YoY%)*
						</div>
						<div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
							<p>2.7</p>
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px]">
						<div class="w-[56%] px-2 py-1">
							Nhập khẩu (YoY%)*
						</div>
						<div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
							<p>2.7</p>
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px]">
						<div class="w-[56%] px-2 py-1">
							LSĐH (YoY%)*
						</div>
						<div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
							<p>2.7</p>
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-[30px] font-bold">
						<div class="w-[56%] px-2 py-1">
							USD/VND LNH trung bình
						</div>
						<div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
							<p>22,842</p>
							<p>23,839</p>
						</div>
					</div>
				</div>
				<div
					class="w-[27%] grid grid-cols-2 text-center bg-[#F5FCFF] border-r border-[#C9CCD2]">
					<div class="text-[#FF0017]">
						<div
							class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
							<p class="font-semibold mb-1">
								BSC kịch bản 1
							</p>
							<div class="grid grid-cols-2 font-semibold">
								<p>2024</p>
								<p>2025</p>
							</div>
						</div>
						<?php
						for ( $i = 0; $i < 5; $i++ )
						{
							?>
							<div
								class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
								<p>6.1</p>
								<p>5.25</p>
							</div>
							<?php
						}
						?>
						<div
							class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
							<p>22,842</p>
							<p>23,839</p>
						</div>
					</div>
					<div class="text-[#30D158]">
						<div
							class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
							<p class="font-semibold mb-1">
								BSC kịch bản 2
							</p>
							<div class="grid grid-cols-2 font-semibold">
								<p>2024</p>
								<p>2025</p>
							</div>
						</div>
						<?php
						for ( $i = 0; $i < 5; $i++ )
						{
							?>
							<div
								class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
								<p>6.1</p>
								<p>5.25</p>
							</div>
							<?php
						}
						?>
						<div
							class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
							<p>22,842</p>
							<p>23,839</p>
						</div>
					</div>
				</div>
				<div
					class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF] border-r border-[#C9CCD2]">
					<div class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
						<p class="font-semibold mb-1">
							Consensus 2024
						</p>
						<div class="grid grid-cols-3 font-semibold">
							<p>Min</p>
							<p>TB</p>
							<p>Max</p>
						</div>
					</div>
					<?php
					for ( $i = 0; $i < 3; $i++ )
					{
						?>
						<div
							class="grid grid-cols-3 gap-2 text-center items-center py-0.5 min-h-[30px]">
							<p>6.1</p>
							<p>5.25</p>
							<p>5.25</p>
						</div>
						<?php
					}
					?>
					<div class="m-auto">
						<p>6.1</p>
					</div>
				</div>
				<div class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF]">
					<div class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
						<p class="font-semibold mb-1">
							Consensus 2025
						</p>
						<div class="grid grid-cols-3 font-semibold">
							<p>Min</p>
							<p>TB</p>
							<p>Max</p>
						</div>
					</div>
					<?php
					for ( $i = 0; $i < 3; $i++ )
					{
						?>
						<div
							class="grid grid-cols-3 gap-2 text-center items-center py-0.5 min-h-[30px]">
							<p>6.1</p>
							<p>5.25</p>
							<p>5.25</p>
						</div>
						<?php
					}
					?>
					<div class="m-auto">
						<p>6.1</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h3 class="font-bold mb-6 text-2xl">Dự báo vĩ mô</h3>
			<div class="relative">
				<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
				<div
					class="rounded-[10px] border border-[#EAEEF4] text-xs font-medium bg-white">
					<div class="flex rounded-md overflow-hidden">
						<div
							class="w-[160px] shrink-0 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-ul:pl-4 prose-ul:pr-3 shadow-[2px_3px_7px_0px_#ccc]">
							<div
								class="text-white bg-primary-300 font-semibold flex justify-center flex-col min-h-[60px] leading-[1.5] py-2 pl-4">
								Ngành
							</div>
							<ul>
								<?php
								for ( $i = 0; $i < 6; $i++ )
								{
									?>
									<li>
										Ngân hàng
									</li>
									<?php
								}
								?>
							</ul>
							<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
							<ul>
								<?php
								for ( $i = 0; $i < 6; $i++ )
								{
									?>
									<li>
										Ngân hàng
									</li>
									<?php
								}
								?>
							</ul>
							<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
							<ul>
								<?php
								for ( $i = 0; $i < 6; $i++ )
								{
									?>
									<li>
										Ngân hàng
									</li>
									<?php
								}
								?>
							</ul>
						</div>
						<div
							class="flex-1 scroll-bar-custom scroll-container [&:not(.active)]:cursor-default cursor-grab scroll-bar-x overflow-x-auto flex text-center prose-a:font-bold prose-a:text-primary-300 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-li:justify-center prose-p:font-normal">
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									Mã CK
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											<a href="">
												BID
											</a>
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											<a href="">
												BID
											</a>
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											<a href="">
												BID
											</a>
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									DTT 2024
									<p>
										(tỷ VND)
									</p>
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											81,424
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											81,424
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											81,424
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									% YoY
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											45%
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											45%
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											45%
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									EPS <br>
									2024
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											24,796
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											24,796
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											24,796
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									P/E FWD <br>
									2024
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											15%
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											15%
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											15%
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									P/B FWD <br>
									2024
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											4.350
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											4.350
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											4.350
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									ROA <br>
									2024
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											10.75
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											10.75
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											10.75
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									ROE <br>
									2024
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											1.57
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											1.57
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											1.57
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									Giá ngày <br>
									15/08/2024
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											22,760
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											22,760
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											22,760
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									Giá mục tiêu <br>
									Giá mục tiêu
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											27,970
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											27,970
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											27,970
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
									Upside <br>
									(%)
								</div>
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											28%
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											28%
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul>
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											28%
										</li>
										<?php
									}
									?>
								</ul>
							</div>
						</div>
					</div>

				</div>
				<!-- Nếu đã đăng nhập thì bỏ khối nút đăng nhập -->
				<!-- <div
					class="absolute w-full h-full inset-0 z-10 flex flex-col justify-center items-center">
					<a href="#"
						class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-8 px-4 2xl:py-4 py-2  relative transition-all duration-500 font-bold rounded-xl">
						Đăng nhập
					</a>
					<p class="italic mt-4 font-normal">
						Để xem chi tiết danh mục
					</p>
				</div> -->
			</div>


		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<h3 class="font-bold mb-6 text-2xl">Dự báo kết quả kinh doanh</h3>
			<div class="relative">
				<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
				<div
					class="rounded-[10px] overflow-hidden mt-6 text-center border border-[#EAEEF4] blur-sm">
					<div
						class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.5]">
						<div class="w-1/3 py-2 px-3">
							Ngành
						</div>
						<div class="w-1/3 py-2 px-3">
							Quan điểm Q1/224
						</div>
						<div class="w-1/3 py-2 px-3">
							Quan điểm Q2/224
						</div>

					</div>
					<div
						class="scroll-bar-custom overflow-y-auto max-h-[340px] prose-a:text-primary-300 prose-a:font-bold font-medium">
						<?php
						for ( $i = 0; $i < 9; $i++ )
						{
							?>
							<div
								class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
								<div
									class="w-1/3 min-h-[34px] flex items-center leading-[1.5] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
									CNTT - Viễn thông
								</div>
								<div
									class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
									Tích cực
								</div>
								<div
									class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-[#30D158]">
									Tích cực
								</div>
							</div>

							<?php
						}
						?>
						<div
							class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
							<div
								class="w-1/3 min-h-[34px] flex items-center leading-[1.5] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
								Vận tải & Cảng biển
							</div>
							<div
								class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
								Tích cực
							</div>
							<div
								class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-black">
								Trung lập
							</div>
						</div>
					</div>
				</div>
				<!-- Nếu đã đăng nhập thì bỏ khối nút đăng nhập -->
				<div
					class="absolute w-full h-full inset-0 z-10 flex flex-col justify-center items-center">
					<a href="#"
						class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-8 px-4 2xl:py-4 py-2  relative transition-all duration-500 font-bold rounded-xl">
						Đăng nhập
					</a>
					<p class="italic mt-4 font-normal">
						Để xem chi tiết danh mục
					</p>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();