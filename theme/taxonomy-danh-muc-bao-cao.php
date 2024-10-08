<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsc
 */

get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <section class="bg-gradient-blue-to-bottom-50 lg:pt-12 lg:pb-16 pt-10 pb-10">
        <div class="container">
            <div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
                <div class="md:col-span-1 col-span-full">
                    <div class="sticky top-5 z-10">
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'danh-muc-bao-cao',
                            'hide_empty' => false,
                            'parent' => 0,
                        ));
                        if (!empty($terms) && !is_wp_error($terms)) :
                        ?>
                            <ul class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report">
                                <?php foreach ($terms as $term) :
                                    $active_class = (is_tax('danh-muc-bao-cao', $term->term_id)) ? 'active' : '';
                                ?>
                                    <li class="<?php echo esc_attr($active_class); ?>">
                                        <a href="<?php echo get_term_link($term); ?>"
                                            class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">
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
                        <?php get_sidebar('quan-he-co-dong') ?>
                    </div>
                </div>
                <div class="md:col-span-3 col-span-full">
                    <?php if (get_field('type_danh_muc', get_queried_object()) == 'avatar') { ?>
                        <?php if (have_posts()) : ?>
                            <div class="space-y-6">
                                <div class="grid grid-cols-4 gap-5">
                                    <?php
                                    while (have_posts()) :
                                        the_post();
                                        get_template_part('template-parts/content_thumbnail', get_post_type());
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                            <?php get_template_part('components/pagination') ?>
                        <?php
                        else :

                            // If no content, include the "No posts found" template.
                            get_template_part('template-parts/content/content', 'none');

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
                                    <?php global $wpdb;
                                    $years = $wpdb->get_col("
                                SELECT DISTINCT YEAR(STR_TO_DATE(pm.meta_value, '%Y%m%d')) as year
                                FROM $wpdb->postmeta pm
                                INNER JOIN $wpdb->posts p ON pm.post_id = p.ID
                                WHERE pm.meta_key = 'date_post'
                                AND p.post_type = 'quan-he-co-dong'
                                AND p.post_status = 'publish'
                                ORDER BY year DESC
                            ");

                                    if ($years) {
                                    ?>
                                        <div class="md:w-[45%] w-1/2 bg-white rounded-[10px] border border-[##EAEEF4] px-5 py-3 flex gap-5 justify-between items-center">
                                            <label for="" class="font-bold"><?php _e('Năm:', 'bsc') ?></label>
                                            <select id="select_year" name="years" class="select_custom py-0 border-0 focus:ring-0">
                                                <option value=""><?php _e('Chọn năm', 'bsc') ?></option>
                                                <?php foreach ($years as $year): ?>
                                                    <option value="<?php echo esc_attr($year); ?>" <?php selected(isset($_GET['years']) && $_GET['years'] == $year); ?>><?php echo esc_html($year); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    <?php } ?>
                                    <div class="md:w-[55%] w-1/2">
                                        <button type="submit" class="inline-block w-full h-full px-6 py-3 rounded-xl bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-xl hover:after:w-full hover:after:opacity-100 hover:text-white">
                                            <span class="block relative z-10"><?php _e('Tìm kiếm', 'bsc') ?></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php if (have_posts()) : ?>
                            <div class="space-y-6">
                                <?php
                                while (have_posts()) :
                                    the_post();
                                    get_template_part('template-parts/content', get_post_type());
                                endwhile;
                                ?>
                            </div>
                            <?php get_template_part('components/pagination') ?>
                        <?php
                        else :
                            get_template_part('template-parts/content/content', 'none');
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
