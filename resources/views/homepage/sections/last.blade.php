<section class="py-2 contact-section" style="background-color: #DEF0FF">
    <div class="container">
        <div class="row align-items-start">

            <!-- Left: Images -->
            <div class="col-12 col-lg-4 text-center my-5 mb-lg-0">
                <img src="/img/homepage/contact.webp" class="img-fluid mb-3" alt="contact">
                {{-- <div class="d-flex gap-3 mt-4">
        <a href="https://instagram.com/yourprofile" target="_blank" class="social-icon">
            <img src="/img/homepage/instagram.webp" alt="Instagram" style="width:40px; height:40px;">
        </a>
        <a href="https://tiktok.com/@yourprofile" target="_blank" class="social-icon">
            <img src="/img/homepage/tik-tok.webp" alt="TikTok" style="width:40px; height:40px;">
        </a>
    </div> --}}
            </div>

            <!-- Middle: Contact Info -->
            <div class="col-12 col-lg-4 my-5 mb-lg-0 mx-auto">
                <h3 class="fw-bold mb-4">Finden Sie uns</h3>
                <div class="contact-box mb-3 d-flex align-items-center p-3">
                    <div class="icon me-5" style="margin-right:10px;">
                        <img src="/img/homepage/phone.png" alt="phone icon" style="width: 45px; height: 45px;">
                    </div>
                    <div>
                        <h6 class="mb-1 fw-semibold">Rufen Sie uns an</h6>
                        <a href="tel:+4915756464139" class="text-muted small">+49 1575 6464139</a>
                    </div>
                </div>
                <div class="contact-box mb-3 d-flex align-items-center p-3">
                    <div class="icon me-5" style="margin-right:10px;">
                        <img src="/img/homepage/mail.png" alt="mail icon" style="width: 45px; height: 45px;">
                    </div>
                    <div>
                        <h6 class="mb-1 fw-semibold">Email</h6>
                        <a href="mailto:info@dalas.de" class="text-muted small">info@dalas.de</a>
                    </div>
                </div>
                <div class="contact-box d-flex align-items-center p-3">
                    <div class="icon me-5" style="margin-right:10px;">
                        <img src="/img/homepage/address.png" alt="address icon" style="width: 45px; height: 45px;">
                    </div>
                    <div>
                        <h6 class="mb-1 fw-semibold">Address</h6>
                        <p class="text-muted small mb-0">Germany</p>
                    </div>
                </div>

            </div>

            <!-- Right: Form -->
            <div class="col-12 col-lg-4 my-5 mb-lg-0 mx-auto">
                <h3 class="fw-bold text-dark mb-4">Den Kontakt halten</h3>
                <form>
                    <div class="mb-4">
                        <input type="text" class="contact-input" placeholder="Name">
                    </div>
                    <div class="mb-4">
                        <input type="email" class="contact-input" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <textarea class="contact-input" rows="3" placeholder="Nachricht"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Nachricht senden</button>
                </form>
            </div>



        </div>
    </div>
</section>
<style>

    .contact-section h3 {
    min-height: 48px; /* keeps them equal height */
    display: flex;
    align-items: center; /* vertically center heading text */
}

    .contact-box {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .contact-input {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 2px solid rgba(255, 255, 255, 0.8);
        color: #333;
        font-size: 16px;
        padding: 8px 2px;
        outline: none;
        box-shadow: none;
    }

    .contact-input:focus {
        border-bottom: 2px solid #6EC0D8;
        box-shadow: none;
    }

    .contact-input::placeholder {

        color: #6EC0D8;
    }
</style>
