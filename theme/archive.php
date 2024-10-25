<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsc
 */

get_header();
?>

<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-[130px] pt-10 pb-10">
		<div class="container">
			<div class="grid md:grid-cols-4 2xl:gap-[70px] gap-12">
				<div class="md:col-span-1 col-span-full">
					<div class="sticky top-5 z-10">
						<?php
						$terms = get_terms(array(
							'taxonomy' => 'category',
							'hide_empty' => false,
							'parent' => 0,
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
				<?php
				$get_performance_data = array(
					'lang' => pll_current_language(),
					'groupid' => '3',
				);
				$response = callApi('http://10.21.170.17:86/GetNews?' . http_build_query($get_performance_data));
				if ($response->s == "ok" && !empty($response->d)) {
				?>
					<div class="md:col-span-3 col-span-full">
						<div class="list__news">
							<div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
								<?php
								foreach ($response->d as $news) {
								?>
									<div class="post_item font-Helvetica">
										<a href=""
											class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
											<img src="<?php echo $news->imagethumbnail ?>"
												alt=""
												class="absolute w-full h-full inset-0 object-cover group-hover:scale-110 transition-all duration-500">
										</a>
										<?php
										$date = $news->postdate;
										$date_parts = explode('T', $date);
										?>
										<div class="date flex items-center gap-x-[12px] mb-2 text-xs">
											<?php echo svg('date') ?>
											<span>
												<?php echo $date_parts[0] ?>
											</span>
											<span>
												<?php echo $date_parts[1] ?>
											</span>
										</div>
										<a href=""
											class="block font-bold line-clamp-2 mb-3 hover:text-primary-300 transition-all duration-500">
											<?php echo htmlspecialchars($news->title) ?>
										</a>
										<div class="line-clamp-3 text-paragraph mb-4">
											<?php echo htmlspecialchars($news->description) ?>
										</div>
										<a href=""
											class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs">
											<?php _e('Xem chi tiết', 'bsc') ?>
											<?php echo svg('arrow-btn', '12', '12') ?>
										</a>
									</div>
								<?php
								}
								?>
							</div>
						</div>
						<div class="mt-12">
							<?php get_template_part('components/pagination') ?>
						</div>
					</div>
				<?php } else {
					get_template_part('template-parts/content/content', 'none');
				} ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
