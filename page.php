<?php get_header(); ?>
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
    <h2> <?php the_title(); ?></h2>
    <div class="wrap">
<ul class="content-nav">
  <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
  <?php
  global $id;
  wp_list_pages("title_li=&child_of=$id&show_date=modified&date_format=$date_format&depth=1"); ?>
</ul>
    </div>
  </header>
    <div class="wrap">
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
</section>


<section class="current-news">
  <?php include("parts/aktuell.php") ?>
</section>
</main>
<?php get_footer(); ?>