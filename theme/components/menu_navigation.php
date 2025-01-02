<?php
$style = $args['data'] ?? get_sub_field( 'style' ) ?: 'nhdt';
if ( $style == 'nhdt' ) {
	?>
	<section
		class="bg-primary-50 sticky z-20 top-0 menu_navigation <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:py-4 py-3' : 'py-[12px]' ?>"
		<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
		<?php if ( have_rows( 'menu_navigation' ) ) { ?>
			<div class="container">
				<ul
					class="flex bank-nav-tab nav-scroll-mb hidden-br-pc <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'justify-between' : 'overflow-x-auto gap-[12px]' ?>">
					<?php while ( have_rows( 'menu_navigation' ) ) :
						the_row(); ?>
						<li>
							<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
								class="<?php if ( get_sub_field( 'active' ) )
									echo 'active' ?> inline-block font-semibold [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:px-10 px-5 xl:py-4 py-3' : 'whitespace-nowrap min-w-[40%] text-xs text-left px-4 py-3 border border-primary-300' ?>">
								<?php the_sub_field( 'title' ) ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php } ?>
	</section>
<?php } elseif ( ( $style == 'stgd' ) || ( $style == 'bpgd' ) ) {
	?>
	<section
		class="bg-primary-50 sticky z-20 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:py-4 py-3 top-0' : 'py-[12px] top-[60px]' ?>"
		<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
		<?php
		if ( get_sub_field( 'menu_navigation' ) ) {
			$menu_navigation = get_sub_field( 'menu_navigation' );
		} elseif ( isset( $args['data'] ) && $args['data'] != '' ) {
			if ( $args['data'] == 'stgd' ) {
				$menu_navigation = get_field( 'cdstgg2_menu_navigation', 'option' );
			} else {
				$menu_navigation = get_field( 'cdbdgg1_menu_navigation', 'option' );
			}
		}
		if ( $menu_navigation ) { ?>
			<div class="container">
				<ul
					class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'justify-between gap-10' : 'overflow-x-auto gap-4  nav-scroll-mb' ?>">
					<?php foreach ( $menu_navigation as $row ) { ?>
						<li class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
							<a href="<?php echo check_link( $row['link'] ) ?>"
								class="<?php if ( $row['active'] )
									echo 'active' ?> block text-center font-semibold [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-base py-[12px] px-10' : 'py-3 px-4 text-xs' ?>">
								<?php echo $row['title'] ?>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
	</section>
<?php } elseif ( $style == 'ntgd' ) { ?>
	<section
		class="bg-[#EBF4FA] sticky top-0 z-[20] sticky-nav <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-4' : 'py-[12px]' ?>"
		<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
		<div class="container">
			<?php
			$endpoint = bsc_format_string( $_GET['mck'] );
			if ( have_rows( 'menu_navigation' ) ) { ?>
				<ul class="flex justify-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-10' : 'gap-3' ?>">
					<?php while ( have_rows( 'menu_navigation' ) ) :
						the_row() ?>
						<li class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
							<a href="<?php echo check_link( get_sub_field( 'link' ) ) . $endpoint ?>"
								class="<?php if ( get_sub_field( 'active' ) )
									echo 'active' ?> block text-center font-semibold  [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-base py-[12px] px-10' : 'text-xs py-2 px-3' ?>">
								<?php the_sub_field( 'title' ) ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php } ?>
		</div>
	</section>
<?php } elseif ( $style == 'bcpt' ) { ?>
	<?php if ( have_rows( 'menu_navigation' ) ) { ?>
		<section class="2xl:py-4 py-3 bg-primary-50 sticky z-20 top-0" <?php if ( get_sub_field( 'id_class' ) ) { ?>
				id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
			<div class="container">
				<ul
					class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'justify-between gap-10' : 'overflow-x-auto gap-4  nav-scroll-mb' ?>">
					<?php while ( have_rows( 'menu_navigation' ) ) :
						the_row(); ?>
						<li class="flex-1 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'whitespace-nowrap' ?>">
							<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
								class="<?php if ( get_sub_field( 'active' ) )
									echo 'active' ?> block text-center font-semibold lg:text-base lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
								<?php the_sub_field( 'title' ) ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</section>
	<?php } ?>
<?php } ?>