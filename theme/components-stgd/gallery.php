<?php
$sapce_image = get_sub_field( 'sapce_image' ) ?: 'gap-5';
$images = get_sub_field( 'gallery' );
if ( $images ) : ?>
	<div
		class="flex mt-10 <?php the_sub_field( 'style_image' ) ?> <?php echo $sapce_image ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-col gap-5' ?>">
		<?php foreach ( $images as $image ) : ?>
			<a href="<?php echo esc_url( $image['url'] ); ?>" data-fancybox class="m-auto">
				<img loading="lazy" class="lg:max-w-full max-w-[90%] m-auto"
					src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			</a>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
<?php if ( get_sub_field( 'mota' ) ) { ?>
	<p class="text-center text-xs mt-4 font-Helvetica italic"><?php the_sub_field( 'mota' ) ?></p>
<?php } ?>