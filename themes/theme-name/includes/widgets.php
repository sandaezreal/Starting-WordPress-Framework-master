<?php
/**
 * Widgets
 */

function cd_create_widgets($name, $id, $description, $before_widget, $after_widget, $before_title, $after_title)
{

  register_sidebar(array(
    'name'          => __($name),
    'id'            => $id,
    'description'   => __($description),
    'before_widget' => $before_widget,
    'after_widget'  => $after_widget,
    'before_title'  => $before_title,
    'after_title'   => $after_title,
  ));

}

/* Calling Example WP Widget - Footer About Text
  cd_create_widgets(
    'Footer About',
    'footer_about_widget',
    'Displays on footer',
    '<section id="%1$s" class="widget %2$s">',
    '</section>',
    '',
    ''
  );
*/


/* Calling Example Custom WP Widgets - Locations Widget
require get_parent_theme_file_path( '/includes/widgets/example-location-widget.php' );
*/