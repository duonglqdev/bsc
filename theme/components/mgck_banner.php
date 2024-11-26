<section class="xl:my-[100px] my-20 mgck_banner" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="bg-no-repeat bg-cover lg:py-0 py-5 rounded-3xl overflow-hidden lg:min-h-[438px] flex flex-col justify-center"
            style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
            <div class="lg:max-w-[507px] lg:ml-[114px] ml-10">
                <?php if (get_sub_field('title_big')) { ?>
                    <h3
                        class="font-bold uppercase 2xl:text-[40px] text-3xl text-primary-300 !leading-[1.35] mb-6">
                        <?php the_sub_field('title_big') ?>
                    </h3>
                <?php } ?>
                <?php if (get_sub_field('title_small')) { ?>
                    <div class="font-bold font-Helvetica lg:text-xl">
                        <?php the_sub_field('title_small') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>