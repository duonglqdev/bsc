<?php


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bsc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'bsc_pingback_header' );

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Function help call file SVG from assets/svg
 */

function svg( $name, $width = false, $height = false ) {
	$dir = TEMPLATEPATH . '/assets/svg/';
	$path = $dir . $name . '.svg';
	if ( $name && file_exists( $path ) ) {
		$svg = file_get_contents( $path );
		if ( $width ) {
			$size = '<svg';
			$new_size = '<svg width="' . $width . 'px"';
			$svg = str_replace( $size, $new_size, $svg );
		}
		if ( $height ) {
			$size = '<svg';
			$new_size = '<svg height="' . $height . 'px"';
			$svg = str_replace( $size, $new_size, $svg );
		}
		return $svg;
	}
	return '';
}
function svgClass( $name, $width = false, $height = false, $class = '' ) {
	$dir = TEMPLATEPATH . '/assets/svg/';
	$path = $dir . $name . '.svg';

	if ( $name && file_exists( $path ) ) {
		$svg = file_get_contents( $path );
		$dom = new DOMDocument();

		// Kiểm tra file SVG có hợp lệ hay không
		try {
			$dom->loadXML( $svg );
		} catch (Exception $e) {
			return ''; // Trả về chuỗi rỗng nếu không hợp lệ
		}

		// Lấy phần tử <svg>
		$svgElement = $dom->getElementsByTagName( 'svg' )->item( 0 );
		if ( ! $svgElement ) {
			return ''; // Trả về chuỗi rỗng nếu không tìm thấy <svg>
		}

		// Thiết lập thuộc tính width, height, class
		if ( $width ) {
			$svgElement->setAttribute( 'width', $width . 'px' );
		}
		if ( $height ) {
			$svgElement->setAttribute( 'height', $height . 'px' );
		}
		if ( $class ) {
			$svgElement->setAttribute( 'class', $class );
		}

		return $dom->saveXML( $svgElement );
	}

	return ''; // Trả về chuỗi rỗng nếu không tìm thấy file
}


function svgpath( $name, $width = false, $height = false, $class = '' ) {
	$dir = TEMPLATEPATH . '/assets/svg/';
	$path = $dir . $name . '.svg';

	if ( $name && file_exists( $path ) ) {
		$svg = file_get_contents( $path );
		$dom = new DOMDocument();

		// Kiểm tra file SVG có hợp lệ hay không
		try {
			$dom->loadXML( $svg );
		} catch (Exception $e) {
			return ''; // Trả về chuỗi rỗng nếu không hợp lệ
		}

		// Lấy phần tử <svg>
		$svgElement = $dom->getElementsByTagName( 'svg' )->item( 0 );
		if ( ! $svgElement ) {
			return ''; // Trả về chuỗi rỗng nếu không tìm thấy <svg>
		}

		// Thiết lập thuộc tính width, height
		if ( $width ) {
			$svgElement->setAttribute( 'width', $width . 'px' );
		}
		if ( $height ) {
			$svgElement->setAttribute( 'height', $height . 'px' );
		}

		// Thêm class vào các thẻ <path>
		if ( $class ) {
			$paths = $dom->getElementsByTagName( 'path' );
			foreach ( $paths as $path ) {
				$existingClass = $path->getAttribute( 'class' );
				$newClass = $existingClass ? $existingClass . ' ' . $class : $class;
				$path->setAttribute( 'class', $newClass );
			}
		}

		return $dom->saveXML( $svgElement );
	}

	return ''; // Trả về chuỗi rỗng nếu không tìm thấy file
}

/**
 * Function help call file SVG from url
 */
function svg_dir( $path, $width = false, $height = false, $class = false ) {
	if ( $path ) {
		$svg = file_get_contents( $path );
		if ( $width ) {
			$size = '<svg';
			$new_size = '<svg width="' . $width . 'px"';
			$svg = str_replace( $size, $new_size, $svg );
		}
		if ( $height ) {
			$size = '<svg';
			$new_size = '<svg height="' . $height . 'px"';
			$svg = str_replace( $size, $new_size, $svg );
		}
		if ( $class ) {
			$size = '<svg';
			$new_size = '<svg class="' . $class . '"';
			$svg = str_replace( $size, $new_size, $svg );
		}
		return $svg;
	}
	return '';
}


/**
 * Function help call file SVG from url with class
 */
function svgClass_dir( $path, $width = false, $height = false, $class = '' ) {

	if ( $path ) {
		$svg = file_get_contents( $path );
		if ( $svg === false || empty( $svg ) ) {
			return '';
		}

		$dom = new DOMDocument();
		if ( $dom->loadXML( $svg ) ) {
			$svgElement = $dom->getElementsByTagName( 'svg' )->item( 0 );

			if ( $svgElement ) {
				$svgElement->setAttribute( 'width', $width . 'px' );
			}
			if ( $height ) {
				$svgElement->setAttribute( 'height', $height . 'px' );
			}
			if ( $class ) {
				$svgElement->setAttribute( 'class', $class );
			}

			return $dom->saveXML( $svgElement );
		}
	}
	return '';
}

if ( ! function_exists( 'bsc_set_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_set_thumbnail( $data, $size = 'thumbnail' ) {
		if ( isset( $data->imagethumbnail ) && ! empty( $data->imagethumbnail ) ) {
			$thumbnail = $data->imagethumbnail;
		} elseif ( get_sub_field( 'default_thumbnail' ) ) {
			$thumbnail = wp_get_attachment_image_url( get_sub_field( 'default_thumbnail' ), $size );
		} elseif ( get_field( 'cdc1_thumbnail', 'option' ) ) {
			$thumbnail = wp_get_attachment_image_url( get_field( 'cdc1_thumbnail', 'option' ), $size );
		} else {
			$thumbnail = get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
		}
		return $thumbnail;
	}
endif;

if ( ! function_exists( 'bsc_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			if ( get_field( 'cdc1_thumbnail', 'option' ) ) {
				echo wp_get_attachment_thumb_url( get_field( 'cdc1_thumbnail', 'option' ), 'thumbnail' );
			} else {
				echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
			}
		} else {
			the_post_thumbnail_url( 'thumbnail' );
		}
	}
endif;

if ( ! function_exists( 'bsc_post_thumbnail_medium' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail_medium() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			if ( get_field( 'cdc1_thumbnail', 'option' ) ) {
				echo wp_get_attachment_image_url( get_field( 'cdc1_thumbnail', 'option' ) );
			} else {
				echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
			}
		} else {
			the_post_thumbnail_url( 'medium' );
		}
	}
endif;

if ( ! function_exists( 'bsc_post_thumbnail_large' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail_large() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			if ( get_field( 'cdc1_thumbnail', 'option' ) ) {
				echo wp_get_attachment_image_url( get_field( 'cdc1_thumbnail', 'option' ), 'large' );
			} else {
				echo get_stylesheet_directory_uri() . '/assets/svg/placeholder.svg';
			}
		} else {
			the_post_thumbnail_url( 'large' );
		}
	}
endif;

if ( ! function_exists( 'bsc_post_thumbnail_full' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function bsc_post_thumbnail_full() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			if ( get_field( 'cdc1_thumbnail', 'option' ) ) {
				echo wp_get_attachment_image_url( get_field( 'cdc1_thumbnail', 'option' ), 'full' );
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
function bsc_pagination( $custom_query = null, $custom_paged = null ) {

	if ( ! $custom_query ) {
		global $wp_query;
		$custom_query = $wp_query;
	}
	if ( $custom_query->max_num_pages <= 1 ) {
		return; // Dừng nếu chỉ có 1 trang
	}
	if ( ! $custom_paged ) {
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$custom_paged = $paged;
	}
	$max = intval( $custom_query->max_num_pages );

	/** Add current page to the array */
	if ( $custom_paged >= 1 )
		$links[] = $custom_paged;

	/** Add the pages around the current page to the array */
	if ( $custom_paged >= 3 ) {
		$links[] = $custom_paged - 1;
		$links[] = $custom_paged - 2;
	}

	if ( ( $custom_paged + 2 ) <= $max ) {
		$links[] = $custom_paged + 2;
		$links[] = $custom_paged + 1;
	}

	echo '<ul class="flex items-center gap-[11px] h-9 text-base">' . "\n";
	/** Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link( svg( 'angle-left' ) ) );

	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $custom_paged ? ' class="active"' : '';
		printf( '<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $custom_paged == $link ? ' active' : '';
		printf( '<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $custom_paged == $max ? 'active' : '';
		printf( '<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/** Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link( svg( 'angle-right' ) ) );
	?>
	</ul>
	<?php
}

/**
 * Displays pagination style by number page
 */
function bsc_pagination_ajax( $custom_query = null, $custom_paged = null ) {

	if ( ! $custom_query ) {
		global $wp_query;
		$custom_query = $wp_query;
	}
	if ( $custom_query->max_num_pages <= 1 ) {
		return; // Dừng nếu chỉ có 1 trang
	}
	if ( ! $custom_paged ) {
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$custom_paged = $paged;
	}
	$max = intval( $custom_query->max_num_pages );

	/** Add current page to the array */
	if ( $custom_paged >= 1 )
		$links[] = $custom_paged;

	/** Add the pages around the current page to the array */
	if ( $custom_paged >= 3 ) {
		$links[] = $custom_paged - 1;
		$links[] = $custom_paged - 2;
	}

	if ( ( $custom_paged + 2 ) <= $max ) {
		$links[] = $custom_paged + 2;
		$links[] = $custom_paged + 1;
	}

	echo '<ul class="flex items-center gap-[11px] h-9 text-base">' . "\n";
	/** Previous Post Link */
	if ( $custom_paged > 1 ) {
		$custom_paged_prev = $custom_paged - 1;
		printf( '<li><button type="button" data-paged="' . $custom_paged_prev . '" class="prev flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded text-gray-500 bg-white  hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">' . svg( 'angle-left' ) . '</button></li>' . "\n", );
	}
	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $custom_paged ? ' class="active"' : '';
		printf( '<li><button type="button"  data-paged="1" class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500">%s</button></li>' . "\n", $class, '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $custom_paged == $link ? ' active' : '';
		printf( '<li><button type="button"  data-paged="' . $link . '" class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500">%s</button></li>' . "\n", $class, $link );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $custom_paged == $max ? 'active' : '';
		printf( '<li><button type="button" data-paged="' . $max . '"  class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500">%s</button></li>' . "\n", $class, $max );
	}

	/** Next Post Link */
	if ( $custom_paged < $max ) {
		$custom_paged_next = $custom_paged + 1;
		printf( '<li><button type="button" data-paged=' . $custom_paged_next . ' class="next flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded text-gray-500 bg-white  hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" >' . svg( 'angle-right' ) . '</button></li>' . "\n", );
	}
	?>
	</ul>
	<?php
}

/**
 * Displays pagination api style by number page
 */
function bsc_pagination_api( $max_num_pages = 1, $url_tax ) {
	$endpoint = '';
	if ( isset( $_GET['key'] ) ) {
		$endpoint .= '&key=' . bsc_format_string( $_GET['key'], 'all' );
	}
	if ( isset( $_GET['mck'] ) ) {
		$endpoint .= '&mck=' . bsc_format_string( $_GET['mck'] );
	}
	if ( isset( $_GET['years'] ) ) {
		$endpoint .= '&years=' . bsc_format_string( $_GET['years'], 'number' );
	}
	if ( isset( $_GET['s'] ) ) {
		$endpoint .= '&s=' . bsc_format_string( $_GET['s'], 'all' );
	}
	if ( isset( $_GET['posts_to_show'] ) ) {
		$endpoint .= '&posts_to_show=' . bsc_format_string( $_GET['posts_to_show'], 'number' );
	}
	if ( isset( $_GET['type_search'] ) ) {
		$endpoint .= '&type_search=' . bsc_format_string( $_GET['type_search'], 'all' );
	}
	if ( isset( $_GET['post_page'] ) ) {
		$paged = bsc_format_string( $_GET['post_page'], 'number' );
	} else {
		$paged = 1;
	}
	if ( $max_num_pages <= 1 ) {
		return; // Dừng nếu chỉ có 1 trang
	}
	$max = intval( $max_num_pages );

	/** Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="flex items-center gap-[11px] h-9 text-base">' . "\n";

	/** Previous Post Link */
	if ( $paged > 1 ) {
		$page_prev = $paged - 1;
		$url_prev = $url_tax . '?post_page=' . $page_prev . $endpoint;
		printf( '<li><a class="prev flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded bg-white  hover:bg-primary-300 hover:text-white transition-all duration-500" href="' . $url_prev . '">' . svg( 'angle-left' ) . '</a></li>' . "\n", );
	}
	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		if ( is_search() ) {
			printf( '<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, $url_tax . '?post_page=1' . $endpoint, '1' );
		} else {
			printf( '<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, $url_tax . $endpoint, '1' );
		}
		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' active' : '';
		printf( '<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, $url_tax . '?post_page=' . $link . $endpoint, $link );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? 'active' : '';
		printf( '<li><a class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" href="%s">%s</a></li>' . "\n", $class, $url_tax . '?post_page=' . $max . $endpoint, $max );
	}

	/** Next Post Link */
	if ( $paged < $max ) {
		$page_next = $paged + 1;
		$url_next = $url_tax . '?post_page=' . $page_next . $endpoint;
		printf( '<li><a class="next flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded bg-white  hover:bg-primary-300 hover:text-white transition-all duration-500" href="' . $url_next . '">' . svg( 'angle-right' ) . '</a></li>' . "\n", );
	}
	?>
	</ul>
	<?php
}

/**
 * Displays pagination api style by number page
 */
function bsc_pagination_api_ajax( $max_num_pages = 1, $custom_paged = 1 ) {
	if ( $custom_paged ) {
		$paged = $custom_paged;
	} else {
		$paged = 1;
	}
	if ( $max_num_pages <= 1 ) {
		return; // Dừng nếu chỉ có 1 trang
	}
	$max = intval( $max_num_pages );

	/** Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="flex items-center gap-[11px] h-9 text-base bsc_pagination_api_ajax">' . "\n";

	/** Previous Post Link */
	if ( $paged > 1 ) {
		$page_prev = $paged - 1;
		$url_prev = $page_prev;
		printf( '<li><button type="button" class="prev flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded bg-white  hover:bg-primary-300 hover:text-white transition-all duration-500" data-page="' . $url_prev . '">' . svg( 'angle-left' ) . '</a></li>' . "\n", );
	}
	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		if ( is_search() ) {
			printf( '<li><button type="button" class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" data-page="%s">%s</button></li>' . "\n", $class, '1', '1' );
		} else {
			printf( '<li><button type="button" class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" data-page="%s">%s</button></li>' . "\n", $class, '1', '1' );
		}
		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' active' : '';
		printf( '<li><button type="button" class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" data-page="%s">%s</button></li>' . "\n", $class, $link, $link );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? 'active' : '';
		printf( '<li><button type="button" class="%s item-paged flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" data-page="%s">%s</button></li>' . "\n", $class, $max, $max );
	}

	/** Next Post Link */
	if ( $paged < $max ) {
		$page_next = $paged + 1;
		$url_next = $page_next;
		printf( '<li><button type="button" class="next flex items-center justify-center px-2 min-w-9 h-9 leading-tight rounded bg-white  hover:bg-primary-300 hover:text-white transition-all duration-500" data-page="' . $url_next . '">' . svg( 'angle-right' ) . '</button></li>' . "\n", );
	}
	?>
	</ul>
	<?php
}

/**
 * Displays exceprt by number string
 * How to use: echo excerpt(x) width x is number length
 */
function excerpt( $limit ) {
	$excerpt = explode( ' ', get_the_excerpt(), $limit );

	if ( count( $excerpt ) >= $limit ) {
		array_pop( $excerpt );
		$excerpt = implode( " ", $excerpt ) . '...';
	} else {
		$excerpt = implode( " ", $excerpt );
	}

	$excerpt = preg_replace( '`\[[^\]]*\]`', '', $excerpt );

	return strip_tags( $excerpt );
}

function bsc_get_text_excerpt( $html, $max_length ) {
	// Loại bỏ tất cả thẻ HTML
	$plain_text = strip_tags( $html );
	// Cắt chuỗi xuống đúng 100 ký tự
	if ( mb_strlen( $plain_text ) > $max_length ) {
		$plain_text = mb_substr( $plain_text, 0, $max_length ) . '...';
	}
	return $plain_text;
}
/**
 * Check Link
 * If not return javascript:void(0)
 */

function check_link( $value ) {
	if ( $value ) {
		return $value;
	} else {
		return 'javascript:void(0)';
	}
}

/**
 * Custom Flag
 */
function add_custom_class_to_current_lang( $args ) {
	// Bắt đầu lưu output vào buffer
	ob_start();
	$co_phieu_id = get_query_var( 'co_phieu_id' );
	if ( $co_phieu_id ) {
		$languages = pll_languages_list( 'slug' );

		if ( $languages ) {
			foreach ( $languages as $lang ) {
				// Lấy term của ngôn ngữ dựa trên slug
				$term = get_term_by( 'slug', $lang, 'language' );

				// Phòng khi không tìm được term, ta kiểm tra trước
				if ( ! $term ) {
					continue;
				}

				// Lấy tên ngôn ngữ
				$lang_name = $term->name;

				// Kiểm tra ngôn ngữ hiện tại để gán class "current-lang"
				$lang_current_class = ( $lang === pll_current_language() ) ? 'current-lang' : '';
				$sub_url_translated = pll_translate_string( 'cong-ty/tong-quan', $lang );
				$url = trailingslashit( pll_home_url( $lang ) ) . $sub_url_translated;

				// 6) Nếu bạn muốn thêm $co_phieu_id phía sau
				$url = trailingslashit( $url ) . $co_phieu_id;
				?>

				<li class="lang-item lang-item-<?php echo esc_attr( $lang ); ?> <?php echo esc_attr( $lang_current_class ); ?>">
					<a class="block rounded-md px-4 py-2 hover:bg-primary-300 hover:text-white transition-all duration-500"
						lang="<?php echo esc_attr( $lang ); ?>" hreflang="<?php echo esc_attr( $lang ); ?>" href="<?php echo $url ?>">
						<?php echo esc_html( $lang_name ); ?>
					</a>
				</li>

				<?php
			}
		}
	} elseif ( get_query_var( 'mck_bctc' ) ) {
		$languages = pll_languages_list( 'slug' );

		if ( $languages ) {
			foreach ( $languages as $lang ) {
				// Lấy term của ngôn ngữ dựa trên slug
				$term = get_term_by( 'slug', $lang, 'language' );

				// Phòng khi không tìm được term, ta kiểm tra trước
				if ( ! $term ) {
					continue;
				}

				// Lấy tên ngôn ngữ
				$lang_name = $term->name;

				// Kiểm tra ngôn ngữ hiện tại để gán class "current-lang"
				$lang_current_class = ( $lang === pll_current_language() ) ? 'current-lang' : '';
				$cdc7_page_bao_cao_tai_chinh = 1883;
				$post_id_lang = pll_get_post( $cdc7_page_bao_cao_tai_chinh, $lang );
				$sub_url_translated = get_post_field( 'post_name', $post_id_lang );
				$url = trailingslashit( pll_home_url( $lang ) ) . $sub_url_translated;

				// 6) Nếu bạn muốn thêm $co_phieu_id phía sau
				$url = trailingslashit( $url ) . get_query_var( 'mck_bctc' );
				?>

				<li class="lang-item lang-item-<?php echo esc_attr( $lang ); ?> <?php echo esc_attr( $lang_current_class ); ?>">
					<a class="block rounded-md px-4 py-2 hover:bg-primary-300 hover:text-white transition-all duration-500"
						lang="<?php echo esc_attr( $lang ); ?>" hreflang="<?php echo esc_attr( $lang ); ?>" href="<?php echo $url ?>">
						<?php echo esc_html( $lang_name ); ?>
					</a>
				</li>

				<?php
			}
		}
	} else {
		pll_the_languages( $args );
		$languages_html = ob_get_clean();

		// Thêm class 'abc' vào thẻ <li> có class 'current-lang'
		$languages_html = str_replace( '<a', '<a class="block rounded-md px-4 py-2 hover:bg-primary-300 hover:text-white transition-all duration-500" ', $languages_html );
		// Trả lại HTML đã chỉnh sửa
		echo $languages_html;
	}
}

/**
 * Generate Random String
 */
function generateRandomString( $length = 10 ) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen( $characters );
	$randomString = '';

	for ( $i = 0; $i < $length; $i++ ) {
		$randomString .= $characters[ random_int( 0, $charactersLength - 1 ) ];
	}

	return $randomString;
}

/**
 * Check Mobile
 */
function bsc_is_mobile() {
	if ( ! wp_is_mobile() ) {
		return false;
	}
	return true;
}

/**
 * Create dots
 */
function bsc_dot_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'title' => '',
		),
		$atts,
		'bsc-dot'
	);
	if ( ! empty( $atts['title'] ) ) {
		return '<p><strong class="has-dot before:w-2 before:h-2 before:inline-block before:bg-primary-300 before:rounded-[2px] inline-flex items-center gap-2">' . esc_html( $atts['title'] ) . '</strong></p>';
	} else {
		return '';
	}
}

add_shortcode( 'bsc-dot', 'bsc_dot_shortcode' );

/**
 * Check iOS
 */
function bsc_is_ios() {
	// Lấy chuỗi User-Agent từ header của request
	$userAgent = $_SERVER['HTTP_USER_AGENT'];

	// Kiểm tra nếu chuỗi User-Agent chứa iPhone hoặc iPad (thiết bị iOS)
	if ( strpos( $userAgent, 'iPhone' ) !== false || strpos( $userAgent, 'iPad' ) !== false || strpos( $userAgent, 'iPod' ) !== false || ( strpos( $userAgent, 'Macintosh' ) !== false ) ) {
		return true; // Là thiết bị iOS
	}
	return false; // Không phải thiết bị iOS
}

/**
 * Create function format number	
 */
function bsc_number_format( $input, $format = true, $int = false, $thap_phan = 2 ) {
	// Kiểm tra nếu input là số hợp lệ
	if ( is_numeric( $input ) && is_finite( $input ) ) {
		// Ép kiểu về số float
		$num = (float) $input;

		// Kiểm tra nếu có phần thập phân
		if ( floor( $num ) == $num ) {
			// Nếu không có phần thập phân (số nguyên)
			return number_format( $num, 0, '.', ',' );
		} else {
			if ( ! $int ) {
				if ( ! $format ) {
					return number_format( $num, $thap_phan, '.', ',' );
				} else {
					// Nếu có phần thập phân, loại bỏ các số 0 dư thừa cuối cùng
					return rtrim( number_format( $num, $thap_phan, '.', ',' ), '0' );
				}
			} else {
				return number_format( $num, 0, '.', ',' );
			}
		}
	} else {
		return '-';
	}
}

function bsc_number_format_not_include_tp( $number ) {
	// Tách phần nguyên và phần thập phân
	$parts = explode( '.', (string) $number );

	// Định dạng phần nguyên với dấu phân cách hàng nghìn
	$integer_part = number_format( (int) $parts[0] );

	// Nếu có phần thập phân, giữ nguyên
	if ( isset( $parts[1] ) ) {
		return $integer_part . '.' . $parts[1];
	}

	return $integer_part;
}

/**
 * Function format string
 */
function bsc_format_string( $data, $style = 'text' ) {
	// Lọc đầu vào trước khi xử lý
	$data = sanitize_text_field( $data );

	// Kiểm tra kiểu định dạng
	if ( $style === 'number' ) {
		// Chỉ giữ lại số và ép kiểu về int
		return (int) preg_replace( '/[^0-9]/', '', $data );
	} elseif ( $style === 'text' ) {
		// Chỉ giữ lại số và chữ cái
		return esc_html( preg_replace( '/[^a-zA-Z0-9]/', '', $data ) );
	} elseif ( $style === 'all' ) {
		// Chỉ giữ lại số và chữ cái
		return esc_html( $data );
	}

	// Trường hợp không hợp lệ, trả về 0 (tránh lỗi)
	return 0;
}

function shorten_url( $url, $max_length = 20 ) {
	// Tách URL thành các phần
	$parsed_url = parse_url( $url );

	// Lấy phần path (đường dẫn file)
	$path = $parsed_url['path'];

	// Lấy tên file từ đường dẫn
	$filename = basename( $path );

	// Tách phần mở rộng file (nếu có)
	$ext = pathinfo( $filename, PATHINFO_EXTENSION ); // Lấy phần mở rộng (ví dụ: pdf, docx)
	$name = pathinfo( $filename, PATHINFO_FILENAME ); // Lấy phần tên file (không có đuôi)

	// Nếu tên file quá dài, rút gọn nó
	if ( strlen( $name ) > $max_length ) {
		$name = substr( $name, 0, $max_length ) . '...';
	}

	return $name . '.' . $ext; // Ghép lại với phần mở rộng
}