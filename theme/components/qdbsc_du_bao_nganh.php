<?php
$check_logout = bsc_is_user_logged_out();
$class = $check_logout['class'];
?>
<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> qdbsc_du_bao_nganh" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <?php if (get_sub_field('link')) { ?>
                <a href="<?php echo check_link(get_sub_field('link')) ?>" class="font-bold block <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 text-2xl':'mb-4 text-[22px]' ?>">
                    <?php the_sub_field('title') ?>
                </a>
            <?php } else { ?>
                <h3 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 text-2xl':'mb-4 text-[22px]' ?>">
                    <?php the_sub_field('title') ?>
                </h3>
            <?php } ?>
        <?php } ?>
        <div class="relative rounded-[10px] overflow-hidden">
            <div
                class="text-center border border-[#EAEEF4] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'overflow-x-auto scroll-bar-custom scroll-bar-x text-xs' ?> <?php echo $class ?>">
                <?php
                if (!$check_logout) {
                    $array_data_nganh = array();
                    $response_nganh = get_data_with_cache('GetForecastProspectBranch', $array_data_nganh, $time_cache);
                    if ($response_nganh) {
                ?>
                        <div
                            class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.5] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'w-max whitespace-nowrap' ?>">
                            <div class="py-2 px-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/3':'min-w-[180px]' ?>">
                                <?php _e('Ngành', 'bsc') ?>
                            </div>
                            <div class="py-2 px-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/3':'min-w-[180px]' ?>">
                                <?php _e('Quan điểm', 'bsc') ?> <?php echo $response_nganh->d[0]->colnamE1 ?>/<?php echo $response_nganh->d[0]->forecastyeaR1 ?>
                            </div>
                            <div class="py-2 px-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/3':'min-w-[180px]' ?>">
                                <?php _e('Quan điểm', 'bsc') ?> <?php echo $response_nganh->d[0]->colnamE2 ?>/<?php echo $response_nganh->d[0]->forecastyeaR2 ?>
                            </div>
                        </div>
                        <div
                            class="prose-a:text-primary-300 prose-a:font-bold font-medium <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'scroll-bar-custom overflow-y-auto max-h-[340px]':'w-max' ?>">
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
                                        class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/3':'whitespace-nowrap min-w-[180px]' ?> min-h-[34px] flex items-center leading-[1.5] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
                                        <?php echo $nganh->name  ?>
                                    </div>
                                    <div
                                        class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/3':'whitespace-nowrap min-w-[180px]' ?> min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 <?php echo $class_qd1 ?> border-r border-[#C9CCD2]">
                                        <?php echo $title_qd1 ?>
                                    </div>
                                    <div
                                        class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/3':'whitespace-nowrap min-w-[180px]' ?> min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 <?php echo $class_qd2 ?> ">
                                        <?php echo $title_qd2 ?>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    <?php }
                } else {
                    ?>
                    <!-- Data Demo -->
                    <div
                        class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.125]">
                        <div class="w-1/3 py-2 px-3">
                            <?php _e('Ngành', 'bsc') ?>
                        </div>
                        <div class="w-1/3 py-2 px-3">
                            <?php _e('Quan điểm', 'bsc') ?>
                        </div>
                        <div class="w-1/3 py-2 px-3">
                            <?php _e('Quan điểm', 'bsc') ?>
                        </div>
                    </div>
                    <div class="scroll-bar-custom overflow-y-auto max-h-[340px] prose-a:text-primary-300 prose-a:font-bold font-medium">
                        <?php for ($i = 0; $i < 9; $i++) { ?>
                            <div class="flex items-center ">
                                <div class="w-1/3 min-h-[34px] flex items-center leading-[1.125] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
                                    <?php _e('Công nghệ - Viễn thông', 'bsc') ?> </div>
                                <div class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
                                    <?php _e('Tích cực', 'bsc') ?> </div>
                                <div class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-[#30D158] ">
                                    <?php _e('Tích cực', 'bsc') ?> </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php
                } ?>
            </div>
            <?php if ($check_logout) {
                echo $check_logout['html'];
            } ?>
        </div>
    </div>
</section>