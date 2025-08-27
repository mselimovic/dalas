<section class="pt-5 pb-4">
    <div class="container text-center">
        <!-- Section Title -->
        <h5 class="text-uppercase fw-semibold text-primary text-uppercase">Dienstleistungen</h5>
        <h3 class="fw-bold text-uppercase text-dark mb-4">Was wir anbieten</h3>

        <div class="glider-contain">
            <div class="glider">
                <!-- card 1 -->
                <div class="glider-slide">
                    <a href="{{ route('services') }}" style="text-decoration: none;">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/hausreinigung.svg" alt="Hausreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Grundreinigung</h5>
                            <p class="text-muted small">Unsere gründliche Grundreinigung entfernt selbst hartnäckigen
                                Schmutz und bringt Ihre Räume zum Glänzen.</p>
                        </div>
                    </a>

                </div>

                <!-- card 2 -->
                <div class="glider-slide">
                    <a href="{{ route('services') }}" style="text-decoration: none;">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/bodenreinigung.svg" alt="Bodenreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Unterhaltsreinigung</h5>
                            <p class="text-muted small">Wir sorgen mit unserer regelmäßigen Unterhaltsreinigung für
                                dauerhafte Sauberkeit und Hygiene.</p>
                        </div>
                    </a>

                </div>

                <!-- card 3 -->
                <div class="glider-slide">
                    <a href="{{ route('services') }}" style="text-decoration: none;">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/stairs.svg" alt="Treppenreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Treppenhausreinigung</h5>
                            <p class="text-muted small">Ein sauberes Treppenhaus hinterlässt immer einen positiven
                                Eindruck bei Bewohnern und Besuchern.</p>
                        </div>
                    </a>

                </div>

                <!-- card 4 -->
                <div class="glider-slide">
                    <a href="{{ route('services') }}" style="text-decoration: none;">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/fensterr.svg" alt="Fensterreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Fensterreinigung</h5>
                            <p class="text-muted small">Klare Sicht garantiert: Mit unserer professionellen
                                Fensterreinigung
                                strahlen Ihre Fenster wie neu.</p>
                        </div>
                    </a>

                </div>

                <!-- card 5 -->
                <div class="glider-slide">
                    <a href="{{ route('services') }}" style="text-decoration: none;">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/rake.png" alt="Gartenpflege">
                            </div>
                            <h5 class="fw-bold text-primary">Gartenpflege</h5>
                            <p class="text-muted small">Mit unserer zuverlässigen Gartenpflege bleibt Ihr Außenbereich
                                stets
                                gepflegt und einladend.</p>
                        </div>
                    </a>

                </div>

                <!-- card 6 -->
                <div class="glider-slide">
                    <a href="{{ route('services') }}" style="text-decoration: none;">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/buroreinigung.svg" alt="Büroreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Wohnungsreinigung</h5>
                            <p class="small text-muted">Wir reinigen Ihre Wohnräume sorgfältig, damit Sie sich
                                rundum wohlfühlen können.</p>
                        </div>
                    </a>

                </div>
            </div>

            <!-- arrows -->
            <button role="button" aria-label="Previous" class="glider-prev">«</button>
            <button role="button" aria-label="Next" class="glider-next">»</button>

            <!-- dots indicator -->
            <div class="glider-dots" id="dots"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: true,
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [{
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1,
                        dots: '#dots'
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        dots: '#dots'
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        dots: '#dots'
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        dots: '#dots'
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        dots: '#dots'
                    }
                }
            ]
        });
    });
</script>
