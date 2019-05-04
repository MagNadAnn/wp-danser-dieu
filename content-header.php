<div class="l-main-chimney">
	<?php if ( is_page() ) : ?>
		<header class="l-page-header">
			<div class="l-soleil-wrap right">
				<div class="l-soleil theme-image soleil-04"></div>
			</div>
		</header>
	<?php endif; ?>
	
	<?php if ( is_page() ) : ?>
		<section class="l-page-content-wrap page-content-wrap">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
	<?php else : ?>
		<section class="l-page-content-wrap">
	<?php endif; ?>
		<article><?php the_content(); ?></article>