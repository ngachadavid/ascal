<?php
/* Template Name: Donate Page */
get_header();
?>

<main id="main-content">

    <!-- Donate Tabs -->
    <section class="donate-section">
        <div class="donate-container">

            <div class="donate-header">
                <h2 class="donate-title"><?php echo _t('donate.title'); ?></h2>
                <p class="donate-subtitle"><?php echo _t('donate.subtitle'); ?></p>
            </div>

            <!-- Tabs -->
            <div class="donate-tabs">
                <button class="donate-tab active" data-tab="card">
                    💳 <?php echo _t('donate.tabs.card'); ?>
                </button>
                <button class="donate-tab" data-tab="bank">
                    🏦 <?php echo _t('donate.tabs.bank'); ?>
                </button>
            </div>

            <!-- Card Tab -->
            <div class="donate-tab-content active" id="tab-card">

                <!-- One-time / Monthly toggle -->
                <div class="donate-type-toggle">
                    <button class="donate-type-btn active" data-type="one_time">
                        <?php echo _t('donate.oneTime'); ?>
                    </button>
                    <button class="donate-type-btn" data-type="monthly">
                        <?php echo _t('donate.monthly'); ?>
                    </button>
                </div>

                <!-- Amount Picker -->
                <div class="donate-amounts">
                    <button class="donate-amount-btn" data-amount="10">€10</button>
                    <button class="donate-amount-btn" data-amount="25">€25</button>
                    <button class="donate-amount-btn active" data-amount="50">€50</button>
                    <button class="donate-amount-btn" data-amount="100">€100</button>
                </div>

                <!-- Custom Amount -->
                <div class="donate-custom">
                    <label class="donate-custom-label"><?php echo _t('donate.customAmount'); ?></label>
                    <div class="donate-custom-input-wrap">
                        <span class="donate-currency">€</span>
                        <input type="number" id="custom-amount" class="donate-custom-input" min="1" placeholder="0">
                    </div>
                </div>

                <!-- Submit -->
                <button class="donate-submit-btn" id="donate-submit">
                    <?php echo _t('donate.button'); ?>
                </button>

                <p class="donate-secure">🔒 <?php echo _t('donate.secure'); ?></p>

            </div>

            <!-- Bank Tab -->
            <div class="donate-tab-content" id="tab-bank">
                <div class="bank-details-card">

                    <div class="bank-field">
                        <h3 class="bank-field-label"><?php echo _t('bankDetails.accountHolder'); ?></h3>
                        <p class="bank-field-value bank-field-value--bold">Appui Scolaire Carlo Acutis Luxembourg</p>
                    </div>

                    <div class="bank-field">
                        <h3 class="bank-field-label"><?php echo _t('bankDetails.iban'); ?></h3>
                        <div class="bank-copy-row">
                            <p class="bank-mono">LU04 0022 0000 0131 0987</p>
                            <button class="bank-copy-btn" onclick="copyToClipboard('LU04 0022 0000 0131 0987', this)">
                                <?php echo _t('bankDetails.copy'); ?>
                            </button>
                        </div>
                    </div>

                    <div class="bank-field">
                        <h3 class="bank-field-label"><?php echo _t('bankDetails.bic'); ?></h3>
                        <div class="bank-copy-row">
                            <p class="bank-mono">BILLLULL</p>
                            <button class="bank-copy-btn" onclick="copyToClipboard('BILLLULL', this)">
                                <?php echo _t('bankDetails.copy'); ?>
                            </button>
                        </div>
                    </div>

                    <div class="bank-field">
                        <h3 class="bank-field-label"><?php echo _t('bankDetails.bankName'); ?></h3>
                        <p class="bank-field-value">Banque Internationale à Luxembourg (BIL)</p>
                    </div>

                    <div class="bank-field">
                        <h3 class="bank-field-label"><?php echo _t('bankDetails.address'); ?></h3>
                        <p class="bank-field-value">
                            21, Bënzelter Wee<br>
                            L - 9742 Boxhorn<br>
                            Commune: Wincrange<br>
                            Luxembourg
                        </p>
                    </div>

                    <div class="bank-note">
                        <p><?php echo _t('bankDetails.note'); ?></p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Donate Mission -->
    <section class="donate-mission">
        <div class="donate-mission-container">
            <div class="donate-mission-text">
                <h2 class="donate-mission-line"><?php echo _t('donateMissionSection.paragraphs.p1'); ?></h2>
                <h2 class="donate-mission-line"><?php echo _t('donateMissionSection.paragraphs.p2'); ?></h2>
            </div>
            <div class="donate-mission-image-wrap">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/ker.webp"
                    alt="Support children through ASCA Luxembourg"
                    class="donate-mission-image" />
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>