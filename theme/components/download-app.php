<section class="download__app lg:py-[75px] py-[50px]" <?php if ( get_sub_field( 'id_class' ) )
{ ?>
		id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2 class="heading-title md:mb-4 mb-2 wow fadeIn hidden-br-pc" data-wow-duration="2s">
				<?php the_sub_field( 'title' ) ?>
			</h2>

		<?php } ?>
		<?php if ( get_sub_field( 'mota' ) )
		{ ?>
			<p class="uppercase text-primary-300 2xl:text-2xl lg:text-xl text-base font-bold wow fadeIn"
				data-wow-duration="2s">
				<?php the_sub_field( 'mota' ) ?>
			</p>
		<?php } ?>
		<div class="grid grid-cols-2 gap-5 lg:mt-0 mt-10">
			<div class="lg:col-span-1 col-span-full lg:order-1 order-2">

				<div class="relative">
					<?php if ( have_rows( 'trai_nghiem' ) )
					{
						$i = 0;
						while ( have_rows( 'trai_nghiem' ) ) :
							the_row();
							$i++; ?>
							<div data-download="<?php echo $i ?>"
								class="<?php if ( $i == 1 )
									echo 'active' ?> [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:invisible visible [&:not(.active)]:pointer-events-none pointer-events-auto transition-all duration-1000 [&:not(.active)]:absolute static w-full h-full top-0 left-0 lg:absolute">
								<?php if ( have_rows( 'qr_code' ) )
								{
									while ( have_rows( 'qr_code' ) ) :
										the_row(); ?>
										<div class="lg:flex lg:gap-11 gap-5 items-center lg:my-20">
											<div class="qr w-52 max-w-[40%] lg:block hidden">
												<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'medium' ) ?>
											</div>
											<ul
												class="flex-1 lg:space-y-4 list-icon lg:block flex flex-wrap gap-y-3 lg:px-0 px-4">
												<?php if ( have_rows( 'mota' ) )
												{
													while ( have_rows( 'mota' ) ) :
														the_row(); ?>
														<li
															class="md:text-lg text-xs font-semibold list-icon-item lg:w-full w-1/2 lg:px-0 px-2">
															<?php the_sub_field( 'content' ) ?>
														</li>
														<?php
													endwhile;
												}
												?>
												<?php if ( have_rows( 'button' ) )
												{
													while ( have_rows( 'button' ) ) :
														the_row();
														if ( get_sub_field( 'title' ) )
														{ ?>
															<li class="lg:block hidden">
																<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
																	class="btn-base-yellow lg:inline-block block text-center">
																	<span
																		class="inline-flex items-center gap-x-3 relative z-10"><?php echo svg( 'arrow-btn', '20' ) ?><?php the_sub_field( 'title' ) ?></span>
																</a>
															</li>
															<?php
														}
														;
													endwhile;
												}
												?>
											</ul>
										</div>
										<?php
									endwhile;
								}
								?>
								<div class="lg:mt-10">
									<ul class="lg:flex items-center gap-3 lg:min-h-[54px]">



										<?php if ( have_rows( 'icon_app' ) )
										{
											while ( have_rows( 'icon_app' ) ) :
												the_row() ?>
												<li class="lg:block hidden">
													<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
														target="_blank" rel="nofollow"
														class="w-12 h-12 p-2 rounded-md bg-gradient-menu inline-block group">
														<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'medium', '', array( 'class' => 'transition-all group-hover:scale-110' ) ) ?>
													</a>
												</li>
											<?php endwhile;
										} ?>
										<?php if ( have_rows( 'button' ) )
										{
											$i = 0;
											while ( have_rows( 'button' ) ) :
												the_row();
												$i++;
												if ( get_sub_field( 'title' ) )
												{ ?>
													<li class="lg:my-0 my-4 lg:px-0 px-6">
														<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
															class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 <?php if ( have_rows( 'icon_app' ) )
																echo 'ml-9' ?>">
															<?php echo svg( 'arrow-btn', '20', '20' ) ?>
															<?php the_sub_field( 'title' ) ?>
														</a>
													</li>
												<?php }
												;
											endwhile;
										} ?>
										<?php if ( have_rows( 'qr_code' ) )
										{
											while ( have_rows( 'qr_code' ) ) :
												the_row(); ?>

												<?php if ( have_rows( 'button' ) )
												{
													while ( have_rows( 'button' ) ) :
														the_row();
														if ( get_sub_field( 'title' ) )
														{ ?>
															<li class="lg:hidden block">
																<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
																	class="btn-base-yellow lg:inline-flex flex justify-center text-center md:text-base text-xs items-center gap-x-3 h-11">
																	<?php echo svg( 'arrow-btn', '16', '16' ) ?>							<?php the_sub_field( 'title' ) ?>
																</a>
															</li>
															<?php
														}
														;
													endwhile;
												}
												?>

												<?php
											endwhile;
										}
										?>
									</ul>
								</div>
							</div>
						<?php endwhile;
					} ?>

				</div>
			</div>
			<?php if ( have_rows( 'trai_nghiem' ) )
			{
				?>
				<div class="lg:col-span-1 col-span-full relative lg:order-2 order-1 lg:-mt-20">
					<?php
					$i = 0;
					while ( have_rows( 'trai_nghiem' ) ) :
						the_row();
						$i++;
						?>
						<div data-download="<?php echo $i ?>"
							class="<?php if ( $i == 1 )
								echo 'active' ?> [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:invisible visible [&:not(.active)]:pointer-events-none pointer-events-auto transition-all duration-700 [&:not(.active)]:absolute [&:not(.active)]:w-full [&:not(.active)]:h-full [&:not(.active)]:inset-0 static">
								<?php
							$images = get_sub_field( 'gallery' );
							$total_images = count( $images );
							if ( $images ) : ?>
								<?php if ( $total_images > 1 )
								{ ?>
									<div class="flex justify-center items-center gap-6 lg:w-full w-4/5 mx-auto">
										<?php foreach ( $images as $image ) : ?>
											<div class="w-[210px] max-w-[50%]">
												<div class="relative pt-[203%]">
													<img src="<?php echo esc_url( $image['sizes']['medium'] ); ?>"
														alt="<?php echo esc_attr( $image['alt'] ); ?>"
														class="absolute w-full h-full inset-0 object-cover border-[5px] rounded-2xl border-[#e3e3e3]">
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								<?php } else
								{
									?>
									<?php foreach ( $images as $image ) : ?>
										<div class="relative lg:pt-0 pt-[75%]">
											<img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt=""
												class="w-full h-full lg:h-[426px] object-contain lg:static absolute inset-0 m-auto">
										</div>
									<?php endforeach; ?>
									<?php
								} ?>
							<?php endif; ?>
						</div>
					<?php endwhile;
					?>
					<div class="text-center">
						<ul
							class="inline-flex justify-center lg:gap-8 gap-14 md:mt-[30px] mt-4 pb-2 border-b border-[#D9D9D9] relative">
							<?php
							$i = 0;
							while ( have_rows( 'trai_nghiem' ) ) :
								the_row();
								$i++;
								?>
								<li>
									<button type="button" data-tab-download="<?php echo $i ?>" class="font-bold text-black [&:not(.active)]:text-opacity-70 transition-all duration-500 hover:scale-105 <?php if ( $i == 1 )
										   echo 'active' ?>">
										<?php the_sub_field( 'title' ) ?>
									</button>
								</li>
							<?php endwhile; ?>
							<span
								class="line absolute w-1/2 bottom-0 h-[2px] bg-yellow-100 duration-500 transition-all"></span>
						</ul>

					</div>
				</div>
				<?php
			} ?>
		</div>
	</div>
</section>