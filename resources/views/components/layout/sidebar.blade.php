<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a href="{{ url('/')}}" class="sidebar-brand d-flex align-items-center justify-content-center">
        <img src="{{url('img/siauri.png')}}" width="50px" height="50px">
        <div class="sidebar-brand-text mx-3">SIAURI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">
            <i class="fas fa-home"></i>
            <span>BERANDA</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('data')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>HISTORY</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
