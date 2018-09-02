<?php

function company_name()
{
  return get_theme_mod('company_settings_name', '[Company Name]');
}

function company_phone()
{
  return get_theme_mod('company_settings_phone', '(XXX) XXX-XXXX');
}

function company_phone_tel()
{
  $tel_click = preg_replace('/[^0-9]/', '', get_theme_mod('company_settings_phone', 'XXXXXXXXXX'));
  return $tel_click;
}

function company_address()
{
  return get_theme_mod('company_settings_address', '123 Anywhere St.');
}

function company_address2()
{
  return get_theme_mod('company_settings_address2', '');
}

function company_city()
{
  return get_theme_mod('company_settings_city', 'Chicago');
}

function company_state()
{
  return get_theme_mod('company_settings_state', 'IL');
}

function company_zip()
{
  return get_theme_mod('company_settings_zip', '123456');
}
