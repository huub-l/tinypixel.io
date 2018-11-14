<?php
/*
Plugin Name: &nbsp;✨WP SVG Uploads✨
Description: SVG support for the WordPress media library
Plugin URI: https://github.com/pixelcollective/tiny-svg
Author: Tiny Pixel Collective, Kelly Mears <developers@tinypixel.io>
Version: 1.0.0
Author URI: https://tinypixel.io
*/

add_action('upload_mimes', function ($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge( $file_types, $new_filetypes );
  return $file_types;
});