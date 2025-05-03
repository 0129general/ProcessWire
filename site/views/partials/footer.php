  <!--===== start wpo-site-footer-section =====-->
  <footer class="wpo-site-footer">
      <div class="wpo-upper-footer">
          <div class="container-fluid">
              <div class="row">
                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                      <div class="widget about-widget">
                          <div class="logo widget-title">
                              <img src="<?= $assets ?>/images/logo-skks.png" alt="logo">
                          </div>
                          <p>
                              Elit commodo nec urna erat morbi at hac turpis aliquam. In tristique elit nibh
                              turpis. Lacus volutpat ipsum convallis tellus pellentesque etiam.
                          </p>
                          <div class="social-widget">
                              <ul>
                                  <li>
                                      <a href="#"><i class="ti-facebook"></i></a>
                                      <a href="#"><i class="ti-twitter-alt"></i></a>
                                      <a href="#"><i class="ti-linkedin"></i></a>
                                      <a href="#"><i class="ti-instagram"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                      <div class="widget link-widget">
                          <div class="widget-title">
                              <h3>Kontakt</h3>
                          </div>
                          <ul>
                              <li>info@skks-nordheide.de</li>
                              <li>04181 / 999 123</li>
                              <li>Poststraße 13</li>
                              <li>21244 Buchholz</li>
                          </ul>
                      </div>
                  </div>

                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                      <div class="widget link-widget">
                          <div class="widget-title">
                              <h3>Schnellzugriff</h3>
                          </div>
                          <ul>
                              <li><a href="<?= $pages->get('/home/')->url ?>"><span class="rolling-text">Startseite</span></a></li>
                              <li><a href="<?= $pages->get('/about/')->url ?>"><span class="rolling-text">Über uns</span></a></li>
                              <li><a href="<?= $pages->get('/currentpro/')->url ?>"><span class="rolling-text">Aktuelles Projekt</span></a></li>
                              <li><a href="<?= $pages->get('/projects/')->url ?>"><span class="rolling-text">Projekte</span></a></li>
                              <li><a href="<?= $pages->get('/contact/')->url ?>"><span class="rolling-text">Kontakt</span></a></li>
                          </ul>
                      </div>
                  </div>

                  <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                      <div class="widget newsletter-widget">
                          <div class="widget-title">
                              <h3>Newsletter</h3>
                          </div>
                          <form>
                              <input type="email" class="input-fild" placeholder="Your Email...">
                              <button>Subscribe</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="wpo-lower-footer">
          <div class="container-fluid">
              <div class="row g-0">
                  <div class="col col-lg-6 col-12">
                      <p class="copyright">
                          &copy; 2025 SKKS-Nordheide GbR
                      </p>
                  </div>
                  <div class="col col-lg-6 col-12">
                      <ul class="right">
                          <li><a href="<?= $pages->get('/privacy/')->url ?>"><span class="rolling-text">Impressum</span></a>-<a href="<?= $pages->get('/privacy/')->url ?>"><span class="rolling-text">Datenschutzerklärung</span></a></li>
                          <li><span>Webauftritt gestaltet von</span><a href="<?= $pages->get('/login/')->url ?>"><span class="rolling-text">Vision Reality</span></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>