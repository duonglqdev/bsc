<section class="lg:pt-14 pt-10 bg-gradient-blue-100 taisao_luachon" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title 2xl:mb-10 mb-8">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="lg:flex 2xl:gap-[90px] gap-12">
            <?php if (have_rows('content')) { ?>
                <div class="flex-1">
                    <div class="grid grid-cols-2 2xl:gap-x-[70px] lg:gap-x-10 gap-x-5 2xl:gap-y-[50px] gap-y-5">
                        <?php while (have_rows('content')): the_row(); ?>
                            <div class="col-auto">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="uppercase font-bold text-xl mb-4 text-primary-400">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <div class="text-justify font-Helvetica">
                                    <?php the_sub_field('mota') ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php } ?>
            <div class="w-full lg:w-[495px] lg:max-w-[40%] relative">
                <div class="relative z-[2] main_image">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large') ?>
                </div>
                <div class="lg:block hidden absolute lg:-top-16 top-0 lg:-right-6 right-0">
                    <?php echo wp_get_attachment_image(get_sub_field('icon'), 'large') ?>
                </div>
            </div>
        </div>
    </div>
</section>