<div class="l-main-chimney">
	<?php if ( is_page() ) : ?>
		<header class="l-page-header">
			
			<?php $soleil = get_field('soleil'); ?>
			
			<?php if( $soleil ): ?>
				<div class="l-soleil-wrap <?php echo $soleil['position']; ?>">
					<img class="l-soleil" src="<?php echo $soleil['image']; ?>" />
				</div>
			<?php endif; ?>
			
		</header>
	<?php endif; ?>
	
	<?php if ( is_page() ) : ?>
		<section class="l-page-content-wrap page-content-wrap">
	<?php else : ?>
		<section class="l-page-content-wrap">
	<?php endif; ?>
		<article><?php the_content(); ?></article>