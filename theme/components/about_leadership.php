<section class="about_leadership <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:mt-[100px] mt-14' : 'mt-[50px] bg-gradient-blue-to-top pb-[46px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:mb-12 mb-10' : 'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php
        $title_tab = generateRandomString(10);
        if (have_rows('doi_ngu')) { ?>
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'lg:grid lg:grid-cols-4 2xl:gap-[50px] gap-9 lg:space-y-0 space-y-5' : '' ?>">
                <div class="col-span-1">
                    <ul class="flex about_leadership-nav <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex-col py-[15px] pr-[15px] rounded-[15px] space-y-3' : 'justify-between shadow-none pb-6 mb-6 border-b border-[#C9CCD2]' ?>"
                        data-tabs-toggle="#about_leadership-tab" role="tablist"
                        data-tabs-active-classes="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-white bg-primary-400 rounded-tr-xl rounded-br-xl' : 'text-primary-300 after:w-full' ?>"
                        data-tabs-inactive-classes="<?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-black' : 'text-[#31333F]' ?>">
                        <?php
                        $i = 0;
                        while (have_rows('doi_ngu')): the_row();
                            $i++;
                            $title_tab_muc = $title_tab . $i;
                        ?>
                            <li role="presentation">
                                <button
                                    class=" <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left text-black hover:text-white hover:bg-primary-400 hover:rounded-tr-xl hover:rounded-br-xl' : 'text-xs font-bold relative after:w-0 after:h-[3px] after:-bottom-[26px] after:bg-primary-300 after:left-0 after:absolute' ?>"
                                    id="<?php echo $title_tab_muc ?>-tab" data-tabs-target="#<?php echo $title_tab_muc ?>" type="button"
                                    role="tab" aria-controls="<?php echo $title_tab_muc ?>" aria-selected="false"><?php echo get_sub_field('title') ?>
                                    <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
                                        <div class="hidden svg-container">
                                            <?php echo svg('arrow-right-tab') ?>
                                        </div>
                                    <?php } ?>
                                </button>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="col-span-3">
                    <div id="about_leadership-tab">
                        <?php
                        $i = 0;
                        while (have_rows('doi_ngu')): the_row();
                            $i++;
                            $title_tab_muc = $title_tab . $i;
                        ?>
                            <div class="hidden" id="<?php echo $title_tab_muc ?>" role="tabpanel"
                                aria-labelledby="<?php echo $title_tab_muc ?>-tab">
                                <?php if (have_rows('member')) { ?>
                                    <div class="flex flex-wrap justify-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '-mx-3 gap-y-10' : '-mx-2 gap-y-4' ?>">
                                        <?php
                                        while (have_rows('member')): the_row();
                                        ?>
                                            <div class="group cursor-pointer about_leadership-item <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'w-1/3 px-3' : 'w-1/2 px-2' ?>"
                                                data-modal-target="leader-modal"
                                                data-modal-toggle="leader-modal">
                                                <?php if (get_sub_field('avatar')) { ?>
                                                    <div
                                                        class="relative w-full overflow-hidden <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pt-[100%] rounded-lg' : 'pt-[136.25%] rounded-[10px]' ?> after:absolute after:w-full after:h-1/2 after:bottom-0 after:left-0 after:bg-gradient-white-to-top-50 after:transition-all after:opacity-0 group-hover:after:opacity-100">
                                                        <?php echo wp_get_attachment_image(get_sub_field('avatar'), 'large', '', array('class' => 'w-full h-full absolute inset-0 object-cover leader_img')) ?>
                                                    </div>
                                                <?php } ?>
                                                <div class="mt-[15px] font-Helvetica about_leadership-title">
                                                    <h4
                                                        class="font-bold  <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'text-xl mb-2' : 'md:text-lg text-xs mb-0.5' ?>  text-black group-hover:text-primary-400 transition-all">
                                                        <?php the_sub_field('name') ?>
                                                    </h4>
                                                    <p class="font-medium text-black text-opacity-50 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'md:text-base text text-xxs' ?>">
                                                        <?php the_sub_field('position') ?>
                                                    </p>
                                                </div>
                                                <div class="about_leadership-content hidden">
                                                    <?php the_sub_field('content') ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<div id="leader-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[99] justify-center items-center w-full md:inset-0 h-full max-h-full bg-black bg-opacity-20">
    <div class="relative w-full max-h-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'p-4 max-w-2xl lg:max-w-[1094px] max-h-full' : 'md:max-w-[80%] max-w-[90%]' ?>">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div
                class=" leader_popup-content <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'grid md:grid-cols-5 lg:gap-12 p-[50px]' : 'p-4' ?>">
                <div class="md:col-span-2">
                    <div class="leader_img w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'lg:max-w-[349px]' : '' ?>">
                        <div class="relative w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'pt-[122%]' : 'pt-[75%]' ?>">
                            <img loading="lazy" src="" alt=""
                                class="absolute w-full h-full object-cover object-top inset-0 rounded-lg">
                        </div>
                        <?php if (wp_is_mobile() && bsc_is_mobile()) { ?>
                            <button type="button"
                                class="bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white absolute top-3 right-3"
                                data-modal-hide="leader-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M18 18L6 6" stroke="#4A5568" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 18L18 6" stroke="#4A5568" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="sr-only"><?php _e('Đóng', 'bsc') ?></span>
                            </button>
                        <?php } ?>
                    </div>
                </div>
                <div class="md:col-span-3 relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'mt-4' ?>">
                    <p class="leader_name font-bold mb-1 text-primary-400 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '2xl:text-2xl text-xl' : 'text-lg text-center' ?>">
                    </p>
                    <p class="leader_role font-medium text-black text-opacity-50 <?php echo !wp_is_mobile() && !bsc_is_mobile() ? '' : 'text-xs text-center' ?>">
                    </p>
                    <div class="main__content font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ? 'mt-6 prose-p:mb-4' : 'mt-4 prose-p:mb-2 text-xs' ?>">
                    </div>
                    <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?>
                        <button type="button"
                            class="bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white absolute top-0 -right-2"
                            data-modal-hide="leader-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path d="M18 18L6 6" stroke="#4A5568" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6 18L18 6" stroke="#4A5568" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="sr-only"><?php _e('Đóng', 'bsc') ?></span>
                        </button>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>