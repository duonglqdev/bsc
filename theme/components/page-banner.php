<?php
$banner = wp_get_attachment_image_url(
    wp_is_mobile() && bsc_is_mobile() && get_field('cdc1_background_banner_mobile', 'option')
        ? get_field('cdc1_background_banner_mobile', 'option')
        : get_field('cdc1_background_banner', 'option'),
    'full'
);
$style = get_field('cdc1_background_display', 'option') ?: 'default';
if (get_sub_field('background') || get_sub_field('background_mobile')) {
    $banner = wp_get_attachment_image_url(
        wp_is_mobile() && bsc_is_mobile() && get_sub_field('background_mobile')
            ? get_sub_field('background_mobile')
            : get_sub_field('background'),
        'full'
    );
    $style = get_sub_field('display_background') ?: 'default';
} elseif (is_tax() || is_category()) {
    if (get_field('background_banner', get_queried_object()) || get_field('background_banner_mobile', get_queried_object())) {
        $banner = wp_get_attachment_image_url(
            wp_is_mobile() && bsc_is_mobile() && get_field('background_banner_mobile', get_queried_object())
                ? get_field('background_banner_mobile', get_queried_object())
                : get_field('background_banner', get_queried_object()),
            'full'
        );
    }
    $style = get_field('background_banner_display', get_queried_object()) ?: 'default';
} elseif (isset($args['breadcrumb']) && ($args['breadcrumb'] == 'post') || ($args['breadcrumb'] == 'congdong') || ($args['breadcrumb'] == 'kienthuc') || ($args['breadcrumb'] == 'khuyenmai') || ($args['breadcrumb'] == 'baocao') || ($args['breadcrumb'] == 'cophieu') || ($args['breadcrumb'] == 'tagbaocao') || ($args['breadcrumb'] == 'lichthitruong')) {
    $banner = $args['banner'] ?:  get_stylesheet_directory_uri() . '/assets/images/about.png';
    $style = $args['style'];
} elseif (is_singular('tuyen-dung')) {
    if (get_field('cdtd_background_banner', 'option') || get_field('cdtd_background_banner_mobile', 'option')) {
        $banner = wp_get_attachment_image_url(
            wp_is_mobile() && bsc_is_mobile() && get_field('cdtd_background_banner_mobile ', 'option')
                ? get_field('cdtd_background_banner_mobile ', 'option')
                : get_field('cdtd_background_banner ', 'option'),
            'full'
        );
    }
    $style = get_field('cdtd_background_display', 'option') ?: 'default';
} elseif (is_singular('so-tay-giao-dich') || is_singular('video-huong-dan')) {
    if (get_field('cdstgg1_background_banner', 'option') || get_field('cdstgg1_background_banner_mobile', 'option')) {
        $banner = wp_get_attachment_image_url(
            wp_is_mobile() && bsc_is_mobile() && get_field('cdstgg1_background_banner_mobile ', 'option')
                ? get_field('cdstgg1_background_banner_mobile ', 'option')
                : get_field('cdstgg1_background_banner ', 'option'),
            'full'
        );
    }
    $style = get_field('cdstgg1_background_banner_display', 'option') ?: 'default';
} elseif (is_singular('bieu-phi-giao-dich')) {
    if (get_field('cdbdgg1_background_banner', 'option') || get_field('cdbdgg1_background_banner_mobile', 'option')) {
        $banner = wp_get_attachment_image_url(
            wp_is_mobile() && bsc_is_mobile() && get_field('cdbdgg1_background_banner_mobile ', 'option')
                ? get_field('cdbdgg1_background_banner_mobile ', 'option')
                : get_field('cdbdgg1_background_banner ', 'option'),
            'full'
        );
    }
    $style = get_field('cdbdgg1_background_banner_display', 'option') ?: 'default';
} elseif (get_field('cdc1_background_banner', 'option')) {
    $banner = wp_get_attachment_image_url(get_field('cdc1_background_banner', 'option'), 'full');
    $style = get_field('cdc1_background_display', 'option') ?: 'default';
} else {
    $banner = get_stylesheet_directory_uri() . '/assets/images/about.png';
};
if ($args['title']) {
    $title = $args['title'];
} elseif (get_sub_field('title')) {
    $title = get_sub_field('title');
} elseif (is_tax() || is_category()) {
    if (get_field('title', get_queried_object())) {
        $title = get_field('title', get_queried_object());
    } else {
        $title = get_the_archive_title();
    }
} elseif (is_singular('post')) {
    $category = get_the_category();
    $title = $category[0]->name;
} elseif (is_singular('tuyen-dung')) {
    $title = __('Tuyển dụng', 'bsc');
} elseif (is_singular('so-tay-giao-dich')) {
    if (get_field('cdstgg1_title', 'option')) {
        $title = get_field('cdstgg1_title', 'option');
    } else {
        $title = __('Sổ tay giao dịch', 'bsc');
    }
} elseif (is_singular('bieu-phi-giao-dich')) {
    if (get_field('cdbdgg1_title', 'option')) {
        $title = get_field('cdbdgg1_title', 'option');
    } else {
        $title = __('Sổ tay giao dịch', 'bsc');
    }
} else {
    $title = get_the_title();
}
if ($args['breadcrumb']) {
    $breadcrumb  = $args['breadcrumb'];
} else {
    $breadcrumb = '';
}
?>

<section <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>
    class="page__banner relative after:absolute after:inset-0 after:w-full after:h-full after:bg-no-repeat after:pointer-events-none <?php echo $style == 'default' && !wp_is_mobile() && !bsc_is_mobile() ? 'after:bg-gradient-banner' : 'page__banner-haft'  ?> <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-24' : 'py-[50px]' ?>  text-white bg-no-repeat bg-cover " style="background-image:url('<?php echo $banner ?>')">
    <div class="container relative z-[1]">
        <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
            <div class="mb-5">
                <?php get_template_part('components/breadcrumb', null, array(
                    'custom' => $breadcrumb,
                    'title' => $args['title']
                )) ?>
            </div>

        <?php } ?>
        <h2 class="font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'lg:text-[40px] text-4xl' : 'text-2xl' ?>">
            <?php echo $title; ?>
        </h2>
    </div>
</section>