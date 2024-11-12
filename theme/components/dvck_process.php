<section class="bg-gradient-blue-300 dvck_process" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="xl:py-[100px] py-20">
        <div class="container overflow-hidden">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title text-center mb-10">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('hanh_trinh')) { ?>
                <div class="grid grid-cols-4 lg:translate-x-[120px]">
                    <?php while (have_rows('hanh_trinh')): the_row(); ?>
                        <a href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="col-span-1 min-h-[187px] step-item transition-all duration-500 relative bg-no-repeat bg-full">
                            <div
                                class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
                                <div
                                    class="text-primary-300 group-hover:text-white transition-all duration-500">
                                    <?php echo svg_dir(get_sub_field('icon')) ?>
                                </div>
                                <div class="mt-[7px] text-center text-xl font-bold">
                                    <?php the_sub_field('title') ?>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>