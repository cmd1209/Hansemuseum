<div class="latest-event">


<?php $currentlang = get_bloginfo('language'); if($currentlang=="en-GB"): ?>
<h5>Coming Events: <a href="http://www.hansemuseum.eu/events-eng/" class="event-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/calendar.svg" alt=""></a></h5>

<?php elseif($currentlang=="de-DE"): ?>
<h5>dem­nächst bei uns: <a href="http://www.hansemuseum.eu/termine-2/" class="event-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/calendar.svg" alt=""></a></h5>
<?php else: ?>
    <p>some other language is selected</p>
<?php endif; ?>

<ul class="bulletin-board">
<?php
$args = array( 'post_type' => 'event', 'posts_per_page' => 4,'suppress_filters' => false );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

          //Check if all day, set format accordingly
          $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' ');
          printf(
             '<li class="bulletin"><a href="%s"> %s | %s </a></li>',
             get_permalink($event->ID),
             get_the_title($event->ID),
             eo_get_the_start($format, $event->ID,null,$event->occurrence_id)
          );
endwhile;
wp_reset_postdata();?>
</ul>
</div>