<?php
/**
* Menus
*/

function register_theme_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'social-links-menu' => __('Social Links Menu'),
        )
    );
}
add_action('init', 'register_theme_menus');

/**********************
* Social Menu
**********************/
/**
Example: Calling Social Menu
<?php
  $defaults = array(
    'container' => false,
    'theme_location' => 'social-links-menu',
    'menu_class' => '',
    'menu' => '',
    'items_wrap' => '<ul>%3$s</ul>',
    'walker' => new Social_Menu
  );
  wp_nav_menu($defaults);
?>
*/

class Social_Menu extends Walker_Nav_Menu

{
/**
* Start the element output.
*
* @param  string $output Passed by reference. Used to append additional content.
* @param  object $item   Menu item data object.
* @param  int $depth     Depth of menu item. May be used for padding.
* @param  array $args    Additional strings.
* @return void
*/
function start_el(&$output, $item, $depth = 0, $args = array() , $id = 0)
    {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    // Menu Class Names
    // [0] => custom class // [1] => menu-item // [2] => menu-item-type-custom // [3] => menu-item-object-custom

    $class_names = esc_attr($item->classes[0]);
    $output.= $indent . '<li>';

    // Menu Attributes

    $atts = array();
    $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
    $atts['href'] = !empty($item->url) ? $item->url : '';
    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);
    $attributes = '';
    foreach($atts as $attr => $value)
        {
        if (!empty($value))
            {
            $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
            $attributes.= ' ' . $attr . '="' . $value . '"';
            }
        }

    // Output Menu Item

    $item_output = $args->before;
    $item_output.= '<a' . $attributes . '>';
    $item_output.= $args->link_before;
    $item_output.= '<span class="footer__top-social-icon icon-' . $class_names . '"></span><span class="footer__top-social-label">' . apply_filters('the_title', $item->title, $item->ID) . '</span>';
    $item_output.= $args->link_after;
    $item_output.= '</a>';
    $item_output.= $args->after;
    $output.= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

/**
* @see Walker::end_el()
* @since 3.0.0
*
* @param string $output Passed by reference. Used to append additional content.
* @param object $item Page data object. Not used.
* @param int $depth Depth of page. Not Used.
*/
function end_el(&$output, $item, $depth = 0, $args = array())
    {
    $output.= "</li>\n";
    }
}

/**********************
* Clean Menu
**********************/

/**
Example: Calling Clean Menu
<?php
  $defaults = array(
    'container' => false,
    'theme_location' => 'footer-locations-menu',
    'menu_class' => '',
    'menu' => '',
    'items_wrap' => '<ul>%3$s</ul>',
    'walker' => new Clean_Menu
  );
  wp_nav_menu($defaults);
?>
*/

class Clean_Menu extends Walker_Nav_Menu
{
    /**
     * {@inheritdoc}
     */
    function start_lvl(&$output, $depth=0, $args=array())
    {
        $output .= '<ul class="sub-menu">';
    }
    /**
     * {@inheritdoc}
     */
    function end_lvl(&$output, $depth=0, $args=array())
    {
        $output .= '</ul>';
    }
    /**
     * {@inheritdoc}
     */
    function start_el(&$output, $item, $depth=0, $args=array(), $id=0)
    {
        $class_names = '';
        $classes = empty($item->classes) ?
            array() : array_intersect($this->get_allowed_classes(), (array) $item->classes);
        // put th ecustom CSS classes back in.
        if ($custom = get_post_meta($item->ID, '_menu_item_classes', true)) {
            $classes = array_merge($classes, $custom);
        }
        $class_names = join(' ',
            apply_filters('nav_menu_css_class', array_filter(array_unique($classes)), $item, $args)
        );
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= '<li' . $class_names .'>';
        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    /**
     * {@inheritdoc}
     */
    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</li>";
    }
    /**
     * Get the CSS classes that will be allowed on menu item li's.
     *
     * @since   1.0
     * @access  private
     * @uses    apply_filters.
     * @return  array
     */
    private function get_allowed_classes()
    {
        return apply_filters('clean_menu_walker_allowed_classes', array(
            'current-menu-item',
            'current-menu-ancestor',
        ));
    }
}