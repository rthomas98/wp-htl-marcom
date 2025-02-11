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
    if ( ! function_exists( 'acf_register_block_type' ) ) {
        return;
    }

    // Register blocks directory
    register_block_type( get_template_directory() . '/theme/blocks' );

    // Default block settings
    $default_settings = [
        'category'          => 'htl-blocks',
        'icon'             => 'layout',
        'mode'             => 'preview',
        'supports'         => [
            'align'           => false,
            'anchor'         => true,
            'customClassName' => true,
            'jsx'            => true,
        ],
        'render_template' => 'theme/blocks/templates/%s/%s.php',
    ];

    // Register a category for our blocks
    if ( ! function_exists( '_htl_block_categories' ) ) {
        function _htl_block_categories( $categories ) {
            return array_merge(
                [
                    [
                        'slug'  => 'htl-blocks',
                        'title' => __( 'HTL Blocks', '_htl' ),
                        'icon'  => 'layout',
                    ],
                ],
                $categories
            );
        }
        add_filter( 'block_categories_all', '_htl_block_categories', 10, 1 );
    }

    // Example block registration
    acf_register_block_type( array_merge( $default_settings, [
        'name'            => 'hero',
        'title'           => __( 'Hero', '_htl' ),
        'description'     => __( 'A custom hero block.', '_htl' ),
        'render_template' => sprintf( $default_settings['render_template'], 'hero', 'hero' ),
        'example'         => [
            'attributes' => [
                'mode' => 'preview',
                'data' => [
                    'preview_image_help' => get_template_directory_uri() . '/blocks/assets/preview-hero.jpg',
                ],
            ],
        ],
    ] ) );

    // Register more blocks here...
}
add_action( 'acf_init', '_htl_register_acf_blocks' );
