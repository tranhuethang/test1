<header class="main-header">
    <a href="{{ route('admin.index') }}" class="logo">
        <span class="logo-mini">Admin</span>
        <span class="logo-lg">Timesheet Manage</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ Auth::guard('admins')->user()->avatar }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::guard('admins')->user()->fullname }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ Auth::guard('admins')->user()->avatar }}" class="img-circle" alt="User Image">
                            <p>
                                {{ Auth::guard('admins')->user()->fullname }}
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('admin.info') }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('admin.getLogout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>