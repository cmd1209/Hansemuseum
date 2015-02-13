<?php /* Template Name: Start */ ?>
<?php get_header(); ?>
	<main role="main">
<section class="hero">
          <div class="heroslideshow">
            <?php $id = get_post(30); ?>
            <?php $title = $id->post_title; ?>
            <?php $excerpt = $id->post_excerpt; ?>
            <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id('30') ); ?>
            <div class="slides" style="background:url(<?php echo $featuredImage; ?>)center center;">
              <div class="lockup">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $excerpt; ?></p>
          </div>
            </div>

            <?php $id = get_post(62); ?>
            <?php $title = $id->post_title; ?>
            <?php $excerpt = $id->post_excerpt; ?>
            <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id('62') ); ?>
            <div class="slides" style="background:url(<?php echo $featuredImage; ?>)center center;">
              <div class="lockup">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $excerpt; ?></p>
          </div>
            </div>


            <?php $id = get_post(7); ?>
            <?php $title = $id->post_title; ?>
            <?php $excerpt = $id->post_excerpt; ?>
            <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id('7') ); ?>
            <div class="slides" style="background:url(<?php echo $featuredImage; ?>)center center;">
              <div class="lockup">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $excerpt; ?></p>
          </div>
            </div>
          </div>
        </section>
        <section class="mainpage">
        <div class="wrap">

<!--             <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?> -->
        </div>
        </section>
	</main>
<?php get_footer(); ?>