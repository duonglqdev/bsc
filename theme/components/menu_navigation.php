<section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0 menu_navigation" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <?php if (have_rows('menu_navigation')) { ?>
        <div class="container">
            <ul class="customtab-nav flex justify-between bank-nav-tab">
                <?php while (have_rows('menu_navigation')): the_row(); ?>
                    <li>
                        <a href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="<?php if (get_sub_field('active')) echo 'active' ?> inline-block font-bold lg:text-lg lg:py-4 py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg">
                            <?php the_sub_field('title') ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php } ?>
</section>