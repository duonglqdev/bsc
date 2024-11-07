<section class="mt-12 xl:mb-[100px] mb-20 stgd_video_introduce" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="lg:flex gap-[70px]">
            <?php echo get_sidebar('stgd') ?>
            <div class="flex-1">
                <?php
                if (isset($_GET['posts_to_show']) && $_GET['posts_to_show'] != '') {
                    $post_per_page = $_GET['posts_to_show'];
                } else {
                    $post_per_page = get_option('posts_per_page');
                }
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $query = new WP_Query(array(
                    'post_type' => 'video-huong-dan',
                    'posts_per_page' => $post_per_page,
                    'paged' => $paged
                ));
                if ($query->have_posts()) {
                ?>
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-5 gap-x-6 gap-y-8">
                        <?php
                        while ($query->have_posts()) : $query->the_post();
                            get_template_part('template-parts/content', get_post_type());
                        endwhile;
                        ?>
                    </div>
                    <?php get_template_part('components/pagination', '', array(
                        'query' => $query
                    )) ?>
                <?php } else {
                    get_template_part('template-parts/content', 'none');
                } ?>
            </div>
        </div>
    </div>
</section>