<?php
/**
 * The front page template file
 *
 * This is the template that displays your site's front page,
 * whether it's set to display blog posts or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _htl
 */

get_header();
?>

<section id="primary">
    <main id="main">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('theme/template-parts/content/content', 'home');
        endwhile;
        ?>
    </main>
</section>

<?php
get_footer();
