<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:my-[100px] my-20' : 'my-[50px]' ?> about_culture"
	<?php if ( get_sub_field( 'id_class' ) )
	{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>"
	<?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2
				class="heading-title text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
				<?php the_sub_field( 'title' ) ?>
			</h2>
		<?php } ?>
		<?php if ( get_sub_field( 'mota' ) )
		{ ?>
			<div
				class="relative font-bold text-primary-400 text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-[50px] 2xl:text-2xl text-xl max-w-[946px] mx-auto' : 'mb-4 text-base' ?>">
				<div
					class="absolute pointer-events-none  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '-left-10 -top-5' : '-top-8 left-0' ?>">
					<?php echo svg( 'quote' ) ?>
				</div>
				<?php the_sub_field( 'mota' ) ?>
			</div>
		<?php } ?>
		<?php ?>
		<?php
		$time_cache = get_sub_field( 'time_cache' ) ?: 300;
		$number = get_sub_field( 'number' ) ?: 3;
		$term = get_sub_field( 'danh_muc' );
		if ( $term )
		{
			if ( get_field( 'api_id_danh_muc', $term ) )
			{
				$groupid = get_field( 'api_id_danh_muc', $term );
				$array_data = array(
					'lang' => pll_current_language(),
					'groupid' => $groupid,
					'maxitem' => $number
				);
				$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
				if ( $response )
				{
					?>
					<div class="relative about_culture-swiper">
						<div class="swiper-container about_culture-list about_culture-list <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'about_culture-list-pc' : 'about_culture-list-mb' ?>">
							<div class="swiper-wrapper">
								<?php
								foreach ( $response->d as $news )
								{ ?>
									<div class="swiper-slide <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'px-2' ?>">
										<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
											class="about_culture-item block  overflow-hidden  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'relative after:absolute after:w-full after:h-full after:inset-0 after:bg-[#000] after:bg-opacity-35 rounded-[15px]' : 'mb-10 rounded-md shadow-[0px_2.832px_8.092px_0px_rgba(0,0,0,0.10)]' ?>">
											<div class="relative w-full pt-[58%]">
												<img class="absolute w-full h-full inset-0 object-cover <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'rounded-md' ?>" src="<?php echo bsc_set_thumbnail( $news, 'thumbnail' ) ?>" alt="<?php echo htmlspecialchars( $news->title ) ?>" loading="lazy">
											</div>
											<h4
												class="text-center text-primary-400 font-bold bg-white <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'hidden' : '' ?> title text-lg line-clamp-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-4 text-2xl' : 'text-xs py-1.5 px-1 font-Helvetica' ?>">
												<?php echo htmlspecialchars( $news->title ) ?>
											</h4>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
		<?php
				}
			}
		} ?>
	</div>
</section>