
document.addEventListener("DOMContentLoaded", function () {
    const acceptBtn = document.getElementById("cookie-accept");
    const rejectBtn = document.getElementById("cookie-reject");
    

    function setConsent(value) {
        // store for 6 months
        let d = new Date();
        d.setMonth(d.getMonth() + 6);
        document.cookie = "cookie_consent=" + value + ";expires=" + d.toUTCString() + ";path=/";
        document.getElementById("cookie-banner").remove();
        if (value === "true") {
            loadAnalytics();
            loadRecaptcha();
        }
    }

    if (acceptBtn) acceptBtn.addEventListener("click", () => setConsent("true"));
    if (rejectBtn) rejectBtn.addEventListener("click", () => setConsent("false"));

    // auto-load if already accepted
    if (document.cookie.includes("cookie_consent=true")) {
        loadAnalytics();
        loadRecaptcha();
    }
});

function loadAnalytics() {
    // Example GA4 integration
    let s = document.createElement("script");
    s.async = true;
    s.src = "https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX"; // replace with your ID
    document.head.appendChild(s);

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag("js", new Date());
    gtag("config", "G-XXXXXXX");
}

function loadRecaptcha() {
    let s = document.createElement("script");
    s.src = "https://www.google.com/recaptcha/api.js";
    document.head.appendChild(s);
}

