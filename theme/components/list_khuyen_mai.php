<?php
$cdctkm1_id_danh_mục = get_field('cdctkm1_id_danh_mục', 'option');
if ($cdctkm1_id_danh_mục) {
    $time_cache = get_field('cdctkm1_time_cache', 'option');
    if (isset($_GET['posts_to_show'])) {
        $post_per_page = $_GET['posts_to_show'];
    } else {
        $post_per_page = get_option('posts_per_page');
    }
    if (isset($_GET['page'])) {
        $index = ($_GET['page'] - 1) * $post_per_page + 1;
    } else {
        $index = 1;
    }
    $array_data = array(
        'lang' => pll_current_language(),
        'groupid' => $cdctkm1_id_danh_mục,
        'maxitem' => $post_per_page,
        'index' => $index
    );
    $response = get_data_with_cache('GetNews', $array_data, $time_cache);
    if ($response) {
        if ($response->totalrecord) {
            $total_post = $response->totalrecord;
        } else {
            $total_post = $post_per_page;
        }
        $total_page = ceil($total_post / $post_per_page);
?>
        <section class="xl:my-[100px] my-20 list_khuyen_mai" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
            <div class="container">
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-x-[21px] gap-y-[30px]">
                    <?php
                    foreach ($response->d as $news) {
                        get_template_part('template-parts/content', 'khuyen-mai', array(
                            'data' => $news,
                        ));
                    }
                    ?>
                </div>
                <div class="pagination-center">
                    <?php get_template_part('components/pagination', '', array(
                        'get' => 'api',
                        'total_page' => $total_page,
                        'url' => get_permalink(get_the_ID()),
                    )) ?>
                </div>
            </div>
        </section>
<?php }
} ?>