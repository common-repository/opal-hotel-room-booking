<?php
/**
 * The template for displaying room content within loops
 *
 * This template can be overridden by copying it to yourtheme/opalhotel/loop/descriptions.php.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

global $opalhotel_room;

if ( ! has_excerpt( $opalhotel_room->id ) ) {
	return;
}

?>

<div class="room-description">
	<?php the_excerpt(); ?>
</div>
