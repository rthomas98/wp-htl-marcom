<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _htl
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content/content', 'single');

                // Display related posts
                get_template_part('template-parts/content/content', 'related-posts');

            endwhile; // End of the loop.
            ?>
        </main>
    </div>

<?php
get_footer();
