<?php
/**
 * Template Name: Home Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _htl
 */

get_header();
?>

<section id="primary">
    <main id="main">
        <?php get_template_part('template-parts/content/content', 'home'); ?>
    </main>
</section>

<?php
get_footer();
