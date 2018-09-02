<?php

// Custom Section - Home Hero
$wp_customize->add_section(
    'home_hero',
    array(
        'title'    => 'Home Hero',
        'priority' => 219
    )
);

// Custom Setting - Home Hero Settings
$wp_customize->add_setting(
    'home_hero_background',
    array(
        'default'           => '/wp-content/uploads/01.jpg',
        'sanitize_callback' => 'sanitize_field',
        'transport'         => 'postMessage'
    )
);

$wp_customize->add_setting(
    'home_hero_headline',
    array(
        'default'           => "Spine Surgery and Relief Redefined",
        'sanitize_callback' => 'sanitize_field',
        'transport'         => 'postMessage'
    )
);

$wp_customize->add_setting(
    'home_hero_overview',
    array(
        'default'           => "Are you suffering from spinal related pain? With over 5000 successful surgeries complete, Dr. Prpa is Wisconsin’s leading expert in spine surgery. Serving the Kenosha and Milwaukee area.",
        'sanitize_callback' => 'sanitize_field',
        'transport'         => 'postMessage'
    )
);

// Custom Control - Home Hero Controls
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'home_hero_background',
        array(
            'section' => 'home_hero',
            'settings' => 'home_hero_background',
            'label'   => 'Background Image',
            'description' => 'Please resize and crop background image to 1440px X 810px'
        )
    )
);

$wp_customize->add_control(
    'home_hero_headline',
    array(
        'section' => 'home_hero',
        'label'   => 'Headline',
        'type'    => 'text'
    )
);

$wp_customize->add_control(
    'home_hero_overview',
    array(
        'section' => 'home_hero',
        'label'   => 'Overview',
        'type'    => 'textarea'
    )
);

// Enable Selective Refresh
$wp_customize->selective_refresh->add_partial(
    'home_hero_background',
    array(
        'selector'          => '.section hero',
        'render_callback' => function() {
            return get_theme_mod('home_hero_background');
        }
    )
);

$wp_customize->selective_refresh->add_partial(
    'home_hero_headline',
    array(
        'selector'          => '.hero__title',
        'render_callback' => function() {
            return get_theme_mod('home_hero_headline');
        }
    )
);

$wp_customize->selective_refresh->add_partial(
    'home_hero_overview',
    array(
        'selector'          => '.hero__overview',
        'render_callback' => function() {
            return get_theme_mod('home_hero_overview');
        }
    )
);