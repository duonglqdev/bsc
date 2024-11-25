<?php
$post_id = get_the_ID();
?>
<div
    class="rounded-2xl bg-gradient-blue-200 flex flex-col gap-4 py-6 px-[12px] h-full font-Helvetica expert_item">
    <div class="flex flex-col items-center">
        <div class="w-[120px] rounded-full overflow-hidden">
            <div class="relative w-full pt-[100%] group expert-img">
                <img src="<?php echo bsc_post_thumbnail_medium() ?>"
                    alt="<?php the_title() ?>"
                    class="absolute w-full h-full inset-0 m-auto object-cover transition-all duration-500 group-hover:scale-105">
            </div>
        </div>
        <?php
        $menh = get_the_terms($post_id, 'menh');
        if ($menh) {
        ?>
            <div class="-mt-5 expert-destiny">
                <div class="rounded-[45px] px-[14px] py-1 inline-flex gap-[6px] items-center font-semibold text-[12px] relative"
                    style="background-color:<?php the_field('background', $menh[0]) ?>; color:<?php the_field('color', $menh[0]) ?>;">
                    <div
                        class="w-5 h-5 bg-white rounded-full flex items-center justify-center">
                        <?php echo wp_get_attachment_image(get_field('icon', $menh[0]), 'medium', '', array('class' => 'w-[12px] h-[12px] object-contain')) ?>
                    </div>
                    <?php echo $menh[0]->name; ?>
                </div>
            </div>
        <?php } ?>
        <h4 class="font-bold text-xl mt-1 expert-name">
            <?php the_title() ?>
        </h4>
    </div>
    <div
        class="rounded-[10px] bg-white px-[14px] py-4 flex items-center expert-contact">
        <div class="flex-1 2xl:pr-4 pr-3  2xl:mr-4 mr-3 border-r border-[#E9E9E9] max-w-[75%]">
            <p class="font-bold mb-[12px]">
                <?php _e('Thông tin liên hệ', 'bsc') ?>
            </p>
            <?php if (get_field('number')) { ?>
                <a href="tel:<?php the_field('number') ?>" class="block relative pl-6 text-xs break-words">
                <?php echo svgClass( 'fone', '19', '19','absolute top-0.5 left-0' ) ?>
                    <?php the_field('number') ?>
                </a>
            <?php } ?>
            <?php if (get_field('email')) { ?>
                <a href="mailto:<?php the_field('email') ?>"
                    class="block relative pl-6 text-xs break-words">
                    <?php echo svgClass( 'e-mail', '19', '19','absolute top-0.5 left-0' ) ?>
                    <?php the_field('email') ?>
                </a>
            <?php } ?>
        </div>
        <?php if (get_field('ma_qr')) { ?>
            <div class="max-w-[65px] flex-1 shrink-0 expert-qr">
                <?php echo wp_get_attachment_image(get_field('ma_qr'), 'medium', '', array('class' => 'w-full h-auto transition-all duration-500 hover:scale-105')) ?>
            </div>
        <?php } ?>
    </div>
    <ul class="space-y-3 text-xs expert-info">
        <?php
        $kinh_nghiem = get_the_terms($post_id, 'kinh-nghiem');
        if ($kinh_nghiem) {
        ?>
            <li class="flex items-start gap-2">
                <?php echo svgClass('triangle', '20', '20', 'shrink-0') ?>
                <p>
                    <?php _e('Kinh nghiệm', 'bsc') ?>: <strong><?php echo $kinh_nghiem[0]->name; ?></strong>
                </p>
            </li>
        <?php } ?>
        <?php
        $trinh_do_hoc_van = get_the_terms($post_id, 'trinh-do-hoc-van');
        if ($trinh_do_hoc_van) {
        ?>
            <li class="flex items-start gap-2">
                <?php echo svgClass('triangle', '20', '20', 'shrink-0') ?>
                <p>
                    <?php _e('Trình độ học vấn', 'bsc') ?>: <strong><?php echo $trinh_do_hoc_van[0]->name; ?></strong>
                </p>
            </li>
        <?php } ?>
        <?php
        $truong_phai_dau_tu = get_field('truong_phai_dau_tu');
        if ($truong_phai_dau_tu) {
        ?>
            <li class="flex items-start gap-2">
                <?php echo svgClass('triangle', '20', '20', 'shrink-0') ?>
                <p>
                    <?php _e('Trường phái đầu tư', 'bsc') ?>: <strong><?php the_field('truong_phai_dau_tu') ?></strong>
                </p>
            </li>
        <?php } ?>
        <?php
        $dia_chi = get_the_terms($post_id, 'thanh-pho');
        if ($dia_chi) {
        ?>
            <li class="flex items-start gap-2">
                <?php echo svgClass('triangle', '20', '20', 'shrink-0') ?>
                <p>
                    <?php _e('Địa chỉ', 'bsc') ?>: <strong><?php echo $dia_chi[0]->name; ?></strong>
                </p>
            </li>
        <?php } ?>
    </ul>
    <div class="grid grid-cols-2 gap-2 font-body expert-btn mt-auto">
        <?php if (get_field('link')) { ?>
            <a href="<?php echo check_link(get_field('link')) ?>"
                class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
                <span class="block relative z-10">
                    <?php _e('Mở tài khoản', 'bsc') ?>
                </span>
            </a>
        <?php } ?>
        <button data-modal-target="expert-modal" data-modal-toggle="expert-modal"
            class="expert-open bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block px-3 py-3 rounded-lg font-bold text-xs relative transition-all duration-500 text-center w-full">
            <span class="block relative z-10">
                <?php _e('Chi tiết chuyên gia', 'bsc') ?>
            </span>
        </button>
    </div>
    <div class="hidden expert-desc">
        <div class="space-y-6">
            <?php if (get_field('introduce')) { ?>
                <div class="intro">
                    <p class="font-bold mb-2">
                        <?php _e('Giới thiệu bản thân', 'bsc') ?>
                    </p>
                    <div class="text-xs">
                        <?php the_field('introduce') ?>
                    </div>
                </div>
            <?php  } ?>
            <?php if (get_field('exp')) { ?>
                <div class="intro">
                    <p class="font-bold mb-2">
                        <?php _e('Kinh nghiệm', 'bsc') ?>
                    </p>
                    <div class="text-xs">
                        <?php the_field('exp') ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>