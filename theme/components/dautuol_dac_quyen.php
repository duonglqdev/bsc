<section class="bg-gradient-blue-250  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[97px] py-20 xl:space-y-[100px] space-y-20':'space-y-[50px] py-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('dac_quyen')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid lg:grid-cols-2 grid-cols-1 lg:gap-5 gap-4':'' ?>">
                <?php
                $i = 0;
                while (have_rows('dac_quyen')): the_row();
                    $i++;
                    if ($i == 1) {
                ?>
                        <div class="w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:max-w-[660px]':'' ?>">
                            <div
                                class="rounded-2xl overflow-hidden relative  group block <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[87.8787%]':'pt-[67%]' ?>">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105 rounded-[20px]')) ?>
                                <?php if (get_sub_field('title')) { ?>
                                    <h4
                                        class="absolute w-full bottom-0 left-0  text-primary-300 font-bold after:absolute after:w-full after:h-full after:bg-gradient-blue-450 after:left-0 after:bottom-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:px-10 px-5 lg:py-[26px] py-5 2xl:text-2xl text-xl':'py-2 px-4 text-lg' ?>">
                                        <p class="xl:max-w-[67%] relative z-10 line-clamp-2">
                                            <?php the_sub_field('title') ?>
                                        </p>
                                    </h4>
                                <?php } ?>
                            </div>
                        </div>
                <?php }
                endwhile; ?>
                <div class="flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-[18px]':'gap-4 mt-4' ?>">
                    <?php
                    $i = 0;
                    while (have_rows('dac_quyen')): the_row();
                        $i++;
                        if ($i > 1) {
                    ?>
                            <div
                                class="relative block w-full overflow-hidden rounded-2xl group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[42.8%]':'pt-[67%]' ?>">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105 rounded-[20px]')) ?>
                                <h4
                                    class="absolute w-full bottom-0 left-0  text-primary-300 font-bold after:absolute after:w-full after:h-full after:bg-gradient-blue-500 after:bg-opacity-90 after:left-0 after:bottom-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:px-10 px-5 lg:py-[13px] py-5 2xl:text-2xl text-xl':'py-2 px-4 text-lg' ?>">
                                    <p class="2xl:max-w-[67%] relative z-10 line-clamp-2">
                                        <?php the_sub_field('title') ?>
                                    </p>
                                </h4>
                            </div>
                    <?php }
                    endwhile; ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="container">
        <?php if (get_sub_field('title_2')) { ?>
            <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title_2') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('benefit')) { ?>
            <div class="flickity-watch fli-dots-blue <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:grid lg:grid-cols-3 lg:gap-5':'block_slider-show-1' ?>" data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000,"watchCSS": true}'>
                <?php while (have_rows('benefit')): the_row(); ?>
                    <div class="rounded-2xl overflow-hidden min-h-[320px] text-center group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:px-12 px-8 pt-9 pb-[46px] lg:w-full w-1/2 lg:mx-0 mx-2':'px-4 pt-8 pb-11 block_slider-item w-full' ?>"
                        style="background-color:<?php the_sub_field('color') ?>;">
                        <div class="lg:max-w-[330px] mx-auto">
                            <div class="relative w-full pt-[47%]">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full h-full inset-0 m-auto object-contain transition-all duration-500 group-hover:scale-105 group-hover:')) ?>
                            </div>
                        </div>
                        <?php if (get_sub_field('title')) { ?>
                            <div class="mt-4 font-semibold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-xl text-lg font-Helvetica':'text-xl' ?>">
                                <?php the_sub_field('title') ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>