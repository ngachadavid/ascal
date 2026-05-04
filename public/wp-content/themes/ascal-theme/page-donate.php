<?php
/* Template Name: Donate Page */
get_header();
?>

<main id="main-content">

    <!-- Bank Details -->
    <section class="bank-details">
        <div class="bank-details-container">

            <!-- Header -->
            <div class="bank-details-header">
                <h2 class="bank-details-title"><?php echo _t('bankDetails.title'); ?></h2>
                <p class="bank-details-subtitle"><?php echo _t('bankDetails.subtitle'); ?></p>
            </div>

            <!-- Card -->
            <div class="bank-details-card">

                <!-- Account Holder -->
                <div class="bank-field">
                    <h3 class="bank-field-label"><?php echo _t('bankDetails.accountHolder'); ?></h3>
                    <p class="bank-field-value bank-field-value--bold">Appui Scolaire Carlo Acutis Luxembourg</p>
                </div>

                <!-- IBAN -->
                <div class="bank-field">
                    <h3 class="bank-field-label"><?php echo _t('bankDetails.iban'); ?></h3>
                    <div class="bank-copy-row">
                        <p class="bank-mono">LU04 0022 0000 0131 0987</p>
                        <button class="bank-copy-btn" onclick="copyToClipboard('LU04 0022 0000 0131 0987', this)">
                            <?php echo _t('bankDetails.copy'); ?>
                        </button>
                    </div>
                </div>

                <!-- BIC -->
                <div class="bank-field">
                    <h3 class="bank-field-label"><?php echo _t('bankDetails.bic'); ?></h3>
                    <div class="bank-copy-row">
                        <p class="bank-mono">BILLLULL</p>
                        <button class="bank-copy-btn" onclick="copyToClipboard('BILLLULL', this)">
                            <?php echo _t('bankDetails.copy'); ?>
                        </button>
                    </div>
                </div>

                <!-- Bank Name -->
                <div class="bank-field">
                    <h3 class="bank-field-label"><?php echo _t('bankDetails.bankName'); ?></h3>
                    <p class="bank-field-value">Banque Internationale à Luxembourg (BIL)</p>
                </div>

                <!-- Address -->
                <div class="bank-field">
                    <h3 class="bank-field-label"><?php echo _t('bankDetails.address'); ?></h3>
                    <p class="bank-field-value">
                        21, Bënzelter Wee<br>
                        L - 9742 Boxhorn<br>
                        Commune: Wincrange<br>
                        Luxembourg
                    </p>
                </div>

                <!-- Note -->
                <div class="bank-note">
                    <p><?php echo _t('bankDetails.note'); ?></p>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>