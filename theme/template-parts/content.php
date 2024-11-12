<?php if ($args['data']) {
    $news = $args['data'];
?>
    <div class="post_item font-Helvetica">
        <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
            class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
            <img src="<?php echo bsc_set_thumbnail($news, 'thumbnail') ?>"
                alt="<?php echo htmlspecialchars($news->title) ?>"
                class="absolute w-full h-full inset-0 object-cover group-hover:scale-110 transition-all duration-500">
        </a>
        <?php
        $date = new DateTime($news->postdate);
        ?>
        <div class="date flex items-center gap-x-[12px] mb-2 text-xs">
            <?php echo svg('date') ?>
            <span>
                <?php echo $date->format('d/m/Y'); ?>
            </span>
            <span>
                <?php echo $date->format('H:i:s'); ?>
            </span>
        </div>
        <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
            class="block font-bold line-clamp-2 mb-3 hover:text-green transition-all duration-500">
            <?php echo htmlspecialchars($news->title) ?>
        </a>
        <div class="line-clamp-3 text-paragraph mb-4">
            <?php echo htmlspecialchars($news->description) ?>
        </div>
        <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
            class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs">
            <?php _e('Xem chi tiết', 'bsc') ?>
            <?php echo svg('arrow-btn', '12', '12') ?>
        </a>
    </div>
<?php } ?>