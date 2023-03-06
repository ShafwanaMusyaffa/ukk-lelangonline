@extends('admin.layouts.app')

@section('title')
    Data Item
@endsection

@section('content')
  <div class="pagetitle">
    <div>
      <h1>Data Item</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('items.index') }}">Item</a></li>
          <li class="breadcrumb-item active">Item</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <section class="section dashboard">
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-4">Tambah Produk</a>
    <div class="row g-4">
      @foreach ($auction as $auction)
      <div class="col-10 col-sm-6 col-lg-4 mx-auto mx-sm-0">
          <div class="card shadow-sm mb-0">
              <div class="overflow-hidden ratio ratio-1x1 rounded-start">
                  <div>
                    <img src="/storage/{{ $auction->image_path }}" class="h-100" alt="{{ $auction->name }}">
                  </div>
              </div>
              <div class="card-body">
                  <a class="text-decoration-none card-title fw-semibold fs-5 d-block mb-1 mt-2 py-0">
                      {{ $auction->product->name }}
                  </a>
                  <p class="mb-1 fw-semibold fs-5 text-primary">Rp. <span class="harga">{{ $auction->starting_price }}</span></p>
                  <p class="mb-1 fw-semibold mb-3"><i class="bi bi-hourglass-bottom"></i> {{ $auction->auction_end_time }}</p>
                  <div class="d-flex justify-content-end gap-2">
                    <form action="">
                      <button type="button" class="btn btn-danger" onclick="confirm('Yakin Menghapus Produk nama produk?')">
                        Hapus
                      </button>
                    </form>
                    <a href="edit-produk.html" class="btn btn-primary">
                      Edit
                    </a>
                  </div>
              </div>
          </div>
      </div>
      @endforeach

    </div>
  </section>
@endsection








@extends('layouts.app')

@section('content-blank')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card card-solid mt-2">
        <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
                @foreach($lelang as $lelang)
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            {{ $lelang->asset->user->nama_lengkap }}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>{{ $lelang->asset->game }}</b></h2>
                                    <p class="text-muted text-sm"><b>IGN: </b> {{ $lelang->asset->identifier }}<br><b>Deskripsi: </b> {{ $lelang->asset->deskripsi }}</p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Telp: {{ $lelang->asset->user->no_telp }}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="{{ url('/lelang/' . $lelang->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-info"></i> Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                </ul>
            </nav>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
