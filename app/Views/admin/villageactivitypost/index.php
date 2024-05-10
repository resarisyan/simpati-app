<?php
$this->extend('layouts/dashboard/app');

$this->section('dataTable');
?>
<script type="text/javascript">
    const modalTitle = 'Village Activity Post';
    const url = "<?= route_to('village_activity_post_index', $category_slug); ?>";
    const dataColumn = [{
            data: 'no',
            orderable: false
        },
        {
            data: 'title',
            name: 'title'
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
<?php $this->endSection(); ?>

<?php $this->section('headerCard'); ?>
<a class="btn btn-sm btn-primary" href="<?= route_to('village_activity_post_create', $category_slug); ?>">
    <em class="icon-plus"></em><span> Tambah</span>
</a>
<?php $this->endSection(); ?>