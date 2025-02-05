<section class="bg-gradient-blue-100 taisao_luachon <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-14':'pt-10' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-8' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:flex 2xl:gap-[90px] gap-5':'' ?>">
            <?php if (have_rows('content')) { ?>
                <div class="flex-1 pb-5">
                    <div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 2xl:gap-x-[70px] gap-x-5 2xl:gap-y-[50px] gap-y-5':'gap-y-6' ?>">
                        <?php while (have_rows('content')): the_row(); ?>
                            <div class="col-auto">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="uppercase font-bold  text-primary-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:text-xl text-base xl:mb-4 mb-3':'text-lg mb-4' ?>">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <div class="text-justify font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                    <?php the_sub_field('mota') ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php } ?>
            <div class="w-full relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[495px] lg:max-w-[40%] max-w-[60%] mx-auto lg:mt-0 mt-24':'max-w-[77%] mx-auto mt-[90px]' ?>">
                <div class="relative z-[2] main_image">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large') ?>
                </div>
                <div class="absolute  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'-top-16 -right-6':'max-w-[65%] -top-12 right-0' ?>">
                    <?php echo wp_get_attachment_image(get_sub_field('icon'), 'large') ?>
                </div>
            </div>
        </div>
    </div>
</section>