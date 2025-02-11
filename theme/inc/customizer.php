<?php
/**
 * _htl Theme Customizer
 *
 * @package _htl
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _htl_customize_register($wp_customize) {
    // Header Settings Section
    $wp_customize->add_section('_htl_header_settings', array(
        'title'    => __('Header Settings', '_htl'),
        'priority' => 30,
    ));

    // Primary CTA URL
    $wp_customize->add_setting('header_cta_primary_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('header_cta_primary_url', array(
        'label'       => __('Contact Button URL', '_htl'),
        'section'     => '_htl_header_settings',
        'type'        => 'url',
        'description' => __('Enter the URL for the Contact button', '_htl'),
    ));

    // Primary CTA Text
    $wp_customize->add_setting('header_cta_primary_text', array(
        'default'           => 'Contact Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_cta_primary_text', array(
        'label'       => __('Contact Button Text', '_htl'),
        'section'     => '_htl_header_settings',
        'type'        => 'text',
    ));

    // Secondary CTA URL
    $wp_customize->add_setting('header_cta_secondary_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('header_cta_secondary_url', array(
        'label'       => __('Schedule Consultation Button URL', '_htl'),
        'section'     => '_htl_header_settings',
        'type'        => 'url',
        'description' => __('Enter the URL for the Schedule Consultation button', '_htl'),
    ));

    // Secondary CTA Text
    $wp_customize->add_setting('header_cta_secondary_text', array(
        'default'           => 'Schedule Consultation',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_cta_secondary_text', array(
        'label'       => __('Schedule Consultation Button Text', '_htl'),
        'section'     => '_htl_header_settings',
        'type'        => 'text',
    ));
}
add_action('customize_register', '_htl_customize_register');
