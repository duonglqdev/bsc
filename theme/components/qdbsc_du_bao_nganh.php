<?php
$check_logout = bsc_is_user_logged_out();
$class = $check_logout ? 'blur-sm' : '';
?>
<section class="xl:my-[100px] my-20 qdbsc_du_bao_nganh" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h3 class="font-bold mb-6 text-2xl">
                <?php the_sub_field('title') ?>
            </h3>
        <?php } ?>
        <?php
        $array_data_nganh = array();
        $response_nganh = get_data_with_cache('GetForecastProspectBranch', $array_data_nganh, $time_cache);
        if ($response_nganh) {
        ?>
            <div class="relative">
                <div
                    class="rounded-[10px] overflow-hidden mt-6 text-center border border-[#EAEEF4] <?php echo $class ?>">
                    <div
                        class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.125]">
                        <div class="w-1/3 py-2 px-3">
                            <?php _e('Ngành', 'bsc') ?>
                        </div>
                        <div class="w-1/3 py-2 px-3">
                            <?php _e('Quan điểm', 'bsc') ?> <?php echo $response_nganh->d[0]->colnamE1 ?>/<?php echo $response_nganh->d[0]->forecastyeaR1 ?>
                        </div>
                        <div class="w-1/3 py-2 px-3">
                            <?php _e('Quan điểm', 'bsc') ?> <?php echo $response_nganh->d[0]->colnamE2 ?>/<?php echo $response_nganh->d[0]->forecastyeaR2 ?>
                        </div>

                    </div>
                    <div
                        class="scroll-bar-custom overflow-y-auto max-h-[340px] prose-a:text-primary-300 prose-a:font-bold font-medium">
                        <?php
                        $i = 0;
                        foreach ($response_nganh->d as $nganh) {
                            $i++;
                            $qd1 = $nganh->forecasT1;
                            if ($qd1 == 0) {
                                $title_qd1 = __('Tích cực', 'bsc');
                                $class_qd1 = 'text-[#30D158]';
                            } elseif ($qd1 == 1) {
                                $title_qd1 = __('Trung lập', 'bsc');
                                $class_qd1 = 'text-black';
                            } elseif ($qd1 == 3) {
                                $title_qd1 = __('Kém tích cực', 'bsc');
                                $class_qd1 = 'text-[#FF0017]';
                            } else {
                                $title_qd1 = '-';
                                $class_qd1 = 'text-black';
                            }
                            $qd2 = $nganh->forecasT2;
                            if ($qd2 == 0) {
                                $title_qd2 = __('Tích cực', 'bsc');
                                $class_qd2 = 'text-[#30D158]';
                            } elseif ($qd2 == 1) {
                                $title_qd2 = __('Trung lập', 'bsc');
                                $class_qd2 = 'text-black';
                            } elseif ($qd2 == 3) {
                                $title_qd2 = __('Kém tích cực', 'bsc');
                                $class_qd2 = 'text-[#FF0017]';
                            } else {
                                $title_qd2 = '-';
                                $class_qd2 = 'text-black';
                            }
                        ?>
                            <div
                                class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
                                <div
                                    class="w-1/3 min-h-[34px] flex items-center leading-[1.125] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
                                    <?php echo $nganh->name  ?>
                                </div>
                                <div
                                    class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 <?php echo $class_qd1 ?> border-r border-[#C9CCD2]">
                                    <?php echo $title_qd1 ?>
                                </div>
                                <div
                                    class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 <?php echo $class_qd2 ?> ">
                                    <?php echo $title_qd2 ?>
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
        <?php } ?>
    </div>
</section>