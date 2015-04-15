<div class="heroslideshow">  <!-- German Slide Show -->
  <div class="slides" style="background:url(<?php $url = content_url(); echo $url; ?>/uploads/2015/01/Hanse-Sea-Background.jpg)center center;">
    <div class="lockup">
      <h2><?php bloginfo('name'); ?></h2>
      <p><?php echo get_bloginfo ( 'description' );  ?></p>
    </div>
  </div>

<?php // the query slideshow test
$args = array( 'post_type' => 'page', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>

  <div class="slides" style="background:url(<?php echo $thumb_url[0]; ?>) ;">
    <div class="lockup">
      <h2><?php the_title(); ?></h2>
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
  <?php endwhile; ?>
 <!-- end of the loop -->
  <!-- pagination here -->
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <div class="slides" style="background:url(<?php $url = content_url(); echo $url; ?>/uploads/2015/01/Hanse-Sea-Background.jpg) ;">
    <div class="lockup">
      <h2><?php bloginfo('name'); ?></h2>
      <p><?php echo get_bloginfo ( 'description' );  ?></p>
    </div>
  </div>
<?php endif; ?>
</div>