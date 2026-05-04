<?php
/* Template Name: Legal Page */
get_header();
?>

<main id="main-content">

    <!-- Legal Section -->
    <section class="legal">
        <div class="legal-container">

            <!-- Header -->
            <div class="legal-header">
                <h2 class="legal-title"><?php echo _t('legal.title'); ?></h2>
                <p class="legal-updated"><?php echo _t('legal.lastUpdated'); ?></p>
            </div>

            <!-- Owner -->
            <div class="legal-block">
                <h3 class="legal-heading"><?php echo _t('legal.ownerTitle'); ?></h3>
                <p class="legal-text">
                    <?php echo nl2br(_t('legal.ownerDetails')); ?>
                    <br><br>
                    Email: <a href="mailto:<?php echo _t('legal.ownerEmail'); ?>" class="legal-link"><?php echo _t('legal.ownerEmail'); ?></a><br>
                    Phone: +49 176 340 28033
                </p>
            </div>

            <!-- Legal Representatives -->
            <div class="legal-block">
                <h3 class="legal-heading"><?php echo _t('legal.representativesTitle'); ?></h3>
                <p class="legal-text"><?php echo _t('legal.representativesDetails'); ?></p>
            </div>

            <!-- General -->
            <div class="legal-block">
                <h3 class="legal-heading"><?php echo _t('legal.generalTitle'); ?></h3>
                <p class="legal-text"><?php echo _t('legal.generalText'); ?></p>
                <p class="legal-text"><?php echo _t('legal.disputeText'); ?></p>
            </div>

        </div>
    </section>

    <!-- Contact Form -->
    <?php get_template_part('template-parts/contact-form'); ?>

</main>

<?php get_footer(); ?>