<?php
get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <?php get_template_part('components/menu_navigation', '', array(
        'data' => 'stgd',
    )) ?>
    <h1 class="hidden"><?php the_title() ?></h1>
    <section class="mt-12 xl:mb-[100px] mb-20">
        <div class="container">
            <div class="lg:flex gap-[70px]">
                <div class="lg:w-80 max-w-[35%]">
                    <?php echo get_sidebar('stgd') ?>
                </div>
                <div class="flex-1 ">
                    <?php
                    $page_id = get_the_ID();
                    if (have_rows('home_components_stgd', $page_id)) {
                        while (have_rows('home_components_stgd', $page_id)) :
                            the_row();
                            $module_name = get_row_layout();
                            switch ($module_name):
                                case $module_name:
                                    get_template_part('components-stgd/' . $module_name);
                            endswitch;
                        endwhile;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    $chuong_trinh_khuyen_mai_id = get_field('cdctkm1_id_danh_mục', 'option');
    $array_data = array(
        "maxitem" => "3",
        "lang" => pll_current_language(),
        "groupid" => $chuong_trinh_khuyen_mai_id,
        'index' => 1
    );
    $response = get_data_with_cache('GetNews', $array_data, $time_cache);
    if ($response) {
    ?>
        <section class="xl:my-[100px] my-20">
            <div class="container">
                <div class="flex items-center justify-between mb-10">
                    <h2 class="heading-title"><?php _e('Ưu đãi từ BSC', 'bsc') ?></h2>
                    <a href="<?php echo check_link(get_field('cdctkm1_page', 'option')) ?>#<?php echo get_field('cdctkm1_pageid_class', 'option') ?>" class="inline-block px-5 py-2 btn-base-yellow">
                        <span class="inline-flex items-center gap-2 relative z-10">
                            <?php _e('Xem tất cả', 'bsc') ?>
                            <?php echo svg('arrow-btn-2') ?>
                        </span>
                    </a>
                </div>
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-[21px]">
                    <?php
                    foreach ($response->d as $news) {
                        get_template_part('template-parts/content', 'khuyen-mai', array(
                            'data' => $news,
                        ));
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php } ?>
</main>
<?php
get_footer();
