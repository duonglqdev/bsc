<section class="banner_khuyen_mai xl:my-[100px] my-20" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="rounded-2xl bg-no-repeat bg-cover overflow-hidden xl:pl-[113px] pl-20 xl:pr-[110px] pr-20px lg:grid lg:grid-cols-2 lg:py-0 py-5 lg:gap-5 items-center"
            style="background-image:url(<?php echo wp_get_attachment_image_url(get_sub_field('background'), 'full') ?>)">
            <div class="py-10">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-6">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php if (have_rows('danh_sach_nut')) { ?>
                    <div class="space-y-2 pl-14">
                        <?php
                        $i = 0;
                        while (have_rows('danh_sach_nut')): the_row();
                            $i++;
                            if ($i == 1) {
                                if (have_rows('button')) {
                                    while (have_rows('button')): the_row();
                                        if (get_sub_field('title')) {
                        ?>
                                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php the_sub_field('link') ?>"
                                                class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
                                                <?php the_sub_field('title') ?>
                                                <?php echo svg('arrow-btn', '12', '12') ?>
                                            </a>
                        <?php
                                        }
                                    endwhile;
                                }
                            }
                        endwhile; ?>
                        <div class="flex items-center">
                            <?php
                            $i = 0;
                            while (have_rows('danh_sach_nut')): the_row();
                                $i++;
                                if ($i > 1) {
                                    if (have_rows('button')) {
                                        while (have_rows('button')): the_row();
                                            if (get_sub_field('title')) {
                            ?>
                                                <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php the_sub_field('link') ?>"
                                                    class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green">
                                                    <?php the_sub_field('title') ?>
                                                    <?php echo svg('arrow-btn', '12', '12') ?>
                                                </a>
                            <?php
                                            }
                                        endwhile;
                                    }
                                }
                            endwhile; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="">
                <?php echo wp_get_attachment_image(get_sub_field('image'), 'full', '', array('class' => 'w-full')) ?>
            </div>
        </div>
    </div>
</section>