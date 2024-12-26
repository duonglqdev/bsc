<?php

/**
Template Name: [Package 3] Quan điểm BSC
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<!-- <section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
		<div class="container">
			<ul class="flex justify-between gap-10">
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
	</section> -->
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-[54px] mb-[100px]' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<h3
				class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl mb-6' : 'text-[22px] mb-4' ?>">
				Dự báo vĩ mô</h3>
			<div class="relative">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-8' : 'space-y-4' ?>">
					<div
						class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[255px] max-w-[27%]' : 'w-full' ?>">
						<div
							class=" bg-white shadow-base rounded-2xl <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-10 py-8' : 'p-4' ?>">
							<h4
								class="font-bold text-primary-300 border-b border-[#C9CCD2] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl pb-6 mb-6' : 'text-lg pb-[12px] mb-[12px]' ?>">
								Năm 2024</h4>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-6' : 'grid grid-cols-3 gap-4' ?>">
								<div
									class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs">VN-index</p>
										<h4
											class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
											1500
										</h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#30D158] bg-[#D6F6DE] rounded-[45px] font-semibold text-xs">
										Tích cực
									</div>
								</div>

								<div
									class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs">Ngành</p>
										<h4
											class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
											1298
										</h4>
									</div>
									<div
										class="min-w-[84px] text-center py-0.5 px-4 text-[#FFB81C] bg-[#FFF1D2] rounded-[45px] font-semibold text-xs">
										Cơ sở
									</div>
								</div>
								<div
									class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'items-end justify-between pb-2' : 'flex-col gap-4 text-center' ?>">
									<div class="flex flex-col font-Helvetica">
										<p class="text-paragraph text-xs">Ngành</p>
										<h4
											class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
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
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<h3
				class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6 text-2xl' : 'text-[22px] mb-4' ?>">
				Dự báo vĩ mô</h3>
			<h4
				class="font-bold text-primary-300 mb-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-center' : '' ?>">
				Dự báo kinh tế
				vĩ mô Việt Nam 2024-2025</h4>
			<div
				class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-lg flex overflow-hidden' : 'block_slider block_slider-show-1 fli-dots-blue dot-30 mb-10 text-xs' ?>">
				<div
					class="text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'border-r-[4px] border-white w-1/3' : ' w-full block_slider-item' ?>">
					<div
						class="flex justify-end items-center pr-5 bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'border-b-[4px] border-white pt-[13px] pb-[9px] min-h-[71px]' : 'py-2 min-h-[58px]' ?>">
						<p>
							2023
						</p>
					</div>
					<div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class="w-[70%] px-2 py-1">
							GDP (YoY%)
						</div>
						<div class="flex-1 text-right pr-5">
							<p>5.25</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class="w-[70%] px-2 py-1">
							CPI trung bình (YoY%)
						</div>
						<div class="flex-1 text-right pr-5">
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class="w-[70%] px-2 py-1">
							Xuất khẩu (YoY%)
						</div>
						<div class="flex-1 text-right pr-5">
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class="w-[70%] px-2 py-1">
							Nhập khẩu (YoY%)
						</div>
						<div class="flex-1 text-right pr-5">
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class="w-[70%] px-2 py-1">
							LSĐH (YoY%)
						</div>
						<div class="flex-1 text-right pr-5">
							<p>3.26</p>
						</div>
					</div>
					<div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
						<div class="w-[70%] px-2 py-1">
							USD/VND LNH trung bình
						</div>
						<div class="flex-1 text-right pr-5">
							<p>23,839</p>
						</div>
					</div>
				</div>
				<div
					class="grid grid-cols-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'border-r-[4px] border-white w-[27%]' : 'w-full block_slider-item' ?>">
					<div class="text-[#FF0017]">
						<div
							class="min-h-[58px] bg-[#EBF4FA] text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-3 pb-[6px] border-b-[4px] border-white' : 'py-1.5 px-5' ?>">
							<p class=" mb-1">
								BSC kịch bản 1
							</p>
							<div
								class="grid grid-cols-2 text-right  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5 gap-5' : 'mr-6 gap-4' ?>">
								<p>2024</p>
								<p>2025</p>
							</div>
						</div>
						<?php
						for ( $i = 0; $i < 5; $i++ )
						{
							?>
							<div
								class="grid grid-cols-2 text-right gap-5 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5' : 'pr-11' ?> items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
								<p>6.1</p>
								<p>5.25</p>
							</div>
							<?php
						}
						?>
						<div
							class="grid grid-cols-2 text-right gap-5 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5' : 'pr-11' ?> items-center min-h-10  [&:nth-child(odd)]:bg-[#EBF4FA]">
							<p>22,842</p>
							<p>23,839</p>
						</div>
					</div>
					<div class="text-[#30D158]">
						<div
							class="min-h-[58px] bg-[#EBF4FA] text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-3 pb-[6px] border-b-[4px] border-white' : 'py-1.5 px-5' ?>">
							<p class=" mb-1">
								BSC kịch bản 2
							</p>
							<div
								class="grid grid-cols-2 text-right  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5 gap-5' : 'mr-6 gap-4' ?>">
								<p>2024</p>
								<p>2025</p>
							</div>
						</div>
						<?php
						for ( $i = 0; $i < 5; $i++ )
						{
							?>
							<div
								class="grid grid-cols-2 text-right gap-5 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5' : 'pr-11' ?> items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
								<p>6.1</p>
								<p>5.25</p>
							</div>
							<?php
						}
						?>
						<div
							class="grid grid-cols-2 text-right gap-5 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5' : 'pr-11' ?> items-center min-h-10  [&:nth-child(odd)]:bg-[#EBF4FA]">
							<p>22,842</p>
							<p>23,839</p>
						</div>
					</div>
				</div>
				<div
					class=" text-primary-300 text-center flex flex-col  bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'border-r-[4px] border-white w-1/5' : 'w-full block_slider-item h-full' ?>">
					<div
						class="min-h-[58px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' border-b-[4px] border-white pt-3 pb-[6px]' : 'py-1.5 px-5' ?>">
						<p class=" mb-1">
							Consensus 2024
						</p>
						<div
							class="grid grid-cols-3 text-right gap-5 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' pr-5' : 'mr-12' ?>">
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
							class="grid grid-cols-3 text-right gap-5 items-center min-h-10 [&:nth-child(even)]:bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5' : 'pl-5 pr-[68px]' ?>">
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
				<div
					class="text-primary-300 text-center flex flex-col bg-[#EBF4FA] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/5' : 'w-full block_slider-item h-full' ?>">
					<div
						class="min-h-[58px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' border-b-[4px] border-white pt-3 pb-[6px]' : 'py-1.5 px-5' ?>">
						<p class=" mb-1">
							Consensus 2025
						</p>
						<div
							class="grid grid-cols-3 text-right gap-5 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' pr-5' : 'mr-12' ?>">
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
							class="grid grid-cols-3 text-right gap-5 items-center min-h-10 [&:nth-child(even)]:bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pr-5' : 'pl-5 pr-[68px]' ?>">
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
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<h3
				class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6 text-2xl' : 'text-[22px] mb-4' ?>">
				Dự báo kết quả kinh doanh</h3>
			<div class="relative">
				<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
				<div
					class="rounded-[10px] border border-[#EAEEF4] text-xs font-medium overflow-hidden bg-white">
					<div class="flex">
						<div
							class="shrink-0 prose-li:flex prose-li:items-center prose-ul:pl-4 prose-ul:pr-3 shadow-[2px_3px_7px_0px_#ccc] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[120px] prose-li:min-h-10' : 'w-[140px] prose-li:min-h-[30px]' ?>">
							<div
								class="text-white bg-primary-300 font-semibold flex justify-center flex-col min-h-[60px] leading-[1.5] py-2 pl-4 relative shadow-[1px_1px_2px_#ccc]">
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
						<div
							class="flex-1 scroll-bar-custom scroll-container [&:not(.active)]:cursor-default cursor-grab scroll-bar-x overflow-x-auto flex text-center prose-a:font-bold prose-a:text-primary-300 prose-li:flex prose-li:items-center prose-li:justify-end  prose-p:font-normal <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'prose-li:min-h-10  prose-li:pr-10' : 'prose-li:min-h-[30px] prose-li:pr-4' ?>">
							<div class="min-w-[150px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
									Ngành
								</div>


								<ul
									class="prose-li:!justify-start prose-li:pl-3 prose-li:whitespace-nowrap">
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											Xây dựng và Vật liệu
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul class="prose-li:!justify-start prose-li:pl-3 whitespace-nowrap">
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											Dịch vụ tài chính
										</li>
										<?php
									}
									?>
								</ul>
								<hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
								<ul class="prose-li:!justify-start prose-li:pl-3 whitespace-nowrap">
									<?php
									for ( $i = 0; $i < 6; $i++ )
									{
										?>
										<li>
											Bất động sản
										</li>
										<?php
									}
									?>
								</ul>


							</div>
							<div class="min-w-[110px]">
								<div
									class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2 border-r-[0.1px] border-[#c3c3c3]">
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
									class="text-white bg-primary-300 font-semibold flex items-center justify-center gap-1 min-h-[60px] leading-[1.5] p-2">
									LNST <br> CĐTS
									<button data-tooltip-target="tooltip-animation1" class="ml-1"
										type="button">
										<?php echo svg( 'tooltip', '20', '20' ) ?>
									</button>
									<div id="tooltip-animation1" role="tooltip"
										class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px]">
										Lợi nhuận sau thuế của cổ đông thiểu số
										<div class="tooltip-arrow" data-popper-arrow></div>
									</div>
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
									class="text-white bg-primary-300 font-semibold flex items-center justify-center gap-1 min-h-[60px] leading-[1.5]">
									Giá gần nhất <br>
									15/08/2024
									<button data-tooltip-target="tooltip-animation2" class="ml-1"
										type="button">
										<?php echo svg( 'tooltip', '20', '20' ) ?>
									</button>
									<div id="tooltip-animation2" role="tooltip"
										class="absolute z-10 invisible inline-block p-2 text-xs font-normal text-black transition-opacity duration-300 bg-white rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 font-Helvetica max-w-[150px]">
										<?php _e( 'Giá đóng cửa tại ngày 26/12/2024
', 'bsc' ) ?>
										<div class="tooltip-arrow" data-popper-arrow></div>
									</div>
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
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<h3
				class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6 text-2xl' : 'mb-4 text-[22px]' ?>">
				Dự báo ngành</h3>
			<div class="relative rounded-[10px] overflow-hidden">
				<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
				<div
					class="text-center border border-[#EAEEF4] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'overflow-x-auto scroll-bar-custom scroll-bar-x text-xs' ?>">
					<div
						class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.5] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-max whitespace-nowrap' ?>">
						<div
							class="py-2 px-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'min-w-[163px]' ?>">
							Ngành
						</div>
						<div
							class="py-2 px-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'min-w-[163px]' ?>">
							Quan điểm Q1/224
						</div>
						<div
							class=" py-2 px-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'min-w-[163px]' ?>">
							Quan điểm Q2/224
						</div>

					</div>
					<div
						class="prose-a:text-primary-300 prose-a:font-bold font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'scroll-bar-custom overflow-y-auto max-h-[340px]' : 'w-max' ?>">
						<?php
						for ( $i = 0; $i < 9; $i++ )
						{
							?>
							<div
								class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'whitespace-nowrap min-w-[163px]' ?> min-h-[34px] flex items-center leading-[1.5] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
									CNTT - Viễn thông
								</div>
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'whitespace-nowrap min-w-[163px]' ?> min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
									Tích cực
								</div>
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'whitespace-nowrap min-w-[163px]' ?> min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-[#30D158]">
									Tích cực
								</div>
							</div>

							<?php
						}
						?>
						<div
							class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'whitespace-nowrap min-w-[163px]' ?> min-h-[34px] flex items-center leading-[1.5] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
								Vận tải & Cảng biển
							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'whitespace-nowrap min-w-[163px]' ?> min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
								Tích cực
							</div>
							<div
								class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-1/3' : 'whitespace-nowrap min-w-[163px]' ?> min-h-[34px] flex items-center justify-center leading-[1.5] py-1 px-3 text-black">
								Trung lập
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
</main>
<?php
get_footer();