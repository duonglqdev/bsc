<!-- @todo:Tạo field  ảnh nền mobile background_mb-->
<?php 
$bg_pc =get_sub_field('background') ? get_sub_field('background'):'';
$bg_mb = get_sub_field('background_mb') ? get_sub_field('background_mb'):get_sub_field('background');
$bg = !wp_is_mobile() && !bsc_is_mobile()?$bg_pc:$bg_mb;
?>
<section class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'xl:my-[100px] my-20':'my-[50px]' ?> mgck_banner" <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>>
    <div class="container">
        <div class="bg-no-repeat bg-cover rounded-3xl overflow-hidden  <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'min-h-[438px] flex flex-col justify-center':'min-h-[472px] py-10 px-7' ?>"
            style="background-image:url(<?php echo wp_get_attachment_image_url($bg, 'full') ?>)">
            <div class="<?php echo !wp_is_mobile() && !bsc_is_mobile() ?'max-w-[507px] ml-[114px]':'' ?>">
                <?php if (get_sub_field('title_big')) { ?>
                    <h3
                        class="font-bold uppercase text-primary-300 !leading-[1.35] <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'2xl:text-[40px] text-3xl mb-6':'text-[22px] mb-[12px]' ?>">
                        <?php the_sub_field('title_big') ?>
                    </h3>
                <?php } ?>
                <?php if (get_sub_field('title_small')) { ?>
                    <div class="font-Helvetica <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'font-bold text-xl':'font-medium' ?>">
                        <?php the_sub_field('title_small') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>