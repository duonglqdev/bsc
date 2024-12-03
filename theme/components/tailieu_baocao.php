<section
	class="tailieu_baocao <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:my-[100px] my-12' : 'my-[50px]' ?>"
	<?php if ( get_sub_field( 'id_class' ) )
	{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>"
	<?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2 class="heading-title 2xl:mb-10 mb-8">
				<?php the_sub_field( 'title' ) ?>
			</h2>
		<?php } ?>
		<?php
		$number = get_sub_field( 'number' ) ?: 4;
		$time_cache = get_sub_field( 'time_cache' ) ?: 300;
		$terms = get_terms( array(
			'taxonomy' => 'danh-muc-bao-cao',
			'hide_empty' => false,
			'parent' => 0,
		) );
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
			?>
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex gap-[70px]' : '' ?>">

				<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
				{ ?>
					<div class="w-80 max-w-[35%] shrink-0">
						<div class="sticky top-5 z-50">

							<ul
								class="bg-white shadow-base py-6 pr-4 rounded-lg sidebar-report space-y-2 scroll_nav">
								<?php
								$i = 0;
								foreach ( $terms as $term ) :
									$i++;
									?>
									<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'px-4 py-2 font-bold [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white rounded-md ' .
										( $i == 1 ? 'active ' : '' ) .
										'' ?>">
										<a href="#<?php echo esc_attr( $term->slug ); ?>" data-name="<?= $i ?>"
											data-tabs="#<?php echo esc_attr( $term->slug ); ?>" class="<?php
												 echo ! wp_is_mobile() && ! bsc_is_mobile()
												 	? 'flex items-center gap-4 2xl:text-lg text-base font-bold ' .
												 	( $i == 1 ? 'active ' : '' ) .
												 	'[&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]'
												 	: '';
												 ?>">
											<?php echo esc_html( $term->name ); ?>
										</a>

										<?php
										$child_terms = get_terms( array(
											'taxonomy' => 'danh-muc-bao-cao',
											'parent' => $term->term_id,
											'hide_empty' => false,
										) );

										if ( ! empty( $child_terms ) && ! is_wp_error( $child_terms ) ) : ?>
											<ul class="pl-5 hidden sub-menu w-full bg-white">
												<?php foreach ( $child_terms as $child_term ) :
													?>
													<li class="pl-5">
														<a href="<?php echo get_term_link( $child_term ); ?>"
															class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '[&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block' : '' ?>">
															<?php echo esc_html( $child_term->name ); ?>
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
				<?php } ?>

				<div class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'mt-7' ?>">
					<?php
					foreach ( $terms as $term ) :
						?>
						<div id="<?php echo $term->slug ?>"
							class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : '[&:not(:last-child)]:pb-6 [&:not(:last-child)]:mb-6 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1]' ?>">
							<div class="flex justify-between items-center mb-[26px]">
								<h2
									class="font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-2xl text-xl ' : 'text-lg' ?>">
									<?php echo esc_html( $term->name ); ?>
								</h2>
								<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() )
								{ ?>
									<a href="<?php echo get_term_link( $term ) ?>"
										class="px-5 py-3 btn-base-yellow">
										<span class="inline-flex items-center gap-3 relative z-10">
											<?php echo svg( 'arrow-btn', '16', '16' ) ?>
											<?php _e( 'Xem tất cả', 'bsc' ) ?>
										</span>
									</a>
								<?php } ?>
							</div>
							<?php
							$groupid = get_field( 'api_id_danh_muc', $term );
							if ( $groupid )
							{
								$array_data = array(
									'lang' => pll_current_language(),
									'groupid' => $groupid,
									'maxitem' => $number
								);
								$response = get_data_with_cache( 'GetNews', $array_data, $time_cache );
								if ( $response )
								{ ?>
									<div
										class="space-y-6 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10 pb-10 border-b border-[#E1E1E1]' : '' ?>">
										<?php if ( get_field( 'type_danh_muc', $term ) == 'avatar' )
										{ ?>
											<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid grid-cols-4 gap-5' : '-mx-2' ?>"
												<?php if ( wp_is_mobile() && bsc_is_mobile() )
												{ ?>
													data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":false}'
												<?php } ?>>
												<?php foreach ( $response->d as $news ) : ?>
													<?php if ( wp_is_mobile() && bsc_is_mobile() ) : ?>
														<div class="w-[45%] px-2">
														<?php endif; ?>

														<?php
														get_template_part( 'template-parts/content_thumbnail-quan-he-co-dong', null, array(
															'data' => $news,
														) );
														?>

														<?php if ( wp_is_mobile() && bsc_is_mobile() ) : ?>
														</div>
													<?php endif; ?>
												<?php endforeach; ?>
											</div>

										<?php } else
										{
											foreach ( $response->d as $news )
											{
												get_template_part( 'template-parts/content-quan-he-co-dong', null, array(
													'data' => $news,
												) );
											}
										} ?>
									</div>


								<?php }
							} ?>
							<?php if ( wp_is_mobile() && bsc_is_mobile() )
							{ ?>
								<div class="mt-8">
									<a href="<?php echo get_term_link( $term ) ?>"
										class="block px-6 py-[12px] btn-base-yellow text-xs font-bold text-center">
										<span class="inline-flex items-center gap-2 relative z-10">
											<?php _e( 'Xem tất cả', 'bsc' ) ?>
											<?php echo svg( 'arrow-btn-2' ) ?>
										</span>
									</a>
								</div>

							<?php } ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>