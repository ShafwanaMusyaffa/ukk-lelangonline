@extends('admin.layouts.app')

@section('title')
  Data Petugas
@endsection

@section('content')
    <div class="pagetitle">
      <h1>Data Petugas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Petugas</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <a href="{{ route('staff.create') }}" class="btn btn-primary mb-4">Tambah Petugas</a>
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <h5 class="card-title">Petugas/Admin</h5>

          <table id="table-petugas" class="display">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($admins as $admin)
                <tr>
                  <td class="text-capitalize">{{ $admin->name }}</td>
                  <td>{{ $admin->username }}</td>
                  <td class="text-capitalize">
                    @if ($admin->roles === 'ADMIN')
                    
                    <button class="btn btn-sm btn-success"><strong>{{ $admin->roles }}</strong></button></a></td>
                    @else
                    
                    <button class="btn btn-sm btn-secondary text-white"><strong>{{ $admin->roles }}</strong></button></a></td>
                    @endif
                    
                  <td class="d-flex gap-2">
                    <form action"">
                      <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Yakin Menghapus Admin Aripin?')">
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>
                    <a href="{{ route('staff.edit', $admin->id) }}" class="btn btn-primary btn-sm">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                  </td>                      
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </section>
@endsection