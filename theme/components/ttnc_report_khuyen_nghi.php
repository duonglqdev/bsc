<section class="xl:[my-100px] my-20 ttnc_report_khuyen_nghi" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="flex justify-between items-center mb-8">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title"><?php the_sub_field('title') ?></h2>
            <?php } ?>
            <?php if (have_rows('button')) {
                while (have_rows('button')): the_row();
                    if (get_sub_field('title')) { ?>
                        <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
                            <?php echo svg('arrow-btn', '16', '16') ?>
                            <?php the_sub_field('title') ?>
                        </a>
            <?php };
                endwhile;
            } ?>
        </div>
        <?php if (have_rows('khuyen_nghi')) { ?>
            <div class="block_slider block_slider-show-3 has-nav no-dots -mx-3 slider-tutorial dmkm">
                <?php while (have_rows('khuyen_nghi')): the_row(); ?>
                    <div class="block_slider-item px-3 lg:w-1/3 w-1/2">
                        <div class="min-h-[223px] rounded-xl overflow-hidden flex items-center"
                            style="background-color:<?php the_sub_field('background_color') ?>;">
                            <div class="pl-6 py-5 pr-1 w-1/2">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="font-bold 2xl:text-2xl text-xl mb-2">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <?php if (have_rows('button')) {
                                    while (have_rows('button')): the_row();
                                        if (get_sub_field('title')) { ?>
                                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                                class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-xs">
                                                <?php echo svg('arrow-btn', '12', '12') ?>
                                                <?php the_sub_field('title') ?>
                                            </a>
                                <?php };
                                    endwhile;
                                } ?>
                            </div>
                            <div class="w-1/2">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium') ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>