<section class="block_partner lg:py-[77px] md:py-14 py-9 relative"
    style="background-color: <?php the_sub_field('background') ?>" 
    <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container 2xl:max-w-[1500px]">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center 2xl:mb-12 lg:mb-8 mb-[18px] wow fadeIn"
                data-wow-duration="2s"><?php the_sub_field('title') ?></h2>
        <?php } ?>
        
        <?php
        if (have_rows('gallery')) :
            // Lấy tất cả items từ gallery
            $gallery_items = [];
            while (have_rows('gallery')) : the_row();
                $gallery_items[] = [
                    'link' => get_sub_field('link'),
                    'logo' => get_sub_field('logo')
                ];
            endwhile;
            
            // Tính số lượng items và chia đôi cho mobile
            $total_items = count($gallery_items);
            $half_items = ceil($total_items / 2);
        ?>
            <!-- Slider cho PC (hiển thị tất cả ảnh) -->
			 <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
				<div class="block__slider-marquee marquee-rtl block_slider-show-6 partner_list hidden md:block">
					<?php 
					foreach ($gallery_items as $item) : 
					?>
						<div class="block_slider-item md:px-4 px-[12px] md:py-3 py-2 lg:w-1/6 md:w-1/4 w-2/5">
							<a href="<?php echo check_link($item['link']) ?>"
								class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full shadow bg-no-repeat bg-full bg-center transition-all duration-500 hover:scale-110"
								style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/svg/test-svg.png)">
								<?php echo wp_get_attachment_image($item['logo'], 'medium', '', array('class' => 'absolute w-full max-w-[80%] max-h-[80%] object-contain inset-0 m-auto')) ?>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
								
			 <?php } ?>

            <?php if (wp_is_mobile() && bsc_is_mobile()) : ?>
                <!-- Slider 1 cho mobile (nửa đầu) -->
                <div class="block__slider-marquee marquee-rtl block_slider-show-2 partner_list lg:hidden">
                    <?php 
                    foreach (array_slice($gallery_items, 0, $half_items) as $item) : 
                    ?>
                        <div class="block_slider-item md:px-4 px-[12px] md:py-3 py-2 lg:w-1/6 md:w-1/4 w-2/5">
                            <a href="<?php echo check_link($item['link']) ?>"
                                class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full shadow bg-no-repeat bg-full bg-center transition-all duration-500 hover:scale-110"
                                style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/svg/test-svg.png)">
                                <?php echo wp_get_attachment_image($item['logo'], 'medium', '', array('class' => 'absolute w-full max-w-[80%] max-h-[80%] object-contain inset-0 m-auto')) ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Slider 2 cho mobile (nửa sau) -->
                <div class="block__slider-marquee marquee block_slider-show-2 partner_list lg:hidden">
                    <?php 
                    foreach (array_slice($gallery_items, $half_items) as $item) : 
                    ?>
                        <div class="block_slider-item md:px-4 px-[12px] md:py-3 py-2 lg:w-1/6 md:w-1/4 w-2/5">
                            <a href="<?php echo check_link($item['link']) ?>"
                                class="block relative partner-item pt-[45%] rounded-lg overflow-hidden w-full shadow bg-no-repeat bg-full bg-center transition-all duration-500 hover:scale-110"
                                style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/assets/svg/test-svg.png)">
                                <?php echo wp_get_attachment_image($item['logo'], 'medium', '', array('class' => 'absolute w-full max-w-[80%] max-h-[80%] object-contain inset-0 m-auto')) ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    
    <?php if (get_sub_field('image_bg')) { ?>
        <div class="absolute lg:block hidden top-16 right-0 pointer-events-none">
            <img src="<?= the_sub_field('image_bg') ?>" alt="icon" loading="lazy" class="object-contain">
        </div>
    <?php } ?>
</section>