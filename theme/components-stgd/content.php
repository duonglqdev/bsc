<?php if (get_sub_field('content')) { ?>
    <div
        class="font-Helvetica content_prose prose-ul:pl-7 prose-ol:pl-7 prose-ul:mb-3 prose-ul:mt-2 prose-ol:mb-2 prose-table:my-5 prose-table:border-collapse prose-table:border prose-table:border-slate-300  prose-table:th:border prose-th:border-slate-300 prose-td:p-3 prose-td:border prose-td:border-slate-300 prose-p:mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
        <?php the_sub_field('content') ?>
    </div>
<?php } ?>