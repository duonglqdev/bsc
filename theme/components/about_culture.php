<section class="lg:my-[100px] my-16 about_culture" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-6">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (get_sub_field('mota')) { ?>
            <div
                class="relative max-w-[946px] mx-auto lg:mb-[50px] mb-10 lg:text-2xl text-xl font-bold text-primary-400 text-center">
                <div class="absolute lg:-left-10 lg:-top-5 -z-10 top-0 left-0">
                    <?php echo svg('quote') ?>
                </div>
                <?php the_sub_field('mota') ?>
            </div>
        <?php } ?>
        <?php if (have_rows('van_hoa')) { ?>
			<div class="relative about_culture-swiper">
				<div class="swiper-container about_culture-list">
					<div class="swiper-wrapper">
						<?php while (have_rows('van_hoa')): the_row(); ?>
							<div class="swiper-slide">
								<a href="<?php echo check_link(get_sub_field('link')) ?>"
									class="about_culture-item block rounded-[15px] overflow-hidden relative after:absolute after:w-full after:h-full after:inset-0 after:bg-[#000] after:bg-opacity-35">
									<?php if (get_sub_field('img')) { ?>
										<div class="relative w-full pt-[58%]">
											<?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
										</div>
									<?php } ?>
									<?php if (get_sub_field('title')) { ?>
										<h4
											class="text-center p-4 text-primary-400 font-bold bg-white hidden title lg:text-2xl text-lg line-clamp-1">
											<?php the_sub_field('title') ?>
										</h4>
									<?php } ?>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
					
				</div>
				<div class="swiper-button-prev bg-none left-0">
						<?php echo svg('prev') ?>
					</div>
					<div class="swiper-button-next bg-none right-0">
						<?php echo svg('next') ?>
					</div>
			</div>
        <?php } ?>
    </div>
</section>