<?php
add_action('wp_ajax_filter_jobs', 'filter_jobs_ajax');
add_action('wp_ajax_nopriv_filter_jobs', 'filter_jobs_ajax');

function filter_jobs_ajax()
{
    check_ajax_referer('common_nonce', 'security');
    $nghiep_vu = isset($_POST['nghiep_vu']) ? intval($_POST['nghiep_vu']) : '';
    $noi_lam_viec = isset($_POST['noi_lam_viec']) ? intval($_POST['noi_lam_viec']) : '';
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $args = array(
        'post_type' => 'tuyen-dung',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $paged,
        'orderby' => 'meta_value_num',
        'meta_key' => 'deadline',
        'order' => 'DESC',
        'tax_query' => array(
            'relation' => 'AND',
        ),
    );

    if (!empty($nghiep_vu)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'nghiep-vu',
            'field' => 'term_id',
            'terms' => $nghiep_vu,
        );
    }

    if (!empty($noi_lam_viec)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'noi-lam-viec',
            'field' => 'term_id',
            'terms' => $noi_lam_viec,
        );
    }

    $filter_job = new WP_Query($args);

    if ($filter_job->have_posts()) :
        while ($filter_job->have_posts()) : $filter_job->the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;
?>
        <div class="bsc-pagination mt-12 flex justify-center">
            <?php bsc_pagination_ajax($filter_job, $paged) ?>
        </div>
    <?php
    else :
        echo '<p>' . __('Không có công việc nào phù hợp', 'bsc') . '</p>';
    endif;

    wp_reset_postdata();

    die();
}


add_action('wp_ajax_filter_chuyengia', 'filter_chuyengia_ajax');
add_action('wp_ajax_nopriv_filter_chuyengia', 'filter_chuyengia_ajax');

function filter_chuyengia_ajax()
{
    check_ajax_referer('common_nonce', 'security');
    $thanh_pho = isset($_POST['thanh_pho']) ? intval($_POST['thanh_pho']) : '';
    $kinh_nghiem = isset($_POST['kinh_nghiem'])
        ? (is_array($_POST['kinh_nghiem'])
            ? array_map('intval', $_POST['kinh_nghiem'])
            : intval($_POST['kinh_nghiem']))
        : '';
    $menh = isset($_POST['menh'])
        ? (is_array($_POST['menh'])
            ? array_map('intval', $_POST['menh'])
            : intval($_POST['menh']))
        : '';
    $trinh_do_hoc_van = isset($_POST['trinh_do_hoc_van'])
        ? (is_array($_POST['trinh_do_hoc_van'])
            ? array_map('intval', $_POST['trinh_do_hoc_van'])
            : intval($_POST['trinh_do_hoc_van']))
        : '';
    $name_chuyen_gia = isset($_POST['name_chuyen_gia']) ? $_POST['name_chuyen_gia'] : '';
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 12;
    $args = array(
        'post_type' => 'chuyen-gia',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'meta_key'       => 'fullname',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
        'paged' => $paged,
        'tax_query' => array(
            'relation' => 'AND',
        ),
    );
    if (!empty($thanh_pho)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'thanh-pho',
            'field' => 'term_id',
            'terms' => $thanh_pho,
        );
    }

    if (!empty($kinh_nghiem)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'kinh-nghiem',
            'field' => 'term_id',
            'terms' => $kinh_nghiem,
        );
    }

    if (!empty($menh)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'menh',
            'field' => 'term_id',
            'terms' => $menh,
        );
    }
    if (!empty($trinh_do_hoc_van)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'trinh-do-hoc-van',
            'field' => 'term_id',
            'terms' => $trinh_do_hoc_van,
        );
    }
    if (!empty($name_chuyen_gia)) {
        $args['s'] = $name_chuyen_gia;
    }
    $filter_job = new WP_Query($args);

    if ($filter_job->have_posts()) :
    ?>
        <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-x-5 gap-y-6">
            <?php
            while ($filter_job->have_posts()) :
                $filter_job->the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
            ?>
        </div>
        <div class="pagination-center">
            <?php get_template_part('components/pagination', '', array(
                'get' => 'ajax',
                'query' =>  $filter_job,
                'paged' => $paged,
                'posts_to_show' => $posts_per_page
            )) ?>
        </div>

    <?php
    else :
        echo '<p>' . __('Không có chuyên gia nào phù hợp', 'bsc') . '</p>';
    endif;

    wp_reset_postdata();

    die();
}

add_action('wp_ajax_fetch_portfolio_data', 'fetch_portfolio_data');
add_action('wp_ajax_nopriv_fetch_portfolio_data', 'fetch_portfolio_data');

function fetch_portfolio_data()
{
    check_ajax_referer('common_nonce', 'security');
    $fromdate = sanitize_text_field($_POST['fromdate']);
    $fromdate = DateTime::createFromFormat('Y-m-d', $fromdate)->format('d/m/Y');
    $todate = sanitize_text_field($_POST['todate']);
    $todate = DateTime::createFromFormat('Y-m-d', $todate)->format('d/m/Y');
    $portcode = sanitize_text_field($_POST['portcode']);
    $time_cache = $_POST['time_cache'] ?: 300;
    $array_data = array(
        "fromdate" => $fromdate,
        "todate" => $todate,
        "portcode" => $portcode
    );

    $data = get_data_with_cache('GetPortfolioPerformance', $array_data, $time_cache);
    $maxValue = 0;
    $minValue = PHP_INT_MAX;

    if ($data) {
        $stocksData = [
            'BSC10' => [],
            'BSC30' => [],
            'BSC50' => [],
            'HOSE' => [],
            'VNDIAMOND' => []
        ];

        foreach ($data->d as $dataset) {
            foreach ($dataset as $stockCode => $entries) {
                foreach ($entries as $entry) {
                    $date = date("Y-m-d", strtotime($entry->tradedate));
                    $portclose = $entry->portclose;
                    $percentagedifference = $entry->percentagedifference;

                    $stocksData[$stockCode][$date] = [
                        'portclose' => $portclose,
                        'percentagedifference' => $percentagedifference
                    ];

                    if ($portclose > $maxValue) {
                        $maxValue = $portclose;
                    }
                    if ($portclose < $minValue) {
                        $minValue = $portclose;
                    }
                }
            }
        }
        $stocksDataJson = json_encode($stocksData);
        $maxValue = ceil($maxValue / 10) * 10;
        $minValue = floor($minValue / 10) * 10;
    } else {
        $stocksDataJson = json_encode([]);
        $maxValue = 0;
        $minValue = 0;
    }
    echo json_encode(array(
        'data' => $stocksDataJson,
        'maxvalue' => $maxValue,
        'minvalue' => $minValue
    ));
    wp_die();
}

add_action('wp_ajax_get_content_qhcd', 'get_content_qhcd_ajax');
add_action('wp_ajax_nopriv_get_content_qhcd', 'get_content_qhcd_ajax');

function get_content_qhcd_ajax()
{
    check_ajax_referer('common_nonce', 'security');
    $id_post = isset($_POST['id_post']) ? intval($_POST['id_post']) : '';
    $newstype = isset($_POST['newstype']) ? intval($_POST['newstype']) : '0';
    if ($id_post) {
        $time_cache = get_field('cdtt2_time_cache', 'option') ?: 300;
        $array_data = array(
            "id" => $id_post,
            "newstype" => $newstype
        );
        $get_news_detail = get_data_with_cache('GetNewsDetail', $array_data, $time_cache);
        if ($get_news_detail) {
            $news = $get_news_detail->d[0];
            echo $news->body;
        }
    }
    die();
}

/**
 * Add API MCK
 */
add_action('wp_ajax_get_shares_data', 'get_shares_data');
add_action('wp_ajax_nopriv_get_shares_data', 'get_shares_data');

function get_shares_data()
{
    check_ajax_referer('common_nonce', 'security');
    $time_cache = 300;
    $array_data = array(
        'lang' => pll_current_language(),
        'maxitem' => '2200'
    );
    $response = get_data_with_cache('GetInstrumentInfo', $array_data, $time_cache);
    if ($response) {
        $shares_data =  [];
        foreach ($response->d as $code_each) {
            $code  = $code_each->SYMBOL;
            $shares_data[] = ['name' => $code, 'link' => slug_co_phieu($code)];
        }
        wp_send_json_success($shares_data);
    }
    die();
}

/**
 * API Filter Event Calendar
 */
add_action('wp_ajax_filter_event_calendar', 'filter_event_calendar');
add_action('wp_ajax_nopriv_filter_event_calendar', 'filter_event_calendar');

function filter_event_calendar()
{
    check_ajax_referer('common_nonce', 'security');
    $time_cache = 300;
    $total_page = 0;
    $post_per_page = 12;
    $eventcode = isset($_POST['eventcode']) ? $_POST['eventcode'] : '';
    $mck = isset($_POST['mck']) ? $_POST['mck'] : '';
    $fromdate = isset($_POST['fromdate']) ? $_POST['fromdate'] : '';
    $todate = isset($_POST['todate']) ? $_POST['todate'] : '';
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : '1';
    $sortfield = isset($_POST['sortfield']) ? $_POST['sortfield'] : 'ex_date';
    if ($paged) {
        $index = ($paged - 1) * $post_per_page + 1;
    } else {
        $index = 1;
    }
    ob_start();
    $array_data_GetEvents = array(
        'lang' => pll_current_language(),
        'maxitem' => $post_per_page,
        'index' => $index,
    );
    if (isset($sortfield) && !empty($sortfield)) {
        $array_data_GetEvents['sortField'] = $sortfield;
    }
    if (isset($eventcode) && !empty($eventcode)) {
        $array_data_GetEvents['eventcode'] = $eventcode;
    }
    if (isset($fromdate) && !empty($fromdate)) {
        $array_data_GetEvents['fromdate'] = $fromdate;
    }
    if (isset($todate) && !empty($todate)) {
        $array_data_GetEvents['todate'] = $todate;
    }
    $response_GetEvents = get_data_with_cache('GetEvents', $array_data_GetEvents, $time_cache);
    if ($response_GetEvents) {
        $filtered_events = [];

        // Lọc dựa trên ký tự bất kỳ trong `mck`
        if (!empty($mck)) {
            foreach ($response_GetEvents->d as $event) {
                if (stripos($event->symbol, $mck) !== false) {
                    $filtered_events[] = $event;
                }
            }
        } else {
            $filtered_events = $response_GetEvents->d;
        }
        $total_post = count($filtered_events);
        $total_page = ceil($total_post / $post_per_page);

        // Hiển thị dữ liệu đã lọc
        foreach ($filtered_events as $GetEvents) {
            get_template_part('template-parts/content-lich-thi-truong', '', array(
                'data' => $GetEvents,
            ));
        }
    }

    $html = ob_get_contents();
    ob_end_clean();

    ob_start();

    // Hiển thị phân trang
    get_template_part('components/pagination', '', array(
        'get' => 'ajax_api',
        'total_page' => $total_page,
        'post_per_page' => 'hide',
        'paged' => $paged,
    ));

    $pagination = ob_get_contents();
    ob_end_clean();

    wp_send_json_success(array(
        'html' => $html,
        'pagination' => $pagination,
    ));

    die();
}



/**
 * Data History
 */
add_action('wp_ajax_filter_du_lieu_lich_su', 'filter_du_lieu_lich_su');
add_action('wp_ajax_nopriv_filter_du_lieu_lich_su', 'filter_du_lieu_lich_su');

function filter_du_lieu_lich_su()
{
    check_ajax_referer('common_nonce', 'security');
    $time_cache = 300;
    $symbol = isset($_POST['mck']) ? $_POST['mck'] : '';
    $fromdate = isset($_POST['fromdate']) ? $_POST['fromdate'] : '';
    $todate = isset($_POST['todate']) ? $_POST['todate'] : '';
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $items_per_page = isset($_POST['items_per_page']) ? intval($_POST['items_per_page']) : 20;
    $type_form = isset($_POST['type_form']) ? $_POST['type_form'] : '';

    if ($type_form == 'history') {
        $current_date_ymd = date('Y-m-d');
        $last_month_date_ymd = date('Y-m-d', strtotime('-6 month', strtotime($current_date_ymd)));
        $array_data_secTradingHistory = [
            'lang' => pll_current_language(),
            'secCode' => $symbol,
        ];
        $array_data_secTradingHistory['startDate'] = !empty($fromdate) ? $fromdate : $last_month_date_ymd;
        $array_data_secTradingHistory['endDate'] = !empty($todate) ? $todate : $current_date_ymd;

        $array_data_secTradingHistory = json_encode($array_data_secTradingHistory);
        $response_secTradingHistory = get_data_with_cache('secTradingHistory', $array_data_secTradingHistory, $time_cache, get_field('cdapi_ip_address_url_api_algo', 'option') . 'pbapi/api/', 'POST');
        if ($response_secTradingHistory) {
            $data = json_decode($response_secTradingHistory->data, true);

            // Phân trang dữ liệu
            $total_items = count($data);
            $total_pages = ceil($total_items / $items_per_page);
            $offset = ($page - 1) * $items_per_page;
            $paged_data = array_slice($data, $offset, $items_per_page);

            ob_start();
            foreach ($paged_data as $record) {
                get_template_part('template-parts/content-data-history', '', array('data' => $record));
            }
            $html = ob_get_clean();

            wp_send_json_success([
                'html' => $html,
                'total_pages' => $total_pages
            ]);
        }
    }

    wp_send_json_error(['message' => 'No data found']);
}


/**
 * Filter Data Details SYMBOL
 */
add_action('wp_ajax_filter_details_symbol', 'filter_details_symbol');
add_action('wp_ajax_nopriv_filter_details_symbol', 'filter_details_symbol');

function filter_details_symbol()
{
    check_ajax_referer('common_nonce', 'security');
    $time_cache = 300;
    $symbol = isset($_POST['symbol']) ? $_POST['symbol'] : '';
    $type_form = isset($_POST['type_form']) ? $_POST['type_form'] : '1';
    $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
    $check_logout = bsc_is_user_logged_out();
    $class = $check_logout['class'];
    if ($type_form == 'lichsugiaodich') {
    ?>
        <?php
        $current_date_ymd = date('Y-m-d');
        $last_month_date_ymd = date('Y-m-d', strtotime('-1 month', strtotime($current_date_ymd)));
        $array_data_secTradingHistory = json_encode([
            'lang' => pll_current_language(),
            'secCode' => $symbol,
            'startDate' => $last_month_date_ymd,
            'endDate' => $current_date_ymd
        ]);
        $response_secTradingHistory = get_data_with_cache('secTradingHistory', $array_data_secTradingHistory, $time_cache, get_field('cdapi_ip_address_url_api_algo', 'option') . 'pbapi/api/', 'POST');
        if ($response_secTradingHistory) {
            $data_response_secTradingHistory = json_decode($response_secTradingHistory->data, true);
            $data_response_secTradingHistory = array_reverse($data_response_secTradingHistory, true);
        ?>
            <div
                class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center ">
                <div class="flex bg-primary-300 text-white">
                    <div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
                        <?php _e('Ngày', 'bsc') ?>
                    </div>
                    <div class="w-[152px] max-w-[30%] px-3 py-2">
                        <?php _e('Thay đổi giá', 'bsc') ?>
                    </div>
                    <div class="w-[136px] max-w-[27%] px-3 py-2">
                        <?php _e('KL khớp lệnh', 'bsc') ?>
                    </div>
                    <div class="flex-1 px-3 py-2">
                        <?php _e('Tổng GTGD', 'bsc') ?>
                    </div>
                </div>
                <ul>
                    <?php
                    $i = 0;
                    foreach ($data_response_secTradingHistory as $record) {
                        $i++;
                        if ($i < 8) {
                    ?>
                            <li
                                class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
                                <div
                                    class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
                                    <?php
                                    if ($record['TRADE_DATE']) {
                                        $date = new DateTime($record['TRADE_DATE']);
                                        echo $date->format('d/m');
                                    }
                                    ?>
                                </div>
                                <?php if ($record['CLOSE_PRICE'] && $record['REF_PRICE']) {
                                    if (($record['CLOSE_PRICE'] - $record['REF_PRICE']) > 0) {
                                        $text_color_class_GetForeignInvestors = 'text-[#1CCD83]';
                                    } elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) < 0) {
                                        $text_color_class_GetForeignInvestors = 'text-[#FE5353]';
                                    } elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) == 0) {
                                        $text_color_class_GetForeignInvestors = 'text-[#EB0]';
                                    } else {
                                        $text_color_class_GetForeignInvestors = '';
                                    }
                                    if (($record['CLOSE_PRICE'] - $record['REF_PRICE']) > 0) {
                                        $first_GetForeignInvestors = '+';
                                        $icon_GetForeignInvestors = svg('up', '17', '17');
                                    } elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) == 0) {
                                        $first_GetForeignInvestors = '';
                                        $icon_GetForeignInvestors = '';
                                    } elseif (($record['CLOSE_PRICE'] - $record['REF_PRICE']) < 0) {
                                        $first_GetForeignInvestors = '';
                                        $icon_GetForeignInvestors = svg('downn', '17', '17');
                                    } else {
                                        $first_GetForeignInvestors = '';
                                        $icon_GetForeignInvestors = '';
                                    }
                                }
                                ?>
                                <div
                                    class="w-[152px] max-w-[30%] px-3 py-2 min-h-10 flex items-center justify-between border-r border-[#C9CCD2]">
                                    <p>
                                        <?php
                                        if ($record['CLOSE_PRICE']) {
                                            echo number_format(($record['CLOSE_PRICE'] - $record['REF_PRICE']) / 1000, 2, '.', '');
                                        }
                                        ?>
                                    </p>
                                    <p
                                        class="flex items-center gap-1 <?php echo $text_color_class_GetForeignInvestors     ?> font-Helvetica">
                                        <?php echo $icon_GetForeignInvestors ?>
                                        <?php echo number_format((($record['CLOSE_PRICE'] - $record['REF_PRICE']) / ($record['REF_PRICE'])) * 100, 2, '.', '') ?>%
                                    </p>
                                </div>
                                <div
                                    class="w-[136px] max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-center border-r border-[#C9CCD2]">
                                    <?php echo number_format($record['TOT_VOLUME']) ?>
                                </div>
                                <div
                                    class="flex-1 px-3 py-2 min-h-10 flex items-center justify-center">
                                    <?php echo number_format($record['TOT_VALUE']) ?>
                                </div>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>

            </div>
            <div class="flex items-center justify-between mt-4">
                <?php if (get_field('cdc7_page_lich_su_gia', 'option')) { ?>
                    <a href="<?php echo get_field('cdc7_page_lich_su_gia', 'option') . '?mck=' . $symbol ?>"
                        class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-xs font-Helvetica">
                        <?php _e('Xem tất cả', 'bsc') ?>
                        <?php echo svg('arrow-btn', '16', '16') ?>
                    </a>
                <?php } ?>
                <p class="font-medium text-xs font-Helvetica">
                    <?php _e('Đơn vị GTGD: triệu VNĐ', 'bsc') ?>
                </p>
            </div>
        <?php  } ?>
    <?php
    } elseif ($type_form == 'ndtnn') {
    ?>
        <?php
        $current_date_dmy = date('d/m/Y');
        $last_month_date_dmy = date('d/m/Y', strtotime('-1 month'));
        $array_data_GetForeignInvestors = array(
            'lang' => pll_current_language(),
            'symbol' => $symbol,
            'fromdate' => $last_month_date_dmy,
            'todate' => $current_date_dmy
        );
        $response_GetForeignInvestors = get_data_with_cache('GetForeignInvestors', $array_data_GetForeignInvestors, $time_cache);
        if ($response_GetForeignInvestors) {
        ?>
            <div
                class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center ">
                <div class="flex bg-primary-300 text-white">
                    <div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
                        <?php _e('Ngày', 'bsc') ?>
                    </div>
                    <div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
                        <?php _e('KL Mua', 'bsc') ?>
                    </div>
                    <div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
                        <?php _e('GT Mua', 'bsc') ?>
                    </div>
                    <div class="w-[136px] max-w-[27%] px-3 py-2">
                        <?php _e('KL bán', 'bsc') ?>
                    </div>
                    <div class="flex-1 px-3 py-2">
                        <?php _e('GT bán', 'bsc') ?>
                    </div>
                </div>
                <ul>
                    <?php
                    $i_GetForeignInvestors = 0;
                    foreach ($response_GetForeignInvestors->d as $GetForeignInvestors) {
                        $i_GetForeignInvestors++;
                        if ($i_GetForeignInvestors < 8) {
                    ?>
                            <li
                                class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
                                <div
                                    class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
                                    <?php
                                    if ($GetForeignInvestors->tradedate) {
                                        $date = new DateTime($GetForeignInvestors->tradedate);
                                        echo $date->format('d/m');
                                    }
                                    ?>
                                </div>
                                <div
                                    class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
                                    <?php
                                    if ($GetForeignInvestors->f_BUY_VOLUME) {
                                        echo number_format(($GetForeignInvestors->f_BUY_VOLUME));
                                    }
                                    ?>
                                </div>
                                <div
                                    class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
                                    <?php
                                    if ($GetForeignInvestors->f_BUY_VALUE) {
                                        echo number_format($GetForeignInvestors->f_BUY_VALUE, 2, '.', ',');
                                    }
                                    ?>
                                </div>
                                <div
                                    class="w-[136px] max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-center border-r border-[#C9CCD2]">
                                    <?php
                                    if ($GetForeignInvestors->f_SELL_VOLUME) {
                                        echo number_format(($GetForeignInvestors->f_SELL_VOLUME));
                                    }
                                    ?>
                                </div>
                                <div
                                    class="flex-1 px-3 py-2 min-h-10 flex items-center justify-center">
                                    <?php
                                    if ($GetForeignInvestors->f_SELL_VALUE) {
                                        echo number_format($GetForeignInvestors->f_SELL_VALUE, 2, '.', ',');
                                    }
                                    ?>
                                </div>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>

            </div>
            <div class="flex items-center justify-between mt-4">
                <?php if (get_field('cdc7_page_nha_dau_tu_nuoc_ngoai', 'option')) { ?>
                    <a href="<?php echo get_field('cdc7_page_nha_dau_tu_nuoc_ngoai', 'option') . '?mck=' . $symbol ?>"
                        class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
                        <?php echo svg('arrow-btn', '20', '20') ?>
                        <?php _e('Xem tất cả', 'bsc') ?>
                    </a>
                <?php } ?>
                <p class="font-medium text-xs font-Helvetica">
                    <?php _e('Đơn vị GTGD: triệu VNĐ', 'bsc') ?>
                </p>
            </div>
        <?php } ?>
    <?php
    } elseif ($type_form == 'sg_bcpt') {
    ?>
        <?php
        $categoryid_kn = get_field('cddmkn1_id_danh_mục', 'option');
        if ($categoryid_kn) {
            $array_data = array(
                'lang' => pll_current_language(),
                'categoryid' => $categoryid_kn,
                'maxitem' => 3,
                'symbol' =>  $symbol
            );
            $response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
        ?>
            <?php
            if ($response) {
            ?>
                <?php
                foreach ($response->d as $news) {
                    get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
                        'data' => $news,
                        'get_array_id_taxonomy' => $get_array_id_taxonomy,
                    ));
                }
                ?>
        <?php };
        }
        ?>
    <?php
    } elseif ($type_form == 'sg_cccd') {
    ?>
        <?php $array_data_GetShareholderRelations = array(
            'lang' => pll_current_language(),
            'symbol' =>  $symbol
        );
        $response_GetShareholderRelations = get_data_with_cache('GetShareholderRelations', $array_data_GetShareholderRelations, $time_cache);
        if ($response_GetShareholderRelations) { ?>
            <div class="rounded-xl bg-gradient-blue-50 px-6 py-8">
                <h4 class="text-center mb-4 text-xl font-bold font-Helvetica">
                    <?php _e('Tỷ lệ cơ cấu cổ đông', 'bsc') ?>
                </h4>
                <div class="relative text-center">
                    <?php if ($response_GetShareholderRelations->d[0]->outsshares) { ?>
                        <div
                            class="absolute w-full h-full flex flex-col justify-center font-Helvetica text-xs">
                            <p class="text-xxs">
                                <?php _e('Số lượng cổ phiếu', 'bsc') ?>
                            </p>
                            <p class="font-bold"><?php echo number_format($response_GetShareholderRelations->d[0]->outsshares) ?></p>
                        </div>
                    <?php } ?>
                    <svg id="progress-ring" class="mx-auto" width="166"
                        height="166" viewBox="0 0 166 167" fill="none"
                        xmlns="http://www.w3.org/2000/svg">

                        <circle cx="83.0342" cy="83.6479" r="72.3521"
                            stroke="#295CA9" stroke-width="21"
                            stroke-linecap="round" stroke-linejoin="round" />

                        <circle id="progress-circle" cx="83.0342" cy="83.6479"
                            r="72.3521" stroke="#F2B122" stroke-width="21"
                            stroke-linecap="round" stroke-linejoin="round"
                            stroke-dasharray="454" stroke-dashoffset="0"
                            transform="rotate(90 83.0342 83.6479)" />
                    </svg>

                </div>
                <div class="mt-5 mx-auto max-w-[215px] space-y-2">
                    <?php if ($response_GetShareholderRelations->d[0]->bigholderpct) { ?>
                        <div
                            class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-primary-300">
                            <p>
                                <?php _e('Cổ đông lớn', 'bsc') ?>
                            </p>
                            <p>
                                <?php echo $response_GetShareholderRelations->d[0]->bigholderpct ?>%
                            </p>
                        </div>
                    <?php } ?>
                    <?php if ($response_GetShareholderRelations->d[0]->remainingsharespct) { ?>
                        <div
                            class="rounded-[43px] flex justify-between items-center font-bold px-[17px] py-[5px] text-white bg-yellow-100">
                            <p>
                                <?php _e('Cổ đông khác', 'bsc') ?>
                            </p>
                            <p>
                                <?php echo $response_GetShareholderRelations->d[0]->remainingsharespct ?>%
                            </p>
                        </div>
                    <?php } ?>
                </div>
                <script>
                    function setProgress(percent) {
                        const circle = document.getElementById('progress-circle');
                        const circumference = 454;
                        const offset = circumference - (percent / 100) * circumference;
                        circle.style.strokeDashoffset = offset;
                    }
                    setProgress(<?php echo $response_GetShareholderRelations->d[0]->remainingsharespct ?>);
                </script>
            </div>
            <div
                class="rounded-xl p-6 bg-gradient-blue-50 lg:min-h-[234px] lg:flex lg:flex-col lg:justify-center w-full">
                <ul class="font-Helvetica space-y-4">

                    <?php if ($response_GetShareholderRelations->d[0]->outsshares) { ?>
                        <li class="flex items-center justify-between">
                            <p>
                                <?php _e('KLCP Lưu hành', 'bsc') ?>:
                            </p>
                            <strong class="text-primary-300">
                                <?php echo number_format($response_GetShareholderRelations->d[0]->outsshares) ?>
                            </strong>
                        </li>
                    <?php } ?>
                    <?php if ($response_GetShareholderRelations->d[0]->govheldpct) { ?>
                        <li class="flex items-center justify-between">
                            <p>
                                <?php _e('Tỷ lệ sở hữu nhà nước (%)', 'bsc') ?>
                            </p>
                            <strong>
                                <?php echo $response_GetShareholderRelations->d[0]->govheldpct ?>%
                            </strong>
                        </li>
                    <?php } ?>
                    <?php if ($response_GetShareholderRelations->d[0]->fheldpct) { ?>
                        <li class="flex items-center justify-between">
                            <p>
                                <?php _e('Tỷ lệ sở hữu nước ngoài (%)', 'bsc') ?>
                            </p>
                            <strong>
                                <?php echo $response_GetShareholderRelations->d[0]->fheldpct ?>%
                            </strong>
                        </li>
                    <?php } ?>
                    <?php if ($response_GetShareholderRelations->d[0]->froom) { ?>
                        <li class="flex items-center justify-between">
                            <p>
                                <?php _e('Room nước ngoài', 'bsc') ?>
                            </p>
                            <strong>
                                <?php echo $response_GetShareholderRelations->d[0]->froom ?>%
                            </strong>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    <?php
    } elseif ($type_form == 'sg_dncn') {
    ?>
        <table
            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:px-3 prose-th:py-4 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3 prose-thead:sticky prose-thead:top-0">
            <thead>
                <tr>
                    <th class="!pl-5 cursor-pointer filter-table"><?php _e('Mã CK', 'bsc') ?>
                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                    </th>

                    <th class="filter-table cursor-pointer filter-table">
                        <?php _e('Vốn hóa', 'bsc') ?>
                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                    </th>

                    <th class="filter-table cursor-pointer filter-table">
                        <?php _e('PE', 'bsc') ?>
                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                    </th>
                    <th class="filter-table cursor-pointer filter-table !pl-5">
                        <?php _e('PB', 'bsc') ?>
                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                    </th>
                </tr>
            </thead>
            <tbody class="prose-tr:border-b prose-tr:border-[#C9CCD2]">
                <?php
                $array_data_sameIndustry = array(
                    'lang' => pll_current_language(),
                    'symbol' => $symbol,
                );
                $response_sameIndustry = get_data_with_cache('GetInstrumentSameIndustry', $array_data_sameIndustry, $time_cache);
                if ($response_sameIndustry) {
                ?>
                    <?php
                    foreach ($response_sameIndustry->d as $record) {
                    ?>
                        <tr>
                            <td class="!pl-5"><a href="<?php echo slug_co_phieu($record->SYMBOL) ?>"><?php echo $record->SYMBOL ?></a></td>
                            <td><?php
                                echo number_format($record->MC) ?></td>
                            <td><?php echo number_format($record->PE, 2, '.', ',') ?></td>
                            <td class="text-center"><?php echo number_format($record->PB, 2, '.', ',') ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                <?php } ?>
            </tbody>
        </table>
    <?php
    } elseif ($type_form == 'sg_ttvmcp') {
    ?>
        <?php $array_data_GetNews = array(
            'lang' => pll_current_language(),
            'maxitem' => 6,
            'symbol' => $symbol,
            'newstype' => 1
        );
        $response_GetNews = get_data_with_cache('GetNews', $array_data_GetNews, $time_cache);
        if ($response_GetNews) { ?>
            <?php
            foreach ($response_GetNews->d as $news) {
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
                <div class="news_service-item document_item-popup" data-newstype="1" data-modal-target="document-modal" data-modal-toggle="document-modal" data-doccument="<?php echo $news->attachedfileurl ?>" data-id="<?php echo $news->newsid ?>">
                    <div class="flex items-center">
                        <div
                            class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
                            <p
                                class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
                                <?php
                                echo $day_of_year;
                                ?>
                            </p>
                            <div
                                class="flex-1 flex flex-col justify-center items-center text-xl font-bold bg-primary-50 w-full">
                                <p> <?php
                                    echo $day_of_month;
                                    ?></p>
                                <p class="text-primary-300 text-xs font-medium">
                                    <?php echo $month_name; ?>
                                </p>
                            </div>
                        </div>
                        <div class="md:ml-[30px] ml-5">
                            <p
                                class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-green main_title">
                                <?php echo htmlspecialchars($news->title) ?>
                            </p>
                            <div
                                class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
                                <?php echo $news->description ?>
                            </div>
                        </div>
                    </div>

                </div>
            <?php
            }
            ?>
        <?php } ?>
        <div class="trigger-button_document " data-modal-target="document-modal" data-modal-toggle="document-modal"></div>
    <?php
    } elseif ($type_form == 'details_symbol_tab-2') {
    ?>
        <div class="list__content">
            <div class="flex items-center justify-between mt-16 mb-[30px]">
                <ul class="flex items-center gap-5">
                    <li>
                        <a href=""
                            class="active inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
                            Quý
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
                            Năm
                        </a>
                    </li>
                </ul>
                <a href=""
                    class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
                    Xem chi tiết
                    <?php echo svg('arrow-btn', '12', '12') ?>
                </a>
            </div>
            <ul class="flex items-center justify-end gap-[27px] flex-wrap lg:mr-6 mb-6">
                <?php
                for ($i = 18; $i < 24; $i++) {
                ?>
                    <li class="lg:min-w-[140px] font-bold">
                        <p>
                            Năm 20<?= $i ?>
                        </p>
                        <p class="text-[#1CCD83]">
                            (Đã kiểm toán)
                        </p>
                    </li>
                <?php
                }
                ?>
            </ul>
            <div class="space-y-16">
                <div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
                    <table class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left
								prose-td:p-4 font-medium">
                        <thead>
                            <tr>
                                <th colspan="7">Kết quả kinh doanh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < 4; $i++) {
                            ?>
                                <tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
                                    <td class="lg:min-w-[231px]">Doanh thu bán hàng và CCDV</td>
                                    <td>911,959,220</td>
                                    <td>608,349,810</td>
                                    <td>912,577,380</td>
                                    <td>1,333,024,980</td>
                                    <td>1,089,005,390</td>
                                    <td>1,258,998,059</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
                    <table class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left
								prose-td:p-4 font-medium">
                        <thead>
                            <tr>
                                <th colspan="7">Cân đối kế toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < 4; $i++) {
                            ?>
                                <tr class="[&:nth-child(even)]:bg-[#EBF4FA]">
                                    <td class="lg:min-w-[231px]">Tổng tài sản</td>
                                    <td>911,959,220</td>
                                    <td>608,349,810</td>
                                    <td>912,577,380</td>
                                    <td>1,333,024,980</td>
                                    <td>1,089,005,390</td>
                                    <td>1,258,998,059</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
    } elseif ($type_form == 'details_symbol_tab-3') {
    ?>
        <div class="list__content">
            <div class=" mt-16 mb-10">
                <ul class="flex items-center gap-5 customtab-nav">
                    <li>
                        <button data-tabs="#tab-3-Q"
                            class="active inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
                            <?php _e('Quý', 'bsc') ?>
                        </button>
                    </li>
                    <li>
                        <button data-tabs="#tab-3-Y"
                            class="inline-block rounded-[10px] [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 lg:px-[60px] px-5 text-center lg:min-w-[207px] font-bold py-3 transition-all duration-500 hover:!bg-primary-300 hover:!text-white lg:text-lg">
                            <?php _e('Năm', 'bsc') ?>
                        </button>
                    </li>
                </ul>
            </div>
            <?php
            $freq_cttc = array('Q', 'Y');
            if ($freq_cttc) {
                $i = 0;
                foreach ($freq_cttc as $freq) {
                    $i++;
            ?>
                    <div class="tab-content <?php if ($i == 1) echo 'block';
                                            else echo 'hidden' ?>" id="tab-3-<?php echo $freq ?>">
                        <?php
                        $array_data_GetFinanceDetail = array(
                            'lang' => pll_current_language(),
                            'symbol' => $symbol,
                            'freq' => $freq,
                        );
                        $response_GetFinanceDetail = get_data_with_cache('GetFinanceDetail', $array_data_GetFinanceDetail, $time_cache);
                        if ($response_GetFinanceDetail) {
                            $industryData = $response_GetFinanceDetail->d->Industry[0];
                            $businessData = $response_GetFinanceDetail->d->Bussiness[0];
                            $check_linh_vuc = $response_GetFinanceDetail->d->Rank[0][0]->INDUSTRY_NAME;
                        ?>
                            <div class="space-y-[100px]">
                                <article>
                                    <div class="flex items-center gap-6 mb-[30px]">
                                        <h2 class="heading-title">
                                            <?php _e('LỢI NHUẬN', 'bsc') ?>
                                        </h2>
                                        <?php ?>
                                        <?php
                                        if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN) {
                                            if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'A') {
                                                $class_rank = 'text-[#F90] bg-gradient-yellow-50';
                                                $medal_rank = 'gold';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'B') {
                                                $class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
                                                $medal_rank = 'sliver';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'C') {
                                                $class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
                                                $medal_rank = 'bronze';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN == 'D') {
                                                $medal_rank = 'sliver-2';
                                                $class_rank = 'text-[#869299] bg-gradient-sliver-100';
                                            }
                                        ?>
                                            <p
                                                class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
                                                <?php echo svg($medal_rank, '24', '24') ?>
                                                <?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_LOI_NHUAN ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <div class="rounded-lg overflow-hidden mb-10">
                                        <table
                                            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
                                            <thead>
                                                <tr>
                                                    <th class="!pl-9"><?php _e('Mã CK', 'bsc') ?></th>
                                                    <th><?php
                                                        if ($check_linh_vuc == 'Bank') {
                                                            _e('NIM', 'bsc');
                                                        } else {
                                                            _e('Biên LNG', 'bsc');
                                                        }
                                                        ?></th>
                                                    <th><?php _e('Biên LNTT', 'bsc') ?></th>
                                                    <th><?php _e('Biên LNST', 'bsc') ?></th>
                                                    <th><?php _e('ROE', 'bsc') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                                    <td class="!pl-9"><a href="<?php echo slug_co_phieu($response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a></td>
                                                    <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_GOP), 2, '.', ''); ?>%</td>
                                                    <td><?php
                                                        if ($check_linh_vuc == 'Bank') {
                                                            echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->NIM), 2, '.', '') . '%';
                                                        } else {
                                                            echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_TRUOC_THUE), 2, '.', '') . '%';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->BIEN_LOI_NHUAN_SAU_THUE), 2, '.', ''); ?>%</td>
                                                    <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->ROE), 2, '.', ''); ?>%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
                                        <div class="space-y-6">
                                            <h4
                                                class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                <?php
                                                if ($check_linh_vuc == 'Bank') {
                                                    _e('NIM (%)', 'bsc');
                                                } else {
                                                    _e('BIÊN LỢI NHUẬN GỘP (%)', 'bsc');
                                                }
                                                ?>
                                            </h4>
                                            <?php
                                            if ($check_linh_vuc == 'Bank') {
                                                $business_data_BIEN_LOI_NHUAN_GOP = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->NIM,
                                                    ];
                                                }, $businessData);
                                            } else {
                                                $business_data_BIEN_LOI_NHUAN_GOP = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->BIEN_LOI_NHUAN_GOP,
                                                    ];
                                                }, $businessData);
                                            }
                                            $industry_data_BIEN_LOI_NHUAN_GOP = array_map(function ($item) {
                                                return [
                                                    'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                    'value' => $item->BIEN_LOI_NHUAN_GOP,
                                                ];
                                            }, $industryData);
                                            ?>
                                            <div class="legend-gap bsc_chart-display"
                                                data-load="false"
                                                data-end="%"
                                                <?php if ($check_linh_vuc == 'Bank') { ?>
                                                data-title-1="<?php _e('Nim', 'bsc') ?>"
                                                data-title-2="<?php _e('Nim TB ngành', 'bsc') ?>"
                                                <?php } else { ?>
                                                data-title-1="<?php _e('Biên LNG', 'bsc') ?>"
                                                data-title-2="<?php _e('Biên LNG TB ngành', 'bsc') ?>"
                                                <?php } ?>
                                                data-1="<?php echo htmlspecialchars(json_encode($business_data_BIEN_LOI_NHUAN_GOP)) ?>"
                                                data-2="<?php echo  htmlspecialchars(json_encode($industry_data_BIEN_LOI_NHUAN_GOP)) ?>"
                                                data-color-1="#235BA8"
                                                data-color-2="#FFB81C">
                                            </div>
                                        </div>
                                        <div class="space-y-6">
                                            <h4
                                                class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                <?php _e('BIÊN LỢI NHUẬN SAU THUẾ (%)', 'bsc') ?>
                                            </h4>
                                            <?php
                                            $business_data_BIEN_LOI_NHUAN_SAU_THUE = array_map(function ($item) {
                                                return [
                                                    'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                    'value' => $item->BIEN_LOI_NHUAN_SAU_THUE,
                                                ];
                                            }, $businessData);

                                            $industry_data_BIEN_LOI_NHUAN_SAU_THUE = array_map(function ($item) {
                                                return [
                                                    'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                    'value' => $item->BIEN_LOI_NHUAN_SAU_THUE,
                                                ];
                                            }, $industryData);
                                            ?>
                                            <div class="legend-gap bsc_chart-display"
                                                data-load="false"
                                                data-end="%"
                                                data-1="<?php echo htmlspecialchars(json_encode($business_data_BIEN_LOI_NHUAN_SAU_THUE)) ?>"
                                                data-2="<?php echo  htmlspecialchars(json_encode($industry_data_BIEN_LOI_NHUAN_SAU_THUE)) ?>"
                                                data-title-1="<?php _e('Biên LNST', 'bsc') ?>"
                                                data-color-1="#235BA8"
                                                data-title-2="<?php _e('Biên BLST TB ngành', 'bsc') ?>"
                                                data-color-2="#FFB81C">
                                            </div>
                                        </div>
                                        <div class="space-y-6">
                                            <h4
                                                class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                <?php _e('ROE (%)', 'bsc') ?>
                                            </h4>
                                            <?php
                                            $business_data_ROE = array_map(function ($item) {
                                                return [
                                                    'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                    'value' => $item->ROE,
                                                ];
                                            }, $businessData);

                                            $industry_data_ROE = array_map(function ($item) {
                                                return [
                                                    'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                    'value' => $item->ROE,
                                                ];
                                            }, $industryData);
                                            ?>
                                            <div class="legend-gap bsc_chart-display"
                                                data-load="false"
                                                data-end="%"
                                                data-1="<?php echo htmlspecialchars(json_encode($business_data_ROE)) ?>"
                                                data-2="<?php echo  htmlspecialchars(json_encode($industry_data_ROE)) ?>"
                                                data-title-1="<?php _e('ROE', 'bsc') ?>"
                                                data-color-1="#009e87"
                                                data-title-2="<?php _e('ROE TB ngành', 'bsc') ?>"
                                                data-color-2="#FFB81C">
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="flex items-center gap-6 mb-[30px]">
                                        <h2 class="heading-title">
                                            <?php _e('SỨC KHỎE', 'bsc') ?>
                                        </h2>
                                        <?php
                                        if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE) {
                                            if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'A') {
                                                $class_rank = 'text-[#F90] bg-gradient-yellow-50';
                                                $medal_rank = 'gold';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'B') {
                                                $class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
                                                $medal_rank = 'sliver';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'C') {
                                                $class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
                                                $medal_rank = 'bronze';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE == 'D') {
                                                $medal_rank = 'sliver-2';
                                                $class_rank = 'text-[#869299] bg-gradient-sliver-100';
                                            }
                                        ?>
                                            <p
                                                class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
                                                <?php echo svg($medal_rank, '24', '24') ?>
                                                <?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_SUC_KHOE ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <div class="rounded-lg overflow-hidden mb-10">
                                        <table
                                            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
                                            <thead>
                                                <tr>
                                                    <th class="!pl-9"><?php _e('Mã CK', 'bsc') ?></th>
                                                    <?php if ($check_linh_vuc == 'Bank') { ?>
                                                        <th><?php _e('Tỉ lệ đòn bẩy', 'bsc') ?></th>
                                                        <th><?php _e('NPL', 'bsc') ?></th>
                                                        <th><?php _e('LLR', 'bsc') ?></th>
                                                    <?php } else {
                                                    ?>
                                                        <th><?php _e('CSTT hiện tại', 'bsc') ?></th>
                                                        <th><?php _e('CSTT nhanh', 'bsc') ?></th>
                                                        <th><?php _e('CSTT lãi vay', 'bsc') ?></th>
                                                        <?php if ($check_linh_vuc == 'Company') { ?>
                                                            <th><?php _e('Nợ vay TTS', 'bsc') ?></th>
                                                        <?php } else { ?>
                                                            <th><?php _e('Tỉ lệ đòn bẩy', 'bsc') ?></th>
                                                        <?php } ?>
                                                    <?php
                                                    } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                                    <td class="!pl-9"><a href="<?php echo slug_co_phieu($response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a></td>
                                                    <?php if ($check_linh_vuc == 'Bank') { ?>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DON_BAY), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_NO_XAU), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DU_PHONG_NO_XAU), 2, '.', ''); ?></td>
                                                    <?php } else {
                                                    ?>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->CHI_SO_THANH_TOAN_HIEN_THOI), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->CHI_SO_THANH_TOAN_NHANH), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_THANH_TOAN_LAI_VAY), 2, '.', ''); ?></td>
                                                        <?php if ($check_linh_vuc == 'Company') { ?>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->NO_VAY_TONG_TAI_SAN), 2, '.', ''); ?></td>
                                                        <?php } else { ?>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DON_BAY), 2, '.', ''); ?></td>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
                                        <?php if ($check_linh_vuc == 'Bank') { ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ NỢ XẤU', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_NO_XAU = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_NO_XAU,
                                                    ];
                                                }, $businessData);
                                                $industry_data_TY_LE_NO_XAU = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->TY_LE_NO_XAU,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_NO_XAU)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TY_LE_NO_XAU)) ?>"
                                                    data-title-1="<?php _e('Tỷ lệ nợ  xấu', 'bsc') ?>"
                                                    data-title-2="<?php _e('Tỷ lệ nợ  xấu TB ngành', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ ĐÒN BẨY', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_DON_BAY = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_DON_BAY,
                                                    ];
                                                }, $businessData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-type="bar"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_DON_BAY)) ?>"
                                                    data-title-1="<?php _e('TN từ Lãi vay', 'bsc') ?>"
                                                    data-color-1="#009e87">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ DỰ PHÒNG NỢ XẤU', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_DU_PHONG_NO_XAU = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_DU_PHONG_NO_XAU,
                                                    ];
                                                }, $businessData);
                                                $industry_data_TY_LE_DU_PHONG_NO_XAU = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->TY_LE_DU_PHONG_NO_XAU,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_DU_PHONG_NO_XAU)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TY_LE_DU_PHONG_NO_XAU)) ?>"
                                                    data-title-1="<?php _e('TLDP nợ xấu', 'bsc') ?>"
                                                    data-title-2="<?php _e('TLDP nợ xấu TB ngành', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php } elseif ($check_linh_vuc == 'Securities') {  ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('CHỈ SỐ THANH TOÁN NHANH/HIỆN THỜI', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_CHI_SO_THANH_TOAN_NHANH = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->CHI_SO_THANH_TOAN_NHANH,
                                                    ];
                                                }, $businessData);
                                                $industry_data_CHI_SO_THANH_TOAN_HIEN_THOI = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_CHI_SO_THANH_TOAN_NHANH)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_CHI_SO_THANH_TOAN_HIEN_THOI)) ?>"
                                                    data-title-1="<?php _e('CSTT nhanh', 'bsc') ?>"
                                                    data-title-2="<?php _e('CSTT hiện thời', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ ĐÒN BẨY', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_DON_BAY = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_DON_BAY,
                                                    ];
                                                }, $businessData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-type="bar"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_DON_BAY)) ?>"
                                                    data-title-1="<?php _e('TN từ Lãi vay', 'bsc') ?>"
                                                    data-color-1="#235BA8">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ THANH TOÁN LÃI VAY') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_THANH_TOAN_LAI_VAY = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
                                                    ];
                                                }, $businessData);
                                                $industry_data_TY_LE_THANH_TOAN_LAI_VAY = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_THANH_TOAN_LAI_VAY)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TY_LE_THANH_TOAN_LAI_VAY)) ?>"
                                                    data-title-1="<?php _e('TLTT Lãi vay', 'bsc') ?>"
                                                    data-title-2="<?php _e('TLTT Lãi vay TB ngành', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php } elseif ($check_linh_vuc == 'Insurance') {  ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('CHỈ SỐ THANH TOÁN NHANH/HIỆN THỜI', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_CHI_SO_THANH_TOAN_NHANH = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->CHI_SO_THANH_TOAN_NHANH,
                                                    ];
                                                }, $businessData);
                                                $industry_data_CHI_SO_THANH_TOAN_HIEN_THOI = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_CHI_SO_THANH_TOAN_NHANH)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_CHI_SO_THANH_TOAN_HIEN_THOI)) ?>"
                                                    data-title-1="<?php _e('CSTT nhanh', 'bsc') ?>"
                                                    data-title-2="<?php _e('CSTT hiện thời', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ ĐÒN BẨY', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_DON_BAY = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_DON_BAY,
                                                    ];
                                                }, $businessData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-type="bar"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_DON_BAY)) ?>"
                                                    data-title-1="<?php _e('TN từ Lãi vay', 'bsc') ?>"
                                                    data-color-1="#235BA8">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('BIÊN LỢI NHUẬN GỘP BẢO HIỂM') ?>
                                                </h4>
                                                <?php
                                                $business_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->BIEN_LOI_NHUAN_GOP_BAO_HIEM,
                                                    ];
                                                }, $businessData);
                                                $industry_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->BIEN_LOI_NHUAN_GOP_BAO_HIEM,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_BIEN_LOI_NHUAN_GOP_BAO_HIEM)) ?>"
                                                    data-title-1="<?php _e('BLN gộp bảo hiểm', 'bsc') ?>"
                                                    data-title-2="<?php _e('BLN gộp bảo hiểm TB ngành', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php } else {
                                        ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('CHỈ SỐ THANH TOÁN NHANH/HIỆN THỜI', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_CHI_SO_THANH_TOAN_NHANH = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->CHI_SO_THANH_TOAN_NHANH,
                                                    ];
                                                }, $businessData);
                                                $industry_data_CHI_SO_THANH_TOAN_HIEN_THOI = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->CHI_SO_THANH_TOAN_HIEN_THOI,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_CHI_SO_THANH_TOAN_NHANH)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_CHI_SO_THANH_TOAN_HIEN_THOI)) ?>"
                                                    data-title-1="<?php _e('CSTT nhanh', 'bsc') ?>"
                                                    data-title-2="<?php _e('CSTT hiện thời', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('NỢ VAY/Tổng tài sản', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_NO_VAY_TONG_TAI_SAN = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->NO_VAY_TONG_TAI_SAN,
                                                    ];
                                                }, $businessData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-type="bar"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_NO_VAY_TONG_TAI_SAN)) ?>"
                                                    data-title-1="<?php _e('Nợ vay/Tổng  tài sản', 'bsc') ?>"
                                                    data-color-1="#235BA8">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ THANH TOÁN LÃI VAY') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_THANH_TOAN_LAI_VAY = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
                                                    ];
                                                }, $businessData);
                                                $industry_data_TY_LE_THANH_TOAN_LAI_VAY = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->TY_LE_THANH_TOAN_LAI_VAY,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_THANH_TOAN_LAI_VAY)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TY_LE_THANH_TOAN_LAI_VAY)) ?>"
                                                    data-title-1="<?php _e('TLTT Lãi vay', 'bsc') ?>"
                                                    data-title-2="<?php _e('TLTT Lãi vay TB ngành', 'bsc') ?>"
                                                    data-color-1="#235BA8"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php
                                        } ?>
                                    </div>
                                </article>
                                <article>
                                    <div class="flex items-center gap-6 mb-[30px]">
                                        <h2 class="heading-title">
                                            <?php _e('TĂNG TRƯỞNG', 'bsc') ?>
                                        </h2>
                                        <?php
                                        if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG) {
                                            if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'A') {
                                                $class_rank = 'text-[#F90] bg-gradient-yellow-50';
                                                $medal_rank = 'gold';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'B') {
                                                $class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
                                                $medal_rank = 'sliver';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'C') {
                                                $class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
                                                $medal_rank = 'bronze';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG == 'D') {
                                                $medal_rank = 'sliver-2';
                                                $class_rank = 'text-[#869299] bg-gradient-sliver-100';
                                            }
                                        ?>
                                            <p
                                                class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
                                                <?php echo svg($medal_rank, '24', '24') ?>
                                                <?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_TANG_TRUONG ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <div class="rounded-lg overflow-hidden mb-10">
                                        <table
                                            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
                                            <thead>
                                                <tr>
                                                    <th class="!pl-9"><?php _e('Mã CK', 'bsc') ?></th>
                                                    <?php if ($check_linh_vuc == 'Bank') { ?>
                                                        <th><?php _e('TT cho vay', 'bsc') ?></th>
                                                        <th><?php _e('TT tiền gửi', 'bsc') ?></th>
                                                    <?php } else { ?>
                                                        <th><?php _e('TT Doanh thu', 'bsc') ?></th>
                                                        <th><?php _e('TT TNHĐ', 'bsc') ?></th>
                                                    <?php } ?>
                                                    <th><?php _e('TT LNST', 'bsc') ?></th>
                                                    <th><?php _e('TT EPS', 'bsc') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                                    <td class="!pl-9"><a href="<?php echo slug_co_phieu($response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a></td>
                                                    <?php if ($check_linh_vuc == 'Bank') { ?>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_CHO_VAY), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_TIEN_GUI), 2, '.', ''); ?></td>
                                                    <?php } else {
                                                    ?>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_DOANH_THU), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TT_TNHĐ), 2, '.', ''); ?></td>
                                                    <?php
                                                    } ?>
                                                    <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_LOI_NHUAN), 2, '.', ''); ?></td>
                                                    <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TANG_TRUONG_EPS), 2, '.', ''); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
                                        <div class="space-y-6">
                                            <h4
                                                class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                <?php if ($check_linh_vuc == 'Bank') {
                                                    $business_data_TANG_TRUONG_CHO_VAY = array_map(function ($item) {
                                                        return [
                                                            'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                            'value' => $item->TANG_TRUONG_CHO_VAY,
                                                        ];
                                                    }, $businessData);
                                                    $industry_data_TANG_TRUONG_CHO_VAY = array_map(function ($item) {
                                                        return [
                                                            'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                            'value' => $item->TANG_TRUONG_CHO_VAY,
                                                        ];
                                                    }, $industryData);
                                                ?>
                                                    <?php _e('TĂNG TRƯỞNG CHO VAY (%)', 'bsc') ?>

                                                <?php } else {
                                                    $business_data_TANG_TRUONG_CHO_VAY = array_map(function ($item) {
                                                        return [
                                                            'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                            'value' => $item->TANG_TRUONG_DOANH_THU,
                                                        ];
                                                    }, $businessData);
                                                    $industry_data_TANG_TRUONG_CHO_VAY = array_map(function ($item) {
                                                        return [
                                                            'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                            'value' => $item->TANG_TRUONG_DOANH_THU,
                                                        ];
                                                    }, $industryData);
                                                ?>
                                                    <?php _e('TĂNG TRƯỞNG DOANH THU (%)', 'bsc') ?>
                                                <?php } ?>
                                            </h4>
                                            <div class="legend-gap bsc_chart-display"
                                                data-load="false"
                                                data-end="%"
                                                data-1="<?php echo htmlspecialchars(json_encode($business_data_TANG_TRUONG_CHO_VAY)) ?>"
                                                data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TANG_TRUONG_CHO_VAY)) ?>"
                                                <?php if ($check_linh_vuc == 'Bank') { ?>
                                                data-title-1="<?php _e('TTCV', 'bsc') ?>"
                                                data-title-2="<?php _e('TTCV TB ngành', 'bsc') ?>"
                                                <?php } else { ?>
                                                data-title-1="<?php _e('TTDTT', 'bsc') ?>"
                                                data-title-2="<?php _e('TTDTT TB ngành', 'bsc') ?>"
                                                <?php } ?>
                                                data-color-1="#009e87"
                                                data-color-2="#FFB81C">
                                            </div>
                                        </div>
                                        <div class="space-y-6">
                                            <h4
                                                class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                <?php _e('TĂNG TRƯỞNG EPS (%)', 'bsc') ?>
                                            </h4>
                                            <?php
                                            $business_data_TANG_TRUONG_EPS = array_map(function ($item) {
                                                return [
                                                    'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                    'value' => $item->TANG_TRUONG_EPS,
                                                ];
                                            }, $businessData);
                                            $industry_data_TANG_TRUONG_EPS = array_map(function ($item) {
                                                return [
                                                    'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                    'value' => $item->TANG_TRUONG_EPS,
                                                ];
                                            }, $industryData);
                                            ?>
                                            <div class="legend-gap bsc_chart-display"
                                                data-load="false"
                                                data-end="%"
                                                data-1="<?php echo htmlspecialchars(json_encode($business_data_TANG_TRUONG_EPS)) ?>"
                                                data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TANG_TRUONG_EPS)) ?>"
                                                data-title-1="<?php _e('TT EPS', 'bsc') ?>"
                                                data-title-2="<?php _e('TT EPS TB ngành', 'bsc') ?>"
                                                data-color-1="#009e87"
                                                data-color-2="#FFB81C">
                                            </div>
                                        </div>
                                        <div class="space-y-6">
                                            <h4
                                                class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                <?php _e('TĂNG TRƯỞNG LỢI NHUẬN (%)', 'bsc') ?>
                                            </h4>
                                            <?php
                                            $business_data_TANG_TRUONG_LOI_NHUAN = array_map(function ($item) {
                                                return [
                                                    'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                    'value' => $item->TANG_TRUONG_LOI_NHUAN,
                                                ];
                                            }, $businessData);
                                            $industry_data_TANG_TRUONG_LOI_NHUAN = array_map(function ($item) {
                                                return [
                                                    'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                    'value' => $item->TANG_TRUONG_LOI_NHUAN,
                                                ];
                                            }, $industryData);
                                            ?>
                                            <div class="legend-gap bsc_chart-display"
                                                data-load="false"
                                                data-end="%"
                                                data-1="<?php echo htmlspecialchars(json_encode($business_data_TANG_TRUONG_LOI_NHUAN)) ?>"
                                                data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TANG_TRUONG_LOI_NHUAN)) ?>"
                                                data-title-1="<?php _e('TT Lợi nhuận', 'bsc') ?>"
                                                data-title-2="<?php _e('TT Lợi nhuận TB ngành', 'bsc') ?>"
                                                data-color-1="#009e87"
                                                data-color-2="#FFB81C">
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="flex items-center gap-6 mb-[30px]">
                                        <h2 class="heading-title">
                                            <?php _e('HIỆU QUẢ HOẠT ĐỘNG', 'bsc') ?>
                                        </h2>
                                        <?php
                                        if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG) {
                                            if ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'A') {
                                                $class_rank = 'text-[#F90] bg-gradient-yellow-50';
                                                $medal_rank = 'gold';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'B') {
                                                $class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
                                                $medal_rank = 'sliver';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'C') {
                                                $class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
                                                $medal_rank = 'bronze';
                                            } elseif ($response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG == 'D') {
                                                $medal_rank = 'sliver-2';
                                                $class_rank = 'text-[#869299] bg-gradient-sliver-100';
                                            }
                                        ?>
                                            <p
                                                class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
                                                <?php echo svg($medal_rank, '24', '24') ?>
                                                <?php _e('Hạng', 'bsc') ?> <?php echo $response_GetFinanceDetail->d->Rank[0][0]->RANK_KET_QUA_HOAT_DONG ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <div class="rounded-lg overflow-hidden mb-10">
                                        <table
                                            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium prose-a:font-bold prose-a:text-primary-300">
                                            <thead>
                                                <tr>
                                                    <th class="!pl-9"><?php _e('Mã CK', 'bsc') ?></th>
                                                    <?php if ($check_linh_vuc == 'Bank') { ?>
                                                        <th><?php _e('Tỉ lệ CIR', 'bsc') ?></th>
                                                        <th><?php _e('NII/TOI', 'bsc') ?></th>
                                                        <th><?php _e('Tỉ lệ CASA', 'bsc') ?></th>
                                                    <?php } else { ?>
                                                        <?php if ($check_linh_vuc == 'Securities') { ?>
                                                            <th><?php _e('Tỉ trọng DT môi giới', 'bsc') ?></th>
                                                            <th><?php _e('VQ phải thu', 'bsc') ?></th>
                                                            <th><?php _e('VQ phải trả', 'bsc') ?></th>
                                                            <th><?php _e('VQ TTS', 'bsc') ?></th>
                                                        <?php } elseif ($check_linh_vuc == 'Insurance') { ?>
                                                            <th><?php _e('CP Bảo hiểm/DT', 'bsc') ?></th>
                                                            <th><?php _e('VQ phải thu', 'bsc') ?></th>
                                                            <th><?php _e('VQ phải trả', 'bsc') ?></th>
                                                            <th><?php _e('VQ TTS', 'bsc') ?></th>
                                                        <?php } else {
                                                        ?>
                                                            <th><?php _e('VQ phải thu', 'bsc') ?></th>
                                                            <th><?php _e('VQ phải trả', 'bsc') ?></th>
                                                            <th><?php _e('VQ HTK', 'bsc') ?></th>
                                                            <th><?php _e('VQ TTS', 'bsc') ?></th>
                                                        <?php
                                                        } ?>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                                    <td class="!pl-9"><a href="<?php echo slug_co_phieu($response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE) ?>"><?php echo $response_GetFinanceDetail->d->Rank[0][0]->SECURITY_CODE ?></a></td>
                                                    <?php if ($check_linh_vuc == 'Bank') { ?>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_CHI_PHI_TREN_DOANH_THU), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->THU_NHAP_TU_LAI_VAY), 2, '.', ''); ?></td>
                                                        <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->CASA), 2, '.', ''); ?></td>
                                                    <?php } else { ?>
                                                        <?php if ($check_linh_vuc == 'Securities') { ?>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_THU), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_TRA), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_TONG_TAI_SAN), 2, '.', ''); ?></td>
                                                        <?php } elseif ($check_linh_vuc == 'Insurance') { ?>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_THU), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_TRA), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_TONG_TAI_SAN), 2, '.', ''); ?></td>
                                                        <?php } else {
                                                        ?>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_THU), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_KHOAN_PHAI_TRA), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_HANG_TON_KHO), 2, '.', ''); ?></td>
                                                            <td><?php echo number_format(($response_GetFinanceDetail->d->Bussiness[0][0]->VONG_QUAY_TONG_TAI_SAN), 2, '.', ''); ?></td>
                                                        <?php
                                                        } ?>
                                                    <?php } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="grid lg:grid-cols-3 gap-5 font-Helvetica">
                                        <?php if ($check_linh_vuc == 'Bank') { ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ CHI PHÍ TRÊN DOANH THU', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_CHI_PHI_TREN_DOANH_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_CHI_PHI_TREN_DOANH_THU,
                                                    ];
                                                }, $businessData);
                                                $industry_data_TY_LE_CHI_PHI_TREN_DOANH_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->TY_LE_CHI_PHI_TREN_DOANH_THU,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_CHI_PHI_TREN_DOANH_THU)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TY_LE_CHI_PHI_TREN_DOANH_THU)) ?>"
                                                    data-title-1="<?php _e('Tỷ lệ chi phí', 'bsc') ?>"
                                                    data-title-2="<?php _e('Tỷ lệ chi phí TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('THU NHẬP TỪ LÃI VAY/TỔNG THU NHẬP HOẠT ĐỘNG', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_THU_NHAP_TU_LAI_VAY = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->THU_NHAP_TU_LAI_VAY,
                                                    ];
                                                }, $businessData);
                                                $industry_data_THU_NHAP_TU_LAI_VAY = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->THU_NHAP_TU_LAI_VAY,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_THU_NHAP_TU_LAI_VAY)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_THU_NHAP_TU_LAI_VAY)) ?>"
                                                    data-title-1="<?php _e('TN từ Lãi vay', 'bsc') ?>"
                                                    data-title-2="<?php _e('TN từ Lãi vay TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('CASA', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_CASA = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->CASA,
                                                    ];
                                                }, $businessData);
                                                $industry_data_CASA = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->CASA,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_CASA)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_CASA)) ?>"
                                                    data-title-1="<?php _e('CASA', 'bsc') ?>"
                                                    data-title-2="<?php _e('CASA TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php } elseif ($check_linh_vuc == 'Securities') {  ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỶ LỆ DOANH THU MÔI GIỚI TRÊN DOANH THU THUẦN', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET,
                                                    ];
                                                }, $businessData);
                                                $industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET)) ?>"
                                                    data-title-1="<?php _e('TLDTMGTD', 'bsc') ?>"
                                                    data-title-2="<?php _e('TLDTMGTD TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('VÒNG QUAY KHOẢN PHẢI THU', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_VONG_QUAY_KHOAN_PHAI_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
                                                    ];
                                                }, $businessData);
                                                $industry_data_VONG_QUAY_KHOAN_PHAI_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_VONG_QUAY_KHOAN_PHAI_THU)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_VONG_QUAY_KHOAN_PHAI_THU)) ?>"
                                                    data-title-1="<?php _e('Vòng quay khoản phải thu', 'bsc') ?>"
                                                    data-title-2="<?php _e('Vòng quay khoản phải thu TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('VÒNG QUAY TỔNG TÀI SẢN (LẦN)') ?>
                                                </h4>
                                                <?php
                                                $business_data_VONG_QUAY_TONG_TAI_SAN = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->VONG_QUAY_TONG_TAI_SAN,
                                                    ];
                                                }, $businessData);
                                                $industry_data_VONG_QUAY_TONG_TAI_SAN = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->VONG_QUAY_TONG_TAI_SAN,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_VONG_QUAY_TONG_TAI_SAN)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_VONG_QUAY_TONG_TAI_SAN)) ?>"
                                                    data-title-1="<?php _e('Vòng quay tổng tài sản', 'bsc') ?>"
                                                    data-title-2="<?php _e('Vòng quay tổng tài sản TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php } elseif ($check_linh_vuc == 'Insurance') {  ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('TỈ LỆ CHI PHÍ BẢO HIỂM TRÊN DOANH THU 4 QUÝ', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET,
                                                    ];
                                                }, $businessData);
                                                $industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->TY_LE_DOANH_THU_MOI_GIOI_TREN_NET,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_TY_LE_DOANH_THU_MOI_GIOI_TREN_NET)) ?>"
                                                    data-title-1="<?php _e('TLCP BH trên DT', 'bsc') ?>"
                                                    data-title-2="<?php _e('TLCP BH trên DT TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('VÒNG QUAY KHOẢN PHẢI THU', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_VONG_QUAY_KHOAN_PHAI_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
                                                    ];
                                                }, $businessData);
                                                $industry_data_VONG_QUAY_KHOAN_PHAI_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_VONG_QUAY_KHOAN_PHAI_THU)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_VONG_QUAY_KHOAN_PHAI_THU)) ?>"
                                                    data-title-1="<?php _e('Vòng quay khoản phải thu', 'bsc') ?>"
                                                    data-title-2="<?php _e('Vòng quay khoản phải thu TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('VÒNG QUAY TỔNG TÀI SẢN (LẦN)') ?>
                                                </h4>
                                                <?php
                                                $business_data_VONG_QUAY_TONG_TAI_SAN = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->VONG_QUAY_TONG_TAI_SAN,
                                                    ];
                                                }, $businessData);
                                                $industry_data_VONG_QUAY_TONG_TAI_SAN = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->VONG_QUAY_TONG_TAI_SAN,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_VONG_QUAY_TONG_TAI_SAN)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_VONG_QUAY_TONG_TAI_SAN)) ?>"
                                                    data-title-1="<?php _e('Vòng quay tổng tài sản', 'bsc') ?>"
                                                    data-title-2="<?php _e('Vòng quay tổng tài sản TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php } else {
                                        ?>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('VÒNG QUAY KHOẢN PHẢI THU', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_VONG_QUAY_KHOAN_PHAI_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
                                                    ];
                                                }, $businessData);
                                                $industry_data_VONG_QUAY_KHOAN_PHAI_THU = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_THU,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_VONG_QUAY_KHOAN_PHAI_THU)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_VONG_QUAY_KHOAN_PHAI_THU)) ?>"
                                                    data-title-1="<?php _e('Vòng quay khoản phải thu', 'bsc') ?>"
                                                    data-title-2="<?php _e('Vòng quay khoản phải thu TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-green py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('VÒNG QUAY KHOẢN PHẢI TRẢ (LẦN)', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_VONG_QUAY_KHOAN_PHAI_TRA = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_TRA,
                                                    ];
                                                }, $businessData);
                                                $industry_data_VONG_QUAY_KHOAN_PHAI_TRA = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->VONG_QUAY_KHOAN_PHAI_TRA,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_VONG_QUAY_KHOAN_PHAI_TRA)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_VONG_QUAY_KHOAN_PHAI_TRA)) ?>"
                                                    data-title-1="<?php _e('Vòng quay khoản phải trả', 'bsc') ?>"
                                                    data-title-2="<?php _e('Vòng quay khoản phải trả TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                            <div class="space-y-6">
                                                <h4
                                                    class="text-center uppercase text-primary-300 py-2 px-3 bg-[#E8F5FF] font-bold text-lg">
                                                    <?php _e('VÒNG QUAY HÀNG TỒN KHO (LẦN)', 'bsc') ?>
                                                </h4>
                                                <?php
                                                $business_data_VONG_QUAY_HANG_TON_KHO = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime(trim($item->REPORT_DATE))),
                                                        'value' => $item->VONG_QUAY_HANG_TON_KHO,
                                                    ];
                                                }, $businessData);
                                                $industry_data_VONG_QUAY_HANG_TON_KHO = array_map(function ($item) {
                                                    return [
                                                        'date' => sprintf('%d-Q%d', trim($item->YEAR), trim($item->QUARTER)),
                                                        'value' => $item->VONG_QUAY_HANG_TON_KHO,
                                                    ];
                                                }, $industryData);
                                                ?>
                                                <div class="legend-gap bsc_chart-display"
                                                    data-load="false"
                                                    data-1="<?php echo htmlspecialchars(json_encode($business_data_VONG_QUAY_HANG_TON_KHO)) ?>"
                                                    data-2="<?php echo  htmlspecialchars(json_encode($industry_data_VONG_QUAY_HANG_TON_KHO)) ?>"
                                                    data-title-1="<?php _e('Vòng quay hàng tồn kho', 'bsc') ?>"
                                                    data-title-2="<?php _e('Vòng quay hàng tồn kho TB ngành', 'bsc') ?>"
                                                    data-color-1="#009e87"
                                                    data-color-2="#FFB81C">
                                                </div>
                                            </div>
                                        <?php
                                        } ?>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
            <?php }
            } ?>
        </div>
    <?php
    } elseif ($type_form == 'details_symbol_tab-4') {
    ?>
        <?php
        if (!$check_logout) {
            $array_data_GetForecastBussiness = array(
                'lang' => pll_current_language(),
                'symbol' => $symbol,
            );
            $response_GetForecastBussiness = get_data_with_cache('GetForecastBussiness', $array_data_GetForecastBussiness, $time_cache);
            if ($response_GetForecastBussiness) {
                $response_GetForecastBussiness_d2 = array_reverse($response_GetForecastBussiness->d2, true);
        ?>
                <div class="relative">
                    <div>
                        <div class="flex items-end justify-between mt-16">
                            <div
                                class="flex items-center gap-10 relative pl-6 after:absolute after:w-1 after:h-full after:bg-primary-300 after:top-0 after:left-0">
                                <?php if ($response_GetForecastBussiness->d1[0]->PRICE) { ?>
                                    <div class="flex flex-col gap-1">
                                        <p class="font-Helvetica text-xs"><?php _e('Giá mục tiêu', 'bsc') ?></p>
                                        <strong class="lg:text-[32px] text-2xl text-primary-300"><?php echo number_format($response_GetForecastBussiness->d1[0]->PRICE) ?></strong>
                                    </div>
                                <?php } ?>
                                <?php
                                if ($response_GetForecastBussiness->d1[0]->RECOMMENDATION) {
                                    $status = $response_GetForecastBussiness->d1[0]->RECOMMENDATION;
                                    $check_status = get_color_by_number_bsc($status);
                                    $title_status = $check_status['title_status'];
                                    $text_status = $check_status['text_status'];
                                    $background_status = $check_status['background_status'];
                                ?>
                                    <span
                                        class="inline-block min-w-[140px] text-center py-2 px-6 rounded-lg text-xl font-bold" style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
                                        <?php echo $title_status; ?>
                                    </span>
                                <?php } ?>
                            </div>
                            <?php
                            if (get_field('cdttcp1_slug_mck', 'option')) {
                                $sub_url_bcpt = get_field('cdttcp1_slug_mck', 'option');
                            } else {
                                $sub_url_bcpt =  __('bao-cao-ma-co-phieu', 'bsc');
                            }
                            ?>
                            <a href="<?php echo get_home_url() ?>/<?php echo $sub_url_bcpt ?>/<?php echo $symbol ?>"
                                class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105 text-lg font-Helvetica">
                                <?php _e('Xem chi tiết', 'bsc') ?>
                                <?php echo svg('arrow-btn', '12', '12') ?>
                            </a>
                        </div>
                        <div class="rounded-lg overflow-hidden relative mt-10">
                            <table
                                class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold prose-th:p-4 prose-th:text-left prose-td:p-4 font-medium ">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <?php foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <th><?php echo $GetForecastBussiness->FORECAST_PERIOD ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('Doanh thu (tỷ đồng)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->NET_REV) {
                                                    echo number_format($GetForecastBussiness->NET_REV / 1000000000);
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('Tăng trưởng doanh thu', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->TANG_TRUONG_DT) {
                                                    echo number_format($GetForecastBussiness->TANG_TRUONG_DT / 1000000000);
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('Lợi nhuận sau thuế công ty mẹ (tỷ đồng)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->LNST_CONG_TY_ME) {
                                                    echo number_format($GetForecastBussiness->LNST_CONG_TY_ME / 1000000000);
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('Tăng trưởng LNST công ty mẹ', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->TANG_TRUONG_LS) {
                                                    echo number_format($GetForecastBussiness->TANG_TRUONG_LS / 1000000000);
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('EPS (VND)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->EPS) {
                                                    echo number_format($GetForecastBussiness->EPS);
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('Tăng trưởng EPS', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->TANG_TRUONG_EPS) {
                                                    echo number_format($GetForecastBussiness->TANG_TRUONG_EPS, '2', '.', ',');
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('ROE (%)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->ROE) {
                                                    echo number_format($GetForecastBussiness->ROE * 100, '2', '.', ',') . '%';
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('ROA (%)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->ROA) {
                                                    echo number_format($GetForecastBussiness->ROA * 100, '2', '.', ',') . '%';
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('P/E (x)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->PE) {
                                                    echo number_format($GetForecastBussiness->PE, '2', '.', ',');
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('P/B (x)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->PB) {
                                                    echo number_format($GetForecastBussiness->PB, '2', '.', ',');
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr class="[&:nth-child(odd)]:bg-[#EBF4FA]">
                                        <td class="font-bold !pl-[30px]"><?php _e('Hiệu suất cổ phiếu (%)', 'bsc') ?></td>
                                        <?php
                                        foreach ($response_GetForecastBussiness_d2 as $GetForecastBussiness) {
                                        ?>
                                            <td><?php
                                                if ($GetForecastBussiness->HS_CO_PHIEU) {
                                                    echo number_format($GetForecastBussiness->HS_CO_PHIEU, '2', '.', ',') . '%';
                                                }
                                                ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php
        }
        ?>
    <?php
    } elseif ($type_form == 'instruments-symbol') {
        $first_symbol = strtoupper($symbol)[0];
        $array_data_value = array(
            'symbols' => $symbol
        );
        $response_value = get_data_with_cache('instruments', $array_data_value, $time_cache, get_field('cdapi_ip_address_url_api_price', 'option') . 'datafeed/');
    ?>
        <div class="flex gap-6 items-center">
            <div
                class="lg:w-[90px] w-16 lg:h-[90px] h-16 bg-white rounded-full flex items-center justify-center p-5">
                <?php echo $first_symbol ?>
            </div>
            <?php if ($response_value) { ?>
                <div class="flex flex-col">
                    <h4
                        class="font-bold lg:text-[32px] text-2xl uppercase leading-normal">
                        <?php echo $response_value->d[0]->symbol; ?>
                    </h4>
                    <p class="uppercase text-lg text-paragraph">
                        <?php echo $response_value->d[0]->exchange; ?>
                    </p>
                </div>
            <?php   } ?>
        </div>
        <?php if ($response_value) { ?>
            <div class="flex items-center 2xl:gap-7 gap-5">
                <div class="lg:w-[176px] lg:max-w-[37%]">
                    <?php if ($response_value->d[0]->bidPrice1) { ?>
                        <div class="flex-col gap-2">
                            <div class="flex gap-[14px] data_number">
                                <div class="2xl:text-[40px] text-4xl font-bold">
                                    <?php echo number_format(($response_value->d[0]->bidPrice1) / 1000, 2, '.', ''); ?>
                                </div>
                                <?php if ($response_value->d[0]->bidPrice1 && $response_value->d[0]->reference) {
                                    if (($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) > 0) {
                                        $text_color_class = 'text-[#1CCD83]';
                                    } elseif (($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) < 0) {
                                        $text_color_class = 'text-[#FE5353]';
                                    } elseif (($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) == 0) {
                                        $text_color_class = 'text-[#EB0]';
                                    } else {
                                        $text_color_class = '';
                                    }
                                ?>
                                    <div class="flex flex-col <?php echo $text_color_class ?>">
                                        <p>
                                            <?php
                                            echo number_format(($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) / 1000, 2, '.', '');
                                            ?>
                                        </p>
                                        <p>
                                            <?php echo number_format((($response_value->d[0]->bidPrice1 - $response_value->d[0]->reference) / ($response_value->d[0]->reference)) * 100, 2, '.', '') ?>%
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                            <p class="time-update mt-1">
                                <?php _e('Cập nhật lúc', 'bsc') ?>
                                <?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                                echo date("H:i"); ?>
                                UTC_7
                            </p>
                        </div>
                    <?php } ?>
                </div>
                <div class="flex-1 grid grid-cols-3 2xl:gap-5 gap-4 font-Helvetica">
                    <div class="col-span-1 space-y-5">
                        <div class="flex flex-col gap-0.5">
                            <p
                                class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                                <?php _e('Trần', 'bsc') ?>
                            </p>
                            <p class="font-bold text-[#7F1CCD] text-lg">
                                <?php
                                if ($response_value->d[0]->ceiling) {
                                    echo number_format(($response_value->d[0]->ceiling) / 1000, 2, '.', '');
                                } else {
                                    echo '-';
                                }
                                ?>
                            </p>
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <p
                                class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                                <?php _e('Cao nhất', 'bsc') ?>
                            </p>
                            <p class="font-bold text-black text-lg">
                                <?php
                                if ($response_value->d[0]->high) {
                                    echo number_format(($response_value->d[0]->high) / 1000, 2, '.', '');
                                } else {
                                    echo '-';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 space-y-5">
                        <div class="flex flex-col gap-0.5">
                            <p
                                class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                                <?php _e('Tham chiếu', 'bsc') ?>
                            </p>
                            <p class="font-bold text-[#FFB81C] text-lg">
                                <?php
                                if ($response_value->d[0]->reference) {
                                    echo number_format(($response_value->d[0]->reference) / 1000, 2, '.', '');
                                } else {
                                    echo '-';
                                }
                                ?>
                            </p>
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <p
                                class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                                <?php _e('Thấp nhất', 'bsc') ?>
                            </p>
                            <p class="font-bold text-black text-lg">
                                <?php
                                if ($response_value->d[0]->low) {
                                    echo number_format(($response_value->d[0]->low) / 1000, 2, '.', '');
                                } else {
                                    echo '-';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 space-y-5">
                        <div class="flex flex-col gap-0.5">
                            <p
                                class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                                <?php _e('Sàn', 'bsc') ?>
                            </p>
                            <p class="font-bold text-[#1ABAFE] text-lg">
                                <?php
                                if ($response_value->d[0]->floor) {
                                    echo number_format(($response_value->d[0]->floor) / 1000, 2, '.', '');
                                } else {
                                    echo '-';
                                }
                                ?>
                            </p>
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <p
                                class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                                <?php _e('Trung bình', 'bsc') ?>
                            </p>
                            <p class="font-bold text-black text-lg">
                                <?php
                                if ($response_value->d[0]->averagePrice) {
                                    echo number_format(($response_value->d[0]->averagePrice) / 1000, 2, '.', '');
                                } else {
                                    echo '-';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php   } ?>
    <?php
    } elseif ($type_form == 'securityBasicInfo-symbol') {
    ?>
        <?php
        $array_data_securityBasicInfo = json_encode([
            'lang' => pll_current_language(),
            'secList' => $symbol,
            "Exchange" => ""
        ]);
        $response_securityBasicInfo = get_data_with_cache('securityBasicInfo', $array_data_securityBasicInfo, $time_cache, get_field('cdapi_ip_address_url_api_algo', 'option') . 'pbapi/api/', 'POST');
        if ($response_securityBasicInfo) {
        ?>
            <div
                class="bg-[#E8F5FF] rounded-xl 2xl:px-8 px-6 lg:py-6 py-5 h-full font-Helvetica">
                <div
                    class="lg:flex lg:items-center lg:justify-between mb-6 pb-6 border-b border-[#C9CCD2]">
                    <p class="text-paragraph text-opacity-70 text-xs">
                        <?php _e('Ngành', 'bsc') ?>
                    </p>
                    <p class="font-bold 2xl:text-lg uppercase">
                        <?php echo $response_securityBasicInfo->data[0]->Industry ?>
                    </p>
                </div>
                <div class="flex gap-[12px] items-center mb-4">
                    <p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                        <?php _e('KLGD trung bình 10 ngày', 'bsc') ?>
                    </p>
                    <p class="font-medium text-lg">
                        <?php echo $response_securityBasicInfo->data[0]->VolPerAVG10d ?>
                    </p>
                </div>
                <div class="grid grid-cols-3 gap-4">

                    <div class="space-y-2">
                        <p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                            <?php _e('P/E', 'bsc') ?>
                        </p>
                        <p class="font-medium text-lg">
                            <?php echo $response_securityBasicInfo->data[0]->PE ?>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                            <?php _e('Vốn hóa (tỷ đồng)', 'bsc') ?>
                        </p>
                        <p class="font-medium text-lg">
                            <?php
                            if ($response_securityBasicInfo->data[0]->MarketCapital) {
                                echo number_format($response_securityBasicInfo->data[0]->MarketCapital);
                            }
                            ?>
                        </p>
                    </div>
                    <div class="space-y-2">

                    </div>
                    <div class="space-y-2">
                        <p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                            <?php _e('P/B', 'bsc') ?>
                        </p>
                        <p class="font-medium text-lg">
                            <?php echo $response_securityBasicInfo->data[0]->PB ?>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                            <?php _e('ROE', 'bsc') ?>
                        </p>
                        <p class="font-medium text-lg">
                            <?php echo $response_securityBasicInfo->data[0]->ROE ?>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p class="text-paragraph text-opacity-70 2xl:text-xs text-[13px]">
                            <?php _e('ROE', 'bsc') ?>
                        </p>
                        <p class="font-medium text-lg">
                            <?php echo $response_securityBasicInfo->data[0]->ROE ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
    } elseif ($type_form == 'GetRecommendedInstrument-symbol') {
        $array_data_GetRecommendedInstrument = array(
            'symbol' => $symbol
        );
        $response_GetRecommendedInstrument = get_data_with_cache('GetRecommendedInstrument', $array_data_GetRecommendedInstrument, $time_cache);
        if ($response_GetRecommendedInstrument) {
        ?>
            <div
                class="bg-[#E8F5FF] rounded-xl 2xl:px-8 px-5 lg:py-6 py-5 h-full font-Helvetica flex flex-col">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-bold">
                        <?php _e('KHUYẾN NGHỊ', 'bsc') ?>
                    </h3>
                    <?php
                    if ($response_GetRecommendedInstrument->rank) {
                        if ($response_GetRecommendedInstrument->rank == 'A') {
                            $class_rank = 'text-[#F90] bg-gradient-yellow-50';
                            $medal_rank = 'gold';
                        } elseif ($response_GetRecommendedInstrument->rank == 'B') {
                            $class_rank = 'text-[#4F4F4F] bg-gradient-sliver-50';
                            $medal_rank = 'sliver';
                        } elseif ($response_GetRecommendedInstrument->rank == 'C') {
                            $class_rank = 'text-[#A87E5C] bg-gradient-bronze-50';
                            $medal_rank = 'bronze';
                        } elseif ($response_GetRecommendedInstrument->rank == 'D') {
                            $medal_rank = 'sliver-2';
                            $class_rank = 'text-[#869299] bg-gradient-sliver-100';
                        }
                    ?>
                        <p
                            class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full <?php echo $class_rank ?>">
                            <?php echo svg($medal_rank, '24', '24') ?>
                            <?php _e('Hạng', 'bsc') ?>
                            <?php echo $response_GetRecommendedInstrument->rank ?>
                        </p>
                    <?php } ?>
                </div>

                <div class="space-y-4">
                    <?php if ($response_GetRecommendedInstrument->d[0]->author) { ?>
                        <div class="flex items-center justify-between text-xs">
                            <p class="text-xs">
                                <?php _e('Analyst', 'bsc') ?>:
                            </p>
                            <p class="font-bold text-primary-300">
                                <?php echo $response_GetRecommendedInstrument->d[0]->author ?>
                            </p>
                        </div>
                    <?php } ?>
                    <?php if ($response_GetRecommendedInstrument->d[0]->recommendation) { ?>
                        <div class="flex items-center justify-between text-xs">
                            <p class="text-xs">
                                <?php _e('Khuyến nghị', 'bsc') ?>:
                            </p>
                            <?php
                            $status = $response_GetRecommendedInstrument->d[0]->recommendation;
                            $check_status = get_color_by_number_bsc($status);
                            $title_status = $check_status['title_status'];
                            $text_status = $check_status['text_status'];
                            $background_status = $check_status['background_status'];
                            ?>
                            <p class="inline-block rounded-full px-4 py-0.5 font-semibold"
                                style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
                                <?php echo $title_status ?>
                            </p>
                        </div>
                    <?php } ?>
                    <?php if ($response_GetRecommendedInstrument->d[0]->categorY_NAMES) { ?>
                        <div class="flex items-center justify-between text-xs">
                            <p class="text-xs">
                                <?php _e('Danh mục', 'bsc') ?>:
                            </p>
                            <p class="inline-block rounded-full px-4 py-0.5  font-semibold">
                                <?php echo $response_GetRecommendedInstrument->d[0]->categorY_NAMES ?>
                            </p>
                        </div>
                    <?php } ?>
                    <?php
                    $time_cache = get_field('cdttcp1_time_cache', 'option') ?: 300;
                    $array_data = array(
                        "symbol" => $symbol,
                    );
                    $get_co_phieu_detail = get_data_with_cache('GetInstrumentInfo', $array_data, $time_cache);
                    if ($get_co_phieu_detail) {
                        $news = $get_co_phieu_detail->d[0];
                        if ($news->postdate) {
                    ?>
                            <div class="flex items-center justify-between text-xs">
                                <p class="text-xs">
                                    <?php _e('Ngày cập nhật', 'bsc') ?>
                                </p>
                                <p class="font-bold">
                                    <?php $date = new DateTime($news->postdate); ?>
                                    <?php echo $date->format('d/m/Y'); ?>
                                </p>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
<?php
        }
    }
    die();
}


/**
 * Count Download Report
 */
add_action('wp_ajax_bsc_count_download', 'bsc_count_download_ajax');
add_action('wp_ajax_nopriv_bsc_count_download', 'bsc_count_download_ajax');

function bsc_count_download_ajax()
{
    check_ajax_referer('common_nonce', 'security');
    $id_report = isset($_POST['id_report']) ? intval($_POST['id_report']) : '';
    $url = get_field('cdapi_ip_address_default', 'option') . "IncrementReportDownloads?id=" . $id_report;

    // Khởi tạo cURL
    $ch = curl_init();

    // Cấu hình cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH"); // Phương thức PATCH
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Trả về dữ liệu thay vì in ra
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json', // Header nếu cần (có thể bỏ nếu API không yêu cầu)
    ]);

    // Nếu cần gửi dữ liệu trong body (JSON)
    $data = [
        "key" => "value"
    ];
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Thực thi cURL
    $response = curl_exec($ch);
    die();
}


// add_action('wp_ajax_save_screen_info', 'save_screen_info');
// add_action('wp_ajax_nopriv_save_screen_info', 'save_screen_info');

// function save_screen_info() {
//     if (isset($_POST['is_desktop'])) {
//         $is_desktop = $_POST['is_desktop'] === 'true' ? 'true' : 'false';
//         setcookie('is_desktop', $is_desktop, time() + 3600, "/"); // set cookie 1h
//         wp_send_json_success(['message' => 'Screen info saved in cookie.']);
//     } else {
//         wp_send_json_error(['message' => 'Missing parameter.']);
//     }
// }
// // Hàm kiểm tra mobile theo cookie
// function bsc_is_mobile() {
//     if (isset($_COOKIE['is_desktop'])) {
//         $is_desktop = filter_var($_COOKIE['is_desktop'], FILTER_VALIDATE_BOOLEAN);
//         // Nếu is_desktop = true => Desktop => mobile = false
//         return !$is_desktop;
//     }
//     // Nếu chưa có cookie, dùng wp_is_mobile() mặc định
//     return wp_is_mobile();
// }
