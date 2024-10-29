<section class="about_info 2xl:my-[100px] my-20" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-4">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (get_sub_field('mota')) { ?>
            <div
                class="relative max-w-[734px] mx-auto lg:mb-[50px] mb-10 2xl:text-2xl text-xl font-bold text-primary-400 text-center">
                <div class="absolute lg:-left-10 lg:-top-5 -z-10 top-0 left-0">
                    <?php echo svg('quote') ?>
                </div>
                <?php the_sub_field('mota') ?>
            </div>
        <?php } ?>
        <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-20 gap-10 items-center">
            <div class="the_content text-black font-normal font-Helvetica">
                <?php the_sub_field('content') ?>
            </div>
            <?php if (have_rows('video_youtube')) {
                while (have_rows('video_youtube')): the_row();
                    if (get_sub_field('url_youtube')) { ?>
                        <a href="<?php echo check_link(get_sub_field('url_youtube')) ?>" data-fancybox=""
                            class="rounded-[10px] overflow-hidden pt-[54%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-35">
                            <?php echo wp_get_attachment_image(get_sub_field('avatar'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
                            <div
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1] transition-all duration-500 hover:scale-110">
                                <?php echo svg('play') ?>
                            </div>
                        </a>
            <?php
                    }
                endwhile;
            }
            ?>
        </div>
    </div>
</section>