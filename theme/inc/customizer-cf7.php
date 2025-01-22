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
    $email = get_sub_field('email') ?: get_field('email');
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


/**
 * Shortcode Button Submit
 */
function create_shortcode_button_submit_cf7()
{
    ob_start();
    if (get_sub_field('button_submit')) {
        $title = get_sub_field('button_submit');
    } else {
        $title = __('Tư vấn ngay', 'bsc');
    }
    echo $title;
    $list_post = ob_get_contents();


    ob_end_clean();


    return $list_post;
}
add_shortcode('button_submit_cf7', 'create_shortcode_button_submit_cf7');

/**
 * Get Url from [your-file]
 */
/**
 * Hàm chính để upload file vào Media Library và thay mail-tag.
 */
add_action('wpcf7_before_send_mail', 'my_cf7_upload_to_media');
function my_cf7_upload_to_media($contact_form)
{
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) {
        return; // Không có submission
    }

    // Lấy danh sách file upload
    $uploaded_files = $submission->uploaded_files();
    // Tên field phải khớp với form
    $file_field_name = 'your-file';

    // Kiểm tra tồn tại
    if (empty($uploaded_files[$file_field_name])) {
        return;
    }

    $data = $uploaded_files[$file_field_name];
    if (! is_array($data)) {
        $data = [$data];
    }

    $attachment_urls = [];

    foreach ($data as $uploaded_file_path) {
        if (! file_exists($uploaded_file_path)) {
            continue;
        }

        $filetype      = wp_check_filetype(basename($uploaded_file_path), null);
        $wp_upload_dir = wp_upload_dir();

        // Tạo attachment để chèn vào Media
        $attachment = [
            'guid'           => $wp_upload_dir['url'] . '/' . basename($uploaded_file_path),
            'post_mime_type' => $filetype['type'],
            'post_title'     => sanitize_file_name(basename($uploaded_file_path)),
            'post_content'   => '',
            'post_status'    => 'inherit',
        ];

        $attach_id = wp_insert_attachment($attachment, $uploaded_file_path);

        if (! is_wp_error($attach_id)) {
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attach_data = wp_generate_attachment_metadata($attach_id, $uploaded_file_path);
            wp_update_attachment_metadata($attach_id, $attach_data);

            $attachment_url = wp_get_attachment_url($attach_id);
            if ($attachment_url) {
                $attachment_urls[] = $attachment_url;
            }
        }
    }

    // Nếu có URL, thay thế mail-tag trong nội dung
    if (! empty($attachment_urls)) {
        $mail = $contact_form->prop('mail');
        $body = $mail['body'];

        // Tạo chuỗi link (mỗi link 1 dòng)
        $urls_html = array_map(function ($url) {
            return '<a href="' . esc_url($url) . '">' . basename($url) . '</a>';
        }, $attachment_urls);
        $urls_as_string = implode("<br>", $urls_html);

        // Thay thế mail-tag [your-file] bằng danh sách link
        $body = str_replace('[' . $file_field_name . ']', $urls_as_string, $body);

        // Ghi lại
        $mail['body'] = $body;
        $contact_form->set_properties(['mail' => $mail]);

        // Nếu có Mail (2), lặp lại logic trên cho mail_2
        $mail_2 = $contact_form->prop('mail_2');
        if ($mail_2 && ! empty($mail_2['body'])) {
            $body_2 = $mail_2['body'];
            $body_2 = str_replace('[' . $file_field_name . ']', $urls_as_string, $body_2);
            $mail_2['body'] = $body_2;
            $contact_form->set_properties(['mail_2' => $mail_2]);
        }
    }
}
