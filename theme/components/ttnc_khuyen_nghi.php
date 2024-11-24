<?php $tab = generateRandomString();
$check_logout = bsc_is_user_logged_out();
$time_cache = 300;
$response_instruments_array = array();
$array_data_instruments = array();
$response_instruments = get_data_with_cache('instruments', $array_data_instruments, $time_cache, 'https://priceapi.bsc.com.vn/datafeed/');
if ($response_instruments) {
    $response_instruments_array = $response_instruments->d;
}
?>
<section class="mt-14 xl:mb-pb-[110px] mb-20 ttnc_khuyen_nghi" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="lg:flex gap-12">
            <div class="lg:w-[745px] lg:max-w-[56%]">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-8">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php
                $array_data = array();
                $response = get_data_with_cache('GetRecommendedCategory', $array_data, $time_cache);
                if ($response) {
                ?>
                    <ul class="customtab-nav flex items-center gap-4 mb-6">
                        <?php
                        $i = 0;
                        foreach ($response->d as $news) {
                            $i++; ?>
                            <li>
                                <button data-tabs="#<?php echo $tab ?>-<?php echo $i ?>"
                                    class="<?php if ($i == 1) echo 'active' ?> inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
                                    <?php echo $news->name ?>
                                </button>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php
                    $i = 0;
                    foreach ($response->d as $news) {
                        $i++; ?>
                        <div class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>"
                            id="<?php echo $tab ?>-<?php echo $i ?>">
                            <div class="relative pt-[76.2416%] w-full rounded-lg overflow-hidden">
                                <?php $class = $check_logout ? 'blur-sm' : ''; ?>
                                <div class="absolute w-full h-full inset-0 <?php echo $class ?>">
                                    <ul
                                        class="flex items-center font-bold text-center text-white bg-primary-300 prose-li:p-3 py-[7px] gap-5 px-[30px] justify-between">
                                        <li class="w-[8%]"><?php _e('Mã', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Khuyến nghị', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Giá', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Mục tiêu', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Upside', 'bsc') ?></li>
                                    </ul>
                                    <?php
                                    $array_data_list_bsc = array(
                                        'portcode' => $news->name
                                    );
                                    $response_list_bsc = get_data_with_cache('GetCategoryDetail', $array_data_list_bsc, $time_cache);
                                    if ($response_list_bsc) {
                                    ?>
                                        <div class="overflow-y-auto scroll-bar-custom max-h-[90%]">
                                            <?php
                                            foreach ($response_list_bsc->d as $list_bsc) {
                                                $symbol = $list_bsc->symbol;
                                                if ($symbol) {
                                                    $symbols = array_column($response_instruments_array, 'symbol');
                                                    $index = array_search($symbol, $symbols);
                                                    if ($index !== false) {
                                                        $stockData = $response_instruments_array[$index];
                                                    }
                                            ?>
                                                    <ul
                                                        class="flex gap-5 text-center justify-between px-[30px] py-4 items-center [&:nth-child(odd)]:bg-white [&:nth-child(even)]:bg-primary-50">
                                                        <li class="w-[8%] font-medium"><?php echo $list_bsc->symbol ?></li>
                                                        <li class="w-[16%] font-medium"><span
                                                                class="inline-block bg-[#D6F6DE] rounded-[45px] px-4 py-0.5 text-[#30D158] min-w-[78px]"><?php echo $list_bsc->action ?></span>
                                                        </li>
                                                        <li class="w-[16%] font-bold text-[#1CCD83]">
                                                            <?php
                                                            if ($stockData->closePrice) {
                                                                echo number_format(($stockData->closePrice) / 1000, 2, '.', '');
                                                            }
                                                            ?>
                                                        </li>
                                                        <li class="w-[16%] font-medium">
                                                            <?php
                                                            if ($list_bsc->expectedprice) {
                                                                echo number_format(($list_bsc->expectedprice) / 1000, 2, '.', '');
                                                            }
                                                            ?>
                                                        </li>
                                                        <li class="w-[16%] font-bold text-[#1CCD83]">
                                                            <?php if ($stockData->closePrice && $list_bsc->expectedprice) {
                                                                echo number_format((($list_bsc->expectedprice - $stockData->closePrice) / $stockData->closePrice) * 100, 2, '.', '') . '%';
                                                            }  ?>
                                                        </li>
                                                    </ul>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php if ($check_logout) {
                                    echo $result['html'];
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
                                    <div class="w-[66%] px-2 py-1 font-semibold">
                                        <?php _e('GDP (YoY%)', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][0]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[66%] px-2 py-1 font-semibold">
                                        <?php _e('CPI trung bình (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][1]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[66%] px-2 py-1 font-semibold">
                                        <?php _e('Xuất khẩu (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][2]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[66%] px-2 py-1 font-semibold">
                                        <?php _e('Nhập khẩu (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][3]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[66%] px-2 py-1 font-semibold">
                                        <?php _e('LSĐH (YoY%)*', 'bsc') ?>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <p><?php echo $response_GetForecastMacro->d->A[0][4]->value; ?></p>
                                    </div>
                                </div>
                                <div class="flex gap-1 items-center min-h-[30px]">
                                    <div class="w-[66%] px-2 py-1 font-bold">
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
                                        <a href="<?php echo check_link(get_sub_field('link')) ?>"
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