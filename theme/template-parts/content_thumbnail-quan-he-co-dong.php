<div class="flex flex-col document_item-popup cursor-pointer" data-modal-target="document-modal" data-modal-toggle="document-modal" data-doccument="<?php echo check_link(get_field('file')) ?>">
    <p
        class="block overflow-hidden w-full pt-[139%] rounded-lg group relative">
        <img src="<?php bsc_post_thumbnail_medium() ?>"
            alt="<?php the_title() ?>"
            class="absolute w-full h-full inset-0 object-cover group-hover:scale-105  transition-all duration-500">
    </p>
    <h3
        class="mt-4 mb-2 text-lg font-semibold leading-normal transition-all duration-500 hover:text-primary-300">
        <p class="line-clamp-2 main_title">
            <?php the_title() ?>
        </p>
    </h3>
    <p
        class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap">
        <?php _e('Tải xuống', 'bsc') ?>
        <?php echo svg('download') ?>
    </p>
</div>