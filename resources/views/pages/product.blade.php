@extends('layouts.app')

@section('title')
  Nama Barang
@endsection

@section('content')
  <div class="product-deatils-section float-left w-100">
    <div class="container">
      <div class="row">
        <div class="left-columm col-lg-5 col-md-5">
          <div class="product-large-image tab-content">
            <div
              class="tab-pane active"
              id="product-01"
              role="tabpanel"
              aria-labelledby="product-tab-01"
            >
              <div class="single-img img-full">
                <a href="/client/img/products/01.jpg"
                  ><img
                    src="/client/img/products/01.jpg"
                    class="img-fluid zoomImg"
                    alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
        <div class="right-columm col-lg-7 col-md-7">
          <div class="product-information">
            <h4 class="product-title text-capitalize float-left w-100">
              <a href="product-details.html" class="float-left w-100"
                >aliquam quaerat voluptatem</a
              >
            </h4>
            <div class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              quis viverra purus, non viverra nulla. Sed vehicula libero eu
              lectus eleifend volutpat. Sed et placerat arcu. Proin mi leo,
              interdum eu tortor at, euismod gravida velit. Fusce non enim
              lectus. Duis euismod, lorem vitae pharetra rhoncus, ligula risus
              elementum nunc, at interdum eros nunc eget augue. Donec dapibus
              nec diam ut tempor. Duis malesuada neque turpis, ut congue ipsum
              euismod eget. Sed egestas ipsum enim, sed semper magna auctor
              non.
            </div>
            <ul class="countdown countdown1 float-left w-100">
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
            <div class="price float-left w-100 d-flex">
              <div class="regular-price">$100.00</div>
            </div>
            <div class="btn-cart d-flex align-items-center float-left w-100">
              <h5>qty:</h5>
              <input value="1" type="number" />
              <button
                type="button"
                class="btn btn-primary btn-cart m-0"
                data-target="#cart-pop"
                data-toggle="modal"
              >
                <i class="material-icons">shopping_cart</i> Add To Cart
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-tab-area float-left w-100">
    <div class="container">
      <div class="tabs">
        <ul class="nav nav-tabs justify-content-start">
          <li class="nav-item">
            <a
              class="nav-link active"
              data-toggle="tab"
              href="#product-tab1"
              id="tab1"
              ><div class="tab-title">Description</div></a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-toggle="tab"
              href="#product-tab2"
              id="tab2"
              ><div class="tab-title">Reviews (2)</div></a
            >
          </li>
        </ul>
      </div>
      <div class="tab-content float-left w-100">
        <div
          class="tab-pane active"
          id="product-tab1"
          role="tabpanel"
          aria-labelledby="tab1"
        >
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            quis viverra purus, non viverra nulla. Sed vehicula libero eu
            lectus eleifend volutpat. Sed et placerat arcu. Proin mi leo,
            interdum eu tortor at, euismod gravida velit. Fusce non enim
            lectus. Duis euismod, lorem vitae pharetra rhoncus, ligula risus
            elementum nunc, at interdum eros nunc eget augue. Donec dapibus
            nec diam ut tempor. Duis malesuada neque turpis, ut congue ipsum
            euismod eget. Sed egestas ipsum enim, sed semper magna auctor non.
            Praesent risus nunc, ultricies vel velit nec, fringilla venenatis
            sem. Nunc condimentum, elit sed posuere accumsan, mauris nisl
            ornare metus, nec hendrerit quam velit ut nibh. Vivamus sodales
            neque vel sodales porta. Mauris hendrerit felis in mi auctor
            posuere. Mauris a consequat sapien, eget condimentum risus.
            Curabitur iaculis lorem non pretium varius. In hac habitasse
            platea dictumst.
          </div>
        </div>
        <div
          class="tab-pane"
          id="product-tab2"
          role="tabpanel"
          aria-labelledby="tab2"
        >
          <div class="reviews-tab float-left w-100">
            <div class="ttreview-tab float-left w-100 p-30">
              <h2>Customer Reviews</h2>
              <div class="rating float-left w-100">
                <div class="product-ratings d-inline-block align-middle">
                  <span class="fa fa-stack"
                    ><i class="material-icons">star</i></span
                  >
                  <span class="fa fa-stack"
                    ><i class="material-icons">star</i></span
                  >
                  <span class="fa fa-stack"
                    ><i class="material-icons">star</i></span
                  >
                  <span class="fa fa-stack"
                    ><i class="material-icons off">star</i></span
                  >
                  <span class="fa fa-stack"
                    ><i class="material-icons off">star</i></span
                  >
                </div>
              </div>
              <div class="review-title float-left w-100">
                <span class="user">admin</span>
                <span class="date">– February 14, 2019</span>
              </div>
              <div class="review-desc float-left w-100">
                Aliquam at ipsum tellus. Donec arcu est, posuere quis orci
                vel, commodo cursus augue.
              </div>
            </div>
            <form action="#" class="rating-form float-left w-100">
              <h5>Add your rating</h5>
              <div class="rating">
                <div class="rating-stars text-left">
                  <ul id="stars">
                    <li class="star" title="Poor" data-value="1">
                      <i class="material-icons">star</i>
                    </li>
                    <li class="star" title="Fair" data-value="2">
                      <i class="material-icons">star</i>
                    </li>
                    <li class="star" title="Good" data-value="3">
                      <i class="material-icons">star</i>
                    </li>
                    <li class="star" title="Excellent" data-value="4">
                      <i class="material-icons">star</i>
                    </li>
                    <li class="star" title="WOW!!!" data-value="5">
                      <i class="material-icons">star</i>
                    </li>
                  </ul>
                </div>
                <div class="success-box">
                  <div class="clearfix"></div>
                  <div class="text-message text-success"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="row d-block">
                <div class="col-sm-6 float-left form-group">
                  <label>Name <span class="required">*</span></label>
                  <input type="text" placeholder="" required="" />
                </div>
                <div class="col-sm-6 float-left form-group">
                  <label>Email <span class="required">*</span></label>
                  <input type="email" placeholder="" id="r-email" required />
                </div>
                <div class="col-sm-12 float-left form-group">
                  <label for="r-textarea">Your Review</label>
                  <textarea
                    name="review"
                    id="r-textarea"
                    cols="30"
                    rows="10"
                    class="w-100"
                  ></textarea>
                </div>
              </div>
              <input
                type="submit"
                class="btn btn-primary submit"
                value="Submit Review"
              />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    id="product-accessories"
    class="product-accessories my-40 w-100 float-left"
  >
    <div class="container">
      <div class="row">
        <div class="tt-title d-inline-block float-none w-100 text-center">
          You might also like
        </div>
        <div class="product-accessories-content products grid owl-carousel">
          <div class="product-layouts">
            <div class="product-thumb">
              <div class="image zoom">
                <a href="product-details.html">
                  <img src="/client/img/products/01.jpg" alt="01" />
                  <img
                    src="/client/img/products/02.jpg"
                    alt="02"
                    class="second_image img-responsive"
                  />
                </a>
              </div>
              <div class="thumb-description">
                <div class="caption">
                  <h4 class="product-title text-capitalize">
                    <a href="product-details.html"
                      >aliquam quaerat voluptatem</a
                    >
                  </h4>
                </div>
                <div class="rating">
                  <div class="product-ratings d-inline-block align-middle">
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                  </div>
                </div>
                <div class="price">
                  <div class="regular-price">$100.00</div>
                  <div class="old-price">$150.00</div>
                </div>
                <div class="button-wrapper">
                  <div class="button-group text-center">
                    <button
                      type="button"
                      class="btn btn-primary btn-cart"
                      data-target="#cart-pop"
                      data-toggle="modal"
                    >
                      <i class="material-icons">shopping_cart</i
                      ><span>Add to cart</span>
                    </button>
                    <a
                      href="wishlist.html"
                      class="btn btn-primary btn-wishlist"
                      ><i class="material-icons">favorite</i
                      ><span>wishlist</span></a
                    >
                    <button type="button" class="btn btn-primary btn-compare">
                      <i class="material-icons">equalizer</i
                      ><span>Compare</span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-primary btn-quickview"
                      data-toggle="modal"
                      data-target="#product_view"
                    >
                      <i class="material-icons">visibility</i
                      ><span>Quick View</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-layouts">
            <div class="product-thumb">
              <div class="image zoom">
                <a href="product-details.html">
                  <img src="/client/img/products/02.jpg" alt="02" />
                  <img
                    src="/client/img/products/03.jpg"
                    alt="03"
                    class="second_image img-responsive"
                  />
                </a>
              </div>
              <div class="thumb-description">
                <div class="caption">
                  <h4 class="product-title text-capitalize">
                    <a href="product-details.html"
                      >aspetur autodit autfugit</a
                    >
                  </h4>
                </div>
                <div class="rating">
                  <div class="product-ratings d-inline-block align-middle">
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                  </div>
                </div>
                <div class="price">
                  <div class="regular-price">$100.00</div>
                  <div class="old-price">$150.00</div>
                </div>
                <div class="button-wrapper">
                  <div class="button-group text-center">
                    <button
                      type="button"
                      class="btn btn-primary btn-cart"
                      data-target="#cart-pop"
                      data-toggle="modal"
                    >
                      <i class="material-icons">shopping_cart</i
                      ><span>Add to cart</span>
                    </button>
                    <a
                      href="wishlist.html"
                      class="btn btn-primary btn-wishlist"
                      ><i class="material-icons">favorite</i
                      ><span>wishlist</span></a
                    >
                    <button type="button" class="btn btn-primary btn-compare">
                      <i class="material-icons">equalizer</i
                      ><span>Compare</span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-primary btn-quickview"
                      data-toggle="modal"
                      data-target="#product_view"
                    >
                      <i class="material-icons">visibility</i
                      ><span>Quick View</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-layouts">
            <div class="product-thumb">
              <div class="image zoom">
                <a href="product-details.html">
                  <img src="/client/img/products/03.jpg" alt="03" />
                  <img
                    src="/client/img/products/04.jpg"
                    alt="04"
                    class="second_image img-responsive"
                  />
                </a>
              </div>
              <div class="thumb-description">
                <div class="caption">
                  <h4 class="product-title text-capitalize">
                    <a href="product-details.html">magni dolores eosquies</a>
                  </h4>
                </div>
                <div class="rating">
                  <div class="product-ratings d-inline-block align-middle">
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                  </div>
                </div>
                <div class="price">
                  <div class="regular-price">$100.00</div>
                  <div class="old-price">$150.00</div>
                </div>
                <div class="button-wrapper">
                  <div class="button-group text-center">
                    <button
                      type="button"
                      class="btn btn-primary btn-cart"
                      data-target="#cart-pop"
                      data-toggle="modal"
                    >
                      <i class="material-icons">shopping_cart</i
                      ><span>Add to cart</span>
                    </button>
                    <a
                      href="wishlist.html"
                      class="btn btn-primary btn-wishlist"
                      ><i class="material-icons">favorite</i
                      ><span>wishlist</span></a
                    >
                    <button type="button" class="btn btn-primary btn-compare">
                      <i class="material-icons">equalizer</i
                      ><span>Compare</span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-primary btn-quickview"
                      data-toggle="modal"
                      data-target="#product_view"
                    >
                      <i class="material-icons">visibility</i
                      ><span>Quick View</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-layouts">
            <div class="product-thumb">
              <div class="image zoom">
                <a href="product-details.html">
                  <img src="/client/img/products/04.jpg" alt="04" />
                  <img
                    src="/client/img/products/05.jpg"
                    alt="05"
                    class="second_image img-responsive"
                  />
                </a>
              </div>
              <div class="thumb-description">
                <div class="caption">
                  <h4 class="product-title text-capitalize">
                    <a href="product-details.html">voluptas nulla pariatur</a>
                  </h4>
                </div>
                <div class="rating">
                  <div class="product-ratings d-inline-block align-middle">
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                  </div>
                </div>
                <div class="price">
                  <div class="regular-price">$100.00</div>
                  <div class="old-price">$150.00</div>
                </div>
                <div class="button-wrapper">
                  <div class="button-group text-center">
                    <button
                      type="button"
                      class="btn btn-primary btn-cart"
                      data-target="#cart-pop"
                      data-toggle="modal"
                    >
                      <i class="material-icons">shopping_cart</i
                      ><span>Add to cart</span>
                    </button>
                    <a
                      href="wishlist.html"
                      class="btn btn-primary btn-wishlist"
                      ><i class="material-icons">favorite</i
                      ><span>wishlist</span></a
                    >
                    <button type="button" class="btn btn-primary btn-compare">
                      <i class="material-icons">equalizer</i
                      ><span>Compare</span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-primary btn-quickview"
                      data-toggle="modal"
                      data-target="#product_view"
                    >
                      <i class="material-icons">visibility</i
                      ><span>Quick View</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-layouts">
            <div class="product-thumb">
              <div class="image zoom">
                <a href="product-details.html">
                  <img src="/client/img/products/05.jpg" alt="05" />
                  <img
                    src="/client/img/products/06.jpg"
                    alt="06"
                    class="second_image img-responsive"
                  />
                </a>
              </div>
              <div class="thumb-description">
                <div class="caption">
                  <h4 class="product-title text-capitalize">
                    <a href="product-details.html">aliquam quat voluptatem</a>
                  </h4>
                </div>
                <div class="rating">
                  <div class="product-ratings d-inline-block align-middle">
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                  </div>
                </div>
                <div class="price">
                  <div class="regular-price">$100.00</div>
                  <div class="old-price">$150.00</div>
                </div>
                <div class="button-wrapper">
                  <div class="button-group text-center">
                    <button
                      type="button"
                      class="btn btn-primary btn-cart"
                      data-target="#cart-pop"
                      data-toggle="modal"
                    >
                      <i class="material-icons">shopping_cart</i
                      ><span>Add to cart</span>
                    </button>
                    <a
                      href="wishlist.html"
                      class="btn btn-primary btn-wishlist"
                      ><i class="material-icons">favorite</i
                      ><span>wishlist</span></a
                    >
                    <button type="button" class="btn btn-primary btn-compare">
                      <i class="material-icons">equalizer</i
                      ><span>Compare</span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-primary btn-quickview"
                      data-toggle="modal"
                      data-target="#product_view"
                    >
                      <i class="material-icons">visibility</i
                      ><span>Quick View</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-layouts">
            <div class="product-thumb">
              <div class="image zoom">
                <a href="product-details.html">
                  <img src="/client/img/products/06.jpg" alt="06" />
                  <img
                    src="/client/img/products/07.jpg"
                    alt="07"
                    class="second_image img-responsive"
                  />
                </a>
              </div>
              <div class="thumb-description">
                <div class="caption">
                  <h4 class="product-title text-capitalize">
                    <a href="product-details.html">voluptas sit aspernatur</a>
                  </h4>
                </div>
                <div class="rating">
                  <div class="product-ratings d-inline-block align-middle">
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                    <span class="fa fa-stack"
                      ><i class="material-icons off">star</i></span
                    >
                  </div>
                </div>
                <div class="price">
                  <div class="regular-price">$100.00</div>
                  <div class="old-price">$150.00</div>
                </div>
                <div class="button-wrapper">
                  <div class="button-group text-center">
                    <button
                      type="button"
                      class="btn btn-primary btn-cart"
                      data-target="#cart-pop"
                      data-toggle="modal"
                    >
                      <i class="material-icons">shopping_cart</i
                      ><span>Add to cart</span>
                    </button>
                    <a
                      href="wishlist.html"
                      class="btn btn-primary btn-wishlist"
                      ><i class="material-icons">favorite</i
                      ><span>wishlist</span></a
                    >
                    <button type="button" class="btn btn-primary btn-compare">
                      <i class="material-icons">equalizer</i
                      ><span>Compare</span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-primary btn-quickview"
                      data-toggle="modal"
                      data-target="#product_view"
                    >
                      <i class="material-icons">visibility</i
                      ><span>Quick View</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection