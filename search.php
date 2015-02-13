<?php get_header(); ?>
<main role="main">
    <section>

    </section>
    <section class="main-content">
        <div class="wrap">

            <div class="span-columns-8 content">


                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                        <h3><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>
                    </header>

                                    <?php get_template_part('loop'); ?>


</article>


</div>





<div class="span-columns-4">
    <?php get_sidebar(); ?>
</div>

</div>

</main>
<?php get_footer(); ?>
