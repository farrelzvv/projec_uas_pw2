

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kelompok 6</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/img/avatar4.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
    @auth
        <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
    @else
        <a href="index.php" class="d-block">Guest</a>
    @endauth
</div>

        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Tabel
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('provinsi')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabel Provinsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kabkota')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabel Kabupaten Kota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pembina')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabel Pembina</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kategori')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabel Kategori Umkm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('umkm')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tabel Umkm</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>