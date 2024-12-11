<section class="lg:py-16 py-12 bg-gradient-blue-50 tthtkh_search" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <form class="mx-auto max-w-[950px] flex gap-4" id="seach_support-content" action="<?php echo get_home_url() ?>">
            <div
                class="flex-1 rounded-[10px] bg-white lg:px-[26px] px-5 h-[50px] flex gap-3 items-center">
                <?php echo svg('search', '24', '24') ?>
                <input type="text" name="s"
                    class="w-full placeholder:text-[#898A8D] border-none focus:outline-0 focus:ring-0"
                    placeholder="<?php _e('Tìm kiếm nội dung hỗ trợ', 'bsc') ?>">
                <input type="hidden" name="type_search" value="so_tay">
            </div>
            <button type="submit"
                class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight lg:min-w-[210px] rounded-xl h-[50px]">
                <?php _e('Tìm kiếm', 'bsc') ?>
            </button>
        </form>
        <div class="mt-16">
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title mb-10">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php } ?>
            <?php if (have_rows('category_navigation')) { ?>
                <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-12 gap-10">
                    <?php
                    while (have_rows('category_navigation')): the_row();
                    ?>
                        <div class="space-y-4 font-Helvetica">
                            <?php if (get_sub_field('title_cat')) { ?>
                                <h4 class="xl:text-2xl text-xl font-bold">
                                    <?php the_sub_field('title_cat') ?>
                                </h4>
                            <?php } ?>
                            <?php if (have_rows('post')) { ?>
                                <ul class="pl-5 list-disc text-primary-300 text-lg">
                                    <?php while (have_rows('post')): the_row(); ?>
                                        <li>
                                            <a href="<?php echo check_link(get_sub_field('link')) ?>"
                                                class="hover:text-primary-600 transition-all duration-500">
                                                <?php the_sub_field('title') ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php } ?>
                            <?php
                            if (have_rows('button')) {
                                while (have_rows('button')): the_row();
                                    if (get_sub_field('title')) {
                            ?>
                                        <a rel="<?php the_sub_field('rel') ?>" <?php if (get_sub_field('open_tab')) echo 'target="_blank"' ?> href="<?php echo check_link(get_sub_field('link')) ?>"
                                            class="text-green font-semibold inline-flex gap-x-2 items-center transition-all duration-500 hover:scale-105">
                                            <?php the_sub_field('title') ?>
                                            <?php echo svg('arrow-btn', '12', '12') ?>
                                        </a>
                            <?php
                                    };
                                endwhile;
                            } ?>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>