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
		<div class="l-soleil-wrap left">
			<img class="l-soleil" src="https://solarsystem.nasa.gov/system/basic_html_elements/11561_Sun.png" />
		</div>
	</header>
	<div class="l-page-content-wrap">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<article><?php the_content(); ?></article>
	</div>
</div>
<footer class="l-page-footer">
	<nav class="l-page-more left">
		<h2>pour aller plus loin…</h2>
		<ul>
			<li>page en lien 1</li>
			<li>page en lien 2</li>
		</ul>
	</nav>
	<div class="l-danseuse-wrap right">
		<img class="l-danseuse" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Daffy_Duck.svg/1200px-Daffy_Duck.svg.png" />
	</div>
</footer>