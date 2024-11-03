<?php
$icon_global = get_sub_field('icon');
?>
<div class="xl:my-[100px] my-20 reward_feature" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <?php if (get_sub_field('title')) { ?>
            <h2 class="heading-title mb-10 text-center">
                <?php the_sub_field('title') ?>
            </h2>
        <?php } ?>
        <?php if (have_rows('reward')) { ?>
            <div class="rounded-2xl flex overflow-hidden">
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
                        class="<?php if ($i == 1) echo 'active' ?> grow cursor-pointer bg-gradient-blue-<?php echo $color ?> min-h-[398px] flex gap-10 justify-center items-center award__item font-Helvetica py-10 transition-all">
                        <div
                            class="flex flex-col items-center justify-center w-full award__item-nav">
                            <?php if ($icon_global) { ?>
                                <div class="mb-4 hide-open <?php if ($i == 1) echo 'hidden' ?>">
                                    <?php echo wp_get_attachment_image($icon_global, 'medium', '', array('class' => 'ax-w-10 h-auto object-contain w-full')) ?>
                                </div>
                            <?php } ?>
                            <div
                                class="<?php if ($i == 1) echo 'active' ?> main-img [&:not(.active)]:mx-auto ml-10 w-full [&:not(.active)]:max-w-[98px] max-w-[190px] [&:not(.active)]:pl-0 ">
                                <div class="relative w-full pt-[124%]">
                                    <?php echo wp_get_attachment_image(get_sub_field('img'), 'medium', '', array('class' => 'absolute w-full h-full inset-0 object-contain transition-all')) ?>
                                </div>
                            </div>
                            <div class="mt-6 hide-open arr <?php if ($i == 1) echo 'hidden' ?>">
                                <?php echo svg('arr-left') ?>
                            </div>
                        </div>
                        <div
                            class="award__item-content cursor-default transition-all w-0 overflow-hidden opacity-0 invisible">
                            <div class="max-w-[470px]">
                                <?php if (get_sub_field('title')) { ?>
                                    <h3 class="2xl:text-2xl text-xl font-bold mb-4 font-body">
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