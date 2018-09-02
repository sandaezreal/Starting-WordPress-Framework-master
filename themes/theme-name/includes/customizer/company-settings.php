<?php

// Custom Section - Company Settings
$wp_customize->add_section(
  'company_settings',
  array(
    'title'    => 'Company Settings',
    'priority' => 220,
  )
);

// Custom Setting - Company Settings - Company Name
$wp_customize->add_setting(
  'company_settings_name',
  array(
    'default'           => '[Company Name]',
    'sanitize_callback' => 'sanitize_field',
    'transport'         => 'postMessage',

  )
);

// Custom Control - Company  Settings - Company Name - Add Control
$wp_customize->add_control(
  'company_settings_name',
  array(
    'section' => 'company_settings',
    'label'   => 'Company Name',
    'type'    => 'text',
  )
);

// Custom Control - Company Settings - Company Name - Define Selective Refresh
$wp_customize->selective_refresh->add_partial('company_settings_name', array(
  'selector'        => '.tc-name',
  'render_callback' => function () {
    return get_theme_mod('company_settings_name');
  },
));

// Custom Setting - Company Settings - Company Address
$wp_customize->add_setting(
  'company_settings_address',
  array(
    'default'           => '123 Anywhere St.',
    'sanitize_callback' => 'sanitize_field',
    'transport'         => 'postMessage',

  )
);

// Custom Control - Company  Settings - Company Address - Add Control
$wp_customize->add_control(
  'company_settings_address',
  array(
    'section' => 'company_settings',
    'label'   => 'Address',
    'type'    => 'text',
  )
);

// Custom Control - Company Settings - Company Address - Define Selective Refresh
$wp_customize->selective_refresh->add_partial('company_settings_address', array(
  'selector'        => '.tc-address',
  'render_callback' => function () {
    return get_theme_mod('company_settings_address');
  },
));

// Custom Setting - Company Settings - Company Address 2
$wp_customize->add_setting(
  'company_settings_address2',
  array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_field',
    'transport'         => 'postMessage',

  )
);

// Custom Control - Company  Settings - Company Address 2 - Add Control
$wp_customize->add_control(
  'company_settings_address2',
  array(
    'section' => 'company_settings',
    'label'   => 'Address 2',
    'type'    => 'text',
  )
);

// Custom Control - Company Settings - Company Address 2 - Define Selective Refresh
$wp_customize->selective_refresh->add_partial('company_settings_address2', array(
  'selector'        => '.tc-address2',
  'render_callback' => function () {
    return get_theme_mod('company_settings_address2');
  },
));

// Custom Setting - Company Settings - Company City
$wp_customize->add_setting(
  'company_settings_city',
  array(
    'default'           => 'Chicago',
    'sanitize_callback' => 'sanitize_field',
    'transport'         => 'postMessage',

  )
);

// Custom Control - Company  Settings - Company City - Add Control
$wp_customize->add_control(
  'company_settings_city',
  array(
    'section' => 'company_settings',
    'label'   => 'City',
    'type'    => 'text',
  )
);

// Custom Control - Company Settings - Company City - Define Selective Refresh
$wp_customize->selective_refresh->add_partial('company_settings_city', array(
  'selector'        => '.tc-city',
  'render_callback' => function () {
    return get_theme_mod('company_settings_city');
  },
));

// Custom Setting - Company Settings - Company State
$wp_customize->add_setting(
  'company_settings_state',
  array(
    'default'           => 'IL',
    'sanitize_callback' => 'sanitize_field',
    'transport'         => 'postMessage',

  )
);

// Custom Control - Company  Settings - Company State - Add Control
$wp_customize->add_control(
  'company_settings_state',
  array(
    'section' => 'company_settings',
    'label'   => 'State',
    'type'    => 'text',
  )
);

// Custom Control - Company Settings - Company State - Define Selective Refresh
$wp_customize->selective_refresh->add_partial('company_settings_state', array(
  'selector'        => '.tc-state',
  'render_callback' => function () {
    return get_theme_mod('company_settings_state');
  },
));

// Custom Setting - Company Settings - Company Zip
$wp_customize->add_setting(
  'company_settings_zip',
  array(
    'default'           => '123456',
    'sanitize_callback' => 'sanitize_field',
    'transport'         => 'postMessage',

  )
);

// Custom Control - Company  Settings - Company Zip - Add Control
$wp_customize->add_control(
  'company_settings_zip',
  array(
    'section' => 'company_settings',
    'label'   => 'Zip Code',
    'type'    => 'text',
  )
);

// Custom Control - Company Settings - Company Zip - Define Selective Refresh
$wp_customize->selective_refresh->add_partial('company_settings_zip', array(
  'selector'        => '.tc-zip',
  'render_callback' => function () {
    return get_theme_mod('company_settings_zip');
  },
));

// Custom Setting - Company Settings - Phone
$wp_customize->add_setting(
  'company_settings_phone',
  array(
    'default'           => '(XXX) XXX-XXXX',
    'sanitize_callback' => 'sanitize_field',
    'transport'         => 'postMessage',

  )
);

// Custom Control - Company  Settings - Phone - Add Control
$wp_customize->add_control(
  'company_settings_phone',
  array(
    'section' => 'company_settings',
    'label'   => 'Phone Number',
    'type'    => 'text',
  )
);

// Custom Control - Company Settings - Phone - Define Selective Refresh
$wp_customize->selective_refresh->add_partial('company_settings_phone', array(
  'selector'        => '.tc-phone',
  'render_callback' => function () {
    return get_theme_mod('company_settings_phone');
  },
));
