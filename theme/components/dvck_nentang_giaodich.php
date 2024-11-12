<?php
$generateRandomString = generateRandomString();
?>
<section class="xl:my-[100px] my-20 dvck_nentang_giaodich" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('nen_tang')) { ?>
            <?php
            $i = 0;
            while (have_rows('nen_tang')): the_row();
                $i++;
            ?>
                <div class="tab-content <?php echo ($i == 1) ? 'block' : 'hidden'; ?>" id="<?php echo $generateRandomString ?>-<?php echo $i ?>">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-[84px] items-end">
                        <div class="col-span-1">
                            <div class="relative w-full pt-[76%]">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-contain m-auto')) ?>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <h3 class="flex items-center gap-4 mb-8 font-bold text-2xl">
                                <?php echo svgClass_dir(get_sub_field('icon'), '', '', 'max-w-10') ?>
                                <?php the_sub_field('title') ?>
                            </h3>
                            <?php if (get_sub_field('mota')) { ?>
                                <p class="font-bold mb-6 text-lg">
                                    <?php the_sub_field('mota') ?>
                                </p>
                            <?php } ?>
                            <?php if (have_rows('danh_sach')) { ?>
                                <ul class="list-icon space-y-4 font-Helvetica mb-8 text-lg font-bold">
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
                </div>
            <?php
            endwhile;
            ?>
            <div class="lg:w-1/2 mt-[30px] text-center">
                <ul
                    class="customtab-nav inline-flex justify-center gap-8 pb-2 border-b border-[#D9D9D9] relative">
                    <?php
                    $i = 0;
                    while (have_rows('nen_tang')): the_row();
                        $i++;
                    ?>
                        <li>
                            <button data-tabs="#<?php echo $generateRandomString ?>-<?php echo $i ?>"
                                class="font-bold text-black &:not(.active)]:text-opacity-70 transition-all duration-500 hover:scale-105 <?php if ($i == 1) echo 'active' ?>">
                                <?php the_sub_field('title') ?>
                            </button>
                        </li>
                    <?php
                    endwhile;
                    ?>
                    <span
                        class="line absolute w-1/2 bottom-0 h-[2px] bg-yellow-100 duration-500 transition-all left-0"></span>
                </ul>
            </div>
        <?php } ?>
    </div>
</section>