<section class="py-16 bg-gradient-blue-250 xl:space-y-[100px] space-y-20" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title mb-10 text-center">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('dac_quyen')) { ?>
            <div class="grid grid-cols-4 gap-5">
                <?php while (have_rows('dac_quyen')): the_row(); ?>
                    <div class="rounded-2xl overflow-hidden group expert-item">
                        <div class="relative pt-[121.25%]">
                            <div class="absolute w-full h-full inset-0 flex flex-col">
                                <div
                                    class="h-[78%] transition-all duration-300 group-hover:h-[53%] overflow-hidden">
                                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'w-full h-full object-cover group-hover:scale-100 transition-all duration-300 scale-105')) ?>
                                </div>
                                <div style="background-color: <?php the_sub_field('color') ?>"
                                    class="h-[12%] transition-all duration-300 group-hover:h-[47%] flex-1 relative expert-item-desc before:absolute before:w-full before:h-10 group-hover:before:h-16 before:transition-all before:-top-10 group-hover:before:-top-16 before:z-10">
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
                    <div class="mt-10 text-center">
                        <a href="<?php echo check_link(get_sub_field('link')) ?>" class="btn-base-yellow py-4 pl-6 pr-8">
                            <span
                                class="inline-flex items-center gap-x-3 relative z-10 text-lg !leading-[1.445]">
                                <?php echo svg('arrow-btn', '20', '20') ?>
                                <?php the_sub_field('title') ?>
                            </span>
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
            <h2 class="heading-title mb-10">
                <?php the_sub_field('title_2') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('benefit')) { ?>
            <div class="grid grid-cols-2 gap-5">
                <?php
                $i = 0;
                while (have_rows('benefit')): the_row();
                    $i++;
                    if ($i == 1) { ?>
                        <div class="lg:max-w-[660px] w-full">
                            <div class="rounded-2xl overflow-hidden relative pt-[87.8787%] group block">
                                <?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
                                <?php if (get_sub_field('title')) { ?>
                                    <h4
                                        class="absolute z-10 w-full text-primary-300 font-bold xl:py-[66px] py-10 px-10 text-2xl  top-0 left-0">
                                        <p class="lg:w-[412px] xl:max-w-[72%]">
                                            <?php the_sub_field('title') ?>
                                        </p>
                                    </h4>
                                <?php } ?>
                            </div>
                        </div>
                <?php };
                endwhile; ?>
                <div class="flex flex-col gap-[18px]">
                    <?php
                    $i = 0;
                    while (have_rows('benefit')): the_row();
                        $i++;
                        if ($i > 1) { ?>
                            <div class="relative block pt-[42.8%] w-full overflow-hidden rounded-2xl group">
                                <?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
                                <?php if (get_sub_field('title')) { ?>
                                    <h4
                                        class="absolute z-10 w-full text-primary-300 font-bold xl:py-[66px] py-10 px-10 text-2xl  top-0 left-0">
                                        <p class="lg:w-[270px] lg:max-w-[67%] relative z-10 line-clamp-2">
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