<?php
$id_class = get_sub_field('id_class');
if (have_rows('menu_navigation')) {
?>
    <section class="bg-primary-50 shadow-base  scroll_nav sticky top-0 z-20" <?php if ($id_class) { ?> id="<?php echo $id_class ?>" <?php } ?>>
        <div class="container">
            <ul class="flex items-center justify-between gap-5">
                <?php while (have_rows('menu_navigation')): the_row(); ?>
                    <li><a href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all hover:!text-primary-400 block py-6 relative [&:not(.active)]:border-0 border-b-2 border-primary-400 "><?php the_sub_field('title') ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php } ?>