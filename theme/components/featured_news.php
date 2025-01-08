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
    <section class="pt-12 featured_news lg:bg-gradient-blue-to-bottom-50" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
        <div class="container">
            <div class="featured_news-list block_slider-show-1 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'dots-blue' ?>" data-flickity='{
				"draggable": true,
				"wrapAround": true,
				"imagesLoaded": true,
				"prevNextButtons": <?php echo wp_is_mobile() && bsc_is_mobile()? "false" : "true"; ?>,
				"pageDots": <?php echo wp_is_mobile() && bsc_is_mobile() ? "true" : "false"; ?>,
				"cellAlign": "left",
				"contain": true,
				"autoPlay": false,
				"selectedAttraction": 0.01,
				"friction": 0.2
			}'>
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
                            class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid group grid-cols-2 rounded-2xl overflow-hidden' : 'block' ?>">
                            <div class="h-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:py-14 py-8 lg:px-20 px-8' : ' rounded-tl-xl rounded-tr-xl px-4 py-[29px]' ?>"
                                style="background-color:<?php echo  $color ?>;">
                                <h2
                                    class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-[28px] text-xl mb-6' : 'text-lg mb-[12px]' ?> font-bold line-clamp-2  transition-all duration-500 group-hover:text-yellow-100 leading-snug">
                                    <?php echo htmlspecialchars($news->title) ?>
                                </h2>
                                <div class="line-clamp-2 font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-base mb-10' : 'text-xs' ?>">
                                    <?php echo htmlspecialchars($news->description) ?>
                                </div>
                                <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                                    <div class="mt-auto">
                                        <p
                                            class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500">
                                            <span
                                                class="block relative z-10"><?php _e('Xem chi tiết', 'bsc') ?></span>
                                        </p>
    
                                    </div>
                                                    
                                <?php } ?>
                            </div>
                            <div class="relative w-full <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'pt-[55%]' : 'pt-[62.68%]' ?>">
                                <img loading="lazy" src="<?php echo bsc_set_thumbnail($news, 'large') ?>"
                                    alt="<?php echo htmlspecialchars($news->title) ?>" class="object-cover absolute w-full h-full inset-0">
                            </div>
                            <?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<div class="mt-2">
								<p
									class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] font-semibold relative transition-all duration-500 rounded-lg py-3 px-6 text-center text-xs">
									<span
										class="block relative z-10"><?php _e( 'Xem chi tiết bài đăng', 'bsc' ) ?></span>
								</p>

							</div>
						<?php } ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>