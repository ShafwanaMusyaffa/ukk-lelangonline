@extends('admin.layouts.app')

@section('title')
    Menambahkan Produk
@endsection

@section('content')
    <div class="pagetitle">
      <h1>Tambah Produk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="index.html">Produk</a></li>
          <li class="breadcrumb-item active">Tambah Produk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
          <h5 class="card-title">Tambah Produk</h5>
          <div class="row g-3">
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="col-12 col-md-6">
                <div class="">
                  <label for="name" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" value="{{ old('name') }}" autofocus>

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
              </div>
              {{-- <div class="col-12 col-md-6">
                <div class="">
                  <label for="category" class="form-label">Kategori</label>
                  <select name="category" class="form-select @error('category') is-invalid @enderror" aria-label="Default select example">

                  @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach


                  </select>

                  @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
              </div> --}}
              {{-- <div class="col-12 col-md-6">
                <div>
                  <label for="formFile" class="form-label">Foto Produk</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
              </div> --}}
              {{-- <div class="col-12 col-md-6">
                <div>
                  <label for="tutupLelang" class="form-label">Tanggal Penutupan</label>
                  <input class="form-control @error('category') is-invalid @enderror" type="date" id="tutupLelang">
                </div>
              </div> --}}
              <div class="col-12">
                <div class="">
                  <label for="desc" class="form-label">Deskripsi Produk</label>
                  <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="desc" rows="2"></textarea >
                  @error('description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>

              <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection


{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="category">Category</label>
                          <select id="category" class="form-select @error('category') is-invalid @enderror"  data-dropdown-css-class="select2-purple" style="width: 100%;">
                              @php
                              if(old('category')){
                              foreach(old('category') as $og){
                              $old_categories[$og] = true;
                              }
                              }
                              @endphp
                              @foreach($categories as $category)
                              <option value="{{ $category->id }}" @if(isset($old_genres[$category->id])) selected @endif>{{ $category->category }}</option>
                              @endforeach
                          </select>
                          @error('category')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="starting_price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <textarea id="starting_price" class="form-control @error('starting_price') is-invalid @enderror" name="starting_price" required autocomplete="starting_price">{{ old('starting_price') }}</textarea>

                                @error('starting_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" value="{{ old('image_path') }}" required autocomplete="image_path">

                                @error('image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="auction_end_time" class="col-md-4 col-form-label text-md-right">{{ __('End Time') }}</label>

                            <div class="col-md-6">
                                <input id="auction_end_time" type="datetime-local" class="form-control @error('auction_end_time') is-invalid @enderror" name="auction_end_time" value="{{ old('auction_end_time') }}" required autocomplete="auction_end_time">

                                @error('auction_end_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Product') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 --}}

{{-- @extends('layouts.app')

@section('css-plugin')
<link rel="stylesheet" href="{{ asset('vendor/select2/dist/css/select2.css') }}">
@endsection

@section('content-header', 'Tambah asset')

@section('content')
<div class="col-sm-6">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Tambah asset</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/assets') }}">
                @csrf
                <div class="form-group">
                    <label for="game">Nama game</label>
                    <input type="text" name="game" id="game" value="{{ old('game') }}" class="form-control @error('game') is-invalid @enderror" required autofocus>
                    @error('game')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="identifier">IGN</label>
                    <input type="text" name="identifier" id="identifier" value="{{ old('identifier') }}" class="form-control @error('identifier') is-invalid @enderror" required>
                    @error('identifier')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <select name="genre[]" id="genre" class="genres @error('genre') is-invalid @enderror" multiple=" multiple" data-placeholder="Pilih Genre" data-dropdown-css-class="select2-purple" style="width: 100%;">
                        @php
                        // Refill old value of genres
                        if(old('genre')){
                        foreach(old('genre') as $og){
                        $old_genres[$og] = true;
                        }
                        }
                        @endphp
                        @foreach($genres as $genre)
                        <option value="{{ $genre->id }}" @if(isset($old_genres[$genre->id])) selected @endif>{{ $genre->genre }}</option>
                        @endforeach
                    </select>
                    @error('genre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
@section('js-plugin')
<script src="{{ asset('vendor/select2/dist/js/select2.js') }}"></script>
@endsection
@section('js')
<script src="{{ asset('js/pages/asset/create.js') }}"></script>
@endsection --}}
