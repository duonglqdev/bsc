<section class="xl:py-[97px] py-20 bg-gradient-blue-250 xl:space-y-[100px] space-y-20" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title mb-10 text-center">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('dac_quyen')) { ?>
            <div class="grid grid-cols-2 gap-5">
                <?php
                $i = 0;
                while (have_rows('dac_quyen')): the_row();
                    $i++;
                    if ($i == 1) {
                ?>
                        <div class="lg:max-w-[660px] w-full">
                            <div
                                class="rounded-2xl overflow-hidden relative pt-[87.8787%] group block">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
                                <?php if (get_sub_field('title')) { ?>
                                    <h4
                                        class="absolute w-full bottom-0 left-0 px-10 lg:py-[26px] py-5 2xl:text-2xl text-xl text-primary-300 font-bold after:absolute after:w-full after:h-full after:bg-gradient-blue-450 after:left-0 after:bottom-0">
                                        <p class="xl:max-w-[67%] relative z-10 line-clamp-2">
                                            <?php the_sub_field('title') ?>
                                        </p>
                                    </h4>
                                <?php } ?>
                            </div>
                        </div>
                <?php }
                endwhile; ?>
                <div class="flex flex-col gap-[18px]">
                    <?php
                    $i = 0;
                    while (have_rows('dac_quyen')): the_row();
                        $i++;
                        if ($i > 1) {
                    ?>
                            <div
                                class="relative block pt-[42.8%] w-full overflow-hidden rounded-2xl group">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
                                <h4
                                    class="absolute w-full bottom-0 left-0 px-10 lg:py-[13px] py-5 2xl:text-2xl text-xl text-primary-300 font-bold after:absolute after:w-full after:h-full after:bg-gradient-blue-500 after:bg-opacity-90 after:left-0 after:bottom-0">
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
            <h2 class="heading-title mb-10 text-center">
                <?php the_sub_field('title_2') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('benefit')) { ?>
            <div class="grid grid-cols-3 gap-5">
                <?php while (have_rows('benefit')): the_row(); ?>
                    <div class="rounded-2xl overflow-hidden lg:min-h-[310px] 2xl:px-12 lg:px-8 px-5 lg:pt-9 pt-5 lg:pb-[46px] pb-5 text-center group"
                        style="background-color:<?php the_sub_field('color') ?>;">
                        <div class="lg:max-w-[330px] mx-auto">
                            <div class="relative w-full pt-[47%]">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full h-full inset-0 m-auto object-contain transition-all duration-500 group-hover:scale-105')) ?>
                            </div>
                        </div>
                        <?php if (get_sub_field('title')) { ?>
                            <div class="mt-4 font-semibold 2xl:text-xl lg:text-lg font-Helvetica">
                                <?php the_sub_field('title') ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>