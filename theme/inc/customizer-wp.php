<?php

/**
 * Functions which customizer into WordPress
 *
 * @package bsc
 */

/**
 * Function help upload SVG
 */
/**
 * Allow SVG uploads for administrator users.
 *
 * @param array $upload_mimes Allowed mime types.
 *
 * @return mixed
 */
add_filter(
    'upload_mimes',
    function ($upload_mimes) {
        // By default, only administrator users are allowed to add SVGs.
        // To enable more user types edit or comment the lines below but beware of
        // the security risks if you allow any user to upload SVG files.
        if (! current_user_can('administrator')) {
            return $upload_mimes;
        }

        $upload_mimes['svg']  = 'image/svg+xml';
        $upload_mimes['svgz'] = 'image/svg+xml';

        return $upload_mimes;
    }
);

/**
 * Add SVG files mime check.
 *
 * @param array        $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
 * @param string       $file Full path to the file.
 * @param string       $filename The name of the file (may differ from $file due to $file being in a tmp directory).
 * @param string[]     $mimes Array of mime types keyed by their file extension regex.
 * @param string|false $real_mime The actual mime type or false if the type cannot be determined.
 */
add_filter(
    'wp_check_filetype_and_ext',
    function ($wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime) {

        if (! $wp_check_filetype_and_ext['type']) {

            $check_filetype  = wp_check_filetype($filename, $mimes);
            $ext             = $check_filetype['ext'];
            $type            = $check_filetype['type'];
            $proper_filename = $filename;

            if ($type && 0 === strpos($type, 'image/') && 'svg' !== $ext) {
                $ext  = false;
                $type = false;
            }

            $wp_check_filetype_and_ext = compact('ext', 'type', 'proper_filename');
        }

        return $wp_check_filetype_and_ext;
    },
    10,
    5
);


/**
 * Remove Crop Image Wordpress Size: Large + Medium_large + Medium
 */
add_filter('intermediate_image_sizes', function ($sizes) {
    return array_diff($sizes, ['medium_large']);  // Medium Large (768 x 0)
});
//
add_action('init', 'remove_extra_image_sizes');
function remove_extra_image_sizes()
{
    $sizes = array();
    foreach (get_intermediate_image_sizes() as $size) {
        if (!in_array($size, $sizes)) {
            remove_image_size($size);
        }
    }
}

/**
 * Remove Editor Gutenberg, make Edior Classic
 */
// Post
add_filter('use_block_editor_for_post', '__return_false', 10);
// Post type
add_filter('use_block_editor_for_post_type', '__return_false', 10);

/**
 * Style Dashboard
 */
//Css Admin
if (!function_exists('bsc_css_admin')) :
    add_action('admin_head', 'bsc_css_admin');
    add_action('admin_enqueue_scripts', 'bsc_css_admin');
    function bsc_css_admin()
    {
        wp_enqueue_style('admin_css', get_template_directory_uri() . '/admin/admin.css');
    }
endif;
//CSS Login
if (!function_exists('bsc_css_admin_login')) :
    add_action('login_enqueue_scripts', 'bsc_css_admin_login');
    function bsc_css_admin_login()
    {
        wp_enqueue_style('admin_login_css', get_template_directory_uri() . '/admin/login.css');
    }
endif;

/**
 * Get home url Author
 */
add_filter('login_headerurl', 'my_custom_login_url');
function my_custom_login_url($url)
{
    $theme_data = wp_get_theme();
    $theme_uri = $theme_data->get('ThemeURI');
    return $theme_uri;
}


/**
 * Disable XMLRPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove Logo / Version / Help
 */
function bsc_remove_version()
{
    return '';
}
add_filter('the_generator', 'bsc_remove_version');
function change_footer_admin()
{
    return ' ';
}
add_filter('admin_footer_text', 'change_footer_admin', 9999);
function change_footer_version()
{
    return ' ';
}
add_filter('update_footer', 'change_footer_version', 9999);
remove_action('wp_head', 'wp_generator');
// Remove version from rss
add_filter('the_generator', '__return_empty_string');


add_action('admin_bar_menu', 'remove_wp_logo', 999);
function remove_wp_logo($wp_admin_bar)
{
    $wp_admin_bar->remove_node('wp-logo');
}

/**
 * Remove Tag, Category from archive title
 */
add_filter('get_the_archive_title', 'my_theme_archive_title');
function my_theme_archive_title($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }

    return $title;
}

/**
 * Classic Widget
 */
function example_theme_support()
{
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'example_theme_support');


/*
* Fix check child-parent taxonomy in admin
*/
add_filter('wp_terms_checklist_args', function ($args, $idPost) {
    $args['checked_ontop'] = false;

    return $args;
}, 10, 2);


/**
 * Disable Remove HTML ACF 6.2.5
 */
add_filter('acf/admin/prevent_escaped_html_notice', '__return_true');
add_filter('wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2);
function acf_add_allowed_iframe_tag($tags, $context)
{
    if ($context === 'acf') {
        $tags['iframe'] = array(
            'src' => true,
            'height' => true,
            'width' => true,
            'frameborder' => true,
            'allowfullscreen' => true,
        );
    }

    return $tags;
}

/**
 * Add Menu Item
 */
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{

    // loop
    foreach ($items as &$item) {

        // vars
        $icon = get_field('icon', $item);


        // append icon
        if ($icon) {

            $item->title = '<img src="' . $icon . '" alt="' . $item->title . '">' . $item->title;
        }
    }


    // return
    return $items;
}


/**
 * Remove <p> and <br> from Contact Form 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');



/**
 * Add Class Previous/Next Link
 */
function add_class_to_posts_link_prev()
{
    return 'class="prev flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded text-gray-500 bg-white  hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"';
}
add_filter('previous_posts_link_attributes', 'add_class_to_posts_link_prev');

function add_class_to_posts_link_next()
{
    return 'class="next flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded text-gray-500 bg-white  hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"';
}
add_filter('next_posts_link_attributes', 'add_class_to_posts_link_next');


/**
 * Hàm thay đổi số lượng bài viết hiển thị trên mỗi trang
 */
function filter_posts($query)
{
    if ($query->is_main_query() && ! is_admin()) :
        if (isset($_GET['posts_to_show'])) :
            $posts_to_show = $_GET['posts_to_show'];
        else :
            $posts_to_show = get_option('posts_per_page');
        endif;
        $query->set('posts_per_page', $posts_to_show);
    endif;
}
add_action('pre_get_posts', 'filter_posts');

/*
* Loại bỏ /danh-muc-bao-cao/ ở đường dẫn
* Thay /danh-muc-bao-cao/ slug hiện tại của bạn. Mặc định là /danh-muc-bao-cao/
*/
add_filter('term_link', 'bsc_cat_permalink', 10, 3);
function bsc_cat_permalink($url, $term, $taxonomy)
{
    if ($taxonomy === 'danh-muc-bao-cao') {
        $taxonomy_slug = 'danh-muc-bao-cao'; // Thay bằng slug hiện tại của bạn
        $url = str_replace('/' . $taxonomy_slug, '', $url);
    }
    return $url;
}

// Thêm quy tắc rewrite cho quan-he-co-dong category
function bsc_category_rewrite_rules($flush = false)
{
    $terms = get_terms(array(
        'taxonomy' => 'danh-muc-bao-cao',
        'post_type' => 'quan-he-co-dong',
        'hide_empty' => false,
    ));

    if (!is_wp_error($terms)) {
        $siteurl = esc_url(home_url('/'));
        foreach ($terms as $term) {
            $term_slug = $term->slug;
            $baseterm = str_replace($siteurl, '', get_term_link($term->term_id, 'danh-muc-bao-cao'));
            add_rewrite_rule($baseterm . '?$', 'index.php?danh-muc-bao-cao=' . $term_slug, 'top');
            add_rewrite_rule($baseterm . 'page/([0-9]{1,})/?$', 'index.php?danh-muc-bao-cao=' . $term_slug . '&paged=$matches[1]', 'top');
            add_rewrite_rule($baseterm . '(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?danh-muc-bao-cao=' . $term_slug . '&feed=$matches[1]', 'top');
        }
    }

    if ($flush) {
        flush_rewrite_rules(false);
    }
}
add_action('init', 'bsc_category_rewrite_rules');

// Tự động cập nhật rewrite rules khi tạo mới taxonomy
add_action('create_term', 'bsc_new_report_cat_edit_success', 10, 2);
function bsc_new_report_cat_edit_success($term_id, $taxonomy)
{
    if ($taxonomy === 'danh-muc-bao-cao') {
        bsc_category_rewrite_rules(true);
    }
}


// Bỏ slug /tuyen-dung/ hoặc các slug khác trong đường dẫn tuyển dụng
function nsc_remove_slug($post_link, $post)
{
    if (get_post_type($post) === 'tuyen-dung' && $post->post_status === 'publish') {
        $post_link = str_replace('/tuyen-dung/', '/', $post_link); // Thay 'tuyen-dung' bằng slug hiện tại của bạn
    }
    return $post_link;
}
add_filter('post_type_link', 'nsc_remove_slug', 10, 2);

// Thêm rewrite rule để tránh lỗi 404 sau khi xóa slug tuyen-dung
function nsc_tuyen_dung_rewrite_rules($flush = false)
{
    $tuyendungs = get_posts(array(
        'post_type'   => 'tuyen-dung',
        'post_status' => 'publish',
        'numberposts' => -1,
        'fields'      => 'ids'
    ));

    foreach ($tuyendungs as $tuyen_dung_id) {
        $base_tuyen_dung = str_replace(home_url('/'), '', get_permalink($tuyen_dung_id));
        add_rewrite_rule("{$base_tuyen_dung}?$", "index.php?tuyen-dung=" . get_post_field('post_name', $tuyen_dung_id), 'top');
    }

    if ($flush) {
        flush_rewrite_rules(false);
    }
}
add_action('init', 'nsc_tuyen_dung_rewrite_rules');

// Cập nhật rewrite rule khi tuyển dụng mới được tạo
function nsc_woo_new_tuyen_dung_post_save($post_id)
{
    if (get_post_type($post_id) === 'tuyen-dung') {
        nsc_tuyen_dung_rewrite_rules(true);
    }
}
add_action('wp_insert_post', 'nsc_woo_new_tuyen_dung_post_save');
