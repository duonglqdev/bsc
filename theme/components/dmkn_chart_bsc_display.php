<section class="xl:my-[100px] my-20 dmkn_chart_bsc_display" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="font-bold text-2xl">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php
        $categoryid_kn = get_field('cddmkn1_id_danh_mục', 'option');
        if ($categoryid_kn) {
            if (get_sub_field('number')) {
                $post_per_page = get_sub_field('number');
            } else {
                $post_per_page = 3;
            }
            if (isset($_GET['page'])) {
                $index = ($_GET['page'] - 1) * $post_per_page + 1;
            } else {
                $index = 1;
            }
            $array_data = array(
                'lang' => pll_current_language(),
                'categoryid' => $categoryid_kn,
                'maxitem' => $post_per_page,
                'index' => $index
            );
            $response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
        ?>
            <?php
            if ($response) {
                if ($response->totalrecord) {
                    $total_post = $response->totalrecord;
                } else {
                    $total_post = $post_per_page;
                }
                $total_page = ceil($total_post / $post_per_page);
                $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
            ?>
                <div class="mt-6 grid lg:grid-cols-3 gap-6">
                    <?php
                    foreach ($response->d as $news) {
                        get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
                            'data' => $news,
                            'get_array_id_taxonomy' => $get_array_id_taxonomy,
                        ));
                    }
                    ?>
                </div>
                <div class="pagination-center">
                    <?php get_template_part('components/pagination', '', array(
                        'get' => 'api',
                        'total_page' => $total_page,
                        'url' => get_permalink(get_the_ID()),
                        'post_per_page' => 'hide'
                    )) ?>
                </div>
        <?php } else {
                get_template_part('template-parts/content', 'none');
            }
        }
        ?>
    </div>
</section>