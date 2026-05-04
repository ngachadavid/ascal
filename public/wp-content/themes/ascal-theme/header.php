<?php get_header(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="site-header">

  <!-- DESKTOP NAVBAR -->
  <div class="navbar-desktop">
    <!-- Left: Logo + Brand -->
    <a href="<?php echo home_url(); ?>" class="navbar-brand">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asca.jpeg" alt="ASCA Logo" class="navbar-logo">
      <div class="navbar-brand-text">
        <div class="navbar-name">
          <span class="asca">ASCA</span>
          <span class="luxembourg">Luxembourg</span>
        </div>
        <div class="navbar-separator"></div>
        <span class="navbar-tagline t" data-key="nav.tagline"></span>
      </div>
    </a>

    <!-- Middle: Nav Links -->
    <ul class="navbar-links">
      <li><a href="<?php echo home_url('/about'); ?>" class="t" data-key="nav.about"></a></li>
      <li><a href="<?php echo home_url('/projects'); ?>" class="t" data-key="nav.projects"></a></li>
      <li><a href="<?php echo home_url('/testimonials'); ?>" class="t" data-key="nav.testimonials"></a></li>
      <li><a href="<?php echo home_url('/contact'); ?>" class="t" data-key="nav.contact"></a></li>
    </ul>

    <!-- Right: Language Switcher + Donate -->
    <div class="navbar-right">
      <div class="language-switcher">
        <button data-lang="en" onclick="setLocale('en')">EN</button>
        <button data-lang="fr" onclick="setLocale('fr')">FR</button>
        <button data-lang="de" onclick="setLocale('de')">DE</button>
      </div>
      <a href="<?php echo home_url('/donate'); ?>" class="btn-donate t" data-key="nav.donate"></a>
    </div>
  </div>

  <!-- MOBILE NAVBAR -->
  <div class="navbar-mobile">
    <!-- Top row: Logo + Brand -->
    <div class="navbar-mobile-top">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asca.jpeg" alt="ASCA Logo" class="navbar-mobile-logo">
        <div class="navbar-mobile-brand">
          <div class="navbar-mobile-name">
            <span class="asca">ASCA</span>
            <span class="luxembourg">Luxembourg</span>
          </div>
          <div class="navbar-mobile-separator"></div>
          <span class="navbar-mobile-tagline t" data-key="nav.tagline"></span>
        </div>
      </a>
    </div>

    <!-- Blue bar: Donate + Language + Hamburger -->
    <div class="navbar-mobile-bar">
      <a href="<?php echo home_url('/donate'); ?>" class="btn-donate t" data-key="nav.donate"></a>
      <div class="navbar-mobile-actions">
        <div class="language-switcher">
          <button data-lang="en" onclick="setLocale('en')">EN</button>
          <button data-lang="fr" onclick="setLocale('fr')">FR</button>
          <button data-lang="de" onclick="setLocale('de')">DE</button>
        </div>
        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>

    <!-- Mobile Dropdown -->
    <div class="navbar-mobile-menu" id="mobile-menu">
      <a href="<?php echo home_url('/about'); ?>" class="t" data-key="nav.about"></a>
      <a href="<?php echo home_url('/projects'); ?>" class="t" data-key="nav.projects"></a>
      <a href="<?php echo home_url('/testimonials'); ?>" class="t" data-key="nav.testimonials"></a>
      <a href="<?php echo home_url('/contact'); ?>" class="t" data-key="nav.contact"></a>
      <a href="<?php echo home_url('/legal'); ?>" class="t" data-key="nav.legal"></a>
    </div>
  </div>

</header>