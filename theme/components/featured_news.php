<?php
$number = get_sub_field('number') ?: 3;
$time_cache = get_sub_field('time_cache') ?: 300;
$array_data = array(
    "maxitem" => $number,
    "lang" => pll_current_language(),
    'index' => 1,
    'hot' => 1
);
$response = get_data_with_cache('GetNews', $array_data, $time_cache);
if ($response) {
?>
    <section class="pt-12 featured_news bg-gradient-blue-to-bottom-50" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <div class="container">
            <div class="featured_news-list block_slider-show-1"
                data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": true, "pageDots": false, "cellAlign": "left","contain": true, "autoPlay":3000,"selectedAttraction": 0.01, "friction": 0.2}'>
                <?php
                $i = 3;
                foreach ($response->d as $news) {
                    $i++;
                    if ($i % 3 == 0) {
                        $color = '#ccece7';
                    } elseif ($i % 3 == 1) {
                        $color = '#fff1d2';
                    } elseif ($i % 3 == 2) {
                        $color = '#EBF4FA';
                    } ?>
                    <div class="w-full block_slider-item">
                        <a href="<?php echo slug_news(htmlspecialchars($news->newsid), htmlspecialchars($news->title)); ?>"
                            class="group grid lg:grid-cols-2 grid-cols-1 rounded-2xl overflow-hidden">
                            <div class="lg:py-14 py-10 lg:px-20 px-6 h-full"
                                style="background-color:<?php echo  $color ?>;">
                                <h2
                                    class="lg:2xl:text-[28px] text-xl text-xl font-bold line-clamp-2 mb-6 transition-all duration-500 group-hover:text-yellow-100 leading-snug">
                                    <?php echo htmlspecialchars($news->title) ?>
                                </h2>
                                <div class="line-clamp-3 font-Helvetica mb-10">
                                    <?php echo htmlspecialchars($news->description) ?>
                                </div>
                                <div class="mt-auto">
                                    <p
                                        class="inline-block px-6 py-3 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white">
                                        <span
                                            class="block relative z-10"><?php _e('Xem chi tiết', 'bsc') ?></span>
                                    </p>

                                </div>
                            </div>
                            <div class="relative w-full pt-[55%]">
                                <img src="<?php echo bsc_set_thumbnail($news, 'large') ?>"
                                    alt="<?php echo htmlspecialchars($news->title) ?>" class="object-cover absolute w-full h-full inset-0">
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>