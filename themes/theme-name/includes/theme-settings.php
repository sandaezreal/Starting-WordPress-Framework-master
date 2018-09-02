<?php
/**
 * Theme Settings
 */

add_theme_support('menus'); // WP Menu Theme Support
add_theme_support( 'customize-selective-refresh-widgets' ); // Selective Refresh Widgets
add_theme_support( 'post-thumbnails' ); // Add Support For Post Thumbnails
remove_action('wp_head', 'print_emoji_detection_script', 7); // Suppresses WP Emoji
remove_action('wp_print_styles', 'print_emoji_styles'); // Suppresses WP Emoji
remove_action('admin_print_scripts', 'print_emoji_detection_script'); // Suppresses WP Emoji
remove_action('admin_print_styles', 'print_emoji_styles'); // Suppresses WP Emoji
remove_filter('the_content', 'wpautop'); // Prevents Empty Line Breaks Turning into P tags in WP WYSIWYG

// Adds Page Title Function
function theme_slug_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_slug_setup');

// Revemo Comments Toolbar Menu Item
function theme_remove_toolbar_node($wp_admin_bar)
{
	$wp_admin_bar->remove_node('comments');
}
add_action('admin_bar_menu', 'theme_remove_toolbar_node', 999);

// Adds Custom Thumbnail Sizes
// Example: add_image_size( 'portfolio-thumb', 380, 250, true );
// Example: add_image_size( 'portfolio-detail', 588 );