<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-12 xl:mb-[100px] mb-20' : 'my-[50px]' ?> stgd_video_introduce"
	<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-[70px]' : '' ?>">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-80 max-w-[35%] shrink-0' : 'relative' ?>">
				<?php echo get_sidebar( 'stgd' ) ?>
			</div>
			<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'mt-6' ?>">
				<?php
				if ( isset( $_GET['posts_to_show'] ) && $_GET['posts_to_show'] != '' ) {
					$post_per_page = bsc_format_string( $_GET['posts_to_show'], 'number' );
				} else {
					$post_per_page = get_option( 'posts_per_page' );
				}
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$query = new WP_Query( array(
					'post_type' => 'video-huong-dan',
					'post_status' => 'publish',
					'posts_per_page' => $post_per_page,
					'paged' => $paged
				) );
				if ( $query->have_posts() ) {
					?>
					<div
						class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-2 gap-5 gap-x-6 gap-y-8' : 'gap-y-4' ?>">
						<?php
						while ( $query->have_posts() ) :
							$query->the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
						?>
					</div>
					<?php get_template_part( 'components/pagination', '', array(
						'query' => $query
					) ) ?>
				<?php } else {
					get_template_part( 'template-parts/content', 'none' );
				} ?>
			</div>
		</div>
	</div>
</section>