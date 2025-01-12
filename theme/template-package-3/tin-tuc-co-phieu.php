<?php

/**
Template Name: [Package 3] Danh sách tin tức mã cổ phiếu
 */

get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'my-[68px]':'mt-8 mb-[50px]' ?>">
		<div class="container">
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:flex gap-[70px]':'' ?>">
				<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
					<div class="lg:w-80 lg:max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10">
							<img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
								alt="" class="rounded-lg transition-all duration-500 hover:scale-105">
						</div>
					</div>
				<?php } ?>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex-1 space-y-11':'space-y-6' ?>">
					<?php
					for ($i = 0; $i < 10; $i++) {
					?>
						<div class="news_service-item document_item-popup md:flex items-center justify-between md:gap-20 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-8"
							data-modal-target="document-modal" data-modal-toggle="document-modal"
							data-doccument="" data-id="">
							<div class="flex items-center">
								<div
									class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
									<p
										class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
										Tháng 9 </p>
									<p
										class="flex-1 flex flex-col justify-center items-center 2xl:text-2xl text-xl font-bold bg-primary-50 w-full">
										10 <span class="text-primary-300 text-[12px] font-medium">
											2024 </span>
									</p>
								</div>

								<div class="md:ml-[30px] ml-5">
									<p
										class="font-bold leading-normal transition-all duration-500 hover:text-primary-300 cursor-pointer main_title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'line-clamp-2 mb-2 text-lg':'line-clamp-3' ?>">
										BSI: Bổ sung một số Nghị quyết HĐQT liên quan đến việc phê duyệt sử dụng hạn mức hạn mức tín dụng năm 2023
									</p>
									<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
										<div
											class="line-clamp-2 text-paragraph mb-4 main_content font-Helvetica not-italic">
											BSC - Các Quyết định hủy niêm yết chứng quyền có bảo đảm của Sở
											GDCK Tp Hồ Chí Minh với 02 mã chứng quyền: CACB2304, CTCB2309
										</div>
														
									<?php } ?>
								</div>
							</div>
							<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
								<p
									class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs whitespace-nowrap cursor-pointer">
									Xem nội dung
									<?php echo svg('download') ?>
								</p>
							<?php } ?>
						</div>
					<?php
					}
					?>
					<?php get_template_part('components/pagination') ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
