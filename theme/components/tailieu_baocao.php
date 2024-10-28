<section class="lg:my-[100px] my-12 tailieu_baocao" <?php if (get_sub_field('id_class')) { ?>
	id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title')) { ?>
			<h2 class="heading-title mb-10">
				<?php the_sub_field('title') ?>
			</h2>
		<?php } ?>
		<?php
		$terms = get_terms(array(
			'taxonomy' => 'danh-muc-bao-cao',
			'hide_empty' => false,
			'parent' => 0,
		));
		if (! empty($terms) && ! is_wp_error($terms)) :
		?>
			<div class="grid md:grid-cols-4 2xl:gap-[70px] gap-12">
				<div class="md:col-span-1 col-span-full">
					<div class="sticky top-5 z-10">
						<ul
							class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report space-y-2 scroll_nav">
							<?php foreach ($terms as $term) :
								$active_class = (is_tax('danh-muc-bao-cao', $term->term_id)) ? 'active' : '';
							?>
								<li class="<?php echo esc_attr($active_class); ?>">
									<a href="#<?php echo $term->slug ?>"
										class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
										<?php echo esc_html($term->name); ?>
									</a>
									<?php
									$child_terms = get_terms(array(
										'taxonomy' => 'danh-muc-bao-cao',
										'parent' => $term->term_id,
										'hide_empty' => false,
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
					</div>
				</div>

				<div class="md:col-span-3 col-span-full">
					<?php
					foreach ($terms as $term) :
					?>
						<div id="<?php echo $term->slug ?>">
							<div class="flex justify-between items-center mb-[26px]">
								<h2 class="text-2xl font-bold"><?php echo esc_html($term->name); ?></h2>
								<a href="<?php echo get_term_link($term) ?>"
									class="px-5 py-3 btn-base-yellow">
									<span class="inline-flex items-center gap-3 relative z-10">
										<?php echo svg('arrow-btn', '16', '16') ?>
										<?php _e('Xem tất cả', 'bsc') ?>
									</span>
								</a>
							</div>
							<?php
							$groupid = get_field('api_id_danh_muc', $term);
							if ($groupid) {
								$get_performance_data = array(
									'lang' => pll_current_language(),
									'groupid' => $groupid,
									'maxitem' => '4'
								);
								$response = callApi('http://10.21.170.17:86/GetNews?' . http_build_query($get_performance_data));
								if ($response->s == "ok" && !empty($response->d)) { ?>
									<div class="mb-10 pb-10 space-y-6 border-b border-[#E1E1E1]">
										<?php if (get_field('type_danh_muc', $term) == 'avatar') { ?>
											<div class="grid grid-cols-4 gap-5">
												<?php
												foreach ($response->d as $news) {
													get_template_part('template-parts/content_thumbnail-quan-he-co-dong', null, array(
														'data' => $news,
													));
												}
												?>
											</div>
										<?php } else {
											foreach ($response->d as $news) {
												get_template_part('template-parts/content-quan-he-co-dong', null, array(
													'data' => $news,
												));
											}
										} ?>
									</div>
							<?php }
							} ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>