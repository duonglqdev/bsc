<section class="lg:2xl:my-[100px] my-10 khoanhkhac_bsc" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <?php if (get_sub_field('title')) { ?>
        <div class="container">
            <h2 class="heading-title 2xl:mb-10 mb-8">
                <?php the_sub_field('title') ?>
            </h2>
        </div>
    <?php } ?>

    <div class="max-w-full w-full lg:px-0 px-4 overflow-hidden space-y-4">
        <?php
        $images = get_sub_field('gallery_tren');
        if ($images): ?>
            <div class="block_slider-show-4 -mx-3 block__slider-marquee">
                <?php foreach ($images as $image): ?>
                    <div class="block_slider-item px-3 py-3 lg:w-1/4 w-1/2">
                        <a href="<?php echo esc_url($image['url']); ?>"
                            class="block w-full relative pt-[60%] transition-all duration-500 hover:scale-105 rounded-[10px] overflow-hidden" data-fancybox>
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>"
                                class="absolute w-full h-full inset-0 object-cover rounded-[10px]">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php
        $images = get_sub_field('gallery_duoi');
        if ($images): ?>
            <div class="block_slider-show-4 -mx-3 block__slider-marquee marquee-rtl" >
                <?php foreach ($images as $image): ?>
                    <div class="block_slider-item px-3 py-3 lg:w-1/4 w-1/2">
                        <a href="<?php echo esc_url($image['url']); ?>"
                            class="block w-full relative pt-[60%] transition-all duration-500 hover:scale-105 rounded-[10px] overflow-hidden" data-fancybox>
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>"
                                class="absolute w-full h-full inset-0 object-cover rounded-[10px]">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>