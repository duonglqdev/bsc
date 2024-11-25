<section class="chart mt-[54px] mb-[100px] dmkn_chart_bsc" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="font-bold text-2xl">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php
        $time_cache = 300;
        date_default_timezone_set('Asia/Bangkok');
        $todate = date('Y-m-d');
        $array_data = array(
            'portcode' => 'BSC10,BSC30,BSC50,HOSE,VNDIAMOND'
        );
        $data = get_data_with_cache('GetPortfolioPerformance', $array_data, $time_cache);

        $maxValue = 0;
        $minValue = PHP_INT_MAX;
        if ($data) {
            $stocksData = [
                'BSC10' => [],
                'BSC30' => [],
                'BSC50' => [],
                'HOSE' => [],
                'VNDIAMOND' => []
            ];

            $earliestDate = null;

            foreach ($data->d as $dataset) {
                foreach ($dataset as $stockCode => $entries) {
                    foreach ($entries as $entry) {
                        $date = date("Y-m-d", strtotime($entry->tradedate));
                        $portclose = $entry->portclose;
                        $percentagedifference = $entry->percentagedifference;

                        $stocksData[$stockCode][$date] = [
                            'portclose' => $portclose,
                            'percentagedifference' => $percentagedifference
                        ];

                        if ($portclose > $maxValue) {
                            $maxValue = $portclose;
                        }
                        if ($portclose < $minValue) {
                            $minValue = $portclose;
                        }

                        if (!$earliestDate || $date < $earliestDate) {
                            $earliestDate = $date;
                        }
                    }
                }
            }

            $fromdate = $earliestDate;
            $stocksDataJson = json_encode($stocksData);
            $maxValue = ceil($maxValue / 10) * 10;
            $minValue = floor($minValue / 10) * 10;
        }
        ?>
        <ul class="flex items-center flex-wrap mt-6 mb-10 gap-6 btn-chart">
            <li>
                <button data-chart="BSC10"
                    class="active inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
                    <?php _e('BSC10', 'bsc') ?>
                </button>
            </li>
            <li>
                <button data-chart="BSC30"
                    class="inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
                    <?php _e('BSC30', 'bsc') ?>
                </button>
            </li>
            <li>
                <button data-chart="BSC50"
                    class="inline-block lg:px-[40px] px-6 py-3 lg:min-w-[207px] text-center rounded-[10px] lg:text-lg font-bold [&:not(.active)]:bg-[#EBF4FA] bg-primary-300 [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
                    <?php _e('BSC50', 'bsc') ?>
                </button>
            </li>
        </ul>
        <h2 class="font-bold text-2xl">
            <?php _e('Hiệu suất danh mục', 'bsc') ?>
        </h2>
        <div class="mt-12 rounded-2xl py-6 px-7 shadow-base performance-chart">
            <div id="date-performance-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
                datepicker-autohide datepicker-orientation="bottom left"
                class="flex items-center text-xs gap-4">
                <p class="font-semibold mr-6">
                    <?php _e('Thời gian:', 'gnws') ?>
                </p>
                <div
                    class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-12 px-4 py-[12px]">
                    <input id="datepicker-performance-start" name="start" type="text"
                        class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
                        placeholder="<?php _e('Từ ngày', 'bsc') ?>" value="<?php echo $fromdate ?>">
                    <?php echo svg('date-blue') ?>
                </div>
                <div
                    class="flex items-center 2xl:gap-4 gap-3 border border-[#EAEEF4] rounded-[10px] h-12 px-4 py-[12px]">
                    <input id="datepicker-performance-end" name="end" type="text"
                        class="todate border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0 placeholder:text-black"
                        placeholder="<?php _e('Đến ngày', 'bsc') ?>" value="<?php echo $todate ?>">
                    <?php echo svg('date-blue') ?>
                </div>
            </div>
            <div id="chart" data-time_cache="<?php echo $time_cache ?>" data-maxvalue="<?php echo $maxValue; ?>" data-minvalue="<?php echo $minValue; ?>" data-stock='<?php echo $stocksDataJson ?>'></div>
            <?php echo do_shortcode('[contact-form-7 id="ba63d7e" title="Nhận tư vấn phân tích BSC"]') ?>
        </div>
    </div>
</section>