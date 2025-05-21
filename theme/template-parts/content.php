<?php if ( $args['data'] ) {
	$news = $args['data'];
	if ( $news->originlink ) {
		$target_blank = 'target="_blank"';
		$url_post = $news->originlink;
	} else {
		$target_blank = '';
		$url_post = slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) );
	}
	?>
	<div
		class="post_item font-Helvetica flex flex-col <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'shadow-[0px_4px_6px_0px_rgba(0,0,0,0.07)] rounded-lg overflow-hidden w-full block_slider-item' ?>">
		<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
			class="block relative pt-[55.7%] w-full group rounded-[10px] overflow-hidden <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-6' : 'mb-4' ?>">
			<img loading="lazy" src="<?php echo bsc_set_thumbnail( $news, 'thumbnail' ) ?>"
				alt="<?php echo htmlspecialchars( $news->title ) ?>"
				class="absolute w-full h-full inset-0 object-cover group-hover:scale-110 transition-all duration-500">
		</a>
		<?php
		$date = new DateTime( $news->postdate );
		?>
		<div
			class="date flex items-center gap-x-[12px] text-xs <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-2' : 'mb-[12px] px-[12px]' ?>">
			<?php echo svg( 'date' ) ?>
			<span>
				<?php echo $date->format( 'd/m/Y' ); ?>
			</span>

		</div>
		<p
			class="hover:text-green transition-all duration-500 font-bold <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-3' : 'px-[12px] mb-4 font-body' ?>">
			<a <?php echo $target_blank ?> href="<?php echo $url_post; ?>" class="line-clamp-2">
				<?php echo htmlspecialchars( $news->title ) ?>
			</a>
		</p>
		<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
			<div class="text-paragraph <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mb-4' : 'text-xs px-[12px] pb-4' ?>">
				<p class="line-clamp-2">
					<?php echo htmlspecialchars( $news->description ) ?>
				</p>
			</div>
		<?php } ?>
		<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
			<div class="mt-auto">
				<a <?php echo $target_blank ?> href="<?php echo $url_post; ?>"
					class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105 text-xs">
					<?php _e( 'Xem chi tiết', 'bsc' ) ?>
					<?php echo svg( 'arrow-btn', '12', '12' ) ?>
				</a>
			</div>

		<?php } ?>
	</div>
<?php } ?>