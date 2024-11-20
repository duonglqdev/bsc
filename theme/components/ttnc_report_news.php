<?php
$number = get_sub_field('number');
?>
<section class="xl:mt-[125px] xl:mb-[100px] my-20 ttnc_report_news" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="flex justify-between items-center mb-10">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title"><?php the_sub_field('title') ?></h2>
            <?php } ?>
            <?php if (have_rows('button')) {
                while (have_rows('button')): the_row();
                    if (get_sub_field('title')) { ?>
                        <a href="<?php echo check_link(get_sub_field('link')) ?>"
                            class="inline-flex items-center gap-3 pl-5 pr-4 py-2 btn-base-yellow text-xs font-bold min-h-[38px]">
                            <?php echo svg('arrow-btn', '16', '16') ?>
                            <?php the_sub_field('title') ?>
                        </a>
            <?php
                    }
                endwhile;
            } ?>
        </div>
        <?php
        $array_data = array(
            'lang' => pll_current_language(),
            'maxitem' => $number
        );
        $response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
        if ($response) {
            $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
        ?>
            <div class="lg:flex lg:gap-[70px]">
                <div class="lg:w-[843px] lg:max-w-[66%]">
                    <div class="grid grid-cols-2 gap-x-[23px] gap-y-6">
                        <?php
                        foreach ($response->d as $news) {
                            get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
                                'data' => $news,
                                'get_array_id_taxonomy' => $get_array_id_taxonomy,
                            ));
                        }
                        ?>
                    </div>
                </div>
                <div class="flex-1">
                    <?php if (get_sub_field('title_ma_hieu_qua')) { ?>
                        <h2
                            class="text-primary-300 font-bold text-[28px] pl-6 relative before:absolute before:w-[3px] before:top-1/2 before:-translate-y-1/2 before:left-0 before:h-7 before:bg-primary-300 mb-8 !leading-tight">
                            <?php the_sub_field('title_ma_hieu_qua') ?>
                        </h2>
                    <?php } ?>
                    <div class="flex-1 flex items-center flex-wrap gap-4 mb-10">
                        <?php
                        for ($i = 0; $i < 6; $i++) {
                        ?>
                            <a href=""
                                class="inline-flex rounded-lg bg-[#1CCD83] text-white font-bold items-center gap-4 py-3 px-[12px]">
                                <span>
                                    HPG
                                </span>
                                <span>
                                    +11%
                                </span>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="p-6 bg-gradient-blue-50 mb-10">
                        <?php if (get_sub_field('title_dang_ky')) { ?>
                            <h3 class="text-primary-300 font-bold text-2xl mb-4">
                                <?php the_sub_field('title_dang_ky') ?>
                            </h3>
                        <?php } ?>
                        <div class="form_report">
                            <?php echo do_shortcode('[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]') ?>
                        </div>
                    </div>
                    <?php if (get_sub_field('title_tien_ich')) { ?>
                        <h3 class="text-primary-300 font-bold text-2xl mb-4">
                            <?php the_sub_field('title_tien_ich') ?>
                        </h3>
                    <?php } ?>
                    <?php if (have_rows('tien_ich')) { ?>
                        <div class="space-y-[14px]">
                            <?php while (have_rows('tien_ich')): the_row(); ?>
                                <div
                                    class="rounded-lg overflow-hidden min-h-[161px] lg:px-9 px-5 py-5 flex flex-col justify-center relative text-white group">
                                    <?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-105')) ?>
                                    <div
                                        class="absolute w-full h-full bg-gradient-blue-to-right-150 inset-0 pointer-events-none">
                                    </div>
                                    <div class="relative z-10 space-y-2 font-Helvetica">
                                        <?php if (get_sub_field('title')) { ?>
                                            <h4 class="font-bold lg:max-w-[163px]">
                                                <?php the_sub_field('title') ?>
                                            </h4>
                                        <?php } ?>
                                        <?php
                                        if (have_rows('button')) {
                                            while (have_rows('button')): the_row();
                                                if (get_sub_field('title')) {
                                        ?>
                                                    <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                                        class="inline-flex items-center gap-2 text-xs font-medium transition-all duration-500 hover:scale-105">
                                                        <?php the_sub_field('title') ?>
                                                        <?php echo svgpath('arrow-btn', '12', '12', 'fill-white') ?>
                                                    </a>
                                        <?php
                                                }
                                            endwhile;
                                        }
                                        ?>
                                    </div>

                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>