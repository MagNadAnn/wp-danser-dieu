<?php
/*
Template Name: Page en travaux
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet"> 
	<link rel="icon" href="http://fhedles.fr/wp-content/uploads/favicon-1.ico" type="images/x-icon" />
</head>

<body class="global-settings fond">

    <div class="l-cover cover">
        <div class="l-slide-content slide-content">
            <div class="l-soleil-wrap right l-soleil_cover">
                <div class="l-soleil theme-image soleil-04"></div>
            </div>
            <h1 class="site-title">Danser Dieu</h1>
            <?php
                // Start the loop.
                while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php
                // End the loop.
                endwhile;
            ?>
            <div class="l-danseuse-wrap left l-danseuse_cover">
                <div class="l-danseuse theme-image danseuse-01"></div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
