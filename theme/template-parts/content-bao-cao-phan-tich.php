<?php if ($args['data']) {
	$news = $args['data'];
	$link = 'javascript:void(0)';
	$khoi_template = 'taxonomy';
	$get_array_id_taxonomy = $args['get_array_id_taxonomy'];
	if ($news->categoryid) {
		$categoryid = $news->categoryid;
		$term = get_name_by_tax_id($categoryid, $get_array_id_taxonomy);
		if ($term) {
			$link = get_term_link($term);
			$khoi_template = get_field('khoi_template', $term);
		}
	}
?>
	<div
		class="content-bao-cao-phan-tich relative rounded-[10px] bg-white shadow-base-sm lg:min-h-[196px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-6 py-4' : 'p-4' ?> flex flex-col transition-all duration-500 hover:shadow-[2px_3px_11px_1px_#ccc]">
		<div
			class="flex items-start justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : 'mb-[12px]' ?>">
			<?php

			if (isset($news->recommendation)) {
				$status = $news->recommendation;
				$check_status = get_color_by_number_bsc($status);
				$title_status = $check_status['title_status'];
				$text_status = $check_status['text_status'];
				$background_status = $check_status['background_status'];
			}
			?>
			<?php if ($khoi_template == 'price') { ?>
				<div class="flex items-center gap-4 flex-1">
					<?php if ($news->symbols) { ?>
						<a href="<?php echo slug_co_phieu($news->symbols) ?>"
							class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold max-w-[50%]">
							<?php echo $news->symbols ?>
						</a>
					<?php } ?>
					<div class="flex flex-col font-Helvetica text-xs">
						<?php if ($news->pricerecommendation) { ?>
							<p>
								<?php _e('Giá mục tiêu', 'bsc') ?>
							</p>
						<?php } ?>
						<p class="font-medium">
							<?php if ($news->pricerecommendation) { ?>
								<?php
								echo bsc_number_format($news->pricerecommendation);
								?>
							<?php } ?>
							<?php if ($news->upside) { ?>
								<span class="text-[#30D158]">
									(<?php echo $news->upside ?>)
								</span>
							<?php } ?>
						</p>
					</div>
				</div>
			<?php } else { ?>
				<a href="<?php echo $link ?>"
					class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold max-w-[60%]">
					<?php echo htmlspecialchars($news->categoryname) ?>
				</a>
			<?php } ?>
			<div class="space-y-1.5 text-right">
				<?php if (isset($news->recommendation)) {
				} else {
					$title_status = __('Không đánh giá', 'bsc');
					$background_status = '#ffebbe';
					$text_status = '#f5a800';
				} ?>
				<span class="inline-block rounded-[45px] px-4 py-0.5 text-[12px] font-semibold whitespace-nowrap"
					style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
					<?php echo $title_status ?>
				</span>
				<?php
				$date = new DateTime($news->datetimepublished);
				?>
				<p class="text-paragraph text-xs font-Helvetica"> <?php echo $date->format('d/m/Y'); ?></p>
			</div>
		</div>
		<h3
			class="font-bold transition-all duration-500 hover:text-primary-300 font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : '' ?>">
			<a href="<?php echo slug_report(htmlspecialchars($news->id), htmlspecialchars($news->title)); ?>"
				class="line-clamp-2">
				<?php echo htmlspecialchars($news->title) ?>
			</a>
		</h3>
		<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
			<div class="flex items-center justify-between mt-auto">
				<p class="italic text-paragraph text-xs font-Helvetica ">
					<span
						class="content-bao-cao-phan-tich_download_count"><?php echo htmlspecialchars($news->downloads) ?></span>
					<?php _e('Lượt tải xuống', 'bsc') ?>
				</p>
				<?php if ($news->reporturl) {
					$check_log = false;
					$url_download = slug_file_report(htmlspecialchars($news->id));
					$viewerpermission = $news->viewerpermission;
					if ($viewerpermission == 'USER_BSC') {
						$datetimeopen = $news->datetimeopen;
						if (is_null($datetimeopen) || strtotime($datetimeopen) > time()) {
							if (bsc_is_user_logged_out()) {
								$check_log = true;
								$url_download = bsc_url_sso($url_download);
							}
						}
					}
				?>
					<?php if ($check_log) {
						$current_url = home_url($_SERVER['REQUEST_URI']);
					?>
						<button type="button"
							data-url="<?php echo $url_download ?>" data-current="<?php echo $current_url ?>"
							class="bsc_login_checker inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
						<?php
					} else { ?>
							<a href="<?php echo $url_download ?>" target="_blank"
								class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105 bsc_up-download"
								data-id="<?php echo $news->id; ?>">
							<?php } ?>
							<?php _e('Tải xuống', 'bsc') ?>
							<?php echo svg('download', '20', '20') ?>
							<?php if ($check_log) {
							?>
						</button>
					<?php
							} else {
					?>
						</a>
					<?php } ?>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
<?php } ?>