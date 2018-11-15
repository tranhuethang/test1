<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Auth::guard('admins')->user()->avatar }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::guard('admins')->user()->fullname }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>Admin</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN TASK</li>

            <li>
                <a href="{{ route('admin.staff.index') }}">
                    <i class="fa fa-envelope"></i> <span>Staff Management</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.config.index') }}">
                    <i class="fa fa-envelope"></i> <span>Config</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
</aside>