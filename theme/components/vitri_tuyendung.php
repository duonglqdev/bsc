<section class="2xl:my-[100px] my-10 vitri_tuyendung" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<?php if (get_sub_field('title')) { ?>
			<h2 class="heading-title 2xl:mb-10 mb-8">
				<?php the_sub_field('title') ?>
			</h2>
		<?php } ?>
		<form id="search_job" class="grid lg:grid-cols-5 grid-cols-4 gap-5">
			<?php
			$nghiep_vus = get_terms(array(
				'taxonomy' => 'nghiep-vu',
				'hide_empty' => false,
				'parent' => 0,
			));
			if (! empty($nghiep_vus) && ! is_wp_error($nghiep_vus)) :
			?>
				<div class="col-span-2">
					<select id="nghiep_vu"
						class="h-[50px] rounded-[10px] border border-[#C3C3C3] w-full focus:outline-0 focus:border-primary-300 transition-all duration-500n px-6 select_custom-2 text-gray-100">
						<option value=""><?php _e('Nghiệp vụ', 'bsc') ?></option>
						<?php foreach ($nghiep_vus as $nghiep_vu) :
						?>
							<option value="<?php echo $nghiep_vu->term_id ?>">
								<?php echo esc_html($nghiep_vu->name); ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
			<?php endif; ?>
			<?php
			$noi_lam_viecs = get_terms(array(
				'taxonomy' => 'noi-lam-viec',
				'hide_empty' => false,
				'parent' => 0,
			));
			if (! empty($noi_lam_viecs) && ! is_wp_error($noi_lam_viecs)) :
			?>
				<div class="col-span-2">
					<select id="noi_lam_viec"
						class="h-[50px] rounded-[10px] border border-[#C3C3C3] w-full focus:outline-0 focus:border-primary-300 transition-all duration-500n px-6 select_custom-2 text-gray-100">
						<option value=""><?php _e('Nơi làm việc', 'bsc') ?></option>
						<?php foreach ($noi_lam_viecs as $noi_lam_viec) :
						?>
							<option value="<?php echo $noi_lam_viec->term_id ?>">
								<?php echo esc_html($noi_lam_viec->name); ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
			<?php endif; ?>
			<div class="lg:col-span-1 col-span-full">
				<button type="button" id="tuyen-dung-tim-kiem"
					class="btn-base-yellow w-full h-full rounded-xl">
					<span class="block relative z-10">
						<?php _e('Tìm kiếm', 'bsc') ?>
					</span>
				</button>
			</div>
		</form>
		<?php
		$args = array(
			'post_type' => 'tuyen-dung',
			'post_status' => 'publish',
			'posts_per_page' => 6,
			'paged' => 1,
			'orderby' => 'meta_value_num',
			'meta_key' => 'deadline',
			'order' => 'DESC',
		);
		$filter_job = new WP_Query($args);
		if ($filter_job->have_posts()) : ?>
			<div class="mt-[51px]" id="vi-tri-tuyen-dung" data-nghiep-vu="" data-noi-lam-viec=""
				data-paged="1">
				<?php
				while ($filter_job->have_posts()) :
					$filter_job->the_post();
					get_template_part('template-parts/content', get_post_type());
				endwhile;
				?>
				<div class="bsc-pagination mt-12 flex justify-center">
					<?php bsc_pagination_ajax($filter_job, 1) ?>
				</div>
			</div>
			<div id="tuyen-dung-loading" class="hidden">
				<div role="status">
					<svg aria-hidden="true"
						class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
						viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
							fill="currentColor" />
						<path
							d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
							fill="currentFill" />
					</svg>
					<span class="sr-only">Loading...</span>
				</div>
			</div>
		<?php endif;
		wp_reset_postdata(); ?>

	</div>
</section>
<?php wp_reset_postdata(); ?>