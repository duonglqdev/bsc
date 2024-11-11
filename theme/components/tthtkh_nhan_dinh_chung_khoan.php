<section class="2xl:my-[100px] my-10 tthtkh_nhan_dinh_chung_khoan" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="flex items-center justify-between mb-12">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title"><?php the_sub_field('title') ?></h2>
            <?php } ?>
            <?php if (have_rows('button')) {
                while (have_rows('button')): the_row();
                    if (get_sub_field('title')) { ?>
                        <a href="<?php echo check_link(get_sub_field('link')) ?>" class="inline-block px-5 py-2 btn-base-yellow">
                            <span class="inline-flex items-center gap-2 relative z-10">
                                <?php the_sub_field('title') ?>
                                <?php echo svg('arrow-btn-2') ?>
                            </span>
                        </a>
            <?php
                    }
                endwhile;
            } ?>
        </div>
        <?php
        $term = get_sub_field('tax');
        $number = get_sub_field('number');
        if ($term) {
            $custom_taxterms = $term->term_id;
            $args = array(
                'post_type' => 'kien-thuc-dau-tu',
                'post_status' => 'publish',
                'posts_per_page' => $number,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'danh-muc-kien-thuc',
                        'field' => 'id',
                        'terms' => $custom_taxterms
                    )
                ),
            );
            $related_items = new WP_Query($args);
            if ($related_items->have_posts()) :
        ?>
                <div class="block_slider has-nav no-dots block_slider-show-3 -mx-[12px]">
                    <?php
                    while ($related_items->have_posts()) :
                        $related_items->the_post();
                    ?>
                        <div class="block_slider-item lg:w-1/3 md:w-1/2 w-2/3 px-[12px]">
                            <?php
                            get_template_part('template-parts/content', get_post_type());
                            ?>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
        <?php endif;
            wp_reset_postdata();
        } ?>
    </div>
</section>