<?php
/*
Plugin Name:  WPRollBar
Plugin URI:   https://tinypixel.io
Description:  Eject! Eject!
Version:      1.0.0
Author:       Tiny Pixel
Author URI:   https://tinypixel.io
License:      MIT License
*/

use \Rollbar\Rollbar;
use \Rollbar\Payload\Level;

Env::init();

Rollbar::init(
    array(
        'access_token' => env('ROLLBAR_TOKEN'),
        'environment' => env('WP_ENV'),
    )
);
