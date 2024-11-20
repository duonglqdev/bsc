<?php $tab = generateRandomString();
$check_login = bsc_is_user_logged_out();
?>
<section class="mt-14 xl:mb-pb-[110px] mb-20 ttnc_khuyen_nghi" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="lg:flex gap-12">
            <div class="lg:w-[745px] lg:max-w-[56%]">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title mb-8">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <?php
                $array_data = array();
                $response = get_data_with_cache('GetRecommendedCategory', $array_data, $time_cache);
                if ($response) {
                ?>
                    <ul class="customtab-nav flex items-center gap-4 mb-6">
                        <?php
                        $i = 0;
                        foreach ($response->d as $news) {
                            $i++; ?>
                            <li>
                                <button data-tabs="#<?php echo $tab ?>-<?php echo $i ?>"
                                    class="<?php if ($i == 1) echo 'active' ?> inline-block px-6 py-2 [&:not(.active)]:text-paragraph text-white font-bold rounded-lg [&:not(.active)]:bg-primary-50 bg-primary-300 hover:!bg-primary-300 hover:!text-white transition-all duration-500">
                                    <?php echo $news->name ?>
                                </button>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php
                    $i = 0;
                    foreach ($response->d as $news) {
                        $i++; ?>
                        <div class="tab-content <?php echo $i == 1 ? 'block' : 'hidden' ?>"
                            id="<?php echo $tab ?>-<?php echo $i ?>">
                            <div class="relative pt-[76.2416%] w-full rounded-lg overflow-hidden">
                                <?php $class = $check_login ? '' : 'blur-sm'; ?>
                                <div class="absolute w-full h-full inset-0 <?php echo $class ?>">
                                    <ul
                                        class="flex items-center font-bold text-center text-white bg-primary-300 prose-li:p-3 py-[7px] gap-5 px-[30px] justify-between">
                                        <li class="w-[8%]"><?php _e('Mã', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Khuyến nghị', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Giá', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Mục tiêu', 'bsc') ?></li>
                                        <li class="w-[16%]"><?php _e('Upside', 'bsc') ?></li>
                                    </ul>
                                    <div class="overflow-y-auto scroll-bar-custom max-h-[90%]">
                                        <?php
                                        for ($j = 0; $j < 12; $j++) {
                                        ?>
                                            <ul
                                                class="flex gap-5 text-center justify-between px-[30px] py-4 items-center [&:nth-child(odd)]:bg-white [&:nth-child(even)]:bg-primary-50">
                                                <li class="w-[8%] font-medium">CTG</li>
                                                <li class="w-[16%] font-medium"><span
                                                        class="inline-block bg-[#D6F6DE] rounded-[45px] px-4 py-0.5 text-[#30D158] min-w-[78px]">Mua</span>
                                                </li>
                                                <li class="w-[16%] font-bold text-[#1CCD83]">35.05</li>
                                                <li class="w-[16%] font-medium">43.65</li>
                                                <li class="w-[16%] font-bold text-[#1CCD83]">+24.45%</li>
                                            </ul>
                                        <?php
                                        }
                                        ?>

                                    </div>

                                </div>
                                <?php if ($check_login) {
                                    echo $result['html'];
                                } ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php  } ?>
            </div>
            <div class="flex-1">
                <?php if (get_sub_field('title_phan_tich')) { ?>
                    <h2 class="heading-title mb-8">
                        <?php the_sub_field('title_phan_tich') ?>
                    </h2>
                <?php } ?>
                <?php if (get_sub_field('image')) { ?>
                    <div class="mb-6">
                        <a href="<?php echo check_link(get_sub_field('link_youtube')) ?>" data-fancybox
                            class="rounded-[10px] overflow-hidden pt-[55.576%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40">
                            <?php echo wp_get_attachment_image(get_sub_field('image'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover')) ?>
                            <div
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
                                <?php echo svg('play', '62', '62') ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="flex flex-col">
                    <div class="border border-[#C9CCD2] rounded-lg flex font-medium text-xs overflow-hidden">
                        <div
                            class="w-[48.8%] border-r border-[#C9CCD2] text-primary-300 font-medium">
                            <div
                                class="flex justify-end items-center pt-[30px] pb-[13px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5 font-semibold">
                                <div class="w-[60px]">
                                    <p>
                                        2023
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-[30px]">
                                <div class="w-[66%] px-2 py-1 font-semibold">
                                    GDP (YoY%)
                                </div>
                                <div class="flex-1 text-center">
                                    <p>6.1</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-[30px]">
                                <div class="w-[66%] px-2 py-1 font-semibold">
                                    CPI trung bình (YoY%)*
                                </div>
                                <div class="flex-1 text-center">
                                    <p>6.1</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-[30px]">
                                <div class="w-[66%] px-2 py-1 font-semibold">
                                    Xuất khẩu (YoY%)*
                                </div>
                                <div class="flex-1 text-center">
                                    <p>6.1</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-[30px]">
                                <div class="w-[66%] px-2 py-1 font-semibold">
                                    Nhập khẩu (YoY%)*
                                </div>
                                <div class="flex-1 text-center">
                                    <p>6.1</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-[30px]">
                                <div class="w-[66%] px-2 py-1 font-semibold">
                                    LSĐH (YoY%)*
                                </div>
                                <div class="flex-1 text-center">
                                    <p>6.1</p>
                                </div>
                            </div>
                            <div class="flex gap-1 items-center min-h-[30px]">
                                <div class="w-[66%] px-2 py-1 font-bold">
                                    USD/VND LNH trung bình
                                </div>
                                <div class="flex-1 text-center font-semibold">
                                    <p>23,839</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F5FCFF] grid grid-cols-2 text-center">
                            <div class="text-[#FF0017]">
                                <div
                                    class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
                                    <p class="font-semibold mb-1">
                                        BSC kịch bản 1
                                    </p>
                                    <div class="grid grid-cols-2 font-semibold">
                                        <p>2024</p>
                                        <p>2025</p>
                                    </div>
                                </div>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                ?>
                                    <div
                                        class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                        <p>6.1</p>
                                        <p>5.25</p>
                                    </div>
                                <?php
                                }
                                ?>
                                <div
                                    class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
                                    <p>22,842</p>
                                    <p>23,839</p>
                                </div>
                            </div>
                            <div class="text-[#30D158]">
                                <div
                                    class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
                                    <p class="font-semibold mb-1">
                                        BSC kịch bản 2
                                    </p>
                                    <div class="grid grid-cols-2 font-semibold">
                                        <p>2024</p>
                                        <p>2025</p>
                                    </div>
                                </div>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                ?>
                                    <div
                                        class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                        <p>6.1</p>
                                        <p>5.25</p>
                                    </div>
                                <?php
                                }
                                ?>
                                <div
                                    class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
                                    <p>22,842</p>
                                    <p>23,839</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (have_rows('button')) {
                        while (have_rows('button')): the_row();
                            if (get_sub_field('title')) {
                    ?>
                                <div class="text-right mt-4">
                                    <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                        class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
                                        <?php echo svg('arrow-btn', '20', '20') ?>
                                        <?php the_sub_field('title') ?>
                                    </a>
                                </div>
                    <?php
                            }
                        endwhile;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>