<?php
$this->extend('layouts/dashboard/app');

$this->section('main');
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <h4>Home</h4>
            </div>
            <form class="form theme-form" method="POST" enctype="multipart/form-data" action="<?= url_to('home_update') ?>">
                <input type="hidden" name="_method" value="PUT">
                <?= csrf_field() ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control <?= session('validation.title') ? 'is-invalid' : ''; ?>" id="title" name="title" type="text" placeholder="Title" value="<?= $data['title'] ?>">
                                <div class="invalid-feedback">
                                    <?= session('validation.title') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="caption">Caption</label>
                                <input class="form-control <?= session('validation.caption') ? 'is-invalid' : ''; ?>" id="caption" name="caption" type="text" placeholder="Caption" value="<?= $data['caption'] ?>">
                                <div class="invalid-feedback">
                                    <?= session('validation.caption') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control <?= session('validation.description') ? 'is-invalid' : ''; ?>"><?= $data['description'] ?></textarea>
                                <div class="invalid-feedback">
                                    <?= session('validation.description') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="image">Image</label>
                                <input class="form-control <?= session('validation.image') ? 'is-invalid' : ''; ?>" type="file" aria-label="image" name="image">
                                <div class="invalid-feedback">
                                    <?= session('validation.image') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$this->endSection();
