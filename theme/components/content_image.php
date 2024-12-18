<div class="content_image <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:my-[100px] lg:my-20 my-[50px]' : 'my-[50px]' ?>"
	<?php if ( get_sub_field( 'id_class' ) )
	{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<div
			class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:grid lg:grid-cols-2 xl:gap-0 gap-10' : '' ?>">
			<div class="col-span-1 xl:pr-[42px]">
				<?php if ( get_sub_field( 'title' ) )
				{ ?>
					<h2 class="heading-title mb-4">
						<?php the_sub_field( 'title' ) ?>
					</h2>
				<?php } ?>
				<div
					class="font-Helvetica text-justify <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
					<?php if ( get_sub_field( 'content_tren' ) )
					{ ?>
						<div class="mb-4 font-bold">
							<?php the_sub_field( 'content_tren' ) ?>
						</div>
					<?php } ?>
					<?php if ( have_rows( 'list_content' ) )
					{ ?>
						<ul
							class="flex-1 list-icon <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'space-y-4' : 'space-y-[12px]' ?>">
							<?php while ( have_rows( 'list_content' ) ) :
								the_row(); ?>
								<li class="font-semibold list-icon-item">
									<?php the_sub_field( 'content' ) ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php } ?>
					<?php if ( get_sub_field( 'content' ) )
					{ ?>
						<div class="font-bold mt-4 text-justify">
							<?php the_sub_field( 'content' ) ?>
						</div>
					<?php } ?>
				</div>
                <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
				<?php if ( have_rows( 'button' ) )
				{
					while ( have_rows( 'button' ) ) :
						the_row();
						if ( get_sub_field( 'title' ) )
						{
							?>
							<div class="mt-8">
								<a rel="<?php the_sub_field( 'rel' ) ?>" <?php if ( get_sub_field( 'open_tab' ) )
									  echo 'target="_blank"' ?> href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
									class="btn-base-yellow px-6 py-4 inline-flex items-center gap-x-3">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php the_sub_field( 'title' ) ?>
								</a>
							</div>
							<?php
						}
					endwhile;
				} ?>
                                    
                <?php } ?>
			</div>

			<div
				class="xl:pl-[22px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'col-span-1' : 'mt-6' ?>">
				<div class="relative overflow-hidden pt-[65.743%] w-full rounded-2xl">
					<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'large', '', array( 'class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105 img-test' ) ) ?>
				</div>
				<?php if ( have_rows( 'button' ) && wp_is_mobile() && bsc_is_mobile() )
				{
					while ( have_rows( 'button' ) ) :
						the_row();
						if ( get_sub_field( 'title' ) )
						{
							?>
							<div class="mt-8">
								<a rel="<?php the_sub_field( 'rel' ) ?>" <?php if ( get_sub_field( 'open_tab' ) )
									  echo 'target="_blank"' ?> href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
									class="btn-base-yellow px-6 py-3 flex items-center justify-center gap-x-3 rounded-md text-xs">
									<?php echo svg( 'arrow-btn', '16', '16' ) ?>
									<?php the_sub_field( 'title' ) ?>
								</a>
							</div>
							<?php
						}
					endwhile;
				} ?>
                
			</div>
		</div>

	</div>
</div>