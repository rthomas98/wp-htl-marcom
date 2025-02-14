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

<section id="primary">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content/content', 'home');
        endwhile;
        ?>
    </main>
</section>

<?php
get_footer();
