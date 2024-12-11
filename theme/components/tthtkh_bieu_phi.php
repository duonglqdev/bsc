<section class="xl:my-[100px] my-10 tthtkh_bieu_phi" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover py-7 2xl:px-[75px] px-10 grid lg:grid-cols-2 grid-cols-1 gap-10 items-center min-h-80"
            style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
            <div class="col">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-6">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php if (have_rows('button')) {
                    while (have_rows('button')): the_row();
                        if (get_sub_field('title')) { ?>
                            <a href="<?php echo check_link(get_sub_field('link')) ?>" class="btn-base-yellow py-[12px] pl-4 pr-6 inline-flex items-center gap-x-3 text-xs" rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?>>
                                <?php echo svg('arrow-btn', '16', '16') ?>
                                <?php the_sub_field('title') ?>
                            </a>
                <?php
                        }
                    endwhile;
                } ?>
            </div>
            <div class="col">
                <?php echo wp_get_attachment_image(get_sub_field('image'), 'medium', '', array('class' => 'mx-auto')) ?>
            </div>
        </div>
    </div>
</section>