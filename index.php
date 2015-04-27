<?php get_header(); ?>
	<main role="main">
        <section class="hero centralt">
            <?php include("parts/slideshow.php"); ?>
        </section>
        <section class="themes">
          <?php include("parts/themes.php"); ?>
        </section>
        <section class="current-news">
          <?php include("parts/aktuell.php") ?>
        </section>
	</main>
<?php get_footer(); ?>