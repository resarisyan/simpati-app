<div id="sidebar-menu">
    <ul class="sidebar-links" id="simple-bar">
        <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
        </li>
        <li class="pin-title sidebar-list">
            <h6>Pinned</h6>
        </li>
        <hr>
        <li class="sidebar-list">
            <i class="fa fa-thumb-tack"></i>
            <a class="sidebar-link sidebar-title link-nav" href="<?= url_to('home_index') ?>">
                <i data-feather="home"> </i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-list">
            <i class="fa fa-thumb-tack"></i>
            <a class="sidebar-link sidebar-title link-nav" href="<?= url_to('about_index') ?>">
                <i data-feather="user"> </i>
                <span>About</span>
            </a>
        </li>
        <li class="sidebar-list">
            <i class="fa fa-thumb-tack"></i>
            <a class="sidebar-link sidebar-title link-nav" href="<?= url_to('call_center_index') ?>">
                <i data-feather="phone"> </i>
                <span>Call Center</span>
            </a>
        </li>
        <li class="sidebar-list">
            <i class="fa fa-thumb-tack"></i>
            <a class="sidebar-link sidebar-title link-nav" href="<?= url_to('village_activity_category_index') ?>">
                <i data-feather="hash"> </i>
                <span>Kategori</span>
            </a>
        </li>
        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Kegiatan Desa</span></a>
            <ul class="sidebar-submenu">
                <?php foreach (get_categories() as $category) : ?>
                    <li><a href="<?= route_to('village_activity_post_index', $category['slug']) ?>"><?= $category['title'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
</div>