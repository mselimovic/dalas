
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
            <div class="mx-auto mb-3 rounded-circle d-inline-flex align-items-center justify-content-center pop-in"
                 style="width:72px;height:72px;background:#e8f7ee;color:#198754;">
              <!-- Check icon -->
              <svg width="34" height="34" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h4 class="fw-bold mb-1">Vielen Dank!</h4>
            <p class="text-muted mb-0">Ihre Anfrage wurde erfolgreich übermittelt.</p>
          </div>

          <div class="row g-4 align-items-start">
            <div class="col-md-7">
              <h6 class="fw-semibold mb-2">Was passiert jetzt?</h6>
              <ul class="list-unstyled mb-4">
                <li class="d-flex gap-3 mb-2">
                  <span class="mt-1" aria-hidden="true">
                    <!-- Mail icon -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                      <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z" stroke="currentColor" stroke-width="2"/>
                      <path d="m22 6-10 7L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                  </span>
                  <span>
                    Wir haben Ihnen eine Bestätigungs-E-Mail
                    @if(session('submitted_email'))
                      an <strong>{{ session('submitted_email') }}</strong>
                    @endif
                    gesendet. Bitte prüfen Sie ggf. auch Ihren Spam-Ordner.
                  </span>
                </li>
                <li class="d-flex gap-3 mb-2">
                  <span class="mt-1" aria-hidden="true">
                    <!-- Clock icon -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                      <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                      <path d="M12 7v5l3 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                  </span>
                  <span>Wir melden uns in der Regel innerhalb von <strong>24&nbsp;Stunden</strong>.</span>
                </li>
                <li class="d-flex gap-3 mb-2">
                  <span class="mt-1" aria-hidden="true">
                    <!-- Shield icon -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                      <path d="M12 22s8-3 8-10V6l-8-4-8 4v6c0 7 8 10 8 10Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                  </span>
                  <span>Ihre Daten werden ausschließlich zur Bearbeitung Ihrer Anfrage verwendet.</span>
                </li>
              </ul>

              <div class="d-flex flex-wrap gap-2">
                <a href="{{ url('/') }}" class="btn btn-primary">Zur Startseite</a>
                <a href="{{ url('/faq') }}" class="btn btn-outline-secondary">Zum FAQ-Bereich</a>
                <a href="{{ url('/kontakt') }}" class="btn btn-outline-dark">Weitere Nachricht senden</a>
              </div>
            </div>

            <div class="col-md-5">
              <div class="p-3 p-md-4 rounded-4" style="background:#f8fbfd;">
                <h6 class="fw-semibold mb-3">Kontakt</h6>

                <div class="d-flex align-items-start gap-3 mb-2">
                  <!-- Phone icon -->
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="mt-1" aria-hidden="true">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 11.19 19 19.5 19.5 0 0 1 3.19 9.81 19.86 19.86 0 0 1 1 2.18 2 2 0 0 1 3 0h3a2 2 0 0 1 2 1.72c.12.9.33 1.77.62 2.6a2 2 0 0 1-.45 2.11L7.1 7.56a16 16 0 0 0 6.34 6.34l1.13-1.13a2 2 0 0 1 2.11-.45c.83.29 1.7.5 2.6.62A2 2 0 0 1 22 16.92Z" stroke="currentColor" stroke-width="2"/>
                  </svg>
                  <div>
                    <a href="tel:+4915756464139" class="link-dark text-decoration-none">+49&nbsp;1575&nbsp;6464&nbsp;139</a><br>
                    <a href="tel:+4917632949364" class="link-dark text-decoration-none">+49&nbsp;176&nbsp;329&nbsp;493&nbsp;64</a>
                  </div>
                </div>

                <div class="d-flex align-items-start gap-3 mb-2">
                  <!-- Mail icon -->
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="mt-1" aria-hidden="true">
                    <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z" stroke="currentColor" stroke-width="2"/>
                    <path d="m22 6-10 7L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                  <a href="mailto:info@dalas-pf.de" class="link-dark text-decoration-none">info@dalas-pf.de</a>
                </div>

                <div class="d-flex align-items-start gap-3">
                  <!-- Map pin icon -->
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="mt-1" aria-hidden="true">
                    <path d="M12 22s8-7 8-12a8 8 0 1 0-16 0c0 5 8 12 8 12Z" stroke="currentColor" stroke-width="2"/>
                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                  </svg>
                  <span>Jägerstraße&nbsp;7, 75181&nbsp;Pforzheim</span>
                </div>
              </div>
            </div>
          </div>

        </div> 
      </div>  
    </div>
  </div>
</div>
@endsection

