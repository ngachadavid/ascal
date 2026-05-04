<?php

// Enqueue styles and scripts
function ascal_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'ascal-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );

    // Main JS file
    wp_enqueue_script(
        'ascal-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'ascal_enqueue_assets');

// Theme setup
function ascal_theme_setup() {
    // Title tag support
    add_theme_support('title-tag');

    // Featured images
    add_theme_support('post-thumbnails');

    // HTML5 support
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'gallery',
        'caption'
    ]);
}
add_action('after_setup_theme', 'ascal_theme_setup');