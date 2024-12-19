<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> ttnc_search_max" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div
            class="rounded-[10px] bg-gradient-blue-to-right-100 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex items-center gap-4 px-6 py-12':'p-6' ?>">
            <?php if (get_sub_field('title')) { ?>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[345px] max-w-[33.333%]':'mb-6' ?>">
                    <h2 class="uppercase font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-[28px] !leading-[1.57]':'text-[22px]' ?>">
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
            $response_value = get_data_with_cache('instruments', $array_data_value, $time_cache, get_field('cdapi_ip_address_url_api_price', 'option') . 'datafeed/');
            if ($response_value) {

            ?>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex-1 flex justify-end items-center flex-wrap gap-6':'grid grid-cols-3 gap-[12px]' ?>">
                    <?php foreach ($response_value->d as $respon_symbol) {
                        $bg_color_class = 'bg-[#1CCD83]';
                        $title_symbol = '';
                        if ($respon_symbol->changePercent != '') {
                            $upside = $respon_symbol->changePercent;
                            if ($upside >= 1) {
                                $upside = round($upside);
                            } else {
                                $upside = number_format($upside, 1);
                            }
                            if (($respon_symbol->changePercent) > 0) {
                                $bg_color_class = 'bg-[#1CCD83]';
                                $title_symbol = '+' . $upside . '%';
                            } elseif (($respon_symbol->changePercent) < 0) {
                                $bg_color_class = 'bg-[#FE5353]';
                                $title_symbol = $upside . '%';
                            } elseif (($respon_symbol->changePercent) == 0) {
                                $bg_color_class = 'bg-[#EB0]';
                                $title_symbol = '+' . $upside . '%';
                            }
                        }
                    ?>
                        <a href="<?php echo slug_co_phieu($respon_symbol->symbol) ?>"
                            class="inline-flex rounded-lg <?php echo $bg_color_class ?> text-white font-bold items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-4 py-3 px-[12px]':'gap-3 py-2 px-3 text-xs justify-center' ?>">
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