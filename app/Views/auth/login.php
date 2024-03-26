<?= $this->extend('layouts/auth/app') ?>
<?= $this->section('title') ?><?= lang('Auth.login') ?><?= $this->endSection() ?>
<?= $this->section('main'); ?>
<form class="theme-form" <?= url_to('login') ?>" method="post">
    <?= csrf_field() ?>
    <h4 class="text-center"><?= lang('Auth.login') ?></h4>
    <p class="text-center">Enter your email & password to login</p>

    <?php if (session('error') !== null) : ?>
        <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
    <?php elseif (session('errors') !== null) : ?>
        <div class="alert alert-danger" role="alert">
            <?php if (is_array(session('errors'))) : ?>
                <?php foreach (session('errors') as $error) : ?>
                    <?= $error ?>
                    <br>
                <?php endforeach ?>
            <?php else : ?>
                <?= session('errors') ?>
            <?php endif ?>
        </div>
    <?php endif ?>

    <?php if (session('message') !== null) : ?>
        <div class="alert alert-success" role="alert"><?= session('message') ?></div>
    <?php endif ?>

    <div class="form-group">
        <label class="col-form-label" for="email"><?= lang('Auth.email') ?></label>
        <input class="form-control" id="email" type="email" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
    </div>
    <div class="form-group">
        <label class="col-form-label" for="password"><?= lang('Auth.password') ?></label>
        <div class="form-input position-relative">
            <input class="form-control" id="password" type="password" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required>
            <div class="show-hide"><span class="show"> </span></div>
        </div>
    </div>
    <div class="form-group mb-0">
        <?php if (setting('Auth.sessionConfig')['allowRemembering']) : ?>
            <div class="checkbox p-0">
                <input id="checkbox1" type="checkbox" name="remember" <?php if (old('remember')) : ?> checked<?php endif ?>>
                <label class="text-muted" for="checkbox1"> <?= lang('Auth.rememberMe') ?></label>
            </div>
        <?php endif; ?>

        <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
            <a class="link" href="<?= url_to('magic-link') ?>"><?= lang('Auth.forgotPassword') ?></a>
        <?php endif ?>

        <div class="text-end mt-3">
            <button class="btn btn-primary btn-block w-100" type="submit"><?= lang('Auth.login') ?></button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>