<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href=""><i class="fa fa-circle text-success"></i> Timesheet Management</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN TASK</li>
            <li>
                <a href="{{ route('staff.timesheet.index') }}">
                    <i class="fa fa-envelope"></i> <span>Timesheet Management</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.information.index') }}">
                    <i class="fa fa-envelope"></i> <span>Information Staff</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.information.edit') }}">
                    <i class="fa fa-envelope"></i> <span>Change Information</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.information.getresetpassword') }}">
                    <i class="fa fa-envelope"></i> <span>Reset Password</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.statistic.index') }}">
                    <i class="fa fa-envelope"></i> <span>Statistic</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
</aside>