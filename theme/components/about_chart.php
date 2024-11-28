<section class="lg:py-[100px] py-16 bg-gradient-blue-to-top" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title 2xl:mb-10 mb-8 text-center">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <picture>
            <?php if (get_sub_field('img_mobile')) { ?>
                <source media="(max-width:1024px)"
                    srcset="<?php echo wp_get_attachment_image_url(get_sub_field('img_mobile', 'full')) ?>">
            <?php } ?>
            <?php if (get_sub_field('img_desktop')) { ?>
                <img loading="lazy" src="<?php echo wp_get_attachment_image_url(get_sub_field('img_desktop'), 'full') ?>" alt="<?php the_sub_field('title') ?>">
            <?php } ?>
        </picture>
    </div>
</section>