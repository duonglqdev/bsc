<?php
if ( $args['search'] ) {
	$search = $args['search'];
	$get_array_id_taxonomy = get_array_id_taxonomy( 'danh-muc-bao-cao-phan-tich' );
	$time_cache = get_field( 'cdbcpt2_time_cache', 'option' ) ?: 300;
	$banner = wp_get_attachment_image_url(
		wp_is_mobile() && bsc_is_mobile() && get_field( 'cdc1_background_banner_mobile', 'option' )
		? get_field( 'cdc1_background_banner_mobile', 'option' )
		: get_field( 'cdc1_background_banner', 'option' ),
		'full'
	);
	if ( get_field( 'cdbcpt1_background_banner_tag', 'option' ) || get_field( 'cdbcpt1_background_banner_tag_mobile', 'option' ) ) {
		$banner = wp_get_attachment_image_url(
			wp_is_mobile() && bsc_is_mobile() && get_field( 'cdbcpt1_background_banner_tag_mobile ', 'option' )
			? get_field( 'cdbcpt1_background_banner_tag_mobile ', 'option' )
			: get_field( 'cdbcpt1_background_banner_tag ', 'option' ),
			'full'
		);
	}
	$style = get_field( 'cdbcpt1_background_banner_display_tag', 'option' ) ?: 'default';
	$title = get_field( 'cdbcpt1_title_tag', 'option' );
	$breadcrumb = 'tagbaocao';
} else {
	wp_redirect( home_url( '/404' ), 301 );
	exit;
}
get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner', null, array(
		'banner' => $banner,
		'style' => $style,
		'title' => $title,
		'breadcrumb' => $breadcrumb,
	) ) ?>
	<section class="xl:[my-100px] my-20">
		<div class="container">
			<div class="flex justify-between items-center mb-8">
				<h2 class="heading-title"><?php echo __( 'Kết quả tìm kiếm' ) . ': ' . $search ?></h2>
			</div>
			<?php
			if ( isset( $_GET['posts_to_show'] ) ) {
				$post_per_page = bsc_format_string( $_GET['posts_to_show'], 'number' );
			} else {
				$post_per_page = get_option( 'posts_per_page' );
			}
			if ( isset( $_GET['post_page'] ) ) {
				$index = ( bsc_format_string( $_GET['post_page'], 'number' ) - 1 ) * $post_per_page + 1;
			} else {
				$index = 1;
			}
			$array_data = array(
				'lang' => pll_current_language(),
				'hashtag' => $search,
				'maxitem' => $post_per_page,
				'index' => $index
			);
			$response = get_data_with_cache( 'GetReportsBySymbol', $array_data, $time_cache );
			if ( $response ) {
				if ( $response->totalrecord ) {
					$total_post = $response->totalrecord;
				} else {
					$total_post = $post_per_page;
				}
				$total_page = ceil( $total_post / $post_per_page );
				?>
					<div class="grid gap-5 lg:grid-cols-3 grid-cols-2">
						<?php
						foreach ( $response->d as $news ) {
							get_template_part( 'template-parts/content', 'bao-cao-phan-tich', array(
								'data' => $news,
								'get_array_id_taxonomy' => $get_array_id_taxonomy,
							) );
						}
						?>
					</div>
					<div class="mt-12">
						<?php get_template_part( 'components/pagination', '', array(
							'get' => 'api',
							'total_page' => $total_page,
							'url' => get_home_url() . '/tag-report/' . $$search,
						) ) ?>
					</div>
			<?php } ?>
		</div>
	</section>
</main>
<?php
get_footer();
