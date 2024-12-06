<section class="about_award-other <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'my-16':'mt-6 mb-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h3 class=" font-bold text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl mb-[30px] ':'text-lg mb-4' ?>">
                <?php the_sub_field('title') ?>
            </h3>
        <?php } ?>
        <?php if (have_rows('reward')) { ?>
            <div class="max-w-[764px] mx-auto">
                <div
                    class="about_award-nav -mx-4 after:absolute after:border-b after:border-[#384352] after:border-opacity-10 after:h-[1px] after:bottom-2 after:w-4/5 after:left-1/2 after:-translate-x-1/2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'block_slider-show-5':'block_slider-show-3' ?>">
                    <?php
                    while (have_rows('reward')): the_row();
                    ?>
                        <div
                            class="[&:not(.slick-current)]:text-black [&:not(.slick-current)]:text-opacity-60 text-primary-400 [&:not(.slick-current)]:font-semibold font-bold  pb-6 relative after:absolute after:w-3 after:h-3 after:rounded-full after:bg-[#384352] after:bg-opacity-20  after:bottom-1 after:left-1/2 after:-translate-x-1/2 about_award-item cursor-pointer block_slider-item <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/5 [&:not(.slick-current)]:text-base text-lg px-4 [&:not(.slick-current)]:after:bottom-0':'w-1/4 text-xs px-3 [&:not(.slick-current)]:after:bottom-[3px]' ?>">
                            <div class="text-center">
                                <?php the_sub_field('nam') ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="about_award-content mt-10 max-w-[886px] mx-auto">
                <?php
                while (have_rows('reward')): the_row();
                ?>
                    <div class="w-full font-Helvetica">
                        <?php if (have_rows('content')) {
                            while (have_rows('content')): the_row(); ?>
                                <div
                                    class="about_award-item [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#384352] [&:not(:last-child)]:border-opacity-20 [&:not(:last-child)]:pb-[30px] [&:not(:last-child)]:mb-[30px] flex lg:gap-[50px] gap-5 items-start <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                    <?php echo wp_get_attachment_image(get_sub_field('icon'), 'large', '', array('class' => 'max-w-[40px]')) ?>
                                    <div class="the_content <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' mt-2':'' ?>">
                                        <?php the_sub_field('mota') ?>
                                    </div>
                                </div>
                        <?php endwhile;
                        } ?>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        <?php } ?>
    </div>
</section>