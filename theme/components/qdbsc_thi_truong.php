<?php
$check_logout = bsc_is_user_logged_out();
$class = $check_logout['class'];
?>
<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> qdbsc_thi_truong" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <?php if (get_sub_field('link')) { ?>
                <a href="<?php echo check_link(get_sub_field('link')) ?>" class="font-bold block <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 text-2xl':'text-[22px] mb-4' ?>">
                    <?php the_sub_field('title') ?>
                </a>
            <?php } else { ?>
                <h3 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 text-2xl':'text-[22px] mb-4' ?>">
                    <?php the_sub_field('title') ?>
                </h3>
            <?php } ?>
        <?php } ?>
        <div class="relative">
            <?php
            if (!$check_logout) {
                $array_data_GetForecastMacro = array();
                $response_GetForecastMacro = get_data_with_cache('GetForecastMacro', $array_data_GetForecastMacro, $time_cache);
                if ($response_GetForecastMacro) {
            ?>
                    <div class="<?php echo $class ?>">
                        <h4 class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-center':'' ?>font-bold text-primary-300 mb-4"><?php _e('Dự báo kinh tế vĩ mô Việt Nam', 'bsc') ?> <?php echo $response_GetForecastMacro->d->F[1][0]->year; ?>-<?php echo $response_GetForecastMacro->d->F[3][0]->year; ?></h4>
                        <div
                            class="font-medium <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-lg flex overflow-hidden' : 'block_slider block_slider-show-1 fli-dots-blue dot-30 mb-10 text-xs' ?>">
                            <div class="text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'border-r-[4px] border-white w-1/3':' w-full block_slider-item' ?>">
                                <div
                                    class="flex justify-end items-center pr-5 bg-[#EBF4FA] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'border-b-[4px] border-white pt-[13px] pb-[9px] min-h-[71px]':'py-2 min-h-[64px]' ?>">
                                        <p>
                                            <?php echo $response_GetForecastMacro->d->A[0][0]->year; ?>
                                        </p>
                                </div>
                                <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                    <div class="w-[70%] px-2 py-1">
                                        <?php _e('GDP (YoY%)', 'bsc') ?>
                                    </div>
                                    <div
                                        class="flex-1 text-right pr-5">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][0]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                    <div class="w-[70%] px-2 py-1">
                                        <?php _e('CPI trung bình (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div
                                        class="flex-1 text-right pr-5">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][1]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                    <div class="w-[70%] px-2 py-1">
                                        <?php _e('Xuất khẩu (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div
                                        class="flex-1 text-right pr-5">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][2]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                    <div class="w-[70%] px-2 py-1">
                                        <?php _e('Nhập khẩu (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div
                                        class="flex-1 text-right pr-5">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][3]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                    <div class="w-[70%] px-2 py-1">
                                        <?php _e('LSĐH (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div
                                        class="flex-1 text-right pr-5">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][4]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA] font-bold">
                                    <div class="w-[70%] px-2 py-1">
                                        <?php _e('USD/VND LNH trung bình', 'bsc') ?>
                                    </div>
                                    <div
                                        class="flex-1 text-right pr-5">
                                        <p><?php echo number_format($response_GetForecastMacro->d->A[0][5]->value); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="grid grid-cols-2 text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'border-r-[4px] border-white w-[27%]':'w-full block_slider-item' ?>">
                                <div class="text-[#FF0017]">
                                    <div
                                        class="min-h-[58px] bg-[#EBF4FA] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-3 pb-[6px] border-b-[4px] border-white':'py-1.5 px-5' ?>">
                                        <p class="font-semibold mb-1">
                                            <?php _e('BSC kịch bản 1', 'bsc') ?>
                                        </p>
                                        <div class="grid grid-cols-2 font-semibold">
                                            <p><?php echo $response_GetForecastMacro->d->F[1][0]->year; ?></p>
                                            <p><?php echo $response_GetForecastMacro->d->F[3][0]->year; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                    ?>
                                        <div
                                            class="grid grid-cols-2 gap-2 text-center items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                            <p><?php echo $response_GetForecastMacro->d->F[1][$i]->value; ?></p>
                                            <p><?php echo $response_GetForecastMacro->d->F[3][$i]->value; ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div
                                        class="grid grid-cols-2 gap-2 text-center items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA] font-semibold">
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[1][5]->value) ?></p>
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[3][5]->value) ?></p>
                                    </div>
                                </div>
                                <div class="text-[#30D158]">
                                    <div
                                        class="min-h-[58px] bg-[#EBF4FA] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pt-3 pb-[6px] border-b-[4px] border-white':'py-1.5 px-5' ?>">
                                        <p class="font-semibold mb-1">
                                            <?php _e('BSC kịch bản 2', 'bsc') ?>
                                        </p>
                                        <div class="grid grid-cols-2 font-semibold">
                                            <p><?php echo $response_GetForecastMacro->d->F[0][0]->year; ?></p>
                                            <p><?php echo $response_GetForecastMacro->d->F[2][0]->year; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                    ?>
                                        <div
                                            class="grid grid-cols-2 gap-2 text-center items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                            <p><?php echo $response_GetForecastMacro->d->F[0][$i]->value; ?></p>
                                            <p><?php echo $response_GetForecastMacro->d->F[2][$i]->value; ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div
                                        class="grid grid-cols-2 gap-2 text-center items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA] font-semibold">
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[0][5]->value); ?></p>
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[2][5]->value); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-primary-300 text-center flex flex-col  bg-[#EBF4FA] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'border-r-[4px] border-white w-1/5':'w-full block_slider-item h-full' ?>">
                                <div
                                    class="min-h-[58px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' border-b-[4px] border-white pt-3 pb-[6px]':'py-1.5 px-5' ?>">
                                    <p class="font-semibold mb-1">
                                        <?php _e('Consensus', 'bsc') ?> <?php echo $response_GetForecastMacro->d->C[0][0]->year; ?>
                                    </p>
                                    <div class="grid grid-cols-3 font-semibold">
                                        <p><?php _e('Min', 'bsc') ?></p>
                                        <p><?php _e('TB', 'bsc') ?></p>
                                        <p><?php _e('Max', 'bsc') ?></p>
                                    </div>
                                </div>
                                <?php
                                for ($i = 0; $i < 2; $i++) {
                                ?>
                                    <div
                                        class="grid grid-cols-3 gap-2 text-center items-center min-h-10 [&:nth-child(even)]:bg-white">
                                        <p><?php echo $response_GetForecastMacro->d->C[2][$i]->value; ?></p>
                                        <p><?php echo $response_GetForecastMacro->d->C[1][$i]->value; ?></p>
                                        <p><?php echo $response_GetForecastMacro->d->C[0][$i]->value; ?></p>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="m-auto">
                                    <p><?php echo $response_GetForecastMacro->d->C[1][4]->value; ?></p>
                                </div>
                            </div>
                            <div class="text-primary-300 text-center flex flex-col bg-[#EBF4FA] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/5':'w-full block_slider-item h-full' ?>">
                                <div
                                    class="min-h-[58px] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' border-b-[4px] border-white pt-3 pb-[6px]':'py-1.5 px-5' ?>">
                                    <p class="font-semibold mb-1">
                                        <?php _e('Consensus', 'bsc') ?> <?php echo $response_GetForecastMacro->d->C[3][0]->year; ?>
                                    </p>
                                    <div class="grid grid-cols-3 font-semibold">
                                        <p><?php _e('Min', 'bsc') ?></p>
                                        <p><?php _e('TB', 'bsc') ?></p>
                                        <p><?php _e('Max', 'bsc') ?></p>
                                    </div>
                                </div>
                                <?php
                                for ($i = 0; $i < 2; $i++) {
                                ?>
                                    <div
                                        class="grid grid-cols-3 gap-2 text-center items-center min-h-10 [&:nth-child(even)]:bg-white">
                                        <p><?php echo $response_GetForecastMacro->d->C[5][$i]->value; ?></p>
                                        <p><?php echo $response_GetForecastMacro->d->C[4][$i]->value; ?></p>
                                        <p><?php echo $response_GetForecastMacro->d->C[3][$i]->value; ?></p>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="m-auto">
                                    <p><?php echo $response_GetForecastMacro->d->C[4][4]->value; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <!-- Data Demo -->
                <div class="<?php echo $class ?>">
                    <h4 class="text-center font-bold text-primary-300 mb-4"><?php _e('Dự báo kinh tế vĩ mô Việt Nam', 'bsc') ?></h4>
                    <div class="border border-[#C9CCD2] rounded-lg flex font-medium text-xs overflow-hidden">
                        <div class="w-1/3 text-primary-300 border-r border-[#C9CCD2]">
                            <div class="flex justify-end items-center pt-[13px] pb-[9px] min-h-[65px] border-b border-[#C9CCD2] mb-1.5">
                                <div class="w-[44%] grid grid-cols-2 gap-2 font-semibold text-center items-center">
                                    <p>
                                        <?php _e('0000', 'bsc') ?> </p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                <div class="w-[70%] px-2 py-1">
                                    <?php _e('GDP (YoY%)', 'bsc') ?> </div>
                                <div class="flex-1 text-right pr-5">
                                    <p>----</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                <div class="w-[70%] px-2 py-1">
                                    <?php _e('CPI trung bình (YoY%)*', 'bsc') ?> </div>
                                <div class="flex-1 text-right pr-5">
                                    <p>----</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                <div class="w-[70%] px-2 py-1">
                                    <?php _e('Xuất khẩu (YoY%)*', 'bsc') ?> </div>
                                <div class="flex-1 text-right pr-5">
                                    <p>----</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                <div class="w-[70%] px-2 py-1">
                                    <?php _e('Nhập khẩu (YoY%)*', 'bsc') ?> </div>
                                <div class="flex-1 text-right pr-5">
                                    <p>----</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA]">
                                <div class="w-[70%] px-2 py-1">
                                    <?php _e('LSĐH (YoY%)*', 'bsc') ?> </div>
                                <div class="flex-1 text-right pr-5">
                                    <p>----</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-10 [&:nth-child(odd)]:bg-[#EBF4FA] font-bold">
                                <div class="w-[70%] px-2 py-1">
                                    <?php _e('USD/VND LNH trung bình', 'bsc') ?> </div>
                                <div class="flex-1 text-right pr-5">
                                    <p>----</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-[27%] grid grid-cols-2 text-center bg-[#F5FCFF] border-r border-[#C9CCD2]">

                        </div>
                        <div class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF] border-r border-[#C9CCD2]">

                        </div>
                        <div class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF]">

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php if ($check_logout) {
                echo $check_logout['html'];
            } ?>
        </div>
    </div>
</section>