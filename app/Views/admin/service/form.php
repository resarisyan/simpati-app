<?php
$listIcon = [
    'fas fa-ambulance',
    'fas fa-baby-carriage',
    'fas fa-balance-scale',
    'fas fa-desktop',
    'fas fa-dumbbell',
    'fas fa-id-card',
    'fas fa-users',
    'fas fa-user-tie',
    'fas fa-user-nurse',
    'fas fa-hand-holding-heart',
    'fas fa-shield-alt',
    'fas fa-mobile-alt',
    'fas fa-file-invoice-dollar',
    'fas fa-chart-line',
    'fas fa-tools',
    'fas fa-graduation-cap',
    'fas fa-award',
    'fas fa-clipboard-list',
    'fas fa-credit-card',
    'fas fa-utensils',
    'fas fa-warehouse',
    'fas fa-truck-loading',
    'fas fa-truck-moving',
    'fas fa-truck',
    'fas fa-tshirt',
];
?>

<div class="row g-3">
    <div class="col-md-12">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" type="text" name="name">
        <div class="mt-2 error_text text-danger name_error"></div>
    </div>
    <div class="col-md-12">
        <label class="form-label" for="link">Link</label>
        <input class="form-control" id="link" type="text" name="link">
        <div class="mt-2 error_text text-danger link_error"></div>
    </div>
    <div class="col-md-12">
        <label class="form-label" for="icon">Icon</label>
        <select class="form-select" name="icon" id="icon">
            <option value="">Choose...</option>
            <?php foreach ($listIcon as $icon) : ?>
                <option value="<?= $icon ?>" data-icon="<?= $icon ?>"><?= $icon ?></option>
            <?php endforeach; ?>
        </select>
        <div class="icon my-3" id="icon-preview"></div>
        <div class="mt-2 error_text text-danger icon_error"></div>
    </div>
</div>