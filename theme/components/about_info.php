<section class="about_info <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:my-[100px] my-20':'my-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-4">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (get_sub_field('mota')) { ?>
            <div
                class="relative font-bold text-primary-400 text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-[50px] 2xl:text-2xl text-xl max-w-[734px] mx-auto':'mb-4' ?>">
                <div class="absolute pointer-events-none -top-5 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'-left-10 ':'w-[52px] ' ?>">
                    <?php echo svgClass('quote','','','max-w-full') ?>
                </div>
                <?php the_sub_field('mota') ?>
            </div>
        <?php } ?>
        <div class="grid items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 gap-20':'grid-cols-1 gap-6' ?>">
            <div class="prose-p:mb-4 text-justify text-black font-normal font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                <?php the_sub_field('content') ?>
            </div>
            <?php if (have_rows('video_youtube')) {
                while (have_rows('video_youtube')): the_row();
                    if (get_sub_field('url_youtube')) { ?>
                        <a href="<?php echo check_link(get_sub_field('url_youtube')) ?>" data-fancybox=""
                            class="rounded-[10px] overflow-hidden pt-[54%] relative block">
                            <?php echo wp_get_attachment_image(get_sub_field('avatar'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
                            <div
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1] transition-all duration-500 hover:scale-110 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'max-w-[67px]' ?>">
                                <?php echo svgClass('play','','','max-w-full') ?>
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