<section class="block_partner lg:py-[77px] py-14 relative" style="background-color: <?php the_sub_field('background') ?>">
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-12"><?php the_sub_field('title') ?></h2>
        <?php } ?>
        <?php
        if (have_rows('gallery')): ?>
            <div class="block_slider block_slider-show-2 no-dots -mx-4">
                <?php while (have_rows('gallery')): the_row(); ?>
                    <div class="block_slider-item px-4 py-6 lg:w-1/6 md:w-1/3 w-1/2">
                        <a href="<?php echo check_link(get_sub_field('link')) ?>" class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full shadow bg-white">
                            <?php echo wp_get_attachment_image(get_sub_field('logo'), 'medium', '', array('class' => 'absolute w-full max-w-[80%] h-full object-contain inset-0 m-auto')) ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if (get_sub_field('image_bg')) { ?>
        <div class="absolute lg:block hidden top-16 right-0 pointer-events-none">
            <?php echo svg_dir(get_sub_field('image_bg')) ?>
        </div>
    <?php } ?>
</section>