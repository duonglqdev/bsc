<?php
$generateRandomString = generateRandomString();
?>
<section class="bg-gradient-blue-300 dvck_process" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="xl:py-[100px] py-20">
        <div class="container overflow-hidden">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title text-center mb-10">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('hanh_trinh')) { ?>
                <div class="grid grid-cols-4 lg:translate-x-[120px]">
                    <?php while (have_rows('hanh_trinh')): the_row(); ?>
                        <a href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="col-span-1 min-h-[187px] step-item transition-all duration-500 relative bg-no-repeat bg-full">
                            <div
                                class="flex flex-col items-center relative group z-10 justify-center w-full h-full cursor-pointer">
                                <div
                                    class="text-primary-300 group-hover:text-white transition-all duration-500">
                                    <?php echo svg_dir(get_sub_field('icon')) ?>
                                </div>
                                <div class="mt-[7px] text-center text-xl font-bold">
                                    <?php the_sub_field('title') ?>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="py-16 bg-[#F0F9FF]">
        <div class="container">
            <?php if (get_sub_field('title_2')) { ?>
                <h2 class="heading-title mb-10">
                    <?php the_sub_field('title_2') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('product')) { ?>
                <ul
                    class="customtab-nav flex items-center xl:gap-[100px] gap-12 relative  border-b border-[#B8B8B8]">
                    <?php
                    $i = 0;
                    while (have_rows('product')): the_row();
                        $i++; ?>
                        <li>
                            <button data-tabs="#<?php echo $generateRandomString ?>-<?php echo $i ?>"
                                class="<?php if ($i == 1) echo 'active' ?> inline-flex pb-6 text-xl uppercase relative after:absolute after:w-full after:bottom-0 after:left-0 after:h-[4px] [&:not(.active)]:text-black text-[#000] after:bg-yellow-100 after:transition-all after:duration-500 hover:after:!opacity-100 hover:after:!visible font-bold items-center gap-2 [&:not(.active)]:opacity-70 opacity-100 [&:not(.active)]:after:opacity-0 after:opacity-100 [&:not(.active)]:after:invisible after:visible hover:!opacity-100 transition-all duration-500">
                                <?php echo svg_dir(get_sub_field('icon'), '30', '30') ?>
                                <?php the_sub_field('title') ?>
                            </button>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="mt-10">
                    <?php
                    $i = 0;
                    while (have_rows('product')): the_row();
                        $i++;
                    ?>
                        <div id="<?php echo $generateRandomString ?>-<?php echo $i ?>"
                            class="space-y-10 tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>">
                            <?php if (have_rows('service')) {
                                $y = 0;
                                while (have_rows('service')): the_row();
                                    $y++;
                                    if ($y % 2 == 1) {
                                        $class = 'bg-white p-8 rounded-3xl lg:flex lg:gap-16 gap-10 items-center';
                                    } else {
                                        $class = 'bg-white p-8 rounded-3xl lg:flex lg:flex-row-reverse lg:gap-16 gap-10 items-center';
                                    }
                            ?>
                                    <div class="<?php echo $class ?>">
                                        <div class="w-[563px] max-w-[50%]">
                                            <div
                                                class="relative w-full pt-[62.166%] rounded-2xl overflow-hidden">
                                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <?php if (get_sub_field('title')) { ?>
                                                <h3
                                                    class="uppercase font-bold xl:text-2xl text-lg mb-6 text-primary-300">
                                                    <?php the_sub_field('title') ?>
                                                </h3>
                                            <?php } ?>
                                            <?php if (have_rows('danh_sach')) { ?>
                                                <ul class="list-icon space-y-4 font-Helvetica mb-6">
                                                    <?php while (have_rows('danh_sach')): the_row(); ?>
                                                        <li class="list-icon-item">
                                                            <?php the_sub_field('content') ?>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php } ?>
                                            <?php
                                            if (have_rows('button')) {
                                                while (have_rows('button')): the_row();
                                                    if (get_sub_field('title')) {
                                            ?>
                                                        <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                                            class="btn-base-yellow py-[12px] pl-4 pr-6 text-xs font-bold inline-flex items-center gap-x-3">
                                                            <?php echo svg('arrow-btn', '20') ?>
                                                            <?php the_sub_field('title') ?>
                                                        </a>
                                            <?php
                                                    }
                                                endwhile;
                                            }
                                            ?>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>