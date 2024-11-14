<?php if ($args['data']) {
    $news = $args['data'];
?>
    <div class="flex flex-col font-Helvetica">
        <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>" class="block w-full pt-[64.66%] overflow-hidden rounded-xl relative">
            <img src="<?php echo bsc_set_thumbnail($news, 'thumbnail') ?>"
                alt="<?php echo htmlspecialchars($news->title) ?>"
                class="absolute w-full h-full inset-0 object-cover hover:scale-105 transition-all duration-500">
        </a>
        <h3
            class="mt-8 font-bold lg:text-lg transition-all duration-500 hover:text-green">
            <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>" class="line-clamp-2">
                <?php echo htmlspecialchars($news->title) ?>
            </a>
        </h3>
        <?php if ($news->promotionstarted && $news->promotionended) {
            $startDate = new DateTime($news->promotionstarted);
            $endDate = new DateTime($news->promotionended);
            $formattedStartDate = $startDate->format('d/m/Y');
            $formattedEndDate = $endDate->format('d/m/Y');
            $interval = $startDate->diff($endDate);
            $daysDifference = $interval->days;
            $today = new DateTime();
            $remainingInterval = $today->diff($endDate);
            $remainingDays = $remainingInterval->days;
            if ($today > $endDate) {
                $remainingDays = 0;
            }
            $elapsedDays = $daysDifference - $remainingDays;
            $completionPercentage = ($elapsedDays / $daysDifference) * 100; ?>
            <div class="mt-6 flex items-center gap-4">
                <div class="inline-flex items-center gap-2">
                    <?php echo svg('time') ?>
                    <?php _e('Thời gian chương trình', 'bsc') ?>:
                </div>
                <div class="font-medium"><?php echo $formattedStartDate ?> - <?php echo $formattedEndDate ?></div>
            </div>
            <div class="mt-[14px]">
                <div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
                    <p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
                        style="width:<?php echo round($completionPercentage, 2)  ?>%"></p>
                </div>
                <div class="mt-2 text-xs">
                    <?php _e('Thời gian khuyến mãi còn', 'bsc') ?> <strong class="text-primary-300"><?php echo $daysDifference ?>
                        <?php _e('ngày', 'bsc') ?></strong>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>