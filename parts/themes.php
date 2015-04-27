<header class="section-header">
<?php $currentlang = get_bloginfo('language'); if($currentlang=="en-GB"): ?>
  <h2>Themes</h2>
<?php elseif($currentlang=="de-DE"): ?>
  <h2>Themen</h2>
<?php else: ?>
  <p>some other language is selected</p>
<?php endif; ?>
</header>
<div class="wrap">
<div class="flex-boxes">
<?php
// the query
$args = array( 'post_type' => 'page', 'posts_per_page' => '7', 'orderby' => 'menu_order', 'order' => 'ASC', 'post__in' => array(65,194,95,197,191,102,297));
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>


    <a href="<?php the_permalink(); ?>" class="themebox" style="background: url(<?php echo $thumb_url[0]; ?>)center center;">
    <div class="flex-title">
    <h5><?php the_title(); ?></h5>
<!--     <p><?php the_excerpt(); ?></p> -->
    </div>
  </a>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
</div>