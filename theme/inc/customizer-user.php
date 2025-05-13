<?php
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type()
{
    if (current_user_can('ppr_mkt')) {
        remove_menu_page('tools.php');
    }
}

add_action('admin_head', function () {

    if (current_user_can('ppr_mkt')) {
        if (isset($_GET['page']) && $_GET['page'] === 'cai-dat-api') {

            // Kiểm tra nếu user không phải admin (hoặc không đủ quyền)
            if (! current_user_can('manage_options')) {
                wp_die('Bạn không có quyền truy cập trang này.', 'Truy cập bị từ chối', array('response' => 403));
            }
        }
?>
        <style>
            /* Ví dụ: ẩn ACF Option Page cụ thể */
            #adminmenu #menu-appearance .wp-first-item {
                display: none !important;
            }
        </style>
<?php }
});
