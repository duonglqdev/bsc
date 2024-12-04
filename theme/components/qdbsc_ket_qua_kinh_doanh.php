<?php
$check_logout = bsc_is_user_logged_out();
$class = $check_logout['class'];
?>
<section class="xl:my-[100px] my-20 qdbsc_ket_qua_kinh_doanh" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h3 class="font-bold mb-6 text-2xl">
                <?php the_sub_field('title') ?>
            </h3>
        <?php } ?>
        <div class="relative">
            <?php
            if (!$check_logout) {
                $array_data_GetForecastBussinessResults = array(
                    'lang' => 'VI',
                    'forecastperiod' => date('Y')
                );
                $response_GetForecastBussinessResults = get_data_with_cache('GetForecastBussinessResults', $array_data_GetForecastBussinessResults, $time_cache);
                if ($response_GetForecastBussinessResults) {
            ?>
                    <div
                        class="rounded-[10px] border border-[#EAEEF4] text-xs font-medium bg-white <?php echo $class ?>">
                        <div class="flex">
                            <div
                                class="w-[160px] shrink-0 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-ul:pl-4 prose-ul:pr-3 shadow-[2px_3px_7px_0px_#ccc]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex justify-center flex-col min-h-[60px] leading-[1.5] py-2 pl-4">
                                    <?php _e('Ngành', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                    ?>
                                        <li>
                                            <?php echo $GetForecastBussinessResults->namevn ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div
                                class="flex-1 scroll-bar-custom scroll-container [&:not(.active)]:cursor-default cursor-grab scroll-bar-x overflow-x-auto flex text-center prose-a:font-bold prose-a:text-primary-300 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-li:justify-center prose-p:font-normal">
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('Mã CK', 'bsc') ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php if ($GetForecastBussinessResults->symbol) { ?>
                                                    <a href="<?php echo slug_co_phieu($GetForecastBussinessResults->symbol) ?>"><?php echo $GetForecastBussinessResults->symbol ?></a>
                                                <?php } ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('DTT', 'bsc') ?> <?php echo date('Y') ?>
                                        <p>(<?php _e('tỷ VND', 'bsc') ?>)</p>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->revenue) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('% YoY', 'bsc') ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php if ($GetForecastBussinessResults->npatmi) { ?>
                                                    <?php echo $GetForecastBussinessResults->npatmi ?>%
                                                <?php } ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('EPS', 'bsc') ?> <br>
                                        <?php echo date('Y') ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->eps) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('P/E FWD', 'bsc') ?> <br>
                                        <?php echo date('Y') ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->pe) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('P/B FWD', 'bsc') ?> <br>
                                        <?php echo date('Y') ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->pb) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('ROA', 'bsc') ?> <br>
                                        <?php echo date('Y') ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->roa) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('ROE', 'bsc') ?> <br>
                                        <?php echo date('Y') ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->roe) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('Giá ngày', 'bsc') ?> <br>
                                        <?php echo date('d/m/Y', strtotime('-1 day')); ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->closeprice) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('Giá mục tiêu', 'bsc') ?> <br>
                                        <?php echo date('Y') ?>/<?php echo date('Y') + 1 ?>
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo number_format($GetForecastBussinessResults->pricerecommended) ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>

                                </div>
                                <div class="min-w-[110px]">
                                    <div
                                        class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                        <?php _e('Upside', 'bsc') ?> <br>
                                        (%)
                                    </div>
                                    <ul>
                                        <?php
                                        foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                        ?>
                                            <li>
                                                <?php echo $GetForecastBussinessResults->upside ?>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php }
            } else {
                ?>
                <!-- Data Demo -->
                <div
                    class="rounded-[10px] border border-[#EAEEF4] text-xs font-medium bg-white <?php echo $class ?>">
                    <div class="flex rounded-md overflow-hidden">
                        <div
                            class="w-[160px] shrink-0 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-ul:pl-4 prose-ul:pr-3 shadow-[2px_3px_7px_0px_#ccc]">
                            <div
                                class="text-white bg-primary-300 font-semibold flex justify-center flex-col min-h-[60px] leading-[1.5] py-2 pl-4">
                                <?php _e('Ngành', 'bsc') ?>
                            </div>
                            <ul>
                                <?php
                                for ($i = 0; $i < 6; $i++) {
                                ?>
                                    <li>
                                        <?php _e('Ngân hàng', 'bsc') ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div
                            class="flex-1 scroll-bar-custom scroll-container [&:not(.active)]:cursor-default cursor-grab scroll-bar-x overflow-x-auto flex text-center prose-a:font-bold prose-a:text-primary-300 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-li:justify-center prose-p:font-normal">
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('Mã CK', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            <?php _e('BID', 'bsc') ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('DTT', 'bsc') ?>
                                    <p>
                                        <?php _e('(tỷ VND)', 'bsc') ?>
                                    </p>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('% YoY', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('EPS', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('P/E FWD', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('P/B FWD', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('ROA', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('ROE', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('Giá ngày', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('Giá mục tiêu', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col min-h-[60px] leading-[1.5] py-2">
                                    <?php _e('Upside', 'bsc') ?>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            ----
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            <?php
            } ?>
            <?php if ($check_logout) {
                echo $check_logout['html'];
            } ?>
        </div>
    </div>
</section>