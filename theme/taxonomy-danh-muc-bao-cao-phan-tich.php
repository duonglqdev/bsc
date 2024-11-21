<?php
if (get_field('api_id_danh_muc', get_queried_object())) {
    $groupid = get_field('api_id_danh_muc', get_queried_object());
} else {
    wp_redirect(home_url('/404'), 301);
    exit;
}
get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <?php if (have_rows('menu_navigation', get_queried_object())) { ?>
        <section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0">
            <div class="container">
                <ul class="customtab-nav flex justify-between gap-10">
                    <?php while (have_rows('menu_navigation', get_queried_object())): the_row(); ?>
                        <li class="flex-1">
                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                class="<?php if (get_sub_field('active')) echo 'active' ?> block text-center font-bold lg:text-lg lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
                                <?php the_sub_field('title') ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    <?php } ?>
    <section class="mt-[54px] mb-[100px]">
        <div class="container">
            <h2 class="heading-title mb-[26px]">
                <?php _e('CHUYÊN MỤC', 'bsc') ?>
            </h2>
            <div class="lg:flex lg:gap-[70px]">
                <div class="lg:w-80 lg:max-w-[35%]">
                    <div class="sticky lg:top-28 top-5 z-[9] space-y-12">
                        <?php
                        $current_term_id = get_queried_object_id();
                        $current_term = get_term($current_term_id, 'danh-muc-bao-cao-phan-tich');
                        if ($current_term && !is_wp_error($current_term)) {
                            $child_terms = get_terms(array(
                                'taxonomy' => 'danh-muc-bao-cao-phan-tich',
                                'parent' => $current_term_id,
                                'hide_empty' => false,
                            ));
                            if (!empty($child_terms)) {
                                echo '<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">';
                                echo '<li>';
                                echo '<a href="' . get_term_link($current_term) . '" class="active flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . __('Tất cả', 'bsc') . '</a>';
                                echo '</li>';
                                foreach ($child_terms as $child_term) {
                                    echo '<li>';
                                    echo '<a href="' . get_term_link($child_term) . '" class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . $child_term->name . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            } else {
                                $parent_term_id = $current_term->parent;

                                if ($parent_term_id) {
                                    $parent_term = get_term($parent_term_id, 'danh-muc-bao-cao-phan-tich');
                                    $siblings = get_terms(array(
                                        'taxonomy' => 'danh-muc-bao-cao-phan-tich',
                                        'parent' => $parent_term_id,
                                        'hide_empty' => false,
                                    ));
                                    if (!empty($siblings)) {
                                        echo '<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">';
                                        echo '<li>';
                                        echo '<a href="' . get_term_link($parent_term) . '" class="active flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . __('Tất cả', 'bsc') . '</a>';
                                        echo '</li>';
                                        foreach ($siblings as $sibling) {
                                            echo '<li>';
                                            echo '<a href="' . get_term_link($sibling) . '" class="flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . $sibling->name . '</a>';
                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                    }
                                }
                            }
                        }
                        ?>
                        <?php
                        $hinh_anh_sidebar = get_field('hinh_anh_sidebar', get_queried_object());
                        if ($hinh_anh_sidebar) { ?>
                            <a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
                                <?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
                            </a>
                        <?php } ?>
                        <div class="p-6 bg-gradient-blue-50 mb-10">
                            <h3 class="text-primary-300 font-bold text-xl mb-4">
                                <?php _e('Đăng ký nhận báo cáo từ BSC', 'bsc') ?>
                            </h3>
                            <div class="form_report">
                                <?php echo do_shortcode('[contact-form-7 id="5cd9f30" title="Đăng ký nhận báo cáo từ BSC"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <?php $search_template = get_sub_field('search_template') ?: 'default';
                    if ($search_template == 'default') { ?>
                        <form method="get" class="flex gap-5 mb-10" action="<?php echo get_term_link(get_queried_object()); ?>">
                            <div
                                class="h-[50px] rounded-[10px] border border-[#EAEEF4] px-[26px] flex items-center gap-2 lg:w-[315px] max-w-[33.33%]">
                                <?php echo svg('search', '24', '24') ?>
                                <input type="text" name="key"
                                    class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 font-Helvetica placeholder:text-[#898A8D]"
                                    placeholder="<?php _e('Từ khóa tìm kiếm', 'bsc') ?>" value="<?php if (isset($_GET['key'])) echo $_GET['key'] ?>">
                            </div>
                            <div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
                                datepicker-autohide datepicker-orientation="bottom right"
                                class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs lg:w-1/2 w-full">
                                <p class="font-medium mr-5 lg:min-w-[94px]">
                                    <?php _e('Thời gian:', 'gnws') ?>
                                </p>
                                <div class="flex items-center gap-5">
                                    <input id="datepicker-range-start" name="start" type="text"
                                        class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
                                        placeholder="<?php _e('Từ ngày', 'bsc') ?>">
                                    <?php echo svg('day', '20', '20') ?>
                                </div>
                                <span class="mx-4 text-gray-500">-</span>
                                <div class="flex items-center gap-5">
                                    <input id="datepicker-range-end" name="end" type="text"
                                        class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
                                        placeholder="<?php _e('Đến ngày', 'bsc') ?>">
                                    <?php echo svg('day', '20', '20') ?>
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight flex-1 rounded-xl h-[50px]">
                                <?php _e('Tìm kiếm', 'bsc') ?>
                            </button>
                        </form>
                    <?php } else { ?>
                        <form method="get" action="<?php echo get_term_link(get_queried_object()); ?>">
                            <div
                                class="h-[50px] rounded-[10px] border border-[#EAEEF4] px-[26px] flex items-center gap-2">
                                <?php echo svg('search', '24', '24') ?>
                                <input type="text" name="key"
                                    class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 font-Helvetica placeholder:text-[#898A8D]"
                                    placeholder="<?php _e('Từ khóa tìm kiếm', 'bsc') ?>" value="<?php if (isset($_GET['key'])) echo $_GET['key'] ?>">
                            </div>
                            <div class="flex gap-5 mb-10 mt-4">
                                <div
                                    class="w-1/5 flex items-center justify-between h-[50px] px-5 border border-[#EAEEF4] rounded-[10px]">
                                    <p class="2xl:min-w-20 text-xs font-medium"><?php _e('Năm', 'bsc') ?>: </p>
                                    <select id="select_year" name="years" class="select_custom border-none focus:outline-0 focus:ring-0">
                                        <option value=""><?php _e('Chọn năm', 'bsc'); ?></option>
                                        <?php
                                        $currentYear = date('Y');
                                        for ($year = $currentYear; $year >= 2015; $year--):
                                        ?>
                                            <option value="<?php echo esc_attr($year); ?>" <?php selected(isset($_GET['years']) && $_GET['years'] == $year); ?>>
                                                <?php echo esc_html($year); ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
                                    datepicker-autohide datepicker-orientation="bottom right"
                                    class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs lg:w-[52%] w-full">
                                    <p class="font-medium mr-5 2xl:min-w-[94px]">
                                        <?php _e('Thời gian:', 'gnws') ?>
                                    </p>
                                    <div class="flex items-center 2xl:gap-5 gap-3">
                                        <input id="datepicker-range-start" name="start" type="text"
                                            class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
                                            placeholder="<?php _e('Từ ngày', 'bsc') ?>">
                                        <?php echo svg('day', '20', '20') ?>
                                    </div>
                                    <span class="2xl:mx-4 mx-2 text-gray-500">-</span>
                                    <div class="flex items-center 2xl:gap-5 gap-3">
                                        <input id="datepicker-range-end" name="end" type="text"
                                            class="border-none focus:border-none focus:outline-0 focus:ring-0 lg:max-w-[100px] p-0"
                                            placeholder="<?php _e('Đến ngày', 'bsc') ?>">
                                        <?php echo svg('day', '20', '20') ?>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight flex-1 rounded-xl h-[50px]">
                                    <?php _e('Tìm kiếm', 'bsc') ?>
                                </button>
                            </div>
                        </form>
                    <?php } ?>
                    <div class="grid lg:grid-cols-2 gap-6">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
                                <div class="flex items-center justify-between mb-4">
                                    <a href=""
                                        class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                                        Báo cáo vĩ mô tuần
                                    </a>
                                    <div class="space-y-1.5 text-right">
                                        <span
                                            class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">Tích
                                            cực</span>
                                        <p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
                                    </div>
                                </div>
                                <h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
                                    <a href="" class="line-clamp-2">
                                        Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
                                        quỹ_20240808
                                    </a>
                                </h3>
                                <div class="flex items-center justify-between">
                                    <p class="italic text-paragraph text-xs font-Helvetica">
                                        68 Lượt tải xuống
                                    </p>
                                    <a href=""
                                        class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
                                        <?php _e('Tải xuống', 'bsc') ?>
                                        <?php echo svg('download', '20', '20') ?>
                                    </a>
                                </div>
                            </div>
                            <div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
                                <div class="flex items-center justify-between mb-4">
                                    <a href=""
                                        class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                                        Báo cáo ngành
                                    </a>
                                    <div class="space-y-1.5 text-right">
                                        <span
                                            class="inline-block rounded-[45px] text-[#FF0017] bg-[#FFD9DC] px-4 py-0.5 text-[12px] font-semibold">Tiêu
                                            cực</span>
                                        <p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
                                    </div>
                                </div>
                                <h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
                                    <a href="" class="line-clamp-2">
                                        Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
                                        quỹ_20240808
                                    </a>
                                </h3>
                                <div class="flex items-center justify-between">
                                    <p class="italic text-paragraph text-xs font-Helvetica">
                                        68 Lượt tải xuống
                                    </p>
                                    <a href=""
                                        class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
                                        <?php _e('Tải xuống', 'bsc') ?>
                                        <?php echo svg('download', '20', '20') ?>
                                    </a>
                                </div>
                            </div>
                            <div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
                                <div class="flex items-center justify-between mb-4">
                                    <a href=""
                                        class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                                        Báo cáo ngành
                                    </a>
                                    <div class="space-y-1.5 text-right">
                                        <span
                                            class="inline-block rounded-[45px] text-[#FFB81C] bg-[#FFF1D2] px-4 py-0.5 text-[12px] font-semibold">Trung
                                            lập</span>
                                        <p class="text-paragraph text-xs font-Helvetica">22/10/2024</p>
                                    </div>
                                </div>
                                <h3 class="font-bold mb-6 transition-all duration-500 hover:text-green">
                                    <a href="" class="line-clamp-2">
                                        Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
                                        quỹ_20240808
                                    </a>
                                </h3>
                                <div class="flex items-center justify-between mt-auto">
                                    <p class="italic text-paragraph text-xs font-Helvetica">
                                        68 Lượt tải xuống
                                    </p>
                                    <a href=""
                                        class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105">
                                        <?php _e('Tải xuống', 'bsc') ?>
                                        <?php echo svg('download', '20', '20') ?>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php get_template_part('components/pagination') ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
