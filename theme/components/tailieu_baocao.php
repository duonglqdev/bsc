<section class="lg:my-[100px] my-12 tailieu_baocao" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'danh-muc-bao-cao',
            'hide_empty' => false,
            'parent' => 0,
        ));
        if (!empty($terms) && !is_wp_error($terms)) :
        ?>
            <div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
                <div class="md:col-span-1 col-span-full">
                    <div class="sticky top-5 z-10">
                        <ul class="shadow-base py-6 pr-4 rounded-lg bg-white scroll_nav">
                            <?php
                            $i = 0;
                            foreach ($terms as $term) :
                                $i++;
                            ?>
                                <li>
                                    <a href="#<?php echo $term->slug ?>"
                                        class="<?php if ($i == 1) echo 'active' ?> flex items-center gap-4 md:text-lg font-bold [&:not(.active)]:text-black text-white transition-all relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white hover:!bg-primary-300 hover:!text-white hover:before:!bg-white hover:before:!bg-opacity-100 rounded-tr-xl rounded-br-xl">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="md:col-span-3 col-span-full">
                    <?php
                    foreach ($terms as $term) :
                    ?>
                        <div id="<?php echo $term->slug ?>">
                            <div class="flex justify-between items-center mb-[26px]">
                                <h2 class="text-2xl font-bold"><?php echo esc_html($term->name); ?></h2>
                                <a href="<?php echo get_term_link($term) ?>"
                                    class="inline-flex flex-col justify-center items-center px-5 py-2 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white text-xs">
                                    <span class="inline-flex items-center gap-3 relative z-10">
                                        <?php echo svg('arrow-btn', '16', '16') ?>
                                        <?php _e('Xem tất cả', 'bsc') ?>
                                    </span>
                                </a>
                            </div>
                            <?php
                            $custom_taxterms = $term->term_id;
                            $args = array(
                                'post_type' => 'quan-he-co-dong',
                                'post_status' => 'publish',
                                'posts_per_page' => 4,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'danh-muc-bao-cao',
                                        'field' => 'id',
                                        'terms' => $custom_taxterms
                                    )
                                ),
                            );
                            $related_items = new WP_Query($args);
                            if ($related_items->have_posts()) : ?>
                                <div class="mb-10 pb-10 space-y-6 border-b border-[#E1E1E1]">
                                    <?php if (get_field('type_danh_muc', $term) == 'avatar') { ?>
                                        <div class="grid grid-cols-4 gap-5">
                                            <?php
                                            while ($related_items->have_posts()) :
                                                $related_items->the_post();
                                                get_template_part('template-parts/content_thumbnail', get_post_type());
                                            endwhile;
                                            ?>
                                        </div>
                                    <?php } else {
                                        while ($related_items->have_posts()) :
                                            $related_items->the_post();
                                            get_template_part('template-parts/content', get_post_type());
                                        endwhile;
                                    } ?>
                                </div>
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>