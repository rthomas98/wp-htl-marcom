<?php
/**
 * Icon handling functions.
 *
 * @package _htl
 */

if ( ! function_exists( '_htl_icon' ) ) :
    /**
     * Output an SVG icon from Lucide.
     *
     * @param string $icon_name The name of the icon from Lucide.
     * @param array  $args {
     *     Optional. Arguments to modify the icon display.
     *
     *     @type string $class     Additional CSS classes.
     *     @type int    $size      Icon size in pixels. Default 24.
     *     @type string $stroke    Stroke width. Default 2.
     *     @type string $color     Icon color. Default currentColor.
     * }
     * @return string SVG icon HTML.
     */
    function _htl_icon( $icon_name, $args = [] ) {
        // Default arguments
        $defaults = array(
            'class'  => '',
            'size'   => 24,
            'stroke' => 2,
            'color'  => 'currentColor'
        );

        $args = wp_parse_args( $args, $defaults );

        // Base classes for all icons
        $classes = 'htl-icon';
        if ( ! empty( $args['class'] ) ) {
            $classes .= ' ' . $args['class'];
        }

        // Get the SVG content from the icons directory
        $icon_path = get_template_directory() . '/assets/icons/' . $icon_name . '.svg';
        
        if ( ! file_exists( $icon_path ) ) {
            return '';
        }

        $svg = file_get_contents( $icon_path );

        // Add/modify SVG attributes
        $svg = str_replace(
            '<svg',
            sprintf(
                '<svg class="%s" width="%d" height="%d" stroke-width="%d" stroke="%s"',
                esc_attr( $classes ),
                esc_attr( $args['size'] ),
                esc_attr( $args['size'] ),
                esc_attr( $args['stroke'] ),
                esc_attr( $args['color'] )
            ),
            $svg
        );

        return $svg;
    }
endif;

if ( ! function_exists( '_htl_get_icon' ) ) :
    /**
     * Get an SVG icon from Lucide.
     *
     * @param string $icon_name The name of the icon from Lucide.
     * @param array  $args Optional. Arguments to modify the icon display.
     * @return string SVG icon HTML.
     */
    function _htl_get_icon( $icon_name, $args = [] ) {
        return _htl_icon( $icon_name, $args );
    }
endif;
