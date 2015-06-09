<?php /* Template Name: Jobs */  get_header(); ?>
<main role="main">
<section class="main-content">
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
          <?php the_content(); ?>
      </div>
      <div class="joblistings">

        <?php // the query slideshow test
$args = array( 'post_type' => 'Job', 'orderby' => 'menu_order', 'post__in' => array());
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="job">
      <h4> <?php the_title(); ?> </h4>
      <p> <?php the_content(); ?></p>
      </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>

<?php endif; ?>


      </div>
      </div>
  </div>
</section>


<section class="current-news">
  <?php include("parts/aktuell.php") ?>
</section>
</main>
<?php get_footer(); ?>


