<?php
/**
 * Custom mobile menu walker class
 */
class HTL_Mobile_Menu_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $classes = array(
            'sub-menu',
            'overflow-hidden',
            'bg-white rounded-md mt-1',
            'transition-all duration-200 ease-in-out',
        );

        $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $output .= "<div class=\"$class_names\" style=\"max-height: 0;\">";
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= "</div>";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        if ($args->walker->has_children) {
            $classes[] = 'menu-item-has-children';
        }

        $class_names = implode(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= '<div' . $id . $class_names . '>';

        $atts = array(
            'title'  => !empty($item->attr_title) ? $item->attr_title : '',
            'target' => !empty($item->target) ? $item->target : '',
            'rel'    => !empty($item->xfn) ? $item->xfn : '',
            'href'   => !empty($item->url) ? $item->url : '',
            'class'  => 'flex items-center justify-between py-2 px-3 text-mine-shaft rounded-md hover:bg-pippin hover:bg-opacity-10' .
                       (in_array('current-menu-item', $classes) ? ' text-pippin' : '')
        );

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
        
        if ($args->walker->has_children) {
            $item_output .= '<i data-lucide="chevron-down" class="size-4 transition-transform duration-200"></i>';
        }
        
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</div>";
    }
}
