<section class="bg-gradient-blue-400 2xl:py-[119px] py-20 mgck_introduce_trader" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('introduce')) { ?>
            <div class="space-y-16 max-w-[1114px] mx-auto">
                <?php
                $i = 0;
                while (have_rows('introduce')): the_row();
                    $i++; ?>
                    <div class="lg:flex lg:gap-[54px] gap-10 items-center <?php if ($i % 2 == 0) echo 'flex-row-reverse' ?>">
                        <div class="lg:w-[660px] lg:max-w-[70%]">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'full', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                        </div>
                        <div class="flex-1 font-Helvetica">
                            <?php if (get_sub_field('title')) { ?>
                                <p class="text-xl font-bold mb-[6px]">
                                    <?php the_sub_field('title') ?>
                                </p>
                            <?php } ?>
                            <?php if (get_sub_field('title_big')) { ?>
                                <h3
                                    class="text-primary-300 uppercase mb-4 font-bold text-2xl !leading-[1.35]">
                                    <?php the_sub_field('title_big') ?>
                                </h3>
                            <?php } ?>
                            <div
                                class="text-lg mb-3 prose-a:text-primary-300 prose-a:font-bold prose-a:text-base">
                                <?php the_sub_field('content') ?>
                            </div>
                            <?php if (have_rows('danh_sach_nut')) {
                                while (have_rows('danh_sach_nut')): the_row();
                                    if (have_rows('button')) {
                                        while (have_rows('button')): the_row();
                                            if (get_sub_field('title')) { ?>
                                                <p>
                                                    <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                                        class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 mb-3">
                                                        <?php the_sub_field('title') ?>
                                                        <?php echo svg('arrow-btn', '12', '12') ?>
                                                    </a>
                                                </p>
                            <?php
                                            }
                                        endwhile;
                                    }
                                endwhile;
                            } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>