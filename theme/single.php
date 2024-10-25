<?php
if ($args['data']) {
	$news = $args['data'];
	$title = $news->title;
	$body = $news->body;
	$postdate = $news->postdate;
	$groupid = $news->groupid;
	$categories = get_terms(array(
		'taxonomy' => 'category',
		'hide_empty' => false,
		'meta_query' => array(
			array(
				'key' => 'api_id_danh_muc', // tên meta field
				'value' => $groupid, // giá trị cần tìm
				'compare' => '='
			)
		)
	));

	// Kiểm tra nếu tìm thấy category
	if (!is_wp_error($categories) && !empty($categories)) {
		$tax = $categories[0]; // Trả về category đầu tiên khớp với meta field
	} else {
		$post_id = get_the_ID();
		$taxonomy = get_the_terms($post->ID, 'category');
		$tax = $taxonomy[0];
	}
	$tax_name = $tax->name;
	$tax_id = $tax->term_id;
} else {
	wp_redirect(home_url('/404'), 301);
	exit;
}
get_header();
?>
<main>
	<?php get_template_part('components/page-banner', null, array(
		'title' => $tax_name
	)) ?>
	<section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-16 pt-10 pb-10">
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
						if (!empty($terms) && !is_wp_error($terms)) :
						?>
							<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">
								<?php foreach ($terms as $term) :
									$active_class = ($tax_id == $term->term_id) ? 'active' : '';
								?>
									<li class="<?php echo esc_attr($active_class); ?>">
										<a href="<?php echo get_term_link($term); ?>"
											class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
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
													$child_active_class = ($tax_id == $child_term->term_id) ? 'active' : '';
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
						if ($tax) {
							$hinh_anh_sidebar = get_field('hinh_anh_sidebar', $tax);
							if ($hinh_anh_sidebar) { ?>
								<div class="mt-12">
									<a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
										<?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
									</a>
								</div>
						<?php };
						} ?>
					</div>
				</div>
				<div class="md:col-span-3 col-span-full">
					<h1 class="font-bold lg:text-4xl text-2xl mb-6 !leading-snug">
						<?php echo $title ?>
					</h1>
					<div class="flex items-center text-xs mb-8 gap-[12px] font-Helvetica">
						<?php echo svg('date') ?>
						<span><?php echo $postdate ?></span>-
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
						<?php echo $body ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	if ($args['data']) {
		$array_data = array(
			"maxitem" => "3",
			"lang" => pll_current_language(),
			"groupid" => $groupid,
			'index' => 1
		);
		$response = callApi('http://10.21.170.17:86/GetNews?' . http_build_query($array_data));
		if ($response->s == "ok" && !empty($response->d)) {
	?>
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
		<?php
		}
	} ?>
</main>
<?php
get_footer();
