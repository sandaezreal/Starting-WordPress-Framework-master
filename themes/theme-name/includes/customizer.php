<?php
/**
 * Customizer Functions
 */

function theme_customizer($wp_customize)
{

    // Custom Control - Company Settings
    require get_parent_theme_file_path('/includes/customizer/company-settings.php');

    // Custom Control - Home Content
    require get_parent_theme_file_path('/includes/customizer/example-home-hero.php');

    // Custom Control - Inner Headers
    require get_parent_theme_file_path('/includes/customizer/inner-headers.php');

    // Hide Default Customizer Sections
    $wp_customize->remove_section( 'custom_css');

}
add_action('customize_register', 'theme_customizer');

// Making adding company settings data easier by providing custom names
require get_parent_theme_file_path('/includes/customizer/company-settings/functions.php');

// Sanitize Fields
function sanitize_field($input)
{
  return strip_tags(stripslashes($input));
}

function themeslug_sanitize_url( $url )
{
  return esc_url_raw( $url );
}

// This sets up the live preview through the transport postMessage so that live view doesn't require a refresh
function theme_customizer_live_preview()
{
    wp_enqueue_script(
        'theme-customizer_js',
        get_template_directory_uri() . '/assets/js/theme-customizer.js',
        array('jquery', 'customize-preview'),
        '0.3.0',
        true
    );
}
add_action('customize_preview_init', 'theme_customizer_live_preview');