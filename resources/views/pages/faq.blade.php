@extends('layouts.guest')
<header class="my-5 bg-dark" style="height: 150px;">
    <div class="py-5 text-center">
        <h1 class="mt-5 text-uppercase align-items-center text-light fs-2">FAQ</h1>
    </div>
</header>
@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">

      <h4 class="mb-4 fw-bold">Häufig gestellte Fragen (FAQ)</h4>

      <div class="accordion" id="faqAccordion">

        <!-- 1 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="true" aria-controls="a1">
              Bieten Sie auch einmalige Einsätze an?
            </button>
          </h5>
          <div id="a1" class="accordion-collapse collapse show" aria-labelledby="q1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Ja, selbstverständlich. Sie können uns jederzeit für eine einzelne Reinigung ohne langfristige Verpflichtung buchen.
            </div>
          </div>
        </div>

        <!-- 2 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
              Muss ich einen Vertrag mit Bindung abschließen?
            </button>
          </h5>
          <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Nein. Wiederkehrende Verträge sind möglich, aber nicht verpflichtend – wir richten uns nach Ihrem Bedarf.
            </div>
          </div>
        </div>

        <!-- 3 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="a3">
              Wie funktioniert die Schlüsselübergabe?
            </button>
          </h5>
          <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Zu Ihrer Sicherheit nutzen wir ein Schlüsselprotokoll mit dokumentierter Übergabe und Rückgabe. Details stimmen wir individuell mit Ihnen ab.
            </div>
          </div>
        </div>

        <!-- 4 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a4" aria-expanded="false" aria-controls="a4">
              Bringen Sie eigenes Reinigungsmaterial mit?
            </button>
          </h5>
          <div id="a4" class="accordion-collapse collapse" aria-labelledby="q4" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Ja, wir bringen alle benötigten Materialien und Reinigungsmittel mit. Auf Wunsch verwenden wir gern Ihre Produkte.
            </div>
          </div>
        </div>

        <!-- 5 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5" aria-expanded="false" aria-controls="a5">
              Bieten Sie auch regelmäßige Reinigungen (z. B. wöchentlich/monatlich) an?
            </button>
          </h5>
          <div id="a5" class="accordion-collapse collapse" aria-labelledby="q5" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Ja. Neben einmaligen Einsätzen bieten wir flexible Intervalle (wöchentlich, zweiwöchentlich, monatlich) – ganz nach Ihren Wünschen.
            </div>
          </div>
        </div>

        <!-- 6 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a6" aria-expanded="false" aria-controls="a6">
              Welche Objekte reinigen Sie?
            </button>
          </h5>
          <div id="a6" class="accordion-collapse collapse" aria-labelledby="q6" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Wir reinigen Wohnungen, Häuser, Geschäftsräume, Treppenhäuser, Fenster und weitere Flächen – je nach Vereinbarung.
            </div>
          </div>
        </div>

        <!-- 7 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a7" aria-expanded="false" aria-controls="a7">
              Wie vereinbare ich einen Termin und wie kurzfristig ist ein Einsatz möglich?
            </button>
          </h5>
          <div id="a7" class="accordion-collapse collapse" aria-labelledby="q7" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Nutzen Sie unser Kontaktformular oder rufen Sie uns an. Kurzfristige Termine sind je nach Verfügbarkeit möglich – wir bemühen uns um schnelle Lösungen.
            </div>
          </div>
        </div>

        <!-- 8 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a8" aria-expanded="false" aria-controls="a8">
              Wie werden die Preise berechnet?
            </button>
          </h5>
          <div id="a8" class="accordion-collapse collapse" aria-labelledby="q8" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Wir erstellen ein transparentes Angebot auf Basis Ihrer Angaben bzw. einer Besichtigung. Abrechnung als Pauschale oder nach Aufwand – je nach Leistungsumfang.
            </div>
          </div>
        </div>

        <!-- 9 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q9">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a9" aria-expanded="false" aria-controls="a9">
              Wie lange dauert eine Reinigung?
            </button>
          </h5>
          <div id="a9" class="accordion-collapse collapse" aria-labelledby="q9" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Das hängt von Größe und gewünschtem Leistungsumfang ab. Ein realistisches Zeitfenster erhalten Sie mit dem Angebot.
            </div>
          </div>
        </div>

        <!-- 10 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q10">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a10" aria-expanded="false" aria-controls="a10">
              Muss ich während der Reinigung anwesend sein?
            </button>
          </h5>
          <div id="a10" class="accordion-collapse collapse" aria-labelledby="q10" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Nein, das ist nicht nötig. Bei Rückfragen melden wir uns telefonisch. Die Zugangsregelung (z. B. Schlüsselprotokoll) klären wir im Voraus.
            </div>
          </div>
        </div>

        <!-- 11 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q11">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a11" aria-expanded="false" aria-controls="a11">
              Welche Zahlungsmöglichkeiten gibt es?
            </button>
          </h5>
          <div id="a11" class="accordion-collapse collapse" aria-labelledby="q11" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Sie erhalten eine ordentliche Rechnung. Übliche Zahlungsmöglichkeiten sind Überweisung oder Barzahlung nach Absprache.
            </div>
          </div>
        </div>

        <!-- 12 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q12">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a12" aria-expanded="false" aria-controls="a12">
              Verwenden Sie umweltfreundliche Produkte bzw. berücksichtigen Sie Allergien?
            </button>
          </h5>
          <div id="a12" class="accordion-collapse collapse" aria-labelledby="q12" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Auf Wunsch setzen wir schonende bzw. umweltfreundliche Mittel ein. Bitte teilen Sie uns Allergien oder empfindliche Oberflächen im Voraus mit.
            </div>
          </div>
        </div>

        <!-- 13 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q13">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a13" aria-expanded="false" aria-controls="a13">
              Wie kann ich einen Termin verschieben oder absagen?
            </button>
          </h5>
          <div id="a13" class="accordion-collapse collapse" aria-labelledby="q13" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Bitte informieren Sie uns so früh wie möglich über Änderungen. Gemeinsam finden wir einen passenden neuen Termin.
            </div>
          </div>
        </div>

        <!-- 14 -->
        <div class="accordion-item">
          <h5 class="accordion-header" id="q14">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a14" aria-expanded="false" aria-controls="a14">
              Was passiert mit meinen Daten?
            </button>
          </h5>
          <div id="a14" class="accordion-collapse collapse" aria-labelledby="q14" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Wir verarbeiten Ihre Angaben ausschließlich zur Bearbeitung Ihrer Anfrage. Details finden Sie in unserer <a href="{{ url('/datenschutz') }}">Datenschutzerklärung</a>.
            </div>
          </div>
        </div>

      </div><!-- /accordion -->
    </div>
  </div>
</div>
@endsection


