<div id="header" class="app-header">
    <!-- BEGIN navbar-header -->
    <div class="navbar-header">
        <a href="" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b class="me-1">Inertia</b></a>
        <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- END navbar-header -->
    <!-- BEGIN header-nav -->
    <div class="navbar-nav">
        <div class="navbar-item navbar-user dropdown">
            <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="image image-icon bg-gray-800 text-gray-600">
                    <i class="fa fa-user"></i>
                </div>
                <span>
                    <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
                    <b class="caret"></b>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-1">
                <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a href="javascript:;" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
    <!-- END header-nav -->
</div>