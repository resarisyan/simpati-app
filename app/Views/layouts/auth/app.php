<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('tivo-template/assets/images/favicon.ico') ?>" type="image/png" sizes="16x16" />
    <title><?= $this->renderSection('title') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/font-awesome.css') ?>">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/icofont.css') ?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/themify.css') ?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/flag-icon.css') ?>">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/feather-icon.css') ?>">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/bootstrap.css') ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/style.css') ?>">
    <link id="color" rel="stylesheet" href="<?= base_url('tivo-template/assets/css/color-1.css') ?>" media="screen">
    <!-- Responsive css-->
    <link rel=" stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/responsive.css') ?>">
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="<?= base_url('tivo-template/assets/images/logo-light.png') ?>" alt="looginpage"></a></div>
                        <div class="login-main">
                            <?= $this->renderSection('main'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="<?= base_url('tivo-template/assets/js/jquery-3.6.0.min.js') ?>"></script>
        <!-- Bootstrap js-->
        <script src="<?= base_url('tivo-template/assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
        <!-- feather icon js-->
        <script src="<?= base_url('tivo-template/assets/js/icons/feather-icon/feather.min.js') ?>"></script>
        <script src="<?= base_url('tivo-template/assets/js/icons/feather-icon/feather-icon.js') ?>"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="<?= base_url('tivo-template/assets/js/config.js') ?>"></script>
        <!-- Template js-->
        <script src="<?= base_url('tivo-template/assets/js/script.js') ?>"></script>
        <!-- login js-->
    </div>
</body>

</html>