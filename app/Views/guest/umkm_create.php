<?= $this->extend('layouts/guest/app') ?>
<?= $this->section('seo') ?>
<meta name="description" content="Form Input Produk UMKM">
<meta name="keywords" content="SIMPATI Desa Sukamanah - Form Input Produk UMKM">
<?= $this->endSection() ?>
<?= $this->section('main') ?>
<section class="" style="
          background: url('<?= base_url('corpox-template/assets/images/banner-project-detail.jpg'); ?>') no-repeat
            center center / cover;
        ">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>UMKM</h1>
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
    <div class="container mt-5">
        <h2>Form Input Produk UMKM</h2>

        <form action="<?= base_url('umkm-store') ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>" required>
                <?php if (isset(session('errors')['name'])) : ?>
                    <div class="text-danger"><?= session('errors')['name'] ?></div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="image">Foto Produk</label>
                <input type="file" class="form-control" id="image" name="image" required>
                <?php if (isset(session('errors')['image'])) : ?>
                    <div class="text-danger"><?= session('errors')['image'] ?></div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga') ?>" required>
                <?php if (isset(session('errors')['harga'])) : ?>
                    <div class="text-danger"><?= session('errors')['harga'] ?></div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="link">Link WhatsApp</label>
                <input type="text" class="form-control" id="link" name="link" value="<?= old('link') ?>" required>
                <?php if (isset(session('errors')['link'])) : ?>
                    <div class="text-danger"><?= session('errors')['link'] ?></div>
                <?php endif ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<?= $this->endSection() ?>