<section class="download__app lg:py-[75px] py-12" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
	<div class="container">
		<div class="grid grid-cols-2 gap-5">
			<div class="md:col-span-1 col-span-full">
				<?php if (get_sub_field('title')) { ?>
					<h2 class="heading-title mb-4"><?php the_sub_field('title') ?></h2>
				<?php } ?>
				<?php if (get_sub_field('mota')) { ?>
					<p class="uppercase text-primary-300 text-2xl font-bold mb-10">
						<?php the_sub_field('mota') ?>
					</p>
				<?php  } ?>
				<div class="relative ">
				<?php if (have_rows('trai_nghiem')) {
					$i = 0;
					while (have_rows('trai_nghiem')): the_row();
						$i++; ?>
						<div data-download="<?php echo $i ?>" class="<?php if ($i == 1) echo 'active' ?> [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:invisible visible [&:not(.active)]:pointer-events-none pointer-events-auto transition-all duration-500 absolute w-full h-full top-0 left-0">
							<?php if (have_rows('qr_code')) {
								while (have_rows('qr_code')): the_row(); ?>
									<div class="flex lg:gap-11 gap-5 items-center">
										<div class="qr w-52 max-w-[40%]">
											<?php echo wp_get_attachment_image(get_sub_field('img'), 'medium') ?>
										</div>
										<ul class="flex-1 space-y-4 list-icon">
											<?php if (have_rows('mota')) {
												while (have_rows('mota')): the_row(); ?>
													<li class="text-lg font-semibold list-icon-item">
														<?php the_sub_field('content') ?>
													</li>
											<?php
												endwhile;
											}
											?>
											<?php if (have_rows('button')) {
												while (have_rows('button')): the_row();
													if (get_sub_field('title')) { ?>
														<li>
															<a href="<?php echo check_link(get_sub_field('link')) ?>"
																class="btn-base-yellow">
																<span
																	class="inline-flex items-center gap-x-3 relative z-10"><?php echo svg('arrow-btn', '20') ?><?php the_sub_field('title') ?></span>
															</a>
														</li>
											<?php
													};
												endwhile;
											}
											?>
										</ul>
									</div>
							<?php
								endwhile;
							}
							?>
							<div class="lg:mt-[88px] mt-10">
								<ul class="flex items-center gap-3">
									<?php if (have_rows('icon_app')) {
										while (have_rows('icon_app')): the_row() ?>
											<li>
												<a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank" rel="nofollow"
													class="w-12 h-12 p-2 rounded-md bg-gradient-menu inline-block group">
													<?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium', '', array('class' => 'transition-all group-hover:scale-110')) ?>
												</a>
											</li>
									<?php endwhile;
									} ?>
									<?php if (have_rows('button')) {
										while (have_rows('button')): the_row();
											if (get_sub_field('title')) { ?>
												<li>
													<a href="<?php echo check_link(get_sub_field('link')) ?>"
														class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 <?php if (have_rows('icon_app')) echo 'ml-9' ?>">
														<?php echo svg('arrow-btn', '20', '20') ?>
														<?php the_sub_field('title') ?>
													</a>
												</li>
									<?php };
										endwhile;
									} ?>
								</ul>
							</div>
						</div>
				<?php endwhile;
				} ?>

				</div>
			</div>
			<?php if (have_rows('trai_nghiem')) {
			?>
				<div class="md:col-span-1 col-span-full ">
					<?php
					$i = 0;
					while (have_rows('trai_nghiem')): the_row();
						$i++;
					?>
						<div data-download="<?php echo $i ?>" class="<?php if ($i > 1) echo 'hidden' ?>">
							<?php
							$images = get_sub_field('gallery');
							$total_images = count($images);
							if ($images): ?>
								<?php if ($total_images > 1) { ?>
									<div class="flex justify-center items-center gap-6">
										<?php foreach ($images as $image): ?>
											<div class="w-[210px] max-w-[50%]">
												<div class="relative pt-[203%]">
													<img src="<?php echo esc_url($image['sizes']['medium']); ?>"
														alt="<?php echo esc_attr($image['alt']); ?>"
														class="absolute w-full h-full inset-0 object-cover border-[5px] rounded-2xl border-[#e3e3e3]">
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								<?php } else {
								?>
									<?php foreach ($images as $image): ?>
										<img src="<?php echo esc_url($image['sizes']['large']); ?>"
											alt="" class="w-full h-auto max-h-[426px]">
									<?php endforeach; ?>
								<?php
								} ?>
							<?php endif; ?>
						</div>
					<?php endwhile;
					?>
					<div class="text-center">
						<ul class="inline-flex justify-center gap-8 mt-[30px] pb-2 border-b border-[#D9D9D9] relative">
							<?php
							$i = 0;
							while (have_rows('trai_nghiem')): the_row();
								$i++;
							?>
								<li>
									<button type="button" data-tab-download="<?php echo $i ?>"
										class="font-bold text-black [&:not(.active)]:text-opacity-70 transition-all duration-500 hover:scale-105 <?php if ($i == 1) echo 'active' ?>">
										<?php the_sub_field('title') ?>
									</button>
								</li>
							<?php endwhile; ?>
							<span class="line absolute w-1/2 bottom-0 h-[2px] bg-yellow-100 duration-500 transition-all"></span>
						</ul>

					</div>
				</div>
			<?php
			} ?>
		</div>
	</div>
</section>