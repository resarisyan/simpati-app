<?php
$this->extend('layouts/dashboard/app');

$this->section('form');
require_once 'form.php';
$this->endSection();

$this->section('dataTable');
?>
<script type="text/javascript">
    const url = "<?= route_to('service_index'); ?>";
    const modalTitle = 'Service';
    const forms = ['name', 'link', 'icon'];
    const dataColumn = [{
            data: 'no',
            orderable: false
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'link',
            name: 'link'
        },
        {
            data: 'icon',
            name: 'icon',
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

$this->section('styles');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
$this->endSection();
$this->section('scripts');
?>

<script>
    $(document).ready(function() {
        console.log('ready');
        const iconPreview = $('#icon-preview');
        //event when select
        $('#icon').on('change', function() {
            const icon = $(this).val();
            iconPreview.html(`<i class="${icon} fa-2x text-primary"></i>`);
        });
    });
</script>

<?php
$this->endSection();
?>