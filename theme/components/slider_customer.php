<div class="bg-[#F3F9FC] slider_customer <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[121px] py-20':'py-[37.35px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-8':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="max-w-[1190px] mx-auto">
            <?php if (have_rows('gallery_up')) { ?>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-6':'block_slider-show-3' ?> block__slider-marquee">
                    <?php
                    while (have_rows('gallery_up')): the_row();
                    ?>
                        <div class="block_slider-item lg:w-1/6 md:w-1/4 w-1/3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] mx-[12px]':'py-2 mx-[7px]' ?>">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110 shadow-base <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-lg':'rounded' ?>">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full max-w-[80%] max-h-[70%] h-full object-contain inset-0 m-auto')) ?>
                            </a>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php } ?>
            <?php if (have_rows('gallery_down')) { ?>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-6':'block_slider-show-3' ?> block__slider-marquee marquee-rtl">
                    <?php
                    while (have_rows('gallery_down')): the_row();
                    ?>
                        <div class="block_slider-item lg:w-1/6 md:w-1/4 w-1/3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] mx-[12px]':'py-2 mx-[7px]' ?>">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="block relative partner-item pt-[45%] overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110 shadow-base <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-lg':'rounded' ?>">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full max-w-[80%] max-h-[70%] h-full object-contain inset-0 m-auto')) ?>
                            </a>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>