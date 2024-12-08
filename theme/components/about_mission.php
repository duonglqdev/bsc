<section class="about_mission <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:my-[100px] my-20':'mt-[50px] mb-[60px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (have_rows('su_menh_tam_nhin')) { ?>
            <div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-5 md:grid-cols-2':'grid-cols-1 gap-4' ?>">
                <?php while (have_rows('su_menh_tam_nhin')): the_row(); ?>
                    <div class="h-full bg-gradient-blue-50 rounded-[10px]  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-9 2xl:py-20 py-10':'px-6 py-5' ?>">
                        <?php if (get_sub_field('title')) { ?>
                            <h2 class="heading-title mb-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xl' ?>">
                                <?php the_sub_field('title') ?>
                            </h2>
                        <?php } ?>
                        <?php if (get_sub_field('mota')) { ?>
                            <div class="text-primary-300 font-bold text-justify <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl':'' ?>">
                                <?php the_sub_field('mota') ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-10':'mt-8' ?>">
            <?php if (get_sub_field('title_2')) { ?>
                <h2 class="heading-title  text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-5':'text-xl mb-6' ?>">
                    <?php the_sub_field('title_2') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('gia_tri_cot_loi')) { ?>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid md:grid-cols-3 grid-cols-1 gap-5':'block_slider-show-1 fli-dots-blue block_sameheight' ?>" <?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
                             data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'       
                <?php } ?>>
                    <?php while (have_rows('gia_tri_cot_loi')): the_row(); ?>
                        <div
                            class="bg-gradient-blue-50 rounded-[10px] group relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'px-7 pt-4 2xl:pb-14 pb-5 h-full transition-all duration-500 after:w-full after:h-full after:inset-0 after:absolute after:bg-gradient-blue after:transition-all after:duration-500 after:opacity-0 after:invisible hover:after:opacity-100 hover:after:visible after:rounded-[10px] value-item':'px-6 pt-5 pb-10 w-full block_slider-item sameheight_item' ?>">
                            <div class="relative z-10">
                                <div class="flex items-center justify-between <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-5':'mb-4' ?>">
                                    <?php if (get_sub_field('title')) { ?>
                                        <h3 class="uppercase 2xl:text-2xl text-xl font-bold  transition-all duration-500 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'group-hover:text-white':'' ?>">
                                            <?php the_sub_field('title') ?>
                                        </h3>
                                    <?php } ?>
                                    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'max-w-[45px]' ?>">
                                    <?php
                                    if (get_sub_field('icon')) {
                                        echo svg_dir(get_sub_field('icon'));
                                    }
                                    ?>

                                    </div>
                                </div>
                                <?php if (get_sub_field('mota')) { ?>
                                    <div class="text-primary-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg group-hover:text-white':'' ?> font-bold text-justify transition-all duration-500 wppc">
                                        <?php the_sub_field('mota') ?>
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>