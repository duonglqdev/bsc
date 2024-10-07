<section class="about_mission lg:mb-[100px] mb-20" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (have_rows('su_menh_tam_nhin')) { ?>
            <div class="grid gap-5 md:grid-cols-2 grid-cols-1">
                <?php while (have_rows('su_menh_tam_nhin')): the_row(); ?>
                    <div class="h-full bg-gradient-blue-50 rounded-[10px] lg:px-9 px-4 lg:py-20 py-10">
                        <?php if (get_sub_field('title')) { ?>
                            <h2 class="heading-title mb-4">
                                <?php the_sub_field('title') ?>
                            </h2>
                        <?php } ?>
                        <?php if (get_sub_field('mota')) { ?>
                            <div class="text-primary-300 lg:text-2xl text-xl font-bold text-justify">
                                <?php the_sub_field('mota') ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
        <div class="mt-10">
            <?php if (get_sub_field('title_2')) { ?>
                <h2 class="heading-title mb-5 text-center">
                    <?php the_sub_field('title_2') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('gia_tri_cot_loi')) { ?>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
                    <?php while (have_rows('gia_tri_cot_loi')): the_row(); ?>
                        <div
                            class="h-full bg-gradient-blue-50 rounded-[10px] lg:px-7 px-4 pt-4 lg:pb-14 pb-5">
                            <div class="flex items-center justify-between mb-5">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="uppercase text-2xl font-bold">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <?php
                                if (get_sub_field('icon')) {
                                    echo svg_dir(get_sub_field('icon'));
                                }
                                ?>
                            </div>
                            <?php if (get_sub_field('mota')) { ?>
                                <div class="text-primary-400 text-lg font-bold text-justify">
                                    <?php the_sub_field('mota') ?>
                                </div>
                            <?php  } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>