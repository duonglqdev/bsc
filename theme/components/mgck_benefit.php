<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> mgck_benefit" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('benefit')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid lg:grid-cols-4 grid-cols-2 gap-5':'block_slider-show-1 block_slider fli-dots-blue dot-bottom-40' ?>">
                <?php
                $i = 3;
                while (have_rows('benefit')): the_row();
                    $i++;
                    if ($i % 4 == 0) {
                        $style = 'linear-gradient(147deg, #FAFAFA 0%, #E5F4FF 78.66%);';
                    } elseif ($i % 4 == 1) {
                        $style = 'linear-gradient(327deg, #FAFAFA -10%, #E5F4FF 78.76%);';
                    } elseif ($i % 4 == 2) {
                        $style = 'linear-gradient(46deg, #E5F4FF 24.72%, #FAFAFA 105.17%);';
                    } elseif ($i % 4 == 3) {
                        $style = 'linear-gradient(226deg, #E5F4FF 26.88%, #FAFAFA 107.34%)';
                    }
                ?>
                    <div class="rounded-2xl <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' xl:p-[34px] xl:pt-[43px] p-6 min-h-[414px] shadow-base':'min-h-[440px] py-10 px-7 w-full block_slider-item' ?>"
                        style="background: <?php echo $style ?>">
                        <div class="max-w-[155px] w-full mx-auto">
                            <div class="relative w-full pt-[100%]">
                                <?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium', '', array('class' => 'absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105')) ?>
                            </div>
                        </div>
                        <div class="mt-4">
                            <?php if (get_sub_field('title')) { ?>
                                <h3 class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
                                    <?php the_sub_field('title') ?>
                                </h3>
                            <?php } ?>
                            <?php if (get_sub_field('mota')) { ?>
                                <div class="font-Helvetica text-justify <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                    <?php the_sub_field('mota') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>