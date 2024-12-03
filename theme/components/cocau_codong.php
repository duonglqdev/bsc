<section class=" cocau_codong <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:my-[100px] my-12':'mt-[46px] mb-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'md:flex md:gap-8':'' ?>">
            <div class="flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-8':'gap-4' ?>">
                <?php if(wp_is_mobile() && bsc_is_mobile()) : ?>
                    <!-- @todo  : Thêm ảnh mobile -->
                    <?php echo wp_get_attachment_image(get_sub_field('img_1'), 'large', '', array('class' => 'w-full')) ?>
                <?php else : ?>
                    <?php echo wp_get_attachment_image(get_sub_field('img_1'), 'large', '', array('class' => 'w-full')) ?>
                <?php endif; ?>
                
                <?php if(wp_is_mobile() && bsc_is_mobile()) : ?>
                    <!-- @todo  : Thêm ảnh mobile -->
                   <?php echo wp_get_attachment_image(get_sub_field('img_2'), 'large', '', array('class' => 'w-full')) ?>
                <?php else : ?>
                   <?php echo wp_get_attachment_image(get_sub_field('img_2'), 'large', '', array('class' => 'w-full')) ?>
                <?php endif; ?>
                
            </div>
            <div class="flex-1 w-full overflow-x-auto">
                <?php if (have_rows('table')) { ?>
                    <div class="table_custom rounded-[10px] overflow-hidden">
                        <div
                            class="table_custom-header grid grid-cols-7 gap-5 bg-[#E6F2FA] font-bold lg:leading-loose text-primary-400">
                            <div class="col-span-1 py-6 px-4 text-center">
                                <?php _e('STT', 'bsc') ?>
                            </div>
                            <div class="col-span-2 py-6 px-4">
                                <?php _e('Đối tượng', 'bsc') ?>
                            </div>
                            <div class="col-span-2 py-6 px-4">
                                <?php _e('Số lượng cổ phiếu', 'bsc') ?>
                            </div>
                            <div class="col-span-2 py-6 px-4">
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
                                    <div class="table_custom-item py-5 <?php echo $class ?>">
                                        <?php
                                        $y = 0;
                                        while (have_rows('content_row')): the_row();
                                            $y++;
                                        ?>
                                            <div class="grid grid-cols-7 gap-5 <?php if ($y == 1) echo  'font-bold' ?>">
                                                <div class="col-span-1 lg:py-4 py-3 px-4 text-center">
                                                    <?php the_sub_field('stt') ?>
                                                </div>
                                                <div class="col-span-2 lg:py-4 py-3 px-4">
                                                    <?php the_sub_field('doi_tuong') ?>
                                                </div>
                                                <div class="col-span-2 lg:py-4 py-3 px-4">
                                                    <?php the_sub_field('so_luong_co_phieu') ?>
                                                </div>
                                                <div class="col-span-2 lg:py-4 py-3 px-4">
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
                <?php if (get_sub_field('mota_nho')) { ?>
                    <div class="text-right italic mt-4 font-Helvetica">
                        <?php the_sub_field('mota_nho') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>