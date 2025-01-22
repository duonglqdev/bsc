<section class="connguoi_bsc <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:my-[100px] my-10':'my-[50px]' ?>" <?php if ( get_sub_field( 'id_class' ) )
{ ?>
		id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10 text-center':'mb-6' ?>">
				<?php the_sub_field( 'title' ) ?>
			</h2>
		<?php } ?>
		<?php if ( have_rows( 'danh_gia' ) )
		{ ?>
			<div
				class="relative bg-gradient-blue-50 rounded-2xl items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:px-32 lg:px-20 px-5 py-2 grid grid-cols-2 lg:gap-16 gap-10':'px-4 pt-[26px] ' ?>">
				<div class="staff_content data-slick block_slider-show-1"
					data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots":<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'true':'false' ?>, "arrows": false, "fade": true, "asNavFor": ".staff_image"}'>
					<?php
					while ( have_rows( 'danh_gia' ) ) :
						the_row();
						?>
						<div class="flex flex-col font-Helvetica block_slider-item">
							<?php if ( get_sub_field( 'name' ) )
							{ ?>
								<h3 class="2xl:text-2xl text-lg font-bold mb-1">
									<?php the_sub_field( 'name' ) ?>
								</h3>
							<?php } ?>
							<?php if ( get_sub_field( 'position' ) )
							{ ?>
								<p class="text-black text-opacity-50 font-semibold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xs':'text-[12px]' ?>">
									<?php the_sub_field( 'position' ) ?>
								</p>
							<?php } ?>
							<div class="text-justify mt-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								<?php the_sub_field( 'review' ) ?>
							</div>
						</div>
						<?php
					endwhile;
					?>
				</div>

				<div class="staff_image data-slick block_slider-show-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-8' ?>"
					data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": false, "arrows": false, "fade": true, "draggable": false, "asNavFor": ".staff_content"}'>
					<?php
					while ( have_rows( 'danh_gia' ) ) :
						the_row();
						?>
						<div class="block_slider-item">
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'large' ) ?>
						</div>
						<?php
					endwhile;
					?>
				</div>
				<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
					<div class="absolute -top-5 left-32">
						<?php echo svg( 'quote2' ) ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</section>