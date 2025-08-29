<nav id="mainNav"
    class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top z-index-100 {{ request()->routeIs('homepage') ? 'navbar-home' : 'navbar-solid' }}">
    <div class="container-xl pt-3 pt-md-0">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
            <img src="img/homepage/logo.webp" alt="Logo" height="95" class="me-2">
        </a>

        <!-- Mobile toggle -->
        <button class="navbar-toggler py-2 mx-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menü
            <i class="fas fa-bars ms-1"></i>
        </button>

        <!-- Nav links -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}"
                        href="{{ route('homepage') }}">
                        HOME
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        ÜBER UNS
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                        href="{{ route('services') }}">
                        DIENSTLEISTUNGEN
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">
                        KONTAKT
                    </a>
                </li>
            </ul>


            <!-- CTA Button -->
            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill px-4 text-white">
                <img src="/img/homepage/schedule.webp" alt="" class="px-2" height="30px;">Jetz anfragen
            </a>
        </div>
    </div>
</nav>
