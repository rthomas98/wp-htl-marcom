<?php
/**
 * Register ACF Block: Layout239
 */

acf_register_block_type(array(
    'name'              => 'layout239',
    'title'            => __('Layout239'),
    'description'      => __('A grid of services with images, headings, and descriptions'),
    'render_template'  => 'theme/blocks/layout239/render.php',
    'category'         => 'htl-blocks',
    'icon'             => 'grid-view',
    'keywords'         => array('services', 'grid', 'features', 'layout239'),
    'supports'         => array(
        'anchor' => true,
        'align' => false,
    ),
));

if (function_exists('acf_add_local_field_group')):

acf_add_local_field_group(array(
    'key' => 'group_layout239',
    'title' => 'Layout239',
    'fields' => array(
        array(
            'key' => 'field_layout239_tagline',
            'label' => 'Tagline',
            'name' => 'tagline',
            'type' => 'text',
            'required' => 1,
            'default_value' => 'Our Services',
        ),
        array(
            'key' => 'field_layout239_heading',
            'label' => 'Heading',
            'name' => 'heading',
            'type' => 'text',
            'required' => 1,
            'default_value' => 'Medium length section heading goes here',
        ),
        array(
            'key' => 'field_layout239_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'required' => 1,
            'rows' => 3,
            'new_lines' => 'br',
            'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ),
        array(
            'key' => 'field_layout239_sections',
            'label' => 'Services',
            'name' => 'sections',
            'type' => 'repeater',
            'required' => 1,
            'min' => 1,
            'max' => 3,
            'layout' => 'block',
            'button_label' => 'Add Service',
            'sub_fields' => array(
                array(
                    'key' => 'field_section_image',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'required' => 1,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_section_heading',
                    'label' => 'Heading',
                    'name' => 'heading',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_section_description',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                    'required' => 1,
                    'rows' => 3,
                    'new_lines' => 'br',
                ),
            ),
        ),
        array(
            'key' => 'field_layout239_buttons',
            'label' => 'Buttons',
            'name' => 'buttons',
            'type' => 'repeater',
            'min' => 0,
            'max' => 2,
            'layout' => 'table',
            'button_label' => 'Add Button',
            'sub_fields' => array(
                array(
                    'key' => 'field_button_text',
                    'label' => 'Button Text',
                    'name' => 'title',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_button_link',
                    'label' => 'Button Link',
                    'name' => 'link',
                    'type' => 'url',
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
                    'required' => 1,
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/layout239',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
));

endif;
