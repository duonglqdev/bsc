<section class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:py-[100px] py-20' : 'py-[50px]' ?> relative tai_chinh_content" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container overflow-hidden">
        <div class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'grid-cols-2 gap-9 items-center' : 'gap-4' ?>">
            <div class="col-span-1">
                <?php if (get_sub_field('title')) { ?>
                    <h2 class="heading-title <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-8' : 'mb-6' ?>">
                        <?php the_sub_field('title') ?>
                    </h2>
                <?php } ?>
                <div class="text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-2xl text-xl' : 'text-lg' ?> font-bold text-justify">
                    <?php the_sub_field('mota') ?>
                </div>
                <?php if (have_rows('content')) { ?>
                    <ul
                        class="list-icon  mt-[30px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:text-2xl text-xl space-y-[14px]' : '' ?> font-bold text-primary-300 space-y-4">
                        <?php while (have_rows('content')): the_row(); ?>
                            <li class="list-icon-item">
                                <?php the_sub_field('info') ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="col-span-1 relative z-[1]">
                <?php echo wp_get_attachment_image(get_sub_field('img'), 'large', '', array('class' => 'transition-all duration-500 hover:scale-105 z-10 relative')) ?>
                <?php if ( wp_is_mobile() && bsc_is_mobile() )
					{ ?>
						<div class="absolute top-0 -right-10 pointer-events-none w-3/4 h-full">
							<?php echo svg( 'before-mb' ) ?>
						</div>
					<?php } ?>
            </div>
        </div>
    </div>
    <?php if (!wp_is_mobile() && !bsc_is_mobile()) { ?> 
        <div class="absolute top-0 right-0 pointer-events-none -z-1">
            <?php echo wp_get_attachment_image(get_sub_field('keyvisual'), 'large') ?>
        </div>
    <?php } ?>
</section>