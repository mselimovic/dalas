@extends('layouts.guest')
<header class="mt-5 bg-services">
    <div class="p-5 text-center">
        <h1 class="pt-5 text-uppercase text-light fs-2">DIENSTLEISTUNGEN</h1>
    </div>
</header>
@section('content')
    <div class="py-5">
        <div class="container text-center">
            <h5 class="text-uppercase fw-semibold text-primary svc-section-title">Dienstleistungen</h5>
            <h2 class="fw-bold text-dark text-uppercase mb-3">Professionelle Reinigung – flexibel & zuverlässig</h2>
            <p class="text-muted mx-auto" style="max-width: 780px;">
                DalAs Reinigungsdienst bietet maßgeschneiderte Reinigung in <strong>Pforzheim, Enzkreis und Umgebung</strong>:
                von regelmäßiger Pflege bis zur intensiven Grundreinigung – transparent, pünktlich und mit umweltfreundlichen
                Reinigungsmitteln.
            </p>
            <div class="d-flex gap-2 justify-content-center mt-2 flex-wrap">
                <span class="badge-chip">Privat & Gewerbe</span>
                <span class="badge-chip">Flexible Termine</span>
                <span class="badge-chip">Faire Preise</span>
                <span class="badge-chip">Eigene Materialien</span>
            </div>
        </div>
    </div>

    <!-- Services grid -->
    <div class="pb-2">
        <div class="container">
            <div class="row g-4">
                <!-- Grundreinigung -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc-card">
                        <div class="svc-icon-bubble">
                            <img src="/img/homepage/hausreinigung.svg" alt="Grundreinigung">
                        </div>
                        <h5 class="fw-bold text-primary text-center">Grundreinigung</h5>
                        <p class="text-muted small text-center">
                            Tiefenreinigung für hartnäckigen Schmutz – ideal vor Einzug, nach Umbau oder saisonal.
                        </p>
                        <ul class="text-muted small">
                            <li>Böden & Fugen intensiv</li>
                            <li>Kalk-/Fettentfernung</li>
                            <li>Sanitär- & Küchen-Deep Clean</li>
                        </ul>
                    </div>
                </div>

                <!-- Unterhaltsreinigung -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc-card">
                        <div class="svc-icon-bubble">
                            <img src="/img/homepage/bodenreinigung.svg" alt="Unterhaltsreinigung">
                        </div>
                        <h5 class="fw-bold text-primary text-center">Unterhaltsreinigung</h5>
                        <p class="text-muted small text-center">
                            Regelmäßige Pflege – wöchentlich oder monatlich, für dauerhaft gepflegte Räume.
                        </p>
                        <ul class="text-muted small">
                            <li>Staub & Oberflächen</li>
                            <li>Böden saugen & wischen</li>
                            <li>Müll & Sanitärpflege</li>
                        </ul>
                    </div>
                </div>

                <!-- Treppenhausreinigung -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc-card">
                        <div class="svc-icon-bubble">
                            <img src="/img/homepage/stairs.svg" alt="Treppenhausreinigung">
                        </div>
                        <h5 class="fw-bold text-primary text-center">Treppenhausreinigung</h5>
                        <p class="text-muted small text-center">
                            Saubere Eingänge & Treppen – der erste Eindruck zählt für Bewohner & Besucher.
                        </p>
                        <ul class="text-muted small">
                            <li>Geländer, Stufen, Podeste</li>
                            <li>Eingänge & Aufzüge</li>
                            <li>Fenster im Treppenhaus</li>
                        </ul>
                    </div>
                </div>

                <!-- Fensterreinigung -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc-card">
                        <div class="svc-icon-bubble">
                            <img src="/img/homepage/fensterr.svg" alt="Fensterreinigung">
                        </div>
                        <h5 class="fw-bold text-primary text-center">Fensterreinigung</h5>
                        <p class="text-muted small text-center">
                            Streifenfreie Sicht: Rahmen, Glas & Falze professionell gereinigt – innen & außen.
                        </p>
                        <ul class="text-muted small">
                            <li>Rahmen inklusive</li>
                            <li>Schaufenster & Wintergärten</li>
                            <li>Schonende Verfahren</li>
                        </ul>
                    </div>
                </div>

                <!-- Gartenpflege -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc-card">
                        <div class="svc-icon-bubble">
                            <img src="/img/homepage/rake.webp" alt="Gartenpflege">
                        </div>
                        <h5 class="fw-bold text-primary text-center">Gartenpflege</h5>
                        <p class="text-muted small text-center">
                            Gepflegte Außenbereiche – Rasen, Hecken & saisonale Arbeiten.
                        </p>
                        <ul class="text-muted small">
                            <li>Rasen & Kanten</li>
                            <li>Laub & Beetpflege</li>
                            <li>Hecken-/Strauchschnitt</li>
                        </ul>
                    </div>
                </div>

                <!-- Wohnungsreinigung -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc-card">
                        <div class="svc-icon-bubble">
                            <img src="/img/homepage/buroreinigung.svg" alt="Wohnungsreinigung">
                        </div>
                        <h5 class="fw-bold text-primary text-center">Wohnungsreinigung</h5>
                        <p class="text-muted small text-center">
                            Sorgfältige Reinigung für ein Zuhause zum Wohlfühlen – einmalig oder regelmäßig.
                        </p>
                        <ul class="text-muted small">
                            <li>Küche, Bad, Wohnflächen</li>
                            <li>Staub, Böden & Oberflächen</li>
                            <li>Optional: Kühlschrank/Backofen</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-5">
                <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill px-4">
                    Unverbindliches Angebot anfragen
                </a>
                <p class="text-muted small mt-2 mb-0">
                    Telefon: <strong>0176 329 493 64</strong> &bull; <strong>015 75 6464 139</strong> &nbsp;|&nbsp;
                    Einsatzgebiet: Pforzheim &amp; Enzkreis
                </p>
            </div>
        </div>
    </div>

    <!-- Work gallery -->
    <div class="py-5">
        <div class="container">
            <h5 class="text-uppercase fw-semibold text-primary text-center svc-section-title">Einblicke in unsere Arbeit</h5>
            <h3 class="fw-bold text-dark text-uppercase text-center mb-4">Sauberkeit, die man sieht</h3>

            <div class="row g-3 svc-work-grid">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="img-wrap" style="aspect-ratio: 4/3;">
                        <img src="/img/homepage/showcase.webp" alt="Reinigungsbeispiel 1">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="img-wrap" style="aspect-ratio: 4/3;">
                        <img src="/img/homepage/showcase2.webp" alt="Reinigungsbeispiel 2">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="img-wrap" style="aspect-ratio: 4/3;">
                        <img src="/img/homepage/showcase3.webp" alt="Reinigungsbeispiel 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ (improved) -->
    <div class="pb-5">
        <div class="container">
            <h5 class="text-uppercase fw-semibold text-primary text-center svc-section-title">Häufig gestellte Fragen</h5>

            <div class="accordion faq-accordion" id="faqAccordion">
                <!-- 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q1h">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                            Bieten Sie auch einmalige Einsätze an?
                        </button>
                    </h2>
                    <div id="q1" class="accordion-collapse collapse show" aria-labelledby="q1h" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ja, selbstverständlich! Sie können uns auch für eine einmalige Reinigung ohne langfristige Verpflichtung buchen.
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q2h">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false" aria-controls="q2">
                            Muss ich einen Vertrag mit Bindung abschließen?
                        </button>
                    </h2>
                    <div id="q2" class="accordion-collapse collapse" aria-labelledby="q2h" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Nein, eine langfristige Bindung ist nicht notwendig. Verträge sind möglich, aber nicht verpflichtend – alles nach Ihren Bedürfnissen.
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q3h">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false" aria-controls="q3">
                            Wie funktioniert die Schlüsselübergabe?
                        </button>
                    </h2>
                    <div id="q3" class="accordion-collapse collapse" aria-labelledby="q3h" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Zu Ihrer Sicherheit bieten wir ein Schlüsselprotokoll – eine dokumentierte und sichere Übergabe und Rückgabe der Schlüssel.
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q4h">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false" aria-controls="q4">
                            Bringen Sie eigenes Reinigungsmaterial mit?
                        </button>
                    </h2>
                    <div id="q4" class="accordion-collapse collapse" aria-labelledby="q4h" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ja, unser Team bringt alle benötigten Materialien und Reinigungsmittel mit. Auf Wunsch können wir auch Ihre Produkte verwenden.
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q5h">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="false" aria-controls="q5">
                            Bieten Sie auch regelmäßige Reinigungen an?
                        </button>
                    </h2>
                    <div id="q5" class="accordion-collapse collapse" aria-labelledby="q5h" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ja, neben einmaligen Reinigungen bieten wir auch regelmäßige Termine, ganz individuell nach Ihren Wünschen.
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="q6h">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="false" aria-controls="q6">
                            Welche Objekte reinigen Sie?
                        </button>
                    </h2>
                    <div id="q6" class="accordion-collapse collapse" aria-labelledby="q6h" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Wir reinigen Wohnungen, Häuser, Geschäftsräume, Treppenhäuser, Fenster und andere Flächen – je nach Vereinbarung.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Weitere Fragen? Kontakt aufnehmen
                </a>
            </div>
        </div>
    </div>

@endsection
