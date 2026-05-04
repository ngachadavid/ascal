<?php

// Enqueue styles and scripts
function ascal_enqueue_assets()
{
    // Main stylesheet
    wp_enqueue_style(
        'ascal-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );

    // Load translation JSON files
    $en = json_decode(
        file_get_contents(get_template_directory() . '/languages/en.json'),
        true
    );
    $fr = json_decode(
        file_get_contents(get_template_directory() . '/languages/fr.json'),
        true
    );
    $de = json_decode(
        file_get_contents(get_template_directory() . '/languages/de.json'),
        true
    );

    // i18n script
    wp_enqueue_script(
        'ascal-i18n',
        get_template_directory_uri() . '/assets/js/i18n.js',
        [],
        '1.0',
        true // load in footer
    );

    // Pass all translations to JS as ascalLang object
    wp_localize_script('ascal-i18n', 'ascalLang', [
        'en' => $en,
        'fr' => $fr,
        'de' => $de,
    ]);

    // Main JS — loads after i18n
    wp_enqueue_script(
        'ascal-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['ascal-i18n'], // depends on i18n
        '1.0',
        true
    );

    // Navbar CSS
    wp_enqueue_style(
        'ascal-navbar',
        get_template_directory_uri() . '/assets/css/navbar.css',
        [],
        '1.0'
    );

    // Navbar JS
    wp_enqueue_script(
        'ascal-navbar',
        get_template_directory_uri() . '/assets/js/navbar.js',
        ['ascal-i18n'],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'ascal_enqueue_assets');

// Theme setup
function ascal_theme_setup()
{
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