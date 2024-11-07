<?php
$images = get_sub_field('gallery');
if ($images): ?>
    <div class="flex mt-10 <?php the_sub_field('style_image') ?>">
        <?php foreach ($images as $image): ?>
            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox>
                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php if (get_sub_field('mota')) { ?>
    <small class="text-center"><?php the_sub_field('mota') ?></small>
<?php } ?>