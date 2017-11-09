<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li class="header">CONTENT</li>
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Pages</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Collections</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <router-link tag="li" to="/jobs" exact>
                        <a>Jobs</a>
                    </router-link>
                    <li><a href="#">Slider</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
<!-- /.sidebar -->
</aside>
