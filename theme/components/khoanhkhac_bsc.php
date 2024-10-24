<section class="lg:lg:my-[100px] my-10 khoanhkhac_bsc" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <?php if (get_sub_field('title')) { ?>
        <div class="container">
            <h2 class="heading-title mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        </div>
    <?php } ?>

    <div class="max-w-full w-full lg:px-0 px-4 overflow-hidden space-y-[30px]">
        <?php
        $images = get_sub_field('gallery_tren');
        if ($images): ?>
            <div class="data-slick block_slider-show-1 -mx-3" data-slick='{
			"slidesToShow": 4, 
			"slidesToScroll": 1, 
			"autoplay": true, 
			"autoplaySpeed": 0, 
			"pauseOnHover": true, 
			"pauseOnFocus": true,
			"dots": false, 
			"arrows": false, 
			"cssEase": "linear", 
			"speed": 10000, 
			"centerMode": true, 
			"centerPadding": "0", 
			"infinite": true,
			"responsive": [
				{
					"breakpoint": 768,
					"settings": {
						"slidesToShow": 2,
						"slidesToScroll": 1
					}
				}
			]
		}'>
                <?php foreach ($images as $image): ?>
                    <div class="slider-item mx-3">
                        <a href="<?php echo esc_url($image['url']); ?>"
                            class="block w-full relative pt-[60%]" data-fancybox>
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
            <div class="data-slick block_slider-show-1 -mx-3" dir="rtl" data-slick='{
			"slidesToShow": 4, 
			"slidesToScroll": 1, 
			"autoplay": true, 
			"autoplaySpeed": 0, 
			"pauseOnHover": true, 
			"pauseOnFocus": true,
			"dots": false, 
			"arrows": false, 
			"cssEase": "linear", 
			"speed": 10000, 
			"centerMode": true, 
			"centerPadding": "0", 
			"infinite": true,
			"rtl": true,
			"responsive": [
				{
					"breakpoint": 768,
					"settings": {
						"slidesToShow": 2,
						"slidesToScroll": 1
					}
				}
			]
		}'>
                <?php foreach ($images as $image): ?>
                    <div class="slider-item mx-3">
                        <a href="<?php echo esc_url($image['url']); ?>"
                            class="block w-full relative pt-[60%]" data-fancybox>
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