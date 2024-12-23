<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'my-[68px]':'mt-8 mb-[50px]' ?> dmkn_chart_bsc_display_pagination" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-[70px]':'' ?>">
            <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                <div class="lg:w-80 lg:max-w-[35%] shrink-0">
                    <?php $hinh_anh_sidebar = get_sub_field('hinh_anh_sidebar');
                    if ($hinh_anh_sidebar) { ?>
                        <div class="sticky top-5 z-10">
                            <a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
                                <?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php
            $cdtnvcd2_id_danh_mục = get_sub_field('id_api');
            if ($cdtnvcd2_id_danh_mục) {
                $time_cache = 300;
                if (isset($_GET['posts_to_show'])) {
                    $post_per_page = $_GET['posts_to_show'];
                } else {
                    $post_per_page = get_option('posts_per_page');
                }
                if (isset($_GET['post_page'])) {
                    $index = ($_GET['post_page'] - 1) * $post_per_page + 1;
                } else {
                    $index = 1;
                }
                $newstype = 0;
                $array_data = array(
                    'lang' => pll_current_language(),
                    'groupid' => $cdtnvcd2_id_danh_mục,
                    'maxitem' => $post_per_page,
                    'index' => $index
                );
                if (isset($_GET['mck']) && !empty($_GET['mck'])) {
                    $array_data['symbol'] = $_GET['mck'];
                    $array_data['newstype'] = 1;
                    $newstype = 1;
                }
                $response = get_data_with_cache('GetNews', $array_data, $time_cache);
                if ($response) {
                    if ($response->totalrecord) {
                        $total_post = $response->totalrecord;
                    } else {
                        $total_post = $post_per_page;
                    }
                    $total_page = ceil($total_post / $post_per_page);
            ?>
                    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex-1 space-y-11':'space-y-6' ?>">
                        <?php
                        foreach ($response->d as $news) {
                            get_template_part('template-parts/content-tin-ma-co-phan', null, array(
                                'data' => $news,
                                'newstype' => $newstype
                            ));
                        }
                        ?>
                        <div class="mt-12">
                            <?php get_template_part('components/pagination', '', array(
                                'get' => 'api',
                                'total_page' => $total_page,
                                'url' => get_permalink(get_the_ID()),
                            )) ?>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>