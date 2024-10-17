<?php
$terms = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'parent' => 0,
));
if (!empty($terms) && !is_wp_error($terms)) :
?>
    <section class="lg:mt-[100px] mt-16 mb-16 list_grid_news">
        <div class="container">
            <div class="grid md:grid-cols-4 2xl:gap-[70px] gap-12">
                <div class="md:col-span-1 col-span-full">
                    <div class="sticky top-5 z-10 scroll_nav">
                        <ul class="shadow-base py-6 pr-4 rounded-lg bg-white">
                            <?php foreach ($terms as $term) :
                                $active_class = (is_tax('category', $term->term_id)) ? 'active' : '';
                            ?>
                                <li class="<?php echo esc_attr($active_class); ?>">
                                    <a href="#<?php echo $term->slug ?>"
                                        class="flex items-center gap-4 md:text-lg font-bold <?php echo esc_attr($active_class); ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl">
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
                                                $child_active_class = (is_tax('category', $child_term->term_id)) ? 'active' : '';
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
                                    class="inline-block px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
                                    <span class="inline-flex items-center gap-2 relative z-10">
                                        <?php _e('Xem tất cả', 'bsc') ?>
                                        <?php echo svg('arrow-btn-2') ?>
                                    </span>
                                </a>
                            </div>
                            <?php
                            $custom_taxterms = $term->term_id;
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 4,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field' => 'id',
                                        'terms' => $custom_taxterms
                                    )
                                ),
                            );
                            $related_items = new WP_Query($args);
                            if ($related_items->have_posts()) : ?>
                                <?php if (get_field('type_danh_muc', $term) == 'avatar') { ?>
                                    <div
                                        class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 mb-10 pb-10 border-b border-[#E1E1E1]">
                                        <?php
                                        while ($related_items->have_posts()) :
                                            $related_items->the_post();
                                            get_template_part('template-parts/content', get_post_type());
                                        endwhile;
                                        ?>
                                    </div>
                                <?php } else {
                                ?>
                                    <div class="mb-10 pb-10 border-b border-[#E1E1E1] space-y-6">
                                        <?php
                                        while ($related_items->have_posts()) :
                                            $related_items->the_post();
                                            get_template_part('template-parts/content_nothumb', get_post_type());
                                        endwhile;
                                        ?>
                                    </div>
                                <?php
                                } ?>
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>