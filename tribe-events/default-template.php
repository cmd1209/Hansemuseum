<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header(); ?>


<main role="main">
  <?php if (has_post_thumbnail() ): ?>
    <section class="hero small">
      <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <div class="slides" style="background:url(<?php echo $featuredImage; ?>)center center;">
      </div>
    </section>
  <?php else: ?>
<section class="hero small">
     <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id(297) ); ?>
      <div class="slides" style="background:url(<?php echo $featuredImage; ?>)center center;">
      </div>
</section>
 <?php endif ?>
<section class="main-content">
  <header class="section-header">

  <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-GB"): ?>
  <h2>Events</h2>
<?php elseif($currentlang=="de-DE"): ?>
  <h2>Programm</h2>
<?php else: ?>
  <p>some other language is selected</p>
<?php endif; ?>

  </header>
    <div class="wrap">
        <?php tribe_events_before_html(); ?>
        <?php tribe_get_view(); ?>
        <?php tribe_events_after_html(); ?>
    <br class="clear">
  </div>
</section>


<!-- <section class="current-news">
  <?php include("../parts/aktuell.php") ?>
</section> -->
</main>
<?php get_footer(); ?>