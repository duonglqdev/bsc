<?php
$sapce_image = get_sub_field('sapce_image') ?: 'default';
$images = get_sub_field('gallery');
if ($images): ?>
    <div class="flex mt-10 <?php the_sub_field('style_image') ?> <?php echo $sapce_image ?>">
        <?php foreach ($images as $image): ?>
            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox>
                <img loading="lazy" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php if (get_sub_field('mota')) { ?>
    <p class="text-center text-xs mt-4 font-Helvetica italic"><?php the_sub_field('mota') ?></p>
<?php } ?>