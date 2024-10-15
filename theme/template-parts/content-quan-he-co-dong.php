<div
    class="news_service-item document_item-popup md:flex items-center justify-between md:gap-20 [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#E1E1E1] [&:not(:last-child)]:pb-6" data-modal-target="document-modal" data-modal-toggle="document-modal" data-doccument="<?php echo check_link(get_field('file')) ?>">
    <div class="flex items-center">
        <?php
        $date_string = get_field('date_post');
        $date = DateTime::createFromFormat('Ymd', $date_string);
        ?>
        <div
            class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
            <p
                class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
                <?php
                if (get_locale() == 'vi') {
                    setlocale(LC_TIME, 'vi_VN.UTF-8');
                    $thang_viet = array(
                        '01' => __('Tháng ', 'bsc') . '1',
                        '02' => __('Tháng ', 'bsc') . '2',
                        '03' => __('Tháng ', 'bsc') . '3',
                        '04' => __('Tháng ', 'bsc') . '4',
                        '05' => __('Tháng ', 'bsc') . '5',
                        '06' => __('Tháng ', 'bsc') . '6',
                        '07' => __('Tháng ', 'bsc') . '7',
                        '08' => __('Tháng ', 'bsc') . '8',
                        '09' => __('Tháng ', 'bsc') . '9',
                        '10' => __('Tháng ', 'bsc') . '10',
                        '11' => __('Tháng ', 'bsc') . '11',
                        '12' => __('Tháng ', 'bsc') . '12',
                    );
                    $month = $date->format('m');
                    echo $thang_viet[$month];
                } else {
                    echo $date->format('F');
                } ?>
            </p>
            <p
                class="flex-1 flex flex-col justify-center items-center text-2xl font-bold bg-primary-50 w-full">
                <?php echo $date->format('d'); ?>
                <span class="text-primary-300 text-[12px] font-medium">
                    <?php echo $date->format('Y'); ?>
                </span>
            </p>
        </div>
        
        <div class="md:ml-[30px] ml-5">
            <p
                class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-primary-300 cursor-pointer main_title">
                <?php the_title() ?>
            </p>
            <div class="line-clamp-2 text-paragraph mb-4 main_content">
                <?php the_excerpt() ?>
            </div>
        </div>
    </div>
    <p
        class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap cursor-pointer">
        <?php _e('Tải xuống', 'bsc') ?>
        <?php echo svg('download') ?>
    </p>
</div>