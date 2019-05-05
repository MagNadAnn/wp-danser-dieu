    </section>
</div>

<?php if ( is_page() ) : ?>
	<footer class="l-page-footer">

		<?php $danseuse = get_field('danseuse'); ?>	
		<?php $links = get_field('links', false, false); ?>
	
		<?php if( $links ): ?>
		<nav class="l-page-more <?php echo ($danseuse['position'] === 'left') ? 'right' : 'left'; ?>">
			<h2 class="page-more__title">pour aller plus loin…</h2>
			<ul class="page-more">
				<?php foreach( $links as $link ): ?>
				<li class="page-more__item">
					<a href="<?php echo get_the_permalink($link); ?>"><?php echo get_the_title($link); ?></a>
				</li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<?php endif; ?>
			
		<?php if( $danseuse ): ?>
			<div class="l-danseuse-wrap <?php echo $danseuse['position']; ?>">
				<img class="l-danseuse" src="<?php echo $danseuse['image']; ?>" />
			</div>
		<?php endif; ?>

	</footer>
<?php endif; ?>