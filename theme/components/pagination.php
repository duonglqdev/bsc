<div class="bsc-pagination mt-12">
	<nav class="flex items-center gap-8">
		<?php if (isset($args['get']) && $args['get'] == 'api') {
		?>
			<?php bsc_pagination_api($args['total_page'], $args['url']) ?>
			<?php if (isset($args['post_per_page']) && $args['post_per_page'] == 'hide') {
			} else { ?>
				<?php
				$default_posts_per_page = (int) get_option('posts_per_page');
				$posts_to_show          = array($default_posts_per_page, $default_posts_per_page * 2, $default_posts_per_page * 3, $default_posts_per_page * 4);
				?>
				<select class="posts-per-page border border-[#898A8D] text-xs rounded focus:outline-0 focus:border-primary-300 px-3 inline-block h-9 !py-0 font-medium !pr-8">
					<?php
					$endpoint = '';
					if (isset($_GET['key'])) {
						$endpoint .= '&key=' . $_GET['key'];
					}
					if (isset($_GET['years'])) {
						$endpoint .= '&years=' . $_GET['years'];
					}
					if (isset($_GET['s'])) {
						$endpoint .= '&s=' . $_GET['s'];
					}
					if (isset($_GET['type_search'])) {
						$endpoint .= '&type_search=' . $_GET['type_search'];
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
		<?php
		} elseif (isset($args['get']) && $args['get'] == 'ajax_api') {
		?>
			<?php bsc_pagination_api_ajax($args['total_page'], $args['paged']) ?>
			<?php if (isset($args['post_per_page']) && $args['post_per_page'] == 'hide') {
			} else { ?>
				<?php
				$default_posts_per_page = (int) get_option('posts_per_page');
				$posts_to_show          = array($default_posts_per_page, $default_posts_per_page * 2, $default_posts_per_page * 3, $default_posts_per_page * 4);
				?>
				<select class="posts-per-page border border-[#898A8D] text-xs rounded focus:outline-0 focus:border-primary-300 px-3 inline-block h-9 !py-0 font-medium !pr-8">
					<?php
					$endpoint = '';
					if (isset($_GET['key'])) {
						$endpoint .= '&key=' . $_GET['key'];
					}
					if (isset($_GET['years'])) {
						$endpoint .= '&years=' . $_GET['years'];
					}
					if (isset($_GET['s'])) {
						$endpoint .= '&s=' . $_GET['s'];
					}
					if (isset($_GET['type_search'])) {
						$endpoint .= '&type_search=' . $_GET['type_search'];
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
		<?php
		} elseif (isset($args['get']) && $args['get'] == 'ajax') {
			$query_array = $args['query'];
			$paged = $args['paged'];
			$posts_to_show_check = $args['posts_to_show'];
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
	</nav>
</div>