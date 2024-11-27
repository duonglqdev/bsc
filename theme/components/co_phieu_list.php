<section class="xl:my-[100px] my-20" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <form class="flex gap-4 items-end mb-10" id="form-search-cophieu">
            <div class="lg:w-[20%] lg:max-w-[300px] flex flex-col font-Helvetica">
                <p class="font-medium mb-2">
                    <?php _e('Tìm theo tên', 'bsc') ?>
                </p>
                <input type="text" placeholder="<?php _e('Nhập mã chứng khoán', 'bsc') ?>"
                    class="w-full bg-[#F3F4F6] h-[50px] rounded-[10px] px-5 border-[#E4E4E4]">
            </div>
            <div class="lg:w-[20%] lg:max-w-[300px] flex flex-col font-Helvetica">
                <p class="font-medium mb-2">
                    <?php _e('Tìm mã cổ phiếu', 'bsc') ?>
                </p>
                <select
                    class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
                    <option value=""><?php _e('Tất cả', 'bsc') ?></option>
                    <option value="">AAA</option>
                    <option value="">BBB</option>
                </select>
            </div>
            <?php
            $array_data_GetIndustryLv2 = array(
                'lang' => pll_current_language(),
            );
            $response_GetIndustryLv2 = get_data_with_cache('GetIndustryLv2', $array_data_GetIndustryLv2, $time_cache);
            if ($response_GetIndustryLv2) {
            ?>
                <div class="lg:w-[20%] lg:max-w-[243px] flex flex-col font-Helvetica">
                    <p class="font-medium mb-2">
                        <?php _e('Tìm theo ngành', 'bsc') ?>
                    </p>
                    <select
                        class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
                        <option value=""><?php _e('Tất cả', 'bsc') ?></option>
                        <?php foreach ($response_GetIndustryLv2->d as $GetIndustryLv2) { ?>
                            <option value="<?php echo $GetIndustryLv2->code ?>"><?php echo $GetIndustryLv2->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            <?php } ?>
            <div class="lg:w-[20%] lg:max-w-[241px] flex flex-col font-Helvetica">
                <p class="font-medium mb-2">
                    <?php _e('Tìm theo sàn', 'bsc') ?>
                </p>
                <select
                    class="select_custom w-full bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
                    <option value=""><?php _e('Tất cả', 'bsc') ?></option>
                    <option value="HOSE">HOSE</option>
                    <option value="HNX">HNX</option>
                    <option value="UPCOM">UPCOM</option>
                </select>
            </div>
            <button type="button" id="search_cophieu"
                class="btn-base-yellow h-[50px] rounded-xl flex-1 whitespace-nowrap">
                <span class="block relative z-10">
                    <?php _e('Tìm kiếm', 'bsc') ?>
                </span>
            </button>
            <button type="reset"
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
                        <table
                            class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:text-left prose-thead:font-bold prose-th:p-3 prose-a:text-primary-300 prose-a:font-bold  font-medium prose-td:py-4 prose-td:px-3">
                            <thead>
                                <tr>
                                    <th class="!pl-5 cursor-pointer filter-table"><?php _e('Mã CK', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                    <th class="w-1/5"><?php _e('Tên công ty', 'bsc') ?></th>
                                    <th><?php _e('Sàn', 'bsc') ?></th>
                                    <th><?php _e('Ngành', 'bsc') ?></th>
                                    <th class="filter-table cursor-pointer"><?php _e('Vốn hóa', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                    <th><?php _e('KLGD', 'bsc') ?></th>
                                    <th><?php _e('GTGD', 'bsc') ?></th>
                                    <th class="filter-table cursor-pointer"><?php _e('PE', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                    <th class="filter-table cursor-pointer"><?php _e('PB', 'bsc') ?>
                                        <?php echo svgClass('filter', '20', '20', 'inline-block') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="prose-tr:border-b prose-tr:border-[#C9CCD2]">
                                <?php
                                foreach ($response->d as $news) {
                                ?>
                                    <tr>
                                        <td class="!pl-5"><a href=""><?php echo $news->symbol ?></a></td>
                                        <td><?php echo $news->fullname ?></td>
                                        <td><?php echo $news->exchange ?></td>
                                        <td><?php echo $news->industryname ?></td>
                                        <td><?php echo $news->mc ?></td>
                                        <td><?php echo $news->totalvolume ?></td>
                                        <td><?php echo $news->totalvalue ?></td>
                                        <td><?php echo $news->pe ?></td>
                                        <td><?php echo $news->pb ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-center">
                        <?php get_template_part('components/pagination') ?>
                    </div>
                <?php } else {
                    get_template_part('template-parts/content', 'none');
                } ?>
            </div>
            <div id="co-phieu-loading" class="hidden">
                <div role="status">
                    <svg aria-hidden="true"
                        class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</section>