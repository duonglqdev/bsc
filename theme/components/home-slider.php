<?php
$id_class = get_sub_field( 'id_class' );
if ( have_rows( 'slider' ) )
{
	?>
	<section class="home__banner dots-white block_slider-show-1"
		data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
		<?php if ( $id_class )
		{ ?> id="<?php echo $id_class ?>" <?php } ?>>
		<?php while ( have_rows( 'slider' ) ) :
			the_row();
			$type_slider = get_sub_field( 'type_slider' );
			if ( $type_slider == 'image' )
			{
				?>
				<div class="w-full relative block_slider-item">
					<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>">
						<!-- @todo: Thêm ảnh mobile -->
						<picture>
							<source media="(max-width:767px)" srcset="<?php
							$image_id = get_sub_field( 'image' );
							echo wp_get_attachment_image_src( $image_id, 'full' )[0];
							?>">
							<?php echo wp_get_attachment_image( $image_id, 'full', '', array( 'class' => 'w-full h-full object-cover' ) ); ?>
						</picture>
					</a>
				</div>
				<?php
			} elseif ( $type_slider == 'video' )
			{
				if ( get_sub_field( 'video' ) )
				{
					?>
					<div class="w-full block_slider-item">
						<div
							class="w-full relative max-h-full h-full after:absolute lg:after:w-3/4 after:w-full after:top-0 after:left-0 after:bg-gradient-banner after:h-full after:pointer-events-none">
							<video preload="none" id="video-banner" class="object-cover w-full max-w-full h-full max-h-full"
								autoplay="" muted="" playsinline="" loop=""
								src="<?php the_sub_field( 'video' ) ?>"></video>
							<div class="absolute w-full h-full inset-0">
								<div class="container relative z-10 h-full">
									<div class="flex flex-col h-full justify-center">
										<div class="lg:py-14 py-10 ">
											<?php if ( have_rows( 'title' ) )
											{
												while ( have_rows( 'title' ) ) :
													the_row(); ?>
													<h2
														class="uppercase text-white xl:text-[50px] lg:text-4xl text-3xl mb-6 font-extrabold !leading-tight">
														<?php if ( get_sub_field( 'title_1' ) )
														{ ?>
															<p>
																<?php the_sub_field( 'title_1' ) ?>
															</p>
														<?php } ?>
														<?php if ( get_sub_field( 'title_2' ) )
														{ ?>
															<p>
																<?php the_sub_field( 'title_2' ) ?>
															</p>
														<?php } ?>
													</h2>
												<?php endwhile;
											} ?>
											<?php if ( get_sub_field( 'mota' ) )
											{ ?>
												<p class="2xl:text-2xl text-xl font-bold text-white mb-8">
													<?php the_sub_field( 'mota' ) ?>
												</p>
											<?php } ?>
											<?php if ( have_rows( 'button' ) )
											{
												while ( have_rows( 'button' ) ) :
													the_row();
													if ( get_sub_field( 'title' ) )
													{
														?>
														<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
															class="btn-base-yellow">
															<span
																class="inline-flex items-center gap-x-3 relative z-10"><?php echo svg( 'arrow-btn', '20' ) ?><?php the_sub_field( 'title' ) ?></span>
														</a>
														<?php
													}
												endwhile;
											} ?>
										</div>
									</div>


								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}
		endwhile; ?>
	</section>
<?php } ?>