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
 */
?>

<?php get_header(); ?>

<main class="l-site-content site-content article">

    <div class="l-main-chimney">

        <?php if ( have_posts() ) : ?>

        <?php

        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

            <section class="l-page-content-wrap">
                <h1><?php echo($post->post_title); ?></h1>
                <article class="attachment-container">
                    <?php if (wp_attachment_is_image( $post->ID )) : ?>
                        <figure>
                            <a href="<?php echo($post->guid); ?>">
                                <img src="<?php echo($post->guid); ?>" />
                            </a>
                            <figcaption><?php echo($post->post_excerpt); ?></figcaption>
                        </figure>
                    <?php else : ?> 
                        <a class="button" href="<?php echo($post->guid); ?>">afficher le document</a>
                    <?php endif; ?>
                    <div><p><?php echo($post->post_content); ?><p></div>
                </article>
            </section>

            <?php
            
            // End the loop.
        endwhile;
        ?>

        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>
