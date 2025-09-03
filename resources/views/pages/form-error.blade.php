@extends('layouts.guest')
<header class="mt-5 bg-primary">
    <div class="p-5 text-center">
    </div>
</header>
@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-xl-8">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-body p-4 p-md-5">

          <div class="text-center mb-4">
            <div class="mx-auto mb-3 rounded-circle d-inline-flex align-items-center justify-content-center"
                 style="width:72px;height:72px;background:#fff5f5;color:#dc3545;">
              <!-- alert icon -->
              <svg width="34" height="34" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 9v4m0 4h.01M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h4 class="fw-bold mb-1">Etwas ist schiefgelaufen</h4>
            <p class="text-muted mb-0">
              @if(session('form_error_msg'))
                {{ session('form_error_msg') }}
              @else
                Leider konnte Ihre Anfrage gerade nicht übermittelt werden.
              @endif
            </p>
          </div>

          <div class="row g-4 align-items-start">
            <div class="col-md-7">
              <h6 class="fw-semibold mb-2">Was Sie jetzt tun können</h6>
              <ul class="list-unstyled mb-4">
                <li class="d-flex gap-3 mb-2">
                  <!-- retry icon -->
                  <span class="mt-1" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M21 12a9 9 0 1 1-2.64-6.36" stroke="currentColor" stroke-width="2"/><path d="M21 3v6h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                  </span>
                  <span>Bitte versuchen Sie es in wenigen Minuten erneut.</span>
                </li>
                <li class="d-flex gap-3 mb-2">
                  <!-- mail icon -->
                  <span class="mt-1" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z" stroke="currentColor" stroke-width="2"/><path d="m22 6-10 7L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                  </span>
                  <span>Oder kontaktieren Sie uns direkt per E-Mail:
                    <a href="mailto:info@dalas-pf.de">info@dalas-pf.de</a></span>
                </li>
                <li class="d-flex gap-3 mb-2">
                  <!-- phone icon -->
                  <span class="mt-1" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M22 16.92v3A2 2 0 0 1 19.82 22 19.86 19.86 0 0 1 11.19 19a19.5 19.5 0 0 1-8-8A19.86 19.86 0 0 1 2 3.18 2 2 0 0 1 4.18 1h3a2 2 0 0 1 2 1.72c.12.9.33 1.77.62 2.6a2 2 0 0 1-.45 2.11L8.1 8.56a16 16 0 0 0 6.34 6.34l1.13-1.13a2 2 0 0 1 2.11-.45c.83.29 1.7.5 2.6.62A2 2 0 0 1 22 16.92Z" stroke="currentColor" stroke-width="2"/></svg>
                  </span>
                  <span>Telefonisch erreichen Sie uns unter:
                    <a href="tel:+4915756464139">+49&nbsp;1575&nbsp;6464&nbsp;139</a> /
                    <a href="tel:+4917632949364">+49&nbsp;176&nbsp;329&nbsp;493&nbsp;64</a></span>
                </li>
              </ul>

              <div class="d-flex flex-wrap gap-2">
                <a href="{{ url('/kontakt') }}" class="btn btn-primary">Erneut versuchen</a>
                <a href="{{ url('/') }}" class="btn btn-outline-secondary">Zur Startseite</a>
              </div>
            </div>

            <div class="col-md-5">
              <div class="p-3 p-md-4 rounded-4" style="background:#f8fbfd;">
                <h6 class="fw-semibold mb-3">Status & Hinweise</h6>
                <p class="mb-2">Mögliche Gründe: kurze Server-Unterbrechung, E-Mail-Dienst nicht erreichbar oder Zeitüberschreitung.</p>
                <p class="mb-0 text-muted small">Sollte das Problem bestehen, senden Sie uns bitte eine kurze E-Mail mit Ihrem Anliegen.</p>
              </div>
            </div>
          </div>

        </div> <!-- /card-body -->
      </div>
    </div>
  </div>
</div>
@endsection
