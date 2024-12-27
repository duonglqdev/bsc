<?php

/**
Template Name: Công bố thông tin
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'bg-gradient-blue-to-bottom-50 pt-12 pb-16' : 'bg-gradient-blue-to-bottom-150 py-[50px]' ?>">
		<div class="container">
			<div class="lg:flex gap-[70px]">
				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
				{ ?>
					<div class="lg:w-80 lg:max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10">
							<ul
								class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report space-y-2">
								<li class="">
									<a href="http://website-uat.bsc.com.vn/cong-bo-thong-tin/"
										class="flex items-center gap-4 md:text-lg font-bold  [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										Công bố thông tin </a>
								</li>
								<li class="active has-child group">
									<a href="http://website-uat.bsc.com.vn/dai-hoi-dong-co-dong/"
										class="flex items-center gap-4 md:text-lg font-bold active [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										Đại hội đồng cổ đông </a>

									<ul class="pl-5 hidden sub-menu w-full bg-white"
										style="display: none;">
										<li class="pl-5">
											<a href="http://website-uat.bsc.com.vn/thong-bao-moi-hop/"
												class=" [&amp;:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&amp;:not(.active)]:bg-white  hover:!text-primary-300 block">
												Thông báo mời họp </a>
										</li>
										<li class="pl-5">
											<a href="http://website-uat.bsc.com.vn/tai-lieu-hop/"
												class=" [&amp;:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&amp;:not(.active)]:bg-white  hover:!text-primary-300 block">
												Tài liệu họp </a>
										</li>
										<li class="pl-5">
											<a href="http://website-uat.bsc.com.vn/bien-ban-va-nghi-quyet/"
												class=" [&amp;:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&amp;:not(.active)]:bg-white  hover:!text-primary-300 block">
												Biên bản và Nghị quyết </a>
										</li>
									</ul>
								</li>
								<li class="">
									<a href="http://website-uat.bsc.com.vn/bao-cao-tai-chinh/"
										class="flex items-center gap-4 md:text-lg font-bold  [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										Báo cáo tài chính </a>
								</li>
								<li class="">
									<a href="http://website-uat.bsc.com.vn/bao-cao-thuong-nien/"
										class="flex items-center gap-4 md:text-lg font-bold  [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										Báo cáo thường niên </a>
								</li>
								<li class="has-child group">
									<a href="http://website-uat.bsc.com.vn/quan-tri-doanh-nghiep/"
										class="flex items-center gap-4 md:text-lg font-bold  [&amp;:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&amp;:not(.active)]:before:bg-[#051D36] [&amp;:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&amp;:not(.active)]:bg-white [&amp;:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										Quản trị doanh nghiệp </a>

									<ul class="pl-5 hidden sub-menu w-full bg-white">
										<li class="pl-5">
											<a href="http://website-uat.bsc.com.vn/bao-cao-quan-tri-cong-ty/"
												class=" [&amp;:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&amp;:not(.active)]:bg-white  hover:!text-primary-300 block">
												Báo cáo quản trị công ty </a>
										</li>
										<li class="pl-5">
											<a href="http://website-uat.bsc.com.vn/dieu-le-cong-ty/"
												class=" [&amp;:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&amp;:not(.active)]:bg-white  hover:!text-primary-300 block">
												Điều lệ công ty </a>
										</li>
									</ul>
								</li>
							</ul>
							<div class="mt-12">
								<a href="javascript:void(0)">
									<img width="680" height="1164"
										src="http://website-uat.bsc.com.vn/wp-content/uploads/2024/10/333image.png"
										class="rounded-lg transition-all duration-500 hover:scale-105"
										alt="" decoding="async" fetchpriority="high"
										srcset="http://website-uat.bsc.com.vn/wp-content/uploads/2024/10/333image.png 680w, http://website-uat.bsc.com.vn/wp-content/uploads/2024/10/333image-300x514.png 300w"
										sizes="(max-width: 680px) 100vw, 680px" loading="lazy"> </a>
							</div>
						</div>
					</div>
				<?php } ?>
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
					<?php if ( wp_is_mobile() && bsc_is_mobile() )
					{ ?>
						<div
							class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between mb-6">
							Công bố thông tin
							<?php echo svg( 'down-white', '20' ) ?>
						</div>
						<ul class="flex overflow-x-auto mt-4 gap-1.5">
							<li class="">
								<a href=""
									class="active [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
									Thông báo mời họp </a>
							</li>
							<li class="">
								<a href=""
									class=" [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
									Tài liệu họp </a>
							</li>
							<li class="">
								<a href=""
									class=" [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
									Biên bản và Nghị quyết </a>
							</li>
						</ul>
					<?php } ?>
					<div class="space-y-6 mt-6">
						<?php
						for ( $i = 0; $i < 10; $i++ )
						{
							?>
							<div class="news_service-item document_item-popup md:flex items-center justify-between md:gap-20 [&amp;:not(:last-child)]:border-b [&amp;:not(:last-child)]:border-[#E1E1E1] [&amp;:not(:last-child)]:pb-8"
								data-modal-target="document-modal" data-modal-toggle="document-modal"
								data-doccument="http://files-uat.bsc.com.vn/news/20240910 - BSI -  Cac Quyet dinh huy niem yet Chung quyen co bao dam do ..._638662837975352499.pdf"
								data-id="23919">
								<div class="flex items-center">
									<div
										class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
										<p
											class="date text-center bg-primary-300 text-white font-bold py-[2px] px-1 leading-normal w-full text-xxs">
											Tháng 9 </p>
										<p
											class="flex-1 flex flex-col justify-center items-center  font-bold bg-primary-50 w-full text-xl">
											10 <span class="text-primary-300 text-[12px] font-medium">
												2024 </span>
										</p>
									</div>

									<div class="ml-4">
										<p
											class="font-bold leading-normal text-base line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300 cursor-pointer main_title">
											BSC - Các Quyết định hủy niêm yết chứng quyền có bảo đảm của
											Sở GDCK Tp Hồ Chí Minh với 02 mã chứng quyền: CACB2304,
											CTCB2309 </p>
										<div
											class="line-clamp-2 text-paragraph mb-4 main_content font-Helvetica not-italic">
											BSC - Các Quyết định hủy niêm yết chứng quyền có bảo đảm của
											Sở GDCK Tp Hồ Chí Minh với 02 mã chứng quyền: CACB2304,
											CTCB2309 </div>
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<div class="mt-12">
						<?php get_template_part( 'components/pagination' ) ?>
					</div>
				</div>

			</div>
		</div>
	</section>
</main>
<?php
get_footer();
