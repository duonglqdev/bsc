<section class="bg-gradient-blue-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:py-[119px] py-20':'py-[50px]' ?> mgck_introduce_trader" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('introduce')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'space-y-16 max-w-[1114px] mx-auto':'space-y-8' ?>">
                <?php
                $i = 0;
                while (have_rows('introduce')): the_row();
                    $i++; ?>
                    <div class="flex <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' gap-[54px] items-center':'gap-6 flex-col-reverse' ?> <?php if ($i % 2 == 0 && !wp_is_mobile() && !bsc_is_mobile()) echo 'flex-row-reverse' ?>">
                        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[660px] lg:max-w-[70%] max-w-[40%]':'w-full' ?>">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'full', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                        </div>
                        <div class="flex-1 font-Helvetica">
                            <?php if (get_sub_field('title')) { ?>
                                <p class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl':'text-base' ?> font-bold mb-[6px]">
                                    <?php the_sub_field('title') ?>
                                </p>
                            <?php } ?>
                            <?php if (get_sub_field('title_big')) { ?>
                                <h3
                                    class="text-primary-300 uppercase font-bold !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-4 text-2xl':'mb-[12px] text-xl' ?>">
                                    <?php the_sub_field('title_big') ?>
                                </h3>
                            <?php } ?>
                            <div
                                class="prose-a:text-primary-300 prose-a:font-bold prose-a:text-base <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg mb-3':'mb-[12px]' ?>">
                                <?php the_sub_field('content') ?>
                            </div>
                            <?php if (have_rows('danh_sach_nut')) : ?>
                                <div class="lg:space-y-3 space-y-[12px]">
                                    <?php while (have_rows('danh_sach_nut')) : the_row(); ?>
                                        <?php if (have_rows('button')) : ?>
                                            <?php while (have_rows('button')) : the_row(); ?>
                                                <?php if (get_sub_field('title')) : ?>
                                                    <p>
                                                        <a rel="<?php the_sub_field('rel'); ?>" 
                                                        <?php if (get_sub_field('open_tab')) echo 'target="_blank"'; ?> 
                                                        href="<?php echo check_link(get_sub_field('link')); ?>"
                                                        class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 lg:hover:scale-105 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs'; ?>">
                                                            <?php the_sub_field('title'); ?>
                                                            <?php echo svg('arrow-btn', '12', '12'); ?>
                                                        </a>
                                                    </p>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
    </div>
</section>