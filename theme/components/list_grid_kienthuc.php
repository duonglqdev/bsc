<?php
$terms = get_terms(array(
    'taxonomy' => 'danh-muc-kien-thuc',
    'hide_empty' => false,
    'parent' => 0,
));
if (!empty($terms) && !is_wp_error($terms)) :
    $number = get_sub_field('number') ?: 2;
    $time_cache = get_sub_field('time_cache') ?: 300;
?>
    <section class="lg:my-[100px] my-20 list_grid_kienthuc" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <div class="container">
            <div class="md:flex 2xl:gap-[70px] lg:gap-12 gap-6">
                <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                    <div class="w-80 lg:max-w-[35%] max-w-[30%] shrink-0">
                        <div class="sticky top-5 z-10">
                            <ul
                                class="shadow-base py-6 pr-4 rounded-lg bg-white sidebar-report space-y-2 scroll_nav">
                                <?php
                                $i = 0;
                                foreach ($terms as $term) :
                                    $i++;
                                ?>
                                    <li class="">
                                        <a href="#<?php echo $term->slug ?>"
                                            class="flex items-center gap-4 2xl:text-lg text-base font-bold <?php if ($i == 1) echo 'active' ?> [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">
                                            <?php echo esc_html($term->name); ?>
                                        </a>
                                        <?php
                                        $child_terms = get_terms(array(
                                            'taxonomy' => 'danh-muc-kien-thuc',
                                            'parent' => $term->term_id,
                                            'hide_empty' => false,
                                        ));
    
                                        if (!empty($child_terms) && !is_wp_error($child_terms)) : ?>
                                            <ul class="pl-5 hidden sub-menu w-full bg-white">
                                                <?php foreach ($child_terms as $child_term) :
                                                ?>
                                                    <li class="pl-5">
                                                        <a href="<?php echo get_term_link($child_term); ?>"
                                                            class="[&:not(.active)]:text-black text-primary-300 transition-all relative py-2 [&:not(.active)]:bg-white  hover:!text-primary-300 block">
                                                            <?php echo esc_html($child_term->name); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php
                            $hinh_anh_sidebar = get_sub_field('hinh_anh_sidebar');
                            if ($hinh_anh_sidebar) { ?>
                                <div class="mt-12">
                                    <a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
                                        <?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex-1':'space-y-8' ?>">
                    <?php
                    $total = count($terms);
                    $y = 0;
                    foreach ($terms as $term) :
                        $y++;
                    ?>
                        <div class="<?php if ($y != $total) echo 'pb-10 mb-10 border-b border-[#E1E1E1]' ?>" id="<?php echo $term->slug ?>">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="heading-title "><?php echo esc_html($term->name); ?></h2>
                                <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                                    <a href="<?php echo get_term_link($term) ?>" class="inline-block pl-5 pr-4 py-2 btn-base-yellow">
                                        <span class="inline-flex items-center gap-2 relative z-10">
                                            <?php _e('Xem tất cả', 'bsc') ?>
                                            <?php echo svg('arrow-btn-2') ?>
                                        </span>
                                    </a>
                                <?php } ?>
                            </div>
                            <div  class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 gap-x-6 grid gap-y-8 ':'block_slider-show-1 dots-blue' ?>" <?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
												data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'
							<?php } ?>>
                                <?php
                                $custom_taxterms = $term->term_id;
                                if (get_field('type_danh_muc',  $term) == 'default') {
                                    $args = array(
                                        'post_type' => 'kien-thuc-dau-tu',
                                        'post_status' => 'publish',
                                        'posts_per_page' => $number,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'danh-muc-kien-thuc',
                                                'field' => 'id',
                                                'terms' => $custom_taxterms
                                            )
                                        ),
                                    );
                                    $related_items = new WP_Query($args);
                                    if ($related_items->have_posts()) :
                                        while ($related_items->have_posts()) :
                                            $related_items->the_post();
                                ?>
                                            <div class="flex flex-col <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'w-full block_slider-item' ?>">
                                                <?php
                                                get_template_part('template-parts/content', get_post_type());
                                                ?>
                                            </div>
                                <?php
                                        endwhile;
                                    endif;
                                    wp_reset_postdata();
                                } else {
                                    if (get_field('api_id_danh_muc',  $term)) {
                                        $groupid = get_field('api_id_danh_muc',  $term);
                                        $array_data = array(
                                            'lang' => pll_current_language(),
                                            'groupid' => $groupid,
                                            'maxitem' => $number
                                        );
                                        $response = get_data_with_cache('GetNews', $array_data, $time_cache);
                                        if ($response) {
                                            foreach ($response->d as $news) {
                                                get_template_part('template-parts/content', '', array(
                                                    'data' => $news,
                                                ));
                                            }
                                        }
                                    }
                                }
                                ?>
                                 <?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
                                    <div class="mt-12">
                                        <a href="<?php echo get_term_link($term) ?>" class="block px-6 py-[12px] btn-base-yellow text-xs font-bold text-center">
                                                <span class="inline-flex items-center gap-2 relative z-10">
                                                    <?php _e( 'Xem tất cả', 'bsc' ) ?>
                                                    <?php echo svg( 'arrow-btn-2' ) ?>
                                                </span>
                                            </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>