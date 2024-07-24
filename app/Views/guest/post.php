<?= $this->extend('layouts/guest/app') ?>
<?= $this->section('seo') ?>
<meta name="description" content="<?= short_description($post['content'], 50) ?>">
<meta name="keywords" content="SIMPATI Desa Sukamanah - <?= $post['title'] ?>">
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
                        <h1>Kegiatan Desa Post</h1>
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
        <div class="row">
            <div class="col-md-8">
                <!-- Blog Post -->
                <div class="blog-post">
                    <img src="<?= base_url('uploads/' . $post['image']) ?>" alt="<?= $post['title'] ?>" class="img-fluid">
                    <div class="blog-post-content p-4">
                        <h2 class="blog-post-title"><?= $post['title'] ?></h2>
                        <div class="blog-post-meta mb-4">
                            <div class="text-muted fst-italic mb-2">Posted on <?= date('F j, Y', strtotime($post['created_at'])) ?></div>
                            <a class="badge bg-secondary text-decoration-none link-light" href="<?= route_to('home_village_activity_category', $post['category_slug']) ?>"><?= $post['category_title'] ?></a>
                        </div>
                        <section class="mb-5">
                            <?= $post['content'] ?>
                        </section>
                    </div>
                </div>
                <!-- End Blog Post -->

                <!-- Related Posts -->
                <div class="related-posts">
                    <h3 class="text-center mb-4">Related Posts</h3>
                    <div class="row">
                        <?php foreach ($relatedPosts as $relatedPost) : ?>
                            <div class="col-md-4">
                                <a href="<?= route_to('home_village_activity_post', $relatedPost['slug']) ?>">
                                    <div class="related-post">
                                        <img src="<?= base_url('uploads/' . $relatedPost['image']) ?>" alt="<?= $relatedPost['title'] ?>" class="img-fluid">
                                        <div class="related-post-content p-3">
                                            <h4 class="related-post-title"><?= $relatedPost['title'] ?></h4>
                                            <p>
                                                <?= short_description($relatedPost['content'], 50) ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- End Related Posts -->
            </div>
            <div class="col-md-4">
                <!-- Sidebar -->
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h4>Categories</h4>
                        <ul>
                            <?php foreach (get_categories() as $category) : ?>
                                <li><a href="<?= route_to('home_village_activity_category', $category['slug']) ?>"><?= $category['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <h4>Search</h4>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </form>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
    .link-light {
        color: #f8f9fa !important;
    }

    .link-light:hover,
    .link-light:focus {
        color: #f9fafb !important;
    }

    .blog-post {
        margin-bottom: 50px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .blog-post img {
        width: 100%;
        height: auto;
    }

    .blog-post-content {
        padding: 20px;
    }

    .blog-post-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .blog-post-meta {
        font-size: 14px;
        color: #888;
    }

    .blog-post-meta a {
        color: #888;
        text-decoration: none;
    }

    .related-posts {
        margin-top: 50px;
    }

    .related-post {
        margin-bottom: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .related-post img {
        width: 100%;
        height: auto;
    }

    .related-post-content {
        padding: 20px;
    }

    .related-post-title {
        font-size: 18px;
        margin-bottom: 10px;
    }

    /* Sidebar CSS */
    .sidebar {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .sidebar h4 {
        color: #333;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li {
        margin-bottom: 10px;
    }

    .sidebar li a {
        color: #666;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .sidebar li a:hover {
        color: #333;
    }

    .sidebar-item {
        margin-bottom: 30px;
    }
</style>
<?= $this->endSection() ?>