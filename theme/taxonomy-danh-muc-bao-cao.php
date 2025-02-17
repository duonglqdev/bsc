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
	<section
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'bg-gradient-blue-to-bottom-50 pt-12 pb-16' : 'bg-gradient-blue-to-bottom-150 py-[50px]' ?>">
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex 2xl:gap-[70px] lg:gap-10 gap-8' : '' ?>">
				<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
					<div class="w-80 max-w-[35%] shrink-0">
						<div class="sticky top-5 z-10">
							<?php
							$excluded_category_id = get_array_id_taxonomy_hide('danh-muc-bao-cao');
							$terms = get_terms(array(
								'taxonomy' => 'danh-muc-bao-cao',
								'hide_empty' => false,
								'parent' => 0,
								'exclude' => $excluded_category_id,
							));
							if (! empty($terms) && ! is_wp_error($terms)) :
							?>
								<ul class="shadow-base py-6 lg:pr-4 pr-3 rounded-lg bg-white sidebar-report space-y-2">
									<?php foreach ($terms as $term) :
										$active_class = (is_tax('danh-muc-bao-cao', $term->term_id)) ? 'active' : '';
									?>
										<li class="<?php echo esc_attr($active_class); ?>">
											<a href="<?php echo get_term_link($term); ?>"
												class="flex items-center lg:gap-4 gap-3 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white relative py-[12px] lg:px-5 px-3 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
												<?php echo esc_html($term->name); ?>
											</a>
											<?php
											$child_terms = get_terms(array(
												'taxonomy' => 'danh-muc-bao-cao',
												'parent' => $term->term_id,
												'hide_empty' => false,
												'exclude' => $excluded_category_id,
											));

											if (! empty($child_terms) && ! is_wp_error($child_terms)) : ?>
												<ul class="pl-5 hidden sub-menu w-full bg-white">
													<?php foreach ($child_terms as $child_term) :
														$child_active_class = (is_tax('danh-muc-bao-cao', $child_term->term_id)) ? 'active' : '';
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
									<a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>" target="_blank">
										<?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex-1':'relative' ?>">
					<?php if (get_field('type_danh_muc', get_queried_object()) == 'avatar') { ?>
						<?php
						$time_cache = get_field('cdqhcd2_time_cache', 'option') ?: 300;
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
						if ($response) :
							if ($response->totalrecord) {
								$total_post = $response->totalrecord;
							} else {
								$total_post = $post_per_page;
							}
							$total_page = ceil($total_post / $post_per_page);
						?>
							<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
								<div
									class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next cat_title">
									<?php
									// Lấy thông tin danh mục cha
									$term = get_queried_object();
									if ($term && isset($term->taxonomy) && isset($term->parent) && $term->parent != 0) {
										$parent_term = get_term($term->parent, $term->taxonomy);
										echo esc_html($parent_term->name);
									} else {
										echo esc_html($term->name);
									}
									?>
									<?php echo svg('down-white', '20') ?>
								</div>
								<?php
								$excluded_category_id = get_array_id_taxonomy_hide('danh-muc-bao-cao');
								$terms = get_terms(array(
									'taxonomy' => 'danh-muc-bao-cao',
									'hide_empty' => false,
									'parent' => 0,
									'exclude' => $excluded_category_id,
								));
								if (! empty($terms) && ! is_wp_error($terms)) :
								?>
									<ul class="overflow-y-auto absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 lg:bg-[#F3FBFE] bg-white p-2 prose-a:block rounded text-xs mt-2">
										<?php foreach ($terms as $term) :
											$active_class = (is_tax('danh-muc-bao-cao', $term->term_id)) ? 'active' : '';
										?>
											<li>
												<a href="<?php echo get_term_link($term); ?>"
													class="<?php echo esc_attr($active_class); ?> text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">
													<?php echo esc_html($term->name); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<?php
								$parent_term_id = get_queried_object_id();
								$child_terms = get_terms(array(
									'taxonomy' => 'danh-muc-bao-cao',
									'parent' => $parent_term_id,
									'hide_empty' => false,
								));

								if (! empty($child_terms) && ! is_wp_error($child_terms)) : ?>
									<ul class="flex overflow-x-auto mt-4 gap-1.5 category-child">
										<?php foreach ($child_terms as $child_term) :
											$child_active_class = (is_tax('danh-muc-bao-cao', $child_term->term_id)) ? 'active' : '';
										?>
											<li>
												<a href="<?php echo get_term_link($child_term); ?>"
													class="<?php echo esc_attr($child_active_class); ?> [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
													<?php echo esc_html($child_term->name); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>

							<?php } ?>
							

							<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-8' : 'mt-8'; ?>">
								<div
									class="grid <?php
												echo ! wp_is_mobile() && ! bsc_is_mobile()
													? 'lg:grid-cols-4 grid-cols-2 gap-5'
													: 'grid-cols-2 gap-y-5 gap-x-4'; ?>">
									<?php
									foreach ($response->d as $news) {
										get_template_part('template-parts/content_thumbnail-quan-he-co-dong', null, array(
											'data' => $news,
										));
									}
									?>
								</div>
								
							</div>


							<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
								<div class="mt-12">
									<?php get_template_part('components/pagination', '', array(
										'get' => 'api',
										'total_page' => $total_page,
										'url' => get_term_link(get_queried_object_id()),
									)) ?>
								</div>
							<?php } ?>
						<?php
						else :
							get_template_part('template-parts/content', 'none');

						endif;
						?>
					<?php } else {
					?>
						<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
							<div class="toggle-form mb-[12px] inline-block">
								<div class="">
									<p class="inline-flex items-baseline gap-2 font-medium">
										<?php _e('Thu gọn', 'bsc') ?>
										<?php echo svgClass('down', '', '', 'rotate-180') ?>
									</p>
								</div>
								<div class="hidden">
									<p class="inline-flex items-baseline gap-2 font-medium">
										<?php _e('Mở rộng', 'bsc') ?>
										<?php echo svg('down') ?>
									</p>
								</div>
							</div>
						<?php } ?>
						<form method="get" action="<?php echo get_term_link(get_queried_object()); ?>">
							<div
								class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex-wrap gap-5 mb-12' : 'mb-6 flex-wrap justify-between' ?>">
								<div
									class="max-w-full flex items-center  bg-white rounded-[10px] border border-[##EAEEF4] py-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-[518px] w-full lg:max-w-[40%] px-5 gap-4' : 'w-[48%] pl-3 gap-2 text-xs overflow-hidden px-1.5 h-[46px]' ?>">
									<div
										class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'w-4 h-4' ?> shrink-0">
										<?php echo svgClass('search', '',) ?>
									</div>
									<input type="text" name="key" value="<?php if (isset($_GET['key']))
																				echo bsc_format_string($_GET['key'], 'all') ?>" placeholder="<?php _e('Từ khóa tìm kiếm', 'bsc') ?>"
										class="placeholder:text-[#898A8D] border-none focus:border-none focus:outline-0 flex-1 p-[2px] focus:shadow-transparent focus:ring-transparent <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
								</div>
								<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
									<div class="w-[48%]">
										<div
											class="bg-white rounded-[10px] border border-[##EAEEF4] py-3 px-3 flex justify-between items-center">
											<label for="" class="font-medium text-[12px]"><?php _e('Thời gian:', 'bsc') ?></label>
											<select id="select_year" name="years"
												class="select_custom py-0 border-0 focus:ring-0 sm:text-xs text-[12px] pl-0 !pr-5 !bg-right">
												<option value=""><?php _e('Chọn năm', 'bsc'); ?></option>
												<?php
												$currentYear = date('Y');
												for ($year = $currentYear; $year >= 2015; $year--) :
												?>
													<option value="<?php echo esc_attr($year); ?>" <?php selected(isset($_GET['years']) && $_GET['years'] == $year); ?>>
														<?php echo esc_html($year); ?>
													</option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
								<?php } ?>
								<div class="flex gap-4 flex-1">
									<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
										<div
											class="2xl:w-[45%] w-1/2 bg-white rounded-[10px] border border-[##EAEEF4] px-5 py-3 flex gap-5 justify-between items-center">
											<label for="" class="font-bold"><?php _e('Năm:', 'bsc') ?></label>
											<select id="select_year" name="years"
												class="select_custom py-0 border-0 focus:ring-0">
												<option value=""><?php _e('Chọn năm', 'bsc'); ?></option>
												<?php
												$currentYear = date('Y');
												for ($year = $currentYear; $year >= 2015; $year--) :
												?>
													<option value="<?php echo esc_attr($year); ?>" <?php selected(isset($_GET['years']) && $_GET['years'] == $year); ?>>
														<?php echo esc_html($year); ?>
													</option>
												<?php endfor; ?>
											</select>
										</div>
									<?php } ?>
									<div
										class=" flex items-center gap-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:w-[55%] w-1/2' : 'w-full mt-[12px]' ?>">
										<button type="submit"
											class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] 2xl:px-6  2xl:py-3   relative transition-all duration-500 inline-block w-full h-full px-6 py-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'font-semibold rounded-xl' : 'flex-1 h-10 text-xs font-bold rounded-lg' ?>">
											<span class="block relative z-10"><?php _e('Tìm kiếm', 'bsc') ?></span>
										</button>
										<a href="<?php echo get_term_link(get_queried_object()) ?>"
											class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[50px] h-[50px]' : 'w-10 h-10' ?> rounded-lg flex items-center justify-center p-3  group shrink-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'bg-white' : 'bg-white' ?>">
											<?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
										</a>
									</div>
								</div>
							</div>
						</form>
						<?php
						$time_cache = get_field('cdqhcd2_time_cache', 'option') ?: 300;
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
							'index' => $index,
						);
						if (isset($_GET['key']) && ! empty($_GET['key'])) {
							$array_data['title'] = bsc_format_string($_GET['key'], 'all');
						}
						if (isset($_GET['years']) && ! empty($_GET['years'])) {
							$years = bsc_format_string($_GET['years'], 'number');
							$array_data['fromdate'] = '01/01/' . $years;
							$array_data['todate'] = '31/12/' . $years;
						}
						$response = get_data_with_cache('GetNews', $array_data, $time_cache);
						if ($response) :
							if ($response->totalrecord) {
								$total_post = $response->totalrecord;
							} else {
								$total_post = $post_per_page;
							}
							$total_page = ceil($total_post / $post_per_page);
						?>

							<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
								<div
									class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next cat_title">
									<?php
									// Lấy thông tin danh mục hiện tại
									$term = get_queried_object();
									if ($term && isset($term->taxonomy) && isset($term->parent) && $term->parent != 0) {
										$parent_term = get_term($term->parent, $term->taxonomy);
										echo esc_html($parent_term->name);
									} else {
										echo esc_html($term->name);
									}
									?>
									<?php echo svg('down-white', '20') ?>
								</div>
								<?php
								$excluded_category_id = get_array_id_taxonomy_hide('danh-muc-bao-cao');
								$terms = get_terms(array(
									'taxonomy' => 'danh-muc-bao-cao',
									'hide_empty' => false,
									'parent' => 0,
									'exclude' => $excluded_category_id,
								));
								if (!empty($terms) && !is_wp_error($terms)) :
								?>
									<ul class="overflow-y-auto absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 lg:bg-[#F3FBFE] bg-white p-2 prose-a:block rounded text-xs mt-2">
										<?php foreach ($terms as $term) :
											$active_class = (is_tax('danh-muc-bao-cao', $term->term_id)) ? 'active' : '';
										?>
											<li>
												<a href="<?php echo get_term_link($term); ?>"
													class="<?php echo esc_attr($active_class); ?> text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">
													<?php echo esc_html($term->name); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<?php
								// Kiểm tra nếu đang ở danh mục con
								$current_term = get_queried_object();
								$parent_term_id = $current_term && $current_term->parent != 0 ? $current_term->parent : $current_term->term_id;

								// Lấy danh sách danh mục con
								$child_terms = get_terms(array(
									'taxonomy' => 'danh-muc-bao-cao',
									'parent' => $parent_term_id,
									'hide_empty' => false,
								));

								if (!empty($child_terms) && !is_wp_error($child_terms)) : ?>
									<ul class="flex overflow-x-auto mt-4 gap-1.5 category-child">
										<?php foreach ($child_terms as $child_term) :
											$child_active_class = (is_tax('danh-muc-bao-cao', $child_term->term_id)) ? 'active' : '';
										?>
											<li>
												<a href="<?php echo get_term_link($child_term); ?>"
													class="<?php echo esc_attr($child_active_class); ?> [&:not(.active)]:text-black text-primary-300 font-bold transition-all relative py-2 px-[12px] bg-[#EBF4FA] block whitespace-nowrap rounded-md text-xs [&:not(.active)]:border-transparent border-primary-300 border">
													<?php echo esc_html($child_term->name); ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							<?php } ?>


							<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-8' : 'space-y-6 mt-6' ?>">
								<?php
								foreach ($response->d as $news) {
									get_template_part('template-parts/content-quan-he-co-dong', null, array(
										'data' => $news,
									));
								}
								?>
							</div>
							<?php if (isset($total_page) && $total_page > 1) : ?>
								<div class="mt-12">
									<?php get_template_part('components/pagination', '', array(
										'get' => 'api',
										'total_page' => $total_page,
										'url' => get_term_link(get_queried_object_id()),
									)) ?>
								</div>
							<?php endif; ?>
						<?php
						else :
							get_template_part('template-parts/content', 'none');

						endif;
						?>
					<?php
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
