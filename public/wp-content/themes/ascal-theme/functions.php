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

    if (is_page('testimonials')) {
        wp_enqueue_style(
            'ascal-testimonials',
            get_template_directory_uri() . '/assets/css/testimonials.css',
            [],
            '1.0'
        );
    }

    if (is_page('donate')) {
        wp_enqueue_style(
            'ascal-donate',
            get_template_directory_uri() . '/assets/css/donate.css',
            [],
            '1.0'
        );
    }

    if (is_page('contact') || is_page('legal')) {
        wp_enqueue_style(
            'ascal-contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            [],
            '1.0'
        );
    }

    if (is_page('legal')) {
        wp_enqueue_style(
            'ascal-legal',
            get_template_directory_uri() . '/assets/css/legal.css',
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
        setcookie('ascal_lang', $lang, time() + (30 * DAY_IN_SECONDS), '/');
        wp_redirect(remove_query_arg('lang'));
        exit;
    }

    // 2. Fall back to cookie
    if (isset($_COOKIE['ascal_lang']) && in_array($_COOKIE['ascal_lang'], $supported)) {
        return $_COOKIE['ascal_lang'];
    }

    // 3. Geolocation — only on first visit (no cookie yet)
    $lang = ascal_detect_lang_by_ip();
    setcookie('ascal_lang', $lang, time() + (30 * DAY_IN_SECONDS), '/');
    return $lang;
}

function ascal_detect_lang_by_ip()
{
    // Country → language map
    $country_map = [
        'FR' => 'fr', // France → French
        'DE' => 'de', // Germany → German
        'LU' => 'en', // Luxembourg → English (default)
    ];

    // Get visitor IP (works behind proxies too)
    $ip = $_SERVER['HTTP_CLIENT_IP']
        ?? $_SERVER['HTTP_X_FORWARDED_FOR']
        ?? $_SERVER['REMOTE_ADDR']
        ?? '';

    // Strip multiple IPs if behind a proxy (take the first one)
    if (str_contains($ip, ',')) {
        $ip = trim(explode(',', $ip)[0]);
    }

    // Skip geolocation for local/dev environments
    if (empty($ip) || $ip === '127.0.0.1' || $ip === '::1') {
        return 'en';
    }

    // Call ip-api.com (free, no key, 45 req/min limit)
    $response = wp_remote_get("http://ip-api.com/json/{$ip}?fields=countryCode", [
        'timeout' => 2, // don't slow down page load if API is slow
    ]);

    if (is_wp_error($response)) {
        return 'en';
    }

    $body = json_decode(wp_remote_retrieve_body($response), true);
    $country = $body['countryCode'] ?? '';

    return $country_map[$country] ?? 'en';
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


// ───── Document Titles ─────
add_filter('document_title_parts', function ($title) {
    if (is_front_page()) {
        $title['title'] = 'ASCA Luxembourg | Supporting Vulnerable Children Through Education & Care';
        unset($title['site']);
    } elseif (is_page('about')) {
        $title['title'] = 'About Us | ASCA Luxembourg';
        unset($title['site']);
    } elseif (is_page('projects')) {
        $title['title'] = 'Our Projects | ASCA Luxembourg';
        unset($title['site']);
    } elseif (is_page('testimonials')) {
        $title['title'] = 'Testimonials | ASCA Luxembourg';
        unset($title['site']);
    } elseif (is_page('donate')) {
        $title['title'] = 'Donate | ASCA Luxembourg';
        unset($title['site']);
    } elseif (is_page('contact')) {
        $title['title'] = 'Contact | ASCA Luxembourg';
        unset($title['site']);
    } elseif (is_page('legal')) {
        $title['title'] = 'Legal Notice | ASCA Luxembourg';
        unset($title['site']);
    }
    return $title;
});

// ───── Meta Description + Open Graph + Twitter ─────
add_action('wp_head', function () {

    if (is_front_page()):
        $desc    = 'ASCA Luxembourg (Appui Scolaire Carlo Acutis) is a non-profit organization dedicated to supporting orphaned and vulnerable children through education, nutrition, emotional care, and community empowerment.';
        $og_title   = 'ASCA Luxembourg | Education, Hope & Dignity';
        $og_desc    = 'Supporting disadvantaged children through education, nourishment, and emotional care.';
        $og_url     = 'https://www.ascal.eu';
        $og_image   = 'https://www.ascal.eu/homepage/impact.webp';
        $og_img_alt = 'ASCA Luxembourg supporting children';

    elseif (is_page('about')):
        $desc    = 'Learn about ASCA Luxembourg\'s mission, history, and commitment to supporting vulnerable children through education, nutrition, and compassionate care.';
        $og_title   = 'About ASCA Luxembourg | Our Mission & Commitment';
        $og_desc    = 'Discover the story, values, and vision behind ASCA Luxembourg and our dedication to empowering vulnerable children.';
        $og_url     = 'https://www.ascal.eu/about';
        $og_image   = 'https://www.ascal.eu/homepage/carlo.webp';
        $og_img_alt = 'ASCA Luxembourg mission and history';

    elseif (is_page('projects')):
        $desc    = 'Explore the projects ASCA Luxembourg runs to support vulnerable children through education, nutrition, and care.';
        $og_title   = 'Our Projects | ASCA Luxembourg';
        $og_desc    = 'See how ASCA Luxembourg is making a difference through its on-the-ground projects.';
        $og_url     = 'https://www.ascal.eu/projects';
        $og_image   = 'https://www.ascal.eu/homepage/impact.webp';
        $og_img_alt = 'ASCA Luxembourg projects';

    elseif (is_page('testimonials')):
        $desc    = 'Read testimonials from those who have witnessed the impact of ASCA Luxembourg\'s work with vulnerable children.';
        $og_title   = 'Testimonials | ASCA Luxembourg';
        $og_desc    = 'Hear from those touched by ASCA Luxembourg\'s mission.';
        $og_url     = 'https://www.ascal.eu/testimonials';
        $og_image   = 'https://www.ascal.eu/homepage/impact.webp';
        $og_img_alt = 'ASCA Luxembourg testimonials';

    elseif (is_page('donate')):
        $desc    = 'Support ASCA Luxembourg\'s mission by making a donation to help vulnerable children access education, nutrition, and care.';
        $og_title   = 'Donate | ASCA Luxembourg';
        $og_desc    = 'Your donation helps ASCA Luxembourg support vulnerable children in need.';
        $og_url     = 'https://www.ascal.eu/donate';
        $og_image   = 'https://www.ascal.eu/homepage/impact.webp';
        $og_img_alt = 'Donate to ASCA Luxembourg';

    elseif (is_page('contact')):
        $desc    = 'Get in touch with ASCA Luxembourg. We\'d love to hear from you.';
        $og_title   = 'Contact | ASCA Luxembourg';
        $og_desc    = 'Reach out to ASCA Luxembourg with questions, partnerships, or support inquiries.';
        $og_url     = 'https://www.ascal.eu/contact';
        $og_image   = 'https://www.ascal.eu/homepage/impact.webp';
        $og_img_alt = 'Contact ASCA Luxembourg';

    elseif (is_page('legal')):
        $desc    = 'Legal notice and terms for ASCA Luxembourg.';
        $og_title   = 'Legal Notice | ASCA Luxembourg';
        $og_desc    = 'Legal information for ASCA Luxembourg.';
        $og_url     = 'https://www.ascal.eu/legal';
        $og_image   = 'https://www.ascal.eu/homepage/impact.webp';
        $og_img_alt = 'ASCA Luxembourg legal notice';

    else:
        return;
    endif;

?>
    <meta name="description" content="<?php echo esc_attr($desc); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($og_desc); ?>">
    <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
    <meta property="og:site_name" content="ASCA Luxembourg">
    <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
    <meta property="og:image:alt" content="<?php echo esc_attr($og_img_alt); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($og_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($og_desc); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">
<?php

}, 1); // priority 1 = runs early, before wp_head plugins