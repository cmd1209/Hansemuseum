<?php // the query slideshow test
$args = array( 'post_type' => 'rooms', 'orderby' => 'menu_order', 'post__in' => array());
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
<div class="room">


  <div class="rundgang" style="background:url(<?php echo $thumb_url[0]; ?>) ;">
    <h3 class="adjective"><?php the_field('room-adjective'); ?></h3>
  </div>
  <div class="rundgang-caption">
      <h2><?php the_title(); ?></h2>
      <h5> <?php the_excerpt(); ?> </h5>
  </div>


</div>
  <?php endwhile; ?>
 <!-- end of the loop -->
  <!-- pagination here -->
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <div class="rundgang" style="background:url(<?php $url = content_url(); echo $url; ?>/uploads/2015/01/Hanse-Sea-Background.jpg) ;">
  <div class="lockup-container">
    <div class="lockup">
      <h2><?php bloginfo('name'); ?></h2>
      <h2 class="textshift"><?php echo get_bloginfo ( 'description' );  ?></h2>
    </div>
  </div>
  </div>
<?php endif; ?>