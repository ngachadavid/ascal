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
    <!-- Mission Section -->
    <section class="mission">
        <div class="mission-container">

            <!-- Text - Left -->
            <div class="mission-text">
                <h2 class="mission-line">
                    <?php echo _t('mission.line1'); ?>
                    <span class="mission-bold"><?php echo _t('mission.line1Bold'); ?></span>
                    <?php echo _t('mission.line1Rest'); ?>
                </h2>
                <h2 class="mission-line">
                    <?php echo _t('mission.line2'); ?>
                </h2>
            </div>

            <!-- Image - Right -->
            <div class="mission-image-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carlo.avif"
                    alt="ASCA Story - Inspired by Carlo Acutis" class="mission-image" />
            </div>

        </div>
    </section>
    <!-- Impact Section -->
    <section class="impact">
        <div class="impact-header">
            <h2 class="impact-title"><?php echo _t('impact.title'); ?></h2>
        </div>

        <div class="impact-grid">

            <!-- Education -->
            <div class="impact-card-wrap">
                <div class="impact-card impact-card--blue-200">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/impact.webp"
                        alt="<?php echo _t('impact.education.title'); ?>" class="impact-card-img" />
                    <h3 class="impact-card-title"><?php echo _t('impact.education.title'); ?></h3>
                    <p class="impact-card-desc"><?php echo _t('impact.education.description'); ?></p>
                </div>
            </div>

            <!-- Dropout -->
            <div class="impact-card-wrap">
                <div class="impact-card impact-card--blue-300">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/impact1.webp"
                        alt="<?php echo _t('impact.dropout.title'); ?>" class="impact-card-img" />
                    <h3 class="impact-card-title"><?php echo _t('impact.dropout.title'); ?></h3>
                    <p class="impact-card-desc"><?php echo _t('impact.dropout.description'); ?></p>
                </div>
            </div>

            <!-- Inclusion -->
            <div class="impact-card-wrap">
                <div class="impact-card impact-card--blue-400">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asc.webp"
                        alt="<?php echo _t('impact.inclusion.title'); ?>" class="impact-card-img" />
                    <h3 class="impact-card-title"><?php echo _t('impact.inclusion.title'); ?></h3>
                    <p class="impact-card-desc"><?php echo _t('impact.inclusion.description'); ?></p>
                </div>
            </div>

            <!-- Nutrition -->
            <div class="impact-card-wrap">
                <div class="impact-card impact-card--blue-500">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asca.jpg"
                        alt="<?php echo _t('impact.nutrition.title'); ?>" class="impact-card-img" />
                    <h3 class="impact-card-title"><?php echo _t('impact.nutrition.title'); ?></h3>
                    <p class="impact-card-desc"><?php echo _t('impact.nutrition.description'); ?></p>
                </div>
            </div>

        </div>
    </section>
    <!-- FAQ Section -->
    <section class="faq">
        <div class="faq-container">
            <h2 class="faq-title"><?php echo _t('faq.title'); ?></h2>

            <div class="faq-list">
                <?php
                $faqs = [
                    [
                        'question' => _t('faq.questions.0.question'),
                        'answer' => _t('faq.questions.0.answer'),
                    ],
                    [
                        'question' => _t('faq.questions.1.question'),
                        'answer' => _t('faq.questions.1.answer'),
                    ],
                    [
                        'question' => _t('faq.questions.2.question'),
                        'answer' => _t('faq.questions.2.answer'),
                    ],
                    [
                        'question' => _t('faq.questions.3.question'),
                        'answer' => _t('faq.questions.3.answer'),
                    ],
                ];

                foreach ($faqs as $index => $faq): ?>
                    <div class="faq-item" id="faq-<?php echo $index; ?>">
                        <button class="faq-question" onclick="toggleFaq(<?php echo $index; ?>)">
                            <span><?php echo $faq['question']; ?></span>
                            <span class="faq-icon" id="faq-icon-<?php echo $index; ?>">+</span>
                        </button>
                        <div class="faq-answer" id="faq-answer-<?php echo $index; ?>">
                            <p><?php echo $faq['answer']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>