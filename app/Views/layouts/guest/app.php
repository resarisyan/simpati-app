<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <?= $this->renderSection('seo') ?>
    <meta name="author" content="Desa Sukamanah">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="SIMPATI - Sistem Informasi Manajemen Pelayanan Terpadu dan Integrasi">
    <meta property="og:description" content="Platform untuk mempermudah pelayanan administrasi dan informasi publik.">
    <meta property="og:image" content="<?= base_url('corpox-template/assets/images/banner-project-detail.jpg') ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="SIMPATI - Sistem Informasi Manajemen Pelayanan Terpadu dan Integrasi">
    <meta property="twitter:description" content="Platform untuk mempermudah pelayanan administrasi dan informasi publik.">
    <meta property="twitter:image" content="<?= base_url('corpox-template/assets/images/banner-project-detail.jpg') ?>">

    <!--favicon icon-->
    <link rel="icon" href="<?= base_url('corpox-template/assets/images/favicon.ico') ?>" type="image/png" sizes="16x16" />
    <!--title-->
    <title>SIMPATI</title>
    <!--build:css-->
    <link rel="stylesheet" href="<?= base_url('corpox-template/assets/css/main.css'); ?>" />
    <?= $this->renderSection('styles'); ?>
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
    <?= $this->include('layouts/guest/header'); ?>
    <!--header section end-->

    <!--hero section start-->
    <div class="main">
        <?= $this->renderSection('main'); ?>
    </div>
    <!--hero section end-->

    <!--footer section start-->
    <?= $this->include('layouts/guest/footer'); ?>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: true
        });
        <?php if (session()->has('error')) : ?>
            swalWithBootstrapButtons.fire({
                title: 'Error!',
                html: "<?= session('success') ?>",
                icon: 'error',
                timer: 3000
            })
        <?php elseif (session()->has('success')) : ?>
            swalWithBootstrapButtons.fire({
                title: 'Success!',
                html: "<?= session('success') ?>",
                icon: 'success',
                timer: 3000
            })
        <?php elseif (session()->has('status')) : ?>
            swalWithBootstrapButtons.fire({
                title: 'Success!',
                html: "<?= session('status') ?>",
                icon: 'success',
                timer: 3000
            })
        <?php endif; ?>
    </script>
    <!--endbuild-->
</body>

</html>