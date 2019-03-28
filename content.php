<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

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