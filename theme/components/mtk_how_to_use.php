<section class="bg-gradient-blue-400 mtk_how_to_use" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-16 pb-[50px]':'py-[50px]' ?>">
        <div class="container">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('how_to_use')) { ?>
                <div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-3 gap-10':'gap-8' ?>">
                    <?php while (have_rows('how_to_use')): the_row(); ?>
                        <div class="col-span-1">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'm-auto transition-all duration-500 hover:scale-105')) ?>
                            <div class="text-center font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg mt-6':'mt-4' ?>">
                                <?php if (get_sub_field('dau_muc')) { ?>
                                    <strong><?php the_sub_field('dau_muc') ?> </strong>
                                <?php } ?>
                                <?php the_sub_field('content') ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-[50px] pb-14':'pb-[50px] dqgd fli-dots-blue' ?>">
        <div class="container">
            <?php if (get_sub_field('title_2')) { ?>
                <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                    <?php
                    the_sub_field('title_2');
                    ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('uudai')) { ?>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid grid-cols-4 gap-5':'block_slider-show-1 block_slider' ?>">
                    <?php while (have_rows('uudai')): the_row(); ?>
                        <div class="rounded-2xl min-h-[414px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:p-[34px] xl:pt-14 p-6 shadow-base':'block_slider-item p-10 w-full' ?>"
                            style="background-color:<?php echo get_sub_field('color') ?>;">
                            <div class="max-w-[155px] w-full mx-auto">
                                <div class="relative w-full pt-[100%]">
                                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 mx-auto object-contain transition-all duration-500 hover:scale-105')) ?>
                                </div>
                            </div>
                            <div class="mt-4">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="font-bold text-primary-300 2xl:text-2xl text-xl mb-2 text-center">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <?php if (get_sub_field('content')) { ?>
                                    <div class="prose-ul:pl-5 prose-ul:list-disc font-Helvetica marker:text-xs text-justify">
                                        <?php the_sub_field('content') ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
            <?php if (have_rows('button')) {
                while (have_rows('button')): the_row();
                    if (get_sub_field('title')) {
            ?>
                        <div class="text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-10':'mt-6' ?>">
                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="btn-base-yellow items-center gap-x-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] pl-4 pr-6 inline-flex text-lg':'flex justify-center text-xs py-3 px-5' ?>">
                                <?php echo svg('arrow-btn', '16', '16') ?>
                                <?php the_sub_field('title') ?>
                            </a>
                        </div>
            <?php
                    };
                endwhile;
            } ?>
        </div>
    </div>
</section>