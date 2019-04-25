<?php
/*
Template Name: Page d'accueil
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<link  rel="icon" href="http://www.danserdieu.com/wp-content/uploads/2019/03/favicon.ico" type="images/x-icon">
</head>

<body class="global-settings fond">

    <div class="l-site-wrap">
        <nav class="l-site-menu site-menu">
			<header><a class="site-logo" href="<?php bloginfo( 'url' ); ?>" title="Retourner en page d'accueil">Danser Dieu</a></header>
			<?php get_sidebar(); ?>
        </nav>

<main class="l-site-content site-content home">
	<section class="l-slide">
		<div class="l-cover cover">
			<div class="l-slide-content slide-content">
				<div class="l-soleil-wrap right l-soleil_cover">
					<div class="l-soleil theme-image soleil-04"></div>
				</div>
				<h1 class="site-title">Danser Dieu</h1>
				<div class="l-danseuse-wrap left l-danseuse_cover">
					<div class="l-danseuse theme-image danseuse-01"></div>
				</div>
			</div>
		</div>
	</section>
	<div class="home-peau">
		<section class="l-home-section l-home-section_a-propos">
			<div class="l-soleil-wrap">
				<div class="l-soleil theme-image soleil-02"></div>
			</div>
			<div class="l-danseuse-wrap right">
				<div class="l-danseuse theme-image danseuse-01"></div>
			</div>
			<div class="l-section-home__text section-home__text left">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); ?>

				<?php $titre_tuiles = get_field('titre_tuiles'); ?>
				<?php $tuiles = get_field('tuiles'); ?>

				<div class="page-content-wrap">
					<article><?php the_content(); ?></article>
				</div>

				<?php
				// End the loop.
				endwhile;
				?>
			</div>
		</section>
		<section class="l-home-section l-home-section_contact home-section_contact right">
			<div class="l-soleil-wrap right">
				<div class="l-soleil theme-image soleil-03"></div>
			</div>
			<div class="l-danseuse-wrap center">
				<div class="l-danseuse theme-image danseuse-01"></div>
			</div>
			<div class="l-section-home__text section-home__text">
				<div class="page-content-wrap">
					<h1>Contact</h1>
					<article>
						<p>Phrase d'introduction au formulaire de contact.</p>
					</article>
					<div class="l-form-wrap">
						<p class="legende">Contenu de votre message</p>
						<p class="champ">
							<textarea id="story" name="story" rows="10">Saisissez votre texte ici...</textarea>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="l-home-section l-home-section_agenda">
			<div class="l-soleil-wrap">
				<div class="l-soleil theme-image soleil-01"></div>
			</div>
			<div class="l-danseuse-wrap right">
				<div class="l-danseuse theme-image danseuse-01"></div>
			</div>
			<div class="l-section-home__text section-home__text">
				<div class="page-content-wrap">
					<h1>Agenda</h1>
					<article>
						<p>Phrase d'introduction à l'agenda</p>
					</article>
					<ul class="agenda">
						<li>
							<span class="agenda__item_wrap">
								<ul class="agenda__item">
									<li class="agenda__date">date en texte libre</li>
									<li class="agenda__lieu">lieu en texte libre</li>
									<li class="agenda__titre">Titre de l'évèvement avec un lien</li>
								</ul>
							</span>
						</li>
						<li>
							<a href="#" class="agenda__item_wrap agenda__item_cliquable">
								<ul class="agenda__item">
								<li class="agenda__date">date en texte libre</li>
									<li class="agenda__lieu">lieu en texte libre</li>
									<li class="agenda__titre">Titre de l'évèvement avec un lien</li>
								</ul>
							</a>
						</li>
						<li>
							<span class="agenda__item_wrap">
								<ul class="agenda__item">
									<li class="agenda__date">date en texte libre</li>
									<li class="agenda__titre">Titre de l'évèvement avec un lien</li>
								</ul>
							</span>
						</li>
						<li>
							<a href="#" class="agenda__item_wrap agenda__item_cliquable">
								<ul class="agenda__item">
								<li class="agenda__date">date en texte libre</li>
									<li class="agenda__lieu">lieu en texte libre</li>
									<li class="agenda__titre">Titre de l'évèvement avec un lien</li>
								</ul>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<?php if( $tuiles ): ?>
		<section class="l-home-section l-home-section_tuiles">

			<?php if( $titre_tuiles ): ?>
				<h1><?php echo($titre_tuiles); ?> </h1>
			<?php endif; ?>

			<ul class="tuiles">
			<?php foreach( $tuiles as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<li>
					<a href="<?php the_permalink(); ?>" class="tuile">
						<span><?php the_title(); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		</section>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
