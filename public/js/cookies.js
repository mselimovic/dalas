
const Consent = {
  name: 'cookie_consent',
  get() {
    return document.cookie.split(';').map(v => v.trim())
      .find(v => v.startsWith(this.name+'='))?.split('=')[1] || null;
  },
  hasTrue() { return this.get() === 'true'; },
  set(val) {
    const d = new Date();
    d.setMonth(d.getMonth() + 6);
    const secure = (location.protocol === 'https:') ? ';secure' : '';
    document.cookie = `${this.name}=${val};expires=${d.toUTCString()};path=/;samesite=lax${secure}`;
  }
};

function onReady(fn){
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', fn);
  } else {
    fn();
  }
}

function loadAnalytics() {
  if (!window.APP || !window.APP.gaId) return;
  if (document.querySelector('script[src*="googletagmanager.com/gtag/js"]')) return;

  const s = document.createElement('script');
  s.async = true;
  s.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(window.APP.gaId);
  document.head.appendChild(s);

  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }
  window.gtag = window.gtag || gtag;

  gtag('js', new Date());
  gtag('config', window.APP.gaId);
}

let recaptchaReady = null;
function loadRecaptcha() {
  if (!document.getElementById('requestForm')) return;              
  if (!window.APP || !window.APP.recaptchaSiteKey) return;
  if (typeof grecaptcha !== 'undefined') {                          
    if (!recaptchaReady) {
      recaptchaReady = new Promise(resolve => grecaptcha.ready(() => resolve(true)));
    }
    return;
  }
  if (document.querySelector('script[src*="google.com/recaptcha/api.js"]')) return;

  recaptchaReady = new Promise(resolve => {
    const s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.google.com/recaptcha/api.js?render=' + encodeURIComponent(window.APP.recaptchaSiteKey);
    s.onload = function(){
      if (typeof grecaptcha !== 'undefined') {
        grecaptcha.ready(() => resolve(true));
      }
    };
    s.onerror = function(){ resolve(false); };
    document.head.appendChild(s);
  });
}


function initCookieBanner(){
  const banner   = document.getElementById('cookie-banner');
  const acceptEl = document.getElementById('cookie-accept');
  const rejectEl = document.getElementById('cookie-reject');


  if (Consent.hasTrue()) {
    loadAnalytics();
    loadRecaptcha();
  }

  if (!banner) return; 

  const setConsent = (value) => {
    Consent.set(value);
    banner.remove();
    if (value === 'true') {
      loadAnalytics();
      loadRecaptcha();
    }
  };


  if (acceptEl) acceptEl.addEventListener('click', e => { e.preventDefault(); setConsent('true'); });
  if (rejectEl) rejectEl.addEventListener('click', e => { e.preventDefault(); setConsent('false'); });


  document.addEventListener('click', function(ev){
    const t = ev.target;
    if (!t) return;
    if (t.id === 'cookie-accept') { ev.preventDefault(); setConsent('true'); }
    if (t.id === 'cookie-reject') { ev.preventDefault(); setConsent('false'); }
  }, { capture: true });
}


function initContactForm() {
  const form   = document.getElementById('requestForm');
  if (!form) return;

  const tokenI = document.getElementById('recaptcha_token');
  const hint   = document.getElementById('consentHint');

  form.addEventListener('submit', function(e){

    if (!Consent.hasTrue()) {
      e.preventDefault();
      if (hint) hint.classList.remove('d-none');
      return;
    }


    loadRecaptcha();


    e.preventDefault();
    (recaptchaReady || Promise.resolve(false)).then(function(ok){
      if (!ok || typeof grecaptcha === 'undefined') {
        if (hint) {
          hint.textContent = 'reCAPTCHA konnte nicht geladen werden. Bitte Seite neu laden.';
          hint.classList.remove('d-none');
        }
        return;
      }
      grecaptcha.execute(window.APP.recaptchaSiteKey, { action: 'contact' })
        .then(function(token){
          tokenI.value = token;
          form.submit();
        })
        .catch(function(){
          if (hint) {
            hint.textContent = 'reCAPTCHA fehlgeschlagen. Bitte versuchen Sie es erneut.';
            hint.classList.remove('d-none');
          }
        });
    });
  });
}


onReady(function(){
  initCookieBanner();
  initContactForm();
});


window.addEventListener('pageshow', function(){ 
  if (Consent.hasTrue()) { loadAnalytics(); loadRecaptcha(); }
});

