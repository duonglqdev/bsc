<section class="bg-gradient-blue-350 mtk_introduce" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="xl:pt-16 pb-[50px] relative">
        <div class="container">
            <div class="lg:grid lg:grid-cols-2 gap-10 items-center">
                <div class="col-span-1">
                    <?php if (get_sub_field('title')) { ?>
                        <h2 class="heading-title mb-10">
                            <?php the_sub_field('title') ?>
                        </h2>
                    <?php } ?>
                    <?php if (have_rows('danh_sach')) { ?>
                        <ul
                            class="list-icon space-y-[15px] font-Helvetica mb-8 text-primary-300 font-bold pl-6">
                            <?php while (have_rows('danh_sach')): the_row(); ?>
                                <li class="list-icon-item !gap-2">
                                    <?php the_sub_field('content') ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php } ?>
                    <?php if (have_rows('danh_sach_nut')) { ?>
                        <div class="flex items-center gap-x-4">
                            <?php
                            $i = 0;
                            while (have_rows('danh_sach_nut')): the_row();
                                $i++;
                                if ($i % 2 == 1) {
                                    $class = 'bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d]';
                                } else {
                                    $class = 'bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547]';
                                }
                                if (have_rows('button')) {
                                    while (have_rows('button')): the_row();
                                        if (get_sub_field('title')) {
                            ?>
                                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                                class="<?php echo $class ?> inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center" target="_blank">
                                                <span class="block relative z-10">
                                                    <?php the_sub_field('title') ?>
                                                </span>
                                            </a>
                            <?php
                                        }
                                    endwhile;
                                };
                            endwhile;
                            ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-span-1">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large') ?>
                </div>
            </div>
        </div>
        <?php if (get_sub_field('keyvisual')) { ?>
            <div class="absolute lg:block hidden top-0 right-0 pointer-events-none">
                <?php echo svg_dir(get_sub_field('keyvisual')) ?>
            </div>
        <?php } ?>
    </div>
    <div class="pt-[50px] xl:pb-[100px] pb-[50px]">
        <div class="container">
            <?php if (get_sub_field('title_2')) { ?>
                <h2 class="heading-title text-center mb-10">
                    <?php the_sub_field('title_2') ?>
                </h2>
            <?php } ?>
            <div class="lg:flex">
                <div class="lg:w-1/2 xl:pr-[106px] pr-20 border-r border-[#C4C4C4]">
                    <?php if (get_sub_field('mota')) { ?>
                        <div
                            class="2xl:text-[32px] text-2xl font-bold xl:mb-[54px] mb-10 !leading-normal">
                            <?php the_sub_field('mota') ?>
                        </div>
                    <?php } ?>
                    <div class="flex gap-[61px] items-center">
                        <?php if (have_rows('link_tai')) { ?>
                            <div class="flex flex-col gap-[21px]">
                                <?php while (have_rows('link_tai')): the_row(); ?>
                                    <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>">
                                        <?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                            <strong
                                class="text-primary-300 text-2xl"><?php _e('hoặc', 'bsc') ?></strong>
                        <?php } ?>
                        <?php
                        $qr_app_mobile = get_sub_field('qr_code_image');
                        if ($qr_app_mobile) { ?>
                            <div class="qr p-3 bg-white max-w-[184px] rounded-lg shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
                                <?php echo wp_get_attachment_image($qr_app_mobile, 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
                <div class="lg:w-1/2 xl:pl-[106px] pl-20">
                    <?php if (get_sub_field('title_3')) { ?>
                        <h3 class="2xl:text-[32px] text-2xl font-bold mb-6 !leading-normal">
                            <?php the_sub_field('title_3') ?>
                        </h3>
                    <?php } ?>
                    <ul class="text-lg font-Helvetica space-y-4">
                        <?php if (have_rows('address')) {
                            while (have_rows('address')): the_row(); ?>
                                <li class="flex items-center gap-4">
                                    <div class="flex-shrink-0">
                                        <?php echo svg('location', '33', '33') ?>
                                    </div>
                                    <p>
                                        <?php if (get_sub_field('ten_chi_nhanh')) { ?>
                                            <strong><?php the_sub_field('ten_chi_nhanh') ?> </strong>
                                        <?php } ?>
                                        <?php the_sub_field('add') ?>
                                    </p>
                                </li>
                        <?php
                            endwhile;
                        }
                        ?>
                        <li class="flex items-center gap-4">
                            <?php if (get_sub_field('title_qr')) { ?>
                                <div class="flex-shrink-0">
                                    <?php echo svg('location', '33', '33') ?>
                                </div>
                                <p>
                                    <strong><?php the_sub_field('title_qr') ?></strong>
                                </p>
                            <?php } ?>
                            <?php
                            $qr_app_mobile = get_sub_field('qr_code_image_2');
                            if ($qr_app_mobile) { ?>
                                <div class="p-1 bg-white max-w-[104px] ml-6 rounded shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
                                    <?php echo wp_get_attachment_image($qr_app_mobile, 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                </div>
                            <?php
                            } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>