<?php
/* Template Name: Thank You Page */
get_header();
?>

<main id="main-content">
    <section class="thankyou-section">
        <div class="thankyou-container">
            <div class="thankyou-icon">✓</div>
            <h1 class="thankyou-title"><?php echo _t('thankYou.title'); ?></h1>
            <p class="thankyou-message"><?php echo _t('thankYou.message'); ?></p>
            <a href="<?php echo home_url(); ?>" class="btn-donate">
                <?php echo _t('thankYou.button'); ?>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>