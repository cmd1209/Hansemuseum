<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-content">
<header class="section-header">
    <h2><?php _e(); single_cat_title(); ?></h2>
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
            <div class="stage">

             <?php get_template_part('loop'); ?>
             <?php get_template_part('pagination'); ?>
            </div>
        </div>
        </section>
    </main>


<?php get_footer(); ?>

