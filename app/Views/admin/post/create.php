<?php
$this->extend('layouts/dashboard/app');

$this->section('main');
?>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header pb-0">
            <h4>Post Create</h4>
        </div>
        <div class="card-body add-post">
            <form class="row" method="POST" action="<?= route_to('post_store', $category_slug) ?>" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input name="title" class="form-control <?= session()->has('errors') && session('errors')['title'] ? 'is-invalid' : '' ?>" id="title" type="text" aria-label="title" value="<?= old('title') ?>">
                        <?php if (session()->has('errors') && session('errors')['title']) : ?>
                            <div class="invalid-feedback"><?= session('errors')['title'] ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input class="form-control <?= session()->has('errors') && session('errors')['image'] ? 'is-invalid' : '' ?>" type="file" aria-label="image" name="image">
                        <?php if (session()->has('errors') && session('errors')['image']) : ?>
                            <div class="invalid-feedback"><?= session('errors')['image'] ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="email-wrapper">
                        <div class="theme-form">
                            <div class="form-group">
                                <label for="text-box">Content:</label>
                                <textarea name="content" id="text-box" name="text-box" cols="10" rows="2" class="form-control <?= session()->has('errors') && session('errors')['content'] ? 'is-invalid' : '' ?>"><?= old('content') ?></textarea>
                                <?php if (session()->has('errors') && session('errors')['content']) : ?>
                                    <div class="invalid-feedback"><?= session('errors')['content'] ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-showcase">
                    <button class="btn btn-primary" type="submit">Post</button>
                    <input class="btn btn-light" type="reset" value="Discard">
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('tivo-template/assets/js/editor/ckeditor/ckeditor.js') ?>"></script>
<script src="<?= base_url('tivo-template/assets/js/editor/ckeditor/adapters/jquery.js') ?>"></script>
<script src="<?= base_url('tivo-template/assets/js/email-app.js') ?>"></script>
<?= $this->endSection() ?>