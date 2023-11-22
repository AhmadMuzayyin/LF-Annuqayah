<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ url('img/logo.png') }}" alt="" width="40" class="img-fluid img-responsive">
        </div>
        <div class="sidebar-brand-text mx-3">LFA <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>
{{--    @dd(config('permission.routes'))--}}

    <!-- Nav Item - Pages kursus -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-book-reader"></i>
            <span>Kursus</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @foreach(config('permission.courses') as $key => $route)
                    <a class="collapse-item {{ request()->routeIs($key .'.'. $route[1]) ? 'active' : '' }}" href="{{ route($key .'.'. $route[1]) }}">{{ $route[0] }}</a>
                @endforeach
            </div>
        </div>
    </li>
    <!-- Nav Item - Quiz Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#quiz" aria-expanded="true" aria-controls="quiz">
            <i class="fas fa-trophy"></i>
            <span>Kuis & Penilaian</span>
        </a>
        <div id="quiz" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @foreach(config('permission.quiz') as $key => $route)
                    <a class="collapse-item {{ request()->routeIs($key .'.'. $route[1]) ? 'active' : '' }}" href="{{ route($key .'.'. $route[1]) }}">{{ $route[0] }}</a>
                @endforeach
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages subscription -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subcsription" aria-expanded="true" aria-controls="subcsription">
            <i class="fas fa-ribbon"></i>
            <span>Berlangganan</span>
        </a>
        <div id="subcsription" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @foreach(config('permission.subscription') as $key => $route)
                    <a class="collapse-item {{ request()->routeIs($key .'.'. $route[1]) ? 'active' : '' }}" href="{{ route($key .'.'. $route[1]) }}">{{ $route[0] }}</a>
                @endforeach
            </div>
        </div>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Libraries</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @foreach(config('permission.utilities') as $key => $route)
                    <a class="collapse-item {{ request()->routeIs($key .'.'. $route[1]) ? 'active' : '' }}" href="{{ route($key .'.'. $route[1]) }}">{{ $route[0] }}</a>
                @endforeach
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @foreach(config('permission.setting') as $key => $route)
                    <a class="collapse-item {{ request()->routeIs($key .'.'. $route[1]) ? 'active' : '' }}" href="{{ route($key .'.'. $route[1]) }}">{{ $route[0] }}</a>
                @endforeach
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
