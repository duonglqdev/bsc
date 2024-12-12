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
<html <?php language_attributes(); ?>
	class="scroll-smooth scroll-pt-10 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'is-desktop' : 'is-mobile' ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('font-body text-black font-normal'); ?>>

	<?php wp_body_open(); ?>
	<header class="transition duration-500 z-30 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'relative' : 'sticky top-0' ?>">
		<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
			<div class="bg-gradient-blue py-2 text-white relative lg:block hidden">
				<div
					class="absolute top-0 left-0 pointer-events-none w-full h-full overflow-hidden lg:after:absolute lg:after:w-40 lg:after:h-[80%] lg:after:top-0 lg:after:-right-5 lg:after:bg-gradient-green lg:after:opacity-20 lg:after:pointer-events-none lg:after:-skew-x-[35deg]">
				</div>
				<div class="container">
					<div class="lg:flex items-center justify-end">
						<form id="form-shares" action="<?php echo get_home_url() ?>"
							class="border border-white border-opacity-60 rounded-lg flex items-center  text-xs leading-none">
							<div class="py-3 pl-6 flex items-center">
								<div class="flex">
									<input type="radio" id="cp" name="investment" class="hidden peer"
										value="co_phieu">
									<label for="cp"
										class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-white after:transition-all after:duration-500 after:left-0 after:top-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-white before:border-white before:border-2 before:rounded-full before:left-0 before:top-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-white peer-checked:before:scale-50">
										<?php _e('Cổ phiếu', 'bsc') ?>
									</label>
								</div>
								<div class="flex ml-4 md:pr-[22px] pr-5 border-r border-white">
									<input type="radio" id="other" name="investment" class="hidden peer"
										checked>
									<label for="other"
										class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-white after:transition-all after:duration-500 after:left-0 after:top-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-white before:border-white before:border-2 before:rounded-full before:left-0 before:top-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-white peer-checked:before:scale-50">
										<?php _e('Khác', 'bsc') ?>
									</label>
								</div>
							</div>
							<div class="relative pl-3 pr-6">
								<input type="text" name="s" id="search-shares"
									placeholder="<?php _e('Tra cứu', 'bsc') ?>..."
									class="bg-transparent py-1 border-none focus:outline-0 focus:ring-transparent pb-2 font-medium min-w-36 h-9 peer text-white placeholder:text-white focus:shadow-none focus:border-none placeholder:opacity-60 hover:placeholder:opacity-100 placeholder:transition-all placeholder:duration-700 max-w-[167px]"
									autocomplete="off">
								<ul
									class="shares-result absolute py-2 z-30 w-full h-64 overflow-y-auto scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 text-white prose-a:block prose-a:px-[14px] prose-a:text-lg prose-a:font-semibold prose-a:uppercase prose-a:text-paragraph prose-a:rounded-md prose-a:py-3 prose-a:font-Helvetica rounded-lg">
									<li class="no-results text-center p-4 font-bold hidden text-black">
										<?php _e('Không thấy kết quả!', 'bsc') ?>
									</li>
									<div class="text-center loader hidden w-full h-full">
										<div
											class="h-full w-full flex flex-col justify-center items-center">
											<div role="status">
												<svg aria-hidden="true"
													class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
													viewBox="0 0 100 101" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
														fill="currentColor" />
													<path
														d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
														fill="currentFill" />
												</svg>
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
								</ul>
							</div>
						</form>
						<ul
							class="lg:flex menu_top items-center text-sm font-semibold xl:ml-12 lg:ml-10">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-top-header',
								'container' => '__return_false',
								'fallback_cb' => '__return_false',
								'items_wrap' => '%3$s',
								'depth' => 1,
							));
							?>
						</ul>
						<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
							<button data-dropdown-toggle="dropdownLanguage"
								class="text-white flex items-center gap-2 lg:ml-6 uppercase" type="button">
								<?php echo svg('global', '24', '24') ?>
								<?php echo pll_current_language(); ?>
								<?php echo svgpath('down', '', '', 'fill-white') ?>
							</button>
						<?php } ?>
					</div>
				</div>
			</div>

		<?php } ?>
		<div class="bg-white 2xl:py-[14px] py-3 shadow-base">
			<div class="container">
				<div class="flex justify-between items-center gap-3">
					<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
						<div class="flex items-center gap-2 relative">
							<div class="bar_mobile ">
								<?php echo svg('bar') ?>
							</div>
							<button type="button" class="open-search">
								<?php echo svgpath('search', '24', '24', 'fill-primary-300') ?>
							</button>


							<form action="<?php echo get_home_url() ?>"
								class="flex flex-col p-4 bg-white rounded-bl-lg rounded-br-lg gap-4 mb-4 absolute w-screen -left-5 top-14 [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 [&:not(.active)]:invisible visible form-search-mb origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 shadow-base">
								<div class="flex items-center gap-6">
									<div class="flex">
										<input type="radio" id="cp" name="investment"
											class="hidden peer">
										<label for="cp"
											class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-black after:transition-all after:duration-500 after:left-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-black before:border-black before:border-2 before:rounded-full before:left-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-black peer-checked:before:scale-50 text-xs after:top-1 before:top-1">
											<?php _e('Cổ phiếu', 'bsc') ?>
										</label>
									</div>
									<div class="flex items-center">
										<input type="radio" id="other" name="investment"
											class="hidden peer" checked>
										<label for="other"
											class="font-semibold cursor-pointer pl-5 relative after:absolute after:w-[13px] after:h-[13px] after:border-2 after:border-black after:transition-all after:duration-500 after:left-0 after:bg-transparent after:rounded-full before:absolute before:w-[13px] before:h-[13px] before:bg-black before:border-black before:border-2 before:rounded-full before:left-0 before:transition-all before:duration-500 before:scale-0 peer-checked:after:border-black peer-checked:before:scale-50 text-xs after:top-1 before:top-1">
											<?php _e('Khác', 'bsc') ?>
										</label>
									</div>
								</div>
								<div class="relative">
									<input id="search-shares" type="text" name="s"
										placeholder="Tra cứu..."
										class="bg-transparent border-none focus:outline-0 focus:ring-transparent pb-2 font-medium min-w-36 h-9 peer text-black placeholder:text-paragraph focus:shadow-none placeholder:transition-all placeholder:duration-700 max-h-full w-full py-2 transition-all duration-500 px-0 focus:px-3 focus:rounded-md focus:border focus:border-solid focus:border-gray-100 text-xs"
										autocomplete="off">
									<ul
										class="shares-result absolute py-2 z-30 w-full h-64 overflow-y-auto scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 text-white prose-a:block prose-a:px-[14px] prose-a:text-lg prose-a:font-semibold prose-a:uppercase prose-a:text-paragraph prose-a:rounded-md prose-a:py-3 prose-a:font-Helvetica rounded-lg">
										<li class="no-results text-center p-4 font-bold hidden text-black">
											<?php _e('Không thấy kết quả!', 'bsc') ?>
										</li>
										<div class="text-center loader hidden w-full h-full">
											<div
												class="h-full w-full flex flex-col justify-center items-center">
												<div role="status">
													<svg aria-hidden="true"
														class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
														viewBox="0 0 100 101" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
															fill="currentColor" />
														<path
															d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
															fill="currentFill" />
													</svg>
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
									</ul>
								</div>
							</form>
						</div>

					<?php } ?>
					<?php
					$custom_logo_id = get_field('h0_logo', 'option');
					if ($custom_logo_id) {
						$image = wp_get_attachment_image_src($custom_logo_id, 'medium');
					?>
						<a class="block" href="<?php echo get_bloginfo('url'); ?>"
							title="<?php echo get_bloginfo('description'); ?>">
							<img class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-24' : 'sm:max-w-24 max-w-16 ml-5' ?>"
								src="<?php echo esc_url($image[0]); ?>" loading="lazy">
						</a>
					<?php
					}
					?>

					<div class="<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?> relative flex items-center<?php } ?>">
						<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
							<div class="main_menu">
								<ul
									class="lg:flex hidden lg:items-center 2xl:gap-8 xl:gap-5 lg:gap-4 md:gap-3 font-semibold text-paragraph">
									<li class="menu-home">
										<a href="<?php echo get_home_url() ?>"
											class="block transition-all duration-500 hover:scale-110">
											<?php echo svg('home', 20) ?>
										</a>
									</li>
									<?php
									wp_nav_menu(array(
										'theme_location' => 'menu-1',
										'container' => '__return_false',
										'fallback_cb' => '__return_false',
										'items_wrap' => '%3$s',
										'depth' => 1,
									));
									?>
								</ul>

							</div>
						<?php } ?>
						<ul
							class="main_menu-navbar lg:bg-[#F3FBFE] w-full lg:max-w-[1006px] lg:absolute lg:shadow-menu lg:shadow-[#0000001A] lg:rounded-br-2xl lg:rounded-bl-2xl bg-gradient-menu lg:top-full 2xl:mt-[22px] lg:mt-4 2xl:p-10 p-5 lg:backdrop-blur-2xl lg:flex">
							<?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
								<div class="flex items-center justify-between mb-6">
									<div class="close-mobile">
										<?php echo svg('close', '24', '24') ?>
									</div>
									<div class="flex items-center gap-[12px]">
										<button data-dropdown-toggle="dropdownLanguage"
											class="text-black flex items-center gap-1.5 uppercase"
											type="button">
											<?php echo svg('global', '24', '24') ?>
											<?php echo svg('down') ?>
										</button>
										<div id="dropdownLanguage-bsc"
											class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
											<ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="change_language">
												<?php add_custom_class_to_current_lang(array('show_flags' => 0, 'show_names' => 1)); ?>
											</ul>
										</div>
										<?php if (have_rows('h1_button', 'option')) { ?>
											<?php
											$i = 1;
											while (have_rows('h1_button', 'option')) :
												the_row();
												if ($i == 2 && get_sub_field('title')) {
											?>
													<a href="<?php echo check_link(get_sub_field('link')); ?>"
														class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block'; ?>  2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 sm:text-base text-xxs">
														<span class="block relative z-10">
															<?php the_sub_field('title'); ?>
														</span>
													</a>
											<?php
													break;
												}
												$i++;
											endwhile;
											?>
										<?php } ?>

									</div>
								</div>

							<?php } ?>
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'container' => '__return_false',
								'fallback_cb' => '__return_false',
								'items_wrap' => '%3$s',
								'depth' => 3,
							));
							?>
						</ul>
						<?php if (have_rows('h1_button', 'option') && ! wp_is_mobile() && ! bsc_is_mobile()) : ?>
							<div class="flex items-center gap-x-4 2xl:ml-[60px] lg:ml-8">
								<?php
								$i = 1;
								while (have_rows('h1_button', 'option')) :
									the_row();
									$i++;
									if (get_sub_field('title')) {
								?>
										<a <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> rel="<?php the_sub_field('rel') ?>" href="<?php echo check_link(get_sub_field('link')) ?>"
											class="<?php echo ($i % 2 == 0) ? 'bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d]' : 'bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block'; ?>  2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 sm:text-base text-xxs">
											<span class="block relative z-10 ">
												<?php the_sub_field('title') ?>
											</span>
										</a>
								<?php
									}
								endwhile; ?>
							</div>

						<?php else : ?>
							<?php
							$i = 1;
							while (have_rows('h1_button', 'option')) :
								the_row();
								if ($i == 2 && get_sub_field('title')) {
							?>
									<a href="<?php echo check_link(get_sub_field('link')); ?>"
										class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-4  py-2 rounded-md font-semibold relative transition-all duration-500 sm:text-base text-xxs !leading-[1.667;]">
										<?php the_sub_field('title'); ?>
									</a>
							<?php
									break;
								}
								$i++;
							endwhile;
							?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
		<?php if (! wp_is_mobile() && ! bsc_is_mobile()) { ?>
			<div id="dropdownLanguage-bsc"
				class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
				<ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
					aria-labelledby="change_language">
					<?php add_custom_class_to_current_lang(array('show_flags' => 0, 'show_names' => 1)); ?>
				</ul>
			</div>

		<?php } ?>

	</header>