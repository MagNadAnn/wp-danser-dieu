<li>
	<?php $hasLink = get_sub_field('lien_event'); ?>
	<?php $isPastClass = (get_sub_field('statut_event')) ? "agenda__item_past" : ""; ?>
	<?php $catsEvent = get_sub_field_object('categories_event')['value'] ?>

	<?php if($hasLink) : ?>
		<a href="<?php the_sub_field('lien_event'); ?>" class="agenda__item_wrap agenda__item_cliquable <?php echo($isPastClass)?>">
	<?php else : ?>
		<span class="agenda__item_wrap <?php echo($isPastClass)?>">
	<?php endif; ?>

		<div class="agenda__item">
			<ul class="agenda__picto">
				<?php if( $catsEvent ): ?>
					<?php foreach( $catsEvent as $catEvent ): ?>
						<li class="agenda__categorie agenda__categorie_<?php echo $catEvent; ?>"></li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>    
			<ul class="agenda__info">
				<li class="agenda__date"><?php the_sub_field('date_event'); ?></li>
				<li class="agenda__lieu"><?php the_sub_field('lieu_event'); ?></li>
				<li class="agenda__titre"><?php the_sub_field('titre_event'); ?></li>
			</ul>
			<span class="agenda__fleche">
				<?php if($hasLink) : ?>
				>
				<?php endif; ?>
			</span>
		</div>

	<?php if($hasLink) : echo('</a>') ?>
	<?php else : echo('</span>') ?>
	<?php endif; ?>

</li>