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

