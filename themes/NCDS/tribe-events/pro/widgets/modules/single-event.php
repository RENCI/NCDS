<?php
/**
 * Single Event Template for Widgets
 *
 * This template is used to render single events for both the calendar and advanced
 * list widgets, facilitating a common appearance for each as standard.
 *
 * You can override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/pro/widgets/modules/single-event.php
 *
 * @package TribeEventsCalendarPro
 *
 */


/* Single Event Variables */

$day   = tribe_get_start_date( null, false,'d');
$day2   = tribe_get_start_date( null, false,'l');
$month   = tribe_get_start_date( null, false,'M');
$date   = tribe_get_start_date( null, false,'d/n');
$time  = tribe_get_start_date( null, false, 'h:i A' );

if(has_post_thumbnail()) {
  $event_image = get_the_post_thumbnail_url();
}else{
  $event_image = get_template_directory_uri().'/images/default.jpg';
}

if ( is_front_page() ) :
?>

  <div class="box swiper-slide slick-slide">
    <div class="single-box bg-overlay" style="background-image:url('<?php echo $event_image; ?>');">
      <a href="<?php echo get_permalink(); ?>">
        <span class="main-wrap">
          <span class="date-wrap">
            <span class="day"><?php echo $day; ?></span>
            <span class="month"><?php echo $month; ?></span>
          </span>
          <span class="title"><?php the_title(); ?></span>
        </span>
        <span class="hover-wrap">
          <span class="title"><?php the_title(); ?></span>

          <span class="bottom-wrap">
            <span class="date-wrap">
              <span class="day"><?php echo $day; ?></span>
              <span class="month"><?php echo $month; ?></span>
            </span>
            <span class="time"><time><?php echo $time; ?></time> <span class="day"><?php echo $day2; ?></span></span>
          </span>
        </span>
      </a>
    </div>
  </div>


<?php else: ?>

<?php endif; ?>
