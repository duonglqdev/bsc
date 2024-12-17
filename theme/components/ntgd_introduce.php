<section class="bg-gradient-blue-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-[90px]' : 'py-[50px]' ?> ntgd_introduce" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (have_rows('content')) { ?>
            <div class="space-y-10 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'max-w-[1115px] mx-auto' : '' ?>">
                <?php
                $i = 0;
                while (have_rows('content')): the_row();
                    $i++;
                ?>
                    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex gap-5 items-center' : '' ?> <?php if ($i % 2 == 0 && !wp_is_mobile() && !bsc_is_mobile()) echo 'flex-row-reverse' ?>">
                        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-1/2' : 'w-full' ?>">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                        </div>
                        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-1/2' : 'w-full' ?>">
                            <?php if (get_sub_field('title_big')) { ?>
                                <h3
                                    class="text-primary-300 uppercase mb-2 font-bold !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:text-[40px] text-3xl' : 'mt-4 text-2xl text-center' ?>">
                                    <?php the_sub_field('title_big') ?>
                                </h3>
                            <?php } ?>
                            <?php if (get_sub_field('title_small')) { ?>
                                <p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-6 text-2xl' : 'mb-[12px] text-lg text-center' ?>">
                                    <?php the_sub_field('title_small') ?>
                                </p>
                            <?php } ?>
                            <?php if (get_sub_field('mota')) { ?>
                                <div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-center text-xs' ?>">
                                    <?php the_sub_field('mota') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php } ?>
        <?php
        $style = get_sub_field('style') ?: 'style1';
        ?>
        <div class="relative rounded-2xl shadow-base overflow-hidden bg-cover bg-no-repeat mt-10 min-h-[350px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex 2xl:px-24 px-12 gap-5 ' : 'pt-[30px] px-[22px]' ?>"
            style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-1/2 lg:flex flex-col justify-center' : '' ?>">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-8' : 'mb-6' ?>">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <div class="2xl:max-w-[480px]">
                    <?php if ($style == 'style1') {
                    ?>
                        <?php
                        if (have_rows('button') && !wp_is_mobile() && !bsc_is_mobile()) {
                            while (have_rows('button')): the_row();
                                if (get_sub_field('title')) { ?>
                                    <div class="ml-14">
                                        <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>" class="btn-base-yellow py-[12px] pl-4 pr-6">
                                            <span
                                                class="inline-flex items-center gap-x-3 relative z-10 text-xs">
                                                <?php echo svg('arrow-btn', '16', '16') ?>
                                                <?php the_sub_field('title') ?>
                                            </span>
                                        </a>
                                    </div>
                        <?php
                                }
                            endwhile;
                        }
                        ?>
                        <!-- @todoreturn : đã thêm field, em xử lý giao diện sau -->
                    <?php
                    } else { ?>
                        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex gap-[44px] items-center ' : '' ?>">
                            <?php if (have_rows('link_tai')) { ?>
                                <div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex flex-col gap-[18px] w-[184px] max-w-[40%]' : 'grid grid-cols-2 gap-3' ?>">
                                    <?php while (have_rows('link_tai')): the_row(); ?>
                                        <a href="<?php echo check_link(get_sub_field('link')) ?>" rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?>>
                                            <?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                        </a>
                                    <?php endwhile; ?>
                                </div>
                                <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
                                    <strong class="text-primary-300"><?php _e('hoặc', 'bsc') ?></strong>
                                <?php } ?>
                            <?php } ?>
                            <?php
                            $qr_app_mobile = get_sub_field('qr_code_image');
                            if ($qr_app_mobile && !wp_is_mobile() && !bsc_is_mobile()) { ?>
                                <div class="qr p-3 bg-white max-w-[134px] w-full">
                                    <?php echo wp_get_attachment_image($qr_app_mobile, 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                </div>
                            <?php
                            } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-1/2 flex pt-[54px]' : 'pt-6' ?>">
                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large') ?>
            </div>
        </div>
    </div>
</section>