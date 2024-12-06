<section class="bg-gradient-blue-400 mtk_how_to_use" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="pt-16 pb-[50px]">
        <div class="container">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title text-center mb-10">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('how_to_use')) { ?>
                <div class="grid grid-cols-3 gap-10">
                    <?php while (have_rows('how_to_use')): the_row(); ?>
                        <div class="col-span-1">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'm-auto transition-all duration-500 hover:scale-105')) ?>
                            <div class="text-lg mt-6 text-center font-Helvetica">
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
    <div class="pt-[50px] pb-14">
        <div class="container">
            <?php if (get_sub_field('title_2')) { ?>
                <h2 class="heading-title text-center mb-10">
                    <?php
                    the_sub_field('title_2');
                    ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('uudai')) { ?>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5">
                    <?php while (have_rows('uudai')): the_row(); ?>
                        <div class="rounded-2xl xl:p-[34px] xl:pt-14 p-6 lg:min-h-[414px] shadow-base"
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
                        <div class="text-center mt-10">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"target="_blank"
                                class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-lg">
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