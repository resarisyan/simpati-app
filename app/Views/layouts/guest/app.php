<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />
    <!--title-->
    <title>SIMPATI</title>
    <!--build:css-->
    <link rel="stylesheet" href="<?= base_url('corpox-template/assets/css/main.css'); ?>" />
    <!-- endbuild -->
</head>

<body>
    <!--preloader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--preloader end-->

    <!--header section start-->
    <?= $this->include('layouts/header'); ?>
    <!--header section end-->

    <!--hero section start-->
    <div class="main">
        <!--hero section start-->
        <section id="home" class="section pt-9 pb-9 section-header text-white gradient-overly-right-color" style="
          background: url('assets/images/hero-bg.png') no-repeat center center /
            cover;
        ">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-slider-content">
                            <span class="text-uppercase">SIMPATI</span>
                            <h1 class="display-2">Desa Sukamanah Cianjur</h1>
                            <p class="lead">
                                Mari jelajahi keberagaman layanan dan potensi Desa Sukamanah,
                                serta berpartisipasi aktif dalam membangun masa depan yang
                                lebih baik untuk kita semua.
                            </p>
                            <a href="#" class="btn btn-secondary mt-4">Get Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->
        <!--promo section start-->
        <section class="section section-sm pb-0 mt-n8 z-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                        <div class="single-promo-block promo-hover-bg-1 hover-image shadow p-5 rounded-custom bg-white">
                            <div class="icon icon-lg text-primary">
                                <i class="fab fa-connectdevelop"></i>
                            </div>
                            <div class="promo-block-content">
                                <h5>Smart City</h5>
                                <p class="mb-0">
                                    Menjadi Desa yang cerdas dan berdaya saing tinggi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                        <div class="single-promo-block promo-hover-bg-2 hover-image shadow p-5 rounded-custom bg-white">
                            <div class="icon icon-lg text-primary">
                                <i class="fas fa-landmark"></i>
                            </div>
                            <div class="promo-block-content">
                                <h5>Smart Village</h5>
                                <p class="mb-0">
                                    Menjadi Desa yang cerdas dan berdaya saing tinggi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                        <div class="single-promo-block promo-hover-bg-3 hover-image shadow p-5 rounded-custom bg-white">
                            <div class="icon icon-lg text-primary">
                                <i class="fas fa-globe-asia"></i>
                            </div>
                            <div class="promo-block-content">
                                <h5>Smart Environment</h5>
                                <p class="mb-0">
                                    Menjadi Desa yang cerdas dan berdaya saing tinggi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->
        <!--about section start-->
        <section id="about" class="section section-lg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="card bg-primary position-relative shadow-lg fancy-radius p-3">
                            <div class="dot-shape-top position-absolute">
                                <img src="assets/img/color-shape.svg" alt="dot" class="img-fluid" />
                            </div>
                            <img class="fancy-radius img-fluid" src="assets/images/about-us.jpg" alt="modern desk" />
                            <div class="dot-shape position-absolute bottom-0">
                                <img src="assets/img/dot-shape.png" alt="dot" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="video-promo-content">
                            <h2>Tentang Kami</h2>
                            <p class="lead">
                                Selamat datang di Desa Sukamanah, sebuah perjalanan ke arah
                                keindahan alam dan kehidupan masyarakat yang kaya akan budaya
                                dan tradisi. Terletak di kaki Gunung Gede Pangrango dan
                                dikelilingi oleh pesona alam yang memukau, Desa Sukamanah
                                merupakan sebuah permata tersembunyi di tengah-tengah
                                kabupaten Cianjur.
                            </p>
                            <a href="#" class="btn btn-primary mt-3">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about section end-->
        <!--services section start-->
        <section id="services" class="section services-section ptb-100 bg-soft">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Call Center & Emergency Call</h2>
                            <p class="lead">
                                Nomor darurat dan layanan call center yang siap membantu dan
                                memberikan informasi kepada masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-settings"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">Pelayanan Dan Pengaduan</h3>
                                <p>
                                    Cepat dan mudah dalam memberikan pelayanan dan pengaduan
                                    kepada masyarakat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-alert"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">Pelayanan Darurat</h3>
                                <p>
                                    Layanan darurat yang siap membantu masyarakat dalam situasi
                                    darurat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-headphone-alt"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">Ambulance Desa</h3>
                                <p>
                                    Layanan ambulance yang siap membantu masyarakat dalam
                                    keadaan darurat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-user"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">Bidan Desa</h3>
                                <p>
                                    Layanan bidan desa yang siap membantu masyarakat dalam
                                    keadaan darurat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-heart"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">RSUD</h3>
                                <p>
                                    Layanan rumah sakit umum desa yang siap membantu masyarakat
                                    dalam keadaan darurat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-shield"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">POLSEK</h3>
                                <p>
                                    Layanan polsek desa yang siap membantu masyarakat dalam
                                    keadaan darurat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-announcement"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">Pemadam Kebakaran</h3>
                                <p>
                                    Layanan pemadam kebakaran desa yang siap membantu masyarakat
                                    dalam keadaan darurat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                        <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                            <div class="icon icon-lg mr-4 text-secondary">
                                <i class="ti-light-bulb"></i>
                            </div>
                            <div class="services-content-wrap">
                                <h3 class="h6">PLN</h3>
                                <p>
                                    Layanan PLN desa yang siap membantu masyarakat dalam keadaan
                                    darurat.
                                </p>
                                <button class="btn btn-primary">
                                    <a href="#" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services section end-->
        <!--cta section start-->
        <section id="apps" class="section py-0" style="
          background: url('assets/images/banner-project-detail.jpg') no-repeat
            center fixed;
        ">
            <div class="section-lg section bg-gradient-primary text-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-md-10 col-lg-9">
                            <div class="section-title text-center mb-5">
                                <h2>Download Kampung Pinter Apps</h2>
                                <p class="lead">
                                    Kampung Pinter adalah aplikasi yang memudahkan masyarakat
                                    dalam mengakses informasi dan layanan pemerintah desa
                                    Sukamanah.
                                </p>
                            </div>
                            <div class="download-btn-wrap text-center">
                                <a class="btn btn-pill border border-variant-light text-white shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0" href="https://play.google.com/store/apps/details?id=com.asqi.smartvillagemobile">
                                    <div class="d-flex align-items-center">
                                        <span class="icon icon-md mr-3 h-auto"><i class="fab fa-google-play"></i></span>
                                        <div class="d-block text-left">
                                            <small class="font-small">Download on the</small>
                                            <div class="h6 mb-0">Google Play</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta section end-->
        <!--portfolio section start-->
        <section id="activities" class="section section-lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Kegiatan Desa</h2>
                            <p class="lead">
                                Bergabunglah dalam Kegiatan Komunitas Desa Sukamanah untuk
                                Menciptakan Perubahan Positif dan Kesejahteraan Bersama!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="owl-carousel owl-theme client-testimonial custom-dot">
                            <div class="item">
                                <div class="portfolio-wrapper border border-variant-soft rounded bg-soft p-2">
                                    <a href="project-details.html" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="assets/images/bicara.jpeg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Bicara</h5>
                                            <p>Bincang Warga Bareng Indra</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="portfolio-wrapper border border-variant-soft rounded bg-soft p-2">
                                    <a href="project-details.html" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="assets/images/ketan-merah.jpeg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Ketan Merah</h5>
                                            <p>Pelayanan Kesehatan Masyarakat Sukamanah</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="portfolio-wrapper border border-variant-soft rounded bg-soft p-2">
                                    <a href="project-details.html" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="assets/images/keprok.jpeg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Keprok</h5>
                                            <p>Kelompok Pemberdayaan Pemuda Produktif</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio section end-->
        <!--cta section start-->
        <section id="contact" class="section section-sm py-5">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7">
                        <div class="subscribe-content">
                            <h3>Contact Us</h3>
                            <p class="mb-lg-0 mb-md-0">
                                Jika Anda memiliki pertanyaan atau ingin berpartisipasi dalam
                                kegiatan desa, silahkan hubungi kami.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="#" class="btn btn-primary">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta section end-->
    </div>
    <!--hero section end-->

    <!--footer section start-->
    <?= $this->include('layouts/footer'); ?>
    <!--footer section end-->

    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="<?= base_url('corpox-template/assets/js/vendors/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/popper.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/mixitup.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/headroom.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/smooth-scroll.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/wow.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/countUp.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/vendors/validator.min.js') ?>"></script>
    <script src="<?= base_url('corpox-template/assets/js/app.js') ?>"></script>
    <!--endbuild-->
</body>

</html>