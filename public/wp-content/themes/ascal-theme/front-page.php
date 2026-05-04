<?php get_header(); ?>

<main id="main-content">
    <!-- Hero -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo _t('hero.title'); ?></h1>
            <h2 class="hero-subtitle"><?php echo _t('hero.subtitle'); ?></h2>
            <a href="<?php echo home_url('/about'); ?>" class="btn-donate">
                <?php echo _t('hero.cta'); ?>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>