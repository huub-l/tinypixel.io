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
    $wp_customize->add_setting( 'github_url' , array(
        'default'   => 'https://github.com/pixelcollective',
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
    $wp_customize->add_control(
      new \WP_Customize_Upload_Control(
      $wp_customize,
      'horizontal_logo',
      array(
        'label'      => __( 'Logo (Horizontal Format)', 'soil' ),
        'section'    => 'branding',
        'settings'   => 'horizontal_logo',
      ))
    );
    $wp_customize->add_control(
      new \WP_Customize_Control(
      $wp_customize,
      'facebook_url',
      array(
        'label'      => __( 'Facebook Page URL', 'soil' ),
        'section'    => 'social_media',
        'settings'   => 'facebook_url',
      ))
    );
    $wp_customize->add_control(
      new \WP_Customize_Control(
      $wp_customize,
      'twitter_url',
      array(
        'label'      => __( 'Twitter Account URL', 'soil' ),
        'section'    => 'social_media',
        'settings'   => 'twitter_url',
      ))
    );
    $wp_customize->add_control(
      new \WP_Customize_Control(
      $wp_customize,
      'twitter_url',
      array(
        'label'      => __( 'Github Account URL', 'soil' ),
        'section'    => 'social_media',
        'settings'   => 'github_url',
      ))
    );
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
