<?php
$term = get_sub_field('tax_report');
if ($term) {
    $number = get_sub_field('number');
    $time_cache = get_sub_field('time_cache');
?>
    <section class="xl:[my-100px] my-20 ttnc_report_taxonomy" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <div class="container">
            <div class="flex justify-between items-center mb-8">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title"><?php the_sub_field('title') ?></h2>
                <?php } ?>
                <a href="<?php echo get_term_link($term) ?>"
                    class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
                    <?php echo svg('arrow-btn', '16', '16') ?>
                    <?php _e('Xem tất cả', 'bsc') ?>
                </a>
            </div>
            <?php $categoryid = get_field('api_id_danh_muc', $term);
            if ($categoryid) {
                $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
                $array_data = array(
                    'lang' => pll_current_language(),
                    'maxitem' => $number,
                    'categoryid' => $categoryid
                );
                $response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
                if ($response) { ?>
                    <div class="grid gap-5 lg:grid-cols-3 grid-cols-2">
                        <?php
                        foreach ($response->d as $news) {
                            get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
                                'data' => $news,
                                'get_array_id_taxonomy' => $get_array_id_taxonomy,
                            ));
                        }
                        ?>
                    </div>
            <?php };
            } ?>
        </div>
    </section>
<?php
}
?>