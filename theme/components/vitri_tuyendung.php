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
					<?php bsc_pagination($filter_job, 1) ?>
				</div>
				<script>
					jQuery(document).ready(function($) {
						function load_jobs(page = 1) {
							ajaxurl = '<?php echo admin_url("admin-ajax.php") ?>';
							var nghiep_vu = $('#nghiep_vu').val();
							var noi_lam_viec = $('#noi_lam_viec').val();
							$.ajax({
								url: ajaxurl,
								type: 'POST',
								data: {
									action: 'filter_jobs',
									nghiep_vu: nghiep_vu,
									noi_lam_viec: noi_lam_viec,
									paged: page,
									security: '<?php echo wp_create_nonce('load_jobs') ?>',
								},
								beforeSend: function() {
									$('#vi-tri-tuyen-dung').html('');
									$('#tuyen-dung-loading').removeClass('hidden');
								},
								success: function(response) {
									$('#tuyen-dung-loading').addClass('hidden');
									$('#vi-tri-tuyen-dung').html(response);
								}
							});
						}
						$('#vi-tri-tuyen-dung .bsc-pagination a').add('#tuyen-dung-tim-kiem').on('click', function(e) {
							e.preventDefault();
							var page = parseInt($('#vi-tri-tuyen-dung').attr('data-paged'));
							if ($(this).hasClass('item-paged')) {
								page = parseInt($(this).text());
							} else if ($(this).hasClass('prev')) {
								page = page - 1;
							} else if ($(this).hasClass('next')) {
								page = page + 1;
							} else if ($(this).is('button')) {
								page = 1;
							}
							$('#vi-tri-tuyen-dung').attr('data-paged', page);
							load_jobs(page);
						});
					});
				</script>
			</div>
			<div id="tuyen-dung-loading" class="hidden">
				<div role="status">
					<?php echo  svg('spinner') ?>
					<span class="sr-only">Loading...</span>
				</div>

			</div>
		<?php endif;
		wp_reset_postdata(); ?>

	</div>
</section>
<?php wp_reset_postdata(); ?>