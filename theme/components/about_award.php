<section
	class="about_award <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-[50px]' : 'pt-[33px] pb-12' ?> bg-primary-100"
	<?php if ( get_sub_field( 'id_class' ) )
	{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2
				class="heading-title text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-7' ?>">
				<?php the_sub_field( 'title' ) ?>
			</h2>
		<?php } ?>
		<?php if ( have_rows( 'reward' ) )
		{ ?>
			<div class=" font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid md:grid-cols-3 grid-cols-1 gap-10 2xl:mx-16' : 'block_sameheight block_slider-show-1 dots-blue dot-30' ?>"
				<?php if ( wp_is_mobile() && bsc_is_mobile() )
				{ ?>
					data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
				<?php } ?>>
				<?php while ( have_rows( 'reward' ) ) :
					the_row(); ?>
					<div class="rounded-2xl overflow-hidden lg:p-10 p-5 bg-full group relative bg-no-repeat w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'h-full' : 'block_slider-item sameheight_item' ?>"
						style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/svg/bg-award.png)">
						<div class="mb-10">
							<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'large', '', array( 'class' => 'h-full object-contain w-auto m-auto max-h-[140px] transition-all duration-500 group-hover:scale-105' ) ) ?>
						</div>
						<?php if ( get_sub_field( 'mota' ) )
						{ ?>
							<div class="line-clamp-6 text-justify <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
								<?php the_sub_field( 'mota' ) ?>
							</div>
						<?php } ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php } ?>
	</div>

</section>