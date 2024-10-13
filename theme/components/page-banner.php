<?php
$style = get_sub_field('display_background') ?: 'default';
if (get_sub_field('background')) {
    $banner = wp_get_attachment_image_url(get_sub_field('background'), 'full');
} elseif (is_tax() && get_field('background_banner', get_queried_object())) {
    $banner = wp_get_attachment_image_url(get_field('background_banner', get_queried_object()), 'full');
} elseif (get_field('cdc1_background_banner', 'option')) {
    $banner = wp_get_attachment_image_url(get_field('cdc1_background_banner', 'option'), 'full');
} else {
    $banner = get_stylesheet_directory_uri() . '/assets/images/about.png';
};
if (get_sub_field('title')) {
    $title = get_sub_field('title');
} elseif (is_tax()) {
    if (get_field('title', get_queried_object())) {
        $title = get_field('title', get_queried_object());
    } else {
        $title = get_the_archive_title();
    }
} elseif (is_singular('post')) {
    $category = get_the_category();
    $title = $category[0]->name;
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
        <h2 class="lg:text-[40px] text-4xl font-bold">
            <?php echo $title; ?>
        </h2>
    </div>
</section>