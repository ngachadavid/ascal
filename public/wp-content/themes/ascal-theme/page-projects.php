<?php
/* Template Name: Projects Page */
get_header();
?>

<main id="main-content">

    <!-- Projects Hero -->
    <section class="projects-hero">
        <div class="projects-hero-overlay"></div>
        <div class="projects-hero-content">
            <h1 class="projects-hero-title"><?php echo _t('projectsHero.title'); ?></h1>
            <a href="<?php echo home_url('/testimonials'); ?>" class="btn-donate">
                <?php echo _t('projectsHero.cta'); ?>
            </a>
        </div>
    </section>

    <!-- Projects List -->
    <section class="projects-list">
        <div class="projects-list-container">
            <?php
            $projects = [
                [
                    'title' => _t('projects.0.title'),
                    'description' => _t('projects.0.description'),
                    'images' => [
                        get_template_directory_uri() . '/assets/images/projects/kr.webp',
                        get_template_directory_uri() . '/assets/images/projects/kerrr.webp',
                    ],
                ],
                [
                    'title' => _t('projects.1.title'),
                    'description' => _t('projects.1.description'),
                    'images' => [
                        get_template_directory_uri() . '/assets/images/projects/kerr.webp',
                        get_template_directory_uri() . '/assets/images/projects/ker.webp',
                        get_template_directory_uri() . '/assets/images/projects/ke.webp',
                        get_template_directory_uri() . '/assets/images/projects/k.webp',
                    ],
                ],
            ];

            foreach ($projects as $project): ?>
                <div class="project-item">
                    <h2 class="project-title"><?php echo $project['title']; ?></h2>
                    <p class="project-desc"><?php echo $project['description']; ?></p>

                    <div class="project-images">
                        <?php foreach ($project['images'] as $i => $img): ?>
                            <div class="project-image-wrap">
                                <img src="<?php echo $img; ?>"
                                    alt="<?php echo $project['title']; ?> image <?php echo $i + 1; ?>" class="project-image" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta">
        <div class="contact-cta-container">

            <!-- Left: Box -->
            <div class="contact-cta-box">
                <div class="contact-cta-inner">
                    <h2 class="contact-cta-title"><?php echo _t('contactCTA.title'); ?></h2>
                    <p class="contact-cta-desc"><?php echo _t('contactCTA.description'); ?></p>
                    <a href="mailto:info@ascal.eu" class="contact-cta-btn">
                        <?php echo _t('contactCTA.button'); ?>
                    </a>
                </div>
            </div>

            <!-- Right: Image (hidden on mobile) -->
            <div class="contact-cta-image-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/impact4.jpg" alt="ASCA Community"
                    class="contact-cta-image" />
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>