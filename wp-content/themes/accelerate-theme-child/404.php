<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->
<section class="error-container">
	<div class="error-page">
		<figure class="error-img">
			<img src="wp-content/themes/accelerate-theme/img/error-img.png" alt="map-icon" />
		</figure>

		<div class="error-content">
			<div class="error-header">
				<h2>Whoops, Took A Wrong Turn...</h2>
			</div>

			<div class="error-message">
				<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
		
				<p>Feel free to take a look around our blog or some of our featured work.</p>
			</div>
		</div>

	</div>
</section>


<?php get_footer(); ?>
