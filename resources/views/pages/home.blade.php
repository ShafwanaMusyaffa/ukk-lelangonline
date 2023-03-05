@extends('layouts.app')

@section('title')
  Home
@endsection

@section('content')
  {{-- jumbotron --}}
  <div class="slider-wrapper my-40 my-sm-25 float-left w-100">
    <div class="container">
        <div class="ttloading-bg"></div>
        <div class="slider slider-for owl-carousel">
          <div>
              <a href="#">
              <img src="/client/img/slider/sample-01.jpg" alt="" height="800" width="1600"/>
              </a>
              <div class="slider-content-wrap center effect_top">
                <div class="slider-title mb-20 text-capitalize float-left w-100">Most Famous Brand</div>
                <div class="slider-subtitle mb-50 text-capitalize float-left w-100">fashion trend</div>
                <div class="slider-button text-uppercase float-left w-100"><a href=" #">Bid Now</a></div>
              </div>
          </div>
          <div>
              <a href="#">
              <img src="/client/img/slider/sample-02.jpg" alt="" height="800" width="1600"/>
              </a>
              <div class="slider-content-wrap center effect_bottom">
                <div class="slider-title mb-20 text-capitalize float-left w-100">Product</div>
                <div class="slider-subtitle mb-50 text-capitalize float-left w-100">100% Original</div>
                <div class="slider-button text-uppercase float-left w-100"><a href=" #">Bid Now</a></div>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="main-content">
    <div id="ttcmsbanner" class="ttcmsbanner my-40 my-sm-25">
        <div class="ttbannerblock container text-center">
          <div class="row">
              <div class="ttbanner1 ttbanner col-sm-6 col-xs-6 left-to-right hb-animate-element">
                <div class="ttbanner-img"><a href="/product"><img src="/client/img/banner/cms-01.jpg" alt="cms-01" height="600" width="630"></a></div>
                <div class="ttbanner-inner d-inline-block align-top float-none">
                    <div class="ttbanner-desc float-left w-100">
                      <h2 class="ttbanner-heading text-uppercase float-left w-100">Womens</h2>
                      <span class="title text-uppercase float-left w-100 pb-3">collection</span> 
                      {{-- <span class="shop-now float-left w-100"><a href="#" class="d-inline-block align-top float-none btn-primary">Bid Now</a></span>							 --}}
                    </div>
                </div>
              </div>
              <div class="ttbanner2 ttbanner col-sm-6 col-xs-6 right-to-left hb-animate-element">
                <div class="ttbanner-img"><a href="/product"><img src="/client/img/banner/cms-02.jpg" alt="cms-02" height="600" width="630"></a></div>
                <div class="ttbanner-inner d-inline-block align-top float-none">
                    <div class="ttbanner-desc">
                      <h2 class="ttbanner-heading text-uppercase">Men's</h2>
                      <span class="title text-uppercase float-left w-100 pb-3">collection</span> 
                      {{-- <span class="shop-now float-left w-100"><a href="#" class="d-inline-block align-top float-none btn-primary">Bid Now</a></span>							   --}}
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>

    <div id="main">
        <div id="hometab" class="home-tab my-40 my-sm-25 bottom-to-top hb-animate-element">
          <div class="container">
              <div class="row">
                <div class="tt-title d-inline-block float-none w-100 text-center">Trending Products</div>
                <div class="tab-content float-left w-100">
                    <div class="tab-pane active float-left w-100" id="ttfeatured-main" role="tabpanel" aria-labelledby="featured-tab">
                      <section id="ttfeatured" class="ttfeatured-products">
                          <div class="ttfeatured-content products grid owl-carousel" id="owl1">
                            <div class="product-layouts">
                                <div class="product-thumb">
                                  <div class="image zoom">
                                      <a href="product-details.html">
                                      <img src="/client/img/products/01.jpg" alt="01" height="501" width="385"/>
                                      <img src="/client/img/products/02.jpg" alt="02" class="second_image img-responsive" height="501" width="385"/>										</a>
                                      <ul class="countdown1 countdown">
                                        <li>
                                            <span class="days">00</span>
                                            <p class="days_text">Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p class="hours_text">Hours</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p class="minutes_text">Minutes</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p class="seconds_text">Seconds</p>
                                        </li>
                                      </ul>
                                  </div>
                                  <div class="thumb-description">
                                      <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">Merino Small Dress</a></h4>
                                      </div>
                                      <div class="rating">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>										
                                        </div>
                                      </div>
                                      <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                      </div>
                                      <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="product-layouts">
                                <div class="product-thumb">
                                  <div class="image zoom">
                                      <a href="product-details.html">
                                      <img src="/client/img/products/02.jpg" alt="02" height="501" width="385"/>
                                      <img src="/client/img/products/03.jpg" alt="03" class="second_image img-responsive" height="501" width="385"/>										</a>
                                      <div class="flags">
                                        <div class="sale">sale</div>
                                        <div class="new">new</div>
                                      </div>
                                      <ul class="countdown countdown2">
                                        <li>
                                            <span class="days">00</span>
                                            <p class="days_text">Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p class="hours_text">Hours</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p class="minutes_text">Minutes</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p class="seconds_text">Seconds</p>
                                        </li>
                                      </ul>
                                  </div>
                                  <div class="thumb-description">
                                      <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">Tropical Shirt Dress</a></h4>
                                      </div>
                                      <div class="rating">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>										
                                        </div>
                                      </div>
                                      <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                      </div>
                                      <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </section>
                      <div class="text-center">
                        <a href="/product" class="btn bg-secondary text-white">SHOW MORE</a>
                      </div>
                    </div>
              </div>
          </div>
        </div>
        
        <div id="ttbrandlogo" class="my-40 my-sm-25 bottom-to-top hb-animate-element">
          <div class="container">
              <div class="tt-brand owl-carousel">
                <div class="item">
                    <a href="#"><img src="/client/img/logos/brand-logo-01.png" alt="brand-logo-01" width="140" height="100"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="/client/img/logos/brand-logo-02.png" alt="brand-logo-02" width="140" height="100"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="/client/img/logos/brand-logo-03.png" alt="brand-logo-03" width="140" height="100"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="/client/img/logos/brand-logo-04.png" alt="brand-logo-04" width="140" height="100"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="/client/img/logos/brand-logo-05.png" alt="brand-logo-05" width="140" height="100"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="/client/img/logos/brand-logo-06.png" alt="brand-logo-06" width="140" height="100"></a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
@endsection