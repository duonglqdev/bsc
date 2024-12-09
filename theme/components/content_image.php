<div class="xl:my-[100px] md:my-20 my-10 content_image" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="lg:grid lg:grid-cols-2 xl:gap-0 gap-10">
            <div class="col-span-1 xl:pr-[42px]">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-4">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <div class="font-Helvetica text-justify">
                    <?php if (get_sub_field('content_tren')) { ?>
                        <div class="mb-4 font-bold">
                            <?php the_sub_field('content_tren') ?>
                        </div>
                    <?php } ?>
                    <?php if (have_rows('list_content')) { ?>
                        <ul class="flex-1 space-y-3 list-icon">
                            <?php while (have_rows('list_content')): the_row(); ?>
                                <li class="font-semibold list-icon-item">
                                    <?php the_sub_field('content') ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php } ?>
                    <?php if (get_sub_field('content')) {  ?>
                        <div class="font-bold mt-4 text-justify">
                            <?php the_sub_field('content') ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if (have_rows('button')) {
                    while (have_rows('button')): the_row();
                        if (get_sub_field('title')) {
                ?>
                            <div class="mt-8">
                                <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                    class="btn-base-yellow px-6 py-4 inline-flex items-center gap-x-3">
                                    <?php echo svg('arrow-btn', '16', '16') ?>
                                    <?php the_sub_field('title') ?>
                                </a>
                            </div>
                <?php
                        }
                    endwhile;
                } ?>
            </div>
            <div class="col-span-1 xl:pl-[22px]">
                <div class="relative overflow-hidden pt-[65.743%] w-full rounded-2xl">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
                </div>
            </div>
        </div>

    </div>
</div>