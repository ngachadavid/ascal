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

    <!-- History Section -->
    <section class="history">
        <div class="history-container">

            <!-- Text - Left -->
            <div class="history-text">
                <h2 class="history-title"><?php echo _t('history.title'); ?></h2>
                <p class="history-body"><?php echo nl2br(_t('history.text')); ?></p>
            </div>

            <!-- Image - Right -->
            <div class="history-image-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/class.webp"
                    alt="ASCA Story - Inspired by Carlo Acutis" class="history-image" />
            </div>

        </div>
    </section>

    <!-- The Challenge -->
<section class="challenge">
    <div class="challenge-container">

        <!-- Left: Title + Intro -->
        <div class="challenge-left">
            <h2 class="challenge-title"><?php echo _t('theChallenge.title'); ?></h2>
            <p class="challenge-intro"><?php echo _t('theChallenge.intro'); ?></p>
        </div>

        <!-- Right: Paragraphs -->
        <div class="challenge-right">
            <p><?php echo _t('theChallenge.paragraphs.p1'); ?></p>
            <p><?php echo _t('theChallenge.paragraphs.p2'); ?></p>
            <p><?php echo _t('theChallenge.paragraphs.p3'); ?></p>
            <p><?php echo _t('theChallenge.paragraphs.p4'); ?></p>
        </div>

    </div>
</section>

</main>

<?php get_footer(); ?>