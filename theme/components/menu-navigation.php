<?php
$id_class = get_sub_field('id_class');
if (have_rows('menu_navigation') && !wp_is_mobile() && !bsc_is_mobile()) {
?>
    <section class="bg-primary-50 shadow-base sticky top-0 z-20 lg:block hidden" <?php if ($id_class) { ?> id="<?php echo $id_class ?>" <?php } ?>>
        <div class="container">
            <ul class="flex items-center justify-between gap-5 scroll_nav">
                <?php while (have_rows('menu_navigation')): the_row(); ?>
                    <li><a href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="[&:not(.active)]:text-paragraph text-primary-400 font-semibold transition-colors hover:!text-primary-400 block py-6 relative [&:not(.active)]:border-0 border-b-2 border-primary-400 "><?php the_sub_field('title') ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php } ?>