<?php
if ($args['data']) {
    $news = $args['data'];
    $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
    $time_cache = get_field('cdttcp1_time_cache', 'option') ?: 300;
    $banner = wp_get_attachment_image_url(get_field('background_banner', $tax), 'full');
    $style = get_field('background_banner_display', $tax) ?: 'default';
    $breadcrumb = 'baocao';
} else {
    wp_redirect(home_url('/404'), 301);
    exit;
}
get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <section class="xl:my-[100px] my-20">
        <div class="container">
            <h2 class="font-bold lg:text-[32px] text-2xl mb-2">
                CÔNG TY CỔ PHẦN CHỨNG KHOÁN BIDV
            </h2>
            <p class="font-bold text-lg text-opacity-50 text-black">BIDV Securities Joint Stock
                Company</p>
            <div class="mt-10 lg:flex lg:gap-5">
                <div class="lg:w-[547px] max-w-[41%]">
                    <div
                        class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 space-y-6 h-full">
                        <div class="flex gap-6 items-center">
                            <div
                                class="lg:w-[90px] w-16 lg:h-[90px] h-16 bg-white rounded-full flex items-center justify-center p-5">
                                <?php echo svgClass('icon-heading', '', '', 'lg:w-10 w-8 lg:h-11 h-9') ?>
                            </div>
                            <div class="flex flex-col">
                                <h4
                                    class="font-bold lg:text-[32px] text-2xl uppercase leading-normal">
                                    BSI
                                </h4>
                                <p class="uppercase text-lg text-paragraph">
                                    HOSE
                                </p>

                            </div>
                        </div>
                        <div class="flex items-center gap-7">
                            <div class="lg:w-[172px] lg:max-w-[37%]">
                                <div class="flex-col gap-2">
                                    <div class="flex gap-[14px] data_number">
                                        <div class="lg:text-[40px] text-4xl font-bold">
                                            43.30
                                        </div>
                                        <div class="flex flex-col text-[#FE5353]">
                                            <p>
                                                -0.20%
                                            </p>
                                            <p>
                                                -0.46%
                                            </p>
                                        </div>
                                    </div>
                                    <p class="time-update mt-1">
                                        Cập nhật lúc 14:45 UTC_7
                                    </p>

                                </div>
                            </div>
                            <div class="flex-1 grid grid-cols-3 gap-5 font-Helvetica">
                                <div class="col-span-1 space-y-5">
                                    <div class="flex flex-col gap-0.5">
                                        <p class="text-paragraph text-opacity-70 text-xs">
                                            Trần
                                        </p>
                                        <p class="font-bold text-[#1CCD83] text-lg">
                                            49.95
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <p class="text-paragraph text-opacity-70 text-xs">
                                            Cao nhất
                                        </p>
                                        <p class="font-bold text-black text-lg">
                                            47.70
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-1 space-y-5">
                                    <div class="flex flex-col gap-0.5">
                                        <p class="text-paragraph text-opacity-70 text-xs">
                                            Tham chiếu
                                        </p>
                                        <p class="font-bold text-[#FFB81C] text-lg">
                                            49.95
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <p class="text-paragraph text-opacity-70 text-xs">
                                            Thấp nhất
                                        </p>
                                        <p class="font-bold text-black text-lg">
                                            46.65
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-1 space-y-5">
                                    <div class="flex flex-col gap-0.5">
                                        <p class="text-paragraph text-opacity-70 text-xs">
                                            Sàn
                                        </p>
                                        <p class="font-bold text-[#FE5353] text-lg">
                                            43.45
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <p class="text-paragraph text-opacity-70 text-xs">
                                            Trung bình
                                        </p>
                                        <p class="font-bold text-black text-lg">
                                            47.31
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-[433px] max-w-[33%]">
                    <div
                        class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 h-full flex flex-col justify-between gap-5 font-Helvetica">
                        <div class="flex items-end justify-between">
                            <div class="lg:w-[120px] space-y-2">
                                <p class="text-paragraph text-opacity-70 text-xs">
                                    Tham chiếu
                                </p>
                                <p class="font-medium text-lg">
                                    133,883,457
                                </p>
                            </div>
                            <div class="lg:w-[120px]">
                                <p class="text-paragraph text-opacity-70 text-xs">
                                    Vốn hóa
                                </p>
                                <p class="font-medium text-lg">
                                    1,600
                                </p>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="lg:w-[120px] space-y-2">
                                <p class="text-paragraph text-opacity-70 text-xs">
                                    KLGD trung bình
                                    10 ngày
                                </p>
                                <p class="font-medium text-lg">
                                    6,800
                                </p>
                            </div>
                            <div class="lg:w-[120px]">
                                <p class="text-paragraph text-opacity-70 text-xs">
                                    P/E
                                </p>
                                <p class="font-medium text-lg">
                                    23.73
                                </p>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="lg:w-[120px] space-y-2">
                                <p class="text-paragraph text-opacity-70 text-xs">
                                    P/B
                                </p>
                                <p class="font-medium text-lg">
                                    24,191
                                </p>
                            </div>
                            <div class="lg:w-[120px]">
                                <p class="text-paragraph text-opacity-70 text-xs">
                                    ROE
                                </p>
                                <p class="font-medium text-lg">
                                    2.12
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div
                        class="bg-gradient-blue-to-bottom-100 rounded-xl lg:px-10 px-5 lg:py-6 py-5 h-full font-Helvetica flex flex-col">
                        <h3 class="font-bold mb-6">
                            KHUYẾN NGHỊ
                        </h3>
                        <div class="space-y-4 mb-6">
                            <div class="flex items-center justify-between text-xs">
                                <p class="text-xs">
                                    Analyst:
                                </p>
                                <p class="font-bold text-primary-300">
                                    Trịnh Tuấn Ngọc
                                </p>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <p class="text-xs">
                                    Khuyến nghị:
                                </p>
                                <p
                                    class="inline-block rounded-full px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold">
                                    Mua
                                </p>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <p class="text-xs">
                                    Danh mục:
                                </p>
                                <p
                                    class="inline-block rounded-full px-4 py-0.5 bg-[#D6F6DE] text-[#30D158] font-semibold">
                                    Mua
                                </p>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <p class="text-xs">
                                    Ngày cập nhật
                                </p>
                                <p class="font-bold">
                                    18/11/1998
                                </p>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <p
                                class="inline-flex items-center px-4 py-1.5 font-bold gap-1.5 rounded-full text-[#F90] bg-gradient-yellow-50">
                                <?php echo svg('gold', '24', '24') ?>
                                Hạng A
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="xl:my-[100px] my-20">
        <div class="container">
            <ul class="flex lg:gap-[100px] gap-10 items-center border-b border-[#D3D3D3] nav-ttcp">
                <li
                    class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
                    <a href=""
                        class="active inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
                        TỔNG QUAN
                    </a>
                </li>
                <li
                    class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
                    <a href=""
                        class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
                        BÁO CÁO TÀI CHÍNH
                    </a>
                </li>
                <li
                    class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
                    <a href=""
                        class="inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
                        CHỈ TIÊU TÀI CHÍNH
                    </a>
                </li>
                <li
                    class="[&:last-child]:relative [&:last-child]:after:absolute [&:last-child]:after:w-0.5 [&:last-child]:after:h-6 [&:last-child]:after:top-1 [&:last-child]:after:bg-[#C9CCD2] [&:last-child]:after:lg:-left-[50px] [&:last-child]:after:-left-5">
                    <a href=""
                        class="has-icon inline-flex items-center gap-2 transition-all duration-500 pb-6 lg:text-xl font-bold uppercase [&:not(.active)]:text-black text-primary-300 [&:not(.active)]:opacity-70 opacity-100 relative after:absolute after:w-full after:h-0.5 after:bottom-0 after:left-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 after:opacity-100 after:bg-primary-300 hover:!text-primary-300 hover:!opacity-100 hover:after:!opacity-100">
                        <?php echo svg('star', '24', '24') ?>
                        BSC DỰ PHÓNG
                    </a>
                </li>
            </ul>
            <div class="lg:flex mt-10 lg:gap-[69px]">
                <div class="lg:w-[744px] lg:max-w-[56%]">
                    <h2 class="heading-title mb-10">
                        BIỂU ĐỒ GIÁ
                    </h2>
                    <div class="rounded-2xl lg:py-8 lg:px-6 p-5 bg-[#F5FCFF]">
                        <ul
                            class="flex items-center justify-between font-Helvetica font-medium mb-6 px-4">
                            <li>
                                <button type="button"
                                    class="active [&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
                                    1 giờ
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
                                    12 giờ
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
                                    1 ngày
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
                                    1 tháng
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
                                    3 tháng
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                    class="[&:not(.active)]:opacity-50 opacity-100 transition-all duration-500 hover:!opacity-100">
                                    6 tháng
                                </button>
                            </li>
                        </ul>
                        <div class="font-Helvetica" id="chart-candle">

                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <h2 class="heading-title mb-10">
                        LỊCH SỬ GIAO DỊCH
                    </h2>
                    <ul class="flex items-center flex-wrap gap-[12px] font-semibold mb-4">
                        <li>
                            <a href=""
                                class="active inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
                                Lịch sử GD
                            </a>
                        </li>
                        <li>
                            <a href=""
                                class="inline-block rounded-md [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-[15px] py-2 transition-all duration-500 hover:!bg-primary-300 hover:!text-white">
                                NĐTNN
                            </a>
                        </li>
                    </ul>
                    <div
                        class="rounded-lg border border-[#C9CCD2] overflow-hidden text-xs font-medium text-center">
                        <div class="flex bg-primary-300 text-white">
                            <div class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left">
                                Nhóm
                            </div>
                            <div class="w-[152px] max-w-[30%] px-3 py-2">
                                Thay đổi giá
                            </div>
                            <div class="w-[136px] max-w-[27%] px-3 py-2">
                                KL khớp lệnh
                            </div>
                            <div class="flex-1 px-3 py-2">
                                Tổng GTGD
                            </div>
                        </div>
                        <ul>
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                            ?>
                                <li class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
                                    <div
                                        class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
                                        16/09
                                    </div>
                                    <div
                                        class="w-[152px] max-w-[30%] px-3 py-2 min-h-10 flex items-center justify-between border-r border-[#C9CCD2]">
                                        <p>
                                            46.7
                                        </p>
                                        <p
                                            class="flex items-center gap-1 text-[#1CCD83] font-Helvetica">
                                            <?php echo svg('up', '17', '17') ?>
                                            +0.98%
                                        </p>
                                    </div>
                                    <div
                                        class="w-[136px] max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-center border-r border-[#C9CCD2]">
                                        331,200
                                    </div>
                                    <div
                                        class="flex-1 px-3 py-2 min-h-10 flex items-center justify-center">
                                        15,608,000
                                    </div>
                                </li>
                                <li class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
                                    <div
                                        class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
                                        16/09
                                    </div>
                                    <div
                                        class="w-[152px] max-w-[30%] px-3 py-2 min-h-10 flex items-center justify-between border-r border-[#C9CCD2]">
                                        <p>
                                            46.7
                                        </p>
                                        <p
                                            class="flex items-center gap-1 text-[#FE5353] font-Helvetica">
                                            <?php echo svg('downn', '17', '17') ?>
                                            +0.98%
                                        </p>
                                    </div>
                                    <div
                                        class="w-[136px] max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-center border-r border-[#C9CCD2]">
                                        331,200
                                    </div>
                                    <div
                                        class="flex-1 px-3 py-2 min-h-10 flex items-center justify-center">
                                        15,608,000
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="flex items-center [&:nth-child(odd)]:bg-white bg-[#EBF4FA]">
                                <div
                                    class="w-[90px] max-w-[19%] pl-4 pr-3 py-2 text-left min-h-10 flex items-center border-r border-[#C9CCD2]">
                                    16/09
                                </div>
                                <div
                                    class="w-[152px] max-w-[30%] px-3 py-2 min-h-10 flex items-center justify-between border-r border-[#C9CCD2]">
                                    <p>
                                        46.7
                                    </p>
                                    <p
                                        class="flex items-center gap-1 text-[#1CCD83] font-Helvetica">
                                        <?php echo svg('up', '17', '17') ?>
                                        +0.98%
                                    </p>
                                </div>
                                <div
                                    class="w-[136px] max-w-[27%] px-3 py-2 min-h-10 flex items-center justify-center border-r border-[#C9CCD2]">
                                    331,200
                                </div>
                                <div
                                    class="flex-1 px-3 py-2 min-h-10 flex items-center justify-center">
                                    15,608,000
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href=""
                            class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500  hover:scale-105">
                            <?php echo svg('arrow-btn', '20', '20') ?>
                            Xem tất cả
                        </a>
                        <p class="font-medium text-xs font-Helvetica">
                            Đơn vị GTGD: 1000 VNĐ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="xl:my-[100px] my-20">
        <div class="container">
            <div class="lg:flex gap-5">
                <div class="w-[386px] max-w-[29%]">
                    <h2 class="heading-title mb-10">
                        BÁO CÁO PHÂN TÍCH
                    </h2>
                    <div class="space-y-4">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                        ?>
                            <div class="rounded-[10px] bg-white shadow-base-sm px-6 py-4 flex flex-col">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-4">
                                        <a href=""
                                            class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                                            Báo cáo ngành
                                        </a>

                                    </div>
                                    <div class="space-y-1.5 text-right">
                                        <span
                                            class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold ">Tích
                                            cực</span>
                                        <p class="text-paragraph text-xs font-Helvetica">22/10/2024
                                            2:22:19 CH</p>
                                    </div>
                                </div>
                                <h3 class="font-bold mb-6 transition-all duration-500 hover:text-green font-Helvetica">
                                    <a href="" class="line-clamp-2">
                                        Daily Morning_VHM công bố sẽ mua 370 triệu Cổ phiếu
                                        quỹ_20240808
                                    </a>
                                </h3>
                                <div class="flex items-center justify-between">

                                    <a href=""
                                        class="inline-flex items-center gap-3 text-green font-bold transition-all duration-500 hover:scale-105 ml-auto">
                                        <?php _e('Tải xuống', 'bsc') ?>
                                        <?php echo svg('download', '20', '20') ?>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="w-[414px] max-w-[31%]">
                    <h2 class="heading-title mb-10">
                        CƠ CẤU CỔ ĐÔNG
                    </h2>
                    <div class="space-y-4">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cctc.svg"
                            alt="" class="w-full h-auto">
                        <div
                            class="rounded-xl p-6 bg-gradient-blue-50 lg:min-h-[234px] lg:flex lg:flex-col lg:justify-center w-full">
                            <ul class="font-Helvetica space-y-4">
                                <li class="flex items-center justify-between">
                                    <p>
                                        KLCP Lưu hành:
                                    </p>
                                    <strong class="text-primary-300">
                                        Trịnh Tuấn Ngọc
                                    </strong>
                                </li>
                                <li class="flex items-center justify-between">
                                    <p>
                                        Tỷ lệ sở hữu nhà nước (%)
                                    </p>
                                    <strong>
                                        0
                                    </strong>
                                </li>
                                <li class="flex items-center justify-between">
                                    <p>
                                        Tỷ lệ sở hữu nước ngoài (%)
                                    </p>
                                    <strong>
                                        22,65%
                                    </strong>
                                </li>
                                <li class="flex items-center justify-between">
                                    <p>
                                        Room nước ngoài
                                    </p>
                                    <strong>
                                        26,35%
                                    </strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <h2 class="heading-title mb-10">
                        CƠ CẤU CỔ ĐÔNG
                    </h2>
                    <div
                        class="rounded-tl-lg rounded-tr-lg overflow-hidden max-h-[580px] overflow-y-auto scroll-bar-custom relative">
                        <table
                            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:px-3 prose-th:py-4 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3 prose-thead:sticky prose-thead:top-0">
                            <thead>
                                <tr>
                                    <th class="!pl-5 cursor-pointer">Mã CK
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>

                                    <th class="filter-table cursor-pointer filter-table">Vốn hóa
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>

                                    <th class="filter-table cursor-pointer filter-table">PE
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                    <th class="filter-table cursor-pointer filter-table">PB
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="prose-tr:border-b prose-tr:border-[#C9CCD2]">
                                <?php
                                for ($i = 0; $i < 3; $i++) {
                                ?>
                                    <tr>
                                        <td class="!pl-5"><a href="">A32</a></td>
                                        <td>36,80</td>
                                        <td>301,24</td>
                                        <td>6,99</td>
                                    </tr>
                                    <tr>
                                        <td class="!pl-5"><a href="">A33</a></td>
                                        <td>37,80</td>
                                        <td>302,24</td>
                                        <td>7,99</td>
                                    </tr>
                                    <tr>
                                        <td class="!pl-5"><a href="">A34</a></td>
                                        <td>38,80</td>
                                        <td>303,24</td>
                                        <td>8,99</td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <p class="text-right mt-4 italic text-xs pr-7 font-Helvetica">
                        Đơn vị Vốn hóa (Triệu đồng)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="xl:my-[100px] my-20">
        <div class="container">
            <h2 class="heading-title mb-10">
                TIN TỨC VỀ MÃ CỔ PHIẾU
            </h2>
            <div class="grid grid-cols-2 gap-x-9 gap-y-[46px]">
                <?php
                for ($i = 0; $i < 6; $i++) {
                ?>
                    <div class="news_service-item">
                        <div class="flex items-center">
                            <div
                                class="md:w-[100px] md:h-[100px] w-20 h-20 flex-col flex items-center justify-center rounded overflow-hidden shrink-0">
                                <p
                                    class="date text-center bg-primary-300 text-white font-bold text-xs py-[2px] px-1 leading-normal w-full">
                                    2024
                                </p>
                                <div
                                    class="flex-1 flex flex-col justify-center items-center text-xl font-bold bg-primary-50 w-full">
                                    <p>20</p>
                                    <p class="text-primary-300 text-xs font-medium">
                                        Tháng 4
                                    </p>
                                </div>
                            </div>
                            <div class="md:ml-[30px] ml-5">
                                <a href=""
                                    class="block font-bold leading-normal text-lg line-clamp-2 mb-2 transition-all duration-500 hover:text-green">
                                    Thông báo về ngày đăng ký cuối cùng để thực hiện quyền
                                    trả lãi, gốc trái phiếu mã BSI32301
                                </a>
                                <div class="line-clamp-2 font-Helvetica leading-normal text-paragraph">
                                    BSC đã khẳng định vị thế dẫn đầu về thị phần môi giới
                                    trái phiếu chính phủ trên HNX. Năm 2020, BSC giữ vững vị
                                    thế Top 10 công ty chứng khoán có thị phần môi giới cổ
                                    phiếu, chứng chỉ quỹ và chứng quyền có đảm bảo lớn nhất
                                    tại HoSE
                                </div>
                            </div>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
