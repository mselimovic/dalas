@extends('layouts.guest')
<header class="mt-5 bg-primary">
    <div class="p-5 text-center">
    </div>
</header>
@section('content')
<div class="container py-5">
  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
      <div class="mb-3">
        <span class="badge bg-primary rounded-pill px-3 py-2">404</span>
      </div>
      <h4 class="fw-bold mb-2">Seite nicht gefunden</h4>
      <p class="text-muted mb-4">Die von Ihnen aufgerufene Adresse existiert nicht oder wurde verschoben.</p>

      <div class="d-flex flex-wrap justify-content-center gap-2">
        <a href="{{ url('/') }}" class="btn btn-primary">Zur Startseite</a>
        <a href="{{ url('/kontakt') }}" class="btn btn-outline-dark">Kontakt aufnehmen</a>
        <a href="{{ url('/faq') }}" class="btn btn-outline-secondary">FAQ ansehen</a>
      </div>

      <div class="mt-4 text-muted small">
        <span>Wenn Sie Hilfe benötigen, schreiben Sie uns an
          <a href="mailto:info@dalas-pf.de">info@dalas-pf.de</a>.</span>
      </div>
    </div>
  </div>
</div>
@endsection
