<section class="bg-gradient-blue-350 mtk_introduce" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="relative <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:pt-16 pt-12 pb-[50px]' : 'pt-[50px]' ?>">
        <div class="container">
            <div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid grid-cols-2 gap-10 items-center' : '' ?>">
                <div class="col-span-1">
                    <?php if (get_sub_field('title')) { ?>
                        <h2 class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-10' : 'mb-6' ?>">
                            <?php the_sub_field('title') ?>
                        </h2>
                    <?php } ?>
                    <?php if (have_rows('danh_sach')) { ?>
                        <ul
                            class="list-icon font-Helvetica text-primary-300 font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pl-6 mb-8 space-y-[15px]' : 'mb-5 space-y-4' ?>">
                            <?php while (have_rows('danh_sach')): the_row(); ?>
                                <li class="list-icon-item !gap-2">
                                    <?php the_sub_field('content') ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php } ?>
                    <?php if (have_rows('danh_sach_nut')) { ?>
                        <div class="flex items-center gap-x-4">
                            <?php
                            $i = 0;
                            while (have_rows('danh_sach_nut')): the_row();
                                $i++;
                                if ($i % 2 == 1) {
                                    $class = 'bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d]';
                                } else {
                                    $class = 'bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547]';
                                }
                                if (have_rows('button')) {
                                    while (have_rows('button')): the_row();
                                        if (get_sub_field('title')) {
                            ?>
                                            <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                                class="<?php echo $class ?> inline-block rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:py-3 py-2' : 'flex-1 py-[12px] !leading-[1.313]' ?>" target="_blank">
                                                <span class="block relative z-10">
                                                    <?php the_sub_field('title') ?>
                                                </span>
                                            </a>
                            <?php
                                        }
                                    endwhile;
                                };
                            endwhile;
                            ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'col-span-1':'relative pt-8' ?>">
                <?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div class="absolute top-0 -right-10 pointer-events-none w-4/5 h-full">
								<?php echo svg( 'before-mb' ) ?>
							</div>
						<?php } ?>
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large','',array('class'=>'relative z-[2]')) ?>
                </div>
            </div>
        </div>
        <?php if (get_sub_field('keyvisual')&&! wp_is_mobile() && ! bsc_is_mobile()) { ?>
            <div class="absolute top-0 right-0 pointer-events-none">
                <?php echo svg_dir(get_sub_field('keyvisual')) ?>
            </div>
        <?php } ?>
    </div>
    <div class="pt-[50px] xl:pb-[100px] pb-[50px]">
        <div class="container">
            <?php if (get_sub_field('title_2')) { ?>
                <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                    <?php the_sub_field('title_2') ?>
                </h2>
            <?php } ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex':'' ?>">
                <div class="border-[#C4C4C4] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2 xl:pr-[106px] pr-20 border-r':'border-b pb-6 mb-6' ?>">
                    <?php if (get_sub_field('mota')) { ?>
                        <div
                            class="font-bold !leading-normal <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[32px] text-2xl xl:mb-[54px] mb-10':'text-xl mb-6' ?>">
                            <?php the_sub_field('mota') ?>
                        </div>
                    <?php } ?>
                    <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex gap-[61px] items-center':'' ?>">
                        <?php if (have_rows('link_tai')) { ?>
                            <div class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex flex-col gap-[21px]':'grid grid-cols-2 gap-4' ?>">
                                <?php while (have_rows('link_tai')): the_row(); ?>
                                    <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>">
                                        <?php echo wp_get_attachment_image(get_sub_field('icon'), 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                            <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                                <strong
                                    class="text-primary-300 text-2xl"><?php _e('hoặc', 'bsc') ?></strong>
                            <?php } ?>
                        <?php } ?>
                        <?php
                        $qr_app_mobile = get_sub_field('qr_code_image');
                        if ($qr_app_mobile && !wp_is_mobile() && !bsc_is_mobile()) { ?>
                            <div class="qr p-3 bg-white max-w-[184px] rounded-lg shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
                                <?php echo wp_get_attachment_image($qr_app_mobile, 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
                <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'w-1/2 xl:pl-[106px] pl-20':'' ?>">
                    <?php if (get_sub_field('title_3')) { ?>
                        <h3 class="font-bold !leading-normal <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[32px] text-2xl mb-6':'text-xl mb-4' ?>">
                            <?php the_sub_field('title_3') ?>
                        </h3>
                    <?php } ?>
                    <ul class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-lg space-y-4 ':'text-xs space-y-[12px]' ?>">
                        <?php if (have_rows('address')) {
                            while (have_rows('address')): the_row(); ?>
                                <li class="flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-4':'gap-[12px]' ?>">
                                    <div class="flex-shrink-0">
                                    <?php echo svgClass( 'location', '', '', !wp_is_mobile() && !bsc_is_mobile() ?'w-[33px] h-[33px]':'w-6 h-6') ?>
                                    </div>
                                    <p>
                                        <?php if (get_sub_field('ten_chi_nhanh')) { ?>
                                            <strong><?php the_sub_field('ten_chi_nhanh') ?> </strong>
                                        <?php } ?>
                                        <?php the_sub_field('add') ?>
                                    </p>
                                </li>
                        <?php
                            endwhile;
                        }
                        ?>
                        <li class="flex items-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'gap-4':'gap-[12px]' ?>">
                            <?php if (get_sub_field('title_qr')) { ?>
                                <div class="flex-shrink-0">
                                <?php echo svgClass( 'location', '', '', !wp_is_mobile() && !bsc_is_mobile() ?'w-[33px] h-[33px]':'w-6 h-6') ?>
                                </div>
                                <p>
                                    <strong><?php the_sub_field('title_qr') ?></strong>
                                </p>
                            <?php } ?>
                            <?php
                            $qr_app_mobile = get_sub_field('qr_code_image_2');
                            if ($qr_app_mobile && !wp_is_mobile() && !bsc_is_mobile()) { ?>
                                <div class="p-1 bg-white max-w-[104px] ml-6 rounded shadow-[0px_4px_30px_0px_rgba(42,92,170,0.1)]">
                                    <?php echo wp_get_attachment_image($qr_app_mobile, 'medium', '', array('class' => 'transition-all duration-500 hover:scale-105')) ?>
                                </div>
                            <?php
                            } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>