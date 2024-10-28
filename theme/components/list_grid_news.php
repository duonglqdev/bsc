<?php
$terms = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'parent' => 0,
));
if (!empty($terms) && !is_wp_error($terms)) :
    $number = get_sub_field('number') ?: 4;
    $time_cache = get_sub_field('time_cache') ?: 300;
?>
    <section class="lg:mt-[100px] mt-16 mb-16 list_grid_news" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <div class="container">
            <div class="grid md:grid-cols-4 2xl:gap-[70px] gap-12">
                <div class="md:col-span-1 col-span-full">
                    <div class="sticky top-5 z-10 ">
                        <ul class="shadow-base py-6 pr-4 rounded-lg bg-white scroll_nav">
                            <?php
                            $i = 0;
                            foreach ($terms as $term) :
                                $i++;
                            ?>
                                <li class="">
                                    <a href="#<?php echo $term->slug ?>"
                                        class="flex items-center gap-4 md:text-lg font-bold <?php if ($i == 1) echo 'active' ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                    <?php
                                    $child_terms = get_terms(array(
                                        'taxonomy' => 'category',
                                        'parent' => $term->term_id,
                                        'hide_empty' => false,
                                    ));

                                    if (!empty($child_terms) && !is_wp_error($child_terms)) : ?>
                                        <ul class="pl-5 hidden sub-menu w-full bg-white">
                                            <?php foreach ($child_terms as $child_term) :
                                            ?>
                                                <li class="pl-5">
                                                    <a href="<?php echo get_term_link($child_term); ?>"
                                                        class="[&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
                                                        <?php echo esc_html($child_term->name); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        $hinh_anh_sidebar = get_sub_field('hinh_anh_sidebar');
                        if ($hinh_anh_sidebar) { ?>
                            <div class="mt-12">
                                <a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
                                    <?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="md:col-span-3 col-span-full">
                    <?php
                    foreach ($terms as $term) :
                    ?>
                        <div id="<?php echo $term->slug ?>">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="heading-title normal-case"><?php echo esc_html($term->name); ?></h2>
                                <a href="<?php echo get_term_link($term) ?>"
                                    class="inline-block px-5 py-2 btn-base-yellow">
                                    <span class="inline-flex items-center gap-2 relative z-10">
                                        <?php _e('Xem tất cả', 'bsc') ?>
                                        <?php echo svg('arrow-btn-2') ?>
                                    </span>
                                </a>
                            </div>
                            <?php
                            $groupid = get_field('api_id_danh_muc', $term);
                            if ($groupid) {
                                $array_data = array(
                                    'lang' => pll_current_language(),
                                    'groupid' => $groupid,
                                    'maxitem' => $number
                                );
                                $response = get_data_with_cache('GetNews', $array_data, $time_cache);
                                if ($response) { ?>
                                    <?php if (get_field('type_danh_muc', $term) == 'avatar') { ?>
                                        <div
                                            class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 mb-10 pb-10 border-b border-[#E1E1E1]">
                                            <?php
                                            foreach ($response->d as $news) {
                                                get_template_part('template-parts/content', null, array(
                                                    'data' => $news,
                                                ));
                                            }
                                            ?>
                                        </div>
                                    <?php } else {
                                    ?>
                                        <div class="mb-10 pb-10 border-b border-[#E1E1E1] space-y-6">
                                            <?php
                                            foreach ($response->d as $news) {
                                                get_template_part('template-parts/content_nothumb', get_post_type(), array(
                                                    'data' => $news,
                                                ));
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    } ?>
                            <?php }
                            } ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>