<?php
$chuong_trinh_khuyen_mai_id = get_field('cdctkm1_id_danh_mục', 'option');
if ($chuong_trinh_khuyen_mai_id) {
    $number = get_sub_field('number') ?: 3;
    $time_cache = get_sub_field('time_cache') ?: 300;
    $array_data = array(
        "maxitem" => $number,
        "lang" => pll_current_language(),
        'index' => 1,
        "groupid" => $chuong_trinh_khuyen_mai_id,
        'hot' => 1
    );
    $response = get_data_with_cache('GetNews', $array_data, $time_cache);
    if ($response) {
?>
        <section class="my-12 featured_news bg-gradient-blue-to-bottom-50 featured_gift" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
            <div class="container">
                <div class="featured_news-list block_slider-show-1"
                    data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": true, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":3000,"selectedAttraction": 0.01, "friction": 0.2}'>
                    <?php
                    $i = 3;
                    foreach ($response->d as $news) {
                        $i++;
                        if ($i % 3 == 0) {
                            $color = '#ccece7';
                        } elseif ($i % 3 == 1) {
                            $color = '#fff1d2';
                        } elseif ($i % 3 == 2) {
                            $color = '#EBF4FA';
                        }
                    ?>
                        <div class="w-full block_slider-item">
                            <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
                                class="group grid lg:grid-cols-2 grid-cols-1 rounded-2xl overflow-hidden">
                                <div class="lg:py-14 py-10 lg:px-20 px-6 h-full"
                                    style="background-color:<?php echo  $color ?>;">
                                    <h2
                                        class="lg:2xl:text-[28px] text-xl font-bold line-clamp-2 transition-all duration-500 group-hover:text-yellow-100 leading-snug">
                                        <?php echo htmlspecialchars($news->title) ?>
                                    </h2>
                                    <?php if ($news->promotionended) {
                                        $remainingDays = 0;
                                        $completionPercentage = 0;
                                        $startDate = new DateTime($news->promotionstarted);
                                        $endDate = new DateTime($news->promotionended);
                                        $formattedEndDate = $endDate->format('d/m/Y');
                                        if ($news->promotionstarted) {
                                            $formattedStartDate = $startDate->format('d/m/Y');
                                            $interval = $startDate->diff($endDate);
                                            $daysDifference = $interval->days;
                                            $today = new DateTime();
                                            $remainingInterval = $today->diff($endDate);
                                            $remainingDays = $remainingInterval->days;
                                            $elapsedDays = $daysDifference - $remainingDays;
                                            $completionPercentage = ($elapsedDays / $daysDifference) * 100;
                                            if ($today > $endDate) {
                                                $remainingDays = 0;
                                                $completionPercentage = 0;
                                            }
                                        } else {
                                            $formattedStartDate = 'N/A';
                                        } ?>
                                        <div class="mt-4 flex items-center gap-2 font-Helvetica">
                                            <div class="inline-flex items-center gap-2">
                                                <?php echo svg('time') ?>
                                                <?php _e('Thời gian chương trình', 'bsc') ?>:
                                            </div>
                                            <div class="font-medium"><?php echo $formattedStartDate ?> - <?php echo $formattedEndDate ?></div>
                                        </div>
                                        <div class="mt-[14px] font-Helvetica mb-12 xl:max-w-[433px]">
                                            <div
                                                class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
                                                <p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
                                                    style="width:<?php echo round($completionPercentage, 2)  ?>%"></p>
                                            </div>
                                            <div class="mt-2 text-xs">
                                                <?php if ($remainingDays == 0) {
                                                    _e('Chương trình đã kết thúc', 'bsc');
                                                } else { ?>
                                                    <?php _e('Thời gian khuyến mãi còn', 'bsc') ?> <strong class="text-primary-300"><?php echo $remainingDays ?>
                                                        <?php _e('ngày', 'bsc') ?></strong>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="mt-auto">
                                        <p
                                            class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
                                            <span
                                                class="block relative z-10"><?php _e('Xem chi tiết', 'bsc') ?></span>
                                        </p>

                                    </div>
                                </div>
                                <div class="relative w-full pt-[55%]">
                                    <img src="<?php echo bsc_set_thumbnail($news, 'large') ?>"
                                        alt="<?php echo htmlspecialchars($news->title) ?>" class="object-cover absolute w-full h-full inset-0">
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
<?php }
} ?>