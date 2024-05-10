<?php $pager->setSurroundCount(2) ?>

<nav>
    <ul class="pagination justify-content-center">
        <?php if ($pager->hasPrevious()) { ?>
            <li class="page-item disabled">
                <a class="page-link" href="<?= $pager->getPrevious() ?>" tabindex="-1" aria-disabled="true">Previous</a>
                </a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="<?= $pager->getFirst() ?>"><?= $pager->getFirst() ?></a>
            </li>
        <?php } ?>

        <?php
        foreach ($pager->links() as $link) {
            $activeclass = $link['active'] ? 'active' : '';
        ?>
            <li class="page-item <?= $activeclass ?>">
                <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            </li>
        <?php } ?>
        <?php if ($pager->hasNext()) { ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNext() ?>">Next</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast() ?>">Last</a>
            </li>
        <?php } ?>
    </ul>
</nav>