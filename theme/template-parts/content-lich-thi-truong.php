<?php if ( $args['data'] ) {
	$GetEvents = $args['data'];
	?>
	<tr>
		<td>
			<?php if ( $GetEvents->exdate ) {
				$date = new DateTime( $GetEvents->exdate );
				echo $date->format( 'd/m/Y' );
			} else {
				echo '-';
			} ?>
		</td>
		<td>
			<?php if ( $GetEvents->lastregdate ) {
				$date = new DateTime( $GetEvents->lastregdate );
				echo $date->format( 'd/m/Y' );
			} else {
				echo '-';
			} ?>
		</td>
		<td>
			<?php if ( $GetEvents->effectivedate ) {
				$date = new DateTime( $GetEvents->effectivedate );
				echo $date->format( 'd/m/Y' );
			} else {
				echo '-';
			} ?>
		</td>
		<td>
			<?php if ( $GetEvents->symbol ) { ?>
				<a href="<?php echo slug_co_phieu( $GetEvents->symbol ) ?>"><?php echo $GetEvents->symbol ?></a>
			<?php } ?>
		</td>
		<td class="text-left">
			<?php if ( $GetEvents->title ) { ?>
				<a target="_blank" href="<?php echo ( $GetEvents->originlink ) ?>"><?php echo $GetEvents->title ?></a>
			<?php } ?>
		</td>
	</tr>
<?php } ?>