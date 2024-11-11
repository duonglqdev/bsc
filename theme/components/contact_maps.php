<section class="xl:my[100px] my-20 contact_maps" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="font-bold text-2xl mb-8 text-primary-300">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <div class="flex items-center gap-4 mb-6">
            <strong>Tỉnh thành:</strong>
            <select class="select_custom pl-5 py-0 border-[#EAEEF4] rounded-[10px] h-[38px]">
                <option value="">Tất cả</option>
                <option value="">CN Kon Tum</option>
                <option value="">CN Ba Đình</option>
            </select>
        </div>
        <div class="lg:flex md:gap-12">
            <div class="lg:w-[460px] md:max-w-[35%]">
                <div class="w-full rounded-[10px] shadow-base py-2">
                    <div
                        class="mx-4 mb-2 rounded-[10px] flex items-center px-[26px] h-[50px] gap-3 border border-[#DDE2EA]">
                        <?php echo svg('search', '24', '24') ?>
                        <input type="text" id="search-contact"
                            class="flex-1 border-none focus:outline-0 focus:ring-0 placeholder:text-[#898A8D]"
                            placeholder="<?php _e('Nhập từ khóa tìm kiếm', 'bsc') ?>">
                    </div>
                    <div class="scroll-bar-custom overflow-y-auto max-h-[566px]">
                        <?php
                        for ($i = 0; $i < 6; $i++) {
                        ?>
                            <div
                                class="map-address p-4 border-b border-[#DDE2EA] font-Helvetica cursor-pointer transition-all duration-500 hover:bg-[#EAF8FE] relative group hover:pb-9">
                                <h3 class="font-bold text-primary-300 mb-2 ">
                                    CN Kon Tum
                                </h3>
                                <div class="text-xs text-[#4A5568] group-hover:mb-4">Số 1A, Đường Trần Phú, Phường
                                    Quyết Thắng, Thành phố Kon Tum, Kon Tum - Phường Quyết Thắng-Kon
                                    Tum - Kon Tum</div>
                                <button
                                    class="absolute opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                    <span class="inline-flex gap-x-3 items-center text-green font-semibold  transition-all duration-500  hover:scale-105  text-xs">
                                        <?php _e('Chỉ đường', 'bsc') ?>
                                        <?php echo svg('arrow-btn', '16', '16') ?>
                                    </span>
                                </button>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                </div>
            </div>
            <div class="flex-1">
                <div class="map-item relative w-full pt-[76.4424%]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5476283838575!2d106.66243187572773!3d10.76930485932362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f7c8bf050ff%3A0x4fa87595d124cc0c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIb2EgU2VuIC0gQ8ahIHPhu58gVGjDoG5oIFRow6Fp!5e0!3m2!1svi!2s!4v1730454253622!5m2!1svi!2s"
                        width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>