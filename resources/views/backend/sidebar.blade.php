<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="header">CONTENT</li>
            <li>
                <router-link to="/menus">
                    <i class="fa fa-bars"></i> <span>Menus</span>
                </router-link>
            </li>
            <li><a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
            <li class="treemenu">
                <router-link to="/collections">
                    <i class="fa fa-files-o"></i> <span>Collections</span>
                </router-link>
                <ul class="treeview-menu active">
                    <li>
                        <router-link to="/collections/timeline">Timeline</router-link>
                    </li>
                    <router-link tag="li" to="/collections/jobs">
                        <a>Jobs</a>
                    </router-link>
                    <li><a href="#">Slider</a></li>
                </ul>
            </li>
            <li class="header">SETTINGS</li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
<!-- /.sidebar -->
</aside>
