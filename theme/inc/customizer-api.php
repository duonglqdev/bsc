<?php
function callApi($url, $data = false, $method = "GET")
{
    // $curl = curl_init();
    // curl_setopt_array($curl, array(
    //     CURLOPT_URL => $url,
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => '',
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 0,
    //     CURLOPT_FOLLOWLOCATION => true,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => $method,
    //     CURLOPT_POSTFIELDS => $data,
    //     CURLOPT_HTTPHEADER => array(
    //         'Content-Type: application/json'
    //     ),
    // ));
    // $response = curl_exec($curl);
    // curl_close($curl);
    // return json_decode($response);
}


function get_data_with_cache($endpoint, $array_data, $ttl = 300, $url_end = 'http://10.21.170.17:86/', $method = "GET")
{
    if ($method == 'POST') {
        $cache_key = $endpoint . '_' . md5($array_data);
        $cached_data = wp_cache_get($cache_key);
        if (false !== $cached_data) {
            return $cached_data;
        }
        $url = $url_end . $endpoint;
        $response = callApi($url, $array_data, "POST");
        if ($response) {
            wp_cache_set($cache_key, $response, '', $ttl);
            return $response;
        }
    } else {
        $cache_key = $endpoint . '_' . md5(json_encode($array_data));
        $cached_data = wp_cache_get($cache_key);
        if (false !== $cached_data) {
            return $cached_data;
        }
        $url = $url_end . $endpoint . '?' . http_build_query($array_data);
        $response = callApi($url);
        if (is_object($response) && $response->s == "ok") {
            wp_cache_set($cache_key, $response, '', $ttl);
            return $response;
        }
    }

    return null;
}

function slug_news($postid, $title)
{
    if (get_field('cdtt2_slug', 'option')) {
        $sub_url = get_field('cdtt2_slug', 'option');
    } else {
        $sub_url = __('tin-tuc', 'bsc');
    }
    $url = get_home_url() . '/' . $sub_url . '/' . $postid . '-' . sanitize_title($title);
    return  $url;
}

function slug_report($postid, $title)
{
    if (get_field('cdbcpt2_slug', 'option')) {
        $sub_url = get_field('cdbcpt2_slug', 'option');
    } else {
        $sub_url = __('bao-cao', 'bsc');
    }
    $url = get_home_url() . '/' . $sub_url . '/' . $postid . '-' . sanitize_title($title);
    return  $url;
}

function slug_co_phieu($title)
{
    if (get_field('cdttcp1_slug', 'option')) {
        $sub_url = get_field('cdttcp1_slug', 'option');
    } else {
        $sub_url = __('ma-co-phieu', 'bsc');
    }
    $url = get_home_url() . '/' . $sub_url . '/' . sanitize_title($title);
    return  $url;
}

function slug_calendar($postid)
{
    if (get_field('cdltt1_slug_lich', 'option')) {
        $sub_url = get_field('cdltt1_slug_lich', 'option');
    } else {
        $sub_url = __('lich-su-kien', 'bsc');
    }
    $url = get_home_url() . '/' . $sub_url . '/' . $postid;
    return  $url;
}


/**
 * News
 */

// Thêm rewrite rule cho 'tin-tuc' vào functions.php
function custom_rewrite_rule_for_news()
{
    if (get_field('cdtt2_slug', 'option')) {
        $sub_url = get_field('cdtt2_slug', 'option');
    } else {
        $sub_url = __('tin-tuc', 'bsc');
    }
    add_rewrite_rule('^' . $sub_url . '/([0-9]+)-', 'index.php?news_id=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule_for_news');

// Thêm query var 'news_id' vào hệ thống query vars của WordPress
function custom_query_vars($vars)
{
    $vars[] = 'news_id';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars');


function custom_template_redirect()
{
    // Lấy giá trị của 'news_id' từ query vars
    $news_id = get_query_var('news_id');

    // Kiểm tra nếu có 'news_id' trong URL
    if ($news_id) {
        $time_cache = get_field('cdtt2_time_cache', 'option') ?: 300;
        $array_data = array(
            "id" => $news_id,
            "newstype" => "0"
        );
        $get_news_detail = get_data_with_cache('GetNewsDetail', $array_data, $time_cache);
        if ($get_news_detail) {
        } else {
            $array_data = array(
                "id" => $news_id,
                "newstype" => "1"
            );
            $get_news_detail = get_data_with_cache('GetNewsDetail', $array_data, $time_cache);
        }
        if ($get_news_detail) {
            // Lấy chi tiết tin tức từ API response
            $news = $get_news_detail->d[0];
            // Lưu dữ liệu vào biến toàn cục để dùng trong Rank Math
            global $custom_meta_data;
            $custom_meta_data = array(
                'title' => $news->title,
                'description' => $news->content,
                'thumbnail' => $news->imageurl
            );
            get_template_part('single', null, array(
                'data' => $news,
            ));
            exit; // Dừng WordPress để tránh bị 404
        } else {
            // Nếu không có dữ liệu từ API
            wp_redirect(home_url('/404'));
            exit;
        }
    }
}
add_action('template_redirect', 'custom_template_redirect');

/**
 *  Report
 */

// Thêm rewrite rule cho 'bao-cao'
function custom_rewrite_rule_for_report()
{
    if (get_field('cdbcpt2_slug', 'option')) {
        $sub_url = get_field('cdbcpt2_slug', 'option');
    } else {
        $sub_url = __('bao-cao', 'bsc');
    }
    add_rewrite_rule('^' . $sub_url . '/([0-9]+)-', 'index.php?report_id=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule_for_report');

// Thêm query var 'report_id' vào hệ thống query vars của WordPress
function custom_query_vars_for_report($vars)
{
    $vars[] = 'report_id';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars_for_report');

// Xử lý template redirect cho 'report_id'
function custom_template_redirect_for_report()
{
    // Lấy giá trị của 'report_id' từ query vars
    $report_id = get_query_var('report_id');

    // Kiểm tra nếu có 'report_id' trong URL
    if ($report_id) {
        $time_cache = get_field('cdbcpt2_time_cache', 'option') ?: 300;
        $array_data = array(
            "id" => $report_id,
        );
        $get_report_detail = get_data_with_cache('GetReportsDetail', $array_data, $time_cache);
        if ($get_report_detail) {
            // Lấy chi tiết báo cáo từ API response
            $report = $get_report_detail->d[0];
            // Lưu dữ liệu vào biến toàn cục để dùng trong Rank Math
            global $custom_meta_data;
            $custom_meta_data = array(
                'title' => $report->title,
                'description' => $report->description,
                'thumbnail' => $report->imagethumbnail
            );
            get_template_part('single-bao-cao-phan-tich', null, array(
                'data' => $report,
            ));
            exit; // Dừng WordPress để tránh bị 404
        } else {
            // Nếu không có dữ liệu từ API
            wp_redirect(home_url('/404'));
            exit;
        }
    }
}
add_action('template_redirect', 'custom_template_redirect_for_report');

/**
 *  Mã cổ phiếu
 */
// Thêm rewrite rule cho 'ma-co-phieu'
function custom_rewrite_rule_for_co_phieu()
{
    if (get_field('cdttcp1_slug', 'option')) {
        $sub_url = get_field('cdttcp1_slug', 'option');
    } else {
        $sub_url = __('ma-co-phieu', 'bsc');
    }
    add_rewrite_rule('^' . $sub_url . '/([^/]+)/?', 'index.php?co_phieu_id=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule_for_co_phieu');

// Thêm query var 'co_phieu_id' vào hệ thống query vars của WordPress
function custom_query_vars_for_co_phieu($vars)
{
    $vars[] = 'co_phieu_id';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars_for_co_phieu');

// Xử lý template redirect cho 'co_phieu_id'
function custom_template_redirect_for_co_phieu()
{
    // Lấy giá trị của 'co_phieu_id' từ query vars
    $co_phieu_id = get_query_var('co_phieu_id');

    // Kiểm tra nếu có 'co_phieu_id' trong URL
    if ($co_phieu_id) {
        $time_cache = get_field('cdttcp1_time_cache', 'option') ?: 300;
        $array_data = array(
            "symbol" => $co_phieu_id,
        );
        $get_co_phieu_detail = get_data_with_cache('GetInstrumentInfo', $array_data, $time_cache);
        if ($get_co_phieu_detail) {
            // Lấy chi tiết báo cáo từ API response
            $co_phieu = $get_co_phieu_detail->d[0];
            // // Lưu dữ liệu vào biến toàn cục để dùng trong Rank Math
            global $custom_meta_data;
            update_co_phieu_view_count_option($co_phieu_id);
            $custom_meta_data = array(
                'title' => $co_phieu_id,
                'description' => $co_phieu->description,
                'thumbnail' => $co_phieu->imagethumbnail
            );
            get_template_part('single-ma-co-phieu', null, array(
                'data' => $co_phieu,
                'symbol' => $co_phieu_id,
            ));
            exit; // Dừng WordPress để tránh bị 404
        } else {
            // Nếu không có dữ liệu từ API
            wp_redirect(home_url('/404'));
            exit;
        }
    }
}
add_action('template_redirect', 'custom_template_redirect_for_co_phieu');

/**
 * Tag Report
 */
function custom_rewrite_rule_for_tag_report()
{
    $sub_url = __('tag-report', 'bsc');
    add_rewrite_rule('^' . $sub_url . '/([^/]+)/?', 'index.php?tag_report_slug=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule_for_tag_report');

function custom_query_vars_for_tag_report($vars)
{
    $vars[] = 'tag_report_slug';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars_for_tag_report');

function custom_template_redirect_for_tag_report()
{
    // Lấy giá trị của 'tag_report_slug' từ query vars
    $tag_slug = get_query_var('tag_report_slug');

    // Kiểm tra nếu có 'tag_report_slug' trong URL
    if ($tag_slug) {
        get_template_part('search-tag-report', null, array(
            'search' => $tag_slug
        ));
        exit;
    }
}
add_action('template_redirect', 'custom_template_redirect_for_tag_report');

/**
 * Báo cáo phân tích
 */
function custom_rewrite_rule_for_bao_cao_phan_tich()
{
    if (get_field('cdttcp1_slug_mck', 'option')) {
        $sub_url = get_field('cdttcp1_slug_mck', 'option');
    } else {
        $sub_url =  __('bao-cao-ma-co-phieu', 'bsc');
    }
    add_rewrite_rule('^' . $sub_url . '/([^/]+)/?', 'index.php?bao_cao_phan_tich_slug=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule_for_bao_cao_phan_tich');

function custom_query_vars_for_bao_cao_phan_tich($vars)
{
    $vars[] = 'bao_cao_phan_tich_slug';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars_for_bao_cao_phan_tich');

function custom_template_redirect_for_bao_cao_phan_tich()
{
    // Lấy giá trị của 'bao_cao_phan_tich_slug' từ query vars
    $tag_slug = get_query_var('bao_cao_phan_tich_slug');

    // Kiểm tra nếu có 'bao_cao_phan_tich_slug' trong URL
    if ($tag_slug) {
        get_template_part('search-bao-cao-phan-tich', null, array(
            'search' => $tag_slug
        ));
        exit;
    }
}
add_action('template_redirect', 'custom_template_redirect_for_bao_cao_phan_tich');

/**
 *  Lịch thị trường
 */

// Thêm rewrite rule cho 'lich-su-kien'
function custom_rewrite_rule_for_calendar()
{
    if (get_field('cdltt1_slug_lich', 'option')) {
        $sub_url = get_field('cdltt1_slug_lich', 'option');
    } else {
        $sub_url = __('lich-su-kien', 'bsc');
    }
    add_rewrite_rule('^' . $sub_url . '/([^/]+)/?', 'index.php?calendar_slug=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule_for_calendar');

// Thêm query var 'calendar_slug' vào hệ thống query vars của WordPress
function custom_query_vars_for_calendar($vars)
{
    $vars[] = 'calendar_slug';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars_for_calendar');

// Xử lý template redirect cho 'calendar_slug'
function custom_template_redirect_for_calendar()
{
    // Lấy giá trị của 'calendar_slug' từ query vars
    $calendar_slug = get_query_var('calendar_slug');

    // Kiểm tra nếu có 'calendar_slug' trong URL
    if ($calendar_slug) {
        $time_cache = 300;
        $array_data = array(
            "id" => $calendar_slug,
        );
        $get_calendar_detail = get_data_with_cache('GetEventDetail', $array_data, $time_cache);
        if ($get_calendar_detail) {
            // Lấy chi tiết báo cáo từ API response
            $calendar = $get_calendar_detail->d[0];
            // Lưu dữ liệu vào biến toàn cục để dùng trong Rank Math
            global $custom_meta_data;
            $custom_meta_data = array(
                'title' => $calendar->title,
                'description' => $calendar->description,
                'thumbnail' => $calendar->imagethumbnail
            );
            get_template_part('single-lich-thi-truong', null, array(
                'data' => $calendar,
            ));
            exit; // Dừng WordPress để tránh bị 404
        } else {
            // Nếu không có dữ liệu từ API
            wp_redirect(home_url('/404'));
            exit;
        }
    }
}
add_action('template_redirect', 'custom_template_redirect_for_calendar');

/**
 * Breadcrumb
 */

// Thiết lập meta title và description thông qua Rank Math hooks
add_filter('rank_math/frontend/title', function ($title) {
    global $custom_meta_data;
    if ($custom_meta_data && !empty($custom_meta_data['title'])) {
        return $custom_meta_data['title'];
    }
    return $title;
});

add_filter('rank_math/frontend/description', function ($description) {
    global $custom_meta_data;
    if ($custom_meta_data && !empty($custom_meta_data['description'])) {
        return $custom_meta_data['description'];
    }
    return $description;
});

// Thiết lập meta thumbnail cho Open Graph qua Rank Math
add_filter('rank_math/opengraph/image', function ($image) {
    global $custom_meta_data;
    if ($custom_meta_data && !empty($custom_meta_data['thumbnail'])) {
        return $custom_meta_data['thumbnail'];
    }
    return $image; // Trả về ảnh mặc định nếu không có ảnh thumbnail từ API
});

/**
 * Xử lý login  BSC
 */
//Check login
function bsc_url_sso()
{
    $redirect_uri = get_home_url() . '/callback';
    $client_id = 'L2B6V5LX1S';
    $current_url = urlencode(home_url($_SERVER['REQUEST_URI']));
    $url = "https://trading-uat.bsjsc.com.vn/sso/oauth/authorize?client_id=" . $client_id . "&response_type=code&redirect_uri=" . $redirect_uri . "&scope=general&ui_locales=" . pll_current_language() . "&state=" . $current_url . "";
    return $url;
}
function bsc_is_user_logged_out()
{
    if (isset($_COOKIE['access_token'])) {
        $access_token = sanitize_text_field($_COOKIE['access_token']);
        $user_logged_in_key = 'user_logged_in_' . md5($access_token);

        // Kiểm tra transient
        if (get_transient($user_logged_in_key)) {
            // Người dùng đang đăng nhập
            return null;
        }
    }
    return [
        'class' => 'blur-sm',
        'html' => '
            <div class="absolute w-full h-full inset-0 z-10 flex flex-col justify-center items-center">
                <a href="' . bsc_url_sso() . '" class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-8 px-4 2xl:py-4 py-2  relative transition-all duration-500 font-bold rounded-xl">
                    ' . __('Đăng nhập', 'bsc') . '
                </a>
                <p class="italic mt-4 font-normal">
                    ' . __('Để xem chi tiết danh mục', 'bsc') . '
                </p>
            </div>'
    ];
}

function detectDevice()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Kiểm tra thiết bị di động
    if (preg_match('/iPhone|iPad|iPod|Android|BlackBerry|Windows Phone/', $userAgent)) {
        return 'Mobile Device';
    }
    // Kiểm tra máy tính bảng
    elseif (preg_match('/Tablet|iPad/', $userAgent)) {
        return 'Tablet';
    }
    // Kiểm tra máy tính để bàn
    elseif (preg_match('/Windows NT|Macintosh|Linux/', $userAgent)) {
        return 'Desktop';
    }
    return 'Unknown Device';
}
/*
* Create page callback
*/
add_action('init', function () {
    if (strpos($_SERVER['REQUEST_URI'], '/callback') !== false) {
        bsc_handle_sso_callback();
        exit;
    } elseif (strpos($_SERVER['REQUEST_URI'], '/detect') !== false) {
        echo 'Check bằng Agent:' . detectDevice() . '<br>';
        if (wp_is_mobile()) {
            echo 'Check bạn dùng mobile bằng wp_is_mobile' . '<br>';
        } else {
            echo 'Check bạn dùng Desktop bằng wp_is_mobile' . '<br>';
        }
        $ua = $_SERVER['HTTP_USER_AGENT'];

        if (strpos($ua, 'iPad') !== false || (strpos($ua, 'Macintosh') !== false && isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'touch') !== false)) {
            echo  'detect được máy tính bảng';
        } else {
            echo '1';
        }

        exit;
    }
});

function bsc_handle_sso_callback()
{
    if (isset($_GET['code'])) {
        $code = sanitize_text_field($_GET['code']);
        $redirect_uri = get_home_url() . '/callback';
        $client_id = 'L2B6V5LX1S';
        $client_secret = 'dn8O1K4LSPUEN1FXFt5EhXrsKZVHZS';
        $token_url = 'https://trading-uat.bsjsc.com.vn/sso/oauth/token';

        // Gửi yêu cầu lấy access_token
        $response = wp_remote_post($token_url, [
            'method'      => 'POST',
            'body'        => [
                'client_id'     => $client_id,
                'client_secret' => $client_secret,
                'grant_type'    => 'authorization_code',
                'redirect_uri'  => $redirect_uri,
                'code'          => $code,
            ],
            'headers'     => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
        ]);

        if (is_wp_error($response)) {
            wp_die('Lỗi khi kết nối đến API: ' . $response->get_error_message());
        }

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        if (isset($data['access_token'])) {
            $access_token = $data['access_token'];
            $user_logged_in_key = 'user_logged_in_' . md5($access_token);
            set_transient($user_logged_in_key, true, 60 * MINUTE_IN_SECONDS);
            // Lưu vào cookie
            setcookie('access_token', $access_token, time() + 60 * 60, COOKIEPATH, COOKIE_DOMAIN);
            $redirect_url = isset($_GET['state']) ? esc_url_raw($_GET['state']) : home_url();
            wp_redirect($redirect_url);
            exit;
        } else {
            // wp_die('Lỗi khi lấy token: ' . $body);
        }
    } else {
        // wp_die('Code không hợp lệ hoặc không tồn tại.');
    }
}


//Get array id taxonomy
function get_array_id_taxonomy($tax)
{
    if ($tax) {
        $array_id_tax = array();
        $terms = get_terms(array(
            'taxonomy' => $tax,
            'hide_empty' => false,
        ));
        if (! empty($terms) && ! is_wp_error($terms)) {
            foreach ($terms as $term) :
                $api_id = get_field('api_id_danh_muc', $term);
                if ($api_id) {
                    $array_id_tax[] = array(
                        'id_api' => $api_id,
                        'object' => $term,
                    );
                }
            endforeach;
        }
        return $array_id_tax;
    } else {
        return null;
    }
}
function get_name_by_tax_id($taxid, $array_id_tax)
{
    foreach ($array_id_tax as $item) {
        if ($item['id_api'] == $taxid) {
            return $item['object'];
        }
    }
    return null;
}

/**
 * Get color by number ID
 */

function get_color_by_number_bsc($status)
{
    if ($status) {
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
    } else {
        $text_status = '#30d158';
        $background_status = '#d6f6de';
        $title_status = '';
    }
    return [
        'text_status'  => $text_status,
        'background_status' => $background_status,
        'title_status' => $title_status
    ];
}

/**
 * Create View count
 */
function update_co_phieu_view_count_option($symbol)
{
    $key = 'co_phieu_views';
    $views = get_option($key, array()); // Lấy danh sách lượt xem

    if (isset($views[$symbol])) {
        $views[$symbol]++; // Tăng lượt xem nếu đã tồn tại
    } else {
        $views[$symbol] = 1; // Khởi tạo lượt xem nếu chưa tồn tại
    }

    update_option($key, $views); // Lưu lại danh sách
}

/**
 * Get top View
 */
function get_top_viewed_co_phieu_option($limit = 6)
{
    $key = 'co_phieu_views';
    $views = get_option($key, array());

    // Sắp xếp lượt xem giảm dần
    arsort($views);

    // Lấy top mã cổ phiếu
    return array_slice($views, 0, $limit, true);
}
