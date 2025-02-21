<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsc
 */

get_header();
$time_cache = 300;
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section
		class="bg-gradient-blue-to-bottom-50  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-12 pb-[130px]' : 'py-[50px]' ?>">
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-[70px] gap-6' : '' ?>">
				<div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-80 lg:max-w-[35%] max-w-[30%] shrink-0' : '' ?>">
					<div class="lg:sticky lg:top-5 lg:z-10 relative">
						<?php
						$terms = get_terms(array(
							'taxonomy' => 'danh-muc-kien-thuc',
							'hide_empty' => false,
							'parent' => 0,
						));
						if (! empty($terms) && ! is_wp_error($terms)) :
						?>
							<?php if (! wp_is_mobile() && ! bsc_is_mobile()) : ?>
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
												'taxonomy' => 'danh-muc-kien-thuc',
												'parent' => $term->term_id,
												'hide_empty' => false,
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
							<?php else : ?>
								<div
									class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next">
									<?php single_term_title(); ?>
									<?php echo svg('down-white', '20') ?>
								</div>
								<ul
									class="overflow-y-auto absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 prose-a:block rounded text-xs">
									<?php
									$current_term_id = get_queried_object_id();
									foreach ($terms as $term) :
										$active_class = ($current_term_id === $term->term_id) ? 'active' : '';
									?>
										<li class="<?php echo esc_attr($active_class); ?>">
											<a href="<?php echo get_term_link($term); ?>"
												class="<?php echo esc_attr($active_class); ?> text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">
												<?php echo esc_html($term->name); ?>
											</a>
											<?php
											$child_terms = get_terms(array(
												'taxonomy' => 'danh-muc-kien-thuc',
												'parent' => $term->term_id,
												'hide_empty' => false,
											));

											if (! empty($child_terms) && ! is_wp_error($child_terms)) : ?>
												<ul class="flex overflow-x-auto mt-6 gap-1.5">
													<?php foreach ($child_terms as $child_term) :
														$child_active_class = ($current_term_id === $child_term->term_id) ? 'active' : '';
													?>
														<li>
															<a href="<?php echo get_term_link($child_term); ?>"
																class="<?php echo esc_attr($child_active_class); ?>[&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
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
						<?php endif; ?>

						<?php
						$hinh_anh_sidebar = get_field('hinh_anh_sidebar', get_queried_object());
						if ($hinh_anh_sidebar && ! wp_is_mobile() && ! bsc_is_mobile()) { ?>
							<div class="mt-12">
								<a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>" target="_blank">
									<?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'mt-6' ?>">
					<?php if (get_field('type_danh_muc', get_queried_object()) == 'default') { ?>
						<?php if (have_posts()) : ?>
							<div class="list__news">
								<div
									class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' grid-cols-2 gap-x-6 gap-y-8' : 'grid-cols-1 gap-y-4' ?>">
									<?php
									while (have_posts()) :
										the_post();
									?>
										<div
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex flex-col' : 'grid grid-cols-2 gap-4 items-center space-y-0' ?>">
											<?php
											get_template_part('template-parts/content', get_post_type());
											?>
										</div>
									<?php
									endwhile;
									?>
								</div>
							</div>
							<div class="mt-12">
								<?php get_template_part('components/pagination') ?>
							</div>
						<?php
						else :

							get_template_part('template-parts/content', 'none');

						endif;
						?>
						<?php } else {
						if (get_field('api_id_danh_muc', get_queried_object())) {
							$groupid = get_field('api_id_danh_muc', get_queried_object());
							if (isset($_GET['posts_to_show'])) {
								$post_per_page = bsc_format_string($_GET['posts_to_show'], 'number');
							} else {
								$post_per_page = get_option('posts_per_page');
							}
							if (isset($_GET['post_page'])) {
								$index = (bsc_format_string($_GET['post_page'], 'number') - 1) * $post_per_page + 1;
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
								<div
									class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' grid-cols-2 gap-x-6 gap-y-8' : 'grid-cols-1 gap-y-4' ?>">
									<?php
									foreach ($response->d as $news) {
										get_template_part('template-parts/content', '', array(
											'data' => $news,
										));
									}
									?>
								</div>
								<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-12' : 'mt-8' ?>">
									<?php get_template_part('components/pagination', '', array(
										'get' => 'api',
										'total_page' => $total_page,
										'url' => get_term_link(get_queried_object_id()),
									)) ?>
								</div>
					<?php
							}
						}
					} ?>
				</div>
			</div>
		</div>
	</section>
</main>
<h1 class="hidden">
	<?php echo get_the_archive_title() ?>
</h1>
<?php
get_footer();
