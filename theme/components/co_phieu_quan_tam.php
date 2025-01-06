<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> co_phieu_quan_tam" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('danh_sach')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-2 gap-5':'block_slider block_slider-show-1 fli-dots-blue dots-left' ?>">
                <?php while (have_rows('danh_sach')): the_row(); ?>
                    <div class="rounded-xl overflow-hidden bg-no-repeat bg-cover flex px-8 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-11 py-5 min-h-[228px]':'pl-6 py-4 pr-3 block_slider-item w-full min-h-[167px] items-center' ?>"
                        style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'large') ?>)">
                        <div class="w-1/2 h-full">
                            <div
                                class="flex flex-col lg:justify-end justify-center h-full font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:ml-10':'pb-[43px]' ?>">
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
                        <div class="w-1/2 h-full flex items-center justify-center">
                            <?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium') ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>