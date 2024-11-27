<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth scroll-pt-10">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'font-body text-black font-normal' ); ?>>

	<?php wp_body_open(); ?>

	<header class="transition duration-500 relative [&:not(.mobile-open)]:z-30 z-[100]">
		<div
			class="bg-gradient-blue py-2 text-white relative  overflow-hidden lg:after:absolute lg:after:w-40 lg:after:h-[80%] lg:after:top-0 lg:after:-right-5 lg:after:bg-gradient-green lg:after:opacity-20 lg:after:pointer-events-none lg:after:-skew-x-[35deg] lg:block hidden">
			<div class="container">
				<div class="lg:flex items-center justify-end">
					<form action="<?php echo get_home_url() ?>"
						class="border border-white border-opacity-60 rounded-lg flex items-center  text-xs leading-none">
						<div class="py-3 pl-6 flex items-center">
							<div class="flex">
								<input type="radio" id="cp" name="investment" class="hidden peer">
								<label for="cp"
									class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-white after:transition-all after:duration-500 after:left-0 after:top-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-white before:border-white before:border-2 before:rounded-full before:left-0 before:top-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-white peer-checked:before:scale-50">
									<?php _e( 'Cổ phiếu', 'bsc' ) ?>
								</label>
							</div>
							<div class="flex ml-4 md:pr-[22px] pr-5 border-r border-white">
								<input type="radio" id="other" name="investment" class="hidden peer"
									checked>
								<label for="other"
									class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-white after:transition-all after:duration-500 after:left-0 after:top-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-white before:border-white before:border-2 before:rounded-full before:left-0 before:top-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-white peer-checked:before:scale-50">
									<?php _e( 'Khác', 'bsc' ) ?>
								</label>
							</div>
						</div>
						<div class="relative pl-3 pr-6">
							<input type="text" name="s" placeholder="Tra cứu..."
								class="bg-transparent py-1 border-none focus:outline-0 focus:ring-transparent pb-2 font-medium min-w-36 h-9 peer text-white placeholder:text-white focus:shadow-none focus:border-none placeholder:opacity-60 hover:placeholder:opacity-100 placeholder:transition-all placeholder:duration-700 max-w-[167px]"
								autocomplete="off">

						</div>
					</form>
					<ul
						class="lg:flex menu_top items-center text-sm font-semibold xl:ml-12 lg:ml-10">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-top-header',
							'container' => '__return_false',
							'fallback_cb' => '__return_false',
							'items_wrap' => '%3$s',
							'depth' => 1,
						) );
						?>
					</ul>
					<button data-dropdown-toggle="dropdownLanguage"
						class="text-white flex items-center gap-2 lg:ml-6 uppercase" type="button">
						<?php echo svg( 'global', '24', '24' ) ?>
						<?php echo pll_current_language(); ?>
						<?php echo svg( 'down' ) ?>
					</button>
				</div>
			</div>
		</div>
		<div class="bg-white 2xl:py-[14px] py-3 shadow-base">
			<div class="container">
				<div class="flex justify-between items-center gap-3">
					<div class="bar_mobile lg:hidden flex items-center gap-2">
						<?php echo svg( 'bar' ) ?>
						<button data-dropdown-toggle="dropdownLanguagemb"
							class="text-primary-300 flex items-center gap-1.5 uppercase"
							type="button">
							<?php echo svg( 'global', '24', '24' ) ?>
							<?php echo svg( 'down' ) ?>
						</button>
					</div>
					<?php
					$custom_logo_id = get_field( 'h0_logo', 'option' );
					if ( $custom_logo_id )
					{
						$image = wp_get_attachment_image_src( $custom_logo_id, 'medium' );
						printf(
							'<a class="block" href="%1$s" title="%2$s"><img class="max-w-24" src="%3$s"></a>',
							get_bloginfo( 'url' ),
							get_bloginfo( 'description' ),
							$image[0],
						);
					}
					?>

					<div class="lg:relative lg:flex items-center">
						<div class="main_menu lg:block hidden">
							<ul
								class="lg:flex hidden lg:items-center 2xl:gap-8 xl:gap-5 lg:gap-4 md:gap-3 font-bold text-black">
								<li class="menu-home">
									<a href="<?php echo get_home_url() ?>"
										class="block transition-all duration-500 hover:scale-110">
										<?php echo svg( 'home', 20 ) ?>
									</a>
								</li>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'container' => '__return_false',
									'fallback_cb' => '__return_false',
									'items_wrap' => '%3$s',
									'depth' => 1,
								) );
								?>
							</ul>

						</div>
						<ul
							class="main_menu-navbar lg:bg-[#F3FBFE] w-full lg:max-w-[1006px] lg:absolute lg:shadow-menu lg:shadow-[#0000001A] lg:rounded-br-2xl lg:rounded-bl-2xl bg-gradient-menu lg:top-full 2xl:mt-[22px] lg:mt-4 2xl:p-10 p-5 lg:backdrop-blur-2xl lg:flex">
							<div class="lg:hidden flex items-center justify-between mb-6">
								<div class="close-mobile">
									<?php echo svg( 'close', '24', '24' ) ?>
								</div>
								<?php if ( have_rows( 'h1_button', 'option' ) )
								{ ?>
									<?php
									$i = 1;
									while ( have_rows( 'h1_button', 'option' ) ) :
										the_row();
										$i++;
										if ( get_sub_field( 'title' ) )
										{
											?>
											<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
												class="<?php echo ( $i % 2 == 0 ) ? 'bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] lg:inline-block hidden' : 'bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block'; ?>  2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 sm:text-base text-xs">
												<span class="block relative z-10 ">
													<?php the_sub_field( 'title' ) ?>
												</span>
											</a>
											<?php
										}
									endwhile; ?>
								<?php } ?>
							</div>
							<form action="<?php echo get_home_url() ?>"
								class="lg:hidden flex flex-col p-4 bg-white rounded-lg gap-4 mb-4">
								<div class="flex items-center gap-6">
									<div class="flex">
										<input type="radio" id="cp-mb" name="investment"
											class="hidden peer">
										<label for="cp-mb"
											class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-black after:transition-all after:duration-500 after:left-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-black before:border-black before:border-2 before:rounded-full before:left-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-black peer-checked:before:scale-50 text-xs after:top-1.5 before:top-1.5">
											<?php _e( 'Cổ phiếu', 'bsc' ) ?>
										</label>
									</div>
									<div class="flex items-center">
										<input type="radio" id="other-mb" name="investment"
											class="hidden peer" checked>
										<label for="other-mb"
											class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-black after:transition-all after:duration-500 after:left-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-black before:border-black before:border-2 before:rounded-full before:left-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-black peer-checked:before:scale-50 text-xs after:top-1.5 before:top-1.5">
											<?php _e( 'Khác', 'bsc' ) ?>
										</label>
									</div>
								</div>
								<input type="text" name="s" placeholder="Tra cứu..."
									class="bg-transparent border-none focus:outline-0 focus:ring-transparent pb-2 font-medium min-w-36 h-9 peer text-black placeholder:text-paragraph focus:shadow-none placeholder:transition-all placeholder:duration-700 max-h-full w-full py-2 transition-all duration-500 px-0 focus:px-3 focus:rounded-md focus:border focus:border-solid focus:border-gray-100 text-xs"
									autocomplete="off">
							</form>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'container' => '__return_false',
								'fallback_cb' => '__return_false',
								'items_wrap' => '%3$s',
								'depth' => 3,
							) );
							?>
						</ul>
						<?php if ( have_rows( 'h1_button', 'option' ) )
						{ ?>
							<div class="flex items-center gap-x-4 2xl:ml-[60px] lg:ml-8">
								<?php
								$i = 1;
								while ( have_rows( 'h1_button', 'option' ) ) :
									the_row();
									$i++;
									if ( get_sub_field( 'title' ) )
									{
										?>
										<a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
											class="<?php echo ( $i % 2 == 0 ) ? 'bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] lg:inline-block hidden' : 'bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block'; ?>  2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 sm:text-base text-xxs">
											<span class="block relative z-10 ">
												<?php the_sub_field( 'title' ) ?>
											</span>
										</a>
										<?php
									}
								endwhile; ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div id="dropdownLanguage"
			class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
			<ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
				aria-labelledby="change_language">
				<?php add_custom_class_to_current_lang( array( 'show_flags' => 0, 'show_names' => 1 ) ); ?>
			</ul>
		</div>
		<div id="dropdownLanguagemb"
			class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 lg:hidden">
			<ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
				aria-labelledby="change_language">
				<?php add_custom_class_to_current_lang( array( 'show_flags' => 0, 'show_names' => 1 ) ); ?>
			</ul>
		</div>
	</header>

	