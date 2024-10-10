<?php
add_action('wp_ajax_filter_jobs', 'filter_jobs_ajax');
add_action('wp_ajax_nopriv_filter_jobs', 'filter_jobs_ajax'); // Cho người dùng chưa đăng nhập

function filter_jobs_ajax()
{
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

    $jobs_query = new WP_Query($args);

    if ($jobs_query->have_posts()) :
        echo '<div class="job-listings">';
        while ($jobs_query->have_posts()) : $jobs_query->the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;
        echo '</div>';

        // Phân trang
        echo '<div class="bsc-pagination">';
        for ($i = 1; $i <= $jobs_query->max_num_pages; $i++) {
            echo '<a href="#" data-page="' . $i . '">' . $i . '</a>';
        }
        echo '</div>';

    else :
        echo '<p>' . __('No jobs found', 'bsc') . '</p>';
    endif;

    wp_reset_postdata();

    die(); // Kết thúc AJAX
}
