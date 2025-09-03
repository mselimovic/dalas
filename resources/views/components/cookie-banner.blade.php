@if (!request()->cookies->has('cookie_consent'))
    <div id="cookie-banner" class="position-fixed bottom-0 start-0 end-0 bg-dark text-white p-3 shadow"
        style="z-index:1100;" role="region" aria-label="Cookie-Hinweis">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3">
            <p class="mb-2 mb-md-0">
                Wir verwenden Cookies, um unsere Website zu verbessern und um Google Analytics & reCAPTCHA nutzen zu
                können.
                Details finden Sie in unserer
                <a href="{{ route('policy') }}" class="text-primary">Datenschutzerklärung</a>.
            </p>
            <div class="d-flex gap-2 mb-2 mb-md-0">
                <button type="button" id="cookie-accept" class="btn"
                    style="background-color:#00a86b">Akzeptieren</button>
                <button type="button" id="cookie-reject" class="btn btn-outline-light">Ablehnen</button>
            </div>
        </div>
    </div>
@endif
