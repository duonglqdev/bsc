<?php
if ($args['data']) {
    $news = $args['data'];
    $get_array_id_taxonomy = get_array_id_taxonomy('danh-muc-bao-cao-phan-tich');
    $time_cache = get_field('cdbcpt2_time_cache', 'option') ?: 300;
    $link = 'javascript:void(0)';
    if ($news->categoryid) {
        $categoryid = $news->categoryid;
        $term = get_name_by_tax_id($categoryid, $get_array_id_taxonomy);
        if ($term) {
            $link = get_term_link($term);
        }
    }
} else {
    wp_redirect(home_url('/404'), 301);
    exit;
}
get_header();
?>
<main>
    <?php get_template_part('components/page-banner') ?>
    <section class="mt-14 xl:mb-[100px] mb-20">
        <div class="container">
            <h1 class="lg:text-[32px] text-2xl font-bold mb-8">
                <?php echo $title ?>
            </h1>
            <div class="lg:flex lg:gap-[70px]">
                <div class="lg:w-80 lg:max-w-[35%] shrink-0">
                    <div class="rounded-lg px-4 py-6 bg-white shadow-base">
                        <div class="flex items-center justify-between mb-6">
                            <a href="<?php echo $link ?>"
                                class="inline-block bg-primary-300 text-white px-3 py-1 rounded transition-all duration-500 hover:bg-primary-600 text-xs font-semibold">
                                <?php echo htmlspecialchars($news->categoryname) ?>
                            </a>
                            <?php if ($news->recommendation) { ?>
                                <span
                                    class="inline-block rounded-[45px] text-[#30D158] bg-[#D6F6DE] px-4 py-0.5 text-[12px] font-semibold">
                                    <?php echo htmlspecialchars($news->recommendation) ?>
                                </span>
                            <?php } ?>
                        </div>
                        <ul class="space-y-3 text-xs font-Helvetica">
                            <?php $date = new DateTime($news->datetimepublished); ?>
                            <li class="flex items-center justify-between">
                                <p>
                                    <?php _e('Ngày đăng', 'bsc') ?>
                                </p>
                                <p class="font-medium">
                                    <?php echo $date->format('d/m/Y'); ?>
                                </p>
                            </li>
                            <?php if ($news->author) { ?>
                                <li class="flex items-center justify-between">
                                    <p>
                                        <?php _e('Tên chuyên viên', 'bsc') ?>
                                    </p>
                                    <p class="font-medium">
                                        <?php echo $news->author ?>
                                    </p>
                                </li>
                            <?php } ?>
                            <li class="flex items-center justify-between">
                                <p>
                                    <?php _e('Ngôn ngữ', 'bsc') ?>
                                </p>
                                <p class="font-medium">
                                    Tiếng Việt
                                </p>
                            </li>
                            <li class="flex items-center justify-between">
                                <p>
                                    <?php _e('Lượt tải về', 'bsc') ?>
                                </p>
                                <p class="font-medium">
                                    <?php echo htmlspecialchars($news->downloads) ?>
                                </p>
                            </li>
                        </ul>
                        <?php
                        $tags = $news->hashtag;
                        if ($tags) {
                            $tags = explode(", ", $tags);
                        ?>
                            <div class="mt-4 space-x-2 space-y-2">
                                <?php foreach ($tags as $tag) { ?>
                                    <a href="<?php echo get_home_url() ?>/tag-report/<?php echo $tag ?>"
                                        class="inline-block rounded-full transition-all duration-500 hover:bg-[#f1c2c6] text-[#FF0017] bg-[#FFD9DC] text-[12px] px-2 py-0.5">
                                        #<?php echo $tag ?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($news->reporturl) { ?>
                            <div class="mt-6">
                                <a href="<?php echo $news->reporturl ?>"
                                    class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block px-6 py-3 font-semibold relative transition-all duration-500 leading-tight flex-1 rounded-xl w-full h-10 text-center text-xs">
                                    <?php _e('Tải xuống', 'bsc') ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="flex-1 space-y-8">
                    <?php if ($news->content) { ?>
                        <div class="summary">
                            <h2 class="text-2xl font-bold mb-4">
                                <?php _e('Tóm tắt báo cáo', 'bsc') ?>
                            </h2>
                            <div
                                class="text-justify font-Helvetica prose-img:rounded-[10px] prose-img:mx-auto prose-img:mt-6 prose-img:mb-8 prose-ul:pl-3 prose-ul:list-disc prose-ul:space-y-2">
                                <?php echo $news->content ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($news->description) { ?>
                        <div class="detail">
                            <h2 class="text-2xl font-bold mb-4">
                                <?php _e('Báo cáo chi tiết', 'bsc') ?>
                            </h2>
                            <div
                                class="text-justify font-Helvetica prose-img:rounded-[10px] prose-img:mx-auto prose-img:mt-6 prose-img:mb-8 prose-ul:pl-3 prose-ul:list-disc prose-ul:space-y-2 text-[#000]">
                                <?php echo $news->description ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    if ($args['data']  && $categoryid) {
        $array_data = array(
            'lang' => pll_current_language(),
            'maxitem' => 6,
            'categoryid' => $categoryid
        );
        $response = get_data_with_cache('GetReportsBySymbol', $array_data, $time_cache);
        if ($response) {
    ?>
            <section class="xl:my-[100px] my-20">
                <div class="container">
                    <h3 class="text-center font-bold lg:text-[32px] text-2xl mb-8">
                        <?php _e('Các báo cáo liên quan', 'bsc') ?>
                    </h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                        <?php
                        foreach ($response->d as $news) {
                            get_template_part('template-parts/content', 'bao-cao-phan-tich', array(
                                'data' => $news,
                                'get_array_id_taxonomy' => $get_array_id_taxonomy,
                            ));
                        }
                        ?>
                    </div>
                </div>
            </section>
    <?php
        }
    } ?>
</main>
<?php
get_footer();
