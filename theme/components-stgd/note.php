<?php if (get_sub_field('content')) { ?>
    <div
        class="note shadow-base rounded-[10px] p-6 mt-4 font-Helvetica flex gap-2 max-w-[857px]">
        <?php if (get_sub_field('title')) { ?>
            <strong class="text-[#FF0017] shrink-0">
                <?php the_sub_field('title') ?>
            </strong>
        <?php } ?>
        <div class="flex-1">
            <?php the_sub_field('content') ?>
        </div>
    </div>
<?php } ?>