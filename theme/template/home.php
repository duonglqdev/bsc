<?php

/**
Template Name: Trang chủ
 */

get_header();
?>
<main>
    <?php get_template_part('components/home-slider')  ?>
    <?php get_template_part('components/offers-slider')  ?>
    <?php get_template_part('components/download-app')  ?>
    <?php get_template_part('components/chart')  ?>
</main>
<?php
get_footer();