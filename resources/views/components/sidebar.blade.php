<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item active">
                <a class="nav-link"
                    href="{{ url('/') }}"><i class="fas fa-pencil-ruler">
                    </i> <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Personalia</li>
            <li class="nav-item dropdown active">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-user-secret"></i> <span>Admin</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ url('bootstrap-alert') }}">
                            Tambah Admin
                        </a>
                    </li>
                    <li class="active">
                        <a class="nav-link" href="{{ url('bootstrap-alert') }}">
                            Lihat Admin
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-id-card"></i> <span>Karyawan</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ url('bootstrap-alert') }}">
                            Tambah Karyawan
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ url('bootstrap-alert') }}">
                            Lihat Karyawan
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Pengguna</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ url('bootstrap-alert') }}">
                            Tambah Pengguna
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ url('bootstrap-alert') }}">
                            Lihat Pengguna
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Produk</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-archive"></i> <span>Produk</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="{{ url('bootstrap-alert') }}">Tambah Produk</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="{{ url('bootstrap-alert') }}">Lihat Semua Produk</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="{{ url('bootstrap-alert') }}">Sudah Terjual</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="{{ url('bootstrap-alert') }}">Belum Terjual</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Laporan</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-file-text"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="{{ url('bootstrap-alert') }}">Produk</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="{{ url('bootstrap-alert') }}">Bulan Ini</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-2 p-3">
            {{-- If Not Admin --}}
            {{-- <a href="/"
                class="btn btn-outline-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Need Help?
            </a> --}}

            {{-- Button Log Out --}}
            <a href="/"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out"></i> Log Out
            </a>
        </div>
    </aside>
</div>
