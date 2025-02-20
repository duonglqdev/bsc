<section
	class="home_news bg-white  tthtkh_kien_thuc_dau_tu <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:my-[100px] my-20' : 'my-[50px]' ?>"
	<?php if ( get_sub_field( 'id_class' ) )
	{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<div
			class="flex items-center justify-between <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-12' : 'mb-6' ?>">
			<?php if ( get_sub_field( 'title' ) )
			{ ?>
				<h2 class="heading-title"><?php the_sub_field( 'title' ) ?></h2>
			<?php } ?>
			<?php if ( have_rows( 'button' ) && ! wp_is_mobile() && ! bsc_is_mobile() )
			{
				while ( have_rows( 'button' ) ) :
					the_row();
					if ( get_sub_field( 'title' ) )
					{ ?>
						<a rel="<?php the_sub_field( 'rel' ) ?>" <?php if ( get_sub_field( 'open_tab' ) )
							  echo 'target="_blank"' ?> href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
							class="inline-block px-5 py-2 btn-base-yellow">
							<span class="inline-flex items-center gap-2 relative z-10">
								<?php the_sub_field( 'title' ) ?>
								<?php echo svg( 'arrow-btn-2' ) ?>
							</span>
						</a>
						<?php
					}
				endwhile;
			} ?>
		</div>
		<?php
		$tax = get_sub_field( 'tax' );
		if ( $tax )
		{
			$groupid = get_field( 'api_id_danh_muc', $tax );
			if ( $groupid )
			{
				$time_cache = get_sub_field( 'time_cache' ) ?: 300;
				$array_data = array(
					'lang' => pll_current_language(),
					'groupid' => $groupid,
					"maxitem" => "4",
				);
				$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
				if ( $response )
				{
					?>
					<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
						<div class="lg:grid grid-cols-5 gap-5 lg:space-y-0 space-y-6">
							<?php
							$i = 0;
							foreach ( $response->d as $news )
							{
								$i++;
								if ( $i == 1 )
								{ ?>
									<div class="md:col-span-3 col-span-full">
										<div class="group">
											<?php if ( get_sub_field( 'default_thumbnail' ) )
											{ ?>
												<a href="<?php echo check_link( get_sub_field( 'link_youtube' ) ) ?>"
													class="block relative w-full pt-[52%] mb-6 overflow-hidden rounded-[10px] after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40"
													data-fancybox="">
													<?php echo wp_get_attachment_image( get_sub_field( 'default_thumbnail' ), 'large', '', array( 'class' => 'absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110' ) ) ?>
													<div
														class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
														<?php echo svg( 'play', '62', '62' ) ?>
													</div>
												</a>
											<?php } ?>
											<h3
												class="lg:text-[22px] text-lg font-bold mb-[12px] transition-all duration-500 group-hover:text-green">
												<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
													class="line-clamp-3"><?php echo htmlspecialchars( $news->title ) ?></a>
											</h3>
											<div class="mb-4 line-clamp-2">
												<?php echo htmlspecialchars( $news->description ) ?>
											</div>
											<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
												class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105">
												<?php echo svg( 'arrow-btn', '20', '20' ) ?>
												<?php _e( 'Xem chi tiết', 'bsc' ) ?>
											</a>
										</div>
									</div>
								<?php }
								break;
							} ?>
							<div class="md:col-span-2 col-span-full">
								<ul class="space-y-[12px]">
									<?php
									$i = 0;
									foreach ( $response->d as $news )
									{
										$i++;
										if ( $i > 1 )
										{ ?>
											<li class="lg:p-6 p-4 bg-[#F5FCFF] rounded-lg group">
												<h3
													class="text-lg font-bold mb-3 transition-all duration-500 group-hover:text-green font-Helvetica">
													<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
														class="line-clamp-2">
														<?php echo htmlspecialchars( $news->title ) ?>
													</a>
												</h3>
												<p class="line-clamp-1 font-Helvetica">
													<?php echo htmlspecialchars( $news->description ) ?>
												</p>
												<div class="mt-3">
													<a href="<?php echo get_term_link( $tax ) ?>"
														class="text-green font-xs font-medium">
														<?php echo $tax->name ?>
													</a>
												</div>
											</li>
											<?php
										}
									}
									?>
								</ul>
							</div>
						</div>
					<?php elseif(wp_is_mobile() &&  bsc_is_mobile()) : ?>
						<div class="block_slider-show-1 -mx-2 block_sameheight"
							data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'>
							<?php
							$i = 0;
							foreach ( $response->d as $news )
							{
								$i++;
								?>
								<div class="w-full block_slider-item pb-3 px-2 sameheight_item">
									<div class="group rounded-bl-[10px] rounded-br-[10px]">
										<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
											class="block relative w-full pt-[52%] overflow-hidden rounded-[10px]">
											<img loading="lazy" src="<?php echo bsc_set_thumbnail( $news, 'large' ) ?>"
												alt="<?php echo htmlspecialchars( $news->title ) ?>"
												class="absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110">
										</a>
										<h3 class="text-xs font-bold mt-4">
											<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
												class="line-clamp-2"><?php echo htmlspecialchars( $news->title ) ?></a>
										</h3>


									</div>
								</div>
								<?php
							}
							?>
						</div>
					<?php endif; ?>

				<?php }
			}
		} ?>
	</div>
</section>