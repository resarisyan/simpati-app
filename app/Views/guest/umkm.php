<?= $this->extend('layouts/guest/app') ?>
<?= $this->section('main') ?>
<?= $this->section('seo') ?>
<meta name="description" content="Lapak UMKM adalah tempat untuk membeli produk UMKM yang ada di Desa Sukamanah.">
<meta name="keywords" content="SIMPATI Desa Sukamanah - Lapak UMKM">
<?= $this->endSection() ?>
<section class="" style="
          background: url('<?= base_url('corpox-template/assets/images/banner-project-detail.jpg'); ?>') no-repeat
            center center / cover;
        ">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>Lapak UMKM</h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                                <?php foreach ($breadcrumbs as $key => $breadcrumb) : ?>
                                    <li class="breadcrumb-item"><a href="<?= $breadcrumb ?>"><?= $key ?></a></li>
                                <?php endforeach; ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section section-lg">
    <div class="container">
        <div class="row mb-8 justify-content-center">
            <div class="col-md-12 text-center card-wrapper">
                <div class="card-body">
                    <h2 class="card-title text-truncate">Lapak UMKM</h2>
                    <p class="card-text">Lapak UMKM adalah tempat untuk membeli produk UMKM yang ada di Desa Sukamanah.</p>
                    <a href="<?= base_url('umkm-create') ?>" class="btn btn-primary">Tambah Produk</a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($umkms as $umkm) : ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="<?= base_url('uploads/' . $umkm['image']) ?>" class="card-img-top" alt="<?= $umkm['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-truncate"><?= $umkm['name']; ?></h5>
                            <a href="<?= $umkm['link'] ?>" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?= $pager->links('default', 'custom_pagination') ?>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
    .card {
        max-width: 400px;
        max-height: 600px;
        margin: 0 auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-radius: 10px 10px 0 0;
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    .card-body {
        padding: 1.25rem;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }

    .card-subtitle {
        font-size: 1rem;
        color: #666;
    }

    .card-text {
        font-size: 1rem;
        color: #444;
    }
</style>
<?= $this->endSection() ?>