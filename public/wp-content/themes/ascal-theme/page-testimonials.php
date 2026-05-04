<?php
/* Template Name: Testimonials Page */
get_header();
?>

<main id="main-content">

    <!-- Testimonials Hero -->
    <section class="testimonials-hero">
        <div class="testimonials-hero-overlay"></div>
        <div class="testimonials-hero-content">
            <h1 class="testimonials-hero-title"><?php echo _t('testimonialHero.title'); ?></h1>
            <a href="<?php echo home_url('/donate'); ?>" class="btn-donate">
                <?php echo _t('testimonialHero.cta'); ?>
            </a>
        </div>
    </section>

    <!-- Testimonial -->
<section class="testimonial">
    <div class="testimonial-container">
        <div class="testimonial-card">

            <h2 class="testimonial-title"><?php echo _t('testimonial.title'); ?></h2>
            <p class="testimonial-subtitle"><?php echo _t('testimonial.subtitle'); ?></p>

            <div class="testimonial-body">
                <p><?php echo _t('testimonial.paragraphs.p1'); ?></p>
                <p><?php echo _t('testimonial.paragraphs.p2'); ?></p>
                <p><?php echo _t('testimonial.paragraphs.p3'); ?></p>
                <p><?php echo _t('testimonial.paragraphs.p4'); ?></p>
                <p><?php echo _t('testimonial.paragraphs.p5'); ?></p>
                <p><?php echo _t('testimonial.paragraphs.p6'); ?></p>
                <p><?php echo _t('testimonial.paragraphs.p7'); ?></p>
                <p><?php echo _t('testimonial.paragraphs.p8'); ?></p>
            </div>

            <div class="testimonial-signature">
                <p><?php echo _t('testimonial.signature'); ?></p>
            </div>

        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>