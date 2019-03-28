<?php
/*
Template Name: Agenda
*/
?>

<?php get_header(); ?>

<main class="l-site-content site-content page">

    <?php if ( have_posts() ) : ?>

    <?php

    // Start the loop.
    while ( have_posts() ) : the_post(); ?>

    <div class="l-main-chimney">
        <header class="l-page-header">
            <div class="l-soleil-wrap right">
                <div class="l-soleil theme-image soleil-04"></div>
            </div>
        </header>
        <section class="l-page-content-wrap page-content-wrap">
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            <article><?php the_content(); ?></article>

            <?php if( have_rows('events') ): ?>
                <ul class="agenda__legende">
                    <li><h2 class="agenda__legende__title">Légende :</h2></li>
                    <li><span class="agenda__categorie agenda__categorie_atelier"></span> Atelier</li>
                    <li><span class="agenda__categorie agenda__categorie_temoignage"></span> Témoignage-conférence</li>
                    <li><span class="agenda__categorie agenda__categorie_danse"></span> Danse</li>
                    <li><span class="agenda__categorie agenda__categorie_autre"></span> Autre</li>
                </ul>

                <ul class="agenda">
                <?php while ( have_rows('events') ) : the_row(); ?>

                    <li>
                        <?php $hasLink = get_sub_field('lien_event'); ?>
                        <?php $isPastClass = (get_sub_field('statut_event')) ? "agenda__item_past" : ""; ?>
                        <?php $catsEvent = get_sub_field_object('categories_event')['value'] ?>

                        <?php if($hasLink) : ?>
                            <a href="<?php the_sub_field('lien_event'); ?>" class="agenda__item_wrap agenda__item_cliquable <?php echo($isPastClass)?>">
                        <?php else : ?>
                            <span class="agenda__item_wrap <?php echo($isPastClass)?>">
                        <?php endif; ?>

                            <div class="agenda__item">
                                <ul class="agenda__picto">
                                    <?php if( $catsEvent ): ?>
                                        <?php foreach( $catsEvent as $catEvent ): ?>
                                            <li class="agenda__categorie agenda__categorie_<?php echo $catEvent; ?>"></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>    
                                <ul class="agenda__info">
                                    <li class="agenda__date"><?php the_sub_field('date_event'); ?></li>
                                    <li class="agenda__lieu"><?php the_sub_field('lieu_event'); ?></li>
                                    <li class="agenda__titre"><?php the_sub_field('titre_event'); ?></li>
                                </ul>
                                <span class="agenda__fleche">
                                    <?php if($hasLink) : ?>
                                    >
                                    <?php endif; ?>
                                </span>
                            </div>

                        <?php if($hasLink) : echo('</a>') ?>
                        <?php else : echo('</span>') ?>
                        <?php endif; ?>

                    </li>

                <?php endwhile; ?>
                </ul>

            <?php else : ?>
                <p>Aucun évènement trouvé</p>
            <?php endif; ?>

        </section>
    </div>
    <footer class="l-page-footer">
        <nav class="l-page-more right">
            <h2 class="page-more__title">pour aller plus loin…</h2>
            <ul class="page-more">
                <li class="page-more__item"><a href="#">page en lien 1</a></li>
                <li class="page-more__item"><a href="#">page en lien 2</a></li>
            </ul>
        </nav>
        <div class="l-danseuse-wrap left">
            <div class="l-danseuse theme-image danseuse-01"></div>
        </div>
    </footer>

    <?php
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
