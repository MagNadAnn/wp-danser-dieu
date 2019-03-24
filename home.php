<?php
/*
Template Name: Page d'accueil
*/

get_header(); ?>

<main class="l-site-content home">
	<section class="l-slide">
		<div class="l-cover">
			<div class="l-slide-content">
				<div class="l-soleil-wrap right">
					<img class="l-soleil" src="https://solarsystem.nasa.gov/system/basic_html_elements/11561_Sun.png" />
				</div>
				<h1>Danser Dieu</h1>
				<div class="l-danseuse-wrap left">
					<img class="l-danseuse" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Daffy_Duck.svg/1200px-Daffy_Duck.svg.png" />
				</div>
			</div>
		</div>
	</section>
	<section class="l-home-section l-home-section_a-propos">
		<div class="l-soleil-wrap">
			<img class="l-soleil" src="https://solarsystem.nasa.gov/system/basic_html_elements/11561_Sun.png" />
		</div>
		<div class="l-danseuse-wrap">
			<img class="l-danseuse" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Daffy_Duck.svg/1200px-Daffy_Duck.svg.png" />
		</div>
		<div class="l-section-home__text">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

			<div class="container">
				<h1><?php the_title(); ?></h1>
				<article><?php the_content(); ?></article>
			</div>

			<?php
			// End the loop.
			endwhile;
			?>
		</div>
	</section>
	<section class="l-home-section l-home-section_contact">
		<div class="l-soleil-wrap">
			<img class="l-soleil" src="https://solarsystem.nasa.gov/system/basic_html_elements/11561_Sun.png" />
		</div>
		<div class="l-danseuse-wrap">
			<img class="l-danseuse" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Daffy_Duck.svg/1200px-Daffy_Duck.svg.png" />
		</div>
		<div class="l-section-home__text">
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
	</section>
	<section class="l-home-section l-home-section_agenda">
		<div class="l-soleil-wrap">
			<img class="l-soleil" src="https://solarsystem.nasa.gov/system/basic_html_elements/11561_Sun.png" />
		</div>
		<div class="l-danseuse-wrap">
			<img class="l-danseuse" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Daffy_Duck.svg/1200px-Daffy_Duck.svg.png" />
		</div>
		<div class="l-section-home__text">
			<h1>Agenda</h1>
			<article>
				<p>Phrase d'introduction à l'agenda</p>
			</article>
			<ul>
				<li>
					<ul>
						<li>date en texte libre</li>
						<li>lieu en texte libre</li>
						<li><a href="#">Titre de l'évèvement avec un lien</a></li>
					</ul>
				</li>
				<li>
					<ul>
						<li>date en texte libre</li>
						<li>lieu en texte libre</li>
						<li><a href="#">Titre de l'évèvement sans un lien</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
</main>

<?php get_footer(); ?>
