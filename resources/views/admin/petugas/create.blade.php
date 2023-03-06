@extends('admin.layouts.app')

@section('title')
  Tambah Data Staff
@endsection

@section('content')
    <div class="pagetitle">
      <h1>Tambah Petugas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('staff.index') }}">Petugas</a></li>
          <li class="breadcrumb-item active">Tambah Petugas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
          <h5 class="card-title">Tambah Petugas</h5>
          <form action="{{ route('staff.store') }}" method="post">
            @csrf

            <div class="row g-2">
            
              <div class="col-12 col-md-6">
                <div class="">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="name" placeholder="Masukkan Nama" value="{{ old('name') }}" required autofocus>

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="">
                  <label for="username" class="form-label">Roles</label>
                    <select class="form-select" name="roles">
                      <option value="PETUGAS">Petugas</option>
                      <option value="ADMIN">Admin</option>
                    </select>
                </div>              
              </div>
              <div class="col-12 col-md-6">
                <div class="">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" value="{{ old('username') }}" required>
                
                  @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                
                </div>              
              </div>
              <div class="col-12 col-md-6">
                <label for="password" class="form-label">Password</label>
                <div class="input-group has-validation bg-white rounded-5">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                  <span class="input-group-text bg-white border-0 text-secondary" id="togglePassword">
                    <i class="bi bi-eye-slash-fill" id="iconTogglePassword"></i>
                  </span>

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
              
            </div>

        </form>
        </div>
      </div>

    </section>
@endsection