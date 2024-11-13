<section class="xl:my-[100px] my-20" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('introduce')) { ?>
            <div class="block_slider-show-2 slider-tutorial"
                data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": true, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":3000}'>
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
                    <div class="block_slider-item lg:w-[57.686567%] w-full mr-[23px] min-h-[420px]">
                        <div class="relative pt-[54.33376%]  rounded-[20px] overflow-hidden h-full">
                            <?php echo wp_get_attachment_image(get_sub_field('background'), 'full', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
                            <div
                                class="lg:pt-[75px] pt-10 lg:pb-[65px] pb-10 lg:px-[53px] px-8 absolute w-full h-full inset-0 z-10">
                                <div class=" desc lg:max-w-[60%] h-full flex flex-col">
                                    <?php if (get_sub_field('title')) { ?>
                                        <h3 class="font-bold text-2xl <?php echo $color1 ?> mb-4">
                                            <?php the_sub_field('title') ?>
                                        </h3>
                                    <?php  } ?>
                                    <?php if (get_sub_field('content')) { ?>
                                        <div
                                            class="prose-ul:pl-5 prose-ul:list-disc <?php echo $color2 ?> font-Helvetica mb-5">
                                            <?php the_sub_field('content') ?>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if (have_rows('button')) {
                                        while (have_rows('button')): the_row();
                                            if (get_sub_field('title')) {
                                    ?>
                                                <div class="mt-auto">
                                                    <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                                        class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
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
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>