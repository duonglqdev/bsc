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
    $kinh_nghiem = isset($_POST['kinh_nghiem']) ? intval($_POST['kinh_nghiem']) : '';
    $menh = isset($_POST['menh']) ? intval($_POST['menh']) : '';
    $trinh_do_hoc_van = isset($_POST['trinh_do_hoc_van']) ? intval($_POST['trinh_do_hoc_van']) : '';
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
    if ($id_post) {
        $time_cache = get_field('cdtt2_time_cache', 'option') ?: 300;
        $array_data = array(
            "id" => $id_post,
            "newstype" => "0"
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
    $array_data = json_encode([
        'lang' => pll_current_language(),
    ]);
    $response = get_data_with_cache('secListAll', $array_data, $time_cache, 'https://api-uat-algo.bsc.com.vn/pbapi/api/', 'POST');
    $data = json_decode($response->data, true);
    if (isset($data['dict'])) {
        $codes = array_keys($data['dict']);
        $shares_data =  [];
        if ($codes) {
            foreach ($codes as $code) {
                $shares_data[] = ['name' => $code, 'link' => slug_co_phieu($code)];
            }
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
        'index' => $index
    );
    if (isset($sortfield) && !empty($sortfield)) {
        $array_data_GetEvents['sortField'] = $sortfield;
    }
    if (isset($eventcode) && !empty($eventcode)) {
        $array_data_GetEvents['eventcode'] = $eventcode;
    }
    if (isset($mck) && !empty($mck)) {
        $array_data_GetEvents['symbol'] = $mck;
    }
    if (isset($fromdate) && !empty($fromdate)) {
        $fromdate = $fromdate;
        $array_data_GetEvents['fromdate'] = $fromdate;
    }
    if (isset($todate) && !empty($todate)) {
        $todate = $todate;
        $array_data_GetEvents['todate'] = $todate;
    }
    $response_GetEvents = get_data_with_cache('GetEvents', $array_data_GetEvents, $time_cache);
    if ($response_GetEvents) {
        if ($response_GetEvents->totalrecord) {
            $total_post = $response_GetEvents->totalrecord;
        } else {
            $total_post = $post_per_page;
        }
        $total_page = ceil($total_post / $post_per_page);
    ?>
        <?php
        foreach ($response_GetEvents->d as $GetEvents) {
            get_template_part('template-parts/content-lich-thi-truong', '', array(
                'data' => $GetEvents,
            ));
        }
        ?>
<?php }
    $html = ob_get_contents();
    ob_end_clean();
    ob_start();
    get_template_part('components/pagination', '', array(
        'get' => 'ajax_api',
        'total_page' => $total_page,
        'post_per_page' => 'hide',
        'paged' => $paged
    ));
    $pagination = ob_get_contents();
    ob_end_clean();
    wp_send_json_success(array(
        'html' => $html,
        'pagination' => $pagination
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
    $type_form = isset($_POST['type_form']) ? $_POST['type_form'] : '';
    if ($type_form == 'history') {
        $current_date_ymd = date('Y-m-d');
        $last_month_date_ymd = date('Y-m-d', strtotime('-6 month', strtotime($current_date_ymd)));
        $array_data_secTradingHistory = [
            'lang' => pll_current_language(),
            'secCode' => $symbol,
        ];
        if (isset($fromdate) && !empty($fromdate)) {
            $array_data_secTradingHistory['startDate'] = $fromdate;
        } else {
            $array_data_secTradingHistory['startDate'] = $last_month_date_ymd;
        }
        if (isset($todate) && !empty($todate)) {
            $array_data_secTradingHistory['endDate'] = $todate;
        } else {
            $array_data_secTradingHistory['endDate'] = $current_date_ymd;
        }
        $array_data_secTradingHistory = json_encode($array_data_secTradingHistory);

        $response_secTradingHistory = get_data_with_cache('secTradingHistory', $array_data_secTradingHistory, $time_cache, 'https://api-uat-algo.bsc.com.vn/pbapi/api/', 'POST');
        if ($response_secTradingHistory) {
            $data = json_decode($response_secTradingHistory->data, true);
            foreach ($data as $record) {
                get_template_part('template-parts/content-data-history', '', array(
                    'data' => $record,
                ));
            }
        }
    } else {
        $current_date_dmy = date('d/m/Y');
        $last_month_date_dmy = date('d/m/Y', strtotime('-6 month'));
        $array_data_GetForeignInvestors = array(
            'lang' => pll_current_language(),
            'symbol' => $symbol,
        );
        if (isset($fromdate) && !empty($fromdate)) {
            $array_data_GetForeignInvestors['fromdate'] = $fromdate;
        } else {
            $array_data_GetForeignInvestors['fromdate'] = $last_month_date_dmy;
        }
        if (isset($todate) && !empty($todate)) {
            $array_data_GetForeignInvestors['todate'] = $todate;
        } else {
            $array_data_GetForeignInvestors['todate'] = $current_date_dmy;
        }
        $response_GetForeignInvestors = get_data_with_cache('GetForeignInvestors', $array_data_GetForeignInvestors, $time_cache);
        if ($response_GetForeignInvestors) {
            foreach ($response_GetForeignInvestors->d as $GetForeignInvestors) {
                get_template_part('template-parts/content-data-history_ndtnn', '', array(
                    'data' => $GetForeignInvestors,
                ));
            }
        }
    }
    die();
}
