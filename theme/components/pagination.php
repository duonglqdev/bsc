<div class="bsc-pagination mt-12">
	<nav class="flex items-center gap-8">
		<?php if (isset($args['get']) && $args['get'] == 'api') {
		?>
			<?php bsc_pagination_api() ?>
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
		<?php
		} else { ?>
			<?php bsc_pagination() ?>
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