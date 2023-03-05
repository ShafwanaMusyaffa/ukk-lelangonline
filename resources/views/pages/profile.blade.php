@extends('layouts.app')

@section('title')
  Profile
@endsection

@section('content')
  <nav aria-label="breadcrumb" class="w-100 float-left">
    <ol
      class="breadcrumb parallax justify-content-center"
      data-source-url="/client/img/banner/parallax.jpg"
      style="
        background-image: url('/client/img/banner/parallax.jpg');
        background-position: 50% 0.809717%;
      "
    >
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
  </nav>

  <div class="main-content w-100 float-left blog-list">
    <div class="container">
      <div class="row">
        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
          <div class="row">
            <div class="col-lg-12 order-lg-last account-content">
              <h4>Account Information</h4>

                <div class="form-group">
                  <label for="acc-name">Name</label>
                  <p class="font-weight-bold">
                    {{ Auth::user()->name }}
                  </p>
                </div>

                <div class="form-group">
                  <label for="acc-email">Email</label>
                  <p class="font-weight-bold">
                    {{ Auth::user()->email }}
                  </p>
                </div>

                <div class="form-group">
                  <a href="" class="btn bg-primary text-white btn-block">Edit</a>
                </div>
                <!-- End .form-group -->

                <!-- End .form-footer -->
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive pb-5">
        <h1 class="text-center">History Bid</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection