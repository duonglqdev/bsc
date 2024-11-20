<section class="bg-gradient-blue-400 py-[90px] ntgd_introduce" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (have_rows('content')) { ?>
            <div class="space-y-10 max-w-[1115px] mx-auto">
                <?php
                $i = 0;
                while (have_rows('content')): the_row();
                    $i++;
                ?>
                    <div class="md:flex gap-5 items-center <?php if ($i % 2 == 0) echo 'flex-row-reverse' ?>">
                        <div class="md:w-1/2">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                        </div>
                        <div class="md:w-1/2">
                            <?php if (get_sub_field('title_big')) { ?>
                                <h3
                                    class="text-primary-300 uppercase mb-2 font-bold 2xl:text-[40px] text-3xl !leading-[1.35]">
                                    <?php the_sub_field('title_big') ?>
                                </h3>
                            <?php } ?>
                            <?php if (get_sub_field('title_small')) { ?>
                                <p class="text-primary-300 text-2xl font-bold mb-6">
                                    <?php the_sub_field('title_small') ?>
                                </p>
                            <?php } ?>
                            <?php if (get_sub_field('mota')) { ?>
                                <div class="font-Helvetica">
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
        <div class="relative rounded-2xl shadow-base overflow-hidden bg-cover bg-no-repeat flex 2xl:px-[114px] px-12 mt-10 min-h-[350px]"
            style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
            <div class="lg:w-1/2 lg:flex flex-col justify-center">
                <div class="2xl:max-w-[480px]">
                    <?php if (get_sub_field('title')) { ?>
                        <h2 class="heading-title mb-8">
                            <?php the_sub_field('title') ?>
                        </h2>
                    <?php } ?>
                    <?php if ($style == 'style1') {
                    ?>
                        <?php
                        if (have_rows('button')) {
                            while (have_rows('button')): the_row();
                                if (get_sub_field('title')) {
                        ?>
                                    <div class="ml-14">
                                        <a href="<?php echo check_link(get_sub_field('link')) ?>" class="btn-base-yellow py-[12px] pl-4 pr-6">
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
                    <?php
                    } else { ?>
                        <div class="flex gap-[44px] items-center">
                            <?php if (have_rows('link_tai')) { ?>
                                <div class="flex flex-col gap-[18px] lg:w-[184px] lg:max-w-[40%]">
                                    <?php while (have_rows('link_tai')): the_row(); ?>
                                        <a href="<?php echo check_link(get_sub_field('link')) ?>" target="_blank" rel="nofollow">
                                            <?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                        </a>
                                    <?php endwhile; ?>
                                </div>
                                <strong class="text-primary-300"><?php _e('hoặc', 'bsc') ?></strong>
                            <?php } ?>
                            <?php if (get_sub_field('qr')) { ?>
                                <div class="qr p-3 bg-white max-w-[134px] w-full">
                                    <?php echo wp_get_attachment_image(get_sub_field('qr'), 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="lg:w-1/2 lg:flex pt-[54px]">
                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large') ?>
            </div>
        </div>
    </div>
</section>