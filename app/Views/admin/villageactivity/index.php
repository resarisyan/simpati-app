<?php
$this->extend('layouts/dashboard/app');

$this->section('form');
require_once 'form.php';
$this->endSection();

$this->section('dataTable');
?>
<script type="text/javascript">
    const url = "<?= url_to('village_activity_index'); ?>";
    const modalTitle = 'Village Activity';
    const forms = ['title', 'description', 'caption', 'image', 'video'];
    const dataColumn = [{
            data: 'no',
            orderable: false
        },
        {
            data: 'title',
            name: 'title'
        },
        {
            data: 'description',
            name: 'description'
        },
        {
            data: 'caption',
            name: 'caption'
        },
        {
            data: 'image',
            name: 'image',
            orderable: false,
            searchable: false
        },
        {
            data: 'video',
            name: 'video',
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
