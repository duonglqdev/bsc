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

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'font-body text-black font-normal' ); ?>>

	<?php wp_body_open(); ?>

	<header>
		<div
			class="bg-gradient-blue py-2 text-white relative  overflow-hidden lg:after:absolute lg:after:w-40 lg:after:h-[80%] lg:after:top-0 lg:after:-right-5 lg:after:bg-gradient-green lg:after:opacity-20 lg:after:pointer-events-none lg:after:-skew-x-[35deg]">
			<div class="container">
				<div class="lg:flex items-center justify-end">
					<form action=""
						class="border border-white border-opacity-60 rounded-lg flex items-center  text-xs leading-none">
						<div class="py-3 pl-6 flex items-center">
							<div class="flex">
								<input type="radio" id="cp" name="investment" class="hidden peer">
								<label for="cp"
									class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-white after:transition-all after:duration-500 after:left-0 after:top-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-white before:border-white before:border-2 before:rounded-full before:left-0 before:top-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-white peer-checked:before:scale-50">
									<?php _e( 'Cổ phiếu', 'gnws' ) ?>
								</label>
							</div>
							<div class="flex ml-4 md:pr-[22px] pr-5 border-r border-white">
								<input type="radio" id="other" name="investment" class="hidden peer"
									checked>
								<label for="other"
									class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-white after:transition-all after:duration-500 after:left-0 after:top-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-white before:border-white before:border-2 before:rounded-full before:left-0 before:top-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-white peer-checked:before:scale-50">
									<?php _e( 'Khác', 'gnws' ) ?>
								</label>
							</div>
						</div>
						<div class="relative pl-3 ml-3 pr-6">
							<input type="text" name="s" placeholder="Tra cứu..."
								class="bg-transparent py-1 border-none focus:outline-0  font-medium min-w-36 h-9 peer text-white placeholder:text-white focus:shadow-none focus:border-none"
								autocomplete="off">
							<span
								class="absolute w-full h-full inset-0 border border-green rounded-lg transition-all duration-500 opacity-0 pointer-events-none peer-focus:opacity-100"></span>
						</div>

					</form>
					<ul
						class="lg:flex menu_top items-center text-sm font-semibold xl:ml-12 lg:ml-10">
						<li>
							<a href="">
								Hỗ trợ
							</a>
						</li>
						<li>
							<a href="">
								Tin tức
							</a>
						</li>
						<li>
							<a href="">
								Cơ hội nghề nghiệp
							</a>
						</li>
						<li>
							<a href="">
								Liên hệ
							</a>
						</li>

					</ul>

					<button id="change_language" data-dropdown-toggle="dropdownLanguage"
						class="text-white flex items-center gap-2 lg:ml-6" type="button">
						<?php echo svg( 'global', '24', '24' ) ?>
						VI
						<?php echo svg( 'down' ) ?>
					</button>


				</div>


			</div>
		</div>
		<div class="bg-white lg:py-[14px] py-3">
			<div class="container">
				<div class="lg:flex lg:justify-between lg:items-center lg:gap-3">
					<a href="" class="block">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.png"
							alt="" class="max-w-24">
					</a>
					<div class="relative lg:flex items-center">
						<div class="main_menu">
							<ul
								class="lg:flex hidden lg:items-center xl:gap-8 lg:gap-5 font-bold text-black">
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
							class="main_menu-navbar w-full lg:absolute lg:shadow-menu lg:shadow-[#0000001A] lg:rounded-br-2xl lg:rounded-bl-2xl bg-gradient-menu top-full lg:mt-6 lg:p-10 lg:backdrop-blur-2xl">
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

						

						<div class="flex items-center gap-x-4 xl:ml-[60px] lg:ml-5">
							<a href=""
								class="inline-block px-6 py-3 rounded-md bg-green text-white font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-yellow-100 after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-black">
								<span class="block relative z-10">
									Giao dịch trực tuyến
								</span>
							</a>
							<a href=""
								class="inline-block px-6 py-3 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white">
								<span class="block relative z-10">Mở tài khoản</span>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div id="dropdownLanguage"
			class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
			<ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
				aria-labelledby="change_language">
				<li>
					<a href="#"
						class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">English</a>
				</li>
				<li>
					<a href="#"
						class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Japan</a>
				</li>
				<li>
					<a href="#"
						class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Korea</a>
				</li>
			</ul>

		</div>
	</header>