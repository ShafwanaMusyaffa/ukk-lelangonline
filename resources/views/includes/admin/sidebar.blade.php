<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="{{ url('/admin') }}" class="logo d-flex align-items-center">
      <img src="/assets/img/logo.png" alt="Lelangin">
      <span class="d-none d-lg-block">Lelangin</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          {{-- <img src="/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
          <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <span>{{ Auth::user()->roles }}</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <!-- <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li> -->

          <li>
            <form action="{{ route('admin.logout') }}" class="dropdown-item d-flex align-items-center" method="post">
              @csrf
              <button class="border-0 bg-transparent" type="submit">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </button>
            </form>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/admin') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Data Master</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/admin') }}">
        <i class="bi bi-person-gear"></i>
        <span>Petugas</span>
      </a>
    </li><!-- End Admin Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/admin') }}">
        <i class="bi bi-people"></i>
        <span>Pengguna</span>
      </a>
    </li><!-- End Pengguna Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('products.index') }}">
        <i class="bi bi-box"></i>
        <span>Produk</span>
      </a>
    </li>

    <li class="nav-heading">Lelang</li>
    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#lelang-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-wallet2"></i><span>Lelang</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="lelang-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li class="">
          <a href="/pages/admin/lelang/produk.html" class="">
            <i class="bi bi-circle"></i><span>Produk</span>
          </a>
        </li>
        <li class="">
          <a href="/pages/admin/lelang/berlangsung.html" class="">
            <i class="bi bi-circle"></i><span>Lelang Berlangsung</span>
          </a>
        </li>
        <li class="">
          <a href="/pages/admin/lelang/selesai.html" class="">
            <i class="bi bi-circle"></i><span>Lelang Selesai</span>
          </a>
        </li>
      </ul>
    </li><!-- End Lelang Nav -->

    <li class="nav-heading">Laporan</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="laporan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li class="">
          <a href="/pages/admin/laporan/laporan-bulanan.html" class="">
            <i class="bi bi-circle"></i><span>Bulanan</span>
          </a>
        </li>
        <li class="">
          <a href="/pages/admin/laporan/laporan-produk.html" class="">
            <i class="bi bi-circle"></i><span>Produk</span>
          </a>
        </li>
        <li class="">
          <a href="/pages/admin/laporan/laporan-pengguna.html" class="">
            <i class="bi bi-circle"></i><span>Pengguna</span>
          </a>
        </li>
      </ul>
    </li><!-- End Lelang Nav -->

  </ul>

</aside><!-- End Sidebar-->
