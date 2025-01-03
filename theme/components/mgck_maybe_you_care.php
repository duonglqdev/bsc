<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-10':'my-[50px]' ?> mgck_maybe_you_care" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('content')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid lg:grid-cols-2 grid-cols-1 gap-5':'space-y-5' ?>">
                <?php while (have_rows('content')): the_row(); ?>
                    <div class="rounded-xl overflow-hidden bg-no-repeat bg-cover flex  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[228px] px-11 py-5':'min-h-[184px] pl-5 py-3' ?>"
                        style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
                        <div class="w-1/2 h-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-auto pb-5' ?>">
                            <div
                                class="h-full font-Helvetica  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pb-[43px] ml-10 flex flex-col justify-end':'' ?>">
                                <?php if (get_sub_field('title')) { ?>
                                    <p class="font-bold mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'text-lg' ?>">
                                        <?php the_sub_field('title') ?>
                                    </p>
                                <?php } ?>
                                <?php
                                if (have_rows('button')) {
                                    while (have_rows('button')): the_row();
                                        if (get_sub_field('title')) {
                                ?>
                                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                                class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 text-xs">
                                                <?php the_sub_field('title') ?>
                                                <?php echo svg('arrow-btn', '12', '12') ?>
                                            </a>
                                <?php
                                        };
                                    endwhile;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="w-1/2 h-full flex items-center justify-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'m-auto' ?>">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'large') ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>