<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bsc
 */

get_header();
?>

<section class="lg:py-24 py-14">
	<div class="container mx-auto">
		<div class="text-center">
			<?php echo svgClass( '404','','','lg:w-[246px] lg:h-[104px] w-[160px] h-[68px] mx-auto' ) ?>
		</div>
		<?php if ( !wp_is_mobile() && !bsc_is_mobile()) { ?> 
			<h2 class="heading-title text-center lg:mt-12 mt-8 mb-6">
				<?php _e( 'ĐÃ CÓ LỖI XẢY RA', 'bsc' ) ?>
			</h2>
		<?php } ?>
		<div class="text-center font-Helvetica lg:text-lg mb-4 <?php echo !wp_is_mobile() && !bsc_is_mobile() ?'':'mt-8' ?>">
			<?php _e( 'Rất tiếc, yêu cầu trang không thể hoàn thành. Vui lòng quay lại trang chủ', 'kmar' ) ?>
		</div>
		<div class="text-center">
			<div class="inline-flex items-center gap-2 text-green font-Helvetica font-bold">
				<?php echo svg( 'back' ) ?>
				<a href="<?php echo get_home_url() ?>">
					<?php _e( 'Quay lại trang chủ', 'bsc' ) ?>
				</a>
			</div>
		</div>


	</div>
</section>

<?php
get_footer();
