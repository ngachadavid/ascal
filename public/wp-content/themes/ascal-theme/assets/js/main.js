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

