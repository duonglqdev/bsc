<?php

/**
Template Name: Giao diện
 */

get_header();
?>
<main>
	<?php
	if ( get_query_var( 'mck_bctc' ) && isset( $args['page_id'] ) ) {
		$page_id = $args['page_id'];
	} else {
		$page_id = get_the_ID();
	}
	if ( have_rows( 'home_components', $page_id ) ) {
		while ( have_rows( 'home_components', $page_id ) ) :
			the_row();
			$module_name = get_row_layout();
			switch ( $module_name ) :
				case $module_name:
					get_template_part( 'components/' . $module_name );
			endswitch;
		endwhile;
	}
	?>
	<h1 class="hidden">
		<?php echo wp_title() ?>
	</h1>
</main>

<?php
get_footer();
