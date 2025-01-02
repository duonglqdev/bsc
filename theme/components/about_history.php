<section class="about_history bg-primary-50 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-14':'pt-6 pb-[30px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-12 text-primary-700':'mb-4 text-center' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('history')) { ?>
            <div class="about_history-content block_slider-show-1">
                <?php
                while (have_rows('history')): the_row();
                ?>
                    <div class="w-full block_slider-item">
                        <div class="flex <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'items-center lg:flex-row flex-col-reverse':'flex-col flex-col-reverse' ?>">
                            <?php if (get_sub_field('img')) { ?>
                                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:max-w-[547px] w-full lg:mt-0 mt-6':'mt-6' ?>">
                                    <div class="rounded-[20px] overflow-hidden relative pt-[70.21%] group">
                                        <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-110')) ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:ml-20 lg:ml-10 flex-1 ':'mt-0' ?>">
                                <?php if (get_sub_field('nam')) { ?>
                                    <h3
                                        class="text-primary-500 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[75px] md:text-5xl mb-5':'text-[35px] mb-4 text-center leading-none' ?>">
                                        <?php the_sub_field('nam') ?>
                                    </h3>
                                <?php } ?>
                                <?php if (get_sub_field('mota')) { ?>
                                    <div class="text-primary-500 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-4':'text-lg mb-[15px]' ?>">
                                        <?php the_sub_field('mota') ?>
                                    </div>
                                <?php } ?>
                                <?php if (get_sub_field('content')) { ?>
                                    <div class="font-Helvetica text-[#000] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                        <?php the_sub_field('content') ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[940px] mx-auto mt-[45px]':'mt-4' ?>">
                <div
                    class="about_history-nav <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mb' ?> -mx-4 after:absolute after:border-b after:border-[#384352] after:border-opacity-10 after:h-[1px] after:bottom-2 after:w-4/5 after:left-1/2 after:-translate-x-1/2 block_slider-show-5">
                    <?php
                    while (have_rows('history')): the_row();
                    ?>
                        <div
                            class="block_slider-item px-4 [&:not(.slick-current)]:text-black  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'[&:not(.slick-current)]:text-opacity-60':'[&:not(.slick-current)]:text-opacity-50 text-xs' ?> text-primary-400 [&:not(.slick-current)]:font-semibold font-bold [&:not(.slick-current)]:text-base text-lg pb-6 relative after:absolute after:w-3 after:h-3 after:rounded-full after:bg-[#384352] after:bg-opacity-20 [&:not(.slick-current)]:after:bottom-0 after:bottom-1 after:left-1/2 after:-translate-x-1/2 about_history-item cursor-pointer ">
                            <div class="text-center">
                                <?php the_sub_field('nam') ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        <?php  } ?>
    </div>
</section>