<?php
$check_logout = bsc_is_user_logged_out();
$class = $check_logout ? 'blur-sm' : '';
?>
<section class="xl:my-[100px] my-20 qdbsc_ket_qua_kinh_doanh" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h3 class="font-bold mb-6 text-2xl">
                <?php the_sub_field('title') ?>
            </h3>
        <?php } ?>
        <?php
        $array_data_GetForecastBussinessResults = array(
            'lang' => 'VI',
            'forecastperiod' => date('Y')
        );
        $response_GetForecastBussinessResults = get_data_with_cache('GetForecastBussinessResults', $array_data_GetForecastBussinessResults, $time_cache);
        if ($response_GetForecastBussinessResults) {
        ?>
            <div class="relative">
                <div
                    class="rounded-[10px] border border-[#EAEEF4] text-xs font-medium bg-white <?php echo $class ?>">
                    <div class="flex">
                        <div
                            class="w-[140px] shrink-0 prose-li:min-h-[30px] prose-li:flex prose-li:items-center prose-ul:pl-4 shadow-[2px_3px_7px_0px_#ccc]">
                            <div
                                class="text-white bg-primary-300 font-semibold flex justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2 pl-4">
                                <?php _e('Ngành', 'bsc') ?>
                            </div>
                            <ul>
                                <?php
                                for ($i = 0; $i < 6; $i++) {
                                ?>
                                    <li>
                                        Ngân hàng
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                            <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                            <ul>
                                <?php
                                for ($i = 0; $i < 6; $i++) {
                                ?>
                                    <li>
                                        Ngân hàng
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                            <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                            <ul>
                                <?php
                                for ($i = 0; $i < 6; $i++) {
                                ?>
                                    <li>
                                        Ngân hàng
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
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    Mã CK
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            <a href="">
                                                BID
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            <a href="">
                                                BID
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            <a href="">
                                                BID
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    DTT 2024
                                    <p>
                                        (tỷ VND)
                                    </p>
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            81,424
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            81,424
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            81,424
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    % YoY
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            45%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            45%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            45%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    EPS <br>
                                    2024
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            24,796
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            24,796
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            24,796
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    P/E FWD <br>
                                    2024
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            15%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            15%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            15%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    P/B FWD <br>
                                    2024
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            4.350
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            4.350
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            4.350
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    ROA <br>
                                    2024
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            10.75
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            10.75
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            10.75
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    ROE <br>
                                    2024
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            1.57
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            1.57
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            1.57
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    Giá ngày <br>
                                    15/08/2024
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            22,760
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            22,760
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            22,760
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    Giá mục tiêu <br>
                                    Giá mục tiêu
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            27,970
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            27,970
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            27,970
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="min-w-[110px]">
                                <div
                                    class="text-white bg-primary-300 font-semibold flex items-center justify-center flex-col gap-1 min-h-[60px] leading-[1.125] py-2">
                                    Upside <br>
                                    (%)
                                </div>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            28%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            28%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <hr class="my-1 h-[1px] border-t-0 bg-[#C9CCD2]" />
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                    ?>
                                        <li>
                                            28%
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <?php if ($check_logout) {
                    echo $result['html'];
                } ?>
            </div>
        <?php } ?>
    </div>
</section>