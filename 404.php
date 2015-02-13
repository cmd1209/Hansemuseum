<?php get_header(); ?>

<main role="main">
	<section class="main-content">
		<div class="wrap">
			<div class="content">
<?php $currentlang = get_bloginfo('language'); if($currentlang=="en-GB"): ?>
<article id="post-404">
<h1>The page you are looking for does not exist.</h1>

<?php include("searchform.php"); ?>
</article>
<?php elseif($currentlang=="de-DE"): ?>
<article id="post-404">
<h1>Die Seite wurde leider nicht gefunden.</h1>

<?php include("searchform.php"); ?>
</article>
<?php else: ?>
  <p>some other language is selected</p>
<?php endif; ?>


			</div>

		</div>
	</section>
	<section>
		<?php include("parts/aktuell.php") ?>
	</section>
</main>

<?php get_footer(); ?>







