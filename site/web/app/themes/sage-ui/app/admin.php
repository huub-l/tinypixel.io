<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
    $wp_customize->add_setting( 'horizontal_logo' , array(
        'default'   => 'https://tinypixel.io/app/uploads/2018/10/tpc.png',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_setting( 'facebook_url' , array(
        'default'   => 'https://facebook.com/tinypixeldevs',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_setting( 'twitter_url' , array(
        'default'   => 'https://twitter.com/tinydevteam',
        'transport' => 'postMessage',
    ) );
    $wp_customize->add_section( 'branding' , array(
          'title'      => __('Branding','soil'),
          'priority'   => 30,
    ) );
    $wp_customize->add_section( 'social_media' , array(
          'title'      => __('Social Media','soil'),
          'priority'   => 30,
    ) );
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
