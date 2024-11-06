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
            <?php bsc_pagination($filter_job, $paged) ?>
        </div>
<?php
    else :
        echo '<p>' . __('Không có công việc nào phù hợp', 'bsc') . '</p>';
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
