<?php

/**
Template Name: [Package 3] Báo cáo vĩ mô #1
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
		<div class="container">
			<ul class="flex <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'justify-between 2xl:gap-10 gap-5':'gap-4 nav-scroll-mb overflow-x-auto whitespace-nowrap' ?>">
				<li class="flex-1">
					<a href="#"
						class="active block text-center font-bold lg:text-lg lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
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
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-[54px] mb-[100px]':'mt-8 mb-[50px]' ?>">
		<div class="container">
			<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-[26px]':'mb-4' ?>">
				CHUYÊN MỤC
			</h2>
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex 2xl:gap-[70px] gap-10 ':'' ?>">
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
							src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
							alt="" class="rounded-lg transition-all duration-500 hover:scale-105">
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
				<div class="flex-1">
				<?php if ( wp_is_mobile() && bsc_is_mobile() )
					{ ?>
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
					<form method="get"
						action="<?php echo get_term_link( get_queried_object() ); ?>">
						<div
							class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-nowrap gap-5 mb-12' : 'mb-6 flex-wrap' ?>">
							<div
								class="max-w-full flex items-center  bg-white rounded-[10px] border border-[##EAEEF4] py-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-[518px] w-full 2xl:max-w-[50%] lg:max-w-[40%] px-5 gap-4' : 'w-[52%] pl-4 gap-3 text-xs overflow-hidden px-1.5 h-[46px]' ?>">
								<div
									class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-5 h-5' ?> shrink-0">
									<?php echo svgClass( 'search', '', ) ?>
								</div>
								<input type="text" name="key" value="<?php if ( isset( $_GET['key'] ) )
									echo $_GET['key'] ?>" placeholder="<?php _e( 'Từ khóa tìm kiếm', 'bsc' ) ?>"
									class="placeholder:text-[#898A8D] border-none focus:border-none focus:outline-0 flex-1 p-[2px] focus:shadow-transparent focus:ring-transparent <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'max-w-[75%] text-xs' ?>">
							</div>
							<?php if ( wp_is_mobile() && bsc_is_mobile() )
							{ ?>
								<div class="w-[48%] px-1.5 ">
									<div
										class="bg-white rounded-[10px] border border-[##EAEEF4] py-3 px-4 flex gap-4 justify-between items-center">
										<label for=""
											class="font-medium text-[12px]"><?php _e( 'Năm:', 'bsc' ) ?></label>
										<select id="select_year" name="years"
											class="select_custom py-0 border-0 focus:ring-0 text-[12px] pl-0 !pr-8">
											<option value=""><?php _e( 'Chọn năm', 'bsc' ); ?></option>
											<?php
											$currentYear = date( 'Y' );
											for ( $year = $currentYear; $year >= 2015; $year-- ) :
												?>
												<option value="<?php echo esc_attr( $year ); ?>" <?php selected( isset( $_GET['years'] ) && $_GET['years'] == $year ); ?>>
													<?php echo esc_html( $year ); ?>
												</option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
							<?php } ?>
							<div class="flex gap-4 flex-1">
								<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
								{ ?>
									<div
										class="2xl:w-[45%] w-1/2 bg-white rounded-[10px] border border-[##EAEEF4] px-5 py-3 flex gap-5 justify-between items-center">
										<label for=""
											class="font-bold"><?php _e( 'Năm:', 'bsc' ) ?></label>
										<select id="select_year" name="years"
											class="select_custom py-0 border-0 focus:ring-0">
											<option value=""><?php _e( 'Chọn năm', 'bsc' ); ?></option>
											<?php
											$currentYear = date( 'Y' );
											for ( $year = $currentYear; $year >= 2015; $year-- ) :
												?>
												<option value="<?php echo esc_attr( $year ); ?>" <?php selected( isset( $_GET['years'] ) && $_GET['years'] == $year ); ?>>
													<?php echo esc_html( $year ); ?>
												</option>
											<?php endfor; ?>
										</select>
									</div>
								<?php } ?>
								<div
									class=" flex items-center gap-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:w-[55%] w-1/2' : 'w-full mt-[12px]' ?>">
									<button type="submit"
										class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] 2xl:px-6  2xl:py-3   relative transition-all duration-500 inline-block w-full h-full px-6 py-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'font-semibold rounded-xl' : 'flex-1 h-10 text-xs font-bold rounded-lg' ?>">
										<span
											class="block relative z-10"><?php _e( 'Tìm kiếm', 'bsc' ) ?></span>
									</button>
									<a href="<?php echo get_term_link( get_queried_object() ) ?>"
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[50px] h-[50px]' : 'w-10 h-10' ?> rounded-lg flex items-center justify-center p-3  group shrink-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'bg-white' : 'bg-[#E8F5FF]' ?>">
										<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
									</a>
								</div>
							</div>
						</div>
					</form>
					<div class="grid lg:grid-cols-2 gap-6">
						<?php
						for ( $i = 0; $i < 3; $i++ )
						{
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
									class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
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
									class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
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
									class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
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
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
