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
                    <form method="POST" action="#">
                        @csrf

                        <div class="row g-4">
                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1">Vorname:</label>
                                <input type="text" name="first_name" class="form-control line-input" placeholder=""
                                    required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1">Nachname:</label>
                                <input type="text" name="last_name" class="form-control line-input" placeholder=""
                                    required>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1">Email:</label>
                                <input type="email" name="email" class="form-control line-input" placeholder=""
                                    required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label small text-muted mb-1">Telefonnummer:</label>
                                <input type="tel" name="phone" class="form-control line-input" placeholder="">
                            </div>

                            <div class="col-12">
                                <label class="form-label mb-2 fw-semibold">Sind Sie Privatkunde oder Gewerbekunde?</label>

                                <div class="row g-3 customer-type">
                                    <div class="col-12 col-md-6">
                                        <input class="btn-check" type="radio" name="customer_type" id="type-privat"
                                            value="Privatkunde" required>
                                        <label
                                            class="btn w-100 border rounded-3 p-3 text-start d-flex align-items-start gap-3"
                                            for="type-privat">
                                            <!-- Home icon -->
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                                class="mt-1">
                                                <path
                                                    d="M3 10.5 12 3l9 7.5V21a1 1 0 0 1-1 1h-6v-6H10v6H4a1 1 0 0 1-1-1v-10.5Z"
                                                    stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                            </svg>
                                            <span>
                                                <strong>Privatkunden</strong><br>
                                                <small class="text-muted">private Kundschaft (Wohnungen, Häuser, private
                                                    Räume)</small>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <input class="btn-check" type="radio" name="customer_type" id="type-gewerbe"
                                            value="Gewerbekunde" required>
                                        <label
                                            class="btn w-100 border rounded-3 p-3 text-start d-flex align-items-start gap-3"
                                            for="type-gewerbe">
                                            <!-- Briefcase icon -->
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                                class="mt-1">
                                                <path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2" stroke="currentColor"
                                                    stroke-width="2" />
                                                <rect x="2" y="7" width="20" height="13" rx="2"
                                                    stroke="currentColor" stroke-width="2" />
                                                <path d="M2 12h20" stroke="currentColor" stroke-width="2" />
                                            </svg>
                                            <span>
                                                <strong>Gewerbekunden</strong><br>
                                                <small class="text-muted">geschäftliche Kundschaft (Firmen, Büros, Objekte
                                                    zur Reinigung)</small>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label small text-muted mb-1">Nachricht:</label>
                                <textarea name="message" rows="5" class="form-control line-input" placeholder="" required></textarea>
                            </div>
                            <div class="form-check py-2">
                                <input class="form-check-input" type="checkbox" value="1" id="gdpr_rules"
                                    name="gdpr_rules">
                                <label class="form-check-label" for="gdpr_rules">
                                    Ich willige ein, dass meine in diesem Formular angegebenen personenbezogenen Daten zum
                                    Zweck der Bearbeitung meiner Anfrage verarbeitet und gespeichert werden. Weitere
                                    Hinweise finden Sie in unserer<a href="{{ route('policy') }}"
                                        class="text-primary ps-1">Datenschutzerklärung</a>
                                </label>
                            </div>
                            <div class="col-12 d-flex justify-content-center justify-content-md-end">
                                <button type="submit" class="btn btn-dark px-4 py-2">
                                    Nachricht senden
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
