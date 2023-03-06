@extends('admin.layouts.app')

@section('css-plugin')
<link rel="stylesheet" href="{{ asset('vendor/select2/dist/css/select2.css') }}">
@endsection

@section('content-header', 'Edit asset')

@section('content')
<div class="col-sm-6">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit asset</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/products/'. $product->id) }}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Nama name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') ?? $product->name }}" class="form-control @error('name') is-invalid @enderror" required autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description') ?? $product->description}}</textarea>
                    @error('description')
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
<a href="{{ url()->previous() }}" class="btn btn-secondary mb-2">Kembali</a>
@endsection
@section('js-plugin')
<script src="{{ asset('vendor/select2/dist/js/select2.js') }}"></script>
@endsection
@section('js')
<script src="{{ asset('js/pages/asset/create.js') }}"></script>
@endsection
