<div
    class="job_item grid lg:grid-cols-9 gap-5 font-Helvetica mb-[30px] pb-[30px] border-b border-[#C3C3C3]">
    <div class="col-span-3 job_title">
        <p class="mb-4 text-gray-100 font-medium"><?php _e('Vị trí ứng tuyển', 'bsc') ?></p>
        <h4
            class="font-bold text-lg transition-all duration-500 hover:text-primary-300">
            <a href="<?php the_permalink() ?>" class="line-clamp-3">
                <?php the_title() ?>
            </a>
        </h4>
    </div>
    <div class="col-span-1">
        <p class="mb-4 text-gray-100 font-medium"><?php _e('Kinh nghiệm', 'bsc') ?></p>
        <p class="font-bold text-lg job_exp">
            <?php the_field('kinh_nghiem_td') ?>
        </p>
    </div>
    <div class="col-span-1 ">
        <p class="mb-4 text-gray-100 font-medium"><?php _e('Nơi làm việc', 'bsc') ?></p>
        <p class="font-bold text-lg job_location">
            <?php
            $post_id = get_the_ID();
            $noi_lam_viec = get_the_terms($post->ID, 'noi-lam-viec');
            if ($noi_lam_viec) {
                echo $noi_lam_viec[0]->name;
            }
            ?>
        </p>
    </div>
    <div class="col-span-1">
        <p class="mb-4 text-gray-100 font-medium"><?php _e('Số lượng tuyển', 'bsc') ?></p>
        <p class="font-bold text-lg job_number">
            <?php the_field('so_luong') ?>
        </p>
    </div>
    <div class="col-span-1 ">
        <p class="mb-4 text-gray-100 font-medium"><?php _e('Hạn nộp hồ sơ', 'bsc') ?></p>
        <p class="font-bold text-lg job_date">
            <?php the_field('deadline') ?>
        </p>
    </div>
    <?php
    $deadline = get_field('deadline');
    $deadline_date = DateTime::createFromFormat('d/m/Y', $deadline);
    $current_date = new DateTime(current_time('Y-m-d'));
    if (get_field('check_tuyen_xong') || $deadline_date < $current_date) {
        $class = "text-[#F1F1F1] bg-[#CCCCCC]";
        $label = __('Hết hạn', 'bsc');
    } elseif (get_field('check_tuyen_gap')) {
        $class = "text-[#F9162A] bg-[#FFB2B9]";
        $label = __('Tuyển gấp', 'bsc');
    } else {
        $class = "text-[#30D158] bg-[#B5F8C5]";
        $label = __('Đang tuyển', 'bsc');
    }
    ?>
    <div class="col-span-1 job_status m-auto">
        <div
            class="urgent inline-block rounded-full px-4 py-2 font-bold text-xs min-w-28 text-center <?php echo $class ?> ">
            <?php echo  $label ?>
        </div>
    </div>
    <div class="col-span-1 m-auto">
        <a href="<?php the_permalink() ?>"
            class="text-green font-bold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">
            <?php _e('Xem chi tiết', 'bsc') ?>
            <?php echo svg('arrow-btn', '12', '12') ?>
        </a>
    </div>
</div>