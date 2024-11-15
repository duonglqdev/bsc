<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsc
 */
if (get_field('api_id_danh_muc', get_queried_object())) {
    $groupid = get_field('api_id_danh_muc', get_queried_object());
} else {
    wp_redirect(home_url('/404'), 301);
    exit;
}
get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-16 pt-10 pb-10">
        <div class="container">
            <div class="lg:flex gap-[70px]">
                <div class="lg:w-80 lg:max-w-[35%]">
                    <div class="sticky top-5 z-10">
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'danh-muc-bao-cao',
                            'hide_empty' => false,
                            'parent' => 0,
                        ));
                        if (!empty($terms) && !is_wp_error($terms)) :
                        ?>
                            <ul class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report space-y-2">
                                <?php foreach ($terms as $term) :
                                    $active_class = (is_tax('danh-muc-bao-cao', $term->term_id)) ? 'active' : '';
                                ?>
                                    <li class="<?php echo esc_attr($active_class); ?>">
                                        <a href="<?php echo get_term_link($term); ?>"
                                            class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
                                            <?php echo esc_html($term->name); ?>
                                        </a>
                                        <?php
                                        $child_terms = get_terms(array(
                                            'taxonomy' => 'danh-muc-bao-cao',
                                            'parent' => $term->term_id,
                                            'hide_empty' => false,
                                        ));

                                        if (!empty($child_terms) && !is_wp_error($child_terms)) : ?>
                                            <ul class="pl-5 hidden sub-menu w-full bg-white">
                                                <?php foreach ($child_terms as $child_term) :
                                                    $child_active_class = (is_tax('danh-muc-bao-cao', $child_term->term_id)) ? 'active' : '';
                                                ?>
                                                    <li class="pl-5">
                                                        <a href="<?php echo get_term_link($child_term); ?>"
                                                            class="<?php echo esc_attr($child_active_class); ?> [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
                                                            <?php echo esc_html($child_term->name); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php
                        $hinh_anh_sidebar = get_field('hinh_anh_sidebar', get_queried_object());
                        if ($hinh_anh_sidebar) { ?>
                            <div class="mt-12">
                                <a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
                                    <?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="flex-1">
                    <?php if (get_field('type_danh_muc', get_queried_object()) == 'avatar') { ?>
                        <?php
                        $time_cache = get_field('cdqhcd2_time_cache', 'option') ?: 300;
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
                            'groupid' => $groupid,
                            'maxitem' => $post_per_page,
                            'index' => $index
                        );
                        $response = get_data_with_cache('GetNews', $array_data, $time_cache);
                        if ($response) :
                            if ($response->totalrecord) {
                                $total_post = $response->totalrecord;
                            } else {
                                $total_post = $post_per_page;
                            }
                            $total_page = ceil($total_post / $post_per_page);
                        ?>
                            <div class="space-y-8">
                                <div class="grid grid-cols-4 gap-5">
                                    <?php
                                    foreach ($response->d as $news) {
                                        get_template_part('template-parts/content_thumbnail-quan-he-co-dong', null, array(
                                            'data' => $news,
                                        ));
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="mt-12">
                                <?php get_template_part('components/pagination', '', array(
                                    'get' => 'api',
                                    'total_page' => $total_page,
                                    'url' => get_term_link(get_queried_object_id()),
                                )) ?>
                            </div>
                        <?php
                        else :
                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>
                    <?php } else {
                    ?>
                        <form method="get" action="<?php echo get_term_link(get_queried_object()); ?>">
                            <div class="flex gap-5 mb-12 md:flex-nowrap flex-wrap">
                                <div class="md:w-[518px] w-full md:max-w-[50%] max-w-full flex items-center gap-4 bg-white rounded-[10px] border border-[##EAEEF4] px-5 py-3">
                                    <?php echo svg('search') ?>
                                    <input type="text" name="key" value="<?php if (isset($_GET['key'])) echo $_GET['key'] ?>" placeholder="<?php _e('Từ khóa tìm kiếm', 'bsc') ?>"
                                        class="placeholder:text-[#898A8D] border-none focus:border-none focus:outline-0 flex-1 p-[2px] focus:shadow-transparent focus:ring-transparent">
                                </div>
                                <div class="flex gap-4 flex-1">
                                    <div class="md:w-[45%] w-1/2 bg-white rounded-[10px] border border-[##EAEEF4] px-5 py-3 flex gap-5 justify-between items-center">
                                        <label for="" class="font-bold"><?php _e('Năm:', 'bsc') ?></label>
                                        <select id="select_year" name="years" class="select_custom py-0 border-0 focus:ring-0">
                                            <option value=""><?php _e('Chọn năm', 'bsc'); ?></option>
                                            <?php
                                            $currentYear = date('Y');
                                            for ($year = $currentYear; $year >= 2015; $year--):
                                            ?>
                                                <option value="<?php echo esc_attr($year); ?>" <?php selected(isset($_GET['years']) && $_GET['years'] == $year); ?>>
                                                    <?php echo esc_html($year); ?>
                                                </option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="md:w-[55%] w-1/2">
                                        <button type="submit" class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] 2xl:px-6  2xl:py-3  font-semibold relative transition-all duration-500 inline-block w-full h-full px-6 py-3 rounded-xl">
                                            <span class="block relative z-10"><?php _e('Tìm kiếm', 'bsc') ?></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        $time_cache = get_field('cdqhcd2_time_cache', 'option') ?: 300;
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
                            'groupid' => $groupid,
                            'maxitem' => $post_per_page,
                            'index' => $index,
                        );
                        if (isset($_GET['key']) && !empty($_GET['key'])) {
                            $array_data['title'] = $_GET['key'];
                        }
                        if (isset($_GET['years']) && !empty($_GET['years'])) {
                            $years = $_GET['years'];
                            $array_data['fromdate'] = '01/01/' . $years;
                            $array_data['todate'] = '31/12/' . $years;
                        }
                        $response = get_data_with_cache('GetNews', $array_data, $time_cache);
                        if ($response) :
                            if ($response->totalrecord) {
                                $total_post = $response->totalrecord;
                            } else {
                                $total_post = $post_per_page;
                            }
                            $total_page = ceil($total_post / $post_per_page);
                        ?>
                            <div class="space-y-8">
                                <?php
                                foreach ($response->d as $news) {
                                    get_template_part('template-parts/content-quan-he-co-dong', null, array(
                                        'data' => $news,
                                    ));
                                }
                                ?>
                            </div>
                            <div class="mt-12">
                                <?php get_template_part('components/pagination', '', array(
                                    'get' => 'api',
                                    'total_page' => $total_page,
                                    'url' => get_term_link(get_queried_object_id()),
                                )) ?>
                            </div>
                        <?php
                        else :
                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>
                    <?php
                    } ?>
                </div>

            </div>
        </div>
    </section>
</main>
<?php
get_footer();
