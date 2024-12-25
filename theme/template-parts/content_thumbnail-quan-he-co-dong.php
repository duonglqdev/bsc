<?php if ($args['data']) {
    $news = $args['data'];
?>
    <div class="flex flex-col document_item-popup cursor-pointer" data-modal-target="document-modal" data-modal-toggle="document-modal" data-doccument="<?php echo $news->attachedfileurl ?>" data-id="<?php echo $news->newsid ?>">
        <p
            class="block overflow-hidden w-full rounded-lg group relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pt-[139%]' : 'pt-[143.75%]' ?>">
            <img loading="lazy" src="<?php echo bsc_set_thumbnail($news, 'thumbnail') ?>"
                alt=" <?php echo htmlspecialchars($news->title) ?>"
                class="absolute w-full h-full inset-0 object-cover group-hover:scale-105  transition-all duration-500">
        </p>
        <h3
            class="mt-4 font-semibold leading-normal transition-all duration-500 hover:text-primary-300 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-lg mb-2' : 'text-base' ?>">
            <p class="line-clamp-2 main_title">
                <?php echo htmlspecialchars($news->title) ?>
            </p>
        </h3>
        <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
            <p
                class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs whitespace-nowrap mt-auto">
                <?php _e('Xem nội dung', 'bsc') ?>
                <?php echo svg('download') ?>
            </p>
        <?php } ?>
    </div>
<?php } ?>