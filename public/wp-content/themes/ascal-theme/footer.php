<footer class="site-footer">
    <div class="footer-grid">

        <!-- Column 1: Organization -->
        <div class="footer-col">
            <h3 class="footer-heading"><?php echo _t('footer.organization'); ?></h3>
            <p class="footer-text"><?php echo nl2br(_t('footer.organizationDetails')); ?></p>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-col">
            <h4 class="footer-heading"><?php echo _t('footer.quickLinks'); ?></h4>
            <ul class="footer-links">
                <li><a href="<?php echo home_url('/'); ?>"><?php echo _t('footer.links.home'); ?></a></li>
                <li><a href="<?php echo home_url('/about'); ?>"><?php echo _t('footer.links.about'); ?></a></li>
                <li><a href="<?php echo home_url('/projects'); ?>"><?php echo _t('footer.links.projects'); ?></a></li>
                <li><a href="<?php echo home_url('/testimonials'); ?>"><?php echo _t('footer.links.testimonials'); ?></a></li>
                <li><a href="<?php echo home_url('/donate'); ?>"><?php echo _t('footer.links.donate'); ?></a></li>
            </ul>
        </div>

        <!-- Column 3: Address -->
        <div class="footer-col">
            <h4 class="footer-heading"><?php echo _t('footer.addressTitle'); ?></h4>
            <p class="footer-text"><?php echo nl2br(_t('footer.addressDetails')); ?></p>
        </div>

        <!-- Column 4: Contact -->
        <div class="footer-col">
            <h4 class="footer-heading"><?php echo _t('footer.contactTitle'); ?></h4>
            <a href="mailto:info@ascal.eu" class="footer-contact-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                info@ascal.eu
            </a>
            <a href="mailto:ascalux.org@gmail.com" class="footer-contact-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                ascalux.org@gmail.com
            </a>
            <!-- <a href="tel:+4917634028033" class="footer-contact-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.56 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +49 176 340 28033
            </a> -->
        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <span><?php echo _t('footer.bottomText'); ?></span>
        <a href="<?php echo home_url('/legal'); ?>" class="footer-legal">
            <?php echo _t('footer.links.legal'); ?>
        </a>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>