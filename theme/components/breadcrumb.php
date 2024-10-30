<?php
if (is_page() && have_rows('breacrumb')) {
?>
    <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
        <p>
            <?php
            $i = 0;
            while (have_rows('breacrumb')): the_row();
                $i++; ?>
                <?php
                if ($i != 1) {
                ?>
                    <span class="separator"> / </span>
                <?php
                }
                ?>
                <?php if (get_sub_field('link')) { ?>
                    <a href="<?php the_sub_field('link') ?>"><?php the_sub_field('title') ?></a>
                <?php } else { ?>
                    <span><?php the_sub_field('title') ?></span>
                <?php } ?>
            <?php endwhile; ?>
        </p>
    </nav>
    <?php
} elseif ((is_category() || is_singular('post') || $args['custom'] == 'post') && get_field('cdtt1_breadcrumb', 'option')) {
    if (have_rows('cdtt1_breadcrumb', 'option')) {
    ?>
        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
            <p>
                <?php
                $i = 0;
                while (have_rows('cdtt1_breadcrumb', 'option')): the_row();
                    $i++; ?>
                    <?php
                    if ($i != 1) {
                    ?>
                        <span class="separator"> / </span>
                    <?php
                    }
                    ?>
                    <?php if (get_sub_field('link')) { ?>
                        <a href="<?php the_sub_field('link') ?>"><?php the_sub_field('title') ?></a>
                    <?php } else { ?>
                        <span><?php the_sub_field('title') ?></span>
                    <?php } ?>
                <?php endwhile; ?>
                <span class="separator"> / </span>
                <span>
                    <?php
                    if (is_category()) {
                        if (get_field('title', get_queried_object())) {
                            $title = get_field('title', get_queried_object());
                        } else {
                            $title = get_the_archive_title();
                        }
                    } else {
                        $title = $args['title'];
                    }
                    echo $title;
                    ?>
                </span>
            </p>
        </nav>
    <?php
    }
} elseif (($args['custom'] == 'congdong') && get_field('cdtnvcd1_breadcrumb', 'option')) {
    if (have_rows('cdtnvcd1_breadcrumb', 'option')) {
    ?>
        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
            <p>
                <?php
                $i = 0;
                while (have_rows('cdtnvcd1_breadcrumb', 'option')): the_row();
                    $i++; ?>
                    <?php
                    if ($i != 1) {
                    ?>
                        <span class="separator"> / </span>
                    <?php
                    }
                    ?>
                    <?php if (get_sub_field('link')) { ?>
                        <a href="<?php the_sub_field('link') ?>"><?php the_sub_field('title') ?></a>
                    <?php } else { ?>
                        <span><?php the_sub_field('title') ?></span>
                    <?php } ?>
                <?php endwhile; ?>
            </p>
        </nav>
    <?php
    }
} elseif (is_tax('danh-muc-bao-cao') && get_field('cdqhcd1_breadcrumb', 'option')) {
    if (have_rows('cdqhcd1_breadcrumb', 'option')) {
    ?>
        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
            <p>
                <?php
                $i = 0;
                while (have_rows('cdqhcd1_breadcrumb', 'option')): the_row();
                    $i++; ?>
                    <?php
                    if ($i != 1) {
                    ?>
                        <span class="separator"> / </span>
                    <?php
                    }
                    ?>
                    <?php if (get_sub_field('link')) { ?>
                        <a href="<?php the_sub_field('link') ?>"><?php the_sub_field('title') ?></a>
                    <?php } else { ?>
                        <span><?php the_sub_field('title') ?></span>
                    <?php } ?>
                <?php endwhile; ?>
                <span class="separator"> / </span>
                <span>
                    <?php
                    if (is_tax()) {
                        if (get_field('title', get_queried_object())) {
                            $title = get_field('title', get_queried_object());
                        } else {
                            $title = get_the_archive_title();
                        }
                    }
                    echo $title;
                    ?>
                </span>
            </p>
        </nav>
    <?php
    }
} elseif (is_singular('tuyen-dung') && get_field('cdtd1_breacrumb', 'option')) {
    if (have_rows('cdtd1_breacrumb', 'option')) {
    ?>
        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
            <p>
                <?php
                $i = 0;
                while (have_rows('cdtd1_breacrumb', 'option')): the_row();
                    $i++; ?>
                    <?php
                    if ($i != 1) {
                    ?>
                        <span class="separator"> / </span>
                    <?php
                    }
                    ?>
                    <?php if (get_sub_field('link')) { ?>
                        <a href="<?php the_sub_field('link') ?>"><?php the_sub_field('title') ?></a>
                    <?php } else { ?>
                        <span><?php the_sub_field('title') ?></span>
                    <?php } ?>
                <?php endwhile; ?>
            </p>
        </nav>
<?php
    }
} else {
    if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
}
