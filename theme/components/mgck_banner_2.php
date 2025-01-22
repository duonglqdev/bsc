<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'xl:my-[100px] my-10 ' : 'my-[50px]' ?> mgck_banner_2" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php
        $bg_pc = get_sub_field('background');
        if (get_sub_field('background_mb')) {
            $bg_mb = get_sub_field('background_mb');
        } else {
            $bg_mb = get_sub_field('background');
        }
        ?>
        <div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'py-7 2xl:px-[75px] px-10 lg:min-h-80 min-h-64 md:grid-cols-2 grid-cols-1 gap-10 items-center' : 'gap-6 pt-9 pl-6 grid-cols-1' ?>"
            style="background-image:url(<?php echo wp_get_attachment_image_url(!wp_is_mobile() && !bsc_is_mobile() ? $bg_pc : $bg_mb, 'full') ?>)">
            <div class="col">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php
                if (have_rows('button')) {
                    while (have_rows('button')): the_row();
                        if (get_sub_field('title')) {
                ?>
                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>" class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs">
                                <?php echo svg('arrow-btn', '16', '16') ?>
                                <?php the_sub_field('title') ?>
                            </a>
                <?php
                        };
                    endwhile;
                }
                ?>
            </div>
            <div class="col <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'max-w-[70%] ml-auto mb-6' ?>">
                <?php echo wp_get_attachment_image(get_sub_field('image'), 'large', '', array('class' => 'mx-auto lg:w-[480px] max-w-full')) ?>
            </div>
        </div>
    </div>
</section>