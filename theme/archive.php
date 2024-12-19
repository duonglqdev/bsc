<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsc
 */
if (get_field('api_id_danh_muc', get_queried_object())) {
	$groupid = get_field('api_id_danh_muc', get_queried_object());
} else {
	wp_redirect(home_url('/404'), 301);
	exit;
}
get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-[130px] pt-10 pb-10">
		<div class="container">
			<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'lg:flex gap-[70px]' : '' ?>">
				<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
					<div class="w-80 max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10">
							<?php
							$excluded_category_id = get_array_id_taxonomy_hide('category');
							$terms = get_terms(array(
								'taxonomy' => 'category',
								'hide_empty' => false,
								'parent' => 0,
								'exclude'    => $excluded_category_id,
							));
							if (! empty($terms) && ! is_wp_error($terms)) :
							?>
								<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">
									<?php
									$current_term_id = get_queried_object_id();
									foreach ($terms as $term) :
										$active_class = ($current_term_id === $term->term_id) ? 'active' : '';
									?>
										<li class="<?php echo esc_attr($active_class); ?>">
											<a href="<?php echo get_term_link($term); ?>"
												class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl leading-[1.45]">
												<?php echo esc_html($term->name); ?>
											</a>
											<?php
											$child_terms = get_terms(array(
												'taxonomy' => 'category',
												'parent' => $term->term_id,
												'hide_empty' => false,
												'exclude'    => $excluded_category_id,
											));

											if (! empty($child_terms) && ! is_wp_error($child_terms)) : ?>
												<ul class="pl-5 hidden sub-menu w-full bg-white">
													<?php foreach ($child_terms as $child_term) :
														$child_active_class = ($current_term_id === $child_term->term_id) ? 'active' : '';
													?>
														<li class="pl-5">
															<a href="<?php echo get_term_link($child_term); ?>"
																class="<?php echo esc_attr($child_active_class); ?> [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
																<?php echo esc_html($child_term->name); ?>
															</a>
														</li>
													<?php endforeach; ?>
												</ul>
											<?php endif; ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

							<?php
							$hinh_anh_sidebar = get_field('hinh_anh_sidebar', get_queried_object());
							if ($hinh_anh_sidebar) { ?>
								<div class="mt-12">
									<a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
										<?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<div class="flex-1">
					<?php
					if (isset($_GET['posts_to_show'])) {
						$post_per_page = $_GET['posts_to_show'];
					} else {
						$post_per_page = get_option('posts_per_page');
					}
					if (isset($_GET['post_page'])) {
						$index = ($_GET['post_page'] - 1) * $post_per_page + 1;
					} else {
						$index = 1;
					}
					$array_data = array(
						'lang' => pll_current_language(),
						'groupid' => $groupid,
						'maxitem' => $post_per_page,
						'index' => $index
					);
					$response = get_data_with_cache('GetNews', $array_data, $time_cache);
					if ($response) {
						if ($response->totalrecord) {
							$total_post = $response->totalrecord;
						} else {
							$total_post = $post_per_page;
						}
						$total_page = ceil($total_post / $post_per_page);
					?>
						<?php if (get_field('type_danh_muc', get_queried_object()) == 'avatar') { ?>
							<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
								<div
									class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between mb-6">
									<?php echo get_the_archive_title(); ?>
									<?php echo svg('down-white', '20', '20') ?>
								</div>
							<?php } ?>
							<div class="list__news">
								<div class="grid gap-x-6 gap-y-8 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'grid-cols-2' : 'md:grid-cols-2 grid-cols-1' ?>">
									<?php
									foreach ($response->d as $news) {
										get_template_part('template-parts/content', null, array(
											'data' => $news,
										));
									}
									?>
								</div>
							</div>
						<?php } else {
							$current_month = '';
							$current_year = '';
							echo '<div class="space-y-12">';
							foreach ($response->d as $news) {
								$post_date = strtotime($news->postdate);
								$month = date('m', $post_date);
								$year = date('Y', $post_date);

								if ($month != $current_month || $year != $current_year) {
									if ($current_month !== '' && $current_year !== '') {
										echo '</div>';
										echo '</div>';
									}

									$current_month = $month;
									$current_year = $year;

									echo '<div class="list_news-service">';
									echo '<h2 class="text-xl font-bold mb-6">' . sprintf(__('Tháng %1$s năm %2$s', 'bsc'), $month, $year) . '</h2>';
									echo '<div class="space-y-8">';
								}

								get_template_part('template-parts/content_nothumb', get_post_type(), array(
									'data' => $news,
								));
							}

							echo '</div>';
							echo '</div>';
							echo '</div>';
						} ?>
						<?php get_template_part('components/pagination', '', array(
							'get' => 'api',
							'total_page' => $total_page,
							'url' => get_term_link(get_queried_object_id()),
						)) ?>
					<?php } else {
						get_template_part('template-parts/content', 'none');
					} ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
