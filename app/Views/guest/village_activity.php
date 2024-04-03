<?= $this->extend('layouts/guest/app') ?>
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
                        <h1>Project Details</h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="project">
                                    Project Details
                                </li>
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
        <div class="row justify-content-between">
            <div class="col-md-12 col-lg-6 mb-4 mb-md-0 mb-lg-0">
                <div class="img-wrap mb-md-4 mb-lg-0">
                    <img width="600px" src="<?= base_url('uploads/' . $villageActivity['image']) ?>" alt="project" class="img-fluid rounded shadow-sm">
                </div>
            </div>
            <?php if ($villageActivity['video']) : ?>
                <div class="col-md-12 col-lg-6">
                    <iframe class="w-100" height="300px" src="<?= $villageActivity['video'] ?>" title="YouTube video" allowfullscreen></iframe>
                </div>
            <?php endif; ?>
        </div>

        <!--project details row start-->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="project-details-content">
                    <h2><?= $villageActivity['title']; ?> - (<?= $villageActivity['caption'] ?>)</h2>
                    <p>
                        <?= $villageActivity['description']; ?>
                    </p>
                </div>
            </div>
        </div>
        <!--project details row end-->
    </div>
</section>
<?= $this->endSection() ?>