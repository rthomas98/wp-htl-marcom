<?php
/**
 * Custom Mega Menu Walker
 *
 * @package _htl
 */

class HTL_Mega_Menu_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Base classes for menu items
        $item_classes = array(
            'relative', // For dropdown positioning
            'group', // For hover states
        );

        if ($depth === 0) {
            $item_classes[] = 'lg:px-2 xl:px-4';
        } else {
            $item_classes[] = 'w-full';
        }

        // Add active class if item is current
        if (in_array('current-menu-item', $classes)) {
            $item_classes[] = 'bg-pippin bg-opacity-10 rounded-md';
        }

        $class_names = implode(' ', array_filter(array_merge($classes, $item_classes)));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= '<div' . $id . $class_names . '>';

        // Link attributes with hover effect for dropdown items
        $atts = array(
            'title'  => !empty($item->attr_title) ? $item->attr_title : '',
            'target' => !empty($item->target) ? $item->target : '',
            'rel'    => !empty($item->xfn) ? $item->xfn : '',
            'href'   => !empty($item->url) ? $item->url : '',
            'class'  => 'flex items-center py-2 text-mine-shaft rounded-md transition-all duration-200 whitespace-nowrap w-full' . 
                       ($depth === 0 ? ' lg:py-6' : ' hover:bg-pippin hover:bg-opacity-10 px-3') .
                       (in_array('current-menu-item', $classes) ? ' text-pippin' : ' hover:text-pippin')
        );

        if ($depth === 0) {
            $atts['class'] .= ' justify-between lg:inline-flex lg:space-x-2';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= '<span>' . $args->link_before . $title . $args->link_after . '</span>';
        
        // Add dropdown arrow for items with children
        if ($args->walker->has_children) {
            $item_output .= '<i data-lucide="chevron-down" class="size-4 transition-transform duration-200 ' . 
                          (in_array('current-menu-item', $classes) ? 'text-pippin' : '') . 
                          ' lg:group-hover:rotate-180"></i>';
        }
        
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function start_lvl(&$output, $depth = 0, $args = null) {
        $classes = array(
            'sub-menu',
            'invisible opacity-0 transition-all duration-200',
            'lg:absolute lg:left-0 lg:top-full lg:z-50 lg:min-w-[240px] lg:group-hover:visible lg:group-hover:opacity-100',
            'bg-white border border-gallery shadow-lg rounded-md',
            $depth === 0 ? 'lg:mt-0' : 'lg:left-full lg:top-0 lg:ml-1',
        );

        $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));

        $output .= "<div class=\"$class_names\">";
        $output .= "<div class=\"p-4\">";
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= "</div></div>";
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</div>";
    }
}
