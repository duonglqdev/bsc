<?php
get_header();
?>
<main>
	<?php get_template_part('components/page-banner') ?>
	<?php get_template_part('components/menu_navigation', '', array(
		'data' => 'stgd',
	)) ?>
	<h1 class="hidden"><?php the_title() ?></h1>
	<section class="mt-12 xl:mb-[100px] mb-20">
		<div class="container">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-[70px] gap-10' : '' ?>">
				<div
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-80 max-w-[35%] shrink-0' : 'relative' ?>">
					<?php echo get_sidebar('stgd') ?>
				</div>
				<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'mt-6' ?>">
					<?php
					$page_id = get_the_ID();
					if (have_rows('home_components_stgd', $page_id)) {
						while (have_rows('home_components_stgd', $page_id)) :
							the_row();
							$module_name = get_row_layout();
							switch ($module_name):
								case $module_name:
									get_template_part('components-stgd/' . $module_name);
							endswitch;
						endwhile;
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
	$time_cache = 300;
	$chuong_trinh_khuyen_mai_id = get_field('cdctkm1_id_danh_muc', 'option');
	$array_data = array(
		"maxitem" => "3",
		"lang" => pll_current_language(),
		"groupid" => $chuong_trinh_khuyen_mai_id,
		'index' => 1
	);
	$response = get_data_with_cache('GetNews', $array_data, $time_cache);
	if ($response) {
	?>
		<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'mt-[50px] mb-20' ?>">
			<div class="container">
				<div
					class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
					<h2 class="heading-title"><?php _e('Ưu đãi từ BSC', 'bsc') ?></h2>
					<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
						<a href="<?php echo check_link(get_field('cdctkm1_page', 'option')) ?><?php if ($class = get_field('cdctkm1_pageid_class', 'option')) :
																									echo '#' . $class;
																								endif; ?>"
							class="inline-block px-5 py-2 btn-base-yellow">
							<span class="inline-flex items-center gap-2 relative z-10">
								<?php _e('Xem tất cả', 'bsc') ?>
								<?php echo svg('arrow-btn-2') ?>
							</span>
						</a>

					<?php } ?>
				</div>
				<div
					class="lg:grid lg:grid-cols-3 lg:gap-[21px] fli-dots-blue dot-30 flickity-watch lg:mx-0 -mx-3"
					data-flickity='{ 
						"draggable": true,
						"wrapAround": true,
						"imagesLoaded": true,
						"prevNextButtons": false, 
						"pageDots": true, 
						"cellAlign": "left",
						"contain": true, 
						"autoPlay": 3000,
						"watchCSS": true 
					}'>
					<?php
					foreach ($response->d as $news) {
						?>
						<div class="lg:w-full md:w-1/2 w-full lg:px-0 px-3 block_slider-item">
							<?php
							get_template_part('template-parts/content', 'khuyen-mai', array(
								'data' => $news,
							));
							?>
						</div>
						<?php
					}
					?>
				</div>

			</div>
		</section>
	<?php } ?>
</main>
<?php
get_footer();
