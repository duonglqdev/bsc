<section class="about_award-other my-16" <?php if ( get_sub_field( 'id_class' ) )
{ ?>
		id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( get_sub_field( 'title' ) )
		{ ?>
			<h3 class="text-2xl font-bold mb-[30px] text-center">
				<?php the_sub_field( 'title' ) ?>
			</h3>
		<?php } ?>
		<?php if ( have_rows( 'reward' ) )
		{ ?>
			<div class="max-w-[764px] mx-auto">
				<div
					class="about_award-nav -mx-4 after:absolute after:border-b after:border-[#384352] after:border-opacity-10 after:h-[1px] after:bottom-2 after:w-4/5 after:left-1/2 after:-translate-x-1/2">
					<?php
					$rewards = [];
					while ( have_rows( 'reward' ) ) :
						the_row();
						$rewards[] = get_sub_field( 'nam' );
					endwhile;

					$rewards = array_reverse( $rewards );

					foreach ( $rewards as $reward )
					{ ?>
						<div
							class="lg:w-1/5 w-1/3 px-4 [&:not(.slick-current)]:text-black [&:not(.slick-current)]:text-opacity-60 text-primary-400 [&:not(.slick-current)]:font-semibold font-bold [&:not(.slick-current)]:text-base text-lg pb-6 relative after:absolute after:w-3 after:h-3 after:rounded-full after:bg-[#384352] after:bg-opacity-20 [&:not(.slick-current)]:after:bottom-0 after:bottom-1 after:left-1/2 after:-translate-x-1/2 about_award-item cursor-pointer">
							<div class="text-center">
								<?php echo $reward; ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

			<div class="about_award-content mt-10 max-w-[886px] mx-auto">
				<?php
				$content_groups = [];

				while ( have_rows( 'reward' ) ) :
					the_row();
					$content_items = [];

					if ( have_rows( 'content' ) )
					{
						while ( have_rows( 'content' ) )
						{
							the_row();
							$content_items[] = [ 
								'icon' => get_sub_field( 'icon' ),
								'description' => get_sub_field( 'mota' ),
							];
						}
					}
					$content_groups[] = $content_items;
				endwhile;

				$content_groups = array_reverse( $content_groups );

				foreach ( $content_groups as $content_items )
				{ ?>
					<div class="w-full font-Helvetica">
						<?php foreach ( array_reverse( $content_items ) as $content )
						{ ?>
							<div
								class="about_award-item [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#384352] [&:not(:last-child)]:border-opacity-20 [&:not(:last-child)]:pb-[30px] [&:not(:last-child)]:mb-[30px] flex lg:gap-[50px] gap-5 items-start">
								<?php echo wp_get_attachment_image( $content['icon'], 'large', '', array( 'class' => 'max-w-[40px]' ) ); ?>
								<div class="the_content mt-2">
									<?php echo $content['description']; ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>

	</div>
</section>