<?php /* Template Name: Teil1 */  get_header(); ?>
<main role="main">
<section class="ausstellung">
  <header class="section-header">
    <h2> <?php the_title(); ?></h2>
    <div class="wrap no-padding">
<ul class="content-nav">
  <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
  <?php
  global $id;
  wp_list_pages("title_li=&child_of=$id&show_date=modified&date_format=$date_format&depth=1"); ?>
</ul>
    </div>
  </header>
    <div class="wrap">
      <div class="content">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--           <h4 style="margin-bottom: 1em;">
            <?php the_excerpt(); ?>
          </h4> -->

            <div class="owl-carousel">
              <?php include("parts/rooms.php"); ?>
            </div>


            <!-- Im going to hide the content at this time -->
            <!-- <?php the_content(); ?> -->

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


<section class="current-news">
  <?php include("parts/aktuell.php") ?>
</section>
</main>
<?php get_footer(); ?>
