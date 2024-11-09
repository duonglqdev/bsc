<?php
$categories = get_terms([
    'taxonomy' => 'danh-muc-so-tay',
    'hide_empty' => true,
]);
$current_post_id = get_the_ID();
?>
<div class="sticky lg:top-28 top-5 z-[9]">
    <ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2 sidebar-report sidebar-base">
        <?php foreach ($categories as $category): ?>
            <?php
            $posts_in_category = get_posts([
                'post_type' => 'so-tay-giao-dich',
                'tax_query' => [
                    [
                        'taxonomy' => 'danh-muc-so-tay',
                        'field'    => 'term_id',
                        'terms'    => $category->term_id,
                    ],
                ],
                'numberposts' => -1,
            ]);
            $has_active_post = false;
            foreach ($posts_in_category as $post) {
                if ($post->ID == $current_post_id) {
                    $has_active_post = true;
                    break;
                }
            }
            ?>
            <li>
                <?php if (count($posts_in_category) > 1): ?>
                    <a href="javascript:void(0)"
                        class="<?php if ($has_active_post) echo 'active' ?> flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
                        <?php echo esc_html($category->name); ?>
                    </a>
                    <ul class="pl-5 sub-menu w-full bg-white py-2" style="<?php echo $has_active_post ? '' : 'display: none;'; ?>">
                        <?php foreach ($posts_in_category as $post): ?>
                            <li class="pl-5">
                                <a href="<?php echo get_permalink($post->ID); ?>"
                                    class="<?php echo $post->ID == $current_post_id ? 'active' : ''; ?> [&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white hover:!text-primary-300 block">
                                    <?php echo get_the_title($post->ID); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <a href="<?php echo !empty($posts_in_category) ? get_permalink($posts_in_category[0]->ID) : '#'; ?>"
                        class="<?php if ($has_active_post) echo 'active' ?> flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
                        <?php echo esc_html($category->name); ?>
                    </a>
                <?php endif; ?>
            </li>
        <?php endforeach;
        wp_reset_postdata() ?>
        <li>
            <a href="<?php echo get_post_type_archive_link('video-huong-dan') ?>"
                class="flex items-baseline gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:shrink-0 before:-translate-y-[3px] before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]"><?php _e('Video
                hướng dẫn', 'bsc') ?></a>
        </li>
    </ul>
</div>