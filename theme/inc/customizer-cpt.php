<?php
/*
 * Loại bỏ /danh-muc-bao-cao/ ở đường dẫn
 * Thay /danh-muc-bao-cao/ slug hiện tại của bạn. Mặc định là /danh-muc-bao-cao/
 */
add_filter( 'term_link', 'bsc_cat_permalink', 10, 3 );
function bsc_cat_permalink( $url, $term, $taxonomy ) {
	if ( $taxonomy === 'danh-muc-bao-cao' ) {
		$taxonomy_slug = 'danh-muc-bao-cao'; // Thay bằng slug hiện tại của bạn
		$url = str_replace( '/' . $taxonomy_slug, '', $url );
	}
	return $url;
}

// Thêm quy tắc rewrite cho quan-he-co-dong category
function bsc_category_rewrite_rules( $flush = false ) {
	$languages = pll_languages_list( 'slug' );
	foreach ( $languages as $lang ) {
		$terms = get_terms( array(
			'taxonomy' => 'danh-muc-bao-cao',
			'post_type' => 'quan-he-co-dong',
			'hide_empty' => false,
			'lang' => $lang
		) );

		if ( ! is_wp_error( $terms ) ) {
			$siteurl = esc_url( home_url( '/' ) );
			$i = 0;
			foreach ( $terms as $term ) {
				$i++;
				$term_slug = $term->slug;
				$baseterm = str_replace( $siteurl, '', get_term_link( $term->term_id, 'danh-muc-bao-cao' ) );
				add_rewrite_rule( $baseterm . '?$', 'index.php?danh-muc-bao-cao=' . $term_slug, 'top' );
				add_rewrite_rule( $baseterm . 'page/([0-9]{1,})/?$', 'index.php?danh-muc-bao-cao=' . $term_slug . '&paged=$matches[1]', 'top' );
				add_rewrite_rule( $baseterm . '(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?danh-muc-bao-cao=' . $term_slug . '&feed=$matches[1]', 'top' );
			}
		}
	}
	if ( $flush ) {
		flush_rewrite_rules( false );
	}
}
add_action( 'init', 'bsc_category_rewrite_rules' );

// Tự động cập nhật rewrite rules khi tạo mới taxonomy
add_action( 'create_term', 'bsc_new_report_cat_edit_success', 10, 2 );
function bsc_new_report_cat_edit_success( $term_id, $taxonomy ) {
	if ( $taxonomy === 'danh-muc-bao-cao' ) {
		bsc_category_rewrite_rules( true );
	}
}


/**
 * /Bỏ slug /tuyen-dung/ hoặc các slug khác trong đường dẫn tuyển dụng
 */
function nsc_remove_slug( $post_link, $post ) {
	if ( get_post_type( $post ) === 'tuyen-dung' && $post->post_status === 'publish' ) {
		$post_link = str_replace( '/tuyen-dung/', '/', $post_link ); // Thay 'tuyen-dung' bằng slug hiện tại của bạn
	}
	return $post_link;
}
add_filter( 'post_type_link', 'nsc_remove_slug', 10, 2 );

// Thêm rewrite rule để tránh lỗi 404 sau khi xóa slug tuyen-dung
function nsc_tuyen_dung_rewrite_rules( $flush = false ) {
	$tuyendungs = get_posts( array(
		'post_type' => 'tuyen-dung',
		'post_status' => 'publish',
		'numberposts' => -1,
		'fields' => 'ids'
	) );

	foreach ( $tuyendungs as $tuyen_dung_id ) {
		$base_tuyen_dung = str_replace( home_url( '/' ), '', get_permalink( $tuyen_dung_id ) );
		add_rewrite_rule( "{$base_tuyen_dung}?$", "index.php?tuyen-dung=" . get_post_field( 'post_name', $tuyen_dung_id ), 'top' );
	}

	if ( $flush ) {
		flush_rewrite_rules( false );
	}
}
add_action( 'init', 'nsc_tuyen_dung_rewrite_rules' );

// Cập nhật rewrite rule khi tuyển dụng mới được tạo
function nsc_woo_new_tuyen_dung_post_save( $post_id ) {
	if ( get_post_type( $post_id ) === 'tuyen-dung' ) {
		nsc_tuyen_dung_rewrite_rules( true );
	}
}
add_action( 'wp_insert_post', 'nsc_woo_new_tuyen_dung_post_save' );


/**
 * Bỏ slug /so-tay-giao-dich/ hoặc các slug khác trong đường dẫn tuyển dụng
 */
function so_tay_giao_dich_remove_slug( $post_link, $post ) {
	if ( get_post_type( $post ) === 'so-tay-giao-dich' && $post->post_status === 'publish' ) {
		$post_link = str_replace( '/so-tay-giao-dich/', '/', $post_link ); // Thay 'so-tay-giao-dich' bằng slug hiện tại của bạn
	}
	return $post_link;
}
add_filter( 'post_type_link', 'so_tay_giao_dich_remove_slug', 10, 2 );

// Thêm rewrite rule để tránh lỗi 404 sau khi xóa slug so-tay-giao-dich
function so_tay_giao_dich_tuyen_dung_rewrite_rules( $flush = false ) {
	$tuyendungs = get_posts( array(
		'post_type' => 'so-tay-giao-dich',
		'post_status' => 'publish',
		'numberposts' => -1,
		'fields' => 'ids'
	) );

	foreach ( $tuyendungs as $tuyen_dung_id ) {
		$base_tuyen_dung = str_replace( home_url( '/' ), '', get_permalink( $tuyen_dung_id ) );
		add_rewrite_rule( "{$base_tuyen_dung}?$", "index.php?so-tay-giao-dich=" . get_post_field( 'post_name', $tuyen_dung_id ), 'top' );
	}

	if ( $flush ) {
		flush_rewrite_rules( false );
	}
}
add_action( 'init', 'so_tay_giao_dich_tuyen_dung_rewrite_rules' );

// Cập nhật rewrite rule khi tuyển dụng mới được tạo
function so_tay_giao_dich_woo_new_tuyen_dung_post_save( $post_id ) {
	if ( get_post_type( $post_id ) === 'so-tay-giao-dich' ) {
		so_tay_giao_dich_tuyen_dung_rewrite_rules( true );
	}
}
add_action( 'wp_insert_post', 'so_tay_giao_dich_woo_new_tuyen_dung_post_save' );

/**
 * Bỏ slug /bieu-phi-giao-dich/ hoặc các slug khác trong đường dẫn tuyển dụng
 */
function bieu_phi_giao_dich_remove_slug( $post_link, $post ) {
	if ( get_post_type( $post ) === 'bieu-phi-giao-dich' && $post->post_status === 'publish' ) {
		$post_link = str_replace( '/bieu-phi-giao-dich/', '/', $post_link ); // Thay 'bieu-phi-giao-dich' bằng slug hiện tại của bạn
	}
	return $post_link;
}
add_filter( 'post_type_link', 'bieu_phi_giao_dich_remove_slug', 10, 2 );

// Thêm rewrite rule để tránh lỗi 404 sau khi xóa slug bieu-phi-giao-dich
function bieu_phi_giao_dich_tuyen_dung_rewrite_rules( $flush = false ) {
	$tuyendungs = get_posts( array(
		'post_type' => 'bieu-phi-giao-dich',
		'post_status' => 'publish',
		'numberposts' => -1,
		'fields' => 'ids'
	) );

	foreach ( $tuyendungs as $tuyen_dung_id ) {
		$base_tuyen_dung = str_replace( home_url( '/' ), '', get_permalink( $tuyen_dung_id ) );
		add_rewrite_rule( "{$base_tuyen_dung}?$", "index.php?bieu-phi-giao-dich=" . get_post_field( 'post_name', $tuyen_dung_id ), 'top' );
	}

	if ( $flush ) {
		flush_rewrite_rules( false );
	}
}
add_action( 'init', 'bieu_phi_giao_dich_tuyen_dung_rewrite_rules' );

// Cập nhật rewrite rule khi tuyển dụng mới được tạo
function bieu_phi_giao_dich_woo_new_tuyen_dung_post_save( $post_id ) {
	if ( get_post_type( $post_id ) === 'bieu-phi-giao-dich' ) {
		bieu_phi_giao_dich_tuyen_dung_rewrite_rules( true );
	}
}
add_action( 'wp_insert_post', 'bieu_phi_giao_dich_woo_new_tuyen_dung_post_save' );


/*
 * Loại bỏ /danh-muc-kien-thuc/ ở đường dẫn
 * Thay /danh-muc-kien-thuc/ slug hiện tại của bạn. Mặc định là /danh-muc-kien-thuc/
 */
add_filter( 'term_link', 'bsc_danh_muc_kien_thuc_permalink', 10, 3 );
function bsc_danh_muc_kien_thuc_permalink( $url, $term, $taxonomy ) {
	if ( $taxonomy === 'danh-muc-kien-thuc' ) {
		$taxonomy_slug = 'danh-muc-kien-thuc'; // Thay bằng slug hiện tại của bạn
		$url = str_replace( '/' . $taxonomy_slug, '', $url );
	}
	return $url;
}

// Thêm quy tắc rewrite cho kien-thuc-dau-tu category
function bsc_danh_muc_kien_thucegory_rewrite_rules( $flush = false ) {
	$languages = pll_languages_list( 'slug' );
	foreach ( $languages as $lang ) {
		$terms = get_terms( array(
			'taxonomy' => 'danh-muc-kien-thuc',
			'post_type' => 'kien-thuc-dau-tu',
			'hide_empty' => false,
			'lang' => $lang
		) );

		if ( ! is_wp_error( $terms ) ) {
			$siteurl = esc_url( home_url( '/' ) );
			foreach ( $terms as $term ) {
				$term_slug = $term->slug;
				$baseterm = str_replace( $siteurl, '', get_term_link( $term->term_id, 'danh-muc-kien-thuc' ) );
				add_rewrite_rule( $baseterm . '?$', 'index.php?danh-muc-kien-thuc=' . $term_slug, 'top' );
				add_rewrite_rule( $baseterm . 'page/([0-9]{1,})/?$', 'index.php?danh-muc-kien-thuc=' . $term_slug . '&paged=$matches[1]', 'top' );
				add_rewrite_rule( $baseterm . '(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?danh-muc-kien-thuc=' . $term_slug . '&feed=$matches[1]', 'top' );
			}
		}
	}
	if ( $flush ) {
		flush_rewrite_rules( false );
	}
}
add_action( 'init', 'bsc_danh_muc_kien_thucegory_rewrite_rules' );

// Tự động cập nhật rewrite rules khi tạo mới taxonomy
add_action( 'create_term', 'bsc_danh_muc_kien_thuc_cat_edit_success', 10, 2 );
function bsc_danh_muc_kien_thuc_cat_edit_success( $term_id, $taxonomy ) {
	if ( $taxonomy === 'danh-muc-kien-thuc' ) {
		bsc_danh_muc_kien_thucegory_rewrite_rules( true );
	}
}

/*
 * Loại bỏ /danh-muc-bao-cao-phan-tich/ ở đường dẫn
 * Thay /danh-muc-bao-cao-phan-tich/ slug hiện tại của bạn. Mặc định là /danh-muc-bao-cao-phan-tich/
 */
add_filter( 'term_link', 'bsc_danh_muc_bao_cao_phan_tich_permalink', 10, 3 );
function bsc_danh_muc_bao_cao_phan_tich_permalink( $url, $term, $taxonomy ) {
	if ( $taxonomy === 'danh-muc-bao-cao-phan-tich' ) {
		$taxonomy_slug = 'danh-muc-bao-cao-phan-tich'; // Thay bằng slug hiện tại của bạn
		$url = str_replace( '/' . $taxonomy_slug, '', $url );
	}
	return $url;
}

// Thêm quy tắc rewrite cho bao-cao-phan-tich category
function bsc_danh_muc_bao_cao_phan_tichegory_rewrite_rules( $flush = false ) {
	$languages = pll_languages_list( 'slug' );
	foreach ( $languages as $lang ) {
		$terms = get_terms( array(
			'taxonomy' => 'danh-muc-bao-cao-phan-tich',
			'hide_empty' => false,
			'lang' => $lang
		) );

		if ( ! is_wp_error( $terms ) ) {
			$siteurl = esc_url( home_url( '/' ) );
			foreach ( $terms as $term ) {
				$term_slug = $term->slug;
				$baseterm = str_replace( $siteurl, '', get_term_link( $term->term_id, 'danh-muc-bao-cao-phan-tich' ) );
				add_rewrite_rule( $baseterm . '?$', 'index.php?danh-muc-bao-cao-phan-tich=' . $term_slug, 'top' );
				add_rewrite_rule( $baseterm . 'page/([0-9]{1,})/?$', 'index.php?danh-muc-bao-cao-phan-tich=' . $term_slug . '&paged=$matches[1]', 'top' );
				add_rewrite_rule( $baseterm . '(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?danh-muc-bao-cao-phan-tich=' . $term_slug . '&feed=$matches[1]', 'top' );
			}
		}
	}
	if ( $flush ) {
		flush_rewrite_rules( false );
	}
}
add_action( 'init', 'bsc_danh_muc_bao_cao_phan_tichegory_rewrite_rules' );

// Tự động cập nhật rewrite rules khi tạo mới taxonomy
add_action( 'create_term', 'bsc_danh_muc_bao_cao_phan_tich_cat_edit_success', 10, 2 );
function bsc_danh_muc_bao_cao_phan_tich_cat_edit_success( $term_id, $taxonomy ) {
	if ( $taxonomy === 'danh-muc-bao-cao-phan-tich' ) {
		bsc_danh_muc_bao_cao_phan_tichegory_rewrite_rules( true );
	}
}


add_action( 'admin_init', function () {
	if ( ! is_admin() || ! isset( $_GET['page'] ) ) {
		return;
	}

	$page = sanitize_text_field( $_GET['page'] );
	$lang = $_GET['lang'] ?? '';

	if ( $lang === 'all' ) {
		return;
	}

	if ( $page === 'cai-dat-api' ) {
		$redirect_url = admin_url( 'admin.php?page=cai-dat-api&lang=all' );
	} else {
		return;
	}

	wp_redirect( $redirect_url );
	exit;
} );