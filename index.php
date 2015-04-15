<?php get_header(); ?>
	<main role="main">
        <section class="hero centralt">
            <?php include("parts/slideshow.php"); ?>
        </section>
        <section class="themes">
          <?php include("parts/breakup.php"); ?>
        </section>
        <section class="current-news">
          <?php include("parts/aktuell.php") ?>
        </section>
<!--         <section>
            <?php include("parts/owltest.php"); ?>
        </section> -->
	</main>
<?php get_footer(); ?>