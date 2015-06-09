<?php get_header(); ?>
<?php get_header(); ?>
<main role="main">
  <?php if (has_post_thumbnail() ): ?>
    <section class="hero small">
      <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <div class="slides" style="background:url(<?php echo $featuredImage; ?>)center center;">
      </div>
    </section>
  <?php else: ?>
 <?php endif ?>
<section class="rooms">
<header class="section-header">
        <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-GB"): ?>
            <h2>Events</h2>
        <?php elseif($currentlang=="de-DE"): ?>
            <h2>Termine</h2>
        <?php else: ?>
            <h2>Some Other</h2>
        <?php endif; ?>
</header>
    <div class="wrap">
      <div class="content span-columns-9">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h3><?php the_title(); ?></h3>

            <?php eo_get_template_part('event-meta','event-single'); ?>
            <?php the_content(); ?>






           <br class="clear">
          </article>
        <?php endwhile; ?>
      <?php else: ?>
        <article>
          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        </article>
      <?php endif; ?>
    </div>
  <div class="content span-columns-3">
    <?php
     $events = eo_get_events(array(
          'numberposts'=>5,
          'event_start_after'=>'today',
          'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
     ));

     if($events):
          echo '<ul id="menu-rooms">';
          foreach ($events as $event):
               //Check if all day, set format accordingly
               $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
               printf(
                    '<li><a href="%s"> %s </a> </br> %s </li>',
                    get_permalink($event->ID),
                    get_the_title($event->ID),
                    eo_get_the_start($format, $event->ID,null,$event->occurrence_id)
               );
          endforeach;
          echo '</ul>';
     endif;
 ?>
  </div>
  </div>
</section>


<section class="current-news">
  <?php include("parts/aktuell.php") ?>
</section>
</main>
<?php get_footer(); ?>