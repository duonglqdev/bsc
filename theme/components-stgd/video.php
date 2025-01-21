<?php if ( wp_is_mobile() && bsc_is_mobile()) { ?> 
	<div class="my-4">
		<?php if ( get_sub_field( 'title' ) ) { ?>
			<p class="py-2 bg-[#E5F5FF] text-primary-300 mb-4 font-bold text-lg px-4"><?php the_sub_field( 'title' ) ?></p>
		<?php } ?>
		<a href="<?php echo check_link( get_sub_field( 'video_link' ) ) ?>"
			class="block relative w-full pt-[52%] mb-6 overflow-hidden rounded-[10px] after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-40"
			data-fancybox="">
			<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'large', '', array( 'class' => 'absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110' ) ) ?>
			<div
				class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 transition-all duration-500 hover:scale-110">
				<?php echo svgClass( 'play', '', '', 'lg:w-14 lg:h-14 w-10 h-10' ) ?>
			</div>
		</a>
	</div>
<?php } ?>