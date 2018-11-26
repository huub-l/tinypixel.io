<?php

use PostTypes\PostType;

$initial_options = array(
  'public' => true,
  'name' => 'staff',
  'singular' => 'Staff Member',
  'plural' => 'Staff',
  'slug' => 'our-people',
  'supports' => [ 'title', 
    'editor', 
    'page-attributes' 
  ],
  'has_archive' => true,
  'rewrite' => array(
    'slug' => 'our-people',
    'with_front' => 'true',
  ),
  'capability_type' => 'post',
  'exclude_from_search' => false,
  'publicly_queryable' => true,
);

$staff = new PostType($initial_options);

$staff->options([
  'show_in_rest' => true,
]);

$staff->icon('dashicons-nametag');
$staff->register();