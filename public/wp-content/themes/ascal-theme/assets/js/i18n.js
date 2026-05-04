(function () {
  // All translations loaded via wp_localize_script
  const translations = {
    en: ascalLang.en,
    fr: ascalLang.fr,
    de: ascalLang.de,
  };

  // Country to language mapping
  const countryToLanguage = {
    // French
    BE: 'fr', FR: 'fr', LU: 'fr', SN: 'fr',
    CI: 'fr', CM: 'fr', CD: 'fr', MG: 'fr',
    // German
    DE: 'de', AT: 'de', CH: 'de',
    // Default is English
  };

  // t() function — replicates your Next.js t('key.subkey')
  window.t = function (key) {
    const locale = window.ascalLocale || 'en';
    const keys = key.split('.');
    let value = translations[locale] || translations.en;
    for (const k of keys) {
      value = value?.[k];
    }
    return value || key;
  };

  // Set language and save to localStorage
  window.setLocale = function (lang) {
    window.ascalLocale = lang;
    localStorage.setItem('ascal_language', lang);
    document.dispatchEvent(new Event('languageChanged'));
  };

  // Get language — localStorage first, then geolocation, then default EN
  function initLanguage() {
    const saved = localStorage.getItem('ascal_language');
    if (saved && translations[saved]) {
      window.ascalLocale = saved;
      document.dispatchEvent(new Event('languageChanged'));
      return;
    }

    // No saved preference — detect via IP
    fetch('https://ipapi.co/json/')
      .then((res) => res.json())
      .then((data) => {
        const country = data.country_code;
        const lang = countryToLanguage[country] || 'en';
        window.ascalLocale = lang;
        localStorage.setItem('ascal_language', lang);
        document.dispatchEvent(new Event('languageChanged'));
      })
      .catch(() => {
        // Fallback to English if geolocation fails
        window.ascalLocale = 'en';
        document.dispatchEvent(new Event('languageChanged'));
      });
  }

  document.addEventListener('DOMContentLoaded', initLanguage);
})();