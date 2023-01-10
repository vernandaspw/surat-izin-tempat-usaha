<div>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SITU <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/', []) }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">
        @if(auth()->user()->role == 'administrator')
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('akun') }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Akun</span></a>
        </li>
        @endif

        @if(auth()->user()->role == 'admin')
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('jenis-usaha', []) }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Jenis Usaha</span></a>
        </li>
        @endif
        @if(auth()->user()->role == 'kepala' || auth()->user()->role == 'admin')
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('situ') }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>SITU</span></a>
        </li>
        @endif

        @if(auth()->user()->role == 'umum')
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('pengajuan-situ', []) }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pengajuan</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('situ-saya', []) }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>SITU saya</span></a>
        </li>
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->


    </ul>
    <!-- End of Sidebar -->
</div>
