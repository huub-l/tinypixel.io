<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 */
/*
add_action( 'carbon_fields_register_fields', function () {
    Container::make( 'post_meta', 'Custom Author (leave blank if you are the author)' )
        ->where( 'post_type', '=', 'post' )
        ->add_fields( array(
            Field::make( 'text', 'ndn_author', 'Author Name' ),
            Field::make( 'text', 'ndn_author_bio', 'Author Biography'),
            Field::make( 'image', 'ndn_author_photo', 'Author Photo' )
              ->set_value_type( 'url' ),
        ));
});
 */

/**
 * Boot Carbon Fields
 */
add_action( 'after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});