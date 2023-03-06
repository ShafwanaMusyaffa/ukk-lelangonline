@extends('admin.layouts.app')

@section('title')
  Data Produk
@endsection

{{-- <div class="card">
    <div class="card-header">
        <h3 class="card-title">Assets</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No.
                        </th>
                        <th style="width: 20%">
                            Nama Game - IGN
                        </th>
                        <th>
                            Project Progress
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 30%">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <a>
                                {{ $product->game }}
                            </a>
                            <br />
                            <small>
                                {{ $product->identifier }}
                            </small>
                        </td>
                        <td class="project_progress">
                            @if($product->lelang)
                                @if($product->lelang->status)
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green" role="progressbar" aria-volumenow="{{ $product->siswa_waktu_persen }}" aria-volumemin="0" aria-volumemax="100" style="width: {{ $product->siswa_waktu_persen }}%">
                                        </div>
                                    </div>
                                    <small>
                                        Siswa waktu {{ $product->siswa_waktu }}
                                    </small>
                                @else
                                <small>
                                    Lelang selesai
                                </small>
                                @endif
                            @else
                            <small>
                                Belum di jual
                            </small>
                            @endif
                        </td>
                        <td class="project-state">
                            @if($product->lelang)
                                @if($product->lelang->status)
                                    <span class="badge badge-success">Sedang di lelang</span>
                                @else
                                    <span class="badge badge-primary">Terjual</span>
                                @endif
                            @else
                                <span class="badge badge-danger">Belum dijual</span>
                            @endif
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ ($product->lelang) ? url('/lelang/' . $product->id) : url('/assets/' . $product->id) }}">
                                <i class="fas fa-info"></i> Detail
                            </a>
                            @if(!$product->lelang)
                                <a class="btn btn-success btn-sm" href="{{ url('/lelang/create/' . $product->id) }}">
                                    <i class="fas fa-shopping-cart"></i> Jual
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ url('/assets/' . $product->id . '/edit') }}">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>
                            @endif
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-account-modal{{ $product->id }}">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<a href="{{ url('/assets/create') }}" class="btn btn-success float-right">Tambah Asset</a>

@foreach($products as $product)
<div class="modal fade" id="delete-account-modal{{ $product->id }}">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title">Yakin ingin menghapus?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data yang sudah di hapus tidak bisa di pulihkan kembali&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                <form action="{{ url('/assets/' . $product->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection --}}

@section('content')
  <div class="pagetitle">
    <div>
      <h1>Data Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <section class="section dashboard">
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-4">Tambah Produk</a>
    <div class="row g-4">
      @foreach($products as $product)
      <div class="col-10 col-sm-6 col-lg-4 mx-auto mx-sm-0">
          <div class="card shadow-sm mb-0">
              <div class="overflow-hidden ratio ratio-1x1 rounded-start">
                  <div>
                    <img src="/storage/{{ $product->image_path }}" class="h-100" alt="{{ $product->name }}">
                  </div>
              </div>
              <div class="card-body">
                  <a class="text-decoration-none card-title fw-semibold fs-5 d-block mb-1 mt-2 py-0">
                      {{ $product->name }}
                  </a>
                  {{-- <p class="mb-1 fw-semibold fs-5 text-primary">Rp. <span class="harga">{{ $product->starting_price }}</span></p> --}}
                  @if($product->auction)
                        @if($product->auction->status)
                            <button class="btn btn-sm btn-success">Sedang di lelang</button>
                        @else
                            <span class="btn btn-sm btn-primary">Terjual</span>
                        @endif
                    @else
                        <span class="btn btn-sm btn-danger">Belum dijual</span>
                    @endif
                  </p>


                  <div class="d-flex justify-content-end gap-2">

                    <form action="{{ url('/admin/products/' . $product->id) }}" method="post">
                      @csrf
                      @method('delete')

                      <button type="submit" class="btn btn-danger" onclick="confirm('Yakin Menghapus Produk nama produk?')">
                        Hapus
                      </button>
                    </form>

                    @if(!$product->auction)
                        <a class="btn btn-success btn-sm" href="{{ url('/admin/auction/create/' . $product->id) }}">
                            <i class="fas fa-shopping-cart"></i> Jual
                        </a>
                        <a class="btn btn-info btn-sm text-white" href="{{ url('/admin/products/' . $product->id . '/edit') }}">Edit
                        </a>
                    @endif

                    <a href="{{ ($product->auction) ? route('auctions.show' , $product->id) : url('/admin/products/' . $product->id) }}" class="btn btn-warning">
                      Detail
                    </a>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
      <div class="d-flex justify-content-center mt-4">
          {{ $products->links() }}
      </div>
    </div>
  </section>
@endsection
