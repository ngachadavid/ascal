document.addEventListener('languageChanged', function () {
  document.querySelectorAll('.t').forEach(function (el) {
    const key = el.getAttribute('data-key');
    if (key) el.textContent = t(key);
  });
});