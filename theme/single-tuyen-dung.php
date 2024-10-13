<?php

/**
Template Name: Chi tiết tuyển dụng
 */

get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <section class="lg:lg:my-[100px] my-10">
        <div class="container">
            <div class="grid lg:grid-cols-3">
                <div class="lg:col-span-2">
                    <h1 class="lg:text-[32px] text-2xl font-bold mb-10">
                        <?php the_title() ?>
                    </h1>
                </div>
            </div>
            <div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
                <div class="md:col-span-1 col-span-full">
                    <div class="bg-[#F5FCFF] py-5 px-6 rounded-[10px]">
                        <h3 class="text-primary-300 uppercase text-xl font-bold">
                            <?php _e('THÔNG TIN CHUNG', 'bsc') ?>
                        </h3>
                        <div class="mt-[12px]">
                            <?php
                            $post_id = get_the_ID();
                            $nghiep_vu = get_the_terms($post->ID, 'nghiep-vu');
                            if ($nghiep_vu) {
                            ?>
                                <div
                                    class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
                                    <p class="text-black mb-2 text-xs">
                                        <?php _e('Nghiệp vụ', 'bsc') ?>
                                    </p>
                                    <p class="font-bold text-xs">
                                        <?php echo $nghiep_vu[0]->name ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if (get_field('nganh_nghe')) { ?>
                                <div
                                    class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
                                    <p class="text-black mb-2 text-xs">
                                        <?php _e('Nghành nghề', 'bsc') ?>
                                    </p>
                                    <p class="font-bold text-xs">
                                        <?php the_field('nganh_nghe') ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if (get_field('ma_vi_tri')) { ?>
                                <div
                                    class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
                                    <p class="text-black mb-2 text-xs">
                                        <?php _e('Mã vị trí', 'bsc') ?>
                                    </p>
                                    <p class="font-bold text-xs">
                                        <?php the_field('ma_vi_tri') ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php
                            $post_id = get_the_ID();
                            $noi_lam_viec = get_the_terms($post->ID, 'noi-lam-viec');
                            if ($noi_lam_viec) {
                            ?>
                                <div
                                    class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
                                    <p class="text-black mb-2 text-xs">
                                        <?php _e('Địa điểm làm việc', 'bsc') ?>
                                    </p>
                                    <p class="font-bold text-xs">
                                        <?php echo $noi_lam_viec[0]->name ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if (get_field('cap_bac')) { ?>
                                <div
                                    class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
                                    <p class="text-black mb-2 text-xs">
                                        <?php _e('Cấp bậc', 'bsc') ?>
                                    </p>
                                    <p class="font-bold text-xs">
                                        <?php the_field('cap_bac') ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if (get_field('muc_luong')) { ?>
                                <div
                                    class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
                                    <p class="text-black mb-2 text-xs">
                                        <?php _e('Mức lương', 'bsc') ?>
                                    </p>
                                    <p class="font-bold text-xs">
                                        <?php the_field('muc_luong') ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if (get_field('deadline')) { ?>
                                <div
                                    class="[&:not(:last-child)]:mb-[12px] [&:not(:last-child)]:pb-[12px] [&:not(:last-child)]:border-b border-[#C6C6C6] font-Helvetica">
                                    <p class="text-black mb-2 text-xs">
                                        <?php _e('Hạn nộp hồ sơ', 'bsc') ?>
                                    </p>
                                    <p class="font-bold text-xs">
                                        <?php the_field('deadline') ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="mt-[12px]">
                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                class="bg-yellow-100 text-black after:bg-green hover:text-white inline-block px-6 py-3 rounded-xl font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:transition-all after:duration-500 after:opacity-0 after:rounded-xl hover:after:w-full hover:after:opacity-100 w-full h-full">
                                <span class="block relative z-10">
                                    <?php _e('Ứng tuyển ngay', 'bsc') ?>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-3 col-span-full space-y-[30px]">
                    <div class="content_item the_content prose prose-h1:text-[#235BA8] prose-h2:text-[#235BA8] prose-h3:text-[#235BA8] prose-h4:text-[#235BA8] prose-h5:text-[#235BA8] prose-h6:text-[#235BA8]">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $custom_taxterms = wp_get_object_terms($post->ID, 'nghiep-vu', array('fields' => 'ids'));
    $args = array(
        'post_type' => 'tuyen-dung',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'tax_query' => array(
            array(
                'taxonomy' => 'nghiep-vu',
                'field' => 'id',
                'terms' => $custom_taxterms
            )
        ),
        'post__not_in' => array($post->ID),
    );
    $related_items = new WP_Query($args);
    if ($related_items->have_posts()) : ?>
        <section class="lg:lg:my-[100px] my-10">
            <div class="container">
                <h3 class="font-bold text-primary-300 lg:text-[32px] text-2xl">
                    <?php _e('CÁC VỊ TRÍ TUYỂN DỤNG KHÁC', 'bsc') ?>
                </h3>
                <div class="mt-10">
                    <?php
                    while ($related_items->have_posts()) :
                        $related_items->the_post();
                        get_template_part('template-parts/content', get_post_type());
                    endwhile;
                    ?>

                </div>
            </div>
        </section>
    <?php endif;
    wp_reset_postdata(); ?>
</main>
<div id="popup-modal" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-[#000] bg-opacity-80">
    <div class="relative max-w-full w-[600px] max-h-full">
        <div class="relative bg-white rounded-[15px] shadow lg:px-[50px] px-5 lg:py-10 py-5">
            <button type="button"
                class="absolute top-3 end-2.5 w-9 h-9 rounded-full bg-white shadow-header text-primary-300 flex items-center justify-center"
                data-modal-hide="popup-modal">
                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.44323 6.08837L12.0601 1.47881C12.1981 1.34081 12.2756 1.15365 12.2756 0.958494C12.2756 0.763338 12.1981 0.576174 12.0601 0.438178C11.9221 0.300182 11.735 0.222656 11.5398 0.222656C11.3446 0.222656 11.1575 0.300182 11.0195 0.438178L6.40993 5.05506L1.80037 0.438178C1.66238 0.300182 1.47521 0.222656 1.28006 0.222656C1.0849 0.222656 0.897738 0.300182 0.759741 0.438178C0.621745 0.576174 0.54422 0.763338 0.54422 0.958494C0.54422 1.15365 0.621745 1.34081 0.759741 1.47881L5.37663 6.08837L0.759741 10.6979C0.691053 10.7661 0.636535 10.8471 0.599329 10.9364C0.562124 11.0257 0.542969 11.1215 0.542969 11.2182C0.542969 11.315 0.562124 11.4108 0.599329 11.5001C0.636535 11.5894 0.691053 11.6704 0.759741 11.7386C0.827868 11.8072 0.908921 11.8618 0.998224 11.899C1.08753 11.9362 1.18331 11.9553 1.28006 11.9553C1.3768 11.9553 1.47259 11.9362 1.56189 11.899C1.65119 11.8618 1.73225 11.8072 1.80037 11.7386L6.40993 7.12167L11.0195 11.7386C11.0876 11.8072 11.1687 11.8618 11.258 11.899C11.3473 11.9362 11.4431 11.9553 11.5398 11.9553C11.6365 11.9553 11.7323 11.9362 11.8216 11.899C11.9109 11.8618 11.992 11.8072 12.0601 11.7386C12.1288 11.6704 12.1833 11.5894 12.2205 11.5001C12.2577 11.4108 12.2769 11.315 12.2769 11.2182C12.2769 11.1215 12.2577 11.0257 12.2205 10.9364C12.1833 10.8471 12.1288 10.7661 12.0601 10.6979L7.44323 6.08837Z"
                        fill="#295CA9" />
                </svg>

                <span class="sr-only"><?php _e('Close modal', 'bsc') ?></span>
            </button>
            <h2 class="uppercase text-primary-300 mb-5 lg:text-[32px] text-2xl font-bold">
                <?php _e('GỬI ĐƠN ỨNG TUYỂN', 'bsc') ?>
            </h2>
            <?php if (get_field('cdtd_mau_cv', 'option')) { ?>
                <div class="rounded-lg bg-primary-50 px-5 py-4 mb-3">
                    <a href="<?php the_field('cdtd_mau_cv', 'option') ?>" class="flex items-center justify-between" download>
                        <div class="flex items-center gap-3 font-Helvetica font-medium">
                            <?php echo svg('docs') ?>
                            <p><?php _e('Mẫu CV BSC. docx', 'bsc') ?></p>
                        </div>
                        <?php echo svg('download2', '20') ?>
                    </a>
                </div>
            <?php } ?>
            <p class="font-medium">
                <?php _e('Vui lòng sử dụng mẫu CV từ BSC ở trên để điền thông tin của bạn, sau đó upload lại
                file CV để ứng tuyển.', 'bsc') ?>
            </p>
            <div class="mt-[30px] form_cv font-Helvetica">
                <?php echo do_shortcode('[contact-form-7 id="b071499" title="Cơ hội việc làm"]') ?>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();