<section class="lg:my-24 mb-10 hoatdong_noibat" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title mb-10">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="grid md:grid-cols-4 lg:gap-[70px] gap-10">
            <div class="md:col-span-1 col-span-full">
                <div class="sticky top-5 z-10">
                    <ul class="shadow-base p-3 rounded-[10px] bg-white scroll-bar-custom max-h-[156px] overflow-y-auto">
                        <li>
                            <a href="" class="active block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
                                Năm 2024
                            </a>
                        </li>
                        <li>
                            <a href="" class="block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
                                Năm 2023
                            </a>
                        </li>
                        <li>
                            <a href="" class="block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
                                Năm 2022
                            </a>
                        </li>
                        <li>
                            <a href="" class="block px-5 py-3 [&:not(.active)]:font-semibold font-bold [&:not(.active)]:text-lg text-xl [&:not(.active)]:bg-white bg-[#DAEAFF] rounded-md [&:not(.active)]:text-black text-primary-400">
                                Năm 2021
                            </a>
                        </li>
                    </ul>
                    <div class="mt-12">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-sidebar.png"
                            alt=""
                            class="rounded-lg transition-all duration-500 hover:scale-105">
                    </div>
                </div>
            </div>
            <div class="md:col-span-3 col-span-full">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                    ?>
                        <div class="post_item font-Helvetica">
                            <a href=""
                                class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden mb-6">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/activity.png"
                                    alt=""
                                    class="absolute w-full h-full inset-0 object-cover group-hover:scale-110 transition-all duration-500">
                            </a>
                            <div class="date flex items-center gap-x-[12px] mb-2 text-xs">
                                <?php echo svg('date') ?>
                                <span>
                                    Ngày 26/06/2024
                                </span>
                                <span>
                                    5:13:58 CH
                                </span>
                            </div>
                            <a href=""
                                class="block font-bold line-clamp-2 mb-3 hover:text-primary-300 transition-all duration-500">
                                BSC và Edmond de Rothschild hợp tác triển khai thành lập công ty
                                quản lý quỹ tại Việt Nam 
                            </a>
                            <div class="line-clamp-3 text-paragraph mb-4">
                                Ngày 25/3/2024, tại Geneva (Thụy Sĩ), Công ty Cổ phần Chứng
                                khoán BIDV (BSC) và Edmond de Rothschild tổ chức lễ ký kết thỏa
                                thuận liên doanh góp vốn nhằm triển khai thành lập công ty quản
                                lý quỹ tại Việt Nam. Sau thỏa thuận, hai bên sẽ tiếp tục triển
                                khai các thủ tục xin phép cơ quan chức năng tại Việt Nam để đưa
                                công ty quản lý quỹ đi vào hoạt động.
                            </div>
                            <a href=""
                                class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 text-xs">
                                Xem chi tiết
                                <?php echo svg('arrow-btn', '12', '12') ?>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="mt-12">
                    <?php get_template_part('components/pagination') ?>
                </div>
            </div>
        </div>
    </div>
</section>