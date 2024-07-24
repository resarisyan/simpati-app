<?php
$this->extend('layouts/dashboard/app');

$this->section('form');
require_once 'form.php';
$this->endSection();

$this->section('dataTable');
?>
<script type="text/javascript">
    const url = "<?= route_to('lapak_umkm_index'); ?>";
    const modalTitle = 'Lapak UMKM';
    const forms = ['name', 'image', 'harga', 'link', 'status'];
    const dataColumn = [{
            data: 'no',
            orderable: false
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'image',
            name: 'image',
            orderable: false,
            searchable: false
        },
        {
            data: 'harga',
            name: 'harga'
        },
        {
            data: 'link',
            name: 'link'
        },
        {
            data: 'status',
            name: 'status'
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        }
    ];
</script>
<?php
$this->endSection();
