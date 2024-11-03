<div class="py-20 bg-gradient-blue-250 nhdt_contact" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="lg:flex">
            <div class="2xl:pr-[50px] pr-10  lg:w-[575px] lg:max-w-[43%] shrink-0">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title 2xl:mb-[72px] mb-10">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <div class="relative w-full pt-[66.666%] overflow-hidden rounded-[10px]">
                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'absolute w-full h-full inset-0 object-cover transition-all duration-500 hover:scale-105')) ?>
                </div>
            </div>
            <div class="flex-1 2xl:pl-[50px] pl-10 lg:border-l border-[#D2D2D2]">
                <h3 class="mb-6 text-primary-300 font-bold xl:text-2xl text-xl">
                    <?php _e('Đăng ký thông tin hỗ trợ', 'gnws') ?>
                </h3>
                <div
                    class="form_support relative font-Helvetica bg-white lg:px-8 px-5 lg:py-6 py-4 rounded-2xl">
                    <?php echo do_shortcode('[contact-form-7 id="d5b6a0a" title="Đăng ký thông tin hỗ trợ"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>