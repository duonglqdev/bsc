<?php if (get_sub_field('content')) { ?>
    <div
        class="font-Helvetica content_prose prose-a:text-primary-300 prose-a:italic prose-strong:before:w-2 prose-strong:before:h-2 prose-strong:before:bg-primary-300 prose-strong:before:rounded-[2px] prose-strong:inline-flex prose-strong:items-center prose-strong:gap-3 prose-strong:mb-2 prose-ul:pl-7 prose-ul:list-disc prose-ol:pl-6 prose-ol:list-decimal prose-ul:mb-5 prose-ol:mb-3 prose-table:border-none prose-table:mt-10">
        <?php the_sub_field('content') ?>
    </div>
<?php } ?>