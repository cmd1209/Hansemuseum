<header class="section-header">
<?php $currentlang = get_bloginfo('language'); if($currentlang=="en-GB"): ?>
  <h2>Current News</h2>
<?php elseif($currentlang=="de-DE"): ?>
  <h2>Aktuelle Nachrichten</h2>
<?php else: ?>
  <p>some other language is selected</p>
<?php endif; ?>
</header>


<div class="wrap">


<?php // the query
$args = array('post_type' => 'post');
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="news">
<?php $cat = get_the_category(); $cat = $cat[0]; ?>
<a href="<?php echo get_category_link($cat);?>" class="cat-icon" title="<?php echo $cat->cat_name; ?>"> <?php include("icon-selector.php") ?> </a>
<h5><a href=" <?php the_permalink(); ?>  "><?php the_title(); ?></a></h5>
<p><?php the_excerpt(); ?></p>
<!-- <a href="<?php echo get_category_link($cat);?>"> <?php echo $cat->cat_name; ?></a> -->
</div>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>