// main.js
console.log('Ascal theme loaded');

document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('open');
            mobileMenu.classList.toggle('open');
        });

        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.getElementById("lang-dropdown");
    const toggle = document.getElementById("lang-toggle");

    if (!dropdown || !toggle) return;

    toggle.addEventListener("click", function (e) {
        e.stopPropagation();
        dropdown.classList.toggle("open");
    });

    document.addEventListener("click", function () {
        dropdown.classList.remove("open");
    });
});

// FAQ toggle
function toggleFaq(index) {
    const answer = document.getElementById('faq-answer-' + index);
    const icon = document.getElementById('faq-icon-' + index);
    const isOpen = answer.classList.contains('open');

    // Close all
    document.querySelectorAll('.faq-answer').forEach(el => el.classList.remove('open'));
    document.querySelectorAll('.faq-icon').forEach(el => el.textContent = '+');

    // Open clicked if it was closed
    if (!isOpen) {
        answer.classList.add('open');
        icon.textContent = '-';
    }
}

// Open first by default
document.addEventListener('DOMContentLoaded', function () {
    toggleFaq(0);
});

// Our Response accordion
function toggleResponse(index) {
    const answer = document.getElementById('response-answer-' + index);
    const icon = document.getElementById('response-icon-' + index);
    const isOpen = answer.classList.contains('open');

    // Close all
    document.querySelectorAll('.response-answer').forEach(el => el.classList.remove('open'));
    document.querySelectorAll('.response-icon').forEach(el => el.textContent = '+');

    // Open clicked if it was closed
    if (!isOpen) {
        answer.classList.add('open');
        icon.textContent = '−';
    }
}

// Open first by default
document.addEventListener('DOMContentLoaded', function () {
    toggleResponse(0);
});

function copyToClipboard(text, btn) {
    navigator.clipboard.writeText(text).then(function () {
        const original = btn.textContent;
        btn.textContent = 'Copied!';
        setTimeout(function () {
            btn.textContent = original;
        }, 2000);
    });
}

// Contact form — UI only, WPMailer wired up later
const contactForm = document.getElementById('contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const btn = document.getElementById('contact-submit');
        const success = document.getElementById('contact-success');
        const error = document.getElementById('contact-error');

        // Reset state
        success.style.display = 'none';
        error.style.display = 'none';
        btn.textContent = 'Sending...';
        btn.disabled = true;

        // Placeholder — replace with wp_ajax call later
        setTimeout(function () {
            btn.textContent = 'Send Message';
            btn.disabled = false;
            // Simulate success for now
            success.style.display = 'block';
            contactForm.reset();
        }, 1000);
    });
}

// ───── Donate Page ─────
document.addEventListener('DOMContentLoaded', function () {

    // Tab switching
    const tabs = document.querySelectorAll('.donate-tab');
    const tabContents = document.querySelectorAll('.donate-tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('tab-' + this.dataset.tab).classList.add('active');
        });
    });

    // Type toggle (one-time / monthly)
    const typeButtons = document.querySelectorAll('.donate-type-btn');
    let selectedType = 'one_time';

    typeButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            typeButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            selectedType = this.dataset.type;
        });
    });

    // Amount picker
    const amountButtons = document.querySelectorAll('.donate-amount-btn');
    const customInput = document.getElementById('custom-amount');
    let selectedAmount = 50;

    amountButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            amountButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            selectedAmount = parseInt(this.dataset.amount);
            if (customInput) customInput.value = '';
        });
    });

    if (customInput) {
        customInput.addEventListener('input', function () {
            amountButtons.forEach(b => b.classList.remove('active'));
            selectedAmount = parseInt(this.value) || 0;
        });
    }

    // Submit
    const submitBtn = document.getElementById('donate-submit');
    if (submitBtn) {
        submitBtn.addEventListener('click', async function () {
            if (selectedAmount <= 0) {
                alert('Please enter a valid amount.');
                return;
            }

            submitBtn.disabled = true;
            submitBtn.textContent = '...';

            const formData = new FormData();
            formData.append('action', 'create_stripe_session');
            formData.append('amount', selectedAmount);
            formData.append('type', selectedType);

            try {
                const response = await fetch(ascalData.ajaxUrl, {
                    method: 'POST',
                    body: formData,
                });

                const data = await response.json();

                if (data.url) {
                    window.location.href = data.url;
                } else {
                    alert('Something went wrong. Please try again.');
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Donate Now';
                }
            } catch (err) {
                alert('Something went wrong. Please try again.');
                submitBtn.disabled = false;
                submitBtn.textContent = 'Donate Now';
            }
        });
    }
});

