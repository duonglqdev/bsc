<?php if (isset($args['total_page']) && $args['total_page'] > 1) : ?>
	<div class="bsc-pagination <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-12' : 'mt-8' ?>">
		<nav class="flex items-center gap-8 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'justify-center' ?>">
			<?php if (isset($args['get']) && $args['get'] == 'api') {
			?>
				<?php bsc_pagination_api($args['total_page'], $args['url']) ?>
				<?php if (isset($args['post_per_page']) && $args['post_per_page'] == 'hide') {
				} else { ?>
					<?php
					$default_posts_per_page = (int) get_option('posts_per_page');
					$posts_to_show          = array($default_posts_per_page, $default_posts_per_page * 2, $default_posts_per_page * 3, $default_posts_per_page * 4);
					?>
					<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
						<select class="posts-per-page border border-[#898A8D] text-xs rounded focus:outline-0 focus:border-primary-300 px-3 inline-block h-9 !py-0 font-medium !pr-8">
							<?php
							$endpoint = '';
							if (isset($_GET['key'])) {
								$endpoint .= '&key=' . bsc_format_string($_GET['key'], 'all');
							}
							if (isset($_GET['mck'])) {
								$endpoint .= '&mck=' . bsc_format_string($_GET['mck']);
							}
							if (isset($_GET['years'])) {
								$endpoint .= '&years=' . bsc_format_string($_GET['years'], 'number');
							}
							if (isset($_GET['s'])) {
								$endpoint .= '&s=' . bsc_format_string($_GET['s'], 'all');
							}
							if (isset($_GET['type_search'])) {
								$endpoint .= '&type_search=' . bsc_format_string($_GET['type_search'], 'all');
							}
							foreach ($posts_to_show as $number) :
								$selected = isset($_GET['posts_to_show']) && (int) $_GET['posts_to_show'] === $number ? 'selected' : '';
							?>
								<option value="<?php echo $args['url'] . '?posts_to_show=' . $number . $endpoint ?>" <?php echo $selected; ?>>
									<?php echo $number; ?>/<?php _e('Trang', 'bsc'); ?>
								</option>
							<?php endforeach; ?>
						</select>
						<script>
							forcePageReloadOnSelectChange();

							function forcePageReloadOnSelectChange() {
								const selects = document.querySelectorAll("select.posts-per-page");
								for (const select of selects) {
									select.addEventListener("change", function() {
										location.href = this.value;
									});
								}
							}
						</script>
					<?php } ?>
				<?php } ?>
			<?php
			} elseif (isset($args['get']) && $args['get'] == 'ajax_api') {
				$total_page = (isset($args['total_page']) && is_numeric($args['total_page']) && $args['total_page'] > 0) ? $args['total_page'] : 1;
				$paged = (isset($args['paged']) && is_numeric($args['paged']) && $args['paged'] > 0) ? $args['paged'] : 1;
			?>
				<?php bsc_pagination_api_ajax($total_page, $paged) ?>
				<?php if (isset($args['post_per_page']) && $args['post_per_page'] == 'hide') {
				} else { ?>
					<?php
					$default_posts_per_page = (int) get_option('posts_per_page');
					$posts_to_show          = array($default_posts_per_page, $default_posts_per_page * 2, $default_posts_per_page * 3, $default_posts_per_page * 4);
					?>
					<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
						<select class="posts-per-page border border-[#898A8D] text-xs rounded focus:outline-0 focus:border-primary-300 px-3 inline-block h-9 !py-0 font-medium !pr-8">
							<?php
							$endpoint = '';
							if (isset($_GET['key'])) {
								$endpoint .= '&key=' . bsc_format_string($_GET['key'], 'all');
							}
							if (isset($_GET['years'])) {
								$endpoint .= '&years=' . bsc_format_string($_GET['years'], 'number');
							}
							if (isset($_GET['s'])) {
								$endpoint .= '&s=' . bsc_format_string($_GET['s'], 'all');
							}
							if (isset($_GET['type_search'])) {
								$endpoint .= '&type_search=' . bsc_format_string($_GET['type_search'], 'all');
							}
							foreach ($posts_to_show as $number) :
								$selected = isset($_GET['posts_to_show']) && (int) $_GET['posts_to_show'] === $number ? 'selected' : '';
							?>
								<option value="<?php echo $args['url'] . '?posts_to_show=' . $number . $endpoint ?>" <?php echo $selected; ?>>
									<?php echo $number; ?>/<?php _e('Trang', 'bsc'); ?>
								</option>
							<?php endforeach; ?>
						</select>
						<script>
							forcePageReloadOnSelectChange();

							function forcePageReloadOnSelectChange() {
								const selects = document.querySelectorAll("select.posts-per-page");
								for (const select of selects) {
									select.addEventListener("change", function() {
										location.href = this.value;
									});
								}
							}
						</script>

					<?php } ?>
				<?php } ?>
			<?php
			} elseif (isset($args['get']) && $args['get'] == 'ajax') {
				$query_array = $args['query'];
				$paged = (isset($args['paged']) && is_numeric($args['paged']) && $args['paged'] > 0) ? $args['paged'] : 1;
				$posts_to_show_check = (isset($args['posts_to_show']) && is_numeric($args['posts_to_show']) && $args['posts_to_show'] > 0) ? $args['posts_to_show'] : 12;
			?>
				<?php bsc_pagination_ajax($query_array, $paged) ?>
				<?php
				$default_posts_per_page = (int) get_option('posts_per_page');
				$posts_to_show          = array($default_posts_per_page, $default_posts_per_page * 2, $default_posts_per_page * 3, $default_posts_per_page * 4);
				?>
				<select id="posts_per_page" class="posts-per-page border border-[#898A8D] text-xs rounded focus:outline-0 focus:border-primary-300 px-3 inline-block h-9 !py-0 font-medium !pr-8">
					<?php
					foreach ($posts_to_show as $number) :
						if ($posts_to_show_check == $number) {
							$selected  = 'selected';
						} else {
							$selected = '';
						}
					?>
						<option value="<?php echo $number ?>" <?php echo $selected; ?>>
							<?php echo $number; ?>/<?php _e('Trang', 'bsc'); ?>
						</option>
					<?php endforeach; ?>
				</select>
			<?php
			} else { ?>
				<?php
				if (isset($args['query'])) {
					bsc_pagination($args['query']);
				} else {
					bsc_pagination();
				}
				?>
				<?php
				$default_posts_per_page = (int) get_option('posts_per_page');
				$posts_to_show          = array($default_posts_per_page, $default_posts_per_page * 2, $default_posts_per_page * 3, $default_posts_per_page * 4);
				?>
				<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
					<select class="posts-per-page border border-[#898A8D] text-xs rounded focus:outline-0 focus:border-primary-300 px-3 inline-block h-9 !py-0 font-medium !pr-8">
						<?php
						foreach ($posts_to_show as $number) :
							$selected = isset($_GET['posts_to_show']) && (int) $_GET['posts_to_show'] === $number ? 'selected' : '';
						?>
							<option value="<?php echo esc_url(add_query_arg('posts_to_show', $number)); ?>" <?php echo $selected; ?>>
								<?php echo $number; ?>/<?php _e('Trang', 'bsc'); ?>
							</option>
						<?php endforeach; ?>
					</select>
					<script>
						forcePageReloadOnSelectChange();

						function forcePageReloadOnSelectChange() {
							const selects = document.querySelectorAll("select.posts-per-page");
							for (const select of selects) {
								select.addEventListener("change", function() {
									location.href = this.value;
								});
							}
						}
					</script>

				<?php } ?>
			<?php } ?>
		</nav>
	</div>
<?php endif; ?>