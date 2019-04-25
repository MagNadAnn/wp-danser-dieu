<div class="l-main-chimney">
	<header class="l-page-header">
		<div class="l-soleil-wrap right">
			<div class="l-soleil theme-image soleil-04"></div>
		</div>
	</header>
	<section class="l-page-content-wrap page-content-wrap">
		<?php if ( is_page() ) : ?>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
		<?php endif; ?>
		<article><?php the_content(); ?></article>