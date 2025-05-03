  <!--===== Start header =====-->
  <header id="header">
      <div class="wpo-site-header wpo-header-style">
          <nav class="navigation navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                  <div class="row align-items-center g-0">
                      <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                          <div class="mobail-menu">
                              <button type="button" class="navbar-toggler open-btn">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar first-angle"></span>
                                  <span class="icon-bar middle-angle"></span>
                                  <span class="icon-bar last-angle"></span>
                              </button>
                          </div>
                      </div>
                      <div class="col-lg-5 col-md-6 col-6">
                          <div class="navbar-header">
                              <a class="navbar-brand" href="<?= $pages->get('/')->url ?>">
                                  <img src="<?= $assets ?>/images/logo-skks.png" alt="">
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-5 col-md-1 col-1">
                          <div id="navbar" class="collapse navbar-collapse navigation-holder">
                              <button class="menu-close"><i class="ti-close"></i></button>
                              <ul class="nav navbar-nav mb-2 mb-lg-0">
                                  <li class="menu-item-has-children image-style-item">
                                      <a href="<?= $pages->get('/')->url ?>">Home</a>
                                  </li>
                                  <li class="menu-item-has-children image-style-item">
                                      <a href="<?= $pages->get('/current-project/')->url ?>">Current Project</a>
                                  </li>
                                  <li class="menu-item-has-children">
                                      <a href="#">Projects</a>
                                      <ul class="sub-menu">
                                          <li><a href="<?= $pages->get('/projects/')->url ?>">Projects</a></li>
                                          <li><a href="<?= $pages->get('/projects-single/')->url ?>">Project Single</a></li>
                                      </ul>
                                  </li>
                                  <li class="menu-item-has-children image-style-item">
                                      <a href="<?= $pages->get('/about-us/')->url ?>">About Us</a>
                                  </li>
                                  <!-- Repeat same structure for other menu sections -->
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-2 col-2">
                          <div class="header-right">
                              <!-- <div class="header-search-form-wrapper">
                                  <div class="cart-search-contact">
                                      <button class="search-toggle-btn"><i class="fi flaticon-loupe"></i></button>
                                      <div class="header-search-form">
                                          <form>
                                              <div>
                                                  <input type="text" class="form-control" placeholder="Search here...">
                                                  <button type="submit"><i class="fi flaticon-loupe"></i></button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div> -->
                              <div class="close-form">
                                  <a class="theme-btn" href="<?= $pages->get('/contact-us/')->url ?>">Contact Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </nav>
      </div>
  </header>

  <!--===== end of header =====-->