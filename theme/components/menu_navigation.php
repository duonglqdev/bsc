<?php
$style = $args['data'] ?? get_sub_field('style') ?: 'nhdt';
if ($style == 'nhdt') {
?>
    <section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0 menu_navigation" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <?php if (have_rows('menu_navigation')) { ?>
            <div class="container">
                <ul class="flex justify-between bank-nav-tab">
                    <?php while (have_rows('menu_navigation')): the_row(); ?>
                        <li>
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="<?php if (get_sub_field('active')) echo 'active' ?> inline-block font-bold xl:text-lg xl:py-4 py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
                                <?php the_sub_field('title') ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php } ?>
    </section>
<?php } elseif (($style == 'stgd') || ($style == 'bpgd')) {
?>
    <section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <?php
        if (get_sub_field('menu_navigation')) {
            $menu_navigation = get_sub_field('menu_navigation');
        } elseif (isset($args['data']) && $args['data'] != '') {
            if ($args['data'] == 'stgd') {
                $menu_navigation = get_field('cdstgg2_menu_navigation', 'option');
            } else {
                $menu_navigation = get_field('cdbdgg1_menu_navigation', 'option');
            }
        }
        if ($menu_navigation) { ?>
            <div class="container">
                <ul class="flex justify-between gap-10">
                    <?php foreach ($menu_navigation as $row) { ?>
                        <li class="flex-1">
                            <a href="<?php echo check_link($row['link']) ?>"
                                class="<?php if ($row['active']) echo 'active' ?> block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
                                <?php echo $row['title'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </section>
<?php  } elseif ($style == 'ntgd') { ?>
    <section class="bg-[#EBF4FA] py-4 sticky top-0 z-[20] sticky-nav" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <div class="container">
            <?php if (have_rows('menu_navigation')) { ?>
                <ul class="flex justify-center gap-10">
                    <?php while (have_rows('menu_navigation')) : the_row() ?>
                        <li>
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="<?php if (get_sub_field('active')) echo 'active' ?> block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px]">
                                <?php the_sub_field('title') ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php } ?>
        </div>
    </section>
<?php } elseif ($style == 'bcpt') { ?>
    <?php if (have_rows('menu_navigation')) { ?>
        <section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
            <div class="container">
                <ul class="customtab-nav flex justify-between 2xl:gap-10 gap-5">
                    <?php while (have_rows('menu_navigation')): the_row(); ?>
                        <li class="flex-1">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="<?php if (get_sub_field('active')) echo 'active' ?> block text-center font-bold lg:text-lg lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
                                <?php the_sub_field('title') ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php } ?>
<?php } ?>