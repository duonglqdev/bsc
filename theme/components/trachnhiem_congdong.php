<section class="relative <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'lg:pt-[130px] lg:pb-[100px] py-16':'bg-gradient-blue-50 py-10' ?> trachnhiem_congdong" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
            <?php if (get_sub_field('title')) { ?>
                <h2 class="heading-title mb-8">
                    <?php the_sub_field('title') ?>
                </h2>
            <?php } ?>
        <?php } ?>
        <div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:grid lg:grid-cols-2 flex flex-col-reverse gap-20' : 'gap-10 flex flex-col' ?>">
            <div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'order-1 col-span-1' : 'order-2' ?>">
                <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                    <?php if (get_sub_field('title')) { ?>
                        <h2 class="heading-title 2xl:mb-12 mb-10">
                            <?php the_sub_field('title') ?>
                        </h2>
                    <?php } ?>
                <?php } ?>
                <?php if (get_sub_field('mota')) { ?>
                    <div class="font-Helvetica text-justify <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-8' ?>">
                        <?php the_sub_field('mota') ?>
                    </div>
                <?php } ?>
                <?php if (have_rows('content')) { ?>
                    <div class="community_content-list block_slider-show-1">
                        <?php while (have_rows('content')): the_row(); ?>
                            <div class="community_content-item font-Helvetica block_slider-item">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="text-primary-300 font-bold <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'text-2xl':'' ?>">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <?php if (get_sub_field('mota')) { ?>
                                    <div class="text-justify the_content <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mt-6':'mt-4 text-xs' ?>">
                                        <?php the_sub_field('mota') ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php } ?>
            </div>
            <?php if (have_rows('content')) { ?>
                <div class=" <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'order-2 col-span-1' : 'order-1 pb-[80px] relative' ?>">
                
                    <div
                        class="community_nav flex flex-wrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[470px] h-full m-auto justify-between' : 'relative flex justify-around ' ?>">
                        <?php
                        $i = 0;
                        while (have_rows('content')): the_row(); ?>
                            <div class="community_nav-item cursor-pointer relative w-1/2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'max-w-[200px]' : '' ?>"
                                data-index="<?php echo $i ?>">
                                <div class="relative w-full pt-[100%]">
                                    <?php echo svgClass('comunity') ?>
                                    <div class="icon absolute <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'top-3 right-5 lg:w-auto lg:h-auto w-2/5 h-2/5' : 'w-[36%] h-[36%] flex items-center justify-center top-4 right-4' ?>">
                                        <img src="<?= the_sub_field('icon') ?>" alt="icon" loading="lazy" class="object-contain">
                                    </div>

                                </div>
                            </div>
                        <?php
                            $i++;
                        endwhile; ?>
                    </div>
                    <?php if ( wp_is_mobile() && bsc_is_mobile() )
						{ ?>
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bsc-cd.svg"
								alt=""
								class="absolute w-full h-full object-cover inset-0 pointer-events-none">
						<?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
    <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
        <div class="absolute w-full h-full inset-0 -z-10">
            <div class="community_content-bg pc block_slider-show-1">
                <?php while (have_rows('content')): the_row(); ?>
                    <div class="item block_slider-item">
                        <?php echo wp_get_attachment_image(get_sub_field('background'), 'large', '', array('class' => 'w-full h-full object-cover lg:max-h-[714px] object-center')) ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
                        
    <?php } ?>
</section>