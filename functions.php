<?php
/**
 * HTL Theme Functions
 */

// Register Custom Block Category
add_filter('block_categories_all', function($categories) {
    return array_merge(
        array(
            array(
                'slug'  => 'htl-blocks',
                'title' => __('HTL Blocks', '_htl'),
                'icon'  => 'layout',
            ),
        ),
        $categories
    );
}, 10, 1);

// Register ACF Blocks
add_action('acf/init', function() {
    if (!function_exists('acf_register_block_type')) {
        return;
    }

    // Register blocks
    require_once get_template_directory() . '/theme/blocks/hero-gallery/register-acf.php';
    require_once get_template_directory() . '/theme/blocks/layout239/register-acf.php';
});

// Add theme support for blocks
add_action('after_setup_theme', function() {
    add_theme_support('editor-styles');
    add_theme_support('align-wide');
    add_theme_support('custom-spacing');
    add_theme_support('custom-units');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

// Enqueue theme assets
function htl_enqueue_scripts() {
    // Enqueue animations CSS
    wp_enqueue_style('htl-animations', get_template_directory_uri() . '/theme/assets/css/animations.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'htl_enqueue_scripts');

// Add Alpine.js to head
function htl_add_alpinejs() {
    ?>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>[x-cloak] { display: none !important; }</style>
    <?php
}
add_action('wp_head', 'htl_add_alpinejs');

// Register menus
add_action('init', function() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'htl'),
        'footer'  => __('Footer Menu', 'htl'),
    ]);
});
