<?php
/**
 * The template for displaying the about page
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>

 <!-- Hero Section -->
 	<div id="primary" class="about-page hero-content">
 		<div class="header-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build business by making our client visiable and making their customers smile.</h3>
      <?php endwhile; // end of the loop. ?>

    </div><!-- hero-section -->
 	</div><!-- #primary -->

<!--our services heading section -->
<section class="about-services">
    <div class="our-services">
      <div class="services-header">
        <h4>Our services</h4>
        <p>We take pride in our clients and the content we create for them. <br>
          Here’s a brief overview of our offered services.</p>
      </div>

      <ul class="about-page-services">
        <?php query_posts('post_type=services'); ?>

        <?php while ( have_posts() ) : the_post();
            $service_label = get_field('service_label');
            $service_description = get_field('service_description');
            $icon = get_field('service_icon');
            $size = "medium";
        ?>

          <li class="individual-service">
            <div class="service-container">

              <div class="service-icon">
                <?php if($icon) {
                  echo wp_get_attachment_image($icon, $size);
                } ?>
              </div>

              <div class="service-content">
                <h2><?php echo $service_label; ?></h2>
                <p><?php echo $service_description; ?></p>
              </div>

            </div>
          </li>

        <?php endwhile; // end of the loop. ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div><!-- Our Services Section -->
</section>

<!--Contact Section -->
<section class="about-contact">
  <div class="about-contact-container">
    <h3>Interested in working with us?</h3>
    <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
  </div>
</section>
<!-- Footer Section -->
 <?php get_footer(); ?>
