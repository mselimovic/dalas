 <footer class="footer">
<div class="container-fluid text-white-50 footer pt-5" style="background-color: #1e2746;">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-md-6 col-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a class="navbar-brand" href="#"><img src="img/homepage/logo.webp" height="90px" alt="company logo" /></a>
              <p class="mb-0 px-3">Wir sind DalAs Reinigungsdienst, spezialisiert auf die professionelle Reinigung von Wohn- und Geschäftsräumen</p>
                 <div class="d-flex pt-2 px-3">
                  <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.instagram.com/dalasreinigungsdienst/"><i class="fab fa-instagram"></i></a>
                  <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.tiktok.com/dalasreinigungsdienst"><i class="fab fa-tiktok"></i></a>
              </div>
            </div>
          <div class="col-md-6 col-lg-3 wow fadeIn px-3 m-3 m-lg-0" data-wow-delay="0.3s" >
              <h5 class="text-primary mb-4">Leistungen</h5>
              <a class="btn btn-link" href="" style="text-decoration: none;">Unterhaltsreinigung </a>
              <a class="btn btn-link" href="" style="text-decoration: none;">Grundreinigung </a>
              <a class="btn btn-link" href="" style="text-decoration: none;">Treppenhausreinigung </a>
              <a class="btn btn-link" href="" style="text-decoration: none;">Fensterreinigung </a>
              <a class="btn btn-link" href="" style="text-decoration: none;">Gartenpflege </a>
              <a class="btn btn-link" href="" style="text-decoration: none;">Wohnungsreinigung </a>
              
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn px-3 m-3 m-lg-0" data-wow-delay="0.7s">
             <h5 class="text-primary mb-4">Kontakt</h5>
              <p class="text-white"><i class="fa fa-map-marker-alt mx-2"></i>75181 Pforzheim, Germany</p>
              <p class="text-white"><i class="fa fa-phone-alt mx-2"></i>0176 329 493 64 / 015 75 6464 139</p>
              <p class="text-white"><i class="fa fa-envelope mx-2"></i>info@dalas-pf.de </p>

          </div>
      </div>
  </div>
  <div class="container wow fadeIn" data-wow-delay="0.1s">
      <div class="copyright">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="text-white"> &copy; {{ date('Y') }} <a class="text-white" href="#">www.dalas-pf.de</a> | Alle Rechte vorbehalten </p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                  <div class="footer-menu">
                      <a href="">Startseite</a>
                      <a href="">Impressum</a>
                      <a href="">Cookies</a>
                      <a href="">FAQs</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
 </footer>

 <style>
    .footer {
  background-size: contain;
}


.footer .btn.btn-social {
  margin-right: 5px;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255,255,255,.5);
  border: 1px solid rgba(256, 256, 256, .1);
  border-radius: 40px;
  transition: .3s;
}

.footer .btn.btn-social:hover {
  color: #eeeeee;
  background-color: #6EC0D8
}

.footer .btn.btn-link {
  display: block;
  margin-bottom: 10px;
  padding: 0;
  text-align: left;
  font-weight: normal;
  transition: .3s;
   color: #eeeeee;
}

.footer .btn.btn-link:hover {
  color: #6EC0D8;
}

.footer .btn.btn-link::before {
  position: relative;
  content: "\f105";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  margin-right: 10px;
}

.footer .btn.btn-link:hover {
  letter-spacing: 1px;
  box-shadow: none;
}

.footer .copyright {
  padding: 25px 0;
  font-size: 14px;
  border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
  color: rgba(255,255,255,.5);
}

.footer .copyright a:hover {
  color: #FFFFFF;
}

.footer .footer-menu a {
  margin-right: 15px;
  padding-right: 15px;
  border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
  margin-right: 0;
  padding-right: 0;
  border-right: none;
}
 </style>
