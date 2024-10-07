<?php
if (get_sub_field('background')) {
    $banner = wp_get_attachment_image_url(get_sub_field('background'));
} elseif (get_field('cdc1_background_banner', 'option')) {
    $banner = wp_get_attachment_image_url(get_field('cdc1_background_banner', 'option'));
} else {
    $banner = get_stylesheet_directory_uri() . '/assets/images/about.png';
};
if (get_sub_field('title')) {
    $title = get_sub_field('title');
} else {
    $title = get_the_title();
}
?>
<section <?php if (get_sub_field('id_class')) { ?> id="<?php echo get_sub_field('id_class') ?>" <?php } ?>
    class="page__banner relative after:absolute after:inset-0 after:w-full after:h-full after:pointer-events-none after:bg-gradient-banner py-24 text-white bg-no-repeat bg-cover" style="background-image:url('<?php echo $banner ?>')">
    <div class="container relative z-10">
        <div class="mb-5">
            <?php get_template_part('components/breadcrumb') ?>
        </div>
        <h1 class="lg:text-[40px] text-4xl font-bold">
            <?php echo $title; ?>
        </h1>
    </div>
</section>