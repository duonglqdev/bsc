<section
    class="strategic__partner lg:py-[105px] py-16 relative after:absolute after:inset-0 after:w-full after:h-full after:pointer-events-none after:bg-gradient-blue-to-bottom after:opacity-40" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="grid lg:grid-cols-2 xl:gap-[110px] gap-10">
            <div class="col-span-1">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title text-primary-700">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php if (get_sub_field('content')) { ?>
                    <div class="mt-5 font-Helvetica the_content text-[#000]">
                        <?php the_sub_field('content') ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-span-1">
                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large') ?>
            </div>
        </div>
    </div>
</section>