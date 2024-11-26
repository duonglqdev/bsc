<section class="lg:my-24 mb-10 hoatdong_noibat" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title 2xl:mb-10 mb-8">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="lg:flex gap-[70px]">
            <div class="lg:w-80 lg:max-w-[35%] shrink-0">
                <div class="sticky top-5 z-10">
                    <ul class="shadow-base p-3 rounded-[10px] bg-white scroll-bar-custom max-h-[180px] overflow-y-auto space-y-2">
                        <?php
                        $currentYear = date('Y');
                        $selectedYear = !empty($_GET['years']) ? $_GET['years'] : $currentYear;
                        for ($year = $currentYear; $year >= 2015; $year--):
                        ?>
                            <li>
                                <a href="<?php echo get_permalink(get_the_ID()) ?>?years=<?php echo $year ?><?php if (get_sub_field('id_class')) { ?><?php echo '#' . get_sub_field('id_class') ?><?php } ?>" class="block px-5 py-3 <?php echo ($year == $selectedYear) ? 'active' : ''; ?> block px-5 py-3 font-semibold text-lg [&:not(.active)]:bg-white bg-primary-300 rounded-md [&:not(.active)]:text-black text-white transition-all duration-500 hover:!bg-[#ebf4fa]">
                                    <?php _e('Năm', 'bsc') ?> <?php echo $year; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                    <?php
                    if (get_sub_field('hinh_anh_sidebar')) {
                        $hinh_anh_sidebar = get_sub_field('hinh_anh_sidebar');
                    } else {
                        $hinh_anh_sidebar = get_field('cdtnvcd1_hinh_anh_sidebar', 'option');
                    }
                    if ($hinh_anh_sidebar) { ?>
                        <div class="mt-12">
                            <a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
                                <?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php
            $cdtnvcd2_id_danh_mục = get_field('cdtnvcd2_id_danh_mục', 'option');
            if ($cdtnvcd2_id_danh_mục) {
                $time_cache = get_field('cdtnvcd2_time_cache', 'option');
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
                    'groupid' => $cdtnvcd2_id_danh_mục,
                    'maxitem' => $post_per_page,
                    'index' => $index
                );
                if ($selectedYear) {
                    $array_data['fromdate'] = '01/01/' . $selectedYear;
                    $array_data['todate'] = '31/12/' . $selectedYear;
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
                    <div class="flex-1">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
                            <?php
                            foreach ($response->d as $news) {
                                get_template_part('template-parts/content', null, array(
                                    'data' => $news,
                                ));
                            }
                            ?>
                        </div>
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