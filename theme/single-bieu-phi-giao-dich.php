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
    <section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-14 xl:mb-[100px] mb-20':'my-[50px]' ?>">
        <div class="container">
            <div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-20':'' ?>">
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-[340px] max-w-[35%] shrink-0':'relative' ?>">
                    <?php $query = new WP_Query(array(
                        'post_type' => 'bieu-phi-giao-dich',
                        'post_status' => 'publish',
                        'posts_per_page' => 100,
                    ));
                    if ($query->have_posts()) { ?>
                        <div class="sticky z-[9] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:top-28' : 'top-5' ?>">
                            <?php if(! wp_is_mobile() && ! bsc_is_mobile()) : ?>
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
                            <?php else : ?>
                                <div
                                    class="p-[12px] text-xs font-bold text-white bg-primary-300 rounded-lg flex items-center justify-between toggle-next">
                                    <?php echo get_the_archive_title() ?>
                                    <?php echo svg( 'down-white', '20' ) ?>
                                </div>
                                <ul
                                    class="overflow-y-auto absolute py-2 z-30 w-full max-h-64 scroll-bar-custom block [&:not(.active)]:opacity-0 opacity-100 [&:not(.active)]:pointer-events-none transition-all duration-500 origin-top-left scale-x-100 [&:not(.active)]:scale-y-0 scale-100 bg-[#F3FBFE] p-2 prose-a:block rounded text-xs">
                                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink() ?>"
                                                class="<?php if (get_the_ID() == $id_post) echo 'active' ?> text-xs px-3 py-2 rounded-md font-medium [&:not(.active)]:text-black text-white [&:not(.active)]:bg-white bg-primary-300">
                                                <?php the_title() ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php };
                    wp_reset_postdata() ?>
                </div>




                <div class="flex-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-6' ?>">
                    <?php if (get_field('title')) {
                        $title = get_field('title');
                    } else {
                        $title = get_the_title();
                    } ?>
                    <h1 class="heading-title mb-6">
                        <?php echo $title; ?>
                    </h1>
                    <div
                        class="prose-table:border-collapse prose-td:border-[4px] prose-th:border-[4px] prose-td:border-white prose-th:border-white prose-table:rounded-3xl prose-table:overflow-hidden prose-table:max-w-full prose-table:w-full prose-table:text-center custom-table prose-ul:pl-5 prose-ul:list-disc prose-ul:mb-6 prose-table:font-Helvetica prose-table:font-medium prose-thead:font-bold prose-table:table-fixed <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'prose-ul:text-xl prose-th:py-5 prose-th:px-5 prose-td:py-5 prose-td:px-[29px]':'prose-th:py-4 prose-th:px-3 prose-td:py-[12px] prose-td:px-3 text-xxs'?>">
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
                        <div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-10 text-right':'mt-6' ?>">
                            <a href="<?php the_field('duong_dan_tai_file') ?>" class=" px-6 py-3 btn-base-yellow <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-block':'block text-xs' ?>" target="_blank">
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
