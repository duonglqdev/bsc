<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-24 mb-10' : 'my-[50px]' ?> hoatdong_noibat" <?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) ) { ?>
			<h2 class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:mb-10 mb-8' : 'mb-6' ?>">
				<?php the_sub_field( 'title' ) ?>
			</h2>
		<?php } ?>
		<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex lg:gap-[70px] gap-10' : '' ?>">
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-80 lg:max-w-[35%] shrink-0' : '' ?>">
				<div class="sticky top-5 z-10">
					<?php
					$currentYear = date( 'Y' );
					$selectedYear = ! empty( $_GET['years'] ) ? bsc_format_string( $_GET['years'], 'number' ) : $currentYear;

					if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
						<div
							class="py-[12px] px-4 text-base font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next">
							<?php echo 'Năm ' . $selectedYear; ?>
							<?php echo svg( 'down-white', '20' ); ?>
						</div>
					<?php } ?>
					<ul
						class="overflow-y-auto <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'shadow-base p-3 rounded-[10px] bg-white scroll-bar-custom  max-h-[180px] space-y-2' : 'absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 text-white prose-a:block prose-a:px-[14px] prose-a:font-semibold prose-a:text-paragraph prose-a:rounded-md prose-a:py-3 prose-a:font-Helvetica rounded text-xs' ?>">
						<?php
						for ( $year = $currentYear; $year >= 2015; $year-- ) :
							?>
							<li>
								<a href="<?php echo get_permalink( get_the_ID() ) ?>?years=<?php echo $year ?><?php if ( get_sub_field( 'id_class' ) ) { ?><?php echo '#' . get_sub_field( 'id_class' ) ?><?php } ?>"
									class="<?php echo ( $year == $selectedYear ) ? 'active' : ''; ?> block lg:px-5 px-4 py-3 font-semibold lg:text-lg [&:not(.active)]:bg-white bg-primary-300 rounded-md [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-[#ebf4fa]">
									<?php _e( 'Năm', 'bsc' ) ?> 	<?php echo $year; ?>
								</a>
							</li>
						<?php endfor; ?>
					</ul>

					<?php
					if ( get_sub_field( 'hinh_anh_sidebar' ) ) {
						$hinh_anh_sidebar = get_sub_field( 'hinh_anh_sidebar' );
					} else {
						$hinh_anh_sidebar = get_field( 'cdtnvcd1_hinh_anh_sidebar', 'option' );
					}
					if ( $hinh_anh_sidebar && ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
						<div class="mt-12">
							<a href="<?php echo check_link( $hinh_anh_sidebar['link'] ) ?>">
								<?php echo wp_get_attachment_image( $hinh_anh_sidebar['img'], 'large', '', array( 'class' => 'rounded-lg transition-all duration-500 hover:scale-105' ) ) ?>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php
			$cdtnvcd2_id_danh_muc = get_field( 'cdtnvcd2_id_danh_muc', 'option' );
			if ( $cdtnvcd2_id_danh_muc ) {
				$time_cache = get_field( 'cdtnvcd2_time_cache', 'option' );
				if ( isset( $_GET['posts_to_show'] ) ) {
					$post_per_page = bsc_format_string( $_GET['posts_to_show'], 'number' );
				} else {
					$post_per_page = get_option( 'posts_per_page' );
				}
				if ( isset( $_GET['post_page'] ) ) {
					$index = ( bsc_format_string( $_GET['post_page'], 'number' ) - 1 ) * $post_per_page + 1;
				} else {
					$index = 1;
				}
				$array_data = array(
					'lang' => pll_current_language(),
					'groupid' => $cdtnvcd2_id_danh_muc,
					'maxitem' => $post_per_page,
					'index' => $index
				);
				if ( $selectedYear ) {
					$array_data['fromdate'] = '01/01/' . $selectedYear;
					$array_data['todate'] = '31/12/' . $selectedYear;
				}
				$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
				if ( $response ) {
					if ( $response->totalrecord ) {
						$total_post = $response->totalrecord;
					} else {
						$total_post = $post_per_page;
					}
					$total_page = ceil( $total_post / $post_per_page );
					?>
					<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'mt-6' ?>">
						<div
							class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8' : 'md:grid-cols-2 grid-cols-1 gap-y-6 gap-x-5' ?>">
							<?php
							foreach ( $response->d as $news ) {
								get_template_part( 'template-parts/content', null, array(
									'data' => $news,
								) );
							}
							?>
						</div>
						<div class="lg:mt-12">
							<?php get_template_part( 'components/pagination', '', array(
								'get' => 'api',
								'total_page' => $total_page,
								'url' => get_permalink( get_the_ID() ),
							) ) ?>
						</div>
					</div>
				<?php }
			} ?>
		</div>
	</div>
</section>