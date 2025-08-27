@extends('layouts.guest')
<header class="mt-5 bg-about">
    <div class="p-5 text-center">
        <h1 class="pt-5 text-uppercase text-light fs-2">ÜBER UNS</h1>
    </div>
</header>
@section('content')
    <div class="container-fluid bg-light">
        <div class="container-fluid py-4">
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="/img/about/reliability.webp" alt="Zuverlässig" height="60">
                        <h5 class="fw-bold text-dark mt-2">Zuverlässig</h5>
                        <p class="text-muted small">Wir sind immer pünktlich und halten unser Wort.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="/img/about/review.webp" alt="Qualität" height="60">
                        <h5 class="fw-bold text-dark mt-2">Qualität</h5>
                        <p class="text-muted small">Wir achten auf jedes Detail und liefern saubere Ergebnisse.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="/img/about/shuffle.webp" alt="Flexibel" height="60">
                        <h5 class="fw-bold text-dark mt-2">Flexibel</h5>
                        <p class="text-muted small">Individuelle Lösungen für Ihre Bedürfnisse.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-evenly align-items-center py-3">
                <div class="col-lg-4 col-md-6 ">
                    <div class="img-border">
                        <img class="img-fluid inner-img" src="{{ asset('img/homepage/about-3.webp') }}"
                            alt="DalAs Reinigungsdienst about secton">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <h5 class="text-uppercase fw-semibold text-primary py-2">Über Uns</h5>
                    <h3 class="fw-bold text-uppercase text-dark mb-3">
                        DalAs Reinigungsdienst – Ihr Partner für Sauberkeit in Pforzheim
                    </h3>
                    <p class="text-muted mb-2" >
                        <strong>DalAs Reinigungsdienst</strong> ist Ihr zuverlässiger Partner für professionelle
                        Reinigungsarbeiten in
                        <strong>Pforzheim, dem Enzkreis und Umgebung</strong>. Wir haben uns auf die gründliche und
                        nachhaltige
                        <em>Unterhaltsreinigung, Grundreinigung, Treppenhausreinigung, Fensterreinigung, Gartenpflege</em>
                        sowie die Reinigung von Wohn- und Geschäftsräumen spezialisiert.
                    </p>
                    <p class="text-muted mb-2" >
                        Unser Ziel ist es, unseren Kundinnen und Kunden eine saubere, gepflegte und hygienische Umgebung zu
                        schaffen –
                        sei es im privaten Haushalt oder im gewerblichen Bereich. Dabei legen wir größten Wert auf
                        <strong>Zuverlässigkeit, Pünktlichkeit und Qualität</strong>.
                    </p>
                    <p class="text-muted mb-2" >
                        Mit unserer Erfahrung und einem geschulten Team sorgen wir dafür, dass Ihre Räumlichkeiten nicht nur
                        sauber,
                        sondern auch zum Wohlfühlen einladend sind. Zahlreiche zufriedene Kunden aus <strong>Pforzheim und
                            Umgebung</strong>
                        vertrauen bereits auf unseren Service.
                    </p>
                    <p class="text-muted mb-3" >
                        Kontaktieren Sie uns telefonisch unter <strong>0176 329 493 64</strong> oder <strong>015 75 6464
                            139</strong>.
                        Für Anfragen können Sie auch direkt unser
                        <a href="{{ route('contact') }}" class="text-primary fw-semibold">Kontaktformular</a> nutzen –
                        wir melden uns schnellstmöglich bei Ihnen.
                    </p>

                </div>

            </div>
            <div class="row justify-content-evenly align-items-center py-3">
                <div class="col-lg-5 col-sm-6 order-lg-2">
                    <div class="img-border-right">
                        <img class="img-fluid inner-img" src="{{ asset('img/homepage/about-2.webp') }}"
                            alt="DalAs Reinigungsdienst about secton">
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6 order-lg-1">
                    <h5 class="text-uppercase fw-semibold text-primary py-2">Unsere Mission</h5>
                    <h3 class="fw-bold text-uppercase text-dark mb-3">
                        Sauberkeit mit Vertrauen
                    </h3>
                    <p class="text-muted mb-2" >
                        Bei <strong>DalAs Reinigungsdienst</strong> geht es um mehr als nur Reinigung – unsere Mission ist
                        es,
                        <strong>Lebensqualität durch Sauberkeit und Ordnung</strong> zu schaffen. Wir möchten, dass Sie sich
                        in Ihren
                        Räumen jederzeit wohl und sicher fühlen können.
                    </p>
                    <ul class="list-unstyled text-muted mb-3" >
                        <li>✅ <strong>Nachhaltigkeit</strong> – wir verwenden umweltfreundliche Reinigungsmittel.</li>
                        <li>✅ <strong>Fairness</strong> – transparente Preise ohne versteckte Kosten.</li>
                        <li>✅ <strong>Flexibilität</strong> – individuelle Lösungen für Haushalte und Unternehmen.</li>
                        <li>✅ <strong>Menschlichkeit</strong> – ein freundliches Team mit persönlicher Betreuung.</li>
                    </ul>
                    <p class="text-muted mb-2" >
                        Unser Versprechen: Wir behandeln jedes Objekt so, als wäre es unser eigenes. Mit Liebe zum Detail,
                        moderner
                        Reinigungstechnik und einem hohen Qualitätsanspruch bringen wir Ihr Zuhause oder Ihr Büro in neuen
                        Glanz.
                    </p>
                    <p class="text-muted" >
                        Ob regelmäßige <em>Unterhaltsreinigung</em>, eine gründliche <em>Grundreinigung</em>, die Pflege
                        Ihres
                        <em>Treppenhauses oder Gartens</em> – <strong>DalAs Reinigungsdienst in Pforzheim und
                            Enzkreis</strong> ist für Sie da.
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
