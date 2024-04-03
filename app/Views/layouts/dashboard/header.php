<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            <div class="logo-header-main"><a href="<?= site_url() ?>"><img class="img-fluid for-light img-100" src="<?= base_url('tivo-template/assets/images/logo.png') ?>" alt=""><img class="img-fluid for-dark" src="<?= base_url('tivo-template/assets/images/logo.png') ?>" alt=""></a></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
            <div class="left-menu-header">

            </div>
        </div>
        <div class="nav-right col-12 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="serchinput">
                    <div class="serchbox"><i data-feather="search"></i></div>
                    <div class="form-group search-form">
                        <input type="text" placeholder="Search here...">
                    </div>
                </li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="maximize"><a href="#" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                <li class="profile-nav onhover-dropdown">
                    <div class="account-user"><i data-feather="user"></i></div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="javascript:void(0)" id="logout"><i data-feather="log-out"> </i><span>Log Out</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>