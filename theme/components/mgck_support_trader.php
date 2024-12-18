<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> mgck_support_trader" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('support')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-3 gap-5':'block_slider block_slider-show-1 fli-dots-blue' ?>">
                <?php while (have_rows('support')): the_row(); ?>
                    <div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[230px]':'min-h-[192px] w-full block_slider-item' ?>"
                        style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
                        <div class="flex h-full">
                            <div class="w-1/2 h-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-auto pl-7 pb-10' ?>">
                                <div
                                    class="flex flex-col justify-end h-full font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:ml-10 ml-6 pb-[43px]':'' ?>">
                                    <?php if (get_sub_field('title')) { ?>
                                        <p class="font-bold mb-1 2xl:text-xl text-lg">
                                            <?php the_sub_field('title') ?>
                                        </p>
                                    <?php } ?>
                                    <?php
                                    if (have_rows('button')) {
                                        while (have_rows('button')): the_row();
                                            if (get_sub_field('title')) {
                                    ?>
                                                <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                                    class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs mb-3">
                                                    <?php the_sub_field('title') ?>
                                                    <?php echo svg('arrow-btn', '12', '12') ?>
                                                </a>
                                    <?php
                                            }
                                        endwhile;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'lg:ml-auto')) ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>