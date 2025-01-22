<div class="bg-gradient-blue-250 nhdt_contact <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'py-20':'py-8' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'md:flex':'' ?>">
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:pr-[50px] lg:pr-10 pr-5 lg:w-[575px] lg:max-w-[43%] w-[43%] shrink-0':'' ?>">
                <?php if (get_sub_field('title')) {
                    $title = get_sub_field('title');
                } else {
                    $title = get_field('cdc6_title', 'option');
                } ?>
                <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:mb-[72px] mb-10':'mb-6' ?>">
                    <?php echo $title ?>
                </h2>
                <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                    <div class="relative w-full pt-[66.666%] overflow-hidden rounded-[10px]">
                        <?php
                        if (get_sub_field('img')) {
                            $img = get_sub_field('img');
                        } else {
                            $img = get_field('cdc6_img', 'option');
                        }
                        ?>
                        <?php echo wp_get_attachment_image($img, 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
                    </div>
                <?php } ?>
            </div>
            <div class="flex-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:pl-[50px] lg:pl-10 pl-5 md:border-l border-[#D2D2D2]':'' ?>">
                <?php if (get_sub_field('title_contact')) {
                    $title_form = get_sub_field('title_contact');
                } else {
                    $title_form = get_field('cdc6_title_form', 'option');
                } ?>
                <h3 class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-6 xl:text-2xl text-xl ':'mb-4' ?>">
                    <?php echo $title_form ?>
                </h3>
                <div
                    class="form_support relative font-Helvetica bg-white lg:px-8 px-5 lg:py-6 py-5 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'rounded-2xl':'rounded-xl' ?>">
                    <?php echo do_shortcode('[contact-form-7 id="d5b6a0a" title="Đăng ký thông tin hỗ trợ"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>