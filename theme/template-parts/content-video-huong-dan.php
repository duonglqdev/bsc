<div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex flex-col':'grid grid-cols-2 gap-4 items-center' ?>">
    <a href="<?php echo check_link(get_field('link_youtube')) ?>" data-fancybox
        class="rounded-md overflow-hidden pt-[55.724%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
        <img loading="lazy" src="<?php echo bsc_post_thumbnail() ?>"
            alt="<?php the_title() ?>" class="absolute w-full h-full inset-0 object-cover">
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1] transition-all duration-500 hover:scale-110">
            <?php echo svgClass('play', '','',!wp_is_mobile() && !bsc_is_mobile() ?'w-[62px] h-[62px]':'w-[21px] h-[21px]') ?>
        </div>
    </a>
    <h4
        class="font-Helvetica line-clamp-2 font-bold transition-all duration-500 hover:text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-5':'text-xs' ?>">
        <a href="<?php echo check_link(get_field('link_youtube')) ?>" data-fancybox>
            <?php the_title() ?>
        </a>
    </h4>
</div>