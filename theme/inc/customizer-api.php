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

function get_data_with_cache($endpoint, $array_data, $ttl = 300)
{
    $cache_key = $endpoint . '_' . md5(json_encode($array_data));
    $cached_data = wp_cache_get($cache_key);
    if (false !== $cached_data) {
        return $cached_data;
    }

    $url = 'http://10.21.170.17:86/' . $endpoint . '?' . http_build_query($array_data);
    $response = callApi($url);
    if (is_object($response) && $response->s == "ok" && !empty($response->d)) {
        wp_cache_set($cache_key, $response, '', $ttl);
        return $response;
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
            "newstype" => ""
        );
        $get_news_detail = get_data_with_cache('GetNewsDetail', $array_data, $time_cache);
        if ($get_news_detail) {
            // Lấy chi tiết tin tức từ API response
            $news = $get_news_detail->d[0];
            // Lưu dữ liệu vào biến toàn cục để dùng trong Rank Math
            global $custom_meta_data;
            $custom_meta_data = array(
                'title' => $news->title,
                'description' => $news->description,
                'thumbnail' => $news->imagethumbnail
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
