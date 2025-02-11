<?php
/**
 * Template Name: Trademark Enforcement and Litigation Page Template
 * Template Post Type: trademark-service
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _htl
 */

get_header();
?>

	<section id="primary">
		<main id="main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( '/template-parts/content/content', 'trademark-enforcement-and-litigation' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
