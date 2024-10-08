<?php
get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-16 pt-10 pb-10">
		<div class="container">
			<div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
				<div class="md:col-span-1 col-span-full">
					<div class="sticky top-5 z-10">
						<?php
						$terms = get_terms(array(
							'taxonomy' => 'category',
							'hide_empty' => false,
							'parent' => 0,
						));
						if (!empty($terms) && !is_wp_error($terms)) :
						?>
							<ul class="shadow-base py-6 pr-4 rounded-lg bg-white">
								<?php foreach ($terms as $term) :
									$active_class = (is_tax('category', $term->term_id)) ? 'active' : '';
								?>
									<li class="<?php echo esc_attr($active_class); ?>">
										<a href="<?php echo get_term_link($term); ?>"
											class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">
											<?php echo esc_html($term->name); ?>
										</a>
										<?php
										$child_terms = get_terms(array(
											'taxonomy' => 'category',
											'parent' => $term->term_id,
											'hide_empty' => false,
										));

										if (!empty($child_terms) && !is_wp_error($child_terms)) : ?>
											<ul class="pl-5 hidden sub-menu w-full bg-white">
												<?php foreach ($child_terms as $child_term) :
													$child_active_class = (is_tax('category', $child_term->term_id)) ? 'active' : '';
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
						<?php get_sidebar() ?>
					</div>
				</div>
				<div class="md:col-span-3 col-span-full">
					<h1 class="font-bold lg:text-4xl text-2xl mb-6 !leading-snug">
						<?php the_title() ?>
					</h1>
					<div class="flex items-center text-xs mb-8 gap-[12px] font-Helvetica">
						<?php echo svg('date') ?>
						<span><?php echo get_the_date() ?></span>-
						<span class="text-primary-300"><?php echo get_the_author() ?></span>
						<div class="share flex items-center gap-[12px] ml-12">
							<strong>
								<?php _e('Share:', 'bsc') ?>
							</strong>
							<ul class="flex items-center gap-3">
								<li>
									<a href="" target="_blank">
										<?php echo svg('ins') ?>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank">
										<?php echo svg('linkedin') ?>
									</a>
								</li>
								<li>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
										<?php echo svg('fb') ?>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="the_content font-Helvetica">
						<?php the_content() ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	$custom_taxterms = wp_get_object_terms($post->ID, 'country', array('fields' => 'ids'));
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'orderby' => 'rand',
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $custom_taxterms
			)
		),
		'post__not_in' => array($post->ID),
	);
	$related_items = new WP_Query($args);
	if ($related_items->have_posts()) : ?>
		<section class="lg:pt-16 lg:pb-[106px] pt-10 pb-10">
			<div class="container">
				<h2 class="heading-title mb-6 normal-case">
					<?php _e('Bài viết liên quan', 'bsc') ?>
				</h2>
				<div
					class="grid md:grid-cols-3 grid-cols-1 gap-x-6 gap-y-8">
					<?php
					while ($related_items->have_posts()) :
						$related_items->the_post();
						get_template_part('template-parts/content', get_post_type());
					endwhile;
					?>
				</div>
			</div>
		</section>
	<?php endif;
	wp_reset_postdata(); ?>
</main>
<?php
get_footer();
