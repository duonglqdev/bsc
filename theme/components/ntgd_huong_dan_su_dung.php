<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'xl:my-[100px] my-20' : 'my-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-10 hidden-br-pc' : 'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('introduce')) { ?>
            <div class="slider-tutorial <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'block_slider-show-2' : 'block_slider-show-1 dots-left fli-dots-blue' ?>"
                data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'true' : 'false' ?>, "pageDots": <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'false' : 'true' ?>, "cellAlign": "left","contain": true, "autoPlay":false}'>
                <?php
                while (have_rows('introduce')): the_row();
                    $style = get_sub_field('style') ?: 'dark';
                    if ($style == 'dark') {
                        $color1 = 'text-white';
                        $color2 = 'text-white';
                    } else {
                        $color1 = 'text-primary-300';
                        $color2 = '';
                    }
                ?>
                    <div class="block_slider-item min-h-[420px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-[57.686567%] mr-[23px]' : 'w-full' ?>">
                        <div class="relative rounded-[20px] overflow-hidden h-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pt-[54.33376%]' : 'pt-[125.373%]' ?>">
                            <?php if (!wp_is_mobile() && !bsc_is_mobile()) : ?>
                                <?php echo wp_get_attachment_image(get_sub_field('background'), 'full', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
                            <?php else :
                                if (get_sub_field('background_mobile')) {
                                    $background_mobile = get_sub_field('background_mobile');
                                } else {
                                    $background_mobile = get_sub_field('background');
                                }
                            ?>
                                <?php echo wp_get_attachment_image($background_mobile, 'full', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
                            <?php endif; ?>
                            <div
                                class="absolute w-full h-full inset-0 z-10 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pt-[75px] pb-[65px] 2xl:px-[53px] px-8' : 'py-10 px-5' ?>">
                                <div class="desc h-full flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'max-w-[60%]' : '' ?>">
                                    <?php if (get_sub_field('title')) { ?>
                                        <h3 class="font-bold hidden-br-mb <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-2xl mb-4' : 'text-lg' ?> <?php echo $color1 ?>">
                                            <?php the_sub_field('title') ?>
                                        </h3>
                                    <?php  } ?>
                                    <?php if (get_sub_field('content')) { ?>
                                        <div
                                            class="prose-ul:pl-5 prose-ul:list-disc <?php echo $color2 ?> font-Helvetica mb-5 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs' ?>">
                                            <?php the_sub_field('content') ?>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if (have_rows('button')) {
                                        while (have_rows('button')): the_row();
                                            if (get_sub_field('title')) {
                                    ?>
                                                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-auto' : 'mt-4' ?>">
                                                    <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                                        class="btn-base-yellow inline-flex items-center gap-x-3 text-xs <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-[12px] pl-4 pr-6' : 'px-5 py-3' ?>" rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?>>
                                                        <?php echo svg('arrow-btn', '16', '16') ?>
                                                        <?php the_sub_field('title') ?>
                                                    </a>
                                                </div>
                                    <?php
                                            }
                                        endwhile;
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php if ($style == 'dark') { ?>
                                <?php echo svgClass('after-slider', '', '', 'absolute w-full h-full inset-0 pointer-events-none') ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>