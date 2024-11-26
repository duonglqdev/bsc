<?php
add_filter('wpcf7_form_elements', 'bsccustom_wpcf7_form_elements');
function bsccustom_wpcf7_form_elements($form)
{
    $form = do_shortcode($form);
    return $form;
}

function create_shortcode_email_admin()
{
    ob_start();
    if (get_sub_field('email')) {
        $email = get_sub_field('email');
    } elseif (get_field('email')) {
        $email = get_field('email');
    }
    if ($email) {
?>
        <div class="hidden">
            <input value="<?php echo $email; ?>" type="email" name="email-admin"></span>
        </div>
<?php
    }
    $list_post = ob_get_contents();


    ob_end_clean();


    return $list_post;
}
add_shortcode('email_admin', 'create_shortcode_email_admin');

/**
 * Translate text CF7
 */
add_filter('wpcf7_form_elements', function ($form) {
    // Tìm placeholder trong định dạng {Your Text}
    $pattern = '/\{([^\}]+)\}/';
    $form = preg_replace_callback($pattern, function ($matches) {
        $text = $matches[1]; // Lấy nội dung trong { }
        // Đăng ký chuỗi dịch động
        do_action('wpml_register_single_string', 'Contact Form 7', $text, $text);

        // Dịch chuỗi
        return esc_attr(function_exists('pll__') ? pll__($text) : __($text, 'bsc'));
    }, $form);

    return $form;
});
