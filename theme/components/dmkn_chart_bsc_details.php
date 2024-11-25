<?php
$check_logout = bsc_is_user_logged_out();
?>
<section class="xl:my-[100px] my-20 dmkn_chart_bsc_details" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="font-bold text-2xl">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="lg:flex xl:gap-14 gap-10">
            <?php
            $array_data_list_bsc = array();
            $response_list_bsc = get_data_with_cache('GetCategoryDetail', $array_data_list_bsc, $time_cache);
            if ($response_list_bsc) {
            ?>
                <div class="relative lg:w-[887px] max-w-[66%]">
                    <?php $class = $check_logout ? 'blur-sm' : ''; ?>
                    <div
                        class="rounded-[10px] mt-6 overflow-x-auto scroll-bar-custom text-center border border-[#EAEEF4] <?php echo $class ?>">
                        <div
                            class="flex text-white bg-primary-300 font-semibold items-center min-h-[58px] leading-[1.125] gap-4">
                            <div class="flex-1 min-w-[110px] whitespace-nowrap">
                                <?php _e('Mã', 'bsc') ?>
                            </div>
                            <div class="flex-1 min-w-[110px] whitespace-nowrap">
                                <?php _e('Khuyến nghị', 'bsc') ?>
                            </div>
                            <div class="flex-1 min-w-[110px] whitespace-nowrap">
                                <?php _e('Giá', 'bsc') ?>
                            </div>
                            <div class="flex-1 min-w-[110px] whitespace-nowrap">
                                <?php _e('Mục tiêu', 'bsc') ?>
                            </div>
                            <div class="flex-1 min-w-[110px] whitespace-nowrap">
                                <?php _e('Upside', 'bsc') ?>
                            </div>
                            <div class="flex-1 min-w-[110px] whitespace-nowrap">
                                <?php _e('Sàn', 'bsc') ?>
                            </div>
                            <div class="flex-1 min-w-[110px] whitespace-nowrap">
                                <?php _e('KL', 'bsc') ?>
                            </div>

                        </div>
                        <div
                            class="scroll-bar-custom overflow-y-auto max-h-[600px] prose-a:text-primary-300 prose-a:font-bold font-medium">
                            <?php
                            $i = 0;
                            foreach ($response_list_bsc->d as $list_bsc) {
                                $i++;

                            ?>
                                <div
                                    class="flex items-center <?php echo $i % 2 == 0 ? '' : 'bg-[#EBF4FA]' ?>">
                                    <div
                                        class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
                                        <?php echo $list_bsc->symbol ?>
                                    </div>
                                    <div
                                        class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-semibold">
                                        <span
                                            class="inline-block px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold rounded-full"><?php echo $list_bsc->action ?></span>
                                    </div>
                                    <div
                                        class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
                                        <?php
                                        if ($list_bsc->closePrice) {
                                            echo number_format(($list_bsc->closePrice) / 1000, 2, '.', '');
                                        }
                                        ?>
                                    </div>
                                    <div
                                        class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
                                        <?php
                                        if ($list_bsc->expectedprice) {
                                            echo number_format(($list_bsc->expectedprice) / 1000, 2, '.', '');
                                        }
                                        ?>
                                    </div>
                                    <div
                                        class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
                                        <?php if ($list_bsc->closePrice && $list_bsc->expectedprice) {
                                            echo "+" . number_format((($list_bsc->expectedprice - $list_bsc->closePrice) / $list_bsc->closePrice) * 100, 2, '.', '') . '%';
                                        }  ?>
                                    </div>
                                    <div
                                        class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3">
                                        HOSE
                                    </div>
                                    <div
                                        class="flex-1 min-w-[110px] min-h-[60px] flex items-center justify-center leading-[1.125] py-1 px-3 font-bold text-[#1CCD83]">
                                        345.6
                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <?php if ($check_logout) {
                        echo $result['html'];
                    } ?>
                </div>
            <?php  } ?>
            <div class="flex-1 font-Helvetica">
                <ul class="space-y-6">
                    <li class="flex xl:gap-20 gap-10">
                        <div class="w-[62%] space-y-1">
                            <p class="text-xs"><?php _e('Ngày điều chỉnh danh mục', 'bsc') ?></p>
                            <p class="font-medium">
                                Sep 30, 2024
                            </p>
                        </div>
                        <div class="w-[38%] space-y-1">
                            <p class="text-xs"><?php _e('Ngành chủ đạo', 'bsc') ?></p>
                            <p class="font-medium">
                                Banks
                            </p>
                        </div>
                    </li>
                    <li class="flex xl:gap-20 gap-10">
                        <div class="w-[62%] space-y-1">
                            <p class="text-xs">Thay đổi từ ngày điều chỉnh</p>
                            <p class="font-medium text-[#FE5353] flex items-center gap-1">
                                <?php echo svg('downn', '16', '16') ?>
                                -1.98%
                            </p>
                        </div>
                        <div class="w-[38%] space-y-1">
                            <p class="text-xs">So với thị trường</p>
                            <p class="font-medium text-[#FE5353] flex items-center gap-1">
                                <?php echo svg('downn', '16', '16') ?>
                                -0.63%
                            </p>
                        </div>
                    </li>
                    <li class="flex xl:gap-20 gap-10">
                        <div class="w-[62%] space-y-1">
                            <p class="text-xs">Thay đổi 1W</p>
                            <p class="font-medium text-[#FE5353] flex items-center gap-1">
                                <?php echo svg('downn', '16', '16') ?>
                                -0.48%
                            </p>
                        </div>
                        <div class="w-[38%] space-y-1">
                            <p class="text-xs">So với thị trường</p>
                            <p class="font-medium text-[#FE5353] flex items-center gap-1">
                                <?php echo svg('downn', '16', '16') ?>
                                -0.51%
                            </p>
                        </div>
                    </li>
                    <li class="flex xl:gap-20 gap-10">
                        <div class="w-[62%] space-y-1">
                            <p class="text-xs">Beta danh mục</p>
                            <p class="font-medium">
                                1.38
                            </p>
                        </div>
                        <div class="w-[38%] space-y-1">
                            <p class="text-xs">Trung vị thị giá vốn</p>
                            <p class="font-medium">
                                ₫ 16.8K B
                            </p>
                        </div>
                    </li>
                    <li class="flex xl:gap-20 gap-10">
                        <div class="w-[62%] space-y-1">
                            <p class="text-xs">P/E trung vị</p>
                            <p class="font-medium">
                                14.13
                            </p>
                        </div>
                        <div class="w-[38%] space-y-1">
                            <p class="text-xs">P/E thị trường</p>
                            <p class="font-medium">
                                13.86
                            </p>
                        </div>
                    </li>
                    <li class="flex xl:gap-20 gap-10">
                        <div class="w-[62%] space-y-1">
                            <p class="text-xs">P/B trung vị</p>
                            <p class="font-medium">
                                1.34
                            </p>
                        </div>
                        <div class="w-[38%] space-y-1">
                            <p class="text-xs">P/B thị trường</p>
                            <p class="font-medium">
                                1.70
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>