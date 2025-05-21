<?php
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
	if ( current_user_can( 'ppr_mkt' ) ) {
		remove_menu_page( 'tools.php' );
	}
}

add_action( 'admin_head', function () {

	if ( current_user_can( 'ppr_mkt' ) ) {
		if ( isset( $_GET['page'] ) && $_GET['page'] === 'cai-dat-api' ) {

			// Kiểm tra nếu user không phải admin (hoặc không đủ quyền)
			wp_die( 'Bạn không có quyền truy cập trang này.', 'Truy cập bị từ chối', array( 'response' => 403 ) );
		}
		?>
		<style>
			/* Ví dụ: ẩn ACF Option Page cụ thể */
			#adminmenu #menu-appearance li:nth-child(6) {
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
