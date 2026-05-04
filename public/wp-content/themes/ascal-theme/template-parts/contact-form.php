<section class="contact-form-section">
    <div class="contact-form-container">

        <div class="contact-form-header">
            <h2 class="contact-form-title"><?php echo _t('contact.title'); ?></h2>
            <p class="contact-form-subtitle"><?php echo _t('contact.subtitle'); ?></p>
        </div>

        <div class="contact-form-wrap">
            <div id="contact-success" class="contact-success" style="display:none;">
                Message sent successfully!
            </div>
            <div id="contact-error" class="contact-error" style="display:none;">
                Something went wrong. Please try again.
            </div>

            <form id="contact-form" class="contact-form" novalidate>

                <div class="contact-field">
                    <label for="name" class="contact-label"><?php echo _t('contact.form.name'); ?></label>
                    <input type="text" id="name" name="name" required class="contact-input" />
                </div>

                <div class="contact-field">
                    <label for="email" class="contact-label"><?php echo _t('contact.form.email'); ?></label>
                    <input type="email" id="email" name="email" required class="contact-input" />
                </div>

                <div class="contact-field">
                    <label for="subject" class="contact-label"><?php echo _t('contact.form.subject'); ?></label>
                    <input type="text" id="subject" name="subject" required class="contact-input" />
                </div>

                <div class="contact-field">
                    <label for="message" class="contact-label">
                        <?php echo _t('contact.form.message'); ?>
                        <span class="contact-optional"><?php echo _t('contact.form.optional'); ?></span>
                    </label>
                    <textarea id="message" name="message" rows="5" class="contact-textarea"></textarea>
                </div>

                <button type="submit" id="contact-submit" class="contact-submit">
                    <?php echo _t('contact.form.submit'); ?>
                </button>

            </form>
        </div>
    </div>
</section>