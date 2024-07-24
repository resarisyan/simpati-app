<ul class="navbar-nav navbar-nav-hover ml-auto">
    <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown" role="button">
            <span class="nav-link-inner-text">Main Menu </span>
            <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url() ?>#">Home</a></li>
            <li><a class="dropdown-item" href="<?= site_url() ?>#about">About</a></li>
            <li><a class="dropdown-item" href="<?= site_url() ?>#call-center">Call Center</a></li>
            <li><a class="dropdown-item" href="<?= site_url() ?>#services">Layanan</a></li>
            <li><a class="dropdown-item" href="<?= site_url() ?>#apps">Apps</a></li>
            <li><a class="dropdown-item" href="<?= site_url() ?>#kegiatandesa">Kegiatan Desa</a></li>
            <li><a class="dropdown-item" href="<?= site_url() ?>#kampungpintar">Kampung Pintar</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown" role="button">
            <span class="nav-link-inner-text">Profile Desa </span>
            <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/sejarah">Sejarah Desa </a></li>
            <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/visi-misi">Visi Misi</a></li>
            <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/pemerintahan-desa">Struktur Organisasi</a></li>
            <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center" aria-haspopup="true" aria-expanded="false">Lembaga Desa <i class="fas fa-angle-right nav-link-arrow"></i></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/bpd">BPD</a></li>
                    <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/destana">Destana</a></li>
                    <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/retana">Retana</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown" role="button">
            <span class="nav-link-inner-text">Informasi </span>
            <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/berita">Berita</a></li>
            <li><a class="dropdown-item" href="https://sukamanah-cugenang.kampungpinter.co.id/pengumuman">Pengumuman</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown" role="button">
            <span class="nav-link-inner-text">Bum Desa </span>
            <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= route_to('home_umkm') ?>">Lapak UMKM</a></li>
        </ul>
    </li>
</ul>