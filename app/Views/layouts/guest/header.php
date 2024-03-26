  <!--header section start-->
  <header class="header position-relative z-9">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary fixed-top headroom">
          <div class="container position-relative">
              <a class="navbar-brand mr-lg-3" href="index.html">
                  <img class="navbar-brand-dark" src="assets/images/simpati-light.png" alt="menuimage" />
                  <img class="navbar-brand-light" src="assets/images/simpati-dark.png" alt="menuimage" />
              </a>
              <div class="navbar-collapse collapse" id="navbar-default-primary">
                  <div class="navbar-collapse-header">
                      <div class="row">
                          <div class="col-6 collapse-brand">
                              <a href="#">
                                  <img src="assets/img/logo-color.png" alt="menuimage" />
                              </a>
                          </div>
                          <div class="col-6 collapse-close">
                              <i class="fas fa-times" data-toggle="collapse" role="button" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation"></i>
                          </div>
                      </div>
                  </div>
                  <?= $this->include('layouts/navbar'); ?>
              </div>
              <div class="d-flex align-items-center">
                  <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
          </div>
      </nav>
  </header>
  <!--header section end-->