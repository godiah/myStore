<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('menu-toggle').addEventListener('click', function() {
                document.querySelector('.nav-links').classList.toggle('show');
            });
        });
    </script>
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('css/best_selling.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/searchbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main-navbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact-us.css')}}">
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    <link rel="stylesheet" href="{{asset('css/product_details.css')}}">
    <link rel="stylesheet" href="{{asset('css/shop_page.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping-cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/wishlist.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagination.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/product_table.css')}}">

    <!-- Admin Dashboard -->
    <link rel="stylesheet" href="{{asset('css/admin/styles_admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/all_products.css')}}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Swiper JS -->
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer>
      new DataTable('#example');
    </script>
    
    <title>My Store</title>
    <link rel="icon" type="image/x-icon" href="images/icons8-shopify.png" />
    @livewireStyles
  </head>
  <body>
    <!-- Super Navigation Bar -->    
    <div class="superNav border-bottom py-2 bg-light sticky-top">
      <div class="container-super-nav">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
            <span class="">
              <strong><a href="#" class="abt">info@somedomain.com</a></strong>
            </span>
            <span class="tel-no">
              <i class="fa-solid fa-phone"></i>
              <strong><a href="#" style="text-decoration: none; color: #f9d2e0; text-align: center;">+2547 4554 8093</a></strong>
            </span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block text-end">
            <span class="me-3" id="about_vertical">
              <a class="abt" href="aboutus.html" >About Us</a>
            </span>
            <!-- Blog -->
            <span class="blog"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
            <span class="blog"><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
            <span class="blog"><a href="#"><i class="fa-brands fa-whatsapp"></i></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Logo, Search Bar Log In & Cart  -->
    <div class="logo-search" id="header-1">
      <!-- <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div> -->
      <!-- <div class="sm-menu-btn">
        <a href="#" class="cart-sm d-xl-none d-lg-none d-md-none">
          <i class="fa-solid fa-bars-staggered"></i>
        </a>
      </div> -->
      <!-- Menu Button --> 
      <div class="sm-menu-btn cart-sm d-xl-none d-lg-none">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars-staggered"></i></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <!-- Shop -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Shop</a>
              </li>
              <!-- Accessories -->
              @livewire('small-menu-component')
              <!-- Computing -->
              <!-- <li class="nav-item dropdown">
                  <a href="shop_computing.html" class="desktop-item nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Computing
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Laptops</a>
                      <ul class="mega-links-canvas">                        
                        <li><a href="#" class="off-link">DELL Laptops</a></li>
                        <li><a href="#" class="off-link">HP Laptops</a></li>
                        <li><a href="#" class="off-link">Lenovo Laptops</a></li>
                        <li><a href="#" class="off-link">Asus Laptops</a></li>
                        <li><a href="#" class="off-link">Refurbished Laptops</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Desktop Computers</a>
                      <ul class="mega-links-canvas">
                        <li><a href="#" class="off-link">Flash Drives</a></li>
                        <li><a href="#" class="off-link">Memory Cards</a></li>
                        <li><a href="#" class="off-link">Memory Cards</a></li>
                        <li><a href="#" class="off-link">Solid State Devices SSD</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Printers & Scanners</a>
                      <ul class="mega-links-canvas">
                        <li><a href="#" class="off-link">Patch Panel</a></li>
                      </ul>
                    </li>
                  </ul>  
              </li> -->
              <!-- Electronics -->
              <!-- <li class="nav-item dropdown">
                  <a href="shop_electronics.html" class="desktop-item nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Electronics
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Cameras</a>
                      <ul class="mega-links-canvas">                        
                        <li><a href="#" class="off-link">DELL Laptops</a></li>
                        <li><a href="#" class="off-link">HP Laptops</a></li>
                        <li><a href="#" class="off-link">Lenovo Laptops</a></li>
                        <li><a href="#" class="off-link">Asus Laptops</a></li>
                        <li><a href="#" class="off-link">Refurbished Laptops</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Desktop Computers</a>
                      <ul class="mega-links-canvas">
                        <li><a href="#" class="off-link">Flash Drives</a></li>
                        <li><a href="#" class="off-link">Memory Cards</a></li>
                        <li><a href="#" class="off-link">Memory Cards</a></li>
                        <li><a href="#" class="off-link">Solid State Devices SSD</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Printers & Scanners</a>
                      <ul class="mega-links-canvas">
                        <li><a href="#" class="off-link">Patch Panel</a></li>
                      </ul>
                    </li>
                  </ul>  
              </li> -->
              <!-- Networking -->
              <!-- <li class="nav-item dropdown">
                  <a href="shop_networking.html" class="desktop-item nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Networking
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Cameras</a>
                      <ul class="mega-links-canvas">                        
                        <li><a href="#" class="off-link">DELL Laptops</a></li>
                        <li><a href="#" class="off-link">HP Laptops</a></li>
                        <li><a href="#" class="off-link">Lenovo Laptops</a></li>
                        <li><a href="#" class="off-link">Asus Laptops</a></li>
                        <li><a href="#" class="off-link">Refurbished Laptops</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Desktop Computers</a>
                      <ul class="mega-links-canvas">
                        <li><a href="#" class="off-link">Flash Drives</a></li>
                        <li><a href="#" class="off-link">Memory Cards</a></li>
                        <li><a href="#" class="off-link">Memory Cards</a></li>
                        <li><a href="#" class="off-link">Solid State Devices SSD</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Printers & Scanners</a>
                      <ul class="mega-links-canvas">
                        <li><a href="#" class="off-link">Patch Panel</a></li>
                      </ul>
                    </li>
                  </ul>  
              </li> -->
              <!-- Contact Us -->
              <li class="nav-item">
                <a class="nav-link" href="contact_us.html">Contact Us</a>
              </li>
            </ul>
            <!-- Search -->
            @livewire('small-header-search-component')
            
          </div>
        </div>
      </div>
      <!-- Logo -->
      <div class="logo-container">
          <a class="logo-brand" href="/">
            <i class="fa-solid fa-shop me-2"></i>
            <strong>My Store</strong>
          </a>
      </div>
      <!-- Search Bar -->
      @livewire('header-search-component')
      <!-- Log In & Cart  -->
      <div class="log-in-container"> 
        <div class="dropdown">
            @auth
                @if(Auth::user()->utype=='ADM')
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-symbols-outlined">person</span>{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <a class="dropdown-item hm-sgn-in" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                            </form>
                        </li>
                        
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-user"></i>Dashboard</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Orders</a></li>
                        <!-- <li><a class="dropdown-item" href="{{route('admin.categories')}}"><i class="fa-solid fa-basket-shopping"></i>Categories</a></li> -->
                        <li><a class="dropdown-item" href="wishlist.html"><i class="fa-solid fa-gift"></i>Saved Items</a></li>
                    </ul>
                @else
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-symbols-outlined">person</span>{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <a class="dropdown-item hm-sgn-in" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                            </form>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('user.dashboard')}}"><i class="fa-solid fa-user"></i>My Account</a></li>
                        <li><a class="dropdown-item" href="{{route('user.orders')}}"><i class="fa-solid fa-basket-shopping"></i>Orders</a></li>
                        <li><a class="dropdown-item" href="wishlist.html"><i class="fa-solid fa-gift"></i>Saved Items</a></li>
                    </ul>
                @endif
            @else

                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-symbols-outlined">person</span></i>Account
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item hm-sgn-in" href="{{route('login')}}">Sign In</a></li>
                    <li><a class="dropdown-item hm-sgn-in" href="{{route('register')}}">Register</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <!-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>My Account</a></li> -->
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-basket-shopping"></i>Orders</a></li>
                    @livewire('wishlist-icon-component')
                </ul>
            @endif
        </div>
        <div class="border-login"></div>
          @livewire('cart-icon-component')
        <!-- 
          <a href="cart.html">
            <i class="crt fa-solid fa-cart-shopping"></i>
            <sup>2</sup> Cart/Ksh0.00
          </a>
        -->
      </div>
      <!-- <div>
        <a href="cart.html" class="cart-sm d-xl-none d-lg-none d-md-none"><i class="fa-solid fa-cart-shopping mx-1"></i><sup>1</sup></a>
      </div> -->
    </div>
    @livewire('super-category-navigation-component')
             

  {{$slot}}

   <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="full">
            <div class="logo_footer">
              <h3>Contact Us</h3>
            </div>
            <br>
            <div class="information_footer">
              <p><strong>ADDRESS:</strong> Old Mutual, Moi Avenue, KEN</p>
              <p><strong>TELEPHONE:</strong> +2547 4554 8093</p>
              <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
              <p><strong>URL:</strong> www.mystore.co.ke</p>
            </div>            
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Quick Links</h3>                      
                    <ul>
                      <li><a href="#">HP Laptops</a></li>
                      <li><a href="#">Mobile Phones</a></li>
                      <li><a href="#">TP Link Equipment</a></li>
                      <li><a href="shop_accessories.html">Accesories</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget_menu">
                    <h3>Information</h3>
                    <ul>
                      <li><a href="#">General Terms and Conditions.</a></li>
                      <li><a href="#">Privacy and Security Policy.</a></li>
                      <li><a href="#">Delivery and Order Information.</a></li>
                      <li><a href="#">Return Policy</a></li>
                      <li><a href="aboutus.html">About Us</a></li>
                      <li><a href="#">My Account</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Copyright & Blog -->
  <div class="cpy_">
    <div class="quick-links">
      <ul>
        <li><a href="shop_networking.html">Networking Equipment</a></li>
        <li><a href="shop_accessories.html">Accesories</a></li>
        <li><a href="shop_computing.html">Computing Products </a></li>
        <li><a href="shop_electronics.html">Electronics Products </a></li>
      </ul>
    </div>   
    <div class="footer-img">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
    </div>   
    <p class="mx-auto">© 2023 All Rights Reserved.<br> My Store</p>
  </div>

    <!-- Js Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/checkout.js')}}"></script>
    <script src="{{asset('js/cart.js')}}"></script>
    @livewireScripts
  </body>
</html>

