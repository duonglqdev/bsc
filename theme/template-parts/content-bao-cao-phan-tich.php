<?php if ($args['data']) {
    $news = $args['data'];
    $link = 'javascript:void(0)';
    $khoi_template = 'taxonomy';
    $get_array_id_taxonomy = $args['get_array_id_taxonomy'];
    if ($news->categoryid) {
        $categoryid = $news->categoryid;
        $term = get_name_by_tax_id($categoryid, $get_array_id_taxonomy);
        if ($term) {
            $link = get_term_link($term);
            $khoi_template = get_field('khoi_template', $term);
        }
    }
?>
    <div class="relative rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
        <div class="flex items-center justify-between mb-4">
            <?php

            if ($news->recommendation) {
                $status = $news->recommendation;
                $check_status = get_color_by_number_bsc($status);
                $title_status = $check_status['title_status'];
                $text_status = $check_status['text_status'];
                $background_status = $check_status['background_status'];
            }
            ?>
            <?php if ($khoi_template == 'taxonomy') { ?>
                <a href="<?php echo $link ?>"
                    class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                    <?php echo htmlspecialchars($news->categoryname) ?>
                </a>
            <?php } else { ?>
                <div class="flex items-center gap-4">
                    <?php if ($news->symbols) { ?>
                        <a href="<?php echo slug_co_phieu($news->symbols) ?>"
                            class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                            <?php echo $news->symbols ?>
                        </a>
                    <?php } ?>
                    <div class="flex flex-col font-Helvetica text-xs">
                        <?php if ($news->pricerecommendation) { ?>
                            <p>
                                <?php _e('Giá mục tiêu', 'bsc') ?>
                            </p>
                        <?php } ?>
                        <p class="font-medium">
                            <?php if ($news->pricerecommendation) { ?>
                                <?php
                                echo number_format($news->pricerecommendation);
                                ?>
                            <?php } ?>
                            <?php if ($news->upside) { ?>
                                <span class="text-[#30D158]">
                                    (<?php echo $news->upside ?>)
                                </span>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
            <div class="space-y-1.5 text-right">
                <?php if ($news->recommendation) { ?>
                    <span
                        class="inline-block rounded-[45px] px-4 py-0.5 text-[12px] font-semibold" style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
                        <?php echo $title_status ?>
                    </span>
                <?php } ?>
                <?php
                $date = new DateTime($news->datetimepublished);
                ?>
                <p class="text-paragraph text-xs font-Helvetica"> <?php echo $date->format('d/m/Y'); ?></p>
            </div>
        </div>
        <h3 class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
            <a href="<?php echo slug_report(htmlspecialchars($news->id), htmlspecialchars($news->title)); ?>" class="line-clamp-2">
                <?php echo htmlspecialchars($news->title) ?>
            </a>
        </h3>
        <div class="flex items-center justify-between mt-auto">
            <p class="italic text-paragraph text-xs font-Helvetica">
                <?php echo htmlspecialchars($news->downloads) ?> <?php _e('Lượt tải xuống', 'bsc') ?>
            </p>
            <?php if ($news->reporturl) { ?>
                <a href="<?php echo $news->reporturl ?>" target="_blank"
                    class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
                    <?php _e('Tải xuống', 'bsc') ?>
                    <?php echo svg('download', '20', '20') ?>
                </a>
            <?php } ?>
        </div>
    </div>
<?php } ?>