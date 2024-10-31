<?php
/**
 * $Desc$
 *
 * @version    $Id$
 * @package    opalhotel
 * @author     Opal  Team <info@wpopal.com >
 * @copyright  Copyright (C) 2016 wpopal.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @website  http://www.wpopal.com
 * @support  http://www.wpopal.com/support/forum.html
 */
 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$hotels = $room->get_hotels();
?>

<h3 class="room-title">
	<a href="<?php echo esc_attr( get_the_permalink( $room->id ) ) ?>">
		<?php printf( '%s', $room->post_title ) ?>
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
