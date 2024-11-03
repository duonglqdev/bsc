<div class="xl:py-[121px] py-20 bg-[#F3F9FC] slider_customer" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-8">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="max-w-[1190px] mx-auto">
            <?php if (have_rows('gallery_up')) { ?>
                <div class="block_slider-show-6 block__slider-marquee">
                    <?php
                    while (have_rows('gallery_up')): the_row();
                    ?>
                        <div class="block_slider-item py-[12px] mx-[12px] lg:w-1/6 md:w-1/4 w-1/2">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full max-w-[80%] h-full object-contain inset-0 m-auto')) ?>
                            </a>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php } ?>
            <?php if (have_rows('gallery_down')) { ?>
                <div class="block_slider-show-6 block__slider-marquee marquee-rtl">
                    <?php
                    while (have_rows('gallery_down')): the_row();
                    ?>
                        <div class="block_slider-item py-[12px] mx-[12px] lg:w-1/6 md:w-1/4 w-1/2">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full bg-white transition-all duration-500 hover:scale-110 shadow-base">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full max-w-[80%] h-full object-contain inset-0 m-auto')) ?>
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