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
        <div class="row mb-8 justify-content-center">
            <div class="col-md-12 text-center card-wrapper">
                <div class="card border-0 rounded shadow">
                    <img src="<?= base_url('uploads/' . $category['image']) ?>" alt="<?= $category['title']; ?>" class="card-img-top img-fluid rounded">
                    <div class="card-body">
                        <h2 class="card-title"><?= $category['title']; ?> - <?= $category['caption']; ?></h2>
                        <p class="card-text"><?= $category['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="<?= base_url('uploads/' . $post['image']) ?>" class="card-img-top" alt="<?= $post['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-truncate"><?= $post['title']; ?></h5>
                            <p class="card-text"><?= short_description($post['content'], 50); ?></p>
                            <a href="<?= route_to('home_village_activity_post', $post['slug']); ?>" class="btn btn-primary">Read More</a>
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