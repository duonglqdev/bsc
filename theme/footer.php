<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsc
 */

?>
<?php
if (get_field('cdc5_iframe_live_chat', 'option')) {
	the_field('cdc5_iframe_live_chat', 'option');
}
?>
<footer class="bg-gradient-blue md:py-9 py-6 text-white font-Helvetica">
	<div class="container">
		<div
			class="flex lg:justify-between justify-center items-center lg:flex-row flex-col gap-4 pb-6 mb-10 border-b border-[#f3f3f3] border-opacity-50">
			<?php if (get_field('f1_tongdai', 'option')) { ?>
				<div class="flex items-center gap-x-4 text-white  font-normal">
					<?php echo svg('phone') ?>
					<p><?php the_field('f1_tongdai', 'option') ?></p>
				</div>
			<?php } ?>
			<?php if (have_rows('f1_mxh', 'option')) { ?>
				<div class="flex items-center gap-x-2 text-white">
					<?php while (have_rows('f1_mxh', 'option')) :
						the_row(); ?>
						<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank"
							rel="nofollow">
							<?php
							$icon_field = get_sub_field('icon');
							$icon_values = explode(',', $icon_field);
							$icon_name = isset($icon_values[0]) ? trim($icon_values[0], " '") : '';
							$icon_width = isset($icon_values[1]) ? trim($icon_values[1], " '") : false;
							$icon_height = isset($icon_values[2]) ? trim($icon_values[2], " '") : false;
							if ($icon_name) {
								echo svg($icon_name, $icon_width, $icon_height);
							}
							?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php } ?>
		</div>
		<div
			class="grid grid-cols-8 2xl:gap-12 lg:gap-10 gap-5 mb-10 pb-10 border-b border-[#f3f3f3] border-opacity-50 font-light">
			<div class="lg:col-span-3 md:col-span-4 col-span-full">
				<?php
				$custom_logo_id = get_field('f1_logo', 'option');
				if ($custom_logo_id) {
					$image = wp_get_attachment_image_src($custom_logo_id, 'full');
					printf(
						'<a class="max-w-[116px] block mb-6" href="%1$s" title="%2$s"><img class="max-w-24" src="%3$s"></a>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						$image[0],

					);
				}
				?>
				<?php the_field('f1_mota', 'option') ?>
			</div>
			<div class="lg:col-span-3 md:col-span-4 col-span-full">
				<ul class="space-y-4">
					<?php if (have_rows('f1_thongtintruso', 'option')) {
						while (have_rows('f1_thongtintruso', 'option')) :
							the_row(); ?>
							<li class="flex gap-x-4 hover:text-yellow-100 transition-all duration-500">
								<?php
								$icon_field = get_sub_field('icon');
								$icon_values = explode(',', $icon_field);
								$icon_name = isset($icon_values[0]) ? trim($icon_values[0], " '") : '';
								$icon_width = isset($icon_values[1]) ? trim($icon_values[1], " '") : false;
								$icon_height = isset($icon_values[2]) ? trim($icon_values[2], " '") : false;
								$icon_class = isset($icon_values[3]) ? trim($icon_values[3], " '") : '';
								if ($icon_name) {
									echo svgClass($icon_name, $icon_width, $icon_height, $icon_class);
								}
								?>
								<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank"
									rel="nofollow">
									<?php if (get_sub_field('bold')) { ?>
										<strong><?php the_sub_field('bold') ?></strong>
									<?php } ?>
									<?php the_sub_field('mota') ?>
								</a>
							</li>
					<?php endwhile;
					} ?>
					<?php if (have_rows('f1_mangluoi', 'option')) {
						while (have_rows('f1_mangluoi', 'option')) :
							the_row();
							if (get_sub_field('title')) { ?>
								<li class="flex text-yellow-100 group">
									<a href="<?php echo check_link(get_sub_field('link')) ?>"
										class="flex items-center uppercase font-bold font-body gap-x-4 group-hover:scale-105 transition-all duration-500">
										<?php echo svg('map') ?>
										<p class="flex items-center uppercase font-bold font-body gap-x-2">
											<?php the_sub_field('title') ?>
											<?php echo svg('arrow-right') ?>
										</p>
									</a>
								</li>
					<?php };
						endwhile;
					} ?>
				</ul>
			</div>
			<div class="lg:col-span-2 col-span-full">
				<?php if (get_field('f2_title', 'option')) { ?>
					<p class="font-bold text-xs uppercase mb-4">
						<?php the_field('f2_title', 'option') ?>
					</p>
				<?php } ?>
				<div class="flex gap-6">
					<?php if (have_rows('f2_qr_code', 'option')) {
						while (have_rows('f2_qr_code', 'option')) :
							the_row();
							if (get_sub_field('img')) { ?>
								<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank"
									rel="nofollow" class="md:w-[114px] md:max-w-[40%]">
									<?php echo wp_get_attachment_image(get_sub_field('img'), 'full') ?>
								</a>
					<?php
							}
						endwhile;
					}
					?>
					<div class="flex flex-col gap-4">
						<?php if (have_rows('f2_google_play', 'option')) {
							while (have_rows('f2_google_play', 'option')) :
								the_row();
								if (get_sub_field('img')) { ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank"
										rel="nofollow">
										<?php echo wp_get_attachment_image(get_sub_field('img'), 'full') ?>
									</a>
						<?php
								}
							endwhile;
						}
						?>
						<?php if (have_rows('f2_apple_store', 'option')) {
							while (have_rows('f2_apple_store', 'option')) :
								the_row();
								if (get_sub_field('img')) { ?>
									<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank"
										rel="nofollow">
										<?php echo wp_get_attachment_image(get_sub_field('img'), 'full') ?>
									</a>
						<?php
								}
							endwhile;
						}
						?>
					</div>
				</div>
				<?php if (get_field('f1_copyright', 'option')) { ?>
					<div class="mt-6">
						<?php the_field('f1_copyright', 'option') ?>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="lg:flex lg:justify-between gap-5">
			<?php if (have_rows('f3_menu', 'option')) {
				while (have_rows('f3_menu', 'option')) :
					the_row(); ?>
					<div class="space-y-4 footer-item">
						<?php if (get_sub_field('title')) { ?>
							<p class="font-bold uppercase text-yellow-100"><?php the_sub_field('title') ?></p>
						<?php };
						if (have_rows('menu', 'option')) { ?>
							<ul class="space-y-4 font-bold">
								<?php while (have_rows('menu', 'option')) :
									the_row(); ?>
									<li><a
											href="<?php echo check_link(get_sub_field('link')) ?>"><?php the_sub_field('title') ?></a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php } ?>
					</div>
			<?php endwhile;
			} ?>
			<div class="2xl:max-w-[33%] lg:max-w-[38%] space-y-4">
				<?php if (get_field('f4_title', 'option')) { ?>
					<p class="font-bold uppercase text-yellow-100">
						<?php the_field('f4_title', 'option') ?>
					</p>
				<?php };
				if (get_field('f4_mota', 'option')) { ?>
					<p>
						<?php the_field('f4_mota', 'option') ?>
					</p>
				<?php } ?>
				<?php echo do_shortcode('[contact-form-7 id="972a993" title="Đăng ký nhận tin"]') ?>
			</div>
		</div>

	</div>
</footer>


<?php if (get_field('cdc2_tien_ich_on', 'option')) { ?>
	<div
		class="utilities_button will-change-transform translate-z-0 [&:not(.active)]:opacity-100 opacity-0 [&:not(.active)]:visible invisible [&:not(.active)]:pointer-events-auto pointer-events-none  transition-all duration-500 inline-flex items-center gap-2 px-6 py-3 font-semibold text-white bg-gradient-blue fixed 2xl:top-1/2 top-2/3 rotate-90 origin-top-right cursor-pointer rounded-br-[10px] rounded-bl-[10px] border-2 border-[#FFB81C] border-t-0 z-50 [&:not(.show)]:-right-20 right-0">
		<?php the_field('cdc2_title', 'option') ?>
		<div class="-rotate-90">
			<?php echo svg('down-2') ?>
		</div>
	</div>
	<?php if (have_rows('cdc2_tien_ich', 'option')) { ?>
		<div
			class="utilities_button-list transition-all duration-500  [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:invisible visible [&:not(.active)]:pointer-events-none pointer-events-auto font-semibold text-white bg-gradient-blue fixed right-0 cursor-pointer rounded-bl-[10px] rounded-tl-[10px] border-2 border-[#FFB81C] border-r-0 text-[12px] z-[99]">
			<?php while (have_rows('cdc2_tien_ich', 'option')) :
				the_row(); ?>
				<a href="<?php echo check_link(get_sub_field('link')) ?>"
					class="utilities_button-item 2xl:leading-normal leading-tight utilities_button-hover transition-all duration-500 w-full text-center flex flex-col justify-center items-center 2xl:py-4 py-2 2xl:px-3 px-1 relative after:absolute after:w-10 after:h-[1px] after:bg-yellow-100 after:bottom-0 after:left-1/2 after:-translate-x-1/2">
					<?php if (get_sub_field('icon')) { ?>
						<?php echo svgClass_dir(get_sub_field('icon'), '', '', 'w-8 h-8') ?>
					<?php } ?>
					<?php the_sub_field('title') ?>
				</a>
			<?php endwhile; ?>
			<div
				class="collapse-button w-full flex flex-col justify-center items-center 2xl:py-4 py-2 2xl:px-3 px-2 utilities_button-hover transition-all duration-500">
				<?php echo svgClass('down-2', '', '', 'rotate-180') ?>
				<?php _e('Thu gọn', 'bsc') ?>
			</div>
		</div>
	<?php } ?>
<?php } ?>

<div class="inline-flex flex-col fixed 2xl:bottom-8 bottom-[6px] right-3 2xl:gap-4 gap-2 z-[99]">
	<?php if (get_field('cdc3_link', 'option')) { ?>
		<a href="<?php echo check_link(get_field('cdc3_link', 'option')) ?>"
			class="relative group block">
			<div
				class="w-10 h-10 rounded-full bg-white shadow-blue relative z-10 flex items-center justify-center open-ytb [&:not(.active)]:pointer-events-auto pointer-events-none">
				<?php echo svg('ytb', '20') ?>
			</div>
			<?php if (get_field('cdc3_title', 'option')) { ?>
				<div
					class="rounded-full absolute bg-white shadow-blue whitespace-nowrap h-10 flex flex-col justify-center pl-5 font-bold text-sm transition-all duration-500 top-0 right-0 opacity-0 group-hover:opacity-100 group-hover:w-auto w-10 group-hover:pr-12">
					<?php the_field('cdc3_title', 'option') ?>
				</div>
			<?php } ?>
		</a>
	<?php } ?>
	<div class="relative block text-white  cursor-pointer">
		<div
			class="w-10 h-10 rounded-full bg-primary-300 shadow-blue relative z-10 flex items-center justify-center shadow-base peer open-utilities [&:not(.active)]:pointer-events-auto pointer-events-none">
			<?php echo svg('settings', '20') ?>
		</div>
		<?php if (get_field('cdc4_title', 'option')) { ?>
			<div
				class="rounded-full absolute bg-primary-300 shadow-blue whitespace-nowrap h-10 flex flex-col justify-center pl-5 font-bold text-sm transition-all duration-500 top-0 right-0 opacity-0 peer-hover:opacity-100 peer-hover:w-auto w-10 peer-hover:pr-12 ">
				<?php the_field('cdc4_title', 'option') ?>
			</div>
		<?php } ?>
		<div
			class="md:w-[432px] w-[80vw] md:py-12 py-5 md:px-8 px-5 rounded-[10px] shadow-base bg-white absolute bottom-0 right-14 hidden open-utilities-box">
			<div
				class="flex items-center justify-between pb-6 border-b border-black border-opacity-10 text-black">
				<?php if (get_field('cdc4_title_khoi', 'option')) { ?>
					<div class="inline-flex items-center gap-4 font-bold uppercase text-xl">
						<?php echo svg('keyvisual', '24', '24') ?>
						<?php the_field('cdc4_title_khoi', 'option') ?>
					</div>
				<?php } ?>
				<div
					class="inline-flex items-center gap-1 font-bold uppercase text-primary-700 text-xs hidden-utilities">
					<?php echo svg('close-icon', '20', '20') ?>
					<?php _e('Ẩn đi', 'gnws') ?>
				</div>
			</div>
			<?php if (have_rows('cdc4_menu', 'option')) { ?>
				<div class="grid grid-cols-3 scroll-bar-custom max-h-[255px] overflow-y-auto">
					<?php while (have_rows('cdc4_menu', 'option')) :
						the_row(); ?>
						<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank"
							class="flex flex-col justify-center items-center gap-4 p-5 text-black transition-all duration-500 text-center hover:shadow-[inset_0px_4px_24px_0px_rgba(0,0,0,0.12)]">
							<?php echo svg_dir(get_sub_field('icon'), '40', '40') ?>
							<?php if (get_sub_field('title')) { ?>
								<div class="font-bold text-xs">
									<?php the_sub_field('title') ?>
								</div>
							<?php } ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php } ?>
			<div class="pt-8 border-t border-black border-opacity-10 grid grid-cols-2 gap-3">
				<?php
				if (have_rows('cdc4_khoi_bsc_live', 'option')) {
					while (have_rows('cdc4_khoi_bsc_live', 'option')) :
						the_row();
						if (get_sub_field('title')) {
				?>
							<a href="<?php echo check_link(get_sub_field('link')) ?>"
								class="inline-flex transition-all duration-500 hover:opacity-95 hover:shadow-[0px_4px_16px_0px_rgba(242,33,33,0.4)] font-bold py-[12px] px-4 items-center justify-center gap-[6px] text-[12px] rounded-[10px] shadow-[0_4px_10px_0px_rgba(0,0,0,0.2)] text-white bg-[#F22121]">
								<?php echo svg('live') ?>
								<?php the_sub_field('title') ?>
							</a>
				<?php
						}
					endwhile;
				}
				?>
				<?php
				if (have_rows('cdc4_khoi_chat_support', 'option')) {
					while (have_rows('cdc4_khoi_chat_support', 'option')) :
						the_row();
						if (get_sub_field('title')) {
				?>
							<a href="<?php echo check_link(get_sub_field('link')) ?>"
								class="inline-flex transition-all duration-500 hover:opacity-95 hover:shadow-[0px_4px_16px_0px_rgba(0,92,238,0.4)] font-bold py-[12px] px-4 items-center justify-center gap-[6px] text-[12px] rounded-[10px] shadow-[0_4px_10px_0px_rgba(0,0,0,0.2)] text-white bg-[#005DEE]">
								<?php echo svg('chat') ?>
								<?php the_sub_field('title') ?>
							</a>
				<?php
						}
					endwhile;
				}
				?>
			</div>
		</div>
	</div>

	<div
		class="back-to-top w-10 h-10 rounded-full m-auto bg-white shadow-base cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
		<?php echo svgClass('back-top', '', '', 'm-auto h-full cursor-pointer') ?>
	</div>
</div>

<?php
$true_form_modal = 0;
$page_id = get_the_ID();
if (is_tax('danh-muc-bao-cao')) {
	$true_form_modal = 1;
} else {
	if (have_rows('home_components', $page_id)) {
		while (have_rows('home_components', $page_id)) :
			the_row();
			$module_name = get_row_layout();

			if (($module_name == 'tailieu_baocao')) {
				$true_form_modal = 1;
			}

		endwhile;
	}
}
if ($true_form_modal == 1) {
?>
	<div id="document-modal" tabindex="-1" aria-hidden="true"
		class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-[#000] bg-opacity-80">
		<div class="relative w-full max-w-[764px] max-h-full">
			<div class="relative bg-white p-6 rounded-[10px]">
				<div class="border-b mb-4 pb-4 text-right">
					<button type="button"
						class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
						data-modal-hide="document-modal">
						<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M18 18.5L6 6.5" stroke="#160042" stroke-width="1.5"
								stroke-linecap="round" stroke-linejoin="round" />
							<path d="M6 18.5L18 6.5" stroke="#160042" stroke-width="1.5"
								stroke-linecap="round" stroke-linejoin="round" />
						</svg>

						<span class="sr-only"><?php _e('Close modal', 'bsc') ?></span>
					</button>
					<h3 class="text-xl text-black document-modal-title text-left font-bold">

					</h3>

				</div>

				<div
					class="font-Helvetica space-y-4 document-modal-content pr-4 mb-12 scroll-bar-custom max-h-80 overflow-y-auto">

				</div>
				<div class="hidden document-popup-loading">
					<div role="status">
						<svg aria-hidden="true"
							class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
							viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
								fill="currentColor" />
							<path
								d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
								fill="currentFill" />
						</svg>
						<span class="sr-only">Loading...</span>
					</div>
				</div>
				<div class="text-right">
					<a href="" target="_blank"
						class="document-modal-link inline-flex py-3 px-6 gap-2 rounded-lg bg-yellow-100 text-xs font-bold">
						<?php _e('Xem nội dung', 'bsc') ?>
						<?php echo svgpath('download', '20', '20', 'fill-black') ?>
					</a>
				</div>

			</div>
		</div>
	</div>
<?php
}
?>


<?php wp_footer(); ?>

</body>

</html>