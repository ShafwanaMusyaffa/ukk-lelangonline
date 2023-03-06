    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">
          <img src="/assets/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-1">
          Lelang
        </a>    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cari</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Penawaran</a>
            </li>
          </ul>
          <div class="d-flex justify-content-end gap-2">
            <div class="btn-group">
              <!-- If Logged in -->
              @auth
              <button type="button" class="btn btn-outline-primary dropdown-toggle text-capitalize" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle me-1"></i>
              {{ Auth::user()->name }}
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">Logout</button>
                  </form>
                </li>
              </ul>
              @else
                <a href="{{ route('login') }}" class="btn btn-primary">
                  <i class="bi bi-box-arrow-in-right"></i>
                </a>
              @endauth
            </div>
          </div>
        </div>
      </div>
    </nav>