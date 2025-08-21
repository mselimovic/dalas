<section class="py-5">
        <div class="container text-center">
            <!-- Section Title -->
            <h5 class="text-uppercase fw-semibold text-primary text-uppercase">Dienstleistungen</h5>
            <h3 class="fw-bold text-uppercase text-dark mb-4">Was wir anbieten</h3>

            <div class="glider-contain">
                <div class="glider">
                    <!-- card 1 -->
                    <div class="glider-slide">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/hausreinigung.svg" alt="Hausreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Grundreinigung</h5>
                            <p class="text-muted small">Amet Minim Mollit Non Deserunt Ullamco Est Sit Aliqua Dolor Do Amet Sint.</p>
                        </div>
                    </div>

                    <!-- card 2 -->
                    <div class="glider-slide">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/bodenreinigung.svg" alt="Bodenreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Unterhaltsreinigung</h5>
                            <p class="text-muted small">Amet Minim Mollit Non Deserunt Ullamco Est Sit Aliqua Dolor Do Amet Sint.</p>
                        </div>
                    </div>

                    <!-- card 3 -->
                    <div class="glider-slide">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/stairs.svg" alt="Treppenreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Treppenhausreinigung</h5>
                            <p class="text-muted small">Amet Minim Mollit Non Deserunt Ullamco Est Sit Aliqua Dolor Do Amet Sint.</p>
                        </div>
                    </div>

                    <!-- card 4 -->
                    <div class="glider-slide">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/fensterr.svg" alt="Fensterreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Fensterreinigung</h5>
                            <p class="text-muted small">Amet Minim Mollit Non Deserunt Ullamco Est Sit Aliqua Dolor Do Amet Sint.</p>
                        </div>
                    </div>

                    <!-- card 5 -->
                    <div class="glider-slide">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/rake.png" alt="Gartenpflege">
                            </div>
                            <h5 class="fw-bold text-primary">Gartenpflege</h5>
                            <p class="text-muted small">Amet Minim Mollit Non Deserunt Ullamco Est Sit Aliqua Dolor Do Amet Sint.</p>
                        </div>
                    </div>

                    <!-- card 6 -->
                    <div class="glider-slide">
                        <div class="service-card">
                            <div class="icon-circle mb-3">
                                <img src="/img/homepage/buroreinigung.svg" alt="Büroreinigung">
                            </div>
                            <h5 class="fw-bold text-primary">Wohnungsreinigung</h5>
                            <p class="small text-muted">Amet Minim Mollit Non Deserunt Ullamco Est Sit Aliqua Dolor Do Amet Sint.</p>
                        </div>
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
                responsive: [
                    {
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
