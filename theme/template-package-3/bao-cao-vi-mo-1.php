<?php

/**
Template Name: [Package 3] Báo cáo vĩ mô #1
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="bg-primary-50 sticky z-10 top-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:py-4 py-3' : 'py-[12px]' ?>">
		<div class="container">
			<ul
				class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'justify-between 2xl:gap-10 gap-5' : 'gap-4 nav-scroll-mb overflow-x-auto whitespace-nowrap' ?>">
				<li class="flex-1">
					<a href="#"
						class="active block text-center font-bold [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] 2xl:px-10 px-5' : 'py-3 px-4 text-xs' ?>">
						Báo cáo vĩ mô
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo Ngành - Doanh nghiệp
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Báo cáo chuyên đề
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Danh mục khuyến nghị
					</a>
				</li>
				<li class="flex-1">
					<a href="#"
						class="block text-center font-bold lg:text-lg lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
						Quan điểm BSC
					</a>
				</li>

			</ul>
		</div>
	</section>
	<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-[54px] mb-[100px]' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-[26px]' : 'mb-4' ?>">
				CHUYÊN MỤC
			</h2>
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex 2xl:gap-[70px] gap-10 ' : '' ?>">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
					<div class="lg:w-80 lg:max-w-[35%] shrink-0">
						<div class="sticky lg:top-28 top-5 z-[9] space-y-12">
							<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">
								<li>
									<a href=""
										class="active flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Tất
										cả</a>
								</li>
								<li>
									<a href=""
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										Bản tin sáng
									</a>
								</li>
								<li>
									<a href=""
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Bản
										tin ngày</a>
								</li>
								<li>
									<a href=""
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Báo
										cáo vĩ mô</a>
								</li>
								<li>
									<a href=""
										class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">Báo
										cáo chiến lược</a>
								</li>
							</ul>
							<img loading="lazy"
								src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png" alt=""
								class="rounded-lg transition-all duration-500 hover:scale-105">
							<div class="p-6 bg-gradient-blue-50 mb-10">
								<h3 class="text-primary-300 font-bold text-xl mb-4">
									Đăng ký nhận báo cáo từ BSC
								</h3>
								<div class="form_report">
									<?php echo do_shortcode( '[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]' ) ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="flex-1 relative">
					<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
						<div class="toggle-form mb-[12px] inline-block">
							<div class="">
								<p class="inline-flex items-baseline gap-2 font-medium">Thu gọn
									<?php echo svgClass( 'down', '', '', 'rotate-180' ) ?>
								</p>
							</div>
							<div class="hidden">
								<p class="inline-flex items-baseline gap-2 font-medium">Mở rộng
									<?php echo svg( 'down' ) ?>
								</p>
							</div>
						</div>
					<?php } ?>
					<form method="get" action="<?php echo get_term_link( get_queried_object() ); ?>"
						class="flex mb-10 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-5' : 'flex-wrap gap-[12px]' ?>">
						<div
							class="rounded-[10px] border border-[#EAEEF4] flex items-center gap-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[270px] max-w-[33.33%] h-[50px] 2xl:px-[26px] px-5' : 'w-full p-[12px] h-[46px]' ?> shrink-0 ">
							<?php echo svgClass( 'search', '', '', ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-6 h-6 shrink-0' : 'w-5 h-5 shrink-0' ) ?>
							<input type="text" name="key"
								class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 placeholder:text-[#898A8D] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs p-0 w-[calc(100%-50px)]' ?>"
								placeholder="<?php _e( 'Từ khóa tìm kiếm', 'bsc' ) ?>" value="<?php if ( isset( $_GET['key'] ) )
										 echo bsc_format_string( $_GET['key'], 'all' ) ?>">
							</div>
							<div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy" datepicker-autohide
								datepicker-orientation="bottom right"
								class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1 px-5' : 'px-[12px] w-full text-xs' ?>">
							<p class="font-medium mr-5 2xl:min-w-[94px] whitespace-nowrap">
								<?php _e( 'Thời gian:', 'gnws' ) ?>
							</p>
							<div class="flex items-center 2xl:gap-5 gap-3">
								<input id="datepicker-range-start" name="fromdate" type="text"
									class="border-none focus:border-none focus:outline-0 focus:ring-0 2xl:max-w-[100px] max-w-[70px] 2xl:text-base text-xs p-0"
									placeholder="<?php _e( 'Từ ngày', 'bsc' ) ?>" value="<?php if ( isset( $_GET['fromdate'] ) )
											 echo bsc_format_string( $_GET['fromdate'], 'all' ) ?>">
								<?php echo svg( 'day', '20', '20' ) ?>
							</div>
							<span class="2xl:mx-4 mx-2 text-gray-500">-</span>
							<div class="flex items-center 2xl:gap-5 gap-3">
								<input id="datepicker-range-end" name="todate" type="text"
									class="border-none focus:border-none focus:outline-0 focus:ring-0 2xl:max-w-[100px] max-w-[70px] 2xl:text-base text-xs p-0"
									placeholder="<?php _e( 'Đến ngày', 'bsc' ) ?>" value="<?php if ( isset( $_GET['todate'] ) )
											 echo bsc_format_string( $_GET['todate'], 'all' ) ?>">
								<?php echo svg( 'day', '20', '20' ) ?>
							</div>
						</div>

						<button type="submit"
							class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block  font-semibold relative transition-all duration-500 leading-tight whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-1 px-6 py-3 h-[50px] rounded-xl' : 'h-10 px-5 py-2 w-[calc(100%-52px)] rounded-lg' ?>">
							<?php _e( 'Tìm kiếm', 'bsc' ) ?>
						</button>
						<a href="<?php echo get_term_link( get_queried_object() ) ?>"
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[50px] h-[50px]' : 'w-10 h-10' ?> rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group cursor-pointer">
							<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
						</a>
					</form>
					<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
						<div
							class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next">
							Công bố thông tin
							<?php echo svg( 'down-white', '20' ) ?>
						</div>
						<ul
							class="overflow-y-auto absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 prose-a:block rounded text-xs mt-2">
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
					<?php } ?>
					<div
						class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'md:grid-cols-2 gap-6' : 'md:grid-cols-2 gap-4 mt-6' ?>">
						<?php
						for ( $i = 0; $i < 3; $i++ ) {
							?>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo vĩ mô tuần
									</a>
									<div class="space-y-1.5 text-right">
										<span
											class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
											cực</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3
									class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
								<div class="flex items-center justify-between">
									<p class="italic text-paragraph text-xs font-Helvetica">
										68 Lượt tải xuống
									</p>
									<a href=""
										class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
										<?php _e( 'Tải xuống', 'bsc' ) ?>
										<?php echo svg( 'download', '20', '20' ) ?>
									</a>
								</div>
							</div>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo ngành
									</a>
									<div class="space-y-1.5 text-right">
										<span
											class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
											cực</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3
									class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
								<div class="flex items-center justify-between">
									<p class="italic text-paragraph text-xs font-Helvetica">
										68 Lượt tải xuống
									</p>
									<a href=""
										class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
										<?php _e( 'Tải xuống', 'bsc' ) ?>
										<?php echo svg( 'download', '20', '20' ) ?>
									</a>
								</div>
							</div>
							<div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
								<div class="flex items-center justify-between mb-4">
									<a href=""
										class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
										Báo cáo ngành
									</a>
									<div class="space-y-1.5 text-right">
										<span
											class="inline-block rounded-[45px] text-[#FFB81C] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
											lập</span>
										<p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
									</div>
								</div>
								<h3
									class="font-bold mb-6 transition-all duration-500 hover:text-primary-300 font-Helvetica">
									<a href="" class="line-clamp-2">
										Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
										quỹ_20240808
									</a>
								</h3>
								<div class="flex items-center justify-between mt-auto">
									<p class="italic text-paragraph text-xs font-Helvetica">
										68 Lượt tải xuống
									</p>
									<a href=""
										class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
										<?php _e( 'Tải xuống', 'bsc' ) ?>
										<?php echo svg( 'download', '20', '20' ) ?>
									</a>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<?php get_template_part( 'components/pagination' ) ?>
					<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
						<div class="p-4 bg-gradient-blue-50 mt-[50px]">
							<h3 class="text-primary-300 font-bold text-lg mb-4">
								Đăng ký nhận báo cáo từ BSC
							</h3>
							<div class="form_report">
								<?php echo do_shortcode( '[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]' ) ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
