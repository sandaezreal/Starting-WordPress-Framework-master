<?php
/**
 * Styles & Scripts
 */

// Suppresses wp-embed script
function my_deregister_scripts()
{
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

// Sets theme styles
function cd_theme_styles()
{
	// If using google fonts uncomment
    // wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Barlow:300,300i,400,400i,500,600,700');
    wp_enqueue_style('screen', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'cd_theme_styles');

// Sets theme js
function cd_theme_js()
{
    wp_deregister_script('jquery'); // prevent defaults WP jQuery
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, false);
    wp_enqueue_script('extras_js', get_template_directory_uri() . '/assets/js/extras.js', array('jquery'), '', 'true');
    wp_enqueue_script('scripts_js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'extras_js'), '', 'true');

  /* IF YOU NEED TO ONLY OUTPUT SCRIPTS BY TEMPLATE DO THIS
	if ( is_page_template( 'template-portfolio.php' ) or is_singular( 'portfolio' ) ) {
		wp_enqueue_script( 'portfolio_js', get_template_directory_uri() . '/assets/js/extras-portfolio.js', array('jquery'), '', 'true' );
	}
	*/

}
add_action('wp_enqueue_scripts', 'cd_theme_js');