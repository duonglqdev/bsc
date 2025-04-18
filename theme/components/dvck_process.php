<?php
$generateRandomString = generateRandomString();
?>
<section class="bg-gradient-blue-300 dvck_process" <?php if (get_sub_field('id_class')) { ?>
	id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div
		class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:py-[100px] py-20' : 'py-[50px]' ?>">
		<div class="container lg:overflow-hidden">
			<?php if (get_sub_field('title')) { ?>
				<h2
					class="heading-title text-center hidden-br-pc <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'sm:text-[22px] text-lg mb-6' ?>">
					<?php the_sub_field('title') ?>
				</h2>
			<?php } ?>
			<?php if (have_rows('hanh_trinh')) { ?>
				<div
					class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'custom-tranx xl:translate-x-[120px] xl:grid-cols-4 grid-cols-2 lg:bg-transparent bg-white lg:p-0 p-5 lg:rounded-none lg:shadow-none shadow-base rounded-xl relative lg:after:hidden lg:before:hidden after:absolute after:w-[90%] after:h-[1px] after:bg-[#C9CCD2] after:top-1/2 after:-translate-y-1/2 after:left-1/2 after:-translate-x-1/2 before:absolute before:h-[90%] before:w-[1px] before:bg-[#C9CCD2] before:top-1/2 before:-translate-y-1/2 before:left-1/2 before:-translate-x-1/2' : 'grid-cols-2 bg-white p-5 rounded-xl relative after:absolute after:w-[90%] after:h-[1px] after:bg-[#C9CCD2] after:top-1/2 after:-translate-y-1/2 after:left-1/2 after:-translate-x-1/2 before:absolute before:h-[90%] before:w-[1px] before:bg-[#C9CCD2] before:top-1/2 before:-translate-y-1/2 before:left-1/2 before:-translate-x-1/2' ?>">
					<?php
					$i = 0;
					while (have_rows('hanh_trinh')) :
						the_row();
						$i++;
						$mobileClass = '';
						$pcClass='';
						if (wp_is_mobile() && bsc_is_mobile()) {
							switch ($i) {
								case 1:
									$mobileClass = 'mb-2 mr-2';
									break;
								case 2:
									$mobileClass = 'mb-2 ml-2';
									break;
								case 3:
									$mobileClass = 'mt-2 mr-2';
									break;
								case 4:
									$mobileClass = 'ml-2 mt-2';
									break;
							}
						}
						if (!wp_is_mobile() && !bsc_is_mobile()) {
							switch ($i) {
								case 1:
									$pcClass = 'lg:mb-0 mb-2 lg:mr-0 mr-2';
									break;
								case 2:
									$pcClass = 'lg:mb-0 mb-2 lg:ml-0 ml-2';
									break;
								case 3:
									$pcClass = 'lg:mt-0 mt-2 lg:mr-0 mr-2';
									break;
								case 4:
									$pcClass = 'lg:ml-0 ml-2 lg:mt-0 mt-2';
									break;
							}
						}

						switch ($i) {
							case 1:
								$icon = 'step-1';
								break;
							case 2:
								$icon = 'step-2';
								break;
							case 3:
								$icon = 'step-3';
								break;
							case 4:
								$icon = 'step-4';
								break;
						}

					?>
						<a href="<?php echo check_link(get_sub_field('link')) ?>"
							class="col-span-1 step-item transition-all duration-500 relative bg-no-repeat bg-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'min-h-[187px]' : 'min-h-[165px] rounded-lg hover:bg-gradient-blue hover:text-white'; ?> <?php echo esc_attr($mobileClass); ?> <?php echo esc_attr($pcClass); ?>">
							<div
								class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
								<div
									class="text-primary-300 group-hover:text-white lg:transition-all lg:duration-500">
									 <?php echo svg($icon) ?>
								</div>
								<div class="mt-[7px] text-center 2xl:text-xl xl:text-lg lg:text-base md:text-xl font-bold">
									<?php the_sub_field('title') ?>
								</div>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="bg-[#F0F9FF] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-16' : 'py-8' ?>" id="service-products">
		<div class="container">
			<?php if (get_sub_field('title_2')) { ?>
				<h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
					<?php the_sub_field('title_2') ?>
				</h2>
			<?php } ?>
			<?php if (have_rows('product')) { ?>
				<ul
					class="customtab-nav flex items-center relative border-b border-[#B8B8B8] overflow-x-auto whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'xl:gap-[100px] lg:gap-12 gap-6' : 'gap-8 no-scrollbar' ?>">
					<?php
					$i = 0;
					while (have_rows('product')) :
						the_row();
						$i++; ?>
						<li class="shrink-0">
							<button data-tabs="#<?php echo $generateRandomString ?>-<?php echo $i ?>"
								class="<?php if ($i == 1)
											echo 'active' ?> inline-flex <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pb-6 text-xl' : 'pb-4' ?> uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[4px] [&:not(.active)]:text-black text-[#000] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
								<img src="<?= the_sub_field('icon') ?>" alt="icon" loading="lazy" class="object-contain shrink-0 w-[30px] h-[30px]">
								<?php the_sub_field('title') ?>
							</button>
						</li>
					<?php endwhile; ?>
				</ul>
				<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-10' : 'mt-6' ?>">
					<?php
					$i = 0;
					while (have_rows('product')) :
						the_row();
						$i++;
					?>
						<div id="<?php echo $generateRandomString ?>-<?php echo $i ?>"
							class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?> <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'space-y-10' : 'space-y-6' ?>">
							<?php if (have_rows('service')) {
								$y = 0;
								while (have_rows('service')) :
									the_row();
									$y++;
									if ($y % 2 == 1) {
										$class = 'bg-white p-8 rounded-3xl flex lg:gap-16 lg:flex-row flex-col gap-8 items-center';
									} else {
										$class = 'bg-white p-8 rounded-3xl flex lg:flex-row-reverse flex-col lg:gap-16 gap-8 items-center';
									}
							?>
									<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? $class : 'bg-white p-4 rounded-2xl' ?>">
										<?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
											<div class="lg:w-[563px] lg:max-w-[50%] w-full">
												<div class="relative w-full pt-[62.166%] rounded-2xl overflow-hidden">
													<?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
												</div>
											</div>
										<?php } ?>
										<div class="flex-1 text-justify w-full">
											<?php if (get_sub_field('title')) { ?>
												<h3
													class="uppercase font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'xl:text-2xl text-lg lg:mb-6 mb-4' : 'text-xl mb-4' ?> text-primary-300">
													<?php the_sub_field('title') ?>
												</h3>
											<?php } ?>
											<?php if (get_sub_field('mota')) { ?>
												<p class="font-bold mb-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs' ?>">
													<?php the_sub_field('mota') ?>
												</p>
											<?php } ?>
											<?php if (have_rows('danh_sach')) { ?>
												<ul class="list-icon space-y-4 font-Helvetica mb-6 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs' ?>">
													<?php while (have_rows('danh_sach')) :
														the_row(); ?>
														<li class="list-icon-item">
															<?php the_sub_field('content') ?>
														</li>
													<?php endwhile; ?>
												</ul>
											<?php } ?>
											<?php
											if (have_rows('button')) {
												while (have_rows('button')) :
													the_row();
													if (get_sub_field('title')) {
											?>
														<a href="<?php echo check_link(get_sub_field('link')) ?>"
															class="btn-base-yellow <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-[12px] pl-4 pr-6' : 'py-3 px-5' ?> text-xs font-bold inline-flex items-center gap-x-3">
															<?php echo svg('arrow-btn', '20') ?>
															<?php the_sub_field('title') ?>
														</a>
											<?php
													}
												endwhile;
											}
											?>
											<?php if (wp_is_mobile() && bsc_is_mobile()) {
												if (get_sub_field('img_mobile')) {
													$img_mobile = get_sub_field('img_mobile');
												} else {
													$img_mobile = get_sub_field('img');
												}
												if ($img_mobile) {
											?>
													<div class="relative w-full pt-[115.5%] rounded-2xl overflow-hidden mt-6">
														<?php echo wp_get_attachment_image($img_mobile, 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
													</div>
											<?php }
											} ?>
										</div>
									</div>
							<?php
								endwhile;
							} ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>