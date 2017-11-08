<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Jodel</b>CMS</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="user">

              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs" style="display: inline-block; padding: 15px">{{ Auth::user()->name }}</span>
          </li>
          <li>
              <a href="{{ url('/logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                      data-toggle="tooltip"
                      title="Logout">
                      <i class="fa fa-lg fa-sign-out"></i>
                  </a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
          </li>

        </ul>
      </div>
    </nav>
  </header>
