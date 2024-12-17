<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> relative tai_chinh_content_image" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="grid <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'grid-cols-2 items-center':'' ?>">
            <div class="col-span-1 xl:-mr-[17px]">
                <div
                    class="bg-gradient-blue-550 rounded-2xl shadow-base  relative z-10  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:py-10 py-5 2xl:px-[50px] px-10 min-h-[402px] flex flex-col justify-center':'px-6 pt-6 pb-[72px]' ?>">
                    <?php if (get_sub_field('title')) { ?>
                        <h2 class="heading-title mb-6">
                            <?php the_sub_field('title') ?>
                        </h2>
                    <?php } ?>
                    <?php if (have_rows('ask_ans')) { ?>
                        <div class="2xl:space-y-6 space-y-4 font-Helvetica">
                            <?php while (have_rows('ask_ans')): the_row(); ?>
                                <div class="item">
                                    <?php if (get_sub_field('ask')) { ?>
                                        <p class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-xl mb-3':'mb-[12px]' ?>">
                                            <?php the_sub_field('ask') ?>
                                        </p>
                                    <?php } ?>
                                    <?php if (get_sub_field('answ')) { ?>
                                        <p class="mb-2 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                            <?php the_sub_field('answ'); ?>
                                        </p>
                                    <?php } ?>
                                    <?php if (have_rows('danh_sach_nut')) { ?>
                                        <div class="space-y-[6px]">
                                            <?php while (have_rows('danh_sach_nut')): the_row();
                                                if (have_rows('button')) {
                                                    while (have_rows('button')): the_row();
                                                        if (get_sub_field('title')) { ?>
                                                            <p>
                                                                <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                                                    class="leading-tight text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                                                    <?php the_sub_field('title') ?>
                                                                    <?php echo svg('arrow-btn', '12', '12') ?>
                                                                </a>
                                                            </p>
                                                <?php
                                                        };
                                                    endwhile;
                                                }
                                                ?>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php  } ?>
                                    <?php if (have_rows('danh_sach_nut_ngang')) { ?>
                                        <div class="mt-1 mb-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex items-center before:shrink-0 before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block before:mr-[12px]':'space-y-2' ?>">
                                            <?php while (have_rows('danh_sach_nut_ngang')): the_row();
                                                if (have_rows('button')) {
                                                    while (have_rows('button')): the_row();
                                                        if (get_sub_field('title')) { ?>
                                                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>" class="leading-tight text-green font-bold gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' inline-flex [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green':'flex before:shrink-0 before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block text-xs' ?>">
                                                                <?php the_sub_field('title') ?>
                                                                <?php echo svg('arrow-btn', '12', '12') ?>
                                                            </a>
                                                <?php
                                                        };
                                                    endwhile;
                                                }
                                                ?>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php  } ?>
                                    <?php if (have_rows('danh_sach_content')) {
                                        while (have_rows('danh_sach_content')): the_row(); ?>
                                            <div class="flex items-center before:w-2 before:h-2 before:bg-primary-300 before:rounded-[2px] before:inline-block before:mr-[12px] mt-1 mb-3 font-medium <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                                <?php the_sub_field('info') ?>
                                            </div>
                                    <?php
                                        endwhile;
                                    }
                                    ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php } ?>
                    <?php if (have_rows('danh_sach')) { ?>
                        <ul class="list-icon space-y-[15px] font-Helvetica mb-6 text-primary-300 font-bold  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pl-8':'text-xs space-y-[14px]' ?>">
                            <?php while (have_rows('danh_sach')): the_row(); ?>
                                <li class="list-icon-item">
                                    <?php the_sub_field('info') ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php } ?>
                    <?php if (have_rows('danh_sach_nut_ngang')) { ?>
                        <div class="flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'pl-8':'' ?>">
                            <?php while (have_rows('danh_sach_nut_ngang')): the_row();
                                if (have_rows('button')) {
                                    while (have_rows('button')): the_row();
                                        if (get_sub_field('title')) { ?>
                                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>" class="leading-none text-green font-bold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105 font-Helvetica [&:not(:last-child)]:pr-[12px] [&:not(:last-child)]:mr-[12px] [&:not(:last-child)]:border-r [&:not(:last-child)]:border-green <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                                                <?php the_sub_field('title') ?>
                                                <?php echo svg('arrow-btn', '12', '12') ?>
                                            </a>
                                <?php
                                        };
                                    endwhile;
                                }
                                ?>
                            <?php endwhile; ?>
                        </div>
                    <?php  } ?>
                    <?php
                    if (have_rows('button')) {
                        while (have_rows('button')): the_row();
                            if (get_sub_field('title')) {
                    ?>
                                <div class="mt-4 pt-4 border-t border-[#CFCFCF]">
                                    <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                        class="btn-base-yellow py-[12px] pl-4 pr-6 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'inline-flex':'flex justify-center' ?> items-center gap-x-3 z-10 text-xs font-bold">
                                        <?php echo svg('arrow-btn', '16', '16') ?>
                                        <?php the_sub_field('title') ?>
                                    </a>
                                </div>
                    <?php
                            };
                        endwhile;
                    }
                    ?>
                </div>
            </div>
            <div class="col-span-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:-ml-[185px] -ml-24':'w-[85%] mx-auto relative z-10 -mt-10' ?>">
                <?php if (get_sub_field('link_youtube')) { ?>
                    <a href="<?php the_sub_field('link_youtube') ?>" data-fancybox
                        class="relative block <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-2xl pt-[59.64%]':'rounded-lg pt-[66.67%]' ?> overflow-hidden rounded-2xl group after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-35">
                        <?php echo wp_get_attachment_image(get_sub_field('image'), 'full', '', array('class' => 'absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105')) ?>

                        <div
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
                            <?php echo svgClass('play', '', '', 'lg:w-[80px] w-10') ?>
                        </div>
                    </a>
                <?php } else { ?>
                    <div class="relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-2xl pt-[59.64%]':'rounded-lg pt-[66.67%]' ?> overflow-hidden rounded-2xl group">
                        <?php echo wp_get_attachment_image(get_sub_field('image'), 'full', '', array('class' => 'absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105')) ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>