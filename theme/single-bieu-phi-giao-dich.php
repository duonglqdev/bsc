<?php
get_header();
$id_post = get_the_ID();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <?php get_template_part('components/menu_navigation', '', array(
        'data' => 'bpgd',
    )) ?>
    <h1 class="hidden"><?php the_title() ?></h1>
    <section class="mt-14 xl:mb-[100px] mb-20">
        <div class="container">
            <div class="lg:flex gap-20">
                <div class="lg:w-[340px] max-w-[35%]">
                    <?php $query = new WP_Query(array(
                        'post_type' => 'bieu-phi-giao-dich',
                        'post_status' => 'publish',
                        'posts_per_page' => 100,
                    ));
                    if ($query->have_posts()) { ?>
                        <div class="sticky lg:top-28 top-5 z-[9]">
                            <ul
                                class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2 sidebar-report">
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink() ?>"
                                            class="<?php if (get_the_ID() == $id_post) echo 'active' ?> flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
                                            <?php the_title() ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php };
                    wp_reset_postdata() ?>
                </div>
                <div class="flex-1">
                    <?php if (get_field('title')) {
                        $title = get_field('title');
                    } else {
                        $title = get_the_title();
                    } ?>
                    <h1 class="heading-title mb-6">
                        <?php echo $title; ?>
                    </h1>
                    <div
                        class="prose-table:border-collapse prose-td:border-[4px] prose-th:border-[4px] prose-th:py-5 prose-th:px-5 prose-td:py-5 prose-td:px-[29px] prose-td:border-white prose-th:border-white prose-table:rounded-3xl prose-table:overflow-hidden prose-table:max-w-full prose-table:w-full prose-table:text-center custom-table prose-ul:pl-5 prose-ul:list-disc prose-ul:mb-6 prose-ul:text-xl prose-table:font-Helvetica prose-table:font-medium prose-thead:font-bold prose-table:table-fixed">
                        <?php
                        $page_id = get_the_ID();
                        if (have_rows('home_components_stgd', $page_id)) {
                            while (have_rows('home_components_stgd', $page_id)) :
                                the_row();
                                $module_name = get_row_layout();
                                switch ($module_name):
                                    case $module_name:
                                        get_template_part('components-bpgd/' . $module_name);
                                endswitch;
                            endwhile;
                        }
                        ?>
                    </div>
                    <?php if (get_field('duong_dan_tai_file')) { ?>
                        <div class="mt-10 text-right">
                            <a href="<?php the_field('duong_dan_tai_file') ?>" class="inline-block px-6 py-3 btn-base-yellow" target="_blank">
                                <span class="inline-flex items-center gap-2 relative z-10">
                                    <?php _e('Tải xuống tài liệu', 'bsc') ?>
                                    <?php echo svgpath('download', '', '', 'fill-black') ?>
                                </span>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
