<section class="relative lg:pt-[130px] lg:pb-[100px] pt-10 pb-10  trachnhiem_congdong" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="grid lg:grid-cols-2 lg:gap-20 gap-10">
            <div class="lg:col-span-1">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-12">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php if (get_sub_field('mota')) { ?>
                    <div class="mb-10 font-Helvetica text-justify">
                        <?php the_sub_field('mota') ?>
                    </div>
                <?php } ?>
                <?php if (have_rows('content')) { ?>
                    <div class="community_content-list block_slider-show-1">
                        <?php while (have_rows('content')): the_row(); ?>
                            <div class="community_content-item font-Helvetica block_slider-item">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="lg:text-2xl text-primary-300 font-bold">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <?php if (get_sub_field('mota')) { ?>
                                    <div class="mt-6 text-justify the_content">
                                        <?php the_sub_field('mota') ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php } ?>
            </div>
            <?php if (have_rows('content')) { ?>
                <div class="lg:col-span-1">
                    <div
                        class="community_nav flex flex-wrap justify-between md:max-w-[470px] h-full">
                        <?php
                        $i = 0;
                        while (have_rows('content')): the_row(); ?>
                            <div class="community_nav-item cursor-pointer relative w-1/2 md:max-w-[200px]"
                                data-index="<?php echo $i ?>">
                                <?php echo svgClass('comunity') ?>
                                <div class="icon absolute top-3 right-5">
                                    <?php echo svg_dir(get_sub_field('icon')) ?>
                                </div>
                            </div>
                        <?php
                            $i++;
                        endwhile; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
    <div class="absolute w-full h-full inset-0 -z-10">
        <div class="community_content-bg block_slider-show-1">
            <?php while (have_rows('content')): the_row(); ?>
                <div class="item block_slider-item">
                    <?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'w-full h-full object-cover max-h-[714px] object-center')) ?>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>