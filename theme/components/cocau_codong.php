<section class="cocau_codong <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:my-[100px] my-12' : 'mt-[46px] mb-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-center mb-10' : 'text-left mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'lg:flex lg:gap-8' : '' ?>">
            <div class="flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'gap-8 lg:w-[530px] lg:max-w-[45%]' : 'gap-4' ?>">
                <?php if (wp_is_mobile() && bsc_is_mobile()) : ?>
                    <?php
                    if (get_sub_field('img_1_mobile')) {
                        echo wp_get_attachment_image(get_sub_field('img_1_mobile'), 'large', '', array('class' => 'w-full'));
                    } else {
                        echo wp_get_attachment_image(get_sub_field('img_1'), 'large', '', array('class' => 'w-full'));
                    }
                    ?>
                <?php else : ?>
                    <?php echo wp_get_attachment_image(get_sub_field('img_1'), 'large', '', array('class' => 'w-full')) ?>
                <?php endif; ?>

                <?php if (wp_is_mobile() && bsc_is_mobile()) : ?>
                    <?php
                    if (get_sub_field('img_2_mobile')) {
                        echo wp_get_attachment_image(get_sub_field('img_2_mobile'), 'large', '', array('class' => 'w-full'));
                    } else {
                        echo wp_get_attachment_image(get_sub_field('img_2'), 'large', '', array('class' => 'w-full'));
                    }
                    ?>
                <?php else : ?>
                    <?php echo wp_get_attachment_image(get_sub_field('img_2'), 'large', '', array('class' => 'w-full')) ?>
                <?php endif; ?>

            </div>
            <div class="flex-1 w-full overflow-x-auto">
                <?php if (have_rows('table')) { ?>
                    <div class="table_custom rounded-[10px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'overflow-hidden' : 'overflow-x-auto scroll-bar-custom scroll-bar-x text-xs' ?>">
                        <div
                            class="table_custom-header bg-[#E6F2FA] font-bold lg:leading-loose text-primary-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'grid grid-cols-7 gap-5' : 'flex gap-x-10 w-max p-4 ' ?>">
                            <div class="whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-1 py-6 px-4 text-center' : 'min-w-14 text-center' ?>">
                                <?php _e('STT', 'bsc') ?>
                            </div>
                            <div class="whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-2 py-6 px-4' : 'min-w-[110px]' ?>">
                                <?php _e('Đối tượng', 'bsc') ?>
                            </div>
                            <div class="whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-2 py-6 px-4' : 'min-w-[110px]' ?>">
                                <?php _e('Số lượng cổ phiếu', 'bsc') ?>
                            </div>
                            <div class="whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-2 py-6 px-4' : 'min-w-[110px]' ?>">
                                <?php _e('Tỷ lệ sở hữu', 'bsc') ?>
                            </div>
                        </div>
                        <div class="table_custom-body font-Helvetica">
                            <?php
                            $i = 1;
                            while (have_rows('table')): the_row();
                                $i++;
                                if ($i % 2 == 0) {
                                    $class = 'bg-[#D1ECFF]';
                                } else {
                                    $class = 'bg-[#E6F2FA]';
                                }
                            ?>
                                <?php if (have_rows('content_row')) { ?>
                                    <div class="table_custom-item  <?php echo $class ?> <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-5' : 'w-max p-4 space-y-4' ?>">
                                        <?php
                                        $y = 0;
                                        while (have_rows('content_row')): the_row();
                                            $y++;
                                        ?>
                                            <div class="<?php if ($y == 1) echo  'font-bold' ?> <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'grid grid-cols-7 gap-5' : 'flex gap-x-10' ?>">
                                                <div class="whitespace-nowrap text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-1 py-4 px-4 ' : 'min-w-14' ?> ">
                                                    <?php the_sub_field('stt') ?>
                                                </div>
                                                <div class="whitespace-nowrap  <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-2 py-4 px-4' : 'min-w-[110px]' ?>">
                                                    <?php the_sub_field('doi_tuong') ?>
                                                </div>
                                                <div class="whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-2 py-4 px-4' : 'min-w-[110px]' ?>">
                                                    <?php the_sub_field('so_luong_co_phieu') ?>
                                                </div>
                                                <div class="whitespace-nowrap <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'col-span-2 py-4 px-4' : 'min-w-[110px]' ?>">
                                                    <?php the_sub_field('ty_le_so_huu') ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                            <?php };
                            endwhile; ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if (get_sub_field('mota_nho') && !wp_is_mobile()) { ?>
                    <div class="text-right italic mt-4 font-Helvetica">
                        <?php the_sub_field('mota_nho') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>