<?php
$this->extend('layouts/dashboard/app');

$this->section('form');
require_once 'form.php';
$this->endSection();

$this->section('dataTable');
?>
<script type="text/javascript">
    const url = "<?= route_to('village_activity_category_index'); ?>";
    const modalTitle = 'Village Activity Category';
    const forms = ['title', 'description', 'caption', 'image'];
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
            name: 'description',
            orderable: false,
            searchable: false
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
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        }
    ];
</script>
<?php
$this->endSection();
