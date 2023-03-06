@extends('admin.layouts.app')

@section('title')
  Data Users
@endsection

@section('content')
    <div class="pagetitle">
      <h1>Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">User</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      {{-- <a href="{{ route('staff.create') }}" class="btn btn-primary mb-4">Tambah Petugas</a> --}}
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <h5 class="card-title">User</h5>

          <table id="table-petugas" class="display">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    {{-- <th>Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td class="text-capitalize">{{ $user->name }}</td>
                  <td>{{ $user->username }}</td>                    
                  {{-- <td class="d-flex gap-2">
                    <form action"">
                      <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Yakin Menghapus user Aripin?')">
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>
                    <a href="{{ route('staff.edit', $user->id) }}" class="btn btn-primary btn-sm">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                  </td>                       --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </section>
@endsection