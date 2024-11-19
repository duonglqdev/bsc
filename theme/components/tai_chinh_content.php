<section class="xl:py-[100px] py-20 relative tai_chinh_content" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="grid grid-cols-2 gap-9 items-center">
            <div class="col-span-1">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-8">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <div class="text-primary-300 2xl:text-2xl text-xl font-bold text-justify">
                    <?php the_sub_field('mota') ?>
                </div>
                <?php if (have_rows('content')) { ?>
                    <ul
                        class="list-icon space-y-[14px] mt-[30px] 2xl:text-2xl text-xl font-bold text-primary-300">
                        <?php while (have_rows('content')): the_row(); ?>
                            <li class="list-icon-item">
                                <?php the_sub_field('info') ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="col-span-1">
                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
            </div>
        </div>
    </div>
    <div class="absolute top-0 right-0 pointer-events-none -z-1">
        <?php echo wp_get_attachment_image(get_sub_field('keyvisual'), 'large') ?>
    </div>
</section>