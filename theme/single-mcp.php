<?php
$banner = wp_get_attachment_image_url(
	wp_is_mobile() && bsc_is_mobile() && get_field('cdc1_background_banner_mobile', 'option')
		? get_field('cdc1_background_banner_mobile', 'option')
		: get_field('cdc1_background_banner', 'option'),
	'full'
);
if (isset($args['data']) && $args['data']) {
	$news = $args['data'];
	$title = $news->title;
	$body = $news->body;
	$postdate = new DateTime($news->postdate);
	$postdate = $postdate->format('d/m/Y');
	$id_current_post = $news->newsid;
	$title_lienquan = __('Bài viết', 'bsc');
	$style = 'default';
	$breadcrumb = 'post';
	$tax_name = __('Tin tức mã cổ phiếu', 'bsc');
} else {
	wp_redirect(home_url('/404'), 301);
	exit;
}
get_header();
?>
<main>
	<?php get_template_part('components/page-banner', null, array(
		'banner' => $banner,
		'style' => $style,
		'title' => $tax_name,
		'breadcrumb' => $breadcrumb,
	)) ?>
	<section
		class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-12 lg:pb-16 pb-10 bg-gradient-blue-to-bottom-50' : 'pt-[50px] mb-12' ?>">
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-[70px] gap-6' : '' ?>">
				<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
					<div class="w-80 max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10 space-y-12">
							<?php
							$hinh_anh_sidebar = get_field('cdctkm1_hinh_anh_sidebar', 'option');
							if ($hinh_anh_sidebar) { ?>

								<a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>" class="block">
									<?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
								</a>

							<?php };
							?>
						</div>
					</div>

				<?php } ?>
				<div class="flex-1">
					<h1
						class="font-bold mb-6 !leading-snug <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-4xl lg:text-3xl text-2xl' : 'text-[22px]' ?>">
						<?php echo $title ?>
					</h1>
					<div
						class="flex items-center text-xs gap-[12px] font-Helvetica lg:flex-nowrap flex-wrap justify-start <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8' : ' mb-[26px]' ?>">
						<?php if ($news->sourcename) { ?>
							<a href="<?php echo $news->sourcelink ?>"
								class="font-medium inline-block transition-all duration-500 hover:text-primary-300"
								target="_blank">
								<?php echo $news->sourcename ?>
							</a>
						<?php } ?>

						<?php if ($news->sourcename) { ?>
							-
						<?php } ?>

						<div class="flex gap-[12px] items-center">
							<?php echo svgClass('date', '', '', 'shrink-0') ?>
							<span><?php echo $postdate ?></span>
						</div>

						<div class="share flex items-center gap-[12px] lg:ml-12 lg:w-auto w-full">
							<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
								<strong>
									<?php _e('Chia sẻ:', 'bsc') ?>
								</strong>

							<?php } ?>
							<ul class="flex items-center gap-3">
								<li>
									<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>"
										target="_blank">
										<?php echo svg('linkedin') ?>
									</a>
								</li>
								<li>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
										target="_blank">
										<?php echo svg('fb') ?>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div
						class="the_content font-Helvetica font-content text-justify prose-img:!h-auto prose-img:object-contain prose-p:!ml-0 prose-h2:text-[length:inherit] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-mb' ?>">
						<?php echo $body ?>
						<?php
						if ($news->attachedfileurl) {
							if (is_array($news->attachedfileurl)) {
								$count_att = count($news->attachedfileurl);
								if ($count_att == 1) {
						?>
									<a target="_blank" href="<?php echo slug_file_news(htmlspecialchars($news->newsid)) ?>"
										class="bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
										<span class="block relative z-10">
											<?php _e('Tải file đính kèm', 'bsc') ?>
										</span>
									</a>
								<?php
								} else {
								?>
									<div class="text-[#448AF4] mt-3">
										<?php
										$i = 0;
										foreach ($news->attachedfileurl as $att) {
											$i++; ?>
											<div class="flex items-center">
												<svg style="min-width: 20px" width="20" height="20" viewBox="0 0 20 20" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M16.6693 7.4513C16.6606 7.37475 16.6438 7.29933 16.6193 7.2263V7.1513C16.5792 7.06562 16.5258 6.98686 16.4609 6.91797L11.4609 1.91797C11.392 1.85315 11.3133 1.7997 11.2276 1.75964H11.1443C11.0632 1.7163 10.9762 1.6854 10.8859 1.66797H5.83594C5.1729 1.66797 4.53701 1.93136 4.06817 2.4002C3.59933 2.86904 3.33594 3.50493 3.33594 4.16797V15.8346C3.33594 16.4977 3.59933 17.1336 4.06817 17.6024C4.53701 18.0712 5.1729 18.3346 5.83594 18.3346H14.1693C14.8323 18.3346 15.4682 18.0712 15.937 17.6024C16.4059 17.1336 16.6693 16.4977 16.6693 15.8346V7.5013C16.6693 7.5013 16.6693 7.5013 16.6693 7.4513ZM11.6693 4.50964L13.8276 6.66797H12.5026C12.2816 6.66797 12.0696 6.58017 11.9133 6.42389C11.7571 6.26761 11.6693 6.05565 11.6693 5.83464V4.50964ZM15.0026 15.8346C15.0026 16.0556 14.9148 16.2676 14.7585 16.4239C14.6022 16.5802 14.3903 16.668 14.1693 16.668H5.83594C5.61492 16.668 5.40296 16.5802 5.24668 16.4239C5.0904 16.2676 5.0026 16.0556 5.0026 15.8346V4.16797C5.0026 3.94695 5.0904 3.73499 5.24668 3.57871C5.40296 3.42243 5.61492 3.33464 5.83594 3.33464H10.0026V5.83464C10.0026 6.49768 10.266 7.13356 10.7348 7.6024C11.2037 8.07124 11.8396 8.33464 12.5026 8.33464H15.0026V15.8346ZM11.0776 11.9096L10.8359 12.1596V10.0013C10.8359 9.78029 10.7481 9.56833 10.5919 9.41205C10.4356 9.25577 10.2236 9.16797 10.0026 9.16797C9.78159 9.16797 9.56963 9.25577 9.41335 9.41205C9.25707 9.56833 9.16927 9.78029 9.16927 10.0013V12.1596L8.9276 11.9096C8.77068 11.7527 8.55786 11.6646 8.33594 11.6646C8.11402 11.6646 7.90119 11.7527 7.74427 11.9096C7.58735 12.0666 7.49919 12.2794 7.49919 12.5013C7.49919 12.7232 7.58735 12.936 7.74427 13.093L9.41094 14.7596C9.49019 14.8355 9.58364 14.895 9.68594 14.9346C9.78569 14.9787 9.89355 15.0015 10.0026 15.0015C10.1117 15.0015 10.2195 14.9787 10.3193 14.9346C10.4216 14.895 10.515 14.8355 10.5943 14.7596L12.2609 13.093C12.4179 12.936 12.506 12.7232 12.506 12.5013C12.506 12.2794 12.4179 12.0666 12.2609 11.9096C12.104 11.7527 11.8912 11.6646 11.6693 11.6646C11.4474 11.6646 11.2345 11.7527 11.0776 11.9096Z"
														fill="#448AF4" />
												</svg>
												<a class="ml-2 overflow-hidden text-ellipsis whitespace-nowrap w-100"
													href="<?php echo slug_file_news(htmlspecialchars($news->newsid)) . '-' . $i ?>"
													target="_blank">
													<?php echo shorten_url($att) ?>
												</a>
											</div>
										<?php } ?>
									</div>
								<?php
								}
							} else {
								?>
								<a target="_blank" href="<?php echo slug_file_news(htmlspecialchars($news->newsid)) ?>"
									class="bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
									<span class="block relative z-10">
										<?php _e('Tải file đính kèm', 'bsc') ?>
									</span>
								</a>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	$array_data = array(
		"maxitem" => "4",
		"lang" => pll_current_language(),
		'index' => 1,
		"newstype" => "1"
	);
	$response = get_data_with_cache('GetNews', $array_data, $time_cache);
	if ($response) {
	?>
		<section
			class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:pt-16 pt-10 lg:pb-[106px] pb-10' : 'mt-[18px] mb-12' ?>">
			<div class="container">
				<h2 class="heading-title mb-6 normal-case">
					<?php echo $title_lienquan . ' ' . __('liên quan', 'bsc') ?>
				</h2>
				<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid md:grid-cols-3 grid-cols-1 gap-x-6 gap-y-8' : 'block_slider-show-1 dots-blue' ?>"
					<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
					data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
					<?php } ?>>
					<?php
					$check_p = 0;
					foreach ($response->d as $news) {
						if ($check_p < 3) {
							if ($id_current_post != $news->newsid) {
								$check_p++;
								get_template_part('template-parts/content', $template_lienquan, array(
									'data' => $news,
								));
							}
						}
					}
					?>
				</div>
			</div>
		<?php
	}
		?>
</main>
<?php
get_footer();
