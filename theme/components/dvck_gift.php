<section class="xl:my-[100px] my-20 dvck_gift" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="flex items-center justify-between mb-10">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title"><?php the_sub_field('title') ?></h2>
            <?php } ?>
            <a href="<?php echo check_link(get_field('cdctkm1_page', 'option')) ?><?php if ($class = get_field('cdctkm1_pageid_class', 'option')):  echo '#' . $class;
                                                                                    endif; ?>"
                class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold inline-flex items-center gap-x-3">
                <?php echo svg('arrow-btn', '20') ?>
                <?php _e('Xem tất cả', 'bsc') ?>
            </a>
        </div>
        <?php
        $chuong_trinh_khuyen_mai_id = get_field('cdctkm1_id_danh_mục', 'option');
        if ($chuong_trinh_khuyen_mai_id) {
            $time_cache = get_sub_field('time_cache') ?: 300;
            $array_data = array(
                "maxitem" => 3,
                "lang" => pll_current_language(),
                'index' => 1,
                "groupid" => $chuong_trinh_khuyen_mai_id,
            );
            $response = get_data_with_cache('GetNews', $array_data, $time_cache);
            if ($response) {
        ?>
                <div class="lg:flex gap-10">
                    <?php
                    $i = 0;
                    foreach ($response->d as $news) {
                        $i++;
                        if ($i == 1) { ?>
                            <div class="lg:w-[656px] lg:max-w-[50%]">
                                <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
                                    class="w-full block relative overflow-hidden rounded-2xl pt-[55%]">
                                    <img loading="lazy" src="<?php echo bsc_set_thumbnail($news, 'thumbnail') ?>"
                                        alt="<?php echo htmlspecialchars($news->title) ?>"
                                        class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
                                </a>
                            </div>
                    <?php }
                    } ?>
                    <div class="flex-1">
                        <div class="2xl:space-y-[23px] space-y-4">
                            <?php
                            $i = 0;
                            foreach ($response->d as $news) {
                                $i++;
                                if ($i > 1) {
                            ?>
                                    <div class="item flex gap-6 items-center">
                                        <div class="w-[270px] max-w-[45%]">
                                            <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
                                                class="w-full relative pt-[63%] block overflow-hidden rounded-[10px]">
                                                <img loading="lazy" src="<?php echo bsc_set_thumbnail($news, 'thumbnail') ?>"
                                                    alt="<?php echo htmlspecialchars($news->title) ?>"
                                                    class="absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105">
                                            </a>
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="font-bold mb-2 transition-all duration-500 hover:text-green">
                                                <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>" class="line-clamp-2">
                                                    <?php echo htmlspecialchars($news->title) ?>
                                                </a>
                                            </h4>
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
                                                <div class="mt-6 flex items-center gap-2 font-Helvetica">
                                                    <?php echo svg('time') ?>
                                                    <div class="font-medium"><?php echo $formattedStartDate ?> - <?php echo $formattedEndDate ?></div>
                                                </div>
                                                <div class="mt-[14px] font-Helvetica">
                                                    <div
                                                        class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[3px]">
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
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</section>