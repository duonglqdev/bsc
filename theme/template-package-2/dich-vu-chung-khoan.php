<?php

/**
Template Name: [Package-2] Dịch vụ chứng khoán
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-gradient-blue-300">
		<div
			class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:py-[100px] py-20' : 'py-[50px]' ?>">
			<div class="container overflow-hidden">
				<h2
					class="heading-title text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
					BẮT ĐẦU HÀNH TRÌNH ĐẦU TƯ CÙNG BSC
				</h2>
				<div
					class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:translate-x-[120px] grid-cols-4' : 'grid-cols-2 bg-white p-5 rounded-xl relative after:absolute after:w-[90%] after:h-[1px] after:bg-[#C9CCD2] after:top-1/2 after:-translate-y-1/2 after:left-1/2 after:-translate-x-1/2 before:absolute before:h-[90%] before:w-[1px] before:bg-[#C9CCD2] before:top-1/2 before:-translate-y-1/2 before:left-1/2 before:-translate-x-1/2' ?>">
					<div
						class="col-span-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[187px]' : 'min-h-[165px] rounded-lg hover:bg-gradient-blue hover:text-white' ?> step-item transition-all duration-500 relative bg-no-repeat bg-full ">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-1' ) ?>
							</div>
							<div class="mt-[7px] text-center 2xl:text-xl text-lg font-bold">
								Mở <br>
								tài khoản
							</div>
						</div>
					</div>
					<div
						class="col-span-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[187px]' : 'min-h-[165px] rounded-lg hover:bg-gradient-blue hover:text-white' ?> step-item transition-all duration-500 relative bg-no-repeat bg-full ">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-2' ) ?>
							</div>
							<div class="mt-[7px] text-center 2xl:text-xl text-lg font-bold">
								Hướng Dẫn <br>
								Nộp - Rút Tiền
							</div>
						</div>
					</div>
					<div
						class="col-span-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[187px]' : 'min-h-[165px] rounded-lg hover:bg-gradient-blue hover:text-white' ?> step-item transition-all duration-500 relative bg-no-repeat bg-full ">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-3' ) ?>
							</div>
							<div class="mt-[7px] text-center 2xl:text-xl text-lg font-bold">
								Biểu Phí <br>
								Giao Dịch
							</div>
						</div>
					</div>
					<div
						class="col-span-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[187px]' : 'min-h-[165px] rounded-lg hover:bg-gradient-blue hover:text-white' ?> step-item transition-all duration-500 relative bg-no-repeat bg-full ">
						<div
							class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
							<div
								class="text-primary-300 group-hover:text-white transition-all duration-500">
								<?php echo svg( 'step-4' ) ?>
							</div>
							<div class="mt-[7px] text-center 2xl:text-xl text-lg font-bold">
								Kiến Thức <br>
								Đầu Tư
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-[#F0F9FF] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-16' : 'py-8' ?>"
			id="service-products">
			<div class="container">
				<h2
					class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
					SẢN PHẨM DỊCH VỤ
				</h2>
				<ul
					class="customtab-nav flex items-center relative border-b border-[#B8B8B8] overflow-x-auto whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:gap-[100px] gap-12' : 'gap-8' ?>">
					<li class="shrink-0">
						<button data-tabs="#tab-1"
							class="active inline-flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pb-6 text-xl' : 'pb-4' ?> uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[4px] [&:not(.active)]:text-black text-[#000] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
							<?php echo svgClass( 'ic-1', '', '', 'shrink-0' ) ?>
							MÔI GIỚI CHỨNG KHOÁN
						</button>
					</li>
					<li class="shrink-0">
						<button data-tabs="#tab-2"
							class="inline-flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pb-6 text-xl' : 'pb-4' ?> uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[4px] [&:not(.active)]:text-black text-[#000] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
							<?php echo svgClass( 'ic-2', '', '', 'shrink-0' ) ?>
							TƯ VẤN ĐẦU TƯ
						</button>
					</li>
					<li class="shrink-0">
						<button data-tabs="#tab-3"
							class="inline-flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pb-6 text-xl' : 'pb-4' ?> uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[4px] [&:not(.active)]:text-black text-[#000] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
							<?php echo svgClass( 'ic-3', '', '', 'shrink-0' ) ?>
							DỊCH VỤ TÀI CHÍNH
						</button>
					</li>
				</ul>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-10' : 'mt-6' ?>">
					<?php
					for ( $i = 1; $i < 4; $i++ )
					{
						?>
						<div id="tab-<?php echo $i ?>"
							class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-10' : 'space-y-6' ?>">
							<div
								class="bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-16 gap-8 lg:flex-row flex-col p-8 items-center rounded-3xl' : 'p-4 rounded-2xl' ?>">
								<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
								{ ?>
									<div class="lg:w-[563px] lg:max-w-[50%] w-full">
										<div
											class="relative w-full pt-[62.166%] rounded-2xl overflow-hidden">
											<img loading="lazy"
												src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
												alt=""
												class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
										</div>
									</div>
								<?php } ?>
								<div class="lg:flex-1 lg:w-auto w-full">
									<h3
										class="uppercase font-bold text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:text-2xl text-lg mb-6' : 'text-xl mb-4' ?>">
										Tư vấn đầu tư cùng chuyên gia
									</h3>
									<ul
										class="list-icon space-y-4 font-Helvetica mb-6 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
										<li class="list-icon-item">
											Đa dạng về sản phẩm và tiện ích
										</li>
										<li class="list-icon-item">
											Hệ thống báo cáo phân tích đa dạng, chất lượng hàng đầu thị
											trường
										</li>
										<li class="list-icon-item">
											Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
										</li>
										<li class="list-icon-item">
											Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
										</li>
									</ul>
									<a href="#"
										class="btn-base-yellow text-xs font-bold inline-flex items-center gap-x-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[12px] pl-4 pr-6' : 'py-3 px-5' ?>">
										<?php echo svg( 'arrow-btn', '20' ) ?>
										Khám phá ngay
									</a>
									<?php if ( wp_is_mobile() && bsc_is_mobile() )
									{ ?>
										<div
											class="relative w-full pt-[115.5%] rounded-2xl overflow-hidden mt-6">
											<img loading="lazy"
												src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
												alt=""
												class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
										</div>
									<?php } ?>
								</div>
							</div>
							<div
								class="bg-white p-8 rounded-3xl lg:flex lg:flex-row-reverse lg:gap-16 gap-10 items-center">
								<div class="w-[563px] max-w-[50%]">
									<div
										class="relative w-full pt-[62.166%] rounded-2xl overflow-hidden">
										<img loading="lazy"
											src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
											alt=""
											class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
									</div>
								</div>
								<div class="flex-1">
									<h3
										class="uppercase font-bold xl:text-2xl text-lg mb-6 text-primary-300">
										TƯ VẤN ĐẦU TƯ ONLINE
									</h3>
									<p class="font-bold mb-4">
										Nhà đầu tư có thể tận dụng các công cụ hỗ trợ đầu tư trực tuyến
										tại BSC với nhiều đặc quyền hấp dẫn:
									</p>
									<ul class="list-icon space-y-4 font-Helvetica mb-6">
										<li class="list-icon-item">
											Đa dạng về sản phẩm và tiện ích
										</li>
										<li class="list-icon-item">
											Hệ thống báo cáo phân tích đa dạng, chất lượng hàng đầu thị
											trường
										</li>
										<li class="list-icon-item">
											Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
										</li>
										<li class="list-icon-item">
											Chính sách ưu đãi cùng mức phí cạnh tranh và hấp dẫn
										</li>
									</ul>
									<a href="#"
										class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold inline-flex items-center gap-x-3">

										<?php echo svg( 'arrow-btn', '20' ) ?>
										Khám phá ngay
									</a>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>">
		<div class="container">
			<h2
				class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-center mb-10' : 'mb-[26px]' ?>">
				NỀN TẢNG GIAO DỊCH HIỆN ĐẠI
			</h2>
			<div class="tab-content block" id="tab-a1">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:grid lg:grid-cols-2 lg:gap-[84px] items-end lg:space-y-0 space-y-5' : '' ?>">
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
					{ ?>
						<div class="col-span-1">
							<div class="relative w-full pt-[76%]">
								<img loading="lazy"
									src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Bitmap.png"
									alt="" class="absolute w-full h-full inset-0 object-contain m-auto">
							</div>
						</div>
					<?php } ?>
					<div class="col-span-1">
						<h3
							class="flex items-center font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' 2xl:text-2xl text-xl 2xl:mb-8 mb-5 gap-4' : 'mb-4 gap-2' ?>">
							<?php echo svgClass( 'tt-1', '', '', '2xl:w-10 lg:w-8 w-[30px]' ) ?>
							BSC Web Trading
						</h3>
						<p
							class="font-bold text-justify <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg mb-6' : 'mb-4' ?>">
							Đón đầu xu hướng cá nhân hóa trải nghiệm đầu tư cùng nền tảng giao
							dịch BSC Webtrading:
						</p>
						<ul class="list-icon space-y-4 font-Helvetica mb-8 2xl:text-lg font-bold">
							<li class="list-icon-item">
								Một nền tảng - Mọi giao dịch
							</li>
							<li class="list-icon-item">
								Giao dịch "1 chạm" - Đặt lệnh tức thì
							</li>
							<li class="list-icon-item">
								Đặt lệnh chuyên sâu với ProTrading
							</li>
							<li class="list-icon-item">
								Nắm bắt cơ hội đầu tư nhanh chóng
							</li>
							<li class="list-icon-item">
								Cá nhân hóa trải nghiệm đầu tư
							</li>
						</ul>
						<a href="#"
							class="btn-base-yellow text-xs font-bold  items-center gap-x-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[12px] pl-4 pr-6 inline-flex' : 'flex justify-center' ?>">
							<?php echo svg( 'arrow-btn', '20' ) ?>
							Khám phá ngay</span>
						</a>
						<?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div class="relative w-full pt-[76%] mt-[54px]">
								<img loading="lazy"
									src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Bitmap.png"
									alt="" class="absolute w-full h-full inset-0 object-contain m-auto">
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="tab-content hidden" id="tab-a2">
				<div class="lg:grid lg:grid-cols-2 lg:gap-[84px] items-center">
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
					{ ?>
						<div class="col-span-1">
							<div class="relative w-full pt-[76%]">
								<img loading="lazy"
									src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Bitmap2.png"
									alt="" class="absolute w-full h-full inset-0 object-contain m-auto">
							</div>
						</div>
					<?php } ?>
					<div class="col-span-1">
						<h3
							class="flex items-center gap-4 2xl:mb-8 mb-5 font-bold 2xl:text-2xl text-xl">
							<?php echo svgClass( 'tt-2', '', '', '2xl:max-w-10 max-w-8' ) ?>
							BSC Smart Invest
						</h3>
						<p class="font-bold mb-6 text-lg">
							Ứng dụng đầu tư thế hệ mới, mang tới những trải nghiệm đầu tư Thông minh
							- Nhanh chóng dễ dàng bởi những tính năng vượt trội:
						</p>
						<ul class="list-icon space-y-4 font-Helvetica mb-8 2xl:text-lg font-bold">
							<li class="list-icon-item">
								Một ứng dụng - Mọi giao dịch
							</li>
							<li class="list-icon-item">
								Theo dõi thông tin nhanh chóng
							</li>
							<li class="list-icon-item">
								Đặt lệnh "thần tốc"
							</li>
							<li class="list-icon-item">
								Cảnh báo biến động
							</li>
							<li class="list-icon-item">
								Cập nhật tức thì cơ hội đầu tư
							</li>
						</ul>
						<a href="#"
							class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold inline-flex items-center gap-x-3">
							<?php echo svg( 'arrow-btn', '20' ) ?>
							Khám phá ngay
						</a>
						<?php if (  wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div class="relative w-full pt-[76%] mt-[56px]">
								<img loading="lazy"
									src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Bitmap2.png"
									alt="" class="absolute w-full h-full inset-0 object-contain m-auto">
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="lg:w-1/2 mt-[30px] text-center">
				<ul
					class="customtab-nav has-line inline-flex justify-center gap-8 pb-2 border-b border-[#D9D9D9] relative">
					<li>
						<button data-tabs="#tab-a1"
							class="font-bold text-black &:not(.active)]:text-opacity-70 transition-all duration-500 hover:scale-105 active">
							BSC Web Trading
						</button>
					</li>
					<li>
						<button data-tabs="#tab-a2"
							class="font-bold text-black &:not(.active)]:text-opacity-70 transition-all duration-500 hover:scale-105">
							BSC Smart Invest
						</button>
					</li>
					<span
						class="line absolute w-1/2 bottom-0 h-[2px] bg-yellow-100 duration-500 transition-all left-0"></span>
				</ul>

			</div>
		</div>
	</section>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-[50px] mb-20' ?>">
		<div class="container">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex items-center justify-between mb-10' : 'mb-6' ?>">
				<h2 class="heading-title">CHƯƠNG TRÌNH KHUYẾN MÃI</h2>
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
				{ ?>
					<a href="#"
						class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold inline-flex items-center gap-x-3">
						<?php echo svg( 'arrow-btn', '20' ) ?>
						<?php _e( 'Xem tất cả', 'bsc' ) ?>
					</a>

				<?php } ?>
			</div>
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:flex gap-10 ' : '' ?>">
				<?php if ( wp_is_mobile() && bsc_is_mobile() )
				{ ?>
					<div class="lg:w-[656px] lg:max-w-[50%]">
						<a href="" class="w-full block relative overflow-hidden rounded-2xl pt-[55%]">
							<img loading="lazy"
								src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/km.png"
								alt=""
								class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
						</a>
					</div>
				<?php } ?>
				<div class="flex-1">
					<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:space-y-[23px] space-y-4':'block_slider-show-1 fli-dots-blue dot-30' ?>"
					<?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
										data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
					<?php } ?>
					>
						<?php
						for ( $i = 0; $i < 5; $i++ )
						{
							?>
							<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'item flex gap-6 items-center':'w-full block_slider-item' ?>">
								<div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[270px] max-w-[45%]':'w-full mb-4' ?>">
									<a href=""
										class="w-full relative pt-[63%] block overflow-hidden rounded-[10px]">
										<img loading="lazy"
											src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news12.png"
											alt=""
											class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
									</a>
								</div>
								<div class="flex-1">
									<h4
										class="font-bold mb-2 transition-all duration-500 hover:text-primary-300">
										<a href="" class="line-clamp-2">
											Danh mục “Chuẩn” – Ưu đãi “Chất”
										</a>
									</h4>
									<div class="flex items-center gap-2 font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-6':'text-xs' ?>">
										<?php echo svg( 'time' ) ?>
										<div class="font-medium">22/08/2024 - 22/10/2024</div>
									</div>
									<div class="mt-[14px] font-Helvetica">
										<div
											class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[3px]">
											<p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
												style="width:60%"></p>
										</div>
										<div class="mt-2 text-xs">
											Thời gian khuyến mãi còn <strong class="text-primary-300">20
												ngày</strong>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
