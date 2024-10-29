<section class="2xl:my-[100px] my-12 lichsu_vondieule" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title lg:mb-[42px] mb-9">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="flex md:flex-row flex-col md:gap-[38px] gap-8">
            <?php
            $time_cache = get_sub_field('time_cache') ?: 300;
            $array_data = array(
                'securitycode' => 'BSI'
            );
            $response = get_data_with_cache('GetSecurityDaily', $array_data, $time_cache);
            if ($response) {
            ?>
                <div class="md:max-w-80 w-full">
                    <div
                        class="bg-gradient-blue-50 lg:p-6 p-5 shadow-base space-y-8 rounded-2xl h-full">
                        <div class="flex gap-6">
                            <div
                                class="lg:w-[90px] w-16 lg:h-[90px] h-16 bg-white rounded-full flex items-center justify-center p-5">
                                <?php echo svgClass('icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9') ?>
                            </div>
                            <div class="flex flex-col">
                                <h4
                                    class="font-bold lg:text-[40px] text-4xl uppercase leading-normal">
                                    <?php echo $response->d[0]->securitycode ?>
                                </h4>
                                <p class="uppercase text-2xl text-paragraph">
                                    HOSE
                                </p>

                            </div>
                        </div>
                        <div class="flex-col gap-2">
                            <div class="flex gap-[14px] data_number">
                                <div class="lg:text-[40px] text-4xl font-bold">
                                    43.30
                                </div>
                                <div class="flex flex-col text-[#EB0]">
                                    <p>
                                        -0.20%
                                    </p>
                                    <p>
                                        -0.46%
                                    </p>
                                </div>
                            </div>
                            <p class="time-update mt-1">
                                <?php
                                $date = $response->d[0]->tradedate;
                                $date_parts = explode('T', $date);
                                ?>
                                <?php _e('Cập nhật lúc', 'bsc') ?> <?php echo $date_parts[1] ?> UTC_7
                            </p>

                        </div>
                        <div class="space-y-4">
                            <?php if (isset($response->d[0]->outsshares)) { ?>
                                <div class="font-bold space-y-2">
                                    <p>
                                        <?php _e('Số lượng cổ phiếu đang lưu hành', 'bsc') ?>
                                    </p>
                                    <p class="text-lg">
                                        <?php echo number_format($response->d[0]->outsshares); ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if (isset($response->d[0]->listedshares)) { ?>
                                <div class="font-bold space-y-2">
                                    <p>
                                        <?php _e('Khối lượng đang niêm yết', 'bsc') ?>
                                    </p>
                                    <p class="text-lg">
                                        <?php echo number_format($response->d[0]->listedshares); ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="flex-1 w-full">
                <picture>
                    <?php if (get_sub_field('image_mb')) { ?>
                        <source media="(max-width:767px)"
                            srcset="<?php echo wp_get_attachment_image_url(get_sub_field('image_mb'), 'large') ?>">
                    <?php } ?>
                    <?php echo wp_get_attachment_image(get_sub_field('image_desktop'), 'large', '', array('class' => 'w-full h-auto')) ?>
                </picture>
            </div>
        </div>
    </div>
</section>