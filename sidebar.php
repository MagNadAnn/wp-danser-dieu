<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php
$english = get_page_by_title( 'English' );
$espanol = get_page_by_title( 'Espanol' );
$ressources = get_page_by_title( 'Ressources' );
$hasIcon = $english || $ressources || $espanol;
?>

<ul class="l-sidebar__widgets">
	<?php dynamic_sidebar(); ?>

	<?php if ($hasIcon) : ?>
		<li>
			<ul class="menu-icon menu">
				<?php if ($ressources && get_post_status($ressources->ID) === "publish") : ?>
					<li><a class="icon icon_ressources" href="<?php echo(get_permalink($ressources->ID)); ?>">Ressources</a></li>
				<?php endif; ?>
				
				<?php if ($english && get_post_status($english->ID) === "publish") : ?>
					<li><a class="icon icon_english" href="<?php echo(get_permalink($english->ID)); ?>">English</a></li>
				<?php endif; ?>

				<?php if ($espanol && get_post_status($espanol->ID) === "publish") : ?>
					<li><a class="icon icon_espanol" href="<?php echo(get_permalink($espanol->ID)); ?>">Español</a></li>
				<?php endif; ?>
			</ul>
		</li>
	<?php endif; ?>
</ul>
