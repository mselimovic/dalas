@extends('layouts.guest')
<header class="mt-5 bg-contact">
    <div class="p-5 text-center">
        <h1 class="pt-5 text-uppercase text-light fs-2">KONTAKT</h1>
    </div>
</header>
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="alert  mt-2" role="alert" style="background-color: rgba(46, 221, 157, 0.1);">
                <h4 class="alert-heading">Willkommen!</h4>
                <p>
                    Haben Sie Fragen zu unseren Angeboten oder wünschen Sie detaillierte Informationen, die genau auf Ihre
                    Bedürfnisse zugeschnitten sind?
                    Dann sind Sie hier genau richtig. Bitte füllen Sie einfach das Formular unten aus – unser Team wird sich
                    schnellstmöglich mit den gewünschten Informationen bei Ihnen melden.
                </p>
                <hr>
                <p class="mb-0">
                    Für schnelle Antworten können Sie außerdem jederzeit einen Blick in unseren
                    <a href="/faq" class="alert-link px-1">FAQ-Bereich</a> werfen. Dort finden Sie viele hilfreiche Tipps
                    und Antworten auf häufig gestellte Fragen.
                </p>
            </div>

            <div class="row g-0 shadow contact-card">

                <!-- Left: Contact Information -->
                <div class="col-12 col-lg-4 p-4 p-lg-5 text-white position-relative bg-cover">
                    <h3 class="fw-bold mb-3">Kontaktinformationen</h3>

                    <div class="d-flex align-items-start gap-3 contact-item mb-3">
                        <!-- phone -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.11A19.5 19.5 0 0 1 3.19 9.81 19.86 19.86 0 0 1 .08 1.18 2 2 0 0 1 2.06 0h3a2 2 0 0 1 2 1.72c.12.9.33 1.77.62 2.6a2 2 0 0 1-.45 2.11L6.1 7.56a16 16 0 0 0 6.34 6.34l1.13-1.13a2 2 0 0 1 2.11-.45c.83.29 1.7.5 2.6.62A2 2 0 0 1 22 16.92Z"
                                fill="currentColor" />
                        </svg>
                        <span>01575 6464 139 / 0176 329 493 64</span>
                    </div>

                    <div class="d-flex align-items-start gap-3 contact-item mb-3">
                        <!-- email -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm16 2-8 5L4 6"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>info@dalas-pf.de</span>
                    </div>

                    <div class="d-flex align-items-start gap-3 contact-item mb-4">
                        <!-- location -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22s8-7 8-12a8 8 0 1 0-16 0c0 5 8 12 8 12Z" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" />
                        </svg>
                        <span>75181 Pforzheim, Germany</span>
                    </div>

                    <div class="d-flex gap-3">
                        <!-- simple social circles -->
                        <a class="btn btn-outline-light btn-social" target="_blank"
                            href="https://www.instagram.com/dalasreinigungsdienst/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" target="_blank"
                            href="https://www.tiktok.com/dalasreinigungsdienst"><i class="fab fa-tiktok"></i></a>

                    </div>
                </div>

                <!-- Right: Form -->
                <div class="col-12 col-lg-8 bg-white p-4 p-lg-5">

                    <form method="POST" id="requestForm" action="{{ route('submit.form') }}">
                        @csrf
                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                        <div id="consentHint" class="alert alert-warning py-2 px-3 d-none small mt-2">
                            Bitte akzeptieren Sie Cookies, um das Formular (reCAPTCHA-Schutz) zu senden.
                        </div>
                        <div class="row g-4">
                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1" for="firstName">Vorname:</label>
                                <input type="text" id="firstName" name="first_name" class="form-control line-input"
                                    value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1" for="lastName">Nachname:</label>
                                <input type="text" id="lastName" name="last_name" class="form-control line-input"
                                    value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1" for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control line-input"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1" for="phoneNumber">Telefonnummer:</label>
                                <input type="tel" id="phoneNumber" name="phone" class="form-control line-input"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label mb-2 fw-semibold">Sind Sie Privatkunde oder Gewerbekunde?</label>
                                <div class="row g-3 customer-type">
                                    <div class="col-12 col-md-6">
                                        <input class="btn-check" type="radio" name="customer_type" id="type-privat"
                                            value="Privatkunde"
                                            {{ old('customer_type') === 'Privatkunde' ? 'checked' : '' }} required>
                                        <label
                                            class="btn w-100 border rounded-3 p-3 text-start d-flex align-items-start gap-3"
                                            for="type-privat">
                                            <!-- icon ... --> <span><strong>Privatkunden</strong><br>
                                                <small class="text-muted">private Kundschaft (Wohnungen, Häuser, private
                                                    Räume)</small></span>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="btn-check" type="radio" name="customer_type" id="type-gewerbe"
                                            value="Gewerbekunde"
                                            {{ old('customer_type') === 'Gewerbekunde' ? 'checked' : '' }} required>
                                        <label
                                            class="btn w-100 border rounded-3 p-3 text-start d-flex align-items-start gap-3"
                                            for="type-gewerbe">
                                            <!-- icon ... --> <span><strong>Gewerbekunden</strong><br>
                                                <small class="text-muted">geschäftliche Kundschaft (Firmen, Büros, Objekte
                                                    zur Reinigung)</small></span>
                                        </label>
                                    </div>
                                </div>
                                @error('customer_type')
                                    <div class="text-danger small mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label small text-muted mb-1" for="message">Nachricht:</label>
                                <textarea name="message" id="message" rows="5" class="form-control line-input" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-check py-2">
                                <input class="form-check-input" type="checkbox" value="1" id="gdpr_rules"
                                    name="gdpr_rules" required>
                                <label class="form-check-label" for="gdpr_rules">
                                    Ich willige ein, dass meine in diesem Formular angegebenen personenbezogenen Daten zum
                                    Zweck der Bearbeitung
                                    meiner Anfrage verarbeitet und gespeichert werden. Weitere Hinweise finden Sie in
                                    unserer
                                    <a href="{{ route('policy') }}" class="text-primary ps-1">Datenschutzerklärung</a>.
                                </label>
                                @error('gdpr_rules')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 d-flex justify-content-center justify-content-md-end">
                                <button type="submit" id="sendButton" class="btn btn-dark px-4 py-2" disabled>
                                    Nachricht senden
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            function ready(fn) {
                if (document.readyState !== 'loading') fn();
                else document.addEventListener('DOMContentLoaded', fn);
            }

            ready(function() {
                const form = document.getElementById('requestForm');
                const sendButton = document.getElementById('sendButton');
                const gdpr = document.getElementById('gdpr_rules');

                if (!form || !sendButton || !gdpr) return;


                const update = () => {
                    const meetsRequirements = gdpr.checked && form.checkValidity();
                    sendButton.disabled = !meetsRequirements;
                    sendButton.classList.toggle('disabled', !meetsRequirements);
                };


                form.addEventListener('input', update, true);
                form.addEventListener('change', update, true);


                form.addEventListener('submit', function(e) {

                    if (!form.checkValidity() || !gdpr.checked) {
                        e.preventDefault();
                        e.stopPropagation();
                        update();
                        return;
                    }
                    sendButton.disabled = true;
                    sendButton.classList.add('disabled');
                });
                update();

                window.addEventListener('pageshow', update);
            });
        })();
    </script>
@endsection
