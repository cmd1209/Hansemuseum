<?php get_header(); ?>
<main role="main">
	<section class="main-content">
		<div class="wrap">


				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php $cat = get_the_category(); $cat = $cat[0]; ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<h3><?php the_title(); ?></h3>
<!-- 							<div class="postinfo">
								<a href="<?php echo get_category_link($cat);?>" class="icon" title="<?php echo $cat->cat_name; ?>"> <?php include("parts/icon-selector.php") ?></a>
								<p><?php echo $cat->cat_name; ?> | <span class="date"><?php the_date(); ?></span></p>
							</div> -->
						</header>

						<?php the_content(); ?>
						<br class="clear">
						<?php edit_post_link(); ?>
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
