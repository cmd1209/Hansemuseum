<!-- sidebar -->
<aside class="sidebar" role="complementary">
<?php include("searchform.php"); ?>
<?php $currentlang = get_bloginfo('language'); if($currentlang=="en-GB"): ?>
  <h4>Current News</h4>
<?php elseif($currentlang=="de-DE"): ?>
  <h4>Aktuelle Nachrichten</h4>
<?php else: ?>
  <p>some other language is selected</p>
<?php endif; ?>

<?php // the query
$args = array('post_type' => 'post');
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="sidenews">
<?php $cat = get_the_category(); $cat = $cat[0]; ?>
<a href=" <?php the_permalink(); ?>  "><?php the_title(); ?></a>
<p class="sidebar-text"><?php the_excerpt(); ?></p>
<!-- <a href="<?php echo get_category_link($cat);?>"> <?php echo $cat->cat_name; ?></a> -->
</div>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</aside>
<!-- /sidebar -->
