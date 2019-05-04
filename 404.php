<?php get_header(); ?>

<main class="l-site-content site-content">
	<section class="l-slide l-slide_with-menu">
        <div class="l-slide-content slide-content">
            <div class="l-soleil-wrap right l-soleil_cover">
                <div class="l-soleil theme-image soleil-04"></div>
            </div>
        
            <?php $errorQuery = new WP_Query( array( 'pagename' => 'error' ) ); ?>

            <?php while ( $errorQuery -> have_posts() ) : $errorQuery -> the_post(); ?>

                <article><?php the_content(); ?></article>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <div class="l-danseuse-wrap left l-danseuse_cover">
                <div class="l-danseuse theme-image danseuse-01"></div>
            </div>
		</div>
    </section>
</main>

<?php get_footer(); ?>
