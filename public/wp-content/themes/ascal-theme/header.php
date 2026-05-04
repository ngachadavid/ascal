<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @media (min-width: 1024px) {
            .navbar-desktop { display: flex !important; }
            .navbar-mobile { display: none !important; }
        }
        @media (max-width: 1023px) {
            .navbar-desktop { display: none !important; }
            .navbar-mobile { display: block !important; }
        }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="site-header">

    <!-- DESKTOP NAVBAR -->
    <div class="navbar-desktop" style="display:none;">
        <a href="<?php echo home_url(); ?>" class="navbar-brand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asca.jpeg" alt="ASCA Logo" class="navbar-logo">
            <div class="navbar-brand-text">
                <div class="navbar-name">
                    <span class="asca">ASCA</span>
                    <span class="luxembourg">Luxembourg</span>
                </div>
                <div class="navbar-separator"></div>
                <span class="navbar-tagline">Save the Child for a Better World</span>
            </div>
        </a>

        <ul class="navbar-links">
            <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('/projects'); ?>">Projects</a></li>
            <li><a href="<?php echo home_url('/testimonials'); ?>">Testimonials</a></li>
            <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        </ul>

        <div class="navbar-right">
            <a href="<?php echo home_url('/donate'); ?>" class="btn-donate">Donate</a>
        </div>
    </div>

    <!-- MOBILE NAVBAR -->
    <div class="navbar-mobile" style="display:none;">
        <div class="navbar-mobile-top">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asca.jpeg" alt="ASCA Logo" class="navbar-mobile-logo">
                <div class="navbar-mobile-brand">
                    <div class="navbar-mobile-name">
                        <span class="asca">ASCA</span>
                        <span class="luxembourg">Luxembourg</span>
                    </div>
                    <div class="navbar-mobile-separator"></div>
                    <span class="navbar-mobile-tagline">Save the Child for a Better World</span>
                </div>
            </a>
        </div>

        <div class="navbar-mobile-bar">
            <a href="<?php echo home_url('/donate'); ?>" class="btn-donate">Donate</a>
            <div class="navbar-mobile-actions">
                <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="navbar-mobile-menu" id="mobile-menu">
            <a href="<?php echo home_url('/about'); ?>">About</a>
            <a href="<?php echo home_url('/projects'); ?>">Projects</a>
            <a href="<?php echo home_url('/testimonials'); ?>">Testimonials</a>
            <a href="<?php echo home_url('/contact'); ?>">Contact</a>
            <a href="<?php echo home_url('/legal'); ?>">Legal Notice</a>
        </div>
    </div>

</header>