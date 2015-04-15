<?php get_header(); ?>
<main role="main">
<section class="main-content">
        <div class="wrap">
                    <div class="post-utilities">
            <div class="span-columns-6">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
            </div>
            <div class="span-columns-6">
                <div class="search-wrapper-fix">
                    <?php include("searchform.php"); ?>
                </div>
            </div>

            </div>



                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                        <h3><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>
                    </header>

                                    <?php get_template_part('loop'); ?>


</article>


</div>

<section class="current-news">
  <?php include("parts/aktuell.php") ?>
</section>

</main>
<?php get_footer(); ?>
