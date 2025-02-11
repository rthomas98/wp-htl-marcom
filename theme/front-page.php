<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package _htl
 */

get_header();
?>

<main id="main" class="site-main">
    <?php the_content(); ?>
</main>

<?php
get_footer();
