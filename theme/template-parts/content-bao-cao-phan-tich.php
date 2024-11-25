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
            $text_status = '#30d158';
            $background_status = '#d6f6de';
            $title_status = '';
            if ($news->recommendation) {
                $status = $news->recommendation;
                if ($status == '0') {
                    $text_status = '#30d158';
                    $background_status = '#d6f6de';
                    $title_status = __('Tích cực', 'bsc');
                } elseif ($status == '1') {
                    $text_status = '#FFB81C';
                    $background_status = '#FFF1D2';
                    $title_status = __('Trung lập', 'bsc');
                } elseif ($status == '2') {
                    $text_status = '#FF0017';
                    $background_status = '#FFD9DC';
                    $title_status = __('Tiêu cực', 'bsc');
                } elseif ($status == '3') {
                    $text_status = '#30D158';
                    $background_status = '#D6F6DE';
                    $title_status = __('Mua mạnh', 'bsc');
                } elseif ($status == '4') {
                    $text_status = '#30D158';
                    $background_status = '#D6F6DE';
                    $title_status = __('Mua', 'bsc');
                } elseif ($status == '5') {
                    $text_status = '#3FF0E24';
                    $background_status = '#FFD9DC';
                    $title_status = __('Bán', 'bsc');
                } elseif ($status == '6') {
                    $text_status = '#FFC64A';
                    $background_status = '#FFF1D2';
                    $title_status = __('Nắm giữ', 'bsc');
                } elseif ($status == '7') {
                    $text_status = '#FFC64A';
                    $background_status = '#FFF1D2';
                    $title_status = __('Không', 'bsc');
                }
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
                        <a href="javascript:void(0)"
                            class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                            <?php echo $news->symbols ?>
                        </a>
                    <?php } ?>
                    <div class="flex flex-col font-Helvetica text-xs">
                        <p>
                            <?php _e('Giá mục tiêu', 'bsc') ?>
                        </p>
                        <p class="font-medium">
                            <?php
                            if ($news->pricerecommendation) echo number_format($news->pricerecommendation);
                            ?>
                            <?php if ($news->upsite) { ?>
                                <span class="text-[#30D158]">
                                    (<?php echo $news->upsite ?>)
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