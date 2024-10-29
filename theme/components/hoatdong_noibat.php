<section class="lg:my-24 mb-10 hoatdong_noibat" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title 2xl:mb-10 mb-8">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="grid md:grid-cols-4 2xl:gap-[70px] gap-12">
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
            <?php
            $array_data = array(
                'lang' => pll_current_language(),
                'groupid' => 30,
                'maxitem' => 10
            );
            $response = get_data_with_cache('GetNews', $array_data, $time_cache);
            if ($response) {
            ?>
                <div class="md:col-span-3 col-span-full">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8 ">
                        <?php
                        foreach ($response->d as $news) {
                            get_template_part('template-parts/content', null, array(
                                'data' => $news,
                            ));
                        }
                        ?>
                    </div>
                    <div class="mt-12">
                        <?php get_template_part('components/pagination') ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>