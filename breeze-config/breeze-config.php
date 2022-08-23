<?php 
defined( 'ABSPATH' ) || exit;
return array (
  'homepage' => 'http://localhost:8888/forklift',
  'cache_options' => 
  array (
    'breeze-active' => '1',
    'breeze-ttl' => '',
    'breeze-minify-html' => '0',
    'breeze-minify-css' => '0',
    'breeze-minify-js' => '0',
    'breeze-gzip-compression' => '1',
    'breeze-desktop-cache' => '1',
    'breeze-browser-cache' => '1',
    'breeze-mobile-cache' => '1',
    'breeze-disable-admin' => 
    array (
      'administrator' => 0,
      'editor' => 0,
      'author' => 0,
      'contributor' => 0,
      'subscriber' => 0,
    ),
    'breeze-display-clean' => '1',
  ),
  'disable_per_adminuser' => 
  array (
    'administrator' => 0,
    'editor' => 0,
    'author' => 0,
    'contributor' => 0,
    'subscriber' => 0,
  ),
  'exclude_url' => 
  array (
  ),
  'wp-user-roles' => 
  array (
    0 => 'administrator',
    1 => 'editor',
    2 => 'author',
    3 => 'contributor',
    4 => 'subscriber',
  ),
  'enabled-lazy-load' => 0,
  'use-lazy-load-native' => 0,
  'breeze-preload-links' => 0,
  'woocommerce_geolocation_ajax' => 0,
  'permalink_structure' => '/%postname%/',
); 
