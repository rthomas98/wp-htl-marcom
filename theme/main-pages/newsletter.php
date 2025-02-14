<?php
/**
 * Template Name: Newsletter Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _htl
 */

get_header();
?>

<section id="primary">
    <main id="main">
    <?php get_template_part('template-parts/content/content', 'newsletter'); ?>
    </main>
</section>

<?php
get_footer();
