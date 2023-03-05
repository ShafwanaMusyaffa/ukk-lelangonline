<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Tempat lelang branded terkenal">
      <meta name="author" content="">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('/client/img/favicon.ico')}}">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet">
      <title>@yield('title') - Voushell</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      @stack('addon-css')
      <link href="{{asset('/client/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{asset('/client/css/styles.css')}}" rel="stylesheet">
      <link href="{{asset('/client/css/animate.css')}}" rel="stylesheet">
      <link href="{{asset('/client/css/owl-carousel.css')}}" rel="stylesheet">
      <link href="{{asset('/client/css/lightbox.css')}}" rel="stylesheet">
   </head>
   <body class="index">
      <header class="header-area header-sticky text-center header-default">
         <div class="header-main-head">
            <div class="header-main">
               <div class="container">
                  <div class="header-middle float-lg-left float-md-left float-sm-left float-xs-none">
                     <div class="logo">
                        <a href="/"><img src="{{asset('/client/img/logos/logo.png')}}" alt="logo" width="200" height="50" ></a>
                     </div>
                  </div>
                  <div class="header-right d-flex d-xs-flex d-sm-flex justify-content-end float-right">
                     {{-- <div class="search-wrapper">
                        <a>
                        <i class="material-icons search">search</i>
                        <i class="material-icons close">close</i>			</a>
                        <form autocomplete="off" action="/action_page.php" class="search-form">
                           <div class="autocomplete">
                              <input id="myInput" type="text" name="myCountry" placeholder="Search here">
                              <button type="button"><i class="material-icons">search</i></button>
                           </div>
                        </form>
                     </div> --}}
                     <div class="user-info">
                        <button type="button" class="btn"><i class="material-icons">perm_identity</i></button>
                        <div id="user-dropdown" class="user-menu">
                           @auth
                           <ul class="list-group">
                                 <li class="list-group-item"><a href="/profile" class="text-capitalize">my account</a></li>

                                 <li class="list-group-item"><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalLogoutForm">Logout</a></li>
                            @else
                                <li class="list-group-item"><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalRegisterForm">Register</a></li>
                                <li class="list-group-item"><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalLoginForm">Login</a></li>
                            @endauth
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="menu">
               <div class="container">
                  <!-- Navbar -->
                  <nav class="navbar navbar-expand-lg navbar-light d-sm-none d-xs-none d-lg-block navbar-full">
                     <!-- Navbar brand -->
                     <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
                     <!-- Collapse button -->
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                        aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <!-- Collapsible content -->
                     <div class="collapse navbar-collapse">
                        <!-- Links -->
                        <ul class="navbar-nav m-auto justify-content-center">
                           <li class="nav-item dropdown active">
                              <a class="nav-link text-uppercase" href="/">
                              Home
                              </a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link text-uppercase" href="/product">Product</a>
                           </li>
                           <li class="nav-item dropdown mega-dropdown">
                              <a class="nav-link dropdown-toggle text-uppercase" href="">Category</a>
                              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
                                 <div class="row">
                                    <div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
                                       <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 1</h6>
                                       <!--Featured image-->
                                       <ul class="list-unstyled">
                                          <li>
                                             <a class="menu-item pl-0" href="filter-toggle.html">
                                             filter toggle
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="off-canvas-left.html">
                                             off canvas left
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="off-canvas-right.html">
                                             off canvas right
																						</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
                                       <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 2</h6>
                                       <ul class="list-unstyled">
                                          <li>
                                             <a class="menu-item pl-0" href="category-5-col.html">
                                             5 columns mode
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-6-col.html">
                                             6 columns mode
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-7-col.html">
                                             7 columns mode
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-8-col.html">
                                             8 columns mode
																						</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
                                       <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 3</h6>
                                       <ul class="list-unstyled">
                                          <li>
                                             <a class="menu-item pl-0" href="category-5-col.html">
                                             5 columns mode
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-6-col.html">
                                             6 columns mode
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-7-col.html">
                                             7 columns mode
																						</a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-8-col.html">
                                             8 columns mode
																						</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <!-- Links -->
                     </div>
                     <!-- Collapsible content -->
                  </nav>
                  <!-- Navbar -->
                  <nav class="navbar navbar-expand-lg navbar-light d-lg-none navbar-responsive">
                     <!-- Navbar brand -->
                     <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
                     <!-- Collapse button -->
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                        aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><i class='material-icons'>sort</i></span>
                     </button>
                     <!-- Collapsible content -->
                     <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <!-- Links -->
                        <ul class="navbar-nav m-auto justify-content-center">
                           <!-- Features -->
                           <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu1"
                                 aria-controls="menu1" aria-expanded="false" aria-label="Toggle navigation" href="#">
                              Home
                              <span class="sr-only">(current)</span>        </a>
                              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu1">
                                 <div class="sub-menu mb-xl-0 mb-4">
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0" href="index.html">
                                          Home 1                  </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="index2.html">
                                          Home 2                  </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="index3.html">
                                          Home 3                 </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="index4.html">
                                          Home 4                  </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="index5.html">
                                          Home 5                  </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item dropdown mega-dropdown">
                              <a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu3"
                                 aria-controls="menu3" aria-expanded="false" aria-label="Toggle navigation" href="#">Category</a>
                              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu3">
                                 <div class="row">
                                    <div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
                                       <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 1</h6>
                                       <!--Featured image-->
                                       <ul class="list-unstyled">
                                          <li>
                                             <a class="menu-item pl-0" href="filter-toggle.html">
                                             filter toggle                  </a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="off-canvas-left.html">
                                             off canvas left                </a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="off-canvas-right.html">
                                             off canvas right                </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
                                       <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 2</h6>
                                       <ul class="list-unstyled">
                                          <li>
                                             <a class="menu-item pl-0" href="category-5-col.html">
                                             grid 5 column                 </a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-6-col.html">
                                             grid 6 column                  </a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-7-col.html">
                                             grid 7 column                   </a>
                                          </li>
                                          <li>
                                             <a class="menu-item pl-0" href="category-8-col.html">
                                             grid 8 column                </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-6 col-xl-4 sub-menu mb-0">
                                       <ul class="list-unstyled">
                                          <li>
                                             <span class="menu-banner"><img src="{{asset('/client/img/banner/menu-banner.jpg')}}" alt="menu-banner" width="210" height="300"/></span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu2"
                                 aria-controls="menu2" aria-expanded="false" aria-label="Toggle navigation" href="#">
                              Shop
                              <span class="sr-only">(current)</span>        </a>
                              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu2">
                                 <div class="sub-menu mb-xl-0 mb-4">                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0" href="product-grid.html">
                                          product grid                </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="product-sticky-right.html">
                                          sticky right                  </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="product-extended-layout.html">
                                          Extended layout                 </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="product-details.html">
                                          Default layout                </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="product-compact.html">
                                          compact layout           </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <!-- Technology -->
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-uppercase"  data-toggle="collapse" data-target="#menu4"
                                 aria-controls="menu4" aria-expanded="false" aria-label="Toggle navigation" href="#">Blog</a>
                              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu4">
                                 <div class="sub-menu">
                                    <h6 class="sub-title text-uppercase font-weight-bold white-text d-none">Featured</h6>
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0" href="blog-2-column.html">
                                          blog 2 column
																					</a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="blog-3-column.html">
                                          blog 3 column
																					</a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="blog-2-column-masonary.html">
                                          blog masonary
																					</a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="blog-list.html">
                                          blog list
																					</a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0" href="blog-details.html">
                                          blog details
																					</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link text-uppercase" href="contact-us.html">contact us</a>
                           </li>
                        </ul>
                        <!-- Links -->
                     </div>
                     <!-- Collapsible content -->
                  </nav>
               </div>
            </div>
         </div>
         </div>
      </header>

      <main>

        @yield('content')

      </main>
      <!-- Footer -->
      <footer class="page-footer font-small footer-default">
         <div class="container text-center text-md-left">
            <div class="row">
               <div class="col-md-2 footer-cms footer-column">
                  <div class="ttcmsfooter">
                     <div class="footer-logo"><img src="{{asset('/client/img/logos/footer-logo.png')}}" alt="footer-logo" width="200" height="50"></div>
                     <div class="footer-desc">At vero eos et accusamus et iusto odio dignissimos ducimus, duis faucibus enim vitae</div>
                  </div>
               </div>
               <div class="col-md-2 footer-column">
                  <div class="title">
                     <a href="#company" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">company</a>
                  </div>
                  <ul id="company" class="list-unstyled collapse">
                     <li>
                        <a href="#">search</a>
                     </li>
                     <li>
                        <a href="#">New Products</a>
                     </li>
                     <li>
                        <a href="category.html">Best Collection</a>
                     </li>
                     <li>
                        <a href="wishlist.html">wishlist</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-2 footer-column">
                  <div class="title">
                     <a href="#products" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">products</a>
                  </div>
                  <ul id="products" class="list-unstyled collapse">
                     <li>
                        <a href="blog-details.html">blog</a>
                     </li>
                     <li>
                        <a href="about-us.html">about us</a>
                     </li>
                     <li>
                        <a href="contact-us.html">contact us</a>
                     </li>
                     <li>
                        <a href="my-account.html">my account</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-2 footer-column">
                  <div class="title">
                     <a href="#account" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">your account</a>
                  </div>
                  <ul id="account" class="list-unstyled collapse">
                     <li>
                        <a href="blog-details.html">personal info</a>
                     </li>
                     <li>
                        <a href="#">orders</a>
                     </li>
                     <li>
                        <a href="contact-us.html">addresses</a>
                     </li>
                     <li>
                        <a href="my-account.html">my wishlists</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-2 footer-column">
                  <div class="title">
                     <a href="#information" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">Informasi lelang</a>
                  </div>
                  <ul id="information" class="list-unstyled collapse">
                     <li class="contact-detail links">
                        <span class="address">
                        <span class="icon"><i class="material-icons">location_on</i></span>
                        <span class="data"> 4030, Central Bazzar, opp. Varachha Police Station, Varachha Main Road, Surat, Gujarat 395006, India</span>			  </span>
                     </li>
                     <li class="links">
                        <span class="contact">
                        <span class="icon"><i class="material-icons">phone</i></span>
                        <span class="data"><a href="tel:(99)55669999">+ (99) 55-669-999</a></span>			  </span>
                     </li>
                     <li class="links">
                        <span class="email">
                        <span class="icon"><i class="material-icons">email</i></span>
                        <span class="data"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></span>  </span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- Copyright -->
         <div class="footer-bottom-wrap">
            <div class="container">
               <div class="row">
                  <div class="footer-copyright text-center py-3">
                     © 2023 Voushell™
                  </div>
               </div>
            </div>
         </div>
         <a href="#" id="goToTop" title="Back to top" class="btn-primary"><i class="material-icons arrow-up">keyboard_arrow_up</i></a>
      </footer>
      <!-- Footer -->
      <div class="alert text-center cookiealert" role="alert">
         <b>Do you like cookies?</b> We use cookies to ensure you get the best experience on our website. <a href="https://demo.templatetrip.com/Html/HTML001_victoria/" rel="noreferrer">learn more</a>
         <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
         I agree
         </button>
      </div>
      <!-- Register modal -->
      <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-medium text-left">Sign up</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body mx-3">
                  <form action="{{ route('register') }}" method="post">
                     @csrf
                     <div class="md-form mb-4">
                        <input name="name" type="text" id="RegisterForm-name" class="form-control validate" placeholder="Your name">
                     </div>
                     <div class="md-form mb-4">
                        <input name="email" type="email" id="RegisterForm-email" class="form-control validate" placeholder="Your email">
                     </div>
                     <div class="md-form mb-4">
                        <input name="password" type="password" id="RegisterForm-pass" class="form-control validate" placeholder="Your password">
                     </div>
                     <div class="checkbox-link d-flex justify-content-between">
                        <div class="left-col">
                           <input id="remember-me" type="checkbox"><label for="remember_me">Remember Me</label>
                        </div>
                     </div>
               </div>
               <div class="modal-footer d-flex justify-content-center">
               <button type="submit" class="btn btn-primary">Sign up</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Logout modal -->
      <div class="modal fade" id="modalLogoutForm" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-medium text-left">Logout</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body mx-3">
                  <form action="{{ route('logout') }}" method="post">
                     @csrf
                     <div class="md-form mb-4">
                        <p>
                           Are you sure wanna logout?
                        </p>
                     </div>
               </div>
               <div class="modal-footer d-flex justify-content-center">
               <button type="submit" class="btn btn-primary">Logout</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Login modal -->
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-medium text-left">Sign in</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body mx-3">
                  <form action="{{ route('login') }}" method="post">
                     @csrf
                     <div class="md-form mb-4">
                        <input type="email" name="email" id="LoginForm-name" class="form-control validate" placeholder="Your Email">
                     </div>
                     <div class="md-form mb-4">
                        <input type="password" name="password" id="LoginForm-pass" class="form-control validate" placeholder="Your password">
                     </div>
                     <div class="checkbox-link d-flex justify-content-between">
                        <div class="left-col">
                           <input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
                        </div>
                     </div>
                     <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary">Sign in</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      @stack('addon-script')
      <script src="{{asset('/client/js/jquery.min.js')}}"></script>
      <script src="{{asset('/client/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('/client/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('/client/js/custom.js')}}"></script>
      <script src="{{asset('/client/js/parallax.js')}}"></script>
      <script src="{{asset('/client/js/lightbox-2.6.min.js')}}"></script>
      <script src="{{asset('/client/js/ResizeSensor.min.js')}}"></script>
      <script src="{{asset('/client/js/theia-sticky-sidebar.min.js')}}"></script>
      <script src="{{asset('/client/js/inview.js')}}"></script>
      <script src="{{asset('/client/js/cookiealert.js')}}"></script>
      <script src="{{asset('/client/js/jquery.countdown.min.js')}}"></script>
      <script src="{{asset('/client/js/masonry.pkgd.min.js')}}"></script>
      <script src="{{asset('/client/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('/client/js/jquery.zoom.min.js')}}"></script>
      <script src="{{asset('/client/js/jquery.lazy.min.js')}}"></script>
   </body>
</html>
