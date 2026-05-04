<?php get_header(); ?>

<main id="main-content">

    <!-- About Hero -->
    <section class="about-hero">
        <div class="about-hero-overlay"></div>
        <div class="about-hero-content">
            <h1 class="about-hero-title"><?php echo _t('aboutHero.title'); ?></h1>
            <a href="<?php echo home_url('/donate'); ?>" class="btn-donate">
                <?php echo _t('aboutHero.button'); ?>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>