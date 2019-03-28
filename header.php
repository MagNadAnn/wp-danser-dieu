<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php the_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet"> 
	<link rel="icon" href="http://fhedles.fr/wp-content/uploads/favicon-1.ico" type="images/x-icon" />
</head>

<body class="global-settings fond">

    <div class="l-site-wrap">
        <nav class="l-site-menu site-menu">
			<header><a class="site-logo" href="<?php bloginfo( 'url' ); ?>" title="Retourner en page d'accueil">Danser Dieu</a></header>
			<?php get_sidebar(); ?>
        </nav>
