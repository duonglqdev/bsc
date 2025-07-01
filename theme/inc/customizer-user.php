<?php
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
	if ( current_user_can( 'ppr_mkt' ) ) {
		remove_menu_page( 'tools.php' );
	}
}

add_action( 'admin_head', function () {

	if ( current_user_can( 'ppr_mkt' ) ) {
		global $pagenow;
		if ( ( isset( $_GET['page'] ) && $_GET['page'] === 'cai-dat-api' ) || ( $pagenow === 'themes.php' ) ) {

			// Kiểm tra nếu user không phải admin (hoặc không đủ quyền)
			wp_die( 'Bạn không có quyền truy cập trang này.', 'Truy cập bị từ chối', array( 'response' => 403 ) );
		}
		?>
		<style>
			/* Ví dụ: ẩn ACF Option Page cụ thể */
			#adminmenu #menu-appearance :is(li:nth-child(6), li:nth-child(2)) {
				display: none !important;
			}
		</style>
	<?php }
} );

add_action( 'pre_get_posts', function ($query) {
	$khu_vuc_quan_ly = get_field( 'khu_vuc_quan_ly', 'user_' . get_current_user_id() );
	if ( is_admin() && $query->is_main_query() && current_user_can( 'phcns_hs' ) && ( $query->get( 'post_type' ) === 'tuyen-dung' ) && $khu_vuc_quan_ly ) {

		$query->set( 'tax_query', array(
			array(
				'taxonomy' => 'noi-lam-viec',
				'field' => 'term_id',
				'terms' => $khu_vuc_quan_ly,
			),
		) );
	}
} );

add_action( 'save_post_tuyen-dung', function ($post_id) {

	// Chỉ áp dụng với user có role
	if ( ! current_user_can( 'phcns_hs' ) ) {
		return;
	}

	// Lấy khu vực quản lý của user
	$allowed_term = get_field( 'khu_vuc_quan_ly', 'user_' . get_current_user_id() );
	if ( empty( $allowed_term ) ) {
		return;
	}

	// Ép về mảng integer
	$allowed_term = array_map( 'intval', (array) $allowed_term );

	// Lấy terms mà user submit lên khi lưu bài
	$submitted_terms = isset( $_POST['tax_input']['noi-lam-viec'] ) ? $_POST['tax_input']['noi-lam-viec'] : [];
	$submitted_terms = array_filter( array_map( 'intval', (array) $submitted_terms ) );

	// So sánh terms hợp lệ
	$invalid_terms = array_diff( $submitted_terms, $allowed_term );

	if ( ! empty( $invalid_terms ) ) {
		// Có terms không hợp lệ → sửa lại terms
		wp_set_post_terms( $post_id, $allowed_term, 'noi-lam-viec' );
		update_post_meta( $post_id, '_wrong_location_set', 1 );
	} else {
		delete_post_meta( $post_id, '_wrong_location_set' );
	}
} );

// Hook hiển thị admin notice sau khi lưu bài
add_action( 'admin_notices', function () {
	global $pagenow;

	// Chỉ hiển thị trên trang chỉnh sửa bài
	if ( $pagenow != 'post.php' ) {
		return;
	}

	$post_id = isset( $_GET['post'] ) ? (int) $_GET['post'] : 0;
	if ( ! $post_id ) {
		return;
	}

	if ( get_post_meta( $post_id, '_wrong_location_set', true ) ) {
		?>
		<div class="notice notice-warning is-dismissible">
			<p><strong>Lưu ý:</strong> Bạn chỉ được phép chọn khu vực quản lý được cấp quyền. Hệ thống đã tự động điều chỉnh lại
				về khu vực được phân quyền hợp lệ.</p>
		</div>
		<?php
		// Xóa flag sau khi hiển thị 1 lần
		delete_post_meta( $post_id, '_wrong_location_set' );
	}
} );
