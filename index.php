<?php
/**
 * @package WordPress
 * @subpackage Danser Dieu
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php the_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
</head>
<body>

<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
</div>

<?php
// End the loop.
endwhile;
?>

</body>