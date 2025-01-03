<section class="bg-gradient-blue-250 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:space-y-[100px] space-y-20 py-16':'py-[50px] space-y-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?> text-center">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('dac_quyen')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid lg:grid-cols-4 grid-cols-2 gap-5':'block_slider block_slider-show-1 fli-dots-blue' ?>">
                <?php while (have_rows('dac_quyen')): the_row(); ?>
                    <div class="rounded-2xl overflow-hidden group expert-item <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'block_slider-item w-full' ?>">
                        <div class="relative pt-[121.25%]">
                            <div class="absolute w-full h-full inset-0 flex flex-col">
                                <div
                                    class="transition-all duration-300  overflow-hidden <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[78%] group-hover:h-[53%]':'h-[70%] group-hover:h-[50%]' ?>">
                                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'w-full h-full object-cover group-hover:scale-100 transition-all duration-300 scale-105')) ?>
                                </div>
                                <div style="background-color: <?php the_sub_field('color') ?>"
                                    class="transition-all duration-300  flex-1 relative expert-item-desc before:absolute before:w-full before:h-10 group-hover:before:h-16 before:transition-all before:-top-10 group-hover:before:-top-16 before:z-10 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'h-[12%] group-hover:h-[47%]':'h-[20%] group-hover:h-[50%]' ?>">
                                    <?php if (get_sub_field('title')) { ?>
                                        <h3
                                            class="text-primary-300 font-bold text-lg h-full left-0 w-full transition-all duration-300 group-hover:opacity-0 opacity-100 group-hover:invisible visible group-hover:absolute text-center line-clamp-2 px-9 pt-[6px] pb-[18px] group-hover:pt-4">
                                            <?php the_sub_field('title') ?>
                                        </h3>
                                    <?php } ?>
                                    <?php if (get_sub_field('mota')) { ?>
                                        <div
                                            class="transition-all duration-300 opacity-0 invisible absolute w-full group-hover:opacity-100 group-hover:visible group-hover:static font-Helvetica px-9 pt-[6px] pb-[18px] group-hover:pt-4 line-clamp-6 text-justify">
                                            <?php the_sub_field('mota') ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
        <?php if (have_rows('button')) {
            while (have_rows('button')): the_row();
                if (get_sub_field('title')) {
        ?>
                    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-10':'mt-6' ?> text-center">
                        <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>" class="btn-base-yellow items-center gap-x-3  !leading-[1.445] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-flex py-4 pl-6 pr-8 text-lg':'flex justify-center py-3 px-5 block text-xs' ?>">
                                <?php echo svg('arrow-btn', '20', '20') ?>
                                <?php the_sub_field('title') ?>
                        </a>
                    </div>
        <?php
                };
            endwhile;
        }
        ?>
    </div>
    <div class="container">
        <?php if (get_sub_field('title_2')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title_2') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('benefit')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid lg:grid-cols-2 grid-cols-1 lg:gap-5 gap-4':'' ?>">
                <?php
                $i = 0;
                while (have_rows('benefit')): the_row();
                    $i++;
                    if ($i == 1) { ?>
                        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[660px]':'' ?> w-full">
                            <div class="overflow-hidden relative group block <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:pt-[87.8787%] pt-[42.8%] rounded-2xl':'pt-[66.86%] rounded-lg' ?>">
                                <?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
                                <?php if (get_sub_field('title')) { ?>
                                    <h4
                                        class="absolute z-10 w-full text-primary-300 font-bold top-0 left-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl xl:py-[66px] lg:py-10 lg:px-10 p-5':'text-lg px-5 py-6' ?>">
                                        <p class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[412px] xl:max-w-[72%] hidden-br-pc':'' ?>">
                                            <?php the_sub_field('title') ?>
                                        </p>
                                    </h4>
                                <?php } ?>
                            </div>
                        </div>
                <?php };
                endwhile; ?>
                <div class="flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-[18px]':'gap-4 mt-4' ?>">
                    <?php
                    $i = 0;
                    while (have_rows('benefit')): the_row();
                        $i++;
                        if ($i > 1) { ?>
                            <div class="relative block w-full overflow-hidden  group <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[42.8%] rounded-2xl':'pt-[66.86%] rounded-lg' ?>">
                                <?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
                                <?php if (get_sub_field('title')) { ?>
                                    <h4
                                        class="absolute z-10 w-full text-primary-300 font-bold  top-0 left-0 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:py-[66px] lg:py-10 lg:px-10 text-2xl p-5':'text-lg px-5 py-6' ?>">
                                        <p class="relative z-10 line-clamp-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[270px] max-w-[67%] hidden-br-pc':'' ?>">
                                            <?php the_sub_field('title') ?>
                                        </p>
                                    </h4>
                                <?php } ?>
                            </div>
                    <?php };
                    endwhile; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>