<?php
/**
 * Events Pro List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is highly needed.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/widgets/list-widget.php
 *
 * When the template is loaded, the following vars are set:
 *
 * @var string $start
 * @var string $end
 * @var string $venue
 * @var string $address
 * @var string $city
 * @var string $state
 * @var string $province
 * @var string $zip
 * @var string $country
 * @var string $phone
 * @var string $cost
 * @var array  $instance
 *
 * @package TribeEventsCalendarPro
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


/* Events Variables */

$home_id      = 'option';
$events_title = get_field('events_title',$home_id);
$events_label = get_field('events_label',$home_id);
$events_url   = get_field('events_url',$home_id);
$posts        = tribe_get_list_widget_events();


// Check if any posts were found.
if ( isset( $posts ) && $posts ) :
	if ( is_front_page() ) : ?>
		<?php foreach ( $posts as $post ) {		
			setup_postdata( $post );
			tribe_get_template_part( 'pro/widgets/modules/single-event', null, $instance ) ?>
		<?php } ?> 
	<?php else: ?>

	<?php foreach ( $posts as $post ) {		
		setup_postdata( $post );
		tribe_get_template_part( 'pro/widgets/modules/single-event', null, $instance ) ?>
	<?php } ?> 
		
	<?php endif; ?>	

	<?php else: ?>

	<!-- 	 No Events were found. -->		

	<p style="color:#fff;"><?php printf( __( 'There are no upcoming %s at this time.', 'tribe-events-calendar' ), strtolower( tribe_get_event_label_plural() ) ); ?></p>

	<?php endif;?>

<?php // Cleanup. Do not remove this.

wp_reset_postdata();
