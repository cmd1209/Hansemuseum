<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post title -->
		<h4>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h4>
		<!-- /post title -->

		<!-- post details -->
		<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
