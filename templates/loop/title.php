<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}
global $opalhotel_room;

$hotels = $opalhotel_room->get_hotels();
?>
<h3 class="room-title">
    <a href="<?php echo esc_attr( get_the_permalink() ) ?>">
		<?php the_title() ?>
    </a>
</h3>
<?php if ( $hotels ) : ?>
    <p class="hotel-title">
		<?php foreach ( $hotels as $hotel ) : ?>
            <a href="<?php echo esc_attr( get_the_permalink( $hotel->ID ) ) ?>">
				<?php printf( esc_html_x( '%s', 'hotel name', 'opal-hotel-room-booking' ), $hotel->post_title ); ?>
            </a>
		<?php endforeach; ?>
    </p>
<?php endif; ?>
