<?php
/*
Template Name: Agenda
*/
?>

<?php get_header(); ?>

<main class="l-site-content site-content page">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content-header' ); ?>

        <?php if( have_rows('events') ): ?>
            
            <?php get_template_part( 'content-legende-agenda' ); ?> 

            <ul class="agenda">
                <?php while ( have_rows('events') ) : the_row(); ?>

                <?php get_template_part( 'content-ligne-agenda' ); ?> 

                <?php endwhile; ?>
            </ul>

        <?php else : ?>
            <p>Aucun évènement trouvé</p>
        <?php endif; ?>

        <?php get_template_part( 'content-footer' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
