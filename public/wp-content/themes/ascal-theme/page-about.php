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

    <!-- Our Response -->
    <section class="response">
        <div class="response-container">

            <!-- Left: Title + Intro -->
            <div class="response-left">
                <h2 class="response-title"><?php echo _t('ourResponse.title'); ?></h2>
                <p class="response-intro"><?php echo _t('ourResponse.intro'); ?></p>
            </div>

            <!-- Right: Accordion -->
            <div class="response-accordion">
                <?php
                $items = [
                    [
                        'title' => _t('ourResponse.items.0.title'),
                        'content' => _t('ourResponse.items.0.content'),
                    ],
                    [
                        'title' => _t('ourResponse.items.1.title'),
                        'content' => _t('ourResponse.items.1.content'),
                    ],
                    [
                        'title' => _t('ourResponse.items.2.title'),
                        'content' => _t('ourResponse.items.2.content'),
                    ],
                    [
                        'title' => _t('ourResponse.items.3.title'),
                        'content' => _t('ourResponse.items.3.content'),
                    ],
                ];

                foreach ($items as $index => $item): ?>
                    <div class="response-item" id="response-<?php echo $index; ?>">
                        <button class="response-question" onclick="toggleResponse(<?php echo $index; ?>)">
                            <span><?php echo $item['title']; ?></span>
                            <span class="response-icon" id="response-icon-<?php echo $index; ?>">+</span>
                        </button>
                        <div class="response-answer" id="response-answer-<?php echo $index; ?>">
                            <p><?php echo $item['content']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Donate CTA -->
    <section class="donate-cta">
        <div class="donate-cta-container">
            <div class="donate-cta-box">
                <h2 class="donate-cta-title"><?php echo _t('donateCTA.title'); ?></h2>
                <p class="donate-cta-desc"><?php echo _t('donateCTA.description'); ?></p>
                <p class="donate-cta-inquiry"><?php echo _t('donateCTA.inquiry'); ?></p>
                <a href="<?php echo home_url('/donate'); ?>" class="btn-donate btn-donate--white">
                    <?php echo _t('donateCTA.button'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="values">
        <div class="values-header">
            <h2 class="values-title"><?php echo _t('ourValues.title'); ?></h2>
            <p class="values-intro"><?php echo _t('ourValues.intro'); ?></p>
        </div>

        <div class="values-grid">

            <div class="values-card-wrap">
                <div class="values-card values-card--blue-200">
                    <h3 class="values-card-title"><?php echo _t('ourValues.cards.0.title'); ?></h3>
                    <p class="values-card-desc"><?php echo _t('ourValues.cards.0.description'); ?></p>
                </div>
            </div>

            <div class="values-card-wrap">
                <div class="values-card values-card--blue-300">
                    <h3 class="values-card-title"><?php echo _t('ourValues.cards.1.title'); ?></h3>
                    <p class="values-card-desc"><?php echo _t('ourValues.cards.1.description'); ?></p>
                </div>
            </div>

            <div class="values-card-wrap">
                <div class="values-card values-card--blue-400">
                    <h3 class="values-card-title"><?php echo _t('ourValues.cards.2.title'); ?></h3>
                    <p class="values-card-desc"><?php echo _t('ourValues.cards.2.description'); ?></p>
                </div>
            </div>

            <div class="values-card-wrap">
                <div class="values-card values-card--blue-500">
                    <h3 class="values-card-title"><?php echo _t('ourValues.cards.3.title'); ?></h3>
                    <p class="values-card-desc"><?php echo _t('ourValues.cards.3.description'); ?></p>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>