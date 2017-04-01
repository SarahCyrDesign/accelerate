<?php
/**
 * Template Name: Custom About Page
 * The template for displaying about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">

		<?php while ( have_posts() ) : the_post(); 
				$services_1_title = get_field('services_1_title');

				$services_2_title = get_field('services_2_title');

				$services_3_title = get_field('services_3_title');

				$services_4_title = get_field('services_4_title');

				$services_1_description = get_field('services_1_description');

				$services_2_description = get_field('services_2_description');

				$services_3_description = get_field('services_3_description');

				$services_4_description = get_field('services_4_description');

				$service_image_1 = get_field('service_image_1');

				$service_image_2 = get_field('service_image_2');

				$service_image_3 = get_field('service_image_3');

				$service_image_4 = get_field('service_image_4');

				$size = "full"; 
				$contact_us = get_field('contact_us');?>


			<div class='homepage-hero'>
			<?php the_content(); ?>

			</div>
			</div><!-- .container -->
			</section><!-- .home-page -->

			

			<h2 class="about-title"><?php the_title(); ?></h2>
			<p class="about-p">We take pride in our clients and the content we create for them.<br>
			Here's a brief overview of our offered services.</p>


			

				<div class="services-image-1">
		<?php if($service_image_1) {

			echo wp_get_attachment_image ($service_image_1, $size);

		} ?>
		</div>

		<div class="our-services-1">

			<h2><?php echo $services_1_title; ?></h2>
			<p><?php echo $services_1_description;?></p>


		</div>


      			





		<div class="our-services-2">

			<h2><?php echo $services_2_title; ?></h2>
			<p><?php echo $services_2_description;?></p>

			</div>

			<div class="services-image-2">

		<?php if($service_image_2) {

			echo wp_get_attachment_image ($service_image_2, $size);

		} ?>
		</div>





			<div class="services-image-3">

		<?php if($service_image_3) {

			echo wp_get_attachment_image ($service_image_3, $size);

		} ?>
			</div>

			<div class="our-services-3">

			<h2><?php echo $services_3_title; ?></h2>
			<p><?php echo $services_3_description;?></p>
			</div>


			<div class="our-services-4">

			<h2><?php echo $services_4_title; ?></h2>
			<p><?php echo $services_4_description;?></p>
			</div>

			<div class="services-image-4">

		<?php if($service_image_4) {

			echo wp_get_attachment_image ($service_image_4, $size);

		} ?>
		</div>
			

		<h2 class="about-prompt">Interested in working with us?</h2> <div class="button-contact"><a class="button" href="<?php echo $contact_us;?>">Contact Us</a></div>
			


			
				
				




			
		<?php endwhile; // end of the loop. ?>
	



<?php get_footer(); ?>