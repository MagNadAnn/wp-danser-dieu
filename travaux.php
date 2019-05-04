<?php
/*
Template Name: Page en travaux
*/
?>

<?php get_header(); ?>

<main class="l-site-content site-content">
	<section class="l-slide l-slide_with-menu">
        <div class="l-slide-content slide-content">
            <div class="l-soleil-wrap right l-soleil_cover">
                <div class="l-soleil theme-image soleil-04"></div>
            </div>
            <?php
                // Start the loop.
                while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php
                // End the loop.
                endwhile;
            ?>
            <?php wp_reset_postdata(); ?>

            <div class="l-danseuse-wrap left l-danseuse_cover">
                <div class="l-danseuse theme-image danseuse-01"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
