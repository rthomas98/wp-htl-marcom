<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _htl
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (is_single()) : 
        $excerpt = get_the_excerpt();
        $excerpt = $excerpt ? $excerpt : wp_trim_words(get_the_content(), 20);
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>
        <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>" />
        <meta property="og:description" content="<?php echo esc_attr($excerpt); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
        <?php if ($featured_img_url) : ?>
            <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
        <?php endif; ?>
        <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>" />
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo esc_attr(get_the_title()); ?>" />
        <meta name="twitter:description" content="<?php echo esc_attr($excerpt); ?>" />
        <?php if ($featured_img_url) : ?>
            <meta name="twitter:image" content="<?php echo esc_url($featured_img_url); ?>" />
        <?php endif; ?>
    <?php endif; ?>
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', '_htl' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content">
