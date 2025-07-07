<?php
if ( $args['data'] ) {
	$news = $args['data'];
	$time_cache = 300;
	$banner = wp_get_attachment_image_url(
		wp_is_mobile() && bsc_is_mobile() && get_field( 'cdc1_background_banner_mobile', 'option' )
		? get_field( 'cdc1_background_banner_mobile', 'option' )
		: get_field( 'cdc1_background_banner', 'option' ),
		'full'
	);
	if ( get_field( 'cdltt1_background_banner', 'option' ) || get_field( 'cdltt1_background_banner_mobile', 'option' ) ) {
		$banner = wp_get_attachment_image_url(
			wp_is_mobile() && bsc_is_mobile() && get_field( 'cdltt1_background_banner_mobile ', 'option' )
			? get_field( 'cdltt1_background_banner_mobile ', 'option' )
			: get_field( 'cdltt1_background_banner ', 'option' ),
			'full'
		);
	}
	$style = get_field( 'cdltt1_background_banner_display', 'option' ) ?: 'default';
	$title_breadcrumb = get_field( 'cdltt1_title', 'option' );
	$breadcrumb = 'lichthitruong';
} else {
	wp_redirect( home_url( '/404' ), 301 );
	exit;
}
get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner', null, array(
		'banner' => $banner,
		'style' => $style,
		'title' => $title_breadcrumb,
		'breadcrumb' => $breadcrumb,
	) ) ?>
	<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-8 mb-[50px]' ?>">
		<div class="container">
			<div
				class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-[70px] gap-6' : 'space-y-10' ?>">
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-80 max-w-[35%] shrink-0' : '' ?>">
					<div class="sticky top-5 z-10">
						<div class="rounded-lg px-4 md:py-6 py-4 shadow-base">
							<ul
								class="prose-li:flex prose-li:items-start prose-li:justify-between prose-li:gap-4 space-y-3 text-xs prose-p:font-medium prose-strong:text-primary-300 font-Helvetica">
								<li>
									<span>
										<?php _e( 'Mã chứng khoán', 'bsc' ) ?>:
									</span>
									<strong>
										<?php if ( $news->securitycode ) { ?>
											<a
												href="<?php echo slug_co_phieu( $news->securitycode ) ?>"><?php echo $news->securitycode ?></a>
										<?php } ?>
									</strong>
								</li>
								<li>
									<span class="whitespace-nowrap">
										<?php _e( 'Loại sự kiện', 'bsc' ) ?>:
									</span>
									<p class="text-right max-w-[70%]">
										<?php if ( $news->eventtypename ) { ?>
											<?php echo $news->eventtypename ?>
										<?php } ?>
									</p>
								</li>
								<li>
									<span>
										<?php _e( 'Ngày chốt', 'bsc' ) ?>:
									</span>
									<p>
										<?php if ( $news->exdate ) {
											$date = new DateTime( $news->exdate );
											echo $date->format( 'd/m/Y' );
										} else {
											echo '-';
										} ?>
									</p>
								</li>
								<li>
									<span>
										<?php _e( 'Ngày đăng ký', 'bsc' ) ?>:
									</span>
									<p>
										<?php if ( $news->lastregdate ) {
											$date = new DateTime( $news->lastregdate );
											echo $date->format( 'd/m/Y' );
										} else {
											echo '-';
										} ?>
									</p>
								</li>
								<li>
									<span>
										<?php _e( 'Ngày thực thi', 'bsc' ) ?>:
									</span>
									<p>
										<?php if ( $news->effectivedate ) {
											$date = new DateTime( $news->effectivedate );
											echo $date->format( 'd/m/Y' );
										} else {
											echo '-';
										} ?>
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="flex-1">
					<h1
						class="font-bold !leading-[1.43] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:text-[32px] text-2xl lg:-mt-3 mb-8' : 'text-[22px] mb-6' ?>">
						<?php echo $news->title ?>
					</h1>
					<div
						class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-4' : 'space-y-[12px] text-xs' ?> font-Helvetica">
						<p class="lg:text-2xl text-lg font-bold">
							<?php _e( 'Chi tiết', 'bsc' ) ?>
						</p>
						<p>
							<strong><?php _e( 'Ngày đăng ký cuối cùng', 'bsc' ) ?>:</strong>
							<?php if ( $news->lastregdate ) {
								$date = new DateTime( $news->lastregdate );
								echo $date->format( 'd/m/Y' );
							} else {
								echo '-';
							} ?>
						</p>
						<p>
							<strong><?php _e( 'Ngày giao dịch không hưởng quyền', 'bsc' ) ?>:</strong>
							<?php if ( $news->exdate ) {
								$date = new DateTime( $news->exdate );
								echo $date->format( 'd/m/Y' );
							} else {
								echo '-';
							} ?>
						</p>
						<p>
							<strong><?php _e( 'Lý do và mục đích', 'bsc' ) ?>:</strong>
						</p>
						<div
							class="prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-strong:inline-flex prose-strong:items-center prose-strong:gap-3 prose-strong:mb-2 prose-ul:pl-7 prose-ul:list-disc prose-ol:pl-6 prose-ol:list-decimal prose-ul:mb-5 prose-ol:mb-3 marker:text-xs font-content font-base">
							<?php echo $news->body ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
