<section class="mt-12 xl:mb-[100px] mb-20 stgd_page_content" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="grid md:grid-cols-4 gap-12">
            <div class="md:col-span-1 col-span-full">
                <?php if (have_rows('menu_naviation')) { ?>
                    <div class="sticky lg:top-28 top-5 z-[9]">
                        <ul
                            class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2 sidebar-report">
                            <?php while (have_rows('menu_naviation')): the_row();
                                $link = check_link(get_sub_field('link'));
                                $is_active = ($link == get_permalink()) ? 'active' : '';
                            ?>
                                <li class="<?php echo $is_active; ?>">
                                    <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                        class="<?php echo $is_active; ?> flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
                                        <?php the_sub_field('title') ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="md:col-span-3 col-span-full">
                <h1 class="text-xl font-bold mb-5 text-primary-300">
                    <?php the_sub_field('title') ?>
                </h1>
                <div
                    class="font-Helvetica content_prose prose-a:text-primary-300 prose-a:italic prose-strong:inline-block prose-strong:mb-4 prose-ul:pl-5 prose-ul:list-disc prose-ol:pl-6 prose-ol:list-decimal prose-ul:mb-4 prose-ol:mb-3 prose-table:border-none prose-table:mt-10 prose-p:mb-5">
                    <?php
                    $button = get_field('content');
                    if (have_rows('content')) {
                        while (have_rows('content')): the_row();
                            if (have_rows('home_components_stgd')) {
                                while (have_rows('home_components_stgd')) :
                                    the_row();
                                    $module_name = get_row_layout();
                                    switch ($module_name):
                                        case $module_name:
                                            get_template_part('components-stgd/' . $module_name);
                                    endswitch;
                                endwhile;
                            }
                        endwhile;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>