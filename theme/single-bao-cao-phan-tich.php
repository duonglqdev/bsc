<?php
if ($args['data']) {
    $news = $args['data'];
    $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
    $time_cache = get_field('cdbcpt2_time_cache', 'option') ?: 300;
    $link = 'javascript:void(0)';
    $danh_muc_khuyen_nghi = get_field('cddmkn1_id_danh_mục', 'option');
    $id_current_post = $news->id;
    $banner = wp_get_attachment_image_url(
        wp_is_mobile() && bsc_is_mobile() && get_field('cdc1_background_banner_mobile', 'option')
            ? get_field('cdc1_background_banner_mobile', 'option')
            : get_field('cdc1_background_banner', 'option'),
        'full'
    );
    if ($news->categoryid) {
        $categoryid = $news->categoryid;
        if ($categoryid == $danh_muc_khuyen_nghi) {
            $tax_name = get_field('cddmkn1_title', 'option');
            if (get_field('cddmkn1_background_banner', 'option') || get_field('cddmkn1_background_banner_mobile', 'option')) {
                $banner = wp_get_attachment_image_url(
                    wp_is_mobile() && bsc_is_mobile() && get_field('cddmkn1_background_banner_mobile ', 'option')
                        ? get_field('cddmkn1_background_banner_mobile ', 'option')
                        : get_field('cddmkn1_background_banner ', 'option'),
                    'full'
                );
            }
            $style = get_field('cddmkn1_background_banner_display', 'option') ?: 'default';
            $breadcrumb = 'khuyennghi';
            $title_lienquan = __('báo cáo', 'bsc');
        } else {
            $term = get_name_by_tax_id($categoryid, $get_array_id_taxonomy);
            if ($term) {
                $link = get_term_link($term);
            }
            $categories = get_terms(array(
                'taxonomy' => 'danh-muc-bao-cao-phan-tich',
                'hide_empty' => false,
                'meta_query' => array(
                    array(
                        'key' => 'api_id_danh_muc',
                        'value' => $categoryid,
                        'compare' => '='
                    )
                )
            ));
            if (!is_wp_error($categories) && !empty($categories)) {
                $tax = $categories[0];
            } else {
                $post_id = get_the_ID();
                $taxonomy = get_the_terms($post->ID, $check_cat);
                $tax = $taxonomy[0];
            }
            $tax_name = $tax->name;
            if (get_field('background_banner',  $tax) || get_field('background_banner_mobile',  $tax)) {
                $banner = wp_get_attachment_image_url(
                    wp_is_mobile() && bsc_is_mobile() && get_field('background_banner_mobile',  $tax)
                        ? get_field('background_banner_mobile',  $tax)
                        : get_field('background_banner',  $tax),
                    'full'
                );
            }
            $style = get_field('background_banner_display', $tax) ?: 'default';
            $breadcrumb = 'baocao';
            $title_lienquan = __('báo cáo', 'bsc');
        }
    }
} else {
    wp_redirect(home_url('/404'), 301);
    exit;
}
get_header();
?>
<main>
    <?php get_template_part('components/page-banner', null, array(
        'banner' => $banner,
        'style' => $style,
        'title' => $tax_name,
        'breadcrumb' => $breadcrumb,
    )) ?>
    <section class="mt-14 xl:mb-[100px] mb-20">
        <div class="container">
            <h1 class="lg:text-[32px] text-2xl font-bold mb-8">
                <?php echo $title ?>
            </h1>
            <div class="lg:flex 2xl:gap-[70px] gap-10">
                <div class="lg:w-80 lg:max-w-[35%] shrink-0">
                    <div class="content-bao-cao-phan-tich rounded-lg px-4 py-6 bg-white shadow-base">
                        <div class="flex items-center justify-between mb-6">
                            <a href="<?php echo $link ?>"
                                class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                                <?php echo htmlspecialchars($news->categoryname) ?>
                            </a>
                            <?php if ($news->recommendation) {
                                $status = $news->recommendation;
                                $check_status = get_color_by_number_bsc($status);
                                $title_status = $check_status['title_status'];
                                $text_status = $check_status['text_status'];
                                $background_status = $check_status['background_status'];
                            ?>
                                <span
                                    class="inline-block rounded-[45px] px-4 py-0.5 text-[12px] font-semibold" style="background-color:<?php echo $background_status; ?>; color:<?php echo $text_status ?>">
                                    <?php echo $title_status ?>
                                </span>
                            <?php } ?>
                        </div>
                        <ul class="space-y-3 text-xs font-Helvetica">
                            <?php $date = new DateTime($news->datetimepublished); ?>
                            <li class="flex items-center justify-between">
                                <p>
                                    <?php _e('Ngày đăng', 'bsc') ?>
                                </p>
                                <p class="font-medium">
                                    <?php echo $date->format('d/m/Y'); ?>
                                </p>
                            </li>
                            <?php if ($news->author) { ?>
                                <li class="flex items-center justify-between">
                                    <p>
                                        <?php _e('Tên chuyên viên', 'bsc') ?>
                                    </p>
                                    <p class="font-medium">
                                        <?php echo $news->author ?>
                                    </p>
                                </li>
                            <?php } ?>
                            <li class="flex items-center justify-between">
                                <p>
                                    <?php _e('Ngôn ngữ', 'bsc') ?>
                                </p>
                                <p class="font-medium">
                                    Tiếng Việt
                                </p>
                            </li>
                            <li class="flex items-center justify-between">
                                <p>
                                    <?php _e('Lượt tải về', 'bsc') ?>
                                </p>
                                <p class="font-medium content-bao-cao-phan-tich_download_count">
                                    <?php echo htmlspecialchars($news->downloads) ?>
                                </p>
                            </li>
                        </ul>
                        <?php
                        $tags = $news->hashtag;
                        if ($tags) {
                            $tags = explode(", ", $tags);
                        ?>
                            <div class="mt-4 space-x-2 space-y-2">
                                <?php foreach ($tags as $tag) { ?>
                                    <a href="<?php echo get_home_url() ?>/tag-report/<?php echo $tag ?>"
                                        class="inline-block rounded-full transition-all duration-500 hover:bg-[#f1c2c6] text-[#FF0017] bg-[#FFD9DC] text-[12px] px-2 py-0.5">
                                        #<?php echo $tag ?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($news->reporturl) {
                            $count_download = true;
                            $url_download = $news->reporturl;
                            $viewerpermission = $news->viewerpermission;
                            if ($viewerpermission == 'USER_BSC') {
                                $datetimeopen = $news->datetimeopen;
                                if (is_null($datetimeopen) || strtotime($datetimeopen) <= time()) {
                                } else {
                                    if (bsc_is_user_logged_out()) {
                                        $count_download = false;
                                        $url_download = bsc_url_sso();
                                    }
                                }
                            }
                        ?>
                            <div class="mt-6">
                                <a <?php if ($count_download) { ?>
                                    data-id="<?php echo $news->id; ?>"
                                    <?php
                                    }
                                    ?> href="<?php echo $url_download ?>"
                                    class=" <?php if ($count_download) echo 'bsc_up-download' ?> bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight flex-1 rounded-xl w-full h-10 text-center text-xs">
                                    <?php _e('Tải xuống', 'bsc') ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="flex-1 space-y-8">
                    <?php if ($news->description) { ?>
                        <div class="detail">
                            <h2 class="text-2xl font-bold mb-4">
                                <?php _e('Báo cáo chi tiết', 'bsc') ?>
                            </h2>
                            <div
                                class="text-justify font-Helvetica prose-img:rounded-[10px] prose-img:mx-auto prose-img:mt-6 prose-img:mb-8 prose-ul:pl-3 prose-ul:list-disc prose-ul:space-y-2 text-[#000]">
                                <?php echo $news->description ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    if ($args['data']  && $categoryid) {
        $array_data = array(
            'lang' => pll_current_language(),
            'maxitem' => 7,
            'categoryid' => $categoryid
        );
        $response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
        if ($response) {
    ?>
            <section class="xl:my-[100px] my-20">
                <div class="container">
                    <h3 class="text-center font-bold lg:text-[32px] text-2xl mb-8">
                        <?php echo __('Các', 'bsc') . ' ' . $title_lienquan . ' ' .  __('liên quan', 'bsc') ?>
                    </h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                        <?php
                        $check_p = 0;
                        foreach ($response->d as $news) {
                            if ($check_p < 6) {
                                if ($id_current_post != $news->id) {
                                    $check_p++;
                                    get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
                                        'data' => $news,
                                        'get_array_id_taxonomy' => $get_array_id_taxonomy,
                                    ));
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
    <?php
        }
    } ?>
</main>
<?php
get_footer();
