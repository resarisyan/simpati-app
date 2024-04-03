<?= $this->extend('layouts/guest/app') ?>

<?= $this->section('main') ?>
<!--hero section start-->
<section id="home" class="section pt-9 pb-9 section-header text-white gradient-overly-right-color" style="
          background: url('<?= isset($home['image']) ? base_url('uploads/' . $home['image']) :  base_url('corpox-template/assets/images/hero-bg.png') ?>') no-repeat center center /
            cover;
        ">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="hero-slider-content">
                    <span class="text-uppercase"><?= $home['caption'] ?></span>
                    <h1 class="display-2"><?= $home['title'] ?></h1>
                    <p class="lead">
                        <?= $home['description'] ?>
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
                        <h5>Smart People</h5>
                        <p class="mb-0">
                            Memiliki masyarakat yang cerdas dan berdaya saing tinggi
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
                            Memiliki lingkungan yang bersih, sehat, dan asri
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
                        <img src="<?= base_url('corpox-template/assets/img/color-shape.svg') ?>" alt="dot" class="img-fluid" />
                    </div>
                    <img class="fancy-radius img-fluid" src="<?= base_url('uploads/' . $about['image']) ?>" alt="about" />
                    <div class="dot-shape position-absolute bottom-0">
                        <img src="<?= base_url('corpox-template/assets/img/dot-shape.png') ?>" alt="dot" />
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="video-promo-content">
                    <h2>Tentang Kami</h2>
                    <p class="lead">
                        <?= $about['description'] ?>
                    </p>
                    <!-- <a href="#" class="btn btn-primary mt-3">Baca Selengkapnya</a> -->
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
            <?php foreach ($callCenter as $value) : ?>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="services-single d-flex p-5 shadow-sm bg-white rounded">
                        <div class="icon icon-lg mr-4 text-secondary">
                            <img src="<?= base_url('uploads/' . $value['image']) ?>" alt="icon" class="img-fluid" width="42" height="42" />
                        </div>
                        <div class="services-content-wrap">
                            <h3 class="h6"><?= $value['name'] ?></h3>
                            <p>
                                <?= $value['caption'] ?>
                            </p>
                            <button class="btn btn-primary">
                                <a href="<?= $value['link'] ?>" class="font-small font-weight-bold text-white" target="_blank">Hubungi</a>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--services section end-->
<!--cta section start-->
<section id="apps" class="section py-0" style="
          background: url('<?= base_url('corpox-template/assets/images/banner-project-detail.jpg') ?>') no-repeat
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
<section id="kegiatandesa" class="section section-lg">
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
                    <?php foreach ($villageActivity as $value) : ?>
                        <div class="item">
                            <div class="portfolio-wrapper border border-variant-soft rounded bg-soft p-2">
                                <a href="<?= base_url('village-activity/' . $value['slug']) ?>">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="<?= base_url('uploads/' . $value['image']) ?>" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1"><?= $value['title'] ?></h5>
                                        <p><?= $value['description'] ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--portfolio section end-->
<!--cta section start-->
<section id="kampungpintar" class="section section-sm py-5">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-md-7">
                <div class="subscribe-content">
                    <h3>Kampung Pintar</h3>
                    <p class="mb-lg-0 mb-md-0">
                        Kunjungi situs web kampung pintar sukmanah untuk mendapatkan informasi terkini seputar desa sukamanah.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-btn text-lg-right text-sm-left">
                    <a href="https://sukamanah-cugenang.kampungpinter.co.id/" class="btn btn-primary">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--cta section end-->
<?= $this->endSection() ?>