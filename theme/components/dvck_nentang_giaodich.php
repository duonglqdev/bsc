<?php
$generateRandomString = generateRandomString();
?>
<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> dvck_nentang_giaodich" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-center mb-10':'mb-[26px]' ?>">
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
                    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:grid lg:grid-cols-2 lg:gap-[84px] items-end lg:space-y-0 space-y-5':'' ?>">
                    <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                            <div class="col-span-1">
                                <div class="relative w-full pt-[76%]">
                                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-contain m-auto')) ?>
                                </div>
                            </div>
                    <?php } ?>    
                        <div class="col-span-1">
                            <h3 class="flex items-center font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?' 2xl:text-2xl text-xl 2xl:mb-8 mb-5 gap-4':'mb-4 gap-2 text-lg' ?>">
                                <?php echo svgClass_dir(get_sub_field('icon'), '', '', '2xl:w-10 lg:w-8 w-[30px]') ?>
                                <?php the_sub_field('title') ?>
                            </h3>
                            <?php if (get_sub_field('mota')) { ?>
                                <p class="font-bold text-justify font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-xl mb-6':'mb-4' ?>">
                                    <?php the_sub_field('mota') ?>
                                </p>
                            <?php } ?>
                            <?php if (have_rows('danh_sach')) { ?>
                                <ul class="list-icon space-y-4 font-Helvetica mb-8 2xl:text-lg font-bold ">
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
                                        <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                            class="btn-base-yellow text-xs font-bold  items-center gap-x-3 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-[12px] pl-4 pr-6 inline-flex':'flex justify-center' ?>">
                                            <?php echo svg('arrow-btn', '20') ?>
                                            <?php the_sub_field('title') ?>
                                        </a>
                            <?php
                                    }
                                endwhile;
                            }
                            ?>
                            <?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div class="relative w-full pt-[76%] mt-[54px]">
                            <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-contain m-auto')) ?>
							</div>
						<?php } ?>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
            <div class="lg:w-1/2 mt-[30px] text-center">
                <ul
                    class="customtab-nav has-line inline-flex justify-center gap-8 pb-2 border-b border-[#D9D9D9] relative">
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