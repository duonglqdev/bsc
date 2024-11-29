<section class="xl:my-[100px] my-20 ttnc_search_max" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div
            class="rounded-[10px] bg-gradient-blue-to-right-100 px-6 py-12 lg:flex items-center gap-4">
            <?php if (get_sub_field('title')) { ?>
                <div class="lg:w-[345px] max-w-[33.333%]">
                    <h2 class="uppercase lg:text-[28px] text-2xl font-bold !leading-[1.57]">
                        <?php the_sub_field('title') ?>
                    </h2>
                </div>
            <?php } ?>
            <?php
            $top_co_phieu = get_top_viewed_co_phieu_option(6);
            $symbols = array_keys($top_co_phieu);
            $symbol  = implode(",", $symbols);
            $symbol = strtoupper($symbol);
            $array_data_value = array(
                'symbols' => $symbol
            );
            $response_value = get_data_with_cache('instruments', $array_data_value, $time_cache, 'https://priceapi.bsc.com.vn/datafeed/');
            if ($response_value) {

            ?>
                <div class="flex-1 flex justify-end items-center flex-wrap gap-6">
                    <?php foreach ($response_value->d as $respon_symbol) {
                        $bg_color_class = 'bg-[#1CCD83]';
                        $title_symbol = '';
                        if ($respon_symbol->changePercent != '') {
                            if (($respon_symbol->changePercent) > 0) {
                                $bg_color_class = 'bg-[#1CCD83]';
                                $title_symbol = '+' . round($respon_symbol->changePercent, 2) . '%';
                            } elseif (($respon_symbol->changePercent) < 0) {
                                $bg_color_class = 'bg-[#FE5353]';
                                $title_symbol = round($respon_symbol->changePercent, 2) . '%';
                            } elseif (($respon_symbol->changePercent) == 0) {
                                $bg_color_class = 'bg-[#EB0]';
                                $title_symbol = '+' . round($respon_symbol->changePercent, 2) . '%';
                            }
                        }
                    ?>
                        <a href="<?php echo slug_co_phieu($respon_symbol->symbol) ?>"
                            class="inline-flex rounded-lg <?php echo $bg_color_class ?> text-white font-bold items-center gap-4 py-3 px-[12px]">
                            <span>
                                <?php echo $respon_symbol->symbol  ?>
                            </span>
                            <?php if ($title_symbol != '') { ?>
                                <span>
                                    <?php echo  $title_symbol ?>
                                </span>
                            <?php  } ?>
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>