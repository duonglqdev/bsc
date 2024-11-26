<section class="py-[77px] bg-no-repeat bg-cover bg-center ttnc_report_bsc" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>
    style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
    <div class="container">
        <div class="lg:w-[602px] lg:max-w-[60%] bg-white p-10 rounded-2xl">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title text-center mb-6 !leading-none">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php  } ?>
            <?php if (have_rows('bao_cao')) { ?>
                <ul class="divide-y divide-solid space-y-4">
                    <?php while (have_rows('bao_cao')): the_row(); ?>
                        <li class="[&:not(:first-child)]:pt-4">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="flex items-center justify-between text-primary-300 font-bold transition-all duration-500 hover:text-green">
                                <span class="inline-flex items-center gap-2">
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
                        <div class="mt-6">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="inline-flex items-center gap-3 pl-6 pr-8 py-4 btn-base-yellow text-xs font-bold min-h-[52px] rounded-md">
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