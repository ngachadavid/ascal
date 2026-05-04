<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @media (min-width: 1024px) {
            .navbar-desktop {
                display: flex !important;
            }

            .navbar-mobile {
                display: none !important;
            }
        }

        @media (max-width: 1023px) {
            .navbar-desktop {
                display: none !important;
            }

            .navbar-mobile {
                display: block !important;
            }
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="site-header">

        <!-- DESKTOP NAVBAR -->
        <div class="navbar-desktop" style="display:none;">
            <a href="<?php echo home_url(); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asca.jpeg" alt="ASCA Logo"
                    class="navbar-logo">
                <div class="navbar-brand-text">
                    <div class="navbar-name">
                        <span class="asca">ASCA</span>
                        <span class="luxembourg">Luxembourg</span>
                    </div>
                    <div class="navbar-separator"></div>
                    <span class="navbar-tagline"><?php echo _t('nav.tagline'); ?></span>
                </div>
            </a>

            <ul class="navbar-links">
                <li><a href="<?php echo home_url('/about'); ?>"><?php echo _t('nav.about'); ?></a></li>
                <li><a href="<?php echo home_url('/projects'); ?>"><?php echo _t('nav.projects'); ?></a></li>
                <li><a href="<?php echo home_url('/testimonials'); ?>"><?php echo _t('nav.testimonials'); ?></a></li>
                <li><a href="<?php echo home_url('/contact'); ?>"><?php echo _t('nav.contact'); ?></a></li>
            </ul>

            <div class="navbar-right">
                <?php
                $current_lang = ascal_get_lang();
                $langs = [
                    'en' => ['label' => 'EN', 'flag' => '🇬🇧'],
                    'fr' => ['label' => 'FR', 'flag' => '🇫🇷'],
                    'de' => ['label' => 'DE', 'flag' => '🇩🇪'],
                ];
                ?>

                <!-- Language Switcher -->
                <div class="lang-dropdown" id="lang-dropdown">

                    <!-- Button -->
                    <button class="lang-button" id="lang-toggle">
                        <span class="lang-flag">
                            <?php echo $langs[$current_lang]['flag']; ?>
                        </span>
                        <span class="lang-code">
                            <?php echo strtoupper($current_lang); ?>
                        </span>

                        <!-- Arrow -->
                        <span class="lang-arrow">&#9662;</span>
                    </button>

                    <!-- Dropdown -->
                    <div class="lang-menu" id="lang-menu">
                        <?php foreach ($langs as $code => $info): ?>
                            <a href="?lang=<?php echo $code; ?>"
                                class="lang-item <?php echo $current_lang === $code ? 'active' : ''; ?>">

                                <span class="lang-flag"><?php echo $info['flag']; ?></span>
                                <span><?php echo $info['label']; ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                </div>

                <a href="<?php echo home_url('/donate'); ?>" class="btn-donate">
                    <?php echo _t('nav.donate'); ?>
                </a>
            </div>
        </div>

        <!-- MOBILE NAVBAR -->
        <div class="navbar-mobile" style="display:none;">

            <!-- Top Row: Logo + Brand -->
            <div class="navbar-mobile-top">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asca.jpeg" alt="ASCA Logo"
                        class="navbar-mobile-logo">
                    <div class="navbar-mobile-brand">
                        <div class="navbar-mobile-name">
                            <span class="asca">ASCA</span>
                            <span class="luxembourg">Luxembourg</span>
                        </div>
                        <div class="navbar-mobile-separator"></div>
                        <span class="navbar-mobile-tagline"><?php echo _t('nav.tagline'); ?></span>
                    </div>
                </a>
            </div>

            <!-- Blue Bar: Donate (left) + Lang Switcher + Hamburger (right) -->
            <div class="navbar-mobile-bar">
                <a href="<?php echo home_url('/donate'); ?>" class="btn-donate">
                    <?php echo _t('nav.donate'); ?>
                </a>
                <div class="navbar-mobile-actions">

                    <!-- Language Switcher -->
                    <div class="lang-switcher lang-switcher--mobile">
                        <?php foreach ($langs as $code => $info): ?>
                            <a href="?lang=<?php echo $code; ?>"
                                class="lang-option <?php echo $current_lang === $code ? 'active' : ''; ?>">
                                <?php echo $info['label']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Hamburger -->
                    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>

            <!-- Mobile Dropdown Menu -->
            <div class="navbar-mobile-menu" id="mobile-menu">
                <a href="<?php echo home_url('/about'); ?>"><?php echo _t('nav.about'); ?></a>
                <a href="<?php echo home_url('/projects'); ?>"><?php echo _t('nav.projects'); ?></a>
                <a href="<?php echo home_url('/testimonials'); ?>"><?php echo _t('nav.testimonials'); ?></a>
                <a href="<?php echo home_url('/contact'); ?>"><?php echo _t('nav.contact'); ?></a>
                <a href="<?php echo home_url('/legal'); ?>"><?php echo _t('nav.legal'); ?></a>
            </div>
        </div>

    </header>