<?php

/**
Template Name: Custom HTML 2    
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
</head>

<body>
	<?php
	$file_path = get_field( 'file_html', get_the_ID() );
	if ( $file_path ) {
		echo '1';
		echo file_get_contents( $file_path );
	} else {
		echo '2';
	}
	?>
</body>

</html>