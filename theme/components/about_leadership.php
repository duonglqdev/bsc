<section class="about_leadership lg:mt-[100px] mt-10" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title mb-12">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php
        $title_tab = generateRandomString(10);
        if (have_rows('doi_ngu')) { ?>
            <div class="grid md:grid-cols-4 lg:gap-[50px] gap-9">
                <div class="md:col-span-1">
                    <ul class="flex flex-col about_leadership-nav py-[15px] pr-[15px] rounded-[15px] space-y-3"
                        data-tabs-toggle="#about_leadership-tab" role="tablist"
                        data-tabs-active-classes="text-white bg-primary-400 rounded-tr-xl rounded-br-xl"
                        data-tabs-inactive-classes="text-black">
                        <?php
                        $i = 0;
                        while (have_rows('doi_ngu')): the_row();
                            $i++;
                            $title_tab_muc = $title_tab . $i;
                        ?>
                            <li role="presentation">
                                <button
                                    class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left text-black hover:text-white hover:bg-primary-400 hover:rounded-tr-xl hover:rounded-br-xl"
                                    id="<?php echo $title_tab_muc ?>-tab" data-tabs-target="#<?php echo $title_tab_muc ?>" type="button"
                                    role="tab" aria-controls="<?php echo $title_tab_muc ?>" aria-selected="false"><?php echo get_sub_field('title') ?>
                                    <div class="hidden svg-container">
                                        <?php echo svg('arrow-right-tab') ?>
                                    </div>
                                </button>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="md:col-span-3">
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
                                    <div class="flex flex-wrap justify-center gap-y-10 -mx-3">
                                        <?php
                                        while (have_rows('member')): the_row();
                                        ?>
                                            <div class="px-3 lg:w-1/3 md:w-1/2 w-full group cursor-pointer about_leadership-item"
                                                data-modal-target="leader-modal"
                                                data-modal-toggle="leader-modal">
                                                <?php if (get_sub_field('avatar')) { ?>
                                                    <div
                                                        class="rounded-lg relative w-full pt-[100%] after:absolute after:w-full after:h-1/2 after:bottom-0 after:left-0 after:bg-gradient-to-t after:from-white after:to-transparent after:transition-all after:opacity-0 group-hover:after:opacity-100">
                                                        <?php echo wp_get_attachment_image(get_sub_field('avatar'), 'large', '', array('class' => 'w-full h-full absolute inset-0 object-cover leader_img')) ?>
                                                    </div>
                                                <?php } ?>
                                                <div class="mt-[15px] font-Helvetica about_leadership-title">
                                                    <h4
                                                        class="font-bold text-xl mb-2 text-black group-hover:text-primary-400 transition-all">
                                                        <?php the_sub_field('name') ?>
                                                    </h4>
                                                    <p class="font-medium text-black text-opacity-50">
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
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-20">
    <div class="relative p-4 w-full max-w-2xl lg:max-w-[1094px] max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div
                class="grid md:grid-cols-5 lg:gap-12 gap-10 leader_popup-content lg:p-[50px] p-5">
                <div class="md:col-span-2">
                    <div class="leader_img lg:max-w-[349px] w-full">
                        <div class="relative w-full pt-[122%]">
                            <img src="" alt=""
                                class="absolute w-full h-full object-cover inset-0 rounded-lg">
                        </div>
                    </div>
                </div>
                <div class="md:col-span-3 relative">
                    <h4 class="leader_name text-2xl font-bold mb-1">
                    </h4>
                    <p class="leader_role font-medium text-black text-opacity-50">
                    </p>
                    <div class="main__content mt-6 font-Helvetica">
                    </div>
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
                </div>
            </div>

        </div>
    </div>
</div>