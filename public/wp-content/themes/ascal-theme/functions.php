<?php

function ascal_enqueue_assets()
{
    wp_enqueue_style(
        'ascal-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );

    wp_enqueue_style(
        'ascal-navbar',
        get_template_directory_uri() . '/assets/css/navbar.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'ascal-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'ascal_enqueue_assets');

function ascal_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'gallery',
        'caption'
    ]);
}
add_action('after_setup_theme', 'ascal_theme_setup');