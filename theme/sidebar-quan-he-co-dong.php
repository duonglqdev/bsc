<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsc
 */

if (!is_active_sidebar('sidebar-quan-he-co-dong')) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-quan-he-co-dong'); ?>
</aside><!-- #secondary -->