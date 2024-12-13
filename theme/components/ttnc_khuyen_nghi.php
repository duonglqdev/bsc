<?php $tab = generateRandomString();
$check_logout = bsc_is_user_logged_out();
$time_cache = 300;
$response_instruments_array = array();
$array_data_instruments = array();
$response_instruments = get_data_with_cache('instruments', $array_data_instruments, $time_cache, get_field('cdapi_ip_address_url_api_price', 'option') . 'datafeed/');
if ($response_instruments) {
    $response_instruments_array = $response_instruments->d;
}
$class = $check_logout['class'];
?>
<section class="mt-14 xl:mb-pb-[110px] mb-20 ttnc_khuyen_nghi" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="lg:flex 2xl:gap-12 gap-10">
            <div class="lg:w-[745px] lg:max-w-[56%]">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-8">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php
                $array_data_GetAllDanhMuc = array();
                $response_GetAllDanhMuc = get_data_with_cache('GetAllDanhMuc', $array_data_GetAllDanhMuc, $time_cache, get_field('cdapi_ip_address_default', 'option') . 'api/Quanlydanhmuc/');
                if ($response_GetAllDanhMuc) {
                ?>
                    <ul class="customtab-nav flex items-center gap-4 mb-6">
                        <?php
                        $i = 0;
                        foreach ($response_GetAllDanhMuc->d as $news) {
                            $i++; ?>
                            <li>
                                <button data-tabs="#<?php echo $tab ?>-<?php echo $i ?>"
                                    class="<?php if ($i == 1) echo 'active' ?> inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
                                    <?php echo $news->tendanhmuc ?>
                                </button>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php
                    $i = 0;
                    foreach ($response_GetAllDanhMuc->d as $news) {
                        $i++; ?>
                        <div class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>"
                            id="<?php echo $tab ?>-<?php echo $i ?>">
                            <div class="relative 2xl:pt-[76.2416%] pt-[80%] w-full rounded-lg overflow-hidden">
                                <div class="absolute w-full h-full inset-0 <?php echo $class ?>">
                                    <ul
                                        class="flex items-center font-bold text-center text-white bg-primary-300 prose-li:p-3 py-[7px] gap-5 2xl:px-[30px] px-5 justify-between">
                                        <li class="whitespace-nowrap w-[8%]"><?php _e('Mã', 'bsc') ?></li>
                                        <li class="whitespace-nowrap w-[16%]"><?php _e('Khuyến nghị', 'bsc') ?></li>
                                        <li class="whitespace-nowrap w-[16%]"><?php _e('Giá', 'bsc') ?></li>
                                        <li class="whitespace-nowrap w-[16%]"><?php _e('Mục tiêu', 'bsc') ?></li>
                                        <li class="whitespace-nowrap w-[16%]"><?php _e('Upside', 'bsc') ?></li>
                                    </ul>
                                    <?php
                                    if (!$check_logout) {
                                        $array_data_list_bsc = array();
                                        $response_list_bsc = get_data_with_cache('GetDanhMucChiTiet?id=' . $news->id, $array_data_list_bsc, $time_cache, get_field('cdapi_ip_address_default', 'option') . 'api/Quanlydanhmuc/', 'POST');
                                        if ($response_list_bsc) {
                                    ?>
                                            <div class="overflow-y-auto scroll-bar-custom max-h-[90%]">
                                                <?php
                                                foreach ($response_list_bsc->d as $list_bsc) {
                                                    $symbol = $list_bsc->machungkhoan;
                                                    if ($symbol) {
                                                        $symbols = array_column($response_instruments_array, 'symbol');
                                                        $index = array_search($symbol, $symbols);
                                                        if ($index !== false) {
                                                            $stockData = $response_instruments_array[$index];
                                                        }
                                                ?>
                                                        <ul
                                                            class="flex gap-5 text-center justify-between 2xl:px-[30px] px-5 py-4 items-center [&:nth-child(odd)]:bg-white [&:nth-child(even)]:bg-primary-50">
                                                            <li class="w-[8%] font-medium"><a href="<?php echo slug_co_phieu($list_bsc->machungkhoan) ?>"><?php echo $list_bsc->machungkhoan ?></a></li>
                                                            <?php
                                                            $status = $list_bsc->hinhthuc;
                                                            $check_status = get_color_by_number_bsc($status);
                                                            $title_status = $check_status['title_status'];
                                                            $text_status = $check_status['text_status'];
                                                            $background_status = $check_status['background_status'];
                                                            ?>
                                                            <li class="w-[16%] font-medium">
                                                                <?php if ($list_bsc->hinhthuc) { ?>
                                                                    <span class="inline-block rounded-[45px] px-4 py-0.5  min-w-[78px]" style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
                                                                        <?php
                                                                        echo  $title_status;
                                                                        ?>
                                                                    </span>
                                                                <?php } ?>
                                                            </li>
                                                            <?php if ($stockData->changePercent) {
                                                                if (($stockData->changePercent) > 0) {
                                                                    if ($stockData->closeprice == $stockData->ceiling) {
                                                                        $text_color_class_price = 'text-[#7F1CCD]';
                                                                    } else {
                                                                        $text_color_class_price = 'text-[#1CCD83]';
                                                                    }
                                                                } elseif (($stockData->changePercent) < 0) {
                                                                    if ($stockData->closeprice  == $stockData->ceiling) {
                                                                        $text_color_class_price = 'text-[#1ABAFE]';
                                                                    } else {
                                                                        $text_color_class_price = 'text-[#FE5353]';
                                                                    }
                                                                } else {
                                                                    $text_color_class_price = 'text-[#EB0]';
                                                                }
                                                            } else {
                                                                $text_color_class_price = 'text-[#EB0]';
                                                            }
                                                            ?>
                                                            <li class="w-[16%] font-bold <?php echo $text_color_class_price ?>">
                                                                <?php
                                                                if ($stockData->closePrice) {
                                                                    echo number_format(($stockData->closePrice) / 1000, 2, '.', '');
                                                                }
                                                                ?>
                                                            </li>
                                                            <li class="w-[16%] font-medium">
                                                                <?php
                                                                if ($list_bsc->giakyvong) {
                                                                    echo number_format(($list_bsc->giakyvong), 2, '.', '');
                                                                }
                                                                ?>
                                                            </li>
                                                            <?php
                                                            if ($stockData->closePrice && $list_bsc->giakyvong) {
                                                                if ((($list_bsc->giakyvong) * 1000 - $stockData->closePrice) > 0) {
                                                                    $text_color_class = 'text-[#1CCD83]';
                                                                } elseif ((($list_bsc->giakyvong) * 1000 - $stockData->closePrice) < 0) {
                                                                    $text_color_class = 'text-[#FE5353]';
                                                                } else {
                                                                    $text_color_class = 'text-[#EB0]';
                                                                }
                                                            } else {
                                                                $text_color_class = 'text-[#EB0]';
                                                            }
                                                            ?>
                                                            <li class="w-[16%] font-bold <?php echo $text_color_class ?>">
                                                                <?php if ($stockData->closePrice && $list_bsc->giakyvong) {
                                                                    if ((($list_bsc->giakyvong) * 1000 - $stockData->closePrice) > 0) {
                                                                        $before_text = '+' . number_format(((($list_bsc->giakyvong) * 1000 - $stockData->closePrice) / $stockData->closePrice) * 100, 2, '.', '') . '%';
                                                                    } else {
                                                                        $before_text = '-';
                                                                    }
                                                                    echo $before_text;
                                                                }  ?>
                                                            </li>
                                                        </ul>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        <?php }
                                    } else {
                                        ?>
                                        <!-- Data Demo -->
                                        <div class="overflow-y-auto scroll-bar-custom max-h-[90%]">
                                            <?php for ($i = 0; $i < 8; $i++) { ?>
                                                <ul class="flex gap-5 text-center justify-between 2xl:px-[30px] px-5 py-4 items-center [&amp;:nth-child(odd)]:bg-white [&amp;:nth-child(even)]:bg-primary-50">
                                                    <li class="w-[8%] font-medium"><?php _e('BSI', 'bsc') ?></li>
                                                    <li class="w-[16%] font-medium">
                                                        <span class="inline-block rounded-[45px] px-4 py-0.5  min-w-[78px]" style="background-color:#D6F6DE; color:#30D158">
                                                            <?php _e('Mua', 'bsc') ?> </span>
                                                    </li>
                                                    <li class="w-[16%] font-bold text-[#1CCD83]">
                                                        ---- </li>
                                                    <li class="w-[16%] font-medium">
                                                        ---- </li>
                                                    <li class="w-[16%] font-bold text-[#1CCD83]">
                                                        ---- </li>
                                                </ul>
                                            <?php } ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?php if ($check_logout) {
                                    echo $check_logout['html'];
                                } ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php  } ?>
            </div>
            <div class="flex-1">
                <?php if (get_sub_field('title_phan_tich')) { ?>
                    <h2 class="heading-title mb-8">
                        <?php the_sub_field('title_phan_tich') ?>
                    </h2>
                <?php } ?>
                <?php if (get_sub_field('image')) { ?>
                    <div class="mb-6">
                        <a href="<?php echo check_link(get_sub_field('link_youtube')) ?>" data-fancybox
                            class="rounded-[10px] overflow-hidden pt-[55.576%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
                            <?php echo wp_get_attachment_image(get_sub_field('image'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
                            <div
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
                                <?php echo svg('play', '62', '62') ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <?php
                $array_data_GetForecastMacro = array();
                $response_GetForecastMacro = get_data_with_cache('GetForecastMacro', $array_data_GetForecastMacro, $time_cache);
                if ($response_GetForecastMacro) {
                ?>
                    <div class="flex flex-col">
                        <div class="border border-[#C9CCD2] rounded-lg flex font-medium text-xs overflow-hidden">
                            <div
                                class="w-[48.8%] border-r border-[#C9CCD2] text-primary-300 font-medium">
                                <div
                                    class="flex justify-end items-center pt-[30px] pb-[13px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5 font-semibold">
                                    <div class="w-[60px]">
                                        <p>
                                            <?php echo $response_GetForecastMacro->d->A[0][0]->year; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[70%] px-2 py-1 font-semibold">
                                        <?php _e('GDP (YoY%)', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][0]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[70%] px-2 py-1 font-semibold">
                                        <?php _e('CPI trung bình (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][1]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[70%] px-2 py-1 font-semibold">
                                        <?php _e('Xuất khẩu (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][2]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[70%] px-2 py-1 font-semibold">
                                        <?php _e('Nhập khẩu (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][3]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[70%] px-2 py-1 font-semibold">
                                        <?php _e('LSĐH (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][4]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[70%] px-2 py-1 font-bold">
                                        <?php _e('USD/VND LNH trung bình', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center font-semibold">
                                        <p><?php echo number_format($response_GetForecastMacro->d->A[0][5]->value); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 bg-[#F5FCFF] grid grid-cols-2 text-center">
                                <div class="text-[#FF0017]">
                                    <div
                                        class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
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
                                            class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                            <p><?php echo $response_GetForecastMacro->d->F[1][$i]->value; ?></p>
                                            <p><?php echo $response_GetForecastMacro->d->F[3][$i]->value; ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div
                                        class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[1][5]->value) ?></p>
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[3][5]->value) ?></p>
                                    </div>
                                </div>
                                <div class="text-[#30D158]">
                                    <div
                                        class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
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
                                            class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                            <p><?php echo $response_GetForecastMacro->d->F[0][$i]->value; ?></p>
                                            <p><?php echo $response_GetForecastMacro->d->F[2][$i]->value; ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div
                                        class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[0][5]->value); ?></p>
                                        <p><?php echo number_format($response_GetForecastMacro->d->F[2][5]->value); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (have_rows('button')) {
                            while (have_rows('button')): the_row();
                                if (get_sub_field('title')) {
                        ?>
                                    <div class="text-right mt-4">
                                        <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                            class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
                                            <?php echo svg('arrow-btn', '20', '20') ?>
                                            <?php the_sub_field('title') ?>
                                        </a>
                                    </div>
                        <?php
                                }
                            endwhile;
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>