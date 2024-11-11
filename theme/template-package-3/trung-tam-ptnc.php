<?php

/**
Template Name:[Package 3] Trung tâm phân tích nghiên cứu
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="mt-14 xl:mb-pb-[110px] mb-20">
		<div class="container">
			<div class="lg:flex gap-12">
				<div class="lg:w-[745px] lg:max-w-[56%]">
					<h2 class="heading-title mb-8">
						Danh mục khuyến nghị
					</h2>
					<ul class="customtab-nav flex items-center gap-4 mb-6">
						<li>
							<button data-tabs="#tab-1"
								class="active inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
								BSC10
							</button>
						</li>
						<li>
							<button data-tabs="#tab-2"
								class="inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
								BSC30
							</button>
						</li>
						<li>
							<button data-tabs="#tab-3"
								class="inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
								BSC50
							</button>
						</li>

					</ul>
					<?php
					for ( $i = 1; $i < 4; $i++ )
					{
						?>
						<div class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>"
							id="tab-<?php echo $i ?>">
							<div class="relative pt-[76.2416%] w-full rounded-lg overflow-hidden">
								<!-- Nếu đã đăng nhập thì bỏ class blur-sm -->
								<div class="absolute w-full h-full inset-0 blur-sm">
									<ul
										class="flex items-center font-bold text-center text-white bg-primary-300 prose-li:p-3 py-[7px] gap-5 px-[30px] justify-between">
										<li class="w-[8%]">Mã</li>
										<li class="w-[16%]">Khuyến nghị</li>
										<li class="w-[16%]">Giá</li>
										<li class="w-[16%]">Mục tiêu</li>
										<li class="w-[16%]">Upside</li>
									</ul>
									<div class="overflow-y-auto scroll-bar-custom max-h-[90%]">
										<?php
										for ( $j = 0; $j < 12; $j++ )
										{
											?>
											<ul
												class="flex gap-5 text-center justify-between px-[30px] py-4 items-center [&:nth-child(odd)]:bg-white [&:nth-child(even)]:bg-primary-50">
												<li class="w-[8%] font-medium">CTG</li>
												<li class="w-[16%] font-medium"><span
														class="inline-block bg-[#D6F6DE] rounded-[45px] px-4 py-0.5 text-[#30D158] min-w-[78px]">Mua</span>
												</li>
												<li class="w-[16%] font-bold text-[#1CCD83]">35.05</li>
												<li class="w-[16%] font-medium">43.65</li>
												<li class="w-[16%] font-bold text-[#1CCD83]">+24.45%</li>
											</ul>
											<?php
										}
										?>

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
						<?php
					}
					?>
				</div>
				<div class="flex-1">
					<h2 class="heading-title mb-8">
						Thông tin phân tích mới nhất
					</h2>
					<div class="mb-6">
						<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox
							class="rounded-[10px] overflow-hidden pt-[55.576%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-video2.png"
								alt="" class="absolute w-full h-full inset-0 object-cover">
							<div
								class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
								<?php echo svg( 'play', '62', '62' ) ?>
							</div>
						</a>
					</div>
					<div class="flex flex-col">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Frame 1000010108.png"
							alt="">
						<div class="text-right mt-4">
							<a href=""
								class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
								<?php echo svg( 'arrow-btn', '20', '20' ) ?>
								Xem chi tiết
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:my-[100px] my-20">
		<div class="container">
			<div
				class="rounded-[10px] bg-gradient-blue-to-right-100 px-6 py-12 lg:flex items-center gap-4">
				<div class="lg:w-[345px] max-w-[33.333%]">
					<h2 class="uppercase lg:text-[28px] text-2xl font-bold !leading-[1.57]">
						các mã được khácH hàng tìm kiếm nhiều nhất
					</h2>
				</div>
				<div class="flex-1 flex justify-end items-center flex-wrap gap-6">
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							VNM
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
						<span>
							BSI
						</span>
						<span>
							+11%
						</span>
					</a>
					<a href=""
						class="inline-flex rounded-lg bg-[#FE5353] text-white font-bold items-center gap-3 py-3 px-[12px]">
						<span>
							VNM
						</span>
						<span>
							-0.1%
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="xl:mt-[125px] xl:mb-[100px] my-20">
		<div class="container">
			<div class="flex justify-between items-center mb-10">
				<h2 class="heading-title normal-case">Báo cáo phân tích mới nhất</h2>
				<a href="" class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
					<?php echo svg( 'arrow-btn','16','16' ) ?>
					<?php _e( 'Xem tất cả', 'bsc' ) ?>
				</a>
			</div>
            <div class="lg:flex lg:gap-[70px]"></div>
		</div>
	</section>
</main>
<?php
get_footer();