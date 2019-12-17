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
$size = "full";

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();

				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image1 = get_field('image_1');
				$image2 = get_field('image_2');
				$image3 = get_field('image_3'); ?>

				<article class="cass-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h4><?php echo $services; ?></h4>
						<h4><?php echo $client; ?></h4>

						<?php the_content(); ?>

						<p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site &rsaquo;</a><p>
					</aside>

					<div class="case-study-images">
						<?php if($image1) {
							echo wp_get_attachment_image($image1, $size);
					 	} ?>

						<?php if($image2) {
							echo wp_get_attachment_image($image2, $size);
					 	} ?>

						<?php if($image3) {
							echo wp_get_attachment_image($image3, $size);
						} ?>

					</div>

				</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
