<?php
/**
 * ACF Blocks Registration
 *
 * @package _htl
 */

/**
 * Register ACF Blocks
 */
function _htl_register_acf_blocks() {
    if (!function_exists('acf_register_block_type')) {
        return;
    }

    // Register a category for our blocks
    if (!function_exists('_htl_block_categories')) {
        function _htl_block_categories($categories) {
            return array_merge(
                [
                    [
                        'slug'  => 'htl-blocks',
                        'title' => __('HTL Blocks', '_htl'),
                        'icon'  => 'layout',
                    ],
                ],
                $categories
            );
        }
        add_filter('block_categories_all', '_htl_block_categories', 10, 1);
    }

    // Get correct paths
    $blocks_path = dirname(__DIR__) . '/blocks';

    // Register Hero Gallery Block
    acf_register_block_type([
        'name'            => 'hero-gallery',
        'title'          => __('Hero Gallery', '_htl'),
        'description'    => __('A hero section with animated gallery background', '_htl'),
        'category'       => 'htl-blocks',
        'icon'          => 'cover-image',
        'keywords'      => ['hero', 'gallery', 'animation'],
        'post_types'    => ['page'],
        'mode'          => 'edit',
        'supports'      => [
            'align'         => ['full'],
            'anchor'       => true,
            'mode'         => false,
        ],
        'render_template' => $blocks_path . '/hero-gallery/render.php',
    ]);

    // Include ACF fields registration
    require_once $blocks_path . '/hero-gallery/register-acf.php';
}

add_action('acf/init', '_htl_register_acf_blocks');
