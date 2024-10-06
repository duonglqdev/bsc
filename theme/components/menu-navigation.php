<?php
$id_class = get_sub_field('id_class');
if (have_rows('menu_navigation')) {
?>
    <section class="bg-primary-50 shadow-menu  scroll_nav sticky top-0 z-10" <?php if ($id_class) { ?> id="<?php echo $id_class ?>" <?php } ?>>
        <div class="container">
            <ul class="flex items-center justify-between gap-5">
                <?php while (have_rows('menu_navigation')): the_row(); ?>
                    <li><a href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100"><?php the_sub_field('title') ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php } ?>