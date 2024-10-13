<?php
add_action('wp_ajax_filter_jobs', 'filter_jobs_ajax');
add_action('wp_ajax_nopriv_filter_jobs', 'filter_jobs_ajax'); // Cho người dùng chưa đăng nhập

function filter_jobs_ajax()
{
    check_ajax_referer('load_jobs', 'security');
    $nghiep_vu = isset($_POST['nghiep_vu']) ? intval($_POST['nghiep_vu']) : '';
    $noi_lam_viec = isset($_POST['noi_lam_viec']) ? intval($_POST['noi_lam_viec']) : '';
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $args = array(
        'post_type' => 'tuyen-dung',
        'posts_per_page' => 6,
        'paged' => $paged,
        'tax_query' => array(
            'relation' => 'AND',
        ),
    );

    if (!empty($nghiep_vu)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'nghiep-vu',
            'field' => 'term_id',
            'terms' => $nghiep_vu,
        );
    }

    if (!empty($noi_lam_viec)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'noi-lam-viec',
            'field' => 'term_id',
            'terms' => $noi_lam_viec,
        );
    }

    $filter_job = new WP_Query($args);

    if ($filter_job->have_posts()) :
        while ($filter_job->have_posts()) : $filter_job->the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;
?>
        <div class="bsc-pagination mt-12 flex justify-center">
            <?php bsc_pagination($filter_job, $paged) ?>
        </div>

        <script>
            jQuery(document).ready(function($) {
                function load_jobs(page = 1) {
                    ajaxurl = '<?php echo admin_url("admin-ajax.php") ?>';
                    var nghiep_vu = $('#nghiep_vu').val();
                    var noi_lam_viec = $('#noi_lam_viec').val();
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'filter_jobs',
                            nghiep_vu: nghiep_vu,
                            noi_lam_viec: noi_lam_viec,
                            paged: page,
                            security: '<?php echo wp_create_nonce('load_jobs') ?>',
                        },
                        beforeSend: function() {
                            $('#vi-tri-tuyen-dung').html('');
                            $('#tuyen-dung-loading').removeClass('hidden');
                        },
                        success: function(response) {
                            $('#tuyen-dung-loading').addClass('hidden');
                            $('#vi-tri-tuyen-dung').html(response);
                        }
                    });
                }
                $('#vi-tri-tuyen-dung .bsc-pagination a').add('#tuyen-dung-tim-kiem').on('click', function(e) {
                    e.preventDefault();
                    var page = parseInt($('#vi-tri-tuyen-dung').attr('data-paged'));
                    if ($(this).hasClass('item-paged')) {
                        page = parseInt($(this).text());
                    } else if ($(this).hasClass('prev')) {
                        page = page - 1;
                    } else if ($(this).hasClass('next')) {
                        page = page + 1;
                    } else if ($(this).is('button')) {
                        page = 1;
                    }
                    $('#vi-tri-tuyen-dung').attr('data-paged', page);
                    load_jobs(page);
                });
            });
        </script>
<?php
    else :
        echo '<p>' . __('Không có công việc nào phù hợp', 'bsc') . '</p>';
    endif;

    wp_reset_postdata();

    die();
}
