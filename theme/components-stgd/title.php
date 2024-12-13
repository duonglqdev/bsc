<?php if (get_sub_field('title')) { ?>
    <h2
        class="py-2 bg-[#E5F5FF]  text-primary-300 mb-4 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:text-2xl text-xl px-6':'text-lg px-4' ?>">
        <?php the_sub_field('title') ?>
    </h2>
<?php } ?>