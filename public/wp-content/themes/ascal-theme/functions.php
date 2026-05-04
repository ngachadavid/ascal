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

    if (is_front_page()) {
        wp_enqueue_style(
            'ascal-homepage',
            get_template_directory_uri() . '/assets/css/homepage.css',
            [],
            '1.0'
        );
    }

    wp_enqueue_script(
        'ascal-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );

    if (is_page('about')) {
        wp_enqueue_style(
            'ascal-about',
            get_template_directory_uri() . '/assets/css/about.css',
            [],
            '1.0'
        );
    }

    if (is_page('projects')) {
        wp_enqueue_style(
            'ascal-projects',
            get_template_directory_uri() . '/assets/css/projects.css',
            [],
            '1.0'
        );
    }

    wp_enqueue_style(
        'ascal-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        [],
        '1.0'
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


/* ===== TRANSLATION HELPER ===== */

function ascal_get_lang()
{
    $supported = ['en', 'fr', 'de'];

    // 1. Check URL param first — ?lang=fr
    if (isset($_GET['lang']) && in_array($_GET['lang'], $supported)) {
        $lang = $_GET['lang'];
        // Save to cookie for future page loads (30 days)
        setcookie('ascal_lang', $lang, time() + (30 * DAY_IN_SECONDS), '/');
        // Redirect to same URL without ?lang= param
        wp_redirect(remove_query_arg('lang'));
        exit;
    }

    // 2. Fall back to cookie
    if (isset($_COOKIE['ascal_lang']) && in_array($_COOKIE['ascal_lang'], $supported)) {
        return $_COOKIE['ascal_lang'];
    }

    // 3. Default to English
    return 'en';
}

function ascal_load_translations()
{
    static $translations = null;

    if ($translations !== null) {
        return $translations;
    }

    $lang = ascal_get_lang();
    $file = get_template_directory() . '/languages/' . $lang . '.json';

    // Fallback to English if file doesn't exist
    if (!file_exists($file)) {
        $file = get_template_directory() . '/languages/en.json';
    }

    $json = file_get_contents($file);
    $translations = json_decode($json, true);

    return $translations;
}

function _t($key, $fallback = '')
{
    $translations = ascal_load_translations();

    $keys = explode('.', $key);
    $value = $translations;

    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $fallback ?: $key;
        }
    }

    return is_string($value) ? $value : ($fallback ?: $key);
}

