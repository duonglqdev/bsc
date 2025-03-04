<?php
add_filter( 'wpcf7_form_elements', 'bsccustom_wpcf7_form_elements' );
function bsccustom_wpcf7_form_elements( $form ) {
	$form = do_shortcode( $form );
	return $form;
}

function create_shortcode_email_admin() {
	ob_start();
	$email = get_sub_field( 'email' ) ?: get_field( 'email' );
	if ( $email ) {
		?>
		<div class="hidden">
			<input value="<?php echo $email; ?>" type="email" name="email-admin">
		</div>
		<?php
	}
	$list_post = ob_get_contents();


	ob_end_clean();


	return $list_post;
}
add_shortcode( 'email_admin', 'create_shortcode_email_admin' );

function create_shortcode_bscc_email_tuyen_dung() {
	ob_start();
	if ( is_singular( 'tuyen-dung' ) ) {
		global $posts;
		$noi_lam_viec = get_the_terms( $post->ID, 'noi-lam-viec' );
		$email = get_field( 'email_tuyen_dung', $noi_lam_viec[0] );
		if ( $email ) {
			?>
			<div class="hidden">
				<input value="<?php echo $email; ?>" type="email" name="bsc_email_tuyen_dung">
			</div>
			<?php
		}
	}
	$current_url = urlencode( home_url( $_SERVER['REQUEST_URI'] ) );
	?>
	<input value="<?php echo $current_url ?>" type="text" name="current_url">
	<?php
	$list_post = ob_get_contents();


	ob_end_clean();


	return $list_post;
}
add_shortcode( 'bsc_email_tuyen_dung', 'create_shortcode_bscc_email_tuyen_dung' );

/**
 * Translate text CF7
 */
add_filter( 'wpcf7_form_elements', function ($form) {
	// Tìm placeholder trong định dạng {Your Text}
	$pattern = '/\{([^\}]+)\}/';
	$form = preg_replace_callback( $pattern, function ($matches) {
		$text = $matches[1]; // Lấy nội dung trong { }
		// Đăng ký chuỗi dịch động
		do_action( 'wpml_register_single_string', 'Contact Form 7', $text, $text );

		// Dịch chuỗi
		return esc_attr( function_exists( 'pll__' ) ? pll__( $text ) : __( $text, 'bsc' ) );
	}, $form );

	return $form;
} );


/**
 * Shortcode Button Submit
 */
function create_shortcode_button_submit_cf7() {
	ob_start();
	if ( get_sub_field( 'button_submit' ) ) {
		$title = get_sub_field( 'button_submit' );
	} else {
		$title = __( 'Tư vấn ngay', 'bsc' );
	}
	echo $title;
	$list_post = ob_get_contents();


	ob_end_clean();


	return $list_post;
}
add_shortcode( 'button_submit_cf7', 'create_shortcode_button_submit_cf7' );
