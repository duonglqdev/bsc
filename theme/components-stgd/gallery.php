<?php
$sapce_image = get_sub_field( 'sapce_image' ) ?: 'gap-5';
$images = get_sub_field( 'gallery' );
if ( $images ) : ?>
	<div
		class="flex mt-10 <?php the_sub_field( 'style_image' ) ?> <?php echo $sapce_image ?> <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-col gap-5' ?>">
		<?php foreach ( $images as $image ) : ?>
			<a href="<?php echo esc_url( $image['url'] ); ?>" data-fancybox class="m-auto">
				<img loading="lazy" class="lg:max-w-full max-w-[90%] m-auto"
					src="<?php echo esc_url( $image['sizes']['large'] ); ?>"
					alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			</a>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
<?php if ( get_sub_field( 'mota' ) )
{ ?>
	<p class="text-center text-xs mt-4 font-Helvetica italic"><?php the_sub_field( 'mota' ) ?></p>
<?php } ?>

<!-- @todo: Tạo thêm field để hiển thị video -->
<!-- <div class="lg:my-6 my-4">
    <a href=""
        class="block relative w-full pt-[52%] mb-6 overflow-hidden rounded-[10px] after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40"
        data-fancybox="">
        <?php echo wp_get_attachment_image( get_sub_field( '' ), 'large', '', array( 'class' => 'absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110' ) ) ?>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
            <?php echo svgClas( 'play', '', '','lg:w-14 lg:h-14 w-10 h-10' ) ?>
        </div>
    </a>
</div> -->