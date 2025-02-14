<?php
/**
 * Register ACF Block: Hero Gallery
 */

acf_register_block_type(array(
    'name'              => 'hero-gallery',
    'title'            => __('Hero Gallery'),
    'description'      => __('A hero section with animated image gallery'),
    'render_template'  => 'theme/blocks/hero-gallery/render.php',
    'category'         => 'htl-blocks',
    'icon'             => 'format-gallery',
    'keywords'         => array('hero', 'gallery', 'images'),
    'supports'         => array(
        'anchor' => true,
        'align' => false,
    ),
));

if (function_exists('acf_add_local_field_group')):

acf_add_local_field_group(array(
    'key' => 'group_hero_gallery',
    'title' => 'Hero Gallery Block',
    'fields' => array(
        array(
            'key' => 'field_hero_heading',
            'label' => 'Heading',
            'name' => 'heading',
            'type' => 'text',
            'required' => 1,
        ),
        array(
            'key' => 'field_hero_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 3,
        ),
        array(
            'key' => 'field_hero_buttons',
            'label' => 'Buttons',
            'name' => 'buttons',
            'type' => 'repeater',
            'layout' => 'table',
            'min' => 0,
            'max' => 2,
            'sub_fields' => array(
                array(
                    'key' => 'field_button_text',
                    'label' => 'Button Text',
                    'name' => 'text',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_button_link',
                    'label' => 'Button Link',
                    'name' => 'link',
                    'type' => 'link',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_button_style',
                    'label' => 'Button Style',
                    'name' => 'style',
                    'type' => 'select',
                    'choices' => array(
                        'primary' => 'Primary',
                        'secondary' => 'Secondary',
                    ),
                    'default_value' => 'primary',
                ),
            ),
        ),
        array(
            'key' => 'field_hero_gallery_images',
            'label' => 'Gallery Images',
            'name' => 'gallery_images',
            'type' => 'gallery',
            'min' => 8,
            'max' => 40,
            'insert' => 'append',
            'library' => 'all',
            'mime_types' => 'jpg,jpeg,png',
            'instructions' => 'Add at least 8 images for the animated background gallery.',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/hero-gallery',
            ),
        ),
    ),
));

endif;
