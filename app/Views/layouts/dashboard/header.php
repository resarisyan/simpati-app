<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            <div class="logo-header-main"><a href="index.html"><img class="img-fluid for-light img-100" src="<?= base_url('tivo-template/assets/images/logo/logo2.png') ?>" alt=""><img class="img-fluid for-dark" src="<?= base_url('tivo-template/assets/images/logo/logo.png') ?>" alt=""></a></div>
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
                <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                <li class="profile-nav onhover-dropdown">
                    <div class="account-user"><i data-feather="user"></i></div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="user-profile.html"><i data-feather="user"></i><span>Account</span></a></li>
                        <li><a href="email_inbox.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                        <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                        <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>