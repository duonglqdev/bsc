<?php


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bsc_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'bsc_pingback_header');

if (! function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
endif;

/**
 * Function help call file SVG from assets/svg
 */

function svg($name, $width = false, $height = false)
{
	$dir = TEMPLATEPATH . '/assets/svg/';
	$path = $dir . $name . '.svg';
	if ($name && file_exists($path)) {
		$svg = file_get_contents($path);
		if ($width) {
			$size = '<svg';
			$new_size = '<svg width="' . $width . 'px"';
			$svg = str_replace($size, $new_size, $svg);
		}
		if ($height) {
			$size = '<svg';
			$new_size = '<svg height="' . $height . 'px"';
			$svg = str_replace($size, $new_size, $svg);
		}
		return $svg;
	}
	return '';
}
function svgClass($name, $width = false, $height = false, $class = '')
{
	$dir = TEMPLATEPATH . '/assets/svg/';
	$path = $dir . $name . '.svg';

	if ($name && file_exists($path)) {
		$svg = file_get_contents($path);
		$dom = new DOMDocument();
		$dom->loadXML($svg);

		$svgElement = $dom->getElementsByTagName('svg')->item(0);

		if ($width) {
			$svgElement->setAttribute('width', $width . 'px');
		}
		if ($height) {
			$svgElement->setAttribute('height', $height . 'px');
		}
		if ($class) {
			$svgElement->setAttribute('class', $class);
		}

		return $dom->saveXML($svgElement);
	}
	return '';
}

function svgpath($name, $width = false, $height = false, $class = '')
{
	$dir = TEMPLATEPATH . '/assets/svg/';
	$path = $dir . $name . '.svg';

	if ($name && file_exists($path)) {
		$svg = file_get_contents($path);
		$dom = new DOMDocument();
		$dom->loadXML($svg);

		$svgElement = $dom->getElementsByTagName('svg')->item(0);

		if ($width) {
			$svgElement->setAttribute('width', $width . 'px');
		}
		if ($height) {
			$svgElement->setAttribute('height', $height . 'px');
		}
		if ($class) {
			$paths = $dom->getElementsByTagName('path');
			foreach ($paths as $path) {
				$existingClass = $path->getAttribute('class');
				$newClass = $existingClass ? $existingClass . ' ' . $class : $class;
				$path->setAttribute('class', $newClass);
			}
		}

		return $dom->saveXML($svgElement);
	}
	return '';
}
/**
 * Function help call file SVG from url
 */
function svg_dir($path, $width = false, $height = false)
{
	if ($path) {
		$svg = file_get_contents($path);
		if ($width) {
			$size = '<svg';
			$new_size = '<svg width="' . $width . 'px"';
			$svg = str_replace($size, $new_size, $svg);
		}
		if ($height) {
			$size = '<svg';
			$new_size = '<svg height="' . $height . 'px"';
			$svg = str_replace($size, $new_size, $svg);
		}
		return $svg;
	}
	return '';
}

/**
 * Function help call file SVG from url with class
 */
function svgClass_dir($path, $width = false, $height = false, $class = '')
{

	if ($path) {
		$svg = file_get_contents($path);
		$dom = new DOMDocument();
		$dom->loadXML($svg);

		$svgElement = $dom->getElementsByTagName('svg')->item(0);

		if ($width) {
			$svgElement->setAttribute('width', $width . 'px');
		}
		if ($height) {
			$svgElement->setAttribute('height', $height . 'px');
		}
		if ($class) {
			$svgElement->setAttribute('class', $class);
		}

		return $dom->saveXML($svgElement);
	}
	return '';
}

if (! function_exists('bsc_set_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_set_thumbnail($data, $size = 'thumbnail')
	{
		if (isset($data->imagethumbnail) && !empty($data->imagethumbnail)) {
			$thumbnail =  $data->imagethumbnail;
		} elseif (get_sub_field('default_thumbnail')) {
			$thumbnail = wp_get_attachment_image_url(get_sub_field('default_thumbnail'), $size);
		} elseif (get_field('cdc1_thumbnail', 'option')) {
			$thumbnail = wp_get_attachment_image_url(get_field('cdc1_thumbnail', 'option'), $size);
		} else {
			$thumbnail = get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
		}
		return $thumbnail;
	}
endif;

if (! function_exists('bsc_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || ! has_post_thumbnail()) {
			if (get_field('cdc1_thumbnail', 'option')) {
				echo wp_get_attachment_thumb_url(get_field('cdc1_thumbnail', 'option'), 'thumbnail');
			} else {
				echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
			}
		} else {
			the_post_thumbnail_url('thumbnail');
		}
	}
endif;

if (! function_exists('bsc_post_thumbnail_medium')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail_medium()
	{
		if (post_password_required() || is_attachment() || ! has_post_thumbnail()) {
			if (get_field('cdc1_thumbnail', 'option')) {
				echo wp_get_attachment_image_url(get_field('cdc1_thumbnail', 'option'));
			} else {
				echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
			}
		} else {
			the_post_thumbnail_url('medium');
		}
	}
endif;

if (! function_exists('bsc_post_thumbnail_large')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail_large()
	{
		if (post_password_required() || is_attachment() || ! has_post_thumbnail()) {
			if (get_field('cdc1_thumbnail', 'option')) {
				echo wp_get_attachment_image_url(get_field('cdc1_thumbnail', 'option'), 'large');
			} else {
				echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
			}
		} else {
			the_post_thumbnail_url('large');
		}
	}
endif;

if (! function_exists('bsc_post_thumbnail_full')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail_full()
	{
		if (post_password_required() || is_attachment() || ! has_post_thumbnail()) {
			if (get_field('cdc1_thumbnail', 'option')) {
				echo wp_get_attachment_image_url(get_field('cdc1_thumbnail', 'option'), 'full');
			} else {
				echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
			}
		} else {
			the_post_thumbnail_url();
		}
	}
endif;

/**
 * Displays pagination style by number page
 */
function bsc_pagination($custom_query = null, $custom_paged = null)
{

	if (!$custom_query) {
		global $wp_query;
		$custom_query = $wp_query;
	}
	if ($custom_query->max_num_pages <= 1) {
		return; // Dừng nếu chỉ có 1 trang
	}
	if (!$custom_paged) {
		$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
		$custom_paged = $paged;
	}
	$max = intval($custom_query->max_num_pages);

	/** Add current page to the array */
	if ($custom_paged >= 1)
		$links[] = $custom_paged;

	/** Add the pages around the current page to the array */
	if ($custom_paged >= 3) {
		$links[] = $custom_paged - 1;
		$links[] = $custom_paged - 2;
	}

	if (($custom_paged + 2) <= $max) {
		$links[] = $custom_paged + 2;
		$links[] = $custom_paged + 1;
	}

	echo '<ul class="flex items-center gap-[11px] h-9 text-base">' . "\n";

	/** Previous Post Link */
	if (get_previous_posts_link())
		printf('<li>%s</li>' . "\n", get_previous_posts_link(svg('angle-left')));

	/** Link to first page, plus ellipses if necessary */
	if (! in_array(1, $links)) {
		$class = 1 == $custom_paged ? ' class="active"' : '';
		printf('<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

		if (! in_array(2, $links))
			echo '<li>…</li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach ((array) $links as $link) {
		$class = $custom_paged == $link ? ' active' : '';
		printf('<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
	}

	/** Link to last page, plus ellipses if necessary */
	if (! in_array($max, $links)) {
		if (! in_array($max - 1, $links))
			echo '<li>…</li>' . "\n";

		$class = $custom_paged == $max ? 'active' : '';
		printf('<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
	}

	/** Next Post Link */
	if (get_next_posts_link())
		printf('<li>%s</li>' . "\n", get_next_posts_link(svg('angle-right')));
?>
	</ul>
<?php
}


/**
 * Displays exceprt by number string
 * How to use: echo excerpt(x) width x is number length
 */
function excerpt($limit)
{
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return strip_tags($excerpt);
}

/**
 * Check Link
 * If not return javascript:void(0)
 */

function check_link($value)
{
	if ($value) {
		return $value;
	} else {
		return 'javascript:void(0)';
	}
}

/**
 * Custom Flag
 */
function add_custom_class_to_current_lang($args)
{
	// Bắt đầu lưu output vào buffer
	ob_start();
	pll_the_languages($args);
	$languages_html = ob_get_clean();

	// Thêm class 'abc' vào thẻ <li> có class 'current-lang'
	$languages_html = str_replace('<a', '<a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" ', $languages_html);

	// Trả lại HTML đã chỉnh sửa
	echo $languages_html;
}

/**
 * Generate Random String
 */
function generateRandomString($length = 10)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';

	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[random_int(0, $charactersLength - 1)];
	}

	return $randomString;
}
