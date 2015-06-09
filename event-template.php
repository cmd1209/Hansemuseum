<?php /* Template Name: Event-Template */ get_header(); ?>
<main role="main">
  <?php if (has_post_thumbnail() ): ?>
 <?php endif ?>
<section class="themes">
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
            <?php the_content(); ?>

            <br class="clear">
  </div>
</section>
<section class="current-news">
  <?php include("parts/aktuell.php") ?>
</section>
</main>
<?php get_footer(); ?>