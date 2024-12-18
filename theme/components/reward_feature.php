<?php
$icon_global = get_sub_field('icon');
?>
<div class="reward_feature <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?>" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title text-center <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'mb-10':'mb-6' ?>">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('reward')) { ?>
            <div class="rounded-2xl overflow-hidden <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'flex':'' ?>">
                <?php
                $i = 0;
                while (have_rows('reward')): the_row();
                    $i++;
                    if ($i == 2) {
                        $color = '200';
                    } else {
                        $color = '150';
                    }
                ?>
                    <div
                        class="<?php if ($i == 1) echo 'active' ?> bg-gradient-blue-<?php echo $color ?> grow cursor-pointer award__item font-Helvetica  transition-all <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[398px] flex gap-10 justify-center items-center py-10':'py-9 px-6' ?>">
                        <div
                            class="flex flex-col items-center justify-center w-full award__item-nav <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mx-auto ' ?>">
                            <?php if ($icon_global) { ?>
                                <div class="mb-4 hide-open <?php if ($i == 1) echo 'hidden' ?>">
                                    <?php echo wp_get_attachment_image($icon_global, 'medium', '', array('class' => 'ax-w-10 h-auto object-contain w-full')) ?>
                                </div>
                            <?php } ?>
                            <div
                                class="<?php if ($i == 1) echo 'active' ?> main-img w-full <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'[&:not(.active)]:mx-auto ml-10 max-w-[190px] [&:not(.active)]:pl-0 [&:not(.active)]:max-w-[98px]':'max-w-[124px] [&:not(.active)]:max-w-[82px] [&:not(.active)]:mb-0 mb-8' ?>">
                                <div class="relative w-full pt-[124%]">
                                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full h-full inset-0 object-contain transition-all')) ?>
                                </div>
                            </div>
                            <?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
                                <div class="mt-6 hide-open arr <?php if ($i == 1) echo 'hidden' ?>">
                                    <?php echo svg('arr-left') ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div
                            class="award__item-content cursor-default transition-all w-0 overflow-hidden opacity-0 invisible <?php if ($i !== 1) echo 'hidden' ?> <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'text-xs' ?>">
                            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[470px]':'w-full' ?>">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="font-bold mb-4 font-body <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-2xl text-xl':'text-lg text-center' ?>">
                                        <?php the_sub_field('title') ?>
                                    </h3>
                                <?php } ?>
                                <div class="prose-ul:list-disc prose-ul:pl-5">
                                    <?php the_sub_field('content') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        <?php } ?>
    </div>
</div>