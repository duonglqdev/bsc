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
