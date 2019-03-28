<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<main class="l-site-content site-content page">

    <?php if ( have_posts() ) : ?>

    <?php

    // Start the loop.
    while ( have_posts() ) : the_post();

        // Include the page content template.
        get_template_part( 'content' );

    // End the loop.
    endwhile;
    ?>

    <?php
    // If no content, include the "No posts found" template.
    else :
    get_template_part( 'content', 'none' );

    endif;
    ?>

</main>

<?php get_footer(); ?>
