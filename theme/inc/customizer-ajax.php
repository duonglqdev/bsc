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
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-x-5 gap-y-6">
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
                'paged' => 1,
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
