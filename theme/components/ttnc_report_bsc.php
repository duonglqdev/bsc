<?php
$bg_pc = get_sub_field('background') ? get_sub_field('background') : '';
$bg_mb = get_sub_field('background_mb') ? get_sub_field('background_mb') : get_sub_field('background');
$bg = !wp_is_mobile() && !bsc_is_mobile() ? $bg_pc : $bg_mb;
?>
<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-[77px]' : 'py-5 min-h-[774px]' ?> bg-no-repeat bg-cover bg-center ttnc_report_bsc" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>
    style="background-image:url(<?php echo wp_get_attachment_image_url($bg, 'full') ?>)">
    <div class="container">
        <div class="bg-white rounded-2xl <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-[602px] max-w-[60%] p-10' : 'p-6' ?>">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title text-center !leading-none <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php  } ?>
            <?php if (have_rows('bao_cao')) { ?>
                <ul class="divide-y divide-solid <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'space-y-4' : 'space-y-[12px]' ?>">
                    <?php while (have_rows('bao_cao')): the_row(); ?>
                        <li class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? '[&:not(:first-child)]:pt-4' : '[&:not(:first-child)]:pt-[12px] sm:text-base text-sm' ?>">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-green">
                                <span class="inline-flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'gap-2' : 'gap-1.5' ?>">
                                    <?php echo svgClass_dir(get_sub_field('icon'), '30', '30', 'shrink-0') ?>
                                    <?php the_sub_field('title') ?>
                                </span>
                                <?php echo svgpath('arrow-btn', '18', '18', 'fill-green') ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php } ?>
            <?php
            if (have_rows('button')) {
                while (have_rows('button')): the_row();
                    if (get_sub_field('title')) {
            ?>
                        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-6' : 'mt-4' ?>">
                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="items-center gap-3  btn-base-yellow text-xs font-bold  rounded-md <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'inline-flex pl-6 pr-8 py-4 min-h-[52px]' : 'flex justify-center py-3 px-5 min-h-10' ?>">
                                <?php echo svg('arrow-btn', '16', '16') ?>
                                <?php the_sub_field('title') ?>
                            </a>
                        </div>
            <?php
                    };
                endwhile;
            } ?>
        </div>
    </div>
</section>