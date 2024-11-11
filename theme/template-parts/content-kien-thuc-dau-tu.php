<a href="<?php the_field('link') ?>" data-fancybox
    class="rounded-md overflow-hidden pt-[55.724%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
    <img src="<?php echo bsc_post_thumbnail() ?>"
        alt="<?php the_title() ?>" class="absolute w-full h-full inset-0 object-cover">
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
        <?php echo svg('play', '62', '62') ?>
    </div>
</a>
<h4
    class="font-Helvetica line-clamp-2 font-bold mt-5 transition-all duration-500 hover:text-green">
    <a href="<?php the_field('link') ?>"
        data-fancybox>
        <?php the_title() ?>
    </a>
</h4>