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
$ressources = get_page_by_title( 'Ressources' );
$hasIcon = $english || $ressources;
?>

<ul class="l-sidebar__widgets">
	<?php dynamic_sidebar(); ?>
	<li>
		<ul class="menu-icon menu">
			<li><a class="icon icon_ressources" href="<?php echo(get_permalink($english->ID)); ?>">Ressources</a></li>
			<li><a class="icon icon_english" href="<?php echo(get_permalink($english->ID)); ?>">English</a></li>
		</ul>
	</li>
</ul>
