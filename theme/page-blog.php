<?php
/**
 * Template Name: Blog Page
 *
 * @package _htl
 */

get_header();
?>

    <main id="primary" class="site-main">
        <?php get_template_part('theme/template-parts/content/content', 'blog'); ?>
    </main>

<?php
get_footer();
