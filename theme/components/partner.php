<section class="block_partner lg:py-[77px] py-14 relative"
	style="background-color: <?php the_sub_field( 'background' ) ?>" <?php if ( get_sub_field( 'id_class' ) )
	  { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container 2xl:max-w-[1500px]">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h2 class="heading-title text-center mb-12 wow fadeIn" data-wow-duration="2s"><?php the_sub_field( 'title' ) ?></h2>
		<?php } ?>
		<?php
		if ( have_rows( 'gallery' ) ) : ?>
			<div class="data-slick block_slider-show-2 no-dots -mx-4 relative partner_list" dir="rtl" data-slick='{
			"slidesToShow": 7, 
			"slidesToScroll": 1, 
			"autoplay": true, 
			"autoplaySpeed": 0, 
			"pauseOnHover": true, 
			"pauseOnFocus": true,
			"dots": false, 
			"arrows": false, 
			"cssEase": "linear", 
			"speed": 4000, 
			"centerMode": true, 
			"centerPadding": "0", 
			"infinite": true,
			"rtl": true,
			"responsive": [
				{
					"breakpoint": 768,
					"settings": {
						"slidesToShow": 2,
						"slidesToScroll": 1
					}
				}
			]
		}'>
				<?php while ( have_rows( 'gallery' ) ) :
					the_row(); ?>
					<div class="block_slider-item px-4 py-6">
						<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
							class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full shadow bg-no-repeat bg-full bg-center transition-all duration-500 hover:scale-110"  style="background-image:url(<?php echo get_stylesheet_directory_uri()?>/assets/svg/test-svg.png)">
							<?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'medium', '', array( 'class' => 'absolute w-full max-w-[80%] h-full object-contain inset-0 m-auto' ) ) ?>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
	<?php if ( get_sub_field( 'image_bg' ) )
	{ ?>
		<div class="absolute lg:block hidden top-16 right-0 pointer-events-none">
			<?php echo svg_dir( get_sub_field( 'image_bg' ) ) ?>
		</div>
	<?php } ?>
</section>