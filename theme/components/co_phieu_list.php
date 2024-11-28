<section class="xl:my-[100px] my-20 co_phieu_list" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <form class="flex gap-4 items-end mb-10" id="form-search-cophieu">
            <div class="lg:w-[20%] lg:max-w-[300px] flex flex-col font-Helvetica">
                <p class="font-medium mb-2">
                    <?php _e('Tìm theo tên', 'bsc') ?>
                </p>
                <input type="text" placeholder="<?php _e('Nhập mã chứng khoán', 'bsc') ?>"
                    class="w-full bg-[#F3F4F6] h-[50px] rounded-[10px] px-5 border-[#E4E4E4]" id="search-name">
            </div>
            <div class="lg:w-[20%] lg:max-w-[300px] flex flex-col font-Helvetica">
                <p class="font-medium mb-2">
                    <?php _e('Tìm mã cổ phiếu', 'bsc') ?>
                </p>
                <select
                    class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]" id="search-code">
                    <option value=""><?php _e('Tất cả', 'bsc') ?></option>

                </select>
            </div>
            <div class="lg:w-[20%] lg:max-w-[243px] flex flex-col font-Helvetica">
                <p class="font-medium mb-2">
                    <?php _e('Tìm theo ngành', 'bsc') ?>
                </p>
                <select
                    class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]" id="search-major">
                    <option value=""><?php _e('Tất cả', 'bsc') ?></option>

                </select>
            </div>
            <div class="lg:w-[20%] lg:max-w-[241px] flex flex-col font-Helvetica">
                <p class="font-medium mb-2">
                    <?php _e('Tìm theo sàn', 'bsc') ?>
                </p>
                <select
                    class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]" id="search-trading">
                    <option value=""><?php _e('Tất cả', 'bsc') ?></option>

                </select>
            </div>
            <button type="button" id="search_cophieu"
                class="btn-base-yellow h-[50px] rounded-xl flex-1 whitespace-nowrap">
                <span class="block relative z-10">
                    <?php _e('Tìm kiếm', 'bsc') ?>
                </span>
            </button>
            <button type="reset" id="reset-ttcp"
                class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
                <?php echo svgClass('reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform') ?>
            </button>
        </form>
        <div class="flex flex-col">
            <p class="italic mb-4 text-right"><?php _e('Đơn vị Vốn hóa, GTGD: Triệu đồng', 'bsc') ?></p>
            <?php
            if (isset($_GET['posts_to_show'])) {
                $post_per_page = $_GET['posts_to_show'];
            } else {
                $post_per_page = get_option('posts_per_page');
            }
            if (isset($_GET['page'])) {
                $index = ($_GET['page'] - 1) * $post_per_page + 1;
            } else {
                $index = 1;
            }
            $array_data = array(
                'lang' => pll_current_language(),
                'maxitem' => 100000,
            );
            $response = get_data_with_cache('GetInstrumentInfo', $array_data, $time_cache);
            ?>
            <div id="co-phieu__list">
                <?php

                if ($response) {
                ?>
                    <div class="rounded-tl-lg rounded-tr-lg overflow-hidden">
                        <table id="ttcp-table"
                            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:p-3 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3">
                            <thead>
                                <tr>
                                    <th class="!pl-5 cursor-pointer "><?php _e('Mã CK', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                    <th class="w-1/5"><?php _e('Tên công ty', 'bsc') ?></th>
                                    <th><?php _e('Sàn', 'bsc') ?></th>
                                    <th><?php _e('Ngành', 'bsc') ?></th>
                                    <th class=" cursor-pointer"><?php _e('Vốn hóa', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                    <th><?php _e('KLGD', 'bsc') ?></th>
                                    <th><?php _e('GTGD', 'bsc') ?></th>
                                    <th class=" cursor-pointer"><?php _e('PE', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                    <th class=" cursor-pointer"><?php _e('PB', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($response->d as $news) {
                                ?>
                                    <tr class="border-b border-[#C9CCD2]">
                                        <td class="!pl-5" data-code="<?php echo $news->SYMBOL ?>"><a href=""><?php echo $news->SYMBOL ?></a></td>
                                        <td><?php echo $news->FULLNAME ?></td>
                                        <td data-trading="<?php echo $news->EXCHANGE ?>"><?php echo $news->EXCHANGE ?></td>
                                        <td data-major="<?php echo $news->INDUSTRYNAME ?>"><?php echo $news->INDUSTRYNAME ?></td>
                                        <td><?php echo $news->MC ?></td>
                                        <td><?php echo $news->TOTALVOLUME ?></td>
                                        <td><?php echo number_format($news->TOTALVALUE) ?></td>
                                        <td><?php echo $news->PE ?></td>
                                        <td><?php echo $news->PB ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                <?php } else {
                    get_template_part('template-parts/content', 'none');
                } ?>
            </div>

        </div>
    </div>
</section>