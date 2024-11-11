<section class="my-16 contact_content" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
            <div class="col-span-1 max-w-[640px]">
                <div class="relative w-full pt-[71.25%] overflow-hidden rounded-[10px]">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
                </div>
            </div>
            <div class="col-span-1 font-Helvetica">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="font-bold text-2xl mb-5 text-primary-300">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php if (get_sub_field('content')) { ?>
                    <div
                        class="prose-strong:inline-flex prose-strong:font-medium prose-strong:items-center prose-strong:gap-3 prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-ul:pl-7 prose-ul:list-disc prose-ul:mt-2 prose-ul:mb-5 prose-p:mb-5 prose-a:text-primary-300 prose-strong:mr-1 content-contact">
                        <?php the_sub_field('content') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>