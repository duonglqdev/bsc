<section class="about_history bg-primary-50 py-14" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-primary-700 mb-12">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('history')) { ?>
            <div class="about_history-content block_slider-show-1">
                <?php
                while (have_rows('history')): the_row();
                ?>
                    <div class="w-full block_slider-item">
                        <div class="lg:flex items-center">
                            <?php if (get_sub_field('img')) { ?>
                                <div class="max-w-[547px] w-full">
                                    <div class="rounded-[20px] overflow-hidden relative pt-[70.21%] group">
                                        <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-110')) ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="2xl:ml-20 lg:ml-10 lg:mt-0 mt-5 flex-1">
                                <?php if (get_sub_field('nam')) { ?>
                                    <h3
                                        class="text-primary-500 2xl:text-[75px]  md:text-5xl text-4xl font-bold mb-5">
                                        <?php the_sub_field('nam') ?>
                                    </h3>
                                <?php } ?>
                                <?php if (get_sub_field('mota')) { ?>
                                    <div class="text-primary-500 text-xl font-bold mb-4">
                                        <?php the_sub_field('mota') ?>
                                    </div>
                                <?php } ?>
                                <?php if (get_sub_field('content')) { ?>
                                    <div class="font-Helvetica text-[#000]">
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
            <div class="max-w-[940px] mx-auto mt-[45px]">
                <div
                    class="about_history-nav -mx-4 after:absolute after:border-b after:border-[#384352] after:border-opacity-10 after:h-[1px] after:bottom-2 after:w-4/5 after:left-1/2 after:-translate-x-1/2 block_slider-show-5">
                    <?php
                    while (have_rows('history')): the_row();
                    ?>
                        <div
                            class="block_slider-item px-4 [&:not(.slick-current)]:text-black [&:not(.slick-current)]:text-opacity-60 text-primary-400 [&:not(.slick-current)]:font-semibold font-bold [&:not(.slick-current)]:text-base text-lg pb-6 relative after:absolute after:w-3 after:h-3 after:rounded-full after:bg-[#384352] after:bg-opacity-20 [&:not(.slick-current)]:after:bottom-0 after:bottom-1 after:left-1/2 after:-translate-x-1/2 about_history-item cursor-pointer ">
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