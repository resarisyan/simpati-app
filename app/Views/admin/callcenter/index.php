<?php
$this->extend('layouts/dashboard/app');

$this->section('form');
require_once 'form.php';
$this->endSection();

$this->section('dataTable');
?>
<script type="text/javascript">
    const url = "<?= url_to('call_center_index'); ?>";
    const modalTitle = 'Call Center';
    const forms = ['name', 'caption', 'link', 'image'];
    const dataColumn = [{
            data: 'no',
            orderable: false
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'caption',
            name: 'caption'
        },
        {
            data: 'link',
            name: 'link'
        },
        {
            data: 'image',
            name: 'image',
            orderable: false,
            searchable: false
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
