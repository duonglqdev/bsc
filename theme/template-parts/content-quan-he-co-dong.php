<?php if ($args['data']) {
    $news = $args['data'];
    $date = $news->postdate;
    $date_parts = explode('T', $date);
    $day = $date_parts[0];
    $day_of_month = date('d', strtotime($day));
    $day_of_year = date('Y', strtotime($day));
    setlocale(LC_TIME, 'vi_VN.UTF-8');
    if (get_locale() == 'vi') {
        $month_number = date('n', strtotime($day));
        $month_names = [
            __('Tháng', 'bsc') . ' 1',
            __('Tháng', 'bsc') . ' 2',
            __('Tháng', 'bsc') . ' 3',
            __('Tháng', 'bsc') . ' 4',
            __('Tháng', 'bsc') . ' 5',
            __('Tháng', 'bsc') . ' 6',
            __('Tháng', 'bsc') . ' 7',
            __('Tháng', 'bsc') . ' 8',
            __('Tháng', 'bsc') . ' 9',
            __('Tháng', 'bsc') . ' 10',
            __('Tháng', 'bsc') . ' 11',
            __('Tháng', 'bsc') . ' 12',
        ];
        $month_name = $month_names[$month_number - 1];
    } else {
        $month_name = date('F', strtotime($day));
    }
?>
    <div
        class="news_service-item document_item-popup flex items-center justify-between  <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '[&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-8 lg:gap-20 gap-4' : 'gap-4' ?>" data-newstype="0" data-modal-target="document-modal" data-modal-toggle="document-modal" data-doccument="<?php echo slug_file_news(htmlspecialchars($news->newsid)) ?>" data-id="<?php echo $news->newsid ?>">
        <div class="flex items-center">
            <div
                class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
                <p
                    class="date text-center bg-primary-300 text-white font-bold py-[2px] px-1 leading-normal w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-xs' : 'text-xxs' ?>">
                    <?php
                    echo $month_name;
                    ?>
                </p>
                <p
                    class="flex-1 flex flex-col justify-center items-center  font-bold bg-primary-50 w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:text-2xl text-xl' : 'text-xl' ?>">
                    <?php echo $day_of_month; ?>
                    <span class="text-primary-300 text-[12px] font-medium">
                        <?php echo $day_of_year; ?>
                    </span>
                </p>
            </div>

            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'lg:ml-[30px] ml-4' : 'ml-4' ?>">
                <p
                    class="font-bold leading-normal <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-lg' : 'text-base' ?> lg:line-clamp-2 line-clamp-3 mb-2 transition-all duration-500 hover:text-primary-300 cursor-pointer main_title">
                    <?php echo htmlspecialchars($news->title) ?>
                </p>
                <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
                    <div class="line-clamp-2 text-paragraph main_content font-Helvetica not-italic">
                        <?php echo $news->description ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
            <p
                class="text-green font-semibold lg:inline-flex hidden gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs whitespace-nowrap cursor-pointer shrink-0">
                <?php _e('Xem nội dung', 'bsc') ?>
                <?php echo svgClass('download', '', '', 'shrink-0') ?>
            </p>

        <?php } ?>
    </div>
<?php } ?>