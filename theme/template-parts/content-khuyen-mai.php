<?php if ($args['data']) {
    $news = $args['data'];
?>
    <div class="flex flex-col font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'w-full block_slider-item' ?>">
        <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>" class="block w-full pt-[64.66%] overflow-hidden rounded-xl relative">
            <img loading="lazy" src="<?php echo bsc_set_thumbnail($news, 'thumbnail') ?>"
                alt="<?php echo htmlspecialchars($news->title) ?>"
                class="absolute w-full h-full inset-0 object-cover hover:scale-105 transition-all duration-500">
        </a>
        <h3
            class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:text-lg transition-all duration-500 hover:text-green mt-8':'mt-4' ?>">
            <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>" class="line-clamp-2">
                <?php echo htmlspecialchars($news->title) ?>
            </a>
        </h3>
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
            }
        ?>
            <div class="flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-4 mt-6 ':'mt-2 text-xs gap-2' ?>">
                <div class="inline-flex items-center gap-2">
                    <?php echo svg('time') ?>
                    <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                        <?php _e('Thời gian', 'bsc') ?>:
                    <?php } ?>
                </div>
                <div class="font-medium"><?php echo $formattedStartDate ?> - <?php echo $formattedEndDate ?></div>
            </div>
            <div class="mt-[14px]">
                <div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
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
<?php } ?>