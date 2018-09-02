<?php

// Custom Section - Inner Headers
$wp_customize->add_section(
    'inner_headers',
    array(
        'title'    => 'Inner Template Headers',
        'priority' => 219
    )
);

// Adds Custom Control to Specify Default Inner Header Images For Every Template
function theme_template_headers($wp_customize, $template_slug, $template_name) {

    // Custom Setting - Inner Headers
    $wp_customize->add_setting(
        $template_slug,
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_field',
            'transport'         => 'postMessage'
        )
    );

    // Custom Control - Inner Headers
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            $template_slug,
            array(
                'section' => 'inner_headers',
                'settings' => $template_slug,
                'label'   => $template_name.' Template Header Image',
                'description' => 'Please resize and crop image to 1920px X 500px' // Update Sizing
            )
        )
    );

}

// Default template header
theme_template_headers($wp_customize,"inner_headers_default","Default");

// Get array list of all templates
$templates = wp_get_theme()->get_page_templates();

// Run theme template headers function for each template
foreach ($templates as $key => $value) {
  $arr_template_name = 'inner_headers_' . strtolower($value);
  if ($arr_template_name !== 'inner_headers_home') {
    theme_template_headers($wp_customize,$arr_template_name,$value);
  }

}