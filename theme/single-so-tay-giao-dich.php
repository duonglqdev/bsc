<?php
get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <?php get_template_part('components/menu_navigation', '', array(
        'data' => get_field('cdstgg2_menu_navigation', 'option'),
    )) ?>
    <h1 class="hidden"><?php the_title() ?></h1>
    <section class="mt-12 xl:mb-[100px] mb-20">
        <div class="container">
            <div class="lg:flex gap-[70px]">
                <div class="lg:w-80 max-w-[35%]">
                    <?php echo get_sidebar('stgd') ?>
                </div>
                <div class="flex-1 ">
                    <?php
                    $page_id = get_the_ID();
                    if (have_rows('home_components_stgd', $page_id)) {
                        while (have_rows('home_components_stgd', $page_id)) :
                            the_row();
                            $module_name = get_row_layout();
                            switch ($module_name):
                                case $module_name:
                                    get_template_part('components-stgd/' . $module_name);
                            endswitch;
                        endwhile;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="xl:my-[100px] my-20">
        <div class="container">
            <div class="flex items-center justify-between mb-10">
                <h2 class="heading-title">Ưu đãi từ BSC</h2>
                <a href="" class="inline-block px-5 py-2 btn-base-yellow">
                    <span class="inline-flex items-center gap-2 relative z-10">
                        <?php _e('Xem tất cả', 'bsc') ?>
                        <?php echo svg('arrow-btn-2') ?>
                    </span>
                </a>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-[21px]">
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="flex flex-col font-Helvetica">
                        <a href="" class="block w-full pt-[64.66%] overflow-hidden rounded-xl relative">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image2.png"
                                alt=""
                                class="absolute w-full h-full inset-0 object-cover hover:scale-105 transition-all duration-500">
                        </a>
                        <h3
                            class="mt-8 font-bold lg:text-lg transition-all duration-500 hover:text-green">
                            <a href="" class="line-clamp-2">
                                “Giao dịch ngay - Quay là trúng” cùng BSC WebTrading
                            </a>
                        </h3>
                        <div class="mt-6 flex items-center gap-4">
                            <div class="inline-flex items-center gap-2">
                                <?php echo svg('time') ?>
                                Thời gian chương trình:
                            </div>
                            <div class="font-medium">22/08/2024 - 22/10/2024</div>
                        </div>
                        <div class="mt-[14px]">
                            <div class="relative bg-[#D9D9D9] rounded-[28px] overflow-hidden h-[5px]">
                                <p class="absolute max-w-full h-full bg-gradient-blue rounded-[28px]"
                                    style="width:60%"></p>
                            </div>
                            <div class="mt-2 text-xs">
                                Thời gian khuyến mãi còn <strong class="text-primary-300">20 ngày</strong>
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
