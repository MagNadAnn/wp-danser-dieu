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
				<div class="l-danseuse-wrap left bottom l-danseuse_cover">
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

				<?php while ( have_posts() ) : the_post(); ?>

				<?php $titre_tuiles = get_field('titre_tuiles'); ?>
				<?php $tuiles = get_field('tuiles'); ?>

				<div class="page-content-wrap">
					<article><?php the_content(); ?></article>
				</div>

				<?php endwhile; ?>
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

					<?php $contactQuery = new WP_Query( array( 'pagename' => 'contact' ) ); ?>

					<?php while ( $contactQuery -> have_posts() ) : $contactQuery -> the_post(); ?>

						<h1><?php the_title(); ?></h1>
						<article><?php the_content(); ?></article>

					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

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

					<?php $agendaQuery = new WP_Query( array( 'pagename' => 'agenda' ) ); ?>

					<?php while ( $agendaQuery -> have_posts() ) : $agendaQuery -> the_post(); ?>

						<h1><?php the_title(); ?></h1>

						<?php if( have_rows('events') ): ?>

						<?php $events = get_field('events'); ?>

						
						<?php function filterHomeEvents($var) {
							return $var['home'];
						}; ?>
						<?php $homeEvents = array_filter ( $events, "filterHomeEvents"); ?>
            
							<?php get_template_part( 'content-legende-agenda' ); ?> 

							<ul class="agenda">
								<?php foreach( $homeEvents as $event): ?>

								<li>
									<?php $hasLink = $event['lien_event']; ?>
									<?php $isPastClass = ($event['statut_event']) ? "agenda__item_past" : ""; ?>
									<?php $catsEvent = $event['categories_event'] ?>

									<?php if($hasLink) : ?>
										<a href="<?php echo( $event['lien_event'] ); ?>" class="agenda__item_wrap agenda__item_cliquable <?php echo($isPastClass)?>">
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
												<li class="agenda__date"><?php echo $event['date_event']; ?></li>
												<li class="agenda__lieu"><?php echo $event['lieu_event']; ?></li>
												<li class="agenda__titre"><?php echo $event['titre_event']; ?></li>
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

								<?php endforeach; ?>
							</ul>

						<?php else : ?>
							<p>Aucun évènement trouvé</p>
						<?php endif; ?>	

						<p class="button-wrap button-wrap_center">
							<a class="button" href="<?php the_permalink(); ?>">Voir toutes les dates</a> 
						</p>

					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>
					
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
