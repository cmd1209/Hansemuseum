<?php get_header(); ?>
<main role="main">
  <?php if (has_post_thumbnail() ): ?>
    <section class="hero small">
      <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <div class="slides" style="background:url(<?php echo $featuredImage; ?>)center center;">

      </div>
    </section>
  <?php else: ?>
<section>

</section>
 <?php endif ?>
<section class="main-content">
    <div class="wrap">
      <div class="content">
          <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
        <header class="pageheader">
            <h1><?php the_title(); ?></h1>
        </header>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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

  </div>
</section>
<section>
  <?php include("parts/aktuell.php") ?>
</section>




</main>

<?php get_footer(); ?>


