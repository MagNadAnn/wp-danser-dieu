    </section>
</div>

<?php if ( is_page() ) : ?>
	<footer class="l-page-footer">

		<?php $links = get_field('links', false, false); ?>
	
		<?php if( $links ): ?>
		<nav class="l-page-more right">
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
		<div class="l-danseuse-wrap left">
			<div class="l-danseuse theme-image danseuse-01"></div>
		</div>
	</footer>
<?php endif; ?>