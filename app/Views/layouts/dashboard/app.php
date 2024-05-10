<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_field() ?>">
    <link rel="icon" href="<?= base_url('tivo-template/assets/images/favicon.ico') ?>" type="image/png" sizes="16x16" />
    <title><?= $title ?? '' ?></title>
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
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/scrollbar.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/sweetalert2.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template//assets/css/vendors/datatables.css') ?>">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/vendors/bootstrap.css') ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/custom.css') ?>">
    <link id="color" rel="stylesheet" href="<?= base_url('tivo-template/assets/css/color-1.css') ?>" media="screen">
    <!-- Responsive css-->
    <link rel=" stylesheet" type="text/css" href="<?= base_url('tivo-template/assets/css/responsive.css') ?>">

    <?= $this->renderSection('styles') ?>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?= $this->include('layouts/dashboard/header'); ?>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="<?= site_url(); ?>"><img class="img-fluid for-light" src="<?= base_url('tivo-template/assets/images/logo.png') ?>" alt=""></a>
                        <div class="back-btn"><i data-feather="grid"></i></div>
                        <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html">
                            <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
                        </a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <?= $this->include('layouts/dashboard/navbar'); ?>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3><?= $title ?? '' ?> Page</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><i data-feather="home"></i></a></li>
                                    <?php foreach ($breadcrumbs as $key => $breadcrumb) : ?>
                                        <li class="breadcrumb-item"><a href="<?= $breadcrumb ?>"><?= $key ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid dashboard-default">
                    <div class="row">
                        <?= $this->renderSection('main'); ?>
                        <?php if (isset($dataTable)) : ?>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header pb-0 mb-4">
                                        <?= $this->renderSection('headerCard') ?>
                                        
                                        <?php if (isset($create)) : ?>
                                            <a class="btn btn-sm btn-primary" href="javascript:void(0)" id="btnCreate" data-bs-toggle="modal" data-bs-target="#modalForm">
                                                <em class="icon-plus"></em><span> Tambah</span>
                                            </a>
                                        <?php endif; ?>

                                        <?php if (isset($deleteAll)) : ?>
                                            <a href=" javascript:void(0)" id="btnDeleteAll" class="btn btn-sm btn-danger">
                                                <em class="icon-trash"></em><span> Hapus Semua</span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php if (isset($forms)) : ?>
                                        <div class="table-responsive theme-scrollbar">
                                            <div class="table-responsive theme-scrollbar">
                                                <table class="display dataTable no-footer" id="dataTable" style="width:100%" role="grid">
                                                    <thead>
                                                        <tr role="row">
                                                            <?php foreach ($forms as $form) : ?>
                                                                <th><?= $form ?></th>
                                                            <?php endforeach; ?>
                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <?= $this->include('layouts/dashboard/footer'); ?>
            </footer>
        </div>

        @if (isset($create) || isset($edit))
        <?php if (isset($create) || isset($edit)) : ?>
            <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalForm" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalHeading">Modal Title</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form" action="javascript:void(0)" enctype="multipart/form-data" class="form-validate is-alter">
                                <input type="hidden" name="_method" value="PUT">
                                <?= $this->renderSection('form') ?>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btnSave">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- latest jquery-->
        <script src="<?= base_url('tivo-template/assets/js/jquery-3.6.0.min.js') ?>"></script>
        <!-- Bootstrap js-->
        <script src="<?= base_url('tivo-template/assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
        <!-- feather icon js-->
        <script src="<?= base_url('tivo-template/assets/js/icons/feather-icon/feather.min.js') ?>"></script>
        <script src="<?= base_url('tivo-template/assets/js/icons/feather-icon/feather-icon.js') ?>"></script>
        <!-- scrollbar js-->
        <script src="<?= base_url('tivo-template/assets/js/scrollbar/simplebar.js') ?>"></script>
        <script src="<?= base_url('tivo-template/assets/js/scrollbar/custom.js') ?>"></script>
        <!-- Sidebar jquery-->
        <script src="<?= base_url('tivo-template/assets/js/config.js') ?>"></script>
        <script src="<?= base_url('tivo-template/assets/js/sidebar-menu.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="<?= base_url('tivo-template/assets/js/tooltip-init.js') ?>"></script>
        <!-- Template js-->
        <script src="<?= base_url('tivo-template/assets/js/script.js') ?>"></script>
        <!-- login js-->

        <?= $this->renderSection('scripts') ?>

        <script type="text/javascript">
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            });
            <?php if (session()->getFlashData('error')) : ?>
                swalWithBootstrapButtons.fire({
                    title: 'Error!',
                    html: "<?= session()->getFlashData('error') ?>",
                    icon: 'error',
                    timer: 3000
                })
            <?php elseif (session()->getFlashData('success')) : ?>
                swalWithBootstrapButtons.fire({
                    title: 'Success!',
                    html: "<?= session()->getFlashData('success') ?>",
                    icon: 'success',
                    timer: 3000
                })
            <?php elseif (session()->getFlashData('status')) : ?>
                swalWithBootstrapButtons.fire({
                    title: 'Success!',
                    html: "<?= session()->getFlashData('status') ?>",
                    icon: 'success',
                    timer: 3000
                })
            <?php endif; ?>

            $("#logout").on("click", function(e) {
                e.preventDefault();
                swalWithBootstrapButtons.fire({
                    title: 'Anda yakin ingin logout?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "<?= url_to('logout') ?>";
                    }
                });
            })
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        <?php if (isset($dataTable)) : ?>
            <script src="<?= base_url('tivo-template/assets/js/datatable/datatables/jquery.dataTables.min.js') ?>"></script>
            <?= $this->renderSection('dataTable') ?>
            <script type="text/javascript">
                let dataTable;
                $(document).ready(function() {
                    let methodType = '';
                    let urlUpdate = '';
                    $('#dataTable').DataTable({
                        responsive: true,
                        stateSave: true,
                        processing: true,
                        serverSide: true,
                        ajax: url,
                        order: [],
                        columns: dataColumn,
                    });

                    <?php if (isset($create)) : ?>
                        $('#btnCreate').click(function() {
                            clearModal('Tambah', 'POST');
                            forms.forEach(e => {
                                let data = e.split(":");
                                if (data[0] == 'relation') {
                                    $('#' + data[1]).val('');
                                } else {
                                    $('#' + e).val('');
                                }
                            });

                            <?= $this->renderSection('customCreate') ?>
                        });
                    <?php endif; ?>

                    <?php if (isset($edit)) : ?>
                        $('body').on('click', '.btnEdit', function() {
                            clearModal('Ubah', 'PUT');
                            let id = $(this).data('id');
                            urlUpdate = url + '/' + id;
                            $.get(url + '/' + id, function(res) {
                                <?= $this->renderSection('customBeginEdit') ?>
                                forms.forEach(e => {
                                    console.log(e);
                                    let data = e.split(":");
                                    if (data[0] == 'relation') {
                                        if ($('#' + data[1]).prop('tagName').toLowerCase() === 'select') {
                                            $('#' + data[1]).val(res.data[relationName][data[1]]).trigger('change');
                                        } else {
                                            $('#' + data[1]).val(res.data[relationName][data[1]]);
                                        }
                                        <?= $this->renderSection('customEditRelation') ?>
                                    } else {
                                        console.log($('#' + e).prop('tagName'))
                                        if ($('#' + e).prop('tagName').toLowerCase() === 'select') {
                                            $('#' + e).val(res.data[e]).trigger('change');
                                        } else if ($('#' + e).attr('type') != 'file') {
                                            $('#' + e).val(res.data[e]);
                                        }
                                        <?= $this->renderSection('customEdit') ?>
                                    }
                                });
                                <?= $this->renderSection('customEndEdit') ?>
                            })
                        });
                    <?php endif; ?>

                    <?php if (isset($create) || isset($edit)) : ?>

                        function clearModal(title, type) {
                            methodType = type;
                            if ($("input").hasClass("image-file")) {
                                $('#preview-image').attr('src', "assets/img/preview.png");
                            }
                            $("input[name='_method']").val(methodType);
                            $('.error').removeClass('error');
                            $('.error_text').text('');
                            $('#btnSave').val('Submit');
                            $('#form').trigger('reset');
                            $('#modalHeading').html(title + ' ' + modalTitle);
                            $('#modalForm').modal('show');
                            <?= $this->renderSection('clearModal') ?>
                        }

                        $('.image-file').change(function() {
                            let reader = new FileReader();
                            reader.onload = (e) => {
                                $('#preview-image').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(this.files[0]);
                        });

                        $('#btnSave').on('click', (function(e) {
                            e.preventDefault();
                            if (methodType == 'POST') {
                                urlSave = url;
                            } else if (methodType == 'PUT') {
                                urlSave = urlUpdate;
                            }
                            $('#btnSave').text('Sending..', true);
                            let form = $('#form')[0];

                            $.ajax({
                                data: new FormData(form),
                                url: urlSave,
                                type: 'POST',
                                contentType: false,
                                cache: false,
                                processData: false,
                                beforeSend: function() {
                                    $(document).find('div.error_text').text('');
                                    $('.error').removeClass('error');
                                },
                                success: function(res) {
                                    swalWithBootstrapButtons.fire(
                                        'Success!',
                                        res.message,
                                        'success'
                                    )
                                    $('#form').trigger("reset");
                                    $('#modalForm').modal('hide');
                                    $("#dataTable").DataTable().ajax.reload();
                                    $('#btnSave').html('Save Changes');
                                },
                                error: function(res) {
                                    if (res.status == 400) {
                                        console.log(res.responseJSON.messages);
                                        $.each(res.responseJSON.messages, function(prefix, val) {
                                            let error = $('div.' + prefix + '_error');
                                            let input = $('#' + prefix);
                                            error.text(val)
                                            if (input.prop('tagName').toLowerCase() === 'select' && input.hasClass('select2-hidden-accessible')) {
                                                input.parent().find('.select2-selection').addClass('select2-error');
                                            } else {
                                                input.addClass('error');
                                            }
                                        });
                                    } else {
                                        swalWithBootstrapButtons.fire(
                                            'Error!',
                                            res.responseJSON.message,
                                            'error'
                                        )
                                    }
                                    $('#btnSave').html('Save Changes');
                                }
                            });
                        }));
                    <?php endif; ?>


                    <?php if (isset($delete)) :  ?>
                        $('body').on('click', '.btnDelete', function() {
                            let id = $(this).data("id");
                            deleteAjax(url + "/" + id);
                        });
                        $('body').on('click', '#btnDeleteAll', function() {
                            deleteAjax(url + "/delete/all");
                        });

                        function deleteAjax(urlDelete) {
                            swalWithBootstrapButtons.fire({
                                title: 'Apa kamu yakin?',
                                text: "Anda tidak akan dapat mengembalikan ini!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Ya, hapus!',
                                cancelButtonText: 'Tidak, batalkan!',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $.ajax({
                                        type: "DELETE",
                                        url: urlDelete,
                                        success: function(res) {
                                            swalWithBootstrapButtons.fire(
                                                'Success!',
                                                res.message,
                                                'success'
                                            )
                                            $("#dataTable").DataTable().ajax.reload();
                                        },
                                        error: function(res) {
                                            swalWithBootstrapButtons.fire(
                                                'Error!',
                                                res.responseJSON.message,
                                                'error'
                                            )
                                        }
                                    });
                                } else if (
                                    result.dismiss === Swal.DismissReason.cancel
                                ) {
                                    swalWithBootstrapButtons.fire(
                                        'Dibatalkan',
                                        'Datamu aman :)',
                                        'error'
                                    )
                                }
                            });
                        }
                    <?php endif; ?>
                });
            </script>
        <?php endif; ?>
</body>

</html>