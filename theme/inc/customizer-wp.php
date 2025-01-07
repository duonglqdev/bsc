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

		$upload_mimes['svg'] = 'image/svg+xml';
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

			$check_filetype = wp_check_filetype($filename, $mimes);
			$ext = $check_filetype['ext'];
			$type = $check_filetype['type'];
			$proper_filename = $filename;

			if ($type && 0 === strpos($type, 'image/') && 'svg' !== $ext) {
				$ext = false;
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
		if (! in_array($size, $sizes)) {
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
if (! function_exists('bsc_css_admin')) :
	add_action('admin_head', 'bsc_css_admin');
	add_action('admin_enqueue_scripts', 'bsc_css_admin');
	function bsc_css_admin()
	{
		wp_enqueue_style('admin_css', get_template_directory_uri() . '/admin/admin.css');
	}
endif;
//CSS Login
if (! function_exists('bsc_css_admin_login')) :
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
// Disable X-Pingback to header
add_filter('wp_headers', 'disable_x_pingback');
function disable_x_pingback($headers)
{
	unset($headers['X-Pingback']);

	return $headers;
}
function remove_xmlrpc_methods($methods)
{
	return array();
}
add_filter('xmlrpc_methods', 'remove_xmlrpc_methods');
remove_action('wp_head', 'rsd_link');


/**
 * Disable Rest  API
 */

add_filter('rest_authentication_errors', function ($result) {
	// If a previous authentication check was applied,
	// pass that result along without modification.
	if (true === $result || is_wp_error($result)) {
		return $result;
	}

	// No authentication has been performed yet.
	// Return an error if user is not logged in.
	if (! is_user_logged_in()) {
		return new WP_Error(
			'rest_not_logged_in',
			__('You are not currently logged in.'),
			array('status' => 401)
		);
	}

	// Our custom authentication check should have no effect
	// on logged-in requests
	return $result;
});

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

			$item->title = '<img loading="lazy" src="' . $icon . '" alt="' . $item->title . '">' . $item->title;
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
	return 'class="prev flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded bg-white  hover:bg-primary-300 hover:text-white transition-all duration-500"';
}
add_filter('previous_posts_link_attributes', 'add_class_to_posts_link_prev');

function add_class_to_posts_link_next()
{
	return 'class="next flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded bg-white  hover:bg-primary-300 hover:text-white transition-all duration-500"';
}
add_filter('next_posts_link_attributes', 'add_class_to_posts_link_next');


/**
 * Hàm thay đổi số lượng bài viết hiển thị trên mỗi trang
 */
function filter_posts($query)
{
	if ($query->is_main_query() && ! is_admin()) :
		if (isset($_GET['posts_to_show'])) :
			$posts_to_show = bsc_format_string($_GET['posts_to_show'], 'number');
		else :
			$posts_to_show = get_option('posts_per_page');
		endif;
		$query->set('posts_per_page', $posts_to_show);
	endif;
}
add_action('pre_get_posts', 'filter_posts');

/**
 * Remove ATT image when call
 */
function custom_wp_get_attachment_image($html, $attachment_id)
{
	$mime = get_post_mime_type($attachment_id);
	if ('image/svg+xml' === $mime) {
		$html = preg_replace('/(width|height)="\d*"\s/', "", $html);
	}
	return $html;
}
add_filter('wp_get_attachment_image', 'custom_wp_get_attachment_image', 10, 2);

/**
 * Add loading="lazy" to all image
 */
function add_lazy_loading_to_wp_get_attachment_image($attr, $attachment, $size)
{
	// Kiểm tra nếu chưa có thuộc tính 'loading'
	if (! isset($attr['loading'])) {
		$attr['loading'] = 'lazy'; // Thêm thuộc tính loading="lazy"
	}
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'add_lazy_loading_to_wp_get_attachment_image', 10, 3);

/**
 * Search SQL filter for matching against post title only.
 *
 * @link    http://wordpress.stackexchange.com/a/11826/1685
 *
 * @param   string      $search
 * @param   WP_Query    $wp_query
 */
function wpse_11826_search_by_title($search, $wp_query)
{
	if (! empty($search) && ! empty($wp_query->query_vars['search_terms'])) {
		global $wpdb;

		$q = $wp_query->query_vars;
		$n = ! empty($q['exact']) ? '' : '%';

		$search = array();

		foreach ((array) $q['search_terms'] as $term)
			$search[] = $wpdb->prepare("$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like($term) . $n);

		if (! is_user_logged_in())
			$search[] = "$wpdb->posts.post_password = ''";

		$search = ' AND ' . implode(' AND ', $search);
	}

	return $search;
}

add_filter('posts_search', 'wpse_11826_search_by_title', 10, 2);

/**
 * Direct to MCP
 */
add_action('template_redirect', function () {
	if (isset($_GET['investment']) && isset($_GET['s']) && $_GET['investment'] === 'co_phieu') {
		$redirect_url = get_field('cdttcp1_page', 'option') . '?mcp=' . bsc_format_string($_GET['s'], 'all');
		wp_redirect($redirect_url);
		exit;
	}
});
