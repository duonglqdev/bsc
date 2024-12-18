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
            <section class="2xl:py-4 py-3 bg-primary-50 sticky z-50 top-0">
                <div class="container">
                    <ul class="flex justify-between 2xl:gap-10 gap-5">
                        <?php while (have_rows('menu_navigation', get_queried_object())): the_row(); ?>
                            <li class="flex-1">
                                <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                    class="<?php if (get_sub_field('active')) echo 'active' ?> block text-center font-bold lg:text-lg lg:py-[12px] py-3 2xl:px-10 px-5 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
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
                <div class="lg:flex 2xl:gap-[70px] gap-10">
                    <div class="lg:w-80 lg:max-w-[35%] shrink-0">
                        <div class="sticky lg:top-28 top-5 z-[9] space-y-12">
                            <?php
                            $current_term_id = get_queried_object_id();
                            $current_term = get_term($current_term_id, 'danh-muc-bao-cao-phan-tich');
                            $excluded_category_id = get_array_id_taxonomy_hide('danh-muc-bao-cao-phan-tich');
                            if ($current_term && !is_wp_error($current_term)) {
                                $child_terms = get_terms(array(
                                    'taxonomy' => 'danh-muc-bao-cao-phan-tich',
                                    'parent' => $current_term_id,
                                    'hide_empty' => false,
                                    'exclude'    => $excluded_category_id,
                                ));

                                if (!empty($child_terms)) {
                                    echo '<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">';
                                    // Link "Tất cả" với class active nếu là danh mục hiện tại
                                    $is_active = ($current_term_id === $current_term->term_id) ? 'active' : '';
                                    echo '<li>';
                                    echo '<a href="' . get_term_link($current_term) . '" class="' . $is_active . ' flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . __('Tất cả', 'bsc') . '</a>';
                                    echo '</li>';

                                    foreach ($child_terms as $child_term) {
                                        // Check if this child is the current term
                                        $is_active = ($current_term_id === $child_term->term_id) ? 'active' : '';
                                        echo '<li>';
                                        echo '<a href="' . get_term_link($child_term) . '" class="' . $is_active . ' flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . $child_term->name . '</a>';
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
                                            'exclude'    => $excluded_category_id,
                                        ));

                                        if (!empty($siblings)) {
                                            echo '<ul class="shadow-base py-6 pr-4 rounded-lg bg-white space-y-2">';
                                            // Link "Tất cả" cho danh mục cha
                                            $is_active = ($current_term_id === $parent_term->term_id) ? 'active' : '';
                                            echo '<li>';
                                            echo '<a href="' . get_term_link($parent_term) . '" class="' . $is_active . ' flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . __('Tất cả', 'bsc') . '</a>';
                                            echo '</li>';

                                            foreach ($siblings as $sibling) {
                                                // Check if this sibling is the current term
                                                $is_active = ($current_term_id === $sibling->term_id) ? 'active' : '';
                                                echo '<li>';
                                                echo '<a href="' . get_term_link($sibling) . '" class="' . $is_active . ' flex items-center gap-4 2xl:text-lg text-base font-bold [&:not(.active)]:text-black text-white relative py-[12px] px-5 before:w-2 before:h-2 before:rounded-[2px] [&:not(.active)]:before:bg-[#051D36] [&:not(.active)]:before:bg-opacity-50 before:bg-white before:bg-opacity-100 bg-primary-300 [&:not(.active)]:bg-white [&:not(.active)]:hover:!bg-[#ebf4fa] rounded-tr-xl rounded-br-xl group-hover:!bg-[#ebf4fa]">' . $sibling->name . '</a>';
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
                                <div class="mt-12">
                                    <a href="<?php echo check_link($hinh_anh_sidebar['link']) ?>">
                                        <?php echo wp_get_attachment_image($hinh_anh_sidebar['img'], 'large', '', array('class' => 'rounded-lg transition-all duration-500 hover:scale-105')) ?>
                                    </a>
                                </div>
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
                        <?php $search_template = get_field('search_template', get_queried_object()) ?: 'default';
                        if ($search_template == 'default') { ?>
                            <form method="get" class="flex gap-5 mb-10" action="<?php echo get_term_link(get_queried_object()); ?>">
                                <div
                                    class="h-[50px] rounded-[10px] border border-[#EAEEF4] 2xl:px-[26px] px-5 flex items-center gap-2 lg:w-[270px] max-w-[33.33%] shrink-0">
                                    <?php echo svgClass('search', '24', '24', 'shrink-0') ?>
                                    <input type="text" name="key"
                                        class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 placeholder:text-[#898A8D]"
                                        placeholder="<?php _e('Từ khóa tìm kiếm', 'bsc') ?>" value="<?php if (isset($_GET['key'])) echo $_GET['key'] ?>">
                                </div>
                                <div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy"
                                    datepicker-autohide datepicker-orientation="bottom right"
                                    class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs flex-1">
                                    <p class="font-medium mr-5 2xl:min-w-[94px] whitespace-nowrap">
                                        <?php _e('Thời gian:', 'gnws') ?>
                                    </p>
                                    <div class="flex items-center gap-5">
                                        <input id="datepicker-range-start" name="fromdate" type="text"
                                            class="border-none focus:border-none focus:outline-0 focus:ring-0 2xl:max-w-[100px] max-w-[70px] 2xl:text-base text-xs p-0"
                                            placeholder="<?php _e('Từ ngày', 'bsc') ?>" value="<?php if (isset($_GET['fromdate'])) echo $_GET['fromdate'] ?>">
                                        <?php echo svg('day', '20', '20') ?>
                                    </div>
                                    <span class="2xl:mx-4 mx-3 text-gray-500">-</span>
                                    <div class="flex items-center gap-5">
                                        <input id="datepicker-range-end" name="todate" type="text"
                                            class="border-none focus:border-none focus:outline-0 focus:ring-0 2xl:max-w-[100px] max-w-[70px] 2xl:text-base text-xs p-0"
                                            placeholder="<?php _e('Đến ngày', 'bsc') ?>" value="<?php if (isset($_GET['todate'])) echo $_GET['todate'] ?>">
                                        <?php echo svg('day', '20', '20') ?>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight flex-1 rounded-xl h-[50px] whitespace-nowrap">
                                    <?php _e('Tìm kiếm', 'bsc') ?>
                                </button>
                                <a href="<?php echo get_term_link(get_queried_object()) ?>"
                                    class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group cursor-pointer">
                                    <?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
                                </a>
                            </form>
                        <?php } else { ?>
                            <form method="get" action="<?php echo get_term_link(get_queried_object()); ?>">
                                <div
                                    class="h-[50px] rounded-[10px] border border-[#EAEEF4] 2xl:px-[26px] px-5 flex items-center gap-2">
                                    <?php echo svgClass('search', '24', '24', 'shrink-0') ?>
                                    <input type="text" name="key"
                                        class="flex-1 border-none focus:border-none focus:outline-0 focus:ring-0 placeholder:text-[#898A8D]"
                                        placeholder="<?php _e('Từ khóa tìm kiếm', 'bsc') ?>" value="<?php if (isset($_GET['key'])) echo $_GET['key'] ?>">
                                </div>
                                <div class="flex 2xl:gap-5 gap-4 mb-10 mt-4">
                                    <div
                                        class="w-1/5 flex items-center justify-between h-[50px] 2xl:pl-5 pl-4 border border-[#EAEEF4] rounded-[10px]">
                                        <p class="mr-2 text-xs font-medium"><?php _e('Năm', 'bsc') ?>: </p>
                                        <select id="select_year" name="years" class="select_custom border-none focus:outline-0 focus:ring-0 text-center !pr-8 pl-0">
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
                                        class="flex items-center h-[50px] rounded-[10px] border border-[#EAEEF4] px-5 text-xs lg:w-[50%] w-full justify-around">
                                        <p class="font-medium mr-5 2xl:min-w-[94px] whitespace-nowrap">
                                            <?php _e('Thời gian:', 'gnws') ?>
                                        </p>
                                        <div class="flex items-center 2xl:gap-5 gap-3">
                                            <input id="datepicker-range-start" name="fromdate" type="text"
                                                class="border-none focus:border-none focus:outline-0 focus:ring-0 2xl:max-w-[100px] max-w-[70px] 2xl:text-base text-xs p-0"
                                                placeholder="<?php _e('Từ ngày', 'bsc') ?>" value="<?php if (isset($_GET['fromdate'])) echo $_GET['fromdate'] ?>">
                                            <?php echo svg('day', '20', '20') ?>
                                        </div>
                                        <span class="2xl:mx-4 mx-2 text-gray-500">-</span>
                                        <div class="flex items-center 2xl:gap-5 gap-3">
                                            <input id="datepicker-range-end" name="todate" type="text"
                                                class="border-none focus:border-none focus:outline-0 focus:ring-0 2xl:max-w-[100px] max-w-[70px] 2xl:text-base text-xs p-0"
                                                placeholder="<?php _e('Đến ngày', 'bsc') ?>" value="<?php if (isset($_GET['todate'])) echo $_GET['todate'] ?>">
                                            <?php echo svg('day', '20', '20') ?>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight flex-1 rounded-xl h-[50px]">
                                        <?php _e('Tìm kiếm', 'bsc') ?>
                                    </button>
                                    <a href="<?php echo get_term_link(get_queried_object()) ?>"
                                        class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group cursor-pointer">
                                        <?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
                                    </a>
                                </div>
                            </form>
                        <?php } ?>
                        <?php
                        if (isset($_GET['posts_to_show'])) {
                            $post_per_page = $_GET['posts_to_show'];
                        } else {
                            $post_per_page = get_option('posts_per_page');
                        }
                        if (isset($_GET['post_page'])) {
                            $index = ($_GET['post_page'] - 1) * $post_per_page + 1;
                        } else {
                            $index = 1;
                        }
                        $array_data = array(
                            'lang' => pll_current_language(),
                            'categoryid' => $groupid,
                            'maxitem' => $post_per_page,
                            'index' => $index
                        );
                        if (isset($_GET['key']) && !empty($_GET['key'])) {
                            $array_data['title'] = $_GET['key'];
                        }
                        if ((isset($_GET['fromdate']) && !empty($_GET['fromdate'])) || (isset($_GET['todate']) && !empty($_GET['todate']))) {
                            if (isset($_GET['fromdate']) && !empty($_GET['fromdate'])) {
                                $fromdate = $_GET['fromdate'];
                                $array_data['fromdate'] = $fromdate;
                            }
                            if (isset($_GET['todate']) && !empty($_GET['todate'])) {
                                $todate = $_GET['todate'];
                                $array_data['todate'] = $todate;
                            }
                        } else {
                            if (isset($_GET['years']) && !empty($_GET['years'])) {
                                $years = $_GET['years'];
                                $array_data['fromdate'] = '01/01/' . $years;
                                $array_data['todate'] = '31/12/' . $years;
                            }
                        }
                        $response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
                        ?>
                        <?php
                        $check_logout = bsc_is_user_logged_out();
                        $class = $check_logout['class'];
                        $type_danh_muc = get_field('type_danh_muc', get_queried_object());
                        if ($type_danh_muc == 'thitruong') {
                        ?>
                            <div class="mb-[59px]">
                                <h3 class="font-bold mb-6 text-2xl"><?php _e('Dự báo thị trường', 'bsc') ?></h3>
                                <div class="relative">
                                    <div class="lg:flex lg:gap-8 <?php echo $class ?>">
                                        <?php if (!$check_logout) {
                                            $array_data_thitruong = array();
                                            $response_thitruong = get_data_with_cache('GetVNIChart', $array_data_thitruong, $time_cache);
                                            if ($response_thitruong) {
                                                $vnIndexData = array_map(function ($item) {
                                                    return [
                                                        'date' => date('Y-m-d', strtotime($item->tradedate)), // Định dạng ngày
                                                        'closeindex' => $item->closeindex,
                                                    ];
                                                }, $response_thitruong->d->VNI[0]);

                                                $stocksDataJson = json_encode($vnIndexData); ?>
                                                <div class="lg:w-[255px] lg:max-w-[27%]">
                                                    <div
                                                        class="lg:px-10 px-5 lg:py-8 py-5 bg-white shadow-base rounded-2xl">
                                                        <h4
                                                            class="font-bold text-primary-300 text-2xl pb-6 mb-6 border-b border-[#C9CCD2]">
                                                            <?php _e('Năm', 'bsc') ?> <?php echo date("Y"); ?></h4>
                                                        <div class="space-y-6">
                                                            <div class="flex items-end justify-between pb-2">
                                                                <div class="flex flex-col font-Helvetica">
                                                                    <p class="text-paragraph text-xs"><?php _e('VN-index', 'bsc') ?></p>
                                                                    <h4 class="font-bold text-2xl">
                                                                        <?php echo $response_thitruong->d->F[0][0]->value; ?>
                                                                    </h4>
                                                                </div>
                                                                <div
                                                                    class="min-w-[84px] text-center py-0.5 px-4 text-[#30D158] bg-[#D6F6DE] rounded-[45px] font-semibold text-xs">
                                                                    <?php _e('Tích cực', 'bsc') ?>
                                                                </div>
                                                            </div>

                                                            <div class="flex items-end justify-between pb-2">
                                                                <div class="flex flex-col font-Helvetica">
                                                                    <p class="text-paragraph text-xs"><?php _e('VN-index', 'bsc') ?></p>
                                                                    <h4 class="font-bold text-2xl">
                                                                        <?php echo $response_thitruong->d->F[0][1]->value; ?>
                                                                    </h4>
                                                                </div>
                                                                <div
                                                                    class="min-w-[84px] text-center py-0.5 px-4 text-[#FFB81C] bg-[#FFF1D2] rounded-[45px] font-semibold text-xs">
                                                                    <?php _e('Cơ sở', 'bsc') ?>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-end justify-between pb-2">
                                                                <div class="flex flex-col font-Helvetica">
                                                                    <p class="text-paragraph text-xs"><?php _e('VN-index', 'bsc') ?></p>
                                                                    <h4 class="font-bold text-2xl">
                                                                        <?php echo $response_thitruong->d->F[0][2]->value; ?>
                                                                    </h4>
                                                                </div>
                                                                <div
                                                                    class="min-w-[84px] text-center py-0.5 px-4 text-[#FF0017] bg-[#FFD9DC] rounded-[45px] font-semibold text-xs">
                                                                    <?php _e('Tiêu cực', 'bsc') ?>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-1 bg-white rounded-lg shadow-base">
                                                    <div id="chart-forecast" class="font-body"
                                                        data-stock='<?php echo $stocksDataJson ?>'
                                                        data-title="Dự báo VN-Index <?php echo date("Y"); ?>"
                                                        data-kb1="Dự báo KB1 (Giảm)"
                                                        data-coso="<?php _e('KB cơ sở') ?>"
                                                        data-kb-coso="<?php echo $response_thitruong->d->F[0][1]->value; ?>"
                                                        data-kb1-value="<?php echo $response_thitruong->d->F[0][2]->value; ?>"
                                                        data-kb2="Dự báo KB2 (Tăng)"
                                                        data-kb2-value="<?php echo $response_thitruong->d->F[0][0]->value; ?>">
                                                    </div>
                                                </div>
                                            <?php }
                                        } else {
                                            ?>
                                            <!-- Data Demo -->
                                            <div class="lg:w-[255px] lg:max-w-[27%]">
                                                <div class="lg:px-10 px-5 lg:py-8 py-5 bg-white shadow-base rounded-2xl">
                                                    <h4 class="font-bold text-primary-300 text-2xl pb-6 mb-6 border-b border-[#C9CCD2]">
                                                        <?php _e('Demo', 'bsc') ?></h4>
                                                    <div class="space-y-6">
                                                        <div class="flex items-end justify-between pb-2">
                                                            <div class="flex flex-col font-Helvetica">
                                                                <p class="text-paragraph text-xs"><?php _e('Demo', 'bsc') ?></p>
                                                                <h4 class="font-bold text-2xl">
                                                                    ---- </h4>
                                                            </div>
                                                            <div class="min-w-[84px] text-center py-0.5 px-4 text-[#30D158] bg-[#D6F6DE] rounded-[45px] font-semibold text-xs">
                                                                <?php _e('Tích cực', 'bsc') ?> </div>
                                                        </div>

                                                        <div class="flex items-end justify-between pb-2">
                                                            <div class="flex flex-col font-Helvetica">
                                                                <p class="text-paragraph text-xs"><?php _e('VN-index', 'bsc') ?></p>
                                                                <h4 class="font-bold text-2xl">
                                                                    ---- </h4>
                                                            </div>
                                                            <div class="min-w-[84px] text-center py-0.5 px-4 text-[#FFB81C] bg-[#FFF1D2] rounded-[45px] font-semibold text-xs">
                                                                <?php _e('Cơ sở', 'bsc') ?> </div>
                                                        </div>
                                                        <div class="flex items-end justify-between pb-2">
                                                            <div class="flex flex-col font-Helvetica">
                                                                <p class="text-paragraph text-xs"><?php _e('VN-index', 'bsc') ?></p>
                                                                <h4 class="font-bold text-2xl">
                                                                    ---- </h4>
                                                            </div>
                                                            <div class="min-w-[84px] text-center py-0.5 px-4 text-[#FF0017] bg-[#FFD9DC] rounded-[45px] font-semibold text-xs">
                                                                <?php _e('Tiêu cực', 'bsc') ?> </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-1 bg-[#F5FCFF] rounded-lg">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <?php if ($check_logout) {
                                        echo $check_logout['html'];
                                    } ?>
                                </div>
                            </div>
                        <?php

                        } elseif ($type_danh_muc == 'vimo') {
                        ?>
                            <div class="mb-[60px]">
                                <h3 class="font-bold text-2xl"><?php _e('Dự báo vĩ mô', 'bsc') ?></h3>
                                <div class="relative">
                                    <?php
                                    $array_data_GetForecastMacro = array();
                                    $response_GetForecastMacro = get_data_with_cache('GetForecastMacro', $array_data_GetForecastMacro, $time_cache);
                                    if ($response_GetForecastMacro) {
                                    ?>
                                        <div class="mt-4 <?php echo $class ?>">
                                            <h4 class="text-center font-bold text-primary-300 mb-4"><?php _e('Dự báo kinh tế
                                            vĩ mô Việt Nam', 'bsc') ?> <?php echo $response_GetForecastMacro->d->F[1][0]->year; ?>-<?php echo $response_GetForecastMacro->d->F[3][0]->year; ?></h4>
                                            <div
                                                class="border border-[#C9CCD2] rounded-lg flex font-medium text-xs">
                                                <div class="w-1/3 text-primary-300 border-r border-[#C9CCD2]">
                                                    <div
                                                        class="flex justify-end items-center pt-[13px] pb-[9px] min-h-[65px] border-b border-[#C9CCD2] mb-1.5">
                                                        <div
                                                            class="w-[44%] grid grid-cols-2 gap-2 font-semibold text-center items-center">
                                                            <p>
                                                                <?php echo $response_GetForecastMacro->d->A[0][0]->year; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('GDP (YoY%)', 'bsc') ?>
                                                        </div>
                                                        <div
                                                            class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p><?php echo $response_GetForecastMacro->d->A[0][0]->value; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('CPI trung bình (YoY%)*', 'bsc') ?>
                                                        </div>
                                                        <div
                                                            class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p><?php echo $response_GetForecastMacro->d->A[0][1]->value; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('Xuất khẩu (YoY%)*', 'bsc') ?>
                                                        </div>
                                                        <div
                                                            class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p><?php echo $response_GetForecastMacro->d->A[0][2]->value; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('Nhập khẩu (YoY%)*', 'bsc') ?>
                                                        </div>
                                                        <div
                                                            class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p><?php echo $response_GetForecastMacro->d->A[0][3]->value; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('LSĐH (YoY%)*', 'bsc') ?>
                                                        </div>
                                                        <div
                                                            class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p><?php echo $response_GetForecastMacro->d->A[0][4]->value; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px] font-bold">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('USD/VND LNH trung bình', 'bsc') ?>
                                                        </div>
                                                        <div
                                                            class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p><?php echo number_format($response_GetForecastMacro->d->A[0][5]->value); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-[27%] grid grid-cols-2 text-center bg-[#F5FCFF] border-r border-[#C9CCD2]">
                                                    <div class="text-[#FF0017]">
                                                        <div
                                                            class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
                                                            <p class="font-semibold mb-1">
                                                                <?php _e('BSC kịch bản 1', 'bsc') ?>
                                                            </p>
                                                            <div class="grid grid-cols-2 font-semibold">
                                                                <p><?php echo $response_GetForecastMacro->d->F[1][0]->year; ?></p>
                                                                <p><?php echo $response_GetForecastMacro->d->F[3][0]->year; ?></p>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        for ($i = 0; $i < 5; $i++) {
                                                        ?>
                                                            <div
                                                                class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                                                <p><?php echo $response_GetForecastMacro->d->F[1][$i]->value; ?></p>
                                                                <p><?php echo $response_GetForecastMacro->d->F[3][$i]->value; ?></p>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <div
                                                            class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
                                                            <p><?php echo number_format($response_GetForecastMacro->d->F[1][5]->value) ?></p>
                                                            <p><?php echo number_format($response_GetForecastMacro->d->F[3][5]->value) ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="text-[#30D158]">
                                                        <div
                                                            class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
                                                            <p class="font-semibold mb-1">
                                                                <?php _e('BSC kịch bản 2', 'bsc') ?>
                                                            </p>
                                                            <div class="grid grid-cols-2 font-semibold">
                                                                <p><?php echo $response_GetForecastMacro->d->F[0][0]->year; ?></p>
                                                                <p><?php echo $response_GetForecastMacro->d->F[2][0]->year; ?></p>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        for ($i = 0; $i < 5; $i++) {
                                                        ?>
                                                            <div
                                                                class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                                                <p><?php echo $response_GetForecastMacro->d->F[0][$i]->value; ?></p>
                                                                <p><?php echo $response_GetForecastMacro->d->F[2][$i]->value; ?></p>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <div
                                                            class="grid grid-cols-2 gap-2 text-center items-center py-0.5 min-h-[30px] font-semibold">
                                                            <p><?php echo number_format($response_GetForecastMacro->d->F[0][5]->value); ?></p>
                                                            <p><?php echo number_format($response_GetForecastMacro->d->F[2][5]->value); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF] border-r border-[#C9CCD2]">
                                                    <div
                                                        class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
                                                        <p class="font-semibold mb-1">
                                                            <?php _e('Consensus', 'bsc') ?> <?php echo $response_GetForecastMacro->d->C[0][0]->year; ?>
                                                        </p>
                                                        <div class="grid grid-cols-3 font-semibold">
                                                            <p><?php _e('Min', 'bsc') ?></p>
                                                            <p><?php _e('TB', 'bsc') ?></p>
                                                            <p><?php _e('Max', 'bsc') ?></p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    for ($i = 0; $i < 2; $i++) {
                                                    ?>
                                                        <div
                                                            class="grid grid-cols-3 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                                            <p><?php echo $response_GetForecastMacro->d->C[2][$i]->value; ?></p>
                                                            <p><?php echo $response_GetForecastMacro->d->C[1][$i]->value; ?></p>
                                                            <p><?php echo $response_GetForecastMacro->d->C[0][$i]->value; ?></p>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="m-auto">
                                                        <p><?php echo $response_GetForecastMacro->d->C[1][4]->value; ?></p>
                                                    </div>
                                                </div>
                                                <div class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF]">
                                                    <div
                                                        class="pt-[12px] pb-[6px] min-h-[58px] border-b border-[#C9CCD2] mb-1.5">
                                                        <p class="font-semibold mb-1">
                                                            <?php _e('Consensus', 'bsc') ?> <?php echo $response_GetForecastMacro->d->C[3][0]->year; ?>
                                                        </p>
                                                        <div class="grid grid-cols-3 font-semibold">
                                                            <p><?php _e('Min', 'bsc') ?></p>
                                                            <p><?php _e('TB', 'bsc') ?></p>
                                                            <p><?php _e('Max', 'bsc') ?></p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    for ($i = 0; $i < 2; $i++) {
                                                    ?>
                                                        <div
                                                            class="grid grid-cols-3 gap-2 text-center items-center py-0.5 min-h-[30px]">
                                                            <p><?php echo $response_GetForecastMacro->d->C[5][$i]->value; ?></p>
                                                            <p><?php echo $response_GetForecastMacro->d->C[4][$i]->value; ?></p>
                                                            <p><?php echo $response_GetForecastMacro->d->C[3][$i]->value; ?></p>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="m-auto">
                                                        <p><?php echo $response_GetForecastMacro->d->C[4][4]->value; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else {
                                    ?>
                                        <!-- Data Demo -->
                                        <div class="<?php echo $class ?>">
                                            <h4 class="text-center font-bold text-primary-300 mb-4"><?php _e('Dự báo kinh tế vĩ mô Việt Nam', 'bsc') ?></h4>
                                            <div class="border border-[#C9CCD2] rounded-lg flex font-medium text-xs overflow-hidden">
                                                <div class="w-1/3 text-primary-300 border-r border-[#C9CCD2]">
                                                    <div class="flex justify-end items-center pt-[13px] pb-[9px] min-h-[65px] border-b border-[#C9CCD2] mb-1.5">
                                                        <div class="w-[44%] grid grid-cols-2 gap-2 font-semibold text-center items-center">
                                                            <p>
                                                                <?php _e('0000', 'bsc') ?> </p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('GDP (YoY%)', 'bsc') ?> </div>
                                                        <div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p>----</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('CPI trung bình (YoY%)*', 'bsc') ?> </div>
                                                        <div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p>----</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('Xuất khẩu (YoY%)*', 'bsc') ?> </div>
                                                        <div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p>----</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('Nhập khẩu (YoY%)*', 'bsc') ?> </div>
                                                        <div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p>----</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px]">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('LSĐH (YoY%)*', 'bsc') ?> </div>
                                                        <div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p>----</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-1 items-center min-h-[30px] font-bold">
                                                        <div class="w-[56%] px-2 py-1">
                                                            <?php _e('USD/VND LNH trung bình', 'bsc') ?> </div>
                                                        <div class="flex-1 grid grid-cols-2 gap-2 text-center items-center">
                                                            <p>----</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-[27%] grid grid-cols-2 text-center bg-[#F5FCFF] border-r border-[#C9CCD2]">

                                                </div>
                                                <div class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF] border-r border-[#C9CCD2]">

                                                </div>
                                                <div class="w-1/5 text-primary-300 text-center flex flex-col bg-[#F5FCFF]">

                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                    <?php if ($check_logout) {
                                        echo $check_logout['html'];
                                    } ?>
                                </div>
                            </div>
                        <?php
                        } elseif ($type_danh_muc == 'kqkd') {
                        ?>
                            <div class="mt-10 mb-[82px] relative">
                                <h2 class="font-bold text-2xl"><?php _e('Dự báo KQKD', 'bsc') ?></h2>
                                <div
                                    class="relative rounded-[10px] overflow-hidden mt-6 text-xs text-center border border-[#EAEEF4] <?php echo $class ?>">
                                    <div
                                        class="flex text-white bg-primary-300 font-semibold items-center min-h-[60px] py-2 prose-p:font-normal mb-2">
                                        <div class="w-[15%]">
                                            <?php _e('Mã CK', 'bsc') ?>
                                        </div>
                                        <div class="w-[15%]">
                                            <?php _e('Ngành', 'bsc') ?>
                                        </div>
                                        <div class="w-[15%]">
                                            <?php _e('DTT', 'bsc') ?> <?php echo date('Y') ?>
                                            <p>(<?php _e('tỷ VND', 'bsc') ?>)</p>
                                        </div>
                                        <div class="w-[17%]">
                                            <?php _e('LNST CĐTS', 'bsc') ?>
                                        </div>
                                        <div class="w-[17%]">
                                            <?php _e('EPS', 'bsc') ?> <br>
                                            <?php echo date('Y') ?>
                                        </div>
                                        <div class="w-[21%]">
                                            <?php _e('Giá mục tiêu', 'bsc') ?> <br>
                                            <?php echo date('Y') ?>/<?php echo date('Y') + 1 ?>
                                        </div>
                                    </div>
                                    <?php
                                    if (!$check_logout) {
                                        $array_data_GetForecastBussinessResults = array(
                                            'lang' => 'VI',
                                            'forecastperiod' => date('Y')
                                        );
                                        $response_GetForecastBussinessResults = get_data_with_cache('GetForecastBussinessResults', $array_data_GetForecastBussinessResults, $time_cache);
                                        if ($response_GetForecastBussinessResults) {
                                    ?>
                                            <div
                                                class="scroll-bar-custom overflow-y-auto max-h-[300px] prose-a:text-primary-300 prose-a:font-bold font-medium">
                                                <?php
                                                foreach ($response_GetForecastBussinessResults->d as $GetForecastBussinessResults) {
                                                ?>
                                                    <div class="flex items-center min-h-[30px]">
                                                        <div class="w-[15%] px-3 py-1">
                                                            <?php if ($GetForecastBussinessResults->symbol) { ?>
                                                                <a href="<?php echo slug_co_phieu($GetForecastBussinessResults->symbol) ?>"><?php echo $GetForecastBussinessResults->symbol ?></a>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="w-[15%] px-3 py-1">
                                                            <?php echo $GetForecastBussinessResults->industryname ?>
                                                        </div>
                                                        <div class="w-[15%] px-3 py-1">
                                                            <?php echo number_format($GetForecastBussinessResults->revenue) ?>
                                                        </div>
                                                        <div class="w-[17%] px-3 py-1">
                                                            <?php if ($GetForecastBussinessResults->npatmi) { ?>
                                                                <?php echo $GetForecastBussinessResults->npatmi ?>%
                                                            <?php } ?>
                                                        </div>
                                                        <div class="w-[17%] px-3 py-1">
                                                            <?php echo number_format($GetForecastBussinessResults->eps) ?>
                                                        </div>
                                                        <div class="w-[21%] px-3 py-1">
                                                            <?php echo number_format($GetForecastBussinessResults->pricerecommended) ?>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        <?php }
                                    } else {
                                        ?>
                                        <!-- Data Demo -->
                                        <div
                                            class="scroll-bar-custom overflow-y-auto max-h-[300px] prose-a:text-primary-300 prose-a:font-bold font-medium">
                                            <?php
                                            for ($i = 0; $i < 12; $i++) {
                                            ?>
                                                <div class="flex items-center min-h-[30px]">
                                                    <div class="w-[15%] px-3 py-1">
                                                        <a href=""><?php _e('BID', 'bsc') ?></a>
                                                    </div>
                                                    <div class="w-[15%] px-3 py-1">
                                                        <?php _e('Ngân hàng', 'bsc') ?>
                                                    </div>
                                                    <div class="w-[15%] px-3 py-1">
                                                        ----
                                                    </div>
                                                    <div class="w-[17%] px-3 py-1">
                                                        ----
                                                    </div>
                                                    <div class="w-[17%] px-3 py-1">
                                                        ----
                                                    </div>
                                                    <div class="w-[21%] px-3 py-1">
                                                        ----
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                                <?php if ($check_logout) {
                                    echo $check_logout['html'];
                                } ?>
                            </div>
                        <?php
                        } elseif ($type_danh_muc == 'nganh') {
                        ?>
                            <div class="mt-10 mb-[82px]">
                                <h2 class="font-bold text-2xl"><?php _e('Dự báo triển vọng ngành', 'bsc') ?></h2>
                                <div class="relative">
                                    <div
                                        class="rounded-[10px] overflow-hidden mt-6 text-center border border-[#EAEEF4] <?php echo $class ?>">
                                        <?php
                                        if (!$check_logout) {
                                            $array_data_nganh = array();
                                            $response_nganh = get_data_with_cache('GetForecastProspectBranch', $array_data_nganh, $time_cache);
                                            if ($response_nganh) { ?>
                                                <div
                                                    class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.125]">
                                                    <div class="w-1/3 py-2 px-3">
                                                        <?php _e('Ngành', 'bsc') ?>
                                                    </div>
                                                    <div class="w-1/3 py-2 px-3">
                                                        <?php _e('Quan điểm', 'bsc') ?> <?php echo $response_nganh->d[0]->colnamE1 ?>/<?php echo $response_nganh->d[0]->forecastyeaR1 ?>
                                                    </div>
                                                    <div class="w-1/3 py-2 px-3">
                                                        <?php _e('Quan điểm', 'bsc') ?> <?php echo $response_nganh->d[0]->colnamE2 ?>/<?php echo $response_nganh->d[0]->forecastyeaR2 ?>
                                                    </div>
                                                </div>
                                                <div
                                                    class="scroll-bar-custom overflow-y-auto max-h-[340px] prose-a:text-primary-300 prose-a:font-bold font-medium">
                                                    <?php
                                                    $i = 0;
                                                    foreach ($response_nganh->d as $nganh) {
                                                        $i++;
                                                        $qd1 = $nganh->forecasT1;
                                                        if ($qd1 == 0) {
                                                            $title_qd1 = __('Tích cực', 'bsc');
                                                            $class_qd1 = 'text-[#30D158]';
                                                        } elseif ($qd1 == 1) {
                                                            $title_qd1 = __('Trung lập', 'bsc');
                                                            $class_qd1 = 'text-black';
                                                        } elseif ($qd1 == 3) {
                                                            $title_qd1 = __('Kém tích cực', 'bsc');
                                                            $class_qd1 = 'text-[#FF0017]';
                                                        } else {
                                                            $title_qd1 = '-';
                                                            $class_qd1 = 'text-black';
                                                        }
                                                        $qd2 = $nganh->forecasT2;
                                                        if ($qd2 == 0) {
                                                            $title_qd2 = __('Tích cực', 'bsc');
                                                            $class_qd2 = 'text-[#30D158]';
                                                        } elseif ($qd2 == 1) {
                                                            $title_qd2 = __('Trung lập', 'bsc');
                                                            $class_qd2 = 'text-black';
                                                        } elseif ($qd2 == 3) {
                                                            $title_qd2 = __('Kém tích cực', 'bsc');
                                                            $class_qd2 = 'text-[#FF0017]';
                                                        } else {
                                                            $title_qd2 = '-';
                                                            $class_qd2 = 'text-black';
                                                        }
                                                    ?>
                                                        <div
                                                            class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
                                                            <div
                                                                class="w-1/3 min-h-[34px] flex items-center leading-[1.125] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
                                                                <?php echo $nganh->name  ?>
                                                            </div>
                                                            <div
                                                                class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 <?php echo $class_qd1 ?> border-r border-[#C9CCD2]">
                                                                <?php echo $title_qd1 ?>
                                                            </div>
                                                            <div
                                                                class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 <?php echo $class_qd2 ?> ">
                                                                <?php echo $title_qd2 ?>
                                                            </div>
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            <?php  }
                                        } else {
                                            ?>
                                            <!-- Data Demo -->
                                            <div
                                                class="flex text-white bg-primary-300 font-semibold items-center min-h-[34px] leading-[1.125]">
                                                <div class="w-1/3 py-2 px-3">
                                                    <?php _e('Ngành', 'bsc') ?>
                                                </div>
                                                <div class="w-1/3 py-2 px-3">
                                                    <?php _e('Quan điểm', 'bsc') ?>
                                                </div>
                                                <div class="w-1/3 py-2 px-3">
                                                    <?php _e('Quan điểm', 'bsc') ?>
                                                </div>
                                            </div>
                                            <?php
                                            for ($i = 0; $i < 9; $i++) {
                                            ?>
                                                <div
                                                    class="flex items-center <?php echo $i % 2 == 0 ? 'bg-[#EBF4FA]' : '' ?>">
                                                    <div
                                                        class="w-1/3 min-h-[34px] flex items-center leading-[1.125] py-1 px-3 font-bold border-r border-[#C9CCD2] text-left">
                                                        <?php _e('CNTT - Viễn thông', 'bsc') ?>
                                                    </div>
                                                    <div
                                                        class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-[#30D158] border-r border-[#C9CCD2]">
                                                        <?php _e('Tích cực', 'bsc') ?>
                                                    </div>
                                                    <div
                                                        class="w-1/3 min-h-[34px] flex items-center justify-center leading-[1.125] py-1 px-3 text-[#30D158]">
                                                        <?php _e('Tích cực', 'bsc') ?>
                                                    </div>
                                                </div>

                                            <?php
                                            }
                                            ?>
                                        <?php
                                        } ?>
                                    </div>
                                    <?php if ($check_logout) {
                                        echo $check_logout['html'];
                                    } ?>
                                </div>
                            </div>
                        <?php
                        } ?>
                        <?php
                        if ($response) {
                            if ($response->totalrecord) {
                                $total_post = $response->totalrecord;
                            } else {
                                $total_post = $post_per_page;
                            }
                            $total_page = ceil($total_post / $post_per_page);
                            $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
                        ?>
                            <div class="grid lg:grid-cols-2 gap-6">
                                <?php
                                foreach ($response->d as $news) {
                                    get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
                                        'data' => $news,
                                        'get_array_id_taxonomy' => $get_array_id_taxonomy,
                                    ));
                                }
                                ?>
                            </div>
                            <div class="mt-12">
                                <?php get_template_part('components/pagination', '', array(
                                    'get' => 'api',
                                    'total_page' => $total_page,
                                    'url' => get_term_link(get_queried_object_id()),
                                )) ?>
                            </div>
                        <?php } else {
                            get_template_part('template-parts/content', 'none');
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    get_footer();
