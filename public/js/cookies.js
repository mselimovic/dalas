
document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const acceptBtn = document.getElementById("cookie-accept");
    const rejectBtn = document.getElementById("cookie-reject");

    function setConsent(value) {
        // store for 6 months
        const d = new Date();
        d.setMonth(d.getMonth() + 6);
        const secure = (location.protocol === 'https:') ? ';secure' : '';
        document.cookie = "cookie_consent=" + value + ";expires=" + d.toUTCString() + ";path=/;samesite=lax" + secure;

        if (banner) banner.remove(); // or banner.classList.add('d-none');
        if (value === "true") {
            loadAnalytics();
            loadRecaptcha();
        }
    }

    if (acceptBtn) acceptBtn.addEventListener("click", (e) => { e.preventDefault(); setConsent("true"); });
    if (rejectBtn) rejectBtn.addEventListener("click", (e) => { e.preventDefault(); setConsent("false"); });

    // auto-load if already accepted
    if (document.cookie.includes("cookie_consent=true")) {
        loadAnalytics();
        loadRecaptcha();
    }
});

function loadAnalytics() {
  if (!window.APP || !window.APP.gaId) return;
  if (document.querySelector('script[src*="googletagmanager.com/gtag/js"]')) return;

  var s = document.createElement("script");
  s.async = true;
  s.src = "https://www.googletagmanager.com/gtag/js?id=" + encodeURIComponent(window.APP.gaId);
  document.head.appendChild(s);

  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }
  window.gtag = window.gtag || gtag;

  gtag('js', new Date());
  gtag('config', window.APP.gaId);
}

function loadRecaptcha() {
  if (!window.APP || !window.APP.recaptchaSiteKey) return;
  if (document.querySelector('script[src*="google.com/recaptcha/api.js"]')) return; // avoid duplicates
  let s = document.createElement("script");
  s.src = "https://www.google.com/recaptcha/api.js?render=" + encodeURIComponent(window.APP.recaptchaSiteKey);
  document.head.appendChild(s);
}

