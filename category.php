<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
        <div class="wrap">
            <div class="stage">
			 <h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>
			 <?php get_template_part('loop'); ?>
			 <?php get_template_part('pagination'); ?>
            </div>
            <div class="sidebarwrap">
                <?php get_sidebar(); ?>
            </div>
        </div>
        </section>
    </main>


<?php get_footer(); ?>
