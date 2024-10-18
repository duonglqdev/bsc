<section class="lg:lg:my-[100px] my-10 connguoi_bsc" <?php if ( get_sub_field( 'id_class' ) )
{ ?>
		id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2 class="heading-title text-center mb-10">
				<?php the_sub_field( 'title' ) ?>
			</h2>
		<?php } ?>
		<?php if ( have_rows( 'danh_gia' ) )
		{ ?>
			<div
				class="xl:px-32 lg:px-20 px-10 grid lg:grid-cols-2 lg:gap-16 relative bg-gradient-blue-50 rounded-2xl py-2 items-center">
				<div class="staff_content data-slick block_slider-show-1"
					data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000, "dots": true, "arrows": false, "fade": true, "asNavFor": ".staff_image"}'>
					<?php
					while ( have_rows( 'danh_gia' ) ) :
						the_row();
						?>
						<div class="flex flex-col font-Helvetica block_slider-item">
							<?php if ( get_sub_field( 'name' ) )
							{ ?>
								<h3 class="lg:text-2xl text-lg font-bold mb-1">
									<?php the_sub_field( 'name' ) ?>
								</h3>
							<?php } ?>
							<?php if ( get_sub_field( 'position' ) )
							{ ?>
								<p class="text-black text-opacity-50 font-semibold text-xs">
									<?php the_sub_field( 'position' ) ?>
								</p>
							<?php } ?>
							<div class="text-justify mt-4">
								<?php the_sub_field( 'review' ) ?>
							</div>
						</div>
						<?php
					endwhile;
					?>
				</div>

				<div class="staff_image data-slick block_slider-show-1"
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
				<div class="absolute -top-5 left-32">
					<?php echo svg( 'quote2' ) ?>
				</div>
			</div>
		<?php } ?>
	</div>
</section>