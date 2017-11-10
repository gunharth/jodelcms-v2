<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li class="header">CONTENT</li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Pages</span></a></li>
            <li class="treemenu">
                <router-link to="/collections">
                    <i class="fa fa-link"></i> <span>Collections</span>
                </router-link>
                <ul class="treeview-menu active">
                    <router-link tag="li" to="/collections/timeline">
                        <a>Timeline</a>
                    </router-link>
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
